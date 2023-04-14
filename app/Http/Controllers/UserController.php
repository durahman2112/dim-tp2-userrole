<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use Session;

class UserController extends Controller
{
    public function home() {
        return view('home');
    }
    public function index() {
         $users = User::select('*')
             ->get();
        $role = Role::select('*')
             ->get();
        return view('user',[
            'users' => $users,
            'role' => $role
        ]);
    }

    public function getUserId($id) {
        $user = User::select('*')
                    ->where('id', $id)
                    ->get();
    }
    public function addUser() {
        $role = Role::select('*')
             ->get();
        return view('addUser',['role' => $role]);
    }
    public function saveUser(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            // 'created_at' => date("Y-m-d H:i:s")
        ]);

        return redirect()->route('user');
    }

    public function editUser($id) {
        $role = Role::select('*')
             ->get();
        $user = User::select('*')
                    ->where('id', $id)
                    ->get();

        return view('editUser', ['user' => $user,'role' => $role]);
    }

    public function updateUser(Request $request) {
        $user = User::where('id', $request->id)
                    ->update([
                            'name' => $request->name,
                            'email' => $request->email,
                            // 'updated_at' => date("Y-m-d H:i:s")
                            // 'role' => $request->role,
                            // 'password' => $request->password,
                    ]);

        return redirect()->route('user');
    }
    public function deleteUser($id)
    {
        $user = User::where('id', $id)
                ->delete();

        return redirect()->route('user');
    }
}
