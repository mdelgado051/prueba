@extends('layout.base')

@section('title', 'Inicio')
@section('meta-description', 'Tecnología con Valor')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/solutions-it.css') }}">
    <link rel="stylesheet" href="{{ asset('css/solutions-it-brand.css') }}">
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('lib/swiper/swiper-bundle.min.css') }}">
@endsection

@section('body')
    <section class="cover row flex-column-reverse flex-md-row m-0 p-0">
        <div class="cover-description col-md-6 text-center text-md-left">
            <h1 class="page-title text-uppercase mb-1 pl-0 mb-xl-4">Soluciones IT por Marca</h1>
            <p class="mb-md-0"></p>
            <div class="cont-brands row flex-wrap justify-content-between ml-0">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-dell.png') }}" alt="logo Dell Technologies">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-microsoft.png') }}" alt="logo microsoft">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-sophos.png') }}" alt="logo sophos">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-vmware.png') }}" alt="logo VMware">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-arcserve.png') }}" alt="logo arcserve">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-veeam.png') }}" alt="logo veeam">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-symantec.png') }}" alt="logo symantec">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-eset.png') }}" alt="logo eset">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-lenovo.png') }}" alt="logo lenovo">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-pb_sws.png') }}" alt="powered by aws">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-fortinet.png') }}" alt="logo fortinet">
                <img class="mx-sm-2" src="{{ asset('img/home/brands/logo-HPE.png') }}" alt="logo HPE">
                <img class="mx-md-2 mx-auto" src="{{ asset('img/home/brands/logo-cisco.png') }}" alt="logo cisco">
            </div>
        </div>
        <div class="cover-img col-md-6 p-0">
            <img class="w-100" src="{{ asset('/img/solutions/brands/cover.jpg') }}" alt="">
        </div>
    </section>
    <section class="certification container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Nuestras certificaciones</h3>
            </div>
        </div>
        <article class="cont-certification row justify-content-between mx-auto mx-3">
            <img src="{{ asset('img/home/certification/certification-1.png') }}" alt="certificación sophos">
            <img src="{{ asset('img/home/certification/certification-2.png') }}" alt="certificación sophos">
            <img src="{{ asset('img/home/certification/certification-3.png') }}" alt="certificación sophos">
            <img src="{{ asset('img/home/certification/certification-4.png') }}" alt="certificación cisco CCNA">
            <img src="{{ asset('img/home/certification/certification-5.png') }}" alt="certificación cisco CCENT">
            <img src="{{ asset('img/home/certification/certification-6.png') }}" alt="certificación HCSA">
            <img src="{{ asset('img/home/certification/certification-7.png') }}" alt="certificación associate">
            <img src="{{ asset('img/home/certification/certification-8.png') }}" alt="certificación acacufy">
            <img src="{{ asset('img/home/certification/certification-9.png') }}"
                 alt="certificación tecnoligias de monterrey">
            <img src="{{ asset('img/home/certification/certification-10.png') }}" alt="certificación vrnware">
        </article>
    </section>
    <section id="solutionsit-brands" class="content-solutions container-fluid row bg-white mx-0 p-0">
        <article id="solutions-list" class="col-md-4 p-lg-5 p-4">
            <p class="Ebig-text my-5">Soluciones pensadas en ti respaldadas por las mejores marcas</p>
            <div class="solution pl-3 active">
                <a href="#dell" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">DELL</a>
                <p>Nos encargamos de brindarte innovación con la tecnología más avanzada</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="DELL">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#microsoft" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">MICROSOFT</a>
                <p>Nos aseguramos de que los recursos del sistema de información de tu empresa se utilicen de la forma
                    que has decidido</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="MICROSOFT">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#sophos" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">SOPHOS</a>
                <p>Estamos especializados para proveer una visión más completa de todo el ambiente virtual</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="SOPHOS">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#vmware" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">VMWARE</a>
                <p>Nos encargamos de administrar el rápido crecimiento de los datos no estructurados de tu empresa con
                    soluciones flexibles</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="VMWARE">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#arcserve" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">ARCSERVE</a>
                <p>Te ayudamos a proporcionar la posibilidad de elección, la eficiencia y la flexibilidad de tu
                    organización</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="ARCSERVE">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#veeam" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">VEEAM</a>
                <p>Nos encargamos de asesorar, guiar e implementar medidas preventivas y recuperaciones rápidas</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="VEEAM">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#symantec" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">Symantec</a>
                <p>Asesoramos y brindamos el equipo de cómputo que se adapte a tus necesidades</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="Symantec">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#eset" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">ESET</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="ESET">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#lenovo" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">LENOVO</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="LENOVO">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#aws" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">AWS</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="AWS">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#fortinet" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">FORTINET</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="FORTINET">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#acronis" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">ACRONIS</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="ACRONIS">Contacta a un experto</a>
            </div>
            <div class="solution pl-3">
                <a href="#cisco" aria-expanded="true" role="button" data-toggle="collapse"
                   class="__title">CISCO</a>
                <p>Asesoramos a tu organización para sacar el máximo provecho de sus inversiones en software</p>
                <a href="#cotizar" class="__contact text-purple" data-target-value="CISCO">Contacta a un experto</a>
            </div>
        </article>
        <article class="solutions-summary col-md-8 p-0">
            <div id="microsoft" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="Marca Microsoft">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">Microsoft</h2>
                    <p class="h5 p-bold mt-4">Nube (Azure)</p>
                    <p>
                        Azure es un conjunto completo y en expansión constante de servicios de informática en la nube
                        que ayudan a su organización a afrontar sus desafíos empresariales. Azure le ofrece la
                        flexibilidad de crear, administrar e implementar aplicaciones en una red mundial enorme con las
                        herramientas y las plataformas que prefiera.
                    </p>
                    <p class="h5 p-bold mt-4">Office 365</p>
                    <p>
                        Conecta a los empleados con las personas, la información y el contenido que necesitan para
                        trabajar de la mejor forma, desde cualquier dispositivo. Integra aplicaciones personalizables y
                        herramientas de automatización para transformar los procesos y flujos de trabajo existentes.
                        Protege los recursos de tu empresa con seguridad inteligente que no afecta a tu productividad.
                    </p>
                    <p class="h5 p-bold mt-4">Licenciamiento Perpetuo (Office)</p>
                    <p>
                        Aumenta tu productividad con las características integradas en las aplicaciones de Office como
                        Word, Outlook, PowerPoint y Excel. Utiliza las funcionalidades adicionales, la colaboración
                        mejorada y mucho más.
                    </p>
                    <p class="h5 p-bold mt-4">Licenciamiento Perpetuo (Windows, Windows Server)</p>
                    <p>
                        Es el sistema operativo de predilección es un conjunto de programas que posibilita la
                        administración de los recursos de una computadora o servidor. Este tipo de sistemas empiezan a
                        trabajar cuando se enciende el equipo para gestionar el hardware a partir desde los niveles más
                        básicos o más alto dependiendo de su configuración.
                    </p>
                    <p class="h5 p-bold mt-4">SQL Server</p>
                    <p>
                        Ya sea que tus datos estén estructurados o no estructurados, consúltalos y analízalos usando la
                        plataforma de datos con rendimiento y seguridad líderes en la industria.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="MICROSOFT">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="dell" class="collapse show" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca Dell">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">DELL</h2>
                    <p class="h5 p-bold mt-4">Hiperconvergencia</p>
                    <p>
                        Benefíciate de la amplitud del portafolio de HCI de Dell EMC. Transforme las operaciones con
                        sistemas integrados listos para usar, que aceleran los resultados de TI o continúa aprovechando
                        los modelos operativos existentes mientras obtiene los beneficios de la HCI mediante componentes
                        básicos de HCI flexibles y validados previamente.
                    </p>
                    <p class="h5 p-bold mt-4">Servidores</p>
                    <p>
                        Maximiza el rendimiento en la gama más amplia de aplicaciones gracias a arquitecturas altamente
                        escalables y almacenamiento interno flexible. Automatiza todo el ciclo de vida de los servidores
                        (desde la implementación hasta el retiro) con inteligencia integrada que aumenta
                        considerablemente
                        la productividad.
                    </p>
                    <p class="h5 p-bold mt-4">Storage</p>
                    <p>
                        Almacenamiento automatizado, simplificación y consolidación de datos, mejora de la productividad
                        y
                        escalabilidad, y optimización de la infraestructura de TI. Respaldo de datos confiable en cinta
                        o
                        en disco, almacenamiento fuera de las instalaciones, protección de datos continua y archivado a
                        largo
                        plazo. Almacenamiento iSCSI virtualizado, versátil y sencillo que crece fácilmente junto a su
                        empresa.
                    </p>
                    <p class="h5 p-bold mt-4">Networking</p>
                    <p>
                        Esta gama permite a los clientes cumplir con las exigencias de las cargas de trabajo modernas
                        del
                        edge al core y a la nube, actuales y futuras. Integra soluciones de conmutación de centros de
                        datos que
                        cumplan con las exigencias de los entornos de virtualización y las cargas de trabajo modernas y,
                        a la
                        vez, simplifica considerablemente las implementaciones y la administración.
                    </p>
                    <p class="h5 p-bold mt-4">CLIENT</p>
                    <p>
                        Potencia el triunfo épico y disfrute de la experiencia de juegos de PC más inmersiva en
                        cualquier lugar.
                        Diseñadas y creadas para cumplir con las necesidades de rendimiento de los usuarios de PC nuevos
                        o que
                        disponen de un presupuesto específico.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="DELL">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="vmware" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca VMWARE">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">VMWARE</h2>
                    <p class="h5 p-bold mt-4">Virtualización</p>
                    <p>
                        Es la forma más eficaz de reducir los gastos de TI y, a la vez, aumentar la eficiencia y la
                        agilidad para empresas de cualquier tamaño. La virtualización consiste en crear una
                        representación
                        basada en software, o virtual, de una entidad física como, por ejemplo, aplicaciones,
                        servidores,
                        redes y almacenamiento virtuales. Consiguiendo un ahorro considerable en la infraestructura y
                        con
                        una mayor administración.
                    </p>
                    <p class="h5 p-bold mt-4">El centro de datos definido por software</p>
                    <p>
                        La plataforma del centro de datos definido por software (Software-Defined Data Center, SDDC) es
                        compatible con cualquier dispositivo, aplicación o nube. Esta plataforma reúne el procesamiento,
                        el
                        almacenamiento y la virtualización de redes de VMware en una pila integrada de forma nativa, a
                        fin
                        de ofrecer capacidades de infraestructura de nube empresarial comunes a las nubes privadas y
                        públicas.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="VMWARE">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="symantec" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca SYMANTEC">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">SYMANTEC</h2>
                    <p class="h5 p-bold mt-4">SYMANTEC DATA LOS PREVENTION</p>
                    <p>
                        Impulsa la protección total de sus datos confidenciales. Mitiga los riesgos de incumplimiento de
                        datos y cumplimiento con la solución de prevención de pérdida de datos líder en la industria de
                        Symantec.
                    </p>
                    <p class="h5 p-bold mt-4">Encryption</p>
                    <p>
                        Proteja la información, cumple con las regulaciones. Cifra discos duros y medios extraíbles. Tu
                        personal depende de la movilidad y del acceso desde cualquier lugar para mantenerse productivo.
                        Desafortunadamente, tus datos confidenciales pueden sincronizarse sin saberlo desde la nube y
                        estar en riesgo cuando los dispositivos se pierden o son robados.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="Symantec">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="arcserve" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca ArcServe">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">ArcServe</h2>
                    <p class="h5 p-bold mt-4">Servicios en la nube</p>
                    <p>
                        Celebra acuerdos de nivel de servicio (SLA) y reduzca notablemente los costos con protección de
                        datos en la nube. Explora los servicios de backup, recuperación de desastres y archivo de
                        correos
                        electrónicos, diseñados para infraestructuras de TI híbridas en varias nubes.
                    </p>
                    <p class="h5 p-bold mt-4">on-premises</p>
                    <p>
                        Agiliza tu pila de soluciones sin perder usabilidad, escalabilidad o capacidades de alto
                        rendimiento.
                        Recupere hasta un 50% más de tiempo y reduzca los requisitos de almacenamiento hasta en un 95%.
                    </p>
                    <p class="h5 p-bold mt-4">Appliance</p>
                    <p>
                        El software listo para las grandes empresas se combina con hardware de nivel industrial para
                        crear
                        los appliances de protección de datos para la recuperación de desastres (DR) más completos del
                        mundo,
                        que ahora vienen con Sophos Intercept X Advanced, una defensa sin igual contra malware, exploits
                        y
                        ransomware.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="ARCSERVE">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="eset" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca ESET">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">ESET</h2>
                    <p class="h5 p-bold mt-4">Seguridad para endpoints</p>
                    <p>
                        Antimalware exhaustivo, con Filtro Web, Firewall, y Protección ante botnets. Protección
                        antimalware
                        e infecciones para plataformas múltiples, con un mínimo impacto en el sistema. Multipremiado
                        antimalware con mínimo impacto en el sistema; más administración remota.
                    </p>
                    <p class="h5 p-bold mt-4">Seguridad para servidores</p>
                    <p>
                        Protección antimalware para plataformas múltiples contra infecciones de archivos compartidos y
                        del
                        sistema host. Protege las máquinas virtuales y deja disponibles los recursos del sistema.
                        Seguridad
                        que bloquea el malware así como el tráfico Web y FTP sospechoso en todo el perímetro.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="ESET">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="cisco" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca cisco">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">CISCO</h2>
                    <p class="h5 p-bold mt-4">Redes</p>
                    <p>
                        Las redes basadas en intención (IBN) integradas en Cisco DNA adoptan un enfoque suministrado por
                        software para automatizar y garantizar servicios en todas las redes del campus, la WAN y las
                        sucursales. Cisco DNA permite optimizar las operaciones y facilita la innovación en la TI y los
                        negocios.
                    </p>
                    <p class="h5 p-bold mt-4">Seguridad</p>
                    <p>
                        Con el portafolio integrado y la inteligencia de amenazas líder de la industria, Cisco ofrece el
                        alcance, la escala y los recursos para afrontar la complejidad y el volumen de las amenazas. Al
                        priorizar la seguridad, puede innovar mientras protege sus recursos. Cisco prioriza la seguridad
                        en todo lo que hace. Solo con Cisco puede tener la seguridad de red eficaz para afrontar las
                        amenazas del futuro.
                    </p>
                    <p class="h5 p-bold mt-4">Centro de datos</p>
                    <p>
                        El nuevo data center supera los límites del hardware en las instalaciones y llega a un escenario
                        de
                        infraestructura digital rápida, compleja y en constante expansión. Ante este escenario, el
                        equipo de
                        TI debe adoptar un nuevo enfoque para la administración de la infraestructura del centro de
                        datos
                        que permita: Automatización de todas las etapas del ciclo de vida de TI, adopción de la
                        multinube
                        para ir adonde sea que vayan sus datos y seguridad generalizada en toda la red.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="CISCO">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="fortinet" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca fortinet">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">FORTINET</h2>
                    <p class="h5 p-bold mt-4">Seguridad de red</p>
                    <p>
                        Obtén redes de alto rendimiento y seguridad de la empresa a las sucursales. Fortinet Network
                        Security habilita una visibilidad completa y brinda protección automatizada contra amenazas en
                        toda la superficie de ataque.
                    </p>
                    <p class="h5 p-bold mt-4">Seguridad de múltiples nubes</p>
                    <p>
                        Habilita aplicaciones seguras y conectividad del centro de datos a la nube. Las soluciones de
                        múltiples nubes de Fortinet proporcionan la visibilidad y el control necesarios en una
                        diversidad
                        de infraestructuras en la nube.
                    </p>
                    <p class="h5 p-bold mt-4">Acceso seguro</p>
                    <p>
                        No hay desaceleración en el aumento de dispositivos inalámbricos conectados a la red y
                        aplicaciones
                        móviles. Garantice la administración y el acceso de dispositivos y aplicaciones seguras sin
                        comprometer el rendimiento.
                    </p>
                    <p class="h5 p-bold mt-4">Operaciones de seguridad</p>
                    <p>
                        Ofrece información de amenazas avanzadas para detectar, prevenir y responder al malware
                        sofisticado.
                        Las soluciones de operaciones de seguridad de Fortinet también ayudan a lograr el cumplimiento y
                        mejorar el conocimiento general de seguridad.
                    </p>
                    <p class="h5 p-bold mt-4">Operaciones de red</p>
                    <p>
                        Implementa una estrategia de seguridad que priorice las operaciones de la red basadas en la
                        automatización para ayudar a prevenir violaciones en la red. La solución de Fortinet ofrece una
                        arquitectura de seguridad integrada para unificar entornos aislados.
                    </p>
                    <p class="h5 p-bold mt-4">Protección de endpoint y dispositivo</p>
                    <p>
                        Asegúrate de que las redes estén protegidas de las amenazas más recientes con protección
                        proactiva
                        de endpoint. Fortinet proporciona la importante seguridad del Internet de las cosas (IoT) y de
                        dispositivos para obtener la visibilidad y el control de todos los dispositivos en la red.
                    </p>
                    <p class="h5 p-bold mt-4">Seguridad de aplicaciones</p>
                    <p>
                        Protege de manera frecuente las aplicaciones web dirigidas de la empresa. La solución de
                        seguridad
                        de aplicaciones de Fortinet ofrece un conjunto robusto e integrado de productos para proteger
                        las
                        aplicaciones de amenazas avanzadas.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="FORTINET">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="veeam" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca veem">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">VEEAM</h2>
                    <p class="h5 p-bold mt-4">BACKUP + Recuperación</p>
                    <p>
                        La solución insignia de Veeam que hace de la gestión de datos un proceso sencillo, flexible y
                        fiable.
                        Elimine el estrés de mantener sus datos al eliminar los procesos manuales asociados con la
                        protección
                        de datos, recuperación, monitorización, protección frente a ransomware y cumplimiento normativo.
                        Veeam
                        le hace ahorrar tiempo y dinero mientras le permite centrarse menos en el backup, y más en hacer
                        avanzar su negocio.
                    </p>
                    <p class="h5 p-bold mt-4">Orquestación y BC/DR</p>
                    <p>
                        Proporciona un motor de orquestación y automatización fiable, escalable y fácil de usar que está
                        específicamente diseñado para satisfacer las necesidades de disaster recovery/continuidad de
                        negocio
                        (BC/DR) de las empresas de hoy en día. Al eliminar las pruebas manuales y los procesos de
                        recuperación
                        que son ineficientes costosos y propensos a errores, Veeam Availability Orchestrator
                        proporcionar una
                        estrategia de DR probada, práctica y planificada - usando réplicas y backups - para conseguir
                        operaciones de TI más fiables.
                    </p>
                    <p class="h5 p-bold mt-4">Monitorización y análisis</p>
                    <p>
                        Proporciona una solución integral de monitorización y análisis para sus entornos de backup,
                        virtuales
                        y físicos. Gracias a la compatibilidad con Veeam Backup & Replication™ y Veeam Agents, además de
                        VMware vSphere, Microsoft Hyper-V y Nutanix AHV, Veeam ONE ofrece monitorización inteligente en
                        detalle, generación de informes y automatización a través de herramientas interactivas y
                        mecanismos
                        de aprendizaje inteligente, que identifican y resuelven problemas reales de clientes antes de
                        que se
                        inicien.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="VEEAM">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="sophos" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca sophos">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">SOPHOS</h2>
                    <p class="h5 p-bold mt-4">Sophos Intercept X</p>
                    <p>
                        Los expertos están de acuerdo. Intercept X Advanced consigue los mejores resultados
                        sistemáticamente
                        en pruebas independientes e informes de analistas de protección para endpoints. Gracias a una
                        combinación de tecnologías de vanguardia, como el Deep Learning y la detección y respuesta para
                        endpoints, Intercept X ofrece una protección inigualable contra el malware, los exploits y el
                        ransomware desconocidos.
                    </p>
                    <p class="h5 p-bold mt-4">Sophos Mobile</p>
                    <p>
                        Es una solución de seguridad y de gestión unificada de edpoints (UEM) que ayuda a las empresas a
                        invertir menos tiempo y esfuerzo en la gestión y la protección de endpoints tradicionales y
                        móviles.
                        Sophos Mobile es la única solución UEM que se integra de forma nativa con una plataforma líder
                        de
                        seguridad next-gen para endpoints y admite la gestión de dispositivos Windows 10, macOS, iOS y
                        Android.
                    </p>
                    <p class="h5 p-bold mt-4">SafeGuard Encryption</p>
                    <p>
                        Cifra contenida tan pronto como se crea. Y con el cifrado siempre activo, puede gozar de una
                        colaboración continua y segura. Synchronized Encryption protege sus datos de forma proactiva
                        mediante
                        la validación continua del usuario, la aplicación y la integridad de seguridad de un dispositivo
                        antes
                        de permitir el acceso a datos cifrados.
                    </p>
                    <p class="h5 p-bold mt-4">Sophos XG Firewall</p>
                    <p>
                        Dispositivos de hardware de la serie XG se han diseñado especialmente con los últimos
                        procesadores
                        multinúcleo, un aprovisionamiento generoso de RAM, almacenamiento de estado sólido y opciones
                        flexibles
                        de conectividad.
                    </p>
                    <p>
                        Tanto si protege una pequeña empresa como un gran centro de datos, disfrutará de una relación
                        rendimiento/precio líder en el sector, y lo último en flexibilidad, conectividad y fiabilidad en
                        cualquier factor de forma.
                    </p>
                    <p class="h5 p-bold mt-4">Secure Web Gateway</p>
                    <p>
                        Funciona perfectamente con tus estaciones de trabajo Windows protegidas por Sophos con el fin de
                        ofrecer una protección web completa a los usuarios externos. Cuando estos abandonan la red
                        local,
                        Sophos Endpoint toma el mando y garantiza una protección y un cumplimiento completos vayan donde
                        vayan.
                    </p>
                    <p class="h5 p-bold mt-4">SG UTM</p>
                    <p>
                        Lo último en protección de firewall next-gen con funciones que no se pueden conseguir en ningún
                        otro
                        sitio, incluido el cifrado móvil, web, de endpoints, del correo electrónico y DLP. Sin hardware
                        adicional. Sin costes adicionales. Solo tienes que escoger lo que quieres implantar.
                    </p>
                    <p class="h5 p-bold mt-4">Sophos Wireless</p>
                    <p>
                        Los puntos de acceso de la serie APX están diseñados a medida para ofrecer un rendimiento
                        superior
                        durante la carga. Estos modelos habilitados con Security Heartbeat™ pueden integrarse con Sophos
                        Mobile y Sophos Endpoint para proteger sus redes Wi-Fi.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="SOPHOS">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="lenovo" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca lenovo">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">LENOVO</h2>
                    <p class="h5 p-bold mt-4">Data Center</p>
                    <p>
                        Explora la gama completa de ofertas, incluidos servidores, almacenamiento, redes, sistemas
                        definidos
                        por software y software. Sistemas optimizados de computación de alto rendimiento y de
                        inteligencia
                        artificial.
                    </p>
                    <p class="h5 p-bold mt-4">Desktops</p>
                    <p>
                        Estas computadoras portátiles están diseñadas para trabajar y jugar, para que pueda aprovechar
                        al
                        máximo su computadora. Queremos darle la versatilidad para llevar su computadora portátil con
                        usted
                        alrededor del mundo, o disfrutarla en casa en el sofá.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="LENOVO">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="aws" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca aws">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">AWS</h2>
                    <p class="h5 p-bold mt-4">Amazon EC2</p>
                    <p>
                        Amazon Elastic Compute Cloud (Amazon EC2) es un servicio web que proporciona capacidad
                        informática
                        en la nube segura y de tamaño modificable. Está diseñado para simplificar el uso de la
                        informática
                        en la nube a escala web para los desarrolladores. La sencilla interfaz de servicios web de
                        Amazon
                        EC2 permite obtener y configurar capacidad con una fricción mínima. Proporciona un control
                        completo
                        sobre los recursos informáticos y le permite ejecutarse en el entorno informático probado de
                        Amazon.
                    </p>
                    <p class="h5 p-bold mt-4">Amazon S3</p>
                    <p>
                        Amazon Simple Storage Service (Amazon S3) es un servicio de almacenamiento de objetos que ofrece
                        escalabilidad, disponibilidad de datos, seguridad y rendimiento líderes en el sector. Esto
                        significa
                        que clientes de todos los tamaños y sectores pueden utilizarlo para almacenar y proteger
                        cualquier
                        cantidad de datos para diversos casos de uso, como sitios web, aplicaciones móviles, procesos de
                        copia
                        de seguridad y restauración, operaciones de archivado, aplicaciones empresariales, dispositivos
                        IoT y
                        análisis de big data. Amazon S3 proporciona características de administración fáciles de
                        utilizar que
                        le permiten organizar los datos y configurar sofisticados controles de acceso con objeto de
                        satisfacer
                        sus requisitos empresariales, organizativos y de conformidad. Amazon S3 está diseñado para
                        ofrecer una
                        durabilidad del 99,999999999 % (11 nueves) y almacena datos de millones de aplicaciones para
                        empresas
                        de todo el mundo.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="AWS">Contacta a un experto</a>
                    </div>
                </div>
            </div>
            <div id="acronis" class="collapse" data-parent="#solutionsit-brands">
                <a href="http://"></a>
                <img class="w-100" src="{{ asset('./img/solutions/brands/dell.jpg') }}" alt="marca acronis">
                <div class="p-lg-5 p-4">
                    <h2 class="mb-4">ACRONIS</h2>
                    <p class="h5 p-bold mt-4">Cyber Backup</p>
                    <p>
                        Las empresas pueden correr el riesgo de perder datos importantes. La pérdida de datos genera
                        costosos
                        tiempos de inactividad, insatisfacción de los clientes, multas regulatorias y pérdida de
                        ingresos.
                        Como resultado, los profesionales de TI deben cumplir con expectativas extremadamente altas.
                        Tiene
                        que mantener la empresa en funcionamiento las 24 horas del día.
                    </p>
                    <p>
                        Acronis Cyber Backup ofrece la protección de datos que cumple con las demandas actuales.
                        Mantiene su
                        negocio en funcionamiento, protegiendo cualquier carga de trabajo, escalando sin límites y
                        ahorrándole dinero.
                    </p>
                    <p class="h5 p-bold mt-4">Cyber Backup Cloud</p>
                    <p>
                        Como proveedor de servicio, tiene que admitir un número creciente de casos de uso para retener a
                        los
                        clientes y ampliar su mercado total dirigible. Acronis Cyber Backup Cloud le proporciona
                        herramientas
                        y opciones para proteger cualquier dispositivo en cualquier ubicación al realizar una copia de
                        seguridad en cualquier clase de almacenamiento y recuperando en cualquier plataforma.
                    </p>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <p class="h5 p-bold mb-0">Nuestro equipo está listo para impulsar tu negocio</p>
                        <a href="#cotizar" class="btn btn-primary __contact" data-target-value="ACRONIS">Contacta a un experto</a>
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="contact container-fluid row m-0 p-0" id="cotizar">
        <article class="col-xl-7 col-lg-8 col-10 mx-auto">
            <h3 class="text-center text-purple mb-5">Completa el siguiente formulario y un especialista se contactará
                contigo en menos de 24 hrs.</h3>
            <div class="bg-white mx-auto px-4 py-4">
                <form class="contactLeadForm" action="{{ route('contact.lead') }}" method="POST">
                    @csrf
                    <input type="hidden" name="LeadFormName" value="Soluciones IT (Marca)">
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadFirstName" type="text"
                               placeholder="Nombre:" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadLastName" type="text"
                               placeholder="Apellido:" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" name="LeadEmail" type="email" placeholder="Email:"
                               required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="name" name="LeadName" type="text" placeholder="Empresa:"
                               required>
                    </div>
                    <div class="form-group">
                        <select name="LeadProducts" id="productsSelect" class="form-control" required>
                            <option>Selecciona una solución</option>
                            <option value="DELL">DELL</option>
                            <option value="MICROSOFT">MICROSOFT</option>
                            <option value="SOPHOS">SOPHOS</option>
                            <option value="VMWARE">VMWARE</option>
                            <option value="ARCSERVE">ARCSERVE</option>
                            <option value="VEEAM">VEEAM</option>
                            <option value="Symantec">Symantec</option>
                            <option value="ESET">ESET</option>
                            <option value="LENOVO">LENOVO</option>
                            <option value="AWS">AWS</option>
                            <option value="FORTINET">FORTINET</option>
                            <option value="ACRONIS">ACRONIS</option>
                            <option value="CISCO">CISCO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="LeadComment" id="msg" cols="30" rows="1"
                                  placeholder="Mensaje (opcional):"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-pill mt-3 mb-2">Enviar</button>
                </form>
            </div>
        </article>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
    <script>
        $(document).ready(function () {
            //let solutionsList = $('#solutions-list');
            var solutions = $('.solution');
            var solutionsTitles = solutions.find('.__title');

            solutionsTitles.on('click', function (ev) {
                ev.preventDefault();
                solutions.removeClass('active');
                $(this).parent('.solution').addClass('active');
            });

            // Quote area
            $('.__contact').on('click', function (ev) {
                ev.preventDefault();

                var $target = $("#cotizar");
                var $productsSelect = $("#productsSelect");
                $productsSelect.val($(this).data('target-value'));

                $('html, body').animate({
                    scrollTop: ($target.offset().top )
                }, 500, function () {
                    // Callback after animation
                    // Must change focus!
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    }
                });
            });
        })
    </script>
@endsection