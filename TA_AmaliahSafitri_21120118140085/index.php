
<html>
     <head>
          <title></title>
<style>
.tengah{
position: absolute;margin-top: -100px;margin-left: -200px;left: 50%;top: 50%;width: 400px;height: 500px;background-color: blue;
}
</style>
     <head>
     <body>
               <h1>          <?php
                class Perkenalan {
                 private $Hi;
                 private $Jujur;
                 private $Denda;
                 public function __construct($Hi, $Jujur, $Denda){
                   $this->Hi = $Hi;
                   $this->Jujur = $Jujur;
                   $this->Denda = $Denda;
               }
                   public function setHi($Hi){
                   $this->Hi = $Hi;
                 }
                  public function setJujur($Jujur){
                   $this->Jujur = $Jujur;
                 }
                  public function setDenda($Denda){
                   $this->Denda = $Denda;
                 }
                   public function getHi(){
                   return $this->Hi;
                 }
                  public function getJujur(){
                   return $this->Jujur;
                 }
                  public function getDenda(){
                   return $this->Denda;
                 }
               }
               $Sapa = new Perkenalan("Silahkan Isi data dibawah ini", "Isi data dibawah ini dengan JUJUR", "Data yang tidak sesuai dengan keadaan sesungguhnya akan dikenakan denda");

               echo $Sapa->getHi() . "<br>";
               echo $Sapa->getJujur() . "<br>";
               echo $Sapa->getDenda() . "<br>";
               ?> </h1>
               
 <div align="center" class="tengah"><p align="center"><font face="verdana" size="6" color="white">Silahkan Login Dahulu</font></p>

          <link rel="stylesheet" type="text/css" href = "style.css">
          <form method='POST' action='hasil.php'name ="pegawai">  
             A. Nama Lengkap:</label>
               <input type = text required="text" name="nama" id="nama" onkeydown="preventnumberinput(event)" onkeyup="preventnumberinput(event)">
               </br></br>
         B. Tempat dan Tanggal Lahir :
            <h4>   <select name="Tempat" required="text">
                    <option value="Jawa"> Jawa</option>
                    <option value="Sulawesi"> Sulawesi </option>
                    <option value="Kalimantan"> Kalimantan</option>
                    <option value="Sumatra"> Sumatra</option>
                    <option value="Papua"> Papua</option>
                    </select>
                    <select input type = number required="number" name="Tanggal">
                    <option value="01"> 01</option>
                    <option value="02"> 02</option><option value="03">03</option>
                    <option value="04">04 </option><option value="05">05</option>
                    <option value="06">06</option><option value="07">07</option>
                    <option value="08"> 08</option><option value="09"> 09</option>
                    <option value="10"> 10</option><option value="11"> 11</option>
                    <option value="12"> 12</option><option value="13"> 13</option>
                    <option value="14"> 14</option><option value="15"> 15</option>
                    <option value="16"> 16</option><option value="17"> 17</option>
                    <option value="18"> 18</option><option value="19"> 19</option>
                    <option value="20"> 20</option><option value="21"> 21</option>
                    <option value="22"> 22</option><option value="23"> 23</option>
                    <option value="24"> 24</option><option value="25"> 25</option>
                    <option value="26"> 26</option><option value="27"> 27</option>
                    <option value="28"> 28</option><option value="29"> 29</option>
                    <option value="30"> 30</option><option value="31"> 31</option>
                    </select>
                    <select name="Bulan">
                    <option value="Januari"> Januari</option>
                    <option value="Februari"> Februari</option><option value="Maret">Maret</option>
                    <option value="april">april </option><option value="Mei">Mei</option>
                    <option value="Juni">Juni</option><option value="Juli">Juli</option>
                    <option value="Agustus"> Agustus</option><option value="September"> September</option>
                    <option value="Oktober"> Oktober</option><option value="November"> November</option>
                    <option value="Desember"> Desember</option>
                    </select>
                    <select name="Tahun">
                    <option value="2002"> 2002</option><option value="2001"> 2001</option>
                    <option value="2000"> 2000</option><option value="1999"> 1999</option>
                    <option value="1998"> 1998</option><option value="1997"> 1997</option>
                    <option value="1996"> 1996</option><option value="1995"> 1995</option>
                    <option value="1994"> 1994</option><option value="1993"> 1993</option>
                    <option value="1992"> 1992</option><option value="1991"> 1991</option>
                    <option value="1990"> 1990</option><option value="1989"> 1989</option>
                    <option value="1988"> 1988</option><option value="1987"> 1987</option>
                    <option value="1986"> 1986</option><option value="1985"> 1985</option>
                    <option value="1984"> 1984</option><option value="1983"> 1983</option>
                    <option value="1982"> 1982</option><option value="1981"> 1981</option>
                    <option value="1980"> 1980</option>
                    </select></h4>
                    <label for="alamat">
           C. Alamat:</label></td>
               <input type = text class="form_login" required="text" name="alamat" >
               </br></br>
                  <label for="agama">

          D. Agama : </td>
          <select name="agama">
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Lainnya">Lainnya</option>
          </select>
          <h4>

         E. Jenis Kelamin :</label></td>
               <Select name="jk" class="form_login" id="jk">
               <option value='pria'>--Pria--</option>
               <option value='wanita'>--Wanita--</option>
               </Select>
               </br></br>
           F. Lulusan :
               <select name="lulusan" id="lulusan">
                    <option value="SMP Sederajat"> SMP Sederajat</option>
                    <option value="SMA/SMK/MA"> SMA/SMK/MA</option>
                    <option value="D1"> D1 </option>
                    <option value="D3"> D3 </option>
                    <option value="S1/D4"> S1/D4 </option>
                    <option value="S2"> S2</option>
                    </select><Br><br>
            <label for="nip">
         G. NIP:</label>
               <input type = number class="form_login" name="nip" >
               </br></br>

          H. Golongan :
               <select name="golongan" id="golongan">
                    <option value="1"> 1</option>
                    <option value="2"> 2</option>
                    <option  value="3"> 3</option>
                    </select><Br><br>

          <input type="submit" class="tombol_login" name="submit" value="Submit"/>
          <TD><input type="Reset" class="tombol_login" value="Reset" ></TD>
          </h4>
          </form>
     
          <script type="text/javascript" src="script.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     </div></body>
</html>






