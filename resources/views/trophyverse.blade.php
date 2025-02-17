<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Tailwind CSS Demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


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


        <!-- PETA INDONESIA -->
        <div class="flex items-center justify-center mt-12">
            <img src="{{ asset('image/IND.png') }}" alt="MAP INDONESIA" class="w-[95%] h-auto">
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
                                class="flex flex-col  bg-gray-800 p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
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
                                        <img src="{{ url('image/ARW.png') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mrs. Diana Rivera</span>
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
                                class="flex flex-col  bg-gray-800 p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
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
                                        <img src="{{ url('image/ARW.png') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mrs. Diana Rivera</span>
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
                                class="flex flex-col  bg-gray-800 p-6 rounded-lg shadow-lg text-white mb-[5rem] ml-[3rem]">
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
                                        <img src="{{ url('image/ARW.png') }}" alt="Person 1"
                                            class="w-12 h-12 rounded-full object-cover mr-3">
                                        <div class="flex flex-col">
                                            <span class="font-semibold">Mrs. Diana Rivera</span>
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


    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4 text-center">
        <p>&copy; 2025 Tailwind CSS Demo</p>
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



</script>