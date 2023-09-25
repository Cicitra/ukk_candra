<?php
include '../koneksi.php';
$id_kelas = $_GET['id_kelas'];
$query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas");
// $query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_kelas = '".$data['id_kelas']."'");
if (!$query) {
    trigger_error(mysqli_error($koneksi), E_USER_ERROR);
}
$data = mysqli_fetch_assoc($query);
?>

<h5>Halaman Edit Kelas</h5>
<a href="?url=kelas" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-kelas&id_kelas=<?= $id_kelas; ?>">
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['nama_kelas'] ?>" type="text" name="nama_kelas" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Kompetensi Keahlian</label>
        <input value="<?= $data['kompetensi_keahlian'] ?>" type="text" name="kompetensi_keahlian" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>
