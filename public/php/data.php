<?php




// Home
$service = [
    [
        "title" => "Kerja Sama",
        "icon" => "bi-people-fill",
        "body" => "Kerja sama menjadi pilar utama di Prodi Teknik Informatika, di mana mahasiswa dan dosen bersatu padu dalam memecahkan permasalahan teknologi yang kompleks."
    ],
    [
        "title" => "Manajemen waktu dan pembelajaran",
        "icon" => "bi-calendar-check",
       "body" =>"Manajemen waktu menjadi kunci kesuksesan mahasiswa kami, dengan mengatur jadwal belajar yang efisien dan produktif."
    ],
    [
        "title" => "Kualitas pembelajaran",
        "icon" => "bi-book",
        "body" => "Kualitas pembelajaran di Prodi ini tak diragukan, dengan kurikulum terkini dan metode mengajar yang interaktif."
    ],
    [
        "title" => "Pola pikir",
        "icon" => "bi-lightbulb",
       "body" => "Pola pikir inovatif dan berorientasi pada solusi menjadi bagian esensial dari pendidikan di Prodi ini, menginspirasi mahasiswa untuk berpikir kreatif dan menghadapi tantangan dengan percaya diri."
    ],
    ];


//* About

$experience = [
    [
        "job" => "Instruktur Komputer",
        "time" => "May 2022 – Oct 2022",
        "company" => "Bandung Computer Education",
        "address" => "Bandung, Jawa Barat",
        "body" => "Mengajar siswa tentang komputer, matematika juga
        algoritma dasar
        Membuat laporan pendataan siswa, jadwal dan materi modul
        Melakukan pertemuan antar instruktur sebulan sekali"
    ],
    [
        "job" => "Staf Administrasi",
        "time" => "July 2021 – Sep 2021",
        "company" => "PT. Wahana Express",
        "address" => "Bandung, Jawa Barat",
        "body" => "Menginputkan barang pelanggan dan mengecek barang,
        Membuat laporan pemasukan dan pengeluaran,
        Menjaga dan merawat peralatan kantor
        "
    ],
];


$education = [
    [
        "time" => "2021 – Present",
        "major" => "S1 Teknik Informatika",
        "school" => "Universitas Bale Bandung",
        "address" => "Bandung, Indonesia",
        "body" => "Aktif dalam Kepanitiaan Mahasiswa, Mengikuti Program pelatihan di Platform Dicoding, belajar setiap hari di lingkungan kampus dan diluar kampus
        "
    ],
    [
        "time" => "2017 – 2020",
        "major" => "Ilmu Pengetahuan Alam",
        "school" => "SMA Handayani 2 Banjaran ",
        "address" => "Bandung, Indonesia",
        "body" => "Aktif Mengikuti Program Sekolah, aktif Mengikuti Seminar Bisnis, mengikuti acara-acara pembelajaran diluar sekolah

        "
    ],

];


$home = [
    "service" => $service,
];



$about = [
    "experience" => $experience,
    "education" => $education,
];

//*Team


// Return all data as a single array
return [
    "home" => $home,
    "about" => $about,
];

?>
