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
                            <td><input type="text" id="kol1" class="brs1-a" readonly style="width: 50px;" value="<?= $matriks['kimia_a'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs2-a" readonly style="width: 50px;" value="<?= $matriks['kimia_b'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs3-a" readonly style="width: 50px;" value="<?= $matriks['kimia_c'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs4-a" readonly style="width: 50px;" value="<?= $matriks['kimia_d'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs5-a" readonly style="width: 50px;" value="<?= $matriks['kimia_e'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs6-a" readonly style="width: 50px;" value="<?= $matriks['kimia_f'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs7-a" readonly style="width: 50px;" value="<?= $matriks['kimia_g'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs8-a" readonly style="width: 50px;" value="<?= $matriks['kimia_h'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs9-a" readonly style="width: 50px;" value="<?= $matriks['kimia_i'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs10-a" readonly style="width: 50px;" value="<?= $matriks['kimia_j'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs11-a" readonly style="width: 50px;" value="<?= $matriks['kimia_k'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs12-a" readonly style="width: 50px;" value="<?= $matriks['kimia_l'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs13-a" readonly style="width: 50px;" value="<?= $matriks['kimia_m'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs14-a" readonly style="width: 50px;" value="<?= $matriks['kimia_n'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs15-a" readonly style="width: 50px;" value="<?= $matriks['kimia_o'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs16-a" readonly style="width: 50px;" value="<?= $matriks['kimia_p'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs17-a" readonly style="width: 50px;" value="<?= $matriks['kimia_q'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs18-a" readonly style="width: 50px;" value="<?= $matriks['kimia_r'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs19-a" readonly style="width: 50px;" value="<?= $matriks['kimia_s'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs20-a" readonly style="width: 50px;" value="<?= $matriks['kimia_t'] ?>"></td>
                            <td><input type="text" id="kol1" class="brs21-a" readonly style="width: 50px;" value="<?= $matriks['kimia_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Biologi</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs1-b" value="<?= $matriks['biologi_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs2-b" value="<?= $matriks['biologi_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs3-b" value="<?= $matriks['biologi_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs4-b" value="<?= $matriks['biologi_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs5-b" value="<?= $matriks['biologi_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs6-b" value="<?= $matriks['biologi_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs7-b" value="<?= $matriks['biologi_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs8-b" value="<?= $matriks['biologi_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs9-b" value="<?= $matriks['biologi_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs10-b" value="<?= $matriks['biologi_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs11-b" value="<?= $matriks['biologi_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs12-b" value="<?= $matriks['biologi_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs13-b" value="<?= $matriks['biologi_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs14-b" value="<?= $matriks['biologi_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs15-b" value="<?= $matriks['biologi_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs16-b" value="<?= $matriks['biologi_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs17-b" value="<?= $matriks['biologi_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs18-b" value="<?= $matriks['biologi_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs19-b" value="<?= $matriks['biologi_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs20-b" value="<?= $matriks['biologi_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol2" class="brs21-b" value="<?= $matriks['biologi_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Fisika</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs1-c" value="<?= $matriks['fisika_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs2-c" value="<?= $matriks['fisika_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs3-c" value="<?= $matriks['fisika_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs4-c" value="<?= $matriks['fisika_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs5-c" value="<?= $matriks['fisika_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs6-c" value="<?= $matriks['fisika_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs7-c" value="<?= $matriks['fisika_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs8-c" value="<?= $matriks['fisika_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs9-c" value="<?= $matriks['fisika_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs10-c" value="<?= $matriks['fisika_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs11-c" value="<?= $matriks['fisika_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs12-c" value="<?= $matriks['fisika_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs13-c" value="<?= $matriks['fisika_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs14-c" value="<?= $matriks['fisika_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs15-c" value="<?= $matriks['fisika_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs16-c" value="<?= $matriks['fisika_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs17-c" value="<?= $matriks['fisika_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs18-c" value="<?= $matriks['fisika_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs19-c" value="<?= $matriks['fisika_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs20-c" value="<?= $matriks['fisika_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol3" class="brs21-c" value="<?= $matriks['fisika_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs1-d" value="<?= $matriks['matematika_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs2-d" value="<?= $matriks['matematika_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs3-d" value="<?= $matriks['matematika_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs4-d" value="<?= $matriks['matematika_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs5-d" value="<?= $matriks['matematika_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs6-d" value="<?= $matriks['matematika_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs7-d" value="<?= $matriks['matematika_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs8-d" value="<?= $matriks['matematika_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs9-d" value="<?= $matriks['matematika_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs10-d" value="<?= $matriks['matematika_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs11-d" value="<?= $matriks['matematika_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs12-d" value="<?= $matriks['matematika_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs13-d" value="<?= $matriks['matematika_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs14-d" value="<?= $matriks['matematika_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs15-d" value="<?= $matriks['matematika_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs16-d" value="<?= $matriks['matematika_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs17-d" value="<?= $matriks['matematika_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs18-d" value="<?= $matriks['matematika_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs19-d" value="<?= $matriks['matematika_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs20-d" value="<?= $matriks['matematika_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol4" class="brs21-d" value="<?= $matriks['matematika_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Bhs Inggris</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs1-e" value="<?= $matriks['inggris_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs2-e" value="<?= $matriks['inggris_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs3-e" value="<?= $matriks['inggris_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs4-e" value="<?= $matriks['inggris_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs5-e" value="<?= $matriks['inggris_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs6-e" value="<?= $matriks['inggris_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs7-e" value="<?= $matriks['inggris_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs8-e" value="<?= $matriks['inggris_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs9-e" value="<?= $matriks['inggris_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs10-e" value="<?= $matriks['inggris_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs11-e" value="<?= $matriks['inggris_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs12-e" value="<?= $matriks['inggris_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs13-e" value="<?= $matriks['inggris_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs14-e" value="<?= $matriks['inggris_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs15-e" value="<?= $matriks['inggris_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs16-e" value="<?= $matriks['inggris_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs17-e" value="<?= $matriks['inggris_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs18-e" value="<?= $matriks['inggris_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs19-e" value="<?= $matriks['inggris_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs20-e" value="<?= $matriks['inggris_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol5" class="brs21-e" value="<?= $matriks['inggris_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Bhs Indonesia</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs1-f" value="<?= $matriks['indo_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs2-f" value="<?= $matriks['indo_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs3-f" value="<?= $matriks['indo_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs4-f" value="<?= $matriks['indo_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs5-f" value="<?= $matriks['indo_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs6-f" value="<?= $matriks['indo_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs7-f" value="<?= $matriks['indo_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs8-f" value="<?= $matriks['indo_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs9-f" value="<?= $matriks['indo_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs10-f" value="<?= $matriks['indo_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs11-f" value="<?= $matriks['indo_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs12-f" value="<?= $matriks['indo_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs13-f" value="<?= $matriks['indo_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs14-f" value="<?= $matriks['indo_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs15-f" value="<?= $matriks['indo_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs16-f" value="<?= $matriks['indo_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs17-f" value="<?= $matriks['indo_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs18-f" value="<?= $matriks['indo_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs19-f" value="<?= $matriks['indo_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs20-f" value="<?= $matriks['indo_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol6" class="brs21-f" value="<?= $matriks['indo_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Realistis</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs1-g" value="<?= $matriks['realistis_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs2-g" value="<?= $matriks['realistis_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs3-g" value="<?= $matriks['realistis_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs4-g" value="<?= $matriks['realistis_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs5-g" value="<?= $matriks['realistis_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs6-g" value="<?= $matriks['realistis_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs7-g" value="<?= $matriks['realistis_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs8-g" value="<?= $matriks['realistis_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs9-g" value="<?= $matriks['realistis_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs10-g" value="<?= $matriks['realistis_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs11-g" value="<?= $matriks['realistis_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs12-g" value="<?= $matriks['realistis_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs13-g" value="<?= $matriks['realistis_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs14-g" value="<?= $matriks['realistis_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs15-g" value="<?= $matriks['realistis_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs16-g" value="<?= $matriks['realistis_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs17-g" value="<?= $matriks['realistis_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs18-g" value="<?= $matriks['realistis_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs19-g" value="<?= $matriks['realistis_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs20-g" value="<?= $matriks['realistis_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol7" class="brs21-g" value="<?= $matriks['realistis_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Intelektual</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs1-h" value="<?= $matriks['intelektual_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs2-h" value="<?= $matriks['intelektual_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs3-h" value="<?= $matriks['intelektual_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs4-h" value="<?= $matriks['intelektual_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs5-h" value="<?= $matriks['intelektual_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs6-h" value="<?= $matriks['intelektual_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs7-h" value="<?= $matriks['intelektual_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs8-h" value="<?= $matriks['intelektual_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs9-h" value="<?= $matriks['intelektual_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs10-h" value="<?= $matriks['intelektual_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs11-h" value="<?= $matriks['intelektual_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs12-h" value="<?= $matriks['intelektual_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs13-h" value="<?= $matriks['intelektual_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs14-h" value="<?= $matriks['intelektual_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs15-h" value="<?= $matriks['intelektual_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs16-h" value="<?= $matriks['intelektual_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs17-h" value="<?= $matriks['intelektual_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs18-h" value="<?= $matriks['intelektual_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs19-h" value="<?= $matriks['intelektual_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs20-h" value="<?= $matriks['intelektual_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol8" class="brs21-h" value="<?= $matriks['intelektual_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Artistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs1-i" value="<?= $matriks['artistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs2-i" value="<?= $matriks['artistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs3-i" value="<?= $matriks['artistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs4-i" value="<?= $matriks['artistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs5-i" value="<?= $matriks['artistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs6-i" value="<?= $matriks['artistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs7-i" value="<?= $matriks['artistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs8-i" value="<?= $matriks['artistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs9-i" value="<?= $matriks['artistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs10-i" value="<?= $matriks['artistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs11-i" value="<?= $matriks['artistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs12-i" value="<?= $matriks['artistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs13-i" value="<?= $matriks['artistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs14-i" value="<?= $matriks['artistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs15-i" value="<?= $matriks['artistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs16-i" value="<?= $matriks['artistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs17-i" value="<?= $matriks['artistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs18-i" value="<?= $matriks['artistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs19-i" value="<?= $matriks['artistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs20-i" value="<?= $matriks['artistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol9" class="brs21-i" value="<?= $matriks['artistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Sosial</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs1-j" value="<?= $matriks['sosial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs2-j" value="<?= $matriks['sosial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs3-j" value="<?= $matriks['sosial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs4-j" value="<?= $matriks['sosial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs5-j" value="<?= $matriks['sosial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs6-j" value="<?= $matriks['sosial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs7-j" value="<?= $matriks['sosial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs8-j" value="<?= $matriks['sosial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs9-j" value="<?= $matriks['sosial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs10-j" value="<?= $matriks['sosial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs11-j" value="<?= $matriks['sosial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs12-j" value="<?= $matriks['sosial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs13-j" value="<?= $matriks['sosial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs14-j" value="<?= $matriks['sosial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs15-j" value="<?= $matriks['sosial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs16-j" value="<?= $matriks['sosial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs17-j" value="<?= $matriks['sosial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs18-j" value="<?= $matriks['sosial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs19-j" value="<?= $matriks['sosial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs20-j" value="<?= $matriks['sosial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol10" class="brs21-j" value="<?= $matriks['sosial_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Enterprise</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs1-k" value="<?= $matriks['enterprise_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs2-k" value="<?= $matriks['enterprise_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs3-k" value="<?= $matriks['enterprise_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs4-k" value="<?= $matriks['enterprise_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs5-k" value="<?= $matriks['enterprise_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs6-k" value="<?= $matriks['enterprise_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs7-k" value="<?= $matriks['enterprise_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs8-k" value="<?= $matriks['enterprise_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs9-k" value="<?= $matriks['enterprise_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs10-k" value="<?= $matriks['enterprise_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs11-k" value="<?= $matriks['enterprise_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs12-k" value="<?= $matriks['enterprise_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs13-k" value="<?= $matriks['enterprise_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs14-k" value="<?= $matriks['enterprise_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs15-k" value="<?= $matriks['enterprise_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs16-k" value="<?= $matriks['enterprise_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs17-k" value="<?= $matriks['enterprise_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs18-k" value="<?= $matriks['enterprise_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs19-k" value="<?= $matriks['enterprise_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs20-k" value="<?= $matriks['enterprise_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol11" class="brs21-k" value="<?= $matriks['enterprise_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Konvensional</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs1-l" value="<?= $matriks['konvensional_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs2-l" value="<?= $matriks['konvensional_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs3-l" value="<?= $matriks['konvensional_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs4-l" value="<?= $matriks['konvensional_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs5-l" value="<?= $matriks['konvensional_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs6-l" value="<?= $matriks['konvensional_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs7-l" value="<?= $matriks['konvensional_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs8-l" value="<?= $matriks['konvensional_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs9-l" value="<?= $matriks['konvensional_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs10-l" value="<?= $matriks['konvensional_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs11-l" value="<?= $matriks['konvensional_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs12-l" value="<?= $matriks['konvensional_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs13-l" value="<?= $matriks['konvensional_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs14-l" value="<?= $matriks['konvensional_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs15-l" value="<?= $matriks['konvensional_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs16-l" value="<?= $matriks['konvensional_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs17-l" value="<?= $matriks['konvensional_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs18-l" value="<?= $matriks['konvensional_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs19-l" value="<?= $matriks['konvensional_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs20-l" value="<?= $matriks['konvensional_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol12" class="brs21-l" value="<?= $matriks['konvensional_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Linguistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs1-m" value="<?= $matriks['linguistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs2-m" value="<?= $matriks['linguistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs3-m" value="<?= $matriks['linguistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs4-m" value="<?= $matriks['linguistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs5-m" value="<?= $matriks['linguistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs6-m" value="<?= $matriks['linguistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs7-m" value="<?= $matriks['linguistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs8-m" value="<?= $matriks['linguistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs9-m" value="<?= $matriks['linguistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs10-m" value="<?= $matriks['linguistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs11-m" value="<?= $matriks['linguistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs12-m" value="<?= $matriks['linguistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs13-m" value="<?= $matriks['linguistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs14-m" value="<?= $matriks['linguistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs15-m" value="<?= $matriks['linguistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs16-m" value="<?= $matriks['linguistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs17-m" value="<?= $matriks['linguistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs18-m" value="<?= $matriks['linguistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs19-m" value="<?= $matriks['linguistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs20-m" value="<?= $matriks['linguistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol13" class="brs21-m" value="<?= $matriks['linguistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Matematikal</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs1-n" value="<?= $matriks['matematikal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs2-n" value="<?= $matriks['matematikal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs3-n" value="<?= $matriks['matematikal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs4-n" value="<?= $matriks['matematikal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs5-n" value="<?= $matriks['matematikal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs6-n" value="<?= $matriks['matematikal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs7-n" value="<?= $matriks['matematikal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs8-n" value="<?= $matriks['matematikal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs9-n" value="<?= $matriks['matematikal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs10-n" value="<?= $matriks['matematikal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs11-n" value="<?= $matriks['matematikal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs12-n" value="<?= $matriks['matematikal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs13-n" value="<?= $matriks['matematikal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs14-n" value="<?= $matriks['matematikal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs15-n" value="<?= $matriks['matematikal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs16-n" value="<?= $matriks['matematikal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs17-n" value="<?= $matriks['matematikal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs18-n" value="<?= $matriks['matematikal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs19-n" value="<?= $matriks['matematikal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs20-n" value="<?= $matriks['matematikal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol14" class="brs21-n" value="<?= $matriks['matematikal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Musikal</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs1-o" value="<?= $matriks['musikal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs2-o" value="<?= $matriks['musikal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs3-o" value="<?= $matriks['musikal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs4-o" value="<?= $matriks['musikal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs5-o" value="<?= $matriks['musikal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs6-o" value="<?= $matriks['musikal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs7-o" value="<?= $matriks['musikal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs8-o" value="<?= $matriks['musikal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs9-o" value="<?= $matriks['musikal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs10-o" value="<?= $matriks['musikal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs11-o" value="<?= $matriks['musikal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs12-o" value="<?= $matriks['musikal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs13-o" value="<?= $matriks['musikal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs14-o" value="<?= $matriks['musikal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs15-o" value="<?= $matriks['musikal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs16-o" value="<?= $matriks['musikal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs17-o" value="<?= $matriks['musikal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs18-o" value="<?= $matriks['musikal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs19-o" value="<?= $matriks['musikal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs20-o" value="<?= $matriks['musikal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol15" class="brs21-o" value="<?= $matriks['musikal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Kinestik</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs1-p" value="<?= $matriks['kinestik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs2-p" value="<?= $matriks['kinestik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs3-p" value="<?= $matriks['kinestik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs4-p" value="<?= $matriks['kinestik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs5-p" value="<?= $matriks['kinestik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs6-p" value="<?= $matriks['kinestik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs7-p" value="<?= $matriks['kinestik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs8-p" value="<?= $matriks['kinestik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs9-p" value="<?= $matriks['kinestik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs10-p" value="<?= $matriks['kinestik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs11-p" value="<?= $matriks['kinestik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs12-p" value="<?= $matriks['kinestik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs13-p" value="<?= $matriks['kinestik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs14-p" value="<?= $matriks['kinestik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs15-p" value="<?= $matriks['kinestik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs16-p" value="<?= $matriks['kinestik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs17-p" value="<?= $matriks['kinestik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs18-p" value="<?= $matriks['kinestik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs19-p" value="<?= $matriks['kinestik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs20-p" value="<?= $matriks['kinestik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol16" class="brs21-p" value="<?= $matriks['kinestik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Spartial</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs1-q" value="<?= $matriks['spartial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs2-q" value="<?= $matriks['spartial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs3-q" value="<?= $matriks['spartial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs4-q" value="<?= $matriks['spartial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs5-q" value="<?= $matriks['spartial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs6-q" value="<?= $matriks['spartial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs7-q" value="<?= $matriks['spartial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs8-q" value="<?= $matriks['spartial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs9-q" value="<?= $matriks['spartial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs10-q" value="<?= $matriks['spartial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs11-q" value="<?= $matriks['spartial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs12-q" value="<?= $matriks['spartial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs13-q" value="<?= $matriks['spartial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs14-q" value="<?= $matriks['spartial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs15-q" value="<?= $matriks['spartial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs16-q" value="<?= $matriks['spartial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs17-q" value="<?= $matriks['spartial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs18-q" value="<?= $matriks['spartial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs19-q" value="<?= $matriks['spartial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs20-q" value="<?= $matriks['spartial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol17" class="brs21-q" value="<?= $matriks['spartial_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Intrapersonal</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs1-r" value="<?= $matriks['intrapersonal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs2-r" value="<?= $matriks['intrapersonal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs3-r" value="<?= $matriks['intrapersonal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs4-r" value="<?= $matriks['intrapersonal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs5-r" value="<?= $matriks['intrapersonal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs6-r" value="<?= $matriks['intrapersonal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs7-r" value="<?= $matriks['intrapersonal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs8-r" value="<?= $matriks['intrapersonal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs9-r" value="<?= $matriks['intrapersonal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs10-r" value="<?= $matriks['intrapersonal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs11-r" value="<?= $matriks['intrapersonal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs12-r" value="<?= $matriks['intrapersonal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs13-r" value="<?= $matriks['intrapersonal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs14-r" value="<?= $matriks['intrapersonal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs15-r" value="<?= $matriks['intrapersonal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs16-r" value="<?= $matriks['intrapersonal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs17-r" value="<?= $matriks['intrapersonal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs18-r" value="<?= $matriks['intrapersonal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs19-r" value="<?= $matriks['intrapersonal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs20-r" value="<?= $matriks['intrapersonal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol18" class="brs21-r" value="<?= $matriks['intrapersonal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Interpersonal</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs1-s" value="<?= $matriks['interpersonal_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs2-s" value="<?= $matriks['interpersonal_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs3-s" value="<?= $matriks['interpersonal_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs4-s" value="<?= $matriks['interpersonal_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs5-s" value="<?= $matriks['interpersonal_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs6-s" value="<?= $matriks['interpersonal_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs7-s" value="<?= $matriks['interpersonal_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs8-s" value="<?= $matriks['interpersonal_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs9-s" value="<?= $matriks['interpersonal_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs10-s" value="<?= $matriks['interpersonal_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs11-s" value="<?= $matriks['interpersonal_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs12-s" value="<?= $matriks['interpersonal_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs13-s" value="<?= $matriks['interpersonal_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs14-s" value="<?= $matriks['interpersonal_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs15-s" value="<?= $matriks['interpersonal_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs16-s" value="<?= $matriks['interpersonal_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs17-s" value="<?= $matriks['interpersonal_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs18-s" value="<?= $matriks['interpersonal_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs19-s" value="<?= $matriks['interpersonal_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs20-s" value="<?= $matriks['interpersonal_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol19" class="brs21-s" value="<?= $matriks['interpersonal_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Naturalistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs1-t" value="<?= $matriks['naturalistik_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs2-t" value="<?= $matriks['naturalistik_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs3-t" value="<?= $matriks['naturalistik_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs4-t" value="<?= $matriks['naturalistik_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs5-t" value="<?= $matriks['naturalistik_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs6-t" value="<?= $matriks['naturalistik_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs7-t" value="<?= $matriks['naturalistik_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs8-t" value="<?= $matriks['naturalistik_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs9-t" value="<?= $matriks['naturalistik_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs10-t" value="<?= $matriks['naturalistik_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs11-t" value="<?= $matriks['naturalistik_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs12-t" value="<?= $matriks['naturalistik_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs13-t" value="<?= $matriks['naturalistik_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs14-t" value="<?= $matriks['naturalistik_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs15-t" value="<?= $matriks['naturalistik_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs16-t" value="<?= $matriks['naturalistik_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs17-t" value="<?= $matriks['naturalistik_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs18-t" value="<?= $matriks['naturalistik_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs19-t" value="<?= $matriks['naturalistik_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs20-t" value="<?= $matriks['naturalistik_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol20" class="brs21-t" value="<?= $matriks['naturalistik_u'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Eksistensial</td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs1-u" value="<?= $matriks['eksistensial_a'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs2-u" value="<?= $matriks['eksistensial_b'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs3-u" value="<?= $matriks['eksistensial_c'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs4-u" value="<?= $matriks['eksistensial_d'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs5-u" value="<?= $matriks['eksistensial_e'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs6-u" value="<?= $matriks['eksistensial_f'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs7-u" value="<?= $matriks['eksistensial_g'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs8-u" value="<?= $matriks['eksistensial_h'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs9-u" value="<?= $matriks['eksistensial_i'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs10-u" value="<?= $matriks['eksistensial_j'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs11-u" value="<?= $matriks['eksistensial_k'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs12-u" value="<?= $matriks['eksistensial_l'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs13-u" value="<?= $matriks['eksistensial_m'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs14-u" value="<?= $matriks['eksistensial_n'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs15-u" value="<?= $matriks['eksistensial_o'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs16-u" value="<?= $matriks['eksistensial_p'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs17-u" value="<?= $matriks['eksistensial_q'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs18-u" value="<?= $matriks['eksistensial_r'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs19-u" value="<?= $matriks['eksistensial_s'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs20-u" value="<?= $matriks['eksistensial_t'] ?>"></td>
                            <td><input readonly style="width: 50px;" type="text" id="kol21" class="brs21-u" value="<?= $matriks['eksistensial_u'] ?>"></td>
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
                            <td><input readonly style="width: 60px;" type="text" id="hasil1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="hasil21"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content-header">
        <h1 class="text-center">Normalisasi</h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="TABLE_2" class="table table-bordered table-striped">
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
                            <td>Kimia</td>
                            <td><input type="text" id="baris-a1" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a2" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a3" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a4" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a5" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a6" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a7" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a8" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a9" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a10" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a11" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a12" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a13" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a14" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a15" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a16" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a17" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a18" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a19" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a20" readonly style="width: 50px;"></td>
                            <td><input type="text" id="baris-a21" readonly style="width: 50px;"></td>
                        </tr>
                        <tr>
                            <td>Biologi</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-b21"></td>
                        </tr>
                        <tr>
                            <td>Fisika</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-c21"></td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-d21"></td>
                        </tr>
                        <tr>
                            <td>Bhs Inggris</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-e21"></td>
                        </tr>
                        <tr>
                            <td>Bhs Indonesia</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-f21"></td>
                        </tr>
                        <tr>
                            <td>Realistis</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-g21"></td>
                        </tr>
                        <tr>
                            <td>Intelektual</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-h21"></td>
                        </tr>
                        <tr>
                            <td>Artistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-i21"></td>
                        </tr>
                        <tr>
                            <td>Sosial</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-j21"></td>
                        </tr>
                        <tr>
                            <td>Enterprise</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-k21"></td>
                        </tr>
                        <tr>
                            <td>Konvensional</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-l21"></td>
                        </tr>
                        <tr>
                            <td>Linguistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-m21"></td>
                        </tr>
                        <tr>
                            <td>Matematikal</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-n21"></td>
                        </tr>
                        <tr>
                            <td>Musikal</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-o21"></td>
                        </tr>
                        <tr>
                            <td>Kinestik</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-p21"></td>
                        </tr>
                        <tr>
                            <td>Spartial</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-q21"></td>
                        </tr>
                        <tr>
                            <td>Intrapersonal</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-r21"></td>
                        </tr>
                        <tr>
                            <td>Interpersonal</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-s21"></td>
                        </tr>
                        <tr>
                            <td>Naturalistik</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-t21"></td>
                        </tr>
                        <tr>
                            <td>Eksistensial</td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u1"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u2"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u3"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u4"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u5"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u6"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u7"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u8"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u9"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u10"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u11"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u12"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u13"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u14"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u15"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u16"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u17"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u18"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u19"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u20"></td>
                            <td><input readonly style="width: 50px;" type="text" id="baris-u21"></td>
                        </tr>
                    </tbody>
                </table>
                <!-- <input type="text" id="hasilhitung"> -->
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <form action="<?= base_url('Admin/perhitungan_eigen') ?>" method="post">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
                            <th>Eigen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kimia<input type="hidden" name="id_nilai" readonly value="<?= $matriks['id_nilai'] ?>"> <input type="hidden" name="id_siswa" readonly value="<?= $matriks['id_siswa'] ?>"></td>
                            <td><input type="text" id="eigen1" name="eigen1" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Biologi</td>
                            <td><input type="text" id="eigen2" name="eigen2" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Fisika</td>
                            <td><input type="text" id="eigen3" name="eigen3" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Matematika</td>
                            <td><input type="text" id="eigen4" name="eigen4" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Bhs Inggris</td>
                            <td><input type="text" id="eigen5" name="eigen5" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Bhs Indonesia</td>
                            <td><input type="text" id="eigen6" name="eigen6" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Realistis</td>
                            <td><input type="text" id="eigen7" name="eigen7" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Intelektual</td>
                            <td><input type="text" id="eigen8" name="eigen8" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Artistik</td>
                            <td><input type="text" id="eigen9" name="eigen9" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Sosial</td>
                            <td><input type="text" id="eigen10" name="eigen10" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Enterprise</td>
                            <td><input type="text" id="eigen11" name="eigen11" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Konvensional</td>
                            <td><input type="text" id="eigen12" name="eigen12" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Linguistik</td>
                            <td><input type="text" id="eigen13" name="eigen13" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Matematikal</td>
                            <td><input type="text" id="eigen14" name="eigen14" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Musikal</td>
                            <td><input type="text" id="eigen15" name="eigen15" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Kinestik</td>
                            <td><input type="text" id="eigen16" name="eigen16" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Spartial</td>
                            <td><input type="text" id="eigen17" name="eigen17" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Intrapersonal</td>
                            <td><input type="text" id="eigen18" name="eigen18" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Interpersonal</td>
                            <td><input type="text" id="eigen19" name="eigen19" style="width: 150px;" readonly></td>
                        </tr>
                        <tr>
                            <td>Natural</td>
                            <td><input type="text" id="eigen20" name="eigen20" style="width: 150px;" readonly></td>
                        </tr><tr>
                            <td>Eksistensial</td>
                            <td><input type="text" id="eigen21" name="eigen21" style="width: 150px;" readonly></td>
                        </tr>
                        </tr><tr>
                            <td>total</td>
                            <td><input type="text" id="jumlaheigen" style="width: 150px;" readonly></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary mt-4">Hitung Eigen</button>
            </form>
            </div>
        </div>
    </section>
</div>
<script>
    // $(document).ready(function() {
    //     $("#baris-a1, #baris-a2").each(function() {
    //         var angka_awl = $("#baris-a1").val();
    //         var angka_akh = $("#baris-a2").val();

    //         var total = (parseFloat(angka_akh) + parseFloat(angka_awl));
    //         var hasil_htg = total.toFixed(9);
    //         $('#hasilhitung').val(angka_awl);
    //         //console.log(Number(total));
    //     });
    // });
</script>
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

    $(document).ready(function() {
        $(".brs1-a, .brs1-b, .brs1-c, .brs1-d, .brs1-e, .brs1-f, .brs1-g, .brs1-h, .brs1-i, .brs1-j, .brs1-k, .brs1-l, .brs1-m, .brs1-n, .brs1-o, .brs1-q, .brs1-r, .brs1-s, .brs1-t, .brs1-u").each(function() {
            var b1_a = $(".brs1-a").val();
            var b1_b = $(".brs1-b").val();
            var b1_c = $(".brs1-c").val();
            var b1_d = $(".brs1-d").val();
            var b1_e = $(".brs1-e").val();
            var b1_f = $(".brs1-f").val();
            var b1_g = $(".brs1-g").val();
            var b1_h = $(".brs1-h").val();
            var b1_i = $(".brs1-i").val();
            var b1_j = $(".brs1-j").val();
            var b1_k = $(".brs1-k").val();
            var b1_l = $(".brs1-l").val();
            var b1_m = $(".brs1-m").val();
            var b1_n = $(".brs1-n").val();
            var b1_o = $(".brs1-o").val();
            var b1_p = $(".brs1-p").val();
            var b1_q = $(".brs1-q").val();
            var b1_r = $(".brs1-r").val();
            var b1_s = $(".brs1-s").val();
            var b1_t = $(".brs1-t").val();
            var b1_u = $(".brs1-u").val();

            var total1 = parseFloat(b1_a) + parseFloat(b1_b) + parseFloat(b1_c) + parseFloat(b1_d) + parseFloat(b1_e) + parseFloat(b1_f) + parseFloat(b1_g) + parseFloat(b1_h) + parseFloat(b1_i) + parseFloat(b1_j) + parseFloat(b1_k) + parseFloat(b1_l) + parseFloat(b1_m) + parseFloat(b1_n) + parseFloat(b1_o) + parseFloat(b1_p) + parseFloat(b1_q) + parseFloat(b1_r) + parseFloat(b1_s) + parseFloat(b1_t) + parseFloat(b1_u);
            var hasil1 = total1.toFixed(2)
            $("#hasil1").val(hasil1);

            var hasil_brs1 = hasil1;

            var total_ba1 = (parseFloat(b1_a) / parseFloat(hasil_brs1));
            var hasil_ba1 = total_ba1.toFixed(3);
            $('#baris-a1').val(hasil_ba1);
            var total_ba2 = (parseFloat(b1_b) / parseFloat(hasil_brs1));
            var hasil_ba2 = total_ba2.toFixed(3);
            $('#baris-b1').val(hasil_ba2);
            var total_ba3 = (parseFloat(b1_c) / parseFloat(hasil_brs1));
            var hasil_ba3 = total_ba3.toFixed(4);
            $('#baris-c1').val(hasil_ba3);
            var total_ba4 = (parseFloat(b1_d) / parseFloat(hasil_brs1));
            var hasil_ba4 = total_ba4.toFixed(4);
            $('#baris-d1').val(hasil_ba4);
            var total_ba5 = (parseFloat(b1_e) / parseFloat(hasil_brs1));
            var hasil_ba5 = total_ba5.toFixed(3);
            $('#baris-e1').val(hasil_ba5);
            var total_ba6 = (parseFloat(b1_f) / parseFloat(hasil_brs1));
            var hasil_ba6 = total_ba6.toFixed(3);
            $('#baris-f1').val(hasil_ba6);
            var total_ba7 = (parseFloat(b1_g) / parseFloat(hasil_brs1));
            var hasil_ba7 = total_ba7.toFixed(3);
            $('#baris-g1').val(hasil_ba7);
            var total_ba8 = (parseFloat(b1_h) / parseFloat(hasil_brs1));
            var hasil_ba8 = total_ba8.toFixed(3);
            $('#baris-h1').val(hasil_ba8);
            var total_ba9 = (parseFloat(b1_i) / parseFloat(hasil_brs1));
            var hasil_ba9 = total_ba9.toFixed(3);
            $('#baris-i1').val(hasil_ba9);
            var total_ba10 = (parseFloat(b1_j) / parseFloat(hasil_brs1));
            var hasil_ba10 = total_ba10.toFixed(3);
            $('#baris-j1').val(hasil_ba10);
            var total_ba11 = (parseFloat(b1_k) / parseFloat(hasil_brs1));
            var hasil_ba11 = total_ba11.toFixed(3);
            $('#baris-k1').val(hasil_ba11);
            var total_ba12 = (parseFloat(b1_l) / parseFloat(hasil_brs1));
            var hasil_ba12 = total_ba12.toFixed(3);
            $('#baris-l1').val(hasil_ba12);
            var total_ba13 = (parseFloat(b1_m) / parseFloat(hasil_brs1));
            var hasil_ba13 = total_ba13.toFixed(3);
            $('#baris-m1').val(hasil_ba13);
            var total_ba14 = (parseFloat(b1_n) / parseFloat(hasil_brs1));
            var hasil_ba14 = total_ba14.toFixed(3);
            $('#baris-n1').val(hasil_ba14);
            var total_ba15 = (parseFloat(b1_o) / parseFloat(hasil_brs1));
            var hasil_ba15 = total_ba15.toFixed(4);
            $('#baris-o1').val(hasil_ba15);
            var total_ba16 = (parseFloat(b1_p) / parseFloat(hasil_brs1));
            var hasil_ba16 = total_ba16.toFixed(3);
            $('#baris-p1').val(hasil_ba16);
            var total_ba17 = (parseFloat(b1_q) / parseFloat(hasil_brs1));
            var hasil_ba17 = total_ba17.toFixed(3);
            $('#baris-q1').val(hasil_ba17);
            var total_ba18 = (parseFloat(b1_r) / parseFloat(hasil_brs1));
            var hasil_ba18 = total_ba18.toFixed(3);
            $('#baris-r1').val(hasil_ba18);
            var total_ba19 = (parseFloat(b1_s) / parseFloat(hasil_brs1));
            var hasil_ba19 = total_ba19.toFixed(3);
            $('#baris-s1').val(hasil_ba19);
            var total_ba20 = (parseFloat(b1_t) / parseFloat(hasil_brs1));
            var hasil_ba20 = total_ba20.toFixed(3);
            $('#baris-t1').val(hasil_ba20);
            var total_ba21 = (parseFloat(b1_u) / parseFloat(hasil_brs1));
            var hasil_ba21 = total_ba21.toFixed(4);
            $('#baris-u1').val(hasil_ba21);


            var b2_a = $(".brs2-a").val();
            var b2_b = $(".brs2-b").val();
            var b2_c = $(".brs2-c").val();
            var b2_d = $(".brs2-d").val();
            var b2_e = $(".brs2-e").val();
            var b2_f = $(".brs2-f").val();
            var b2_g = $(".brs2-g").val();
            var b2_h = $(".brs2-h").val();
            var b2_i = $(".brs2-i").val();
            var b2_j = $(".brs2-j").val();
            var b2_k = $(".brs2-k").val();
            var b2_l = $(".brs2-l").val();
            var b2_m = $(".brs2-m").val();
            var b2_n = $(".brs2-n").val();
            var b2_o = $(".brs2-o").val();
            var b2_p = $(".brs2-p").val();
            var b2_q = $(".brs2-q").val();
            var b2_r = $(".brs2-r").val();
            var b2_s = $(".brs2-s").val();
            var b2_t = $(".brs2-t").val();
            var b2_u = $(".brs2-u").val();

            var total2 = (parseFloat(b2_a) + parseFloat(b2_b) + parseFloat(b2_c) + parseFloat(b2_d) + parseFloat(b2_e) + parseFloat(b2_f) + parseFloat(b2_g) + parseFloat(b2_h) + parseFloat(b2_i) + parseFloat(b2_j) + parseFloat(b2_k) + parseFloat(b2_l) + parseFloat(b2_m) + parseFloat(b2_n) + parseFloat(b2_o) + parseFloat(b2_p) + parseFloat(b2_q) + parseFloat(b2_r) + parseFloat(b2_s) + parseFloat(b2_t) + parseFloat(b2_u));
            var hasil2 = total2.toFixed(2);
            $("#hasil2").val(hasil2);

            var hasil_brs2 = hasil2;

            var total_bb1 = (parseFloat(b2_a) / parseFloat(hasil_brs2));
            var hasil_bb1 = total_bb1.toFixed(9);
            $('#baris-a2').val(hasil_bb1);
            var total_bb2 = (parseFloat(b2_b) / parseFloat(hasil_brs2));
            var hasil_bb2 = total_bb2.toFixed(9);
            $('#baris-b2').val(hasil_bb2);
            var total_bb3 = (parseFloat(b2_c) / parseFloat(hasil_brs2));
            var hasil_bb3 = total_bb3.toFixed(4);
            $('#baris-c2').val(hasil_bb3);
            var total_bb4 = (parseFloat(b2_d) / parseFloat(hasil_brs2));
            var hasil_bb4 = total_bb4.toFixed(4);
            $('#baris-d2').val(hasil_bb4);
            var total_bb5 = (parseFloat(b2_e) / parseFloat(hasil_brs2));
            var hasil_bb5 = total_bb5.toFixed(9);
            $('#baris-e2').val(hasil_bb5);
            var total_bb6 = (parseFloat(b2_f) / parseFloat(hasil_brs2));
            var hasil_bb6 = total_bb6.toFixed(9);
            $('#baris-f2').val(hasil_bb6);
            var total_bb7 = (parseFloat(b2_g) / parseFloat(hasil_brs2));
            var hasil_bb7 = total_bb7.toFixed(9);
            $('#baris-g2').val(hasil_bb7);
            var total_bb8 = (parseFloat(b2_h) / parseFloat(hasil_brs2));
            var hasil_bb8 = total_bb8.toFixed(9);
            $('#baris-h2').val(hasil_bb8);
            var total_bb9 = (parseFloat(b2_i) / parseFloat(hasil_brs2));
            var hasil_bb9 = total_bb9.toFixed(9);
            $('#baris-i2').val(hasil_bb9);
            var total_bb10 = (parseFloat(b2_j) / parseFloat(hasil_brs2));
            var hasil_bb10 = total_bb10.toFixed(9);
            $('#baris-j2').val(hasil_bb10);
            var total_bb11 = (parseFloat(b2_k) / parseFloat(hasil_brs2));
            var hasil_bb11 = total_bb11.toFixed(9);
            $('#baris-k2').val(hasil_bb11);
            var total_bb12 = (parseFloat(b2_l) / parseFloat(hasil_brs2));
            var hasil_bb12 = total_bb12.toFixed(9);
            $('#baris-l2').val(hasil_bb12);
            var total_bb13 = (parseFloat(b2_m) / parseFloat(hasil_brs2));
            var hasil_bb13 = total_bb13.toFixed(9);
            $('#baris-m2').val(hasil_bb13);
            var total_bb14 = (parseFloat(b2_n) / parseFloat(hasil_brs2));
            var hasil_bb14 = total_bb14.toFixed(9);
            $('#baris-n2').val(hasil_bb14);
            var total_bb15 = (parseFloat(b2_o) / parseFloat(hasil_brs2));
            var hasil_bb15 = total_bb15.toFixed(9);
            $('#baris-o2').val(hasil_bb15);
            var total_bb16 = (parseFloat(b2_p) / parseFloat(hasil_brs2));
            var hasil_bb16 = total_bb16.toFixed(9);
            $('#baris-p2').val(hasil_bb16);
            var total_bb17 = (parseFloat(b2_q) / parseFloat(hasil_brs2));
            var hasil_bb17 = total_bb17.toFixed(9);
            $('#baris-q2').val(hasil_bb17);
            var total_bb18 = (parseFloat(b2_r) / parseFloat(hasil_brs2));
            var hasil_bb18 = total_bb18.toFixed(9);
            $('#baris-r2').val(hasil_bb18);
            var total_bb19 = (parseFloat(b2_s) / parseFloat(hasil_brs2));
            var hasil_bb19 = total_bb19.toFixed(9);
            $('#baris-s2').val(hasil_bb19);
            var total_bb20 = (parseFloat(b2_t) / parseFloat(hasil_brs2));
            var hasil_bb20 = total_bb20.toFixed(9);
            $('#baris-t2').val(hasil_bb20);
            var total_bb21 = (parseFloat(b2_u) / parseFloat(hasil_brs2));
            var hasil_bb21 = total_bb21.toFixed(9);
            $('#baris-u2').val(hasil_bb21);


            var b3_a = $(".brs3-a").val();
            var b3_b = $(".brs3-b").val();
            var b3_c = $(".brs3-c").val();
            var b3_d = $(".brs3-d").val();
            var b3_e = $(".brs3-e").val();
            var b3_f = $(".brs3-f").val();
            var b3_g = $(".brs3-g").val();
            var b3_h = $(".brs3-h").val();
            var b3_i = $(".brs3-i").val();
            var b3_j = $(".brs3-j").val();
            var b3_k = $(".brs3-k").val();
            var b3_l = $(".brs3-l").val();
            var b3_m = $(".brs3-m").val();
            var b3_n = $(".brs3-n").val();
            var b3_o = $(".brs3-o").val();
            var b3_p = $(".brs3-p").val();
            var b3_q = $(".brs3-q").val();
            var b3_r = $(".brs3-r").val();
            var b3_s = $(".brs3-s").val();
            var b3_t = $(".brs3-t").val();
            var b3_u = $(".brs3-u").val();

            var total3 = (parseFloat(b3_a) + parseFloat(b3_b) + parseFloat(b3_c) + parseFloat(b3_d) + parseFloat(b3_e) + parseFloat(b3_f) + parseFloat(b3_g) + parseFloat(b3_h) + parseFloat(b3_i) + parseFloat(b3_j) + parseFloat(b3_k) + parseFloat(b3_l) + parseFloat(b3_m) + parseFloat(b3_n) + parseFloat(b3_o) + parseFloat(b3_p) + parseFloat(b3_q) + parseFloat(b3_r) + parseFloat(b3_s) + parseFloat(b3_t) + parseFloat(b3_u));
            var hasil3 = total3.toFixed(2);
            $("#hasil3").val(hasil3);

            var hasil_brs3 = hasil3;

            var total_bc1 = (parseFloat(b3_a) / parseFloat(hasil_brs3));
            var hasil_bc1 = total_bc1.toFixed(9);
            $('#baris-a3').val(hasil_bc1);
            var total_bc2 = (parseFloat(b3_b) / parseFloat(hasil_brs3));
            var hasil_bc2 = total_bc2.toFixed(9);
            $('#baris-b3').val(hasil_bc2);
            var total_bc3 = (parseFloat(b3_c) / parseFloat(hasil_brs3));
            var hasil_bc3 = total_bc3.toFixed(9);
            $('#baris-c3').val(hasil_bc3);
            var total_bc4 = (parseFloat(b3_d) / parseFloat(hasil_brs3));
            var hasil_bc4 = total_bc4.toFixed(9);
            $('#baris-d3').val(hasil_bc4);
            var total_bc5 = (parseFloat(b3_e) / parseFloat(hasil_brs3));
            var hasil_bc5 = total_bc5.toFixed(9);
            $('#baris-e3').val(hasil_bc5);
            var total_bc6 = (parseFloat(b3_f) / parseFloat(hasil_brs3));
            var hasil_bc6 = total_bc6.toFixed(9);
            $('#baris-f3').val(hasil_bc6);
            var total_bc7 = (parseFloat(b3_g) / parseFloat(hasil_brs3));
            var hasil_bc7 = total_bc7.toFixed(9);
            $('#baris-g3').val(hasil_bc7);
            var total_bc8 = (parseFloat(b3_h) / parseFloat(hasil_brs3));
            var hasil_bc8 = total_bc8.toFixed(9);
            $('#baris-h3').val(hasil_bc8);
            var total_bc9 = (parseFloat(b3_i) / parseFloat(hasil_brs3));
            var hasil_bc9 = total_bc9.toFixed(9);
            $('#baris-i3').val(hasil_bc9);
            var total_bc10 = (parseFloat(b3_j) / parseFloat(hasil_brs3));
            var hasil_bc10 = total_bc10.toFixed(9);
            $('#baris-j3').val(hasil_bc10);
            var total_bc11 = (parseFloat(b3_k) / parseFloat(hasil_brs3));
            var hasil_bc11 = total_bc11.toFixed(9);
            $('#baris-k3').val(hasil_bc11);
            var total_bc12 = (parseFloat(b3_l) / parseFloat(hasil_brs3));
            var hasil_bc12 = total_bc12.toFixed(9);
            $('#baris-l3').val(hasil_bc12);
            var total_bc13 = (parseFloat(b3_m) / parseFloat(hasil_brs3));
            var hasil_bc13 = total_bc13.toFixed(9);
            $('#baris-m3').val(hasil_bc13);
            var total_bc14 = (parseFloat(b3_n) / parseFloat(hasil_brs3));
            var hasil_bc14 = total_bc14.toFixed(9);
            $('#baris-n3').val(hasil_bc14);
            var total_bc15 = (parseFloat(b3_o) / parseFloat(hasil_brs3));
            var hasil_bc15 = total_bc15.toFixed(9);
            $('#baris-o3').val(hasil_bc15);
            var total_bc16 = (parseFloat(b3_p) / parseFloat(hasil_brs3));
            var hasil_bc16 = total_bc16.toFixed(9);
            $('#baris-p3').val(hasil_bc16);
            var total_bc17 = (parseFloat(b3_q) / parseFloat(hasil_brs3));
            var hasil_bc17 = total_bc17.toFixed(9);
            $('#baris-q3').val(hasil_bc17);
            var total_bc18 = (parseFloat(b3_r) / parseFloat(hasil_brs3));
            var hasil_bc18 = total_bc18.toFixed(9);
            $('#baris-r3').val(hasil_bc18);
            var total_bc19 = (parseFloat(b3_s) / parseFloat(hasil_brs3));
            var hasil_bc19 = total_bc19.toFixed(9);
            $('#baris-s3').val(hasil_bc19);
            var total_bc20 = (parseFloat(b3_t) / parseFloat(hasil_brs3));
            var hasil_bc20 = total_bc20.toFixed(9);
            $('#baris-t3').val(hasil_bc20);
            var total_bc21 = (parseFloat(b3_u) / parseFloat(hasil_brs3));
            var hasil_bc21 = total_bc21.toFixed(9);
            $('#baris-u3').val(hasil_bc21);


            var b4_a = $(".brs4-a").val();
            var b4_b = $(".brs4-b").val();
            var b4_c = $(".brs4-c").val();
            var b4_d = $(".brs4-d").val();
            var b4_e = $(".brs4-e").val();
            var b4_f = $(".brs4-f").val();
            var b4_g = $(".brs4-g").val();
            var b4_h = $(".brs4-h").val();
            var b4_i = $(".brs4-i").val();
            var b4_j = $(".brs4-j").val();
            var b4_k = $(".brs4-k").val();
            var b4_l = $(".brs4-l").val();
            var b4_m = $(".brs4-m").val();
            var b4_n = $(".brs4-n").val();
            var b4_o = $(".brs4-o").val();
            var b4_p = $(".brs4-p").val();
            var b4_q = $(".brs4-q").val();
            var b4_r = $(".brs4-r").val();
            var b4_s = $(".brs4-s").val();
            var b4_t = $(".brs4-t").val();
            var b4_u = $(".brs4-u").val();

            var total4 = (parseFloat(b4_a) + parseFloat(b4_b) + parseFloat(b4_c) + parseFloat(b4_d) + parseFloat(b4_e) + parseFloat(b4_f) + parseFloat(b4_g) + parseFloat(b4_h) + parseFloat(b4_i) + parseFloat(b4_j) + parseFloat(b4_k) + parseFloat(b4_l) + parseFloat(b4_m) + parseFloat(b4_n) + parseFloat(b4_o) + parseFloat(b4_p) + parseFloat(b4_q) + parseFloat(b4_r) + parseFloat(b4_s) + parseFloat(b4_t) + parseFloat(b4_u));
            var hasil4 = total4.toFixed(2);
            $("#hasil4").val(hasil4);

            var hasil_brs4 = hasil4;

            var total_bd1 = (parseFloat(b4_a) / parseFloat(hasil_brs4));
            var hasil_bd1 = total_bd1.toFixed(9);
            $('#baris-a4').val(hasil_bd1);
            var total_bd2 = (parseFloat(b4_b) / parseFloat(hasil_brs4));
            var hasil_bd2 = total_bd2.toFixed(9);
            $('#baris-b4').val(hasil_bd2);
            var total_bd3 = (parseFloat(b4_c) / parseFloat(hasil_brs4));
            var hasil_bd3 = total_bd3.toFixed(9);
            $('#baris-c4').val(hasil_bd3);
            var total_bd4 = (parseFloat(b4_d) / parseFloat(hasil_brs4));
            var hasil_bd4 = total_bd4.toFixed(9);
            $('#baris-d4').val(hasil_bd4);
            var total_bd5 = (parseFloat(b4_e) / parseFloat(hasil_brs4));
            var hasil_bd5 = total_bd5.toFixed(9);
            $('#baris-e4').val(hasil_bd5);
            var total_bd6 = (parseFloat(b4_f) / parseFloat(hasil_brs4));
            var hasil_bd6 = total_bd6.toFixed(9);
            $('#baris-f4').val(hasil_bd6);
            var total_bd7 = (parseFloat(b4_g) / parseFloat(hasil_brs4));
            var hasil_bd7 = total_bd7.toFixed(9);
            $('#baris-g4').val(hasil_bd7);
            var total_bd8 = (parseFloat(b4_h) / parseFloat(hasil_brs4));
            var hasil_bd8 = total_bd8.toFixed(9);
            $('#baris-h4').val(hasil_bd8);
            var total_bd9 = (parseFloat(b4_i) / parseFloat(hasil_brs4));
            var hasil_bd9 = total_bd9.toFixed(9);
            $('#baris-i4').val(hasil_bd9);
            var total_bd10 = (parseFloat(b4_j) / parseFloat(hasil_brs4));
            var hasil_bd10 = total_bd10.toFixed(9);
            $('#baris-j4').val(hasil_bd10);
            var total_bd11 = (parseFloat(b4_k) / parseFloat(hasil_brs4));
            var hasil_bd11 = total_bd11.toFixed(9);
            $('#baris-k4').val(hasil_bd11);
            var total_bd12 = (parseFloat(b4_l) / parseFloat(hasil_brs4));
            var hasil_bd12 = total_bd12.toFixed(9);
            $('#baris-l4').val(hasil_bd12);
            var total_bd13 = (parseFloat(b4_m) / parseFloat(hasil_brs4));
            var hasil_bd13 = total_bd13.toFixed(9);
            $('#baris-m4').val(hasil_bd13);
            var total_bd14 = (parseFloat(b4_n) / parseFloat(hasil_brs4));
            var hasil_bd14 = total_bd14.toFixed(9);
            $('#baris-n4').val(hasil_bd14);
            var total_bd15 = (parseFloat(b4_o) / parseFloat(hasil_brs4));
            var hasil_bd15 = total_bd15.toFixed(9);
            $('#baris-o4').val(hasil_bd15);
            var total_bd16 = (parseFloat(b4_p) / parseFloat(hasil_brs4));
            var hasil_bd16 = total_bd16.toFixed(9);
            $('#baris-p4').val(hasil_bd16);
            var total_bd17 = (parseFloat(b4_q) / parseFloat(hasil_brs4));
            var hasil_bd17 = total_bd17.toFixed(9);
            $('#baris-q4').val(hasil_bd17);
            var total_bd18 = (parseFloat(b4_r) / parseFloat(hasil_brs4));
            var hasil_bd18 = total_bd18.toFixed(9);
            $('#baris-r4').val(hasil_bd18);
            var total_bd19 = (parseFloat(b4_s) / parseFloat(hasil_brs4));
            var hasil_bd19 = total_bd19.toFixed(9);
            $('#baris-s4').val(hasil_bd19);
            var total_bd20 = (parseFloat(b4_t) / parseFloat(hasil_brs4));
            var hasil_bd20 = total_bd20.toFixed(9);
            $('#baris-t4').val(hasil_bd20);
            var total_bd21 = (parseFloat(b4_u) / parseFloat(hasil_brs4));
            var hasil_bd21 = total_bd21.toFixed(9);
            $('#baris-u4').val(hasil_bd21);

            var b5_a = $(".brs5-a").val();
            var b5_b = $(".brs5-b").val();
            var b5_c = $(".brs5-c").val();
            var b5_d = $(".brs5-d").val();
            var b5_e = $(".brs5-e").val();
            var b5_f = $(".brs5-f").val();
            var b5_g = $(".brs5-g").val();
            var b5_h = $(".brs5-h").val();
            var b5_i = $(".brs5-i").val();
            var b5_j = $(".brs5-j").val();
            var b5_k = $(".brs5-k").val();
            var b5_l = $(".brs5-l").val();
            var b5_m = $(".brs5-m").val();
            var b5_n = $(".brs5-n").val();
            var b5_o = $(".brs5-o").val();
            var b5_p = $(".brs5-p").val();
            var b5_q = $(".brs5-q").val();
            var b5_r = $(".brs5-r").val();
            var b5_s = $(".brs5-s").val();
            var b5_t = $(".brs5-t").val();
            var b5_u = $(".brs5-u").val();

            var total5 = (parseFloat(b5_a) + parseFloat(b5_b) + parseFloat(b5_c) + parseFloat(b5_d) + parseFloat(b5_e) + parseFloat(b5_f) + parseFloat(b5_g) + parseFloat(b5_h) + parseFloat(b5_i) + parseFloat(b5_j) + parseFloat(b5_k) + parseFloat(b5_l) + parseFloat(b5_m) + parseFloat(b5_n) + parseFloat(b5_o) + parseFloat(b5_p) + parseFloat(b5_q) + parseFloat(b5_r) + parseFloat(b5_s) + parseFloat(b5_t) + parseFloat(b5_u));
            var hasil5 = total5.toFixed(2);
            $("#hasil5").val(hasil5);

            var hasil_brs5 = hasil5;

            var total_be1 = (parseFloat(b5_a) / parseFloat(hasil_brs5));
            var hasil_be1 = total_be1.toFixed(9);
            $('#baris-a5').val(hasil_be1);
            var total_be2 = (parseFloat(b5_b) / parseFloat(hasil_brs5));
            var hasil_be2 = total_be2.toFixed(9);
            $('#baris-b5').val(hasil_be2);
            var total_be3 = (parseFloat(b5_c) / parseFloat(hasil_brs5));
            var hasil_be3 = total_be3.toFixed(9);
            $('#baris-c5').val(hasil_be3);
            var total_be4 = (parseFloat(b5_d) / parseFloat(hasil_brs5));
            var hasil_be4 = total_be4.toFixed(9);
            $('#baris-d5').val(hasil_be4);
            var total_be5 = (parseFloat(b5_e) / parseFloat(hasil_brs5));
            var hasil_be5 = total_be5.toFixed(9);
            $('#baris-e5').val(hasil_be5);
            var total_be6 = (parseFloat(b5_f) / parseFloat(hasil_brs5));
            var hasil_be6 = total_be6.toFixed(9);
            $('#baris-f5').val(hasil_be6);
            var total_be7 = (parseFloat(b5_g) / parseFloat(hasil_brs5));
            var hasil_be7 = total_be7.toFixed(9);
            $('#baris-g5').val(hasil_be7);
            var total_be8 = (parseFloat(b5_h) / parseFloat(hasil_brs5));
            var hasil_be8 = total_be8.toFixed(9);
            $('#baris-h5').val(hasil_be8);
            var total_be9 = (parseFloat(b5_i) / parseFloat(hasil_brs5));
            var hasil_be9 = total_be9.toFixed(9);
            $('#baris-i5').val(hasil_be9);
            var total_be10 = (parseFloat(b5_j) / parseFloat(hasil_brs5));
            var hasil_be10 = total_be10.toFixed(9);
            $('#baris-j5').val(hasil_be10);
            var total_be11 = (parseFloat(b5_k) / parseFloat(hasil_brs5));
            var hasil_be11 = total_be11.toFixed(9);
            $('#baris-k5').val(hasil_be11);
            var total_be12 = (parseFloat(b5_l) / parseFloat(hasil_brs5));
            var hasil_be12 = total_be12.toFixed(9);
            $('#baris-l5').val(hasil_be12);
            var total_be13 = (parseFloat(b5_m) / parseFloat(hasil_brs5));
            var hasil_be13 = total_be13.toFixed(9);
            $('#baris-m5').val(hasil_be13);
            var total_be14 = (parseFloat(b5_n) / parseFloat(hasil_brs5));
            var hasil_be14 = total_be14.toFixed(9);
            $('#baris-n5').val(hasil_be14);
            var total_be15 = (parseFloat(b5_o) / parseFloat(hasil_brs5));
            var hasil_be15 = total_be15.toFixed(9);
            $('#baris-o5').val(hasil_be15);
            var total_be16 = (parseFloat(b5_p) / parseFloat(hasil_brs5));
            var hasil_be16 = total_be16.toFixed(9);
            $('#baris-p5').val(hasil_be16);
            var total_be17 = (parseFloat(b5_q) / parseFloat(hasil_brs5));
            var hasil_be17 = total_be17.toFixed(9);
            $('#baris-q5').val(hasil_be17);
            var total_be18 = (parseFloat(b5_r) / parseFloat(hasil_brs5));
            var hasil_be18 = total_be18.toFixed(9);
            $('#baris-r5').val(hasil_be18);
            var total_be19 = (parseFloat(b5_s) / parseFloat(hasil_brs5));
            var hasil_be19 = total_be19.toFixed(9);
            $('#baris-s5').val(hasil_be19);
            var total_be20 = (parseFloat(b5_t) / parseFloat(hasil_brs5));
            var hasil_be20 = total_be20.toFixed(9);
            $('#baris-t5').val(hasil_be20);
            var total_be21 = (parseFloat(b5_u) / parseFloat(hasil_brs5));
            var hasil_be21 = total_be21.toFixed(9);
            $('#baris-u5').val(hasil_be21);

            var b6_a = $(".brs6-a").val();
            var b6_b = $(".brs6-b").val();
            var b6_c = $(".brs6-c").val();
            var b6_d = $(".brs6-d").val();
            var b6_e = $(".brs6-e").val();
            var b6_f = $(".brs6-f").val();
            var b6_g = $(".brs6-g").val();
            var b6_h = $(".brs6-h").val();
            var b6_i = $(".brs6-i").val();
            var b6_j = $(".brs6-j").val();
            var b6_k = $(".brs6-k").val();
            var b6_l = $(".brs6-l").val();
            var b6_m = $(".brs6-m").val();
            var b6_n = $(".brs6-n").val();
            var b6_o = $(".brs6-o").val();
            var b6_p = $(".brs6-p").val();
            var b6_q = $(".brs6-q").val();
            var b6_r = $(".brs6-r").val();
            var b6_s = $(".brs6-s").val();
            var b6_t = $(".brs6-t").val();
            var b6_u = $(".brs6-u").val();

            var total6 = (parseFloat(b6_a) + parseFloat(b6_b) + parseFloat(b6_c) + parseFloat(b6_d) + parseFloat(b6_e) + parseFloat(b6_f) + parseFloat(b6_g) + parseFloat(b6_h) + parseFloat(b6_i) + parseFloat(b6_j) + parseFloat(b6_k) + parseFloat(b6_l) + parseFloat(b6_m) + parseFloat(b6_n) + parseFloat(b6_o) + parseFloat(b6_p) + parseFloat(b6_q) + parseFloat(b6_r) + parseFloat(b6_s) + parseFloat(b6_t) + parseFloat(b6_u));
            var hasil6 = total6.toFixed(2);
            $("#hasil6").val(hasil6);

            var hasil_brs6 = hasil6;

            var total_bf1 = (parseFloat(b6_a) / parseFloat(hasil_brs6));
            var hasil_bf1 = total_bf1.toFixed(9);
            $('#baris-a6').val(hasil_bf1);
            var total_bf2 = (parseFloat(b6_b) / parseFloat(hasil_brs6));
            var hasil_bf2 = total_bf2.toFixed(9);
            $('#baris-b6').val(hasil_bf2);
            var total_bf3 = (parseFloat(b6_c) / parseFloat(hasil_brs6));
            var hasil_bf3 = total_bf3.toFixed(9);
            $('#baris-c6').val(hasil_bf3);
            var total_bf4 = (parseFloat(b6_d) / parseFloat(hasil_brs6));
            var hasil_bf4 = total_bf4.toFixed(9);
            $('#baris-d6').val(hasil_bf4);
            var total_bf5 = (parseFloat(b6_e) / parseFloat(hasil_brs6));
            var hasil_bf5 = total_bf5.toFixed(9);
            $('#baris-e6').val(hasil_bf5);
            var total_bf6 = (parseFloat(b6_f) / parseFloat(hasil_brs6));
            var hasil_bf6 = total_bf6.toFixed(9);
            $('#baris-f6').val(hasil_bf6);
            var total_bf7 = (parseFloat(b6_g) / parseFloat(hasil_brs6));
            var hasil_bf7 = total_bf7.toFixed(9);
            $('#baris-g6').val(hasil_bf7);
            var total_bf8 = (parseFloat(b6_h) / parseFloat(hasil_brs6));
            var hasil_bf8 = total_bf8.toFixed(9);
            $('#baris-h6').val(hasil_bf8);
            var total_bf9 = (parseFloat(b6_i) / parseFloat(hasil_brs6));
            var hasil_bf9 = total_bf9.toFixed(9);
            $('#baris-i6').val(hasil_bf9);
            var total_bf10 = (parseFloat(b6_j) / parseFloat(hasil_brs6));
            var hasil_bf10 = total_bf10.toFixed(9);
            $('#baris-j6').val(hasil_bf10);
            var total_bf11 = (parseFloat(b6_k) / parseFloat(hasil_brs6));
            var hasil_bf11 = total_bf11.toFixed(9);
            $('#baris-k6').val(hasil_bf11);
            var total_bf12 = (parseFloat(b6_l) / parseFloat(hasil_brs6));
            var hasil_bf12 = total_bf12.toFixed(9);
            $('#baris-l6').val(hasil_bf12);
            var total_bf13 = (parseFloat(b6_m) / parseFloat(hasil_brs6));
            var hasil_bf13 = total_bf13.toFixed(9);
            $('#baris-m6').val(hasil_bf13);
            var total_bf14 = (parseFloat(b6_n) / parseFloat(hasil_brs6));
            var hasil_bf14 = total_bf14.toFixed(9);
            $('#baris-n6').val(hasil_bf14);
            var total_bf15 = (parseFloat(b6_o) / parseFloat(hasil_brs6));
            var hasil_bf15 = total_bf15.toFixed(9);
            $('#baris-o6').val(hasil_bf15);
            var total_bf16 = (parseFloat(b6_p) / parseFloat(hasil_brs6));
            var hasil_bf16 = total_bf16.toFixed(9);
            $('#baris-p6').val(hasil_bf16);
            var total_bf17 = (parseFloat(b6_q) / parseFloat(hasil_brs6));
            var hasil_bf17 = total_bf17.toFixed(9);
            $('#baris-q6').val(hasil_bf17);
            var total_bf18 = (parseFloat(b6_r) / parseFloat(hasil_brs6));
            var hasil_bf18 = total_bf18.toFixed(9);
            $('#baris-r6').val(hasil_bf18);
            var total_bf19 = (parseFloat(b6_s) / parseFloat(hasil_brs6));
            var hasil_bf19 = total_bf19.toFixed(9);
            $('#baris-s6').val(hasil_bf19);
            var total_bf20 = (parseFloat(b6_t) / parseFloat(hasil_brs6));
            var hasil_bf20 = total_bf20.toFixed(9);
            $('#baris-t6').val(hasil_bf20);
            var total_bf21 = (parseFloat(b6_u) / parseFloat(hasil_brs6));
            var hasil_bf21 = total_bf21.toFixed(9);
            $('#baris-u6').val(hasil_bf21);

            var b7_a = $(".brs7-a").val();
            var b7_b = $(".brs7-b").val();
            var b7_c = $(".brs7-c").val();
            var b7_d = $(".brs7-d").val();
            var b7_e = $(".brs7-e").val();
            var b7_f = $(".brs7-f").val();
            var b7_g = $(".brs7-g").val();
            var b7_h = $(".brs7-h").val();
            var b7_i = $(".brs7-i").val();
            var b7_j = $(".brs7-j").val();
            var b7_k = $(".brs7-k").val();
            var b7_l = $(".brs7-l").val();
            var b7_m = $(".brs7-m").val();
            var b7_n = $(".brs7-n").val();
            var b7_o = $(".brs7-o").val();
            var b7_p = $(".brs7-p").val();
            var b7_q = $(".brs7-q").val();
            var b7_r = $(".brs7-r").val();
            var b7_s = $(".brs7-s").val();
            var b7_t = $(".brs7-t").val();
            var b7_u = $(".brs7-u").val();

            var total7 = (parseFloat(b7_a) + parseFloat(b7_b) + parseFloat(b7_c) + parseFloat(b7_d) + parseFloat(b7_e) + parseFloat(b7_f) + parseFloat(b7_g) + parseFloat(b7_h) + parseFloat(b7_i) + parseFloat(b7_j) + parseFloat(b7_k) + parseFloat(b7_l) + parseFloat(b7_m) + parseFloat(b7_n) + parseFloat(b7_o) + parseFloat(b7_p) + parseFloat(b7_q) + parseFloat(b7_r) + parseFloat(b7_s) + parseFloat(b7_t) + parseFloat(b7_u));
            var hasil7 = total7.toFixed(2);
            $("#hasil7").val(hasil7);

            var hasil_brs7 = hasil7;

            var total_bg1 = (parseFloat(b7_a) / parseFloat(hasil_brs7));
            var hasil_bg1 = total_bg1.toFixed(9);
            $('#baris-a7').val(hasil_bg1);
            var total_bg2 = (parseFloat(b7_b) / parseFloat(hasil_brs7));
            var hasil_bg2 = total_bg2.toFixed(9);
            $('#baris-b7').val(hasil_bg2);
            var total_bg3 = (parseFloat(b7_c) / parseFloat(hasil_brs7));
            var hasil_bg3 = total_bg3.toFixed(9);
            $('#baris-c7').val(hasil_bg3);
            var total_bg4 = (parseFloat(b7_d) / parseFloat(hasil_brs7));
            var hasil_bg4 = total_bg4.toFixed(9);
            $('#baris-d7').val(hasil_bg4);
            var total_bg5 = (parseFloat(b7_e) / parseFloat(hasil_brs7));
            var hasil_bg5 = total_bg5.toFixed(9);
            $('#baris-e7').val(hasil_bg5);
            var total_bg6 = (parseFloat(b7_f) / parseFloat(hasil_brs7));
            var hasil_bg6 = total_bg6.toFixed(9);
            $('#baris-f7').val(hasil_bg6);
            var total_bg7 = (parseFloat(b7_g) / parseFloat(hasil_brs7));
            var hasil_bg7 = total_bg7.toFixed(9);
            $('#baris-g7').val(hasil_bg7);
            var total_bg8 = (parseFloat(b7_h) / parseFloat(hasil_brs7));
            var hasil_bg8 = total_bg8.toFixed(9);
            $('#baris-h7').val(hasil_bg8);
            var total_bg9 = (parseFloat(b7_i) / parseFloat(hasil_brs7));
            var hasil_bg9 = total_bg9.toFixed(9);
            $('#baris-i7').val(hasil_bg9);
            var total_bg10 = (parseFloat(b7_j) / parseFloat(hasil_brs7));
            var hasil_bg10 = total_bg10.toFixed(9);
            $('#baris-j7').val(hasil_bg10);
            var total_bg11 = (parseFloat(b7_k) / parseFloat(hasil_brs7));
            var hasil_bg11 = total_bg11.toFixed(9);
            $('#baris-k7').val(hasil_bg11);
            var total_bg12 = (parseFloat(b7_l) / parseFloat(hasil_brs7));
            var hasil_bg12 = total_bg12.toFixed(9);
            $('#baris-l7').val(hasil_bg12);
            var total_bg13 = (parseFloat(b7_m) / parseFloat(hasil_brs7));
            var hasil_bg13 = total_bg13.toFixed(9);
            $('#baris-m7').val(hasil_bg13);
            var total_bg14 = (parseFloat(b7_n) / parseFloat(hasil_brs7));
            var hasil_bg14 = total_bg14.toFixed(9);
            $('#baris-n7').val(hasil_bg14);
            var total_bg15 = (parseFloat(b7_o) / parseFloat(hasil_brs7));
            var hasil_bg15 = total_bg15.toFixed(9);
            $('#baris-o7').val(hasil_bg15);
            var total_bg16 = (parseFloat(b7_p) / parseFloat(hasil_brs7));
            var hasil_bg16 = total_bg16.toFixed(9);
            $('#baris-p7').val(hasil_bg16);
            var total_bg17 = (parseFloat(b7_q) / parseFloat(hasil_brs7));
            var hasil_bg17 = total_bg17.toFixed(9);
            $('#baris-q7').val(hasil_bg17);
            var total_bg18 = (parseFloat(b7_r) / parseFloat(hasil_brs7));
            var hasil_bg18 = total_bg18.toFixed(9);
            $('#baris-r7').val(hasil_bg18);
            var total_bg19 = (parseFloat(b7_s) / parseFloat(hasil_brs7));
            var hasil_bg19 = total_bg19.toFixed(9);
            $('#baris-s7').val(hasil_bg19);
            var total_bg20 = (parseFloat(b7_t) / parseFloat(hasil_brs7));
            var hasil_bg20 = total_bg20.toFixed(9);
            $('#baris-t7').val(hasil_bg20);
            var total_bg21 = (parseFloat(b7_u) / parseFloat(hasil_brs7));
            var hasil_bg21 = total_bg21.toFixed(9);
            $('#baris-u7').val(hasil_bg21);


            var b8_a = $(".brs8-a").val();
            var b8_b = $(".brs8-b").val();
            var b8_c = $(".brs8-c").val();
            var b8_d = $(".brs8-d").val();
            var b8_e = $(".brs8-e").val();
            var b8_f = $(".brs8-f").val();
            var b8_g = $(".brs8-g").val();
            var b8_h = $(".brs8-h").val();
            var b8_i = $(".brs8-i").val();
            var b8_j = $(".brs8-j").val();
            var b8_k = $(".brs8-k").val();
            var b8_l = $(".brs8-l").val();
            var b8_m = $(".brs8-m").val();
            var b8_n = $(".brs8-n").val();
            var b8_o = $(".brs8-o").val();
            var b8_p = $(".brs8-p").val();
            var b8_q = $(".brs8-q").val();
            var b8_r = $(".brs8-r").val();
            var b8_s = $(".brs8-s").val();
            var b8_t = $(".brs8-t").val();
            var b8_u = $(".brs8-u").val();

            var total8 = (parseFloat(b8_a) + parseFloat(b8_b) + parseFloat(b8_c) + parseFloat(b8_d) + parseFloat(b8_e) + parseFloat(b8_f) + parseFloat(b8_g) + parseFloat(b8_h) + parseFloat(b8_i) + parseFloat(b8_j) + parseFloat(b8_k) + parseFloat(b8_l) + parseFloat(b8_m) + parseFloat(b8_n) + parseFloat(b8_o) + parseFloat(b8_p) + parseFloat(b8_q) + parseFloat(b8_r) + parseFloat(b8_s) + parseFloat(b8_t) + parseFloat(b8_u));
            var hasil8 = total8.toFixed(2);
            $("#hasil8").val(hasil8);

            var hasil_brs8 = hasil8;

            var total_bh1 = (parseFloat(b8_a) / parseFloat(hasil_brs8));
            var hasil_bh1 = total_bh1.toFixed(9);
            $('#baris-a8').val(hasil_bh1);
            var total_bh2 = (parseFloat(b8_b) / parseFloat(hasil_brs8));
            var hasil_bh2 = total_bh2.toFixed(9);
            $('#baris-b8').val(hasil_bh2);
            var total_bh3 = (parseFloat(b8_c) / parseFloat(hasil_brs8));
            var hasil_bh3 = total_bh3.toFixed(9);
            $('#baris-c8').val(hasil_bh3);
            var total_bh4 = (parseFloat(b8_d) / parseFloat(hasil_brs8));
            var hasil_bh4 = total_bh4.toFixed(9);
            $('#baris-d8').val(hasil_bh4);
            var total_bh5 = (parseFloat(b8_e) / parseFloat(hasil_brs8));
            var hasil_bh5 = total_bh5.toFixed(9);
            $('#baris-e8').val(hasil_bh5);
            var total_bh6 = (parseFloat(b8_f) / parseFloat(hasil_brs8));
            var hasil_bh6 = total_bh6.toFixed(9);
            $('#baris-f8').val(hasil_bh6);
            var total_bh7 = (parseFloat(b8_g) / parseFloat(hasil_brs8));
            var hasil_bh7 = total_bh7.toFixed(9);
            $('#baris-g8').val(hasil_bh7);
            var total_bh8 = (parseFloat(b8_h) / parseFloat(hasil_brs8));
            var hasil_bh8 = total_bh8.toFixed(9);
            $('#baris-h8').val(hasil_bh8);
            var total_bh9 = (parseFloat(b8_i) / parseFloat(hasil_brs8));
            var hasil_bh9 = total_bh9.toFixed(9);
            $('#baris-i8').val(hasil_bh9);
            var total_bh10 = (parseFloat(b8_j) / parseFloat(hasil_brs8));
            var hasil_bh10 = total_bh10.toFixed(9);
            $('#baris-j8').val(hasil_bh10);
            var total_bh11 = (parseFloat(b8_k) / parseFloat(hasil_brs8));
            var hasil_bh11 = total_bh11.toFixed(9);
            $('#baris-k8').val(hasil_bh11);
            var total_bh12 = (parseFloat(b8_l) / parseFloat(hasil_brs8));
            var hasil_bh12 = total_bh12.toFixed(9);
            $('#baris-l8').val(hasil_bh12);
            var total_bh13 = (parseFloat(b8_m) / parseFloat(hasil_brs8));
            var hasil_bh13 = total_bh13.toFixed(9);
            $('#baris-m8').val(hasil_bh13);
            var total_bh14 = (parseFloat(b8_n) / parseFloat(hasil_brs8));
            var hasil_bh14 = total_bh14.toFixed(9);
            $('#baris-n8').val(hasil_bh14);
            var total_bh15 = (parseFloat(b8_o) / parseFloat(hasil_brs8));
            var hasil_bh15 = total_bh15.toFixed(9);
            $('#baris-o8').val(hasil_bh15);
            var total_bh16 = (parseFloat(b8_p) / parseFloat(hasil_brs8));
            var hasil_bh16 = total_bh16.toFixed(9);
            $('#baris-p8').val(hasil_bh16);
            var total_bh17 = (parseFloat(b8_q) / parseFloat(hasil_brs8));
            var hasil_bh17 = total_bh17.toFixed(9);
            $('#baris-q8').val(hasil_bh17);
            var total_bh18 = (parseFloat(b8_r) / parseFloat(hasil_brs8));
            var hasil_bh18 = total_bh18.toFixed(9);
            $('#baris-r8').val(hasil_bh18);
            var total_bh19 = (parseFloat(b8_s) / parseFloat(hasil_brs8));
            var hasil_bh19 = total_bh19.toFixed(9);
            $('#baris-s8').val(hasil_bh19);
            var total_bh20 = (parseFloat(b8_t) / parseFloat(hasil_brs8));
            var hasil_bh20 = total_bh20.toFixed(9);
            $('#baris-t8').val(hasil_bh20);
            var total_bh21 = (parseFloat(b8_u) / parseFloat(hasil_brs8));
            var hasil_bh21 = total_bh21.toFixed(9);
            $('#baris-u8 ').val(hasil_bh21);


            var b9_a = $(".brs9-a").val();
            var b9_b = $(".brs9-b").val();
            var b9_c = $(".brs9-c").val();
            var b9_d = $(".brs9-d").val();
            var b9_e = $(".brs9-e").val();
            var b9_f = $(".brs9-f").val();
            var b9_g = $(".brs9-g").val();
            var b9_h = $(".brs9-h").val();
            var b9_i = $(".brs9-i").val();
            var b9_j = $(".brs9-j").val();
            var b9_k = $(".brs9-k").val();
            var b9_l = $(".brs9-l").val();
            var b9_m = $(".brs9-m").val();
            var b9_n = $(".brs9-n").val();
            var b9_o = $(".brs9-o").val();
            var b9_p = $(".brs9-p").val();
            var b9_q = $(".brs9-q").val();
            var b9_r = $(".brs9-r").val();
            var b9_s = $(".brs9-s").val();
            var b9_t = $(".brs9-t").val();
            var b9_u = $(".brs9-u").val();

            var total9 = (parseFloat(b9_a) + parseFloat(b9_b) + parseFloat(b9_c) + parseFloat(b9_d) + parseFloat(b9_e) + parseFloat(b9_f) + parseFloat(b9_g) + parseFloat(b9_h) + parseFloat(b9_i) + parseFloat(b9_j) + parseFloat(b9_k) + parseFloat(b9_l) + parseFloat(b9_m) + parseFloat(b9_n) + parseFloat(b9_o) + parseFloat(b9_p) + parseFloat(b9_q) + parseFloat(b9_r) + parseFloat(b9_s) + parseFloat(b9_t) + parseFloat(b9_u));
            var hasil9 = total9.toFixed(2);
            $("#hasil9").val(hasil9);

            var hasil_brs9 = hasil9;

            var total_bi1 = (parseFloat(b9_a) / parseFloat(hasil_brs9));
            var hasil_bi1 = total_bi1.toFixed(9);
            $('#baris-a9').val(hasil_bi1);
            var total_bi2 = (parseFloat(b9_b) / parseFloat(hasil_brs9));
            var hasil_bi2 = total_bi2.toFixed(9);
            $('#baris-b9').val(hasil_bi2);
            var total_bi3 = (parseFloat(b9_c) / parseFloat(hasil_brs9));
            var hasil_bi3 = total_bi3.toFixed(9);
            $('#baris-c9 ').val(hasil_bi3);
            var total_bi4 = (parseFloat(b9_d) / parseFloat(hasil_brs9));
            var hasil_bi4 = total_bi4.toFixed(9);
            $('#baris-d9').val(hasil_bi4);
            var total_bi5 = (parseFloat(b9_e) / parseFloat(hasil_brs9));
            var hasil_bi5 = total_bi5.toFixed(9);
            $('#baris-e9').val(hasil_bi5);
            var total_bi6 = (parseFloat(b9_f) / parseFloat(hasil_brs9));
            var hasil_bi6 = total_bi6.toFixed(9);
            $('#baris-f9').val(hasil_bi6);
            var total_bi7 = (parseFloat(b9_g) / parseFloat(hasil_brs9));
            var hasil_bi7 = total_bi7.toFixed(9);
            $('#baris-g9').val(hasil_bi7);
            var total_bi8 = (parseFloat(b9_h) / parseFloat(hasil_brs9));
            var hasil_bi8 = total_bi8.toFixed(9);
            $('#baris-h9').val(hasil_bi8);
            var total_bi9 = (parseFloat(b9_i) / parseFloat(hasil_brs9));
            var hasil_bi9 = total_bi9.toFixed(9);
            $('#baris-i9').val(hasil_bi9);
            var total_bi10 = (parseFloat(b9_j) / parseFloat(hasil_brs9));
            var hasil_bi10 = total_bi10.toFixed(9);
            $('#baris-j9').val(hasil_bi10);
            var total_bi11 = (parseFloat(b9_k) / parseFloat(hasil_brs9));
            var hasil_bi11 = total_bi11.toFixed(9);
            $('#baris-k9').val(hasil_bi11);
            var total_bi12 = (parseFloat(b9_l) / parseFloat(hasil_brs9));
            var hasil_bi12 = total_bi12.toFixed(9);
            $('#baris-l9').val(hasil_bi12);
            var total_bi13 = (parseFloat(b9_m) / parseFloat(hasil_brs9));
            var hasil_bi13 = total_bi13.toFixed(9);
            $('#baris-m9').val(hasil_bi13);
            var total_bi14 = (parseFloat(b9_n) / parseFloat(hasil_brs9));
            var hasil_bi14 = total_bi14.toFixed(9);
            $('#baris-n9').val(hasil_bi14);
            var total_bi15 = (parseFloat(b9_o) / parseFloat(hasil_brs9));
            var hasil_bi15 = total_bi15.toFixed(9);
            $('#baris-o9').val(hasil_bi15);
            var total_bi16 = (parseFloat(b9_p) / parseFloat(hasil_brs9));
            var hasil_bi16 = total_bi16.toFixed(9);
            $('#baris-p9').val(hasil_bi16);
            var total_bi17 = (parseFloat(b9_q) / parseFloat(hasil_brs9));
            var hasil_bi17 = total_bi17.toFixed(9);
            $('#baris-q9').val(hasil_bi17);
            var total_bi18 = (parseFloat(b9_r) / parseFloat(hasil_brs9));
            var hasil_bi18 = total_bi18.toFixed(9);
            $('#baris-r9').val(hasil_bi18);
            var total_bi19 = (parseFloat(b9_s) / parseFloat(hasil_brs9));
            var hasil_bi19 = total_bi19.toFixed(9);
            $('#baris-s9').val(hasil_bi19);
            var total_bi20 = (parseFloat(b9_t) / parseFloat(hasil_brs9));
            var hasil_bi20 = total_bi20.toFixed(9);
            $('#baris-t9').val(hasil_bi20);
            var total_bi21 = (parseFloat(b9_u) / parseFloat(hasil_brs9));
            var hasil_bi21 = total_bi21.toFixed(9);
            $('#baris-u9 ').val(hasil_bi21);


            var b10_a = $(".brs10-a").val();
            var b10_b = $(".brs10-b").val();
            var b10_c = $(".brs10-c").val();
            var b10_d = $(".brs10-d").val();
            var b10_e = $(".brs10-e").val();
            var b10_f = $(".brs10-f").val();
            var b10_g = $(".brs10-g").val();
            var b10_h = $(".brs10-h").val();
            var b10_i = $(".brs10-i").val();
            var b10_j = $(".brs10-j").val();
            var b10_k = $(".brs10-k").val();
            var b10_l = $(".brs10-l").val();
            var b10_m = $(".brs10-m").val();
            var b10_n = $(".brs10-n").val();
            var b10_o = $(".brs10-o").val();
            var b10_p = $(".brs10-p").val();
            var b10_q = $(".brs10-q").val();
            var b10_r = $(".brs10-r").val();
            var b10_s = $(".brs10-s").val();
            var b10_t = $(".brs10-t").val();
            var b10_u = $(".brs10-u").val();

            var total10 = (parseFloat(b10_a) + parseFloat(b10_b) + parseFloat(b10_c) + parseFloat(b10_d) + parseFloat(b10_e) + parseFloat(b10_f) + parseFloat(b10_g) + parseFloat(b10_h) + parseFloat(b10_i) + parseFloat(b10_j) + parseFloat(b10_k) + parseFloat(b10_l) + parseFloat(b10_m) + parseFloat(b10_n) + parseFloat(b10_o) + parseFloat(b10_p) + parseFloat(b10_q) + parseFloat(b10_r) + parseFloat(b10_s) + parseFloat(b10_t) + parseFloat(b10_u));
            var hasil10 = total10.toFixed(2);
            $("#hasil10").val(hasil10);

            var hasil_brs10 = hasil10;

            var total_bj1 = (parseFloat(b10_a) / parseFloat(hasil_brs10));
            var hasil_bj1 = total_bj1.toFixed(9);
            $('#baris-a10').val(hasil_bj1);
            var total_bj2 = (parseFloat(b10_b) / parseFloat(hasil_brs10));
            var hasil_bj2 = total_bj2.toFixed(9);
            $('#baris-b10').val(hasil_bj2);
            var total_bj3 = (parseFloat(b10_c) / parseFloat(hasil_brs10));
            var hasil_bj3 = total_bj3.toFixed(9);
            $('#baris-c10 ').val(hasil_bj3);
            var total_bj4 = (parseFloat(b10_d) / parseFloat(hasil_brs10));
            var hasil_bj4 = total_bj4.toFixed(9);
            $('#baris-d10').val(hasil_bj4);
            var total_bj5 = (parseFloat(b10_e) / parseFloat(hasil_brs10));
            var hasil_bj5 = total_bj5.toFixed(9);
            $('#baris-e10').val(hasil_bj5);
            var total_bj6 = (parseFloat(b10_f) / parseFloat(hasil_brs10));
            var hasil_bj6 = total_bj6.toFixed(9);
            $('#baris-f10').val(hasil_bj6);
            var total_bj7 = (parseFloat(b10_g) / parseFloat(hasil_brs10));
            var hasil_bj7 = total_bj7.toFixed(9);
            $('#baris-g10').val(hasil_bj7);
            var total_bj8 = (parseFloat(b10_h) / parseFloat(hasil_brs10));
            var hasil_bj8 = total_bj8.toFixed(9);
            $('#baris-h10').val(hasil_bj8);
            var total_bj9 = (parseFloat(b10_i) / parseFloat(hasil_brs10));
            var hasil_bj9 = total_bj9.toFixed(9);
            $('#baris-i10').val(hasil_bj9);
            var total_bj10 = (parseFloat(b10_j) / parseFloat(hasil_brs10));
            var hasil_bj10 = total_bj10.toFixed(9);
            $('#baris-j10').val(hasil_bj10);
            var total_bj11 = (parseFloat(b10_k) / parseFloat(hasil_brs10));
            var hasil_bj11 = total_bj11.toFixed(9);
            $('#baris-k10').val(hasil_bj11);
            var total_bj12 = (parseFloat(b10_l) / parseFloat(hasil_brs10));
            var hasil_bj12 = total_bj12.toFixed(9);
            $('#baris-l10').val(hasil_bj12);
            var total_bj13 = (parseFloat(b10_m) / parseFloat(hasil_brs10));
            var hasil_bj13 = total_bj13.toFixed(9);
            $('#baris-m10').val(hasil_bj13);
            var total_bj14 = (parseFloat(b10_n) / parseFloat(hasil_brs10));
            var hasil_bj14 = total_bj14.toFixed(9);
            $('#baris-n10').val(hasil_bj14);
            var total_bj15 = (parseFloat(b10_o) / parseFloat(hasil_brs10));
            var hasil_bj15 = total_bj15.toFixed(9);
            $('#baris-o10').val(hasil_bj15);
            var total_bj16 = (parseFloat(b10_p) / parseFloat(hasil_brs10));
            var hasil_bj16 = total_bj16.toFixed(9);
            $('#baris-p10').val(hasil_bj16);
            var total_bj17 = (parseFloat(b10_q) / parseFloat(hasil_brs10));
            var hasil_bj17 = total_bj17.toFixed(9);
            $('#baris-q10').val(hasil_bj17);
            var total_bj18 = (parseFloat(b10_r) / parseFloat(hasil_brs10));
            var hasil_bj18 = total_bj18.toFixed(9);
            $('#baris-r10').val(hasil_bj18);
            var total_bj19 = (parseFloat(b10_s) / parseFloat(hasil_brs10));
            var hasil_bj19 = total_bj19.toFixed(9);
            $('#baris-s10').val(hasil_bj19);
            var total_bj20 = (parseFloat(b10_t) / parseFloat(hasil_brs10));
            var hasil_bj20 = total_bj20.toFixed(9);
            $('#baris-t10').val(hasil_bj20);
            var total_bj21 = (parseFloat(b10_u) / parseFloat(hasil_brs10));
            var hasil_bj21 = total_bj21.toFixed(9);
            $('#baris-u10 ').val(hasil_bj21);


            var b11_a = $(".brs11-a").val();
            var b11_b = $(".brs11-b").val();
            var b11_c = $(".brs11-c").val();
            var b11_d = $(".brs11-d").val();
            var b11_e = $(".brs11-e").val();
            var b11_f = $(".brs11-f").val();
            var b11_g = $(".brs11-g").val();
            var b11_h = $(".brs11-h").val();
            var b11_i = $(".brs11-i").val();
            var b11_j = $(".brs11-j").val();
            var b11_k = $(".brs11-k").val();
            var b11_l = $(".brs11-l").val();
            var b11_m = $(".brs11-m").val();
            var b11_n = $(".brs11-n").val();
            var b11_o = $(".brs11-o").val();
            var b11_p = $(".brs11-p").val();
            var b11_q = $(".brs11-q").val();
            var b11_r = $(".brs11-r").val();
            var b11_s = $(".brs11-s").val();
            var b11_t = $(".brs11-t").val();
            var b11_u = $(".brs11-u").val();

            var total11 = (parseFloat(b11_a) + parseFloat(b11_b) + parseFloat(b11_c) + parseFloat(b11_d) + parseFloat(b11_e) + parseFloat(b11_f) + parseFloat(b11_g) + parseFloat(b11_h) + parseFloat(b11_i) + parseFloat(b11_j) + parseFloat(b11_k) + parseFloat(b11_l) + parseFloat(b11_m) + parseFloat(b11_n) + parseFloat(b11_o) + parseFloat(b11_p) + parseFloat(b11_q) + parseFloat(b11_r) + parseFloat(b11_s) + parseFloat(b11_t) + parseFloat(b11_u));
            var hasil11 = total11.toFixed(2);
            $("#hasil11").val(hasil11)

            var hasil_brs11 = hasil11;

            var total_bk1 = (parseFloat(b11_a) / parseFloat(hasil_brs11));
            var hasil_bk1 = total_bk1.toFixed(9);
            $('#baris-a11').val(hasil_bk1);
            var total_bk2 = (parseFloat(b11_b) / parseFloat(hasil_brs11));
            var hasil_bk2 = total_bk2.toFixed(9);
            $('#baris-b11').val(hasil_bk2);
            var total_bk3 = (parseFloat(b11_c) / parseFloat(hasil_brs11));
            var hasil_bk3 = total_bk3.toFixed(9);
            $('#baris-c11 ').val(hasil_bk3);
            var total_bk4 = (parseFloat(b11_d) / parseFloat(hasil_brs11));
            var hasil_bk4 = total_bk4.toFixed(9);
            $('#baris-d11').val(hasil_bk4);
            var total_bk5 = (parseFloat(b11_e) / parseFloat(hasil_brs11));
            var hasil_bk5 = total_bk5.toFixed(9);
            $('#baris-e11').val(hasil_bk5);
            var total_bk6 = (parseFloat(b11_f) / parseFloat(hasil_brs11));
            var hasil_bk6 = total_bk6.toFixed(9);
            $('#baris-f11').val(hasil_bk6);
            var total_bk7 = (parseFloat(b11_g) / parseFloat(hasil_brs11));
            var hasil_bk7 = total_bk7.toFixed(9);
            $('#baris-g11').val(hasil_bk7);
            var total_bk8 = (parseFloat(b11_h) / parseFloat(hasil_brs11));
            var hasil_bk8 = total_bk8.toFixed(9);
            $('#baris-h11').val(hasil_bk8);
            var total_bk9 = (parseFloat(b11_i) / parseFloat(hasil_brs11));
            var hasil_bk9 = total_bk9.toFixed(9);
            $('#baris-i11').val(hasil_bk9);
            var total_bk10 = (parseFloat(b11_j) / parseFloat(hasil_brs11));
            var hasil_bk10 = total_bk10.toFixed(9);
            $('#baris-j11').val(hasil_bk10);
            var total_bk11 = (parseFloat(b11_k) / parseFloat(hasil_brs11));
            var hasil_bk11 = total_bk11.toFixed(9);
            $('#baris-k11').val(hasil_bk11);
            var total_bk12 = (parseFloat(b11_l) / parseFloat(hasil_brs11));
            var hasil_bk12 = total_bk12.toFixed(9);
            $('#baris-l11').val(hasil_bk12);
            var total_bk13 = (parseFloat(b11_m) / parseFloat(hasil_brs11));
            var hasil_bk13 = total_bk13.toFixed(9);
            $('#baris-m11').val(hasil_bk13);
            var total_bk14 = (parseFloat(b11_n) / parseFloat(hasil_brs11));
            var hasil_bk14 = total_bk14.toFixed(9);
            $('#baris-n11').val(hasil_bk14);
            var total_bk15 = (parseFloat(b11_o) / parseFloat(hasil_brs11));
            var hasil_bk15 = total_bk15.toFixed(9);
            $('#baris-o11').val(hasil_bk15);
            var total_bk16 = (parseFloat(b11_p) / parseFloat(hasil_brs11));
            var hasil_bk16 = total_bk16.toFixed(9);
            $('#baris-p11').val(hasil_bk16);
            var total_bk17 = (parseFloat(b11_q) / parseFloat(hasil_brs11));
            var hasil_bk17 = total_bk17.toFixed(9);
            $('#baris-q11').val(hasil_bk17);
            var total_bk18 = (parseFloat(b11_r) / parseFloat(hasil_brs11));
            var hasil_bk18 = total_bk18.toFixed(9);
            $('#baris-r11').val(hasil_bk18);
            var total_bk19 = (parseFloat(b11_s) / parseFloat(hasil_brs11));
            var hasil_bk19 = total_bk19.toFixed(9);
            $('#baris-s11').val(hasil_bk19);
            var total_bk20 = (parseFloat(b11_t) / parseFloat(hasil_brs11));
            var hasil_bk20 = total_bk20.toFixed(9);
            $('#baris-t11').val(hasil_bk20);
            var total_bk21 = (parseFloat(b11_u) / parseFloat(hasil_brs11));
            var hasil_bk21 = total_bk21.toFixed(9);
            $('#baris-u11 ').val(hasil_bk21);


            var b12_a = $(".brs12-a").val();
            var b12_b = $(".brs12-b").val();
            var b12_c = $(".brs12-c").val();
            var b12_d = $(".brs12-d").val();
            var b12_e = $(".brs12-e").val();
            var b12_f = $(".brs12-f").val();
            var b12_g = $(".brs12-g").val();
            var b12_h = $(".brs12-h").val();
            var b12_i = $(".brs12-i").val();
            var b12_j = $(".brs12-j").val();
            var b12_k = $(".brs12-k").val();
            var b12_l = $(".brs12-l").val();
            var b12_m = $(".brs12-m").val();
            var b12_n = $(".brs12-n").val();
            var b12_o = $(".brs12-o").val();
            var b12_p = $(".brs12-p").val();
            var b12_q = $(".brs12-q").val();
            var b12_r = $(".brs12-r").val();
            var b12_s = $(".brs12-s").val();
            var b12_t = $(".brs12-t").val();
            var b12_u = $(".brs12-u").val();

            var total12 = (parseFloat(b12_a) + parseFloat(b12_b) + parseFloat(b12_c) + parseFloat(b12_d) + parseFloat(b12_e) + parseFloat(b12_f) + parseFloat(b12_g) + parseFloat(b12_h) + parseFloat(b12_i) + parseFloat(b12_j) + parseFloat(b12_k) + parseFloat(b12_l) + parseFloat(b12_m) + parseFloat(b12_n) + parseFloat(b12_o) + parseFloat(b12_p) + parseFloat(b12_q) + parseFloat(b12_r) + parseFloat(b12_s) + parseFloat(b12_t) + parseFloat(b12_u));
            var hasil12 = total12.toFixed(2);
            $("#hasil12").val(hasil12);

            var hasil_brs12 = hasil12;

            var total_bl1 = (parseFloat(b12_a) / parseFloat(hasil_brs12));
            var hasil_bl1 = total_bl1.toFixed(9);
            $('#baris-a12').val(hasil_bl1);
            var total_bl2 = (parseFloat(b12_b) / parseFloat(hasil_brs12));
            var hasil_bl2 = total_bl2.toFixed(9);
            $('#baris-b12').val(hasil_bl2);
            var total_bl3 = (parseFloat(b12_c) / parseFloat(hasil_brs12));
            var hasil_bl3 = total_bl3.toFixed(9);
            $('#baris-c12 ').val(hasil_bl3);
            var total_bl4 = (parseFloat(b12_d) / parseFloat(hasil_brs12));
            var hasil_bl4 = total_bl4.toFixed(9);
            $('#baris-d12').val(hasil_bl4);
            var total_bl5 = (parseFloat(b12_e) / parseFloat(hasil_brs12));
            var hasil_bl5 = total_bl5.toFixed(9);
            $('#baris-e12').val(hasil_bl5);
            var total_bl6 = (parseFloat(b12_f) / parseFloat(hasil_brs12));
            var hasil_bl6 = total_bl6.toFixed(9);
            $('#baris-f12').val(hasil_bl6);
            var total_bl7 = (parseFloat(b12_g) / parseFloat(hasil_brs12));
            var hasil_bl7 = total_bl7.toFixed(9);
            $('#baris-g12').val(hasil_bl7);
            var total_bl8 = (parseFloat(b12_h) / parseFloat(hasil_brs12));
            var hasil_bl8 = total_bl8.toFixed(9);
            $('#baris-h12').val(hasil_bl8);
            var total_bl9 = (parseFloat(b12_i) / parseFloat(hasil_brs12));
            var hasil_bl9 = total_bl9.toFixed(9);
            $('#baris-i12').val(hasil_bl9);
            var total_bl10 = (parseFloat(b12_j) / parseFloat(hasil_brs12));
            var hasil_bl10 = total_bl10.toFixed(9);
            $('#baris-j12').val(hasil_bl10);
            var total_bl11 = (parseFloat(b12_k) / parseFloat(hasil_brs12));
            var hasil_bl11 = total_bl11.toFixed(9);
            $('#baris-k12').val(hasil_bl11);
            var total_bl12 = (parseFloat(b12_l) / parseFloat(hasil_brs12));
            var hasil_bl12 = total_bl12.toFixed(9);
            $('#baris-l12').val(hasil_bl12);
            var total_bl13 = (parseFloat(b12_m) / parseFloat(hasil_brs12));
            var hasil_bl13 = total_bl13.toFixed(9);
            $('#baris-m12').val(hasil_bl13);
            var total_bl14 = (parseFloat(b12_n) / parseFloat(hasil_brs12));
            var hasil_bl14 = total_bl14.toFixed(9);
            $('#baris-n12').val(hasil_bl14);
            var total_bl15 = (parseFloat(b12_o) / parseFloat(hasil_brs12));
            var hasil_bl15 = total_bl15.toFixed(9);
            $('#baris-o12').val(hasil_bl15);
            var total_bl16 = (parseFloat(b12_p) / parseFloat(hasil_brs12));
            var hasil_bl16 = total_bl16.toFixed(9);
            $('#baris-p12').val(hasil_bl16);
            var total_bl17 = (parseFloat(b12_q) / parseFloat(hasil_brs12));
            var hasil_bl17 = total_bl17.toFixed(9);
            $('#baris-q12').val(hasil_bl17);
            var total_bl18 = (parseFloat(b12_r) / parseFloat(hasil_brs12));
            var hasil_bl18 = total_bl18.toFixed(9);
            $('#baris-r12').val(hasil_bl18);
            var total_bl19 = (parseFloat(b12_s) / parseFloat(hasil_brs12));
            var hasil_bl19 = total_bl19.toFixed(9);
            $('#baris-s12').val(hasil_bl19);
            var total_bl20 = (parseFloat(b12_t) / parseFloat(hasil_brs12));
            var hasil_bl20 = total_bl20.toFixed(9);
            $('#baris-t12').val(hasil_bl20);
            var total_bl21 = (parseFloat(b12_u) / parseFloat(hasil_brs12));
            var hasil_bl21 = total_bl21.toFixed(9);
            $('#baris-u12 ').val(hasil_bl21);


            var b13_a = $(".brs13-a").val();
            var b13_b = $(".brs13-b").val();
            var b13_c = $(".brs13-c").val();
            var b13_d = $(".brs13-d").val();
            var b13_e = $(".brs13-e").val();
            var b13_f = $(".brs13-f").val();
            var b13_g = $(".brs13-g").val();
            var b13_h = $(".brs13-h").val();
            var b13_i = $(".brs13-i").val();
            var b13_j = $(".brs13-j").val();
            var b13_k = $(".brs13-k").val();
            var b13_l = $(".brs13-l").val();
            var b13_m = $(".brs13-m").val();
            var b13_n = $(".brs13-n").val();
            var b13_o = $(".brs13-o").val();
            var b13_p = $(".brs13-p").val();
            var b13_q = $(".brs13-q").val();
            var b13_r = $(".brs13-r").val();
            var b13_s = $(".brs13-s").val();
            var b13_t = $(".brs13-t").val();
            var b13_u = $(".brs13-u").val();

            var total13 = (parseFloat(b13_a) + parseFloat(b13_b) + parseFloat(b13_c) + parseFloat(b13_d) + parseFloat(b13_e) + parseFloat(b13_f) + parseFloat(b13_g) + parseFloat(b13_h) + parseFloat(b13_i) + parseFloat(b13_j) + parseFloat(b13_k) + parseFloat(b13_l) + parseFloat(b13_m) + parseFloat(b13_n) + parseFloat(b13_o) + parseFloat(b13_p) + parseFloat(b13_q) + parseFloat(b13_r) + parseFloat(b13_s) + parseFloat(b13_t) + parseFloat(b13_u));
            var hasil13 = total13.toFixed(2);
            $("#hasil13").val(hasil13);

            var hasil_brs13 = hasil13;

            var total_bm1 = (parseFloat(b13_a) / parseFloat(hasil_brs13));
            var hasil_bm1 = total_bm1.toFixed(9);
            $('#baris-a13').val(hasil_bm1);
            var total_bm2 = (parseFloat(b13_b) / parseFloat(hasil_brs13));
            var hasil_bm2 = total_bm2.toFixed(9);
            $('#baris-b13').val(hasil_bm2);
            var total_bm3 = (parseFloat(b13_c) / parseFloat(hasil_brs13));
            var hasil_bm3 = total_bm3.toFixed(9);
            $('#baris-c13 ').val(hasil_bm3);
            var total_bm4 = (parseFloat(b13_d) / parseFloat(hasil_brs13));
            var hasil_bm4 = total_bm4.toFixed(9);
            $('#baris-d13').val(hasil_bm4);
            var total_bm5 = (parseFloat(b13_e) / parseFloat(hasil_brs13));
            var hasil_bm5 = total_bm5.toFixed(9);
            $('#baris-e13').val(hasil_bm5);
            var total_bm6 = (parseFloat(b13_f) / parseFloat(hasil_brs13));
            var hasil_bm6 = total_bm6.toFixed(9);
            $('#baris-f13').val(hasil_bm6);
            var total_bm7 = (parseFloat(b13_g) / parseFloat(hasil_brs13));
            var hasil_bm7 = total_bm7.toFixed(9);
            $('#baris-g13').val(hasil_bm7);
            var total_bm8 = (parseFloat(b13_h) / parseFloat(hasil_brs13));
            var hasil_bm8 = total_bm8.toFixed(9);
            $('#baris-h13').val(hasil_bm8);
            var total_bm9 = (parseFloat(b13_i) / parseFloat(hasil_brs13));
            var hasil_bm9 = total_bm9.toFixed(9);
            $('#baris-i13').val(hasil_bm9);
            var total_bm10 = (parseFloat(b13_j) / parseFloat(hasil_brs13));
            var hasil_bm10 = total_bm10.toFixed(9);
            $('#baris-j13').val(hasil_bm10);
            var total_bm11 = (parseFloat(b13_k) / parseFloat(hasil_brs13));
            var hasil_bm11 = total_bm11.toFixed(9);
            $('#baris-k13').val(hasil_bm11);
            var total_bm12 = (parseFloat(b13_l) / parseFloat(hasil_brs13));
            var hasil_bm12 = total_bm12.toFixed(9);
            $('#baris-l13').val(hasil_bm12);
            var total_bm13 = (parseFloat(b13_m) / parseFloat(hasil_brs13));
            var hasil_bm13 = total_bm13.toFixed(9);
            $('#baris-m13').val(hasil_bm13);
            var total_bm14 = (parseFloat(b13_n) / parseFloat(hasil_brs13));
            var hasil_bm14 = total_bm14.toFixed(9);
            $('#baris-n13').val(hasil_bm14);
            var total_bm15 = (parseFloat(b13_o) / parseFloat(hasil_brs13));
            var hasil_bm15 = total_bm15.toFixed(9);
            $('#baris-o13').val(hasil_bm15);
            var total_bm16 = (parseFloat(b13_p) / parseFloat(hasil_brs13));
            var hasil_bm16 = total_bm16.toFixed(9);
            $('#baris-p13').val(hasil_bm16);
            var total_bm17 = (parseFloat(b13_q) / parseFloat(hasil_brs13));
            var hasil_bm17 = total_bm17.toFixed(9);
            $('#baris-q13').val(hasil_bm17);
            var total_bm18 = (parseFloat(b13_r) / parseFloat(hasil_brs13));
            var hasil_bm18 = total_bm18.toFixed(9);
            $('#baris-r13').val(hasil_bm18);
            var total_bm19 = (parseFloat(b13_s) / parseFloat(hasil_brs13));
            var hasil_bm19 = total_bm19.toFixed(9);
            $('#baris-s13').val(hasil_bm19);
            var total_bm20 = (parseFloat(b13_t) / parseFloat(hasil_brs13));
            var hasil_bm20 = total_bm20.toFixed(9);
            $('#baris-t13').val(hasil_bm20);
            var total_bm21 = (parseFloat(b13_u) / parseFloat(hasil_brs13));
            var hasil_bm21 = total_bm21.toFixed(9);
            $('#baris-u13 ').val(hasil_bm21);


            var b14_a = $(".brs14-a").val();
            var b14_b = $(".brs14-b").val();
            var b14_c = $(".brs14-c").val();
            var b14_d = $(".brs14-d").val();
            var b14_e = $(".brs14-e").val();
            var b14_f = $(".brs14-f").val();
            var b14_g = $(".brs14-g").val();
            var b14_h = $(".brs14-h").val();
            var b14_i = $(".brs14-i").val();
            var b14_j = $(".brs14-j").val();
            var b14_k = $(".brs14-k").val();
            var b14_l = $(".brs14-l").val();
            var b14_m = $(".brs14-m").val();
            var b14_n = $(".brs14-n").val();
            var b14_o = $(".brs14-o").val();
            var b14_p = $(".brs14-p").val();
            var b14_q = $(".brs14-q").val();
            var b14_r = $(".brs14-r").val();
            var b14_s = $(".brs14-s").val();
            var b14_t = $(".brs14-t").val();
            var b14_u = $(".brs14-u").val();

            var total14 = (parseFloat(b14_a) + parseFloat(b14_b) + parseFloat(b14_c) + parseFloat(b14_d) + parseFloat(b14_e) + parseFloat(b14_f) + parseFloat(b14_g) + parseFloat(b14_h) + parseFloat(b14_i) + parseFloat(b14_j) + parseFloat(b14_k) + parseFloat(b14_l) + parseFloat(b14_m) + parseFloat(b14_n) + parseFloat(b14_o) + parseFloat(b14_p) + parseFloat(b14_q) + parseFloat(b14_r) + parseFloat(b14_s) + parseFloat(b14_t) + parseFloat(b14_u));
            var hasil14 = total14.toFixed(2);
            $("#hasil14").val(hasil14);

            var hasil_brs14 = hasil14;

            var total_bn1 = (parseFloat(b14_a) / parseFloat(hasil_brs14));
            var hasil_bn1 = total_bn1.toFixed(9);
            $('#baris-a14').val(hasil_bn1);
            var total_bn2 = (parseFloat(b14_b) / parseFloat(hasil_brs14));
            var hasil_bn2 = total_bn2.toFixed(9);
            $('#baris-b14').val(hasil_bn2);
            var total_bn3 = (parseFloat(b14_c) / parseFloat(hasil_brs14));
            var hasil_bn3 = total_bn3.toFixed(9);
            $('#baris-c14').val(hasil_bn3);
            var total_bn4 = (parseFloat(b14_d) / parseFloat(hasil_brs14));
            var hasil_bn4 = total_bn4.toFixed(9);
            $('#baris-d14').val(hasil_bn4);
            var total_bn5 = (parseFloat(b14_e) / parseFloat(hasil_brs14));
            var hasil_bn5 = total_bn5.toFixed(9);
            $('#baris-e14').val(hasil_bn5);
            var total_bn6 = (parseFloat(b14_f) / parseFloat(hasil_brs14));
            var hasil_bn6 = total_bn6.toFixed(9);
            $('#baris-f14').val(hasil_bn6);
            var total_bn7 = (parseFloat(b14_g) / parseFloat(hasil_brs14));
            var hasil_bn7 = total_bn7.toFixed(9);
            $('#baris-g14').val(hasil_bn7);
            var total_bn8 = (parseFloat(b14_h) / parseFloat(hasil_brs14));
            var hasil_bn8 = total_bn8.toFixed(9);
            $('#baris-h14').val(hasil_bn8);
            var total_bn9 = (parseFloat(b14_i) / parseFloat(hasil_brs14));
            var hasil_bn9 = total_bn9.toFixed(9);
            $('#baris-i14').val(hasil_bn9);
            var total_bn10 = (parseFloat(b14_j) / parseFloat(hasil_brs14));
            var hasil_bn10 = total_bn10.toFixed(9);
            $('#baris-j14').val(hasil_bn10);
            var total_bn11 = (parseFloat(b14_k) / parseFloat(hasil_brs14));
            var hasil_bn11 = total_bn11.toFixed(9);
            $('#baris-k14').val(hasil_bn11);
            var total_bn12 = (parseFloat(b14_l) / parseFloat(hasil_brs14));
            var hasil_bn12 = total_bn12.toFixed(9);
            $('#baris-l14').val(hasil_bn12);
            var total_bn13 = (parseFloat(b14_m) / parseFloat(hasil_brs14));
            var hasil_bn13 = total_bn13.toFixed(9);
            $('#baris-m14').val(hasil_bn13);
            var total_bn14 = (parseFloat(b14_n) / parseFloat(hasil_brs14));
            var hasil_bn14 = total_bn14.toFixed(9);
            $('#baris-n14').val(hasil_bn14);
            var total_bn15 = (parseFloat(b14_o) / parseFloat(hasil_brs14));
            var hasil_bn15 = total_bn15.toFixed(9);
            $('#baris-o14').val(hasil_bn15);
            var total_bn16 = (parseFloat(b14_p) / parseFloat(hasil_brs14));
            var hasil_bn16 = total_bn16.toFixed(9);
            $('#baris-p14').val(hasil_bn16);
            var total_bn17 = (parseFloat(b14_q) / parseFloat(hasil_brs14));
            var hasil_bn17 = total_bn17.toFixed(9);
            $('#baris-q14').val(hasil_bn17);
            var total_bn18 = (parseFloat(b14_r) / parseFloat(hasil_brs14));
            var hasil_bn18 = total_bn18.toFixed(9);
            $('#baris-r14').val(hasil_bn18);
            var total_bn19 = (parseFloat(b14_s) / parseFloat(hasil_brs14));
            var hasil_bn19 = total_bn19.toFixed(9);
            $('#baris-s14').val(hasil_bn19);
            var total_bn20 = (parseFloat(b14_t) / parseFloat(hasil_brs14));
            var hasil_bn20 = total_bn20.toFixed(9);
            $('#baris-t14').val(hasil_bn20);
            var total_bn21 = (parseFloat(b14_u) / parseFloat(hasil_brs14));
            var hasil_bn21 = total_bn21.toFixed(9);
            $('#baris-u14').val(hasil_bn21);


            var b15_a = $(".brs15-a").val();
            var b15_b = $(".brs15-b").val();
            var b15_c = $(".brs15-c").val();
            var b15_d = $(".brs15-d").val();
            var b15_e = $(".brs15-e").val();
            var b15_f = $(".brs15-f").val();
            var b15_g = $(".brs15-g").val();
            var b15_h = $(".brs15-h").val();
            var b15_i = $(".brs15-i").val();
            var b15_j = $(".brs15-j").val();
            var b15_k = $(".brs15-k").val();
            var b15_l = $(".brs15-l").val();
            var b15_m = $(".brs15-m").val();
            var b15_n = $(".brs15-n").val();
            var b15_o = $(".brs15-o").val();
            var b15_p = $(".brs15-p").val();
            var b15_q = $(".brs15-q").val();
            var b15_r = $(".brs15-r").val();
            var b15_s = $(".brs15-s").val();
            var b15_t = $(".brs15-t").val();
            var b15_u = $(".brs15-u").val();

            var total15 = (parseFloat(b15_a) + parseFloat(b15_b) + parseFloat(b15_c) + parseFloat(b15_d) + parseFloat(b15_e) + parseFloat(b15_f) + parseFloat(b15_g) + parseFloat(b15_h) + parseFloat(b15_i) + parseFloat(b15_j) + parseFloat(b15_k) + parseFloat(b15_l) + parseFloat(b15_m) + parseFloat(b15_n) + parseFloat(b15_o) + parseFloat(b15_p) + parseFloat(b15_q) + parseFloat(b15_r) + parseFloat(b15_s) + parseFloat(b15_t) + parseFloat(b15_u));
            var hasil15 = total15.toFixed(2);
            $("#hasil15").val(hasil15);

            var hasil_brs115 = hasil15;

            var total_bo1 = (parseFloat(b15_a) / parseFloat(hasil_brs115));
            var hasil_bo1 = total_bo1.toFixed(9);
            $('#baris-a15').val(hasil_bo1);
            var total_bo2 = (parseFloat(b15_b) / parseFloat(hasil_brs115));
            var hasil_bo2 = total_bo2.toFixed(9);
            $('#baris-b15').val(hasil_bo2);
            var total_bo3 = (parseFloat(b15_c) / parseFloat(hasil_brs115));
            var hasil_bo3 = total_bo3.toFixed(9);
            $('#baris-c15 ').val(hasil_bo3);
            var total_bo4 = (parseFloat(b15_d) / parseFloat(hasil_brs115));
            var hasil_bo4 = total_bo4.toFixed(9);
            $('#baris-d15').val(hasil_bo4);
            var total_bo5 = (parseFloat(b15_e) / parseFloat(hasil_brs115));
            var hasil_bo5 = total_bo5.toFixed(9);
            $('#baris-e15').val(hasil_bo5);
            var total_bo6 = (parseFloat(b15_f) / parseFloat(hasil_brs115));
            var hasil_bo6 = total_bo6.toFixed(9);
            $('#baris-f15').val(hasil_bo6);
            var total_bo7 = (parseFloat(b15_g) / parseFloat(hasil_brs115));
            var hasil_bo7 = total_bo7.toFixed(9);
            $('#baris-g15').val(hasil_bo7);
            var total_bo8 = (parseFloat(b15_h) / parseFloat(hasil_brs115));
            var hasil_bo8 = total_bo8.toFixed(9);
            $('#baris-h15').val(hasil_bo8);
            var total_bo9 = (parseFloat(b15_i) / parseFloat(hasil_brs115));
            var hasil_bo9 = total_bo9.toFixed(9);
            $('#baris-i15').val(hasil_bo9);
            var total_bo10 = (parseFloat(b15_j) / parseFloat(hasil_brs115));
            var hasil_bo10 = total_bo10.toFixed(9);
            $('#baris-j15').val(hasil_bo10);
            var total_bo11 = (parseFloat(b15_k) / parseFloat(hasil_brs115));
            var hasil_bo11 = total_bo11.toFixed(9);
            $('#baris-k15').val(hasil_bo11);
            var total_bo12 = (parseFloat(b15_l) / parseFloat(hasil_brs115));
            var hasil_bo12 = total_bo12.toFixed(9);
            $('#baris-l15').val(hasil_bo12);
            var total_bo13 = (parseFloat(b15_m) / parseFloat(hasil_brs115));
            var hasil_bo13 = total_bo13.toFixed(9);
            $('#baris-m15').val(hasil_bo13);
            var total_bo14 = (parseFloat(b15_n) / parseFloat(hasil_brs115));
            var hasil_bo14 = total_bo14.toFixed(9);
            $('#baris-n15').val(hasil_bo14);
            var total_bo15 = (parseFloat(b15_o) / parseFloat(hasil_brs115));
            var hasil_bo15 = total_bo15.toFixed(9);
            $('#baris-o15').val(hasil_bo15);
            var total_bo16 = (parseFloat(b15_p) / parseFloat(hasil_brs115));
            var hasil_bo16 = total_bo16.toFixed(9);
            $('#baris-p15').val(hasil_bo16);
            var total_bo17 = (parseFloat(b15_q) / parseFloat(hasil_brs115));
            var hasil_bo17 = total_bo17.toFixed(9);
            $('#baris-q15').val(hasil_bo17);
            var total_bo18 = (parseFloat(b15_r) / parseFloat(hasil_brs115));
            var hasil_bo18 = total_bo18.toFixed(9);
            $('#baris-r15').val(hasil_bo18);
            var total_bo19 = (parseFloat(b15_s) / parseFloat(hasil_brs115));
            var hasil_bo19 = total_bo19.toFixed(9);
            $('#baris-s15').val(hasil_bo19);
            var total_bo20 = (parseFloat(b15_t) / parseFloat(hasil_brs115));
            var hasil_bo20 = total_bo20.toFixed(9);
            $('#baris-t15').val(hasil_bo20);
            var total_bo21 = (parseFloat(b15_u) / parseFloat(hasil_brs115));
            var hasil_bo21 = total_bo21.toFixed(9);
            $('#baris-u15 ').val(hasil_bo21);


            var b16_a = $(".brs16-a").val();
            var b16_b = $(".brs16-b").val();
            var b16_c = $(".brs16-c").val();
            var b16_d = $(".brs16-d").val();
            var b16_e = $(".brs16-e").val();
            var b16_f = $(".brs16-f").val();
            var b16_g = $(".brs16-g").val();
            var b16_h = $(".brs16-h").val();
            var b16_i = $(".brs16-i").val();
            var b16_j = $(".brs16-j").val();
            var b16_k = $(".brs16-k").val();
            var b16_l = $(".brs16-l").val();
            var b16_m = $(".brs16-m").val();
            var b16_n = $(".brs16-n").val();
            var b16_o = $(".brs16-o").val();
            var b16_p = $(".brs16-p").val();
            var b16_q = $(".brs16-q").val();
            var b16_r = $(".brs16-r").val();
            var b16_s = $(".brs16-s").val();
            var b16_t = $(".brs16-t").val();
            var b16_u = $(".brs16-u").val();

            var total16 = (parseFloat(b16_a) + parseFloat(b16_b) + parseFloat(b16_c) + parseFloat(b16_d) + parseFloat(b16_e) + parseFloat(b16_f) + parseFloat(b16_g) + parseFloat(b16_h) + parseFloat(b16_i) + parseFloat(b16_j) + parseFloat(b16_k) + parseFloat(b16_l) + parseFloat(b16_m) + parseFloat(b16_n) + parseFloat(b16_o) + parseFloat(b16_p) + parseFloat(b16_q) + parseFloat(b16_r) + parseFloat(b16_s) + parseFloat(b16_t) + parseFloat(b16_u));
            var hasil16 = total16.toFixed(2);
            $("#hasil16").val(hasil16);
            var hasil_brs16 = hasil16;

            var total_bp1 = (parseFloat(b16_a) / parseFloat(hasil_brs16));
            var hasil_bp1 = total_bp1.toFixed(9);
            $('#baris-a16').val(hasil_bp1);
            var total_bp2 = (parseFloat(b16_b) / parseFloat(hasil_brs16));
            var hasil_bp2 = total_bp2.toFixed(9);
            $('#baris-b16').val(hasil_bp2);
            var total_bp3 = (parseFloat(b16_c) / parseFloat(hasil_brs16));
            var hasil_bp3 = total_bp3.toFixed(9);
            $('#baris-c16').val(hasil_bp3);
            var total_bp4 = (parseFloat(b16_d) / parseFloat(hasil_brs16));
            var hasil_bp4 = total_bp4.toFixed(9);
            $('#baris-d16').val(hasil_bp4);
            var total_bp5 = (parseFloat(b16_e) / parseFloat(hasil_brs16));
            var hasil_bp5 = total_bp5.toFixed(9);
            $('#baris-e16').val(hasil_bp5);
            var total_bp6 = (parseFloat(b16_f) / parseFloat(hasil_brs16));
            var hasil_bp6 = total_bp6.toFixed(9);
            $('#baris-f16').val(hasil_bp6);
            var total_bp7 = (parseFloat(b16_g) / parseFloat(hasil_brs16));
            var hasil_bp7 = total_bp7.toFixed(9);
            $('#baris-g16').val(hasil_bp7);
            var total_bp8 = (parseFloat(b16_h) / parseFloat(hasil_brs16));
            var hasil_bp8 = total_bp8.toFixed(9);
            $('#baris-h16').val(hasil_bp8);
            var total_bp9 = (parseFloat(b16_i) / parseFloat(hasil_brs16));
            var hasil_bp9 = total_bp9.toFixed(9);
            $('#baris-i16').val(hasil_bp9);
            var total_bp10 = (parseFloat(b16_j) / parseFloat(hasil_brs16));
            var hasil_bp10 = total_bp10.toFixed(9);
            $('#baris-j16').val(hasil_bp10);
            var total_bp11 = (parseFloat(b16_k) / parseFloat(hasil_brs16));
            var hasil_bp11 = total_bp11.toFixed(9);
            $('#baris-k16').val(hasil_bp11);
            var total_bp12 = (parseFloat(b16_l) / parseFloat(hasil_brs16));
            var hasil_bp12 = total_bp12.toFixed(9);
            $('#baris-l16').val(hasil_bp12);
            var total_bp13 = (parseFloat(b16_m) / parseFloat(hasil_brs16));
            var hasil_bp13 = total_bp13.toFixed(9);
            $('#baris-m16').val(hasil_bp13);
            var total_bp14 = (parseFloat(b16_n) / parseFloat(hasil_brs16));
            var hasil_bp14 = total_bp14.toFixed(9);
            $('#baris-n16').val(hasil_bp14);
            var total_bp15 = (parseFloat(b16_o) / parseFloat(hasil_brs16));
            var hasil_bp15 = total_bp15.toFixed(9);
            $('#baris-o16').val(hasil_bp15);
            var total_bp16 = (parseFloat(b16_p) / parseFloat(hasil_brs16));
            var hasil_bp16 = total_bp16.toFixed(9);
            $('#baris-p16').val(hasil_bp16);
            var total_bp17 = (parseFloat(b16_q) / parseFloat(hasil_brs16));
            var hasil_bp17 = total_bp17.toFixed(9);
            $('#baris-q16').val(hasil_bp17);
            var total_bp18 = (parseFloat(b16_r) / parseFloat(hasil_brs16));
            var hasil_bp18 = total_bp18.toFixed(9);
            $('#baris-r16').val(hasil_bp18);
            var total_bp19 = (parseFloat(b16_s) / parseFloat(hasil_brs16));
            var hasil_bp19 = total_bp19.toFixed(9);
            $('#baris-s16').val(hasil_bp19);
            var total_bp20 = (parseFloat(b16_t) / parseFloat(hasil_brs16));
            var hasil_bp20 = total_bp20.toFixed(9);
            $('#baris-t16').val(hasil_bp20);
            var total_bp21 = (parseFloat(b16_u) / parseFloat(hasil_brs16));
            var hasil_bp21 = total_bp21.toFixed(9);
            $('#baris-u16 ').val(hasil_bp21);


            var b17_a = $(".brs17-a").val();
            var b17_b = $(".brs17-b").val();
            var b17_c = $(".brs17-c").val();
            var b17_d = $(".brs17-d").val();
            var b17_e = $(".brs17-e").val();
            var b17_f = $(".brs17-f").val();
            var b17_g = $(".brs17-g").val();
            var b17_h = $(".brs17-h").val();
            var b17_i = $(".brs17-i").val();
            var b17_j = $(".brs17-j").val();
            var b17_k = $(".brs17-k").val();
            var b17_l = $(".brs17-l").val();
            var b17_m = $(".brs17-m").val();
            var b17_n = $(".brs17-n").val();
            var b17_o = $(".brs17-o").val();
            var b17_p = $(".brs17-p").val();
            var b17_q = $(".brs17-q").val();
            var b17_r = $(".brs17-r").val();
            var b17_s = $(".brs17-s").val();
            var b17_t = $(".brs17-t").val();
            var b17_u = $(".brs17-u").val();

            var total17 = (parseFloat(b17_a) + parseFloat(b17_b) + parseFloat(b17_c) + parseFloat(b17_d) + parseFloat(b17_e) + parseFloat(b17_f) + parseFloat(b17_g) + parseFloat(b17_h) + parseFloat(b17_i) + parseFloat(b17_j) + parseFloat(b17_k) + parseFloat(b17_l) + parseFloat(b17_m) + parseFloat(b17_n) + parseFloat(b17_o) + parseFloat(b17_p) + parseFloat(b17_q) + parseFloat(b17_r) + parseFloat(b17_s) + parseFloat(b17_t) + parseFloat(b17_u));
            var hasil17 = total17.toFixed(2);
            $("#hasil17").val(hasil17);

            var hasil_brs17 = hasil17;

            var total_bq1 = (parseFloat(b17_a) / parseFloat(hasil_brs17));
            var hasil_bq1 = total_bq1.toFixed(9);
            $('#baris-a17').val(hasil_bq1);
            var total_bq2 = (parseFloat(b17_b) / parseFloat(hasil_brs17));
            var hasil_bq2 = total_bq2.toFixed(9);
            $('#baris-b17').val(hasil_bq2);
            var total_bq3 = (parseFloat(b17_c) / parseFloat(hasil_brs17));
            var hasil_bq3 = total_bq3.toFixed(9);
            $('#baris-c17 ').val(hasil_bq3);
            var total_bq4 = (parseFloat(b17_d) / parseFloat(hasil_brs17));
            var hasil_bq4 = total_bq4.toFixed(9);
            $('#baris-d17').val(hasil_bq4);
            var total_bq5 = (parseFloat(b17_e) / parseFloat(hasil_brs17));
            var hasil_bq5 = total_bq5.toFixed(9);
            $('#baris-e17').val(hasil_bq5);
            var total_bq6 = (parseFloat(b17_f) / parseFloat(hasil_brs17));
            var hasil_bq6 = total_bq6.toFixed(9);
            $('#baris-f17').val(hasil_bq6);
            var total_bq7 = (parseFloat(b17_g) / parseFloat(hasil_brs17));
            var hasil_bq7 = total_bq7.toFixed(9);
            $('#baris-g17').val(hasil_bq7);
            var total_bq8 = (parseFloat(b17_h) / parseFloat(hasil_brs17));
            var hasil_bq8 = total_bq8.toFixed(9);
            $('#baris-h17').val(hasil_bq8);
            var total_bq9 = (parseFloat(b17_i) / parseFloat(hasil_brs17));
            var hasil_bq9 = total_bq9.toFixed(9);
            $('#baris-i17').val(hasil_bq9);
            var total_bq10 = (parseFloat(b17_j) / parseFloat(hasil_brs17));
            var hasil_bq10 = total_bq10.toFixed(9);
            $('#baris-j17').val(hasil_bq10);
            var total_bq11 = (parseFloat(b17_k) / parseFloat(hasil_brs17));
            var hasil_bq11 = total_bq11.toFixed(9);
            $('#baris-k17').val(hasil_bq11);
            var total_bq12 = (parseFloat(b17_l) / parseFloat(hasil_brs17));
            var hasil_bq12 = total_bq12.toFixed(9);
            $('#baris-l17').val(hasil_bq12);
            var total_bq13 = (parseFloat(b17_m) / parseFloat(hasil_brs17));
            var hasil_bq13 = total_bq13.toFixed(9);
            $('#baris-m17').val(hasil_bq13);
            var total_bq14 = (parseFloat(b17_n) / parseFloat(hasil_brs17));
            var hasil_bq14 = total_bq14.toFixed(9);
            $('#baris-n17').val(hasil_bq14);
            var total_bq15 = (parseFloat(b17_o) / parseFloat(hasil_brs17));
            var hasil_bq15 = total_bq15.toFixed(9);
            $('#baris-o17').val(hasil_bq15);
            var total_bq16 = (parseFloat(b17_p) / parseFloat(hasil_brs17));
            var hasil_bq16 = total_bq16.toFixed(9);
            $('#baris-p17').val(hasil_bq16);
            var total_bq17 = (parseFloat(b17_q) / parseFloat(hasil_brs17));
            var hasil_bq17 = total_bq17.toFixed(9);
            $('#baris-q17').val(hasil_bq17);
            var total_bq18 = (parseFloat(b17_r) / parseFloat(hasil_brs17));
            var hasil_bq18 = total_bq18.toFixed(9);
            $('#baris-r17').val(hasil_bq18);
            var total_bq19 = (parseFloat(b17_s) / parseFloat(hasil_brs17));
            var hasil_bq19 = total_bq19.toFixed(9);
            $('#baris-s17').val(hasil_bq19);
            var total_bq20 = (parseFloat(b17_t) / parseFloat(hasil_brs17));
            var hasil_bq20 = total_bq20.toFixed(9);
            $('#baris-t17').val(hasil_bq20);
            var total_bq21 = (parseFloat(b17_u) / parseFloat(hasil_brs17));
            var hasil_bq21 = total_bq21.toFixed(9);
            $('#baris-u17').val(hasil_bq21);


            var b18_a = $(".brs18-a").val();
            var b18_b = $(".brs18-b").val();
            var b18_c = $(".brs18-c").val();
            var b18_d = $(".brs18-d").val();
            var b18_e = $(".brs18-e").val();
            var b18_f = $(".brs18-f").val();
            var b18_g = $(".brs18-g").val();
            var b18_h = $(".brs18-h").val();
            var b18_i = $(".brs18-i").val();
            var b18_j = $(".brs18-j").val();
            var b18_k = $(".brs18-k").val();
            var b18_l = $(".brs18-l").val();
            var b18_m = $(".brs18-m").val();
            var b18_n = $(".brs18-n").val();
            var b18_o = $(".brs18-o").val();
            var b18_p = $(".brs18-p").val();
            var b18_q = $(".brs18-q").val();
            var b18_r = $(".brs18-r").val();
            var b18_s = $(".brs18-s").val();
            var b18_t = $(".brs18-t").val();
            var b18_u = $(".brs18-u").val();

            var total18 = (parseFloat(b18_a) + parseFloat(b18_b) + parseFloat(b18_c) + parseFloat(b18_d) + parseFloat(b18_e) + parseFloat(b18_f) + parseFloat(b18_g) + parseFloat(b18_h) + parseFloat(b18_i) + parseFloat(b18_j) + parseFloat(b18_k) + parseFloat(b18_l) + parseFloat(b18_m) + parseFloat(b18_n) + parseFloat(b18_o) + parseFloat(b18_p) + parseFloat(b18_q) + parseFloat(b18_r) + parseFloat(b18_s) + parseFloat(b18_t) + parseFloat(b18_u));
            var hasil18 = total18.toFixed(2);
            $("#hasil18").val(hasil18);

            var hasil_brs18 = hasil18;

            var total_br1 = (parseFloat(b18_a) / parseFloat(hasil_brs18));
            var hasil_br1 = total_br1.toFixed(9);
            $('#baris-a18').val(hasil_br1);
            var total_br2 = (parseFloat(b18_b) / parseFloat(hasil_brs18));
            var hasil_br2 = total_br2.toFixed(9);
            $('#baris-b18').val(hasil_br2);
            var total_br3 = (parseFloat(b18_c) / parseFloat(hasil_brs18));
            var hasil_br3 = total_br3.toFixed(9);
            $('#baris-c18 ').val(hasil_br3);
            var total_br4 = (parseFloat(b18_d) / parseFloat(hasil_brs18));
            var hasil_br4 = total_br4.toFixed(9);
            $('#baris-d18').val(hasil_br4);
            var total_br5 = (parseFloat(b18_e) / parseFloat(hasil_brs18));
            var hasil_br5 = total_br5.toFixed(9);
            $('#baris-e18').val(hasil_br5);
            var total_br6 = (parseFloat(b18_f) / parseFloat(hasil_brs18));
            var hasil_br6 = total_br6.toFixed(9);
            $('#baris-f18').val(hasil_br6);
            var total_br7 = (parseFloat(b18_g) / parseFloat(hasil_brs18));
            var hasil_br7 = total_br7.toFixed(9);
            $('#baris-g18').val(hasil_br7);
            var total_br8 = (parseFloat(b18_h) / parseFloat(hasil_brs18));
            var hasil_br8 = total_br8.toFixed(9);
            $('#baris-h18').val(hasil_br8);
            var total_br9 = (parseFloat(b18_i) / parseFloat(hasil_brs18));
            var hasil_br9 = total_br9.toFixed(9);
            $('#baris-i18').val(hasil_br9);
            var total_br10 = (parseFloat(b18_j) / parseFloat(hasil_brs18));
            var hasil_br10 = total_br10.toFixed(9);
            $('#baris-j18').val(hasil_br10);
            var total_br11 = (parseFloat(b18_k) / parseFloat(hasil_brs18));
            var hasil_br11 = total_br11.toFixed(9);
            $('#baris-k18').val(hasil_br11);
            var total_br12 = (parseFloat(b18_l) / parseFloat(hasil_brs18));
            var hasil_br12 = total_br12.toFixed(9);
            $('#baris-l18').val(hasil_br12);
            var total_br13 = (parseFloat(b18_m) / parseFloat(hasil_brs18));
            var hasil_br13 = total_br13.toFixed(9);
            $('#baris-m18').val(hasil_br13);
            var total_br14 = (parseFloat(b18_n) / parseFloat(hasil_brs18));
            var hasil_br14 = total_br14.toFixed(9);
            $('#baris-n18').val(hasil_br14);
            var total_br15 = (parseFloat(b18_o) / parseFloat(hasil_brs18));
            var hasil_br15 = total_br15.toFixed(9);
            $('#baris-o18').val(hasil_br15);
            var total_br16 = (parseFloat(b18_p) / parseFloat(hasil_brs18));
            var hasil_br16 = total_br16.toFixed(9);
            $('#baris-p18').val(hasil_br16);
            var total_br17 = (parseFloat(b18_q) / parseFloat(hasil_brs18));
            var hasil_br17 = total_br17.toFixed(9);
            $('#baris-q18').val(hasil_br17);
            var total_br18 = (parseFloat(b18_r) / parseFloat(hasil_brs18));
            var hasil_br18 = total_br18.toFixed(9);
            $('#baris-r18').val(hasil_br18);
            var total_br19 = (parseFloat(b18_s) / parseFloat(hasil_brs18));
            var hasil_br19 = total_br19.toFixed(9);
            $('#baris-s18').val(hasil_br19);
            var total_br20 = (parseFloat(b18_t) / parseFloat(hasil_brs18));
            var hasil_br20 = total_br20.toFixed(9);
            $('#baris-t18').val(hasil_br20);
            var total_br21 = (parseFloat(b18_u) / parseFloat(hasil_brs18));
            var hasil_br21 = total_br21.toFixed(9);
            $('#baris-u18').val(hasil_br21);


            var b19_a = $(".brs19-a").val();
            var b19_b = $(".brs19-b").val();
            var b19_c = $(".brs19-c").val();
            var b19_d = $(".brs19-d").val();
            var b19_e = $(".brs19-e").val();
            var b19_f = $(".brs19-f").val();
            var b19_g = $(".brs19-g").val();
            var b19_h = $(".brs19-h").val();
            var b19_i = $(".brs19-i").val();
            var b19_j = $(".brs19-j").val();
            var b19_k = $(".brs19-k").val();
            var b19_l = $(".brs19-l").val();
            var b19_m = $(".brs19-m").val();
            var b19_n = $(".brs19-n").val();
            var b19_o = $(".brs19-o").val();
            var b19_p = $(".brs19-p").val();
            var b19_q = $(".brs19-q").val();
            var b19_r = $(".brs19-r").val();
            var b19_s = $(".brs19-s").val();
            var b19_t = $(".brs19-t").val();
            var b19_u = $(".brs19-u").val();

            var total19 = (parseFloat(b19_a) + parseFloat(b19_b) + parseFloat(b19_c) + parseFloat(b19_d) + parseFloat(b19_e) + parseFloat(b19_f) + parseFloat(b19_g) + parseFloat(b19_h) + parseFloat(b19_i) + parseFloat(b19_j) + parseFloat(b19_k) + parseFloat(b19_l) + parseFloat(b19_m) + parseFloat(b19_n) + parseFloat(b19_o) + parseFloat(b19_p) + parseFloat(b19_q) + parseFloat(b19_r) + parseFloat(b19_s) + parseFloat(b19_t) + parseFloat(b19_u));
            var hasil19 = total19.toFixed(2);
            $("#hasil19").val(hasil19);

            var hasil_brs19 = hasil19;

            var total_bs1 = (parseFloat(b19_a) / parseFloat(hasil_brs19));
            var hasil_bs1 = total_bs1.toFixed(9);
            $('#baris-a19').val(hasil_bs1);
            var total_bs2 = (parseFloat(b19_b) / parseFloat(hasil_brs19));
            var hasil_bs2 = total_bs2.toFixed(9);
            $('#baris-b19').val(hasil_bs2);
            var total_bs3 = (parseFloat(b19_c) / parseFloat(hasil_brs19));
            var hasil_bs3 = total_bs3.toFixed(9);
            $('#baris-c19 ').val(hasil_bs3);
            var total_bs4 = (parseFloat(b19_d) / parseFloat(hasil_brs19));
            var hasil_bs4 = total_bs4.toFixed(9);
            $('#baris-d19').val(hasil_bs4);
            var total_bs5 = (parseFloat(b19_e) / parseFloat(hasil_brs19));
            var hasil_bs5 = total_bs5.toFixed(9);
            $('#baris-e19').val(hasil_bs5);
            var total_bs6 = (parseFloat(b19_f) / parseFloat(hasil_brs19));
            var hasil_bs6 = total_bs6.toFixed(9);
            $('#baris-f19').val(hasil_bs6);
            var total_bs7 = (parseFloat(b19_g) / parseFloat(hasil_brs19));
            var hasil_bs7 = total_bs7.toFixed(9);
            $('#baris-g19').val(hasil_bs7);
            var total_bs8 = (parseFloat(b19_h) / parseFloat(hasil_brs19));
            var hasil_bs8 = total_bs8.toFixed(9);
            $('#baris-h19').val(hasil_bs8);
            var total_bs9 = (parseFloat(b19_i) / parseFloat(hasil_brs19));
            var hasil_bs9 = total_bs9.toFixed(9);
            $('#baris-i19').val(hasil_bs9);
            var total_bs10 = (parseFloat(b19_j) / parseFloat(hasil_brs19));
            var hasil_bs10 = total_bs10.toFixed(9);
            $('#baris-j19').val(hasil_bs10);
            var total_bs11 = (parseFloat(b19_k) / parseFloat(hasil_brs19));
            var hasil_bs11 = total_bs11.toFixed(9);
            $('#baris-k19').val(hasil_bs11);
            var total_bs12 = (parseFloat(b19_l) / parseFloat(hasil_brs19));
            var hasil_bs12 = total_bs12.toFixed(9);
            $('#baris-l19').val(hasil_bs12);
            var total_bs13 = (parseFloat(b19_m) / parseFloat(hasil_brs19));
            var hasil_bs13 = total_bs13.toFixed(9);
            $('#baris-m19').val(hasil_bs13);
            var total_bs14 = (parseFloat(b19_n) / parseFloat(hasil_brs19));
            var hasil_bs14 = total_bs14.toFixed(9);
            $('#baris-n19').val(hasil_bs14);
            var total_bs15 = (parseFloat(b19_o) / parseFloat(hasil_brs19));
            var hasil_bs15 = total_bs15.toFixed(9);
            $('#baris-o19').val(hasil_bs15);
            var total_bs16 = (parseFloat(b19_p) / parseFloat(hasil_brs19));
            var hasil_bs16 = total_bs16.toFixed(9);
            $('#baris-p19').val(hasil_bs16);
            var total_bs17 = (parseFloat(b19_q) / parseFloat(hasil_brs19));
            var hasil_bs17 = total_bs17.toFixed(9);
            $('#baris-q19').val(hasil_bs17);
            var total_bs18 = (parseFloat(b19_r) / parseFloat(hasil_brs19));
            var hasil_bs18 = total_bs18.toFixed(9);
            $('#baris-r19').val(hasil_bs18);
            var total_bs19 = (parseFloat(b19_s) / parseFloat(hasil_brs19));
            var hasil_bs19 = total_bs19.toFixed(9);
            $('#baris-s19').val(hasil_bs19);
            var total_bs20 = (parseFloat(b19_t) / parseFloat(hasil_brs19));
            var hasil_bs20 = total_bs20.toFixed(9);
            $('#baris-t19').val(hasil_bs20);
            var total_bs21 = (parseFloat(b19_u) / parseFloat(hasil_brs19));
            var hasil_bs21 = total_bs21.toFixed(9);
            $('#baris-u19').val(hasil_bs21);


            var b20_a = $(".brs20-a").val();
            var b20_b = $(".brs20-b").val();
            var b20_c = $(".brs20-c").val();
            var b20_d = $(".brs20-d").val();
            var b20_e = $(".brs20-e").val();
            var b20_f = $(".brs20-f").val();
            var b20_g = $(".brs20-g").val();
            var b20_h = $(".brs20-h").val();
            var b20_i = $(".brs20-i").val();
            var b20_j = $(".brs20-j").val();
            var b20_k = $(".brs20-k").val();
            var b20_l = $(".brs20-l").val();
            var b20_m = $(".brs20-m").val();
            var b20_n = $(".brs20-n").val();
            var b20_o = $(".brs20-o").val();
            var b20_p = $(".brs20-p").val();
            var b20_q = $(".brs20-q").val();
            var b20_r = $(".brs20-r").val();
            var b20_s = $(".brs20-s").val();
            var b20_t = $(".brs20-t").val();
            var b20_u = $(".brs20-u").val();

            var total20 = (parseFloat(b20_a) + parseFloat(b20_b) + parseFloat(b20_c) + parseFloat(b20_d) + parseFloat(b20_e) + parseFloat(b20_f) + parseFloat(b20_g) + parseFloat(b20_h) + parseFloat(b20_i) + parseFloat(b20_j) + parseFloat(b20_k) + parseFloat(b20_l) + parseFloat(b20_m) + parseFloat(b20_n) + parseFloat(b20_o) + parseFloat(b20_p) + parseFloat(b20_q) + parseFloat(b20_r) + parseFloat(b20_s) + parseFloat(b20_t) + parseFloat(b20_u));
            var hasil20 = total20.toFixed(2);
            $("#hasil20").val(hasil20);

            var hasil_brs20 = hasil20;

            var total_bt1 = (parseFloat(b20_a) / parseFloat(hasil_brs20));
            var hasil_bt1 = total_bt1.toFixed(9);
            $('#baris-a20').val(hasil_bt1);
            var total_bt2 = (parseFloat(b20_b) / parseFloat(hasil_brs20));
            var hasil_bt2 = total_bt2.toFixed(9);
            $('#baris-b20').val(hasil_bt2);
            var total_bt3 = (parseFloat(b20_c) / parseFloat(hasil_brs20));
            var hasil_bt3 = total_bt3.toFixed(9);
            $('#baris-c20 ').val(hasil_bt3);
            var total_bt4 = (parseFloat(b20_d) / parseFloat(hasil_brs20));
            var hasil_bt4 = total_bt4.toFixed(9);
            $('#baris-d20').val(hasil_bt4);
            var total_bt5 = (parseFloat(b20_e) / parseFloat(hasil_brs20));
            var hasil_bt5 = total_bt5.toFixed(9);
            $('#baris-e20').val(hasil_bt5);
            var total_bt6 = (parseFloat(b20_f) / parseFloat(hasil_brs20));
            var hasil_bt6 = total_bt6.toFixed(9);
            $('#baris-f20').val(hasil_bt6);
            var total_bt7 = (parseFloat(b20_g) / parseFloat(hasil_brs20));
            var hasil_bt7 = total_bt7.toFixed(9);
            $('#baris-g20').val(hasil_bt7);
            var total_bt8 = (parseFloat(b20_h) / parseFloat(hasil_brs20));
            var hasil_bt8 = total_bt8.toFixed(9);
            $('#baris-h20').val(hasil_bt8);
            var total_bt9 = (parseFloat(b20_i) / parseFloat(hasil_brs20));
            var hasil_bt9 = total_bt9.toFixed(9);
            $('#baris-i20').val(hasil_bt9);
            var total_bt10 = (parseFloat(b20_j) / parseFloat(hasil_brs20));
            var hasil_bt10 = total_bt10.toFixed(9);
            $('#baris-j20').val(hasil_bt10);
            var total_bt11 = (parseFloat(b20_k) / parseFloat(hasil_brs20));
            var hasil_bt11 = total_bt11.toFixed(9);
            $('#baris-k20').val(hasil_bt11);
            var total_bt12 = (parseFloat(b20_l) / parseFloat(hasil_brs20));
            var hasil_bt12 = total_bt12.toFixed(9);
            $('#baris-l20').val(hasil_bt12);
            var total_bt13 = (parseFloat(b20_m) / parseFloat(hasil_brs20));
            var hasil_bt13 = total_bt13.toFixed(9);
            $('#baris-m20').val(hasil_bt13);
            var total_bt14 = (parseFloat(b20_n) / parseFloat(hasil_brs20));
            var hasil_bt14 = total_bt14.toFixed(9);
            $('#baris-n20').val(hasil_bt14);
            var total_bt15 = (parseFloat(b20_o) / parseFloat(hasil_brs20));
            var hasil_bt15 = total_bt15.toFixed(9);
            $('#baris-o20').val(hasil_bt15);
            var total_bt16 = (parseFloat(b20_p) / parseFloat(hasil_brs20));
            var hasil_bt16 = total_bt16.toFixed(9);
            $('#baris-p20').val(hasil_bt16);
            var total_bt17 = (parseFloat(b20_q) / parseFloat(hasil_brs20));
            var hasil_bt17 = total_bt17.toFixed(9);
            $('#baris-q20').val(hasil_bt17);
            var total_bt18 = (parseFloat(b20_r) / parseFloat(hasil_brs20));
            var hasil_bt18 = total_bt18.toFixed(9);
            $('#baris-r20').val(hasil_bt18);
            var total_bt19 = (parseFloat(b20_s) / parseFloat(hasil_brs20));
            var hasil_bt19 = total_bt19.toFixed(9);
            $('#baris-s20').val(hasil_bt19);
            var total_bt20 = (parseFloat(b20_t) / parseFloat(hasil_brs20));
            var hasil_bt20 = total_bt20.toFixed(9);
            $('#baris-t20').val(hasil_bt20);
            var total_bt21 = (parseFloat(b20_u) / parseFloat(hasil_brs20));
            var hasil_bt21 = total_bt21.toFixed(9);
            $('#baris-u20').val(hasil_bt21);


            var b21_a = $(".brs21-a").val();
            var b21_b = $(".brs21-b").val();
            var b21_c = $(".brs21-c").val();
            var b21_d = $(".brs21-d").val();
            var b21_e = $(".brs21-e").val();
            var b21_f = $(".brs21-f").val();
            var b21_g = $(".brs21-g").val();
            var b21_h = $(".brs21-h").val();
            var b21_i = $(".brs21-i").val();
            var b21_j = $(".brs21-j").val();
            var b21_k = $(".brs21-k").val();
            var b21_l = $(".brs21-l").val();
            var b21_m = $(".brs21-m").val();
            var b21_n = $(".brs21-n").val();
            var b21_o = $(".brs21-o").val();
            var b21_p = $(".brs21-p").val();
            var b21_q = $(".brs21-q").val();
            var b21_r = $(".brs21-r").val();
            var b21_s = $(".brs21-s").val();
            var b21_t = $(".brs21-t").val();
            var b21_u = $(".brs21-u").val();

            var total21 = (parseFloat(b21_a) + parseFloat(b21_b) + parseFloat(b21_c) + parseFloat(b21_d) + parseFloat(b21_e) + parseFloat(b21_f) + parseFloat(b21_g) + parseFloat(b21_h) + parseFloat(b21_i) + parseFloat(b21_j) + parseFloat(b21_k) + parseFloat(b21_l) + parseFloat(b21_m) + parseFloat(b21_n) + parseFloat(b21_o) + parseFloat(b21_p) + parseFloat(b21_q) + parseFloat(b21_r) + parseFloat(b21_s) + parseFloat(b21_t) + parseFloat(b21_u));
            var hasil21 = total21.toFixed(2);
            $("#hasil21").val(hasil21);

            var hasil_brs21 = hasil21;

            var total_bu1 = (parseFloat(b21_a) / parseFloat(hasil_brs21));
            var hasil_bu1 = total_bu1.toFixed(9);
            $('#baris-a21').val(hasil_bu1);
            var total_bu2 = (parseFloat(b21_b) / parseFloat(hasil_brs21));
            var hasil_bu2 = total_bu2.toFixed(9);
            $('#baris-b21').val(hasil_bu2);
            var total_bu3 = (parseFloat(b21_c) / parseFloat(hasil_brs21));
            var hasil_bu3 = total_bu3.toFixed(9);
            $('#baris-c21 ').val(hasil_bu3);
            var total_bu4 = (parseFloat(b21_d) / parseFloat(hasil_brs21));
            var hasil_bu4 = total_bu4.toFixed(9);
            $('#baris-d21').val(hasil_bu4);
            var total_bu5 = (parseFloat(b21_e) / parseFloat(hasil_brs21));
            var hasil_bu5 = total_bu5.toFixed(9);
            $('#baris-e21').val(hasil_bu5);
            var total_bu6 = (parseFloat(b21_f) / parseFloat(hasil_brs21));
            var hasil_bu6 = total_bu6.toFixed(9);
            $('#baris-f21').val(hasil_bu6);
            var total_bu7 = (parseFloat(b21_g) / parseFloat(hasil_brs21));
            var hasil_bu7 = total_bu7.toFixed(9);
            $('#baris-g21').val(hasil_bu7);
            var total_bu8 = (parseFloat(b21_h) / parseFloat(hasil_brs21));
            var hasil_bu8 = total_bu8.toFixed(9);
            $('#baris-h21').val(hasil_bu8);
            var total_bu9 = (parseFloat(b21_i) / parseFloat(hasil_brs21));
            var hasil_bu9 = total_bu9.toFixed(9);
            $('#baris-i21').val(hasil_bu9);
            var total_bu10 = (parseFloat(b21_j) / parseFloat(hasil_brs21));
            var hasil_bu10 = total_bu10.toFixed(9);
            $('#baris-j21').val(hasil_bu10);
            var total_bu11 = (parseFloat(b21_k) / parseFloat(hasil_brs21));
            var hasil_bu11 = total_bu11.toFixed(9);
            $('#baris-k21').val(hasil_bu11);
            var total_bu12 = (parseFloat(b21_l) / parseFloat(hasil_brs21));
            var hasil_bu12 = total_bu12.toFixed(9);
            $('#baris-l21').val(hasil_bu12);
            var total_bu13 = (parseFloat(b21_m) / parseFloat(hasil_brs21));
            var hasil_bu13 = total_bu13.toFixed(9);
            $('#baris-m21').val(hasil_bu13);
            var total_bu14 = (parseFloat(b21_n) / parseFloat(hasil_brs21));
            var hasil_bu14 = total_bu14.toFixed(9);
            $('#baris-n21').val(hasil_bu14);
            var total_bu15 = (parseFloat(b21_o) / parseFloat(hasil_brs21));
            var hasil_bu15 = total_bu15.toFixed(9);
            $('#baris-o21').val(hasil_bu15);
            var total_bu16 = (parseFloat(b21_p) / parseFloat(hasil_brs21));
            var hasil_bu16 = total_bu16.toFixed(9);
            $('#baris-p21').val(hasil_bu16);
            var total_bu17 = (parseFloat(b21_q) / parseFloat(hasil_brs21));
            var hasil_bu17 = total_bu17.toFixed(9);
            $('#baris-q21').val(hasil_bu17);
            var total_bu18 = (parseFloat(b21_r) / parseFloat(hasil_brs21));
            var hasil_bu18 = total_bu18.toFixed(9);
            $('#baris-r21').val(hasil_bu18);
            var total_bu19 = (parseFloat(b21_s) / parseFloat(hasil_brs21));
            var hasil_bu19 = total_bu19.toFixed(9);
            $('#baris-s21').val(hasil_bu19);
            var total_bu20 = (parseFloat(b21_t) / parseFloat(hasil_brs21));
            var hasil_bu20 = total_bu20.toFixed(9);
            $('#baris-t21').val(hasil_bu20);
            var total_bu21 = (parseFloat(b21_u) / parseFloat(hasil_brs21));
            var hasil_bu21 = total_bu21.toFixed(9);
            $('#baris-u21').val(hasil_bu21);

            //eigen 1
            var jml_ba1 = hasil_ba1;
            var jml_bb1 = hasil_bb1;
            var jml_bc1 = hasil_bc1;
            var jml_bd1 = hasil_bd1;
            var jml_be1 = hasil_be1;
            var jml_bf1 = hasil_bf1;
            var jml_bg1 = hasil_bg1;
            var jml_bh1 = hasil_bh1;
            var jml_bi1 = hasil_bi1;
            var jml_bj1 = hasil_bj1;
            var jml_bk1 = hasil_bk1;
            var jml_bl1 = hasil_bl1;
            var jml_bm1 = hasil_bm1;
            var jml_bn1 = hasil_bn1;
            var jml_bo1 = hasil_bo1;
            var jml_bp1 = hasil_bp1;
            var jml_bq1 = hasil_bq1;
            var jml_br1 = hasil_br1;
            var jml_bs1 = hasil_bs1;
            var jml_bt1 = hasil_bt1;
            var jml_bu1 = hasil_bu1;

            var eigen1 = ((parseFloat(jml_ba1) + parseFloat(jml_bb1) + parseFloat(jml_bc1) + parseFloat(jml_bd1) + parseFloat(jml_be1) + parseFloat(jml_bf1) + parseFloat(jml_bg1) + parseFloat(jml_bh1) + parseFloat(jml_bi1) + parseFloat(jml_bj1) + parseFloat(jml_bk1) + parseFloat(jml_bl1) + parseFloat(jml_bm1) + parseFloat(jml_bn1) + parseFloat(jml_bo1) + parseFloat(jml_bp1) + parseFloat(jml_bq1) + parseFloat(jml_br1) + parseFloat(jml_bs1) + parseFloat(jml_bt1) + parseFloat(jml_bu1)) / 21);
            var hsl_eigen1 = eigen1.toFixed(3);
            $('#eigen1').val(hsl_eigen1);
            
            //eigen2
            var jml_ba2 = hasil_ba2;
            var jml_bb2 = hasil_bb2;
            var jml_bc2 = hasil_bc2;
            var jml_bd2 = hasil_bd2;
            var jml_be2 = hasil_be2;
            var jml_bf2 = hasil_bf2;
            var jml_bg2 = hasil_bg2;
            var jml_bh2 = hasil_bh2;
            var jml_bi2 = hasil_bi2;
            var jml_bj2 = hasil_bj2;
            var jml_bk2 = hasil_bk2;
            var jml_bl2 = hasil_bl2;
            var jml_bm2 = hasil_bm2;
            var jml_bn2 = hasil_bn2;
            var jml_bo2 = hasil_bo2;
            var jml_bp2 = hasil_bp2;
            var jml_bq2 = hasil_bq2;
            var jml_br2 = hasil_br2;
            var jml_bs2 = hasil_bs2;
            var jml_bt2 = hasil_bt2;
            var jml_bu2 = hasil_bu2;

            var eigen2 = ((parseFloat(jml_ba2) + parseFloat(jml_bb2) + parseFloat(jml_bc2) + parseFloat(jml_bd2) + parseFloat(jml_be2) + parseFloat(jml_bf2) + parseFloat(jml_bg2) + parseFloat(jml_bh2) + parseFloat(jml_bi2) + parseFloat(jml_bj2) + parseFloat(jml_bk2) + parseFloat(jml_bl2) + parseFloat(jml_bm2) + parseFloat(jml_bn2) + parseFloat(jml_bo2) + parseFloat(jml_bp2) + parseFloat(jml_bq2) + parseFloat(jml_br2) + parseFloat(jml_bs2) + parseFloat(jml_bt2) + parseFloat(jml_bu2)) / 21);
            var hsl_eigen2 = eigen2.toFixed(3);
            $('#eigen2').val(hsl_eigen2);

            //eigen3
            var jml_ba3 = hasil_ba3;
            var jml_bb3 = hasil_bb3;
            var jml_bc3 = hasil_bc3;
            var jml_bd3 = hasil_bd3;
            var jml_be3 = hasil_be3;
            var jml_bf3 = hasil_bf3;
            var jml_bg3 = hasil_bg3;
            var jml_bh3 = hasil_bh3;
            var jml_bi3 = hasil_bi3;
            var jml_bj3 = hasil_bj3;
            var jml_bk3 = hasil_bk3;
            var jml_bl3 = hasil_bl3;
            var jml_bm3 = hasil_bm3;
            var jml_bn3 = hasil_bn3;
            var jml_bo3 = hasil_bo3;
            var jml_bp3 = hasil_bp3;
            var jml_bq3 = hasil_bq3;
            var jml_br3 = hasil_br3;
            var jml_bs3 = hasil_bs3;
            var jml_bt3 = hasil_bt3;
            var jml_bu3 = hasil_bu3;

            var eigen3 = ((parseFloat(jml_ba3) + parseFloat(jml_bb3) + parseFloat(jml_bc3) + parseFloat(jml_bd3) + parseFloat(jml_be3) + parseFloat(jml_bf3) + parseFloat(jml_bg3) + parseFloat(jml_bh3) + parseFloat(jml_bi3) + parseFloat(jml_bj3) + parseFloat(jml_bk3) + parseFloat(jml_bl3) + parseFloat(jml_bm3) + parseFloat(jml_bn3) + parseFloat(jml_bo3) + parseFloat(jml_bp3) + parseFloat(jml_bq3) + parseFloat(jml_br3) + parseFloat(jml_bs3) + parseFloat(jml_bt3) + parseFloat(jml_bu3)) / 21);
            var hsl_eigen3 = eigen3.toFixed(3);
            $('#eigen3').val(hsl_eigen3);

            //eigen4
            var jml_ba4 = hasil_ba4;
            var jml_bb4 = hasil_bb4;
            var jml_bc4 = hasil_bc4;
            var jml_bd4 = hasil_bd4;
            var jml_be4 = hasil_be4;
            var jml_bf4 = hasil_bf4;
            var jml_bg4 = hasil_bg4;
            var jml_bh4 = hasil_bh4;
            var jml_bi4 = hasil_bi4;
            var jml_bj4 = hasil_bj4;
            var jml_bk4 = hasil_bk4;
            var jml_bl4 = hasil_bl4;
            var jml_bm4 = hasil_bm4;
            var jml_bn4 = hasil_bn4;
            var jml_bo4 = hasil_bo4;
            var jml_bp4 = hasil_bp4;
            var jml_bq4 = hasil_bq4;
            var jml_br4 = hasil_br4;
            var jml_bs4 = hasil_bs4;
            var jml_bt4 = hasil_bt4;
            var jml_bu4 = hasil_bu4;

            var eigen4 = ((parseFloat(jml_ba4) + parseFloat(jml_bb4) + parseFloat(jml_bc4) + parseFloat(jml_bd4) + parseFloat(jml_be4) + parseFloat(jml_bf4) + parseFloat(jml_bg4) + parseFloat(jml_bh4) + parseFloat(jml_bi4) + parseFloat(jml_bj4) + parseFloat(jml_bk4) + parseFloat(jml_bl4) + parseFloat(jml_bm4) + parseFloat(jml_bn4) + parseFloat(jml_bo4) + parseFloat(jml_bp4) + parseFloat(jml_bq4) + parseFloat(jml_br4) + parseFloat(jml_bs4) + parseFloat(jml_bt4) + parseFloat(jml_bu4)) / 21);
            var hsl_eigen4 = eigen4.toFixed(3);
            $('#eigen4').val(hsl_eigen4);

            //eigen5
            var jml_ba5 = hasil_ba5;
            var jml_bb5 = hasil_bb5;
            var jml_bc5 = hasil_bc5;
            var jml_bd5 = hasil_bd5;
            var jml_be5 = hasil_be5;
            var jml_bf5 = hasil_bf5;
            var jml_bg5 = hasil_bg5;
            var jml_bh5 = hasil_bh5;
            var jml_bi5 = hasil_bi5;
            var jml_bj5 = hasil_bj5;
            var jml_bk5 = hasil_bk5;
            var jml_bl5 = hasil_bl5;
            var jml_bm5 = hasil_bm5;
            var jml_bn5 = hasil_bn5;
            var jml_bo5 = hasil_bo5;
            var jml_bp5 = hasil_bp5;
            var jml_bq5 = hasil_bq5;
            var jml_br5 = hasil_br5;
            var jml_bs5 = hasil_bs5;
            var jml_bt5 = hasil_bt5;
            var jml_bu5 = hasil_bu5;

            var eigen5 = ((parseFloat(jml_ba5) + parseFloat(jml_bb5) + parseFloat(jml_bc5) + parseFloat(jml_bd5) + parseFloat(jml_be5) + parseFloat(jml_bf5) + parseFloat(jml_bg5) + parseFloat(jml_bh5) + parseFloat(jml_bi5) + parseFloat(jml_bj5) + parseFloat(jml_bk5) + parseFloat(jml_bl5) + parseFloat(jml_bm5) + parseFloat(jml_bn5) + parseFloat(jml_bo5) + parseFloat(jml_bp5) + parseFloat(jml_bq5) + parseFloat(jml_br5) + parseFloat(jml_bs5) + parseFloat(jml_bt5) + parseFloat(jml_bu5)) / 21);
            var hsl_eigen5 = eigen5.toFixed(3);
            $('#eigen5').val(hsl_eigen5);

            //eigen6
            var jml_ba6 = hasil_ba6;
            var jml_bb6 = hasil_bb6;
            var jml_bc6 = hasil_bc6;
            var jml_bd6 = hasil_bd6;
            var jml_be6 = hasil_be6;
            var jml_bf6 = hasil_bf6;
            var jml_bg6 = hasil_bg6;
            var jml_bh6 = hasil_bh6;
            var jml_bi6 = hasil_bi6;
            var jml_bj6 = hasil_bj6;
            var jml_bk6 = hasil_bk6;
            var jml_bl6 = hasil_bl6;
            var jml_bm6 = hasil_bm6;
            var jml_bn6 = hasil_bn6;
            var jml_bo6 = hasil_bo6;
            var jml_bp6 = hasil_bp6;
            var jml_bq6 = hasil_bq6;
            var jml_br6 = hasil_br6;
            var jml_bs6 = hasil_bs6;
            var jml_bt6 = hasil_bt6;
            var jml_bu6 = hasil_bu6;

            var eigen6 = ((parseFloat(jml_ba6) + parseFloat(jml_bb6) + parseFloat(jml_bc6) + parseFloat(jml_bd6) + parseFloat(jml_be6) + parseFloat(jml_bf6) + parseFloat(jml_bg6) + parseFloat(jml_bh6) + parseFloat(jml_bi6) + parseFloat(jml_bj6) + parseFloat(jml_bk6) + parseFloat(jml_bl6) + parseFloat(jml_bm6) + parseFloat(jml_bn6) + parseFloat(jml_bo6) + parseFloat(jml_bp6) + parseFloat(jml_bq6) + parseFloat(jml_br6) + parseFloat(jml_bs6) + parseFloat(jml_bt6) + parseFloat(jml_bu6)) / 21);
            var hsl_eigen6 = eigen6.toFixed(3);
            $('#eigen6').val(hsl_eigen6);

            //eigen7
            var jml_ba7 = hasil_ba7;
            var jml_bb7 = hasil_bb7;
            var jml_bc7 = hasil_bc7;
            var jml_bd7 = hasil_bd7;
            var jml_be7 = hasil_be7;
            var jml_bf7 = hasil_bf7;
            var jml_bg7 = hasil_bg7;
            var jml_bh7 = hasil_bh7;
            var jml_bi7 = hasil_bi7;
            var jml_bj7 = hasil_bj7;
            var jml_bk7 = hasil_bk7;
            var jml_bl7 = hasil_bl7;
            var jml_bm7 = hasil_bm7;
            var jml_bn7 = hasil_bn7;
            var jml_bo7 = hasil_bo7;
            var jml_bp7 = hasil_bp7;
            var jml_bq7 = hasil_bq7;
            var jml_br7 = hasil_br7;
            var jml_bs7 = hasil_bs7;
            var jml_bt7 = hasil_bt7;
            var jml_bu7 = hasil_bu7;

            var eigen7 = ((parseFloat(jml_ba7) + parseFloat(jml_bb7) + parseFloat(jml_bc7) + parseFloat(jml_bd7) + parseFloat(jml_be7) + parseFloat(jml_bf7) + parseFloat(jml_bg7) + parseFloat(jml_bh7) + parseFloat(jml_bi7) + parseFloat(jml_bj7) + parseFloat(jml_bk7) + parseFloat(jml_bl7) + parseFloat(jml_bm7) + parseFloat(jml_bn7) + parseFloat(jml_bo7) + parseFloat(jml_bp7) + parseFloat(jml_bq7) + parseFloat(jml_br7) + parseFloat(jml_bs7) + parseFloat(jml_bt7) + parseFloat(jml_bu7)) / 21);
            var hsl_eigen7 = eigen7.toFixed(3);
            $('#eigen7').val(hsl_eigen7);

            //eigen8
            var jml_ba8 = hasil_ba8;
            var jml_bb8 = hasil_bb8;
            var jml_bc8 = hasil_bc8;
            var jml_bd8 = hasil_bd8;
            var jml_be8 = hasil_be8;
            var jml_bf8 = hasil_bf8;
            var jml_bg8 = hasil_bg8;
            var jml_bh8 = hasil_bh8;
            var jml_bi8 = hasil_bi8;
            var jml_bj8 = hasil_bj8;
            var jml_bk8 = hasil_bk8;
            var jml_bl8 = hasil_bl8;
            var jml_bm8 = hasil_bm8;
            var jml_bn8 = hasil_bn8;
            var jml_bo8 = hasil_bo8;
            var jml_bp8 = hasil_bp8;
            var jml_bq8 = hasil_bq8;
            var jml_br8 = hasil_br8;
            var jml_bs8 = hasil_bs8;
            var jml_bt8 = hasil_bt8;
            var jml_bu8 = hasil_bu8;

            var eigen8 = ((parseFloat(jml_ba8) + parseFloat(jml_bb8) + parseFloat(jml_bc8) + parseFloat(jml_bd8) + parseFloat(jml_be8) + parseFloat(jml_bf8) + parseFloat(jml_bg8) + parseFloat(jml_bh8) + parseFloat(jml_bi8) + parseFloat(jml_bj8) + parseFloat(jml_bk8) + parseFloat(jml_bl8) + parseFloat(jml_bm8) + parseFloat(jml_bn8) + parseFloat(jml_bo8) + parseFloat(jml_bp8) + parseFloat(jml_bq8) + parseFloat(jml_br8) + parseFloat(jml_bs8) + parseFloat(jml_bt8) + parseFloat(jml_bu8)) / 21);
            var hsl_eigen8 = eigen8.toFixed(3);
            $('#eigen8').val(hsl_eigen8);

            //eigen9
            var jml_ba9 = hasil_ba9;
            var jml_bb9 = hasil_bb9;
            var jml_bc9 = hasil_bc9;
            var jml_bd9 = hasil_bd9;
            var jml_be9 = hasil_be9;
            var jml_bf9 = hasil_bf9;
            var jml_bg9 = hasil_bg9;
            var jml_bh9 = hasil_bh9;
            var jml_bi9 = hasil_bi9;
            var jml_bj9 = hasil_bj9;
            var jml_bk9 = hasil_bk9;
            var jml_bl9 = hasil_bl9;
            var jml_bm9 = hasil_bm9;
            var jml_bn9 = hasil_bn9;
            var jml_bo9 = hasil_bo9;
            var jml_bp9 = hasil_bp9;
            var jml_bq9 = hasil_bq9;
            var jml_br9 = hasil_br9;
            var jml_bs9 = hasil_bs9;
            var jml_bt9 = hasil_bt9;
            var jml_bu9 = hasil_bu9;

            var eigen9 = ((parseFloat(jml_ba9) + parseFloat(jml_bb9) + parseFloat(jml_bc9) + parseFloat(jml_bd9) + parseFloat(jml_be9) + parseFloat(jml_bf9) + parseFloat(jml_bg9) + parseFloat(jml_bh9) + parseFloat(jml_bi9) + parseFloat(jml_bj9) + parseFloat(jml_bk9) + parseFloat(jml_bl9) + parseFloat(jml_bm9) + parseFloat(jml_bn9) + parseFloat(jml_bo9) + parseFloat(jml_bp9) + parseFloat(jml_bq9) + parseFloat(jml_br9) + parseFloat(jml_bs9) + parseFloat(jml_bt9) + parseFloat(jml_bu9)) / 21);
            var hsl_eigen9 = eigen9.toFixed(3);
            $('#eigen9').val(hsl_eigen9);

            //eigen10
            var jml_ba10 = hasil_ba10;
            var jml_bb10 = hasil_bb10;
            var jml_bc10 = hasil_bc10;
            var jml_bd10 = hasil_bd10;
            var jml_be10 = hasil_be10;
            var jml_bf10 = hasil_bf10;
            var jml_bg10 = hasil_bg10;
            var jml_bh10 = hasil_bh10;
            var jml_bi10 = hasil_bi10;
            var jml_bj10 = hasil_bj10;
            var jml_bk10 = hasil_bk10;
            var jml_bl10 = hasil_bl10;
            var jml_bm10 = hasil_bm10;
            var jml_bn10 = hasil_bn10;
            var jml_bo10 = hasil_bo10;
            var jml_bp10 = hasil_bp10;
            var jml_bq10 = hasil_bq10;
            var jml_br10 = hasil_br10;
            var jml_bs10 = hasil_bs10;
            var jml_bt10 = hasil_bt10;
            var jml_bu10 = hasil_bu10;

            var eigen10 = ((parseFloat(jml_ba10) + parseFloat(jml_bb10) + parseFloat(jml_bc10) + parseFloat(jml_bd10) + parseFloat(jml_be10) + parseFloat(jml_bf10) + parseFloat(jml_bg10) + parseFloat(jml_bh10) + parseFloat(jml_bi10) + parseFloat(jml_bj10) + parseFloat(jml_bk10) + parseFloat(jml_bl10) + parseFloat(jml_bm10) + parseFloat(jml_bn10) + parseFloat(jml_bo10) + parseFloat(jml_bp10) + parseFloat(jml_bq10) + parseFloat(jml_br10) + parseFloat(jml_bs10) + parseFloat(jml_bt10) + parseFloat(jml_bu10)) / 21);
            var hsl_eigen10 = eigen10.toFixed(3);
            $('#eigen10').val(hsl_eigen10);

            //eigen11
            var jml_ba11 = hasil_ba11;
            var jml_bb11 = hasil_bb11;
            var jml_bc11 = hasil_bc11;
            var jml_bd11 = hasil_bd11;
            var jml_be11 = hasil_be11;
            var jml_bf11 = hasil_bf11;
            var jml_bg11 = hasil_bg11;
            var jml_bh11 = hasil_bh11;
            var jml_bi11 = hasil_bi11;
            var jml_bj11 = hasil_bj11;
            var jml_bk11 = hasil_bk11;
            var jml_bl11 = hasil_bl11;
            var jml_bm11 = hasil_bm11;
            var jml_bn11 = hasil_bn11;
            var jml_bo11 = hasil_bo11;
            var jml_bp11 = hasil_bp11;
            var jml_bq11 = hasil_bq11;
            var jml_br11 = hasil_br11;
            var jml_bs11 = hasil_bs11;
            var jml_bt11 = hasil_bt11;
            var jml_bu11 = hasil_bu11;

            var eigen11 = ((parseFloat(jml_ba11) + parseFloat(jml_bb11) + parseFloat(jml_bc11) + parseFloat(jml_bd11) + parseFloat(jml_be11) + parseFloat(jml_bf11) + parseFloat(jml_bg11) + parseFloat(jml_bh11) + parseFloat(jml_bi11) + parseFloat(jml_bj11) + parseFloat(jml_bk11) + parseFloat(jml_bl11) + parseFloat(jml_bm11) + parseFloat(jml_bn11) + parseFloat(jml_bo11) + parseFloat(jml_bp11) + parseFloat(jml_bq11) + parseFloat(jml_br11) + parseFloat(jml_bs11) + parseFloat(jml_bt11) + parseFloat(jml_bu11)) / 21);
            var hsl_eigen11 = eigen11.toFixed(3);
            $('#eigen11').val(hsl_eigen11);

            //eigen12
            var jml_ba12 = hasil_ba12;
            var jml_bb12 = hasil_bb12;
            var jml_bc12 = hasil_bc12;
            var jml_bd12 = hasil_bd12;
            var jml_be12 = hasil_be12;
            var jml_bf12 = hasil_bf12;
            var jml_bg12 = hasil_bg12;
            var jml_bh12 = hasil_bh12;
            var jml_bi12 = hasil_bi12;
            var jml_bj12 = hasil_bj12;
            var jml_bk12 = hasil_bk12;
            var jml_bl12 = hasil_bl12;
            var jml_bm12 = hasil_bm12;
            var jml_bn12 = hasil_bn12;
            var jml_bo12 = hasil_bo12;
            var jml_bp12 = hasil_bp12;
            var jml_bq12 = hasil_bq12;
            var jml_br12 = hasil_br12;
            var jml_bs12 = hasil_bs12;
            var jml_bt12 = hasil_bt12;
            var jml_bu12 = hasil_bu12;

            var eigen12 = ((parseFloat(jml_ba12) + parseFloat(jml_bb12) + parseFloat(jml_bc12) + parseFloat(jml_bd12) + parseFloat(jml_be12) + parseFloat(jml_bf12) + parseFloat(jml_bg12) + parseFloat(jml_bh12) + parseFloat(jml_bi12) + parseFloat(jml_bj12) + parseFloat(jml_bk12) + parseFloat(jml_bl12) + parseFloat(jml_bm12) + parseFloat(jml_bn12) + parseFloat(jml_bo12) + parseFloat(jml_bp12) + parseFloat(jml_bq12) + parseFloat(jml_br12) + parseFloat(jml_bs12) + parseFloat(jml_bt12) + parseFloat(jml_bu12)) / 21);
            var hsl_eigen12 = eigen12.toFixed(3);
            $('#eigen12').val(hsl_eigen12);

            //eigen12
            var jml_ba13 = hasil_ba13;
            var jml_bb13 = hasil_bb13;
            var jml_bc13 = hasil_bc13;
            var jml_bd13 = hasil_bd13;
            var jml_be13 = hasil_be13;
            var jml_bf13 = hasil_bf13;
            var jml_bg13 = hasil_bg13;
            var jml_bh13 = hasil_bh13;
            var jml_bi13 = hasil_bi13;
            var jml_bj13 = hasil_bj13;
            var jml_bk13 = hasil_bk13;
            var jml_bl13 = hasil_bl13;
            var jml_bm13 = hasil_bm13;
            var jml_bn13 = hasil_bn13;
            var jml_bo13 = hasil_bo13;
            var jml_bp13 = hasil_bp13;
            var jml_bq13 = hasil_bq13;
            var jml_br13 = hasil_br13;
            var jml_bs13 = hasil_bs13;
            var jml_bt13 = hasil_bt13;
            var jml_bu13 = hasil_bu13;

            var eigen13 = ((parseFloat(jml_ba13) + parseFloat(jml_bb13) + parseFloat(jml_bc13) + parseFloat(jml_bd13) + parseFloat(jml_be13) + parseFloat(jml_bf13) + parseFloat(jml_bg13) + parseFloat(jml_bh13) + parseFloat(jml_bi13) + parseFloat(jml_bj13) + parseFloat(jml_bk13) + parseFloat(jml_bl13) + parseFloat(jml_bm13) + parseFloat(jml_bn13) + parseFloat(jml_bo13) + parseFloat(jml_bp13) + parseFloat(jml_bq13) + parseFloat(jml_br13) + parseFloat(jml_bs13) + parseFloat(jml_bt13) + parseFloat(jml_bu13)) / 21);
            var hsl_eigen13 = eigen13.toFixed(3);
            $('#eigen13').val(hsl_eigen13);

            //eigen14
            var jml_ba14 = hasil_ba14;
            var jml_bb14 = hasil_bb14;
            var jml_bc14 = hasil_bc14;
            var jml_bd14 = hasil_bd14;
            var jml_be14 = hasil_be14;
            var jml_bf14 = hasil_bf14;
            var jml_bg14 = hasil_bg14;
            var jml_bh14 = hasil_bh14;
            var jml_bi14 = hasil_bi14;
            var jml_bj14 = hasil_bj14;
            var jml_bk14 = hasil_bk14;
            var jml_bl14 = hasil_bl14;
            var jml_bm14 = hasil_bm14;
            var jml_bn14 = hasil_bn14;
            var jml_bo14 = hasil_bo14;
            var jml_bp14 = hasil_bp14;
            var jml_bq14 = hasil_bq14;
            var jml_br14 = hasil_br14;
            var jml_bs14 = hasil_bs14;
            var jml_bt14 = hasil_bt14;
            var jml_bu14 = hasil_bu14;

            var eigen14 = ((parseFloat(jml_ba14) + parseFloat(jml_bb14) + parseFloat(jml_bc14) + parseFloat(jml_bd14) + parseFloat(jml_be14) + parseFloat(jml_bf14) + parseFloat(jml_bg14) + parseFloat(jml_bh14) + parseFloat(jml_bi14) + parseFloat(jml_bj14) + parseFloat(jml_bk14) + parseFloat(jml_bl14) + parseFloat(jml_bm14) + parseFloat(jml_bn14) + parseFloat(jml_bo14) + parseFloat(jml_bp14) + parseFloat(jml_bq14) + parseFloat(jml_br14) + parseFloat(jml_bs14) + parseFloat(jml_bt14) + parseFloat(jml_bu14)) / 21);
            var hsl_eigen14 = eigen14.toFixed(3);
            $('#eigen14').val(hsl_eigen14);

            //eigen15
            var jml_ba15 = hasil_ba15;
            var jml_bb15 = hasil_bb15;
            var jml_bc15 = hasil_bc15;
            var jml_bd15 = hasil_bd15;
            var jml_be15 = hasil_be15;
            var jml_bf15 = hasil_bf15;
            var jml_bg15 = hasil_bg15;
            var jml_bh15 = hasil_bh15;
            var jml_bi15 = hasil_bi15;
            var jml_bj15 = hasil_bj15;
            var jml_bk15 = hasil_bk15;
            var jml_bl15 = hasil_bl15;
            var jml_bm15 = hasil_bm15;
            var jml_bn15 = hasil_bn15;
            var jml_bo15 = hasil_bo15;
            var jml_bp15 = hasil_bp15;
            var jml_bq15 = hasil_bq15;
            var jml_br15 = hasil_br15;
            var jml_bs15 = hasil_bs15;
            var jml_bt15 = hasil_bt15;
            var jml_bu15 = hasil_bu15;

            var eigen15 = ((parseFloat(jml_ba15) + parseFloat(jml_bb15) + parseFloat(jml_bc15) + parseFloat(jml_bd15) + parseFloat(jml_be15) + parseFloat(jml_bf15) + parseFloat(jml_bg15) + parseFloat(jml_bh15) + parseFloat(jml_bi15) + parseFloat(jml_bj15) + parseFloat(jml_bk15) + parseFloat(jml_bl15) + parseFloat(jml_bm15) + parseFloat(jml_bn15) + parseFloat(jml_bo15) + parseFloat(jml_bp15) + parseFloat(jml_bq15) + parseFloat(jml_br15) + parseFloat(jml_bs15) + parseFloat(jml_bt15) + parseFloat(jml_bu15)) / 21);
            var hsl_eigen15 = eigen15.toFixed(3);
            $('#eigen15').val(hsl_eigen15);

            //eigen16
            var jml_ba16 = hasil_ba16;
            var jml_bb16 = hasil_bb16;
            var jml_bc16 = hasil_bc16;
            var jml_bd16 = hasil_bd16;
            var jml_be16 = hasil_be16;
            var jml_bf16 = hasil_bf16;
            var jml_bg16 = hasil_bg16;
            var jml_bh16 = hasil_bh16;
            var jml_bi16 = hasil_bi16;
            var jml_bj16 = hasil_bj16;
            var jml_bk16 = hasil_bk16;
            var jml_bl16 = hasil_bl16;
            var jml_bm16 = hasil_bm16;
            var jml_bn16 = hasil_bn16;
            var jml_bo16 = hasil_bo16;
            var jml_bp16 = hasil_bp16;
            var jml_bq16 = hasil_bq16;
            var jml_br16 = hasil_br16;
            var jml_bs16 = hasil_bs16;
            var jml_bt16 = hasil_bt16;
            var jml_bu16 = hasil_bu16;

            var eigen16 = ((parseFloat(jml_ba16) + parseFloat(jml_bb16) + parseFloat(jml_bc16) + parseFloat(jml_bd16) + parseFloat(jml_be16) + parseFloat(jml_bf16) + parseFloat(jml_bg16) + parseFloat(jml_bh16) + parseFloat(jml_bi16) + parseFloat(jml_bj16) + parseFloat(jml_bk16) + parseFloat(jml_bl16) + parseFloat(jml_bm16) + parseFloat(jml_bn16) + parseFloat(jml_bo16) + parseFloat(jml_bp16) + parseFloat(jml_bq16) + parseFloat(jml_br16) + parseFloat(jml_bs16) + parseFloat(jml_bt16) + parseFloat(jml_bu16)) / 21);
            var hsl_eigen16 = eigen16.toFixed(3);
            $('#eigen16').val(hsl_eigen16);

            //eigen17
            var jml_ba17 = hasil_ba17;
            var jml_bb17 = hasil_bb17;
            var jml_bc17 = hasil_bc17;
            var jml_bd17 = hasil_bd17;
            var jml_be17 = hasil_be17;
            var jml_bf17 = hasil_bf17;
            var jml_bg17 = hasil_bg17;
            var jml_bh17 = hasil_bh17;
            var jml_bi17 = hasil_bi17;
            var jml_bj17 = hasil_bj17;
            var jml_bk17 = hasil_bk17;
            var jml_bl17 = hasil_bl17;
            var jml_bm17 = hasil_bm17;
            var jml_bn17 = hasil_bn17;
            var jml_bo17 = hasil_bo17;
            var jml_bp17 = hasil_bp17;
            var jml_bq17 = hasil_bq17;
            var jml_br17 = hasil_br17;
            var jml_bs17 = hasil_bs17;
            var jml_bt17 = hasil_bt17;
            var jml_bu17 = hasil_bu17;

            var eigen17 = ((parseFloat(jml_ba17) + parseFloat(jml_bb17) + parseFloat(jml_bc17) + parseFloat(jml_bd17) + parseFloat(jml_be17) + parseFloat(jml_bf17) + parseFloat(jml_bg17) + parseFloat(jml_bh17) + parseFloat(jml_bi17) + parseFloat(jml_bj17) + parseFloat(jml_bk17) + parseFloat(jml_bl17) + parseFloat(jml_bm17) + parseFloat(jml_bn17) + parseFloat(jml_bo17) + parseFloat(jml_bp17) + parseFloat(jml_bq17) + parseFloat(jml_br17) + parseFloat(jml_bs17) + parseFloat(jml_bt17) + parseFloat(jml_bu17)) / 21);
            var hsl_eigen17 = eigen17.toFixed(3);
            $('#eigen17').val(hsl_eigen17);

            //eigen18
            var jml_ba18 = hasil_ba18;
            var jml_bb18 = hasil_bb18;
            var jml_bc18 = hasil_bc18;
            var jml_bd18 = hasil_bd18;
            var jml_be18 = hasil_be18;
            var jml_bf18 = hasil_bf18;
            var jml_bg18 = hasil_bg18;
            var jml_bh18 = hasil_bh18;
            var jml_bi18 = hasil_bi18;
            var jml_bj18 = hasil_bj18;
            var jml_bk18 = hasil_bk18;
            var jml_bl18 = hasil_bl18;
            var jml_bm18 = hasil_bm18;
            var jml_bn18 = hasil_bn18;
            var jml_bo18 = hasil_bo18;
            var jml_bp18 = hasil_bp18;
            var jml_bq18 = hasil_bq18;
            var jml_br18 = hasil_br18;
            var jml_bs18 = hasil_bs18;
            var jml_bt18 = hasil_bt18;
            var jml_bu18 = hasil_bu18;

            var eigen18 = ((parseFloat(jml_ba18) + parseFloat(jml_bb18) + parseFloat(jml_bc18) + parseFloat(jml_bd18) + parseFloat(jml_be18) + parseFloat(jml_bf18) + parseFloat(jml_bg18) + parseFloat(jml_bh18) + parseFloat(jml_bi18) + parseFloat(jml_bj18) + parseFloat(jml_bk18) + parseFloat(jml_bl18) + parseFloat(jml_bm18) + parseFloat(jml_bn18) + parseFloat(jml_bo18) + parseFloat(jml_bp18) + parseFloat(jml_bq18) + parseFloat(jml_br18) + parseFloat(jml_bs18) + parseFloat(jml_bt18) + parseFloat(jml_bu18)) / 21);
            var hsl_eigen18 = eigen18.toFixed(3);
            $('#eigen18').val(hsl_eigen18);

            //eigen19
            var jml_ba19 = hasil_ba19;
            var jml_bb19 = hasil_bb19;
            var jml_bc19 = hasil_bc19;
            var jml_bd19 = hasil_bd19;
            var jml_be19 = hasil_be19;
            var jml_bf19 = hasil_bf19;
            var jml_bg19 = hasil_bg19;
            var jml_bh19 = hasil_bh19;
            var jml_bi19 = hasil_bi19;
            var jml_bj19 = hasil_bj19;
            var jml_bk19 = hasil_bk19;
            var jml_bl19 = hasil_bl19;
            var jml_bm19 = hasil_bm19;
            var jml_bn19 = hasil_bn19;
            var jml_bo19 = hasil_bo19;
            var jml_bp19 = hasil_bp19;
            var jml_bq19 = hasil_bq19;
            var jml_br19 = hasil_br19;
            var jml_bs19 = hasil_bs19;
            var jml_bt19 = hasil_bt19;
            var jml_bu19 = hasil_bu19;

            var eigen19 = ((parseFloat(jml_ba19) + parseFloat(jml_bb19) + parseFloat(jml_bc19) + parseFloat(jml_bd19) + parseFloat(jml_be19) + parseFloat(jml_bf19) + parseFloat(jml_bg19) + parseFloat(jml_bh19) + parseFloat(jml_bi19) + parseFloat(jml_bj19) + parseFloat(jml_bk19) + parseFloat(jml_bl19) + parseFloat(jml_bm19) + parseFloat(jml_bn19) + parseFloat(jml_bo19) + parseFloat(jml_bp19) + parseFloat(jml_bq19) + parseFloat(jml_br19) + parseFloat(jml_bs19) + parseFloat(jml_bt19) + parseFloat(jml_bu19)) / 21);
            var hsl_eigen19 = eigen19.toFixed(3);
            $('#eigen19').val(hsl_eigen19);

            //eigen20
            var jml_ba20 = hasil_ba20;
            var jml_bb20 = hasil_bb20;
            var jml_bc20 = hasil_bc20;
            var jml_bd20 = hasil_bd20;
            var jml_be20 = hasil_be20;
            var jml_bf20 = hasil_bf20;
            var jml_bg20 = hasil_bg20;
            var jml_bh20 = hasil_bh20;
            var jml_bi20 = hasil_bi20;
            var jml_bj20 = hasil_bj20;
            var jml_bk20 = hasil_bk20;
            var jml_bl20 = hasil_bl20;
            var jml_bm20 = hasil_bm20;
            var jml_bn20 = hasil_bn20;
            var jml_bo20 = hasil_bo20;
            var jml_bp20 = hasil_bp20;
            var jml_bq20 = hasil_bq20;
            var jml_br20 = hasil_br20;
            var jml_bs20 = hasil_bs20;
            var jml_bt20 = hasil_bt20;
            var jml_bu20 = hasil_bu20;

            var eigen20 = ((parseFloat(jml_ba20) + parseFloat(jml_bb20) + parseFloat(jml_bc20) + parseFloat(jml_bd20) + parseFloat(jml_be20) + parseFloat(jml_bf20) + parseFloat(jml_bg20) + parseFloat(jml_bh20) + parseFloat(jml_bi20) + parseFloat(jml_bj20) + parseFloat(jml_bk20) + parseFloat(jml_bl20) + parseFloat(jml_bm20) + parseFloat(jml_bn20) + parseFloat(jml_bo20) + parseFloat(jml_bp20) + parseFloat(jml_bq20) + parseFloat(jml_br20) + parseFloat(jml_bs20) + parseFloat(jml_bt20) + parseFloat(jml_bu20)) / 21);
            var hsl_eigen20 = eigen20.toFixed(3);
            $('#eigen20').val(hsl_eigen20);

            //eigen21
            var jml_ba21 = hasil_ba21;
            var jml_bb21 = hasil_bb21;
            var jml_bc21 = hasil_bc21;
            var jml_bd21 = hasil_bd21;
            var jml_be21 = hasil_be21;
            var jml_bf21 = hasil_bf21;
            var jml_bg21 = hasil_bg21;
            var jml_bh21 = hasil_bh21;
            var jml_bi21 = hasil_bi21;
            var jml_bj21 = hasil_bj21;
            var jml_bk21 = hasil_bk21;
            var jml_bl21 = hasil_bl21;
            var jml_bm21 = hasil_bm21;
            var jml_bn21 = hasil_bn21;
            var jml_bo21 = hasil_bo21;
            var jml_bp21 = hasil_bp21;
            var jml_bq21 = hasil_bq21;
            var jml_br21 = hasil_br21;
            var jml_bs21 = hasil_bs21;
            var jml_bt21 = hasil_bt21;
            var jml_bu21 = hasil_bu21;

            var eigen21 = ((parseFloat(jml_ba21) + parseFloat(jml_bb21) + parseFloat(jml_bc21) + parseFloat(jml_bd21) + parseFloat(jml_be21) + parseFloat(jml_bf21) + parseFloat(jml_bg21) + parseFloat(jml_bh21) + parseFloat(jml_bi21) + parseFloat(jml_bj21) + parseFloat(jml_bk21) + parseFloat(jml_bl21) + parseFloat(jml_bm21) + parseFloat(jml_bn21) + parseFloat(jml_bo21) + parseFloat(jml_bp21) + parseFloat(jml_bq21) + parseFloat(jml_br21) + parseFloat(jml_bs21) + parseFloat(jml_bt21) + parseFloat(jml_bu21)) / 21);
            var hsl_eigen21 = eigen21.toFixed(3);
            $('#eigen21').val(hsl_eigen21);

            var eigenn1 = hsl_eigen1;
            var eigenn2 = hsl_eigen2;
            var eigenn3 = hsl_eigen3;
            var eigenn4 = hsl_eigen4;
            var eigenn5 = hsl_eigen5;
            var eigenn6 = hsl_eigen6;
            var eigenn7 = hsl_eigen7;
            var eigenn8 = hsl_eigen8;
            var eigenn9 = hsl_eigen9;
            var eigenn10 = hsl_eigen10;
            var eigenn11 = hsl_eigen11;
            var eigenn12 = hsl_eigen12;
            var eigenn13 = hsl_eigen13;
            var eigenn14 = hsl_eigen14;
            var eigenn15 = hsl_eigen15;
            var eigenn16 = hsl_eigen16;
            var eigenn17 = hsl_eigen17;
            var eigenn18 = hsl_eigen18;
            var eigenn19 = hsl_eigen19;
            var eigenn20 = hsl_eigen20;
            var eigenn21 = hsl_eigen21;

            var jumlah_eigen = (parseFloat(eigenn1) + parseFloat(eigenn2) + parseFloat(eigenn3) + parseFloat(eigenn4) + parseFloat(eigenn5) + parseFloat(eigenn6) + parseFloat(eigenn7) + parseFloat(eigenn8) + parseFloat(eigenn9) + parseFloat(eigenn10) + parseFloat(eigenn11) + parseFloat(eigenn12) + parseFloat(eigenn13) + parseFloat(eigenn14) + parseFloat(eigenn15) + parseFloat(eigenn16) + parseFloat(eigenn17) + parseFloat(eigenn18) + parseFloat(eigenn19) + parseFloat(eigenn20) + parseFloat(eigenn21));
            var totaleigen = jumlah_eigen.toFixed(1);
            $('#jumlaheigen').val(totaleigen);
        });
    });
</script>