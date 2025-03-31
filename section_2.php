<section class="text-white" style="background-color: #0a111c; padding-bottom: 3em">
    <div class="container px-4 px-lg-5">
        <div class="col-lg-12 text-center">
            <h1 style="font-size: 4em" class="mb-4">MIRA LOS RESULTADOS QUE OTROS HAN OBTENIDO CON KAIZEN ELITE</h1>
            <div style="color: orange">
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
                <i class="fa-solid fa-angles-down fa-3x arrow"></i>
            </div>
        </div>

        <?php
        include_once 'gallery_auto.php'
        ?>


        <div class="col-lg-12 text-center" style="margin-top: 15px">
            <h1 style="font-size: 3.5em; color: orange" class="mb-4">¿Sabías que más del 70% de las personas intentan
                transformar su físico cada año, pero pocas lo logran de manera saludable?</h1>
            <h3>En Kaizen Elite, te enseñamos cómo conseguir el físico que deseas sin tonterias con nuestro Sistema
                <span style="color: orange">ELEVATE 6D™</span> según tus objetivos, funciona para naturales y los que no
                lo son. Sin dietas extremas, sin riesgos y sin perder tiempo en métodos ineficaces.</h3>
            <br>
            <a class="btn btn-warning fw-bold animated-btn" style="font-size: 3em">QUIERO MEJORAR YA</a>
        </div>
    </div>


    <style>
        .animated-btn {
            font-family: "Saira ExtraCondensed", sans-serif;;
            font-size: 5em;
            padding: 15px 40px;
            border-radius: 10px;
            text-transform: uppercase;
            transition: all 0.3s ease-in-out;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            position: relative;
            overflow: hidden;
            font-weight: 800; /* Texto más grueso */
            color: #000; /* Color completamente negro */
        }

        /* Efecto de pulsación */
        .animated-btn::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            transition: width 0.3s ease-in-out, height 0.3s ease-in-out, top 0.3s ease-in-out, left 0.3s ease-in-out;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            z-index: 0;
        }

        /* Hover: ilumina el botón */
        .animated-btn:hover {
            background-color: #ffcc00;
            transform: scale(1.05);
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.3);
        }

        /* Hover: efecto de expansión del brillo */
        .animated-btn:hover::before {
            width: 0;
            height: 0;
            top: 50%;
            left: 50%;
        }

        /* Animación de pulsación */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

    </style>

</section>


