<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ctdonhang;
use Illuminate\Http\Request;
use DateTime;

class CTDonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ctdonhang::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $db =new ctdonhang();
        $db->madh = $request->madh;
        $db->masp = $request->masp;
        $db->tensp = $request->tensp;
        $db->anh = $request->anh;
        $db->soluong = $request->soluong;
        $db->gia = $request->gia;
        $db->giamgia = $request->giamgia;
        $db->tongtien = $request->tongtien;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return ctdonhang::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function edit(ctdonhang $ctdonhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = ctdonhang::findOrFail($id);
        $db->madh = $request->madh;
        $db->masp = $request->masp;
        $db->tensp = $request->tensp;
        $db->anh = $request->anh;
        $db->soluong = $request->soluong;
        $db->gia = $request->gia;
        $db->giamgia = $request->giamgia;
        $db->tongtien = $request->tongtien;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ctdonhang  $ctdonhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = ctdonhang::find($id)->delete();
        // return redirect()->to('/admin/ctdonhang');
        // //
        ctdonhang::findOrFail($id)->delete();
        return "Deleted";

    }
}
