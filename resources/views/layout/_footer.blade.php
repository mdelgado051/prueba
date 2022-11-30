<footer class="footer container-fluid px-md-0 py-5 px-4">
    <img class="mx-md-5 mb-5" src="{{ asset('img/logo.png') }}" alt="">
    <article class="container row p-0 align-items-start">
        <div class="col-md-7 row navegation pb-md-0 pb-5">
            <h6 class="col-12 big-text mb-3 p-0">Navega</h6>
            <ul class="col-md-3 col-6 pl-md-0 pr-md-4 p-0">
                <p class="p-bold mb-1">Quiénes somos</p>
                <li><a href="{{ route('us') }}#mision">Misión</a></li>
                <li><a href="{{ route('us') }}#vision">Visión</a></li>
                <li><a href="{{ route('us') }}#values">Valores</a></li>
            </ul>
            <ul class="col-md-3 col-6 px-md-4 p-0">
                <p class="p-bold mb-1">Servicios</p>
                <li><a href="{{ route('services') }}">Servicios Profesionales</a></li>
                <li><a href="{{ route('services') }}">Outsourcing</a></li>
                <li><a href="{{ route('services') }}">Soporte Técnico</a></li>
            </ul>
            <ul class="col-md-3 col-6 px-md-4 p-0">
                <p class="p-bold mb-1">Soluciones</p>
                <li><a href="{{ route('infrastructure') }}"">Infraestructura</a></li>
                <li><a href="{{ route('security') }}"">Seguridad</a></li>
            </ul>
            <ul class="col-md-3 col-6 pl-md-4 p-0">
                <a href="{{ route('support') }}" class="p-bold mb-1 p-soporte">Soporte</a>
            </ul>
        </div>
        <div class="cont-subsidiary col-md-4 offset-md-1 d-flex flex-wrap px-2 p-0 mt-md-0 mt-5">
            <h6 class="w-100 big-text mb-3">Contáctanos</h6>
            <ul class="social-networks p-0">
                <li class="mb-2"><a target="_blank" href="https://www.facebook.com/Sertei/"><i class="fab fa-facebook-f"></i></a></li>
                <li class="my-2"><a target="_blank" href="https://www.instagram.com/serteisoluciones/"><i class="fab fa-instagram"></i></a></li>
                <li class="my-2"><a target="_blank" href="https://www.linkedin.com/company/2563374"><i class="fab fa-linkedin-in"></i></a></li>
                {{--<li class="my-2"><a target="_blank" href="#"><i class="fab fa-youtube"></i></a></li>--}}
            </ul>
            <ul class="subsidiary">
                <li>
                    <p class="p-bold mb-1">Chihuahua, Chih.</p>
                    <p class="mb-0">Centro Ejecutivo Punto Alto #5500, Complejo Industrial El Saucito C.P 31125, Chihuahua, Chih.</p>
                    <a href="tel:6144321212">(614) 432 1212</a>
                </li>
                <li>
                    <p class="p-bold mb-1 mt-4">Ciudad Juárez</p>
                    <a href="tel:6566171800">(656) 617 18 00</a>
                </li>
                <li>
                    <p class="p-bold mb-1 mt-4">Torreón</p>
                    <p class="mb-0">Igniter Business, Av. Presidente Carranza #68 Ote., Col. Centro, C.P. 27000</p>
                    <a href="tel:8713153699">(871) 315 36 99</a>
                </li>
            </ul>
        </div>
        <div class="col-auto">
            <p class="p-0 thin-text mt-4">Todos los derechos reservados Sertei 2022. | <a href="/Aviso de privacidad.pdf">Aviso de Privacidad</a></p>

        </div>
        <div class="col-auto ml-auto">
            <a href="/login" class="p-0 thin-text mt-4">Administrador</a>
            ·
            <b>
                <a target="_blank" class="thin-text" href="https://deadline.com.mx">Powered by Deadline</a>
            </b>
        </div>
    </article>
</footer>