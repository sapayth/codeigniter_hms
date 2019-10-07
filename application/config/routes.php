<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController';
$route['admin'] = 'LoginController';
$route['login/check'] = 'LoginController/check';
$route['admin/dashboard'] = 'AdminController';
$route['admin/users'] = 'UsersController';
$route['admin/users/create'] = 'UsersController/create';
$route['admin/users/edit'] = 'UsersController/update_user';
$route['admin/users/delete'] = 'UsersController/delete_user';
$route['admin/rooms'] = 'RoomsController';
$route['admin/rooms/all'] = 'RoomsController/show_all_rooms';
$route['admin/rooms/accommodation/create'] = 'RoomsController/create_accommodation';
$route['admin/rooms/create'] = 'RoomsController/create_room';
$route['admin/rooms/save_room'] = 'RoomsController/save_room';
$route['admin/rooms/details'] = 'RoomsController/details';
$route['admin/rooms/edit'] = 'RoomsController/edit';
$route['admin/rooms/delete'] = 'RoomsController/delete';
$route['admin/rooms/update'] = 'RoomsController/update';
$route['admin/rooms/save'] = 'RoomsController/save';
$route['admin/bookings'] = 'BookingsController';
$route['admin/bookings/create'] = 'BookingsController/book_view';
$route['admin/bookings/book_room'] = 'BookingsController/book_room';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
