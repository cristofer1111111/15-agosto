<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users= User::paginate(5);
        return view('users.index',compact('users'));
    }
    public function create()
    {
        return view('users.create');
    }
    //detalles por id
    public function show($id){

        $user=User::find($id);
        return view('users.show', compact('user'));

    }
    public function store(Request $request){

        $user= User::create(
            [
                'name' =>$request->input('name'),
                'lastnames' =>$request->input('lastnames'),
                'email' =>$request->input('email')
               
            ]);
            return redirect('users')->with('status','se ha creado correctamente');
    }
    public function destroy($id){
        $user= User::find($id)->delete();
        return redirect('users');

    }
    public function edit($id){

        $user=User::find($id);
        return view('users.edit',compact('user'));
    }
    public function update(Request $request,$id){
        $user=User::find($id)->update([
            'name' =>$request->input('name'),
            'lastnames' =>$request->input('lastnames'),
            'email' =>$request->input('email')
        ]);
        return redirect('users')->with('status','se ha actualizado correctamente');
    }
}
