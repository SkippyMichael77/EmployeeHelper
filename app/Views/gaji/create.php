<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Gaji</h4>
            <hr>
            <form action="<?php echo base_url('gaji/store'); ?>" method="post">
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
                    <label for="">Tanggal</label>
                    <input name="tanggal" class="form-control" placeholder="YYYY-MM-DD"></input>
                </div>
                <div class="form-group">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="Keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Gaji</label>
                    <input name="jumlah_gaji" class="form-control" placeholder="Jumlah Gaji"></input>
                </div>
                <div class="form-group">
                    <label for="">Bonus</label>
                    <input name="bonus" class="form-control" placeholder="Jumlah Bonus"></input>
                </div>
                <div class="form-group">
                    <label for="">Potongan</label>
                    <textarea name="potongan" class="form-control" placeholder="Jumlah Potongan"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Total Gaji</label>
                    <input name="total_gaji" class="form-control" placeholder="Total Gaji"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>