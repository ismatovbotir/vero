@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Users</h3>
                <div class="nk-block-des text-soft">
                    <p>Total {{$data->total()}} users.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="{{route('admin.user.create')}}" class="btn btn-danger">Add</a>
            </div><!-- .nk-block-head-content -->
        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="card card-bordered card-stretch">
            <div class="card-inner-group">

                <div class="card-inner p-0">
                    <table class="table table-tranx">
                        <thead>
                            <tr class="tb-tnx-head">
                                <th><span class="">ID</span></th>
                                <th class="tb-tnx-info">
                                    Name
                                </th>
                                <th class="tb-tnx-info">
                                    <span class="tb-tnx-total">Email</span>

                                </th>
                                <th class="tb-tnx-info">
                                    Role

                                </th>
                                <th class="tb-tnx-info">
                                    Action

                                </th>

                            </tr><!-- tb-tnx-item -->
                        </thead>
                        <tbody>
                            @foreach($data as $user)
                            <tr class="tb-tnx-item">
                                <td>
                                    <span>{{$user->id}}</span>
                                </td>
                                <td class="tb-tnx-info">

                                    <span class="title">{{$user->name}}</span>


                                </td>
                                <td class="tb-tnx-amount is-alt">

                                    <span class="amount">{{$user->email}}</span>


                                </td>
                                <td class="tb-tnx-amount is-alt">

                                    <span class="amount">{{$user->role->name}}</span>


                                </td>
                                <td class="tb-tnx-amount is-alt">

                                    <div class="dropdown">
                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="true"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-100px, 36px, 0px);">
                                            <ul class="link-list-plain">
                                                <li><a href="{{route('admin.user.show',['user'=>$user->id])}}">View</a></li>
                                                <li><a href="{{route('admin.user.edit',['user'=>$user->id])}}">Edit</a></li>
                                                {{--<li><a href="#">Delete</a></li>--}}
                                            </ul>
                                        </div>
                                    </div>

                                   

                                </td>

                            </tr><!-- tb-tnx-item -->
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- .card-inner -->

                <div class="card-inner">
                    {{$data->links()}}


                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>



@endsection