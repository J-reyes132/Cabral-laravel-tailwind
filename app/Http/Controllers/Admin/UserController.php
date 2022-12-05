<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('id',auth()->user()->id)->first();
        if($users->role != 'Admin')
        {
            return redirect()->route('admin.index')->with('danger', 'this user does not have permission to access this module');
        }
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->role == 'Admin'){$admin = 1;}else{$admin = 0;};
        $users = User::where('email', $request->email)->first();
        if($users){
            return redirect()->route('admin.users.create')->with('danger', 'this mail is already registered');
        } else{
        $user = new User();
        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password =  Hash::make($request->password);
        $user->is_admin =  $admin;
        $user->role = $request->role;

        $user->save();

        return to_route('admin.users.index')->with('success', 'User created successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if($request->role == 'Admin'){$admin = 1;}else{$admin = 0;};

        $user->name = $request->name;
        $user->email =  $request->email;
        $user->password =  Hash::make($request->password);
        $user->is_admin =  $admin;
        $user->role = $request->role;

        $user->save();

        return to_route('admin.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return to_route('admin.users.index')->with('danger', 'User deleted successfully');
    }
}
