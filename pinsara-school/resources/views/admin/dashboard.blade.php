@extends('layouts.app')

@section('content')
    <div class="container ">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
            <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3> {{$gc}}</h3>
                    <p> Grades </p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="{{ url('/admin/grades') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3> {{$sbjc}}</h3>
                    <p> Subjects </p>
                </div>
                <div class="icon">
                    <i class="fa fa-dropbox" aria-hidden="true"></i>
                </div>
                <a href="{{ url('/admin/subjects') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3> {{$stdc}} </h3>
                    <p> Students </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="{{ url('/admin/students') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> {{$ac}} </h3>
                    <p> Advertisments </p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ url('/admin/advertisment') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-violet">
                <div class="inner">
                    <h3> {{$nc}} </h3>
                    <p> Push Notifications </p>
                </div>
                <div class="icon">
                    <i class="fa fa-bell"></i>
                </div>
                <a href="{{ url('/admin/notifications') }}" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
   
            </div>
        </div>
    </div>
@endsection
