<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

use App\Models\Users;

class MyProfileController extends Controller
{
    public function index () {
        $idUser = Auth::user()->id;

        $data['profile'] = Users::where('id', '=', $idUser)->first();

        return view('admin.profile.myProfile', $data);
    }

    public function edit($id){}
}
