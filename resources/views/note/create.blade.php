@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Create a new note</h1>
    </div>
    <form action="{{route('create.note')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input name="title" type="text" class="form-control" id="titleInput" placeholder="Enter note title">
        </div>
        <div class="form-group">
            <label for="contentInput">Contents</label>
            <textarea name="contents" placeholder="Note contents" id="contentInput" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection