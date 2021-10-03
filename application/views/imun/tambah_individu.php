<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h3><strong>Form Tambah Individu</strong></h3>
        </div>
    </div>
</div>
<div class="container-fluid">
    <form method="post" action="" enctype="multipart/form-data">
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required type="text" id="nama" class="form-control <?php if (form_error('nama')) { ?>
                        is-invalid
                    <?php  } ?>" name="nama" value="<?= set_value('nama'); ?>">
                    <?= form_error('nama', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" required name="jenis_kelamin">
                        <option value="">-- Jenis Kelamin --</option>
                        <?php foreach ($jenis_kelamin as $row) : ?>
                            <?php if ($row['id'] == set_value('jenis_kelamin')) : ?>
                                <option value="<?= $row['id']; ?>" selected><?= $row['nama']; ?></option>
                            <?php endif; ?>
                            <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('jenis_kelamin', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input required type="number" id="usia" class="form-control <?php if (form_error('usia')) { ?>
                        is-invalid
                    <?php  } ?>" name="usia" value="<?= set_value('usia'); ?>">
                    <?= form_error('usia', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="berat">Berat Badan</label>
                    <input required type="number" id="berat" class="form-control <?php if (form_error('berat')) { ?>
                        is-invalid
                    <?php  } ?>" name="berat" value="<?= set_value('berat'); ?>">
                    <?= form_error('berat', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tinggi">Tinggi Badan</label>
                    <input required type="number" id="tinggi" class="form-control <?php if (form_error('tinggi')) { ?>
                        is-invalid
                    <?php  } ?>" name="tinggi" value="<?= set_value('tinggi'); ?>">
                    <?= form_error('tinggi', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="aktivitas">Aktivitas</label>
                    <select class="form-control" id="aktivitas" required name="aktivitas">
                        <option value="">-- Jenis Kelamin --</option>
                        <?php foreach ($aktivitas as $row) : ?>
                            <?php if ($row['id'] == set_value('aktivitas')) : ?>
                                <option value="<?= $row['id']; ?>" selected><?= $row['nama']; ?></option>
                            <?php endif; ?>
                            <option value="<?= $row['id']; ?>"><?= $row['nama']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= form_error('aktivitas', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                <a href="<?= base_url('master/jenismakanan'); ?>" type="button" class="btn btn-secondary">Cancel</a>
            </div>
        </div>
    </form>
</div>
</div>