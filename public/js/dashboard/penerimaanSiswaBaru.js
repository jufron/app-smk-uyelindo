import { showData, deleteData } from "./getInfoOne.js";

$(document).ready(function () {
    // * filter input
    const inputStartDate = document.querySelector('#start_date');
    const inputEndDate = document.querySelector('#end_date');
    // * button filter
    const buttonFilterReset = document.querySelector('#button-filter-reset');

    const beritaDataTable = $('#berita-datatable');

    const datatable = beritaDataTable.DataTable({
        serverSide: true,
        processing: true,
        autoWidth: false,
        ajax: {
            url: beritaDataTable.attr('data-url'),
            data: function(d) {
                // * filter data jika nanti diperlukan
                // console.log(d);
                if (inputStartDate.value !== null && inputStartDate.value !== '') {
                    d.start_date  = inputStartDate.value;
                }
                if (inputEndDate.value !== null && inputEndDate.value !== '') {
                    d.end_date  = inputEndDate.value;
                }
            }
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'Nama Lengkap', name: 'Nama Lengkap', searchable: true, className: 'white-space' },
            { data: 'Nama Panggilan', name: 'Nama Panggilan', searchable: true, className: 'white-space' },
            { data: 'Email', name: 'Email', searchable: false },
            { data: 'Nisn', name: 'Nisn', searchable: false },
            { data: 'Jenis Kelamin', name: 'Jenis Kelamin', searchable: false },
            { data: 'Agama', name: 'Agama', searchable: false },
            { data: 'Nomor Telepon Siswa', name: 'Nomor Telepon Siswa', searchable: false },
            { data: 'Tanggal Buat', name: 'Tanggal Buat', searchable: false },
            { data: 'Tanggal Pembaharuan', name: 'Tanggal Pembaharuan', searchable: false },
            { data: 'Aksi', name: 'Aksi', searchable: false },
        ],
        order: [[3, 'desc']],
        rowCallback: function(row, dataTablle) {

            // * action show
            showData(row, function (data, modalBody) {
                const element = `
                    <div class="container-fluid p-3">
                        <div class="row align-items-center mb-4 border-bottom pb-3">
                            <div class="col">
                                <h4 class="mb-0 fw-bold">${data.nama_lengkap}</h4>
                                <p class="text-muted">NISN: ${data.nisn}</p>
                                <p class="text-muted">Tinggal Dengan: ${data.tinggal_dengan}</p>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h5 class="mb-3 text-primary border-bottom pb-1">Informasi Pribadi & Sekolah</h5>
                            <div class="row g-2">
                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nama Lengkap:</div>
                                    <div class="col-7">${data.nama_lengkap}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nama Panggilan:</div>
                                    <div class="col-7">${data.nama_panggilan}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Tanggal/Tempat Lahir:</div>
                                    <div class="col-7">${data.tempat_lahir}, ${data.tanggal_lahir}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Jenis Kelamin:</div>
                                    <div class="col-7">${data.jenis_kelamin}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Agama:</div>
                                    <div class="col-7">${data.agama}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Alamat Siswa:</div>
                                    <div class="col-7">${data.alamat_siswa}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Sekolah Sebelumnya:</div>
                                    <div class="col-7">${data.alamat_sekolah_sebelumnya}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Anak Ke / Status Anak:</div>
                                    <div class="col-7">${data.anak_ke} / ${data.status_anak}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Jumlah Saudara Kandung:</div>
                                    <div class="col-7">${data.jumlah_saudara_kandung}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nomor Telepon Siswa:</div>
                                    <div class="col-7">${data.nomor_telepon_siswa}</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                            <h5 class="mb-3 text-primary border-bottom pb-1">Data Orang Tua / Wali Murid</h5>
                            <div class="row g-2">
                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nama Ayah / Ibu:</div>
                                    <div class="col-7">${data.nama_lengkap_ayah ?? '-'} / ${data.nama_lengkap_ibu ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Pekerjaan Ayah / Ibu:</div>
                                    <div class="col-7">${data.pekerjaan_ayah ?? '-'} / ${data.pekerjaan_ibu ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Pendidikan Ayah / Ibu:</div>
                                    <div class="col-7">${data.pendidikan_ayah ?? '-'} / ${data.pendidikan_ibu ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nomor Telepon Orang Tua:</div>
                                    <div class="col-7">${data.nomor_telepon_orang_tua ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Alamat Orang Tua:</div>
                                    <div class="col-7">${data.alamat_orang_tua ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nama Wali Murid:</div>
                                    <div class="col-7">${data.nama_lengkap_wali_murid ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Pekerjaan Wali Murid:</div>
                                    <div class="col-7">${data.pekerjaan_wali_murid ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Hubungan Dengan Siswa:</div>
                                    <div class="col-7">${data.hubungan_dengan_siswa ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Alamat Wali:</div>
                                    <div class="col-7">${data.alamat_wali_siswa ?? '-'}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nomor HP Wali:</div>
                                    <div class="col-7">${data.nomor_hp_wali ?? '-'}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="mb-3 text-primary border-bottom pb-1">Informasi Pendaftaran</h5>
                                <div class="row g-2">
                                    <div class="col-12 d-flex mb-2">
                                        <div class="col-lg-2 col-4 text-muted fw-bold">Dibuat Pada:</div>
                                        <div class="col-lg-10 col-8">${data.created_at}</div>
                                    </div>

                                    <div class="col-12 d-flex mb-2">
                                        <div class="col-lg-2 col-4 text-muted fw-bold">Diperbarui Pada:</div>
                                        <div class="col-lg-10 col-8">${data.updated_at}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                modalBody.innerHTML = element;
            });

            // * action delete
            deleteData(row);
        }
    }); // ? end init datatable

    // * handle button reset
    buttonFilterReset.addEventListener('click', function () {
        inputSelectStatus.value = '';
        inputEndDate.value = '';
        inputStartDate.value = '';

        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Seluruh Filter Direset');
    });

    // * filter handler
    inputStartDate.addEventListener('change', function () {
        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Filter dengan Tanggal Mulai');
    });
    inputEndDate.addEventListener('change', function () {
        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Filter dengan Tanggal Selesai');
    });

    // * toastify js
    function handleToastlifyPopUp (label) {
        Toastify({
            text: label,
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
              background: "linear-gradient(to right, #00b09b, #96c93d)",
            },
            onClick: function(){} // Callback after click
        }).showToast();
    }
}); // ? ready document
