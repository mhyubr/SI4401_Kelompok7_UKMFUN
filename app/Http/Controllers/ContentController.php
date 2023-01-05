<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function addContent(){
        $data = Content::join('content','content.id','=','.id')
        ->join('telutizen','.user_id','=','telutizen.id')
        ->select('.id','telutizen.name','.date','content.nama','content.harga','content.deskripsi'
        ,'.qty','.status')
        ->get();
        return view('ukm.booking.index',compact('data'));
    }
}
