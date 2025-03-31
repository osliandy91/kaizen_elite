<!-- Contact Section -->

<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSpFRIPkI3xqosRwTPoSec66ToQDN-JMw&callback=initMap"
        async defer></script>

<section class="page-section" id="contact">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-container {
            max-width: 1200px;
            margin: auto;
            padding: 50px 20px;
        }
        .contact-card {
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .contact-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
        }
        .btn-submit {
            background-color: #d4a373;
            border: none;
        }
        .btn-submit:hover {
            background-color: #c09266;
        }

        #map-container {
            height: 100%;
            width: 100%;
            display: flex;
            flex-direction: column;
        }

        #map {
            width: 100%;
            height: 400px;
        }

        #info-box {
            margin-top: 10px;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
        }
    </style>

    <div class="contact-container">
        <div class="row">
            <!-- Formulario a la izquierda -->
            <div class="col-md-6 d-flex flex-column">
                <div class="contact-card" style="padding: 50px">
                    <h3 class="contact-title text-center mb-4" data-i18n="contact-title"></h3>
                    <p class="text-center text-muted" data-i18n="contact-text"></p>
                    <form id="contactForm" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label" data-i18n="contact-name"></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" data-i18n="contact-email"></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label" data-i18n="contact-phone"></label>
                            <input type="tel" class="form-control" id="phone" name="phone"  required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label" data-i18n="contact-message"></label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>

                        <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>
                        <br>
                        <div class="d-grid">
                            <button id="contact-form" type="button" class="btn btn-dark text-white" data-i18n="contact-form-submit" onclick="send()"></button>
                        </div>

                    </form>
                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                </div>
            </div>

            <!-- Mapa a la derecha -->
            <div class="col-md-6">
                <div id="map-container">
                    <div id="map"></div>
                    <div id="info-box">
                        <h3>Pegasus Wood Work Corp</h3>
                        <p><strong data-i18n="map-address"></strong> 2445w #1 Hialeah Florida 33016</p>
                        <p>
                            <strong data-i18n="map-phone"></strong>
                            +1 786 340 9142
                            <a href="tel:+17863409142">
                                <i class="bi bi-telephone"></i>
                            </a>
                        </p>

                        <p>
                            <strong data-i18n="map-phone-2"></strong>
                            +1 786 348 7332
                            <a href="tel:+7863487332">
                                <i class="bi bi-telephone"></i>
                            </a>
                        </p>
                        <p>
                            <strong data-i18n="map-email"></strong>
                            pegasuswoodwork1@gmail.com
                            <a href="mailto:pegasuswoodwork1@gmail.com">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        const ubicacion = { lat: 25.8924293, lng: -80.3348791};
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: ubicacion,
        });
        new google.maps.Marker({
            position: ubicacion,
            map: map,
            title: "Pegasus Wood Work Corp",
        });
    }
</script>
