<?php

namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model
{
    protected $table = 'coursestable';
    protected $primaryKey = 'courseId';
    protected $allowedFields = [
        'courseTitle',
        'courseImage',
        'aboutCourse',
        'courseCategory',
        'instructorPic',
        'numOfStudents',
        'instructorName'
    ];




    
}
