<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Alat Penghitung Depresiasi</title>
</head>
<body>
    <h3>Disusun Oleh:</h3>
    <ol>
        <li>Irham Dirgantara Y (L200170061)</li>
        <li>Muchammad Ibnu Miftach (L200190010)</li>
    </ol>
    
    <div class="container">
    <div class="row row-cols-2">
        <div class="col">
        <h2>Metode Straight Line</h2>
    <form action="<?php $PHP_SELF ?>" method="post" name="msl">
        <table>
        <tr>
            <td>Biaya Perolehan</td>
            <td>: </td>
            <td><input type="text" name="bp"></td>
        </tr>
        <tr>
            <td>Nilai Residu</td>
            <td>: </td>
            <td><input type="text" name="nr"></td>
        </tr>
        <tr>
            <td>Masa Manfaat</td>
            <td>: </td>
            <td><input type="text" name="mm"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="htmet1"></td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['htmet1'])){
		$bp = $_POST['bp'];
		$nr = $_POST['nr'];
		$mm = $_POST['mm'];
        $hitung = ($bp-$nr)/$mm; 
        echo "Biaya Perolehan = $bp <br> Nilai Residu = $nr <br> Masa Manfaat = $mm <br> Hasil menggunakan metode Straight Line = $hitung";
				
	}
    
    ?>
        </div>
        <div class="col">
        <h2>Metode Sum of The Years Digit</h2>
    <form action="<?php $PHP_SELF ?>" method="post" name="msl2">
        <table>
        <tr>
            <td>Harga Perolehan</td>
            <td>:</td>
            <td><input type="text" name="hp"></td>
        </tr>
        <tr>
            <td>Harga Residu</td>
            <td>: </td>
            <td><input type="text" name="hr"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td>: </td>
            <td><input type="text" name="th"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="htmet2"></td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['htmet2'])){
		$hp = $_POST['hp'];
		$hr = $_POST['hr'];
        $akhir = $_POST['th'];
        $total = 0;
        for ($i=1; $i <= $akhir ; $i++) { 
            $total = $total + $i;
            $hitung = ($hp - $hr) * ($i/$total);
        }
        
        echo "Harga Perolehan = $hp <br> Harga Residu = $hr <br> Tahun = $akhir <br> Penyusutan pada tahun pertama adalah $hitung";
				
	}
    
    ?>
        </div>
        <div class="col">
        <h2>Metode Unit of Activity</h2>
    <form action="<?php $PHP_SELF ?>" method="post" name="msl3">
        <table>
        <tr>
            <td>Biaya Perolehan</td>
            <td>: </td>
            <td><input type="text" name="bp2"></td>
        </tr>
        <tr>
            <td>Nilai Residu</td>
            <td>: </td>
            <td><input type="text" name="nr2"></td>
        </tr>
        <tr>
            <td>Total Aktivitas</td>
            <td>: </td>
            <td><input type="text" name="ta"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="htmet3"></td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['htmet3'])){
		$bp2 = $_POST['bp2'];
		$nr2 = $_POST['nr2'];
		$ta = $_POST['ta'];
        $hitung = ($bp2-$nr2)/$ta; 
        echo "Biaya Perolehan = $bp2 <br> Nilai Residu = $nr2 <br> Total aktivitas = $ta <br> Hasil menggunakan metode Unit of Activity = $hitung";
				
	}
    
    ?>
        </div>
        <div class="col">
        <h2>Metode Declining Balance</h2>
    <form action="<?php $PHP_SELF ?>" method="post" name="msl">
        <table>
        <tr>
            <td>Biaya Perolehan</td>
            <td>: </td>
            <td><input type="text" name="bp4"></td>
        </tr>
        <tr>
            <td>Umur Ekonomis</td>
            <td>: </td>
            <td><input type="text" name="umur"></td>
        </tr>
        <tr>
            <td><input type="submit" value="submit" name="htmet4"></td>
        </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['htmet4'])){
		$bp4 = $_POST['bp4'];
		$umur = $_POST['umur'];
        $hitung = ($bp4/$umur) * 2;

        echo "Hasil dari metode Declining Balance <br>";
        echo "Penyusutan pada tahun ke 1 adalah $hitung <br>";
        for ($i=2; $i <= $umur; $i++) { 
            $output = (($bp4 - $hitung)/$umur) *2;
            echo "penyusutan pada tahun ke $i adalah $output <br>";
            
            $bp4 = $bp4 - $output;
            $output = ($bp4/$umur) * 2;
        }
				
	}
    
    ?>
        </div>
    </div>
    </div>

</body>
</html>