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
$route['default_controller'] = 'MainController/default_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// user routes
$route['main'] ='MainController/default_page';
$route['datasets'] ='MainController/dataset_page';
$route['about'] ='MainController/about_page';
$route['publication'] ='MainController/publication';
$route['inventory'] ='MainController/inventory';
$route['contact'] ='MainController/contact';

$route['map'] ='MapController/map_page';
$route['category'] ='MapController/category_map';
$route['manage_popup'] ='MapController/manage_popup';
$route['manage_style'] ='MapController/manage_style';
$route['update_summary'] ='MapController/update_summary';
$route['map_download'] ='MapController/map_download';





$route['report_page'] ='ReportController/report_page';
$route['report_manage'] ='ReportController/report_manage';
$route['report/delete'] = 'ReportController/delete_data';
$route['map_reports_table'] ='ReportController/map_reports_table';
$route['map_reports'] ='ReportController/map_reports';

// Admin routes

$route['admin'] = 'Admin/LoginController';

$route['table_create'] = 'Admin/TableController/create_table';
$route['dashboard'] = 'Admin/CategoriesController';
$route['data_tables'] = 'Admin/CategoriesController/data_tables';
//$route['csv_upload'] = 'Admin/CategoriesController/csv_upload';
$route['edit'] = 'Admin/CategoriesController/edit';
$route['create_col'] = 'Admin/CategoriesController/create_col';
$route['create_categories_tbl'] = 'Admin/CategoriesController/create_categories_tbl';
$route['create_categories'] = 'Admin/CategoriesController/create_categories';
$route['view_cat_tables'] = 'Admin/CategoriesController/view_cat_tables';
$route['categories_tbl'] = 'Admin/CategoriesController/categories_tbl';
$route['edit_categories'] = 'Admin/CategoriesController/edit_categories';
$route['drop_cat_table'] = 'Admin/CategoriesController/drop_cat_table';
$route['delete_data'] = 'Admin/CategoriesController/delete_data';
$route['csv_data_tbl'] = 'Admin/CategoriesController/csv_data_tbl';

$route['proj/delete_data'] = 'Admin/ProjectController/delete_data';
$route['proj/edit_proj'] = 'Admin/ProjectController/edit_proj';
$route['add_proj'] = 'Admin/ProjectController/add_proj';
$route['view_proj'] = 'Admin/ProjectController/view_proj';

$route['csv_upload'] = 'Admin/TableController/copy_table';
$route['csv_tbl'] = 'Admin/TableController/csv_tbl';
$route['get_csv'] = 'Admin/TableController/get_csv';

$route['add_layers'] = 'Admin/LayersController/add_layers';
$route['layers_view'] = 'Admin/LayersController/layers_view';
$route['layers_detail'] = 'Admin/LayersController/layers_detail';
$route['layers_edit'] = 'Admin/LayersController/layers_edit';


$route['background'] = 'Admin/UploadController/bck_img';
$route['emergency_contact'] = 'Admin/UploadController/emergency_contact';
$route['emergency_personnel'] = 'Admin/UploadController/emergency_personnel';
$route['delete_emergency'] = 'Admin/UploadController/delete_emerg';
$route['edit_emergency'] = 'Admin/UploadController/edit_emerg';
$route['edit_emergency_personnel'] = 'Admin/UploadController/edit_emerg_personnel';
$route['add_emergency'] = 'Admin/UploadController/add_emergency';
$route['add_emergency_personnel'] = 'Admin/UploadController/add_emergency_personnel';
$route['add_icon'] = 'Admin/UploadController/add_icon';


$route['view_publication'] = 'Admin/PublicationController/view_publication';
$route['add_publication'] = 'Admin/PublicationController/add_publication';
$route['delete_publication'] = 'Admin/PublicationController/delete_publication';
$route['edit_publication'] = 'Admin/PublicationController/edit_publication';
$route['download'] = 'Admin/PublicationController/download';

$route['view_about'] = 'Admin/AboutController/view_about';
$route['edit_about'] = 'Admin/AboutController/edit_about';

$route['map_show'] ='Admin/MapDownload/map_show';
$route['add_maps'] ='Admin/MapDownload/add_maps';
$route['edit_map'] ='Admin/MapDownload/edit_map';
$route['delete_map'] ='Admin/MapDownload/delete_map';
