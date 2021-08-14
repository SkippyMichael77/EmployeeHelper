<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h4>Tabel Golongan</h4>
                <hr>
                <a href="<?php echo base_url('golongan/create'); ?>" class="btn btn-success float-right mb-3">Tambah Golongan</a>
                <?php
                if (!empty(session()->getFlashdata('success'))) { ?>

                    <div class="alert alert-success">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>

                <?php } ?>
                <?php if (!empty(session()->getFlashdata('info'))) { ?>

                    <div class="alert alert-info">
                        <?php echo session()->getFlashdata('info'); ?>
                    </div>

                <?php } ?>

                <?php if (!empty(session()->getFlashdata('warning'))) { ?>

                    <div class="alert alert-warning">
                        <?php echo session()->getFlashdata('warning'); ?>
                    </div>

                <?php } ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <th>No</th>
                            <th>Kode Golongan</th>
                            <th>Nama Golongan</th>
                            <th>Tunjangan Anak</th>
                            <th>Tunjangan Makan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($golongan as $key => $data) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $data['kodegolongan']; ?></td>
                                    <td><?php echo $data['nama_golongan']; ?></td>
                                    <td><?php echo $data['tunjangan_anak']; ?></td>
                                    <td><?php echo $data['tunjangan_makan']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('golongan/edit/' . $data['kodegolongan']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?php echo base_url('golongan/delete/' . $data['kodegolongan']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Golongan <?php echo $data['nama_golongan']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>