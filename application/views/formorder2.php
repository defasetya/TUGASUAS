<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-20">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM ORDER</title>
</head>
<body text="white" bgcolor="black">
    <form action="formorderout2" method="post">
        <h1 align="center"><div class="logo">
                    <a href="<?php echo base_url() . "index.php" ?>"><img src="<?php echo base_url('assets/images/logo2.png') ?>" alt="#" /></a></h1>
    
    <table style="margin : 20px auto;">
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td class="center"><input type="text" name="nama1"></td>
        </tr>
        <tr>
            <td>Nomor Telepon </td>
            <td>:</td>
            <td><input type="text" name="notelp"></td>
        </tr>
        <tr>
        </tr><tr>
            <td>Jumlah Beli Tiket</td>
            <td>:</td>
            <td><input type="text" name="jumlah"></td>
        </tr>
        <tr>
            <td>Jenis Tiket</td>
            <td>:</td>
            <td><select name="jenis">
                <option>--Pilih--</option>
                <option>Silver Day 1</option>
                <option>Silver Day 2</option>
                <option>Gold 2 Day</option>
                <option>Diamond 2 Day</option>
            </select>
        </td>
        </tr>
        <tr>
            <td>Kode Pembayaran</td>
            <td>:</td>
            <td><select name="kodeunik">
                <option>--Pilih--</option>
                <option>S1 (Silver Day 1)</option>
                <option>S2 (Silver Day 2)</option>
                <option>G2 (Gold 2 Day)</option>
                <option>D2 (Diamond 2 Day)</option>
            </select>
        </tr>
        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td><select name="metode">
                <option>--Pilih--</option>
                <option>Alfamart</option>
                <option>Indomart</option>
            </select>
        </tr>
    </table>

    <br/>
    <table style="margin : 20px auto;">
    <td><input type="submit" value="Pesan Tiket"><input type="reset" value="Batal"></td>
    </form>

</body>
</html>