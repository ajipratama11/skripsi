<div class="content-wrapper">
    <section class="content-header">
        <h1 class="text-center">Coba Klasifikasi</h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-header">
                <a href="<?= site_url('');?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i>  Kembali</a>
            </div>
            <div class="box-body">
                <form action="KlasifikasiNB/act_klasifikasi" enctype="multipart/form-data" method="POST">
                  
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">Kimia :</label>
                        <select name="kimia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">biologi :</label>
                        <select name="biologi" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">fisika :</label>
                        <select name="fisika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematika :</label>
                        <select name="matematika" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_inggris :</label>
                        <select name="bhs_inggris" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">bhs_indonesia :</label>
                        <select name="bhs_indonesia" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">realistis :</label>
                        <select name="realistis" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intelektual :</label>
                        <select name="intelektual" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">artistik :</label>
                        <select name="artistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">sosial :</label>
                        <select name="sosial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">enterprise :</label>
                        <select name="enterprise" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">konvensional :</label>
                        <select name="konvensional" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">linguistik :</label>
                        <select name="linguistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">matematikal :</label>
                        <select name="matematikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">musikal :</label>
                        <select name="musikal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">kinestik :</label>
                        <select name="kinestik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">spartial :</label>
                        <select name="spartial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">intrapersonal :</label>
                        <select name="intrapersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">interpersonal :</label>
                        <select name="interpersonal" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">natrularistik :</label>
                        <select name="natrularistik" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
                        </select>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="MataPelajaran">eksistensial :</label>
                        <select name="eksistensial" class="form-control" required="">
                            <option value="">Nilai...</option>
                            <option value="Tinggi">Tinggi</option>
                            <option value="Normal">Normal</option>
                            <option value="Rendah">Rendah</option>
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