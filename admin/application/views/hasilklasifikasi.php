<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Hasil Klasifikasi</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url('');?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i>  Kembali</a>
            </div>
            <div class="box-body">
                <h5>prob diterima : <?= $prob_diterima; ?></h5>
                <h5>hasil prob diterima: <?= $prob_hasilditerima; ?></h5>
                <h5>prob tidak diterima: <?= $prob_tidakditerima; ?></h5>
                <h5>hasil prob tidak diterima: <?= $prob_hasiltidakditerima; ?></h5>
                <h5><?= $prediksi; ?></h5>
            </div>
        </div>
    </section>
</div>

<script async="defer">
$(function(){
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
<script src="<?= base_url('./../assets/adminlte/bower_components/ckeditor/ckeditor.js');?>"></script>