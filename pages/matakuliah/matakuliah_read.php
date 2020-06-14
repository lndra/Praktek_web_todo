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
          require_once('sql/connection/connection.php');

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
