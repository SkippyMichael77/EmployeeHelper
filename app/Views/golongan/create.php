<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Tambah Golongan</h4>
            <hr>
            <form action="<?php echo base_url('golongan/store'); ?>" method="post">

                <div class="form-group">
                    <label for="">Kode Golongan</label>
                    <input type="text" name="kodegolongan" class="form-control" placeholder="Kode Golongan">
                </div>
                <div class="form-group">
                    <label for="">Nama Golongan</label>
                    <input name="nama_golongan" class="form-control" placeholder="Nama Golongan"></input>
                </div>
                <div class="form-group">
                    <label for="">Tunjangan Anak</label>
                    <input name="tunjangan_anak" class="form-control" placeholder="Tunjangan Anak"></input>
                </div>
                <div class="form-group">
                    <label for="">Tunjangan Makan</label>
                    <input name="tunjangan_makan" class="form-control" placeholder="Tunjangan Makan"></input>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>