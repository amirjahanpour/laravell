<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use App\Models\provinces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewApiController extends Controller
{
    //
 public function index(Request $request){
     $xa = $this->validate($request,[
         'state'=>'required',
         'city'=>'required',
     ]);
     $users = DB::table('admin_models')
         ->where('state', '=', $request->state)
         ->where('city', '=', $request->city)
         ->get();
    return $users;
 }
}