<section class="text-white" style="background-color: #0a111c; padding-bottom: 3em">
    <div class="container px-4 px-lg-5">
        <div class="col-lg-12 text-center">
            <h1 style="font-size: 3em" class="mb-4" data-aos="fade-right" data-aos-delay="500">MIRA LOS RESULTADOS QUE OTROS HAN OBTENIDO CON KAIZEN ELITE</h1>
            <div style="color: orange" data-aos="fade-down" data-aos-delay="500">
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
            </div>
        </div>

        <div class="video-gallery" data-aos="zoom-int" data-aos-delay="500">
        <div class="video-wrapper">
            <iframe id="customVideo" src="assets/video/cambios.mp4" class="video">
            </iframe>
        </div>
        </div>


        <script>
            const video = document.getElementById("customVideo");
            const playButton = document.getElementById("playButton");
            const controlsContainer = document.getElementById("controlsContainer");

            function togglePlay() {
                if (video.paused) {
                    video.play();
                    playButton.classList.add("hidden");
                    controlsContainer.classList.remove("hidden");
                }
            }

            function pauseVideo() {
                video.pause();
                playButton.classList.remove("hidden");
                controlsContainer.classList.add("hidden");
            }

            function rewindVideo() {
                video.currentTime -= 10;
            }
        </script>




        <div class="col-lg-12 text-center" style="margin-top: 15px">
            <h1 style="font-size: 2.5em; color: orange" class="mb-4" data-aos="fade-right" data-aos-delay="500">¿Sabías que más del 70% de las personas intentan
                transformar su físico cada año, pero pocas lo logran de manera saludable?</h1>
            <h1 style="font-size: 2em;" data-aos="fade-right" data-aos-delay="500">En Kaizen Elite, te enseñamos cómo conseguir el físico que deseas sin tonterias con nuestro Sistema
                <span style="color: orange">ELEVATE 6D™</span> según tus objetivos, funciona para naturales y los que no
                lo son. Sin dietas extremas, sin riesgos y sin perder tiempo en métodos ineficaces.</h1>
            <br>
            <a class="btn fw-bold animated-btn" style="font-size: 2.5em; background-color: #FFA500FF" data-aos="zoom-in" data-aos-delay="500">QUIERO MEJORAR YA</a>
        </div>
    </div>


</section>


