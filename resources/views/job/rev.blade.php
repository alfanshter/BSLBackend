@extends('template.main')

@section('container')
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/render.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                <th> Created at </th>
                            </tr>
                        </thead>
                        <tbody></tbody>

                    </table>
                </div>
            </div>
        </div>

        <x-popup />

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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="closeedit">Batal</button>
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
                // Setup CSRF token untuk AJAX
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                // Inisialisasi DataTables
                var table = $('#user-group').DataTable({
                    serverSide: true, // Aktifkan server-side processing
                    ajax: "/job-safety-analysis", // URL endpoint untuk data
                    columns: [{
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
                    ],
                    // Tampilkan loader sebelum request dikirim
                    preXhr: function() {
                        $('#render-loader').show(); // Tampilkan loader
                    },
                    // Sembunyikan loader setelah request selesai
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.addEventListener('loadend', function() {
                            $('#render-loader').hide(); // Sembunyikan loader
                        });
                        return xhr;
                    }
                });
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
                            $('#editGroup').modal('hide'); // Tutup modal

                            $(".custom-modal").removeClass("active"); // Sembunyikan modal lain

                            // Tampilkan loader sebelum memulai reload tabel
                            $('#render-loader').show();

                            // Reload tabel dengan ajax
                            $('#user-group').DataTable().ajax.reload(function() {
                                // Sembunyikan loader setelah tabel selesai di-reload
                                $('#render-loader').hide();

                                // Tampilkan pesan sukses
                                $("#edit-message").text(data.edit); // Gunakan pesan dari server

                                // Tampilkan pop-up sukses
                                $('#success-edit-message').addClass('active');

                                // Sembunyikan pop-up setelah 3 detik
                                setTimeout(function() {
                                    $('#success-edit-message').removeClass('active');
                                }, 2000);

                                // Perbarui tampilan nama file di tabel
                                $('#file-' + id).text(data.file); // Update nama file di tabel
                            });
                        } else {
                            alert('Terjadi kesalahan: ' + data.error); // Tampilkan pesan error jika ada
                        }
                    },
                    error: function(error) {
                        $('#editGroup').modal('hide'); // Tutup modal
                        $(".custom-modal").removeClass(
                            "active"); // Pastikan modal yang ada di halaman lain disembunyikan

                        // Mengubah teks pada elemen dengan id 'deletes-message'
                        $("#edir-message").text(error
                            .edir
                        ); // Gunakan `res.message` jika server mengirimkan pesan dalam `message`

                        // Tampilkan pop-up
                        $('#error-edit-message').addClass('active'); // Tampilkan pop-up

                        // Pop-up akan hilang setelah 3 detik
                        setTimeout(function() {
                            $('#error-edit-message').removeClass(
                                'active'); // Sembunyikan pop-up
                        }, 2000);
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
                        // Sembunyikan modal lain yang aktif
                        $(".custom-modal").removeClass("active");

                        // Tampilkan loader sebelum memulai reload tabel
                        $('#render-loader').show();

                        // Reload tabel dengan ajax
                        $('#user-group').DataTable().ajax.reload(function() {
                            // Sembunyikan loader setelah tabel selesai di-reload
                            $('#render-loader').hide();

                            // Tampilkan pesan sukses dari server
                            $("#deletes-message").text(res.deletes);

                            // Tampilkan pop-up sukses
                            $('#success-delete-message').addClass('active');

                            // Sembunyikan pop-up setelah 2 detik
                            setTimeout(function() {
                                $('#success-delete-message').removeClass('active');
                            }, 2000); // Pop-up akan hilang setelah 2 detik
                        });
                    },
                    error: function(xhr, status, error) {
                        $(".custom-modal").removeClass(
                            "active"); // Pastikan modal yang ada di halaman lain disembunyikan

                        $('#user-group').DataTable().ajax.reload(); // Reload tabel

                        // Mengubah teks pada elemen dengan id 'deletes-message'
                        $("#deleter-message").text(res
                            .deleter
                        ); // Gunakan `res.message` jika server mengirimkan pesan dalam `message`

                        // Tampilkan pop-up
                        $('#error-delete-message').addClass('active'); // Tampilkan pop-up

                        // Pop-up akan hilang setelah 3 detik
                        setTimeout(function() {
                            $('#error-delete-message').removeClass(
                                'active'); // Sembunyikan pop-up
                        }, 2000); // Pop-up akan hilang setelah 3 detikn pesan error
                    }
                });
            });

            // Handle tombol "Batal" di modal
            $('#closeDeleteModal').click(function() {
                $('#deleteModal').modal('hide'); // Sembunyikan modal
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

            $('#add-group').submit(function(e) {
                e.preventDefault(); // Cegah form dari submit default
                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    url: "{{ url('jsa-post') }}",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        // Tutup modal setelah tombol Submit ditekan
                        $("#modalGroup").modal('hide');

                        // Tampilkan loader setelah modal ditutup
                        setTimeout(function() {
                            $('#render-loader').show();
                        }, 300); // Delay kecil untuk memastikan modal sudah tertutup
                    },
                    success: (response) => {
                        // Sembunyikan loader setelah request selesai
                        $('#render-loader').hide();

                        // Sembunyikan semua pop-up terlebih dahulu
                        $(".custom-modal").removeClass("active");

                        // Cek status dari respons server
                        if (response.status === 1) {
                            // Tampilkan pop-up sukses dengan pesan dari server
                            $("#success-modal .message-type").text(response.success);
                            $("#success-modal").addClass("active");
                            setTimeout(function() {
                                $("#success-modal").removeClass("active");
                            }, 2000); // Pop-up akan hilang setelah 2 detik
                        } else {
                            // Tampilkan pop-up error dengan pesan dari server
                            $("#error-modal .message-type").text(response.error);
                            $("#error-modal").addClass("active");
                            setTimeout(function() {
                                $("#error-modal").removeClass("active");
                            }, 2000); // Pop-up akan hilang setelah 2 detik
                        }

                        // Operasi lainnya
                        var oTable = $('#user-group').dataTable();
                        oTable.fnDraw(false); // Reload tabel

                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    },
                    error: (data) => {
                        // Sembunyikan loader setelah request selesai
                        $('#render-loader').hide();

                        // Sembunyikan semua pop-up terlebih dahulu
                        $(".custom-modal").removeClass("active");

                        // Tampilkan pop-up error dengan pesan default
                        $("#error-modal .message-type").text("Terjadi kesalahan saat mengunggah file.");
                        $("#error-modal").addClass("active");
                        setTimeout(function() {
                            $("#error-modal").removeClass("active");
                        }, 2000); // Pop-up akan hilang setelah 2 detik

                        console.error(data); // Cetak error untuk debugging
                    }
                });
            });
        </script>
    @endpush
