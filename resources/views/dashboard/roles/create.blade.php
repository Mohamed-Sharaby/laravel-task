@extends('dashboard.layouts.layout')
@section('title','Add Role')

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

                            <h4 class="header-title m-t-0 m-b-30">Add Role</h4>
                            {!!Form::open( ['route' => 'roles.store', 'method' => 'Post','role'=>'form','class'=>'form-horizontal','files'=>true,

                            ]) !!}


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label col-lg-2">Role Name  </label>
                                <div class="col-12 col-lg-8">
                                    {!! Form::text('name',null,[
                                      'class' =>'form-control '.($errors->has('name') ? ' is-invalid' : null),
                                      'placeholder'=> 'Role Name' ,
                                      ]) !!}
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-md-2 col-form-label col-lg-2">Permissions</label>

                                <div class="col-12 col-lg-8">
                                    @foreach($permissions as $permission)
                                        <div class="col-sm-3">
                                            <div class="checkbox checkbox-pink">
                                                <input id="{{$permission->id}}" type="checkbox"
                                                       name="permission[]" value="{{$permission->id}}"
                                                       {{in_array($permission->id,old('permission')??[]) ? 'checked' : ''}}
                                                       data-parsley-multiple="groups" data-parsley-mincheck="2">
                                                <label
                                                    for="{{$permission->id}}"> {{$permission->name}} </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>



                            <div class="text-center form-group row">
                                <button type="submit"
                                        class="btn btn-success btn-block waves-effect waves-light m-l-10 btn-md"> Save
                                </button>
                            </div>

                            {!!Form::close() !!}
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection
