<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Pemrograman PHP dengan Array</title>
  </head>
  <body>
    <?php
    //penulisan array dapat dibuat seperti berikut
    $nama[] = "Akira";
    $nama[] = "Permata";
    $nama[] = "Ramadhani";
    echo $nama[0] . $nama[1] . $nama[2];
    echo "<br>";
    //menghitung jumlah elemen array
    $jum_array = count($nama);
    echo "jumlah elemen array = ". $jum_array;
    ?>
  </body>
</html>
