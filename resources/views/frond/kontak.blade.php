<x-layouts.frond.app
    title="Kontak SMK Uyelindo Kupang - Hubungi Kami"
    metaDescription="Hubungi SMK Uyelindo Kupang untuk informasi lebih lanjut seputar pendaftaran, program keahlian, dan pelayanan sekolah. Kami siap membantu Anda."
    metaKeywords="Kontak SMK Uyelindo, Alamat SMK Kupang, Hubungi Sekolah, Sekolah Vokasi NTT, Info Pendaftaran SMK, Sekolah Kejuruan Kupang"
    metaOgTitle="Kontak SMK Uyelindo Kupang"
    metaOgDescription="Temukan informasi kontak lengkap SMK Uyelindo Kupang, termasuk alamat, email, dan nomor telepon resmi."
    {{-- metaImage="{{ asset('assets/images/kontak-preview.jpg') }}" --}}
    metaUrl="{{ url('/kontak') }}"
    metaTwitterTitle="Kontak Resmi SMK Uyelindo Kupang"
    metaTwitterDescription="Dapatkan informasi lengkap untuk menghubungi SMK Uyelindo Kupang, termasuk lokasi, email, dan nomor telepon."
    >
    <x-frond.navbar />

    <section>
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center" data-aos="fade-up">
                <h2 class="mt-10 text-3xl font-extrabold text-gray-900">Kontak</h2>
                <p class="mt-4 text-lg text-gray-500">Hubungi kami untuk informasi lebih lanjut tentang SMK Uyelindo Kupang. Kami siap membantu menjawab pertanyaan Anda.</p>
            </div>
            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-lg overflow-hidden" data-aos="fade-up">
                        <iframe
                            src="https://maps.google.com/maps?q=smk+uyelindo+kupang&output=embed"
                            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div data-aos="fade-down">
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Alamat</h3>
                                <p class="mt-1 text-gray-600">Jl. Perintis Kemerdekaan I No.9, Oebufu, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur.</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Social Media</h3>
                                    <div class="flex space-x-4 mt-5">
                                        <a href="#" class="text-gray-600 hover:text-blue-600 px-3 py-2 bg-slate-100 rounded-lg"><i class="fab fa-facebook-square text-2xl"></i></a>
                                        <a href="#" class="text-gray-600 hover:text-pink-600 px-3 py-2 bg-slate-100 rounded-lg"><i class="fab fa-instagram text-2xl"></i></a>
                                        <a href="#" class="text-gray-600 hover:text-red-600 px-3 py-2 bg-slate-100 rounded-lg"><i class="fab fa-youtube text-2xl"></i></a>
                                        <a href="#" class="text-gray-600 hover:text-black px-3 py-2 bg-slate-100 rounded-lg"><i class="fab fa-tiktok text-2xl"></i></a>
                                    </div>
                                </div>
                                <div class="border-t border-gray-200 px-6 py-4">
                                <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                                <p class="mt-1 text-gray-600">Email: info@example.com</p>
                                <p class="mt-1 text-gray-600">Phone: +1 23494 34993</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-frond.footer />
    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
