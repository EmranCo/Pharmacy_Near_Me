@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <h3>اضافة مدينة</h3>
            </div>
            <div class="card-content">
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
              @endforeach
                @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{session('error') }}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
    <form action={{route('admin-create_Cities');}} method="POST">



    <div class="mb-3">
                <label for="exampleInputName" class="form-label">اسم المدينة</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
                </div>

    <button  id="submit_button"  type="submit" class="btn btn-primary">اضافة</button>
    </form>

            </div>
        </div>
</div>



@stop
