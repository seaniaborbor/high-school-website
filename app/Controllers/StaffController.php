<?php namespace App\Controllers;

use App\Models\StaffModel;


class StaffController extends BaseController{

    public function __construct()
    {
        helper(['form', 'url']);
    }
   
    public function index(){

        $data = [];

        $data['passLink'] = "staff";
        $data['userData'] = session()->get('userData');

        $StaffModel = new StaffModel();
        $data['all_staff'] = $StaffModel->findAll();


        

        // set the validation rules 
        $validationRules = [
            'fullName' => 
                [
                    'rules' => 'required|is_unique[staff.fullName]|min_length[6]|max_length[30]',
                    'label' => 'Staff Member full name',
                    'errors' => [
                        'required' => 'Please provide the Staff member name in full',
                        'is_unique' => 'This name is already entered, try another please.',
                        'min_length' => 'The name is too short',
                        'max_length' => 'The name is too long - 30 characters allowed only',
                    ]
                ],

                'email' => [
                    'rules'=>'required|is_unique[Staff.email]|min_length[11]',
                    'label' => 'Staff Member Email',
                    'errors' => [
                        'required' =>'Oh, reall?? This field is a must!',
                        'min_length' =>'The user email cannot be less than 10 characters'
                    ]
                ],

              'profileImg' => [
                    'rules' => 'uploaded[profileImg]|max_size[profileImg,6024]|is_image[profileImg]|mime_in[profileImg,image/jpeg,image/jpg,image/png]',
                    'label' => 'Profile Image',
                    'errors' => [
                        'required' => 'This field must be a valid file',
                        'max_size'  => 'The file is too large',
                        'is_image' => 'Only image files is allowed',
                        'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                    ]
                ],

                'qualification' => [
                    'rules'=>'required|min_length[6]',
                    'label' => 'Qualification or Career',
                    'errors' => [
                        'required' =>'The Member Qualification  is required ',
                        'min_length' =>'The Staff member qualification cannot be less than 6 characters'
                    ]
                ],

                 'profileSummary' => [
                    'rules'=>'required|min_length[50]|max_length[225]',
                    'label' => 'Qualification or Career',
                    'errors' => [
                        'required' =>'The Member Qualification  is required ',
                        'min_length' =>'The Staff member qualification cannot be less than 50 characters',
                        'max_length' =>'The Staff member qualification cannot be more than 225 characters',
                    ]
                ],

                'position' => [
                    'rules'=>'required',
                    'label' => 'Link to Staff member profile',
                    'errors' => [
                        'required' =>'It is a must that the staff has a position indicated'
                    ]
                ], 

               'posCategory' => [
                  'rules'=>'required',
                  'label' => 'Staff Qualification',
                  'errors' => [
                      'required' =>'This is required so that we can know the working staff category'
                  ]
              ]
        ];

        if($this->request->getMethod() == "post")
        {
            $formData = [];

            // check if the form submitted validated 
            if($this->validate($validationRules))
            {

              $profileImg_newname = "";
                // process and upload the image here 
                 if($this->request->getFile('profileImg'))
                 {
                    $profileImg = $this->request->getFile('profileImg');
                    $profileImg_newname = $profileImg->getRandomName(); // random image name 
                     if(!$profileImg->move('public_assets/img/staff/', $profileImg_newname))
                     {
                        return redirect()->to('/dashboard/blog')->with('error', 'Error in uploading the the feature image');
                        exit();
                     }    
                  }
              
              // collect the form data if everything is ok
                $formData['fullName'] = $this->request->getPost('fullName');
                $formData['email'] = $this->request->getPost('email');
                $formData['posCategory'] = $this->request->getPost('posCategory');
                $formData['profession'] = $this->request->getPost('profession');
                $formData['position'] = $this->request->getPost('position');
                $formData['profileSummary'] = $this->request->getPost('profileSummary');
                $formData['qualification'] = $this->request->getPost('qualification');
                $formData['profileImg'] = $profileImg_newname;

                // save the data and exit to the dashboard
                if($StaffModel->save($formData)){
                        return redirect()->to('/dashboard/staff')->with('success', 'You successfully add a new staff profile');
                }
            }
            else
            {
                $data['validation'] = $this->validator;
            }
        }

      return view('dashboard/staff', $data);
    }


    //============== UPDATE Staff MEMBER PROFILE ================

    public function edit($id){
       // check if the id is null
        if(empty($id) || !is_numeric($id)){
            return redirect()->to('/dashboard/staff')->with('error', 'Unknown Error');
            exit();
        }

      $data = [];

      $data['passLink'] = "staff";
        $data['userData'] = session()->get('userData');

        if(!($id == $data['userData']['id'] || $data['userData']['userRole'] == 'SUDO')){
          return redirect()->to('/dashboard/Staff')->with('error', 'You do not have the previllage to edit another Staff member profile.');
            exit();
        }

      $StaffModel = new StaffModel();
      $data['staff_data'] = $StaffModel->find($id);
     

      // verify that the data exists
       if(empty($data['staff_data'])){
            return redirect()->to('/dashboard/staff')->with('error', 'Unknown Error');
            exit();
      }


// set the validation rules 
        $validationRules = [
            'fullName' => 
                [
                    'rules' => 'required|min_length[6]|max_length[30]',
                    'label' => 'Staff Member full name',
                    'errors' => [
                        'required' => 'Please provide the Staff member name in full',
                        'min_length' => 'The name is too short',
                        'max_length' => 'The name is too long - 30 characters allowed only',
                    ]
                ],

                'email' => [
                    'rules'=>'required|min_length[11]',
                    'label' => 'Staff Member Email',
                    'errors' => [
                        'required' =>'Oh, reall?? This field is a must!',
                        'min_length' =>'The user email cannot be less than 10 characters'
                    ]
                ],

                'qualification' => [
                    'rules'=>'required|min_length[6]',
                    'label' => 'Qualification or Career',
                    'errors' => [
                        'required' =>'The Member Qualification  is required ',
                        'min_length' =>'The Staff member qualification cannot be less than 6 characters'
                    ]
                ],

                 'profileSummary' => [
                    'rules'=>'required|min_length[50]|max_length[225]',
                    'label' => 'Qualification or Career',
                    'errors' => [
                        'required' =>'The Member Qualification  is required ',
                        'min_length' =>'The Staff member qualification cannot be less than 50 characters',
                        'max_length' =>'The Staff member qualification cannot be more than 225 characters',
                    ]
                ],

                'position' => [
                    'rules'=>'required',
                    'label' => 'Link to Staff member profile',
                    'errors' => [
                        'required' =>'It is a must that the staff has a position indicated'
                    ]
                ], 

               'posCategory' => [
                  'rules'=>'required',
                  'label' => 'Staff Qualification',
                  'errors' => [
                      'required' =>'This is required so that we can know the working staff category'
                  ]
              ]
        ];

      // there is a request to update the profile picture
      $update_profileImg = false;

      if($this->request->getFile('profileImg') && $this->request->getFile('profileImg')->isValid())
        {
            $validationRules['profileImg'] = [
                  'rules' => 'uploaded[profileImg]|max_size[profileImg,6024]|is_image[profileImg]|mime_in[profileImg,image/jpeg,image/jpg,image/png]',
                  'label' => 'Profile Image',
                  'errors' => [
                      'required' => 'This field must be a valid file',
                      'max_size'  => 'The file is too large',
                      'is_image' => 'Only image files is allowed',
                      'mime_in' => 'Only of type jpeg, jpg & pngs are allowed'
                  ]
              ];

            $update_profileImg = true;
        }


      if($this->request->getMethod() == "post")
      {

          // check if the form submitted validated 
          if($this->validate($validationRules))
          {
                       
              // process and upload the image here 
               if($update_profileImg)
               {
                  $profileImg = $this->request->getFile('profileImg');
                  $profileImg_newname = $profileImg->getRandomName(); // random image name 
                  $data['Staff_data']['profileImg'] = $profileImg_newname;

                   if(!$profileImg->move('public_assets/img/staff/', $profileImg_newname))
                   {
                      return redirect()->to('/dashboard/staff')->with('error', 'Error in uploading the the profile image');
                      exit();
                   }    
                }
            
           // collect the form data if everything is ok
                $data['staff_data']['fullName'] = $this->request->getPost('fullName');
                $data['staff_data']['email'] = $this->request->getPost('email');
                $data['staff_data']['posCategory'] = $this->request->getPost('posCategory');
                $data['staff_data']['profession'] = $this->request->getPost('profession');
                $data['staff_data']['position'] = $this->request->getPost('position');
                $data['staff_data']['profileSummary'] = $this->request->getPost('profileSummary');
                $data['staff_data']['qualification'] = $this->request->getPost('qualification');
              
              // save the data and exit to the dashboard
              if($StaffModel->update($id, $data['staff_data'])){
                      return redirect()->to('/dashboard/staff')->with('success', 'You updated a staff profile successfully');
              }

          }
          else
          {
              $data['validation'] = $this->validator;
          }
      }

    return view('dashboard/edit_staff_profile', $data);
  }



    public function delete($id){
      if(!empty($id) && !is_numeric($id)){
        return redirect()->to('/dashboard/staff/')->with('error', 'Invalid perimeter');
      }

      $db = new StaffModel();
      if($db->find($id) && $db->delete($id)){
        return redirect()->to('/dashboard/staff/')->with('success', 'Staff  Profile deleted successfully');
      }else{
        return redirect()->to('/dashboard/staff/')->with('error', 'Failed to delete staff profile');
      }
    }



}