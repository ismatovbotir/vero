@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Edit User: {{$user->name}}</h3>
                <div class="nk-block-des text-soft">

                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">

            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">

                <div class="card-inner p-0">
                    <form action="{{route('admin.user.update',['user'=>$user->id])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-inner">
                            <div class="preview-block">
                                <span class="preview-title-lg overline-title">User</span>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-03">User Name</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-user"></em>
                                                </div>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Input placeholder" value="{{$user->name}}" >

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">

                                            <div class="form-control-wrap">
                                                <label class="form-label" for="email">E-mail</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-mail"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Input placeholder" value="{{$user->email}}" >

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-lock"></em>
                                                </div>
                                                <input type="text" class="form-control" id="password" placeholder="Input placeholder" name="passord">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <label class="form-label" for="role">Select Role</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="role" name="role">
                                                    <option value="">Choose Role</option>
                                                    @foreach($roles as $role)
                                                    @if($role->id==$user->id)
                                                    <option value="{{$role->id}}" selected>{{$role->name}}</option>
                                                    @else
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endif
                                                    @endforeach

                                                </select>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">

                                    <div class="d-flex space-between">
                                        <button class="btn btn-success ml-2 mr-2">Save</button>
                                        <a class="btn btn-danger" href="{{route('admin.user.index')}}">Cancel</a>
                                    </div>


                                </div>
                                <div class="row gy-4 pt-2">
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>


            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>



@endsection