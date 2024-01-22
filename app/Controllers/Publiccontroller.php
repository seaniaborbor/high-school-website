<?php namespace App\Controllers;

use App\Models\TestimonialsModel;
use App\Models\CoursesModel;
use App\Models\BlogModel;
use App\Models\StaffModel;
use App\Models\CommentModel;


/* title
description
image
*/

class Publiccontroller extends BaseController{    
   public function __construct()
    {
        helper(['form', 'url']);
    }

    // HOME PAGE METHOD 
    public function index(){
        $data = [];


        $BlogModel = new BlogModel();
        $TestimonialsModel = new TestimonialsModel();
        $CoursesModel = new CoursesModel();

        $data['latest_blog_post'] = $BlogModel->recent_blogs();
        $data['testimonials_rescent'] = $TestimonialsModel->orderBy('id', 'desc')->limit(10)->get()->getResult();
        $data['few_courses'] = $CoursesModel->orderBy('courseId', 'desc')->limit(3)->get()->getResult();

        // meta data for the home page
        $data['title'] = 'Christiana Bedell Preparatory School';
        $data['description'] = 'Discover excellence in education at Christiana Bedell Preparatory School. Nurturing young minds with a commitment to academic brilliance, our dynamic teaching staff and innovative programs create an environment where students thrive. Explore our website for a glimpse into a legacy of quality education and a vision for a brighter future';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view("public/index", $data);
    }


    // ALL BLOG POSTS METHOD 
    public function news()
    {

        $data = [];

        $BlogModel = new BlogModel();        
        $TestimonialsModel = new TestimonialsModel();
        $CoursesModel = new CoursesModel();

          $data = [
            'all_posts' => $BlogModel
                ->select('blog.featureImg as featureImg, blog.createdAt as createdAt, blog.category as category, blog.postbody as postbody, blog.title as blog_title, blog.id as blog_id, blog.title,  team.id as team_id,  COUNT(blog_comments.postId) as comment_count')
                ->join('blog_comments', 'blog_comments.postId = blog.id', 'left')
                ->join('team', 'team.id = blog.createdBy')
                ->orderBy('blog.id','desc')
                ->groupBy('blog.id, team.id')
                ->paginate(5),
            'pager' => $BlogModel->pager,
        ];


        $data['latest_blog_post'] = $BlogModel->recent_blogs();
        $data['testimonials_rescent'] = $TestimonialsModel->orderBy('id', 'desc')->limit(10)->get()->getResult();
        $data['few_courses'] = $CoursesModel->orderBy('courseId', 'desc')->limit(3)->get()->getResult();

        // meta data for the home page
        $data['title'] = 'christianabedell.com|blog';
        $data['description'] = 'Delve into articles that share our passion for education, holistic development, and the latest trends in learning.';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view('public/news', $data);
    }


    // BLOG DETAILS - SHOW/READ A BLOG 
    public function news_deatils($id)
    {
        $data = [];
        

        // get all team members 
        $BlogModel = new BlogModel();
        $data['blog_to_read'] = $BlogModel->blog_post_to_read($id); // get the blog to be read

        if(!$data['blog_to_read'])
        {
            return redirect()->to('/')->with('error', 'The document you requested couldnot be found');
        }
        $data['recent_blogs'] = $BlogModel->groupBy('id', 'desc')->findAll(4); // find the latest 4 recent posts
        $data['post_per_category'] = $BlogModel->post_per_category(); // get all the categories with num of post

        $CommentModel = new CommentModel();
        $data['post_comments'] = $CommentModel->where('blog_comments.postId', $id)->findAll();



        // if an instance the readerposts a comment, get validation rules that must be applied
         $validationRules = [

            'name' => 
                [
                    'rules' => 'required',
                    'label' => 'Your Name',
                    'errors' => [
                        'required' => 'Please enter a name reader will see'
                    ]
                ],

            'email' => [
                'rules'=>'required|max_length[50]',
                'label' => 'Your email',
                'errors' => [
                    'required' =>'Give your email which administrator of this platform may contact you through',
                    'max_length' =>'The email is too long'
                ]
            ],

             'comment' => [
                'rules'=>'required|min_length[50]|max_length[500]',
                'label' => 'Your comments',
                'errors' => [
                    'required' =>'Provide your comment. It is required',
                    'min_length' =>'Your comment is too short. It should be 50 characters minimum',
                    'max_length' =>'Comment is too long. It should be 500 characters maxamium',
                ]
            ]
        ];

        // handle posted comments if received

        if($this->request->getMethod() == 'post'){
            if($this->validate($validationRules)){

                $commentData['name'] = htmlspecialchars($this->request->getPost('name'));
                $commentData['email'] = htmlspecialchars($this->request->getPost('email'));
                $commentData['comment'] = htmlspecialchars($this->request->getPost('comment'));
                $commentData['postId'] = $this->request->getPost('postId');

                if($CommentModel->save($commentData)){
                    return redirect()->to('/news-deatils/'.$id)->with('success', 'Your comments were received successfully');
                }else{
                    return redirect()->to('/news-deatils/'.$id)->with('error', 'Error in receiving your comments');
                }

            }else{
                $data['validation'] = $this->validator;
            }
        }


        // meta data for the home page
        $data['title'] = 'christianabedell.com|blog';
        $data['description'] = 'Delve into articles that share our passion for education, holistic development, and the latest trends in learning.';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view('public/news_details', $data);
    }


   
   // COURSES PAGE METHOD 
    public function courses(){
        $data = [];


        $BlogModel = new BlogModel();
        $TestimonialsModel = new TestimonialsModel();
        $CoursesModel = new CoursesModel();

        $data['latest_blog_post'] = $BlogModel->recent_blogs();
        $data['testimonials_rescent'] = $TestimonialsModel->orderBy('id', 'desc')->limit(10)->get()->getResult();
        $data['all_courses'] = $CoursesModel->orderBy('courseId', 'desc')->limit(6)->get()->getResult();


           // meta data for the home page
        $data['title'] = 'christianabedell.com|courses';
        $data['description'] = 'Explore a range of subjects designed to inspire a love for learning and prepare students for a dynamic future.';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view("public/courses", $data);
    }





    // read about course method 
    public function courses_details($id)
    {
        $data = [];
        

        $BlogModel = new BlogModel();
        $CoursesModel = new CoursesModel();
        $data['course_details'] = $CoursesModel->find($id); // get the blog to be read

        if(!$data['course_details'])
        {
            return redirect()->to('/courses')->with('error', 'The document you requested couldnot be found');
        }
        $data['recent_blogs'] = $BlogModel->groupBy('id', 'desc')->findAll(4); // find the latest 4 recent posts
        // echo "<br><br><br><br>";
        // print_r($data['course_details']);

        // meta data for the home page
        $data['title'] = $data['course_details']['courseTitle'];
        $data['description'] = substr($data['course_details']['aboutCourse'], 2,55).'..';
        $data['image'] = base_url('public_assets/img/cource/').$data['course_details']['courseImage'];

        return view('public/course_detail', $data);
    }



// STAFF METHOD 
    public function staff(){
        $data = [];


        $StaffModel = new StaffModel();
       

        $data['administrative_staff'] = $StaffModel->where('posCAtegory', 'Administrative')->orderBy('id', 'desc')->findAll();
        $data['supportive_staff'] = $StaffModel->where('posCAtegory', 'Supportive')->orderBy('id', 'desc')->findAll();
        $data['teaching_staff'] = $StaffModel->where('posCAtegory', 'Teaching')->orderBy('id', 'desc')->findAll();

           // meta data for the home page
        $data['title'] = 'christianabedell.com|staff';
        $data['description'] = 'Meet the dedicated and passionate educators at Christiana Bedell Preparatory School.';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view("public/staff", $data);
    }


    // DAHN PROFILE METHOD 
    public function dahn_profile(){
        $data = [];


        $StaffModel = new StaffModel();
        $data['administrative_staff'] = $StaffModel->where('posCAtegory', 'Administrative')->orderBy('id', 'desc')->findAll();

        // page meta data 
        $data['title'] = 'christianabedell.com|Dahn Profile';
        $data['description'] = 'Reverend Comfort Bedell Marshall, an esteemed Liberian educator and community leader, has dedicated her life to advancing education and community development. As the founder of Christiana Bedell Preparatory School ';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view("public/dahn_profile", $data);
    }


      // ABOUT/HISTORY  METHOD 
    public function about(){
        $data = [];


        $StaffModel = new StaffModel();
        $data['administrative_staff'] = $StaffModel->where('posCAtegory', 'Administrative')->orderBy('id', 'desc')->findAll();


         $data['title'] = 'christianabedell.com|About';
        $data['description'] = 'Our institution is dedicated to nurturing young minds, fostering academic brilliance, and instilling values that go beyond the classroom.  ';
        $data['image'] = "<?=base_url('public_assets/img/aboutus-home.jpg')";

        return view("public/about", $data);
    }



}