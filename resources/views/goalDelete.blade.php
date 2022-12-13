@extends('mainlayout')

@section('content')

<form method="POST">
    @csrf
    <h1>Do you want to remove {{$goal->description}}</h1>

    <button type="submit">Delete</button>
    <a href="{{route('goals')}}">Go back</a>
</form>
@endsection