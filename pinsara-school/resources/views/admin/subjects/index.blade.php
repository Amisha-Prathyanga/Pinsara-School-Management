@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">


                <div class="container" style="margin-top: 20px">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Subject List <span class="text-muted fw-normal ms-2">({{$sbjc}})</span></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex  align-items-center justify-content-end mb-3">
                
                <form method="GET" action="{{ url('/admin/subjects') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search" >
                            <div class="input-group" style="margin-right: 20px">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                         <div class="dropdown ml-2" style="width: auto;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Grades
            </button>
            @foreach($subjects as $item)
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">{{$item->grade_id}}</a>
                <!-- <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
            @endforeach
        </div>
                
                    <a href="{{ url('/admin/subjects/create') }}" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary ml-2" style="white-space: nowrap"><i class="bx bx-plus me-1"></i> Add New</a>
                
               
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="">
                <div class="table-responsive">
                    <table class="table project-list-table table-nowrap align-middle table-borderless">
                        <thead>
                            <tr>
                              
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Grade</th>
                                <th scope="col" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->grade_id }}</td>
                              
                                <td>
                                    <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                            <a href="{{ url('/admin/subjects/' . $item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" class="px-2 text-primary"><i class="bx bx-carousel font-size-25"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ url('/admin/subjects/' . $item->id . '/edit') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-warning"><i class="bx bx-pencil font-size-25"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                        <form method="POST" action="{{ url('/admin/subjects' . '/' . $item->id) }}" accept-charset="UTF-8">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" id="delete-button" class="px-2 text-danger"><i class="bx bx-trash-alt font-size-25"></i></button>
                                        </form>
                                        </li>
                                       
                                    </ul>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0 align-items-center pb-4">

        <div class="col-sm-6">
          
        <div class="pagination-wrapper"> {!! $subjects->appends(['search' => Request::get('search')])->render() !!} </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection




