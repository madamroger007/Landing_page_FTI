<?php




// Home
$service = [
    [
        "title" => "Pembelajaran Kolaboratif dan kreatif",
        "icon" => "bi-people-fill",
        "body" => "Menciptakan lingkungan belajar yang kolaboratif dan kreatif, di mana anggota dapat saling berbagi pengetahuan, keterampilan, dan pengalaman dalam bidang teknologi dan Menciptakan lingkungan yang mendorong kreatifitas setiap anggota."
    ],
    [
        "title" => "Pengembangan Keahlian",
        "icon" => "bi-calendar-check",
       "body" =>"Mengikuti pelatihan untuk mengembangkan kemampuan teknis anggota komunitas dalam menghadapi tantangan teknologi terbaru serta soft skills seperti komunikasi dan kerja tim."
    ],
    [
        "title" => "Tumbuh Bersama",
        "icon" => "bi-book",
        "body" => "Mendorong pertumbuhan, dan menghargai keragaman dalam pengembangan karir teknologi dan bisnis."
    ],
    [
        "title" => "Riset dan Eksperimen",
        "icon" => "bi-lightbulb",
       "body" => "Mendorong anggota untuk melakukan riset dan eksperimen teknologi, merangsang rasa ingin tahu dan pemecahan masalah melalui proyek-proyek inovatif."
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
