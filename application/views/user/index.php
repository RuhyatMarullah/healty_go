<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-7 col-md-6 mb-4">
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
                            <h5 class="card-title"><?= $user['nama']; ?></h5>
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