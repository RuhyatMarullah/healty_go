<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col text-right">
            <a type="button" href="<?= base_url(); ?>imun/detail_individu/<?= $individu['id']; ?>" class="btn btn-success btn-icon-split">
                <span class="text">Kembali</span>
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
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="m-0 font-weight-bold text-primary"><?= $individu['nama']; ?></h4>
                            <p><?= $individu['nama_jenis_kelamin']; ?>, usia <?= $individu['usia']; ?> tahun</p>
                        </div>
                        <div class="col-md-6">
                            <table width="100%">
                                <tr>
                                    <td width="30%">
                                        <h5>IMT anda</h5>
                                    </td>
                                    <td>
                                        :<?= round($imt, 2); ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>Berat Badan</h5>
                                    </td>
                                    <td>
                                        : <?= $individu['berat']; ?>(kg)
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Kandungan Gizi</h3>
                        </div>
                        <div class="col-md-4">
                            <h3>Asupan individu</h3>
                        </div>
                        <div class="col-md-4">
                            <h3>AKG</h3>
                        </div>
                    </div>
                    <hr>
                    <table width='100%'>
                        <tr>
                            <td>
                                <h4>Kalori (kkal)</h4>
                                <p>Kebutuhan anda terpenuhi %</p>
                            </td>
                            <td width="30%">
                                <br>
                                <h5><?= round($p_kalori, 2); ?></h5>
                            </td>
                            <td width="30%">
                                <br>
                                <h5><?= round($kalori, 2); ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Protein (gr)</h4>
                                <p>Kebutuhan anda terpenuhi %</p>
                            </td>
                            <td>
                                <br>
                                <h5><?= round($p_protein, 2);
                                    ?></h5>
                            </td>
                            <td>
                                <br>

                                <h5><?= round($protein, 2);
                                    ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Lemak (gr)</h4>
                                <p>Kebutuhan anda terpenuhi %</p>
                            </td>
                            <td>
                                <br>
                                <h5><?= round($p_lemak, 2); ?></h5>
                            </td>
                            <td>
                                <br>

                                <h5><?= round($lemak, 2); ?></h5>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Karbohidrat (gr)</h4>
                                <p>Kebutuhan anda terpenuhi %</p>
                            </td>
                            <td>
                                <br>
                                <h5><?= round($p_karbohidrat, 2); ?></h5>
                            </td>
                            <td>
                                <br>

                                <h5><?= round($karbohidrat, 2); ?></h5>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>

<!-- End of Main Content -->