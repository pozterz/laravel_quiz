<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Rabbit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class RabbitController extends Controller
{
    public function index(){
    	//$rabbit = Rabbit::where('id', '>', 0)->orderBy('weight','desc')->get();
    	$rabbit = Rabbit::where('id', '>', 0)->orderBy('weight','desc')->get();
    	return view('index',compact('rabbit'));
    }
    public function add(Request $request){

    	$validator = Validator::make($request->all(), [
                'name' => 'required|unique:rabbits|max:255',
                'weight' => 'required|integer',
            ]);

  		if($validator->passes()) {
  			$nrab = new Rabbit;
	    	$nrab->name = Input::get('name');
	    	$nrab->weight = Input::get('weight');
	    	$nrab->save();
	    	return Redirect::to('index');
        }
		return Redirect::to('index')->withErrors($validator);
    }
    public function delete($id){
    	$rabbit = Rabbit::findOrfail($id);
    	$rabbit->delete();
    	return Redirect::to('index');
    }
}
