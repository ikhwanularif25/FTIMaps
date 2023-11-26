    // Daftar saran pencarian (contoh)
    var suggestions = [
        "Location 1",
        "Location 2",
        "Another Place",
        "Specific Area",
        "Destination X"
    ];

    var searchInput = document.getElementById("searchInput");
    var suggestionBox = document.getElementById("suggestionBox");

    searchInput.addEventListener("input", function () {
        var userInput = searchInput.value.toLowerCase();
        var matchedSuggestions = suggestions.filter(function (suggestion) {
            return suggestion.toLowerCase().startsWith(userInput);
        });

        // Tampilkan hasil pencarian yang cocok dengan input pengguna
        suggestionBox.innerHTML = "";
        matchedSuggestions.forEach(function (suggestion) {
            var div = document.createElement("div");
            div.textContent = suggestion;
            div.addEventListener("click", function () {
                searchInput.value = suggestion;
                suggestionBox.innerHTML = ""; // Sembunyikan saran saat salah satu dipilih
                // Lakukan navigasi atau aksi lainnya sesuai kebutuhan
            });
            suggestionBox.appendChild(div);
        });
    });