@extends('layouts.app')

@section('contentBody')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between g-3">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">New Product</h3>
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
                    <form action="{{route('admin.product.store')}}" method="POST">
                        @csrf
                        <div class="card-inner">
                            <div class="preview-block">
                                <span class="preview-title-lg overline-title">Create New Product</span>
                                <div class="row gy-4">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-03">Art</label>
                                            <div class="form-control-wrap">
                                               
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="id">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">

                                            <div class="form-control-wrap">
                                                <label class="form-label" for="default-03">Name</label>
                                                <div class="form-control-wrap">
                                                    
                                                    <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="name">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label" for="default-03">GTIN</label>
                                            <div class="form-control-wrap">
                                               
                                                <input type="text" class="form-control" id="default-03" placeholder="Input placeholder" name="gtin">
                                                
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <label class="form-label" for="default-03">Photo</label>
                                            <div class="form-control-wrap">
                                               
                                                <input type="file" class="form-control" id="default-03" placeholder="Input placeholder" name="img">
                                                
                                            </div>  
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