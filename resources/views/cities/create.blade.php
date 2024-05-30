{{-- @extends('layout.dashboard')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="card">
  <div class="card-header">Add City</div>
  <div class="card-body">

      <form action="{{ route('cities.create') }}" method="post">
        @csrf
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control">
        @error('address')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection --}}


@extends('layouts.dashboard')
@section('content')

<div class="card ml-5 mr-5 mt-5">
  <div class="card-header">City Page</div>
  <div class="card-body">

      <form action="{{ url('cities') }}" method="post">
        {!! csrf_field() !!}
        <label>City Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection
