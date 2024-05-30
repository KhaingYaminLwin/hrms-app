@extends('layouts.dashboard')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>City Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
             <div class="card ml-5 mr-5">
                    <div class="card-header">
                        <h2>City</h2>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                        </div>

                    </div>

                    <div class="card-body">
                        <a href="{{ route('cities.create') }}" class="btn btn-success btn-sm" title="Add New City">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New City
                        </a>

                        <br/>
                        <br/>
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                          <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>City Name</th>
                                        <th>Address</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($cities as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>


                                            <td class="project-actions text-right">
                                                <a href="{{ url('/cities/' . $item->id . '/edit') }}" title="Edit City"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/cities' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                  {{ method_field('DELETE') }}
                                                  {{ csrf_field() }}
                                                  <button type="submit" class="btn btn-danger btn-sm" title="Delete City" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa-solid fa-trash" aria-hidden="true"></i> Delete</button>
                                              </form>
                                            </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

@endsection
