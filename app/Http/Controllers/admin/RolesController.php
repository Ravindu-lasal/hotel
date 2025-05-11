<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.rolesManage.roles', compact('roles', 'permissions'));
    }


    public function Store(Request $request)
    {
        $request->validate([
            'rolename' => 'required|string|max:255|unique:roles,name',
        ]);

        $role = Role::create(['name' => $request->rolename]);

        return redirect()->back()->with('success', 'Role created successfully.');
    }


    public function Update(Request $request)
    {
        $request->validate([
            'rolename' => 'required|string|max:255|unique:roles,name,' . $request->roleid,
            'roleid' => 'required',
        ]);

        $role = Role::findOrFail($request->roleid);
        $role->name = $request->rolename;
        $role->save();

        return redirect()->back()->with('success', 'Role updated successfully.');
    }

    public function Destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->back()->with('success', 'Role deleted successfully.');
    }

    public function AssignPermission($id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();

        $rolePermissions = $role->permissions->pluck('id')->toArray();
        $permissions->each(function ($permission) use ($rolePermissions) {
            $permission->isAssigned = in_array($permission->id, $rolePermissions);
        });
        return view('admin.rolesManage.assignPermission', compact('role', 'permissions', 'rolePermissions'));
    }


    public function givepermissionsassign(Request $request)
    {
        $request->validate([
            'roleid' => 'required',
            'permissions' => 'required|array',
        ]);

        $role = Role::findOrFail($request->roleid);
        $role->syncPermissions($request->permissions);
        return redirect()->back()->with('success', 'Permissions assigned successfully.');
    }
    

}
