import showDetail from "./getInfo.js";

$(document).ready(function () {

    $("#pertanyaan-pendaftar-datatables").DataTable({});

}); // ? ready document


// ? button show
showDetail(function (data, modalContent) {
    console.log(data);
    const element = `
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <div class="col-md-6 font-weight-bold">
                Pertanyaan
            </div>
            <div class="col-md-6">
                ${data.pertanyaan}
            </div>
        </li>
        <li class="list-group-item">
            <div class="col-md-6 font-weight-bold">
                Jawaban
            </div>
            <div class="col-md-6">
                ${data.jawaban}
            </div>
        </li>
        <li class="list-group-item">
            <div class="col-md-6 font-weight-bold">
                Tanggal Buat
            </div>
            <div class="col-md-6">
                ${data.created_at}
            </div>
        </li>
        <li class="list-group-item">
            <div class="col-md-6 font-weight-bold">
                Tanggal Perbaharui
            </div>
            <div class="col-md-6">
                ${data.updated_at}
            </div>
        </li>
    </ul>
    `;
    modalContent.innerHTML = element;
});
