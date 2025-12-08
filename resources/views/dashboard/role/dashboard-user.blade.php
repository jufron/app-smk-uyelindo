<x-layouts.dashboard.app title="Home">
    {{-- * my style --}}
    <x-slot:myStyle>

    </x-slot:myStyle>

    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
            <h1 class="fw-bold mb-3 text-uppercase">Dashboard</h1>
        </div>
    </div>

    {{-- * my script --}}
    <x-slot:myScript>

        {{-- ? apex chart lib --}}
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

        <script src="{{ asset('js/ppdbChart.js') }}"></script>
        <script src="{{ asset('js/agamaChart.js') }}"></script>
        <script src="{{ asset('js/jenisKelaminChart.js') }}"></script>

    </x-slot:myScript>
</x-layouts.dashboard>
