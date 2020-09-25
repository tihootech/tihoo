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
                    <div class="col-md-4">
                        <form action="{{route('product.update', $product)}}" method="post" enctype="multipart/form-data" id="update-{{$product->id}}">
                            @csrf
                            @method('PUT')
                            @include('includes.product_form')
                        </form>
                        <form class="d-none" action="{{route('product.destroy', $product)}}" method="post" id="delete-{{$product->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <div class="text-center">
                            <button type="submit" form="update-{{$product->id}}" class="btn btn-info"> ویرایش </button>
                            <button type="button" data-target="delete-{{$product->id}}" class="btn btn-warning delete"> حذف </button>
                        </div>
                    </div>
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

    <div class="card mb-3">
        <div class="card-header">
            <h2 class="main-color"> اعضای تیم </h2>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($members as $member)
                    <div class="col-md-4">
                        <form action="{{route('member.update', $member)}}" method="post" enctype="multipart/form-data" id="update-{{$member->id}}">
                            @csrf
                            @method('PUT')
                            @include('includes.member_form')
                        </form>
                        <form class="d-none" action="{{route('member.destroy', $member)}}" method="post" id="delete-{{$member->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                        <div class="text-center">
                            <button type="submit" form="update-{{$member->id}}" class="btn btn-info"> ویرایش </button>
                            <button type="button" data-target="delete-{{$member->id}}" class="btn btn-warning delete"> حذف </button>
                        </div>
                    </div>
                @endforeach
                <form class="col-md-4" action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('includes.member_form', ['member' => null])
                    <div class="text-center">
                        <button type="submit" class="btn btn-danger"> اضافه کردن </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-header">
            <h2 class="main-color"> پیغام ها </h2>
        </div>
        <div class="card-body">
            <table class="table table-responsive-lg table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th> # </th>
                        <th> name </th>
                        <th> subject </th>
                        <th> phone </th>
                        <th> info </th>
                        <th> action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $i => $message)
                        <tr>
                            <th> {{$i+1}} </th>
                            <td> {{$message->name ?? '-'}} </td>
                            <td> {{$message->subject ?? '-'}} </td>
                            <td> {{$message->phone ?? '-'}} </td>
                            <td> {{$message->info ?? '-'}} </td>
                            <td>
                                <form class="d-none" id="delete-message-{{$message->id}}" action="{{route('message.destroy', $message)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" data-target="delete-message-{{$message->id}}" class="delete btn btn-warning btn-sm"> حذف </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
