@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card" style="margin-top: 20px">
                    <div class="card-header" style="background-color: rgb(248 250 252)">Notification {{ $notification->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/notifications') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <!-- <a href="{{ url('/admin/notifications/' . $notification->id . '/edit') }}" title="Edit Notification"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/notifications' . '/' . $notification->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Notification" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form> -->
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $notification->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $notification->title }} </td></tr><tr><th> Body </th><td> {{ $notification->body }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
