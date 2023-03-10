<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\cthoadon;
use Illuminate\Http\Request;
use DateTime;

class CTHoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return cthoadon::all();
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
        $db =new cthoadon();
        $db->mahd = $request->mahd;
        $db->masp = $request->masp;
        $db->soluong = $request->soluong;
        $db->gianhap = $request->gianhap;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cthoadon  $cthoadon
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return cthoadon::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cthoadon  $cthoadon
     * @return \Illuminate\Http\Response
     */
    public function edit(cthoadon $cthoadon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cthoadon  $cthoadon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = cthoadon::findOrFail($id);
        $db->mahd = $request->mahd;
        $db->masp = $request->masp;
        $db->soluong = $request->soluong;
        $db->gianhap = $request->gianhap;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cthoadon  $cthoadon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = cthoadon::find($id)->delete();
        // return redirect()->to('/admin/cthoadon');
        // //
        cthoadon::findOrFail($id)->delete();
        return "Deleted";

    }
}
