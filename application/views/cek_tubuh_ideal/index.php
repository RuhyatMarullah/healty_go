<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Cek Tubuh Ideal</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="<?= base_url('cektubuhideal/hasil'); ?>" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control jenis_kelamin <?php if (form_error('jenis_kelamin')) { ?>
                                is-invalid
                            <?php  } ?>" id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">---pilih jenis kelamin---</option>
                        <?php foreach ($jenis_kelamin as $p) : ?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat_badan">Berat Badan (kg)</label>
                    <input type="number" required id="berat_badan" class="form-control" name="berat_badan" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="number" required id="usia" class="form-control" name="usia" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="number" required id="tinggi_badan" class="form-control" name="tinggi_badan" value="">
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="tambah">Hitung</button>
                <button type="button" class="btn btn-secondary">Hapus</button>
            </div>
        </div>
    </form>
</div>
</div>