<?php

namespace App\Controllers;


use App\Models\CategoryModel;
use App\Models\CoursesModel;
use App\Models\StaffModel;


class CoursesController extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }
    //admin dashboard for managing blog
    public function index()
    {
        $data = [];
         $data['passLink'] = "courses";
        $data['userData'] = session()->get('userData');
        
        $CoursesModel = new CoursesModel();
        $data['aall_courses'] = $CoursesModel->findAll();

        $CategoryModel = new CategoryModel();
        $data['all_categories'] = $CategoryModel->findAll();

        $StaffModel = new StaffModel();
        $data['all_staff'] = $StaffModel->findAll();

        // validata the form if submitted 
        $rules = [
            'courseTitle' => [
                'rules' => "required|min_length[6]|max_length[50]",
                'label' => "Course title",
                'errors' => [
                    'required' => 'This title field is a must',
                    'min_length'  => 'The course is too short',
                    'max_length' => 'Title too long'
                ]
            ],

            'courseImage' => [
                'rules' => 'uploaded[courseImage]|max_size[courseImage,6024]|is_image[courseImage]|mime_in[courseImage,image/jpeg,image/jpg,image/png]',
                'label' => 'Course Image',
                'errors' => [
                    'required' => 'This field must be a valid file',
                    'max_size'  => 'The file is too large',
                    'is_image' => 'Only image files is allowed',
                    'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                ]
            ],

            'aboutCourse' => [
                'rules' => "required|min_length[200]|max_length[5000]",
                'label' => "Blog content",
                'errors' => [
                    'required' => 'This blog content field is a must',
                    'min_length'  => 'The content is too short',
                    'max_length' => 'The content too long'
                ]
            ],

             'courseCategory' => [
                'rules' => "required|min_length[6]|max_length[50]",
                'label' => "Post courseCategory ",
                'errors' => [
                    'required' => 'This courseCategory field is a must',
                    'min_length'  => 'The courseCategory is too short',
                    'max_length' => 'courseCategory too long'
                ]
            ],


            'instructorPic' => [
                'rules' => "required",
                'label' => "Course Instructor ",
                'errors' => [
                    'required' => 'Please Choose the course Instructor'
                ]
            ],

            'instructorName' => [
                'rules' => "required",
                'label' => "Course Instructor Name",
                'errors' => [
                    'required' => 'Please Choose the course Instructor'
                ]
            ],

            'numOfStudents' => [
                'rules' => "required",
                'label' => "Number of Students ",
                'errors' => [
                    'required' => 'The approximate number of students doing this course is required',
                ]
            ]
        ];

        // a post request is made
        if($this->request->getMethod() == "post")
        {
            // check if form is validated 
            if($this->validate($rules))
            {
                $formData = []; // array of data to be saved initialized 
                $courseImage_newname = "";
                // process and upload the image here 
                 if($this->request->getFile('courseImage'))
                 {
                    $courseImage = $this->request->getFile('courseImage');
                    $courseImage_newname = $courseImage->getRandomName(); // random image name 
                     if(!$courseImage->move('public_assets/img/cource/', $courseImage_newname))
                     {
                        return redirect()->to('/dashboard/courses')->with('error', 'Error in uploading the the Course image');
                        exit();
                     }    
                  }

                  // populate array to be save - say get form data to be save
                  $formData['numOfStudents'] = $this->request->getPost('numOfStudents');
                  $formData['instructorPic'] = $this->request->getPost('instructorPic');
                  $formData['courseTitle'] = $this->request->getPost('courseTitle');
                  $formData['courseImage'] = $courseImage_newname;
                  $formData['aboutCourse'] = $this->request->getPost('aboutCourse');
                  $formData['courseCategory'] = $this->request->getPost('courseCategory');
                  $formData['instructorName'] = $this->request->getPost('instructorName');

                  if($CoursesModel->save($formData))
                  {
                        return redirect()->to('/dashboard/courses')->with('success', 'You successfully published a courses post');
                   }

            }else{
                $data['validation'] = $this->validator;
            }
        }

       return view("dashboard/courses", $data);
    }


    // ================= EDIT courses METHOD ==============

    public function edit($id)
    {
         if(empty($id) || !is_numeric($id))
         {
            return redirect()->to('/dashboard/courses')->with('error', 'Unknown Error');
            exit();
         }

        $data = [];
         $data['passLink'] = "courses";
        $data['userData'] = session()->get('userData');
        
        $CoursesModel = new CoursesModel();
        $data['courses_data'] = $CoursesModel->find($id);

        if(empty($data['courses_data'])){
        return redirect()->to('/dashboard/courses')->with('error', 'Data not found');
        exit();

      }

        $CategoryModel = new CategoryModel();
        $data['all_categories'] = $CategoryModel->findAll();

        // validata the form if submitted 
                // validata the form if submitted 
        $rules = [
            'courseTitle' => [
                'rules' => "required|min_length[6]|max_length[50]",
                'label' => "Course title",
                'errors' => [
                    'required' => 'This title field is a must',
                    'min_length'  => 'The course is too short',
                    'max_length' => 'Title too long'
                ]
            ],


            'aboutCourse' => [
                'rules' => "required|min_length[200]|max_length[5000]",
                'label' => "Blog content",
                'errors' => [
                    'required' => 'This blog content field is a must',
                    'min_length'  => 'The content is too short',
                    'max_length' => 'The content too long'
                ]
            ],

             'courseCategory' => [
                'rules' => "required|min_length[6]|max_length[50]",
                'label' => "Post courseCategory ",
                'errors' => [
                    'required' => 'This courseCategory field is a must',
                    'min_length'  => 'The courseCategory is too short',
                    'max_length' => 'courseCategory too long'
                ]
            ],


            'instructorPic' => [
                'rules' => "required",
                'label' => "Course Instructor Picture Name ",
                'errors' => [
                    'required' => 'Please Choose the course Instructor whose picture will appeare'
                ]
            ],

            'instructorName' => [
                'rules' => "required",
                'label' => "Course Instructor Name",
                'errors' => [
                    'required' => 'Please Choose the course Instructor'
                ]
            ],

            'numOfStudents' => [
                'rules' => "required",
                'label' => "Number of Students ",
                'errors' => [
                    'required' => 'The approximate number of students doing this course is required',
                ]
            ]
        ];

        $update_courseImage = false;

        if($this->request->getFile('courseImage') && $this->request->getFile('courseImage')->isValid())
         {
               $rules['courseImage'] = [
                'rules' => 'uploaded[courseImage]|max_size[courseImage,6024]|is_image[courseImage]|mime_in[courseImage,image/jpeg,image/jpg,image/png]',
                'label' => 'Course Image',
                'errors' => [
                    'required' => 'This field must be a valid file',
                    'max_size'  => 'The file is too large',
                    'is_image' => 'Only image files is allowed',
                    'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                ]
            ];

            $update_courseImage = true;

          }
        // a post request is made
        if($this->request->getMethod() == "post")
        {
            // check if form is validated 
            if($this->validate($rules))
            {
                $formData = []; // array of data to be saved initialized 

                // process and upload the image here  if it is meant
                 if($update_courseImage)
                 {
                    $courseImage = $this->request->getFile('courseImage');
                    $formData['courseImage'] = $courseImage->getRandomName(); // random image name 
                     if(!$courseImage->move('public_assets/img/cource/', $formData['courseImage']))
                     {
                        return redirect()->to('/dashboard/courses')->with('error', 'Error in uploading the the Course image');
                        exit();
                     }    
                  }

                  
                  // populate array to be save - say get form data to be save
                  $formData['numOfStudents'] = $this->request->getPost('numOfStudents');
                  $formData['instructorPic'] = $this->request->getPost('instructorPic');
                  $formData['courseTitle'] = $this->request->getPost('courseTitle');
                  $formData['aboutCourse'] = $this->request->getPost('aboutCourse');
                  $formData['courseCategory'] = $this->request->getPost('courseCategory');
                  $formData['instructorName'] = $this->request->getPost('instructorName');
                  

                  if($CoursesModel->update($id, $formData))
                  {
                        return redirect()->to('/dashboard/courses/')->with('success', 'You successfully published a courses post');
                   }

            }else{
                $data['validation'] = $this->validator;
            }
        }

       return view("dashboard/edit_courses", $data);
    }


    public function delete($id){
      if(!empty($id) && !is_numeric($id)){
        return redirect()->to('/dashboard/courses/')->with('error', 'Invalid perimeter');
      }

      $db = new CoursesModel();
      if($db->find($id) && $db->delete($id)){
        return redirect()->to('/dashboard/courses/')->with('success', 'courses post deleted successfully');
      }else{
        return redirect()->to('/dashboard/courses/')->with('error', 'Failed to delete courses');
      }
    }

}
