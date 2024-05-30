@extends('layouts.dashboard')
@section('content')

<div class="card ml-5 mr-5 mt-5">
  <div class="card-header">Department</div>
  <div class="card-body">

      {{-- <form action="{{ url('departments') }}" method="post"> --}}
        <form action="{{ route('departments.store') }}" method="post">
        @csrf
        <label>Department Name</label></br>
        <input type="text" name="name" id="name" class="form-control">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </br>
        {{-- <label>City Name</label></br>
        <select name="cities_id" id="cities_id" class="form-control">
            @foreach($cities as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
    </br> --}}
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection
