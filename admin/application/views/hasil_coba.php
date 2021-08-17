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
                            <form action="<?= base_url('Admin/simpan_bobot') ?>" method="POST">
                                <td><input type="hidden" name="id_alternatif" value="<?= $a['id_alternatif'] ?>"><?= $a['nama'] ?></td>
                                <td><input type="hidden" name="kimia" value="<?= $a['kimia'] ?>"><?= $a['kimia'] ?></td>
                                <td><input type="hidden" name="biologi" value="<?= $a['biologi'] ?>"><?= $a['biologi'] ?></td>
                                <td><input type="hidden" name="fisika" value="<?= $a['fisika'] ?>"><?= $a['fisika'] ?></td>
                                <td><input type="hidden" name="matematika" value="<?= $a['matematika'] ?>"><?= $a['matematika'] ?></td>
                                <td><input type="hidden" name="bhs_inggris" value="<?= $a['bhs_inggris'] ?>"><?= $a['bhs_inggris'] ?></td>
                                <td><input type="hidden" name="bhs_indonesia" value="<?= $a['bhs_indonesia'] ?>"><?= $a['bhs_indonesia'] ?></td>
                                <td><input type="hidden" name="realistis" value="<?= $a['realistis'] ?>"><?= $a['realistis'] ?></td>
                                <td><input type="hidden" name="intelektual" value="<?= $a['intelektual'] ?>"><?= $a['intelektual'] ?></td>
                                <td><input type="hidden" name="artistik" value="<?= $a['artistik'] ?>"><?= $a['artistik'] ?></td>
                                <td><input type="hidden" name="sosial" value="<?= $a['sosial'] ?>"><?= $a['sosial'] ?></td>
                                <td><input type="hidden" name="enterprise" value="<?= $a['enterprise'] ?>"><?= $a['enterprise'] ?></td>
                                <td><input type="hidden" name="konvensional" value="<?= $a['konvensional'] ?>"><?= $a['konvensional'] ?></td>
                                <td><input type="hidden" name="linguistik" value="<?= $a['linguistik'] ?>"><?= $a['linguistik'] ?></td>
                                <td><input type="hidden" name="matematikal" value="<?= $a['matematikal'] ?>"><?= $a['matematikal'] ?></td>
                                <td><input type="hidden" name="musikal" value="<?= $a['musikal'] ?>"><?= $a['musikal'] ?></td>
                                <td><input type="hidden" name="kinestik" value="<?= $a['kinestik'] ?>"><?= $a['kinestik'] ?></td>
                                <td><input type="hidden" name="spartial" value="<?= $a['spartial'] ?>"><?= $a['spartial'] ?></td>
                                <td><input type="hidden" name="intrapersonal" value="<?= $a['intrapersonal'] ?>"><?= $a['intrapersonal'] ?></td>
                                <td><input type="hidden" name="interpersonal" value="<?= $a['interpersonal'] ?>"><?= $a['interpersonal'] ?></td>
                                <td><input type="hidden" name="natrularistik" value="<?= $a['natrularistik'] ?>"><?= $a['natrularistik'] ?></td>
                                <td><input type="hidden" name="eksistensial" value="<?= $a['eksistensial'] ?>"><?= $a['eksistensial'] ?></td>
                                <td>
                                    <button type="submit" class="btn btn-xs btn-success"> <i class="fa fa-edit"></i> Simpan Konversi</button>
                            </form>
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