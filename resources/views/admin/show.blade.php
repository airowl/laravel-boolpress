@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            @if (session('create'))
                <div class="alert alert-success" role="alert">
                    {{ session('create') }}
                </div>
            @endif
        </div>
        <div class="col-12 text-center mt-5">

            <img class="my-img" src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['title'] }}">
            <h1>{{ $post['title'] }}</h1>
            <p>{{ $post['description'] }}</p>

        </div>
        <div class="col-12 text-center">
            <a href="{{ route('admin.posts.index') }}">
                <button type="button" class="btn btn-primary">Home</button>
            </a>
        </div>
    </div>
</div>
@endsection

{{--@dump($post->users->name)--}}
