@extends('admin.master',['menu'=>'category_list'])
@section('title', isset($title) ? $title : '')
@section('style')
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{__('Add Category')}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">{{__('Category Management')}}</a></li>
                        <li class="breadcrumb-item active">{{__('Add Category')}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">{{__('Add Category')}}</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @include('admin.message')
                            <form method="POST" action="{{route('admin_store_category')}}">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('Title')}}</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="{{__('Enter title')}}">
                                </div>
                                <div class="form-group">
                                    <label for="description">{{__('Description')}}</label>
                                    <textarea id="description" class="form-control" name="description"></textarea>
                                </div>
                                <button type="submit" class="btn btn-info">{{__('Add Category')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
