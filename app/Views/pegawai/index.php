<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-body">
                <h4>Tabel Pegawai</h4>
                <hr>
                <a href="<?php echo base_url('pegawai/create'); ?>" class="btn btn-success float-right mb-3">Tambah Pegawai</a>
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
                            <th>Nama Pegawai</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Alamat Rumah</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($pegawai as $key => $data) { ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['jeniskel']; ?></td>
                                    <td><?php echo $data['Tempatlahir']; ?></td>
                                    <td><?php echo $data['Tanggallahir']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['statusnikah']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['kodejabatan']; ?></td>
                                    <td><?php echo $data['kodegolongan']; ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo base_url('pegawai/edit/' . $data['nip']); ?>" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                            <a href="<?php echo base_url('pegawai/delete/' . $data['nip']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus Pegawai <?php echo $data['nama']; ?> ini?')"><i class="fas fa-trash-alt"></i></a>
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