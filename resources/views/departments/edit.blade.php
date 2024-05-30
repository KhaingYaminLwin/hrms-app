@extends('layouts.dashboard')
@section('content')
<div class="card ml-5 mr-5 mt-5">
    <div class="card-header">Company Page</div>
    <div class="card-body">

        <form action="{{ route('departments.edit', ['id'=> $departments->id ]) }}" method="post">
          {!! csrf_field() !!}
          @method("PATCH")
          <input type="hidden" name="id" id="id" value="{{$departments->id}}" id="id" />
          <label>Name</label></br>
          <input type="text" name="name" id="name" value="{{$departments->name}}" class="form-control" ></br>
          <label>Company Name</label></br>
          <select type="select" name="cities_id" id="cities_id" class="form-control">
            @foreach($cities as $id => $name)
            <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
          </select></br>

          <input type="submit" value="Update" class="btn btn-success"></br>
      </form>

    </div>
  </div>

 @endsection
