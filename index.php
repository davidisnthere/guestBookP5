<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="dist/img/favicon.png" />
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/login/css/main.css?d=<?php echo time(); ?>">
	<link
      rel="stylesheet"
      href="https://unpkg.com/papercss@1.9.0/dist/paper.css"
    />
</head>
<body>
	
	<div class="bird-container bird-container--one">
		<div class="bird bird--one"></div>
	</div>
	
	<div class="bird-container bird-container--two">
		<div class="bird bird--two"></div>
	</div>
	
	<div class="bird-container bird-container--three">
		<div class="bird bird--three"></div>
	</div>
	
	<div class="bird-container bird-container--four">
		<div class="bird bird--four"></div>
	</div>
	
	<div class="limiter">
		<div class="container-login100 shadow">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt child-shadows-hover" data-tilt>
					<img src="vendor/login/images/img-01.png" alt="IMG">
				</div>
				<form action="" method="post" class="login100-form validate-form" id="kirim">
					<span class="login100-form-title">
						<h4>Buku Tamu P5 Programming</h4>
					</span>
					<div class="col border border-secondary shadow">
					<div class="wrap-input100">
						<input class="input100" type="text" name="Nama" placeholder="Nama" id="paperInputs1" autocomplete="off" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="Sekolah" placeholder="Asal Sekolah" autocomplete="off" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100">
						<textarea class="input100" name="Pesan" id="autoresizing" placeholder="Pesan/Kesan" style="padding-top: 13px; padding-bottom: 14px; overflow-y: hidden;"></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-sticky-note-o" aria-hidden="true"></i>
						</span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" name="submit" value="kirim!" class="login100-form-btn">
					</div>
					</div>
					<div class="row">
  <div class="col col-6">
  <div class="reveal">
    <input type="button" class="btn-secondary-outline" value="Pesan dan Kesan"/>
    </div>
  </div>
				</form>
			</div>
		</div>
	</div>
	<div class="ocean">
  <div class="wave"></div>
  <div class="wave"></div>
</div>
</div>
<div class="modal-overlay">
  <div class="modal" id="thankyou">
    
    <a class="close-modal">
      <svg viewBox="0 0 20 20">
        <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
      </svg>
    </a><!-- close modal -->

    <div class="modal-content">
     <?php
include "koneksi.php";
$query="SELECT * FROM tb_tamu";
$hasil=mysqli_query($koneksi_db,$query);
?>
<table align="center" class="table-hover">
	<thead class="">
	<tr>
		<th style="padding: 20px 30px;" >#</th>
		<th style="padding: 20px 30px;">Nama</th>
		<th style="padding: 20px 30px;">Asal Sekolah</th>
		<th style="padding: 20px 30px; text-align: center">Pesan-Kesan</th>
	</tr>
</thead>
<?php
$no=1;
while ($row=mysqli_fetch_array($hasil)){
?>
<tr align="center">
<td><?php echo $no++; ?></td>
<td><?php echo $row['Nama']; ?></td>
<td><?php echo $row['Sekolah']; ?></td>
<td style="
word-wrap: break-word;"><?php echo $row['Pesan']; ?></td>
</tr>
<?php
}
?>
    </div><!-- content -->
    
  </div><!-- modal -->
</div><!-- overlay -->
	<script src="vendor/login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/login/vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/login/vendor/select2/select2.min.js"></script>
	<script src="vendor/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<script>
	    $('#autoresizing').on('input', function () {
            this.style.height = '50px';
              
            this.style.height = 
                    (this.scrollHeight) + 'px';
        });
	</script>
	<script>
    var elements = $('.modal-overlay, .modal');

$('.reveal').click(function(){
    elements.addClass('active');
});

$('.close-modal').click(function(){
    elements.removeClass('active');
});
</script>
	<script src="vendor/login/js/main.js"></script>

<?php
@$Nama = $_POST['Nama'];
@$Sekolah = $_POST['Sekolah'];
@$Pesan = $_POST['Pesan'];
@$submit = $_POST['submit'];
if(isset($_POST) && isset( $_POST['submit'] ) ){
    $query_insert= "INSERT INTO tb_tamu (Nama,Sekolah,Pesan) VALUES ('$Nama','$Sekolah','$Pesan')";
    $hasil = mysqli_query($koneksi_db, $query_insert) or die ("ERROR INSERT DATA");
     if($hasil){
            header('Location: '.$_SERVER['PHP_SELF']);
            exit();
        }
}
?>
</body>
</html>
