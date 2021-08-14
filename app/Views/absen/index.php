<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h4>Tabel Absen</h4>
                <hr>
                <a href="<?php echo base_url('absen/create'); ?>" class="btn btn-success float-right mb-3">Tambah Absen</a>
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
                            <th>NIP Pegawai</th>
                            <th>Masuk</th>
                            <th>Izin</th>
                            <th>Alpha</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($absen as $key => $data) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['masuk']; ?></td>
                                    <td><?php echo $data['izin']; ?></td>
                                    <td><?php echo $data['alpha']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('absen/edit/' . $data['id']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?php echo base_url('absen/delete/' . $data['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Absen <?php echo $data['nip']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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