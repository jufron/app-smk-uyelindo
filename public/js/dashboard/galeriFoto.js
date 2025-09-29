import { showData, deleteData } from "./getInfoOne.js";

$(document).ready(function () {
    // * filter input
    const inputSelectStatus = document.querySelector('#status');
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
            { data: 'Deskripsi', name: 'Deskripsi', searchable: true, className: 'white-space' },
            { data: 'Status', name: 'Status', searchable: false },
            { data: 'Tanggal Buat', name: 'Tanggal Buat', searchable: false },
            { data: 'Tanggal Pembaharuan', name: 'Tanggal Pembaharuan', searchable: false },
            { data: 'Aksi', name: 'Aksi', searchable: false },
        ],
        order: [[3, 'desc']],
        rowCallback: function(row, dataTablle) {

            // * action show
            showData(row, function (data, modalBody) {

                const element = `
                    <img
                        src="${data.foto}"
                        alt="User Photo" class="img-fluid mb-3"
                        loading="lazy"
                    />
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
    inputSelectStatus.addEventListener('change', function () {
        datatable.ajax.reload(null, false);
        handleToastlifyPopUp('Filter dengan Status');
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
}); // ? ready document
