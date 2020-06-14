<?php
require_once('sql/connection/connection.php');

if(isset($_POST['create'])){
  $nama_matakuliah = $_POST['nama_matakuliah'];
  $singkatan_matakuliah = $_POST['singkatan_matakuliah'];
  $nama_dosen = $_POST['nama_dosen'];
  $kontak_dosen = $_POST['kontak_dosen'];
  $aktif = $_POST['aktif'];

  $insertSql = "INSERT INTO matakuliah VALUES (NULL, $nama_matakuliah, $singkatan_matakuliah, $nama_dosen, $kontak_dosen, $aktif )";

  $database = new Database();
  $db = $database->getConnection();

  $stmt = $db->prepare($insertSql);
  if($stmt->execute()){
    ?>
    <div class="row">
      <div class="col-md-12 my-3">
        <div class="alert alert-success" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Tambah Data Berhasil</strong> Matakuliah  <?php echo $nama_matakuliah; ?> telah ditambahkan
        </div>
      </div>
    </div>
    <?php
  }else{
    ?>
    <div class="row">
      <div class="col-md-12 my-3">
        <div class="alert alert-danger" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Tambah Data Gagal</strong> Matakuliah  <?php echo $nama_matakuliah; ?> gagal ditambahkan
        </div>
      </div>
    </div>
    <?php
  }
}
?>

<div class="row">
  <div class="col-md-12 my-3">
    <h1>Read</h1>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-12 my-3">
        <button class="btn btn-success float-right" type="submit" data-toggle="modal" data-target="#createModal"><i class="fa fa-plus"></i> Tambah</button>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-3">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Matakuliah</th>
              <th scope="col">Singkatan</th>
              <th scope="col">Dosen</th>
              <th scope="col">Kontak</th>
              <th scope="col">Aktif</th>
              <th scope="col" style="width:15%">Act</th>
            </tr>
          </thead>
          <tbody>
          <?php

          $database = new Database();
          $db = $database->getConnection();
          $selectQuery = "SELECT * FROM matakuliah ORDER BY nama_matakuliah";
          $stmt = $db->prepare($selectQuery);
          $stmt->execute();
          if($stmt->rowCount()>0){
            $nomor=1;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
              ?>
              <tr>
                <td><?php echo $nomor++ ?></td>
                <td><?php echo $row["nama_matakuliah"] ?></td>
                <td><?php echo $row["singkatan_matakuliah"] ?></td>
                <td><?php echo $row["nama_dosen"] ?></td>
                <td><?php echo $row["kontak_dosen"] ?></td>
                <td><?php echo $row["aktif"] ?></td>
                <td>
                  <div class="row">
                    <button class='btn btn-primary btn-sm'  type="submit" name="go_to_update">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button class='btn btn-danger btn-sm' onclick="return confirm('Anda Yakin menghapus Data <?php echo $row["nama_matakuliah"] ?>?')" type="submit" name="delete">
                      <i class="fa fa-trash"></i>
                    </button>
                  </div>
                </td>
              </tr>
              <?php
            }
          }else{

          }
          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php include_once "matakuliah_create.php" ?>
