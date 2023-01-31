<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian</title>
    <script type="text/javascript">
        function myfunction(txt)
        {
            alert(txt)
        }
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo"><a href="index.html"><img src="GambarProjectwp/logotoko2.png" width="70px" height="70px"></a></div>
    </nav>

    <div class="wrapper">
        <h3>Informasi Pengiriman</h3>
        <form action="prosesphp.php" method="post">
            <p>
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" placeholder="Nama Anda...">
            </p>
            <p>
            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" placeholder="Alamat Anda...">
            </p>
            <p>
            <label for="voucher">Voucher Toko</label>
            <input type="text" id="voucher" name="voucher" placeholder="Masukkan Kode Voucher...">
            </p>
            <p>
            <label for="harga">Nama Barang</label>
            <input type="text" id="harga" name="barang" placeholder="Nama Barang...">
            </p>
            <p>
            <label for="harga">Harga</label>
            <input type="text" id="harga" name="harga" placeholder="Harga...">
            </p>

            <p>
                <?php
                    echo "Jumlah";
                    echo "<select name=jumlah>";
                    for ($jumlah=1; $jumlah<=10; $jumlah++)
                    {echo "<option value=".$jumlah.">".$jumlah."</option>";}
                    echo "</select>";
                ?>
            </p>

            <label for="ekspedisi">Opsi Pengiriman</label>
            <select name="ekspedisi" >
                <option value="-pilih-"></option>
                <option value="JNT">JNT</option>
                <option value="JNE">JNE</option>
                <option value="Ninja Express">Ninja Express</option>
                <option value="SiCepat">SiCepat</option>
            </select>

            <p>
            Metode Pembayaran :
            <input type="radio" name="metode" value="Transfer Bank"> Transfer Bank
            <input type="radio" name="metode" value="DANA"> DANA
            <input type="radio" name="metode" value="OVO"> OVO
            <input type="radio" name="metode" value="GOPAY"> GOPAY
            <input type="radio" name="metode" value="Minimarket"> Indomaret/Alfamart 
            </p>

            <p>
                Proteksi Kerusakan Produk:
                    <input type="checkbox" name="proteksi" value="ok">OK
            </p>

            <p>
                <input type="reset" onclick="myfunction('Semua isi form telah kami hapus. Silakan masukkan kembali data')"value="Hapus Semua Isi Form">
                <input type="submit" onclick="myfunction('Sudah yakin?')" value="Kirim">
            </p>

        </form>
    </div>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>pawpawpetshop.</h3>
                    <p>Belanja Online Kebutuhan Hewan Peliharaan HANYA DI SINI!</p>
                </div>
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>Website ini kami buat demi memenuhi tugas kelompok dari mata kuliah Web Programming I</p>
                </div>
                <div class="footer-section">
                    <h3>Address</h3>
                    <p>Jl. Banten No. 1 Karawang</p>
                </div>
                <div class="footer-section">
                    <h3>Narahubung</h3>
                    <p>08xxxxxxxx</p>
                </div>
            </div>
        </div>
    </div>

    <div id="copyright">
        <div class="wrapper">
            &copy; 2020. <b>Pawpawpetshop.</b> All Rights Reserved.
        </div>
    </div>
</body>
</html>