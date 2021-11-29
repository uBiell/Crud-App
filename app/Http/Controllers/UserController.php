<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('index', ['users' => $users]);
    }

    public function createRegister(){
        return view('create-register');
    }

    public function store(Request $request){
        
        $user = new User;
        $user->name = $request->name;
        $user->birth = $request->birth;
        $user->gender = $request->gender;
        $user->cpf = $request->cpf;
        $user->street = $request->street;
        $user->district = $request->district;
        $user->number = $request->number;
        $user->cep = $request->cep;
        $user->city = $request->city;

        $user->save();

        return redirect('/');
    }

    public function destroy($id){
        User::findOrFail($id)->delete();

        return redirect('/');
    }

    public function edit($id){
        $user = User::findOrFail($id);

        return view('edit', ['user' => $user]);
    }

    public function info($id){
        $user = User::findOrFail($id);

        return view('info', ['user' => $user]);
    }

    public function update(Request $request){
        User::findOrFail($request->id)->update($request->all());

        return redirect('/');
    }
}