<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Jabatan</h4>
            <hr>
            <form action="<?php echo base_url('jabatan/store'); ?>" method="post">

                <div class="form-group">
                    <label for="">Kode Jabatan</label>
                    <input type="text" name="kodejabatan" class="form-control" placeholder="Kode Jabatan">
                </div>
                <div class="form-group">
                    <label for="">Nama Jabatan</label>
                    <input name="nama_jabatan" class="form-control" placeholder="Nama jabatan"></input>
                </div>
                <div class="form-group">
                    <label for="">Gaji Pokok</label>
                    <input name="gaji_pokok" class="form-control" placeholder="Gaji Pokok"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>