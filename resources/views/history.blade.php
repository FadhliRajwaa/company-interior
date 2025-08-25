@extends('layouts.public')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-[60vh] flex items-center overflow-hidden">
    <div class="absolute inset-0 gradient-bg">
        <div class="absolute inset-0 bg-black bg-opacity-40"></div>
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 30% 70%, rgba(255,255,255,0.1) 0%, transparent 50%), radial-gradient(circle at 70% 30%, rgba(255,255,255,0.1) 0%, transparent 50%);"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="mb-6">
            <span class="inline-flex items-center glass-bg rounded-full px-6 py-3 text-white text-sm font-medium border border-white border-opacity-20">
                <svg class="w-4 h-4 mr-2 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Sejarah Perusahaan
            </span>
        </div>
        
        <h1 class="text-5xl md:text-6xl font-heading font-bold mb-6 text-white leading-tight">
            Perjalanan
            <span class="block bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                Luxury Interior
            </span>
        </h1>
        
        <p class="text-xl text-purple-100 max-w-4xl mx-auto leading-relaxed">
            Dari visi sederhana hingga menjadi studio desain interior mewah terpercaya di Indonesia dengan standar internasional
        </p>
    </div>
</section>

<!-- Story Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">Kisah Kami</span>
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-gray-900 mt-2 mb-6">
                Misi Menciptakan Ruang Impian
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Perjalanan kami dimulai dari passion untuk menciptakan ruang yang tidak hanya indah, tetapi juga fungsional dan mencerminkan kepribadian unik setiap klien.
            </p>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="py-20 bg-gray-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">Milestone</span>
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-gray-900 mt-2">
                Pencapaian Bersejarah
            </h2>
        </div>
        
        <div class="relative">
            <!-- Timeline Line for Desktop -->
            <div class="hidden lg:block absolute left-1/2 transform -translate-x-px h-full w-1 bg-gradient-to-b from-purple-400 to-blue-500"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-12 lg:space-y-16">
                
                <!-- 2009 - Foundation -->
                <div class="relative flex flex-col lg:flex-row items-center">
                    <!-- Content Left (Desktop) / Center (Mobile) -->
                    <div class="w-full lg:w-5/12 lg:pr-8">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100 lg:text-right text-center">
                            <div class="inline-block bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                2009
                            </div>
                            <h3 class="text-xl lg:text-2xl font-heading font-bold text-gray-900 mb-3">Awal Mula</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-sm lg:text-base">
                                Didirikan dengan visi menciptakan ruang interior berkualitas tinggi yang menggabungkan estetika modern dengan fungsionalitas optimal.
                            </p>
                            <div class="bg-purple-50 p-3 rounded-lg border border-purple-100">
                                <span class="text-purple-700 font-semibold text-sm">Pencapaian: </span>
                                <span class="text-gray-700 text-sm">5 proyek pertama, 100% kepuasan klien</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Dot -->
                    <div class="hidden lg:flex w-2/12 justify-center my-4 lg:my-0">
                        <div class="w-16 h-16 bg-white border-4 border-purple-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Empty Space Right -->
                    <div class="hidden lg:block w-5/12"></div>
                </div>

                <!-- 2012 - Expansion -->
                <div class="relative flex flex-col lg:flex-row items-center">
                    <!-- Empty Space Left -->
                    <div class="hidden lg:block w-5/12"></div>
                    
                    <!-- Timeline Dot -->
                    <div class="hidden lg:flex w-2/12 justify-center my-4 lg:my-0">
                        <div class="w-16 h-16 bg-white border-4 border-blue-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content Right (Desktop) / Center (Mobile) -->
                    <div class="w-full lg:w-5/12 lg:pl-8">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100 text-center lg:text-left">
                            <div class="inline-block bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                2012
                            </div>
                            <h3 class="text-xl lg:text-2xl font-heading font-bold text-gray-900 mb-3">Ekspansi Tim</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-sm lg:text-base">
                                Bergabung dengan desainer internasional dan arsitek berpengalaman, memperluas jangkauan layanan ke segmen luxury residential dan commercial.
                            </p>
                            <div class="bg-blue-50 p-3 rounded-lg border border-blue-100">
                                <span class="text-blue-700 font-semibold text-sm">Pencapaian: </span>
                                <span class="text-gray-700 text-sm">50+ proyek, tim 15 profesional</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2015 - Recognition -->
                <div class="relative flex flex-col lg:flex-row items-center">
                    <!-- Content Left (Desktop) / Center (Mobile) -->
                    <div class="w-full lg:w-5/12 lg:pr-8">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100 lg:text-right text-center">
                            <div class="inline-block bg-gradient-to-r from-green-600 to-emerald-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                2015
                            </div>
                            <h3 class="text-xl lg:text-2xl font-heading font-bold text-gray-900 mb-3">Pengakuan Industri</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-sm lg:text-base">
                                Meraih penghargaan "Best Interior Design Studio" dan menjadi partner resmi brand furniture internasional premium untuk market Indonesia.
                            </p>
                            <div class="bg-green-50 p-3 rounded-lg border border-green-100">
                                <span class="text-green-700 font-semibold text-sm">Pencapaian: </span>
                                <span class="text-gray-700 text-sm">3 penghargaan nasional, 200+ proyek</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Dot -->
                    <div class="hidden lg:flex w-2/12 justify-center my-4 lg:my-0">
                        <div class="w-16 h-16 bg-white border-4 border-green-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Empty Space Right -->
                    <div class="hidden lg:block w-5/12"></div>
                </div>

                <!-- 2018 - Innovation -->
                <div class="relative flex flex-col lg:flex-row items-center">
                    <!-- Empty Space Left -->
                    <div class="hidden lg:block w-5/12"></div>
                    
                    <!-- Timeline Dot -->
                    <div class="hidden lg:flex w-2/12 justify-center my-4 lg:my-0">
                        <div class="w-16 h-16 bg-white border-4 border-orange-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Content Right (Desktop) / Center (Mobile) -->
                    <div class="w-full lg:w-5/12 lg:pl-8">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100 text-center lg:text-left">
                            <div class="inline-block bg-gradient-to-r from-orange-600 to-red-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                2018
                            </div>
                            <h3 class="text-xl lg:text-2xl font-heading font-bold text-gray-900 mb-3">Inovasi Digital</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-sm lg:text-base">
                                Meluncurkan platform digital untuk visualisasi 3D real-time dan sistem tracking progress project yang memungkinkan klien memantau perkembangan secara live.
                            </p>
                            <div class="bg-orange-50 p-3 rounded-lg border border-orange-100">
                                <span class="text-orange-700 font-semibold text-sm">Pencapaian: </span>
                                <span class="text-gray-700 text-sm">Platform digital, 500+ proyek</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2020 - Adaptation -->
                <div class="relative flex flex-col lg:flex-row items-center">
                    <!-- Content Left (Desktop) / Center (Mobile) -->
                    <div class="w-full lg:w-5/12 lg:pr-8">
                        <div class="bg-white rounded-2xl p-6 lg:p-8 shadow-lg border border-gray-100 lg:text-right text-center">
                            <div class="inline-block bg-gradient-to-r from-pink-600 to-purple-600 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4">
                                2020
                            </div>
                            <h3 class="text-xl lg:text-2xl font-heading font-bold text-gray-900 mb-3">Adaptasi Pandemi</h3>
                            <p class="text-gray-600 leading-relaxed mb-4 text-sm lg:text-base">
                                Mengadaptasi layanan konsultasi virtual dan sistem kontrak online, mempertahankan kualitas layanan premium di masa challenging sambil tetap melayani klien dengan aman.
                            </p>
                            <div class="bg-pink-50 p-3 rounded-lg border border-pink-100">
                                <span class="text-pink-700 font-semibold text-sm">Pencapaian: </span>
                                <span class="text-gray-700 text-sm">100% layanan digital, 700+ proyek</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Dot -->
                    <div class="hidden lg:flex w-2/12 justify-center my-4 lg:my-0">
                        <div class="w-16 h-16 bg-white border-4 border-pink-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Empty Space Right -->
                    <div class="hidden lg:block w-5/12"></div>
                </div>
            </div>
        </div>
    </div>
</section>
                            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-6 py-2 rounded-full text-lg font-semibold mb-4">
                                2012
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Ekspansi Tim</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Bergabung dengan desainer internasional dan arsitek berpengalaman, memperluas jangkauan layanan ke segmen luxury residential dan commercial.
                            </p>
                            <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100">
                                <div class="text-blue-600 font-semibold">Pencapaian:</div>
                                <div class="text-gray-700">50+ proyek, tim 15 profesional</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2015 - Recognition -->
                <div class="relative flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="lg:w-1/2 lg:pr-12 text-center lg:text-right mb-8 lg:mb-0">
                        <div class="inline-block lg:block">
                            <div class="bg-gradient-to-r from-green-600 to-emerald-600 text-white px-6 py-2 rounded-full text-lg font-semibold mb-4">
                                2015
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Pengakuan Industri</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Meraih penghargaan "Best Interior Design Studio" dan menjadi partner resmi brand furniture internasional premium untuk market Indonesia.
                            </p>
                            <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100">
                                <div class="text-green-600 font-semibold">Pencapaian:</div>
                                <div class="text-gray-700">3 penghargaan nasional, 200+ proyek</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Node -->
                    <div class="flex-shrink-0 relative z-10">
                        <div class="w-16 h-16 bg-white border-4 border-green-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 lg:pl-12 text-center lg:text-left">
                        <!-- Empty space for alternating layout -->
                    </div>
                </div>

                <!-- 2018 - Digital Innovation -->
                <div class="relative flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="lg:w-1/2 lg:pr-12 text-center lg:text-right order-2 lg:order-1">
                        <!-- Empty space for alternating layout -->
                    </div>
                    
                    <!-- Timeline Node -->
                    <div class="flex-shrink-0 relative z-10 order-1 lg:order-2">
                        <div class="w-16 h-16 bg-white border-4 border-yellow-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 lg:pl-12 text-center lg:text-left mb-8 lg:mb-0 order-3">
                        <div class="inline-block lg:block">
                            <div class="bg-gradient-to-r from-yellow-600 to-orange-600 text-white px-6 py-2 rounded-full text-lg font-semibold mb-4">
                                2018
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Inovasi Digital</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Meluncurkan platform digital untuk visualisasi 3D real-time dan sistem tracking progress project yang memungkinkan klien memantau perkembangan secara live.
                            </p>
                            <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100">
                                <div class="text-yellow-600 font-semibold">Pencapaian:</div>
                                <div class="text-gray-700">Platform digital, 500+ proyek</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 2020 - Adaptation -->
                <div class="relative flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="lg:w-1/2 lg:pr-12 text-center lg:text-right mb-8 lg:mb-0">
                        <div class="inline-block lg:block">
                            <div class="bg-gradient-to-r from-red-600 to-pink-600 text-white px-6 py-2 rounded-full text-lg font-semibold mb-4">
                                2020
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Adaptasi Pandemi</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Mengadaptasi layanan konsultasi virtual dan sistem kontrak online, mempertahankan kualitas layanan premium di masa challenging sambil tetap melayani klien dengan aman.
                            </p>
                            <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100">
                                <div class="text-red-600 font-semibold">Pencapaian:</div>
                                <div class="text-gray-700">100% layanan digital, 700+ proyek</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Timeline Node -->
                    <div class="flex-shrink-0 relative z-10">
                        <div class="w-16 h-16 bg-white border-4 border-red-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 lg:pl-12 text-center lg:text-left">
                        <!-- Empty space for alternating layout -->
                    </div>
                </div>

                <!-- 2025 - Present -->
                <div class="relative flex flex-col lg:flex-row items-center lg:items-start">
                    <div class="lg:w-1/2 lg:pr-12 text-center lg:text-right order-2 lg:order-1">
                        <!-- Empty space for alternating layout -->
                    </div>
                    
                    <!-- Timeline Node -->
                    <div class="flex-shrink-0 relative z-10 order-1 lg:order-2">
                        <div class="w-16 h-16 bg-white border-4 border-purple-500 rounded-full flex items-center justify-center shadow-lg">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <div class="lg:w-1/2 lg:pl-12 text-center lg:text-left mb-8 lg:mb-0 order-3">
                        <div class="inline-block lg:block">
                            <div class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-2 rounded-full text-lg font-semibold mb-4">
                                2025
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-gray-900 mb-4">Era Masa Kini</h3>
                            <p class="text-gray-600 leading-relaxed mb-4">
                                Kini menjadi studio desain interior luxury terdepan dengan 25+ desainer expert, mengerjakan 1000+ proyek sukses, dan melayani klien premium di seluruh Indonesia dengan standar internasional.
                            </p>
                            <div class="bg-white p-4 rounded-xl shadow-lg border border-gray-100">
                                <div class="text-purple-600 font-semibold">Saat Ini:</div>
                                <div class="text-gray-700">1000+ proyek, 25 desainer, 99% kepuasan klien</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-white relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-purple-600 font-semibold text-sm uppercase tracking-wider">Nilai-Nilai Kami</span>
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-gray-900 mt-2 mb-6">
                Prinsip Yang Kami Pegang
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Setiap desain yang kami ciptakan didasarkan pada nilai-nilai fundamental yang telah memandu perjalanan kami selama bertahun-tahun.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center group">
                <div class="w-20 h-20 gradient-bg rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-semibold text-gray-900 mb-3">Kualitas Premium</h3>
                <p class="text-gray-600">Setiap detail dikerjakan dengan standar internasional dan material berkualitas tinggi.</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-semibold text-gray-900 mb-3">Kepuasan Klien</h3>
                <p class="text-gray-600">Prioritas utama kami adalah memastikan setiap klien mendapatkan hasil yang melebihi ekspektasi.</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-semibold text-gray-900 mb-3">Inovasi Berkelanjutan</h3>
                <p class="text-gray-600">Selalu mengikuti tren global dan mengadopsi teknologi terbaru dalam setiap project.</p>
            </div>
            
            <div class="text-center group">
                <div class="w-20 h-20 bg-yellow-500 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-heading font-semibold text-gray-900 mb-3">Ketepatan Waktu</h3>
                <p class="text-gray-600">Komitmen kuat untuk menyelesaikan setiap project sesuai timeline yang disepakati.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 relative overflow-hidden">
    <div class="absolute inset-0 gradient-bg">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-4xl lg:text-5xl font-heading font-bold text-white mb-6">
                Jadilah Bagian dari Sejarah Kami
            </h2>
            <p class="text-xl text-purple-100 mb-10">
                Mari bergabung dengan ribuan klien yang telah mempercayakan ruang impian mereka kepada kami. Saatnya mewujudkan visi desain interior luxury Anda.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="group bg-white text-purple-900 px-8 py-4 rounded-2xl font-semibold hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105 shadow-2xl inline-flex items-center justify-center">
                    <svg class="mr-2 h-5 w-5 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Konsultasi Sekarang
                </a>
                
                <a href="{{ route('portfolio') }}" class="group glass-bg text-white px-8 py-4 rounded-2xl font-semibold hover:bg-white hover:bg-opacity-20 transition-all duration-300 transform hover:scale-105 inline-flex items-center justify-center">
                    <svg class="mr-2 h-5 w-5 group-hover:rotate-12 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Lihat Karya Kami
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced scroll animations for timeline and sections
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    // Timeline items animation
    const timelineObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateX(0)';
                
                // Add pulse effect to timeline dots
                const dot = entry.target.querySelector('.timeline-dot');
                if (dot) {
                    dot.style.animation = 'pulse 2s infinite';
                }
            }
        });
    }, {
        threshold: 0.3
    });

    // Values cards staggered animation
    const valuesObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const cards = entry.target.querySelectorAll('.value-card');
                cards.forEach((card, index) => {
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0) scale(1)';
                    }, index * 200);
                });
            }
        });
    }, {
        threshold: 0.2
    });

    // Initialize animations
    const animatedElements = document.querySelectorAll('h1, h2, h3, p, .timeline-item, .achievement-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        observer.observe(el);
    });

    // Timeline specific animations
    const timelineItems = document.querySelectorAll('.timeline-item');
    timelineItems.forEach((item, index) => {
        item.style.opacity = '0';
        item.style.transform = index % 2 === 0 ? 'translateX(-50px)' : 'translateX(50px)';
        item.style.transition = 'all 0.8s cubic-bezier(0.4, 0, 0.2, 1)';
        timelineObserver.observe(item);
    });

    // Values section
    const valuesSection = document.querySelector('.values-section');
    if (valuesSection) {
        const valueCards = valuesSection.querySelectorAll('.value-card');
        valueCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px) scale(0.9)';
            card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        });
        valuesObserver.observe(valuesSection);
    }

    // Parallax effect for floating elements
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const floatingElements = document.querySelectorAll('.animate-blob');
        
        floatingElements.forEach((element, index) => {
            const speed = 0.3 + (index * 0.1);
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    });

    // Enhanced hover effects
    const hoverElements = document.querySelectorAll('.timeline-item, .achievement-card, .value-card');
    hoverElements.forEach(element => {
        element.addEventListener('mouseenter', function() {
            this.style.transform = this.style.transform + ' scale(1.02)';
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });

        element.addEventListener('mouseleave', function() {
            this.style.transform = this.style.transform.replace(' scale(1.02)', '');
            this.style.transition = 'all 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
        });
    });
});
</script>
@endsection