<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Konversi Tipe</title>
  </head>
  <body>
    <?php
    //deklarasi variabel
    $a = 300.4;
    //Menampilkan variabel
    echo $a;
    echo "<br>";
    echo "tipe dobel : ", doubleval($a), "<br>"; //Menampilkan variabel dalam tipe data Double
    echo "tipe interger : ", intval($a), "<br>"; //Menampilkan variabel dalam tipe data Integer
    echo "tipe string : ", strval($a);  //Menampilkan variabel dalam tipe data String
    ?>
  </body>
</html>
