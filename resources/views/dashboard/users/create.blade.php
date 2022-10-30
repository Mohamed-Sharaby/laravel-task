@extends('dashboard.layouts.layout')
@section('title','Add User')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="breadcrumb">
                    <a href="{{route('dashboard')}}" class="header-title m-t-0 m-b-30"><i class="icon-home2 mr-2"></i>
                        Dashboard</a> /
                    <a href="{{route('users.index')}}" class="header-title m-t-0 m-b-30"><i
                            class="icon-home2 mr-2"></i>
                        Users </a> /
                    <span class="breadcrumb-item active">@yield('title')</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">

                            <h4 class="header-title m-t-0 m-b-30">Add User</h4>
                            {!!Form::open( ['route' => 'users.store', 'method' => 'Post','role'=>'form','class'=>'form-horizontal','files'=>true,

                            ]) !!}
                            @include('dashboard.users.form')
                            {!!Form::close() !!}
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection
