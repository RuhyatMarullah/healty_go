<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Index Masa Tubuh</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="<?= base_url('indexmasatubuh/hasil'); ?>" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_kelaminn">Jenis Kelamin</label>
                    <select class="form-control jenis_kelamin <?php if (form_error('jenis_kelamin')) { ?>
                                is-invalid
                            <?php  } ?>" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">---pilih jenis kelamin---</option>
                        <?php foreach ($jenis_kelamin as $p) : ?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" id="berat_badan" class="form-control" name="berat_badan" required>
                </div>
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" id="tinggi_badan" class="form-control" name="tinggi_badan" required>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary" name="tambah">Cek</button>
                <button type="button" class="btn btn-secondary">Hapus</button>
            </div>
        </div>
    </form>
</div>
</div>