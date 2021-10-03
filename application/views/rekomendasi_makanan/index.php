<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Rekomendasi Makanan</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">

        <?php foreach ($jenis_makanan as $jm) : ?>

            <div class="col-md-12">
                <div class="card  shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"><?= $jm['nama']; ?>
                            <a href="<?= base_url('rekomendasimakanan/hasil/'); ?><?= $jm['id']; ?>" style="float: right;"><span>all</span></a>
                        </h6>
                    </div>
                    <div class="card-body border-bottom-info">
                        <div class="row">
                            <?php foreach ($makan as $m) : ?>
                                <?php if ($m['id_jenis_makan'] == $jm['id']) : ?>
                                    <div class="col-md-3 text-center">
                                        <img class="img-profile" src="<?= base_url('assets/img/profile/'); ?><?= $m['foto']; ?>" style="height: 150px; width: 50%;">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>



    </div>
</div>
</div>