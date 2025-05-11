<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::with('roles')->get();
        $roles = Role::pluck("name","name")->all();

        return view('admin.userManage.users', compact('users', 'roles'));
    }

    public function store(Request $request){
        $request->validate([
            'userName' => 'required|string|max:255',
            'inputemail' => 'required|email|unique:users,email',
            'inputPassword' => 'required|string',
        ]);

        $user = User::create([
            'name' => $request->userName,
            'email' => $request->inputemail,
            'password' => bcrypt($request->inputPassword),
        ]);

        $user->syncRoles($request->roles);
        
        return redirect()->back()->with('success', 'User created successfully.');
    }


    public function update(Request $request){
        $request->validate([
            'userName' => 'required|string|max:255',
            'inputemail' => 'required|email|unique:users,email,' . $request->id,
            'inputPassword' => 'nullable|string',
        ]);

        $user = User::findOrFail($request->id);
        $user->name = $request->userName;
        $user->email = $request->inputemail;

        if ($request->inputPassword) {
            $user->password = bcrypt($request->inputPassword);
        }

        $user->syncRoles($request->roles);
        $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
    }
    


    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }
}
