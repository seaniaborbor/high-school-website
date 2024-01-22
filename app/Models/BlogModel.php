<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'title',
        'featureImg',
        'postbody',
        'category',
        'createdBy'
    ];

// loads all the six recent blog post  

 public function recent_blogs()
{
    $query = $this->db->table('blog')
        ->select('blog.*, blog.id as blg_id, team.*, COUNT(blog_comments.postId) as comment_count')
        ->join('team', 'team.id = blog.createdBy')
        ->join('blog_comments', 'blog_comments.postId = blog.id', 'left')
        ->groupBy('blog.id') // Group by the blog post id
        ->orderBy('blog.id', 'desc')
        ->limit(3)
        ->get()
        ->getResult();

    return $query;
}


// loads all the six recent blog post  
public function all_blogs()
  {
      $query = $this->db->table('blog')
              ->select('*, blog.id as blogId, blog.createdAt as posted_date')
              ->join('team', 'team.email = blog.createdBy')
              ->orderBy('blog.id', 'desc')
              ->limit(6)
              ->get()
              ->getResult();
              return $query;
  }


// show the all the categories of and the number of posts 
public function post_per_category()
   {
      $query = $this->db->table('blog')
              ->select('count(blog.category) as total, blog.category')
              ->groupBy('blog.category', 'desc')
              ->get()->getResult();
              return $query;
    }

// this select a blog article along with the author who wrote it 
public function blog_post_to_read($id)
    {
            return $this->db->table('blog')
                    ->select("team.*, blog.*, blog.id as blg_id")
                    ->where('blog.id', $id)
                    ->join('team', 'blog.createdBy = team.id')
                    ->get()->getResult();
            
    }


    
}
