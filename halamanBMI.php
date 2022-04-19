<?php
   include_once 'header.php';
   include_once 'sidebar.php';
?>

<div class="content-wrapper">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1 Adzhim</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<!-- Default box -->
<div class="card">

<form text-align="center">
<h2 class="text-center mb-5">Form BMI Pasien</h2>
<!-- card -->
<div class="card text-white bg-secondary" style="width: 100%;">
  <div class="card-body algn-center">
    <div class="form-group row center">
            <label for="nama_lengkap" class="col-3 col-form-label">Nama Lengkap :</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card-o"></i>
                </div>
                </div> 
                <input id="nama_lengkap" name="nama_lengkap" placeholder="Ketik Nama Lengkap" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="berat" class="col-3 col-form-label">Berat Badan (kg):</label> 
            <div class="col-8">
            <input id="berat" name="berat" placeholder="Berat Badan Kamu" type="number" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tinggi" class="col-3 col-form-label">Tinggi Badan (cm) :</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-blind"></i>
                </div>
                </div> 
                <input id="tinggi" name="tinggi" placeholder="Tinggi Badan Kamu" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-3 col-form-label">Umur Sekarang :</label> 
            <div class="col-8">
            <input id="umur" name="umur" placeholder="Umur Kamu Sekarang" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="jenis_kelamin" class="col-3 col-form-label">Jenis Kelamin :</label> 
            <div class="col-8">
            <select id="jenis_kelamin" name="jenis_kelamin" class="custom-select" aria-describedby="jenis_kelaminHelpBlock">
                <option value="Laki laki">Laki laki</option>
                <option value="Perempuan">Perempuan</option>
            </select> 
            <p>Pilih salah satu</p>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
  </div>
</div>
        
</form>
    <br>
    <?php require_once 'classBMI.php'; ?>

    <div class="container">
        <h2 class="text-center mb-5">Data BMI Pasien</h2>
        <table class="table table-bordered">
            <thead class="thead-dark"> 
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Berat</th>
                    <th scope="col">Tinggi</th>
                    <th scope="col">BMI</th>
                    <th scope="col">Hasil BMI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nomor = 1;
                foreach ($ar_pasien as $pasien) {
                    echo '<tr><td>' . $nomor . '</td>';
                    echo '<td>' . $pasien['nama'] . '</td>';
                    echo '<td>' . $pasien['kelamin'] . '</td>';
                    echo '<td>' . $pasien['umur'] . '</td>';
                    echo '<td>' . $pasien['berat'] . '</td>';
                    echo '<td>' . $pasien['tinggi'] . '</td>';
                    $BMI = $pasien["berat"] / (($pasien["tinggi"] / 100) ** 2);
                    echo '<td>' . number_format($BMI, 1) . '</td>';
                    $status = new bmiPasien();
                    echo $status->statusBMI($BMI);
                    echo '</tr>';
                    $nomor++;
                }
                ?>
            </tbody>
        </table>
    </div>
</tbody>
</table>
    
</body>
</html>
</div>

              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once 'footer.php';
?>