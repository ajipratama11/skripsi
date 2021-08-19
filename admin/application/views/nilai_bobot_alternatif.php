<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Nilai Minimum Jurusan
        </h1>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="dataset" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Alternatif</th>
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
                            <th>Konvensional</th>
                            <th>Linguistik</th>
                            <th>Matematikal</th>
                            <th>Musikal</th>
                            <th>Kinestik</th>
                            <th>Spartial</th>
                            <th>Intrapersonal</th>
                            <th>Interpersonal</th>
                            <th>Natrularistik</th>
                            <th>Eksistensial</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datanilai as $a) { ?>
                            <tr>
                                <td><?= $a->nama_alternatif ?></td>
                                <td><?= $a->kimia ?></td>
                                <td><?= $a->biologi ?></td>
                                <td><?= $a->fisika ?></td>
                                <td><?= $a->matematika ?></td>
                                <td><?= $a->bhs_inggris ?></td>
                                <td><?= $a->bhs_indonesia ?></td>
                                <td><?= $a->realistis ?></td>
                                <td><?= $a->intelektual ?></td>
                                <td><?= $a->artistik ?></td>
                                <td><?= $a->sosial ?></td>
                                <td><?= $a->enterprise ?></td>
                                <td><?= $a->konvensional ?></td>
                                <td><?= $a->linguistik ?></td>
                                <td><?= $a->matematikal ?></td>
                                <td><?= $a->musikal ?></td>
                                <td><?= $a->kinestik ?></td>
                                <td><?= $a->spartial ?></td>
                                <td><?= $a->intrapersonal ?></td>
                                <td><?= $a->interpersonal ?></td>
                                <td><?= $a->natrularistik ?></td>
                                <td><?= $a->eksistensial ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <a href="<?= base_url('Admin/hasil_nilai_bobot') ?>" class="btn btn-success">Hasil Nilai Bobot</a>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Kimia</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.0" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Biologi</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="3.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.43" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.43" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.43" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.29" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.43" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.14" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.14" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.14" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.43" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.14" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" value="3.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="0.43" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="0.43" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="0.43" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.29" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="0.43" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="" value="2.33" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" value="7.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" value="2.33" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="3.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Fisika</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="5" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="5" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="2.25" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" value="1.33" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" value="8.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" value="8.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00"style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="3.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Matematika</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="5" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="5" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="2.25" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.75" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" value="1.33" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" value="8.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" value="8.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00"style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="3.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Bhs Inggris</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="5" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="5" readonly></td>
                            <td><input type="text" id="" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" value="6.00" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.75" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="2.25" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" value="0.75" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="0.17" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.13" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika"  value="0.38" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.13" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" value="8.00" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" value="1.33" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" value="8.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="3.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" value="1.00" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Bhs Indonesia</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="4" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;" readonly></td>
                            <td><input type="text" id="" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.0" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" value="0.33" style="width: 50px; margin-left: -19;"></td>
                            <td><input type="text" id="kimiafisika" value="1.00" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Realistis</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="3" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Intelektual</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="3" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Artistik</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="2" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Sosial</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="3" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Enterprise</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="3" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Konvensional</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="4" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="3" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="2" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="4" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Linguistik</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="2" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Matematikal</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="2" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Musikal</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="1" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Kinestik</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="3" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="3" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Spartial</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="2" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Intrapersonal</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="1" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Interpersonal</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="1" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Natrularistik</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="2" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="1" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="2" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Eksistensial</th>
                            <th>Bobot</th>
                            <th>Teknik Sipil <br><input type="text" id="kimia1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Informatika <br><input type="text" id="biologi1" style="width: 50px;" value="1" readonly></th>
                            <th>Teknik Industri <br><input type="text" id="fisika1" style="width: 50px;" value="1" readonly></th>
                            <th><br></th>
                            <th><br>Normalisasi</th>
                            <th><br></th>
                            <th><br>Total</th>
                            <th><br>Eigen Vaktor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Teknik Sipil</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Informatika</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td><input type="text" id="biologifisika" style="width: 50px; margin-left: -19;"></td>
                        </tr>
                        <tr>
                            <td>Teknik Industri</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="1" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px; margin-left: -19;" readonly></td>
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
            'autoWidth': false
        });
    });

    $(document).ready(function() {
        $('#dataset2').DataTable({
            'paging': false,
            'lengthChange': true,
            "scrollX": true,
            'searching': false,
            'autoWidth': false
        });
    });

    $(document).ready(function() {
        $("#kimia1, #kimia2").each(function() {
            var kimia1 = $("#kimia1").val();
            var kimia2 = $("#kimia2").val();
            var biologi1 = $("#biologi1").val();
            var biologi2 = $("#biologi2").val();
            var fisika1 = $("#fisika1").val();
            var fisika2 = $("#fisika2").val();

            var kimiakimia = parseInt(kimia1) / parseInt(kimia2);
            $("#kimiakimia").val(kimiakimia);
            var kimiabiologi = parseInt(kimia2) / parseInt(biologi1);
            $("#kimiabiologi").val(kimiabiologi);
            var biologibiologi = parseInt(biologi1) / parseInt(biologi2);
            $("#biologibiologi").val(biologibiologi);
            var fisikafisika = parseInt(fisika1) / parseInt(fisika2);
            $("#fisikafisika").val(fisikafisika);
        });
    });
</script>