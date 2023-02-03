<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('admin.login');
    }
    //lay data tu form
    function login(Request $r)
    {
        // dd($r->all());
        // echo($r->username);
        // echo($r->password);
        $u = Admin::find($r->username);
        if($u){
        if(hash::check($r->password,$u->password))
        {
            session(['admin'=>'1','admin'=>['username'=>$u->username,'name'=>$u->name]]);
            session()->flash('success','Đăng nhập thành công');
            return redirect('/admin');
        }else
        {
            session()->flash('error','Thông tin đăng nhập không hợp lệ');
            return redirect('/admin/login');
        }
    }
    }
    function logout()
    {
        session()->forget(['login','admin']);
        return redirect('/login');
    }
    //////////////user//////////////////////
    function user_index()
    {
        return view('user.login');
    }
    function user_login(Request $r)
    {
        // dd($r->all());
        // echo($r->username);
        // echo($r->password);
        $u = Customer::find($r->username);
        if($u){
        if(hash::check($r->password,$u->password))
        {
            session(['login'=>'1','user'=>[
                'email'=>$u->email,
                'password'=>$u->password,
                'name'=>$u->customer_name,
                'address'=>$u->address,
                'phone'=>$u->phone,
                'img'=>$u->img,
                'gender'=>$u->gender,
                'date'=>$u->date_of_birth
                ]
            ]);
            return redirect('/');
        }else
        {
            session()->flash('error','Thông tin đăng nhập không hợp lệ');
            return redirect('/user/login');
        }
    }
    }
    function user_logout()
    {
        session()->forget(['login','user']);
        return redirect('/');
    }
    function register(Request $r)
    {
        $r->validate(
            [
                'email' => 'required|unique:Customer|min:2|max:20',
            ],
            [
                'email.required' => 'Username không được để trống',
                'email.unique' => 'Email đã tồn tại. Vui lòng chọn email khác',
                'email.min' => 'Username tối thiểu 2 ký tự',
            ]
        );
        $data = $r->all();
        $data['password'] = Hash::make($r->password);
        // $data->save();
        Customer::Create($data);
        session()->flash('regis_seccess','Tạo tài khoản thành công.Có thể đăng nhập');
        return redirect('/user/login');
    }

}
