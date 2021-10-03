<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card  shadow mb-4" style="height: 300px;">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
                </div> -->
                <div class="card-body border-bottom-info">
                    <h4><strong>Kondisi tubuh anda <?= $keterangan; ?>, berat badan ideal anda adalah <?= $ideal; ?> kg</strong></h4>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

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
    let kondisi = ` memiliki berat badan ideal bukan soal mengikuti standar kecantikan yang superfisial. Melainkan, memiliki berat badan ideal merupakan perwujudan upaya untuk memiliki tubuh yang sehat. Sehingga, orang yang memiliki tubuh yang sehat dapat beraktivitas dan berkarya lebih maksimal.`;
    let resiko = `Berat badan ideal bukanlah jaminan sepenuhnya bahwa tubuh seseorang dalam kondisi sehat dan terbebas dari penyakit, Namun berat badan ideal dapat mengurangi resiko penyakit yang di miliki orang dengan berat badan berlebih atau obesitas seperti penyakit jantung, stroke, dan diabetes. Kita juga penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.`;
    let saran = `Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh. Misalnya, jika kebutuhan kalori harian 1950 kkal, pastikan Anda mengonsumsi makanan dan minuman yang sesuai dengan nilai kalori tersebut. Jangan lupa juga untuk menggunakan prinsip gizi seimbang. Dengan begitu, semua jenis gizi yang dibutuhkan tubuh akan terpenuhi dengan baik.`

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