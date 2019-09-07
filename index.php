<?php

// Dataset TBC
$data = array(
    array("usia" => "Muda","kelamin" => "Pria","batuk" => "Berdahak","kondisi" => "Lemas","tbc" => "Ya"),
    array("usia" => "Dewasa","kelamin" => "Pria","batuk" => "Batuk","kondisi" => "Lemas","tbc" => "Ya"),
    array("usia" => "Tua","kelamin" => "Wanita","batuk" => "Berdahak","kondisi" => "Normal","tbc" => "Ya"),
    array("usia" => "Tua","kelamin" => "Pria","batuk" => "Tidak","kondisi" => "Lemas","tbc" => "Tidak"),
    array("usia" => "Dewasa","kelamin" => "Wanita","batuk" => "Tidak","kondisi" => "Normal","tbc" => "Tidak"),
	array("usia" => "Dewasa","kelamin" => "Pria","batuk" => "Berdahak","kondisi" => "Lemas","tbc" => "Ya"),
    array("usia" => "Muda","kelamin" => "Wanita","batuk" => "Berdahak","kondisi" => "Normal","tbc" => "Ya"),
    array("usia" => "Muda","kelamin" => "Pria","batuk" => "Batuk","kondisi" => "Normal","tbc" => "Tidak"),
    array("usia" => "Tua","kelamin" => "Pria","batuk" => "Berdahak","kondisi" => "Lemas","tbc" => "Ya"),
	array("usia" => "Muda","kelamin" => "Wanita","batuk" => "Batuk","kondisi" => "Normal","tbc" => "Tidak"),
);

// Perulangan untuk mengubah nilai didalam array //
// Mengubah dan memasukkan nilai string ke int kedalam array dataAngka index usia menjadi muda = 1, dewasa = 2, tua = 3
for($i=0; $i<count($data); $i++) {
    $data[$i]['no'] = $i+1;
    $dataAngka[$i]['no'] = $i+1;
}
// Mengubah dan memasukkan nilai string ke int kedalam array dataAngka index usia menjadi muda = 1, dewasa = 2, tua = 3
for($i=0; $i<count($data); $i++) {
    if ($data[$i]['usia'] == 'Tua') {
        $dataAngka[$i]['usia'] = 3;
    } else if ($data[$i]['usia'] == 'Dewasa') {
        $dataAngka[$i]['usia'] = 2;
    } else {
        $dataAngka[$i]['usia'] = 1;
    }
}
// Mengubah dan memasukkan nilai string ke int didalam array dataAngka index kelamin menjadi pria = 1, wanita = 2
for($i=0; $i<count($data); $i++) {
    if ($data[$i]['kelamin'] == 'Wanita') {
        $dataAngka[$i]['kelamin'] = 2;
    } else {
        $dataAngka[$i]['kelamin'] = 1;
    }
}
// Mengubah dan memasukkan nilai string ke int didalam array dataAngka index batuk menjadi tidak = 1, batuk = 2, berdahak = 3
for($i=0; $i<count($data); $i++) {
    if ($data[$i]['batuk'] == 'Berdahak') {
        $dataAngka[$i]['batuk'] = 3;
    } else if ($data[$i]['batuk'] == 'Batuk') {
        $dataAngka[$i]['batuk'] = 2;
    } else {
        $dataAngka[$i]['batuk'] = 1;
    }
}
// Mengubah dan memasukkan nilai string ke int didalam array dataAngka index kondisi menjadi lemas = 1, normal = 2
for($i=0; $i<count($data); $i++) {
    if ($data[$i]['kondisi'] == 'Lemas') {
        $dataAngka[$i]['kondisi'] = 1;
    } else {
        $dataAngka[$i]['kondisi'] = 2;
    }
}
// Mengubah dan memasukkan nilai string ke int didalam array dataAngka index tbc menjadi tidak = 0, ya = 1
for($i=0; $i<count($data); $i++) {
    if ($data[$i]['tbc'] == 'Ya') {
        $dataAngka[$i]['tbc'] = 1;
    } else {
        $dataAngka[$i]['tbc'] = 0;
    }
}
?>                   
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Program KNN Sederhana</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        th {
            background-color: #afd9ee;
            color: #000;
        }
    </style>
</head>
<body>
    <!-- Menampilkan Dataset TBC -->
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><b>Data TBC</b></h1>
                <br>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>NO.</th>
                            <th>USIA</th>
                            <th>KELAMIN</th>
                            <th>BATUK</th>
                            <th>KONDISI</th>
                            <th>TBC</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                foreach ($data as $value) {
                                    echo "<tr>";
                                    echo "<td>".str_pad($value['no'],2,0,STR_PAD_LEFT)."</td>";
                                    echo "<td>{$value['usia']}</td>";
                                    echo "<td>{$value['kelamin']}</td>";
                                    echo "<td>{$value['batuk']}</td>";
                                    echo "<td>{$value['kondisi']}</td>";
                                    echo "<td>{$value['tbc']}</td>";
                                    echo "</tr>";
                                }
                            ?>
                    </tbody>
                </table>
            </div>
            <!-- Menampilkan Input Data Baru -->
            <div class="col-md-5">
                <h1><b>Tambah Data Baru</b></h1>
                <br>
                <form action="" method="post">
                    <p>
                        <label for="usia">Pilih Usia : </label>
                        <select class="form-control" name="usia" id="usia">
                            <option value="1">Muda</option>
                            <option value="2">Dewasa</option>
                            <option value="3">Tua</option>
                        </select>
                    </p>
                    <p>
                        <label for="kelamin">Pilih Kelamin : </label>
                        <select class="form-control" name="kelamin" id="kelamin">
                            <option value="1">Pria</option>
                            <option value="2">Wanita</option>
                        </select>
                    </p>
                    <p>
                        <label for="kelamin">Pilih Batuk : </label>
                        <select class="form-control" name="batuk" id="batuk">
                            <option value="1">Tidak</option>
                            <option value="2">Batuk</option>
                            <option value="3">Berdahak</option>
                        </select>
                    </p>
                    <p>
                        <label for="kondisi">Pilih Kondisi : </label>
                        <select class="form-control" name="kondisi" id="kondisi">
                            <option value="1">Lemas</option>
                            <option value="2">Normal</option>
                        </select>
                    </p>
                    <br>
                    <div class="col-sm-offset-8">
                    <p>
                        <input class="btn btn-primary" type="submit" name="reset" value="Reset">
                        <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                    </p>
                    </div>
                </form>
                <?php
                // Jika Tombol Submit diTekan
                // Mengambil nilai dari data baru yang dipilih
                if (isset($_POST["submit"])) {
                    $databaru1 = trim($_POST["usia"]);
                    $databaru2 = trim($_POST["kelamin"]);
                    $databaru3 = trim($_POST["batuk"]);
                    $databaru4 = trim($_POST["kondisi"]);
                    // Membuat variabel baru yang menampung nilai data baru dalam bentuk String
                    if ($databaru1 == 1) {
                        $databarustring['usia'] = "Muda";
                    } else if ($databaru1 == 2) {
                        $databarustring['usia'] = "Dewasa";
                    } else {
                        $databarustring['usia'] = "Tua";
                    }
                    if ($databaru2 == 1) {
                        $databarustring['kelamin'] = "Pria";
                    } else {
                        $databarustring['kelamin'] = "Wanita";
                    }
                    if ($databaru3 == 1) {
                        $databarustring['batuk'] = "Tidak";
                    } else if ($databaru3 == 2) {
                        $databarustring['batuk'] = "Batuk";
                    } else {
                        $databarustring['batuk'] = "Berdahak";
                    }
                    if ($databaru4 == 1) {
                        $databarustring['kondisi'] = "Lemas";
                    } else {
                        $databarustring['kondisi'] = "Normal";
                    }
                    // Menghitung nilai databaru yang sudah dipilih dengan nilai dataset menggunakan rumus jarak encludian
                    // dan memasukkan nilai hasil perhitungan kedalam array dataAngka index jarak
                    for($i=0; $i<count($dataAngka); $i++) {
                        $dataAngka[$i]['jarak'] = sqrt(pow($dataAngka[$i]['usia'] - $databaru1, 2) + pow($dataAngka[$i]['kelamin'] - $databaru2, 2) + pow($dataAngka[$i]['batuk'] - $databaru3, 2) + pow($dataAngka[$i]['kondisi'] - $databaru4, 2));
                    }
                    // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array urutan
                    for($i=0; $i<count($dataAngka); $i++) {
                        $urutan[] = $dataAngka[$i]['jarak'];
                    }
                    // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array urut
                    for($i=0; $i<count($dataAngka); $i++) {
                        $urut[] = $dataAngka[$i]['jarak'];
                    }

                    $a=0;
                    asort($urutan); // Mengurutkan nilai array urutan dengan index tetap
                    // Perulangan untuk memasukkan nilai variabel a kedalam array dataAngka index urutan
                    // menggunakan index dari array urutan untuk menentukan posisi nilai variabel a yang akan dimasukkan
                    // Nilai variabel a akan bertambah terus di setiap perulangan
                    foreach ($urutan as $val => $isi) {
                        $a+=1;
                        $dataAngka[$val]['urutan'] = $a;
                    }
                    // Perulangan untuk memasukkan nilai array dataAngka index jarak kedalam array gabung index jarak
                    // dan memasukkan nilai array dataAngka index jarak kedalam array gabung index urutan
                    for($i=0; $i<count($dataAngka); $i++) {
                        $gabung[$i]['jarak'] = $dataAngka[$i]['jarak'];
                        $gabung[$i]['urutan'] = $dataAngka[$i]['urutan'];
                    }

                    sort($gabung); // Mengurutkan nilai array gabung dengan index tetap
                    $b=1;
                    // Mengisi nilai array gabung index urut dengan nilai sesuai urutan dan mengisi nilai sama jika nilai jarak memiliki nilai yang sama
                    for($i=0; $i<count($dataAngka); $i++) {
                        if ($gabung[$i]['jarak'] == $gabung[abs($i-1)]['jarak']) {
                            $gabung[$i]['urut'] = $b;
                        } else {
                            if ($i < $b) {
                                $gabung[$i]['urut'] = $b;
                                $b+=1;
                            } else {
                                $b+=1;
                                $gabung[$i]['urut'] = $b;
                            }
                        }
                    }
                    // Memasukkan nilai array gabung index urut kedalam array dataAngka index urut
                    $c=0;
                    foreach ($urutan as $val => $isi) {
                        $dataAngka[$val]['urut'] = $gabung[$c]['urut'];
                        $c+=1;
                    }
                    // Menentukan nilai terkecil dari index urut
                    $terkecil1=10;
                    for($i=0; $i<count($dataAngka); $i++) {
                        if ($terkecil1>$dataAngka[$i]['urut']) {
                            $terkecil1=$dataAngka[$i]['urut'];
                        }
                    }
                    // Mencari dan Mengisi nilai array dataAngka index nn1 jika nilai terkecil samadengan variabel terkecil
                    for($i=0; $i<count($dataAngka); $i++) {
                        if ($terkecil1 == $dataAngka[$i]['urut']) {
                            $dataAngka[$i]['nn1'] = 1;
                        } else {
                            $dataAngka[$i]['nn1'] = 0;
                        }
                    }
                    // Mencari nilai array dataAngka index urut dan Mengisi kedalam array nn jika nilai urut lebihkecil samadengan 3
                    foreach ($dataAngka as $key => $value) {
                        if ($dataAngka[$key]['urut']<=3) {
                            $nn[$key] = $dataAngka[$key]['urut'];
                        }
                    }
                    // Mencari nilai array nn dan Mengisi kedalam array nn3 jika isi dari array nn tidak samadengan 3
                    foreach ($nn as $key => $value) {
                        if (count($nn) != 3) {
                            if ($dataAngka[$key]['urut']<=3) {
                                $nn3[$key] = $dataAngka[$key]['urut'];
                            }
                        } else {
                            $nn3[$key] = $dataAngka[$key]['urut'];
                        }
                    }
                    // Mengisi nilai 0 kedalam array dataAngka index nn3
                    for($i=0; $i<count($dataAngka); $i++) {
                        $dataAngka[$i]['nn3'] = 0;
                    }
                    // Memasukkan nilai sesuai index array nn3 kedalam array dataAngka index nn3
                    foreach ($nn3 as $key => $value) {
                        $dataAngka[$key]['nn3'] = $nn3[$key];
                    }
                    // Memilah nilai yang paling banyak untuk menentukan nilai nn1
                    $nilainn1tidak=0;
                    $nilainn1ya=0;
                    for($i=0; $i<count($dataAngka); $i++) {
                        if ($dataAngka[$i]['nn1'] > 0) {
                            if ($dataAngka[$i]['tbc'] == 0) {
                                $nilainn1tidak+=1;
                            } else {
                                $nilainn1ya+=1;
                            }
                        }
                    }
                    // Memilah nilai yang paling banyak untuk menentukan nilai nn3
                    $nilainn3tidak=0;
                    $nilainn3ya=0;
                    for($i=0; $i<count($dataAngka); $i++) {
                        if ($dataAngka[$i]['nn3'] > 0) {
                            if ($dataAngka[$i]['tbc'] == 0) {
                                $nilainn3tidak+=1;
                            } else {
                                $nilainn3ya+=1;
                            }
                        }
                    }
                ?>
                <br>
                <!-- Menampilkan input yang di pilih -->
                <div class="alert alert-info">
                    <p><b>Data baru</b></p>
                    <p>Usia = <?php echo $databarustring['usia']?>, Jenis Kelamin = <?php echo $databarustring['kelamin']?>, Batuk = <?php echo $databarustring['batuk']?>, Kondisi = <?php echo $databarustring['kondisi']?></p>
                </div>
            </div>
        </div>
    </div>
<!-- Menampilkan Tabel Perhitungan KNN -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><b>Perhitungan KNN</b></h1>
            <br>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>USIA</th>
                        <th>KELAMIN</th>
                        <th>BATUK</th>
                        <th>KONDISI</th>
                        <th>JARAK</th>
                        <th>URUTAN</th>
                        <th>1-NN</th>
                        <th>3-NN</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                            foreach ($dataAngka as $value) {
                                echo "<tr>";
                                echo "<td>".str_pad($value['no'],2,0,STR_PAD_LEFT)."</td>";
                                echo "<td>{$value['usia']}</td>";
                                echo "<td>{$value['kelamin']}</td>";
                                echo "<td>{$value['batuk']}</td>";
                                echo "<td>{$value['kondisi']}</td>";
                                echo "<td>&radic;({$value['usia']} - {$databaru1})<sup>2</sup> + ({$value['kelamin']} - {$databaru2})<sup>2</sup> + ({$value['batuk']} - {$databaru3})<sup>2</sup> + ({$value['kondisi']} - {$databaru4})<sup>2</sup> = ".number_format($value['jarak'],2)."</td>";
                                echo "<td>{$value['urut']}</td>";
                                echo "<td>{$value['nn1']}</td>";
                                echo "<td>{$value['nn3']}</td>";
                                echo "</tr>";
                            }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1><b>Kesimpulan</b></h1>
            <br>
            <div class="col-md-12">
                <div class="alert alert-info">
                <h4><b>1-NN</b></h4>
                <?php
                    // Menentukan Klasifikasi 1-NN
                    // Jika nilainn1tidak Lebih Besar dari nilainn1ya maka hasilnya Tidak
                    if ($nilainn1tidak>$nilainn1ya) {
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn1'] != 0) {
                                $tampung[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung); $i++) {
                            echo $tampung[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) diprediksi masuk kelas 'Tidak'.</p>";
                    // Jika nilainn1tidak Lebih Kecil dari nilainn1ya maka hasilnya Ya
                    } else if ($nilainn1tidak<$nilainn1ya) {
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn1'] != 0) {
                                $tampung[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung); $i++) {
                            echo $tampung[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) diprediksi masuk kelas 'Ya'.</p>";
                    // Jika nilainn1tidak Memiliki Nilai Sama dengan nilainn1ya maka hasilnya Bimbang
                    } else {
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn1'] != 0) {
                                $tampung[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung); $i++) {
                            echo $tampung[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) masih belum ditemukan kesimpulan yang valid.</p>";
                    }
                    ?>
                    <br>
                    <h4><b>3-NN</b></h4>
                    <?php
                    // Menentukan Klasifikasi 3-NN
                    // Jika nilainn3tidak Lebih Besar dari nilainn1ya maka hasilnya Tidak
                    if ($nilainn3tidak>$nilainn3ya) {
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn3'] != 0) {
                                $tampung1[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung1); $i++) {
                            echo $tampung1[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) diprediksi masuk kelas 'Tidak'.</p>";
                    // Jika nilainn3tidak Lebih Besar dari nilainn1ya maka hasilnya Ya
                    } else if ($nilainn3tidak<$nilainn3ya) {
                        
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn3'] != 0) {
                                $tampung1[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung1); $i++) {
                            echo $tampung1[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) diprediksi masuk kelas 'Ya'.</p>";
                    // Jika nilainn3tidak Lebih Besar dari nilainn1ya maka hasilnya Bimbang
                    } else {
                        foreach ($dataAngka as $value => $isi) {
                            if ($dataAngka[$value]['nn3'] != 0) {
                                $tampung1[] = $dataAngka[$value]['no'];
                            }
                        }
                        echo "<p>Data minimum terdekat terdapat pada data nomor ";
                        for($i=0; $i<count($tampung1); $i++) {
                            echo $tampung1[$i];
                            echo ", ";
                        }
                        echo  "Maka data uji ({$databarustring['usia']},{$databarustring['kelamin']},{$databarustring['batuk']},{$databarustring['kondisi']}) masih belum ditemukan kesimpulan yang valid.</p>";
                    }
                }

                // Jika Tombol Reset diTekan
                // Menghapus nilai dari data baru
                if (isset($_POST["reset"])) {
                    $databaru1 = '';
                    $databaru2 = '';
                    $databaru3 = '';
                    $databaru4 = '';
                }
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>