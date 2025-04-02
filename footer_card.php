<footer class="footer py-5 text-white">
    <div class="container px-4 px-lg-5">
        <div class="row gy-4 gx-5 text-center text-md-start">
            <!-- Logo y redes sociales -->
            <div class="col-12 col-md-6 d-flex flex-column flex-md-row align-items-center align-items-md-start border-md-end border-light">
                <img src="assets/img/logo_kaizen.PNG" alt="Logo" height="120" width="150" class="mb-3 mb-md-0 me-md-3">
                <div>
                    <h5 class="text-uppercase mb-3" data-i18n="footer-h4">Síguenos en redes</h5>
                    <p class="mb-3" data-i18n="footer-p">Conéctate con nosotros para más información.</p>
                    <p class="d-flex flex-column flex-sm-row justify-content-center justify-content-md-start gap-2">
                        <a class="social-link" target="_blank" title="Instagram" href="https://www.instagram.com/thekaizentrainer/">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a class="social-link" target="_blank" title="Facebook" href="https://www.facebook.com/eduardojavier.aguilalara">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                    </p>
                </div>
            </div>

            <!-- Enlaces -->
            <div class="col-12 col-md-6">
                <h5 class="text-uppercase mb-3">Enlaces</h5>
                <p>
                    <a class="footer-link" target="_blank" title="Sobre mí" href="index.php?page=about_me">Sobre mí</a>
                </p>
<!--                <p>-->
<!--                    <a class="footer-link" target="_blank" title="Contáctame" href="#">Contáctame</a>-->
<!--                </p>-->
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: #000000;
        border-top: 4px solid #ff4c4c;
    }

    .social-link {
        color: white;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .social-link i {
        margin-right: 8px;
        font-size: 1.3em;
    }

    .social-link:hover {
        color: #ff4c4c;
    }

    .footer-link {
        color: #ff4c4c;
        text-decoration: none;
        font-size: 1.1em;
        font-weight: bold;
        transition: color 0.3s ease;
    }

    .footer-link:hover {
        color: white;
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        .footer .border-md-end {
            border: none !important;
        }
    }
</style>
