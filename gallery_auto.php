
<section class="page-section text-white" style="background-color: #0a111c">
    <div class="container px-4 px-lg-5">
            <div class="col-lg-12 text-center">


                <style>
                    .gallery-container {
                        width: 100%;
                        max-width: 900px;
                        margin: auto;
                        overflow: hidden;
                        position: relative;
                    }

                    .gallery-slide {
                        display: flex;
                        transition: transform 1s ease-in-out;
                    }

                    .gallery-slide img {
                        width: 100%;
                        height: auto;
                        border-radius: 10px;
                        display: block;
                    }

                    .gallery-container img {
                        max-height: 400px;
                        object-fit: cover;
                    }

                    /* Botones de navegación */
                    .prev, .next {
                        position: absolute;
                        top: 50%;
                        background-color: rgba(0, 0, 0, 0.5);
                        color: white;
                        font-size: 2em;
                        padding: 10px;
                        border: none;
                        cursor: pointer;
                        z-index: 10;
                        border-radius: 50%;
                        transform: translateY(-50%);
                    }

                    .prev {
                        left: 10px;
                    }

                    .next {
                        right: 10px;
                    }
                </style>

                <div class="gallery-container">
                    <div class="gallery-slide">
                        <img src="assets/img/cambios/1%20(1).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(2).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(3).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(4).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(5).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(6).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(7).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(8).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(9).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(10).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(11).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(12).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(13).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(14).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(15).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(16).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(17).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(18).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(19).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(20).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(21).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(22).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(23).png" alt="Video 1">
                        <img src="assets/img/cambios/1%20(24).png" alt="Video 1">
                    </div>
                    <!-- Botones de navegación -->
                    <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                    <button class="next" onclick="moveSlide(1)">&#10095;</button>
                </div>

                <script>
                let currentIndex = 0;
                const slides = document.querySelectorAll('.gallery-slide img');
                const totalSlides = slides.length;

                function updateSlidePosition() {
                const newTransformValue = `translateX(-${currentIndex * 100}%)`;
                document.querySelector('.gallery-slide').style.transform = newTransformValue;
                }

                function moveSlide(direction) {
                currentIndex += direction;
                if (currentIndex < 0) {
                currentIndex = totalSlides - 1; // Volver al final si está en el primero
                } else if (currentIndex >= totalSlides) {
                currentIndex = 0; // Volver al principio si está en el último
                }
                updateSlidePosition();
                }

                setInterval(() => moveSlide(1), 3000); // Cambio automático cada 3 segundos
                </script>
            </div>

    </div>

</section>



