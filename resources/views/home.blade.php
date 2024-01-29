
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-PROFILE PEMBANGUNAN DAERAH</title>
    <link rel="shortcut icon" href="{{ asset('assets/src/logo.png') }}" />

    <!-- stylesheets tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets/src/output.css') }}" />
    <!-- alpine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.0/dist/cdn.min.js"></script>
    <!-- tailwindcss flag-icon  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css" rel="stylesheet" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <link rel="stylesheet" href="{{ asset('assets/src/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>

</head>

<body id="home" class="overflow-x-hidden">
    <div class="font-[Poppins] 2xl:text-xl font-nunito text-slate-900 overflow-x-hidden w-full pattern2">
        <!-- navbar  -->
        <nav id="shadow-nav" x-data="{isOpen: false }" class="fixed top-0 bg-[#DC2626] z-50 w-full font-[Poppins]">
             <!-- Top Bar -->
             <div id="top-bar" class="w-full     bg-gray-900 duration-500">
                 <div class="flex   w-full     text-gray-300 space-x-4 text-sm py-2">
                     <marquee behavior="" direction="">
                         <p>email@email.com</p>
                     </marquee>

                 </div>
             </div>
            <div id="navbar"
                :class="[isOpen ? 'translate-x-0 opacity-100  bg-[#DC2626]' : '']"
                class="py-6 mx-auto   lg:bg-transparent duration-300 transition-all ease-in-out">
                <div class="lg:flex mx-auto container px-5 lg:items-center lg:justify-between   ">
                    <div class="flex items-center justify-between">
                        <!-- logo -->
                        <a href="/view/home.html" class="flex items-center text-black mx-4 md:ml-6">
                            <img src="{{ asset('assets/src/logo.png') }}" class="md:w-12 md:h-14 w-10 h-12" />
                            <div  class="ml-3 text-slate-100   ">
                                <strong class="text-2xl   font-extrabold  text-sh uppercase font-[arial]">E-PROFILE PEMBANGUNAN DAERAH</strong>
                                <p class="text-[13px] md:text-[15px]   uppercase -mt-2 relative">
                                    KABUPATEN SELUMA
                                </p>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-white hover:text-red-500 focus:outline-none  "
                                aria-label="toggle menu">
                                <svg x-show="!isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 8h16M4 16h16" />
                                </svg>
                                <svg x-show="isOpen" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                    <div x-cloak :class="[isOpen ? '  opacity-100 block' : 'opacity-0  hidden']"
                        class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out
                        bg-[#DC2626] md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative
                        lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center"
                        id="list-menu">
                        <div class="flex flex-col -mx-6 lg:flex-row lg:items-center text-[16px]">
                            <!-- if menu active "active-menu" else "text-gray-600" -->
                            <a href="{{ route('home') }}"
                                class="px-2 py-2 mx-2 mt-2 active-menu  text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Home</a>
                            <a href="{{ route('dataset') }}"
                                class="px-2 py-2 text-white font-bold text-[14px] text-sh mx-2 mt-2   duration-300 transform rounded-md lg:mt-0   ">Data Statistik Sektoral</a>
                            <a href="Organizations.html"
                                class="px-2 py-2 mx-2 mt-2 text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Organizations</a>
                            <a href="Groups.html"
                                class="px-2 py-2 mx-2 mt-2 text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Groups</a>
                            <a href="showcase.html"
                                class="px-2 py-2 mx-2 mt-2 text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">showcase</a>
                                <button x-data="{ isOpen: false }"
                                    class="relative inline-block text-white active:text-[#ffc568]
                                    focus:text-[#ffc568]">
                                    <!-- Dropdown toggle button -->
                                    <div @click="isOpen = !isOpen"
                                        class="relative z-10 flex px-2 py-2 mx-2 mt-2   font-bold text-[14px]
                                        text-sh duration-300 transform rounded-md lg:mt-0">
                                        <span>Data</span>
                                        <svg class="w-5 h-5 2xl:mt-1 ml-2  "
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <!-- Dropdown menu -->
                                    <div x-show="isOpen" @click.away="isOpen = false"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0 scale-90"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-90"
                                        class="absolute right-0 z-20 w-full lg:w-48 py-2   origin-top-right bg-white rounded-md shadow-xl  ">
                                        <a href="#"
                                            class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform  hover:bg-gray-100 ">
                                            Data Penduduk </a>
                                        <a href="#"
                                            class="block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform  hover:bg-gray-100 ">
                                            Data Penduduk </a>

                                    </div>
                                </button>
                            <a href="tentang.html"
                                class="px-2 py-2 mx-2 mt-2  text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Tentang</a>
                            <a href="login.html"
                                class="px-5 py-2 mx-2 mt-2  text-white font-bold text-[14px]     duration-300 transform rounded-md lg:mt-0   hover:bg-red-300 bg-red-400 hover:scale-[99%] active:scale-95">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->

        <!-- slider -->
<section id="home" class="bg-gradient-to-b from-[#E73530] from-60%">

    <div class="  text-center pt-32   ">


        <div class="mx-auto container   px-4 sm:px-6 lg:px-8 relative bg-transparent   flex flex-wrap flex-col md:flex-row items-center  ">
            <!--Left Col-->
            <div data-aos="zoom-in-left" class="mt-16 w-full md:w-1/2 justify-center items-start md:px-5 text-center md:text-right order-last md:order-first
                      px-4   z-30">
                <lottie-player data-aos="fade-right" src="{{ asset('assets/src/qksZkIwTuQ.json') }}"
                      style="filter: drop-shadow(10px 10px 0px #fef08a)" background="transparent" speed="1"
                      class=" mx-auto" loop autoplay></lottie-player>

            </div>
            <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine" class="   w-full  md:w-1/2   justify-center items-center md:px-5 text-center md:text-left
                      px-4   z-30 mt-20 md:mt-10">
                <!-- <img src="/src/Head-UNIB-3.png" class="w-2/3 mx-auto md:ml-auto md:mr-0    mb-5"> -->

                <p class="mt-2 text-2xl   lg:text-4xl   text-white text-center md:text-left font-[arial] font-extrabold
                            ">
                    E-BOOK PROFILE PEMBANGUNAN DAERAH KABUPATEN SELUMA
                </p>
                <p class="my-2 leading-7 text-sm mb-8 text-white text-justify tracking-wide">
                    Kabupaten Seluma dengan luas 2.479,36 km2 didiami oleh penduduk sebanyak 214.245 jiwa, terdiri dari 103.938 jiwa atau 48,51% yaitu penduduk perempuan dan sebanyak 110.307 jiwa atau 51,49% yaitu penduduk laki-laki. Penduduk tersebut tersebar di 14 (empat belas) Kecamatan di Kabupaten Seluma. Penduduk yang paling banyak berada di Kecamatan Sukaraja yaitu sebanyak 34.388 jiwa atau sebesar 16,05%. Sedangkan penduduk yang paling sedikit berada di Kecamatan Ulu Talo yaitu 6.351 jiwa atau sebesar 2,96%.
                </p>
                <a href="{{ route('dataset') }}" class=" h-full inline-block text-center   mt-1 w-full md:max-w-[180px]
                                hover:scale-[99%] focus:scale-95
                                font-bold tracking-widest text-white bg-gradient-to-r from-orange-500 to-yellow-500
                                border border-white rounded-lg
                                hover:from-orange-600 hover:to-yellow-600 px-3 py-2
                              text-sm    transition-all duration-500 focus:shadow-[-2px_2px_10px_0px_#eab308]
                                ">Data Statistik Sektoral</a>
            </div>
        </div>
    </div>
</section>
<!-- end slider -->

        <!-- slider -->
        <section id="home" class="">
            <div
                class="text-center mt-[100px]   bg-[#DC2626] pattern2">
                <div id="default-carousel" class="relative  " data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div
                        class="  relative lg:h-[90vh] md:h-96 h-72    shadow-md md:shadow-xl   shadow-[#444] md:shadow-[#444] ">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out  " data-carousel-item>
                            <div class="bg-black bg-opacity-10 w-full h-full absolute z-50">

                            </div>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">
                                Slide 1</span>
                            <img src="https://mc.selumakab.go.id/wp-content/uploads/2023/01/BANNER.png"
                                class=" object-cover object-center      w-full h-full relative  "
                                 >
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out  " data-carousel-item>
                            <div class="bg-black bg-opacity-10 w-full h-full absolute z-50">

                            </div>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">
                                Slide 1</span>
                            <img src="https://mc.selumakab.go.id/wp-content/uploads/2023/01/DJI_0045-2048x1152.jpg"
                                class=" object-cover object-center      w-full h-full relative  ">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out  " data-carousel-item>
                            <div class="bg-black bg-opacity-10 w-full h-full absolute z-50">

                            </div>
                            <span
                                class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">
                                Slide 1</span>
                            <img src="https://graphicsfamily.com/wp-content/uploads/edd/2022/01/Abstract-blue-with-golden-geometric-shapes-background-vector-illustration-scaled.jpg"
                                class=" object-cover object-center      w-full h-full relative  ">
                        </div>

                    </div>
                    <!-- Slider indicators -->
                    <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                            data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                            data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                                data-carousel-slide-to="2"></button>


                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                        class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                            <span class="hidden">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                            <span class="hidden">Next</span>
                        </span>
                    </button>
                </div>
                <!-- <div
                    class="grid grid-cols-1 px-3 md:grid-cols-2 z-10  mt-32 mb-20 lg:mt-40 overflow-hidden container mx-auto ">
                    <div class="col-span-1 px-8 lg:px-12 text-white   place-self-center text-left">
                        <div data-aos="fade-left">
                            <h2
                                class="font-extrabold font-[arial] text-3xl lg:text-5xl inline-block text-transparent bg-clip-text bg-gradient-to-b from-white from-30% to-orange-200  ">
                                Portal E-PROFILE PEMBANGUNAN DAERAH<br />Kabupaten Seluma
                            </h2>
                            <p class="text-gray-200 mt-4 text-sm leading-7 md:leading-7  ">
                                Seluruh kumpulan data yang tersedia dalam Portal E-PROFILE PEMBANGUNAN DAERAH
                                Kabupaten Seluma dapat diakses secara terbuka dan
                                dikategorikan sebagai data publik.
                            </p>

                        </div>
                        <div class="flex space-x-1 items-center mb-2 mt-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-orange-100" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-white text-sm   ">Pencarian Data Penduduk, Ekonomi dan Lainnya ...</p>
                        </div>
                        <div class="bg-white items-center text-sm justify-between w-full flex rounded-lg   shadow-lg p-2 mb-5 sticky"
                            style="top: 5px">



                            <input
                                class="   rounded-lg w-full py-3 pl-4 text-sm text-gray-700   leading-tight   focus:ring-red-500 border-none duration-300 transform     outline-none   "
                                type="text" placeholder="Pencarian Data Penduduk, Ekonomi dan Lainnya ...">

                            <div
                                class="bg-red-600 py-2.5 px-5 flex hover:bg-red-400 cursor-pointer mx-2 duration-300 transform  rounded-lg ">

                                <svg class="w-6 h-6 text-white mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                                CARI

                            </div>

                        </div>
                    </div>
                    <div class="col-span-1 lg:mt-20 2xl:mt-0  ">
                        <lottie-player data-aos="fade-right" src="../src/qksZkIwTuQ.json"
                            style="filter: drop-shadow(10px 10px 0px #4a0702)" background="transparent" speed="1"
                            class="w-4/6 mx-auto" loop autoplay></lottie-player>
                    </div>
                </div>


                <div class="custom-shape-divider-bottom-1701011978">
                    <svg class="fill-gray-100 lg:h-24 2xl:w-32 h-10" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path
                            d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                            opacity=".25" class="shape-fill"></path>
                        <path
                            d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                            opacity=".5" class="shape-fill"></path>
                        <path
                            d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                            class="shape-fill"></path>
                    </svg>
                </div> -->
            </div>
        </section>
        <!-- end slider -->

        <!-- foto -->
        <section id="foto" >
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 my-20 container mx-auto">
                <div class="col-span-1 grid">
                    <div class="place-self-center">
                        <h2 class="mb-2 text-center font-sans text-3xl lg:text-4xl font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-r from-red-900 from-30% to-red-500 uppercase">
                            LETAK GEOGRAFIS KABUPATEN SELUMA
                        </h2>
                        <p class="text-base leading-loose text-justify"> <!-- Perubahan pada class di sini -->
                            Kabupaten Seluma terletak pada Pantai Barat Sumatera Bagian Selatan yang terletak pada koordinat garis lintang dan bujur, yaitu 03.49’55’66” LS – 04.21’40’22” LS dan 101.17’27’57” BT – 102.59’40’54” BT. Luas wilayah Kabupaten Seluma menurut Undang-undang No. 3 tahun 2003 tentang Pembentukan Kabupaten Muko-Muko, Kabupaten Seluma, dan Kabupaten Kaur, serta sesuai dengan letak lintang dan bujurnya adalah seluas +2.400,44 km2 atau 12,05 persen dari luas wilayah Provinsi Bengkulu yang seluas 19.919,33 km2. Dari posisi geografisnya, sebelah utara berbatasan Kecamatan Selebar dengan Kota Bengkulu dan Kecamatan Talang Empat Kabupaten Bengkulu Tengah, sebelah timur berbatasan Kabupaten Kepahiang dan Lahat Provinsi Sumatera Selatan, sebelah selatan berbatasan Kabupaten Bengkulu Selatan, dan sebelah barat Samudera Hindia.
                        </p>
                    </div>
                </div>
                <div class="col-span-1">
                    <img src="https://bappeda.selumakab.go.id/wp-content/uploads/2021/04/BUPATI-DAN-WABUP.png"
                        alt="foto" class="w-full h-full shadow-md rounded-md">
                </div>
            </div>
        </section>
        <!-- end foto -->

        <!-- content  -->
        <section id="content" class="bg-gray-100 pb-20">

            <section class="container mx-auto  pb-16 pt-20">
                <div class="text-center mt-24" >
                    <div class="flex gap-3 items-center justify-center section-heading2">
                        <h2 data-aos="fade-down"
                            class="mb-6 text-center font-sans text-3xl lg:text-4xl font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-r from-red-900 from-30% to-red-500 uppercase   ">
                            Data Terbaru</h2>
                    </div>
                    <div
                        class="grid grid-cols-1 px-3 justify-center m-auto md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 pt-6 lg:px-0">

                        <a data-aos="zoom-in-up" href="organizations_detail.html"
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-red-50 hover:border-red-500 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-bold text-gray-900  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-800 leading-7 line-clamp-4 ">Jumlah penduduk wanita
                                        usia
                                        subur (Umur 15-49 Tahun) perkecamatan Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Dolores nobis numquam ratione ut facere similique fugit.
                                        Esse delectus eos voluptates? Voluptas ducimus voluptatum veritatis nemo
                                        animi laudantium et odio dolores?</p>
                                </div>
                            </div>

                            <div class="w-full border-t border-gray-200 pt-2    ">
                                <div class="flex items-center   gap-2">
                                    <div
                                        class="inline-flex items-center rounded-md border   py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-gray-700 gap-1 w-5/12 px-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar">
                                            <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                            <line x1="16" x2="16" y1="2" y2="6"></line>
                                            <line x1="8" x2="8" y1="2" y2="6"></line>
                                            <line x1="3" x2="21" y1="10" y2="10"></line>
                                        </svg>
                                        <div class="text-left truncate text-sm">28/11/2023</div>
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-md border px-3 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-red-500 overflow-hidden gap-1 w-full">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-building">
                                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                                <path d="M9 22v-4h6v4"></path>
                                                <path d="M8 6h.01"></path>
                                                <path d="M16 6h.01"></path>
                                                <path d="M12 6h.01"></path>
                                                <path d="M12 10h.01"></path>
                                                <path d="M12 14h.01"></path>
                                                <path d="M16 10h.01"></path>
                                                <path d="M16 14h.01"></path>
                                                <path d="M8 10h.01"></path>
                                                <path d="M8 14h.01"></path>
                                            </svg></div>
                                        <div class="text-left truncate text-sm">Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Dicta neque eveniet temporibus nemo
                                            delectus corporis ipsa laudantium, id sunt blanditiis, minus libero
                                            voluptate, ex praesentium dolor animi accusamus illo in.</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a data-aos="zoom-in-up" href="organizations_detail.html"
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-red-50 hover:border-red-500 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-bold text-gray-900  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-800 leading-7 line-clamp-4 ">Jumlah penduduk wanita
                                        usia
                                        subur (Umur 15-49 Tahun) perkecamatan </p>
                                </div>
                            </div>

                            <div class="w-full border-t border-gray-200 pt-2    ">
                                <div class="flex items-center   gap-2">
                                    <div
                                        class="inline-flex items-center rounded-md border   py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-gray-700 gap-1 w-5/12 px-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar">
                                            <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                            <line x1="16" x2="16" y1="2" y2="6"></line>
                                            <line x1="8" x2="8" y1="2" y2="6"></line>
                                            <line x1="3" x2="21" y1="10" y2="10"></line>
                                        </svg>
                                        <div class="text-left truncate text-sm">28/11/2023</div>
                                    </div>
                                    <div
                                        class="inline-flex items-center rounded-md border px-3 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-red-500 overflow-hidden gap-1 w-full">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-building">
                                                <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                                <path d="M9 22v-4h6v4"></path>
                                                <path d="M8 6h.01"></path>
                                                <path d="M16 6h.01"></path>
                                                <path d="M12 6h.01"></path>
                                                <path d="M12 10h.01"></path>
                                                <path d="M12 14h.01"></path>
                                                <path d="M16 10h.01"></path>
                                                <path d="M16 14h.01"></path>
                                                <path d="M8 10h.01"></path>
                                                <path d="M8 14h.01"></path>
                                            </svg></div>
                                        <div class="text-left truncate text-sm">Lorem </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a data-aos="zoom-in-up" href="organizations_detail.html"
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-red-50 hover:border-red-500 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-bold text-gray-900  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-800 leading-7 line-clamp-4 ">Jumlah penduduk wanita
                                        usia
                                        subur (Umur 15-49 Tahun) perkecamatan </p>
                                </div>
                            </div>

                            <div class="w-full border-t border-gray-200 pt-2    ">
                                <div class="flex items-center   gap-2">
                                    <div
                                        class="inline-flex items-center rounded-md border   py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-gray-700 gap-1 w-5/12 px-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-calendar">
                                            <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                                            <line x1="16" x2="16" y1="2" y2="6"></line>
                                            <line x1="8" x2="8" y1="2" y2="6"></line>
                                            <line x1="3" x2="21" y1="10" y2="10"></line>
                                        </svg>
                                        <div class="text-left truncate text-sm">28/11/2023</div>
                                    </div>

                                </div>
                            </div>
                        </a>


                    </div>
                </div>
            </section>

            <div class="  grid grid-cols-1 md:grid-cols-2 gap-5 container mx-auto">
                    <!-- grafik batang -->
                    <div class="col-span-1">

                        <div class="  w-full bg-white rounded-lg   p-4 md:p-6">
                            <div class="flex justify-between pb-4 mb-2 border-b border-gray-200 text-center ">

                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-900   pb-1">
                                        Data Pertumbuhan Penduduk</h5>
                                    <p class="text-sm font-normal text-gray-500 leading-7  ">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Repudiandae minus delectus eligendi nesciunt cupiditate odio dolor
                                        atque debitis nam nostrum itaque, autem totam expedita, sint
                                        laboriosam omnis, aperiam ducimus nemo!</p>
                                </div>
                            </div>



                            <div id="column-chart"></div>
                        </div>

                        <script>
                            // ApexCharts options and config
                            window.addEventListener("load", function () {
                                const options = {
                                    colors: ["#a3e635", "#eab308"],
                                    series: [{
                                            name: "Organic",
                                            color: "#a3e635",
                                            data: [{
                                                    x: "Mon",
                                                    y: 231
                                                },
                                                {
                                                    x: "Tue",
                                                    y: 122
                                                },
                                                {
                                                    x: "Wed",
                                                    y: 63
                                                },
                                                {
                                                    x: "Thu",
                                                    y: 421
                                                },
                                                {
                                                    x: "Fri",
                                                    y: 122
                                                },
                                                {
                                                    x: "Sat",
                                                    y: 323
                                                },
                                                {
                                                    x: "Sun",
                                                    y: 111
                                                },
                                            ],
                                        },
                                        {
                                            name: "Social media",
                                            color: "#eab308",
                                            data: [{
                                                    x: "Mon",
                                                    y: 232
                                                },
                                                {
                                                    x: "Tue",
                                                    y: 113
                                                },
                                                {
                                                    x: "Wed",
                                                    y: 341
                                                },
                                                {
                                                    x: "Thu",
                                                    y: 224
                                                },
                                                {
                                                    x: "Fri",
                                                    y: 522
                                                },
                                                {
                                                    x: "Sat",
                                                    y: 411
                                                },
                                                {
                                                    x: "Sun",
                                                    y: 243
                                                },
                                            ],
                                        },
                                    ],
                                    chart: {
                                        type: "bar",
                                        height: "330px",
                                        fontFamily: "Inter, sans-serif",
                                        toolbar: {
                                            show: false,
                                        },
                                    },
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: "70%",
                                            borderRadiusApplication: "end",
                                            borderRadius: 8,
                                        },
                                    },
                                    tooltip: {
                                        shared: true,
                                        intersect: false,
                                        style: {
                                            fontFamily: "Inter, sans-serif",
                                        },
                                    },
                                    states: {
                                        hover: {
                                            filter: {
                                                type: "darken",
                                                value: 1,
                                            },
                                        },
                                    },
                                    stroke: {
                                        show: true,
                                        width: 0,
                                        colors: ["transparent"],
                                    },
                                    grid: {
                                        show: false,
                                        strokeDashArray: 4,
                                        padding: {
                                            left: 2,
                                            right: 2,
                                            top: -14
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false,
                                    },
                                    legend: {
                                        show: false,
                                    },
                                    xaxis: {
                                        floating: false,
                                        labels: {
                                            show: true,
                                            style: {
                                                fontFamily: "Inter, sans-serif",
                                                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                                            }
                                        },
                                        axisBorder: {
                                            show: false,
                                        },
                                        axisTicks: {
                                            show: false,
                                        },
                                    },
                                    yaxis: {
                                        show: false,
                                    },
                                    fill: {
                                        opacity: 1,
                                    },
                                }

                                if (document.getElementById("column-chart") && typeof ApexCharts !==
                                    'undefined') {
                                    const chart = new ApexCharts(document.getElementById("column-chart"),
                                        options);
                                    chart.render();
                                }
                            });
                        </script>

                    </div>
                    <!-- grafik lingkaran -->
                    <div class="col-span-1">

                        <div class="w-full bg-white rounded-lg   p-4 md:p-6">
                            <div class="flex justify-between pb-4 mb-2 border-b border-gray-200 text-center ">

                                <div>
                                    <h5 class="leading-none text-2xl font-bold text-gray-900   pb-1">
                                        Data Pertumbuhan Penduduk</h5>
                                    <p class="text-sm font-normal text-gray-500 leading-7  ">
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                        Repudiandae minus delectus eligendi nesciunt cupiditate odio dolor
                                        atque debitis nam nostrum itaque, autem totam expedita, sint
                                        laboriosam omnis, aperiam ducimus nemo!</p>
                                </div>
                            </div>
                            <!-- Line Chart -->
                            <div class="py-6" id="pie-chart"></div>
                        </div>

                        <script>
                            // ApexCharts options and config
                            window.addEventListener("load", function () {
                                const getChartOptions = () => {
                                    return {
                                        series: [52.8, 26.8, 20.4],
                                        colors: ["#eab308", "#a3e635", "#f87171"],
                                        chart: {
                                            height: 330,
                                            width: "100%",
                                            type: "pie",
                                        },
                                        stroke: {
                                            colors: ["white"],
                                            lineCap: "",
                                        },
                                        plotOptions: {
                                            pie: {
                                                labels: {
                                                    show: true,
                                                },
                                                size: "100%",
                                                dataLabels: {
                                                    offset: -25
                                                }
                                            },
                                        },
                                        labels: ["Direct", "Organic search", "Referrals"],
                                        dataLabels: {
                                            enabled: true,
                                            style: {
                                                fontFamily: "Inter, sans-serif",
                                            },
                                        },
                                        legend: {
                                            position: "bottom",
                                            fontFamily: "Inter, sans-serif",
                                        },
                                        yaxis: {
                                            labels: {
                                                formatter: function (value) {
                                                    return value + "%"
                                                },
                                            },
                                        },
                                        xaxis: {
                                            labels: {
                                                formatter: function (value) {
                                                    return value + "%"
                                                },
                                            },
                                            axisTicks: {
                                                show: false,
                                            },
                                            axisBorder: {
                                                show: false,
                                            },
                                        },
                                    }
                                }

                                if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
                                    const chart = new ApexCharts(document.getElementById("pie-chart"),
                                        getChartOptions());
                                    chart.render();
                                }
                            });
                        </script>


                    </div>

                </div>

        </section>
        <!-- end content  -->

        <div class="relative">
            <div class="slider-svg-b tran-svg absolute z-10">
                <svg data-name="Layer 1" class="svg4 duration-300 transform fill-white opacity-60"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
            </div>

            <div class="slider-svg-b tran-svg absolute -mt-2 z-10">
                <svg data-name="Layer 1" class="svg6 duration-300 transform fill-gray-100"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path
                        d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </div>

        <!-- Footer  -->

        <footer class="relative pt-32 bg-[#DC2626]">
            <div
                class="mx-auto container px-5 py-20 pt-36 pb-16 flex items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="lg:w-2/4 md:w-1/2  w-full flex-shrink-0 md:mx-0 mx-auto text-left">
                    <a href="/view/home.html" class="flex items-center text-black">
                        <img src="{{ asset('assets/src/logo.png') }}" class="md:w-12 md:h-14 w-10 h-12" />

                        <div class="ml-3 text-slate-100 ">
                            <strong class="text-2xl   font-extrabold  text-sh uppercase font-[arial]">E-PROFILE PEMBANGUNAN DAERAH</strong>
                            <p class="text-[13px] md:text-[15px]   uppercase -mt-2 relative">
                                KABUPATEN SELUMA
                            </p>
                        </div>
                    </a>
                    <p class="mt-4 text-sm text-gray-200 leading-6 max-w-xl">
                        Seluruh kumpulan data yang tersedia dalam Portal E-PROFILE PEMBANGUNAN DAERAH Kabupaten Seluma dapat diakses secara
                        terbuka dan dikategorikan sebagai data publik.
                        Menggunakan data secara bersama-sama dengan visualisasi data yang menarik
                    </p>
                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-orange-200 w-5 h-5 mr-3" viewBox="0 0 16 16" id="map">
                            <path
                                d="M8 0C5.2 0 3 2.2 3 5s4 11 5 11 5-8.2 5-11-2.2-5-5-5zm0 8C6.3 8 5 6.7 5 5s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z">
                            </path>
                        </svg>

                        <span
                            class="text-sm text-white group-hover:text-orange-200 duration-300 transform break-normal max-w-xl">JL.
                            Basuki Rahmat Pematang Aur Tais, Kelurahan Talang Saling, Kec. Seluma, Kabupaten
                            Seluma</span>
                    </a>

                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-orange-200 w-5 h-5 mr-3" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>

                        <span
                            class="text-sm text-white group-hover:text-orange-200 duration-300 transform break-normal">(0736)
                            9150034</span>
                    </a>

                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-orange-200 w-5 h-5 mr-3" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <span
                            class="text-sm text-white group-hover:text-orange-200 duration-300 transform break-normal">diskominfo@selumakab.go.id</span>
                    </a>
                </div>

                <div class="lg:w-2/4 md:w-1/2 w-full px-4 md:ml-12 mt-10 md:mt-3">

                    <iframe class="w-full rounded-lg h-72 brightness-90" style="box-shadow: 5px 5px 20px 5px #4a0702"
                        frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Kominfo+Kabupaten+Seluma,+Talang+Saling,+Seluma+Regency,+Bengkulu,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div>
            </div>

            <div class="px-12 mx-auto py-4 flex flex-wrap flex-col sm:flex-row bg-red-800">
                <p class="text-white mx-auto text-sm text-center sm:text-left">
                    Copyright&copy; 2023 |
                    <a href="#" class="text-orange-300 font-bold">Portal Data</a>. All
                    rights reserved.
                </p>
            </div>
        </footer>
        <!-- end Footer -->
        <!-- back to top  -->
        <div class="" x-data="{scrollBackTop: false}" x-cloak>
            <svg x-show="scrollBackTop" @click="window.scrollTo({top: 0, behavior: 'smooth'})"
                x-on:scroll.window="scrollBackTop = (window.pageYOffset > window.outerHeight * 0.5) ? true : false"
                aria-label="Back to top" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                class="bi bi-arrow-up-circle-fill fixed bottom-0 right-0 mx-3 my-10 w-8 fill-red-500 shadow-lg cursor-pointer hover:fill-red-400 bg-white rounded-full"
                viewBox="0 0 16 16">
                <path
                    d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg>
        </div>
    </div>
</body>

<!-- script -->
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="{{ asset('assets/src/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" charset="utf-8"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

</html>
