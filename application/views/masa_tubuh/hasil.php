<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h3>
                        Hasil IMT anda adalah
                    </h3>
                    <h2>
                        <?= round($imt, 2); ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
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
    let kondisi = `<?= $kondisi; ?>`;
    let resiko = `<?= $resiko; ?>`;
    let saran = `-Bila Anda ingin meningkatkan berat badan, Anda perlu mengetahui terlebih dulu berapa banyak kalori yang dibutuhkan tubuh per harinya. Agar tubuh mendapatkan sumber energi yang maksimal untuk beraktivitas. Menambah berat badan harus menambah massa otot bukan menambah massa lemak. Proporsi makanan harus diperhatikan tidak hanya kalori saja perlu zat gizi makro (karbohidrat, protein, lemak) dan mikro (vitamin dan mineral). Anda juga bisa melakukan olahraga rutin agar otot terbentuk dengan optimal. Anda bisa menambahkan asupan kalori Anda sebanyak 300-500 kkal per hari. Misalnya, jika kebutuhan total kalori harian Anda adalah 1700 kkal. Artinya, Anda perlu mengonsumsi makanan dengan total 1700+500 = 2200 kkal per hari.
    <br>
    <br>
    - Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh.
    <br>
    <br>
    - Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian. Selanjutnya, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.`

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