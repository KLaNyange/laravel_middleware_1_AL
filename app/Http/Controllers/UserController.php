<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function edit($id){
        $edit = User::find($id);
        $roles = Role::all();
        return view('pages.userEdit', compact('edit', 'roles'));
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_id = $request->role_id;
        $user->save();
        return redirect('/users');
    }
    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect()->back();    }
}
