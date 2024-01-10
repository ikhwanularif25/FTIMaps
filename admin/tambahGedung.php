<h2>Tambah Gedung Baru</h2>
<form action="admin.php" method="POST" >
    <label for="nama_gedung">Nama Gedung:</label>
    <input type="text" id="nama_gedung" name="nama_gedung" required><br>
    <label for="deskripsi_gedung">Deskripsi Gedung:</label>
    <textarea id="deskripsi_gedung" name="deskripsi_gedung" required></textarea><br>
    <label for="gmaps">Google Maps:</label>
    <input type="text" id="gmaps" name="gmaps" required><br>
    <input type="submit" value="Tambah" name="tambah">
</form>
