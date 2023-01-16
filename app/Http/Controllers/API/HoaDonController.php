<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\hoadon;
use Illuminate\Http\Request;
use DateTime;

class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hoadon::all();
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
        $db =new hoadon();
        $db->mancc = $request->mancc;
        $db->ngaynhap = $request->ngaynhap;
        $db->thanhtien = $request->thanhtien;
        $db->manv = $request->manv;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hoadon  $hoadon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return hoadon::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hoadon  $hoadon
     * @return \Illuminate\Http\Response
     */
    public function edit(hoadon $hoadon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hoadon  $hoadon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = hoadon::findOrFail($id);
        $db->mancc = $request->mancc;
        $db->ngaynhap = $request->ngaynhap;
        $db->thanhtien = $request->thanhtien;
        $db->manv = $request->manv;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hoadon  $hoadon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = hoadon::find($id)->delete();
        // return redirect()->to('/admin/hoadon');
        // //
        hoadon::findOrFail($id)->delete();
        return "Deleted";

    }
}
