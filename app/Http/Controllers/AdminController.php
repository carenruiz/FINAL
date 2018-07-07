<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use Session;

class AdminController extends Controller
{

    public function admin(){
    	return view('admin.index');
    }

    public function registro(){
        $data=request()->all();
        $rules = [
        'name'=> 'required',
        'email'=> 'required',
        'password'=> 'required',
        'lastname'=> 'required',
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
           $data['idgrupo'] = 2;
            $registro=User::create($data);
            return redirect()->back();
        }
    	
    }
    public function salir(){
        Auth::logout();
        Session::flush();
        return redirect()->to('/');  
    }
}
