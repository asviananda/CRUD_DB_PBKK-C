<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tambah Mahasiswa - CRUD</title>
  </head>
  <body>
    <hr>

    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>

    <?php echo form_open("mahasiswa/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>NRP</td>
          <td><input type="text" name="input_nrp" value="<?php echo set_value('input_nrp'); ?>"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="input_nama" value="<?php echo set_value('input_nama'); ?>"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><textarea name="input_alamat"><?php echo set_value('input_alamat'); ?></textarea></td>
        </tr>
        <tr>
          <td>No. HP</td>
          <td><input type="text" name="input_nohp" value="<?php echo set_value('input_kontak'); ?>"></td>
        </tr>
        <tr>
          <td>Jurusan</td>
          <td><input type="text" name="input_jurusan" value="<?php echo set_value('input_jurusan'); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>