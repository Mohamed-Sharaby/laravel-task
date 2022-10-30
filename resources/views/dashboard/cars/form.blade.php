<div class="form-group row">
    <label class="col-md-2 control-label">Model</label>
    <div class="col-md-4">
        {!! Form::text('model',null,[
                           'class' =>'form-control '.($errors->has('model') ? ' is-invalid' : null),
                           'placeholder'=> 'Model' ,
                           ]) !!}
        @error('model')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>

    <label class="col-md-2 control-label" for="example-color">
        Color</label>
    <div class="col-md-4">
        {!! Form::text('color',null,[
                     'class' =>'form-control '.($errors->has('color') ? ' is-invalid' : null),
                     'placeholder'=> 'Color' ,
                     ]) !!}
        @error('color')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-md-2 control-label">Year</label>
    <div class="col-md-4">
        <select name="year" id="year" class="form-control {{$errors->has('year') ? ' is-invalid' : null}}">
            <option disabled selected>Select Year</option>
            @foreach(years() as $year)
                <option value="{{$year}}" {{ isset($car) && $car->year == $year ? 'selected':''}}>{{$year}}</option>
            @endforeach
        </select>
        @error('year')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror </div>

    <label class="col-md-2 control-label" for="example-mileage">
        Mileage</label>
    <div class="col-md-4">
        {!! Form::number('mileage',null,[
                     'class' =>'form-control '.($errors->has('mileage') ? ' is-invalid' : null),
                     'placeholder'=> 'Mileage' ,
                     ]) !!}
        @error('mileage')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 control-label"> Image</label>
    <div class="col-sm-4">
        {!! Form::file('image',[ 'class' =>'form-control '.($errors->has('image') ? ' is-invalid' : null) ]) !!}
        @error('image')
        <div class="invalid-feedback" style="color: #ef1010">
            {{ $message }}
        </div>
        @enderror
    </div>
    @isset($car)
        @if($car->image)
            <a data-fancybox="gallery" href="{{$car->image}}">
                <img src="{{$car->image}}" width="100" height="100"
                     class="img-thumbnail">
            </a>
        @else No Image    @endif
    @endisset
</div>

<div class="form-group row">
    <div class="col-md-12">
        <input type="hidden" name="lat" id="lat" value="{{old('lat')}}">
        <input type="hidden" name="lng" id="lng" value="{{old('lng')}}">

        <div id="map" style="height: 500px;"></div>

    </div>
</div>


<div class="text-center form-group row">
    <button type="submit"
            class="btn btn-success btn-block waves-effect waves-light m-l-10 btn-md"> Save
    </button>
</div>


