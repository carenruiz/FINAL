<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\evento;
use Storage;

class EventosController extends Controller
{
    public function index(){
        $evento=evento::all();
    	return view('admin.eventos.evento',compact('evento'));
    }
    public function alta(){
    	return view('admin.eventos.eventocrear');
    }
    public function postalta(){
        $data=request()->all();
        $rules=[
        'nombre'=>'required',
        'descripcion'=>'required',
        'fecha'=>'required',
        'horario'=>'required',
        'precio'=>'required',
        'cantidad'=>'required',
        'imagen'=>'required|file|image|mimes:jpeg,jpg'
        ];
        $validator=Validator::make($data, $rules);
        if ($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $file=request()->file('imagen');
            $nombre=$file->getClientOriginalName();
           Storage::disk('evento')->put('', $file);
            $data['imagen']=(string) 'front/imagen/'.$nombre;
            $evento=evento::create($data);
            return redirect()->to('/evento');
        }
    	
    }
    public function baja($id){
        $evento=evento::find((int)$id);
        $evento->delete();
    	return redirect()->to('/evento');
    }
    public function editar($id){
        $eventoedit=evento::find((int)$id);
        //dd($eventoedit);
        return view('admin.eventos.eventocrear',compact('eventoedit'));       
    }
    public function posteditar($id){
        $data=request()->all();
        $eventoedit=evento::find((int)$id);
        $eventoedit->fill($data);
        $eventoedit->save();
        return redirect()->to('/evento');
    }
}
