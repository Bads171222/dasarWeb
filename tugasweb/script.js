$(document).ready(function() {
    $('#gameForm').on('submit', function(event) {
        event.preventDefault(); // Mencegah pengiriman form default

        var formData = new FormData(this); // Mengambil data form

        $.ajax({
            url: 'process.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(data) {
                $('#gameList').append(data); // Menambahkan game ke daftar
                $('#gameForm')[0].reset(); // Mengatur ulang form
                animateOnScroll(); // Memanggil fungsi animasi
            }
        });
    });

    // Fungsi untuk memicu animasi saat di-scroll
    function animateOnScroll() {
        $('.scroll-animate').each(function() {
            var elementTop = $(this).offset().top;
            var windowBottom = $(window).scrollTop() + $(window).height();

            if (elementTop < windowBottom) {
                $(this).addClass('visible'); // Menambahkan kelas visible
            }
        });
    }

    // Mengatur event scroll
    $(window).on('scroll', function() {
        animateOnScroll();
    });

    // Memanggil fungsi saat halaman pertama kali dimuat
    animateOnScroll();
});