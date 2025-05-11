<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions = Permission::all();
        return view('admin.permissionsManage.permissions', compact('permissions'));
    }

    public function Store(Request $request){
        $request->validate([
            'PermissionName' => 'required|string|max:255|unique:permissions,name',
        ]);

        $permission = Permission::create(['name' => $request->PermissionName]);

        return redirect()->back()->with('success', 'Permission created successfully.');
    }

    public function Update(Request $request){
        $request->validate([
            'PermissionName' => 'required|string|max:255|unique:permissions,name,' . $request->permissionid,
            'permissionid' => 'required',
        ]);

        $permission = Permission::findOrFail($request->permissionid);
        $permission->name = $request->PermissionName;
        $permission->save();

        return redirect()->back()->with('success', 'Permission updated successfully.');
    }

    public function Destroy($id){
        $permission = Permission::findOrFail($id);
        $permission->delete();

        return redirect()->back()->with('success', 'Permission deleted successfully.');
    }
}
