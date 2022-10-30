<td class="text-center">

    <a href="{{route('roles.edit',$model->id)}}" title="Edit"
       class="btn-icon waves-effect btn btn-primary btn-sm ml-2 rounded-circle"><i
            class="fa fa-edit"></i></a>

    <button data-url="{{route('roles.destroy',$model->id)}}" data-name="{{$model->name}}"
            class="btn-icon waves-effect btn btn-danger rounded-circle btn-sm ml-2 delete" title="Delete">
        <i class="fa fa-trash"></i>
    </button>

</td>
