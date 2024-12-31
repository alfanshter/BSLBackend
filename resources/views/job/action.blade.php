<a class="btn btn-gradient-success btn-rounded btn-sm" href="storage/docs/{{ $jsarev->file }}" >
    <i class="mdi mdi-printer"></i>
</a>

<a class="btn btn-gradient-info btn-rounded btn-sm" href="javascript:void(0)" id="editModal" data-id="{{ $jsarev->id }}"
    data-file="{{ basename($jsarev->file) }}" onClick="editFunc({{ $jsarev->id }})" data-toggle="tooltip"
    data-original-title="Edit">
    <i class="mdi mdi-pencil-box"></i>
</a>


<a class="btn btn-gradient-danger btn-rounded btn-sm" id="delete-group" href="javascript:void(0)"
    onClick="deleteFunc({{ $jsarev->id }})" data-toggle="tooltip" data-original-title="Delete">
    <i class="mdi mdi-delete"></i>
</a>
