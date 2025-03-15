<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</head>

<body class="overflow-x-hidden">

    <nav class="bg-white shadow-lg z-[99999999999999999] sticky top-0  transition-all duration-300">
       
        <div class="hidden lg:flex mx-auto px-6 py-4 flex-col gap-5">
            <div class="w-full h-[50px] flex justify-between items-center">
                <div>
                    <a href="#" class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200" dir="rtl"
                            class="w-[400px] textshadoww h-auto">
                            <defs>
                                <pattern id="imagePattern" patternUnits="userSpaceOnUse" width="800" height="200">
                                    <image href="{{ asset('images/w2.webp') }}" width="800" height="140" />
                                </pattern>
                            </defs>
                            <text x="50%" y="60%" font-family="serif" font-size="70" font-weight="bold"
                                text-anchor="middle" fill="url(#imagePattern)">
                                اسهم الاردن
                            </text>
                        </svg>
                    </a>
                </div>
                <div class="flex gap-10 items-center">
                    <!-- Login Button -->
                    <button
                        class="bg-green-800 px-6 py-2 border-green-800 rounded-full text-white  
                        transition-all font-semibold duration-300 ease-in-out hover:bg-transparent hover:text-green-800 border-2">
                        تسجيل الدخول
                    </button>

                    <!-- Register Button -->
                    <button class="border-green-800 border-2 bg-transparent text-black font-semibold px-6 py-2 rounded-full 
                        transition-all duration-300 ease-in-out hover:bg-green-800 hover:text-white">
                        إنشاء حساب
                    </button>

                    <!-- Search Input with Icon -->
                    <div class="relative w-[300px]">
                        <input
                            class="rounded-full border-green-800 border-2 w-full p-2 pl-10 focus:outline-none text-right 
                            transition-all duration-300 ease-in-out focus:ring-2 focus:ring-green-500 focus:border-green-600"
                            placeholder="ابحث عن..." type="search">
                        <i class="fa-solid fa-magnifying-glass text-white text-xl p-2 rounded-full bg-green-800 
                            absolute left-2 top-1/2 transform -translate-y-1/2 cursor-pointer 
                            transition-all duration-300 ease-in-out hover:bg-green-700">
                        </i>
                    </div>
                </div>
            </div>

            <div class="bg-green-800 w-full z-[999] h-[60px] flex justify-around items-center font-semibold text-white">
                <!-- Navbar Item with Dropdown -->
                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        اخبار <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">أحدث
                            الأخبار</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">الأخبار
                            العاجلة</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">تحليلات</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        معلومات شركات <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">بيانات
                            الشركات</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">أرباح
                            الشركات</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">التقارير
                            المالية</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        بيانات المالية <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">الميزانية
                            العامة</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">التدفقات
                            النقدية</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">نتائج
                            الأعمال</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        مؤشرات مالية <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">تحليل
                            المؤشرات</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">المؤشرات
                            العالمية</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        محللون <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">تحليلات
                            الخبراء</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">التوصيات</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        الاكتتابات <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">الإصدارات
                            الجديدة</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">الأسهم
                            المطروحة</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        صناديق <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">صناديق
                            الاستثمار</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">صناديق
                            التحوط</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        مشاريع <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">المشاريع
                            الجديدة</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">الشركات
                            الناشئة</a>
                    </div>
                </div>

                <div class="relative group">
                    <span class="cursor-pointer flex items-center px-2 gap-2">
                        رسوم بيانية <i class="fa-solid fa-chevron-down text-white"></i>
                    </span>
                    <div
                        class="absolute hidden group-hover:block bg-white mt-2 w-56 shadow-lg rounded-md overflow-hidden">
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">تحليل
                            الرسوم</a>
                        <a href="#"
                            class="block px-4 py-3 text-black hover:bg-gray-100 transition-colors duration-200">المخططات
                            البيانية</a>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="lg:hidden">
            <div class="flex justify-between items-center px-4 py-3 border-b">
              
                <div class="flex-1 text-center">
                    <a href="#" class="inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200" dir="rtl"
                            class="w-[200px] h-auto">
                            <defs>
                                <pattern id="mobileImagePattern" patternUnits="userSpaceOnUse" width="800" height="200">
                                    <image href="{{ asset('images/w2.webp') }}" width="800" height="140" />
                                </pattern>
                            </defs>
                            <text x="50%" y="60%" font-family="serif" font-size="70" font-weight="bold"
                                text-anchor="middle" fill="url(#mobileImagePattern)">
                                اسهم الاردن
                            </text>
                        </svg>
                    </a>
                </div>

         
                <button id="menuToggle" class="p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-green-800">
                    <div class="w-6 h-0.5 bg-green-800 transition-all duration-300" id="line1"></div>
                    <div class="w-6 h-0.5 bg-green-800 my-1.5 transition-all duration-300" id="line2"></div>
                    <div class="w-6 h-0.5 bg-green-800 transition-all duration-300" id="line3"></div>
                </button>
            </div>

          
            <div class="px-4 py-3 border-b">
                <div class="relative">
                    <input
                        class="rounded-full border-green-800 border-2 w-full p-2 pl-10 focus:outline-none text-right 
                        transition-all duration-300 ease-in-out focus:ring-2 focus:ring-green-500 focus:border-green-600"
                        placeholder="ابحث عن..." type="search">
                    <i class="fa-solid fa-magnifying-glass text-white text-xl p-2 rounded-full bg-green-800 
                        absolute left-2 top-1/2 transform -translate-y-1/2 cursor-pointer 
                        transition-all duration-300 ease-in-out hover:bg-green-700">
                    </i>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobileMenu" class="transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                <!-- Login/Register buttons for mobile -->
                <div class="flex justify-between gap-2 p-4 border-b">
                    <button class="flex-1 bg-green-800 px-4 py-2 border-green-800 rounded-full text-white 
                        transition-all font-semibold duration-300 ease-in-out hover:bg-green-900 border-2 text-sm">
                        تسجيل الدخول
                    </button>
                    <button class="flex-1 border-green-800 border-2 bg-transparent text-black font-semibold px-4 py-2 rounded-full 
                        transition-all duration-300 ease-in-out hover:bg-green-800 hover:text-white text-sm">
                        إنشاء حساب
                    </button>
                </div>

                <!-- Navigation Items -->
                <div class="bg-white">
                    <!-- News -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="newsDropdown">
                            <span>اخبار</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="newsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">أحدث
                                الأخبار</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">الأخبار
                                العاجلة</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">تحليلات</a>
                        </div>
                    </div>

                    <!-- Companies Info -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="companiesDropdown">
                            <span>معلومات شركات</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="companiesDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">بيانات
                                الشركات</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">أرباح
                                الشركات</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">التقارير
                                المالية</a>
                        </div>
                    </div>

                    <!-- Financial Data -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="financialDropdown">
                            <span>بيانات المالية</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="financialDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">الميزانية
                                العامة</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">التدفقات
                                النقدية</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">نتائج
                                الأعمال</a>
                        </div>
                    </div>

                    <!-- Financial Indicators -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="indicatorsDropdown">
                            <span>مؤشرات مالية</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="indicatorsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">تحليل
                                المؤشرات</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">المؤشرات
                                العالمية</a>
                        </div>
                    </div>

                    <!-- Analysts -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="analystsDropdown">
                            <span>محللون</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="analystsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">تحليلات
                                الخبراء</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">التوصيات</a>
                        </div>
                    </div>

                    <!-- IPOs -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="ipoDropdown">
                            <span>الاكتتابات</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="ipoDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">الإصدارات
                                الجديدة</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">الأسهم
                                المطروحة</a>
                        </div>
                    </div>

                    <!-- Funds -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="fundsDropdown">
                            <span>صناديق</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="fundsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">صناديق
                                الاستثمار</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">صناديق
                                التحوط</a>
                        </div>
                    </div>

                    <!-- Projects -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="projectsDropdown">
                            <span>مشاريع</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="projectsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">المشاريع
                                الجديدة</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">الشركات
                                الناشئة</a>
                        </div>
                    </div>

                    <!-- Charts -->
                    <div class="border-b">
                        <button
                            class="dropdown-toggle flex justify-between items-center w-full px-4 py-3 text-right font-semibold"
                            data-target="chartsDropdown">
                            <span>رسوم بيانية</span>
                            <i class="fa-solid fa-chevron-down transition-transform duration-300"></i>
                        </button>
                        <div id="chartsDropdown"
                            class="dropdown-content bg-gray-50 transition-all duration-300 ease-in-out overflow-hidden max-h-0">
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">تحليل
                                الرسوم</a>
                            <a href="#"
                                class="block px-6 py-2 text-gray-700 hover:bg-gray-100 text-right border-t border-gray-100">المخططات
                                البيانية</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
        
            const menuToggle = document.getElementById('menuToggle');
            const mobileMenu = document.getElementById('mobileMenu');
            const line1 = document.getElementById('line1');
            const line2 = document.getElementById('line2');
            const line3 = document.getElementById('line3');
            let isMenuOpen = false;

            menuToggle.addEventListener('click', function() {
                isMenuOpen = !isMenuOpen;
                
                if (isMenuOpen) {
                    mobileMenu.style.maxHeight = mobileMenu.scrollHeight + 'px';
  
                    line1.classList.add('transform', 'rotate-45', 'translate-y-2');
                    line2.classList.add('opacity-0');
                    line3.classList.add('transform', '-rotate-45', '-translate-y-2');
                } else {
                    mobileMenu.style.maxHeight = '0';

                    line1.classList.remove('transform', 'rotate-45', 'translate-y-2');
                    line2.classList.remove('opacity-0');
                    line3.classList.remove('transform', '-rotate-45', '-translate-y-2');
                }
            });


            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
            
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const dropdownContent = document.getElementById(targetId);
                    const icon = this.querySelector('i');
                    

                    document.querySelectorAll('.dropdown-content').forEach(content => {
                        if (content.id !== targetId && content.style.maxHeight !== '0px') {
                            content.style.maxHeight = '0';
                            const otherIcon = document.querySelector(`[data-target="${content.id}"] i`);
                            otherIcon.classList.remove('transform', 'rotate-180');
                        }
                    });
                    

                    if (dropdownContent.style.maxHeight === '0px' || !dropdownContent.style.maxHeight) {
                        dropdownContent.style.maxHeight = dropdownContent.scrollHeight + 'px';
                        icon.classList.add('transform', 'rotate-180');
                    } else {
                        dropdownContent.style.maxHeight = '0';
                        icon.classList.remove('transform', 'rotate-180');
                    }
                });
            });


            window.addEventListener('scroll', function() {
                const nav = document.querySelector('nav');
                if (window.scrollY > 10) {
                    nav.classList.add('shadow-xl');
                } else {
                    nav.classList.remove('shadow-xl');
                }
            });
        });
    </script>




    <main class=" flex flex-col gap-25 relative">
        <div
            class="left-0 top-[350px] fixed h-[200px] w-[50px] bg-green-800 z-30 rounded-r-md hidden lg:flex flex-col justify-evenly items-center p-3 shadow-lg">
            <i
                class="fa-brands fa-facebook text-white text-2xl transition-transform transform hover:scale-125 hover:text-blue-500"></i>
            <i
                class="fa-brands fa-youtube text-white text-2xl transition-transform transform hover:scale-125 hover:text-red-500"></i>
            <i
                class="fa-brands fa-instagram text-white text-2xl transition-transform transform hover:scale-125 hover:text-pink-500"></i>
            <i
                class="fa-brands fa-telegram text-white text-2xl transition-transform transform hover:scale-125 hover:text-blue-500"></i>


        </div>

        <div class="relative">
            <div class="w-full h-[50vh] sm:h-[60vh] lg:h-[70vh] overflow-x-hidden">
                <!-- Swiper -->
                <div class="swiper-container h-full">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/jord.jpg') }}" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- Slide 2 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/jorr.jpg') }}" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- Slide 3 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/jorr3.jpg') }}" class="h-full w-full object-cover" alt="">
                        </div>
                        <!-- Slide 4 -->
                        <div class="swiper-slide flex justify-center items-center">
                            <img src="{{ asset('images/busniss.webp') }}" class="h-full w-full object-cover" alt="">
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- Navigation buttons -->
                    <div class="swiper-button-next" style="color: #2f855a;"></div>
                    <div class="swiper-button-prev" style="color: #2f855a;"></div>
                </div>
            </div>

            <!-- Swiper Configuration -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    var swiper = new Swiper(".swiper-container", {
                        loop: true, // Enables infinite loop
                        autoplay: {
                            delay: 3000, // Auto-slide every 3 seconds
                            disableOnInteraction: false,
                        },
                        slidesPerView: 1, // Always show one slide at a time
                        spaceBetween: 10, // Adds some spacing
                        pagination: {
                            
                            clickable: true,
                        },
                        navigation: {
                            nextEl: ".swiper-button-next",
                            prevEl: ".swiper-button-prev",
                        },
                    });
                });
            </script>


            <div
                class="w-full z-[999999] lg:w-[90%] h-[auto] lg:h-[17vh] flex flex-col lg:flex-row justify-center items-center gap-5 bg-white lg:rounded-lg shadow-lg lg:absolute lg:left-1/2 lg:bottom-[-5rem] lg:-translate-x-1/2 p-4 lg:p-0">

                <!-- Dropdown Section -->
                <div class="relative w-full lg:w-[18%] mb-4 lg:mb-0">
                    <select class="custom-select w-full lg:mr-2">
                        <option selected value="">السعودية</option>
                        <option value="الإمارات">الإمارات</option>
                        <option value="الكويت">الكويت</option>
                        <option value="قطر">قطر</option>
                        <option value="مسقط">مسقط</option>
                        <option value="البحرين">البحرين</option>
                    </select>
                    <div class="custom-arrow"></div>
                </div>

                <!-- Stats Sections (Gold, Silver, etc.) -->
                <div class="flex flex-wrap justify-center  gap-5 w-full   ">

                    <div
                        class="lg:w-[17%]  w-[150px] h-[70%] border-l-1 border-gray-300 flex justify-center flex-col gap-2">
                        <h1 class="font-semibold text-[#48555d]">ذهب</h1>
                        <p class="font-thin text-gray-500 text-md">1,758.12</p>
                        <p class="text-[#00ba39] text-sm"> ▲ 4.32% +</p>
                    </div>

                    <div
                        class="lg:w-[17%]  w-[150px] h-[70%] lg:border-l-1 lg:border-gray-300 flex justify-center flex-col gap-2">
                        <h1 class="font-semibold text-[#48555d]">الفضة</h1>
                        <p class="font-thin text-gray-500 text-md">24.99</p>
                        <p class="text-[#00ba39] text-sm">▲ 3.87% + </p>
                    </div>

                    <div
                        class="lg:w-[17%]  w-[150px] h-[70%] border-l-1 border-gray-300 flex justify-center flex-col gap-2">
                        <h1 class="font-semibold text-[#48555d]">النحاس</h1>
                        <p class="font-thin text-gray-500 text-md">4.29</p>
                        <p class="text-red-600 text-sm">▼ 0.87% - </p>
                    </div>

                    <div
                        class="lg:w-[17%]  w-[150px] h-[70%] lg:border-l-1 lg:border-gray-300 flex justify-center flex-col gap-2">
                        <h1 class="font-semibold text-[#48555d]">خام الحديد</h1>
                        <p class="font-thin text-gray-500 text-md">120.75</p>
                        <p class="text-[#00ba39] text-sm">▲ 1.45% +</p>
                    </div>
                    <div
                        class="lg:w-[17%]  lg:hidden w-[150px] h-[70%] border-l-1 border-gray-300 flex justify-center flex-col gap-2">
                        <h1 class="font-semibold text-[#48555d]">خام الحديد</h1>
                        <p class="font-thin text-gray-500 text-md">120.75</p>
                        <p class="text-[#00ba39] text-sm">▲ 1.45% +</p>
                    </div>

                    <div
                        class="lg:w-[17%]  w-[150px] h-[70%] flex justify-center flex-col gap-2 lg:border-l-1 lg:border-gray-300 ">
                        <h1 class="font-semibold text-[#48555d]">الزنك</h1>
                        <p class="font-thin text-gray-500 text-md">2.65</p>
                        <p class="text-red-600 text-sm">▼ 1.22% -</p>
                    </div>


                </div>

            </div>

        </div>

        <div class="flex flex-col gap-5 justify-center items-center ">
            <div class="w-[90%] flex justify-start ">
                <div class="w-[150px]  flex justify-center items-center py-2 rounded-4xl bg-green-800 text-white">صناديق
                    الاستثمار
                </div>
            </div>
            <div class="flex flex-col lg:flex-row justify-center items-center gap-10">

                <div class="h-[40vh] lg:w-[28vw] w-[100vw] bg-red-500 lg:rounded-lg overflow-hidden">
                    <div class="img1 w-full h-full"></div>
                </div>
                <div class="h-[40vh] lg:w-[59vw] w-[100vw] lg:rounded-lg overflow-auto bg-white shadow-lg">
                    <div class="overflow-x-auto">
                        <table dir="rtl"
                            class="w-max lg:w-full h-full text-right table-auto border-separate border-spacing-0 lg:rounded-lg overflow-hidden shadow-lg">
                            <thead class="bg-gradient-to-r from-green-800 to-green-600 text-white text-xs sm:text-sm">
                                <tr>
                                    <th class="px-4 py-2 sm:px-6 sm:py-3 font-semibold">الصندوق</th>
                                    <th class="px-4 py-2 sm:px-6 sm:py-3 font-semibold">صافي قيمة الأصول</th>
                                    <th class="px-4 py-2 sm:px-6 sm:py-3 font-semibold">العملة</th>
                                    <th class="px-4 py-2 sm:px-6 sm:py-3 font-semibold">العائد منذ بداية العام</th>
                                    <th class="px-4 py-2 sm:px-6 sm:py-3 font-semibold">التاريخ</th>
                                </tr>
                            </thead>
                            <tbody class="text-xs sm:text-sm">
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق الأهلي للأسهم الصينية</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">6,494,183.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">دولار</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">16.14%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/10</td>
                                </tr>
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق الأول للإستثمار لأسھم
                                        الصین والھند المرن</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">17,348,261.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">دولار</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">12.37%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/10</td>
                                </tr>
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق يقين للذهب</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2,621,988.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">دولار</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">10.91%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/10</td>
                                </tr>
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق الأهلي لمؤشر أسهم أوروبا
                                    </td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">133,528,894.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">دولار</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">8.52%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/11</td>
                                </tr>
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق بيت المال الخليجي المرن
                                        للأسهم السعودية</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">7,121,782.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">ريال</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">8.27%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/10</td>
                                </tr>
                                <tr class="hover:bg-green-50 transition-all cursor-pointer">
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">صندوق الجزيرة للأسهم الأوروبيه
                                    </td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">44,502,462.00</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">دولار</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">7.81%</td>
                                    <td class="px-4 py-2 sm:px-6 sm:py-4 text-gray-800">2025/03/11</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class=" flex justify-center items-center">
            <div class="w-[90%] flex flex-col gap-5">
                <div class="flex md:justify-center md:gap-36 lg:gap-0 lg:justify-between justify-between w-full">
                    <div class="px-6 py-2 rounded-4xl bg-green-800 text-white">الأخبار المقترحة</div>
                    <button
                        class="px-6 py-2 hover:opacity-[0.9] cursor-pointer rounded-4xl bg-green-800 text-white">المزيد</button>
                </div>
                <div class="flex w-full flex-col lg:flex-row lg:gap-3 justify-center items-center">
                    <div class="h-[15rem] lg:w-[20%] w-[24rem] rounded-lg">
                        <div class="gradd w-full h-[40%] rounded-lg flex justify-center items-center"><i
                                class="text-5xl text-white fa-solid fa-chart-line"></i></div>
                        <div class="font-thin text-gray-500 text-lg ">10 مارس 2025</div>
                        <h1 class="text-xl text-gray-600 font-semibold truncate-multiline">ارتفاع مؤشر الأسهم السعودية
                            بنسبة 4.5% في الجلسة الأخيرة وارتفاع الأسعار في قطاع العقارات</h1>
                    </div>
                    <div class="h-[15rem] lg:w-[20%] w-[24rem] rounded-lg">
                        <div class="gradd w-full h-[40%] rounded-lg flex justify-center items-center"><i
                                class="text-5xl text-white fa-solid fa-chart-line"></i></div>
                        <div class="font-thin text-gray-500 text-lg ">9 مارس 2025</div>
                        <h1 class="text-xl text-gray-600 font-semibold truncate-multiline">ارتفاع أسعار الذهب وسط توترات
                            عالمية في الأسواق المالية وتوقعات بتأثيرات طويلة الأمد</h1>
                    </div>
                    <div class="h-[15rem] lg:w-[20%] w-[24rem] rounded-lg">
                        <div class="gradd w-full h-[40%] rounded-lg flex justify-center items-center"><i
                                class="text-5xl text-white fa-solid fa-chart-line"></i></div>
                        <div class="font-thin text-gray-500 text-lg ">8 مارس 2025</div>
                        <h1 class="text-xl text-gray-600 font-semibold truncate-multiline">أسواق النفط تواجه تقلبات بسبب
                            الأزمة في الشرق الأوسط وتأثيرات على الاقتصاد العالمي</h1>
                    </div>
                    <div class="h-[15rem] lg:w-[20%] w-[24rem] rounded-lg">
                        <div class="gradd w-full h-[40%] rounded-lg flex justify-center items-center"><i
                                class="text-5xl text-white fa-solid fa-chart-line"></i></div>
                        <div class="font-thin text-gray-500 text-lg ">7 مارس 2025</div>
                        <h1 class="text-xl text-gray-600 font-semibold truncate-multiline">الأسواق الأوروبية تشهد صعودًا
                            بعد إعلان بيانات اقتصادية إيجابية وتوقعات نمو مستدامة</h1>
                    </div>
                    <div class="h-[15rem] lg:w-[20%] w-[24rem] rounded-lg">
                        <div class="gradd w-full h-[40%] rounded-lg flex justify-center items-center"><i
                                class="text-5xl text-white fa-solid fa-chart-line"></i></div>
                        <div class="font-thin text-gray-500 text-lg ">6 مارس 2025</div>
                        <h1 class="text-xl text-gray-600 font-semibold truncate-multiline">البورصات العالمية تشهد
                            انخفاضًا في الأسعار بسبب المخاوف من التضخم وتأثيره على السياسات النقدية</h1>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-full flex justify-center items-center">
            <div class="w-[90%]   flex justify-center items-center flex-col gap-5">
                <div class="flex  w-full ">
                    <div class="px-6 py-2 rounded-4xl bg-green-800 text-white">تصنيف الأخبار</div>
                </div>
                <div class="flex w-full flex-col lg:flex-row gap-5">
                    <div class="h-[10rem] lg:w-[24%] rounded-lg bg-red-500 relative">
                        <img class="h-full w-full rounded-lg object-cover " src="{{ asset('images/busniss.webp') }}"
                            alt="">
                        <div
                            class="absolute top-0 bg-green-800 rounded-lg opacity-80 h-full w-full flex justify-center items-center">
                            <h1 class="text-5xl font-bold text-white">الأعمال </h1>
                        </div>
                    </div>
                    <div class="h-[10rem] lg:w-[24%] rounded-lg bg-red-500 relative">
                        <img class="h-full w-full rounded-lg object-cover " src="{{ asset('images/busniss.webp') }}"
                            alt="">
                        <div
                            class="absolute top-0 bg-green-800 rounded-lg opacity-80 h-full w-full flex justify-center items-center">
                            <h1 class="text-5xl font-bold text-white">الاقتصاد </h1>
                        </div>
                    </div>
                    <div class="h-[10rem] lg:w-[24%] rounded-lg bg-red-500 relative">
                        <img class="h-full w-full rounded-lg object-cover " src="{{ asset('images/busniss.webp') }}"
                            alt="">
                        <div
                            class="absolute top-0 bg-green-800 rounded-lg opacity-80 h-full w-full flex justify-center items-center">
                            <h1 class="text-5xl font-bold text-white">العقارات </h1>
                        </div>
                    </div>
                    <div class="h-[10rem] lg:w-[24%] rounded-lg bg-red-500 relative">
                        <img class="h-full w-full rounded-lg object-cover " src="{{ asset('images/busniss.webp') }}"
                            alt="">
                        <div
                            class="absolute top-0 bg-green-800 rounded-lg opacity-80 h-full w-full flex justify-center items-center">
                            <h1 class="text-5xl font-bold text-white">الاستثمار </h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="w-full mt-[150px] bg-green-900 text-white py-12 px-6">
        <div class="container mx-auto grid grid-cols-1 lg:grid-cols-4 gap-8">

            <!-- Logo Section -->
            <div class="flex flex-col items-center lg:items-start">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 200" dir="rtl" class="w-48 h-auto">
                    <defs>
                        <pattern id="imagePattern" patternUnits="userSpaceOnUse" width="800" height="200">
                            <image href="{{ asset('images/w2.webp') }}" width="800" height="140" />
                        </pattern>
                    </defs>
                    <text x="50%" y="60%" font-family="serif" font-size="70" font-weight="bold" text-anchor="middle"
                        fill="url(#imagePattern)">
                        اسهم الاردن
                    </text>
                </svg>
                <p class="text-gray-300 text-sm mt-4 text-center lg:text-left">
                    منصة الأخبار المالية الأولى لتغطية الأسواق والأسهم والاستثمارات.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h2 class="font-semibold text-lg mb-4 border-b border-gray-500 pb-2">روابط سريعة</h2>
                <ul class="space-y-3">
                    <li><a href="#" class="hover:text-green-300 transition">الرئيسية</a></li>
                    <li><a href="#" class="hover:text-green-300 transition">أخبار الأسواق</a></li>
                    <li><a href="#" class="hover:text-green-300 transition">معلومات الشركات</a></li>
                    <li><a href="#" class="hover:text-green-300 transition">تحليلات مالية</a></li>
                    <li><a href="#" class="hover:text-green-300 transition">التقارير الاقتصادية</a></li>
                </ul>
            </div>

            <!-- News Categories Dropdown -->
            <div>
                <h2 class="font-semibold text-lg mb-4 border-b border-gray-500 pb-2">تصنيفات الأخبار</h2>
                <select class="w-full p-2 bg-green-800 border border-gray-500 text-white rounded">
                    <option>أسواق المال</option>
                    <option>الشركات والاستثمارات</option>
                    <option>التجارة والاقتصاد</option>
                    <option>الطاقة والنفط</option>
                    <option>العملات والمعادن</option>
                </select>
            </div>

            <!-- Contact Info -->
            <div>
                <h2 class="font-semibold text-lg mb-4 border-b border-gray-500 pb-2">تواصل معنا</h2>
                <p class="text-gray-300">البريد الإلكتروني: info@example.com</p>
                <p class="text-gray-300 mt-2">رقم الهاتف: +962 79 123 4567</p>
                <p class="text-gray-300 mt-2">العنوان: عمان، الأردن</p>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-8 border-t border-gray-600 pt-4 text-center text-gray-400 text-sm">
            © 2025 جميع الحقوق محفوظة | أسهم الأردن
        </div>
    </footer>



    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>