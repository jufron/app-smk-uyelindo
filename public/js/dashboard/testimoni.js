import { showData, deleteData } from "./getInfoOne.js";


$(document).ready(function () {
    // * filter input
    const inputSelectStatus = document.querySelector('#status');
    const inputSelectTahun = document.querySelector('#tahun');
    const inputStartDate = document.querySelector('#start_date');
    const inputEndDate = document.querySelector('#end_date');

    // * button filter
    const buttonFilterReset = document.querySelector('#button-filter-reset');

    const beritaDataTable = $('#testimoni-datatable');

    const datatable = beritaDataTable.DataTable({
        serverSide: true,
        processing: true,
        autoWidth: false,
        ajax: {
            url: beritaDataTable.attr('data-url'),
            data: function(d) {
                // * filter data jika nanti diperlukan
                if (inputSelectTahun.value !== null && inputSelectTahun.value !== '') {
                    d.tahun = inputSelectTahun.value;
                }
                if (inputSelectStatus.value !== null && inputSelectStatus.value !== '') {
                    d.status = inputSelectStatus.value;
                }
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
            { data: 'Tahun Lulus', name: 'Tahun Lulus', searchable: false },
            { data: 'Status', name: 'Status', searchable: false },
            { data: 'Pekerjaan', name: 'Pekerjaan', searchable: false },
            { data: 'Tanggal Buat', name: 'Tanggal Buat', searchable: false },
            { data: 'Tanggal Pembaharuan', name: 'Tanggal Pembaharuan', searchable: false },
            { data: 'Aksi', name: 'Aksi', searchable: false },
        ],
        order: [[3, 'desc']],
        rowCallback: function(row, dataTablle) {
            // console.log(dataTablle);

            // * action show
            showData(row, function (data, modalBody) {
                // console.log(data);

                const element = `
                    <img
                        src="${data.avatar}"
                        alt="User Photo" class="img-fluid mb-3"
                        loading="lazy"
                        width="300px"
                    />
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Nama Lengkap
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.nama}
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Pekerjaan
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.pekerjaan}
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Tahun Angkatan
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.tahun}
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Status
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.status
                                    ? '<span class="badge badge-success">Publish</span>'
                                    : '<span class="badge badge-danger">Draft</span>'}
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Content
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.content}
                            </div>
                        </li>
                    </ul>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Tanggal Buat
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                : ${data.created_at}
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="col-6 col-sm-6 col-md-4">
                                Tanggal Perbaharui
                            </div>
                            <div class="col-6 col-sm-6 col-md-8 col-xl-9">
                                ${data.updated_at}
                            </div>
                        </li>
                    </ul>
                `;
                modalBody.innerHTML = element;
            });

            // * action delete
            deleteData(row);
        }
    }); // ? end this table

    // * handle button reset
    buttonFilterReset.addEventListener('click', function () {
        inputSelectStatus.value = '';
        inputSelectTahun.value = '';
        inputEndDate.value = '';
        inputStartDate.value = '';

        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Seluruh Filter Direset');
    });

    // * filter handler
    inputSelectStatus.addEventListener('change', function () {
        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Filter dengan Status');
    });
    inputSelectTahun.addEventListener('change', function () {
        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Filter dengan Tahun');
    });
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
});
