<?php
if(isset($_GET['reserva_exitosa']) && $_GET['reserva_exitosa'] == 1) {
    echo "<div class='alert alert-success text-center'>¡Reserva realizada con éxito!</div>";
}
?>

<?php include("header.php")?>

<header class="bg-success text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">
            <img src="img/Logo.png" alt="Icono de LuciTour" style="width: 50px; height: 50px; vertical-align: middle;">
            LuciTour
        </h1>
        <p class="lead">Explora la riqueza cultural y natural de Tlaxcala con nosotros</p>
    </div>
</header>



    <section id="about" class="py-5">
        <div class="container">
            <h2 class="text-center">Sobre Nosotros</h2>
            <p class="lead text-center">LuciTour es una empresa innovadora dedicada a promover y facilitar el turismo en el estado de Tlaxcala. Nos especializamos en proporcionar información detallada sobre lugares turísticos, diseñar itinerarios personalizados y ofrecer opciones de reservas y compras para mejorar la experiencia de nuestros usuarios. Nuestro enfoque principal es crear un ecosistema de turismo sostenible mediante la colaboración estrecha con negocios locales y organismos gubernamentales. Además, generamos ingresos a través de estrategias como la publicidad, suscripciones premium, comisiones por reservas y colaboraciones estratégicas, contribuyendo así al desarrollo económico y cultural de Tlaxcala.</p>
        </div>
    </section>

    <section id="mission-vision" class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center">Misión</h2>
                    <p>LuciTour tiene como misión conectar corazones con la riqueza cultural y natural del estado de Tlaxcala a través de una experiencia única y enriquecedora. La empresa se compromete a proporcionar a sus usuarios acceso fácil y atractivo a diversas experiencias de viaje locales, fomentando la exploración, el conocimiento y el respeto por la herencia tlaxcalteca.</p>
                </div>
                <div class="col-md-6">
                    <h2 class="text-center">Visión</h2>
                    <p>Ser la plataforma líder que inspira el amor por Tlaxcala, reconocida por ofrecer una ventana digital a la diversidad y belleza del estado. LuciTour se esfuerza por ser una fuente confiable y apasionante, creando conexiones significativas entre los habitantes locales, los visitantes y la riqueza cultural de Tlaxcala.</p>  
                </div>
            </div>
        </div>
    </section>

    <section id="social-media" class="py-5 text-center">
        <div class="container">
            <h2>Conéctate con Nosotros</h2>
            <div class="social-icons mt-4">
                <a href="#" class="btn btn-outline-primary btn-lg mx-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-primary btn-lg mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-primary btn-lg mx-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-primary btn-lg mx-2"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </section>

<?php include("footer.php"); ?>
