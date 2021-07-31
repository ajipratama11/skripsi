<div class="content-wrapper">

    <section class="content-header">
        <h1 class="text-center">
            Data Set 
        </h1>
    </section>

    <section class="content">
        <div class="box box-warning">
            <div class="box-body">
                <table id="tabelDataSet" class="table table-bordered table-striped table-hover" id="tabelDataSet">
                    <thead>
                    <tr>
                        <th>nama : </th>
                    <?php foreach ($sub as $s) { ?>
                                <th><?= $s->nama_sub ?></th>
                            <?php } ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for ($i = 0; $i < count($hasil); $i++) { ?>
                                <td><?= $hasil[$i] ?></td>
                            <?php } ?>
                    </td>
                                <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editKelas"><i class="fa fa-edit"></i> Edit</button> &nbsp;
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#hapusKelas"><i class="fa fa-trash"></i> Hapus</button>
                            </td>
                        </tr>
                   </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
