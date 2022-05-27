@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $post->image }}">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="description" style="height: 100px" name="description"></textarea>
                    <label for="description">Description</label>
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="category">
                        <option selected>Select the category</option>
                        @foreach ($categories as $category)
                            <option value="{{$category['id']}}">{{$category['name']}}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </div>
</div>
@endsection
