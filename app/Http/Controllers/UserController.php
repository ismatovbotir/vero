<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=User::where('id','>',1)->with('role')->paginate(20);
        return view('user.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles=Role::where('id','>',1)->get();
        return view('user.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
       
       $validated=$request->validated();
       //dd($validated);
       User::upsert([
        'name'=>$validated['name'],
        'role_id'=>$validated['role'],
        'email'=>$validated['email'],
        'password'=>Hash::make($validated['password'])
        ],
        ['email'],
        ['name','password']
    );
       
       return to_route('admin.user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user=User::where('id',$id)->with('role')->first();
        //dd($user);
        return view('user.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
