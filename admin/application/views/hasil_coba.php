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
                        <tr>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['kimia'] ?></td>
                            <td><?= $a['biologi'] ?></td>
                            <td><?= $a['fisika'] ?></td>
                            <td><?= $a['matematika'] ?></td>
                            <td><?= $a['bhs_inggris'] ?></td>
                            <td><?= $a['bhs_indonesia'] ?></td>
                            <td><?= $a['realistis'] ?></td>
                            <td><?= $a['intelektual'] ?></td>
                            <td><?= $a['artistik'] ?></td>
                            <td><?= $a['sosial'] ?></td>
                            <td><?= $a['enterprise'] ?></td>
                            <td><?= $a['konvensional'] ?></td>
                            <td><?= $a['linguistik'] ?></td>
                            <td><?= $a['matematikal'] ?></td>
                            <td><?= $a['musikal'] ?></td>
                            <td><?= $a['kinestik'] ?></td>
                            <td><?= $a['spartial'] ?></td>
                            <td><?= $a['intrapersonal'] ?></td>
                            <td><?= $a['interpersonal'] ?></td>
                            <td><?= $a['natrularistik'] ?></td>
                            <td><?= $a['eksistensial'] ?></td>
                            <td>
                                <!-- <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editAlternatif<?= $a->id_nilai_alternatif ?>"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                    <a href="<?= base_url('Admin/coba_konversi/' . $a->id_nilai_alternatif) ?>" class="btn btn-xs btn-primary">Coba</a>
                                    <button type="submit" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> Konversi</button>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusAlternatif<?= $a->id_nilai_alternatif ?>"><i class="fa fa-trash"></i> Hapus</button> -->
                            </td>
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
                            <th>Kriteria</th>
                            <th>Bobot</th>
                            <th>Kimia <br><input type="text" id="kimia1" style="width: 50px;" value="<?= $bobot1['kimia'] ?>" readonly></th>
                            <th>Biologi <br><input type="text" id="biologi1" style="width: 50px;" value="<?= $bobot1['biologi'] ?>" readonly></th>
                            <th>Fisika <br><input type="text" id="fisika1" style="width: 50px;" value="<?= $bobot1['fisika'] ?>" readonly></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kimia</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="<?= $bobot2['kimia'] ?>" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><input type="text" id="kimiabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                        </tr>
                        <tr>
                            <td>biologi</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="<?= $bobot2['biologi'] ?>" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                        </tr>
                        <tr>
                            <td>fisika</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="<?= $bobot2['fisika'] ?>" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
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