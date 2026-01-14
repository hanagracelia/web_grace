<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Todo List || UKK RPL 2025</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Aplikasi ToDo List</h2>
        <form method="POST" class="border rounded bg-light p-3 mb-4">
            <label class="form-label">Nama Task</label>
            <input type="text" name="task" class="form-control" required>
            <label class="form-label mt-2">Prioritas</label>
            <select name="priority" class="form-control" required>
                <option value="">--Pilih Prioritas--</option>
                <option value="1">Low</option>
                <option value="2">Medium</option>
                <option value="3">High</option>
            </select>
            <label class="form-label mt-2">Tanggal</label>
            <input type="date" name="due_date" class="form-control" value="<?php echo date('Y-m-d') ?>" required>
            <button type="submit" class="btn btn-primary w-100 mt-3" name="add_task">Tambah</button>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Task</th>
                    <th>Prioritas</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['task']; ?></td>
                            <td>
                                <?php
                                switch ($row['priority']) {
                                    case 1: echo "Low"; break;
                                    case 2: echo "Medium"; break;
                                    case 3: echo "High"; break;
                                    default: echo "-";
                                }
                                ?>
                            </td>
                            <td><?php echo $row['due_date']; ?></td>
                            <td><?php echo $row['status'] == 1 ? 'Selesai' : 'Belum'; ?></td>
                            <td>
                                <?php if ($row['status'] == 0) { ?>
                                    <a href="?complete=<?php echo $row['id'] ?>" class="btn btn-success btn-sm">Selesai</a>
                                <?php } ?>
                                <button 
                                     class="btn btn-danger btn-sm" 
                                     onclick="showDeleteModal(<?php echo $row['id']; ?>)">Hapus</button>
                            </td>
                        </tr>
                    <?php }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Tidak ada Data !!</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- Modal Konfirmasi Hapus -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form method="POST" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus task ini?
            <input type="hidden" name="task_id" id="task_id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" name="confirm_delete" class="btn btn-danger">Hapus</button>
          </div>
        </form>
      </div>
    </div>
    <script>
        function showDeleteModal(id) {
            document.getElementById('task_id').value = id;
            var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
            deleteModal.show();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html