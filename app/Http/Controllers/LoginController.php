<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.auth.login');
    }

    public function postlogin(Request $request)
    {

        if (Auth::attempt($request->only('email', 'password'))){
            if(Auth::user()->level == 'admin'){
                return redirect('admin');
            } else if(Auth::user()->level == 'user'){
                return redirect('/konsultasi');
            }
            else{
                return redirect('/login');
            }

        }
        return redirect('login');

    }

    public function registrasi(){
        return view('admin.auth.register');
    }

    public function simpanregistrasi(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return view('admin.auth.login');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function updatePassword(ChangePasswordRequest $request)
    {
        $old_password   = auth()->user()->password;
        $user_id        = auth()->user()->id;

        if (Hash::check($request->input('old_password'), $old_password)) {
            $user = User::findOrFail($user_id);

            $user->password = Hash::make($request->input('password'));

            if ($user->save()) {
                return redirect('setting')->with('success', 'Password berhasil diubah');
            } else {
                return redirect('setting')->with('failed', 'Password lama invalid');
            }
        } else {
            return redirect('setting')->with('failed', 'Password lama invalid');
        }
    }
}
