<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h4><strong>Kebutuhan Zat anda</strong></h4>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card  shadow mb-4" style="height: 300px;">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                </div> -->
                <div class="card-body border-bottom-info">
                    <p>Anda Membutuhkan kalori sebesar:</p>
                    <h3><?= round($kalori, 2); ?> (kal)</h3>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card  shadow mb-4" style="height: 300px;">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                </div> -->
                <div class="card-body border-bottom-info">
                    <p>Yang anda butuhkan</p>
                    <ul>
                        <li>
                            protein : <?= round($protein, 2); ?>(gram)
                        </li>
                        <li>
                            lemak : <?= round($lemak, 2);; ?>(gram)
                        </li>
                        <li>
                            karbohidrat : <?= round($karbohidrat, 2); ?>(gram)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <span class="pl-5">
                <button class="btn-sm btn-info" id="kondisi" data-toggle="modal" data-target="#modal">Kondisi</button>
            </span>
            <span class="px-3">
                <button class="btn-sm btn-danger" id="resiko" data-toggle="modal" data-target="#modal">Resiko</button>
            </span>
            <span>
                <button class="btn-sm btn-warning" id="saran" data-toggle="modal" data-target="#modal">Saran</button>
            </span>
        </div>
    </div>
</div>
</div>
<!-- modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<script>
    let kondisi = `Dengan mencukupi kebutuhan gizi, Anda menjaga tubuh tetap sehat dan fungsi imunitas tubuh kuat.`;
    let resiko = `Kekurangan nutrisi berbahaya untuk kesehatan. Ketika tubuh tidak mendapatkan asupan nutrisi yang cukup, maka tubuh tidak mampu menjalankan fungsinya dengan baik. Gejala kekurangan nutrisi yang paling umum adalah penurunan berat badan, mudah lelah, gusi, dan mulut yang sering mengalami luka, pipi dan mata terlihat cekung, serta mudah merasa kedinginan. Kekurangan nutrisi juga menyebabkan kamu mengalami gangguan pada otot. kekurangan nutrisi juga mengakibatkan lemahnya imun tubuh dan mengakibatkan mudah terserang penyakit karna virus dan bakteri.`;
    let saran = `Tetap perhatikan asupan makanan yang dikonsumsi agar imunitas tubuh tetap optimal. kemudian penuhi kebutuhan Zat gizi mikro yaitu zat gizi yang dibutuhkan tubuh dalam jumlah sedikit. Kelompok ini terdiri dari berbagai macam vitamin dan mineral. Contoh zat gizi mikro antara lain kalsium, natrium, zat besi, kalium, yodium, vitamin, magnesium, dan fosfor. Olahraga pun di perlukan untuk menjaga tubuh tetap bugar. `

    $('#kondisi').on('click', function() {
        $('.modal-title').html('Kondisi');
        $('.modal-body').html(kondisi);
    });
    $('#resiko').on('click', function() {
        $('.modal-title').html('Resiko');
        $('.modal-body').html(resiko);
    });
    $('#saran').on('click', function() {
        $('.modal-title').html('Saran');
        $('.modal-body').html(saran);
    });
</script>