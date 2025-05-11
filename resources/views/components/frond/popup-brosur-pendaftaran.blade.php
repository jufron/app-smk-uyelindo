<div x-data="{ isOpen: false }" x-init="setTimeout(() => isOpen = true, 5000)" x-cloak>
    {{-- ? Modal backdrop --}}
    <div x-show="isOpen" 
         class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm z-[99] flex items-center justify-center"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">

        {{-- ? Modal content --}}
        <div class="relative max-w-4xl w-full mx-4">
            {{-- ? Close button --}}
            <button @click="isOpen = false" class="fixed top-4 right-4 bg-white rounded-full p-2 shadow-lg hover:bg-gray-100">
                <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            {{-- ? Image container --}}
            <div class="rounded-lg">
                <img 
                    src="{{ $brosur_pendaftaran ?  asset('storage/' . $brosur_pendaftaran) : asset('img/defaultsvg.svg') }}"
                     alt="Brosur Pendaftaran"
                     class="w-full mx-auto h-auto object-contain rounded"
                     loading="lazy"
                     @click.away="isOpen = false">
            </div>
        </div>
    </div>
</div>
