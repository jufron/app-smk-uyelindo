<section class="relative z-50" x-data="{ showBanner: false, dismissed: false }" @scroll.window="if(!dismissed) showBanner = window.pageYOffset > {{ $scrollPosition ?? 500 }}">
     <!-- Component -->
     <div x-show="showBanner"
          x-cloak
          x-transition:enter="transition ease-out duration-300"
          x-transition:enter-start="opacity-0 transform translate-y-full"
          x-transition:enter-end="opacity-100 transform translate-y-0"
          x-transition:leave="transition ease-in duration-300"
          x-transition:leave-start="opacity-100 transform translate-y-0"
          x-transition:leave-end="opacity-0 transform translate-y-full"
          class="fixed bottom-0 mx-auto flex w-full items-center justify-center border-t-2 border-black bg-yellow-300 py-2">
       <!-- Banner Text -->
       <p class="md:mx-auto text-center mr-2">
         🎓 Daftar sekarang! <a href="{{ route('ppdb') }}" class="font-bold underline hover:text-black">Klik untuk mendaftar</a>
       </p>
       <!-- Close Button -->
       <button @click="showBanner = false; dismissed = true" class="absolute right-4 top-1/2 -translate-y-1/2 text-black hover:text-gray-700">
         <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
         </svg>
       </button>
     </div>
</section>
