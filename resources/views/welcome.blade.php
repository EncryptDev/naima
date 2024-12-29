<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naima</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- Header -->
    <header class="bg-green-500">
        <nav class="flex justify-between items-center p-6 sticky top-0">
            <div class="text-3xl font-bold">Naima</div>
            <div class="space-x-4">
                <a href="#" class="hover:text-gray-300">Home</a>
                <a href="#" class="hover:text-gray-300">About Us</a>
                <a href="#" class="hover:text-gray-300">Services</a>
                <a href="#" class="hover:text-gray-300">Our People</a>
                <a href="#" class="hover:text-gray-300">Insights</a>
                <a href="#" class="hover:text-gray-300">Career</a>
            </div>
            <button class="bg-white text-black px-4 py-2 rounded">Contact Us</button>
        </nav>
        <div class="flex flex-col items-center justify-center h-screen text-center">
            <h1 class="text-5xl font-bold mb-4">Manage your <span class="text-blue-500">Business</span> Better with <span class="text-blue-500">Skha</span></h1>
            <p class="text-xl mb-8">Crafting Solution, Building Connection</p>
            <div class="space-x-4">
                <button class="bg-white text-black px-6 py-3 rounded">Read More</button>
                <button class="bg-transparent border border-white px-6 py-3 rounded">Contact Us</button>
            </div>
        </div>
    </header>

    <!-- About Us -->
    <div class="p-6">
        <h2 class="text-base font-bold mb-4">Tentang Naima</h2>
        <p class="mb-4 font-semibold text-3xl pr-10">Naima adalah perusahaan konsultan manajemen operasional keberlanjutan yang berasal dari Indonesia.</p>
        <p class="mb-4 pr-64">Kami membantu perusahaan merancang penerapan keberlanjutan perusahaan - strategi, baseline, struktur, peran, dan tanggung jawab,
            serta bagaimana perusahaan mengimplementasikan konsep keberlanjutan kepada karyawan, vendor, dan pelanggan mereka.
        </p>
        <button class="bg-blue-950 text-white px-6 py-3 rounded mt-10">ABOUT US</button>
    </div>

    <!-- Services -->
    <div class="p-6">
        <h2 class="text-base font-bold mb-4">Services</h2>
        <p class="mb-4 font-semibold text-2xl pr-24">
            Kami hadir untuk memberikan solusi untuk berbagai masalah yang dihadapi organisasi dalam menerapkan aspek keberlanjutan.
        </p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="p-4 bg-slate-400">
                <h3 class="text-lg font-bold mb-2">TRANSFORMASI KEBERLANJUTAN</h3>
                <p>Menyelaraskan target dan struktur organisasi dengan strategi dan model operasional organisasi.</p>
            </div>
            <div class="p-4 bg-slate-400">
                <h3 class="text-lg font-bold mb-2">MEREALISASIKAN STRATEGI FUNGSIONAL</h3>
                <p>Memastikan struktur dan proses bisnis yang tepat untuk menciptakan nilai dari target keberlanjutan.</p>
            </div>
            <div class="p-4 bg-slate-400">
                <h3 class="text-lg font-bold mb-2">MENGHADAPI DISTRUPSI KEBERLANJUTAN</h3>
                <p>Menyelaraskan struktur dan proses bisnis organisasi dalam perjalanan keberlanjutan organisasi.</p>
            </div>
            <div class="p-4 bg-slate-400">
                <h3 class="text-lg font-bold mb-2">MEMBANGUN CITRA KEBERLANJUTAN</h3>
                <p>Memastikan pelaksanaan dan inovasi keberlanjutan organisasi dapat diketahui oleh publik.</p>
            </div>
            <div class="p-4 bg-slate-400">
                <h3 class="text-lg font-bold mb-2">EFISIENSI ORGANISASI</h3>
                <p>Menciptakan struktur biasa yang menunjang organisasi untuk berkompetisi secara efektif.</p>
            </div>
        </div>
    </div>

    <!-- Career Section -->
    <div class="bg-green-500 p-6">
        <div class="flex flex-col items-center justify-center text-center">
            <h2 class="text-xl font-semibold mb-4">Make your vision come true</h2>
            <h3 class="text-4xl font-semibold mb-4">Work with Naima</h3>
            <p class="text-xl mb-8">Working at Naima provides a golden opportunity to develop your best potential and build professional networks. Naima team consists of the best talents in Indonesia. Grow your proficiency and achieve your exemplary career track with Naima.</p>
            <div class="space-x-4">
                <button class="bg-blue-500 text-white px-6 py-3 rounded">START YOUR CAREER</button>
                <button class="bg-transparent border border-white text-white px-6 py-3 rounded">EXPLORE NAIMA</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-6">
        <div class="flex flex-col md:flex-row justify-between mb-4">
            <div class="mb-4 w-96 md:mb-0">
                <h2 class="text-2xl font-bold">Naima</h2>
                <p>Naima adalah perusahaan konsultan manajemen operasional keberlanjutan yang berasal dari Indonesia.</p>
            </div>
            <div>
                <ul class="space-x-4 flex mb-5">
                    <li><a href="#" class="hover:text-gray-400">Home</a></li>
                    <li><a href="#" class="hover:text-gray-400">About Us</a></li>
                    <li><a href="#" class="hover:text-gray-400">Services</a></li>
                    <li><a href="#" class="hover:text-gray-400">Our People</a></li>
                    <li><a href="#" class="hover:text-gray-400">Career</a></li>
                </ul>
                <hr>
                <p class="mt-6 text-2xl font-semibold mb-3">Subscribe to Naima</p>
                <div class="flex mb-4"> 
                    <input type="email" placeholder="Enter your email" class="p-2 rounded-l bg-gray-700 text-white focus:outline-none">
                    <button class="bg-blue-500 text-white p-2 rounded-r hover:bg-blue-600">SUBMIT</button>
                </div>
            </div>
        </div>
        <div class="flex justify-center mb-4">
            <a href="#" class="mr-4 hover:text-gray-400">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" class="hover:text-gray-400">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
        <hr>
        <p class="text-sm text-center">&copy; 2024 Skha. All Rights Reserved.</p>
    </footer>
</body>

</html>