
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-book profil pembangunan daerah</title>
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
    <div class="font-[Poppins] 2xl:text-xl font-nunito text-slate-900 overflow-x-hidden w-full">
        <!-- navbar  -->
        <nav id="shadow-nav" x-data="{isOpen: false }" class="fixed top-0 z-50 w-full font-[Poppins]">
            <div id="navbar" :class="[isOpen ? 'translate-x-0 opacity-100  bg-white' : ' ']"
                class="py-6 mx-auto   lg:bg-transparent duration-300 transition-all ease-in-out">
                <div class="lg:flex mx-auto container px-5 lg:items-center lg:justify-between">
                    <div class="flex items-center justify-between">
                        <!-- logo -->
                        <a href="{{ route('home') }}" class="flex items-center text-black mx-4 md:ml-6">
                            <img src="{{ asset('assets/src/logo.png') }}" class="md:w-12 md:h-14 w-10 h-12" />
                            <div :class="[isOpen ? 'text-black lg:text-slate-100' : ' text-slate-100']" class="ml-3   ">
                                <strong class="text-md   font-extrabold  text-sh uppercase">E-BOOK PROFIL PEMBANGUNAN DAERAH</strong>
                                <p class="text-[13px] md:text-[15px]   uppercase -mt-2 relative">
                                    KABUPATEN SELUMA
                                </p>
                            </div>
                        </a>
                        <!-- Mobile menu button -->
                        <div class="flex lg:hidden">
                            <button x-cloak @click="isOpen = !isOpen" type="button"
                                class="text-green-900 hover:text-green-500 focus:outline-none focus:text-green-700"
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
                        class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white md:bg-none menu-navbar text-green-900 lg:mt-0 lg:p-0 lg:top-0 lg:relative lg:bg-transparent lg:w-auto lg:opacity-100 lg:translate-x-0 lg:flex lg:items-center"
                        id="list-menu">
                        <div class="flex flex-col -mx-6 lg:flex-row lg:items-center text-[16px]">
                            <!-- if menu active "active-menu" else "text-gray-600" -->
                            <a href="{{ route('home') }}"
                                class="px-2 py-2 active-menu mx-2 mt-2 text-gray-600 lg:text-black font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Beranda</a>
                            <a href="{{ route('dataset') }}"
                                class="px-2 py-2  text-gray-600 lg:text-black font-bold text-[14px] text-sh mx-2 mt-2   duration-300 transform rounded-md lg:mt-0   ">Dataset</a>
                            <a href="{{ route('organisation') }}"
                                class="px-2 py-2 mx-2 mt-2 text-gray-600 lg:text-black font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Organizations</a>
                            <a href="{{ route('group') }}"
                                class="px-2 py-2 mx-2 mt-2  text-gray-600 lg:text-black font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Groups</a>
                            <a href="{{ route('showcase') }}"
                                class="px-2 py-2 mx-2 mt-2  text-gray-600 lg:text-black font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">showcase</a>
                            <a href="{{ route('tentang') }}"
                                class="px-2 py-2 mx-2 mt-2  text-gray-600 lg:text-black font-bold text-[14px] text-sh   duration-300 transform rounded-md lg:mt-0   ">Tentang</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navbar -->
        <!-- slider -->
        <section id="home">
            <div class="text-center overflow-hidden bg-gradient-to-br   from-[#096914] to-lime-200">
                <div
                    class="grid grid-cols-1 md:grid-cols-2 z-10  mt-32 mb-20 lg:mt-40 overflow-hidden container mx-auto ">
                    <div class="col-span-1 px-8 lg:px-12 text-white   place-self-center text-left">
                        <div data-aos="fade-left">
                            <h2
                                class="font-extrabold font-[arial] text-3xl lg:text-4xl inline-block text-transparent bg-clip-text bg-gradient-to-b from-white from-30% to-yellow-200  ">
                                E-BOOK PROFIL PEMBANGUNAN DAERAH<br />KABUPATEN SELUMA
                            </h2>
                            <p class="text-gray-200 mt-4 text-sm leading-7 md:leading-7  ">
                                Seluruh kumpulan data yang tersedia dalam E-book profil pembangunan daerah
                                Kabupaten Seluma dapat diakses secara terbuka dan
                                dikategorikan sebagai data publik.
                            </p>

                        </div>
                        <div class="flex space-x-1 items-center mb-2 mt-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-100" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <p class="text-white text-sm   ">Pencarian Data Penduduk, Ekonomi dan Lainnya ...</p>
                        </div>
                        <div class="bg-white items-center text-sm justify-between w-full flex rounded-lg   shadow-lg p-2 mb-5 sticky"
                            style="top: 5px">



                            <input
                                class="   rounded-lg w-full py-3 pl-4 text-sm text-gray-700   leading-tight   focus:ring-green-500 border-none duration-300 transform     outline-none   "
                                type="text" placeholder="Pencarian Data Penduduk, Ekonomi dan Lainnya ...">

                            <div
                                class="bg-green-600 py-2.5 px-5 flex hover:bg-green-400 cursor-pointer mx-2 duration-300 transform  rounded-lg ">

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
                        <lottie-player data-aos="fade-right" src="{{ asset('assets/src/qksZkIwTuQ.json') }}"
                            style="filter: drop-shadow(10px 10px 0px #fef08a)" background="transparent" speed="1"
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
                </div>
            </div>
        </section>


        <!-- end slider -->

        <!-- content  -->
        <section id="content" class="bg-gray-100 pb-20">
            <section class="container mx-auto py-12   pt-40">
                <div class="text-center ">
                    <div class="flex gap-3 items-center justify-center section-heading2">
                        <h2 data-aos="fade-down"
                            class="mb-6 text-center font-sans text-3xl lg:text-4xl font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-r from-[#14532D] from-30% to-lime-400 uppercase   ">
                            Statistik</h2>
                    </div>
                    <div class="flex flex-col items-center mt-6 lg:flex-row gap-5 lg:justify-evenly px-4 md:px-0">
                        <div data-aos="zoom-in-up"
                            class="rounded-xl border bg-gradient-to-r  inline-block from-[#096914] to-lime-200   w-full min-h-[150px] shadow-md hover:scale-[99%] active:scale-95 group cursor-pointer duration-300 transform p-3">
                            <a href="dataset.html">
                                <div
                                    class="bg-white rounded-xl w-full h-full group-hover:bg-opacity-90 shadow-inner group-hover:shadow-gray-700 shadow-gray-300  duration-300 transform">
                                    <div class="flex flex-col space-y-1.5 p-6 pb-4     ">
                                        <h3
                                            class="tracking-tight text-center text-transparent bg-clip-text bg-gradient-to-r from-[#14532D] from-30% to-lime-400   text-4xl md:text-5xl font-extrabold font-[arial] relative">
                                            <div class="absolute right-0"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-24 h-24 opacity-40 text-gray-300  " viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-database">
                                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse>
                                                    <path d="M3 5V19A9 3 0 0 0 21 19V5"></path>
                                                    <path d="M3 12A9 3 0 0 0 21 12"></path>
                                                </svg></div>
                                            <!--  animatedCounter(value, durasi) -->
                                            <p><span x-data="animatedCounter(77, 200)" x-init="updatecounter"
                                                    x-text="Math.round(current)" class="  font-extrabold "></span></p>
                                        </h3>
                                    </div>
                                    <div class=" text-center font-bold   text-lg  ">
                                        <p>Total Dataset</p>
                                    </div>
                                    <div class="pl-3 text-sm   flex justify-center items-center pb-6 text-gray-500  ">
                                        <p>Lihat Selengkapnya</p><svg xmlns="http://www.w3.org/2000/svg" width="17"
                                            height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div data-aos="zoom-in-up"
                            class="rounded-xl border bg-gradient-to-r  inline-block from-[#096914] to-lime-200   w-full min-h-[150px] shadow-md hover:scale-[99%] active:scale-95 group cursor-pointer duration-300 transform p-3">
                            <a href="Organizations.html">
                                <div
                                    class="bg-white rounded-xl w-full h-full group-hover:bg-opacity-90 shadow-inner group-hover:shadow-gray-700 shadow-gray-300  duration-300 transform">
                                    <div class="flex flex-col space-y-1.5 p-6 pb-4     ">
                                        <h3
                                            class="tracking-tight text-center text-transparent bg-clip-text bg-gradient-to-r from-[#14532D] from-30% to-lime-400   text-4xl md:text-5xl font-extrabold font-[arial] relative">
                                            <div class="absolute right-0"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-24 h-24 opacity-40 text-gray-300  " viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
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
                                            <!--  animatedCounter(value, durasi) -->
                                            <p><span x-data="animatedCounter(29, 200)" x-init="updatecounter"
                                                    x-text="Math.round(current)" class="  font-extrabold "></span></p>
                                        </h3>
                                    </div>
                                    <div class=" text-center font-bold   text-lg  ">
                                        <p>Total Organisasi</p>
                                    </div>
                                    <div class="pl-3 text-sm   flex justify-center items-center pb-6 text-gray-500  ">
                                        <p>Lihat Selengkapnya</p><svg xmlns="http://www.w3.org/2000/svg" width="17"
                                            height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <div data-aos="zoom-in-up"
                            class="rounded-xl border bg-gradient-to-r  inline-block from-[#096914] to-lime-200   w-full min-h-[150px] shadow-md hover:scale-[99%] active:scale-95 group cursor-pointer duration-300 transform p-3">
                            <a href="Groups.html">
                                <div
                                    class="bg-white rounded-xl w-full h-full group-hover:bg-opacity-90 shadow-inner group-hover:shadow-gray-700 shadow-gray-300  duration-300 transform">
                                    <div class="flex flex-col space-y-1.5 p-6 pb-4     ">
                                        <h3
                                            class="tracking-tight text-center text-transparent bg-clip-text bg-gradient-to-r from-[#14532D] from-30% to-lime-400   text-4xl md:text-5xl font-extrabold font-[arial] relative">
                                            <div class="absolute right-0"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-24 h-24 opacity-40 text-gray-300  " viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-folder">
                                                    <path
                                                        d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z">
                                                    </path>
                                                </svg></div>
                                            <!--  animatedCounter(value, durasi) -->
                                            <p><span x-data="animatedCounter(0, 200)" x-init="updatecounter"
                                                    x-text="Math.round(current)" class="  font-extrabold "></span></p>
                                        </h3>
                                    </div>
                                    <div class=" text-center font-bold   text-lg  ">
                                        <p>Total Grup / Kategori</p>
                                    </div>
                                    <div class="pl-3 text-sm   flex justify-center items-center pb-6 text-gray-500  ">
                                        <p>Lihat Selengkapnya</p><svg xmlns="http://www.w3.org/2000/svg" width="17"
                                            height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-chevron-right">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="container mx-auto  pb-16 pt-20">
                <div class="text-center mt-32">
                    <div class="flex gap-3 items-center justify-center section-heading2">
                        <h2 data-aos="fade-down"
                            class="mb-6 text-center font-sans text-3xl lg:text-4xl font-extrabold inline-block text-transparent bg-clip-text bg-gradient-to-r from-[#14532D] from-30% to-lime-400 uppercase   ">
                            Data Terbaru</h2>
                    </div>
                    <div
                        class="grid grid-cols-1 justify-center m-auto md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 pt-6 px-4 lg:px-0">

                        <a data-aos="zoom-in-up" href="organizations_detail.html"
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-lime-100 hover:border-lime-400 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-semibold text-gray-800  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-500 leading-7 line-clamp-4 ">Jumlah penduduk wanita
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
                                        class="inline-flex items-center rounded-md border px-3 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-lime-500 overflow-hidden gap-1 w-full">
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
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-lime-100 hover:border-lime-400 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-semibold text-gray-800  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-500 leading-7 line-clamp-4 ">Jumlah penduduk wanita
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
                                        class="inline-flex items-center rounded-md border px-3 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent text-white hover:bg-primary/80 bg-lime-500 overflow-hidden gap-1 w-full">
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
                            class="    rounded-xl   p-3  w-full mx-auto  text-left border-white bg-white  border-2  hover:bg-lime-100 hover:border-lime-400 duration-300 transform hover:scale-[99%] active:scale-95   hover:shadow-gray-300 shadow-lg">
                            <div class="relative flex    flex-row  space-x-5  h-[150px]">
                                <div class="w-full   flex flex-col   px-3">
                                    <h3 class="font-semibold text-gray-800  text-[16px] line-clamp-2    ">
                                        DATA PENDUDUK WANITA USIA SUBUR </h3>
                                    <p class="text-sm text-gray-500 leading-7 line-clamp-4 ">Jumlah penduduk wanita
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


            <div
                class="relative flex flex-col min-w-0 break-words w-full   shadow-lg my-20  bg-white  rounded-md container mx-auto px-4">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full max-w-full flex-grow flex-1">
                            <h6 class="uppercase text-gray-700 mb-1 text-xs font-semibold">
                                Overview
                            </h6>
                            <h2 class="text-gray-800 text-xl font-semibold">
                                Sales value
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="p-4 flex-auto">
                    <!-- Chart -->
                    <div class="relative h-80">
                        <canvas id="line-chart"></canvas>
                    </div>
                </div>
            </div>
            <script type="text/javascript">

                (function () {
                    /* Chart initialisations */
                    /* Line Chart */
                    var config = {
                        type: "line",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July",
                            ],
                            datasets: [
                                {
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [65, 78, 66, 44, 56, 67, 75],
                                    fill: false,
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#fff000",
                                    borderColor: "#fff000",
                                    data: [40, 68, 86, 74, 56, 60, 87],
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Sales Charts",
                                fontColor: "rgba(0,0,0,.4)",
                            },
                            legend: {
                                labels: {
                                    fontColor: "rgba(0,0,0,.4)",
                                },
                                align: "end",
                                position: "bottom",
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false,
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true,
                            },
                            scales: {
                                xAxes: [
                                    {
                                        ticks: {
                                            fontColor: "rgba(33, 37, 41, 0.5)",
                                        },
                                        display: true,
                                        scaleLabel: {
                                            display: false,
                                            labelString: "Month",
                                            fontColor: "rgba(0,0,0,.4)",
                                        },
                                        gridLines: {
                                            display: false,
                                            borderDash: [2],
                                            borderDashOffset: [2],
                                            color: "rgba(33, 37, 41, 0.5)",
                                            zeroLineColor: "rgba(0, 0, 0, .5)",
                                            zeroLineBorderDash: [2],
                                            zeroLineBorderDashOffset: [2],
                                        },
                                    },
                                ],
                                yAxes: [
                                    {
                                        ticks: {
                                            fontColor: "rgba(33, 37, 41, 0.5)",
                                        },
                                        display: true,
                                        scaleLabel: {
                                            display: false,
                                            labelString: "Value",
                                            fontColor: "rgba(0,0,0,.4)",
                                        },
                                        gridLines: {
                                            borderDash: [3],
                                            borderDashOffset: [3],
                                            drawBorder: false,
                                            color: "rgba(33, 37, 41, 0.5)",
                                            zeroLineColor: "rgba(33, 37, 41, 0)",
                                            zeroLineBorderDash: [2],
                                            zeroLineBorderDashOffset: [2],
                                        },
                                    },
                                ],
                            },
                        },
                    };
                    var ctx = document.getElementById("line-chart").getContext("2d");
                    window.myLine = new Chart(ctx, config);
                })();
            </script>


            <div class="relative flex flex-col min-w-0 break-words bg-white mt-20 w-full   shadow-lg rounded-md container mx-auto px-4">
                <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full max-w-full flex-grow flex-1">
                            <h6 class="uppercase text-gray-700 mb-1 text-xs font-semibold">
                                Performance
                            </h6>
                            <h2 class="text-black text-xl font-semibold">
                                Total orders
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="p-4 flex-auto">
                    <!-- Chart -->
                    <div class="relative h-80">
                        <canvas id="bar-chart"></canvas>
                    </div>
                </div>
            </div>
            <script type="text/javascript">

                (function () {
                    /* Chart initialisations */
                    /* Bar Chart */
                    var config = {
                        type: "bar",
                        data: {
                            labels: [
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "June",
                                "July",
                            ],
                            datasets: [
                                {
                                    label: new Date().getFullYear(),
                                    backgroundColor: "#ed64a6",
                                    borderColor: "#ed64a6",
                                    data: [30, 78, 56, 34, 100, 45, 13],
                                    fill: false,
                                    barThickness: 20,
                                },
                                {
                                    label: new Date().getFullYear() - 1,
                                    fill: false,
                                    backgroundColor: "#4c51bf",
                                    borderColor: "#4c51bf",
                                    data: [27, 68, 86, 74, 10, 4, 87],
                                    barThickness: 20,
                                },
                            ],
                        },
                        options: {
                            maintainAspectRatio: false,
                            responsive: true,
                            title: {
                                display: false,
                                text: "Orders Chart",
                            },
                            tooltips: {
                                mode: "index",
                                intersect: false,
                            },
                            hover: {
                                mode: "nearest",
                                intersect: true,
                            },
                            legend: {
                                labels: {
                                    fontColor: "rgba(0,0,0,.4)",
                                },
                                align: "end",
                                position: "bottom",
                            },
                            scales: {
                                xAxes: [
                                    {
                                        display: false,
                                        scaleLabel: {
                                            display: true,
                                            labelString: "Month",
                                        },
                                        gridLines: {
                                            borderDash: [2],
                                            borderDashOffset: [2],
                                            color: "rgba(33, 37, 41, 0.5)",
                                            zeroLineColor: "rgba(33, 37, 41, 0.5)",
                                            zeroLineBorderDash: [2],
                                            zeroLineBorderDashOffset: [2],
                                        },
                                    },
                                ],
                                yAxes: [
                                    {
                                        display: true,
                                        scaleLabel: {
                                            display: false,
                                            labelString: "Value",
                                        },
                                        gridLines: {
                                            borderDash: [2],
                                            drawBorder: false,
                                            borderDashOffset: [2],
                                            color: "rgba(33, 37, 41, 0.2)",
                                            zeroLineColor: "rgba(33, 37, 41, 0.15)",
                                            zeroLineBorderDash: [2],
                                            zeroLineBorderDashOffset: [2],
                                        },
                                    },
                                ],
                            },
                        },
                    };
                    ctx = document.getElementById("bar-chart").getContext("2d");
                    window.myBar = new Chart(ctx, config);
                })();
            </script>

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

        <footer class="relative pt-32 bg-gradient-to-br from-[#096914] to-lime-200">
            <div
                class="mx-auto container px-5 py-20 pt-36 pb-16 flex items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="lg:w-2/4 md:w-1/2  w-full flex-shrink-0 md:mx-0 mx-auto text-left">
                    <a href="{{ route('home') }}" class="flex items-center text-black">
                        <img src="{{ asset('assets/src/logo.png') }}" class="md:w-12 md:h-14 w-10 h-12" />

                        <div class="ml-3 text-slate-100 ">
                            <strong class="text-2xl   font-extrabold  text-sh uppercase">E-BOOK PROFIL PEMBANGUNAN DAERAH</strong>
                            <p class="text-[13px] md:text-[15px]   uppercase -mt-2 relative">
                                KABUPATEN SELUMA
                            </p>
                        </div>
                    </a>
                    <p class="mt-4 text-sm text-gray-200 leading-6 max-w-xl">
                        Seluruh kumpulan data yang tersedia dalam E-book profil pembangunan daerah Kabupaten Seluma dapat diakses secara
                        terbuka dan dikategorikan sebagai data publik.
                        Menggunakan data secara bersama-sama dengan visualisasi data yang menarik
                    </p>
                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-yellow-200 w-5 h-5 mr-3" viewBox="0 0 16 16" id="map">
                            <path
                                d="M8 0C5.2 0 3 2.2 3 5s4 11 5 11 5-8.2 5-11-2.2-5-5-5zm0 8C6.3 8 5 6.7 5 5s1.3-3 3-3 3 1.3 3 3-1.3 3-3 3z">
                            </path>
                        </svg>

                        <span
                            class="text-sm text-white group-hover:text-yellow-200 duration-300 transform break-normal max-w-xl">JL.
                            Basuki Rahmat Pematang Aur Tais, Kelurahan Talang Saling, Kec. Seluma, Kabupaten
                            Seluma</span>
                    </a>

                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-yellow-200 w-5 h-5 mr-3" fill="currentColor"
                            class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>

                        <span
                            class="text-sm text-white group-hover:text-yellow-200 duration-300 transform break-normal">(0736)
                            9150034</span>
                    </a>

                    <a class="flex my-3 group">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="fill-gray-300 group-hover:fill-yellow-200 w-5 h-5 mr-3" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <span
                            class="text-sm text-white group-hover:text-yellow-200 duration-300 transform break-normal">diskominfo@selumakab.go.id</span>
                    </a>
                </div>

                <div class="lg:w-2/4 md:w-1/2 w-full px-4 md:ml-12 mt-10 md:mt-3">

                    <iframe class="w-full rounded-lg h-72 brightness-90" style="box-shadow: 5px 5px 20px 5px #fef08a"
                        frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=Kominfo+Kabupaten+Seluma,+Talang+Saling,+Seluma+Regency,+Bengkulu,+Indonesia&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div>
            </div>

            <div class="px-12 mx-auto py-4 flex flex-wrap flex-col sm:flex-row bg-[#408847]">
                <p class="text-white mx-auto text-sm text-center sm:text-left">
                    Copyright&copy; 2023 |
                    <a href="#" class="text-yellow-300 font-bold">Portal Data</a>. All
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
                class="bi bi-arrow-up-circle-fill fixed bottom-0 right-0 mx-3 my-10 w-8 fill-green-500 shadow-lg cursor-pointer hover:fill-green-400 bg-white rounded-full"
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

</html>
