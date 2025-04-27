<x-layouts.frond.app
    title="Testimoni SMK Uyelindo Kupang - Cerita Alumni dan Orang Tua Siswa"
    metaDescription="Simak testimoni dari alumni, siswa, dan orang tua tentang pengalaman mereka di SMK Uyelindo Kupang. Bukti nyata kualitas pendidikan vokasi kami."
    metaKeywords="Testimoni SMK Uyelindo, Alumni SMK Kupang, Cerita Alumni Sekolah Vokasi, Pengalaman Sekolah SMK"
    metaOgTitle="Testimoni Alumni & Orang Tua - SMK Uyelindo Kupang"
    metaOgDescription="Pengalaman dan testimoni alumni, siswa, dan orang tua tentang pendidikan dan pembelajaran di SMK Uyelindo Kupang."
    metaUrl="{{ url('/testimoni') }}"
    metaTwitterTitle="Testimoni SMK Uyelindo Kupang"
    metaTwitterDescription="Testimoni alumni dan orang tua siswa SMK Uyelindo Kupang tentang pendidikan berkualitas dan lingkungan pembelajaran yang positif."
    >
    <x-frond.navbar />

    <section class="container mx-auto max-w-6xl px-4 py-10 my-20">
        <h3 class="text-gray-800 py-10 text-5xl text-center font-bold">Apa Kata Mereka?</h3>
        <div class="md:columns-2 lg:columns-3 gap-6 p-4 sm:p-1 mt-2">
            @foreach ($daftar_testimoni as $testimoni)
            <div class="animate-in zoom-in duration-200">
                <div class="ring-1 rounded-lg flex flex-col space-y-2 p-4 break-inside-avoid mb-6 bg-white hover:ring-2 ring-yellow-100 hover:ring-yellow-300 transform duration-200 hover:shadow-yellow-300 hover:shadow-md z-0 relative">
                    <div class="flex flex-col break-inside-avoid-page z-0 relative">
                        <div class="flex justify-between">
                            <div class="flex space-x-6">
                                <div class="flex space-x-4 flex-shrink-0 w-52">
                                    <img 
                                        src="{{ $testimoni->avatar_url }}"
                                        class="w-10 h-10 rounded-full"
                                        loading="lazy"
                                    />
                                    <div>
                                        <div class="font-semibold">
                                            {{ $testimoni->nama_lengkap }}
                                        </div>
                                        <div class="text-sm">
                                            {{ $testimoni->pekerjaan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" target="_blank" class="whitespace-pre-line break-inside-avoid-page">
                            {{ $testimoni->content }}
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- ? link --}}
        <div class="my-5">
            {{ $daftar_testimoni->links() }}
        </div>
        {{-- ? link --}}
    </section>

    <x-frond.footer />

    {{-- ? banner --}}
    <x-frond.mini-banner scrollPosition="50" />
</x-layouts.frond.app>
