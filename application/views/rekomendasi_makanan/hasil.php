<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Rekomendasi Makanan</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card  shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><?= $jenis_makanan['nama']; ?> </h6>
                    <a href="<?= base_url('rekomendasimakanan'); ?>" class="btn-sm btn-success btn-icon-split" style="float: right;">
                        <span class="icon text-white-200">
                            <i class="fas fa-backward"></i>
                        </span>
                        <span class="text">Back</span>
                    </a>
                </div>
                <div class="card-body border-bottom-info">
                    <div class="row">
                        <?php foreach ($makan as $m) : ?>
                            <div class="col-md-3 text-center">
                                <a href="#" data-toggle="modal" data-target="#tampil" class="makanan" data-poto="<?= base_url('assets/img/profile/'); ?><?= $m['foto']; ?>" data-nama="<?= $m['nama']; ?>" data-berat="<?= $m['berat']; ?>" data-kalori="<?= $m['kalori']; ?>" data-karbo="<?= $m['karbo']; ?>" data-lemak="<?= $m['lemak']; ?>" data-protein="<?= $m['protein']; ?>">
                                    <img class="img-profile" src="<?= base_url('assets/img/profile/'); ?><?= $m['foto']; ?>" style="height: 150px; width: 50%;">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="tampil" tabindex="-1" role="dialog" aria-labelledby="tampilLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tampilLabel">Detail Makanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" id="tampil_poto" style="width: 100%;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 id="tampil_nama">

                        </h3>
                    </div>
                    <div class="col-md-12 ">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        Berat
                                    </td>
                                    <td style="width: 70%;">
                                        : <span id="tampil_berat"></span>(gr)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Kalori
                                    </td>
                                    <td>
                                        : <span id="tampil_kalori"></span>(kal)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Karbohidrat
                                    </td>
                                    <td>
                                        : <span id="tampil_karbo"></span>(gr)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Lemak
                                    </td>
                                    <td>
                                        : <span id="tampil_lemak"></span>(gr)
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Protein
                                    </td>
                                    <td>
                                        : <span id="tampil_protein"></span>(gr)
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('.makanan').on('click', function() {
        let nama = $(this).data('nama');
        let poto = $(this).data('poto');
        let karbo = $(this).data('karbo');
        let kalori = $(this).data('kalori');
        let protein = $(this).data('protein');
        let lemak = $(this).data('lemak');
        let berat = $(this).data('berat');

        $('#tampil_nama').html(nama);
        $('#tampil_karbo').html(karbo);
        $('#tampil_kalori').html(kalori);
        $('#tampil_protein').html(protein);
        $('#tampil_lemak').html(lemak);
        $('#tampil_berat').html(berat);
        $('#tampil_poto').attr('src', poto);
    })
</script>