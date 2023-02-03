<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SendMail;
use App\Http\Controllers\Demo;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Payments;
use App\Models\Tour;
use App\Http\Middleware\LoginAdmin;

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

Route::get('/', function () {
    return view('user.index',[
        'bestSeller'=>DB::table('tour')->where('best_seller',1)->get(),
        'lct'=>DB::table('location')->get()
    ],
    ['dataHot'=>DB::table('tour')->where('hot_tour',1)->get()]);
});
Route::get('/user-login', function () {
    return view('user.index_login',['bestSeller'=>DB::table('tour')->where('best_seller',1)->get()],['dataHot'=>DB::table('tour')->where('hot_tour',1)->get()]);
});

Route::get('/detail/{id}', [TourController::class,'detail']);

Route::get('/gio-hang',function(){

});

Route::get('/dang-nhap',function(){

});

Route::get('/dang-ky',function(){
    return view('user.dang-ky');
});

Route::get('/tim-kiem',function(){

});

Route::get('/user/profile',[CustomerController::class,'index']);
Route::get('/user/profile/changePassword',[CustomerController::class,'index_changePass']);
Route::get('/user/profile/order',[CustomerController::class,'index_order']);
Route::get('/user/profile/detail_order/{id}',[CustomerController::class,'index_detail_order']);
Route::post('/user/profile/changePassword',[CustomerController::class,'changePassword']);


//-----------------------admin----------------------//
//trang chu admin
// Route::get('/',function(){
//     return view('admin.index');
// });
Route::middleware([LoginAdmin::class])->group(function () {

    Route::prefix('admin')->group(function () 
    {

        Route::get('/',[TourController::class,'index_admin']);
        //Quản lý Tour
        Route::get('/tour',[TourController::class,'index'])->name('index.tour');
        
        Route::post('tour/store',[TourController::class,'store']);
        Route::delete('/tour/delete/{id}', [TourController::class,'destroy']);
        Route::get('tour/edit/{id}',[TourController::class,'show']);
        Route::put('tour/edit/{id}',[TourController::class,'update']);
        //Quản lý đơn đặt tour

        Route::get('/order',[OrderController::class,'index']);
        
        Route::put('/order/check/{id}',[OrderController::class,'order_check']);


        //Login Admin
        Route::get('/login',function(){
            return view('admin.login');
        })->withoutMiddleware([LoginAdmin::class]);
        Route::post('/login',[LoginController::class,'login'])->withoutMiddleware([LoginAdmin::class]);

    });
});
//-------------------------login-logout-----------------------------//
//admin//
Route::get('/login',[LoginController::class,'index']);
// Route::post('/login',[LoginController::class,'login']);
Route::get('/logout',[LoginController::class,'user_logout']);
//user//
Route::get('user/login',[LoginController::class,'user_index'])->name('userlogin');
Route::post('user/login',[LoginController::class,'user_login']);
Route::post('user/register',[LoginController::class,'register']);
//----------------------------thanh-toan-----------------------//
Route::post('/user/checkout/{id}',[CartController::class,'user_checkout']);
Route::post('/user/chekout/vnpay',[Payments::class,'vnpay_payment']);
Route::get('/user/chekout/vnpay/success',[Payments::class,'success_view']);
//--------------------------cart--------------------------//
Route::get('/cart',[CartController::class,'index']);
Route::get('/cart/add/{id}',[CartController::class,'add']);
Route::get('/cart/remove/{rowId}',[CartController::class,'remove']);
//--------------------------Pagination--------------------//
Route::get('/san-pham',[TourController::class,'product']);
Route::get('/search',[TourController::class,'search']);
//--------------------------SendMail---------------------//
Route::get('/send-mail',[SendMail::class,'sendMail']);
//--------------------------Booking----------------------//
Route::get('/booking/{id}',[TourController::class,'booking'])->middleware('checkLogin');
//--------------------------Demo----------------------//
Route::get('/demo',[Demo::class,'demo1']);
Route::get('/demo2',[Demo::class,'demo2']);