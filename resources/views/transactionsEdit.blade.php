@extends('mainlayout')

@section('content')

<form method="POST">
    @csrf
    <div class="form-group">
        <br>
        <label>Transaction location</label>
        <input name="location" type="text" class="form-control" value="{{$transaction->location}}">

        <br>
        <label>Transaction description</label>
        <input name="description" type="text" class="form-control" value="{{$transaction->description}}">

        <br>
        <label>Transaction purchase date</label>
        <input name="purchase_date" type="date" class="form-control " value="{{$transaction->purchase_date->format('Y-m-d')}}">

        <br>
        <label>Transaction cost</label>
        <input name="cost" type="text" class="form-control" value="{{$transaction->cost}}">
    </div>

    <button type="submit">Create</button>
</form>
@endsection