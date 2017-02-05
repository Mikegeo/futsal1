@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <div class="panel panel-default">
     <div class="panel-body text-center">
        <img src="{{ Voyager::image( Auth::user()->avatar ) }}" class="avatar" />

       <h1>{{ $user->name }} {{$user->surname}}</h1>
       <h4>{{$user->age}} years old.</h4>
       <h4>{{ $user->email }}</h4>
     </div>
    </div>
  </div>
</div>
@endsection
