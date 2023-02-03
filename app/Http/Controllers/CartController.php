<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Models\Tour;
use App\Models\Order;
use App\Models\Order_Detail;

class CartController extends Controller
{
    //
    function add($id)
    {
        // Cart::add('293ad', 'Product 1', 1, 9.99, 550, ['size' => 'large']);
        // dd(Cart::content());
        $t = Tour::find($id);
        $array=[
            'id'=>$t->id_tour,
            'name'=>$t->name_tour,
            'price'=>$t->child_price,
            'adult_price'=>$t->adult_price,
            'weight'=>0,
            'qty'=>1,
        ];
        Cart::add($array);
        return redirect('/cart');
    }
    function index()
    {
        // dd(Cart::content());
        return view('user.cart');
    }
    function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect('/cart');
    }
    function user_checkout(Request $r ,$id)
    {
        $n=1;
        $t = Tour::find($id);
        $data = $r->all();
        $data['status']="No";
        $data['order_time'] = date("Y-m-d H:i:s");
        $data['id_order_tour'] = time();
        // $data['email']=session('user')['email'];
        $qtyChild = $r->quantity_child;
        $qtyAdult = $r->quantity_adult;
        $order = Order::create($data);
        // $order2 = $data['id_order_tour'];

        for($i = 1; $i<=$qtyChild; $i++){
        $dataOrderDetail = [
                'id_order'=>$order->id_order_tour,
                'id_tour'=>$t->id_tour,
                'name_customer'=>$r->input('detail_child_name_'.$i),
                'sex'=>$r->input('detail_child_sex_'.$i),
                'CMND'=>$r->input('detail_child_id_'.$i),
                'birth'=>$r->input('detail_child_birth_'.$i),
        ];
        Order_Detail::create($dataOrderDetail);
        }
        for($i = 1; $i<=$qtyAdult; $i++){
            $dataOrderDetail = [
                    'id_order'=>$order->id_order_tour,
                    'id_tour'=>$t->id_tour,
                    'name_customer'=>$r->input('detail_adult_name_'.$i),
                    'sex'=>$r->input('detail_adult_sex_'.$i),
                    'CMND'=>$r->input('detail_adult_id_'.$i),
                    'birth'=>$r->input('detail_adult_birth_'.$i),
            ];
            Order_Detail::create($dataOrderDetail);
        }
        $od = Order_Detail::where('id_order',$order->id_order_tour)->get();
        // dd($od);
        return view('user.checkout',['data'=>$data,'t'=>$t,'dataOrder'=>$od,'qtyAdult'=>$qtyAdult,'qtyChild'=>$qtyChild]);
    }

}
