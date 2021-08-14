<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Edit Jabatan</h4>
            <hr>
            <form action="<?php echo base_url('jabatan/update/' . $jabatan['kodejabatan']); ?>" method="post">

                <div class="form-group">
                    <label for="">Kode Jabatan</label>
                    <input type="text" name="kodejabatan" value="<?php echo $jabatan['kodejabatan']; ?>" class="form-control" placeholder="Kode Jabatan">
                </div>
                <div class="form-group">
                    <label for="">Nama Jabatan</label>
                    <input type="text" name="nama_jabatan" value="<?php echo $jabatan['nama_jabatan']; ?>" class="form-control" placeholder="Nama Jabatan">
                </div>
                <div class="form-group">
                    <label for="">Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" value="<?php echo $jabatan['gaji_pokok']; ?>" class="form-control" placeholder="Gaji Pokok">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>