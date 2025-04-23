<form id="form-delete" action="{{ route('dashboard.berita.destroy', $berita) }}" method="post">
    @method('delete')
    @csrf
</form>

<div class="d-flex gap-2">
    <button id="button-show" data-url="{{ route('dashboard.berita.show', $berita) }}" type="button" class="btn btn-icon btn-round btn-info">
        <i class="fas fa-info-circle"></i>
    </button>
    <a href="{{ route('dashboard.berita.edit', $berita) }}" type="button" class="btn btn-icon btn-round btn-warning">
        <i class="fas fa-edit text-white"></i>
    </a>
    <button id="button-delete" type="button" class="btn btn-icon btn-round btn-danger">
        <i class="fa fa-trash"></i>
    </button>
</div>