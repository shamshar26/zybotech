@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Services</h1>
        <form action=" {{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="des">Description</label>
                <textarea name="Description" id="des"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection