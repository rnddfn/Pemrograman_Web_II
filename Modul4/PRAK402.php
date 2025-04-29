<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
        }
        th {
            background-color: gray;
        }
    </style>
</head>
<body>
    
    <?php 
        $mahasiswa = array(
            "mhs1"=> array(
                "Nama" => "Andi", 
                "NIM" => "2101001",
                "Nilai UTS" => 87, 
                "Nilai UAS" => 65
            ),
            "mhs2"=> array(
                "Nama" => "Budi", 
                "NIM" => "2101002",
                "Nilai UTS" => 76, 
                "Nilai UAS" => 79
            ),
            "mhs3"=> array(
                "Nama" => "Tono", 
                "NIM" => "2101003",
                "Nilai UTS" => 50, 
                "Nilai UAS" => 41
            ),
            "mhs4"=> array(
                "Nama" => "Jessica", 
                "NIM" => "2101004",
                "Nilai UTS" => 60, 
                "Nilai UAS" => 75
            )
        );

        echo "<table>";
        echo "<tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>

              </tr>";
              
              foreach ($mahasiswa as $mhs) {
                  $nilaiAkhir = ($mhs["Nilai UTS"] * 40 / 100) + ($mhs["Nilai UAS"] * 60 / 100);
                  
                  if ($nilaiAkhir >= 80) {
                      $huruf = "A";
                  } elseif ($nilaiAkhir >= 70) {
                      $huruf = "B";
                  } elseif ($nilaiAkhir >= 60) {
                      $huruf = "C";
                  } elseif ($nilaiAkhir >= 50) {
                      $huruf = "D";
                  } else {
                      $huruf = "E";
                  }
      
                  echo "<tr>
                          <td>{$mhs['Nama']}</td>
                          <td>{$mhs['NIM']}</td>
                          <td>{$mhs['Nilai UTS']}</td>
                          <td>{$mhs['Nilai UAS']}</td>
                          <td>". number_format($nilaiAkhir, 2) ."</td>
                          <td>$huruf</td>
                        </tr>";
              }
        echo "</table>";
    ?>

</body>
</html>
