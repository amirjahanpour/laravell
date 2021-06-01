<?php

namespace App\Http\Controllers;

use App\Models\AdminModels;
use App\Models\cities;
use App\Models\provinces;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
//    public function donlwodimg($imgid){
//      return dd($imgpath);
//      //  $food=AdminModels::find($imgpath);
//       // return Storage::download($food->img);
//    }
    public function delete($id)
    {
        $food = AdminModels::find($id);
        if (AdminModels::destroy($id)) {
            Storage::delete('public/' . $food->img);
            $message = '<div class="alert alert-secondary">حذف با موفقیت انجام شد</div>';
        } else {
            $message = '<div class="alert alert-light">حذف ناموفق بود</div>';
        }
        return $this->index($message);
    }

    public function update(Request $request, $id){
        $selection = AdminModels::find($id);
        $newRecord = [
            "name" => $request->input("name"),
            "state" => $request->input("state"),
            "city" => $request->input("city"),
            "mobile" => $request->input("mobile"),
            "phone" => $request->input("phone"),
            "resume" => $request->input("resume"),
        ];
        if ($request->hasFile('img')) {
            $phat = uniqid() . "." . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path("upload/"), $phat);
            $newRecord['img'] = $phat;
        }
        $selection->update($newRecord);
    }
    public function edit($id, $message = '')
    {
        $allprovinces = provinces::all();
        $allcities = cities::all();
        $editform = AdminModels::find($id);
        return view('create.form', ['message' => $message, 'editform' => $editform, 'provinces' => $allprovinces, 'cities' => $allcities]);
    }

    public function index($message = ' ')
    {
        $alluser = AdminModels::with("citys", "provinces")->orderBy("id", "DESC")->paginate();
        return view('create.list', compact("alluser", "message")); //in view
    }

    public function create($ans = ' ')
    {
        $allprovinces = provinces::all();
        $allcities = cities::all();
        return view('create.form', ['message' => $ans, 'provinces' => $allprovinces, 'cities' => $allcities]);
    }

    public function received(Request $request)
    {
        $request->validate([
            'name' => 'required|String|min: 1|max:255',
            'state' => 'required|String|min: 1|max:100',
            'city' => 'required|String|min: 1|max:100',
            'resume' => 'nullable|String|min: 1|max:2000',
            'mobile' => 'nullable|numeric|min: 1',
            'phone' => 'nullable|numeric|min: 1',
            'img' => 'nullable|image',
        ]);

        $newRecord = [
            "name" => $request->input("name"),
            "state" => $request->input("state"),
            "city" => $request->input("city"),
            "mobile" => $request->input("mobile"),
            "phone" => $request->input("phone"),
            "resume" => $request->input("resume"),
        ];

        if ($request->hasFile('img')) {
            $phat = uniqid() . "." . $request->file('img')->getClientOriginalExtension();
            $request->file('img')->move(public_path("upload/"), $phat);
            $newRecord['img'] = $phat;
        }
        AdminModels::create($newRecord);

        return back()->with("msg","عملیات موردنظر با موفقیت انجام شد.");
    }
}
