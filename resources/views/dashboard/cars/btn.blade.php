<td class="text-center">

    @if($image)
        <a data-fancybox="gallery" href="{{$image}}">
            <img src="{{$image}}" width="100" height="100"
                 class="img-thumbnail">
        </a>
    @endif

    @can('Edit')
        <a href="{{route('cars.edit',$id)}}" title="Edit"
           class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-circle"><i
                class="fa fa-edit"></i></a>
    @endcan

    @can('Delete')
        <button data-url="{{route('cars.destroy',$id)}}" data-name="{{$model}}"
                class="btn-icon waves-effect btn btn-danger rounded-circle btn-sm ml-2 delete" title="Delete">
            <i class="fa fa-trash"></i>
        </button>
    @endcan

</td>
