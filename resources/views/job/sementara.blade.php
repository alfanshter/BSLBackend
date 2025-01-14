<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
        aria-expanded="false">
        Filter by Time
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li>
            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#customDateModal">Custom
                Time</a>
        </li>
    </ul>
</div>

{{-- modal custom edit --}}
<div class="modal fade" id="customDateModal" tabindex="-1" aria-labelledby="customDateModalLabel" aria-hidden="true">
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


public function filterByTime(Request $request)
{
$startTime = $request->input('start_time');
$endTime = $request->input('end_time');

// Jika tidak ada filter, ambil semua data
$query = Jsarev::with('user');

// Jika ada filter, terapkan
if ($startTime && $endTime) {
$query->whereDate('tanggal', '>=', $startTime)
                ->whereDate('tanggal',
'<=', $endTime);
        }

        $data = $query->get();

        return response()->json([
            'message' =>
$data->isEmpty() ? 'No files found' : 'Files fetched successfully',
'status' => $data->isEmpty() ? 404 : 200,
'data' => $data
]);
}





<script>
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
                console.log(response); // Untuk debug response

                // Tampilkan data yang difilter ke tabel
                const table = $('#user-group');
                table.DataTable().clear(); // Hapus data lama
                // Tambahkan data baru (gunakan 'data' dari response)
                table.DataTable().rows.add(response.data.map(function(file) {
                    return [
                        file.name, // Nama file
                        file.tanggal, // Tanggal file
                        file.user, // Nama user
                        `<a href="${file.file_path}" target="_blank">View File</a>` // Link untuk membuka file
                    ];
                }));
                table.DataTable().draw(); // Render ulang tabel

                // Tutup modal
                $('#customDateModal').modal('hide');
            },
            error: function(error) {
                console.error(error);
                alert('An error occurred while filtering files.');
            }
        });
    }
</script>
