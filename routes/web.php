<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'WebController@home')->name('home');
Route::view('/servicios', 'sections.services')->name('services');
Route::view('/aliados-estrategicos', 'sections.allies')->name('allies');
Route::view('/quienes-somos', 'sections.us')->name('us');
Route::view('/contacto', 'sections.contact')->name('contact');
Route::view('/soporte', 'sections.support')->name('support');
Route::view('/soluciones-it', 'sections.solutions-it')->name('solutions-it');
Route::view('/soluciones-it-por-marca', 'sections.solutions-it-brand')->name('solutions-it-brand');

Route::view('/base-blog', 'blogs-events.base-blog');
Route::view('/base-evento', 'blogs-events.base-event');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/blog/{blog:slug}', 'BlogController@show')->name('blog.article');

Route::get('/eventos/{event:slug}', 'EventController@show')->name('events.post');

// Soluciones
Route::view('/soluciones/infraestructura', 'solutions.infrastructure')->name('infrastructure');
Route::view('/soluciones/seguridad', 'solutions.security')->name('security');

// Route::view('/servicios/hardware', 'services.hardware')->name('hardware');
// Route::view('/servicios/almacenamiento', 'services.storage')->name('storage');
// Route::view('/servicios/recuperacion-ante-desastres', 'services.disaster-recovery')->name('disaster-recovery');
// Route::view('/servicios/servicios-administrados', 'services.managed-services')->name('managed-services');

Route::get('/contact', 'LeadController@sendLead')->name('contact.lead');
//Route::post('/contact-form-company', 'LeadController@sendMailCompany')->name('contact-company.mail');
//Route::post('/form-commentary', 'LeadController@sendMailcommentary')->name('commentary.mail');


Auth::routes(['register' => false]);

Route::group(['namespace' => 'Dashboard', 'prefix' => 'dashboard', 'middleware' => 'auth'], function() {

    Route::get('/home', 'DashboardController@index')->name('dashboard.index');

    Route::prefix('/blog')->name('blog.')->group(function() {
        Route::get('/', 'BlogController@index')->name('index');
        Route::get('/nuevo', 'BlogController@create')->name('create');
        Route::get('/editar/{blog:slug}', 'BlogController@edit')->name('edit');
        Route::post('/', 'BlogController@store')->name('store');
        Route::put('/{id}', 'BlogController@update')->name('update');
        Route::delete('/{id}', 'BlogController@delete')->name('delete');
    });

    Route::prefix('/eventos')->name('events.')->group(function() {
        Route::get('/', 'EventController@index')->name('index');
        Route::get('/nuevo', 'EventController@create')->name('create');
        Route::get('/editar/{event:slug}', 'EventController@edit')->name('edit');
        Route::post('/', 'EventController@store')->name('store');
        Route::put('/{id}', 'EventController@update')->name('update');
        Route::delete('/{id}', 'EventController@delete')->name('delete');
        Route::post('save-gallery/{event:id}', 'EventController@attachFileGallery')->name('gallery-save');
        Route::get('success', 'EventController@redirectWithSuccessMsg')->name('success-rdr');
    });
});
