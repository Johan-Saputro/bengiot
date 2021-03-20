<html>
 <head>
 <title>UPDATE</title>
 </head>
 <body>
 <header>
 <h1 align="center">UPDATE DATA</h1> <hr size=3 color="black">
 </header>
 <div class="isi" align="center">
 <form method="POST" action="prosesupdate.php">
 <table>
 <tr>
 <td>Brand</td>
<td>:</td>
 <td>
 <select name="brand">
 <option>
</option>
<option>LimeSDR</option>
 <option>Ettus</option>
 <option>BladeRF</option>
 <option>RaspberryPi</option>
 <option>VNA</option>

 </select>
 </td>
 </tr>
 <tr>
 <td>Jumlah</td>
 <td>:</td>
<td><input type="jumlah" name="jumlah"value=""></td>
 </tr>
 <tr>
 <td>
<input type="submit" value="Kirim">
 <input type="reset" value="Reset">
 </td>
 </tr>
 </table>
 </form>
 </div>
 </body>
</html>