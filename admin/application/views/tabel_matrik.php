<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Tabel Matrik
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="metrik" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kriteria</th>
                            <th>Bobot</th>
                            <th>Kimia <br><input type="text" id="kimia1" style="width: 50px;" value="<?= $bobot1['kimia'] ?>" readonly></th>
                            <th>Biologi <br><input type="text" id="biologi1" style="width: 50px;" value="<?= $bobot1['biologi'] ?>" readonly></th>
                            <th>Fisika <br><input type="text" id="fisika1" style="width: 50px;" value="<?= $bobot1['fisika'] ?>" readonly></th>
                            <th>Matematika <br><input type="text" id="matematika1" style="width: 50px;" value="<?= $bobot1['matematika'] ?>" readonly></th>
                            <th>Bhs Inggris <br><input type="text" id="bhsinggris1" style="width: 50px;" value="<?= $bobot1['bhs_inggris'] ?>" readonly></th>
                            <th>Bhs Indonesia <br><input type="text" id="bhsindonesia1" style="width: 50px;" value="<?= $bobot1['bhs_indonesia'] ?>" readonly></th>
                            <th>Realistis <br><input type="text" id="realistis1" style="width: 50px;" value="<?= $bobot1['realistis'] ?>" readonly></th>
                            <th>Intelektual <br><input type="text" id="intelektual1" style="width: 50px;" value="<?= $bobot1['intelektual'] ?>" readonly></th>
                            <th>Artistik <br><input type="text" id="artistik1" style="width: 50px;" value="<?= $bobot1['artistik'] ?>" readonly></th>
                            <th>Sosial <br><input type="text" id="sosial1" style="width: 50px;" value="<?= $bobot1['sosial'] ?>" readonly></th>
                            <th>Enterprise <br><input type="text" id="enterprise1" style="width: 50px;" value="<?= $bobot1['enterprise'] ?>" readonly></th>
                            <th>Konvensional <br><input type="text" id="konvensional1" style="width: 50px;" value="<?= $bobot1['konvensional'] ?>" readonly></th>
                            <th>Linguistik <br><input type="text" id="linguistik1" style="width: 50px;" value="<?= $bobot1['linguistik'] ?>" readonly></th>
                            <th>Matematikal <br><input type="text" id="matematikal1" style="width: 50px;" value="<?= $bobot1['matematikal'] ?>" readonly></th>
                            <th>Musikal <br><input type="text" id="musikal1" style="width: 50px;" value="<?= $bobot1['musikal'] ?>" readonly></th>
                            <th>Kinestik <br><input type="text" id="kinestik1" style="width: 50px;" value="<?= $bobot1['kinestik'] ?>" readonly></th>
                            <th>Spartial <br><input type="text" id="spartial1" style="width: 50px;" value="<?= $bobot1['spartial'] ?>" readonly></th>
                            <th>Intrapersonal <br><input type="text" id="intrapersonal1" style="width: 50px;" value="<?= $bobot1['intrapersonal'] ?>" readonly></th>
                            <th>Interpersonal <br><input type="text" id="interpersonal1" style="width: 50px;" value="<?= $bobot1['interpersonal'] ?>" readonly></th>
                            <th>naturalistik <br><input type="text" id="intrapersonal1" style="width: 50px;" value="<?= $bobot1['natrularistik'] ?>" readonly></th>
                            <th>eksistensial <br><input type="text" id="intrapersonal1" style="width: 50px;" value="<?= $bobot1['eksistensial'] ?>" readonly></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Kimia</td>
                            <td><input type="text" id="kimia2" style="width: 50px;" value="<?= $bobot2['kimia'] ?>" readonly></td>
                            <td><input type="text" id="kimiakimia" style="width: 50px;" readonly></td>
                            <td><select readonly style="width: 50px;">
                                    <option value="9" <?php if ($bobot2['kimia'] == 5 && $bobot2['biologi'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>9</option>
                                    <option value="8" <?php if ($bobot2['kimia'] == 5 && $bobot2['biologi'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>8</option>
                                    <option value="7" <?php if ($bobot2['kimia'] == 5 && $bobot2['biologi'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>7</option>
                                    <option value="6" <?php if ($bobot2['kimia'] == 5 && $bobot2['biologi'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>6</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 5 && $bobot2['biologi'] == 5) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="5" <?php if ($bobot2['kimia'] == 4 && $bobot2['biologi'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>5</option>
                                    <option value="4" <?php if ($bobot2['kimia'] == 4 && $bobot2['biologi'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>4</option>
                                    <option value="3" <?php if ($bobot2['kimia'] == 4 && $bobot2['biologi'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>3</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 4 && $bobot2['biologi'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['biologi'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['biologi'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 3 && $bobot2['biologi'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 2 && $bobot2['biologi'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['biologi'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,11" <?php if ($bobot2['kimia'] == 1 && $bobot2['biologi'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,11</option>
                                    <option value="0,20" <?php if ($bobot2['kimia'] == 1 && $bobot2['biologi'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,20</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['biologi'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['biologi'] == 2) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 1 && $bobot2['biologi'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,13" <?php if ($bobot2['kimia'] == 2 && $bobot2['biologi'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,13</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['biologi'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>0,25</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 2 && $bobot2['biologi'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,14" <?php if ($bobot2['kimia'] == 3 && $bobot2['biologi'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,14</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 3 && $bobot2['biologi'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,17" <?php if ($bobot2['kimia'] == 4 && $bobot2['biologi'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,17</option>
                                </select></td>
                            <td><select readonly style="width: 50px;">
                                    <option value="9" <?php if ($bobot2['kimia'] == 5 && $bobot2['fisika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>9</option>
                                    <option value="8" <?php if ($bobot2['kimia'] == 5 && $bobot2['fisika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>8</option>
                                    <option value="7" <?php if ($bobot2['kimia'] == 5 && $bobot2['fisika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>7</option>
                                    <option value="6" <?php if ($bobot2['kimia'] == 5 && $bobot2['fisika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>6</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 5 && $bobot2['fisika'] == 5) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="5" <?php if ($bobot2['kimia'] == 4 && $bobot2['fisika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>5</option>
                                    <option value="4" <?php if ($bobot2['kimia'] == 4 && $bobot2['fisika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>4</option>
                                    <option value="3" <?php if ($bobot2['kimia'] == 4 && $bobot2['fisika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>3</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 4 && $bobot2['fisika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['fisika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['fisika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 3 && $bobot2['fisika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 2 && $bobot2['fisika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['fisika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,11" <?php if ($bobot2['kimia'] == 1 && $bobot2['fisika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,11</option>
                                    <option value="0,20" <?php if ($bobot2['kimia'] == 1 && $bobot2['fisika'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,20</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['fisika'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['fisika'] == 2) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 1 && $bobot2['fisika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,13" <?php if ($bobot2['kimia'] == 2 && $bobot2['fisika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,13</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['fisika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>0,25</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 2 && $bobot2['fisika'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,14" <?php if ($bobot2['kimia'] == 3 && $bobot2['fisika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,14</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 3 && $bobot2['fisika'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,17" <?php if ($bobot2['kimia'] == 4 && $bobot2['fisika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,17</option>
                                </select></td>
                            <td><select readonly style="width: 50px;">
                                    <option value="9" <?php if ($bobot2['kimia'] == 5 && $bobot2['matematika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>9</option>
                                    <option value="8" <?php if ($bobot2['kimia'] == 5 && $bobot2['matematika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>8</option>
                                    <option value="7" <?php if ($bobot2['kimia'] == 5 && $bobot2['matematika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>7</option>
                                    <option value="6" <?php if ($bobot2['kimia'] == 5 && $bobot2['matematika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>6</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 5 && $bobot2['matematika'] == 5) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="5" <?php if ($bobot2['kimia'] == 4 && $bobot2['matematika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>5</option>
                                    <option value="4" <?php if ($bobot2['kimia'] == 4 && $bobot2['matematika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>4</option>
                                    <option value="3" <?php if ($bobot2['kimia'] == 4 && $bobot2['matematika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>3</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 4 && $bobot2['matematika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['matematika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 3 && $bobot2['matematika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 3 && $bobot2['matematika'] == 3) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="2" <?php if ($bobot2['kimia'] == 2 && $bobot2['matematika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>2</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['matematika'] == 2) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,11" <?php if ($bobot2['kimia'] == 1 && $bobot2['matematika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,11</option>
                                    <option value="0,20" <?php if ($bobot2['kimia'] == 1 && $bobot2['matematika'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,20</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['matematika'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="0,50" <?php if ($bobot2['kimia'] == 1 && $bobot2['matematika'] == 2) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,50</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 1 && $bobot2['matematika'] == 1) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>1</option>
                                    <option value="0,13" <?php if ($bobot2['kimia'] == 2 && $bobot2['matematika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,13</option>
                                    <option value="1" <?php if ($bobot2['kimia'] == 2 && $bobot2['matematika'] == 4) {
                                                            echo "selected=\"selected\"";
                                                        } ?>>0,25</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 2 && $bobot2['matematika'] == 3) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,14" <?php if ($bobot2['kimia'] == 3 && $bobot2['matematika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,14</option>
                                    <option value="0,33" <?php if ($bobot2['kimia'] == 3 && $bobot2['matematika'] == 4) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,33</option>
                                    <option value="0,17" <?php if ($bobot2['kimia'] == 4 && $bobot2['matematika'] == 5) {
                                                                echo "selected=\"selected\"";
                                                            } ?>>0,17</option>
                                </select></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            <td><input type="text" id="kimiafisika" style="width: 50px;"></td>
                            
                        </tr>
                        <tr>
                            <td>biologi</td>
                            <td><input type="text" id="biologi2" style="width: 50px;" value="<?= $bobot2['biologi'] ?>" readonly></td>
                            <td><input type="text" id="biologikimia" style="width: 50px;"></td>
                            <td><input type="text" id="biologibiologi" style="width: 50px;" readonly></td>
                            <td><input type="text" id="biologifisika" style="width: 50px;"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>fisika</td>
                            <td><input type="text" id="fisika2" style="width: 50px;" value="<?= $bobot2['fisika'] ?>" readonly></td>
                            <td><input type="text" id="fisikakimia" style="width: 50px;"></td>
                            <td><input type="text" id="fisikabiologi" style="width: 50px;"></td>
                            <td><input type="text" id="fisikafisika" style="width: 50px;" readonly></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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

    // $(document).ready(function() {
    //     $("table[id^='TABLE']").DataTable({
    //         "scrollY": "200px",
    //         'lengthChange': true,
    //         "scrollCollapse": true,
    //         "scrollX": true,
    //         "searching": false,
    //         "info": false,
    //         "paging": false,
    //     });
    // });

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
            var biologibiologi = parseInt(biologi1) / parseInt(biologi2);
            $("#biologibiologi").val(biologibiologi);
            var fisikafisika = parseInt(fisika1) / parseInt(fisika2);
            $("#fisikafisika").val(fisikafisika);
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

            var kimiabiologi = parseInt(kimia2) / parseInt(biologi1);
            $("#kimiabiologi").val(kimiabiologi);
            var biologikimia = parseInt(biologi1) / parseInt(biologi2);
            $("#biologikimia").val(biologikimia);
        });
    });
</script>