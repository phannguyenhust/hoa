<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\donhang;
use Illuminate\Http\Request;
use DateTime;

class DonHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return donhang::all();
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
        $db =new donhang();
        $db->makh = $request->makh;
        $db->hoten = $request->hoten;
        $db->email = $request->email;
        $db->phone = $request->phone;
        $db->diachi = $request->diachi;
        $db->ngaydat = $request->ngaydat;
        $db->tongtien = $request->tongtien;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return donhang::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function edit(donhang $donhang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = donhang::findOrFail($id);
        $db->makh = $request->makh;
        $db->hoten = $request->hoten;
        $db->email = $request->email;
        $db->phone = $request->phone;
        $db->diachi = $request->diachi;
        $db->ngaydat = $request->ngaydat;
        $db->tongtien = $request->tongtien;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donhang  $donhang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = donhang::find($id)->delete();
        // return redirect()->to('/admin/donhang');
        // //
        donhang::findOrFail($id)->delete();
        return "Deleted";

    }
}
