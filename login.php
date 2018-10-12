<html>
<body bgcolor="white"></br>
 <h1><center> SILAHKAN LOGIN </center></h1>
 <hr><hr></tr></br>
<form method="POST"></form>

<table align="center" border="2">
   <tr>
        <td>NAMA :</td>
        <td><input type="text" name="nama"></td>
   </tr>
   <tr>
        <td>PASSWORD :</td>
        <td><input type="password" name="password"></td>
   </tr>
</table>
    <table align="center"><tr><td align="center"><input type="submit" name="login" value="LOGIN"><button> <a href="datauser.php">REGISTER </a></button></td></center></tr>

    </table>
</form>
</body>
</html>

<?php 
  if (isset($_POST['submit'])) {
    session_start();
    include "koneksi.php";
    $nim=$_POST['nim'];
    $password=$_POST['password'];
    $sql="select nim,password FROM datauser where nim='$nim' ";

    $qry=mysql_query($koneksi,$sql);
    $row=mysql_fetch_row($qry);

    if ($nim==$row[0]) {
      if ($password==$row[1]) {
        $_SESSION["berhasil)login"]=1;
        $_SESSION["username "]=$row[0];
        $_SESSION["password"]=1;
        echo "berhasil login";  
      }
      else{
        echo "password yang anda masukkan salah";
      }
    }
      else{
        echo "maaf nim yang anda masukkan salah";
      }
  }

 ?>