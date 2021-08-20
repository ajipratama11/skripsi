<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Eigen Sample
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sample</th>
                            <th>Kimia</th>
                            <th>Biologi</th>
                            <th>Fisika</th>
                            <th>Matematika</th>
                            <th>Bhs Inggris</th>
                            <th>Bhs Indonesia</th>
                            <th>Realistis</th>
                            <th>Intelektual</th>
                            <th>Artistik</th>
                            <th>Sosial</th>
                            <th>Enterprise</th>
                            <th>Konvensiona</th>
                            <th>Linguistik</th>
                            <th>Matematikal</th>
                            <th>Msikal</th>
                            <th>Kinestik</th>
                            <th>Spartial</th>
                            <th>Intrapersonal</th>
                            <th>Interpersonal</th>
                            <th>naturalistik</th>
                            <th>eksistensial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sample</td>
                            <td><input type="text" id="eigen_sampel1" class="eigen_sampel1" readonly style="width: 50px;" value="<?= $eigen['eigen_a'] ?>"></td>
                            <td><input type="text" id="eigen_sampel2" class="eigen_sampel1" readonly style="width: 50px;" value="<?= $eigen['eigen_b'] ?>"></td>
                            <td><input type="text" id="eigen_sampel3" class="eigen_sampel1" readonly style="width: 50px;" value="<?= $eigen['eigen_c'] ?>"></td>
                            <td><input type="text" id="eigen_sampel4" class="eigen_sampel1" readonly style="width: 50px;" value="<?= $eigen['eigen_d'] ?>"></td>
                            <td><input type="text" id="eigen_sampel5" class="eigen_sampel1" readonly style="width: 50px;" value="<?= $eigen['eigen_e'] ?>"></td>
                            <td><input type="text" id="eigen_sampel6" readonly style="width: 50px;" value="<?= $eigen['eigen_f'] ?>"></td>
                            <td><input type="text" id="eigen_sampel7" readonly style="width: 50px;" value="<?= $eigen['eigen_g'] ?>"></td>
                            <td><input type="text" id="eigen_sampel8" readonly style="width: 50px;" value="<?= $eigen['eigen_h'] ?>"></td>
                            <td><input type="text" id="eigen_sampel9" readonly style="width: 50px;" value="<?= $eigen['eigen_i'] ?>"></td>
                            <td><input type="text" id="eigen_sampel10" readonly style="width: 50px;" value="<?= $eigen['eigen_j'] ?>"></td>
                            <td><input type="text" id="eigen_sampel11" readonly style="width: 50px;" value="<?= $eigen['eigen_k'] ?>"></td>
                            <td><input type="text" id="eigen_sampel12" readonly style="width: 50px;" value="<?= $eigen['eigen_l'] ?>"></td>
                            <td><input type="text" id="eigen_sampel13" readonly style="width: 50px;" value="<?= $eigen['eigen_m'] ?>"></td>
                            <td><input type="text" id="eigen_sampel14" readonly style="width: 50px;" value="<?= $eigen['eigen_n'] ?>"></td>
                            <td><input type="text" id="eigen_sampel15" readonly style="width: 50px;" value="<?= $eigen['eigen_o'] ?>"></td>
                            <td><input type="text" id="eigen_sampel16" readonly style="width: 50px;" value="<?= $eigen['eigen_p'] ?>"></td>
                            <td><input type="text" id="eigen_sampel17" readonly style="width: 50px;" value="<?= $eigen['eigen_q'] ?>"></td>
                            <td><input type="text" id="eigen_sampel18" readonly style="width: 50px;" value="<?= $eigen['eigen_r'] ?>"></td>
                            <td><input type="text" id="eigen_sampel19" readonly style="width: 50px;" value="<?= $eigen['eigen_s'] ?>"></td>
                            <td><input type="text" id="eigen_sampel20" readonly style="width: 50px;" value="<?= $eigen['eigen_t'] ?>"></td>
                            <td><input type="text" id="eigen_sampel21" readonly style="width: 50px;" value="<?= $eigen['eigen_u'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="content-header">
        <h1 class="text-center">
            Eigen Alternatif
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="matrik" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Kimia</th>
                            <th>Biologi</th>
                            <th>Fisika</th>
                            <th>Matematika</th>
                            <th>Bhs Inggris</th>
                            <th>Bhs Indonesia</th>
                            <th>Realistis</th>
                            <th>Intelektual</th>
                            <th>Artistik</th>
                            <th>Sosial</th>
                            <th>Enterprise</th>
                            <th>Konvensiona</th>
                            <th>Linguistik</th>
                            <th>Matematikal</th>
                            <th>Msikal</th>
                            <th>Kinestik</th>
                            <th>Spartial</th>
                            <th>Intrapersonal</th>
                            <th>Interpersonal</th>
                            <th>naturalistik</th>
                            <th>eksistensial</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $eigen_alt1->nama_alternatif ?></td>
                            <td><input type="text" id="eigen_alt_a1" readonly style="width: 50px;" value="<?= $eigen_alt1->kimia ?>"></td>
                            <td><input type="text" id="eigen_alt_a2" readonly style="width: 50px;" value="<?= $eigen_alt1->biologi ?>"></td>
                            <td><input type="text" id="eigen_alt_a3" readonly style="width: 50px;" value="<?= $eigen_alt1->fisika ?>"></td>
                            <td><input type="text" id="eigen_alt_a4" readonly style="width: 50px;" value="<?= $eigen_alt1->matematika ?>"></td>
                            <td><input type="text" id="eigen_alt_a5" readonly style="width: 50px;" value="<?= $eigen_alt1->bhs_inggris ?>"></td>
                            <td><input type="text" id="eigen_alt_a6" readonly style="width: 50px;" value="<?= $eigen_alt1->bhs_indonesia ?>"></td>
                            <td><input type="text" id="eigen_alt_a7" readonly style="width: 50px;" value="<?= $eigen_alt1->realistis ?>"></td>
                            <td><input type="text" id="eigen_alt_a8" readonly style="width: 50px;" value="<?= $eigen_alt1->intelektual ?>"></td>
                            <td><input type="text" id="eigen_alt_a9" readonly style="width: 50px;" value="<?= $eigen_alt1->artistik ?>"></td>
                            <td><input type="text" id="eigen_alt_a10" readonly style="width: 50px;" value="<?= $eigen_alt1->sosial ?>"></td>
                            <td><input type="text" id="eigen_alt_a11" readonly style="width: 50px;" value="<?= $eigen_alt1->enterprise ?>"></td>
                            <td><input type="text" id="eigen_alt_a12" readonly style="width: 50px;" value="<?= $eigen_alt1->konvensional ?>"></td>
                            <td><input type="text" id="eigen_alt_a13" readonly style="width: 50px;" value="<?= $eigen_alt1->linguistik ?>"></td>
                            <td><input type="text" id="eigen_alt_a14" readonly style="width: 50px;" value="<?= $eigen_alt1->matematikal ?>"></td>
                            <td><input type="text" id="eigen_alt_a15" readonly style="width: 50px;" value="<?= $eigen_alt1->musikal ?>"></td>
                            <td><input type="text" id="eigen_alt_a16" readonly style="width: 50px;" value="<?= $eigen_alt1->kinestik ?>"></td>
                            <td><input type="text" id="eigen_alt_a17" readonly style="width: 50px;" value="<?= $eigen_alt1->spartial ?>"></td>
                            <td><input type="text" id="eigen_alt_a18" readonly style="width: 50px;" value="<?= $eigen_alt1->intrapersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_a19" readonly style="width: 50px;" value="<?= $eigen_alt1->interpersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_a20" readonly style="width: 50px;" value="<?= $eigen_alt1->natrularistik ?>"></td>
                            <td><input type="text" id="eigen_alt_a21" readonly style="width: 50px;" value="<?= $eigen_alt1->eksistensial ?>"></td>
                        </tr>
                        <tr>
                            <td><?= $eigen_alt2->nama_alternatif ?></td>
                            <td><input type="text" id="eigen_alt_b1" readonly style="width: 50px;" value="<?= $eigen_alt2->kimia ?>"></td>
                            <td><input type="text" id="eigen_alt_b2" readonly style="width: 50px;" value="<?= $eigen_alt2->biologi ?>"></td>
                            <td><input type="text" id="eigen_alt_b3" readonly style="width: 50px;" value="<?= $eigen_alt2->fisika ?>"></td>
                            <td><input type="text" id="eigen_alt_b4" readonly style="width: 50px;" value="<?= $eigen_alt2->matematika ?>"></td>
                            <td><input type="text" id="eigen_alt_b5" readonly style="width: 50px;" value="<?= $eigen_alt2->bhs_inggris ?>"></td>
                            <td><input type="text" id="eigen_alt_b6" readonly style="width: 50px;" value="<?= $eigen_alt2->bhs_indonesia ?>"></td>
                            <td><input type="text" id="eigen_alt_b7" readonly style="width: 50px;" value="<?= $eigen_alt2->realistis ?>"></td>
                            <td><input type="text" id="eigen_alt_b8" readonly style="width: 50px;" value="<?= $eigen_alt2->intelektual ?>"></td>
                            <td><input type="text" id="eigen_alt_b9" readonly style="width: 50px;" value="<?= $eigen_alt2->artistik ?>"></td>
                            <td><input type="text" id="eigen_alt_b10" readonly style="width: 50px;" value="<?= $eigen_alt2->sosial ?>"></td>
                            <td><input type="text" id="eigen_alt_b11" readonly style="width: 50px;" value="<?= $eigen_alt2->enterprise ?>"></td>
                            <td><input type="text" id="eigen_alt_b12" readonly style="width: 50px;" value="<?= $eigen_alt2->konvensional ?>"></td>
                            <td><input type="text" id="eigen_alt_b13" readonly style="width: 50px;" value="<?= $eigen_alt2->linguistik ?>"></td>
                            <td><input type="text" id="eigen_alt_b14" readonly style="width: 50px;" value="<?= $eigen_alt2->matematikal ?>"></td>
                            <td><input type="text" id="eigen_alt_b15" readonly style="width: 50px;" value="<?= $eigen_alt2->musikal ?>"></td>
                            <td><input type="text" id="eigen_alt_b16" readonly style="width: 50px;" value="<?= $eigen_alt2->kinestik ?>"></td>
                            <td><input type="text" id="eigen_alt_b17" readonly style="width: 50px;" value="<?= $eigen_alt2->spartial ?>"></td>
                            <td><input type="text" id="eigen_alt_b18" readonly style="width: 50px;" value="<?= $eigen_alt2->intrapersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_b19" readonly style="width: 50px;" value="<?= $eigen_alt2->interpersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_b20" readonly style="width: 50px;" value="<?= $eigen_alt2->natrularistik ?>"></td>
                            <td><input type="text" id="eigen_alt_b21" readonly style="width: 50px;" value="<?= $eigen_alt2->eksistensial ?>"></td>
                        </tr>
                        <tr>
                            <td><?= $eigen_alt3->nama_alternatif ?></td>
                            <td><input type="text" id="eigen_alt_c1" readonly style="width: 50px;" value="<?= $eigen_alt3->kimia ?>"></td>
                            <td><input type="text" id="eigen_alt_c2" readonly style="width: 50px;" value="<?= $eigen_alt3->biologi ?>"></td>
                            <td><input type="text" id="eigen_alt_c3" readonly style="width: 50px;" value="<?= $eigen_alt3->fisika ?>"></td>
                            <td><input type="text" id="eigen_alt_c4" readonly style="width: 50px;" value="<?= $eigen_alt3->matematika ?>"></td>
                            <td><input type="text" id="eigen_alt_c5" readonly style="width: 50px;" value="<?= $eigen_alt3->bhs_inggris ?>"></td>
                            <td><input type="text" id="eigen_alt_c6" readonly style="width: 50px;" value="<?= $eigen_alt3->bhs_indonesia ?>"></td>
                            <td><input type="text" id="eigen_alt_c7" readonly style="width: 50px;" value="<?= $eigen_alt3->realistis ?>"></td>
                            <td><input type="text" id="eigen_alt_c8" readonly style="width: 50px;" value="<?= $eigen_alt3->intelektual ?>"></td>
                            <td><input type="text" id="eigen_alt_c9" readonly style="width: 50px;" value="<?= $eigen_alt3->artistik ?>"></td>
                            <td><input type="text" id="eigen_alt_c10" readonly style="width: 50px;" value="<?= $eigen_alt3->sosial ?>"></td>
                            <td><input type="text" id="eigen_alt_c11" readonly style="width: 50px;" value="<?= $eigen_alt3->enterprise ?>"></td>
                            <td><input type="text" id="eigen_alt_c12" readonly style="width: 50px;" value="<?= $eigen_alt3->konvensional ?>"></td>
                            <td><input type="text" id="eigen_alt_c13" readonly style="width: 50px;" value="<?= $eigen_alt3->linguistik ?>"></td>
                            <td><input type="text" id="eigen_alt_c14" readonly style="width: 50px;" value="<?= $eigen_alt3->matematikal ?>"></td>
                            <td><input type="text" id="eigen_alt_c15" readonly style="width: 50px;" value="<?= $eigen_alt3->musikal ?>"></td>
                            <td><input type="text" id="eigen_alt_c16" readonly style="width: 50px;" value="<?= $eigen_alt3->kinestik ?>"></td>
                            <td><input type="text" id="eigen_alt_c17" readonly style="width: 50px;" value="<?= $eigen_alt3->spartial ?>"></td>
                            <td><input type="text" id="eigen_alt_c18" readonly style="width: 50px;" value="<?= $eigen_alt3->intrapersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_c19" readonly style="width: 50px;" value="<?= $eigen_alt3->interpersonal ?>"></td>
                            <td><input type="text" id="eigen_alt_c20" readonly style="width: 50px;" value="<?= $eigen_alt3->natrularistik ?>"></td>
                            <td><input type="text" id="eigen_alt_c21" readonly style="width: 50px;" value="<?= $eigen_alt3->eksistensial ?>"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="content-header">
        <h1 class="text-center">
            Eigen Hasil
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="TABLE_1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Kimia</th>
                            <th>Biologi</th>
                            <th>Fisika</th>
                            <th>Matematika</th>
                            <th>Bhs Inggris</th>
                            <th>Bhs Indonesia</th>
                            <th>Realistis</th>
                            <th>Intelektual</th>
                            <th>Artistik</th>
                            <th>Sosial</th>
                            <th>Enterprise</th>
                            <th>Konvensiona</th>
                            <th>Linguistik</th>
                            <th>Matematikal</th>
                            <th>Msikal</th>
                            <th>Kinestik</th>
                            <th>Spartial</th>
                            <th>Intrapersonal</th>
                            <th>Interpersonal</th>
                            <th>naturalistik</th>
                            <th>eksistensial</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $eigen_alt1->nama_alternatif ?></td>
                            <td><input type="text" id="hsl_eigen_a1" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a2" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a3" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a4" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a5" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a6" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a7" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a8" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a9" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a10" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a11" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a12" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a13" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a14" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a15" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a16" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a17" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a18" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a19" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a20" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_a21" readonly style="width: 50px;"></td>
                            <td><input type="text" id="jml_eigen_sipil" readonly style="width: 100px;"></td>
                        </tr>
                        <tr>
                            <td><?= $eigen_alt2->nama_alternatif ?></td>
                            <td><input type="text" id="hsl_eigen_b1" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b2" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b3" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b4" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b5" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b6" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b7" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b8" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b9" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b10" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b11" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b12" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b13" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b14" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b15" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b16" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b17" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b18" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b19" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b20" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_b21" readonly style="width: 50px;"></td>
                            <td><input type="text" id="jml_eigen_informatika" readonly style="width: 100px;"></td>
                        </tr>
                        <tr>
                            <td><?= $eigen_alt3->nama_alternatif ?></td>
                            <td><input type="text" id="hsl_eigen_c1" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c2" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c3" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c4" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c5" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c6" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c7" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c8" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c9" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c10" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c11" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c12" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c13" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c14" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c15" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c16" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c17" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c18" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c19" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c20" readonly style="width: 50px;"></td>
                            <td><input type="text" id="hsl_eigen_c21" readonly style="width: 50px;"></td>
                            <td><input type="text" id="jml_eigen_industri" readonly style="width: 100px;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content-header">
        <h1 class="text-center">
            Ranking Jurusan
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="rank" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Jurusan</th>
                            <th>Nilai</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php
                    if ($status == 0) {
                        $data = 'Belum ada status';
                    } else {
                        $data = 'Diterima';
                    }
                    ?>
                    <tbody class="ranking">
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="persen_sipil" readonly style="width: 30px;">%</td>
                            <td><?= $data ?> | <a class="btn btn-success" href="<?= base_url('KlasifikasiNB/konvert_nilai/' . $eigen['id_nilai']) ?>"> Lihat Status</a></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="persen_informatika" readonly style="width: 30px;">%</td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="persen_industri" readonly style="width: 30px;">%</td>
                        </tr>
                    </tbody>
                </table>
                <!-- <input type="text" id="jumlah_total"> -->
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        $('#dataset').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'searching': false,
            'autoWidth': false,
            "ordering": false,
            "info": false
        });
    });

    $(document).ready(function() {
        $('#matrik').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'autoWidth': true,
            "ordering": false,
            "searching": false,
            "info": false
        });
    });

    $(document).ready(function() {
        $('#rank').DataTable({
            'paging': false,
            //'lengthChange': true,
            //"scrollX": true,
            //'autoWidth': true,
            "ordering": true,
            "searching": false,
            "info": false
        });
    });

    // $(".ranking").sortable({
    //     update: function(e, ui) {
    //         $("tr td:nth-child(2)").text(function() {
    //             return $(this).parent().index("tr");
    //         });
    //     }
    // });

    $(document).ready(function() {
        $("table[id^='TABLE']").DataTable({
            // "scrollY": "200px",
            'lengthChange': true,
            "scrollCollapse": false,
            "scrollX": true,
            "searching": false,
            "info": false,
            "ordering": false,
            "paging": false
        });
    });

    $(document).ready(function() {
        $('#eigen_sampel1, #eigen_alt_a1, #hsl_eigen_a1').each(function() {
            //val sampel
            var eigen_smpl1 = $("#eigen_sampel1").val();
            var eigen_smpl2 = $("#eigen_sampel2").val();
            var eigen_smpl3 = $("#eigen_sampel3").val();
            var eigen_smpl4 = $("#eigen_sampel4").val();
            var eigen_smpl5 = $("#eigen_sampel5").val();
            var eigen_smpl6 = $("#eigen_sampel6").val();
            var eigen_smpl7 = $("#eigen_sampel7").val();
            var eigen_smpl8 = $("#eigen_sampel8").val();
            var eigen_smpl9 = $("#eigen_sampel9").val();
            var eigen_smpl10 = $("#eigen_sampel10").val();
            var eigen_smpl11 = $("#eigen_sampel11").val();
            var eigen_smpl12 = $("#eigen_sampel12").val();
            var eigen_smpl13 = $("#eigen_sampel13").val();
            var eigen_smpl14 = $("#eigen_sampel14").val();
            var eigen_smpl15 = $("#eigen_sampel15").val();
            var eigen_smpl16 = $("#eigen_sampel16").val();
            var eigen_smpl17 = $("#eigen_sampel17").val();
            var eigen_smpl18 = $("#eigen_sampel18").val();
            var eigen_smpl19 = $("#eigen_sampel19").val();
            var eigen_smpl20 = $("#eigen_sampel20").val();
            var eigen_smpl21 = $("#eigen_sampel21").val();

            //val alternatif sipil
            var eigen_alt_ts1 = $('#eigen_alt_a1').val();
            var eigen_alt_ts2 = $('#eigen_alt_a2').val();
            var eigen_alt_ts3 = $('#eigen_alt_a3').val();
            var eigen_alt_ts4 = $('#eigen_alt_a4').val();
            var eigen_alt_ts5 = $('#eigen_alt_a5').val();
            var eigen_alt_ts6 = $('#eigen_alt_a6').val();
            var eigen_alt_ts7 = $('#eigen_alt_a7').val();
            var eigen_alt_ts8 = $('#eigen_alt_a8').val();
            var eigen_alt_ts9 = $('#eigen_alt_a9').val();
            var eigen_alt_ts10 = $('#eigen_alt_a10').val();
            var eigen_alt_ts11 = $('#eigen_alt_a11').val();
            var eigen_alt_ts12 = $('#eigen_alt_a12').val();
            var eigen_alt_ts13 = $('#eigen_alt_a13').val();
            var eigen_alt_ts14 = $('#eigen_alt_a14').val();
            var eigen_alt_ts15 = $('#eigen_alt_a15').val();
            var eigen_alt_ts16 = $('#eigen_alt_a16').val();
            var eigen_alt_ts17 = $('#eigen_alt_a17').val();
            var eigen_alt_ts18 = $('#eigen_alt_a18').val();
            var eigen_alt_ts19 = $('#eigen_alt_a19').val();
            var eigen_alt_ts20 = $('#eigen_alt_a20').val();
            var eigen_alt_ts21 = $('#eigen_alt_a21').val();

            //val alternatif informatika
            var eigen_alt_tif1 = $('#eigen_alt_b1').val();
            var eigen_alt_tif2 = $('#eigen_alt_b2').val();
            var eigen_alt_tif3 = $('#eigen_alt_b3').val();
            var eigen_alt_tif4 = $('#eigen_alt_b4').val();
            var eigen_alt_tif5 = $('#eigen_alt_b5').val();
            var eigen_alt_tif6 = $('#eigen_alt_b6').val();
            var eigen_alt_tif7 = $('#eigen_alt_b7').val();
            var eigen_alt_tif8 = $('#eigen_alt_b8').val();
            var eigen_alt_tif9 = $('#eigen_alt_b9').val();
            var eigen_alt_tif10 = $('#eigen_alt_b10').val();
            var eigen_alt_tif11 = $('#eigen_alt_b11').val();
            var eigen_alt_tif12 = $('#eigen_alt_b12').val();
            var eigen_alt_tif13 = $('#eigen_alt_b13').val();
            var eigen_alt_tif14 = $('#eigen_alt_b14').val();
            var eigen_alt_tif15 = $('#eigen_alt_b15').val();
            var eigen_alt_tif16 = $('#eigen_alt_b16').val();
            var eigen_alt_tif17 = $('#eigen_alt_b17').val();
            var eigen_alt_tif18 = $('#eigen_alt_b18').val();
            var eigen_alt_tif19 = $('#eigen_alt_b19').val();
            var eigen_alt_tif20 = $('#eigen_alt_b20').val();
            var eigen_alt_tif21 = $('#eigen_alt_b21').val();

            //val alternatif industri
            var eigen_alt_tid1 = $('#eigen_alt_c1').val();
            var eigen_alt_tid2 = $('#eigen_alt_c2').val();
            var eigen_alt_tid3 = $('#eigen_alt_c3').val();
            var eigen_alt_tid4 = $('#eigen_alt_c4').val();
            var eigen_alt_tid5 = $('#eigen_alt_c5').val();
            var eigen_alt_tid6 = $('#eigen_alt_c6').val();
            var eigen_alt_tid7 = $('#eigen_alt_c7').val();
            var eigen_alt_tid8 = $('#eigen_alt_c8').val();
            var eigen_alt_tid9 = $('#eigen_alt_c9').val();
            var eigen_alt_tid10 = $('#eigen_alt_c10').val();
            var eigen_alt_tid11 = $('#eigen_alt_c11').val();
            var eigen_alt_tid12 = $('#eigen_alt_c12').val();
            var eigen_alt_tid13 = $('#eigen_alt_c13').val();
            var eigen_alt_tid14 = $('#eigen_alt_c14').val();
            var eigen_alt_tid15 = $('#eigen_alt_c15').val();
            var eigen_alt_tid16 = $('#eigen_alt_c16').val();
            var eigen_alt_tid17 = $('#eigen_alt_c17').val();
            var eigen_alt_tid18 = $('#eigen_alt_c18').val();
            var eigen_alt_tid19 = $('#eigen_alt_c19').val();
            var eigen_alt_tid20 = $('#eigen_alt_c20').val();
            var eigen_alt_tid21 = $('#eigen_alt_c21').val();

            //perhitungan sipil
            var jml_eigen_ts1 = (parseFloat(eigen_smpl1) * parseFloat(eigen_alt_ts1));
            var hsl_eigen_ts1 = jml_eigen_ts1.toFixed(6);
            $('#hsl_eigen_a1').val(hsl_eigen_ts1);
            var jml_eigen_ts2 = (parseFloat(eigen_smpl2) * parseFloat(eigen_alt_ts2));
            var hsl_eigen_ts2 = jml_eigen_ts2.toFixed(6);
            $('#hsl_eigen_a2').val(hsl_eigen_ts2);
            var jml_eigen_ts3 = (parseFloat(eigen_smpl3) * parseFloat(eigen_alt_ts3));
            var hsl_eigen_ts3 = jml_eigen_ts3.toFixed(6);
            $('#hsl_eigen_a3').val(hsl_eigen_ts3);
            var jml_eigen_ts4 = (parseFloat(eigen_smpl4) * parseFloat(eigen_alt_ts4));
            var hsl_eigen_ts4 = jml_eigen_ts4.toFixed(6);
            $('#hsl_eigen_a4').val(hsl_eigen_ts4);
            var jml_eigen_ts5 = (parseFloat(eigen_smpl5) * parseFloat(eigen_alt_ts5));
            var hsl_eigen_ts5 = jml_eigen_ts5.toFixed(6);
            $('#hsl_eigen_a5').val(hsl_eigen_ts5);
            var jml_eigen_ts6 = (parseFloat(eigen_smpl6) * parseFloat(eigen_alt_ts6));
            var hsl_eigen_ts6 = jml_eigen_ts6.toFixed(6);
            $('#hsl_eigen_a6').val(hsl_eigen_ts6);
            var jml_eigen_ts7 = (parseFloat(eigen_smpl7) * parseFloat(eigen_alt_ts7));
            var hsl_eigen_ts7 = jml_eigen_ts7.toFixed(6);
            $('#hsl_eigen_a7').val(hsl_eigen_ts7);
            var jml_eigen_ts8 = (parseFloat(eigen_smpl8) * parseFloat(eigen_alt_ts8));
            var hsl_eigen_ts8 = jml_eigen_ts8.toFixed(6);
            $('#hsl_eigen_a8').val(hsl_eigen_ts8);
            var jml_eigen_ts9 = (parseFloat(eigen_smpl9) * parseFloat(eigen_alt_ts9));
            var hsl_eigen_ts9 = jml_eigen_ts9.toFixed(6);
            $('#hsl_eigen_a9').val(hsl_eigen_ts9);
            var jml_eigen_ts10 = (parseFloat(eigen_smpl10) * parseFloat(eigen_alt_ts10));
            var hsl_eigen_ts10 = jml_eigen_ts10.toFixed(6);
            $('#hsl_eigen_a10').val(hsl_eigen_ts10);
            var jml_eigen_ts11 = (parseFloat(eigen_smpl11) * parseFloat(eigen_alt_ts11));
            var hsl_eigen_ts11 = jml_eigen_ts11.toFixed(6);
            $('#hsl_eigen_a11').val(hsl_eigen_ts11);
            var jml_eigen_ts12 = (parseFloat(eigen_smpl12) * parseFloat(eigen_alt_ts12));
            var hsl_eigen_ts12 = jml_eigen_ts12.toFixed(6);
            $('#hsl_eigen_a12').val(hsl_eigen_ts12);
            var jml_eigen_ts13 = (parseFloat(eigen_smpl13) * parseFloat(eigen_alt_ts13));
            var hsl_eigen_ts13 = jml_eigen_ts13.toFixed(6);
            $('#hsl_eigen_a13').val(hsl_eigen_ts13);
            var jml_eigen_ts14 = (parseFloat(eigen_smpl14) * parseFloat(eigen_alt_ts14));
            var hsl_eigen_ts14 = jml_eigen_ts14.toFixed(6);
            $('#hsl_eigen_a14').val(hsl_eigen_ts14);
            var jml_eigen_ts15 = (parseFloat(eigen_smpl15) * parseFloat(eigen_alt_ts15));
            var hsl_eigen_ts15 = jml_eigen_ts15.toFixed(6);
            $('#hsl_eigen_a15').val(hsl_eigen_ts15);
            var jml_eigen_ts16 = (parseFloat(eigen_smpl16) * parseFloat(eigen_alt_ts16));
            var hsl_eigen_ts16 = jml_eigen_ts16.toFixed(6);
            $('#hsl_eigen_a16').val(hsl_eigen_ts16);
            var jml_eigen_ts17 = (parseFloat(eigen_smpl17) * parseFloat(eigen_alt_ts17));
            var hsl_eigen_ts17 = jml_eigen_ts17.toFixed(6);
            $('#hsl_eigen_a17').val(hsl_eigen_ts17);
            var jml_eigen_ts18 = (parseFloat(eigen_smpl18) * parseFloat(eigen_alt_ts18));
            var hsl_eigen_ts18 = jml_eigen_ts18.toFixed(6);
            $('#hsl_eigen_a18').val(hsl_eigen_ts18);
            var jml_eigen_ts19 = (parseFloat(eigen_smpl19) * parseFloat(eigen_alt_ts19));
            var hsl_eigen_ts19 = jml_eigen_ts19.toFixed(6);
            $('#hsl_eigen_a19').val(hsl_eigen_ts19);
            var jml_eigen_ts20 = (parseFloat(eigen_smpl20) * parseFloat(eigen_alt_ts20));
            var hsl_eigen_ts20 = jml_eigen_ts20.toFixed(6);
            $('#hsl_eigen_a20').val(hsl_eigen_ts20);
            var jml_eigen_ts21 = (parseFloat(eigen_smpl21) * parseFloat(eigen_alt_ts21));
            var hsl_eigen_ts21 = jml_eigen_ts21.toFixed(6);
            $('#hsl_eigen_a21').val(hsl_eigen_ts21);

            //perhitungan informatika
            var jml_eigen_tif1 = (parseFloat(eigen_smpl1) * parseFloat(eigen_alt_tif1));
            var hsl_eigen_tif1 = jml_eigen_tif1.toFixed(6);
            $('#hsl_eigen_b1').val(hsl_eigen_tif1);
            var jml_eigen_tif2 = (parseFloat(eigen_smpl2) * parseFloat(eigen_alt_tif2));
            var hsl_eigen_tif2 = jml_eigen_tif2.toFixed(6);
            $('#hsl_eigen_b2').val(hsl_eigen_tif2);
            var jml_eigen_tif3 = (parseFloat(eigen_smpl3) * parseFloat(eigen_alt_tif3));
            var hsl_eigen_tif3 = jml_eigen_tif3.toFixed(6);
            $('#hsl_eigen_b3').val(hsl_eigen_tif3);
            var jml_eigen_tif4 = (parseFloat(eigen_smpl4) * parseFloat(eigen_alt_tif4));
            var hsl_eigen_tif4 = jml_eigen_tif4.toFixed(6);
            $('#hsl_eigen_b4').val(hsl_eigen_tif4);
            var jml_eigen_tif5 = (parseFloat(eigen_smpl5) * parseFloat(eigen_alt_tif5));
            var hsl_eigen_tif5 = jml_eigen_tif5.toFixed(6);
            $('#hsl_eigen_b5').val(hsl_eigen_tif5);
            var jml_eigen_tif6 = (parseFloat(eigen_smpl6) * parseFloat(eigen_alt_tif6));
            var hsl_eigen_tif6 = jml_eigen_tif6.toFixed(6);
            $('#hsl_eigen_b6').val(hsl_eigen_tif6);
            var jml_eigen_tif7 = (parseFloat(eigen_smpl7) * parseFloat(eigen_alt_tif7));
            var hsl_eigen_tif7 = jml_eigen_tif7.toFixed(6);
            $('#hsl_eigen_b7').val(hsl_eigen_tif7);
            var jml_eigen_tif8 = (parseFloat(eigen_smpl8) * parseFloat(eigen_alt_tif8));
            var hsl_eigen_tif8 = jml_eigen_tif8.toFixed(6);
            $('#hsl_eigen_b8').val(hsl_eigen_tif8);
            var jml_eigen_tif9 = (parseFloat(eigen_smpl9) * parseFloat(eigen_alt_tif9));
            var hsl_eigen_tif9 = jml_eigen_tif9.toFixed(6);
            $('#hsl_eigen_b9').val(hsl_eigen_tif9);
            var jml_eigen_tif10 = (parseFloat(eigen_smpl10) * parseFloat(eigen_alt_tif10));
            var hsl_eigen_tif10 = jml_eigen_tif10.toFixed(6);
            $('#hsl_eigen_b10').val(hsl_eigen_tif10);
            var jml_eigen_tif11 = (parseFloat(eigen_smpl11) * parseFloat(eigen_alt_tif11));
            var hsl_eigen_tif11 = jml_eigen_tif11.toFixed(6);
            $('#hsl_eigen_b11').val(hsl_eigen_tif11);
            var jml_eigen_tif12 = (parseFloat(eigen_smpl12) * parseFloat(eigen_alt_tif12));
            var hsl_eigen_tif12 = jml_eigen_tif12.toFixed(6);
            $('#hsl_eigen_b12').val(hsl_eigen_tif12);
            var jml_eigen_tif13 = (parseFloat(eigen_smpl13) * parseFloat(eigen_alt_tif13));
            var hsl_eigen_tif13 = jml_eigen_tif13.toFixed(6);
            $('#hsl_eigen_b13').val(hsl_eigen_tif13);
            var jml_eigen_tif14 = (parseFloat(eigen_smpl14) * parseFloat(eigen_alt_tif14));
            var hsl_eigen_tif14 = jml_eigen_tif14.toFixed(6);
            $('#hsl_eigen_b14').val(hsl_eigen_tif14);
            var jml_eigen_tif15 = (parseFloat(eigen_smpl15) * parseFloat(eigen_alt_tif15));
            var hsl_eigen_tif15 = jml_eigen_tif15.toFixed(6);
            $('#hsl_eigen_b15').val(hsl_eigen_tif15);
            var jml_eigen_tif16 = (parseFloat(eigen_smpl16) * parseFloat(eigen_alt_tif16));
            var hsl_eigen_tif16 = jml_eigen_tif16.toFixed(6);
            $('#hsl_eigen_b16').val(hsl_eigen_tif16);
            var jml_eigen_tif17 = (parseFloat(eigen_smpl17) * parseFloat(eigen_alt_tif17));
            var hsl_eigen_tif17 = jml_eigen_tif17.toFixed(6);
            $('#hsl_eigen_b17').val(hsl_eigen_tif17);
            var jml_eigen_tif18 = (parseFloat(eigen_smpl18) * parseFloat(eigen_alt_tif18));
            var hsl_eigen_tif18 = jml_eigen_tif18.toFixed(6);
            $('#hsl_eigen_b18').val(hsl_eigen_tif18);
            var jml_eigen_tif19 = (parseFloat(eigen_smpl19) * parseFloat(eigen_alt_tif19));
            var hsl_eigen_tif19 = jml_eigen_tif19.toFixed(6);
            $('#hsl_eigen_b19').val(hsl_eigen_tif19);
            var jml_eigen_tif20 = (parseFloat(eigen_smpl20) * parseFloat(eigen_alt_tif20));
            var hsl_eigen_tif20 = jml_eigen_tif20.toFixed(6);
            $('#hsl_eigen_b20').val(hsl_eigen_tif20);
            var jml_eigen_tif21 = (parseFloat(eigen_smpl21) * parseFloat(eigen_alt_tif21));
            var hsl_eigen_tif21 = jml_eigen_tif21.toFixed(6);
            $('#hsl_eigen_b21').val(hsl_eigen_tif21);

            //perhitungan industri
            var jml_eigen_tid1 = (parseFloat(eigen_smpl1) * parseFloat(eigen_alt_tid1));
            var hsl_eigen_tid1 = jml_eigen_tid1.toFixed(6);
            $('#hsl_eigen_c1').val(hsl_eigen_tid1);
            var jml_eigen_tid2 = (parseFloat(eigen_smpl2) * parseFloat(eigen_alt_tid2));
            var hsl_eigen_tid2 = jml_eigen_tid2.toFixed(6);
            $('#hsl_eigen_c2').val(hsl_eigen_tid2);
            var jml_eigen_tid3 = (parseFloat(eigen_smpl3) * parseFloat(eigen_alt_tid3));
            var hsl_eigen_tid3 = jml_eigen_tid3.toFixed(6);
            $('#hsl_eigen_c3').val(hsl_eigen_tid3);
            var jml_eigen_tid4 = (parseFloat(eigen_smpl4) * parseFloat(eigen_alt_tid4));
            var hsl_eigen_tid4 = jml_eigen_tid4.toFixed(6);
            $('#hsl_eigen_c4').val(hsl_eigen_tid4);
            var jml_eigen_tid5 = (parseFloat(eigen_smpl5) * parseFloat(eigen_alt_tid5));
            var hsl_eigen_tid5 = jml_eigen_tid5.toFixed(6);
            $('#hsl_eigen_c5').val(hsl_eigen_tid5);
            var jml_eigen_tid6 = (parseFloat(eigen_smpl6) * parseFloat(eigen_alt_tid6));
            var hsl_eigen_tid6 = jml_eigen_tid6.toFixed(6);
            $('#hsl_eigen_c6').val(hsl_eigen_tid6);
            var jml_eigen_tid7 = (parseFloat(eigen_smpl7) * parseFloat(eigen_alt_tid7));
            var hsl_eigen_tid7 = jml_eigen_tid7.toFixed(6);
            $('#hsl_eigen_c7').val(hsl_eigen_tid7);
            var jml_eigen_tid8 = (parseFloat(eigen_smpl8) * parseFloat(eigen_alt_tid8));
            var hsl_eigen_tid8 = jml_eigen_tid8.toFixed(6);
            $('#hsl_eigen_c8').val(hsl_eigen_tid8);
            var jml_eigen_tid9 = (parseFloat(eigen_smpl9) * parseFloat(eigen_alt_tid9));
            var hsl_eigen_tid9 = jml_eigen_tid9.toFixed(6);
            $('#hsl_eigen_c9').val(hsl_eigen_tid9);
            var jml_eigen_tid10 = (parseFloat(eigen_smpl10) * parseFloat(eigen_alt_tid10));
            var hsl_eigen_tid10 = jml_eigen_tid10.toFixed(6);
            $('#hsl_eigen_c10').val(hsl_eigen_tid10);
            var jml_eigen_tid11 = (parseFloat(eigen_smpl11) * parseFloat(eigen_alt_tid11));
            var hsl_eigen_tid11 = jml_eigen_tid11.toFixed(6);
            $('#hsl_eigen_c11').val(hsl_eigen_tid11);
            var jml_eigen_tid12 = (parseFloat(eigen_smpl12) * parseFloat(eigen_alt_tid12));
            var hsl_eigen_tid12 = jml_eigen_tid12.toFixed(6);
            $('#hsl_eigen_c12').val(hsl_eigen_tid12);
            var jml_eigen_tid13 = (parseFloat(eigen_smpl13) * parseFloat(eigen_alt_tid13));
            var hsl_eigen_tid13 = jml_eigen_tid13.toFixed(6);
            $('#hsl_eigen_c13').val(hsl_eigen_tid13);
            var jml_eigen_tid14 = (parseFloat(eigen_smpl14) * parseFloat(eigen_alt_tid14));
            var hsl_eigen_tid14 = jml_eigen_tid14.toFixed(6);
            $('#hsl_eigen_c14').val(hsl_eigen_tid14);
            var jml_eigen_tid15 = (parseFloat(eigen_smpl15) * parseFloat(eigen_alt_tid15));
            var hsl_eigen_tid15 = jml_eigen_tid15.toFixed(6);
            $('#hsl_eigen_c15').val(hsl_eigen_tid15);
            var jml_eigen_tid16 = (parseFloat(eigen_smpl16) * parseFloat(eigen_alt_tid16));
            var hsl_eigen_tid16 = jml_eigen_tid16.toFixed(6);
            $('#hsl_eigen_c16').val(hsl_eigen_tid16);
            var jml_eigen_tid17 = (parseFloat(eigen_smpl17) * parseFloat(eigen_alt_tid17));
            var hsl_eigen_tid17 = jml_eigen_tid17.toFixed(6);
            $('#hsl_eigen_c17').val(hsl_eigen_tid17);
            var jml_eigen_tid18 = (parseFloat(eigen_smpl18) * parseFloat(eigen_alt_tid18));
            var hsl_eigen_tid18 = jml_eigen_tid18.toFixed(6);
            $('#hsl_eigen_c18').val(hsl_eigen_tid18);
            var jml_eigen_tid19 = (parseFloat(eigen_smpl19) * parseFloat(eigen_alt_tid19));
            var hsl_eigen_tid19 = jml_eigen_tid19.toFixed(6);
            $('#hsl_eigen_c19').val(hsl_eigen_tid19);
            var jml_eigen_tid20 = (parseFloat(eigen_smpl20) * parseFloat(eigen_alt_tid20));
            var hsl_eigen_tid20 = jml_eigen_tid20.toFixed(6);
            $('#hsl_eigen_c20').val(hsl_eigen_tid20);
            var jml_eigen_tid21 = (parseFloat(eigen_smpl21) * parseFloat(eigen_alt_tid21));
            var hsl_eigen_tid21 = jml_eigen_tid21.toFixed(6);
            $('#hsl_eigen_c21').val(hsl_eigen_tid21);

            //perhitungan jumlah TSP
            var eigen_sipil = (parseFloat(hsl_eigen_ts1) + parseFloat(hsl_eigen_ts2) + parseFloat(hsl_eigen_ts3) + parseFloat(hsl_eigen_ts4) + parseFloat(hsl_eigen_ts5) + parseFloat(hsl_eigen_ts6) + parseFloat(hsl_eigen_ts7) + parseFloat(hsl_eigen_ts8) + parseFloat(hsl_eigen_ts9) + parseFloat(hsl_eigen_ts10) + parseFloat(hsl_eigen_ts11) + parseFloat(hsl_eigen_ts12) + parseFloat(hsl_eigen_ts13) + parseFloat(hsl_eigen_ts14) + parseFloat(hsl_eigen_ts15) + parseFloat(hsl_eigen_ts16) + parseFloat(hsl_eigen_ts17) + parseFloat(hsl_eigen_ts18) + parseFloat(hsl_eigen_ts19) + parseFloat(hsl_eigen_ts20) + parseFloat(hsl_eigen_ts21));
            var jml_eigen_sipil = eigen_sipil.toFixed(5);
            $('#jml_eigen_sipil').val(jml_eigen_sipil);
            var eigen_informatika = (parseFloat(hsl_eigen_tif1) + parseFloat(hsl_eigen_tif2) + parseFloat(hsl_eigen_tif3) + parseFloat(hsl_eigen_tif4) + parseFloat(hsl_eigen_tif5) + parseFloat(hsl_eigen_tif6) + parseFloat(hsl_eigen_tif7) + parseFloat(hsl_eigen_tif8) + parseFloat(hsl_eigen_tif9) + parseFloat(hsl_eigen_tif10) + parseFloat(hsl_eigen_tif11) + parseFloat(hsl_eigen_tif12) + parseFloat(hsl_eigen_tif13) + parseFloat(hsl_eigen_tif14) + parseFloat(hsl_eigen_tif15) + parseFloat(hsl_eigen_tif16) + parseFloat(hsl_eigen_tif17) + parseFloat(hsl_eigen_tif18) + parseFloat(hsl_eigen_tif19) + parseFloat(hsl_eigen_tif20) + parseFloat(hsl_eigen_tif21));
            var jml_eigen_informatika = eigen_informatika.toFixed(5);
            $('#jml_eigen_informatika').val(jml_eigen_informatika);
            var eigen_industri = (parseFloat(hsl_eigen_tid1) + parseFloat(hsl_eigen_tid2) + parseFloat(hsl_eigen_tid3) + parseFloat(hsl_eigen_tid4) + parseFloat(hsl_eigen_tid5) + parseFloat(hsl_eigen_tid6) + parseFloat(hsl_eigen_tid7) + parseFloat(hsl_eigen_tid8) + parseFloat(hsl_eigen_tid9) + parseFloat(hsl_eigen_tid10) + parseFloat(hsl_eigen_tid11) + parseFloat(hsl_eigen_tid12) + parseFloat(hsl_eigen_tid13) + parseFloat(hsl_eigen_tid14) + parseFloat(hsl_eigen_tid15) + parseFloat(hsl_eigen_tid16) + parseFloat(hsl_eigen_tid17) + parseFloat(hsl_eigen_tid18) + parseFloat(hsl_eigen_tid19) + parseFloat(hsl_eigen_tid20) + parseFloat(hsl_eigen_tid21));
            var jml_eigen_industri = eigen_industri.toFixed(5);
            $('#jml_eigen_industri').val(jml_eigen_industri);

            var jumlah_total = (parseFloat(jml_eigen_sipil) + parseFloat(jml_eigen_informatika) + parseFloat(jml_eigen_industri));
            var totalll = jumlah_total.toFixed(5);
            $('#jumlah_total').val(totalll);
            var hitung_persen1 = (parseFloat(jml_eigen_sipil) / parseFloat(totalll) * 100);
            var persen_sipil = hitung_persen1.toFixed();
            $('#persen_sipil').val(persen_sipil);
            var hitung_persen2 = (parseFloat(jml_eigen_informatika) / parseFloat(totalll) * 100);
            var persen_informatika = hitung_persen2.toFixed();
            $('#persen_informatika').val(persen_informatika);
            var hitung_persen3 = (parseFloat(jml_eigen_industri) / parseFloat(totalll) * 100);
            var persen_industri = hitung_persen3.toFixed();
            $('#persen_industri').val(persen_industri);
        })
    });
</script>