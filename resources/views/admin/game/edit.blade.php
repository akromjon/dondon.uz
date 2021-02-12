@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.game_update') }}
                            </li>
                        </ol>
                    </nav>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('game.update',$game->slug) }}">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.name_category') }}</label>
                                <select name="game_categories_id" class="form-control">
                                    @foreach ($gameCategories as $gameCat)
                                        <option value="{{ $gameCat->id }}" {{$game->game_categories_id==$gameCat->id ? 'selected' : null}}>{{ $gameCat->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.game_name') }}</label>
                                <input id="exampleInputText" name="name" value="{{$game->name}}" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('name')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <img width="150" src="{{ asset(str_replace('public','storage',$game->picture)) }}">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">{{ __('lang.upload_picture') }}</label>
                                <input type="file" name="picture" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                            @error('picture')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.height') }}</label>
                                <input value="{{$game->height}}" id="exampleInputText" name="height" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('height')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.width') }}</label>
                                <input value="{{$game->width}}" id="exampleInputText" name="width" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('width')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{ __('lang.url') }}</label>
                                <textarea name="url" class="form-control" id="exampleFormControlTextarea1"
                                    rows="10">{{$game->url}}</textarea>
                            </div>
                            @error('url')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group">
                                <select name="is_published" class="form-control">
                                    <option value="1" {{$game->is_published ? 'selected' : null}}>{{ __('lang.show') }}</option>
                                    <option value="0" {{$game->is_published ? null : 'selected'}}>{{ __('lang.no_show') }}</option>
                                </select>
                            </div>
                            @error('is_published')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            <button type="submit" class="btn btn-primary">{{ __('lang.save') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
