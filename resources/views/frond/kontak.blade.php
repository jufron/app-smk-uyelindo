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
    <section class="contact-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <h2 class="mb-4">Hubungi Kami</h2>

                        <form class="contact-form me-lg-5 pe-lg-3" action="" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <textarea name="message" rows="5" class="form-control" placeholder="Pesan"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>

                    <div class="col-lg-6 col-12 mt-5 mt-lg-0">
                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <h5 class="mb-3">Alamat Sekolah</h5>
                                    <p>Jl. Veteran No. 108, Fatululi, Kec. Oebobo, Kota Kupang, Nusa Tenggara Tim.</p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <h5 class="mb-3">Kontak</h5>
                                    <p>
                                        <i class="bi bi-telephone-fill me-2"></i>
                                        (0380) 8438423
                                    </p>
                                    <p>
                                        <i class="bi bi-envelope-fill me-2"></i>
                                        smkuyelindo@gmail.com
                                    </p>
                                </div>
                            </div>

                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <h5 class="mb-3">Jam Operasional</h5>
                                    <p>Senin - Jumat: 07.00 - 14.00 WITA</p>
                                    <p>Sabtu: 07.00 - 12.00 WITA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="maps-section">
            <div class="container-fluid p-0">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.8655489046007!2d123.60775937495834!3d-10.17239848951565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c569c9f903c5fab%3A0x91d4e7a15f4d301e!2sSMK%20UYELINDO%20KUPANG!5e0!3m2!1sid!2sid!4v1701414269197!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

    <x-frond.footer />
</x-layouts.frond.app>
