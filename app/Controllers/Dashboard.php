<?php namespace App\Controllers;

use App\Models\TeamModel;
use App\Models\CategoryModel;
use App\Models\CoursesModel;
use App\Models\StaffModel;
use App\Models\BlogModel;



class Dashboard extends BaseController{    
   
    // home page route 
    public function index(){

         $data['passLink'] = "dashboard";
         $data['userData'] = session()->get('userData');


         $TeamModel = new TeamModel();
		$BlogModel = new BlogModel();
		$CoursesModel = new CoursesModel();
		$StaffModel = new StaffModel();

		$data['total_team'] = $TeamModel->findAll();
		$data['total_blogPost'] = $BlogModel->findAll();
		$data['total_courses'] = $CoursesModel->findAll();
		$data['total_staff'] = $StaffModel->findAll();
         
        return view("dashboard/index", $data);
    }


}