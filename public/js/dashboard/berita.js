import { showData, deleteData } from "./getInfoOne.js";


$(document).ready(function () {
    const beritaDataTable = $('#berita-datatable');

    const datatable = beritaDataTable.DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url: beritaDataTable.attr('data-url'),
            data: function(d) {
                // * filter data jika nanti diperlukan
                // console.log(d);
                // if (inputSelectStatus.value !== null && inputSelectStatus.value !== '') {
                //     d.Status = inputSelectStatus.value;
                // }

                // if (inputStartDate.value !== null && inputStartDate.value !== '') {
                //     d.start_date  = inputStartDate.value;
                // }
                // if (inputEndDate.value !== null && inputEndDate.value !== '') {
                //     d.end_date  = inputEndDate.value;
                // }
            }
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'Photo', name: 'Photo', searchable: false },
            { data: 'Judul', name: 'Judul', searchable: true },
            { data: 'Status', name: 'Status', searchable: false },
            { data: 'Kategory', name: 'Kategory', searchable: false },
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
                    <img
                        src="${data.poster}"
                        alt="User Photo" class="img-fluid mb-3"
                        width="300px">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">
                                    Judul
                                </div>
                                <div class="col-md-8">
                                    : ${data.title}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">
                                    Status
                                </div>
                                <div class="col-md-8">
                                    : ${data.is_published
                                        ? '<span class="badge badge-success">Publish</span>'
                                        : '<span class="badge badge-danger">Draft</span>'}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item summernote-content">
                            ${data.content}
                        </li>
                    </ul>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">
                                    Tanggal Buat
                                </div>
                                <div class="col-md-8">
                                    : ${data.created_at}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 font-weight-bold">
                                    Tanggal Perbaharui
                                </div>
                                <div class="col-md-8">
                                    : ${data.updated_at}
                                </div>
                            </div>
                        </li>
                    </ul>
                `;
                modalBody.innerHTML = element;
            });

            // * action delete
            deleteData(row);
        }
    });

}); // ? ready document
