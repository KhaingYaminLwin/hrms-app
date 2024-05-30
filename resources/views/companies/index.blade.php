@extends('layouts.dashboard')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

                <section class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1>Company Page</h1>
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
                        <h2>Company</h2>
                    </div>
                    <div class="card-body">
                        {{-- <a href="{{ url('/companies/create') }}" class="btn btn-success btn-sm" title="Add New Batches"> --}}
                            <a href="{{ route('companies.create') }}" class="btn btn-success btn-sm" title="Add New Batches">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>City Name</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($companies as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->cities->name }}</td>


                                        <td>
                                            <a href="{{ route('companies.edit', [$item->id]) }}" title="Edit Company"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square" aria-hidden="true"></i> Edit</button></a>

                                            {{-- <form method="POST" action="{{ url('/companies' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline"> --}}
                                                {{-- <form method="POST" action="{{ route('companies.index', [$item->id]) }}" accept-charset="UTF-8" style="display:inline"> --}}

                                                    <form method="POST" action="{{ route('companies.delete', [$item->id]) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Batch" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa-solid fa-trash" aria-hidden="true"></i> Delete</button>
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
