<?php
$nik = $_POST['nik'];
$nama_lengkap = strtoupper($_POST['nama_lengkap']);
$tl = strtoupper($_POST['tempat_lahir']);
$tgl = $_POST['tanggal_lahir'];
$tgl_format = date_format(date_create($tgl), 'd-m-Y');
$jeniskel = strtoupper($_POST['jenis_kelamin']);
$darah=$_POST['gol_darah'];
$alamat = strtoupper($_POST['alamat']);
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = strtoupper($_POST['kel_desa']);
$kecamatan = strtoupper($_POST['kecamatan']);
$agama = strtoupper($_POST['agama']);
$status = strtoupper($_POST['status_perkawinan']);
$pekerjaan = strtoupper($_POST['pekerjaan']);
$kewarganegaraan = strtoupper($_POST['kewarganegaraan']);
$masa_berlaku = "SEUMUR HIDUP";
$today = date("d-m-Y");

                //cetak foto
                // $sumber = $_FILES['foto_diri']['tmp_name'];
                // $target = $_FILES['foto_diri']['name'];

                // if (move_uploaded_file($sumber, $target))
                // {
                //     echo "<img class='foto-diri' src='$target'> ";
                //     echo "<label class='form-item-field foto-diri-footer'>";
                //     echo "TANGERANG <br> $today";
                //     echo "</label>";
                // }
                // else
                //     echo"Can't Upload Selected File ";
?>
<html lang="id-ID">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="Content-Type">
        <link rel="stylesheet" href="css/result.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/ripple-button.css">
        <title>Hasil Kirim Data</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="pos-center">
            <tr>
                <td>
                    <div class="container-fluid">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="title-header">PROVINSI JAWA TIMUR</div>
                                <div class="title-header">KOTA MALANG</div>
                            </div>
                            <div class="panel-content">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="form-group large">
                                            <div class="form-item-label nik nik-label">
                                                NIK 
                                            </div>
                                            <div class="form-item-separator nik-separator">:</div>
                                            <label class="form-item-field nik">
                                                <?php echo $nik; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Nama Lengkap 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $nama_lengkap; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Tempat/Tgl Lahir
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $tl; ?>, <?php echo $tgl_format; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Jenis Kelamin 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $jeniskel; ?>
                                            </label>


                                            <div class="form-item-label gol-darah">
                                                Gol. Darah
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $darah; ?>
                                            </label>
                                        </div>

                                        <div class="form-group-inner-outer">
                                            <div class="outer">
                                                <div class="form-item-label">
                                                    Alamat
                                                </div>
                                                <div class="form-item-separator">:</div>
                                                <label class="form-item-field">
                                                    <?php echo $alamat; ?>
                                                </label>
                                            </div>
                                            <div class="inner">
                                                <div class="form-group">
                                                    <div class="form-item-label">
                                                        RT/RW
                                                    </div>
                                                    <div class="form-item-separator">:</div>
                                                    <label class="form-item-field">
                                                        <?php echo $rt; ?> / <?php echo $rw; ?>
                                                    </label>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-item-label">
                                                        Kel/Desa
                                                    </div>
                                                    <div class="form-item-separator">:</div>
                                                    <label class="form-item-field">
                                                        <?php echo $desa; ?>
                                                    </label>
                                                </div>

                                                <div class="form-group">
                                                    <div class="form-item-label">
                                                        Kecamatan
                                                    </div>
                                                    <div class="form-item-separator">:</div>
                                                    <label class="form-item-field">
                                                        <?php echo $kecamatan; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Agama 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $agama; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Status Perkawinan 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $status; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Pekerjaan 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $pekerjaan; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Kewarganegaraan 
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $kewarganegaraan; ?>
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <div class="form-item-label">
                                                Masa Berlaku
                                            </div>
                                            <div class="form-item-separator">:</div>
                                            <label class="form-item-field">
                                                <?php echo $masa_berlaku; ?>
                                            </label>
                                        </div>

                                        <!-- <div class="button-area button-area-result">
                                            <a href="form.php">
                                                <button class="for_ripple btn" value="HOME" >
                                                    HOME
                                                </button>
                                            </a>
                                        </div> -->
                                    </div>
                                    <div class="col-3">
                                        <img src="yusril.jpg" class="img-fluid profile-img">
                                        <div class="text-center">
                                            <p class="mb-1">Kota Malang</p>
                                            <p class="mt-0">29-05-2019</p>
                                        </div>
                                        <div class="sign-wrapper text-center">
                                            <img src="signature.png" class="signature text-center" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
<script src="js/ripple-button.js"></script>