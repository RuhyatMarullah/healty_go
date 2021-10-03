<div class="container-fluid">
    <div class="row">
        <div class="col text-center">
            <h4><strong>Hasil perhitungan</strong></h4>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="row text-center">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Rentang Detak Jantung Ideal Saat Olahraga
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                        <?= $detak_jantung_ideal_r; ?> - <?= $detak_jantung_ideal_t; ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                        Detakan permenit
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Detak Jantung Maksimal
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                        <?= $detak_jantung_maksimal; ?>
                    </p>
                </div>
                <div class="col-md-12">
                    <p>
                        Detakan permenit
                    </p>
                </div>
            </div>

        </div>
        <div class="col-md-12 pt-4">
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
    let kondisi = `Keteraturan detak jantung diatur oleh sistem listrik jantung. Irama detak jantung normal menandakan bahwa kinerja listrik jantung berfungsi dengan baik. Detak jantung normal terdengar seirama, sama setiap ketukannya, monoton atau seragam, tidak ada suara atau detak jantung tambahan. Sedangkan pada detak jantung yang abnormal, iramanya bisa terdengar tidak beraturan, dan kadang terdapat suara detak jantung tambahan atau bising di luar suara detak jantung utama.`;
    let resiko = `Detak jantung Anda juga bisa mengalami gangguan. Jantung mungkin mulai berdenyut terlalu cepat, lambat, tidak teratur, atau bahkan mengalami henti jantung. Gangguan irama jantung tersebut secara medis disebut dengan istilah aritmia. Banyak hal yang dapat menyebabkan munculnya aritmia, termasuk kondisi medis seperti serangan jantung, riwayat penyakit jantung, tekanan darah tinggi, adanya perubahan struktur jantung seperti pada kardiomiopati, gagal jantung, penyakit katup jantung, gangguan tiroid, gangguan elektrolit, atau sedang dalam masa pemulihan setelah menjalani operasi jantung. Faktor lain seperti terlalu banyak mengonsumsi minuman berkafein atau beralkohol dan efek samping obat-obatan juga dapat menyebabkan aritmia.`;
    let saran = `Untuk memiliki detak jantung normal, maka kesehatan jantung perlu dijaga dengan cara mengonsumsi makanan yang sehat dan bergizi, rutin aktif bergerak, tidak merokok, menjaga berat badan tetap ideal, serta menjaga kadar kolesterol dan gula darah dengan baik. Jika detak jantung Anda mengalami gangguan maka segera konsultasikan ke dokter spesialis jantung untuk mendapatkan penanganan.`

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