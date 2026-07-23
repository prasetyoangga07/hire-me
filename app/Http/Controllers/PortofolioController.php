<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Prasetyo Angga Permana',
            'role' => 'Web Engineering · Front-End Development · UI/UX Design',
            'location' => 'Banyumas, Indonesia',
            'phone' => '+62 857-2587-2794',
            'email' => 'prasetyopermana0886@gmail.com',
            'bio' => 'Mahasiswa S1 Informatika di Universitas Jenderal Soedirman. Antusias pada pengembangan web dan pengabdian sosial, dengan pengalaman aktif berorganisasi dan bekerja dalam tim maupun mandiri.',
        ];

        $education = [
            [
                'school' => 'Universitas Jenderal Soedirman',
                'detail' => 'S1 Informatika · IPK 3.63 / 4',
                'place' => 'Purwokerto',
                'period' => 'Agustus 2023 – Sekarang',
            ],
            [
                'school' => 'SMK Ma\'arif NU 1 Ajibarang',
                'detail' => 'Rekayasa Perangkat Lunak (RPL) · Nilai 92.87',
                'place' => 'Ajibarang',
                'period' => 'Juli 2020 – April 2023',
            ],
        ];

        $skills = [
            'Programming' => ['PHP', 'JavaScript', 'Python', 'C++', 'C', 'Dart'],
            'Framework & Tools' => ['Laravel', 'CodeIgniter', 'AdonisJS', 'Bootstrap', 'Tailwind CSS', 'Flutter'],
            'Database & VCS' => ['MySQL', 'Git', 'GitHub'],
            'Design & Multimedia' => ['Figma', 'Canva', 'Adobe Premiere Pro', 'Adobe Lightroom', 'CapCut'],
        ];

        $internships = [
            [
                'icon' => 'bi-pc-display',
                'title' => 'IT Support Intern',
                'company' => 'Polresta Banyumas',
                'period' => 'Juli 2025 - Agustus 2025',
                'points' => [
                    'Merancang prototype website Bag SDM.',
                    'Membuat desain UI untuk kebutuhan internal.',
                    'Mengimplementasikan AI pada lingkungan kerja.',
                    'Pemateri Program Polri Belajar.'
                ]
            ],

            [
                'icon' => 'bi bi-camera',
                'title' => 'Photographer',
                'company' => 'Workshop Data Gathering - Unsoed & UGM',
                'period' => 'Juli 2024',
                'points' => [
                    'Mengelola dokumentasi kegiatan, menghasilkan foto dan video untuk keperluan laporan dan publikasi.',
                    'Memastikan dokumentasi dapat diakses oleh peserta setelah acara selesai.'
                ]
            ],

            [
                'icon' => 'bi bi-camera',
                'title' => 'Photographer',
                'company' => 'Seniko - Universitas Jenderal Soedirman',
                'period' => 'Juni 2024',
                'points' => [
                    'Mengelola dokumentasi kegiatan, menghasilkan foto dan video untuk keperluan laporan dan publikasi.',
                    'Memastikan kamera pada live streaming bekerja sebagimana mestinya.',
                    'Membuat desain bumper video.'
                ]
            ],

            [
                'icon' => 'bi-code-slash',
                'title' => 'UI/UX Designer & Front-End Developer',
                'company' => 'PT Cazh Teknologi Inovasi',
                'period' => 'Januari 2022 - Juni 2022',
                'points' => [
                    'Mendesain tampilan website.',
                    'Mengembangkan Front-End Website.',
                    'Mendukung pelayanan pengguna.'
                ]
            ]
        ];

        $projects = [

            [
                'name' => 'Sistem Pengelolaan Wisata',
                'category' => 'Web Development',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/wisata.png',
                'github' => 'https://youtu.be/UdoM0YIucvQ?si=Zd7ZjB8dq_JMqtuu',
                'demo' => 'https://youtu.be/UdoM0YIucvQ?si=Zd7ZjB8dq_JMqtuu',
                'tech' => [
                    'Laravel 12',
                    'Livewire',
                    'MySQL'
                ],
                'desc' => 'Platform pengelolaan wisata Jawa Tengah dengan role Admin dan User. Dibangun menggunakan Laravel 12, Livewire dan MySQL.',
                'tags' => [
                    'Laravel',
                    'Fullstack'
                ]
            ],

            [
                'name' => 'Website BAG SDM Polresta Banyumas',
                'category' => 'Web Development',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/sdm.png',
                'github' => 'https://github.com/prasetyoangga07/web-profile-sdm',
                'demo' => '#',
                'tech' => [
                    'Laravel 12',
                    'Bootstrap',
                    'MySQL'
                ],
                'desc' => 'Website company profile dan media informasi rekrutmen POLRI berbasis Laravel 12 yang ditujukan bagi siswa SMA/SMK di Kabupaten Banyumas.',
                'tags' => [
                    'Laravel',
                    'UI Design'
                ]
            ],

            [
                'name' => 'SIRGP (Sistem Informasi Registrasi Gunung)',
                'category' => 'UI/UX Design',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/gunung.png',
                'github' => 'https://www.figma.com/design/n7YAR0sP5ygpO7Q4Lacxsu/RPL?node-id=0-1&t=RGB2C9rFl5XKgADW-1',
                'demo' => 'https://www.figma.com/proto/n7YAR0sP5ygpO7Q4Lacxsu/RPL?node-id=3-347&t=O7iEK8WDGlwDpUPZ-1&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=3%3A194&show-proto-sidebar=1',
                'tech' => [
                    'Figma',
                    'Prototype',
                    'UI/UX'
                ],
                'desc' => 'Perancangan UI/UX serta prototype sistem registrasi pendakian Gunung Slamet sebagai proyek mata kuliah Rekayasa Perangkat Lunak.',
                'tags' => [
                    'Figma',
                    'Prototype'
                ]
            ],

            [
                'name' => 'Kost.In',
                'category' => 'UI/UX Design',
                'year' => '2022',
                'status' => 'Completed',
                'image' => 'img/projects/kostin.png',
                'github' => 'https://www.figma.com/design/gUMmPGgXlve8xWGGvQbt5F/kost.in?node-id=0-1&t=pF4YAgS4whplRGYa-1',
                'demo' => 'https://www.figma.com/proto/gUMmPGgXlve8xWGGvQbt5F/kost.in?node-id=1-2&t=tqfyxdxHhYKgfHvI-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A2&show-proto-sidebar=1',
                'tech' => [
                    'Figma',
                    'Mobile UI',
                    'Prototype'
                ],
                'desc' => 'Prototype aplikasi pencarian kost yang dibuat selama praktik kerja lapangan di PT Cazh Teknologi Inovasi.',
                'tags' => [
                    'Figma',
                    'Mobile UI'
                ]
            ],

            [
                'name' => 'I-FLEX',
                'category' => 'UI/UX Design',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/iflex.png',
                'github' => 'https://www.figma.com/design/Oylv7BP7PJ0R2jqUiobkU0/iFlexs?node-id=10-439&t=5h5DceIYPzAhygF5-1',
                'demo' => 'https://www.figma.com/proto/Oylv7BP7PJ0R2jqUiobkU0/iFlexs?node-id=10-439&t=QnHmlGE7AAruYiYh-1&scaling=scale-down&content-scaling=fixed&page-id=0%3A1&starting-point-node-id=1%3A349&show-proto-sidebar=1',
                'tech' => [
                    'Figma',
                    'Prototype',
                    'Dashboard UI'
                ],
                'desc' => 'Prototype aplikasi penyewaan iPhone sebagai proyek akhir mata kuliah Interaksi Manusia dan Komputer.',
                'tags' => [
                    'Figma',
                    'Prototype'
                ]
            ],

            [
                'name' => 'Diagnosa Penyakit Akibat Gigitan Nyamuk',
                'category' => 'UI/UX Design',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/sispak.png',
                'github' => 'https://www.figma.com/design/gUMmPGgXlve8xWGGvQbt5F/kost.in?node-id=0-1&t=pF4YAgS4whplRGYa-1',
                'demo' => 'https://www.figma.com/proto/skercwbA5RHhw1Mu7n1a32/assets-sispak?node-id=148-4285&t=6zjugfnxbECKPSPY-1&scaling=contain&content-scaling=fixed&page-id=148%3A1380',
                'tech' => [
                    'Figma',
                    'Expert System',
                    'Prototype'
                ],
                'desc' => 'Prototype sistem pakar untuk membantu proses diagnosa penyakit akibat gigitan nyamuk.',
                'tags' => [
                    'Figma',
                    'Expert System'
                ]
            ],

            [
                'name' => 'Saving Money App',
                'category' => 'Mobile Development',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/saving.jpeg',
                'github' => 'https://drive.google.com/drive/folders/1Igwc-VIlnnUfrlVMCWBfl6p-Vzk_6YsJ?usp=sharing',
                'demo' => 'https://drive.google.com/drive/folders/1Igwc-VIlnnUfrlVMCWBfl6p-Vzk_6YsJ?usp=sharing',
                'tech' => [
                    'Ionic React',
                    'Supabase'
                ],
                'desc' => 'Aplikasi mobile pengelolaan tabungan dengan kontribusi pada pengembangan antarmuka menggunakan Flutter.',
                'tags' => [
                    'Kotlin',
                    'Team Project'
                ]
            ],

            [
                'name' => 'Schedulix',
                'category' => 'Mobile Development',
                'year' => '2025',
                'status' => 'Completed',
                'image' => 'img/projects/jadwal.jpg',
                'github' => 'https://github.com/mufthiealie220/myjadwal',
                'demo' => 'https://drive.google.com/drive/folders/1vB9XODDgAOx6U-OtVBMWcj4fn28gAmj9?usp=sharing',
                'tech' => [
                    'Kotlin'
                ],
                'desc' => 'Aplikasi mobile pengelolaan jadwal dan catatan kegiatan untuk mahasiswa.',
                'tags' => [
                    'Kotlin',
                    'Team Project'
                ]
            ],

            [
                'name' => 'Voting Ketua Kelas',
                'category' => 'Web Development',
                'year' => '2024',
                'status' => 'Completed',
                'image' => 'img/projects/voting.png',
                'github' => 'https://github.com/prasetyoangga07/UTS_Pemweb2',
                'demo' => 'https://youtu.be/dkkWwriM_Rk?si=P_52glj-7zfwz0Qi',
                'tech' => [
                    'CodeIgniter 3',
                    'PHP',
                    'MySQL'
                ],
                'desc' => 'Aplikasi voting ketua kelas berbasis CodeIgniter 3 yang menerapkan CRUD, autentikasi, dan statistik hasil voting.',
                'tags' => [
                    'CodeIgniter',
                    'PHP'
                ]
            ],

            [
                'name' => 'Fashion Information Website',
                'category' => 'Web Development',
                'year' => '2023',
                'status' => 'Completed',
                'image' => 'img/projects/webdes.png',
                'github' => 'https://github.com/prasetyoangga07/fashion-artikel',
                'demo' => 'https://youtu.be/aY_ZsERJmlk?si=Wjg-MOeRc34YFDDR',
                'tech' => [
                    'HTML',
                    'CSS',
                    'JavaScript'
                ],
                'desc' => 'Website katalog fashion brand lokal Indonesia menggunakan HTML, CSS dan JavaScript.',
                'tags' => [
                    'HTML',
                    'CSS',
                    'JavaScript'
                ]
            ],
        ];

        $organizations = [
            [
                'icon' => 'bi-people-fill',
                'title' => 'HMIF Universitas Jenderal Soedirman',
                'position' => 'Staff Media Komunikasi & Informasi',
                'period' => '2024 - 2025'
            ],
            [
                'icon' => 'bi-camera-reels-fill',
                'title' => 'I-Talks HMIF',
                'position' => 'Video Director',
                'period' => '2024'
            ]
        ];

        $committees = [
            [
                'icon' => 'bi-trophy-fill',
                'title' => 'Informatics Championship',
                'position' => 'Koordinator Publikasi, Desain & Dokumentasi',
                'period' => '2024'
            ],
            [
                'icon' => 'bi-shield-check',
                'title' => 'Makrab Informatika',
                'position' => 'Komisi Kedisiplinan',
                'period' => '2025'
            ],
            [
                'icon' => 'bi-heart-pulse-fill',
                'title' => 'Soedirman Student Summit',
                'position' => 'Divisi Medis',
                'period' => '2024'
            ],
            [
                'icon' => 'bi-calendar-event-fill',
                'title' => 'Makrab Informatika',
                'position' => 'Divisi Acara',
                'period' => '2024'
            ],
            [
                'icon' => 'bi-people-fill',
                'title' => 'Relasi Mahasiswa Informatika',
                'position' => 'Koordinator Publikasi, Desain & Dokumentasi',
                'period' => '2024'
            ],
            [
                'icon' => 'bi-megaphone-fill',
                'title' => 'Pengabdian Masyarakat',
                'position' => 'Divisi Publikasi, Desain & Dokumentasi',
                'period' => '2024'
            ],
            [
                'icon' => 'bi-trophy-fill',
                'title' => 'Informatics Championship',
                'position' => 'Divisi Publikasi, Desain & Dokumentasi',
                'period' => '2023'
            ]
        ];

        $awards = [

            [
                'title' => 'Sertifikasi BNSP',
                'desc' => 'KKNI Level II Rekayasa Perangkat Lunak.',
                'year' => '2023',
                'image' => 'img/certificate/bnsp.jpeg'
            ],

            [
                'title' => 'Harapan 2',
                'desc' => 'Lomba Video Reels Bhayangkara Polresta Banyumas.',
                'year' => '2025',
                'image' => 'img/certificate/bhayangkara.png'
            ],

            [
                'title' => 'Divisi Komisi Kedisiplinan',
                'desc' => 'Maskrab Makrab Informatika 2025.',
                'year' => '2025',
                'image' => 'img/certificate/komdis.png'
            ],


            [
                'title' => 'Staff Medkominfo',
                'desc' => 'HMIF Unsoed 2024.',
                'year' => '2024',
                'image' => 'img/certificate/hmif.png'
            ],


            [
                'title' => 'Koordinator PDD',
                'desc' => 'Informatics Championship 2024.',
                'year' => '2024',
                'image' => 'img/certificate/koor.png'
            ],

            [
                'title' => 'Divisi Medis',
                'desc' => 'Soedirman Student Summit 2024.',
                'year' => '2024',
                'image' => 'img/certificate/medis.png'
            ],

            [
                'title' => 'Divisi Acara',
                'desc' => 'Maskrab Makrab Informatika 2024.',
                'year' => '2024',
                'image' => 'img/certificate/acara.jpg'
            ],

            [
                'title' => 'Divisi PDD',
                'desc' => 'Pengabdian Masyarakat 2024.',
                'year' => '2024',
                'image' => 'img/certificate/pengmas.png'
            ],

            [
                'title' => 'Peserta Hardiknas',
                'desc' => 'Kolaborasi Dosen Nusantara 2024.',
                'year' => '2024',
                'image' => 'img/certificate/webinar.jpg'
            ],

            [
                'title' => 'Peserta TC',
                'desc' => 'Training Center HMIF 2023.',
                'year' => '2023',
                'image' => 'img/certificate/tc.jpg'
            ],

            [
                'title' => 'Divisi PDD',
                'desc' => 'Informatics Championship 2023.',
                'year' => '2023',
                'image' => 'img/certificate/pdd.png'
            ],

            [
                'title' => 'Praktik Kerja Industri',
                'desc' => 'PT Cazh Teknologi Inovasi.',
                'year' => '2022',
                'image' => 'img/certificate/pkl.jpeg'
            ],

        ];


        $contact = [
            'email' => 'prasetyopermana0886@gmail.com',
            'whatsapp' => '+62 857-2587-2794',
            'instagram' => '@prstyy0',
            'tiktok' => '@prassxx',
            'linkedin' => 'Prasetyo Angga Permana',
            'github' => 'github.com/prasetyoangga07',
        ];

        return view('portofolio', compact(
            'profile',
            'education',
            'skills',
            'internships',
            'organizations',
            'committees',
            'projects',
            'awards',
            'contact'
        ));
    }
}
