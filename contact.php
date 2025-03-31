<!-- Contact Section -->
<section class="page-section" id="contact">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-container {
            max-width: 800px;
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
    </style>

    <div class="contact-container">
        <div class="contact-card">
            <h3 class="contact-title text-center mb-4" data-i18n="contact-title"></h3>
            <p class="text-center text-muted" data-i18n="contact-text"></p>
            <form id="contactForm" action="procesar.php" method="POST">
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
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label" data-i18n="contact-message"></label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="button" class="btn btn-dark text-white" data-i18n="contact-submit" onclick="send()"></button>
                </div>
            </form>
        </div>
    </div>
</section>
