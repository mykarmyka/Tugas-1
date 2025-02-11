// fungsi fetchData mengembalikan Promise yang resolve setelah data diambil.
function fetchData() {
    return new Promise((resolve, reject) => {  //resolve menandakan bahwa operasi berhasil dan mengembalikan hasilnya 
        setTimeout(() => {                     //reject digunakan untuk menandakan bahwa operasi gagal dan mengembalikan error
            console.log('Data fetched');
            resolve({ data: 'Some data' }); //mengganti callback dengan resolve
        }, 2000);
    });
}

// fungsi processData akan mengembalikan Promise yang resolve setelah data diproses.
function processData(data) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log('Processing data:', data);
            resolve(`Processed: ${data.data}`);  //mengganti callback dengan resolve
        }, 2000);  //waktu yg digunakan 2detik untuk menunggu hasil data 
    });
}

// fungsi saveData mengembalikan Promise yang resolve setelah data disimpan.
function saveData(processedData) {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            console.log('Data saved:', processedData);
            resolve('Success');     //mengganti callback dengan resolve
        }, 2000);
    });
}

// fungsi main menggunakan async/await untuk menjalankan semua operasi secara berurutan
async function main() {
    try {
        // menunggu fetchData selesai dan mendapatkan data yang diambil
        const fetchedData = await fetchData();
        
        // menunggu processData selesai dengan data yang diambil
        const processedData = await processData(fetchedData);
        
        // menunggu saveData selesai dengan data yang sudah diproses
        const result = await saveData(processedData);
        
        // menampilkan hasil akhir setelah semua operasi selesai
        console.log('All operations completed:', result);
    } catch (error) {
        // menangani kesalahan di salah satu operasi
        console.error('Error:', error);
    }
}

// menjalankan fungsi utama
main();
