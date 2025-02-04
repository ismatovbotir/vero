@extends('layouts.app')

@section('contentBody')
<form action="{{route('price.import')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class="form-label" for="customFileLabel">Excel file</label>
        <div class="form-control-wrap">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="markFile" name="xls">
                <label class="custom-file-label" for="customFile">Fayl Tanlang</label>
            </div>
            <div class="mt-3">
                <button class="btn btn-info" type="submit">Загрузить</button>
            </div>
        </div>
    </div>
</form>

@if ($errors->any())
    <div class="alert alert-danger mt-3">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection