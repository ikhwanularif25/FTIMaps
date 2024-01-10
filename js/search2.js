// Dapatkan search_query dari URL
const urlParams = new URLSearchParams(window.location.search);
const searchQuery = urlParams.get('search_query');

// Jika search_query ada, kirim permintaan ke server untuk hasil pencarian
if (searchQuery) {
    fetch(`api/search.php?search_query=${encodeURIComponent(searchQuery)}`)
        .then(response => response.json())
        .then(data => {
            console.log('Hasil Pencarian:', data);

            if (data.length > 0) {
                const result = data[0]; // Ambil data pertama dari respons (asumsi hanya 1 hasil)
                document.getElementById("judul").innerHTML = `<h1>${result.nama_gedung}</h1>`;
                document.getElementById("rincian").innerHTML = result.deskripsi_gedung;

                const iframe = document.createElement("iframe");
                iframe.src = result.gmaps;
                iframe.width = "100%";
                iframe.height = "100%";
                iframe.style.border = "0";
                iframe.allowfullscreen = "";
                iframe.loading = "lazy";
                iframe.referrerpolicy = "no-referrer-when-downgrade";

                const miniMapDiv = document.getElementById("gmaps");
                miniMapDiv.innerHTML = "";
                miniMapDiv.appendChild(iframe);
            } else {
                // Tidak ada hasil yang ditemukan
                document.getElementById("judul").innerHTML = "<h1>Data tidak ditemukan</h1>";
                document.getElementById("rincian").innerHTML = "";
                document.getElementById("gmaps").innerHTML = "";
            }
        })
        .catch(error => console.error("Error:", error));
}

