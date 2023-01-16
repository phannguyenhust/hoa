<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\nhacungcap;
use Illuminate\Http\Request;
use DateTime;

class NhaCungCapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return nhacungcap::all();
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
        $db =new nhacungcap();
        $db->tenncc = $request->tenncc;
        $db->diachi = $request->diachi;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->masp = $request->masp;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return nhacungcap::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function edit(nhacungcap $nhacungcap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = nhacungcap::findOrFail($id);
        $db->tenncc = $request->tenncc;
        $db->diachi = $request->diachi;
        $db->email = $request->email;
        $db->sdt = $request->sdt;
        $db->masp = $request->masp;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nhacungcap  $nhacungcap
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = nhacungcap::find($id)->delete();
        // return redirect()->to('/admin/nhacungcap');
        // //
        nhacungcap::findOrFail($id)->delete();
        return "Deleted";

    }
}
