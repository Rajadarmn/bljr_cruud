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
            surga
          </a>
        </div>
      </nav>
      <div class="container">
        <form action="proses.php" method="post" enctype="multipart/form-data">
        <div class="mb-3 row mt-4">
        <label for="nisn" class="col-sm-2 col-form-label">NISN :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nisn" name="nisn" placeholder="99999">
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <label for="nama" class="col-sm-2 col-form-label">NAMA :</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama" name="nama" placeholder="NAMA">
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <label for="form-file" class="col-sm-2 col-form-label">FOTO :</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile" name="foto">
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <label for="jenis-kelamin" class="col-sm-2 col-form-label">JENIS-KELAMIN :</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>JENIS-KELAMIN</option>
                <option value="laki-laki">laki-laki</option>
                <option value="perempuan">perempuan</option>
                <option value="belom-diketahui">belom-diketahui</option>
              </select>
        </div>
       </div>
       <div class="mb-3 row mt-4">
        <label for="alamat" class="col-sm-2 col-form-label">ALAMAT :</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="alamat" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
        </div>
      </div>
      <div class="d-grid gap-2 d-md-block"><?php
      if (isset($_GET['edit'])){
        ?>
        <button type="submit" value="edit" name="aksi" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 2 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg> 
            save
      </button>
      <?php
      }else{
         ?>
        <button type="submit" value="add" name="aksi" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 2 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg> 
            Add
      </button>
    <?php }
    ?>  
        <a href="index.php" class="btn btn-danger" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="19" fill="currentColor" class="bi bi-back" viewBox="0 1.5 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
          </svg>  KEMBALI</a>
      </div></form>
      
      </div>
    <!--JS bostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>