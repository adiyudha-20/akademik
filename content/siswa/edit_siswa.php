<?php 
  $edit=$mysqli->query("select*from siswa where nis='$_GET[nis]'");
  $e=mysqli_fetch_array($edit);
?>

<form name="form_siswa" action="?sis=update_siswa" method="post" enctype="multipart/form-data">

  <div class="form-group">
    <label for="Kelas">Kelas</label>
    <select name="kd_kelas" class="form-control" id="kd_kelas" name="kd_kelas" required>
      <option value="<?php echo $e['kd_kelas'];?>"><?php echo $e['kd_kelas'];?></option>
      <option value="">-Pilih Lainnya-</option>
      <?php 
            $pelajaran=$mysqli->query("SELECT * FROM kelas order by kd_kelas");
            while($m=mysqli_fetch_array($pelajaran)){
              echo '<option value="'.$m['kd_kelas'].'">'.$m['kd_kelas'].' - '.$m['nm_kelas'].'</option>';
      }?>
    </select>
  </div>

  <div class="form-group">
    <label for="NIS">NIS</label>
    <input type="hidden" name="id" value="<?php echo $e['nis'];?>">
    <input type="text" class="form-control" id="nis" placeholder="Nomor Induk Siswa" name="nis" required value="<?php echo $e['nis'];?>">
  </div>

  <div class="form-group">
    <label for="Nama">Nama</label>
    <input type="text" class="form-control" id="nm_siswa" placeholder="Nama" name="nm_siswa" required value="<?php echo $e['nm_siswa'];?>">
  </div>

  <div class="form-group">
    <label for="Jenis Kelamin">Jenis Kelamin</label>
    <select name="jenkel" class="form-control" id="jenkel" name="jenkel" required>
      <option value="<?php echo $e['jenkel'];?>"><?php echo $e['jenkel'];?></option>
      <option value="">-Pilih Lainnya-</option>
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="Agama">Agama</label>
    <input type="text" class="form-control" id="agama" placeholder="Agama" name="agama" required value="<?php echo $e['agama'];?>">
  </div>

  <div class="form-group">
    <label for="Tempat Lahir">Tempat Lahir</label>
    <input type="text" class="form-control" id="tmpt_lahir" placeholder="Tempat Lahir" name="tmpt_lahir" required value="<?php echo $e['tmpt_lahir'];?>">
  </div>

  <div class="form-group">
    <label for="Tanggal Lahir">Tanggal Lahir</label>
    <input type="date" class="form-control" id="tgl_lahir" placeholder="Tanggal Lahir" name="tgl_lahir" required value="<?php echo $e['tgl_lahir'];?>">
  </div>

  <div class="form-group">
    <label for="Alamat">Alamat</label>
    <textarea class="form-control" id="alamat" placeholder="Alamat" name="alamat" required><?php echo $e['alamat'];?></textarea>
  </div>

  

  <div class="form-group">
    <input type="button" class="btn btn-warning" value="Batal" onclick="history.back(-1)" /> 
   	<button type="reset" class="btn btn-danger">Reset</button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>


</form>