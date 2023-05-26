@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <!-- <div class="card">
                    <div class="card-header">Advertisment</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/advertisment/create') }}" class="btn btn-success btn-sm" title="Add New Advertisment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/advertisment') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Ad ID</th><th>Image</th><th>PopImage</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($advertisment as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->ad_ID }}</td>
                                        <td> <img src="{{ asset($item->image) }}" width="200" class="img img-responsive"/> </td>
                                        <td><img src="{{ asset($item->popImage) }}" width="200" class="img img-responsive"/></td>
                                        <td>
                                            <a href="{{ url('/admin/advertisment/' . $item->id) }}" title="View Advertisment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/advertisment/' . $item->id . '/edit') }}" title="Edit Advertisment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/admin/advertisment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Advertisment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $advertisment->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div> -->


                <div class="container" style="margin-top: 20px">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Advertisement List <span class="text-muted fw-normal ms-2">({{$ac}})</span></h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                
                <form method="GET" action="{{ url('/admin/advertisment') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group" style="margin-right: 20px">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                <div>
                    <a href="{{ url('/admin/advertisment/create') }}" data-bs-toggle="modal" data-bs-target=".add-new" class="btn btn-primary"><i class="bx bx-plus me-1"></i> Add New</a>
                </div>
               
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
                                <th scope="col">URL</th>
                                <th scope="col">Image</th>
                                <th scope="col">Pop Image</th>
                                <!-- <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Projects</th> -->
                                <th scope="col" style="width: 200px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($advertisment as $item)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->ad_ID  }}</td>
                            <td> <img src="{{ asset($item->image) }}" width="200" class="img img-responsive"/> </td>
                            <td><img src="{{ asset($item->popImage) }}" width="200" class="img img-responsive"/></td>
                              
                                <!-- <td><img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="avatar-sm rounded-circle me-2" /><a href="#" class="text-body">Simon Ryles</a></td> -->
                                <!-- <td><span class="badge badge-soft-success mb-0">Full Stack Developer</span></td>
                                <td>SimonRyles@minible.com</td>
                                <td>125</td> -->
                                <td>
                                    <ul class="list-inline mb-0">
                                    <li class="list-inline-item">
                                            <a href="{{ url('/admin/advertisment/' . $item->id) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="View" class="px-2 text-primary"><i class="bx bx-carousel font-size-25"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="{{ url('/admin/advertisment/' . $item->id . '/edit') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="px-2 text-warning"><i class="bx bx-pencil font-size-25"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                        <form method="POST" action="{{ url('/admin/advertisment' . '/' . $item->id) }}" accept-charset="UTF-8">
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
          
        <div class="pagination-wrapper"> {!! $advertisment->appends(['search' => Request::get('search')])->render() !!} </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
@endsection
