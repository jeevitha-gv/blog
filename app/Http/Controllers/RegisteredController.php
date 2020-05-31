<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\User;
use Response;

class RegisteredController extends Controller
{
    public function registered()
    {
    	$users = User::all();
    	return view('/registered')->with('users',$users);
    }
 public function show($id)
   {
      $users['users'] = User::find($id);
      return view('user-edit',$users);
   }
   
   public function update(Request $request)
   {
     $users = User::find($request->id);
     $users->name = $request->name;
      $users->email = $request->email;
      $users->created_at = $request->created_at;
      if($users->save())
      {
        return redirect('/registered');
      }
      else
      {
         echo "not updated";
      }
   }
   public function delete($id)
   {
      $users = User::find($id);
      if($users->delete())
      {
         return redirect('/registered');
      }
      else
      {
         echo "not deleted";
      }
   }
 
}
