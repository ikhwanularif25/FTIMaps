<table>
        <tr>
            <th>ID Gedung</th>
            <th>Nama Gedung</th>
            <th>Deskripsi Gedung</th>
            <th>Google Maps</th>
            <th>Action</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($dataGedung)) { ?>
            <tr>
                <td><?php echo $row['id_gedung']; ?></td>
                <td><?php echo $row['nama_gedung']; ?></td>
                <td><?php echo $row['deskripsi_gedung']; ?></td>
                <td>
                    <iframe src="<?php echo $row['gmaps']; ?>"></iframe>
                </td>

                <td>
                    <form action="admin.php" method="POST">
                        <input type="hidden" name="id_gedung" value="<?php echo $row['id_gedung']; ?>">
                        <button type="submit" name="edit">Edit</button>
                    </form>
                    <br>
                    <form action="admin.php" method="POST" id="hapusForm_<?php echo $row['id_gedung']; ?>">
                        <input type="hidden" name="id_gedung" value="<?php echo $row['id_gedung']; ?>">
                        <button type="button" onclick="konfirmasiHapus(<?php echo $row['id_gedung']; ?>)">Hapus</button>
                        <input type="hidden" name="hapus">
                    </form>
                </td>
            </tr>
        <?php } ?>
        </table>
        <?php if (isset($_POST['edit'])) { ?>
        <!-- Form untuk mengedit gedung -->
        <div id="editForm" class="edit"><h2>Edit Gedung</h2>
            <form action="admin.php" method="POST">
                <input type="hidden" name="id_gedung" value="<?php echo $id_gedung; ?>">
                <label for="nama_gedung">Nama Gedung:</label>
                <input type="text" id="nama_gedung" name="nama_gedung" value="<?php echo $nama_gedung; ?>" required><br>
                <label for="deskripsi_gedung">Deskripsi Gedung:</label>
                <textarea id="deskripsi_gedung" name="deskripsi_gedung" required><?php echo $deskripsi_gedung; ?></textarea><br>
                <label for="gmaps">Google Maps:</label>
                <input type="text" id="gmaps" name="gmaps" class="gmaps-edit" value="<?php echo $gmaps; ?>" required><br>
                <input type="submit" value="Simpan" name="simpan">
            </form>
        </div>
        
    <?php } ?>       