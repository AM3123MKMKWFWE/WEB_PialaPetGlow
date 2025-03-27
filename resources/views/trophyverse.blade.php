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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body class="" style="background-color: #131313;">

    <!-- Header -->
    <header style="background-color: #131313;" class="text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="h-auto w-[15%]"> <!-- Parent container width set to 10% -->
                <img src="{{ asset('image/LOGO TRV.png') }}" alt="Logo" class="w-[100%] h-auto">
                <!-- Set a fixed width and automatic height -->
            </div>


            <button class="grid grid-cols-2 items-center justify-center w-16 h-16 rounded-full gap-[-5rem]">
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
        <div class="font-impact text-[12rem] leading-[1] flex justify-center items-center gap-4">
            <p class="text-white opacity-10">BORN TO</p>
            <p class="text-[#FFD586]">WIN</p>
        </div>
        <div class=" leading-[1] flex justify-center items-center ">
            <!-- Tulisan dan tombol kiri -->
            <div class="text-center text-white mr-[9rem] ">
                <div class="justify-center items-center  w-[256px]">
                    <p class="text-2xl font-semibold">Create Your</p>
                    <p class="text-xl font-bold text-[#FFD586]">Dream Trophy!</p>
                </div>
                <button
                    class="mt-6 py-2 px-6 bg-[#FFD586] text-black text-lg font-semibold rounded-full hover:bg-yellow-500">
                    Create
                </button>
            </div>
            <!-- gambar tengah -->
            <div class=" mt-[-3rem] justify-center items-center w-[35%] ">
                <img src="{{ asset('image/Depan-bill.png') }}" alt="Trophy Image" class="w-full h-auto">
            </div>

            <!-- gambar kanan -->
            <div class="flex items-center text-white ml-[9rem] ">
                <div class="">
                    <button>
                        <img src="{{ asset('image/ARW.png') }}" alt="" class="w-20 h-full">
                    </button>
                </div>
                <div class="ml-6">
                    <p class="text-lg font-semibold">Look all</p>
                    <p class="text-lg font-semibold">Trophy</p>
                </div>
            </div>
        </div>

        <!-- BORN TO WIN -->

    </section>

    <section class="">
        <div class="bg-[#131313] text-white">
            <div class="max-w-screen-xl mx-auto py-4">
                <div class="flex justify-center items-center">
                    <!-- Navbar Items -->
                    <div class="flex space-x-10">
                        <div class="group relative text-center">
                            <p class="text-lg font-semibold cursor-pointer">Billiard Trophies</p>
                            <div
                                class="absolute w-full h-[2px] bg-[#FFD586] bottom-0 left-0 scale-x-0 group-hover:scale-x-100 transform transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative text-center">
                            <p class="text-lg font-semibold cursor-pointer">Cat Trophies</p>
                            <div
                                class="absolute w-full h-[2px] bg-[#FFD586] bottom-0 left-0 scale-x-0 group-hover:scale-x-100 transform transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative text-center">
                            <p class="text-lg font-semibold cursor-pointer">Poker Trophies</p>
                            <div
                                class="absolute w-full h-[2px] bg-[#FFD586] bottom-0 left-0 scale-x-0 group-hover:scale-x-100 transform transition-all duration-300">
                            </div>
                        </div>
                        <div class="group relative text-center">
                            <p class="text-lg font-semibold cursor-pointer">Arwana Trophies</p>
                            <div
                                class="absolute w-full h-[2px] bg-[#FFD586] bottom-0 left-0 scale-x-0 group-hover:scale-x-100 transform transition-all duration-300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-screen-lg mx-auto py-8">
            <div class="flex items-center justify-center bg-[#131313] rounded-full">
                <input type="text" placeholder="search"
                    class="w-[55%] py-6 px-4 bg-[#1a1a1a] text-white rounded-full focus:outline-none focus:ring-2 focus:ring-[#FFD586]">
                <button
                    class="  ml-4 py-5 px-8 bg-[#FFD586] text-black font-semibold rounded-full hover:bg-yellow-500 focus:outline-none">
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
            <button class="px-14 py-2 bg-[#ffffff] text-[#FFD586] bg-opacity-10  rounded-full text-lg font-semibold">
                Lorem Ipsum
            </button>
        </div>

        <!-- Paragraph content -->
        <div class="mt-4 text-center">
            <p class="text-5xl  font-light">
                Lorem Ipsum is simply
            </p>
            <p class="text-5xl  font-light">dummy text of the printing.</p>
        </div>
    </section>




    <section class="bg-[#131313] text-white py-12">
        <div class="max-w-screen-xl mx-auto flex justify-between">
            <!-- Block 1 -->
            <div class="flex flex-col items-center text-center border-r-2 border-white border-opacity-50 pr-8">
                <div>
                    <p class="text-4xl font-semibold text-[#FFD586]">PLA+</p>

                </div>
                <p class="text-lg font-light mt-[4rem] leading-tight">Premium </p>
                <p class="text-lg font-light leading-tight">Polylactic Acid</p>
            </div>

            <!-- Block 2 -->
            <div class="flex flex-col items-center text-center border-r-2 border-white border-opacity-50 pr-8">
                <div>
                    <p class="text-4xl font-semibold text-[#FFD586]">FREE</p>
                    <p class="text-4xl font-semibold text-[#FFD586]">DELIVERY</p>
                </div>
                <p class="text-lg font-light mt-6 leading-tight">Kirim ke</p>
                <p class="text-lg font-ligh leading-tightt">Seluruh Indonesia</p>
            </div>

            <!-- Block 3 -->
            <div class="flex flex-col items-center text-center border-r-2 border-white border-opacity-50 pr-8">
                <div>
                    <p class="text-4xl font-semibold text-[#FFD586]">WITHOUT</p>
                    <p class="text-4xl font-semibold text-[#FFD586]">MIN. ORDER</p>
                </div>
                <p class="text-lg font-light mt-6 leading-tight">Pesan Berapapun </p>
                <p class="text-lg font-light leading-tight">akan kami kerjakan</p>
            </div>

            <!-- Block 4 -->
            <div class="flex flex-col items-center text-center">
                <div>
                    <p class="text-4xl font-semibold text-[#FFD586] mt-4">FREE BOX</p>
                </div>
                <div>
                    <p class="text-lg font-light mt-10 leading-tight">Semua Pembelian</p>
                    <p class="text-lg font-light leading-tight">Piala akan mendapat</p>
                    <p class="text-lg font-light leading-tight">box super aman</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Table Section -->
    <section class="bg-[#131313] text-white py-12">
        <!-- Size Type Selector -->
        <div class="flex justify-center gap-4 mb-8">
            <p class="text-[#ffffff] px-6 py-2 rounded-full text-lg">Size Type :</p>
            <button id="smallBtn"
                class="text-[#FFD586] bg-[#ffffff] px-6 py-2 text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">SMALL</button>
            <button id="mediumBtn"
                class="text-[#FFD586] bg-[#ffffff] px-6 py-2 text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">MEDIUM</button>
            <button id="largeBtn"
                class="text-[#FFD586] bg-[#ffffff] px-6 py-2 text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">LARGE</button>
            <button id="supremeBtn"
                class="text-[#FFD586] bg-[#ffffff] px-6 py-2 text-lg bg-opacity-10 rounded-full hover:border-2 border-[#FFD586]">SUPREME</button>
        </div>

        <!-- Swiper Container -->
        <div class="swiperContainerss max-w-screen-xl mx-auto overflow-hidden" id="swiperContainerTrophy">
            <!-- Swipper untuk Kustome TrophyVerse -->
            <div class="swiper-wrapper">
                <!-- Slide 1 (Small) -->
                <div class="swiper-slide">
                    <div class="flex justify-between items-center">
                        <div class="text-left ml-[8rem]">
                            <p class="text-4xl font-semibold text-[#ffffff]">Small Trophy</p>
                            <p class="text-lg font-light text-[#FFD586]">HEIGH < 21CM</p>
                                    <p class="text-4xl font-bold mt-[8rem]">IDR 175.000 /pcs</p>
                                    <div class="flex text-left mt-[2rem]">
                                        <p class="text-sm font-light">Waktu pengerjaan :</p>

                                    </div>
                                    <div class="flex text-left mt-2">
                                        <p class="text-sm font-light ml-4">Qty 1 - 30 pcs
                                            <br> 3-7 Hari Kerja
                                        </p>
                                        <div class="mx-4 border-l-2 h-[2.5rem]"></div> <!-- Divider -->
                                        <p class="text-sm font-light">Qty 50+ <br> 10-14 Hari Kerja</p>

                                    </div>
                                    <p class="mt-2">Waktu bisa berubah-ubah, tergantung tingkat</p>
                                    <p> kerumitan, jumlah order & antrian order</p>

                                    <button
                                        class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>

                        </div>
                        <div class="flex ">
                            <img src="{{ asset('image/BOX SMALL - MEDIUM.png') }}" alt="Small Trophy"
                                class="w-[150px] h-auto mr-[2rem]">
                            <img src="{{ asset('image/ST-desc.png') }}" alt="Small Trophy" class="w-[250px] h-auto">
                        </div>

                    </div>
                </div>

                <!-- Slide 2 (Medium) -->
                <div class="swiper-slide">
                    <div class="flex justify-between items-center">
                        <div class="text-left ml-[8rem]">
                            <p class="text-4xl font-semibold text-[#ffffff]">Medium Trophy</p>
                            <p class="text-lg font-light text-[#FFD586]">HEIGH < 30CM</p>
                                    <p class="text-4xl font-bold mt-[8rem]">IDR 250.000 /pcs</p>
                                    <div class="flex text-left mt-[2rem]">
                                        <p class="text-sm font-light">Waktu pengerjaan :</p>

                                    </div>
                                    <div class="flex text-left mt-2">
                                        <p class="text-sm font-light ml-4">Qty 1 - 30 pcs
                                            <br> 3-7 Hari Kerja
                                        </p>
                                        <div class="mx-4 border-l-2 h-[2.5rem]"></div> <!-- Divider -->
                                        <p class="text-sm font-light">Qty 50+ <br> 10-14 Hari Kerja</p>

                                    </div>
                                    <p class="mt-2">Waktu bisa berubah-ubah, tergantung tingkat</p>
                                    <p> kerumitan, jumlah order & antrian order</p>

                                    <button
                                        class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>

                        </div>
                        <div class="flex ">
                            <img src="{{ asset('image/BOX SMALL - MEDIUM.png') }}" alt="Small Trophy"
                                class="w-[150px] h-auto mr-[2rem]">
                            <img src="{{ asset('image/MT-desc.png') }}" alt="Small Trophy" class="w-[250px] h-auto">
                        </div>

                    </div>
                </div>

                <!-- Slide 3 (Large) -->
                <div class="swiper-slide">
                    <div class="flex justify-between items-center">
                        <div class="text-left ml-[8rem]">
                            <p class="text-4xl font-semibold text-[#ffffff]">Large Troph</p>
                            <p class="text-lg font-light text-[#FFD586]">HEIGH < 40CM</p>
                                    <p class="text-4xl font-bold mt-[8rem]">IDR 350.000 /pcs</p>
                                    <div class="flex text-left mt-[2rem]">
                                        <p class="text-sm font-light">Waktu pengerjaan :</p>

                                    </div>
                                    <div class="flex text-left mt-2">
                                        <p class="text-sm font-light ml-4">Qty 1 - 30 pcs
                                            <br> 3-7 Hari Kerja
                                        </p>
                                        <div class="mx-4 border-l-2 h-[2.5rem]"></div> <!-- Divider -->
                                        <p class="text-sm font-light">Qty 50+ <br> 10-14 Hari Kerja</p>

                                    </div>
                                    <p class="mt-2">Waktu bisa berubah-ubah, tergantung tingkat</p>
                                    <p> kerumitan, jumlah order & antrian order</p>

                                    <button
                                        class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>

                        </div>
                        <div class="flex gap-4">
                            <img src="{{ asset('image/BOX LARGE.png') }}" alt="Small Trophy"
                                class="w-[130px] h-auto mr-[2rem]">
                            <img src="{{ asset('image/LT-desc.png') }}" alt="Small Trophy" class="w-[300px] h-auto">
                        </div>

                    </div>
                </div>

                <!-- Slide 4 (Supreme) -->
                <div class="swiper-slide">
                    <div class="flex justify-between items-center ">
                        <div class="text-left ml-[8rem]">
                            <p class="text-4xl font-semibold text-[#ffffff]">Supreme Trophy</p>
                            <p class="text-lg font-light text-[#FFD586]">HEIGH < 50CM</p>
                                    <p class="text-4xl font-bold mt-[8rem]">IDR 450.000 /pcs</p>
                                    <div class="flex text-left mt-[2rem]">
                                        <p class="text-sm font-light">Waktu pengerjaan :</p>

                                    </div>
                                    <div class="flex text-left mt-2">
                                        <p class="text-sm font-light ml-4">Qty 1 - 30 pcs
                                            <br> 3-7 Hari Kerja
                                        </p>
                                        <div class="mx-4 border-l-2 h-[2.5rem]"></div> <!-- Divider -->
                                        <p class="text-sm font-light">Qty 50+ <br> 10-14 Hari Kerja</p>

                                    </div>
                                    <p class="mt-2">Waktu bisa berubah-ubah, tergantung tingkat</p>
                                    <p> kerumitan, jumlah order & antrian order</p>

                                    <button
                                        class="bg-[#FFD586] text-black font-semibold px-8 py-2 rounded-full mt-4">ORDER</button>

                        </div>
                        <div class="flex gap-4">
                            <img src="{{ asset('image/BOX SUPREME.png') }}" alt="Small Trophy"
                                class="w-[130px] h-auto mr-[5rem]">
                            <img src="{{ asset('image/SPT-desc.png') }}" alt="Small Trophy" class="w-[200px] h-auto">
                        </div>

                    </div>
                </div>
            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-pagination"></div>
            <!-- <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->
        </div>


        <div class=" text-center mt-[8rem]">
            <p class="text-5xl  font-light">
                Lorem Ipsum is simply
            </p>
            <p class="text-5xl  font-light">dummy text of the printing.</p>
        </div>


        <!-- slide swipe hasil testimoni -->
        <section class="bg-[#131313] text-white py-12">
            <div class="container mx-auto py-8">
                <!-- Main Swiper Slide -->
                <div id="swiperContainerMain" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/a.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ab.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ac.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ad.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/af.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ag.png') }}" alt="Main Slide"
                                class="w-[600px] h-[450px] object-cover rounded-lg">
                        </div>

                    </div>
                </div>

                <!-- Row of Smaller Slides (Swipable) -->
                <div id="swiperContainerSmall" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ab.png') }}" alt="Small Slide 1"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ac.png') }}" alt="Small Slide 2"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ad.png') }}" alt="Small Slide 3"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/af.png') }}" alt="Small Slide 4"
                                class="w-60 h-40object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/ag.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/b.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/c.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/d.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/e.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/f.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/g.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/h.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/i.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/j.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/k.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/l.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/o.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/p.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                    </div>
                </div>

                <div id="swiperContainerSmallPart2" class="swiper-container my-8 overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/z.png') }}" alt="Small Slide 1"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/x.png') }}" alt="Small Slide 2"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/w.png') }}" alt="Small Slide 3"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/v.png') }}" alt="Small Slide 4"
                                class="w-60 h-40object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/u.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/t.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/s.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/r.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/q.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/p.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/o.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/n.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/l.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/j.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/i.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/h.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/g.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/foto/f.png') }}" alt="Small Slide 5"
                                class="w-60 h-40 object-cover rounded-lg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- PETA INDONESIA -->
        <div class="flex items-center justify-center mt-12 relative">
            <!-- Peta Indonesia -->
            <img src="{{ asset('image/IND.png') }}" alt="MAP INDONESIA" class="w-[95%] h-auto">

            <!-- Gambar Pengguna -->
            <div class="absolute" style="top: 20%; left: 45%;">
                <img src="{{ asset('image/fotoFormal/download (2).jpg') }}" alt="User 1" class="w-16 h-16 rounded-full">
            </div>

            <div class="absolute" style="top: 40%; right: 11%;">
                <img src="{{ asset('image/fotoFormal/download (4).jpg') }}" alt="User 2" class="w-[2.7rem] h-[2.7rem] rounded-full">
            </div>

            <div class="absolute" style="top: 55%; left: 20%;">
                <img src="{{ asset('image/fotoFormal/download (3).jpg') }}" alt="User 3" class="w-[3rem] h-[3rem] rounded-full">
            </div>

            <div class="absolute" style="top: 75%; left: 30%;">
                <img src="{{ asset('image/fotoFormal/download (5).jpg') }}" alt="User 1" class="w-16 h-16 rounded-full">
            </div>

            <!-- Tambahkan lebih banyak gambar pengguna sesuai kebutuhan -->
        </div>

        <!-- TESTI MONY -->

        <div class="mt-12 flex flex-col gap-8 items-center justify-center overflow-hidden">
            <button class="rounded-full text-[#FFD586] text-xl bg-white bg-opacity-10 px-14 py-3">Testimonial</button>
            <div class="flex items-center justify-center">
                <p class="text-5xl text-center font-light ">Hear What Our
                    <br> Client Have to say
                </p>
            </div>
            <div class="swiper-containerTesting max-w-4xl mx-auto my-10" id="">
                <div class="swiper-wrapper space-x-6"> <!-- Add space-x-6 to add gap between slides -->

                    <!-- Slide 1 -->
                    <div class="swiper-slide" style="width: 20vw; height: 40vh;">
                        <div class="flex flex-col justify-between items-center ">
                            <div
                                class="flex flex-col  bg-white bg-opacity-20   p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
                                <p class="text-yellow-500 text-8xl">“</p>
                                <div class="ml-[2rem] mr-[6rem]">
                                    <p class="text-gray-300 ">
                                        Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry.
                                        <br>Lorem
                                        Ipsum has
                                        been the industry's

                                    </p>
                                    <p class="mt-8"> standard dummy text ever <br> since the 1500s.</p>
                                    <div class="flex items-center mt-4">
                                        <img src="{{ url('image/fotoFormal/download (2).jpg') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mr. Reza Anonim</span>
                                            <span class="text-yellow-500">★★★★☆</span>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide" style="width: 20vw; height: 40vh;">
                        <div class="flex flex-col justify-between items-center ">

                            <div
                                class="flex flex-col  bg-white bg-opacity-20  p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
                                <p class="text-yellow-500 text-8xl">“</p>
                                <div class="ml-[2rem] mr-[6rem]">
                                    <p class="text-gray-300 ">
                                        Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry.
                                        <br>Lorem
                                        Ipsum has
                                        been the industry's

                                    </p>
                                    <p class="mt-8"> standard dummy text ever <br> since the 1500s.</p>
                                    <div class="flex items-center mt-4">
                                        <img src="{{ url('image/fotoFormal/download.jpg') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mrs. Diana Anonim</span>
                                            <span class="text-yellow-500">★★★★☆</span>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide" style="width: 20vw; height: 40vh;">
                        <div class="flex flex-col justify-between items-center ">

                            <div
                                class="flex flex-col  bg-white bg-opacity-20  p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
                                <p class="text-yellow-500 text-8xl">“</p>
                                <div class="ml-[2rem] mr-[6rem]">
                                    <p class="text-gray-300 ">
                                        Lorem Ipsum is simply dummy text <br>of the printing and typesetting industry.
                                        <br>Lorem
                                        Ipsum has
                                        been the industry's

                                    </p>
                                    <p class="mt-8"> standard dummy text ever <br> since the 1500s.</p>
                                    <div class="flex items-center mt-4">
                                        <img src="{{ url('image/fotoFormal/download (1).jpg') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mr. Toto Anonim</span>
                                            <span class="text-yellow-500">★★★★☆</span>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
            </div>
        </div>
    </section>

    <footer class="bg-[#131313]">
        <div class="bg-[#131313] text-white py-4 text-center mb-12 flex justify-between items-center px-12">
            <!-- Logo di kiri -->
            <img src="{{ asset('image/LOGO TRV.png') }}" alt="Trophyverse Logo" class="w-[20%] h-auto">

            <!-- Teks di tengah -->
            <div class="flex gap-[10rem] space-x-16 mr-[6rem]">
                <span class="text-xl">License</span>
                <span class="text-xl">FAQ</span>
                <span class="text-xl">Marketplace</span>
            </div>

            <!-- Ikon di kanan -->
            <div class="flex space-x-16 mr-16">
                <a href="https://link-untuk-logo.com" target="_blank" class="border border-white p-2 rounded-full">
                    <span class="[&>svg]:h-5 [&>svg]:w-5">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                    </span>
                </a>

                <a href="https://link-untuk-phone.com" target="_blank" class="border border-white p-2 rounded-full">
                    <svg class="w-4 h-4 text-white white:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                        <path
                            d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z" />
                    </svg>
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
        spaceBetween: -400,  // Atur jarak antar slide lebih besar
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loopAdditionalSlides: 1,
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
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        overflow: 'hidden',
        autoplay: {
            delay: 3000,  // Delay between slides in milliseconds
            // Keeps autoplay running even when user interacts
        }



    });

    // Initialize Smaller Slides
    var smallSwiper = new Swiper('#swiperContainerSmall', {
        slidesPerView: 6, // Show 5 slides at once in smaller slides container
        spaceBetween: 5, // Adjust space between slides
        loop: true,
        overflow: 'hidden',
        autoplay: {
            delay: 3000,  // Delay between slides in milliseconds
            // Keeps autoplay running even when user interacts
        }

    });

    var smallSwiper = new Swiper('#swiperContainerSmallPart2', {
        slidesPerView: 6, // Show 5 slides at once in smaller slides container
        spaceBetween: 5, // Adjust space between slides
        loop: true,
        overflow: 'hidden',
        autoplay: {
            delay: 3000,  // Delay between slides in milliseconds
            // Keeps autoplay running even when user interacts
        }

    });







</script>
