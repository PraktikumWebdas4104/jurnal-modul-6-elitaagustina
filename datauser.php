<form method="POST">
	<table>
		<tr> 
			<td> NAMA : </td><td> <input type="text" name="nama"></td>
		</tr>
		<tr> 
			<td> NIM : </td><td> <input type="text" name="nim"></td>
		</tr>

		<tr>
			<td> KELAS</td>
			<TD>:</TD>
			<td><input type="radio" name="kelas" value="D3MI4101" checked>D3MI4101<br>
				<input type="radio" name="kelas" value="D3MI4102" checked>D3MI4102<br>
				<input type="radio" name="kelas" value="D3MI4103" checked>D3MI4103<br>
				<input type="radio" name="kelas" value="D3MI4104" checked>D3MI4104<br>
		</tr>
		
		<tr>
			<td> JK :</td><td><input type="radio" name="jk" value="perempuan" checked>perempuan<br></td>
			<td> JK :</td><td><input type="radio" name="jk" value="laki-laki" checked>laki-laki<br></td>
		</tr>

		<tr>
		<td>Hobi : <br/>
			<input type="checkbox" name="hobi" value="membaca">MEMBACA<br/>
			<input type="checkbox" name="hobi" value="makan">MAKAN<br/>
			<input type="checkbox" name="hobi" value="berenang">BERENANG<br/>
			<input type="checkbox" name="hobi" value="travelling">TRAVELLING<br/>
			<input type="checkbox" name="hobi" value="shoping">SHOPING<br/><br/>
		</td>
	</tr>

		</tr>
		<tr>
			<td><select name="fakultas" required>
	 			<option value="fit">FAKULTAS ILMU TERAPAN</option>
	  			<option value="fik">FAKULTAS TEKNIK ELEKTRO</option>
	  			<option value="feb">FAKULTAS REKAYASA INDUSTRI</option>
	  			<option value="fkb">FAKULTAS KOMUNIKASI BISNIS</option>
			</td>
		</tr>

		<tr>
			<td> ALAMAT</td>
			<TD>:</TD>
			<TD> <TEXTAREA nama="alamat"></TEXTAREA></TD>
		</tr>

		<tr>
			<td> PASSWORD</td>
			<TD>:</TD>
			<TD> <input type="password" name="password"></TD>
		</tr>

		

	</table>
</form>

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
				$_SESSION["username "]=1;
				$_SESSION["password"]=1;
				
				
			}
		}

	}

 ?>