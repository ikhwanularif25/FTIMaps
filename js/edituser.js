// edituser.js

// Fungsi untuk membuka modal pengaturan pengguna
function openSettingsModal() {
    var modal = document.getElementById('settingsModal');
    modal.style.display = 'block';
}

// Fungsi untuk menutup modal pengaturan pengguna
function closeSettingsModal() {
    var modal = document.getElementById('settingsModal');
    modal.style.display = 'none';
}

// Menampilkan modal saat tombol "Pengaturan Pengguna" ditekan
function openSettings() {
    openSettingsModal();

    var settingsForm = document.getElementById('userSettingsForm');
    settingsForm.addEventListener('submit', function (event) {
        event.preventDefault();

        var newUsername = document.getElementById('new_username').value;
        var newPassword = document.getElementById('new_password').value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'api/updateuser.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (xhr.status === 200) {
                // Jika respons berhasil
                var response = xhr.responseText;
                alert(response); // Tampilkan pesan respons dari server
                location.reload(); // Refresh halaman setelah berhasil diperbarui
            } else {
                // Jika respons tidak berhasil
                alert('Terjadi kesalahan saat memperbarui data pengguna.');
            }
        };
        xhr.send('new_username=' + newUsername + '&new_password=' + newPassword);
    });
}

// Menutup modal saat tombol close di dalam modal ditekan
var closeButtons = document.getElementsByClassName('close');
for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].onclick = function () {
        closeSettingsModal();
    };
}

// Menutup modal saat area di luar modal ditekan
window.onclick = function (event) {
    var modal = document.getElementById('settingsModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
};
