@extends('dashboard.layouts.layout')
@section('title','Car List App')

@section('content')

    <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Users</h4>
                <div class="widget-chart-1">
                    <div class="widget-detail-1">
                        <h2 class="p-t-10 m-b-0"> {{\App\Models\User::count()}} </h2>
                    </div>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-lg-3 col-md-6">
            <div class="card-box">
                <h4 class="header-title m-t-0 m-b-30">Cars</h4>
                <div class="widget-chart-1">
                    <div class="widget-detail-1">
                        <h2 class="p-t-10 m-b-0"> {{\App\Models\Car::count()}} </h2>
                    </div>
                </div>
            </div>
        </div><!-- end col -->


    </div>


@endsection
