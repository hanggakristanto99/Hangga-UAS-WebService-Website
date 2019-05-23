<?php  
 $sumber = 'http://papaside.com/data.php';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);

 //echo $data[1]["nama_lokasi"];
 echo "<br/>";
 echo "<h1 align='center'>Cuaca Hari Ini <br> Di ".count($data)." wilayah Indonesia</h1>";
 echo "<br/>";
?>

<!DOCTYPE html>
<html>
<head>
 <title>Hangga | Uas-Web</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

 <div class="container">
  <div class="row">
    <div class="col-md-12">
       <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
           <th>No</th>
           <th>Kota</th>
           <th>Siang</th>
           <th>Malam</th>
           <th>Dini hari</th>
           <th>Suhu</th>
           <th>Kelembapan</th> 
            </tr>
          </thead>
          <tbody>
          <?php   
           for($a=1; $a < count($data); $a++)
           {
            print "<tr>";
            // penomeran otomatis
            print "<td>".$a."</td>";
            // menayangkan 
            print "<td>".$data[$a]['Kota']."</td>";
            print "<td>".$data[$a]['siang']."</td>";
            print "<td>".$data[$a]['malam']."</td>";
            print "<td>".$data[$a]['dini_hari']."</td>";
            print "<td>".$data[$a]['suhu']."</td>";
            print "<td>".$data[$a]['Kelembapan']."</td>";
            print "</tr>";
           }
          ?>
          </tbody>
</table>
    </div>
</div>
 </div>
</body>
</html>

      