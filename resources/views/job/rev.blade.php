@extends('template.main')

@section('container')
    <div class="page-header">
        <h3 class="page-title"> JSA REV </h3>
        <a href="javascript:void(0)" class="btn btn-gradient-primary btn-icon-text btn-md" onClick="add()">
            <i class="mdi mdi-plus-box btn-icon-prepend"></i> Adds </a>
    </div>
    <br><br>
    <x-notify::notify />
    @notifyJs
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($message = session()->get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="job">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Nama File</th>
                                <th>User Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $datas)
                                <tr data-entry-id="{{ $datas->id }}">
                                    <td>
                                        <div class="btn-group">
                                            <!-- Tombol Download -->
                                            <a class="btn btn-gradient-success btn-outline-secondary btn-sm"
                                                href="{{ asset('storage/docs/' . $datas->file) }}" download>
                                                <i class="mdi mdi-download"></i> Download
                                            </a>

                                            <!-- Tombol Edit -->
                                            <a class="btn btn-gradient-info btn-outline-secondary btn-sm"
                                                href="javascript:void(0);" data-toggle="modal" data-target="#editModal"
                                                data-id="{{ $datas ? $datas->id : '' }}"
                                                data-file="{{ $datas ? $datas->file : '' }}">
                                                <i class="mdi mdi-pencil-box"></i> Edit
                                            </a>


                                            <!-- Tombol Delete -->
                                            <form action="{{ route('delete', $datas->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-gradient-danger btn-outline-secondary btn-sm"
                                                    onclick="return confirm('Apakah anda menyetujui?')">
                                                    <i class="mdi mdi-delete"></i> Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{ $datas->file }}</td>
                                    <td>{{ $datas->created_at->format('d-m-Y H:i:s') }}</td>
                                    <!-- Menampilkan tanggal upload -->
                                </tr>
                                <!-- Modal Edit File -->
                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit File</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Form Edit File -->
                                                <form action="{{ route('edit', $datas ? $datas->id : '') }}" id="file"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label for="file">Pilih File Baru</label>
                                                        <!-- Menampilkan input file hanya jika ada file -->
                                                        @if ($datas && $datas->file)
                                                            <input type="file" name="file" id="file"
                                                                class="form-control">
                                                            <small class="form-text text-muted">File yang sudah ada:
                                                                {{ $datas->file }}</small>
                                                        @else
                                                            <input type="file" name="file" id="file"
                                                                class="form-control" required>
                                                            <small class="form-text text-muted">Tidak ada file yang
                                                                di-upload. Silakan unggah file
                                                                baru.</small>
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="id" id="file-id"
                                                        value="{{ $datas ? $datas->id : '' }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update File</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- modal upload file --}}
    <div class="modal fade" id="modalGroup" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                </div>
                <div class="modal-body">
                    <form class="add-group" id="add-group" name="add-group" action="/job-safety-analysis-post"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">file</label>
                            <input type="file" name="file" class="form-control" required placeholder="Group Name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close">Close</button>
                    <button type="submit" id="btn-save" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    {{-- <script src="{{ asset('/js/myjs.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('#job').DataTable();
        });

        function add() {
            $('#add-group').trigger("reset");
            $('#exampleModalLabel').html("Add Group");
            $('#modalGroup').modal('show');
            $('#id').val('');
        }

        $("#close").click(function() {
            $("#modalGroup").modal('hide');
        });

        $('#editModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var fileId = button.data('id');
            var fileName = button.data('file');

            if (!fileId || !fileName) {
                alert('Data tidak valid!');
                return;
            }

            var modal = $(this);
            modal.find('.modal-title').text('Edit File: ' + fileName);
            modal.find('#file-id').val(fileId);
            modal.find('#edit-file-form').attr('action', '/edit-jsa/' + fileId);
        });
    </script>
@endpush
