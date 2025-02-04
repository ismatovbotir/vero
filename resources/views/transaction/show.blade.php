@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Номенклатуры</h3>
                <div class="nk-block-des text-soft">
                    <p>You have total 937 orders.</p>
                </div>
            </div><!-- .nk-block-head-content -->
            <div class="nk-block-head-content">
                <a href="{{route('price.import')}}" class="btn btn-danger">Import</a>
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
                                <th class="tb-tnx-id"><span class="">SAP</span></th>
                                <th class="tb-tnx-info">
                                    Gruppa
                                </th>
                                <th class="tb-tnx-info">
                                    <span class="tb-tnx-total">Maxsulot</span>
                                   
                                </th>
                                <th class="tb-tnx-info">
                                    Narx
                                   
                                </th>
                                
                            </tr><!-- tb-tnx-item -->
                        </thead>
                        <tbody>
                            @foreach($data as $priceData)
                            <tr class="tb-tnx-item">
                                <td class="tb-tnx-id">
                                    <a href="{{route('product.show',['product'=>$priceData->product->id])}}"><span>{{$priceData->product->sap}}</span></a>
                                </td>
                                <td class="tb-tnx-info">
                                    
                                        <span class="title">{{$priceData->product->group}}</span>
                              
                                  
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                   
                                        <span class="amount">{{$priceData->product->name}}</span>
                                    
                                    
                                </td>
                                <td class="tb-tnx-amount is-alt">
                                
                                        <span class="amount">{{$priceData->price}}</span>
                                   
                                    
                                </td>
                                
                            </tr><!-- tb-tnx-item -->
                            @endforeach
                        </tbody>
                    </table>
                </div><!-- .card-inner -->

                <div class="card-inner">
                {{$data->links()}}    
                
                {{--<ul class="pagination justify-content-center justify-content-md-start">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>--}}
                </div><!-- .card-inner -->
            </div><!-- .card-inner-group -->
        </div><!-- .card -->
    </div><!-- .nk-block -->
</div>



@endsection