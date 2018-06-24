<?php 

    echo "Hallo Dunia";
    echo "<br>";

    $huruf = 'A';

    var_dump($huruf);
    echo "<br>";

    //----------------

    $situs = "www.yogaeka.com";
    echo "Sedang belajar dengan $situs";


    echo "<br>";
    echo "<br>";
    echo "<br>";

    //----------------Array
    $siswa = array("dada","didi","dudu","dede","dodo");
    echo "<pre>";
    print_r($siswa);
    echo "</pre>";
    echo "<br>";
    echo $siswa[1];

    echo "<br>";
    echo "<br>";

    //----------------Array2Dimensi
    echo "Array 2 Dimensi";
    echo "<br>";
    $kordinat = array(
                        array(8,2),
                        array(2,4),
                        array(1,7)
                );
    echo $kordinat[0][1]; echo $kordinat[0][0];
    echo "<br>";
    echo $kordinat[0][1];
    echo "<br>";
    echo $kordinat[2][0];
    echo "<br>";

    //----------------Array
    $macam2 = array(121,"Joko",44.99,"Belajar PHP");
    $macam2[4] = "Duniakom";
    $macam2[5] = 212;
    $macam2[6] = 3.14;
    $macam2[1] = "Jokowi Dodo";
    $macam2[] = "Mahasiswa Array Baru";
    $macam2[] = "Liverpol 0 - 3 Real Madrid";

    echo "<pre>";
    print_r($macam2);
    echo "</pre>";

    echo "<br>";
    echo "<br>";

    $mahasiswa = array(
                    'nama'=>"Yoga Eka Tanaya",
                    'jurusan'=>"TI",
                    'alamat'=>"Dalung",
                    'umur'=>"18",
                    "telepon"=>"089525837175",
                    'email'=>"yogaekat@gmail.com"
                );

    echo "<pre>";
    echo "NAMA   : $mahasiswa[nama]<br>";
    echo "ALAMAT : $mahasiswa[alamat]<br>";
    echo "UMUR   : $mahasiswa[umur]<br><br>";

    print_r($mahasiswa);
    echo "</pre>";



    //---------------Operator
    $hasil1 = 3+1;
    $hasil2 = 3/2*100;
    $hasil3 = 12;
    $hasil4 = 5;
    $hasil5 = $hasil3%$hasil4;

    echo "$hasil3 % $hasil4 sisa bagi(modulo)= $hasil5";
    echo "<br>";
    echo "<br>";

    //----------------Increment
    $a = 10;
    $b = ++$a;


    echo "$a";
    echo "<br>";
    echo "$b";
    echo "<br>";
    echo "<br>";

    //---------------Perbandingan
    $angka1 = 10;
    $angka2 ="10";

    if ($angka1==$angka2) {
        echo "Sama";
    }else {
        echo "Tidak Sama";
    }

    echo "<br><br>";


    $club = "Bali United";
    $status = "Menang";

    if ($club=="Bali United" || $status=="Menang") {
        echo "Hala Madrid";
    } else {
        echo "Hala Liverpool";
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";

    $string1 = "Hallo kaka nama saya ";
    $string2 = "Yoga Eka";
    $string3 = $string1.$string2;

    echo "$string3";
    

?>