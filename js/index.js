document.getElementById("getsearch").addEventListener("submit", function (event) {
    event.preventDefault();
    const searchQuery = document.getElementById("search_query").value;

    // Redirect ke content.php dengan menyertakan parameter pencarian
    if (searchQuery.trim() !== '') {
        window.location.href = `content.php?search_query=${encodeURIComponent(searchQuery)}`;
    } else {
        // Tindakan jika pencarian kosong, misalnya menampilkan pesan untuk mengisi formulir
        alert('Masukkan kata kunci pencarian.');
    }

    
});
