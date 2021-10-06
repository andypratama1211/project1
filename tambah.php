 <center><h1>tambah data</h1></center>
 <form action="" method="POST" >
        <fieldset>
            <center>
            <table>
                <tr>
                    <td><label for="id_barang">id_barang: </label></td>
                    <td><input type="text" name="id_barang" id="id_barang" placeholder="id_barang"/></td>
                </tr>   
                <tr>
                    <td><label for="nama_barang">nama_barang: </label></td>
                    <td><input type="text" name="nama_barang" id="nama_barang" placeholder="nama_barang"/></td>
                </tr>
                <tr>
                    <td><label for="date">tanggal: </label></td>
                    <td><input type="date" name="date" id="date" placeholder="mm/dd/yy"></td>
                </tr>
                <tr>
                    <td><label for="jenis">jenis: </label></td>
                    <td>
                        <select name="jenis">
                            <option value="">pilih jenis</option>
                            <option value="makanan">makanan</option>
                            <option value="minuman">minuman</option>
                            <option value="snack">snack</option>
                            <option value="bahandapur">bahan dapur</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="harga">harga: </label></td>
                    <td><input type="text" name="harga" id="harga" placeholder="harga" /></td>
                </tr>
                <tr>
                <td><label for="stok">stok</label></td>
                <td><input type="text" name="stok" id="stok" placeholder="stok" /></td>
                </tr>
                <tr>
                    <td><label for="id_suplier">id_suplier</label></td>
                    <td><input type="text" name="id_suplier" id="id_suplier" placeholder="id_suplier"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="tambah" name="proses" /></td>
                </tr>
            </table>
            </center>
        </fieldset>
    </form>

<?php
    include "config.php";

    if(isset($_POST['proses'])){
        mysqli_query($connect, "INSERT into produk set
        id_barang = '$_POST[id_barang]',
        nama_barang = '$_POST[nama_barang]',
        date = '$_POST[date]',
        jenis = '$_POST[jenis]',
        stok = '$_POST[stok]',
        harga = '$_POST[harga]',
        id_suplier = '$_POST[id_suplier]'");

echo "berhasil di tambahkan";
    
    }
?>