<div class="form-group row">
    <label class="col-md-2 control-label">Name</label>
    <div class="col-md-4">
        {!! Form::text('name',null,[
                           'class' =>'form-control '.($errors->has('name') ? ' is-invalid' : null),
                           'placeholder'=> 'Name' ,
                           ]) !!}
        @error('name')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>

    <label class="col-md-2 control-label" for="example-email">
        Email</label>
    <div class="col-md-4">
        {!! Form::email('email',null,[
                     'class' =>'form-control '.($errors->has('email') ? ' is-invalid' : null),
                     'placeholder'=> 'Email' ,
                     ]) !!}
        @error('email')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 control-label">Password</label>
    <div class="col-md-4">
        {!! Form::password('password',[
                     'class' =>'form-control '.($errors->has('password') ? ' is-invalid' : null),
                     'placeholder'=> 'Password' ,
                     ]) !!}
        @error('password')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror </div>

    <label class="col-md-2 control-label">Password Confirmation</label>
    <div class="col-md-4">
        {!! Form::password('password_confirmation',[
                     'class' =>'form-control '.($errors->has('password_confirmation') ? ' is-invalid' : null),
                     'placeholder'=>  'Password Confirmation' ,
                     ]) !!}
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 control-label"> Role</label>
    <div class="col-sm-4">
        {!! Form::select('roles',$roles,null,['class' =>'form-control '.($errors->has('roles') ? ' is-invalid' : null)
 , 'placeholder'=>  'Select Role', ]) !!}
        @error('roles')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>




<div class="text-center form-group row">
    <button type="submit"
            class="btn btn-success btn-block waves-effect waves-light m-l-10 btn-md"> Save
    </button>
</div>
