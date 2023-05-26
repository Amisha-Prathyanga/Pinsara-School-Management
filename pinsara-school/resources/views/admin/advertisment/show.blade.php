@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card" style="margin-top: 20px">
                    <div class="card-header" style="background-color: rgb(248 250 252)">Advertisment {{ $advertisment->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/advertisment') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/advertisment/' . $advertisment->id . '/edit') }}" title="Edit Advertisment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/advertisment' . '/' . $advertisment->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Advertisment" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $advertisment->id }}</td>
                                    </tr>
                                    <tr><th> Ad ID </th><td> {{ $advertisment->ad_ID }} </td></tr>
                                    <tr><th> Image </th><td> <img src="{{ asset($advertisment->image) }}" width="500" class="img img-responsive"/> </td></tr>
                                    <tr><th> PopImage </th><td> <img src="{{ asset($advertisment->popImage) }}" width="500" class="img img-responsive"/> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Advertisment {{ $advertisment->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/advertisment') }}" title="Back">
                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                            </button>
                        </a>
                        <a href="{{ url('/admin/advertisment/' . $advertisment->id . '/edit') }}" title="Edit Advertisment">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                        </a>

                        <form method="POST" action="{{ url('admin/advertisment' . '/' . $advertisment->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Advertisment" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                            </button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $advertisment->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Ad ID</th>
                                        <td>{{ $advertisment->ad_ID }}</td>
                                    </tr>
                                    <tr>
                                        <th>Image</th>
                                        <td>
                                            <a href="{{ asset($advertisment->popImage) }}" target="_blank">
                                                <img src="{{ asset($advertisment->image) }}" class="img img-responsive"/>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection -->


