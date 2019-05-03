@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($notes->isEmpty())
                <div class="card">
                    <div class="card-header">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        You are logged in!
                    </div>
                </div>
            @else
            <div class="row">
                @foreach($notes as $note)
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                              <h5 class="card-title">{{$note->title}}</h5>
                              <p class="card-text">{{$note->contents}}</p>
                              <a href="{{route('update.note.page', $note->id)}}" class="btn btn-primary">Update</a>
                              <a href="{{route('delete.note', $note->id)}}" class="btn btn-danger">Delete</a>
                            </div>
                          </div>
                        </div>
                @endforeach
                    </div>
            @endif
            
        </div>
    </div>
</div>
@endsection
