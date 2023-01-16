<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use Illuminate\Http\Request;
use DateTime;

class LoaiSPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return loaisp::all();
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
        $db =new loaisp();
        $db->tenloai = $request->tenloai;
        $db->ghichu = $request->ghichu;
        $db->created_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        
        return loaisp::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function edit(loaisp $loaisp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        $db = loaisp::findOrFail($id);
        $db->tenloai = $request->tenloai;
        $db->ghichu = $request->ghichu;
        $db->updated_at =new DateTime();
        $db->save();
        return $db;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\loaisp  $loaisp
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $db = loaisp::find($id)->delete();
        // return redirect()->to('/admin/loaisp');
        // //
        loaisp::findOrFail($id)->delete();
        return "Deleted";

    }
}
