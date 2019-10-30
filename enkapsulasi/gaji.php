<!DOCTYPE html>
<html>
<head>
    <title>Form Penggajian</title>
</head>
<body>
    <fieldset>
        <legend><h2>Data Karyawan</h2></legend>
        <form action="gajipro.php" method="post">
        <table>
        <tr>
            <td><label for="">Nama</label></td>
            <td><input type="text" name="nama"><br></td>
        </tr>
        <tr>
            <td><label for="">NIP</label></td>
            <td><input type="number" name="nip"><br></td>
        </tr>
        <tr>
            <td><label for="">Alamat</label></td>
            <td><textarea name="alamat" cols="20" rows="5"></textarea><br></td>
        </tr>
        
        <tr>
            <td><label for="">Jumlah Hari Kerja</label></td>
            <td><input type="number" name="jml_hari" min="1" max="30"><br></td>
        </tr>
        <tr>
            <td><input type="submit" name="simpan" value="Simpan"></td>
        </tr>
        </table>
        </form>
    </fieldset>
</body>
</html> 