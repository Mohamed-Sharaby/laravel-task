@extends('dashboard.layouts.layout')
@section('title','Edit Role')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="breadcrumb">
                    <a href="{{route('dashboard')}}" class="header-title m-t-0 m-b-30"><i class="icon-home2 mr-2"></i>
                        Dashboard</a> /
                    <a href="{{route('roles.index')}}" class="header-title m-t-0 m-b-30"><i
                            class="icon-home2 mr-2"></i>
                        Roles </a> /
                    <span class="breadcrumb-item active">@yield('title')</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class="header-title m-t-0 m-b-30">
                                Edit Role
                                <span class="badge badge-info">{{$role->name}}</span>
                            </h4>

                            {!! Form::model($role,['route'=>['roles.update',$role->id],'method'=>'PUT','role'=>'form','class'=>'form-horizontal','files'=>true]) !!}


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label col-lg-2">Role Name</label>
                                <div class="col-12 col-lg-8">
                                    {!! Form::text('name',null,[
                                 'class' =>'form-control '.($errors->has('name') ? ' is-invalid' : null),
                                 'placeholder'=> 'Role Name' ,
                                 ]) !!}
                                    @error('name')
                                    <div class="invalid-feedback" style="color: #ef1010">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label col-lg-2">  Permissions  </label>


                                <div class="col-12 col-lg-8">
                                    @foreach($permission  as $value)
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-pink">
                                                <input id="{{$value->id}}" type="checkbox" name="permission[]" value="{{$value->id}}"
                                                       {{in_array($value->id,$rolePermissions) ? 'checked' : ''}}
                                                       data-parsley-multiple="groups" data-parsley-mincheck="2" >
                                                <label for="{{$value->id}}"> {{$value->name}} </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit"
                                        class="btn btn-block btn-success waves-effect waves-light m-l-10 btn-md"> Save
                                </button>
                            </div>


                            {!! Form::close() !!}
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection
