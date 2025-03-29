<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    @vite('resources/css/app.css')
    <title>Tailwind CSS Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--    test baru  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">


</head>

<body class="" style="background-color: #131313;">

    <!-- Header -->
    <header style="background-color: #131313;" class="text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="h-auto 2xl:w-[30%] xl:w-[25%] lg:w-[25%] md:w-[27%] s:w-[50%]">
                <!-- Parent container width set to 10% -->
                <img src="{{ asset('image/LOGO TRV.png') }}" alt="Logo" class="w-[100%] h-auto">
                <!-- Set a fixed width and automatic height -->
            </div>


            <button
                class="grid grid-cols-2 items-center justify-center 
                    2xl:w-12 xl:w-12 lg:w-16 s:w-8 md:w-12  2xl:h-12 xl:h-12 lg:h-16 s:h-8 md:h-12   rounded-full gap-[-6rem]">
                <div>
                    <span class="block w-2.5 h-2.5 bg-white rounded-full"></span>
                </div>
                <div>
                    <span class="block w-2.5 h-2.5 bg-white rounded-full"></span>
                </div>
                <div>
                    <span class="block w-2.5 h-2.5 bg-white rounded-full"></span>
                </div>
                <div>
                    <span class="block w-2.5 h-2.5 bg-white rounded-full"></span>
                </div>
            </button>

        </div>
    </header>


    <!-- Hero Section -->
    <section style="background-color: #131313;" class=" text-white py-16 text-center">
        <div class="font-impact 2xl:text-[12rem] 2xl:leading-[1] 
                    xl:text-[12rem] xl:leading-[1]
                    lg:text-[10rem] lg:leading-[1]
                    md:text-[6rem] md:leading-[1] 
                    s:text-[4rem] s:leading-[1] 
                    flex justify-center items-center gap-4">
            <p class="text-white opacity-10">BORN TO</p>
            <p class="text-[#FFD586]">WIN</p>
        </div>
        <div
            class=" flex s:flex-col md:flex-row justify-center items-center 2xl:gap-[10rem] xl:gap-[10rem] lg:gap-[6rem] md:gap-[4rem]  mt-8">
            <!-- Tulisan dan tombol kiri -->
            <div class="text-center text-white  ">
                <div class="justify-center items-center  2xl:w-[256px] xl:w-[256px] lg:w-[256px] md:w-[156px]">
                    <p class="2xl:text-2xl xl:text-2xl lg:text-2xl md:text-lg s:text-md ">Create Your</p>
                    <p class="2xl:text-xl xl:text-xl lg:text-xl md:text-md s:text-sm  text-[#FFD586]">Dream Trophy!</p>
                    <button
                        class="mt-6 2xl:py-2 xl:py-2 lg:py-2 md:py-2 s:py-1 2xl:px-6 xl:px-6 lg:px-6 md:px-4 s:px-4 bg-[#FFD586] text-black 2xl:text-lg xl:text-lg lg:text-lg md:text-md s:text-sm font-semibold rounded-full hover:bg-yellow-500">
                        Create
                    </button>
                </div>

            </div>
            <!-- gambar tengah -->
            <div
                class=" 2xl:mt-[-5rem] xl:mt-[-5rem] lg:mt-[-5rem] md:mt-[-4rem] s:mt-[2rem] justify-center items-center 2xl:w-[35%] xl:w-[35%] lg:w-[35%] md:w-[35%] s:w-[60%]">
                <img src="{{ asset('image/Depan-bill.png') }}" alt="Trophy Image" class="w-full h-auto">
            </div>

            <!-- gambar kanan -->
            <div class="flex  items-center text-white s:mt-12 ">
                <div class="">
                    <button>
                        <img src="{{ asset('image/ARW.png') }}" alt="" class="w-10 md:w-[4rem] lg:w-20 s:w-12 h-auto">
                    </button>
                </div>
                <div class="ml-4 md:mr-4">
                    <p class="2xl:text-lg xl:text-lg lg:text-lg md:text-sm  s:text-sm  font-semibold text-[#FFD586]">
                        Look all</p>
                    <p class="2xl:text-lg xl:text-lg lg:text-lg md:text-md  s:text-sm  font-semibold text-[#FFD586]">
                        Trophy</p>
                </div>
            </div>
        </div>

        <!-- BORN TO WIN -->

    </section>



    <section class="">
        <div class="bg-[#131313] text-white">
            <div class="max-w-screen-xl mx-auto py-4 px-4">
                <div class="flex flex-wrap justify-center gap-x-8 gap-y-4">
                    <!-- Item -->
                    <div class="group relative pb-2 text-center">
                        <p
                            class="2xl:text-lg xl:text-lg lg:text-base md:text-base s:text-sm font-futura-medium cursor-pointer">
                            Billiard Trophies
                        </p>
                        <div
                            class="h-[2px] w-full group-hover:bg-[#FFD586] scale-x-100 transition-all duration-300 origin-left">
                        </div>
                    </div>

                    <div class="group relative pb-2 text-center">
                        <p
                            class="2xl:text-lg xl:text-lg lg:text-base md:text-base s:text-sm font-futura-mediumcursor-pointer">
                            Cat Trophies
                        </p>
                        <div class="h-[2px] w-full bg-transparent group-hover:bg-[#FFD586] transition-all duration-300">
                        </div>
                    </div>

                    <div class="group relative pb-2 text-center">
                        <p
                            class="2xl:text-lg xl:text-lg lg:text-base md:text-base s:text-sm font-futura-medium cursor-pointer">
                            Poker Trophies
                        </p>
                        <div class="h-[2px] w-full bg-transparent group-hover:bg-[#FFD586] transition-all duration-300">
                        </div>
                    </div>

                    <div class="group relative pb-2 text-center">
                        <p
                            class="2xl:text-lg xl:text-lg lg:text-base md:text-base s:text-sm font-futura-medium cursor-pointer">
                            Arwana Trophies
                        </p>
                        <div class="h-[2px] w-full bg-transparent group-hover:bg-[#FFD586] transition-all duration-300">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search Bar -->
            <div class="max-w-screen-lg mx-auto py-8">
                <div class="flex items-center justify-center bg-[#131313] rounded-full">
                    <input type="text" placeholder="search"
                        class="2xl:w-[55%] xl:w-[55%] lg:w-[55%] md:w-[45%] py-6 px-4 bg-[#1a1a1a] text-white rounded-full focus:outline-none focus:ring-2 focus:ring-[#FFD586]">
                    <button
                        class="ml-4 py-5 px-8 bg-[#FFD586] text-black font-semibold rounded-full hover:bg-yellow-500 focus:outline-none">
                        Search
                    </button>
                </div>
            </div>


            <!-- <form class="max-w-screen-lg mx-auto py-8">
            <label for="default-search"
                class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative flex justify-center items-center rounded-full">
               
                <input type="search" id="default-search"
                    class="block w-full py-5 px-6 pl-6 pr-20 text-lg text-gray-900 border focus:ring-2 bg-[#1a1a1a] rounded-full"
                    placeholder="Search..." required />
             
                <button type="submit"
                    class="absolute right-0 top-0 bottom-0 px-8 py-4 bg-[#FFD586] hover:bg-yellow-500 focus:ring-4 focus:outline-none font-medium rounded-full text-lg text-black">
                    Search
                </button>
            </div>
        </form> -->

    </section>

    <section class="bg-[#131313] text-white py-16 mt-[12rem]">
        <!-- Title with Button Style -->
        <div class="text-center">
            <button class="2xl:px-14 2xl:py-2 
                xl:px-14 xl:py-2 
                lg:px-14 lg:py-2
                md:px-10 md:py-2
                s:px-6 s:py-2

                2xl:text-lg
                xl:text-lg
                lg:text-lg
                md:text-md
                bg-[#ffffff] text-[#FFD586] bg-opacity-10  rounded-full font-semibold">
                Lorem Ipsum
            </button>
        </div>

        <!-- Paragraph content -->
        <div class="mt-4 text-center">
            <p class="
            2xl:text-5xl
            xl:text-5xl
            lg:text-5xl
            md:text-3xl
                font-light">
                Lorem Ipsum is simply
            </p>
            <p class=" 
            2xl:text-5xl
            xl:text-5xl
            lg:text-5xl
            md:text-3xl font-light">dummy text of the printing.</p>
        </div>
    </section>




    <section class="bg-[#131313] text-white py-12">
        <div class="max-w-screen-xl mx-auto py-8 px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Block 1 -->
            <div
                class="flex flex-col items-center text-center border-b sm:border-b-0 sm:border-r-2 border-white border-opacity-50 pb-6 sm:pb-0 sm:pr-6">
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">PLA+</p>
                <p class="text-base lg:text-lg font-futura-light mt-4 leading-tight">Premium</p>
                <p class="text-base lg:text-lg font-light leading-tight">Polylactic Acid</p>
            </div>

            <!-- Block 2 -->
            <div class="flex flex-col items-center text-center border-b sm:border-b-0 sm:border-r-2 border-white 
                2xl:border-opacity-50 
                xl:border-opacity-50 
                lg:border-opacity-50 
                md:border-opacity-0
                s:border-opacity-50
                pb-6 sm:pb-0 sm:pr-6">
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">FREE</p>
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">DELIVERY</p>
                <p class="text-base lg:text-lg font-futura-light mt-4 leading-tight">Kirim ke</p>
                <p class="text-base lg:text-lg font-futura-light leading-tight">Seluruh Indonesia</p>
            </div>

            <!-- Block 3 -->
            <div
                class="flex flex-col items-center text-center border-b sm:border-b-0 sm:border-r-2 border-white border-opacity-50 pb-6 sm:pb-0 sm:pr-6">
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">WITHOUT</p>
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">MIN. ORDER</p>
                <p class="text-base lg:text-lg font-futura-light mt-4 leading-tight">Pesan Berapapun</p>
                <p class="text-base lg:text-lg font-futura-light leading-tight">akan kami kerjakan</p>
            </div>

            <!-- Block 4 -->
            <div class="flex flex-col items-center text-center">
                <p class="text-3xl lg:text-4xl font-semibold text-[#FFD586]">FREE BOX</p>
                <p class="text-base lg:text-lg font-futura-light mt-4 leading-tight">Semua Pembelian</p>
                <p class="text-base lg:text-lg font-futura-light leading-tight">Piala akan mendapat</p>
                <p class="text-base lg:text-lg font-futura-light leading-tight">box super aman</p>
            </div>

        </div>

    </section>


    <!-- Table Section -->
    <section class="bg-[#131313] text-white py-12">
        <!-- Size Type Selector -->
        <div class="flex flex-wrap justify-center gap-3 mb-8">
            <p class="text-[#ffffff] px-4 py-2 rounded-full text-base md:text-lg">Size Type :</p>
            <button id="smallBtn"
                class="text-[#FFD586] bg-[#ffffff] px-4 py-2 text-sm md:text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">SMALL</button>
            <button id="mediumBtn"
                class="text-[#FFD586] bg-[#ffffff] px-4 py-2 text-sm md:text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">MEDIUM</button>
            <button id="largeBtn"
                class="text-[#FFD586] bg-[#ffffff] px-4 py-2 text-sm md:text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">LARGE</button>
            <button id="supremeBtn"
                class="text-[#FFD586] bg-[#ffffff] px-4 py-2 text-sm md:text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">SUPREME</button>
        </div>

        <!-- Swiper Container -->
        <div class="swiperContainerss max-w-screen-xl mx-auto overflow-hidden" id="swiperContainerTrophy">
            <div class="swiper-wrapper">

                <!-- Slide 1 (Small) -->
                <div class="swiper-slide">
                    <div class="flex flex-col md:flex-row items-center gap-8 p-4">
                        <div class="w-full md:w-1/2 space-y-3">
                            <p class="text-2xl md:text-4xl font-semibold text-white">Small Trophy</p>
                            <p class="text-base md:text-lg font-futura-light text-[#FFD586]">HEIGHT &lt; 21CM</p>
                            <p class="text-xl md:text-3xl font-bold mt-4 md:mt-8">IDR 175.000 /pcs</p>

                            <div class="mt-4 space-y-2">
                                <p class="text-sm font-futura-light">Waktu pengerjaan :</p>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <p class="text-sm font-futura-light">Qty 1 - 30 pcs <br> 3-7 Hari Kerja</p>
                                    <div class="border-l-2 h-6 s:h-0"></div>
                                    <p class="text-sm font-futura-light">Qty 50+ <br>10-14 Hari Kerja</p>
                                </div>
                                <p class="text-sm">Waktu bisa berubah-ubah tergantung tingkat kerumitan, jumlah order &
                                    antrian order.</p>
                            </div>

                            <button
                                class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>
                        </div>

                        <div class="flex justify-center items-center gap-4 w-full md:w-1/2">
                            <img src="{{ asset('image/BOX SMALL - MEDIUM.png') }}" alt="Box" class="w-24 md:w-24">
                            <img src="{{ asset('image/ST-desc.png') }}" alt="Trophy" class="w-36 md:w-40">
                        </div>
                    </div>
                </div>

                <!-- Slide 2 (Medium) -->
                <div class="swiper-slide">
                    <div class="flex flex-col md:flex-row items-center gap-8 p-4">
                        <div class="w-full md:w-1/2 space-y-3">
                            <p class="text-2xl md:text-4xl font-semibold text-white">Medium Trophy</p>
                            <p class="text-base md:text-lg font-futura-light text-[#FFD586]">HEIGHT &lt; 30CM</p>
                            <p class="text-xl md:text-3xl font-bold mt-4 md:mt-8">IDR 250.000 /pcs</p>

                            <div class="mt-4 space-y-2">
                                <p class="text-sm font-futura-light">Waktu pengerjaan :</p>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <p class="text-sm font-futura-light">Qty 1 - 30 pcs <br> 3-7 Hari Kerja</p>
                                    <div class="border-l-2 h-6 s:h-0"></div>
                                    <p class="text-sm font-futura-light">Qty 50+ <br>10-14 Hari Kerja</p>
                                </div>
                                <p class="text-sm">Waktu bisa berubah-ubah tergantung tingkat kerumitan, jumlah order &
                                    antrian order.</p>
                            </div>

                            <button
                                class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>
                        </div>

                        <div class="flex justify-center items-center gap-4 w-full md:w-1/2">
                            <img src="{{ asset('image/BOX SMALL - MEDIUM.png') }}" alt="Box" class="w-24 md:w-34">
                            <img src="{{ asset('image/MT-desc.png') }}" alt="Trophy" class="w-36 md:w-50">
                        </div>
                    </div>
                </div>

                <!-- Slide 3 (Large) -->
                <div class="swiper-slide">
                    <div class="flex flex-col md:flex-row items-center gap-8 p-4">
                        <div class="w-full md:w-1/2 space-y-3">
                            <p class="text-2xl md:text-4xl font-semibold text-white">Large Trophy</p>
                            <p class="text-base md:text-lg font-futura-light text-[#FFD586]">HEIGHT &lt; 40CM</p>
                            <p class="text-xl md:text-3xl font-bold mt-4 md:mt-8">IDR 350.000 /pcs</p>

                            <div class="mt-4 space-y-2">
                                <p class="text-sm font-futura-light">Waktu pengerjaan :</p>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <p class="text-sm font-futura-light">Qty 1 - 30 pcs <br> 3-7 Hari Kerja</p>
                                    <div class="border-l-2 h-6 s:h-0"></div>
                                    <p class="text-sm font-futura-light">Qty 50+ <br>10-14 Hari Kerja</p>
                                </div>
                                <p class="text-sm">Waktu bisa berubah-ubah tergantung tingkat kerumitan, jumlah order &
                                    antrian order.</p>
                            </div>

                            <button
                                class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>
                        </div>

                        <div class="flex justify-center items-center gap-4 w-full md:w-1/2">
                            <img src="{{ asset('image/BOX LARGE.png') }}" alt="Box" class="w-24 md:w-24">
                            <img src="{{ asset('image/LT-desc.png') }}" alt="Trophy" class="w-36 md:w-60">
                        </div>
                    </div>
                </div>

                <!-- Slide 4 (Supreme) -->
                <div class="swiper-slide">
                    <div class="flex flex-col md:flex-row items-center gap-8 p-4">
                        <div class="w-full md:w-1/2 space-y-3">
                            <p class="text-2xl md:text-4xl font-semibold text-white">Supreme Trophy</p>
                            <p class="text-base md:text-lg font-futura-light text-[#FFD586]">HEIGHT &lt; 50CM</p>
                            <p class="text-xl md:text-3xl font-bold mt-4 md:mt-8">IDR 450.000 /pcs</p>

                            <div class="mt-4 space-y-2">
                                <p class="text-sm font-futura-light">Waktu pengerjaan :</p>
                                <div class="flex flex-col sm:flex-row gap-4">
                                    <p class="text-sm font-futura-light">Qty 1 - 30 pcs <br> 3-7 Hari Kerja</p>
                                    <div class="border-l-2 h-6 s:h-0"></div>
                                    <p class="text-sm font-futura-ligh">Qty 50+ <br>10-14 Hari Kerja</p>
                                </div>
                                <p class="text-sm">Waktu bisa berubah-ubah tergantung tingkat kerumitan, jumlah order &
                                    antrian order.</p>
                            </div>

                            <button
                                class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>
                        </div>

                        <div class="flex justify-center items-center gap-4 w-full md:w-1/2">
                            <img src="{{ asset('image/BOX SUPREME.png') }}" alt="Box" class="w-24 md:w-24">
                            <img src="{{ asset('image/SPT-desc.png') }}" alt="Trophy" class="w-36 md:w-50">
                        </div>
                    </div>
                </div>

            </div>

        </div>



        <div class=" text-center mt-[8rem]">
            <p class="2xl:text-5xl 
            xl:text-5xl 
            lg:text-5xl 
            md:text-3xl
            font-futura-medium">
                Lorem Ipsum is simply
            </p>
            <p class="2xl:text-5xl 
            xl:text-5xl 
            lg:text-5xl 
            md:text-3xl  font-futura-medium">dummy text of the printing.</p>
        </div>


        <!-- slide swipe hasil testimoni -->
        <section class="bg-[#131313] text-white py-12 overflow-hidden">
            <div class="container mx-auto py-8 px-4">

                <!-- Swiper Main -->
                <div id="swiperContainerMain" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/a.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ab.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ac.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ad.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/af.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ag.jpg') }}" alt="Main Slide"
                                class="w-full max-w-[600px] h-auto md:h-[300px] lg:h-[400px] xl:h-[450px] object-cover rounded-lg mx-auto">
                        </div>
                    </div>
                </div>

                <!-- Swiper Small -->
                <div id="swiperContainerSmall" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach(['b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'n', 'o'] as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset('image/foto/' . $img . '.jpg') }}" alt="Small Slide"
                                    class="w-40 s:w-20 md:w-52 h-28 s:h-20 md:h-36 object-cover rounded-lg mx-auto">
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Swiper Small Part 2 -->
                <div id="swiperContainerSmallPart2" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach(['z', 'x', 'w', 'ab', 'ac', 'ad', 'af', 'ag', 'b'] as $img)
                            <div class="swiper-slide">
                                <img src="{{ asset('image/foto/' . $img . '.jpg') }}" alt="Small Slide"
                                    class="w-40 s:w-20 md:w-52 h-28 s:h-20 md:h-36 object-cover rounded-lg mx-auto">
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </section>



        <!-- PETA INDONESIA -->
        <div class="flex items-center justify-center mt-12 relative">
            <!-- Peta Indonesia -->
            <img src="{{ asset('image/IND.png') }}" alt="MAP INDONESIA" class="w-[95%] h-auto">

            <!-- Avatar 1 -->
            <div class="absolute" style="top: 23%; left: 47%;">
                <img src="{{ asset('image/fotoFormal/download (2).jpg') }}"
                    class="s:w-8 s:h-8 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full border-4 border-white border-opacity-0 shadow-lg object-cover transition-transform duration-300 hover:scale-105"
                    alt="User 1">
            </div>

            <!-- Avatar 2 -->
            <div class="absolute" style="top: 41%; right: 11%;">
                <img src="{{ asset('image/fotoFormal/download (4).jpg') }}"
                    class="s:w-8 s:h-8 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full border-4 border-white border-opacity-0 shadow-lg object-cover transition-transform duration-300 hover:scale-105"
                    alt="User 2">
            </div>

            <!-- Avatar 3 -->
            <div class="absolute" style="top: 56%; left: 19%;">
                <img src="{{ asset('image/fotoFormal/download (3).jpg') }}"
                    class="s:w-8 s:h-8 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full border-4 border-white border-opacity-0 shadow-lg object-cover transition-transform duration-300 hover:scale-105"
                    alt="User 3">
            </div>

            <!-- Avatar 4 -->
            <div class="absolute" style="top: 76%; left: 32%;">
                <img src="{{ asset('image/fotoFormal/download (5).jpg') }}"
                    class="s:w-8 s:h-8 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full border-4 border-white border-opacity-0 shadow-lg object-cover transition-transform duration-300 hover:scale-105"
                    alt="User 4">
            </div>

            <!-- Avatar 5 -->
            <div class="absolute" style="top: 77%; left: 65%;">
                <img src="{{ asset('image/fotoFormal/download (5).jpg') }}"
                    class="s:w-8 s:h-8 md:w-12 md:h-12 lg:w-14 lg:h-14 rounded-full border-4 border-white border-opacity-0 shadow-lg object-cover transition-transform duration-300 hover:scale-105"
                    alt="User 5">
            </div>
        </div>


        <!-- TESTI MONY -->

        <div class="mt-12 flex flex-col gap-8 items-center justify-center overflow-hidden">
            <button
                class="rounded-full text-[#FFD586] 2xl:text-xl xl:text-xl lg:text-xl md:text-lg s:text-sm bg-white bg-opacity-10 2xl:px-14 xl:px-14 lg:px-14 md:px-10 s:px-6  2xl:py-3 xl:py-3 lg:py-3 md:py-3 s:py-2">Testimonial</button>
            <div class="flex items-center justify-center">
                <p class="2xl:text-5xl xl:text-5xl lg:text-5xl md:text-4xl s:text-3xl text-center font-futura-medium ">Hear What
                    Our
                    <br> Client Have to say
                </p>
            </div>
            <!-- Swiper -->
            <div class="swiper swiper-containerTesting w-full max-w-7xl mx-auto my-10 overflow-hidden">
                <div class="swiper-wrapper">

                    <!-- Slide 1 -->
                    <div class="swiper-slide px-4 md:px-4">
                        <div class="bg-[#3a3a3a] rounded-lg p-6 md:p-6 shadow-lg flex flex-col justify-between h-full">
                            <p class="text-yellow-500 text-4xl sm:text-5xl mb-4">“</p>
                            <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <div class="flex items-center mt-4 space-x-4">
                                <img src="{{ url('image/fotoFormal/download (2).jpg') }}" alt="Person 1"
                                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Mr. Reza Anonim</p>
                                    <p class="text-yellow-500 text-xs sm:text-sm">★★★★★</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide px-4 md:px-4">
                        <div class="bg-[#3a3a3a] rounded-lg p-6 md:p-6 shadow-lg flex flex-col justify-between h-full">
                            <p class="text-yellow-500 text-4xl sm:text-5xl mb-4">“</p>
                            <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <div class="flex items-center mt-4 space-x-4">
                                <img src="{{ url('image/fotoFormal/download.jpg') }}" alt="Person 2"
                                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Mrs. Diana Anonim</p>
                                    <p class="text-yellow-500 text-xs sm:text-sm">★★★★☆</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide px-4 md:px-4">
                        <div class="bg-[#3a3a3a] rounded-lg p-6 md:p-6 shadow-lg flex flex-col justify-between h-full">
                            <p class="text-yellow-500 text-4xl sm:text-5xl mb-4">“</p>
                            <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <div class="flex items-center mt-4 space-x-4">
                                <img src="{{ url('image/fotoFormal/download (3).jpg') }}" alt="Person 3"
                                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Mr. Toto Anonim</p>
                                    <p class="text-yellow-500 text-xs sm:text-sm">★★★★☆</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide px-4 md:px-4">
                        <div class="bg-[#3a3a3a] rounded-lg p-6 md:p-6 shadow-lg flex flex-col justify-between h-full">
                            <p class="text-yellow-500 text-4xl sm:text-5xl mb-4">“</p>
                            <p class="text-gray-300 text-sm sm:text-base leading-relaxed mb-4">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                            </p>
                            <div class="flex items-center mt-4 space-x-4">
                                <img src="{{ url('image/fotoFormal/download (1).jpg') }}" alt="Person 3"
                                    class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover">
                                <div>
                                    <p class="font-semibold text-sm sm:text-base">Mr. Toto Anonim</p>
                                    <p class="text-yellow-500 text-xs sm:text-sm">★★★★☆</p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <!-- Optional Pagination -->
                <!-- <div class="swiper-pagination mt-4"></div> -->
            </div>
        </div>
    </section>

    <footer class="bg-[#131313] overflow-hidden">
        <div
            class="bg-[#131313] text-white py-4 text-center mb-12 flex flex-col md:flex-row justify-between items-center px-4 md:px-12 space-y-4 md:space-y-0">

            <!-- Logo -->
            <img src="{{ asset('image/LOGO TRV.png') }}" alt="Trophyverse Logo" class="w-32 md:w-[20%] s:w-[40%] h-auto">

            <!-- Teks di tengah -->
            <div class="flex gap-6 md:gap-12 lg:gap-16 xl:gap-24">
                <span class="text-sm md:text-base lg:text-xl">License</span>
                <span class="text-sm md:text-base lg:text-xl">FAQ</span>
                <span class="text-sm md:text-base lg:text-xl">Marketplace</span>
            </div>

            <!-- Ikon -->
            <div class="flex space-x-6">
                <!-- Instagram -->
                <a href="#" target="_blank"
                    class="2xl:w-14 xl:w-14 lg:w-14 md:w-12 s:w-9 2xl:h-14  xl:h-14 lg:h-14 md:h-12 s:h-9 flex items-center justify-center rounded-full border-2 border-white hover:bg-white hover:text-black transition-all">
                    <i class="fa-brands fa-instagram text-2xl"></i>
                </a>

                <!-- Phone -->
                <a href="#" target="_blank"
                    class="2xl:w-14 xl:w-14 lg:w-14 md:w-12 s:w-9 2xl:h-14  xl:h-14 lg:h-14 md:h-12 s:h-9 flex items-center justify-center rounded-full border-2 border-white hover:bg-white hover:text-black transition-all">
                    <i class="fa-solid fa-phone text-2xl"></i>
                </a>
            </div>


        </div>
    </footer>


</body>

</html>

<!-- Initialize Swiper -->

<script>
    var swiper = new Swiper('#swiperContainerTrophy', {
        slidesPerView: 1,
        spaceBetween: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            1440: {
                slidesPerView: 1, // For larger screens
                spaceBetween: 1000,
            },
            320: {
                slidesPerView: 1, // Mobile view
                spaceBetween: 1000,
            }
        },
    });

    // Wait for the DOM content to be fully loaded before attaching event listeners
    document.addEventListener('DOMContentLoaded', function () {
        // Button Event Listeners to navigate to specific slides
        document.getElementById('smallBtn').addEventListener('click', function () {
            swiper.slideTo(0); // Go to Small slide (index 0)
        });

        document.getElementById('mediumBtn').addEventListener('click', function () {
            swiper.slideTo(1); // Go to Medium slide (index 1)
        });

        document.getElementById('largeBtn').addEventListener('click', function () {
            swiper.slideTo(2); // Go to Large slide (index 2)
        });

        document.getElementById('supremeBtn').addEventListener('click', function () {
            swiper.slideTo(3); // Go to Supreme slide (index 3)
        });
    });


    // Inisialisasi Swiper untuk Gambar Besar
    // const swiper1 = new Swiper('.swiper-container:first-of-type', {
    //     slidesPerView: 2,
    //     loop: true,
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    // });

    // // Inisialisasi Swiper untuk Gambar Kecil
    // const swiper2 = new Swiper('.swiper-container:last-of-type', {
    //     slidesPerView: 3,
    //     loop: true,
    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },
    // });

    // //swipe testimoni
    // var swiper = new Swiper('.swiper-container', {
    //     loop: false,  // Disabled loop to prevent skipping directly to the last slide
    //     pagination: {
    //         el: '.swiper-pagination',
    //         clickable: true,
    //     },
    // });
    //swipe testimoni
    var reviewSwiper = new Swiper('.swiper-containerTesting', {
        loop: false,
        spaceBetween: 25,
        slidesPerView: 1.1,
        breakpoints: {
            640: { slidesPerView: 1.5 },
            768: { slidesPerView: 1 },
            1024: { slidesPerView: 2.5 },
            1280: { slidesPerView: 3 }
        },
        pagination: {

            clickable: true,
        },
    });

    // new Slide('.slide-wrapper', {
    //     interval: 3000, // Slide change interval in milliseconds
    //     autoplay: true   // Enable autoplay
    // });

    // // Initialize the smaller slides
    // new Slide('.flex', {
    //     interval: 3000,
    //     autoplay: true
    // });

    var mainSwiper = new Swiper('#swiperContainerMain', {
        slidesPerView: 3, // default
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 2
            },
            1024: {
                slidesPerView: 3
            }
        }
    });


    // Initialize Smaller Slides
    var smallSwiper = new Swiper('#swiperContainerSmall', {
        slidesPerView: 6, // Show 5 slides at once in smaller slides container
        spaceBetween: 5, // Adjust space between slides
        loop: true,
        overflow: 'hidden',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 6
            }
        }
    });

    var smallSwiper = new Swiper('#swiperContainerSmallPart2', {
        slidesPerView: 6, // Show 5 slides at once in smaller slides container
        spaceBetween: 5, // Adjust space between slides
        loop: true,
        overflow: 'hidden',
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
                slidesPerView: 4
            },
            768: {
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 6
            }
        }

    });







</script>