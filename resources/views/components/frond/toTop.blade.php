<div class="fixed bottom-10 right-8 z-[99]">
    <button id="toTop" onclick="scrollToTop()" class="bg-yellow-400 hover:bg-primary-dark text-white px-4 py-3 rounded-md shadow-lg hidden">
        <i class="fa-solid fa-angle-up"></i>
    </button>
    <a href="https://wa.me/+6281234567890" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-4 py-3.5 rounded-md shadow-lg flex justify-center mt-4">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>
<script>
    // Show button when user scrolls down 100px
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        const button = document.getElementById("toTop");
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 100) {
            button.classList.remove("hidden");
        } else {
            button.classList.add("hidden");
        }
    }

    // Scroll to top when button clicked
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
