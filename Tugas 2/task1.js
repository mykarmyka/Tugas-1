function cetakAngka() {
    for (let i = 1; i <= 5; i++) { // mengganti var dengan let untuk membuat scope baru pada setiap iterasi
        setTimeout(function () {
            console.log(i);
        }, i * 1000);    //setTimeout akan menampilkan angka dengan jeda 1 detik
    }
}

cetakAngka();
