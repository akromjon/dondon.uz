@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('lang.game_create') }}
                            </li>
                        </ol>
                    </nav>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="{{ route('game.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.name_category') }}</label>
                                <select name="game_categories_id" class="form-control">
                                    @foreach ($gameCategories as $game)
                                        <option value="{{ $game->id }}">{{ $game->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.game_name') }}</label>
                                <input id="exampleInputText" name="name" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('name')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
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
                                <input id="exampleInputText" name="height" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('height')
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputText">{{ __('lang.width') }}</label>
                                <input id="exampleInputText" name="width" type="text" class="form-control"
                                    placeholder="{{ __('lang.enter') }} {{ __('lang.name_category') }}">
                                @error('width')url
                                    <div class="alert alert-danger mt-2" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{ __('lang.url') }}</label>
                                <textarea name="url" class="form-control" id="exampleFormControlTextarea1"
                                    rows="10"></textarea>
                            </div>
                            @error('url')
                                <div class="alert alert-danger mt-2" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror

                            <div class="form-group">
                                <select name="is_published" class="form-control">
                                    <option value="1" selected>{{ __('lang.show') }}</option>
                                    <option value="0">{{ __('lang.no_show') }}</option>
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
