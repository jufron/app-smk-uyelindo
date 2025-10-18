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
            { data: 'Photo', name: 'Photo', searchable: false },
            { data: 'Nama Lengkap', name: 'Nama Lengkap', searchable: true, className: 'white-space' },
            { data: 'Telepon', name: 'Telepon', searchable: false },
            { data: 'Email', name: 'Email', searchable: false },
            { data: 'Alamat', name: 'Alamat', searchable: false },
            { data: 'Agama', name: 'Agama', searchable: false },
            { data: 'Tanggal Buat', name: 'Tanggal Buat', searchable: false },
            { data: 'Tanggal Pembaharuan', name: 'Tanggal Pembaharuan', searchable: false },
            { data: 'Aksi', name: 'Aksi', searchable: false },
        ],
        order: [[3, 'desc']],
        rowCallback: function(row, dataTablle) {

            // * action show
            showData(row, function (data, modalBody) {
                console.log(data);
                const element = `
                <div class="container-fluid p-3">
                    <div class="row align-items-center mb-4 border-bottom pb-3">
                        <div class="col-auto">
                            <img
                                src="${data.foto}"
                                alt="Foto Profil"
                                class="rounded-circle border"
                                style="width: 100px; height: 100px; object-fit: cover;"
                            >
                        </div>
                        <div class="col">
                            <h4 class="mb-0 fw-bold">${data.nama_lengkap}</h4>
                            <p class="text-muted">NIP : ${data.nip}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h5 class="mb-3 text-primary border-bottom pb-1">Informasi Kepegawaian & Identitas</h5>
                            <div class="row g-2">
                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">NUPTX/PTX:</div>
                                    <div class="col-7">${data.nuptx} / ${data.ptx}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">SK Pengangkatan:</div>
                                    <div class="col-7">${data.sk_pengangkatan}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Lembaga Pengangkatan:</div>
                                    <div class="col-7">${data.lembaga_pengangkatan}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Sumber Gaji:</div>
                                    <div class="col-7">${data.sumber_gaji}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Warga Negara/NIK:</div>
                                    <div class="col-7">${data.status_kewarganegaraan} / ${data.nik}</div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                            <h5 class="mb-3 text-primary border-bottom pb-1">Informasi Pribadi & Kontak</h5>

                            <div class="row g-2">
                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Agama/Status Kawin:</div>
                                    <div class="col-7">${data.agama} / ${data.status_perkawinan}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Nama Ibu Kandung:</div>
                                    <div class="col-7">${data.nama_ibu_kandung}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Telepon:</div>
                                    <div class="col-7">${data.telepon}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-5 text-muted fw-bold">Email:</div>
                                    <div class="col-7">${data.email}</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-12">
                            <h5 class="mb-3 text-primary border-bottom pb-1">Informasi Alamat</h5>

                            <div class="row g-2">

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-lg-2 col-4 text-muted fw-bold">Alamat:</div>
                                    <div class="col-lg-10 col-8">${data.alamat}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-lg-2 col-4 text-muted fw-bold">RT/RW/Dusun:</div>
                                    <div class="col-lg-10 col-8">${data.rt} / ${data.rw} / ${data.nama_dusun}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-lg-2 col-4 text-muted fw-bold">Desa/Kecamatan:</div>
                                    <div class="col-lg-10 col-8">${data.desa_kelurahan} / ${data.kecamatan}</div>
                                </div>

                                <div class="col-12 d-flex mb-2">
                                    <div class="col-lg-2 col-4 text-muted fw-bold">Kode Pos:</div>
                                    <div class="col-lg-10 col-8">${data.kode_pos}</div>
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
