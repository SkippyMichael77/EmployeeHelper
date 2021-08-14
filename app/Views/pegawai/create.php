<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Pegawai</h4>
            <hr>
            <form action="<?php echo base_url('pegawai/store'); ?>" method="post">
                <div class="form-group">
                    <label for="">NIP Pegawai</label>
                    <input type="text" name="nip" class="form-control" placeholder="NIP Pegawai">
                </div>
                <div class="form-group">
                    <label for="">Nama Pegawai</label>
                    <input name="nama" class="form-control" placeholder="Nama Pegawai"></input>
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskel" id="jeniskel1" value="Pria">
                        <label class="form-check-label" for="jeniskel1">
                            Pria
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jeniskel" id="jeniskel2" value="Wanita" checked>
                        <label class="form-check-label" for="jeniskel2">
                            Wanita
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input name="Tempatlahir" class="form-control" placeholder="Tempat Lahir"></input>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input name="Tanggallahir" class="form-control" placeholder="YYYY-MM-DD"></input>
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <input name="agama" class="form-control" placeholder="Agama"></input>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select class="form-select" name="statusnikah" aria-label="Default select example">
                        <option selected>Pilih Status ..</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Alamat Rumah</label>
                    <textarea name="alamat" class="form-control" placeholder="Alamat"></textarea>
                </div>
                <div class="form-group row">
                    <label for="kodejabatan" class="col-sm-3">Jabatan</label>
                    <select id="kodejabatan" name="kodejabatan" class="custom-select border-transparent" data-style="btn btn-link">
                        <option id="kodejabatan" name="kodejabatan" selected>Pilih Jabatan..
                            <?php
                            $con = new mysqli("localhost", "root", "", "10119269_kepegawaian");
                            $sql = mysqli_query($con, "SELECT kodejabatan,nama_jabatan FROM data_jabatan") or die(mysqli_error($con));
                            while ($data_jabatan = mysqli_fetch_array($sql)) {
                                echo '<option id="kodejabatan" name="kodejabatan" value="' . $data_jabatan['kodejabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                            }
                            ?>
                        </option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="kodegolongan" class="col-sm-3">Golongan</label>
                    <select id="kodegolongan" name="kodegolongan" class="custom-select border-transparent" data-style="btn btn-link">
                        <option id="kodegolongan" name="kodegolongan" selected>Pilih Golongan..
                            <?php
                            $con = new mysqli("localhost", "root", "", "10119269_kepegawaian");
                            $sql = mysqli_query($con, "SELECT kodegolongan,nama_golongan FROM data_golongan") or die(mysqli_error($con));
                            while ($data_golongan = mysqli_fetch_array($sql)) {
                                echo '<option id="kodegolongan" name="kodegolongan" value="' . $data_golongan['kodegolongan'] . '">' . $data_golongan['nama_golongan'] . '</option>';
                            }
                            ?>
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>