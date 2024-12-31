@extends('template.main')

@section('container')
    <div class="page-header">
        <h3 class="page-title"> Job Safety Analysis Rev </h3>
        <a href="javascript:void(0)" class="btn btn-gradient-primary btn-icon-text btn-md" onClick="add()">
            <i class="mdi mdi-plus-box btn-icon-prepend"></i> Add </a>
    </div>

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    {{-- {{ $dataTable->table() }} --}}
                    <table class="table table-striped table-bordered" id="user-group">
                        <thead>
                            <tr>
                                <th> Action </th>
                                <th> File Name </th>
                                <th> User Created </th>
                                <th> Created at</th>
                            </tr>
                        </thead>
                        <tbody></tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modalGroup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                    </div>
                    <div class="modal-body">
                        <form class="add-group" id="add-group" name="add-group" action="javascript:void(0)" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id" id="id">
                                <label for="exampleInputName1">Insert file</label>
                                <input type="file" class="form-control" id="file" required name="file"
                                    placeholder="Insert file">
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

        <!-- Modal Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    </div>
                    <div class="modal-body">
                        Apakah Anda yakin ingin menghapus file ini?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="closeDeleteModal">Batal</button>
                        <button type="button" class="btn btn-danger" id="confirmDelete">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal untuk Edit -->
        <div class="modal fade" id="editGroup" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit File</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Input untuk File Baru -->
                        <div class="form-group">
                            <label for="file">File Baru</label>
                            <input type="file" class="form-control" id="editFile" required>
                            <p id="currentFile" class="text-muted mt-2"></p> <!-- Menampilkan file lama -->
                        </div>
                        <input type="hidden" id="editId"> <!-- Input hidden untuk ID -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeedit">Batal</button>
                        <button type="button" class="btn btn-primary" id="editRev">Simpan Perubahan</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        {{-- <script src="{{ asset('/js/myjs.js') }}"></script> --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $(document).ready(function() {
                    var table = $('#user-group').DataTable({
                        // processing: true,
                        serverSide: true,
                        ajax: "/job-safety-analysis-rev",
                        columns: [
                            // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false
                            },
                            {
                                data: 'file',
                                name: 'file'
                            },
                            {
                                data: 'user_id',
                                name: 'user_id'
                            },
                            {
                                data: 'created_at',
                                name: 'created_at'
                            },
                        ]
                    });
                });
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

            // Fungsi untuk mengedit data
            // Fungsi untuk menampilkan modal edit
            function editFunc(id) {
                // Ambil tombol yang diklik
                let button = $('a[data-id="' + id + '"]');
                let file = button.data('file'); // Ambil nama file dari atribut data-file

                // Reset form sebelum modal muncul
                $('#file').val(''); // Reset input file
                $('#currentFile').text('File saat ini: ' + file); // Tampilkan file lama
                $('#editId').val(id); // Isi ID ke input hidden

                // Tampilkan modal
                $('#editGroup').modal('show');
            }

            // Event Listener untuk tombol Simpan Perubahan
            document.getElementById('editRev').addEventListener('click', function() {
                // Ambil data dari modal
                let id = document.getElementById('editId').value; // ID dari input hidden
                let fileInput = document.getElementById('editFile'); // Input file
                let file = fileInput.files[0]; // File yang diunggah

                // Validasi jika file belum dipilih
                if (!file) {
                    alert('Harap pilih file sebelum menyimpan!');
                    return;
                }

                // Buat FormData untuk mengirim file
                let formData = new FormData();
                formData.append('id', id);
                formData.append('file', file);

                // Kirim data menggunakan $.ajax
                $.ajax({
                    url: '/edit-jsa', // URL endpoint
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF Token
                    },
                    data: formData,
                    processData: false, // Jangan proses data
                    contentType: false, // Jangan set content type
                    success: function(data) {
                        console.log(data);

                        if (data.status == 1) {
                            alert('Data berhasil disimpan');
                            $('#editGroup').modal('hide'); // Tutup modal
                            var oTable = $('#user-group').dataTable();
                            oTable.fnDraw(false);
                            // Perbarui tampilan secara dinamis
                            $('#file-' + id).text(data.file); // Update nama file di tabel
                        } else {
                            alert('Terjadi kesalahan: ');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Terjadi kesalahan saat mengirim data');
                    }
                });
            });

            // Handle tombol "Batal" di modal edit
            $("#closeedit").click(function() {
                $("#editGroup").modal('hide');
            });


            let deleteId; // Variabel untuk menyimpan ID yang akan dihapus

            function deleteFunc(id) {
                deleteId = id; // Simpan ID yang akan dihapus
                $('#deleteModal').modal('show'); // Tampilkan modal konfirmasi
            }

            // Handle tombol "Hapus" di modal
            $('#confirmDelete').click(function() {
                $('#deleteModal').modal('hide'); // Sembunyikan modal

                $.ajax({
                    type: "DELETE",
                    url: "{{ url('delete-jsa') }}/" + deleteId, // Kirim ID sebagai bagian dari URL
                    dataType: 'json',
                    success: function(res) {
                        $('#user-group').DataTable().ajax.reload(); // Reload tabel
                        alert(res.message); // Tampilkan pesan sukses
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", xhr.responseJSON);
                        alert("Terjadi kesalahan saat menghapus data."); // Tampilkan pesan error
                    }
                });
            });

            // Handle tombol "Batal" di modal
            $('#closeDeleteModal').click(function() {
                $('#deleteModal').modal('hide'); // Sembunyikan modal
            });

            $('#add-group').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ url('jsa-post') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: (data) => {
                        $("#modalGroup").modal('hide');
                        var oTable = $('#user-group').dataTable();
                        oTable.fnDraw(false);
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            });
        </script>
    @endpush
