<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UserRequest;
use App\Models\Mediator;
use App\Models\User;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       return view('admin.users.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        //
        $request_data = $request->except(['password','password_confirmation','permissions']);
        $request_data['password'] = bcrypt($request->password);
        $user = User::create($request_data);
        $user->syncRoles('employee');
        $data['user_id'] = $user->id;
        $data['name'] = $user->name;
        $data['code'] = random_int(10000, 99999);
        $data['url'] =route('preOrder').'/?code='. $data['code'];
        $Mediator =  Mediator::create($data);
        return $user ? redirect(getRoute('users.index'))->with(['success'=>trans('general.slider.slider_saved')]) : redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $general = User::findOrfail($id);
        return view('admin.users.show',compact('general'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $general = User::findOrfail($id);
         return view('admin.users.edit', [
            'general' => $general,
            'userRole' => $general->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function update(UserRequest $request, User $user)
    // {
    //     //
    //     $user->update($request->all());


    //     $user->syncRoles($request->get('role'));

    //      return $user ? redirect(getRoute('users.index'))->with(['success'=>trans('general.users.users.updated')]) : redirect()->back();

    // }

    public function update(User $user, UpdateUserRequest $request)
    {
           $data = $request->all();
           if($data['password'] != null)
           {
               $data['password'] = bcrypt($request->password);
           }else{
               $data['password'] = $user->password;
           }
         $user->update($data);


         $user->syncRoles($request->get('role'));

         return redirect()->route('users.index')
             ->withSuccess(__('User updated successfully.'));

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $general = User::findOrfail($id);
         $general->delete();
         return  redirect(route('social.index'))->with(['success'=>trans('general.social.social_deleted')]);

    }
}
