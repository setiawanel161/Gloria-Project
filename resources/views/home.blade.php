<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css','resources/js/app.js'])
  </head>
  <body class="bg-amber-50">
    <x-homepage-navbar />
    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-20 lg:px-12">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">GLORIA FUNERAL SERVICE</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48">"Memberi Yang Terbaik Untuk Yang Terkasih" dalam mengurus segala kebutuhan terkait layanan kedukaan.</p>
            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="/services" class="inline-flex justify-center items-center py-4 px-6 text-lg font-bold text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    Layanan
                    <svg class="ml-2 -mr-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a> 
            </div>
            <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                <span class="font-bold text-xl text-gray-600 uppercase">MITRA</span>
                <div class="w-1/2 h-1 bg-yellow-200 mx-auto mt-2"></div>
                <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 space-x-6 lg:flex-nowrap space-y-4 lg:space-y-0">
                    <a href="#" class="hover:text-gray-400 dark:hover:text-gray-400 font-bold text-lg text-gray-600 uppercase">RSPAU Dr. S. Hardjolukito</a>
                    <a href="#" class="hover:text-gray-400 dark:hover:text-gray-400 font-bold text-lg text-gray-600 uppercase">RS Hermina Yogya</a>
                    <a href="#" class="hover:text-gray-400 dark:hover:text-gray-400 font-bold text-lg text-gray-600 uppercase">RSUD Kota Yogyakarta</a>
                    <a href="#" class="hover:text-gray-400 dark:hover:text-gray-400 font-bold text-lg text-gray-600 uppercase">RS Sedayu General Hospital</a>
                </div>
            </div> 
        </div>
    </section>
    <section class="px-4 mx-auto max-w-screen-lg">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-center gap-x-8 gap-y-8 px-4 py-24 sm:px-6 sm:py-32 lg:max-w-7xl lg:grid-cols-2 lg:px-8">
            <div>
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Layanan Gloria</h2>
              <p class="mt-4 text-gray-500">Kami adalah penyedia layanan lengkap untuk keperluan pemakaman dengan profesionalisme dan kepedulian. Kami menawarkan penjualan peti jenazah berkualitas, layanan pemandian dan periasan jenazah, serta ambulans mobil jenazah untuk keperluan transportasi. Selain itu, kami juga menyediakan bunga & dekorasi untuk prosesi penghormatan terakhir serta layanan pengawetan dan formalin jenazah guna menjaga kondisi jenazah. Dengan pengalaman dan dedikasi, kami siap membantu keluarga dalam momen duka dengan pelayanan terbaik.</p>
        
              <dl class="mt-16 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 sm:gap-y-16 lg:gap-x-8">
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Penjualan Peti Jenazah</dt>
                  <dd class="mt-2 text-sm text-gray-500">Kami menyediakan berbagai macam peti sesuai dengan budget dan model.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Pemandian dan Periasan Jenazah</dt>
                  <dd class="mt-2 text-sm text-gray-500">Kami memiliki tim yang berpengalaman dalam melakukan pemandian dan periasan jenazah.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Ambulance Mobil Jenazah</dt>
                  <dd class="mt-2 text-sm text-gray-500">Dibawah 30 Km Rp. 250.000, Diatas 30 Km dihitung Rp. 8.000/Km</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Bunga & Dekorasi</dt>
                  <dd class="mt-2 text-sm text-gray-500">Kami menyediakan berbagai jenis bunga sesuai keinginan anda untuk keperluan kedukaan. Seperti Bunga Salib, Bunga Tabur, Bunga Tangan, dll.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Paket Kedukaan</dt>
                  <dd class="mt-2 text-sm text-gray-500">Paket Kedukaan mulai dari loss budget hingga Paket Presidensial di atas 30 jt, kami siap melayani.</dd>
                </div>
                <div class="border-t border-gray-200 pt-4">
                  <dt class="font-medium text-gray-900">Pengawetan dan Formalin Jenazah</dt>
                  <dd class="mt-2 text-sm text-gray-500">Dilakukan oleh tim yang sudah berpengalaman.</dd>
                </div>
              </dl>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 sm:gap-6 lg:gap-8">
              <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-feature-03-detail-01.jpg" alt="Walnut card tray with white powder coated steel divider and 3 punchout holes." class="rounded-lg bg-gray-100">
              <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-feature-03-detail-02.jpg" alt="Top down view of walnut card tray with embedded magnets and card groove." class="rounded-lg bg-gray-100">
              <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-feature-03-detail-03.jpg" alt="Side of walnut card tray with card groove and recessed card area." class="rounded-lg bg-gray-100">
              <img src="https://tailwindui.com/plus-assets/img/ecommerce-images/product-feature-03-detail-04.jpg" alt="Walnut card tray filled with cards and card angled in dedicated groove." class="rounded-lg bg-gray-100">
            </div>
        </div>
      
    </section>
    <x-homepage-footer />
  </body>
</html>
