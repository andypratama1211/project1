<form action="tambah-proses.php" method="POST" >

    <fieldset>

        <table>
            <tr>
                <td><label for="kode">kode: </label></td>
                <td><input type="text" name="kode" id="kode" placeholder="kode"/></td>
            </tr>
            <tr>
                <td><label for="nama">nama: </label></td>
                <td><input type="text" name="nama" id="nama" placeholder="nama" /></td>
            </tr>

            <tr>
                <td><label for="alamat">alamat</label></td>
                <td><input type="text" name="alamat" id="alamat" placeholder="alamat"/></td>
            </tr>
            <tr>
                 <td><label for="kecamatan">kecamatan: </label></td>
                <td><input type="text" name="kecamatan" id="kecamatan" placeholder="kecamatan"/></td>
            </tr>
            <tr>
                 <td><label for="kelurahan">kelurahan: </label></td>
                <td><input type="text" name="kelurahan" id="kelurahan" placeholder="kelurahan"/></td>
            </tr>
            <tr>
                 <td><label for="kab_kota">kab kota: </label></td>
                <td><input type="text" name="kab_kota" id="kab_kota" placeholder="kab_kota"/></td>
            </tr>
            <tr>
                <td><label for="kode_pos">kode pos: </label></td>
                <td><input type="text" name="kode_pos" id="kode_pos" placeholder="kode_pos"/></td>
            </tr>
            <tr>
                <td><label for="email">email:  </label></td>
                <td><input type="text" name="email" id="email" placeholder="email"/></td>
            </tr>
            <tr>
                <td><label for="notelp">notelp: </label></td>
                <td><input type="text" name="notelp" id="notelp" placeholder="notelp"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="tambah" name="tambah" /></td>
            </tr>
        </table>
    </fieldset>
</form>