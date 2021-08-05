<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Coba Klasifikasi</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url(''); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            </div>
            <!-- <?php
                    $nilai = $datanilai->kimia;
                    // $nilai2 = '';
                    // $nilai3 = '';

                    if (($nilai > 79) and ($nilai < 101)) {
                        $hasil = "Tinggi";
                    } elseif (($nilai > 80) and ($nilai < 70)) {
                        $hasil = "Normal";
                    } elseif (($nilai > 0) and ($nilai < 69)) {
                        $hasil = "Rendah";
                    }
                    ?>
            <p><?= $hasil ?></p> -->
            <div class="box-body">
                <form action="KlasifikasiNB/act_klasifikasi" enctype="multipart/form-data" method="POST">

                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Kimia :</label>
                        <select name="kimia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->kimia >= 80 && $datanilai->kimia <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->kimia >= 69 && $datanilai->kimia <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->kimia > 0 && $datanilai->kimia < 69) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">biologi :</label>
                        <select name="biologi" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->biologi >= 80 && $datanilai->biologi <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->biologi >= 69 && $datanilai->biologi <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->biologi >= 0 && $datanilai->biologi <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">fisika :</label>
                        <select name="fisika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->fisika >= 80 && $datanilai->fisika <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->fisika >= 69 && $datanilai->fisika <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->fisika >= 0 && $datanilai->fisika <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematika :</label>
                        <select name="matematika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->matematika >= 80 && $datanilai->matematika <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->matematika >= 69 && $datanilai->matematika <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->matematika >= 0 && $datanilai->matematika <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_inggris :</label>
                        <select name="bhs_inggris" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->bhs_inggris >= 80 && $datanilai->bhs_inggris <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->bhs_inggris >= 69 && $datanilai->bhs_inggris <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->bhs_inggris >= 0 && $datanilai->bhs_inggris <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_indonesia :</label>
                        <select name="bhs_indonesia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->bhs_indonesia >= 80 && $datanilai->bhs_indonesia <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->bhs_indonesia >= 69 && $datanilai->bhs_indonesia <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->bhs_indonesia >= 0 && $datanilai->bhs_indonesia <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">realistis :</label>
                        <select name="realistis" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->realistis >= 80 && $datanilai->realistis <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->realistis >= 69 && $datanilai->realistis <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->realistis >= 0 && $datanilai->realistis <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intelektual :</label>
                        <select name="intelektual" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->intelektual >= 80 && $datanilai->intelektual <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->intelektual >= 69 && $datanilai->intelektual <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->intelektual >= 0 && $datanilai->intelektual < 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">artistik :</label>
                        <select name="artistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->artistik >= 80 && $datanilai->artistik <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->artistik >= 69 && $datanilai->artistik <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->artistik >= 0 && $datanilai->artistik <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">sosial :</label>
                        <select name="sosial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->sosial >= 80 && $datanilai->sosial <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->sosial >= 69 && $datanilai->sosial <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->sosial >= 0 && $datanilai->sosial <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">enterprise :</label>
                        <select name="enterprise" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->enterprise >= 80 && $datanilai->enterprise <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->enterprise >= 69 && $datanilai->enterprise <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->enterprise >= 0 && $datanilai->enterprise <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">konvensional :</label>
                        <select name="konvensional" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->konvensional >= 80 && $datanilai->konvensional <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->konvensional >= 69 && $datanilai->konvensional <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->konvensional >= 0 && $datanilai->konvensional <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">linguistik :</label>
                        <select name="linguistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->linguistik >= 80 && $datanilai->linguistik <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->linguistik >= 69 && $datanilai->linguistik <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->linguistik >= 0 && $datanilai->linguistik <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematikal :</label>
                        <select name="matematikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->matematikal >= 80 && $datanilai->matematikal <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->matematikal >= 69 && $datanilai->matematikal <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->matematikal >= 0 && $datanilai->matematikal <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">musikal :</label>
                        <select name="musikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->musikal >= 80 && $datanilai->musikal <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->musikal >= 69 && $datanilai->musikal <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->musikal >= 0 && $datanilai->musikal <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">kinestik :</label>
                        <select name="kinestik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->kinestik >= 80 && $datanilai->kinestik <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->kinestik >= 69 && $datanilai->kinestik <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->kinestik >= 0 && $datanilai->kinestik <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">spartial :</label>
                        <select name="spartial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->spartial >= 80 && $datanilai->spartial <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->spartial >= 69 && $datanilai->spartial <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->spartial >= 0 && $datanilai->spartial <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intrapersonal :</label>
                        <select name="intrapersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->intrapersonal >= 80 && $datanilai->intrapersonal <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->intrapersonal >= 69 && $datanilai->intrapersonal <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->intrapersonal >= 0 && $datanilai->intrapersonal <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">interpersonal :</label>
                        <select name="interpersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->interpersonal >= 80 && $datanilai->interpersonal <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->interpersonal >= 69 && $datanilai->interpersonal <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->interpersonal >= 0 && $datanilai->interpersonal <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">natrularistik :</label>
                        <select name="natrularistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->naturalistik >= 80 && $datanilai->naturalistik <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->naturalistik >= 69 && $datanilai->naturalistik <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->naturalistik >= 0 && $datanilai->naturalistik <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">eksistensial :</label>
                        <select name="eksistensial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi" <?php if ($datanilai->eksistensial >= 80 && $datanilai->eksistensial <= 100) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Tinggi</option>
                            <option value="Normal" <?php if ($datanilai->eksistensial >= 69 && $datanilai->eksistensial <= 79) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Normal</option>
                            <option value="Rendah" <?php if ($datanilai->eksistensial >= 0 && $datanilai->eksistensial <= 68) {
                                                        echo "selected=\"selected\"";
                                                    } ?>>Rendah</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Klasifikasi</button>
                    </div>
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