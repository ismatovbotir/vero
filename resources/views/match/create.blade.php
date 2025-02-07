@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">New Match</h3>
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
                    
                    <form action="{{$type==0?route('admin.match.show.post'):route('admin.match.add',['id'=>$data->id])}}" method="POST">
                      
                        @csrf
                        <div class="card-inner">
                            <div class="preview-block">
                                @if (session('message'))
                                <span class="preview-title-lg overline-title text-danger">{{ session('message') }}</span>
                                @elseif (session('success'))
                                <span class="preview-title-lg overline-title text-success">{{ session('success') }}</span>
                                @else
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif 
                                @endif
                                
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-03">SN</label>
                                            <div class="form-control-wrap">
                                                @if ($type==0)
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="sn" autofocus >
                                                @else
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" value="{{$data->sn}}" disabled>
                                                <input type="hidden" class="form-control" id="default-03" placeholder="Input placeholder" name="sn" value="{{$data->sn}}">
                                              
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">

                                            <div class="form-control-wrap">
                                                <label class="form-label" for="default-03">Mark</label>
                                                <div class="form-control-wrap">
                                                @if ($type==0)
                                                    <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="mark" disabled>
                                                @else
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="mark" autofocus >
                                             
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        @if ($type==1)
                                            <label class="form-label" for="default-03">GTIN</label>
                                            <div class="form-control-wrap">
                                            
                                                <input type="text" class="form-control" id="default-03" placeholder="" value="{{$data->product->gtin}}" name="gtin" disabled>
                                            </div>
                                        @endif
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @if ($type==1)
                                            <label class="form-label" for="default-03">Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="default-03" value="{{$data->product->name}}"  name="name" disabled>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row gy-4">
                                    <div class="nk-block-between g-3">
                                        <div class="col-sm-6">
                                            <div class="form-group ml-2">


                                                <button class="btn btn-success">Save</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row gy-4 mt-3">
                               
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