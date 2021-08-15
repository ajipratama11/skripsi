<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Konversi bobot</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url(''); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            </div>

            <div class="box-body">
                <form action="<?= base_url('Admin/coba_bobot') ?>" enctype="multipart/form-data" method="POST">

                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Kimia :</label>
                        <input type="hidden" name="nama_siswa" value="<?= $datanilai->nama ?>">
                        <select name="kimia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->kimia >= 80 && $datanilai->kimia <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->kimia >= 69 && $datanilai->kimia <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->kimia > 0 && $datanilai->kimia < 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">biologi :</label>
                        <select name="biologi" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->biologi >= 80 && $datanilai->biologi <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->biologi >= 70 && $datanilai->biologi <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->biologi >= 0 && $datanilai->biologi <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">fisika :</label>
                        <select name="fisika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->fisika >= 80 && $datanilai->fisika <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->fisika >= 70 && $datanilai->fisika <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->fisika >= 0 && $datanilai->fisika <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematika :</label>
                        <select name="matematika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->matematika >= 80 && $datanilai->matematika <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->matematika >= 69 && $datanilai->matematika <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->matematika >= 0 && $datanilai->matematika <= 68) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_inggris :</label>
                        <select name="bhs_inggris" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->bhs_inggris >= 80 && $datanilai->bhs_inggris <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->bhs_inggris >= 70 && $datanilai->bhs_inggris <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->bhs_inggris >= 0 && $datanilai->bhs_inggris <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_indonesia :</label>
                        <select name="bhs_indonesia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="5" <?php if ($datanilai->bhs_indonesia >= 80 && $datanilai->bhs_indonesia <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="4" <?php if ($datanilai->bhs_indonesia >= 70 && $datanilai->bhs_indonesia <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="3" <?php if ($datanilai->bhs_indonesia >= 0 && $datanilai->bhs_indonesia <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">realistis :</label>
                        <select name="realistis" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->realistis >= 80 && $datanilai->realistis <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->realistis >= 70 && $datanilai->realistis <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->realistis >= 0 && $datanilai->realistis <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intelektual :</label>
                        <select name="intelektual" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->intelektual >= 80 && $datanilai->intelektual <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->intelektual >= 69 && $datanilai->intelektual <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->intelektual >= 0 && $datanilai->intelektual < 68) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">artistik :</label>
                        <select name="artistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->artistik >= 80 && $datanilai->artistik <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->artistik >= 70 && $datanilai->artistik <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->artistik >= 0 && $datanilai->artistik <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">sosial :</label>
                        <select name="sosial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->sosial >= 80 && $datanilai->sosial <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->sosial >= 70 && $datanilai->sosial <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->sosial >= 0 && $datanilai->sosial <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">enterprise :</label>
                        <select name="enterprise" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->enterprise >= 80 && $datanilai->enterprise <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->enterprise >= 70 && $datanilai->enterprise <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->enterprise >= 0 && $datanilai->enterprise <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">konvensional :</label>
                        <select name="konvensional" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="4" <?php if ($datanilai->konvensional >= 80 && $datanilai->konvensional <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="3" <?php if ($datanilai->konvensional >= 70 && $datanilai->konvensional <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="2" <?php if ($datanilai->konvensional >= 0 && $datanilai->konvensional <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">linguistik :</label>
                        <select name="linguistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->linguistik >= 80 && $datanilai->linguistik <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->linguistik >= 70 && $datanilai->linguistik <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->linguistik >= 0 && $datanilai->linguistik <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematikal :</label>
                        <select name="matematikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->matematikal >= 80 && $datanilai->matematikal <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->matematikal >= 70 && $datanilai->matematikal <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->matematikal >= 0 && $datanilai->matematikal <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">musikal :</label>
                        <select name="musikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->musikal >= 80 && $datanilai->musikal <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->musikal >= 70 && $datanilai->musikal <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->musikal >= 0 && $datanilai->musikal <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">kinestik :</label>
                        <select name="kinestik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->kinestik >= 80 && $datanilai->kinestik <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->kinestik >= 70 && $datanilai->kinestik <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->kinestik >= 0 && $datanilai->kinestik <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">spartial :</label>
                        <select name="spartial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->spartial >= 80 && $datanilai->spartial <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->spartial >= 70 && $datanilai->spartial <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->spartial >= 0 && $datanilai->spartial <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intrapersonal :</label>
                        <select name="intrapersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->intrapersonal >= 80 && $datanilai->intrapersonal <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->intrapersonal >= 70 && $datanilai->intrapersonal <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->intrapersonal >= 0 && $datanilai->intrapersonal <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">interpersonal :</label>
                        <select name="interpersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->interpersonal >= 80 && $datanilai->interpersonal <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->interpersonal >= 70 && $datanilai->interpersonal <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->interpersonal >= 0 && $datanilai->interpersonal <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">natrularistik :</label>
                        <select name="natrularistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->naturalistik >= 80 && $datanilai->naturalistik <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->naturalistik >= 70 && $datanilai->naturalistik <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->naturalistik >= 0 && $datanilai->naturalistik <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">eksistensial :</label>
                        <select name="eksistensial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="3" <?php if ($datanilai->eksistensial >= 80 && $datanilai->eksistensial <= 100) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Tinggi</option>
                            <option value="2" <?php if ($datanilai->eksistensial >= 70 && $datanilai->eksistensial <= 79) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Normal</option>
                            <option value="1" <?php if ($datanilai->eksistensial >= 0 && $datanilai->eksistensial <= 69) {
                                                    echo "selected=\"selected\"";
                                                } ?>>Rendah</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Konversi Bobot</button>
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