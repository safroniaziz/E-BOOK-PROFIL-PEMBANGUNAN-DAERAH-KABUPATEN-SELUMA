
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

</head>

<body id="home" class="overflow-x-hidden">
    <div class="font-[Poppins] 2xl:text-xl font-nunito text-slate-900 overflow-x-hidden w-full">
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
            <div id="navbar" :class="[isOpen ? 'translate-x-0 opacity-100  bg-[#DC2626]' : '']"
                class="py-6 mx-auto   lg:bg-transparent duration-300 transition-all ease-in-out">
                <div class="lg:flex mx-auto container px-5 lg:items-center lg:justify-between   ">
                    <div class="flex items-center justify-between">
                        <!-- logo -->
                        <a href="/view/home.html" class="flex items-center text-black mx-4 md:ml-6">
                            <img src="{{ asset('assets/src/logo.png') }}" class="md:w-12 md:h-14 w-10 h-12" />
                            <div class="ml-3 text-slate-100   ">
                                <strong class="text-2xl   font-extrabold  text-sh uppercase font-[arial]">E-PROFILE PEMBANGUNAN DAERAH</strong>
                                <p class="text-[13px] md:text-[15px]   uppercase -mt-2 relative">
                                    KABUPATEN SELUMA
                                </p>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-white hover:text-red-500 focus:outline-none  " aria-label="toggle menu">
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
                    <div x-cloak :class="[isOpen ? '  opacity-100 block' : 'opacity-0  hidden']" class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out
                        bg-[#DC2626] md:bg-none menu-navbar text-white lg:mt-0 lg:p-0 lg:top-0 lg:relative
                        lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center"
                        id="list-menu">
                        <div class="flex flex-col -mx-6 lg:flex-row lg:items-center text-[16px]">
                            <!-- if menu active "active-menu" else "text-gray-600" -->
                            <a href="{{ route('home') }}"
                                class="px-2 py-2 mx-2 mt-2   text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Home</a>
                            <a href="{{ route('dataStatistikSektoral') }}"
                                class="px-2 py-2 mx-2 mt-2 active-menu  text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Data Statistik Sektoral</a>
                            <a href="tentang.html"
                                class="px-2 py-2 mx-2 mt-2  text-white font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Tentang</a>
                            <a href="{{ route('login') }}"
                                class="px-5 py-2 mx-2 mt-2  text-white font-bold text-[14px]     duration-300 transform rounded-md lg:mt-0   hover:bg-red-300 bg-red-400 hover:scale-[99%] active:scale-95">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
        <!-- slider -->
        <section id="home">
            <div class="text-center overflow-hidden bg-[#DC2626]">
                <div class="z-10 mt-32 mb-20 lg:mt-40 overflow-hidden container mx-auto section-heading" style="width: 80%; color: white;">

                    <h2 data-aos="fade-down" class="mb-8 text-center font-sans text-4xl lg:text-5xl 2xl:text-5xl font-extrabold text-white" style="text-shadow:5px 5px 5px #38383863;">
                        DATA STATISTIK SEKTORAL (BERDASARKAN WILAYAH)
                    </h2>

                    <p>
                        Kabupaten Seluma merupakan kabupaten dengan luas wilayah terbesar ketiga di Provinsi Bengkulu, yaitu 19.919,33 km<sup>2</sup>, dimana kabupaten terluas yaitu Kabupaten Bengkulu Utara dengan 4.324,60 km<sup>2</sup>, diikuti oleh Kabupaten Muko-muko diposisi kedua dengan luas 4.036,70 km<sup>2</sup>.
                    </p>

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
                </div>
            </div>
        </section>


        <!-- end slider -->

        <!-- content  -->
        <section id="content" class="bg-gray-100 py-20">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-3">
                    <div class="col-span-1 " data-aos="zoom-out" data-aos-delay="300">
                        <div
                            class="bg-white shadow-gray-300 shadow-lg  rounded-lg     p-5   text-gray-800  text-sm leading-7">
                            <h2
                                class="mb-2 text-center font-sans text-2xl py-2 lg:text-2xl font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-r from-red-900 from-30% to-red-500 uppercase">
                                PEMERINTAH KABUPATEN SELUMA PERIODE 2019-2024
                            </h2>
                            <img class="animated" src="https://bappeda.selumakab.go.id/wp-content/uploads/2021/04/BUPATI-DAN-WABUP.png"
                            style="filter: drop-shadow(3px -6px 5px #353535)" alt=".">

                            <p class="text-base leading-loose text-justify pt-4" style="text-indent: 30px;">
                                <!-- Perubahan pada class di sini -->
                                Kabupaten Seluma terletak pada Pantai Barat Sumatera Bagian Selatan yang terletak pada
                                koordinat
                                garis lintang dan bujur, yaitu 03.49’55’66” LS – 04.21’40’22” LS dan 101.17’27’57” BT –
                                102.59’40’54” BT. Luas wilayah Kabupaten Seluma menurut Undang-undang No. 3 tahun 2003
                                tentang
                                Pembentukan Kabupaten Muko-Muko, Kabupaten Seluma, dan Kabupaten Kaur, serta sesuai dengan
                                letak
                                lintang dan bujurnya adalah seluas +2.400,44 km2 atau 12,05 persen dari luas wilayah
                                Provinsi
                                Bengkulu yang seluas 19.919,33 km2. Dari posisi geografisnya, sebelah utara berbatasan
                                Kecamatan
                                Selebar dengan Kota Bengkulu dan Kecamatan Talang Empat Kabupaten Bengkulu Tengah, sebelah
                                timur
                                berbatasan Kabupaten Kepahiang dan Lahat Provinsi Sumatera Selatan, sebelah selatan
                                berbatasan
                                Kabupaten Bengkulu Selatan, dan sebelah barat Samudera Hindia.
                            </p>
                        </div>


                    </div>
                    <div class="col-span-1 lg:col-span-2  " data-aos="fade-left">
                        <div class="bg-white shadow-gray-300 items-center text-sm justify-between w-full flex rounded-lg   shadow-lg p-2 mb-5 sticky"
                            style="top: 5px">
                            <input
                                class="   rounded-lg w-full py-3 pl-4 text-sm text-gray-700   leading-tight   focus:ring-red-500 border-none duration-300 transform     outline-none   "
                                type="text" placeholder="Cari data statistik sektoral kabupaten seluma">
                            <div
                                class="bg-red-600 py-2.5 px-5 flex hover:bg-red-400 cursor-pointer mx-2 duration-300 transform text-white rounded-lg ">
                                <svg class="w-6 h-6 text-white mr-2" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                                CARI
                            </div>
                        </div>
                        <div
                            class="bg-white shadow-gray-300 shadow-lg   rounded-lg     p-5   text-gray-800  text-sm leading-7 mb-5">
                            <!-- dataStatistikWilayah 1 -->
                            @foreach ($datas as $data)
                                <div class="  px-5    py-5 border-b border-gray-200">
                                    <div class="mt-2">
                                        <a class="text-[20px] text-gray-700 font-bold hover:text-blue-500 duration-300 transform line-clamp-2"
                                            href="{{ route('dataStatistikSektoral.detail',[$data->id]) }}">{{ $data->kelompok_data }}</a>
                                        @if ($data->deskripsi_singkat != null)
                                            <h1 class="    font-medium text-[14px] text-gray-900 mb-3 line-clamp-4">
                                                {{ $data->deskripsi_singkat }}
                                            </h1>
                                        @endif
                                        @if ($data->sumber_data != null)
                                            <h1 class="font-medium text-[14px] text-gray-900 mb-3 line-clamp-4">
                                                <em>Sumber Data : {{ $data->sumber_data }}</em>
                                            </h1>
                                        @endif
                                        @if ($data->dokumen_pdf != null || $data->dokumen_word != null)
                                            <p class="leading-relaxed mt-3 line-clamp-1 text-sm">Unduh Dokumen:</p>
                                        @endif
                                        <div class="flex space-x-10 mt-2">
                                            <!-- PDF -->
                                            @if ($data->dokumen_pdf != null)
                                                <a href=""
                                                    class="line-clamp-1 flex text-[14px] text-blue-500 hover:underline duration-300 transform">
                                                    <svg class="mr-1 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                        enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="pdf-file">
                                                        <path fill="#eff2f3"
                                                            d="M58.2,3.2l0,49H5.8l0-38.4L19.6,0l35.5,0C56.8,0,58.2,1.5,58.2,3.2z">
                                                        </path>
                                                        <path fill="#dadede"
                                                            d="M16.7,13.8l-10.8,0L19.6,0l-0.1,10.8C19.6,12.5,18.3,13.8,16.7,13.8z">
                                                        </path>
                                                        <path fill="#f2786b"
                                                            d="M37.1 28c-2.9-2.8-5-6-5-6 .8-1.2 2.7-8.1-.2-10.1-2.9-2-4.4 1.7-4.4 1.7-1.3 4.6 1.8 8.8 1.8 8.8l-3.5 7.7c-.4 0-11.5 4.3-7.7 9.6 3.9 5.3 9.3-7.5 9.3-7.5 2.1-.7 8.5-1.6 8.5-1.6 2.5 3.4 5.5 4.5 5.5 4.5 4.6 1.2 5.1-2.6 5.1-2.6C46.6 27.5 37.1 28 37.1 28zM20 37.9c-.1 0-.1-.1-.1-.1-.6-1.4 4-4.1 4-4.1S21.4 38.5 20 37.9zM30.4 13.7c1.3 1.2.2 5.3.2 5.3S29.1 14.9 30.4 13.7zM29.2 29.2l1.8-4.4 2.8 3.4L29.2 29.2zM44 32.4C44 32.4 44 32.4 44 32.4L44 32.4 44 32.4c-.8 1.3-4.1-1.5-4.4-1.8l0 0c0 0 0 0 0 0 0 0 0 0 0 0l0 0C40.1 30.6 44.4 30.9 44 32.4L44 32.4zM58.2 49l0 11.8c0 1.7-1.4 3.2-3.2 3.2L8.9 64c-1.7 0-3.2-1.4-3.2-3.2l0-11.8H58.2z">
                                                        </path>
                                                        <path fill="#eff2f3"
                                                            d="M27.9 54.2c0 .8-.3 1.4-.8 1.9-.5.4-1.3.6-2.3.6h-.8v2.9h-1.3v-7.7H25c1 0 1.7.2 2.2.6C27.7 52.9 27.9 53.4 27.9 54.2zM24.1 55.7h.7c.6 0 1.1-.1 1.4-.3.3-.2.5-.6.5-1.1 0-.4-.1-.8-.4-1-.3-.2-.7-.3-1.3-.3h-.9V55.7zM35.8 55.7c0 1.3-.4 2.3-1.1 2.9-.7.7-1.7 1-3.1 1h-2.2v-7.7h2.4c1.2 0 2.2.3 2.9 1C35.4 53.5 35.8 54.5 35.8 55.7zM34.4 55.7c0-1.9-.9-2.8-2.6-2.8h-1.1v5.6h.9C33.5 58.6 34.4 57.6 34.4 55.7zM38.7 59.6h-1.3v-7.7h4.4v1.1h-3.1v2.4h2.9v1.1h-2.9V59.6z">
                                                        </path>
                                                    </svg>
                                                    <p class="line-clamp-1  ">Pdf</p>
                                                </a>
                                            @endif
                                            @if ($data->dokumen_word != null)
                                                <a href=""
                                                    class="line-clamp-1 flex text-[14px] text-blue-500 hover:underline duration-300 transform">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 w-6 h-6" fill="none"
                                                        viewBox="0 0 48 48" id="microsoft-excel">
                                                        <path fill="#185C37"
                                                            d="M30.1395 23.2093L11.1628 19.8605V44.605C11.1628 45.7351 12.0789 46.6512 13.2089 46.6512H45.9539C47.0839 46.6512 48 45.7351 48 44.605V35.4884L30.1395 23.2093Z">
                                                        </path>
                                                        <path fill="#21A366"
                                                            d="M30.1395 2H13.2089C12.0789 2 11.1628 2.91608 11.1628 4.04613V13.1628L30.1395 24.3256L40.186 27.6744L48 24.3256V13.1628L30.1395 2Z">
                                                        </path>
                                                        <path fill="#107C41"
                                                            d="M11.1628 13.1628H30.1395V24.3256H11.1628V13.1628Z"></path>
                                                        <path fill="#000"
                                                            d="M24.7446 10.9302H11.1628V38.8372H24.7446C25.8731 38.8335 26.787 37.9195 26.7907 36.791V12.9763C26.787 11.8478 25.8731 10.9338 24.7446 10.9302Z"
                                                            opacity=".1"></path>
                                                        <path fill="#000"
                                                            d="M23.6283 12.0465H11.1628V39.9535H23.6283C24.7568 39.9498 25.6707 39.0359 25.6744 37.9074V14.0926C25.6707 12.9641 24.7568 12.0502 23.6283 12.0465Z"
                                                            opacity=".2"></path>
                                                        <path fill="#000"
                                                            d="M23.6283 12.0465H11.1628V37.7209H23.6283C24.7568 37.7173 25.6707 36.8033 25.6744 35.6748V14.0926C25.6707 12.9641 24.7568 12.0502 23.6283 12.0465Z"
                                                            opacity=".2"></path>
                                                        <path fill="#000"
                                                            d="M22.512 12.0465H11.1628V37.7209H22.512C23.6405 37.7173 24.5545 36.8033 24.5581 35.6748V14.0926C24.5545 12.9641 23.6405 12.0502 22.512 12.0465Z"
                                                            opacity=".2"></path>
                                                        <path fill="url(#paint0_linear_147648_1454)"
                                                            d="M2.04613 12.0465H22.512C23.642 12.0465 24.5581 12.9626 24.5581 14.0926V34.5585C24.5581 35.6885 23.642 36.6046 22.512 36.6046H2.04613C0.916083 36.6046 0 35.6886 0 34.5585V14.0926C0 12.9626 0.916083 12.0465 2.04613 12.0465Z">
                                                        </path>
                                                        <path fill="#fff"
                                                            d="M6.3371 30.9764L10.6415 24.3066L6.69766 17.6737H9.87012L12.0223 21.9156C12.221 22.3185 12.3572 22.6177 12.4309 22.8153H12.4588C12.6002 22.4938 12.749 22.1816 12.9053 21.8787L15.2059 17.6759H18.1183L14.074 24.2698L18.221 30.9764H15.1222L12.6363 26.3204C12.5192 26.1223 12.4198 25.9142 12.3393 25.6987H12.3025C12.2297 25.9099 12.1331 26.1121 12.0145 26.3014L9.45488 30.9764H6.3371Z">
                                                        </path>
                                                        <path fill="#33C481"
                                                            d="M45.9539 2H30.1395V13.1628H48V4.04613C48 2.91608 47.0839 2 45.9539 2Z">
                                                        </path>
                                                        <path fill="#107C41" d="M30.1395 24.3256H48V35.4884H30.1395V24.3256Z">
                                                        </path>
                                                        <defs>
                                                            <linearGradient id="paint0_linear_147648_1454" x1="4.266"
                                                                x2="20.292" y1="10.448" y2="38.203"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop stop-color="#18884F"></stop>
                                                                <stop offset=".5" stop-color="#117E43"></stop>
                                                                <stop offset="1" stop-color="#0B6631"></stop>
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <p class="line-clamp-1  ">Excel</p>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="mt-5">
                                {{ $datas->links('vendor.pagination.custom-pagination') }}
                            </div>
                        </div>
                    </div>
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
                            <strong class="text-2xl   font-extrabold  text-sh uppercase font-[arial]">Satu
                                Data</strong>
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

</html>
