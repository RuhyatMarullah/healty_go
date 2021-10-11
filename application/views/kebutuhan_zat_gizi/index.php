<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Kebutuhan Zat Gizi</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="POST" action="<?= base_url('kebutuhanzatgizi/hasil'); ?>" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama_obat">Jenis Kelamin</label>
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
                    <input type="text" id="berat_badan" class="form-control" name="berat_badan" value="" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input type="text" required id="usia" class="form-control" name="usia" value="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tinggi_badan">Tinggi Badan (cm)</label>
                    <input type="text" required id="tinggi_badan" class="form-control" name="tinggi_badan" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group text-center">
                    <label for="aktivitas">Aktivitas</label>
                    <select class="form-control aktivitas <?php if (form_error('aktivitas')) { ?>
                                is-invalid
                            <?php  } ?>" id="aktivitas" name="aktivitas" required>
                        <option value="">---pilih aktivitas---</option>
                        <?php foreach ($aktivitas as $p) : ?>
                            <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
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