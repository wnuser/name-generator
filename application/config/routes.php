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
$route['default_controller'] = 'welcome';

$route['baby-name-generator']      = 'Babyname';
$route['band-name-generator']      = 'Bandname';
$route['blog-name-generator']      = 'Blogname';
$route['business-name-generator']  = 'Businessname';
$route['cat-name-generator']       = 'Catname';
$route['character-name-generator'] = 'Charactername';
$route['city-name-generator']      = 'Cityname';
$route['country-name-generator']   = 'Countryname';
$route['couple-name-generator']    = 'Couplename';
$route['fantasy-name-generator']   = 'Fantasyname';
$route['female-name-generator']    = 'femalename';
$route['first-name-generator']     = 'Firstname';
$route['food-name-generator']      = 'Foodname';
$route['game-name-generator']      = 'Gamingname';
$route['house-name-generator']     = 'HousenameGenerater';
$route['last-name-generator']      = 'Lastname';
$route['male-name-generator']      = 'Malename';
$route['middle-name-generator']    = 'Middlename';
$route['nick-name-generator']      = 'Nickname';
$route['pen-name-generator']       = 'Penname';
$route['pirate-name-generator']    = 'Piratename';
$route['random-name-generator']     = 'Quickname';
$route['rap-name-generator']    = 'Rappername';
$route['review-name-generator']    = 'Reviewname';
$route['street-name-generator']    = 'Streetname';
$route['team-name-generator']      = 'Teamname';
$route['title-name-generator']     =  'Titlename';
$route['japanese-name-generator']      = 'Twinname';
$route['user-name-generator']      = 'Usersname';
$route['villain-name-generator']   = 'Villainname';
$route['superhero-name-generator']      = 'Heroname';




$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
