<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use Hash;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view('user.profile');
    }
    public function index_changePass()
    {
        return view('user.changePass');
    }
    public function index_order()
    {
        $id = session('user')['email'];
        $order = Customer::find($id)->order;
        return view('user.profile_order',['order'=>$order]);
    }
    public function index_detail_order($id)
    {
        $dc = Order::find($id)->detail_order;
        return view('user.profile_detail_order',['detail_order'=>$dc,'id'=>$id]);
    }
    public function changePassword(Request $r)
    {
        $id = session('user')['email'];
        $c = Customer::find($id);
        if(!Hash::check($r->old_pass,session('user')['password']))
        {
            session()->flash('error','Mật khẩu cũ không hợp lệ');
            return redirect('/user/profile/changePassword');
        }
        $c->password = Hash::make($r->new_pass);
        $c->save();
        session()->flash('success','Thay đổi mật khẩu thành công');
        return redirect('/user/profile/changePassword');
    }
}
