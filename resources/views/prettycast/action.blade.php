<a class="btn btn-gradient-success btn-rounded btn-sm" 
   href="{{ asset('storage/prettycast/' . $prettyCast->file) }}" 
   target="_blank" 
   rel="noopener">
    <i class="mdi mdi-printer"></i>
</a>


<a class="btn btn-gradient-info btn-rounded btn-sm" href="javascript:void(0)" id="editModal" data-id="{{ $prettyCast->id }}"
    data-file="{{ basename($prettyCast->file) }}" onClick="editFunc({{ $prettyCast->id }})" data-toggle="tooltip"
    data-original-title="Edit">
    <i class="mdi mdi-pencil-box"></i>
</a>


<a class="btn btn-gradient-danger btn-rounded btn-sm" id="delete-group" href="javascript:void(0)"
    onClick="deleteFunc({{ $prettyCast->id }})" data-toggle="tooltip" data-original-title="Delete">
    <i class="mdi mdi-delete"></i>
</a>
