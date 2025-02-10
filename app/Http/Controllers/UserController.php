<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
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
        $user=User::where('id',$id)->with('role')->first();
        $roles=Role::where('id','>',1)->get();
        //dd($user);
        return view('user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, string $id)
    {
        $name=$request->input('name');
        $email=$request->input('email');
        $role=$request->input('role');
        $password=$request->input('password');
        //dd($password);
        if($password==null){
            $user=User::where('id',$id)->update(
                [
                    'name'=>$name,
                    'email'=>$email,
                    'role_id'=>$role
                ]
            );
        }else{
            $user=User::where('id',$id)->update(
                [
                    'name'=>$name,
                    'email'=>$email,
                    'role_id'=>$role,
                    'passord'=>Hash::make($password)
                ]
            );

        }
       
        return to_route("admin.user.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
