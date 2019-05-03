@extends('layouts.app')
@section('content')
<div class="container">
    <div class="text-center">
        <h1>Update a note</h1>
    </div>
    <form action="{{route('update.note')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="titleInput">Title</label>
            <input name="title" type="text" class="form-control" id="titleInput" placeholder="Enter note title" value="{{$note->title}}">
        </div>
        <div class="form-group">
            <label for="contentInput">Contents</label>
            <textarea name="contents" placeholder="Note contents" id="contentInput" class="form-control" cols="30" rows="10">{{$note->contents}}</textarea>
        </div>
        <input type="hidden" name="noteID" value="{{$note->id}}">
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection