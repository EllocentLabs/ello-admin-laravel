<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Mail;
use DB;

class UsersController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function create(Request $request)
    {
        $validator = Validator::make(
        $request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:50|confirmed',
            'role' => 'required|unique:users'
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }
        else{
            try {
                $user = User::create([
                    'name' => $request->get('name'),
                    'email' => $request->get('email'),
                    'password' => Hash::make($request->get('password')),
                    'role' => $request->get('role'),
                ]);
                return response()->json([
                    'status' => true,
                    'data' => "User Create Successfully"
                ],201);
            } 
            catch (\Throwable $th) {
                return response()->json([
                    'status' => false,
                    'error' => 'Something went Wrong!'
                ],403);
            }
        }
    }

}
