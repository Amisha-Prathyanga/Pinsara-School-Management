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
                                    <tr><th> Image </th><td> <img src="{{ asset($advertisment->image) }}" width="500" class="img img-responsive" id="normalImage"/> </td></tr>
                                    <tr><th> PopImage </th><td> <img src="{{ asset($advertisment->popImage) }}" width="500" class="img img-responsive"/> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="popImageModal" tabindex="-1" role="dialog" aria-labelledby="popImageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="popImageModalLabel">PopImage</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset($advertisment->popImage) }}" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('normalImage').addEventListener('click', function() {
            $('#popImageModal').modal('show');
        });
    </script>
@endsection




