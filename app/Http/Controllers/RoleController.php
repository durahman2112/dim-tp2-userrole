<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use Session;

class RoleController extends Controller
{
    public function index() {
         $role = Role::select('*')
             ->get();
        return view('role',[
            'role' => $role,
        ]);
    }
    public function getAllRole() {
         $role = Role::select('*')
             ->get();
        return $role;
    }

    public function getRoleId($id) {
        $role = Role::select('*')
                    ->where('role_id', $id)
                    ->get();
    }
    public function addRole() {
        return view('addRole');
    }
    public function saveRole(Request $request) {
        $role = Role::create([
            'role_name' => $request->role_name,
            'role_description' => $request->role_description,
        ]);

        return redirect()->route('role');
    }

    public function editRole($id) {
        $role = Role::select('*')
                    ->where('role_id', $id)
                    ->get();

        return view('editRole', ['role' => $role]);
    }

    public function updateRole(Request $request) {
        $role = Role::where('role_id', $request->id)
                    ->update([
                            'role_name' => $request->role_name,
                            'role_description' => $request->role_description,
                    ]);

        return redirect()->route('role');
    }
    public function deleteRole($id)
    {
        $role = Role::where('role_id', $id)
                ->delete();

        return redirect()->route('role');
    }
}
