@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">New User</h3>
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
                    <form action="{{route('admin.user.store')}}" method="POST">
                        @csrf
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
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" value="{{$user->name}}" disabled>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">

                                            <div class="form-control-wrap">
                                                <label class="form-label" for="default-03">E-mail</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-icon form-icon-right">
                                                        <em class="icon ni ni-mail"></em>
                                                    </div>
                                                    <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" value="{{$user->email}}" disabled>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-03">Password</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-lock"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" disabled>
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label class="form-label" for="default-03">Role</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-right">
                                                    <em class="icon ni ni-edit"></em>
                                                </div>
                                                <input type="text" class="form-control" id="default-03" value="{{$user->role->name}}" disabled>
                                                
                                            </div>
                                        </div>
                                    </div>
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