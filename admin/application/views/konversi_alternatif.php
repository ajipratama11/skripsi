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
        <a href="<?= site_url('alternatif'); ?>" class="btn btn-sm btn-warning"><i class="fa fa-angle-left"></i> Kembali</a>
            <button type="button" data-toggle="modal" data-target="#tambah-nilai" class="btn btn-sm btn-flat btn-success"><i class="fa fa-plus"></i> Tambah Nilai</button>
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
</script>