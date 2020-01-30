<?php

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
/** * * pages *  login *      mobile number , password * *  register *      mobile number *      first name , last name *      email optional *      age *      password *  forget password *      mobile number * * * * *      contact us * *      location * * *  Home page *          nav bar languages/ ar /en * * *          news / discount  / top * *          - filters *                 brands , name, type, amount  , order by date desc asc *          - products *          - services * * *         types * *              brands / companies *                          products * *      delivery products without services * *
 * admin panel 
 * * *        
 * add products * * 
 *            
 * name *             
 * type *                 
 * -service *                     
 * duration *             
 * brand *             
 * amount *             
 * discount amount *             
 * long  
 * descirption *             
 * short descirption *             
 * images *             
 * videos optional *             
 * in stock * *         
 * brands *              
 * name *             
 * logo *         
 * types *             
 * name *             
 * image * *
 *    
 * calender *              
 * duration / day / time * *         
 * customer *                
 * mobile number *                 
 * first name , last name *                 
 * email optional *                 
 * age *                 
 * password * *         
 * traking *             
 * filters date / time / duration / user *             
 * time / page / counter with date * *         
 * roles / permissions * * *         
 * send mails * *     
 * contact us * * *     
 * Errors * * * * * * * * * * * 
 */
Route::get('/', function () {
    return view('welcome');
});
