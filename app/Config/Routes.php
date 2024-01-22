<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Publiccontroller');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Publiccontroller::index');
$routes->get('/auth', 'AuthController::index');
$routes->post('/auth', 'AuthController::index');
$routes->get('/logout', 'AuthController::logout');
$routes->set404Override('App\Controllers\Errors::show404');


$routes->get('/news-deatils/(:any)', 'Publiccontroller::news_deatils/$1');
$routes->post('/news-deatils/(:any)', 'Publiccontroller::news_deatils/$1');
$routes->get('/news', 'Publiccontroller::news');
$routes->get('/news/(:any)', 'Publiccontroller::news/$1');


$routes->get('courses-deatils/(:any)', 'Publiccontroller::courses_details/$1');
$routes->get('/courses', 'Publiccontroller::courses');

$routes->get('/staff', 'Publiccontroller::staff');
$routes->get('/dahn_profile', 'Publiccontroller::dahn_profile');
$routes->get('/about', 'Publiccontroller::about');



// ========== ADMIN ACCESS ONLY ==========

$routes->group("", ['filter'=>'agentProtector'], function($routes){

// dashboard home 
$routes->get('/dashboard/', 'Dashboard::index');


// category routes 
$routes->get('/dashboard/category', 'CategoryController::index');
$routes->post('/dashboard/category', 'CategoryController::index');

// blog routes
$routes->get('/dashboard/blog', 'BlogController::index');
$routes->post('/dashboard/blog', 'BlogController::index');
$routes->get('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->post('/dashboard/edit/blog/(:any)', 'BlogController::edit/$1');
$routes->get('/dashboard/delete/blog/(:any)', 'BlogController::delete/$1');



// blog routes
$routes->get('/dashboard/courses', 'CoursesController::index');
$routes->post('/dashboard/courses', 'CoursesController::index');
$routes->get('/dashboard/edit/courses/(:any)', 'CoursesController::edit/$1');
$routes->post('/dashboard/edit/courses/(:any)', 'CoursesController::edit/$1');
$routes->get('/dashboard/delete/courses/(:any)', 'CoursesController::delete/$1');


// team members routes
$routes->get('/dashboard/team', 'TeamMemberController::index');
$routes->post('/dashboard/team', 'TeamMemberController::index');
$routes->get('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');
$routes->post('/dashboard/edit/team/(:any)', 'TeamMemberController::edit/$1');



//StaffController
$routes->get('/dashboard/staff', 'StaffController::index');
$routes->post('/dashboard/staff', 'StaffController::index');
$routes->get('/dashboard/edit/staff/(:any)', 'StaffController::edit/$1');
$routes->post('/dashboard/edit/staff/(:any)', 'StaffController::edit/$1');
$routes->get('/dashboard/delete/staff/(:any)', 'StaffController::delete/$1');



// testimonials routes
$routes->get('/dashboard/testimonials', 'TestimonialsController::index');
$routes->post('/dashboard/testimonials', 'TestimonialsController::index');
$routes->get('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->post('/dashboard/edit/testimonials/(:any)', 'TestimonialsController::edit/$1');
$routes->get('/dashboard/delete/testimonials/(:any)', 'TestimonialsController::delete/$1');




$routes->get('/category/(:any)', 'Publiccontroller::category_search/$1');


//4212935681 

});
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
