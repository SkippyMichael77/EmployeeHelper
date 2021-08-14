<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Lembur</h4>
            <hr>
            <form action="<?php echo base_url('lembur/store'); ?>" method="post">
                <div class="form-group row">
                    <label for="nip" class="col-sm-3">NIP Pegawai</label>
                    <select id="nip" name="nip" class="custom-select border-transparent" data-style="btn btn-link">
                        <option id="nip" name="nip" selected>Pilih NIP..
                            <?php
                            $con = new mysqli("localhost", "root", "", "10119269_kepegawaian");
                            $sql = mysqli_query($con, "SELECT nip,nama FROM data_pegawai") or die(mysqli_error($con));
                            while ($data_jabatan = mysqli_fetch_array($sql)) {
                                echo '<option id="nip" name="nip" value="' . $data_jabatan['nip'] . '">' . $data_jabatan['nama'] . '</option>';
                            }
                            ?>
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lembur</label>
                    <input name="tgl_lembur" class="form-control" placeholder="YYYY-MM-DD"></input>
                </div>
                <div class="form-group">
                    <label for="">Lembur</label>
                    <input name="lembur" class="form-control" placeholder="Jumlah Lembur"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>