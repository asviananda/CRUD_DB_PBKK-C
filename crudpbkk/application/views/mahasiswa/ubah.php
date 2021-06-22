<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Database Mahasiswa - CRUD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
 
td {
    font-size:15px;
}  
 
.table-responsive {
    margin: 30px 0;
}
 
.table-wrapper {
    background: #fff;
    padding: 20px;
    border-radius: 3px;
    width: 800px;
    align:center;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
 
.table-title {        
    padding-bottom: 15px;
    background: #435d7d;
    color: #fff;
    padding: 16px 15px;
    min-width: 100%;
    margin: ;
    border-radius: 3px 3px 0 0;
}
 
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
 
.form-control {
    width: 520px;
}
</style>
 
</head>
 
<body>
<div class="container-xl">
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <br>
            <h1 style="text-align:center;">Form Ubah Data Mahasiswa</h1>
        </div>
        <hr>
                    <?php echo form_open("mahasiswa/ubah/".$mahasiswa->nrp); ?>
                    <table cellpadding="8">
                        <tr>
                            <td>NRP</td>
                            <td><input class="form-control" type="text" name="input_nrp" value="<?php echo set_value('input_nrp', $mahasiswa->nrp); ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input class="form-control" type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea class="form-control" name="input_alamat"><?php echo set_value('input_alamat', $mahasiswa->alamat); ?></textarea></td>
                        </tr>
                        <tr>
                            <td>No. HP</td>
                            <td><input class="form-control" type="text" name="input_nohp" value="<?php echo set_value('input_nohp', $mahasiswa->nohp); ?>"></td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td><input class="form-control" type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan', $mahasiswa->jurusan); ?>"></td>
                        </tr>
                    </table>
                           
                <hr>
                <input class="btn btn-success" type="submit" name="submit" value="Ubah">
                <a href="<?php echo base_url(); ?>"><input class="btn btn-default" type="button" value="Batal"></a>
                <?php echo form_close(); ?>
           
        </div>
    </div>
</div>
</body>
</html>