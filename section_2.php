<section class="text-white" style="background-color: #0a111c; padding-bottom: 3em">
    <div class="container px-4 px-lg-5">
        <div class="col-lg-12 text-center">
            <h1 style="font-size: 3em" class="mb-4">MIRA LOS RESULTADOS QUE OTROS HAN OBTENIDO CON KAIZEN ELITE</h1>
            <div style="color: orange">
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
            </div>
        </div>

        <div class="video-gallery">
        <div class="video-wrapper">
            <video id="customVideo" class="video">
                <source src="assets/video/cambios.mp4" type="video/mp4">
            </video>
            <button id="playButton" class="play-button" onclick="togglePlay()"><i class="fa-solid fa-play"></i></button>

            <div id="controlsContainer" class="controls-container hidden">
                <button class="control-button" onclick="pauseVideo()"><i class="fa-solid fa-pause"></i></button>
                <button class="control-button" onclick="rewindVideo()"><i class="fa-solid fa-undo"> 10s</i></button>
            </div>
        </div>
        </div>

        <style>
            .video-wrapper {
                position: relative;
                width: 100%;
                max-width: 600px;
                border-radius: 10px;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                background: #000;
            }

            .video {
                width: 100%;
                border-radius: 10px;
            }

            .play-button {
                position: absolute;
                background: rgba(255, 200, 0, 0.8);
                border: none;
                border-radius: 50%;
                width: 60px;
                height: 60px;
                font-size: 30px;
                color: white;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: background 0.3s ease;
            }

            .play-button:hover {
                background: rgba(255, 180, 0, 1);
            }

            .controls-container {
                position: absolute;
                bottom: 10px;
                left: 10px;
                display: flex;
                gap: 10px;
            }

            .control-button {
                background: rgba(255, 200, 0, 0.8);
                border: none;
                border-radius: 2px;
                padding: 5px;
                font-size: 15px;
                color: white;
                cursor: pointer;
                transition: background 0.3s ease;
            }

            .control-button:hover {
                background: rgba(255, 180, 0, 1);
            }

            .hidden {
                display: none;
            }
        </style>

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
            <h1 style="font-size: 2.5em; color: orange" class="mb-4">¿Sabías que más del 70% de las personas intentan
                transformar su físico cada año, pero pocas lo logran de manera saludable?</h1>
            <h1 style="font-size: 2em;">En Kaizen Elite, te enseñamos cómo conseguir el físico que deseas sin tonterias con nuestro Sistema
                <span style="color: orange">ELEVATE 6D™</span> según tus objetivos, funciona para naturales y los que no
                lo son. Sin dietas extremas, sin riesgos y sin perder tiempo en métodos ineficaces.</h1>
            <br>
            <a class="btn fw-bold animated-btn" style="font-size: 2.5em; background-color: #FFA500FF">QUIERO MEJORAR YA</a>
        </div>
    </div>


</section>


