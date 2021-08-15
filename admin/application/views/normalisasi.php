<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Matriks dan Normalisasi
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
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
                    <tbody class="tbl-jml">
                        <tr>
                            <td>Kimia</td>
                            <td><?= $matriks['kimia_a'] ?><input type="text" id="kol1" class="brs1" readonly style="width: 50px;" value="<?= $matriks['kimia_a'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs2" readonly style="width: 50px;" value="<?= $matriks['kimia_b'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs3" readonly style="width: 50px;" value="<?= $matriks['kimia_c'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs4" readonly style="width: 50px;" value="<?= $matriks['kimia_d'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs5" readonly style="width: 50px;" value="<?= $matriks['kimia_e'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs6" readonly style="width: 50px;" value="<?= $matriks['kimia_f'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs7" readonly style="width: 50px;" value="<?= $matriks['kimia_g'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs8" readonly style="width: 50px;" value="<?= $matriks['kimia_h'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs9" readonly style="width: 50px;" value="<?= $matriks['kimia_i'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs10" readonly style="width: 50px;" value="<?= $matriks['kimia_j'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs11" readonly style="width: 50px;" value="<?= $matriks['kimia_k'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs12" readonly style="width: 50px;" value="<?= $matriks['kimia_l'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs13" readonly style="width: 50px;" value="<?= $matriks['kimia_m'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs14" readonly style="width: 50px;" value="<?= $matriks['kimia_n'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs15" readonly style="width: 50px;" value="<?= $matriks['kimia_o'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs16" readonly style="width: 50px;" value="<?= $matriks['kimia_p'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs17" readonly style="width: 50px;" value="<?= $matriks['kimia_q'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs18" readonly style="width: 50px;" value="<?= $matriks['kimia_r'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs19" readonly style="width: 50px;" value="<?= $matriks['kimia_s'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs20" readonly style="width: 50px;" value="<?= $matriks['kimia_t'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs21" readonly style="width: 50px;" value="<?= $matriks['kimia_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Biologi</td>
                            <td><?= $matriks['biologi_a'] ?><input readonly style="width: 50px;" type="text" id="kol2" class="brs1" value="<?= $matriks['biologi_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs2" value="<?= $matriks['biologi_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs3" value="<?= $matriks['biologi_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs4" value="<?= $matriks['biologi_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs5" value="<?= $matriks['biologi_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs6" value="<?= $matriks['biologi_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs7" value="<?= $matriks['biologi_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs8" value="<?= $matriks['biologi_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs9" value="<?= $matriks['biologi_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs10" value="<?= $matriks['biologi_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs11" value="<?= $matriks['biologi_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs12" value="<?= $matriks['biologi_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs13" value="<?= $matriks['biologi_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs14" value="<?= $matriks['biologi_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs15" value="<?= $matriks['biologi_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs16" value="<?= $matriks['biologi_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs17" value="<?= $matriks['biologi_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs18" value="<?= $matriks['biologi_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs19" value="<?= $matriks['biologi_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs20" value="<?= $matriks['biologi_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs21" value="<?= $matriks['biologi_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Fisika</td>
                            <td><?= $matriks['fisika_a'] ?><input readonly style="width: 50px;" type="text" id="kol3" class="brs1" value="<?= $matriks['fisika_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs2" value="<?= $matriks['fisika_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs3" value="<?= $matriks['fisika_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs4" value="<?= $matriks['fisika_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs5" value="<?= $matriks['fisika_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs6" value="<?= $matriks['fisika_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs7" value="<?= $matriks['fisika_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs8" value="<?= $matriks['fisika_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs9" value="<?= $matriks['fisika_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs10" value="<?= $matriks['fisika_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs11" value="<?= $matriks['fisika_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs12" value="<?= $matriks['fisika_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs13" value="<?= $matriks['fisika_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs14" value="<?= $matriks['fisika_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs15" value="<?= $matriks['fisika_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs16" value="<?= $matriks['fisika_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs17" value="<?= $matriks['fisika_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs18" value="<?= $matriks['fisika_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs19" value="<?= $matriks['fisika_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs20" value="<?= $matriks['fisika_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs21" value="<?= $matriks['fisika_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td><?= $matriks['matematika_a'] ?><input readonly style="width: 50px;" type="text" id="kol4" class="brs1" value="<?= $matriks['matematika_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs2" value="<?= $matriks['matematika_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs3" value="<?= $matriks['matematika_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs4" value="<?= $matriks['matematika_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs5" value="<?= $matriks['matematika_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs6" value="<?= $matriks['matematika_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs7" value="<?= $matriks['matematika_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs8" value="<?= $matriks['matematika_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs9" value="<?= $matriks['matematika_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs10" value="<?= $matriks['matematika_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs11" value="<?= $matriks['matematika_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs12" value="<?= $matriks['matematika_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs13" value="<?= $matriks['matematika_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs14" value="<?= $matriks['matematika_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs15" value="<?= $matriks['matematika_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs16" value="<?= $matriks['matematika_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs17" value="<?= $matriks['matematika_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs18" value="<?= $matriks['matematika_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs19" value="<?= $matriks['matematika_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs20" value="<?= $matriks['matematika_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs21" value="<?= $matriks['matematika_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Bhs Inggris</td>
                            <td><?= $matriks['inggris_a'] ?><input readonly style="width: 50px;" type="text" id="kol5" class="brs1" value="<?= $matriks['inggris_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs2" value="<?= $matriks['inggris_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs3" value="<?= $matriks['inggris_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs4" value="<?= $matriks['inggris_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs5" value="<?= $matriks['inggris_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs6" value="<?= $matriks['inggris_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs7" value="<?= $matriks['inggris_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs8" value="<?= $matriks['inggris_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs9" value="<?= $matriks['inggris_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs10" value="<?= $matriks['inggris_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs11" value="<?= $matriks['inggris_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs12" value="<?= $matriks['inggris_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs13" value="<?= $matriks['inggris_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs14" value="<?= $matriks['inggris_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs15" value="<?= $matriks['inggris_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs16" value="<?= $matriks['inggris_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs17" value="<?= $matriks['inggris_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs18" value="<?= $matriks['inggris_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs19" value="<?= $matriks['inggris_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs20" value="<?= $matriks['inggris_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs21" value="<?= $matriks['inggris_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Bhs Indonesia</td>
                            <td><?= $matriks['indo_a'] ?><input readonly style="width: 50px;" type="text" id="kol6" class="brs1" value="<?= $matriks['indo_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs2" value="<?= $matriks['indo_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs3" value="<?= $matriks['indo_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs4" value="<?= $matriks['indo_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs5" value="<?= $matriks['indo_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs6" value="<?= $matriks['indo_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs7" value="<?= $matriks['indo_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs8" value="<?= $matriks['indo_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs9" value="<?= $matriks['indo_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs10" value="<?= $matriks['indo_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs11" value="<?= $matriks['indo_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs12" value="<?= $matriks['indo_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs13" value="<?= $matriks['indo_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs14" value="<?= $matriks['indo_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs15" value="<?= $matriks['indo_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs16" value="<?= $matriks['indo_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs17" value="<?= $matriks['indo_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs18" value="<?= $matriks['indo_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs19" value="<?= $matriks['indo_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs20" value="<?= $matriks['indo_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs21" value="<?= $matriks['indo_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Realistis</td>
                            <td><?= $matriks['realistis_a'] ?><input readonly style="width: 50px;" type="text" id="kol7" class="brs1" value="<?= $matriks['realistis_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs2" value="<?= $matriks['realistis_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs3" value="<?= $matriks['realistis_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs4" value="<?= $matriks['realistis_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs5" value="<?= $matriks['realistis_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs6" value="<?= $matriks['realistis_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs7" value="<?= $matriks['realistis_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs8" value="<?= $matriks['realistis_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs9" value="<?= $matriks['realistis_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs10" value="<?= $matriks['realistis_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs11" value="<?= $matriks['realistis_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs12" value="<?= $matriks['realistis_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs13" value="<?= $matriks['realistis_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs14" value="<?= $matriks['realistis_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs15" value="<?= $matriks['realistis_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs16" value="<?= $matriks['realistis_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs17" value="<?= $matriks['realistis_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs18" value="<?= $matriks['realistis_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs19" value="<?= $matriks['realistis_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs20" value="<?= $matriks['realistis_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs21" value="<?= $matriks['realistis_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Intelektual</td>
                            <td><?= $matriks['intelektual_a'] ?><input readonly style="width: 50px;" type="text" id="kol8" class="brs1" value="<?= $matriks['intelektual_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs2" value="<?= $matriks['intelektual_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs3" value="<?= $matriks['intelektual_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs4" value="<?= $matriks['intelektual_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs5" value="<?= $matriks['intelektual_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs6" value="<?= $matriks['intelektual_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs7" value="<?= $matriks['intelektual_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs8" value="<?= $matriks['intelektual_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs9" value="<?= $matriks['intelektual_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs10" value="<?= $matriks['intelektual_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs11" value="<?= $matriks['intelektual_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs12" value="<?= $matriks['intelektual_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs13" value="<?= $matriks['intelektual_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs14" value="<?= $matriks['intelektual_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs15" value="<?= $matriks['intelektual_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs16" value="<?= $matriks['intelektual_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs17" value="<?= $matriks['intelektual_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs18" value="<?= $matriks['intelektual_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs19" value="<?= $matriks['intelektual_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs20" value="<?= $matriks['intelektual_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs21" value="<?= $matriks['intelektual_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Artistik</td>
                            <td><?= $matriks['artistik_a'] ?><input readonly style="width: 50px;" type="text" id="kol9" class="brs1" value="<?= $matriks['artistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs2" value="<?= $matriks['artistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs3" value="<?= $matriks['artistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs4" value="<?= $matriks['artistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs5" value="<?= $matriks['artistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs6" value="<?= $matriks['artistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs7" value="<?= $matriks['artistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs8" value="<?= $matriks['artistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs9" value="<?= $matriks['artistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs10" value="<?= $matriks['artistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs11" value="<?= $matriks['artistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs12" value="<?= $matriks['artistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs13" value="<?= $matriks['artistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs14" value="<?= $matriks['artistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs15" value="<?= $matriks['artistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs16" value="<?= $matriks['artistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs17" value="<?= $matriks['artistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs18" value="<?= $matriks['artistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs19" value="<?= $matriks['artistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs20" value="<?= $matriks['artistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs21" value="<?= $matriks['artistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Sosial</td>
                            <td><?= $matriks['sosial_a'] ?><input readonly style="width: 50px;" type="text" id="kol10" class="brs1" value="<?= $matriks['sosial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs2" value="<?= $matriks['sosial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs3" value="<?= $matriks['sosial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs4" value="<?= $matriks['sosial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs5" value="<?= $matriks['sosial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs6" value="<?= $matriks['sosial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs7" value="<?= $matriks['sosial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs8" value="<?= $matriks['sosial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs9" value="<?= $matriks['sosial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs10" value="<?= $matriks['sosial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs11" value="<?= $matriks['sosial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs12" value="<?= $matriks['sosial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs13" value="<?= $matriks['sosial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs14" value="<?= $matriks['sosial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs15" value="<?= $matriks['sosial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs16" value="<?= $matriks['sosial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs17" value="<?= $matriks['sosial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs18" value="<?= $matriks['sosial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs19" value="<?= $matriks['sosial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs20" value="<?= $matriks['sosial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs21" value="<?= $matriks['sosial_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Enterprise</td>
                            <td><?= $matriks['enterprise_a'] ?><input readonly style="width: 50px;" type="text" id="kol11" class="brs1" value="<?= $matriks['enterprise_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs2" value="<?= $matriks['enterprise_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs3" value="<?= $matriks['enterprise_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs4" value="<?= $matriks['enterprise_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs5" value="<?= $matriks['enterprise_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs6" value="<?= $matriks['enterprise_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs7" value="<?= $matriks['enterprise_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs8" value="<?= $matriks['enterprise_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs9" value="<?= $matriks['enterprise_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs10" value="<?= $matriks['enterprise_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs11" value="<?= $matriks['enterprise_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs12" value="<?= $matriks['enterprise_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs13" value="<?= $matriks['enterprise_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs14" value="<?= $matriks['enterprise_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs15" value="<?= $matriks['enterprise_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs16" value="<?= $matriks['enterprise_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs17" value="<?= $matriks['enterprise_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs18" value="<?= $matriks['enterprise_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs19" value="<?= $matriks['enterprise_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs20" value="<?= $matriks['enterprise_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs21" value="<?= $matriks['enterprise_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Konvensional</td>
                            <td><?= $matriks['konvensional_a'] ?><input readonly style="width: 50px;" type="text" id="kol12" class="brs1" value="<?= $matriks['konvensional_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs2" value="<?= $matriks['konvensional_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs3" value="<?= $matriks['konvensional_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs4" value="<?= $matriks['konvensional_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs5" value="<?= $matriks['konvensional_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs6" value="<?= $matriks['konvensional_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs7" value="<?= $matriks['konvensional_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs8" value="<?= $matriks['konvensional_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs9" value="<?= $matriks['konvensional_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs10" value="<?= $matriks['konvensional_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs11" value="<?= $matriks['konvensional_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs12" value="<?= $matriks['konvensional_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs13" value="<?= $matriks['konvensional_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs14" value="<?= $matriks['konvensional_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs15" value="<?= $matriks['konvensional_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs16" value="<?= $matriks['konvensional_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs17" value="<?= $matriks['konvensional_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs18" value="<?= $matriks['konvensional_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs19" value="<?= $matriks['konvensional_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs20" value="<?= $matriks['konvensional_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs21" value="<?= $matriks['konvensional_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Linguistik</td>
                            <td><?= $matriks['linguistik_a'] ?><input readonly style="width: 50px;" type="text" id="kol13" class="brs1" value="<?= $matriks['linguistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs2" value="<?= $matriks['linguistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs3" value="<?= $matriks['linguistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs4" value="<?= $matriks['linguistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs5" value="<?= $matriks['linguistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs6" value="<?= $matriks['linguistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs7" value="<?= $matriks['linguistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs8" value="<?= $matriks['linguistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs9" value="<?= $matriks['linguistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs10" value="<?= $matriks['linguistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs11" value="<?= $matriks['linguistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs12" value="<?= $matriks['linguistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs13" value="<?= $matriks['linguistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs14" value="<?= $matriks['linguistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs15" value="<?= $matriks['linguistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs16" value="<?= $matriks['linguistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs17" value="<?= $matriks['linguistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs18" value="<?= $matriks['linguistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs19" value="<?= $matriks['linguistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs20" value="<?= $matriks['linguistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs21" value="<?= $matriks['linguistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Matematikal</td>
                            <td><?= $matriks['matematikal_a'] ?><input readonly style="width: 50px;" type="text" id="kol14" class="brs1" value="<?= $matriks['matematikal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs2" value="<?= $matriks['matematikal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs3" value="<?= $matriks['matematikal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs4" value="<?= $matriks['matematikal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs5" value="<?= $matriks['matematikal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs6" value="<?= $matriks['matematikal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs7" value="<?= $matriks['matematikal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs8" value="<?= $matriks['matematikal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs9" value="<?= $matriks['matematikal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs10" value="<?= $matriks['matematikal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs11" value="<?= $matriks['matematikal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs12" value="<?= $matriks['matematikal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs13" value="<?= $matriks['matematikal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs14" value="<?= $matriks['matematikal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs15" value="<?= $matriks['matematikal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs16" value="<?= $matriks['matematikal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs17" value="<?= $matriks['matematikal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs18" value="<?= $matriks['matematikal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs19" value="<?= $matriks['matematikal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs20" value="<?= $matriks['matematikal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs21" value="<?= $matriks['matematikal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Musikal</td>
                            <td><?= $matriks['musikal_a'] ?><input readonly style="width: 50px;" type="text" id="kol15" class="brs1" value="<?= $matriks['musikal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs2" value="<?= $matriks['musikal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs3" value="<?= $matriks['musikal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs4" value="<?= $matriks['musikal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs5" value="<?= $matriks['musikal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs6" value="<?= $matriks['musikal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs7" value="<?= $matriks['musikal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs8" value="<?= $matriks['musikal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs9" value="<?= $matriks['musikal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs10" value="<?= $matriks['musikal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs11" value="<?= $matriks['musikal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs12" value="<?= $matriks['musikal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs13" value="<?= $matriks['musikal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs14" value="<?= $matriks['musikal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs15" value="<?= $matriks['musikal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs16" value="<?= $matriks['musikal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs17" value="<?= $matriks['musikal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs18" value="<?= $matriks['musikal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs19" value="<?= $matriks['musikal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs20" value="<?= $matriks['musikal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs21" value="<?= $matriks['musikal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Kinestik</td>
                            <td><?= $matriks['kinestik_a'] ?><input readonly style="width: 50px;" type="text" id="kol16" class="brs1" value="<?= $matriks['kinestik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs2" value="<?= $matriks['kinestik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs3" value="<?= $matriks['kinestik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs4" value="<?= $matriks['kinestik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs5" value="<?= $matriks['kinestik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs6" value="<?= $matriks['kinestik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs7" value="<?= $matriks['kinestik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs8" value="<?= $matriks['kinestik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs9" value="<?= $matriks['kinestik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs10" value="<?= $matriks['kinestik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs11" value="<?= $matriks['kinestik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs12" value="<?= $matriks['kinestik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs13" value="<?= $matriks['kinestik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs14" value="<?= $matriks['kinestik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs15" value="<?= $matriks['kinestik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs16" value="<?= $matriks['kinestik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs17" value="<?= $matriks['kinestik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs18" value="<?= $matriks['kinestik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs19" value="<?= $matriks['kinestik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs20" value="<?= $matriks['kinestik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs21" value="<?= $matriks['kinestik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Spartial</td>
                            <td><?= $matriks['spartial_a'] ?><input readonly style="width: 50px;" type="text" id="kol17" class="brs1" value="<?= $matriks['spartial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs2" value="<?= $matriks['spartial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs3" value="<?= $matriks['spartial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs4" value="<?= $matriks['spartial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs5" value="<?= $matriks['spartial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs6" value="<?= $matriks['spartial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs7" value="<?= $matriks['spartial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs8" value="<?= $matriks['spartial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs9" value="<?= $matriks['spartial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs10" value="<?= $matriks['spartial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs11" value="<?= $matriks['spartial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs12" value="<?= $matriks['spartial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs13" value="<?= $matriks['spartial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs14" value="<?= $matriks['spartial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs15" value="<?= $matriks['spartial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs16" value="<?= $matriks['spartial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs17" value="<?= $matriks['spartial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs18" value="<?= $matriks['spartial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs19" value="<?= $matriks['spartial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs20" value="<?= $matriks['spartial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs21" value="<?= $matriks['spartial_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Intrapersonal</td>
                            <td><?= $matriks['intrapersonal_a'] ?><input readonly style="width: 50px;" type="text" id="kol18" class="brs1" value="<?= $matriks['intrapersonal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs2" value="<?= $matriks['intrapersonal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs3" value="<?= $matriks['intrapersonal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs4" value="<?= $matriks['intrapersonal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs5" value="<?= $matriks['intrapersonal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs6" value="<?= $matriks['intrapersonal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs7" value="<?= $matriks['intrapersonal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs8" value="<?= $matriks['intrapersonal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs9" value="<?= $matriks['intrapersonal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs10" value="<?= $matriks['intrapersonal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs11" value="<?= $matriks['intrapersonal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs12" value="<?= $matriks['intrapersonal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs13" value="<?= $matriks['intrapersonal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs14" value="<?= $matriks['intrapersonal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs15" value="<?= $matriks['intrapersonal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs16" value="<?= $matriks['intrapersonal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs17" value="<?= $matriks['intrapersonal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs18" value="<?= $matriks['intrapersonal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs19" value="<?= $matriks['intrapersonal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs20" value="<?= $matriks['intrapersonal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs21" value="<?= $matriks['intrapersonal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Interpersonal</td>
                            <td><?= $matriks['interpersonal_a'] ?><input readonly style="width: 50px;" type="text" id="kol19" class="brs1" value="<?= $matriks['interpersonal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs2" value="<?= $matriks['interpersonal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs3" value="<?= $matriks['interpersonal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs4" value="<?= $matriks['interpersonal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs5" value="<?= $matriks['interpersonal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs6" value="<?= $matriks['interpersonal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs7" value="<?= $matriks['interpersonal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs8" value="<?= $matriks['interpersonal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs9" value="<?= $matriks['interpersonal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs10" value="<?= $matriks['interpersonal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs11" value="<?= $matriks['interpersonal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs12" value="<?= $matriks['interpersonal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs13" value="<?= $matriks['interpersonal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs14" value="<?= $matriks['interpersonal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs15" value="<?= $matriks['interpersonal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs16" value="<?= $matriks['interpersonal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs17" value="<?= $matriks['interpersonal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs18" value="<?= $matriks['interpersonal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs19" value="<?= $matriks['interpersonal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs20" value="<?= $matriks['interpersonal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs21" value="<?= $matriks['interpersonal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Naturalistik</td>
                            <td><?= $matriks['naturalistik_a'] ?><input readonly style="width: 50px;" type="text" id="kol20" class="brs1" value="<?= $matriks['naturalistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs2" value="<?= $matriks['naturalistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs3" value="<?= $matriks['naturalistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs4" value="<?= $matriks['naturalistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs5" value="<?= $matriks['naturalistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs6" value="<?= $matriks['naturalistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs7" value="<?= $matriks['naturalistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs8" value="<?= $matriks['naturalistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs9" value="<?= $matriks['naturalistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs10" value="<?= $matriks['naturalistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs11" value="<?= $matriks['naturalistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs12" value="<?= $matriks['naturalistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs13" value="<?= $matriks['naturalistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs14" value="<?= $matriks['naturalistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs15" value="<?= $matriks['naturalistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs16" value="<?= $matriks['naturalistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs17" value="<?= $matriks['naturalistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs18" value="<?= $matriks['naturalistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs19" value="<?= $matriks['naturalistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs20" value="<?= $matriks['naturalistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs21" value="<?= $matriks['naturalistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Eksistensial</td>
                            <td><?= $matriks['eksistensial_a'] ?><input readonly style="width: 50px;" type="text" id="kol21" class="brs1" value="<?= $matriks['eksistensial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs2" value="<?= $matriks['eksistensial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs3" value="<?= $matriks['eksistensial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs4" value="<?= $matriks['eksistensial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs5" value="<?= $matriks['eksistensial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs6" value="<?= $matriks['eksistensial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs7" value="<?= $matriks['eksistensial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs8" value="<?= $matriks['eksistensial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs9" value="<?= $matriks['eksistensial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs10" value="<?= $matriks['eksistensial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs11" value="<?= $matriks['eksistensial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs12" value="<?= $matriks['eksistensial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs13" value="<?= $matriks['eksistensial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs14" value="<?= $matriks['eksistensial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs15" value="<?= $matriks['eksistensial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs16" value="<?= $matriks['eksistensial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs17" value="<?= $matriks['eksistensial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs18" value="<?= $matriks['eksistensial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs19" value="<?= $matriks['eksistensial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs20" value="<?= $matriks['eksistensial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs21" value="<?= $matriks['eksistensial_u'] ?>"></td>
                        </tr>
                    </tbody>
                </table>
                <table id="TABLE_1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
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
                            <td>Jumlah</td>
                            <td id="jml-brs1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21"></td>
                        </tr>
                    </tbody>
                </table>
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
            "info": false
        });
    });

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

    $('.tbl-jml').on('input', '.brs1', function() {
        var totalBrs1 = 0;
        $('.tbl-jml .brs1').each(function() {
            var inputbrs1 = $('.brs1').val();
            if ($.isNumeric(inputbrs1)) {
                totalBrs1 += parseFloat(inputbrs1);
            }
        });
        $('#jmlbrs1').val(totalBrs1);
    })
    // $(document).ready(function() {
    //     var tabel = document.getElementById("dataset"), sumVal = 0;

    //     for(var i = 1; i < tabel.rows.lenght; i++)
    //     {
    //         sumVal = sumVal + parseFloat(tabel.rows[i].cells[1].innerHTML);
    //     }
    //     document.getElementById("jml-brs1").innerHTML = sumVal;
    // });

</script>