<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-20">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <title>Bukti Pembelian Tiket</title>
    </head>
    <body text="white" bgcolor="black">
    
    <?php
    $nama = $_POST['nama1'];
    $notelp = $_POST['notelp'];
    $jenis = $_POST['jenis'];
    $jumlah = $_POST['jumlah'];
    $kodeunik = $_POST['kodeunik'];
    $metode = $_POST['metode'];

    switch($jenis) {
        case 'Silver Day 1': $jns = 150000;
        break;
        case 'Silver Day 2': $jns = 150000;
        break;
        case 'Gold 2 Day': $jns = 280000;
        break;
        case 'Diamond 2 Day': $jns = 350000;
        break;
        default: $jns ="Tak ada jenis tiket ";
    }
    switch($kodeunik) {
        case 'S1 (Silver Day 1)': $kodeunik = 193821478988;
        break;
        case 'S2 (Silver Day 2)': $kodeunik = 248274899284;
        break;
        case 'G2 (Gold 2 Day)': $kodeunik = 384924834282;
        break;
        case 'D2 (Diamond 2 Day)': $kodeunik = 989382192128;
        break;
        default: $ku ="Tak ada jenis tiket ";
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

        <table style="margin : 20px auto;">
        <tr>
        <h1 align="center"><div class="logo">
                    <a href="<?php echo base_url() . "index.php" ?>"><img src="<?php echo base_url('assets/images/logo2.png') ?>" alt="#" /></a></h1>
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
            <td>Kode Pembayaran</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "",$kodeunik; ?></td>
        </tr>
        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td><?php echo $metode; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?php echo $notelp; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$jns; ?></td>
        </tr>
        <tr>
            <td>Jenis Tiket</td>
            <td>:</td>
            <td><?php echo $jenis; ?></td>
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
            <td>Total Bayar</td>
            <td>:</td>
            <td style="padding-left: ;100px"><?php echo "Rp. ",$bayar; ?></td>
        </tr>
        
    </table>
    <table style="margin : 20px auto;">
    <tr>
            <td>SCREENSHOT DAN SIMPAN BUKTI PEMESANAN TIKET INI</td>
    </br>
    </body>

    </html>