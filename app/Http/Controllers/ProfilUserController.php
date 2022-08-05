<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profil.profil_user');
    }

    public function setting() {
        // $data = array('title' => 'Setting Profil');
        $user = User::where('id', Auth::user()->id)->first();

        return view('user.profil.profil_user', ['user'=>$user]);

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
        $this->validate($request, [
            'level' => 'required',
            'name'  => 'required',
            'email' => 'required',
            'photo' => 'required|image|mimes:png,jpg,jpeg',
        ]);

        //upload image
        $image = $request->file('photo');
        $image->storeAs('public/profil', $image->hashName());

        $profil = User::create([
            'level' => $request->level,
            'name' => $request->name,
            'email' => $request->email,
            'photo' => $image->hashName()

        ]);

        if($profil){
            //redirect dengan pesan sukses
            return redirect()->route('profil.profil_user')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('profil.profil_user')->with(['error' => 'Data Gagal Disimpan!']);
        }

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
    public function update(Request $request, User $user)
    {

        $validatedData = $request->validate([
            'level'     => 'required',
            'name'      => 'required',
            'email'     => 'required',
            'photo'     => 'required|image|mimes:png,jpg,jpeg',
        ]);


        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('public/profil');
        }

        $validatedData['id'] = Auth::user()->id;
        $user->where('id', $user->id)->update($validatedData);
        return redirect('/profil_user')->with('success', 'Data Berhasil di update');

        // //get data Blog by ID
        // $profil = User::findOrFail($profil->id);

        // if($request->file('image') == "") {

        //     $profil->update([
        //         'level' => $request->level,
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'image' => $request->image,
        //     ]);

        // } else {

        //     //hapus old image
        //     Storage::disk('local')->delete('public/profil/'.$profil->image);

        //     //upload new image
        //     $image = $request->file('image');
        //     $image->storeAs('public/profil', $image->hashName());

        //     $profil->update([
        //         'level' => $request->level,
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'image'     => $image->hashName(),

        //     ]);

        // }

        // if($profil){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('profil.profil_user')->with(['success' => 'Data Berhasil Diupdate!']);
        // }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('profil.profil_user')->with(['error' => 'Data Gagal Diupdate!']);
        // }
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
}
