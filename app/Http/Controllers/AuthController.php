<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;  
use App\Models\Category;  
use App\Models\Perpus;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use PDF;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function users()
    {
        return view('public.dashboard_user');
    }

     public function login()
     {
         return view('reglog.login');
     }

     public function register()
     {
         return view('reglog.register');
     }

     public function Auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            if (Auth::user()->role == 'admin') { 
                return redirect('/admin')->with('success', "Welcome In Dashboard Admin!");
            } else {
                return redirect('/dashboard/users')->with('success', "Welcome In Dashboard User!");
            }
        }  else {
                return redirect('/login')->with('fail', "Email-Address And Password Are Wrong.");
            }
    }

     public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        return view('landing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
         $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'successful registration! please login');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Auth  $Auth
     * @return \Illuminate\Http\Response
     */

    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Auth  $Auth
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::where('id', $id)->first();
        return view('admin.edit_user' , compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth  $Auth
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('datauser')->with('success', 'Data User Berhasil di Update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Auth  $Auth
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('datauser')->with('successDelete', 'Berhasil menghapus data Category!');
    }
}