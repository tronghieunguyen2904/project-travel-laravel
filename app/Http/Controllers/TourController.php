<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Order_Detail;
use App\Models\Location;
use Illuminate\Http\Request;
use Session;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.tour',['data'=>Tour::all()],['location'=>Location::all()]);
    }

    public function index_admin()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'id_tour' => 'required|unique:Tour|min:2|max:20',
                'name_tour' => 'required|unique:Tour|min:2|max:20',
                'img_tour' => 'required',
                'date_go' => 'required',
                'date_back' => 'required',
                'adult_price' => 'required|integer',
                'child_price' => 'required|integer',
                'content_tour' => 'required',
                'place_go' => 'required',
                'best_seller' => 'required',
                'hot_tour' => 'required',
                'id_location' => 'required',
                'id_vehicle' => 'required',
                'id_detail_hotel' => 'required'
            ],
            [
                'id_tour.required' => 'Mã tour không được để trống',
                'id_tour.unique' => 'Mã tour phải là duy nhất',
                'id_tour.min' => 'Mã tour tối thiểu 2 ký tự',
                'name_tour.min' => 'Tên tour tối thiểu 2 ký tự',
                'name_tour.unique' => 'Tên tour đã tồn tại',
                'name_tour.required' => 'Tên tour không được để trống',
                'date_go.required' => 'Ngày đi không được để trống',
                'date_back.required' => 'Ngày về không được để trống',
                'adult_price.required' => 'Giá người lớn không được để trống',
                'adult_price.integer' => 'Giá người lớn phải là số',
                'child_price.required' => 'Giá trẻ em không được để trống',
                'child_price.integer' => 'Giá trẻ em phải là số',
                'content_tour.required' => 'Nội dung tour không được để trống',
                'place_go.required' => 'Nơi khởi hành không được để trống',
                'img_tour.required' => 'Ảnh tour không được để trống'

            ]
        );
        // dd($request->all());

        // if($request->has('img_tour')){
        // $file = $request->file('img_tour');
        $data = $request->all();
        // dd($data);
        $fileName = $request->img_tour->getClientOriginalName();
        $request->img_tour->storeAs('public/admin/img',$fileName);
        $data['img_tour']=$fileName;
        Tour::Create($data);
        $request->img_tour->storeas('admin/img',$fileName);
        session()->flash('messInsert','Thêm thành công');
        return redirect('/admin/tour');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $t = Tour::find($id);
        // dd($t);
        return view('admin.edit',['data'=>$t],['location'=>Location::all()]);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $t = Tour::find($request->id_tour);

        $fileName = $request->img_tour_edit->getClientOriginalName();
        $request->img_tour_edit->storeAs('public/admin/img',$fileName);

        $t->name_tour = $request->name_tour;
        $t->date_go = $request->date_go;
        $t->date_back = $request->date_back;
        $t->content_tour = $request->content_tour;
        $t->place_go = $request->place_go;
        $t->child_price = $request->child_price;
        $t->adult_price = $request->adult_price;
        $t->img_tour = $fileName;
        $t->best_seller = $request->best_seller;
        $t->hot_tour = $request->hot_tour;
        // $t->id_location = $request->id_location;
        // $t->id_vehicle = $request->id_vehicle;
        // $t->id_detail_hotel = $request->id_detail_hotel;
        $t->save();
        session()->flash('messUpdate','Cập nhật thành công');
        return redirect('/admin/tour');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $r)
    {
        $detai_order_tour = Tour::find($id)->detail_order;
        // dd($r);
        if(count($detai_order_tour)<=0){
            Tour::destroy($id);
            session()->flash('mess','Xóa thành công');
            return redirect('/admin/tour');
        }
        else{
            session()->flash('error','Xóa không thành công vì tour có đơn hàng');
            return redirect('/admin/tour');
        }
    }
    function product()
    {
        $data = Tour::paginate(4);
        return view('user.product',['data'=>$data]);
    }
    function search(Request $r)
    {
        $kw = $r->keyword;
        $kwDate = $r->keywordDate;
        $kwLocation = $r->kwLocation;
        $data = Tour::where('name_tour','like' ,"%$kw%")
        ->where('date_go','like' ,"%$kwDate%")
        ->where('id_location','like' ,"%$kwLocation%")
        ->paginate(3)
        ->withQueryString();
        return view('user.search',['data'=>$data]);
    }
    function detail($id)
    {
        $t = Tour::find($id);
        return view('user.detail',['detail'=>$t]);
    }
    function booking($id)
    {
        $t = Tour::find($id);
        return view('user.booking',['booking'=>$t]);
    }
}