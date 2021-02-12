@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('lang.users') }}</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Old-Status</th>
                                    <th scope="col">Current-Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $key => $user)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $user->phone_number }}</td>
                                        <td>{{ $user->roles }}</td>
                                        <td>{{ $user->old_status }}</td>
                                        <td>{{ $user->status }}</td>
                                        <td>
                                            <a href="{{ route('user.delete', $user->id) }}">
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">                    
                    <div class="card-header">{{ __('lang.game_categories') }} <a href="{{route('game.category.create')}}"><button class="btn btn-success float-right">Add a Game Category</button></a></div>
                    <div class="card-body">                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Picture</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Visibility</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gameCategories as $key => $gameCategory)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $gameCategory->name }}</td>
                                        <td><img width="80" src="{{ asset(str_replace('public','storage',$gameCategory->picture)) }}"></td>
                                        <td>{{ $gameCategory->description }}</td>
                                        <td>{{ $gameCategory->slug }}</td>
                                        <td>{{ $gameCategory->is_published ? 'Yes' : 'No' }}</td>
                                        <td style="display: inline-flex; padding: 5px">
                                            <a href="{{ route('game.category.edit', $gameCategory->slug) }}" class="mr-1">                                               
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </a>
                                            <form method="POST" action="{{route('game.category.destroy',$gameCategory->slug)}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $gameCategories->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="card">                    
                    <div class="card-header">{{ __('lang.games') }} <a href="{{route('game.create')}}"><button class="btn btn-success float-right">Add a Game</button></a></div>
                    <div class="card-body">                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">User</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($games as $key => $game)
                                    <tr>
                                        <th scope="row">{{ $key }}</th>
                                        <td>{{ $game->name }}</td>
                                        <td><img width="80" src="{{ asset(str_replace('public','storage',$game->picture)) }}"></td>
                                        <td>{{$game->category_name}}</td>
                                        <td>{{ $game->slug }}</td>
                                        <td>{{ $game->user_name }}</td>
                                        <td style="display: inline-flex; padding: 5px">
                                            <a href="{{ route('game.edit', $game->slug) }}" class="mr-1">                                               
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </a>
                                            <form method="POST" action="{{route('game.destroy',$game->slug)}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $gameCategories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
