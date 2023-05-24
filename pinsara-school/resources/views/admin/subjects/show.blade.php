@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Subject {{ $subject->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/subjects') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/subjects/' . $subject->id . '/edit') }}" title="Edit Subject"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/subjects' . '/' . $subject->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Subject" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $subject->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $subject->name }} </td></tr>
                                    <tr><th> Description </th><td> {{ $subject->description }} </td></tr>
                                    <tr><th> VideoLink </th>
                                    <td> 
                                    @if ($subject->videoLink)
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="{{ $subject->videoLink }}" allowfullscreen></iframe>
                                                </div>
                                            @else
                                                No video available.
                                            @endif
                                    </td></tr>
                                    <tr><th> Image </th><td><img src="{{ asset($subject->image) }}" class="img img-responsive"/></td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
