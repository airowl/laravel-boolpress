@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1>Ciao {{Auth::user()->name}}</h1>
            <a href="{{ route('admin.posts.create') }}" class="me-3">
                <button type="button" class="btn btn-primary">Create a new post</button>
            </a>
            @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            @if (session('update'))
                <div class="alert alert-success" role="alert">
                    {{ session('update') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Categories</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)

                        <tr>
                            <th scope="row">{{ $post['id'] }}</th>
                            <td>
                                <a href="{{ route('admin.posts.show', $post['id']) }}">
                                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-25">
                                </a>
                            </td>
                            <td>
                                @foreach ($post->categories as $category)
                                    {{ $category->name }}
                                @endforeach
                            </td>
                            <td>
                                {{ $post->user->name }} - {{ $post->user_id }}
                            </td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post['id']) }}">
                                    {{ $post['title'] }}
                                </a>
                            </td>
                            <td>{{ $post['description'] }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.posts.edit', $post['id']) }}" class="me-3">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{route('admin.posts.destroy', $post['id'])}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="sumbit" class="btn btn-danger" >Delete</button>
                                </form>
                            </td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">There are no posts to show</td>
                        </tr>
                        @endforelse
                    </tbody>

            </table>
        </div>
    </div>
</div>
@endsection
