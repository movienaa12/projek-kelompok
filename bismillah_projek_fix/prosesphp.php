<html>
<head>
    <title>Form Pembelian</title>
</head>
<body>
<?php
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$voucher=$_POST['voucher'];
$ekspedisi=$_POST['ekspedisi'];
$metode=$_POST['metode'];
$proteksi=$_POST['proteksi'];
$jumlah=$_POST['jumlah'];
$harga=$_POST['harga'];
$barang=$_POST['barang'];
?>

<?php
    $total1= $jumlah*$harga
?>

<?php if ($voucher=="PAWPAW5K")
{$diskon=5000;}
elseif ($voucher=="PAWPAW3K")
{$diskon=3000;}
else
{$diskon=0;} ?> 

<?php
    $total2= ($jumlah*$harga)-$diskon
?>

<table border=1 bgcolor="yellow">
<tr>
<td colspan=2 align="center"><b>Form Pembelian</b></td>
</tr>
<tr>
<td>Nama</td><td><?php echo $nama;?></td>
</tr>
<tr>
<td>Alamat</td><td><?php echo $alamat;?></td>
</tr>
<tr>
<td>Voucher Toko</td><td><?php echo $voucher;?></td>
</tr>
<tr>
<td>Jumlah</td><td><?php echo $jumlah;?></td>
</tr>
<tr>
<td>Barang</td><td><?php echo $barang;?></td>
</tr>
<tr>
<td>Harga</td><td><?php echo $harga;?></td>
</tr>
<tr>
<td>Total</td><td><?php echo $total1;?></td>
</tr>
<tr>
<td>Diskon</td><td><?php echo $diskon;?></td>
</tr>
<tr>
<td>Total Akhir</td><td><?php echo $total2;?></td>
</tr>
<tr>
<td>Opsi Pengiriman</td><td><?php echo $ekspedisi;?></td>
</tr>
<tr>
<td>Metode Pembayaran</td><td><?php echo $metode;?></td>
</tr>
<tr>
<td>Proteksi Kerusakan Produk</td><td><?php echo $proteksi;?></td>
</tr>
</table>
<a href="index.html">BELANJA LAGI</a>
</body>
</html>
