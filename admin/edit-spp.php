<?php
include '../koneksi.php';
$id_spp = $_GET['id_spp'];
$query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp");
// $query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp = '".$data['id_spp']."'");
if (!$query) {
    trigger_error(mysqli_error($koneksi), E_USER_ERROR);
}
$data = mysqli_fetch_assoc($query);

?>
<h5>Halaman Edit SPP</h5>
<a href="?url=spp" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-edit-spp&id_spp=<?= $data['id_spp'] ?>"> 
<div class="form-group mb-2">
        <label>Tahun</label>
        <input value="<?= $data['id_spp'] ?>" type="number" name="tahun" maxlength="4" class="form-control" readonly>
    </div>
    <div class="form-group mb-2">
        <label>Tahun</label>
        <input value="<?= $data['tahun'] ?>" type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Nominal</label>
        <input value="<?= $data['nominal'] ?>" type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>
    </div>
</form>
