<form action="tambah-proses.php" method="POST" >

    <fieldset>

        <table>
            <tr>
                <td><label for="kode">kode: </label></td>
                <td><input type="text" name="kode" id="kode" placeholder="kode" /></td>
            </tr>   
            <tr>
                <td><label for="nama">nama: </label></td>
                <td><input type="text" name="nama" id="nama" placeholder="nama" /></td>
            </tr>
            <tr>
                <td><label for="jk">jenis kelamin: </label></td>
                <td>
                    <select>
                        <option value="L">laki-laki</option>
                        <option value="p">perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="tempat_lahir">tempat lahir</label></td>
                <td><input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="tempay_lahir" /></td>
            </tr>
            <tr>
            <td><label for="tanggal_lahir">tanggal lahir</label></td>
            <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" placeholder="MM/DD/YYYY" /></td>
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
                 <td><label for="kab">kab kota: </label></td>
                <td><input type="text" name="kab" id="kab" placeholder="kab"/></td>
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
                <td><label for="jabatan">jabatan: </label></td>
                <td>
                    <select name="jabatan" id="">
                        <option value="0">admin</option>
                        <option value="1">kasir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="pendidikan">pendidikan: </label></td>
                <td>
                    <select name="pendidikan" id="">
                            <option value="0">smp</option>
                            <option value="1">sma/smk</option>
                            <option value="2">s1</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="tambah" name="tambah" /></td>
            </tr>
        </table>
    </fieldset>
</form>