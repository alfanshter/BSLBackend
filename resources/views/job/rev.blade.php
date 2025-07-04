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

                    <!-- DataTable untuk menampilkan hasil -->
                    <table class="table table-striped table-bordered" id="user-group">
                        <thead>
                            <div class="row">
                                <div class="col-2">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            Filter
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a class="dropdown-item" href="#" id="filterLastYear">Last Year</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" id="filterLastMonth">Last Month</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" id="filterLastWeek">Last Week</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                    data-bs-target="#customDateModal">Custom Time</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <button id="refreshData" class="btn btn-primary">Refresh Data</button>
                                </div>
                            </div>
                            <tr>
                                <th>Action</th>
                                <th>File Name</th>
                                <th>User Created</th>
                                <th>Tanggal</th>
                                <th>Created at</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

        <x-popup />


        <div class="modal fade" id="filterModal" tabindex="-1" aria-labelledby="filterModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="filterModalLabel">Filter Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="filterForm">
                            <div class="mb-3">
                                <label for="start_time" class="form-label">Start Time</label>
                                <input type="date" class="form-control" id="start_time" name="start_time">
                            </div>
                            <div class="mb-3">
                                <label for="end_time" class="form-label">End Time</label>
                                <input type="date" class="form-control" id="end_time" name="end_time">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="applyFilter">Apply Filter</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="modalGroup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add File</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="add-group" id="add-group" name="add-group" action="javascript:void(0)" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <input type="hidden" name="id" id="id">
                                <label for="file" class="form-label">Insert File</label>
                                <input type="file" class="form-control" id="file" required name="file"
                                    placeholder="Insert file">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-date"></i></span>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                    id="close">Close</button>
                                <button type="submit" id="btn-save" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
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

        {{-- modal custom edit --}}
        <div class="modal fade" id="customDateModal" tabindex="-1" aria-labelledby="customDateModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="customDateModalLabel">Select Custom Date Range</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="customDateForm">
                            <div class="mb-3">
                                <label for="startDate" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="startDate" required>
                            </div>
                            <div class="mb-3">
                                <label for="endDate" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="endDate" required>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="filterByCustomDate()">Apply</button>
                        </form>
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
                // Inisialisasi DataTables
                var table = $('#user-group').DataTable({
                    processing: true,
                    serverSide: false,
                    ajax: {
                        url: '/job-safety-analysis', // Endpoint untuk mengambil data awal
                        type: 'GET',
                        dataSrc: function(json) {
                            return json.data
                        }
                    },
                    columns: [{
                            data: 'action',
                            name: 'action'
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
                            data: 'tanggal',
                            name: 'tanggal'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        }
                    ]
                });


                $('#refreshData').on('click', function() {
                    $('#user-group').DataTable().ajax.reload(); // Reload data tabel
                });

                $('#applyFilter').on('click', function() {
                    var startTime = $('#start_time').val();
                    var endTime = $('#end_time').val();

                    // Kirim permintaan AJAX untuk filter
                    $.ajax({
                        url: '/filter-by-time', // Endpoint untuk filter
                        type: 'GET',
                        data: {
                            start_time: startTime,
                            end_time: endTime
                        },
                        success: function(response) {
                            if (response.status === 200) {
                                // Perbarui tabel dengan data yang difilter
                                table.clear().rows.add(response.data).draw();
                                // Tutup modal setelah filter diterapkan
                                $('#filterModal').modal('hide');
                            } else {
                                alert(response.message);
                            }
                        },
                        error: function(xhr, status, error) {
                            alert('An error occurred while filtering data.');
                        }
                    });
                });
            });

            // function filter custom date
            function filterByCustomDate() {
                // Ambil nilai waktu dari input
                const startTime = $('#startDate').val(); // Ambil waktu mulai
                const endTime = $('#endDate').val(); // Ambil waktu akhir

                // Validasi input
                if (!startTime || !endTime) {
                    alert('Please select both start and end times.');
                    return;
                }

                // Pastikan format tanggal sesuai (YYYY-MM-DD)
                if (new Date(startTime) > new Date(endTime)) {
                    alert('Start time cannot be after end time.');
                    return;
                }

                // Kirim request AJAX ke server
                $.ajax({
                    url: '/filter-files-time', // Sesuaikan dengan endpoint Anda
                    method: 'GET', // Gunakan method GET atau POST, sesuaikan dengan controller
                    data: {
                        start_time: startTime,
                        end_time: endTime
                    },
                    success: function(response) {
                        console.log(response.data); // Untuk debug response

                        // Ambil instance DataTable
                        const table = $('#user-group').DataTable();

                        // Hapus data lama dari tabel
                        table.clear();

                        // Filter dan map data sebelum menambahkan ke tabel
                        const filteredData = response.data.map(function(file) {
                            return {
                                action: file.action,
                                file: file.file,
                                user_id: file.user_id || 'N/A', // Gunakan 'N/A' jika user_id tidak ada
                                tanggal: file.tanggal, // Tanggal
                                created_at: file.created_at, // Created at
                            };
                        });

                        // Tambahkan data baru ke tabel
                        table.rows.add(filteredData).draw();

                        // Tutup modal filter
                        $('#customDateModal').modal('hide');
                    },
                    error: function(error) {
                        console.error(error);
                        alert('An error occurred while filtering files.');
                    }
                });
            }

            // function 3 menu
            function getDateRange(filterType) {
                const today = new Date();
                let startTime, endTime;

                switch (filterType) {
                    case 'lastYear':
                        startTime = new Date(today.getFullYear() - 1, 0, 1);
                        endTime = new Date(today.getFullYear() - 1, 11, 31);
                        break;
                    case 'lastMonth':
                        startTime = new Date(today.getFullYear(), today.getMonth() - 1, 1);
                        endTime = new Date(today.getFullYear(), today.getMonth(), 0);
                        break;
                    case 'lastWeek':
                        startTime = new Date(today);
                        startTime.setDate(today.getDate() - today.getDay() - 7);
                        endTime = new Date(today);
                        endTime.setDate(today.getDate() - today.getDay() - 1);
                        break;
                    default:
                        startTime = null;
                        endTime = null;
                }

                return {
                    startTime: startTime.toISOString().split('T')[0],
                    endTime: endTime.toISOString().split('T')[0]
                };
            }

            $(document).ready(function() {
                $('#filterLastYear').on('click', function() {
                    const {
                        startTime,
                        endTime
                    } = getDateRange('lastYear');
                    applyFilter(startTime, endTime);
                });

                $('#filterLastMonth').on('click', function() {
                    const {
                        startTime,
                        endTime
                    } = getDateRange('lastMonth');
                    applyFilter(startTime, endTime);
                });

                $('#filterLastWeek').on('click', function() {
                    const {
                        startTime,
                        endTime
                    } = getDateRange('lastWeek');
                    applyFilter(startTime, endTime);
                });
            });

            function applyFilter(startTime, endTime) {
                $.ajax({
                    url: '/filter-files-time',
                    type: 'GET',
                    data: {
                        start_time: startTime,
                        end_time: endTime
                    },
                    success: function(response) {
                        if (response.status === 200) {
                            // Perbarui tabel dengan data yang difilter
                            const table = $('#user-group').DataTable();
                            table.clear().rows.add(response.data).draw();
                        } else {
                            // Tampilkan pop-up error jika data tidak ditemukan atau status bukan 200
                            $(".custom-modal").removeClass("active"); // Sembunyikan semua pop-up
                            $("#notfound-message").text(response.message ||
                            "Data tidak ditemukan."); // Set pesan error
                            $('#notfound-edit-massage').addClass('active'); // Tampilkan pop-up

                            // Sembunyikan pop-up setelah 2 detik
                            setTimeout(function() {
                                $('#notfound-edit-massage').removeClass('active');
                            }, 2000);
                        }
                    },
                    error: function(error) {
                        // Tampilkan pop-up error jika terjadi kesalahan pada request
                        $(".custom-modal").removeClass("active"); // Sembunyikan semua pop-up
                        $("#notfound-message").text(error.notfound); // Set pesan error
                        $('#notfound-edit-massage').addClass('active'); // Tampilkan pop-up

                        // Sembunyikan pop-up setelah 2 detik
                        setTimeout(function() {
                            $('#notfound-edit-massage').removeClass('active');
                        }, 2000);

                        console.error("Error:", error); // Cetak error untuk debugging
                    }
                });
            }

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
                    url: "/jsa-post",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        // Tutup modal setelah tombol Submit ditekan
                        $("#modalGroup").modal('hide');

                        // Tampilkan loader setelah modal ditutup
                        $('#render-loader').show();
                    },
                    success: (response) => {
                        // Sembunyikan loader setelah request selesai
                        $('#render-loader').hide();

                        // Sembunyikan semua pop-up terlebih dahulu
                        $(".custom-modal").removeClass("active");

                        // Tampilkan pop-up berdasarkan status response
                        if (response.status === 1) {
                            // Tampilkan pop-up sukses dengan pesan dari server
                            $("#success-modal .message-type").text(response.success);
                            $("#success-modal").addClass("active");

                            // Reload tabel segera setelah pop-up muncul
                            $('#user-group').DataTable().ajax.reload(null,
                                false); // Reload tanpa reset paging

                            // Sembunyikan pop-up setelah 2 detik
                            setTimeout(function() {
                                $("#success-modal").removeClass("active");
                            }, 2000); // Pop-up akan hilang setelah 2 detik
                        } else {
                            // Tampilkan pop-up error dengan pesan dari server
                            $("#error-modal .message-type").text(response.error);
                            $("#error-modal").addClass("active");

                            // Reload tabel segera setelah pop-up muncul
                            $('#user-group').DataTable().ajax.reload(null,
                                false); // Reload tanpa reset paging

                            // Sembunyikan pop-up setelah 2 detik
                            setTimeout(function() {
                                $("#error-modal").removeClass("active");
                            }, 2000); // Pop-up akan hilang setelah 2 detik
                        }

                        // Reset tombol submit
                        $("#btn-save").html('Submit');
                        $("#btn-save").attr("disabled", false);
                    },
                    error: (data) => {
                        // Sembunyikan loader setelah request selesai
                        $('#render-loader').hide();

                        // Sembunyikan semua pop-up terlebih dahulu
                        $(".custom-modal").removeClass("active");

                        // Tampilkan pop-up error dengan pesan default
                        $("#notfound-data .message-type").text(response.error);
                        $("#error-modal").addClass("active");
                        setTimeout(function() {
                            $("#error-modal").removeClass("active");
                        }, 2000); // Pop-up akan hilang setelah 2 detik

                        console.error("cek error" + response); // Cetak error untuk debugging
                    }
                });
            });
        </script>
    @endpush
