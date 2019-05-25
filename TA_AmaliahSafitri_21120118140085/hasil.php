
<html>
     <head>
          <title>TERIMA KASIH TELAH MENGISI</title>
     <head>
     <body>
       <link rel="stylesheet" type="text/css" href = "style.css">
    <table>
      <tr>
        <td > Nama Lengkap : <?php echo $nama = $_POST['nama']; ?></td> 
      </tr>
       <tr>
        <td > Tempat dan Tanggal lahir : <?php echo $Tempat = $_POST['Tempat'], " ,", $Tanggal = $_POST ['Tanggal'], " ", $Bulan = $_POST ['Bulan'], " ",  $Tahun = $_POST ['Tahun'] ;?> </td> 
      </tr>
      <tr>
        <td > Alamat : <?php echo $alamat = $_POST['alamat']; ?></td> 
      </tr>
       <tr>
        <td > Agama : <?php echo $agama = $_POST['agama']; ?></td> 
      </tr>
       <tr>
        <td > Lulusan : <?php echo $lulusan = $_POST['lulusan']; ?></td> 
      </tr>
      <tr>
        <td > Jenis Kelamin : <?php echo $jk = $_POST['jk']; ?></td> 
      </tr>
       <tr>
        <td > NIP : <?php echo $nip = $_POST['nip']; ?></td> 
      </tr>
      <tr>
        <td > Golongan : <?php echo $golongan = $_POST['golongan']; ?></td> 
      <tr>
        <td> <?php $jk = $_POST['jk'];
         if ($jk == 'pria')
               {
             $hasil = 'Selamat datang Bapak '.$nama; 
               }
               else 
               {
            $hasil = 'Selamat datang Ibu '.$nama;
               }       
               echo $hasil;?></td> 
      </tr>
      <tr>
<h3><blink><center>Selamat Anda Telah Berhasil Mengisi Formulir Pegawai Dengan Baik</blink></h3></center>
</blink></h3></tr>
    </table>      

     </body>
</html>
