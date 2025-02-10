@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Products</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{$data->total()}} products.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="{{route('admin.product.create')}}" class="btn btn-info">New Product</a>
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
                                <th class="tb-tnx-id"><span class="">Art</span></th>
                                <th class="tb-tnx-info">
                                    GTIN
                                </th>
                                <th class="tb-tnx-info">
                                    <span class="tb-tnx-total">Name</span>
                                   
                                </th>
                                <th class="tb-tnx-info">
                                 Action   
                                   
                                </th>
                                
                            </tr><!-- tb-tnx-item -->
                        </thead>
                        <tbody>
                            @foreach($data as $product)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-id">
                                    <span>{{$product->id}}</span>
                                </td>
                                <td class="tb-tnx-info">
                                    
                                        <span class="title">{{$product->gtin}}</span>
                              
                                  
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                   
                                        <span class="amount">{{$product->name}}</span>
                                    
                                    
                                </td>
                              
                                <td>
                                <div class="dropdown">
                                        <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown" aria-expanded="true"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-100px, 36px, 0px);">
                                            <ul class="link-list-plain">
                                                <li><a href="{{route('admin.product.show',['product'=>$product->id])}}">View</a></li>
                                                <li><a href="{{route('admin.product.edit',['product'=>$product->id])}}">Edit</a></li>
                                                {{--    <li><a href="#">Delete</a></li>--}}
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