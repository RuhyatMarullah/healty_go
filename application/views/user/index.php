<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-10 col-md-10 mb-4">
        <h1 class="h3 mb-4 text-gray-700"><?= $judul; ?></h1>
        <?= $this->session->flashdata('message'); ?>
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['img']; ?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <table width="100%">
                                <tr>
                                    <th width="30%">
                                        Nama
                                    </th>
                                    <td>
                                        : <?= $user['nama']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        Jenis Kelamin
                                    </th>
                                    <td>
                                        : <?= $user['jenis_kelamin']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        Tempat Lahir
                                    </th>
                                    <td>
                                        : <?= $user['tempat_lahir']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        Tanggal Lahir
                                    </th>
                                    <td>
                                        : <?= $user['tgl_lahir']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        No HP
                                    </th>
                                    <td>
                                        : <?= $user['no_hp']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        Alamat
                                    </th>
                                    <td>
                                        : <?= $user['alamat']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th width="30%">
                                        Email
                                    </th>
                                    <td>
                                        : <?= $user['email']; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->