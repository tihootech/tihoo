@extends('layouts.dash')

@section('content')

    <div class="card mb-3">
        <div class="card-header">
            <h2 class="main-color"> مدیریت وبسایت </h2>
        </div>
        <div class="card-body">
            <form class="row" action="{{route('website.update')}}" method="post" id="website-form">

                @csrf
                @method('PUT')

                <div class="form-group col-md-5">
                    <label for="banner_title"> banner_title </label>
                    <textarea name="banner_title" id="banner_title" rows="2" class="form-control">{{$website->banner_title}}</textarea>
                </div>
                <div class="form-group col-md-7">
                    <label for="banner_title"> address </label>
                    <textarea name="address" id="address" rows="2" class="form-control">{{$website->address}}</textarea>
                </div>
                <div class="form-group col-md-9">
                    <label for="banner_info"> banner_info </label>
                    <textarea name="banner_info" id="banner_info" rows="4" class="form-control">{{$website->banner_info}}</textarea>
                </div>
                <div class="form-group col-md-3">
                    <label for="phones"> phones </label>
                    <textarea name="phones" id="phones" rows="4" class="form-control">{{commoTonewLine($website->phones)}}</textarea>
                </div>

            </form>
        </div>
        <div class="card-footer">
            <div class="col-md-2 mx-auto">
                <button type="submit" form="website-form" class="btn btn-danger btn-block"> تایید </button>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h2 class="main-color"> نمونه کارها </h2>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($products as $product)
                    <form class="col-md-4" action="{{route('product.update', $product)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('includes.product_form')
                        <div class="text-center">
                            <button type="submit" class="btn btn-info"> ویرایش </button>
                        </div>
                    </form>
                @endforeach
                <form class="col-md-4" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('includes.product_form', ['product' => null])
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger"> اضافه کردن </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
