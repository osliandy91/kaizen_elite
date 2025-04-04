
<footer class="footer py-5 text-white">
    <div class="container px-4 px-lg-5">
        <div class="row gy-4 gx-lg-5 align-items-center">
            <!-- Logo y redes sociales -->
            <div class="col-12 col-md-6 d-flex flex-column flex-md-row align-items-center align-items-md-start border-md-end border-light">
                <a href="<?= $enlace_index?>"><img src="assets/img/logo_kaizen.PNG" alt="Logo" class="footer-logo"></a>
                <div class="ms-md-4 text-center text-md-start">
                    <h5 class="text-uppercase mb-3" data-i18n="footer-h4">Síguenos en redes</h5>
                    <p class="mb-3" data-i18n="footer-p">Conéctate con nosotros para más información.</p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
                        <a class="social-link" target="_blank" href="https://www.instagram.com/thekaizentrainer/">
                            <i class="bi bi-instagram"></i> Instagram
                        </a>
                        <a class="social-link" target="_blank" href="https://www.tiktok.com/@thekaizentrainer">
                            <i class="bi bi-tiktok"></i> Tiktok
                        </a>
                        <a class="social-link" target="_blank" href="https://www.facebook.com/eduardojavier.aguilalara">
                            <i class="bi bi-facebook"></i> Facebook
                        </a>
                        <a class="social-link" target="_blank" href="https://www.youtube.com/@thekaizentrainer8872">
                            <i class="bi bi-youtube"></i> Youtube
                        </a>
                    </div>
                </div>
            </div>

            <!-- Enlaces -->
            <div class="col-12 col-md-6 text-center text-md-start">
                <h5 class="text-uppercase mb-3">Enlaces</h5>
                <p>
                    <a class="footer-link"  href="<?= $enlace_about?>">Sobre mí</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
    .footer {
        background-color: #000000;
        border-top: 4px solid #ff4c4c;
    }

    .footer-logo {
        height: 100px;
        width: auto;
        max-width: 150px;
        margin-bottom: 15px;
    }

    .social-link {
        color: white;
        text-decoration: none;
        font-size: 1rem;
        font-weight: bold;
        transition: color 0.3s ease;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .social-link i {
        font-size: 1.2rem;
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

        .footer-logo {
            max-width: 120px;
        }

        .social-link {
            justify-content: center;
            font-size: 0.9rem;
        }
    }

    @media (min-width: 768px) {
        .footer-logo {
            margin-right: 20px;
        }

        .social-link {
            font-size: 1.1rem;
        }

        .footer .border-md-end {
            padding-right: 30px;
        }
    }
</style>
