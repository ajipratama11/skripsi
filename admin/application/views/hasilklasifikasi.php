<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Hasil Klasifikasi</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url(''); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            </div>
            <div class="box-body">
                <form action="<?= base_url('Admin/simpanhasil') ?>" method="POST">
                    <h5>prob diterima : <?= $prob_diterima; ?> <input type="hidden" name="id_nilai" value="<?= $id; ?>" </h5>
                        <h5>hasil prob diterima: <input type="text" name="hasil_prob" value="<?= $prob_hasilditerima; ?>"></h5>
                        <h5>prob tidak diterima: <?= $prob_tidakditerima; ?></h5>
                        <h5>hasil prob tidak diterima: <input type="text" name="hasil_tdkprob" value="<?= $prob_hasiltidakditerima; ?>"></h5>
                        <h5><input type="text" name="hasil" value="<?= $prediksi; ?>"></h5>
                        <button type="submit" class="btn btn-success">SIMPAN</button>
                </form>
            </div>
        </div>
    </section>
</div>

<script async="defer">
    $(function() {
        CKEDITOR.replace('fieldSoal')
    })
</script>

<?php
if ($this->session->flashdata('soal')) { ?>
    <script>
        Swal.fire('Sukses!', 'Soal berhasil ditambahkan', 'success');
    </script>
<?php
}
?>

<!-- CK Editor -->
<script src="<?= base_url('./../assets/adminlte/bower_components/ckeditor/ckeditor.js'); ?>"></script>