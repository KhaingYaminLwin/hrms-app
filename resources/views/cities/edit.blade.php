@extends('layouts.dashboard')
@section('content')

<div class="card ml-5 mr-5 mt-5">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('cities/' .$cities->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$cities->id}}" id="id" />
        <label>City Name</label></br>
        <input type="text" name="name" id="name" value="{{$cities->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$cities->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
