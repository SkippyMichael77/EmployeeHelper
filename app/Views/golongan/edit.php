<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-body">
            <h4>Form Edit Golongan</h4>
            <hr>
            <form action="<?php echo base_url('golongan/update/' . $golongan['kodegolongan']); ?>" method="post">

                <div class="form-group">
                    <label for="">Kode Golongan</label>
                    <input type="text" name="kodegolongan" value="<?php echo $golongan['kodegolongan']; ?>" class="form-control" placeholder="Kode Golongan">
                </div>
                <div class="form-group">
                    <label for="">Nama Golongan</label>
                    <input type="text" name="nama_golongan" value="<?php echo $golongan['nama_golongan']; ?>" class="form-control" placeholder="Nama Golongan">
                </div>
                <div class="form-group">
                    <label for="">Tunjangan Anak</label>
                    <input type="text" name="tunjangan_makan" value="<?php echo $golongan['tunjangan_makan']; ?>" class="form-control" placeholder="Tunjangan Anak">
                </div>
                <div class="form-group">
                    <label for="">Tunjangan Makan</label>
                    <input type="text" name="tunjangan_makan" value="<?php echo $golongan['tunjangan_makan']; ?>" class="form-control" placeholder="Tunjangan Makan">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>