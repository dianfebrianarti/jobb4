<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<head>
<title>jobsitt2febbbb</title>
</head>
<body>
    <?php
    //Menampilkan tulisan
    echo"NIS:2233289<br>";
    echo"NAMA:Febri ardiansyah<br>";
    echo"ALAMAT:Surodadi,Sayung<br>";
    echo"TELEPON:088216534153<br>";
    echo"EMAIL:maslurifebri@gmail<br><br>";


//menghitung nilai pemograman web lanjut, gunakan IF dan switch
echo"NIS:2233289<br>";
echo"NAMA:Febri ardiansyah<br>";
$n_tugas=70*20/100;
$n_uts=80*35/100;
$n_uas=83*45/100;
echo"Nilai tugas: $n_tugas <br>";
echo"Nilai uts: $n_uts <br>";
$n_tugas=70*20/100;
$n_uts=80*35/100;
$n_uas=83*45/100;
echo"NILAI Tugas:$n_tugas<br>";
echo"NILAI UTS:$n_uts<br>";
echo"NILAI UAS:$n_uas<br>";
$n_akhir = $n_tugas + $n_uts + $n_uas;
echo"NILAI Akhir :$n_akhir <br>";

if($n_akhir>=85){
    echo"Nilai huruf :A";
}elseif($n_akhir >=68.5){
    echo"Nilai huruf :B";
}elseif($n_akhir>=58.5){
    echo"Nilai huruf :C";
}elseif($n_akhir>=40){
    echo"Nilai huruf :D";
}else{
    echo"Nilai huruf:E";
}


    ?>
    

    
</body>
</html>