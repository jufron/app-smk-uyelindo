<x-layouts.frond.app
    title="Struktur Organisasi SMK Uyelindo Kupang - Kepemimpinan Sekolah"
    metaDescription="Lihat struktur organisasi SMK Uyelindo Kupang. Menampilkan susunan kepala sekolah, wakil, dan staf pendukung dalam mendukung operasional dan pengembangan pendidikan."
    metaKeywords="Struktur Organisasi SMK, Kepemimpinan Sekolah, Manajemen SMK Uyelindo, Susunan Organisasi Sekolah, Guru dan Staf SMK"
    metaOgTitle="Struktur Organisasi SMK Uyelindo Kupang"
    metaOgDescription="SMK Uyelindo Kupang memiliki struktur organisasi yang solid, mencakup kepala sekolah, waka, guru produktif, guru normatif, serta staf tata usaha."
    {{-- metaImage="{{ asset('assets/images/struktur-organisasi-preview.jpg') }}" --}}
    metaUrl="{{ url('/struktur-organisasi') }}"
    metaTwitterTitle="Struktur Organisasi SMK Uyelindo Kupang - Tim Pengelola Sekolah"
    metaTwitterDescription="Kenali jajaran pimpinan dan pengelola SMK Uyelindo Kupang yang bertanggung jawab dalam operasional dan pendidikan."
    >
    <x-frond.navbar />

    <section class="my-10 py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">Struktur Oranisasi SMK Uyelindo Kupang</h1>

                <div class="bg-white rounded-lg shadow-lg p-8 mb-8">
                    <div class="flex flex-col items-center">
                        <!-- Kepala Sekolah -->
                        <div class="bg-blue-100 p-4 rounded-lg mb-4 text-center w-64">
                            <h3 class="font-semibold">Kepala Sekolah</h3>
                            <p class="text-sm text-gray-600">Drs. Yohanes Suban Beliu, MM</p>
                        </div>

                        <!-- Level Wakil -->
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4">
                            <div class="bg-green-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Waka Kurikulum</h4>
                                <p class="text-sm text-gray-600">Yohanes D. Nino, S.Pd</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Waka Kesiswaan</h4>
                                <p class="text-sm text-gray-600">Melkior Tukan, S.Pd</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Waka Sarpras</h4>
                                <p class="text-sm text-gray-600">Oktovianus Funan, S.Pd</p>
                            </div>
                            <div class="bg-green-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Waka Humas</h4>
                                <p class="text-sm text-gray-600">Yohanes B. Keraf, S.Pd</p>
                            </div>
                        </div>

                        <!-- Level Kepala Program -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                            <div class="bg-yellow-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Kaprog TKJ</h4>
                                <p class="text-sm text-gray-600">Maria G. Bria, S.Pd</p>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Kaprog RPL</h4>
                                <p class="text-sm text-gray-600">Yuliana Putri, S.Kom</p>
                            </div>
                            <div class="bg-yellow-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Kaprog MM</h4>
                                <p class="text-sm text-gray-600">Antonius Bouk, S.Pd</p>
                            </div>
                        </div>

                        <!-- Guru dan Staf -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Guru</h4>
                                <p class="text-sm text-gray-600">Guru Produktif & Normatif</p>
                            </div>
                            <div class="bg-gray-100 p-3 rounded-lg text-center">
                                <h4 class="font-semibold">Tata Usaha</h4>
                                <p class="text-sm text-gray-600">Staff Administrasi</p>
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
