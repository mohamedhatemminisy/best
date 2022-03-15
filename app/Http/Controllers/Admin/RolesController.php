<?php

namespace App\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {

    }
    
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $roles = Role::orderBy('id','DESC')->paginate(5);
        $rolesUser = [];
        foreach ($roles as $role)
        {
            $myrole = $role->name;
            $rolesUser[] = $myrole;
        }
   
        return view('admin.roles.index',compact('roles','rolesUser'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('admin.roles.create', compact('permissions'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $rules = [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ];
        $customMessages = [
            'name.required' => trans('general.validation.name_required'),
            'permission.required' => trans('general.validation.permission_required')
        
        ];
        $this->validate($request, $rules, $customMessages);
        $role = Role::create(['name' => $request->get('name')]);
        $role->syncPermissions($request->get('permission'));
         return   redirect(getRoute('roles.index'))->with(['success'=>trans('general.roles.roles_saved')]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions;
    
        return view('admin.roles.show', compact('role', 'rolePermissions'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $role = $role;
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        $permissions = Permission::get();

        return view('admin.roles.edit', compact('role', 'rolePermissions', 'permissions'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Role $role, Request $request)
    {
         
        $rules = [
            'name' => 'required|',
            'permission' => 'required',
        ];
        $customMessages = [
            'name.required' => trans('general.validation.name_required'),
            'permission.required' => trans('general.validation.permission_required')
        ];
        $this->validate($request, $rules, $customMessages);
        $role->update($request->only('name'));
        $role->syncPermissions($request->get('permission'));

 
         return   redirect(getRoute('roles.index'))->with(['success'=>trans('general.roles.roles_updated')]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return   redirect(getRoute('roles.index'))->with(['success'=>trans('general.roles.roles_deleted')]);

    }
}