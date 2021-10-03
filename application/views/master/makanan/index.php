<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <a href="<?= base_url(); ?>master/makan/add/" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-200">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Makan</span>
            </a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <input type="hidden" id="switch" value="<?= $judul; ?>">
    <!-- Page Heading -->
    <div class="row">
        <div class="col mt-3">
            <div class="card shadow mb-4 ">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Makan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jenis Makanan</th>
                                    <th>Karbo</th>
                                    <th>Protein</th>
                                    <th>Lemak</th>
                                    <th>Kalori</th>
                                    <th>Berat</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($makan as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $row['nama']; ?></td>
                                        <td><?= $row['nama_jenis_makan']; ?></td>
                                        <td><?= $row['karbo']; ?></td>
                                        <td><?= $row['protein']; ?></td>
                                        <td><?= $row['lemak']; ?></td>
                                        <td><?= $row['kalori']; ?></td>
                                        <td><?= $row['berat']; ?></td>
                                        <td>
                                            <img style="width: 50px;height: 50px;" src="<?= base_url('assets/img/profile/'); ?><?= $row['foto']; ?>">
                                        </td>
                                        <td>
                                            <a href="<?= base_url(); ?>master/makan/edit/<?= $row['id']; ?>" class="btn-sm btn-success btn-icon-split">
                                                <span class="icon text-white-200">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                <span class="text">Edit</span>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
</div>
<!-- End of Main Content -->