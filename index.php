<?php
include 'koneksi.php';
$query = "SELECT * FROM `tb_siswa`";
$sql = mysqli_query($conn,$query);


$no=0;


//var_dump($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS bostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>belajar crud</title>
</head>
<body>
    <!--Navbar bostrap-->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            SURGA
          </a>
        </div>
      </nav>
      <div class="container">
        <figure>
            <blockquote class="blockquote">
              <h1 class="mt-3">DATA SURGA</h1>
              <p>Menampilkan data yang ada di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CREATE READ UPDATE DELETE <cite title="Source Title">Source Title</cite>
            </figcaption>
          </figure>
          <a href="kelola.php" type="button" class="btn btn-dark mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
              </svg>  Tambahkan</a>
            <div class="table-responsive mt-3">
                <table class="table align-middle table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis kelamin</th>
                        <th>Alamat</th>
                        <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                      while ($result = mysqli_fetch_assoc($sql)){
                        
                      
                      ?>
                    <tr>
                        <td><?php echo ++$no ?></td>
                        <td><?php echo $result ['nisn']?></td>
                        <td><?php echo $result ['nama_siswa']?></td>
                        <td><img src="img/<?php echo $result ['foto_siswa'] ?>" width='100px'></td>
                        <td><?php echo $result ['jenis_kelamin']?></td>
                        <td><?php echo $result ['alamat']?></td>
                        <td>
                          <a href="kelola.php?edit=<?php echo $result ['id_siswa']?>" type="button" class="btn btn-success btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                            <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg></a>
                        
                        
                          <a href="proses.php?hapus=<?php echo $result ['id_siswa']?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm ('mau di hapus ?')">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                          </svg></a>
                        </td>
                        <?php
                        }
                        ?>
                    </tr>
                </tbody>
            </table>
          </div>
      </div>
    <!--JS bostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>