<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/39a854cbd3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital@0;1&display=swap" rel="stylesheet">
    <title>Blog Dede</title>
</head>
<body>
    <header class="bg-primary absolute top-0 left-0 w-full flex items-center z-20">
        <div class="container mx-auto px-[5%]">
            <div class="flex items-center justify-between relative">
                <a class="px-4 py-4 flex items-center gap-2 bg-secondary" href="index.html">
                    <img class="w-[4rem]" src="../assets/logo Dike putih.png" alt="Logo Universitas Lampung">
                    <div>
                        <p class="font-playfair text-white text-left text-sm sm:text-base">DEDE</p>
                        <p class="font-playfair text-white text-left text-sm sm:text-base">KURNN</p>
                    </div>
                </a>
                <div class="flex items-center px-4">
                    <button id="nav-btn" name="nav-btn" type="button" class="block absolute right-4 lg:hidden">
                        <span class="nav-btn-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="nav-btn-line transition duration-300 ease-in-out"></span>
                        <span class="nav-btn-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg w-full top-full right-0 lg:block lg:static lg:bg-transparent lg:max-w-full">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="https://dedekurnn.me/" class="text-base font-plusJakarta text-dark py-2 mx-4 flex group-hover:text-primary lg:group-hover:text-tertiary lg:text-white">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="https://dedekurnn.me/web-unila/public/" class="text-base font-plusJakarta text-dark py-2 mx-4 flex group-hover:text-primary lg:group-hover:text-tertiary  lg:text-white">Project Web Unila</a>
                            </li>
                            <li class="group">
                                <a href="https://github.com/DedeKurnn" class="text-base font-plusJakarta text-dark py-2 mx-4 flex group-hover:text-primary lg:group-hover:text-tertiary lg:text-white">Github</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-base font-plusJakarta text-dark py-2 mx-4 flex group-hover:text-primary lg:group-hover:text-tertiary lg:text-white">Blog</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section id="main" class="container px-[5%] mx-auto mt-32">
        <div class="navigation font-plusJakarta text-sm opacity-60">
            <a href="../index.html">HOME</a>
            <i class="fa-solid fa-chevron-right text-sm px-1 text-tertiary"></i>
            <a href="#">BLOG</a>
            <i class="fa-solid fa-chevron-right text-sm px-1 text-tertiary"></i>
            <a href="#">PHP</a>
        </div>
        <div class="my-8">
            <h1 class="my-12 text-3xl text-left sm:text-5xl">Belajar PHP Dasar</h1>
        </div>
        <div class="md:flex md:flex-row-reverse gap-12 my-8">
            <aside class="md:w-2/5">
                <img src="https://blog.vinahost.vn/wp-content/uploads/2021/02/Compile-PHP-la-gi.png" alt="Fakultas Matematika dan Ilmu Pengetahuan Alam" class="aspect-[4/3] mb-4 object-cover">
            </aside>
            <div class="md:w-3/5">
                <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Apa itu PHP?</h2>
                <p class="mb-4">
                    PHP adalah bahasa pemrograman yang digunakan untuk mengembangkan aplikasi web dinamis. Singkatan dari PHP adalah "Hypertext Preprocessor". PHP berjalan pada sisi server, yang berarti kode PHP dieksekusi pada server, dan hasilnya dikirim ke browser pengguna dalam bentuk HTML.
                    <br><br>
                    PHP memungkinkan Anda untuk membuat aplikasi web yang dinamis dan interaktif, seperti forum, sistem manajemen konten, sistem e-commerce, dan banyak lagi. Bahasa pemrograman ini memiliki sintaks yang mirip dengan bahasa C dan Java, sehingga mudah dipelajari jika Anda telah menguasai bahasa pemrograman lain.
                </p>
                <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Kelebihan PHP</h2>
                <ol class="ml-4 font-plusJakarta mb-8">
                    <li class="list-decimal"><span class="font-bold">Gratis</span> - PHP merupakan perangkat lunak open source, sehingga dapat diunduh dan digunakan secara gratis.</li>
                    <li class="list-decimal"><span class="font-bold">Mudah dipelajari</span> - PHP memiliki sintaks yang mudah dipelajari dan dipahami.</li>
                    <li class="list-decimal"><span class="font-bold">Fleksibel</span> - PHP dapat digunakan untuk membuat berbagai jenis aplikasi web, dari yang sederhana hingga kompleks.</li>
                    <li class="list-decimal"><span class="font-bold">Berjalan di berbagai platform</span> - PHP dapat dijalankan pada banyak sistem operasi, seperti Windows, Linux, dan Mac.</li>
                    <li class="list-decimal"><span class="font-bold">Integrasi mudah</span> - PHP dapat dengan mudah terintegrasi dengan database dan teknologi web lainnya, seperti HTML, CSS, dan JavaScript.</li>
                    <li class="list-decimal"><span class="font-bold">Populer</span> - PHP adalah salah satu bahasa pemrograman web paling populer di dunia, sehingga terdapat banyak sumber daya dan komunitas yang mendukungnya.</li>
                </ol>
                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">PHP Dasar</h2>
                    <p class="mb-4">
                        Bahasa PHP dieksekusi di sisi server, dan hasil dari HTML dikirim kembali ke browser. Sintaks PHP dapat diletakkan di mana saja di dalam file HTML. Script php dimulai dengan tanda <span class="font-jetbrains text-[#FB2576]">&lt;?php</span> dan diakhiri dengan <span class="font-jetbrains text-[#FB2576]">?&gt;</span>. Ekstensi file untuk php adalah ".php". Sebuah file php biasanya berisi tag html dan beberapa php scripting. Dibawah ini adalah contoh sederhana dari script php untuk menampilkan teks "Hello world" pada browser.
                    </p>
                    <img src="../assets/php_basic.png" alt="PHP Basic" class="w-2/3">
                </div>
                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Variabel</h2>
                    <p>
                        Dalam bahasa php, variabel dapat digunakan untuk menampung data yang dapat diubah-ubah nilainya, variabel digunakan untuk menyimpan data sementara, contohnya nilai yang diinputkan oleh pengguna, atau hasil operasi matematika dalam program. 
                        <br><br>
                        Variabel tidak didefinisikan tipe datanya secara implisit. Penamaan variabel dalam bahasa php selalu diawali dengan simbol "$" dan harus diawali dengan huruf atau underscore, selanjutnya dapat menggunakan kombinasi huruf dan angka. Contohnya: <span class="font-jetbrains text-[#FB2576]">$color</span>.
                        <br><br>
                        Dalam bahasa php, penamaan variabel, fungsi, dan keywords tidak case-sensitive, artinya dapat ditulis dalam huruf besar maupun huruf kecil.
                    </p>
                    
                    <img src="../assets/variabel (2).png" alt="Variabel PHP" class="w-2/3">
                </div>

                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Conditional Statement</h2>
                    <p>
                        Conditional statement digunakan untuk menjalankan kode tertentu berdasarkan kondisi yang diberikan. Terdapat beberapa jenis conditional statement pada PHP, yaitu:
                        <br><br>
                        if statement: digunakan untuk mengevaluasi kondisi tertentu, dan menjalankan kode jika kondisi tersebut bernilai true. Contoh dari if statement adalah sebagai berikut:
                    </p>
                    <img src="../assets/if.png" alt="if statement" class="w-5/6">
                    <p>
                        if-else statement: digunakan untuk mengevaluasi kondisi tertentu, dan menjalankan kode di bagian if atau else berdasarkan nilai kondisi tersebut. Contoh dari if-else statement adalah sebagai berikut:
                    </p>
                    <img src="../assets/if-else.png" alt="if statement" class="w-5/6">
                    <p>
                        switch statement: digunakan untuk mengevaluasi sebuah ekspresi, dan menjalankan kode di bagian case yang sesuai dengan nilai ekspresi tersebut. Contoh dari switch statement adalah sebagai berikut:
                    </p>
                    <img src="../assets/switch.png" alt="if statement" class="w-5/6">
                    <p>
                        Dalam semua jenis conditional statement pada PHP, kita dapat menggunakan operator perbandingan seperti <span class="font-jetbrains text-[#FB2576]">==, &gt;, &lt;, &gt;=, dan &lt;=</span> untuk membandingkan nilai variabel atau ekspresi dengan nilai tertentu. Kita juga dapat menggunakan operator logika seperti &&, ||, dan ! untuk menggabungkan beberapa kondisi.
                    </p>
                </div>

                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Struktur Perulangan (Loop)</h2>
                    <p>
                        Loop adalah sebuah struktur kontrol yang memungkinkan kita untuk menjalankan blok kode berulang kali selama kondisi yang diberikan masih terpenuhi. Terdapat dua jenis loop pada PHP, yaitu:
                        <br><br>
                        for loop: digunakan untuk menjalankan blok kode sejumlah kali yang telah ditentukan sebelumnya. Contoh dari for loop adalah sebagai berikut:
                    </p>
                    <img src="../assets/for.png" alt="if statement" class="w-5/6">
                    <p>
                        Kode di atas akan menampilkan angka dari 1 hingga 10 pada layar.
                        <br><br>
                        while loop: digunakan untuk menjalankan blok kode selama kondisi yang diberikan terpenuhi. Format umum dari while loop adalah sebagai berikut:
                    </p>
                    <img src="../assets/while.png" alt="if statement" class="w-5/6">
                    <p>
                        Kode di atas akan menampilkan angka dari 1 hingga 10 pada layar.
                        <br><br>
                        Selain itu, terdapat juga do-while loop pada PHP yang mirip dengan while loop, namun akan menjalankan blok kode setidaknya satu kali bahkan jika kondisi awalnya tidak terpenuhi. Format umum dari do-while loop adalah sebagai berikut:
                    </p>
                    <img src="../assets/do-while.png" alt="if statement" class="w-5/6">
                    <p>
                        Kode di atas akan menampilkan angka dari 1 hingga 10 pada layar, sama seperti while loop. Namun, perbedaannya adalah kode di dalam do-while loop akan dijalankan setidaknya satu kali bahkan jika kondisi awalnya tidak terpenuhi.
                    </p>
                </div>

                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Array</h2>
                    <p>
                        Array adalah variabel yang dapat menyimpan beberapa nilai dalam satu variabel. Nilai-nilai tersebut dapat berupa angka, string, objek, maupun nilai-nilai lainnya, dan setiap nilai tersebut diidentifikasi oleh sebuah indeks atau kunci tertentu. Indeks atau kunci tersebut digunakan untuk mengakses nilai-nilai yang ada di dalam array.
                        <br><br>
                        Terdapat dua jenis array pada PHP, yaitu:
                        <br><br>
                        Indexed Array: merupakan array yang indeksnya berupa bilangan bulat. Contoh:
                    </p>
                    <img src="../assets/indexed-array.png" alt="Indexed array" class="w-5/6">
                    <p>
                        Associative Array: merupakan array yang indeksnya berupa kunci atau label. Contoh:
                    </p>
                    <img src="../assets/associative-array.png" alt="Associative array" class="w-5/6">
                    <p>
                        Selain itu, terdapat juga multidimensional array, yaitu array yang memiliki satu atau lebih array di dalamnya. Contoh:
                    </p>
                    <img src="../assets/multidimensional-array.png" alt="Multidimensional array" class="w-5/6">
                    <p>
                        Untuk mengakses nilai di dalam array, kita dapat menggunakan indeks atau kunci yang sesuai. Contoh:
                    </p>
                    <img src="../assets/access-array.png" alt="Multidimensional array" class="w-5/6">
                    <p>
                        Kita juga dapat menambahkan, mengubah, dan menghapus nilai di dalam array menggunakan beberapa fungsi bawaan PHP seperti <span class="font-jetbrains text-[#FB2576]">array_push(), array_pop(), array_shift(), array_unshift(), unset() </span>, dan lain-lain.
                    </p>
                </div>

                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Function</h2>
                    <p>
                        Function adalah sebuah blok kode yang dapat digunakan berulang kali untuk melakukan tugas tertentu. Function digunakan untuk memecah kode program menjadi bagian-bagian kecil yang lebih teratur dan mudah dikelola.
                        <br><br>
                        Contoh function pada php:
                    </p>
                    <img src="../assets/function.png" alt="Indexed array" class="w-5/6">
                    <p>
                        Kode di atas akan membuat sebuah function dengan nama tambah() yang menerima dua parameter <span class="font-jetbrains text-[#FB2576]">$a</span> dan <span class="font-jetbrains text-[#FB2576]">$b</span>, akan menjumlahkan kedua parameter tersebut, dan akan mengembalikan nilai hasil penjumlahan tersebut.

                        Untuk memanggil function dengan nilai kembalian, kita dapat menampung nilai kembalian tersebut ke dalam sebuah variabel. Contoh:
                    </p>
                    <img src="../assets/function-call.png" alt="Associative array" class="w-5/6">
                </div>

                <div class="my-4">
                    <h2 class="text-2xl mb-2 font-semibold font-plusJakarta">Contoh Program Fibonacci</h2>
                    <form method="post" id="myForm">
                        <label for="input" class="font-plusJakarta block my-4">Masukkan bilangan bulat:</label>
                        <input type="number" id="input" name="input" class="border-2 border-slate-700 py-2 rounded-md mr-2">
                        <button id="submitBtn" type="submit" name="submit" class="bg-primary px-4 py-2.5 rounded-md font-plusJakarta text-white">Hitung</button>
                    </form>
                    <div class="font-plusJakarta block mt-4 font-bold">
                        <?php
                        function fibonacci($n){
                            if($n == 0){
                                return 0;
                            }
                            else if($n == 1 || $n == 2){
                                return 1;
                            }
                            else{
                                return fibonacci($n - 1) + fibonacci($n - 2);
                            }
                        }

                        if(isset($_POST['submit'])){
                            $input = $_POST['input'];
                            $fibonacci = fibonacci($input);
                            echo "Hasil Fibonacci dari $input adalah $fibonacci";
                        }
                    ?>
                    </div>
                    <p class="mt-4">Source code untuk program di atas adalah: </p>
                    <img src="../assets/fibonacci.png" alt="Associative array" class="w-5/6">
                </div>
            </div>
        </div>
    </section>
    <script src="./js/script.js"></script>
</body>
</html>