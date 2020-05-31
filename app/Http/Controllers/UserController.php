<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
// Use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
    	if(Auth::attempt( ['email' => $request->email,'password' => $request->password]))
    	{
    		$user = Auth::user();
    		$success['token'] = $user->createToken('MyApp')->accessToken;
    		return response()->	json([
    		'success' => $success],200);
    	
    		    	
    }
    else
    {
    	
    		return response()->json(['error' => 'Unauthorized'],401);
    
    }

    }
}

//     public function register(Request $request)
//     {
//     	$user = new User;
//     	$user->name = $request->name;
//     	$user->email = $request->email;
//     	$user->password = Hash::make($request->password);
//     	// return $user;
//     	if($user->save()
//     	{
//       return response()->json([
//  	'status' => true,
//  	'data' => [],
//  	'message' => 'User Registered Successfully'
//  ]);
//     	}
//     	else
//     	{
//     		return response()->json([
//  	'status' => false,
//  	'data' => [],
//  	'message' => 'User Registeration Failed'
//  ]);

//     	}

//     }
// }

