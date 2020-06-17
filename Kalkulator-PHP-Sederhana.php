<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panduan Membuat Kalkulator PHP</title>
    <style>
    body{
	background: #F2F2F2;
	font-family: sans-serif;
}

.kalkulator{
	width: 335px;
	background: #288ef2;
	margin: 100px auto;
	padding: 10px 20px 50px 20px;
	border-radius: 5px;
	
}

.angka{
	width: 300px;
	margin: 5px;
	border: none;
	font-size: 16pt;
	border-radius: 5px;
	padding: 10px;	
}

.pilihan{
	font-size: 16pt;
	border: none;
	width: 150px;
	margin: 5px;
	border-radius: 5px;
	padding: 10px;
}

.tombol{
	width: 150px;
	background: #2f4b66;
	border-top: none;
	border-right: none;
	border-left: none;
	border-radius: 5px;
	padding: 10px;
	color: #fff;
	font-size: 15pt;
}

.judul{
	text-align: center;
	color: #fff;
	font-weight: normal;
}
a:-webkit-any-link {
	text-decoration:none;
}
footer {
	padding-top: 10px;
	text-align: center;
}
    </style>
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$angkapertama = $_POST['angkapertama'];
		$angkakedua = $_POST['angkakedua'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $angkapertama+$angkakedua;
			break;
			case 'kurang':
				$hasil = $angkapertama-$angkakedua;
			break;
			case 'kali':
				$hasil = $angkapertama*$angkakedua;
			break;
			case 'bagi':
				$hasil = $angkapertama/$angkakedua;
			break;			
		}
	}
	?>
	<div class="kalkulator">
	<a href="https://www.panduancode.com">
	<h2 class="judul">KALKULATOR PHP</h2>
		</a>
		<form method="post" action="kalkulator-PHP.php">			
			<input type="text" name="angkapertama" class="angka" autocomplete="off" placeholder="Isi angka Pertama">
			<input type="text" name="angkakedua" class="angka" autocomplete="off" placeholder="Isi angka Kedua">
			<select class="pilihan" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="angka">
		<?php }else{ ?>
			<input type="text" value="0" class="angka">
		<?php } ?>	
		<div>
		<footer>© www.panduancode.com</footer>
		</div>		
	</div>
</body>
</html>
