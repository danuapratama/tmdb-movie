</main>

<footer style="background:var(--footer);">
    <!-- Grid container -->
    <div class="container pt-4 pb-0">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="footer-brand d-grid col-lg-6 col-md-12 mb-4 mb-md-0">
                <!-- <span class="text-dark rounded fs-3 fw-bold footer-brand-img">DBM</span> -->
                <div class="d-block mb-4">
                    <span class="text-capitalize fs-3 fw-bold p-0 mb-2 d-block">DBMovies</span>
                    <span class="mb-2 p-0 d-block">
                        Belajar Menggunakan API dengan Bahasa Pemrograman PHP
                    </span>
                    <a href="https://developers.themoviedb.org/3" target="_blank" class="text-decoration-none">developers.themoviedb.org/3 <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:12px;"></i></a>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col mb-4 mb-md-0">
                <h5 class="footer-nav text-capitalize mb-3">Links</h5>

                <ul class="list-unstyled mb-0">
                    <li class="mb-2 footer-link">
                        <a href="<?php echo url_dasar() ?>#" class="">Popular</a>
                    </li>
                    <li class="mb-2 footer-link">
                        <a href="<?php echo url_dasar() ?>/upcoming" class="">Up Coming</a>
                    </li>
                    <li class="mb-2 footer-link">
                        <a href="#" class="">About</a>
                    </li>
                    <li class="mb-2 footer-link">
                        <a href="https://www.themoviedb.org/" target="_blank" class="">TMDB Movie</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col mb-0 mb-md-0">
                <h5 class="footer-nav text-capitalize mb-3">Socials</h5>

                <ul class="list-unstyled">
                    <li class="mb-2 footer-link">
                        <a href="https://danupratama.site/" target="_blank" class=""><i class="fa-solid fa-globe p-0 me-2"></i>
                            Portfolio
                        </a>
                    </li>
                    <li class="mb-2 footer-link">
                        <a href="https://github.com/danuapratama" target="_blank" class=""><i class="fa-brands fa-github me-2"></i>
                            GitHub
                        </a>
                    </li>
                    <li class="mb-2 footer-link">
                        <a href="https://instagram.com/danuapratama" target="_blank" class=""><i class="fa-brands fa-instagram me-2"></i>
                            Instagram
                        </a>
                    </li>
                    <li class="footer-link">
                        <a href="mailto:danupratama.dev@gmail.com" class=""><i class="fa-solid fa-envelope me-2"></i>
                            Email
                        </a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
        <hr class="p-0 m-0" style="color: var(--font-black);">

        <div class="text-center p-3 fw-bold" style="font-size:14.5px;">
            &#169;<script type='text/javascript'>
                var creditsyear = new Date();
                document.write(creditsyear.getFullYear());
            </script> DBMovies | Danu Pratama
        </div>
    </div>
    <!-- Grid container -->
</footer>

<!--=============== MAIN JS ===============-->
<!-- <script src="/js/main.js"></script> -->
<script>
    // ========== MULTIPLE LOAD-MORE BUTTON ========== //
    function func() {
        document.getElementById('load').classList.add('active');
        document.getElementById('btn_more').classList.add('no-active');
    }
    // ====== END ====== //
</script>
</body>

</html>