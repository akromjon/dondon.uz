@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.game_category_create') }}
                            </li>
                        </ol>
                    </nav>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('game.category.store') }}">
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.name_category') }}</label>
                                <input id="exampleInputText" name="name" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}" value="{{$gameCategory->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">{{ __('lang.upload_picture') }}</label>
                                <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{__('lang.description')}}</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"  rows="3">{{$gameCategory->description}}</textarea>
                              </div>
                            <button type="submit" class="btn btn-primary">{{__('lang.submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
