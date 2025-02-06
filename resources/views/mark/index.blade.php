@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Transactions</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total {{$data->total()}} imports.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="{{route('admin.mark.create')}}" class="btn btn-info">Import</a>
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
                                <th class="tb-tnx-id"><span class="">ID</span></th>
                               
                                <th class="tb-tnx-info">
                                    <span class="tb-tnx-total">Date</span>
                                   
                                </th>
                                <th class="tb-tnx-info">
                                    Miqdor
                                   
                                </th>
                                
                            </tr><!-- tb-tnx-item -->
                        </thead>
                        <tbody>
                            @foreach($data as $trans)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-id">
                                    <a href="{{route('admin.mark.show',['mark'=>$trans->id])}}"><span>{{$trans->id}}</span></a>
                                </td>
                                
                                <td class="tb-tnx-amount is-alt">
                                   
                                        <span class="amount">{{$trans->created_at}}</span>
                                    
                                    
                                </td>
                                <td>
                                    {{$trans->marks_count}}
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