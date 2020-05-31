<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileController extends Controller
{
  public function upload(Request $request)
  {
  	$fileName= "progess.jpg";
  	$path = $request->file('photo')->move(public_path("/"),$fileName);
  	$photoURL = url('/'.$fileName);
  	return response()->json(['url'=> $photoURL],200);
  }
}
