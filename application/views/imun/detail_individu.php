<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-200">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah Pangan</span>
            </button>
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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;

                                foreach ($pangan as $row) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $row['tanggal']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>imun/detail_nutrisi/<?= $individu['id']; ?>/<?= $row['tanggal']; ?>" class="btn-sm btn-success btn-icon-split">
                                                <span class="icon text-white-200">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                <span class="text">Informasi Nutrisi</span>
                                            </a>
                                            <button class="btn-sm btn-success btn-icon-split detail_makanan" data-toggle="modal" data-target="#detail_makanan" data-tgl="<?= $row['tanggal']; ?>">
                                                <span class="icon text-white-200">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                <span class="text">Detail Pangan</span>
                                            </button>
                                        </td>
                                    </tr>
                                <?php
                                endforeach;
                                ?>
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

<form action="" method="POST">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pangan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" value="<?= $individu['id']; ?>" name="individu">
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label for="waktu_makan">Waktu Makan</label>
                        <select class="form-control" id="waktu_makan" name="waktu_makan" required>
                            <option value="">-- select --</option>
                            <?php foreach ($jenis_makanan as $p) : ?>
                                <?php if ($p['id'] == set_value('jenis_makanan')) : ?>
                                    <option value="<?= $p['id']; ?>" selected><?= $p['nama']; ?></option>
                                <?php else : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="makan">Makanan</label>
                        <select class="form-control" id="makan" name="makan" required>


                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</form>



<!-- Modal detail makanan-->
<div class="modal fade" id="detail_makanan" tabindex="-1" role="dialog" aria-labelledby="detail_makananLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detail_makananLabel">Detail Pangan <span id="detail_tanggal"></span>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Makanan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody id="body_tail_pangan">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    let root = '<?= base_url() ?>';

    $('#waktu_makan').on('change', function(e) {

        var id = $(this).val();
        var getUrl = root + 'imun/ajax_get_makan/' + id;
        $.ajax({
            url: getUrl,
            type: 'ajax',
            dataType: 'json',
            success: function(response) {
                let html = `<option value="">-- select --</option>`;
                $.each(response, function(index, value) {
                    html += `<option value="${value.id}">${value.nama}</option>`
                });
                $('#makan').html(html);
            },
            error: function(response) {
                console.log(response.status + 'error');
            }
        });
    });

    $('.detail_makanan').on('click', function() {
        let tgl = $(this).data('tgl');
        let id_individu = `<?= $individu['id']; ?>`;
        $('#detail_tanggal').html(tgl);

        var getUrl = root + `imun/ajax_get_pangan/${id_individu}/${tgl}`;

        $.ajax({
            url: getUrl,
            type: 'ajax',
            dataType: 'json',
            success: function(response) {
                let html = ``;
                $.each(response, function(index, value) {
                    html += `
                        <tr>
                            <td>${value.waktu}</td>
                            <td>${value.nama}</td>
                            <td>${value.tanggal}</td>
                        </tr>
                    `
                });
                $('#body_tail_pangan').html(html);
            },
            error: function(response) {
                console.log(response.status + 'error');
            }
        });
    })
</script>
<!-- End of Main Content -->