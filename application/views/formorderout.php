<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-20">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>TAMPIL ARALUZT FLORIST</title>
    </head>
    <body text="black" bgcolor="WHITE">
    
    <?php
    $nama = $_POST['namacust'];
    $email = $_POST['email'];
    $JumlahTiket = $_POST['JumlahTiket'];
    $jumlah = $_POST['jumlah'];

    switch($jenis) {
        case '25 Agustus': $jns = 139000;
        break;
        case '24 Agustus': $jns = 118000;
        break;
        
        default: $jns ="Tak ada jenis bunga";
    }

    $total = $jns*$jumlah;
    if ($jumlah >=5) {
        $diskon = $total/100*5;
    }
    elseif ($jumlah >=10) {
        $diskon = $total/100*10;
    }
    else {
        $diskon = 0;
    }

    $bayar = $total-$diskon;
    ?>

    <table>
        <tr>
            <th>ARALUZT FLORIST</th>
        </tr>
        <tr>
            <td colspan="3" style="border-top:  1px dashed #000"></td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><? echo $email; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$jns; ?></td>
        </tr>
        <tr>
            <td>Hari Ke</td>
            <td>:</td>
            <td><?php echo $JumlahTiket; ?></td>
        </tr>
        <tr>
            <td>Jumlah beli</td>
            <td>:</td>
            <td><?php echo $jumlah; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="border-top: 1px dashed #000"></td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$total; ?></td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$diskon; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="border-top: 1px dashed #000"></td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$bayar; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="border-top: 1px dashed #000"></td>
        </tr>
    </table>
    <br/>
    <a href="formorder.php">Kembali</a>
    </body>

    </html>