<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Absen</h4>
            <hr>
            <form action="<?php echo base_url('absen/store'); ?>" method="post">
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
                    <label for="">Masuk</label>
                    <input name="masuk" class="form-control" placeholder="Jumlah Masuk"></input>
                </div>
                <div class="form-group">
                    <label for="">Izin</label>
                    <input name="izin" class="form-control" placeholder="Jumlah Izin"></input>
                </div>
                <div class="form-group">
                    <label for="">Alpha</label>
                    <input name="alpha" class="form-control" placeholder="Jumlah Alpha"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>