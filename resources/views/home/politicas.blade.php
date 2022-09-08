@extends('layouts.template')

@section('title', 'Quienes Somos - Politicas Y Privacidad de los Datos | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">¿Quienes Somos?</h1>
    </x-header-bar>
</header>

<section class="container m-auto h-auto my-10">
    <div class="grid md:grid-cols-4 grid-cols-1 gap-6">
        {{-- layout-seccion principal --}}
        <div class="container w-full col-span-3">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Politicas y Privacidad de los Datos Personales</h1>
            </div>
            <div class="container h-auto mt-5 p-3">
                <h3 class="text-2xl font-semibold">POLITICA Y PRIVACIDAD DE LOS DATOS PERSONALES | TRATAMIENTO DE SU INFORMACION</h3><br>

                <span><strong>Última actrualización: </strong>Septiembre 2022.</span><br><br>

                    <h2 class="text-xl font-medium">GENERALIDADES</h2><br>

                    <p>La Ley 1581 de 2012, establece que el dato personal es cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables y es aplicable a los datos personales registrados en cualquier base de datos que los haga susceptibles de tratamiento por entidades de naturaleza pública o privada.</p>

                    <p>El régimen de protección de datos personales que se establece en el artículo 2 de la presente ley no será de aplicación:</p>

                   <ul class="list-decimal p-5">
                    <li>
                        <p>A las bases de datos o archivos mantenidos en un ámbito exclusivamente personal o doméstico.</p>
                        <p>Cuando estas bases de datos o archivos vayan a ser suministrados a terceros se deberá, de manera previa, informar al Titular y solicitar su autorización. En este caso los Responsables y Encargados de las bases de datos y archivos quedarán sujetos a las disposiciones contenidas en la presente ley;</p>
                    </li>
                    <li><p>A las bases de datos y archivos que tengan por finalidad la seguridad y defensa nacional, así como la prevención, detección, monitoreo y control del lavado de activos y el financiamiento del terrorismo;</p></li>

                    <li>A las Bases de datos que tengan como fin y contengan información de inteligencia y contrainteligencia;</li>

                    <li>A las bases de datos y archivos de información periodística y otros contenidos editoriales;</li>

                    <li>A las bases de datos y archivos regulados por la Ley 1266 de 2008;</li>

                    <li>A las bases de datos y archivos regulados por la Ley 79 de 1993.</li><br>

                    <p>Así mismo la Ley 1581 de 2012 define los siguientes términos:</p><br>

                    <li>Autorización: Consentimiento previo, expreso e informado del Titular para llevar a cabo el Tratamiento de datos personales;</li>

                    <li> Base de Datos: Conjunto organizado de datos personales que sea objeto de Tratamiento;</li>

                    <li>Dato personal: Cualquier información vinculada o que pueda asociarse a una o varias personas naturales determinadas o determinables;</li>

                    <li>Encargado del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, realice el Tratamiento de datos personales por cuenta del Responsable del Tratamiento;</li>

                    <li>Responsable del Tratamiento: Persona natural o jurídica, pública o privada, que por sí misma o en asocio con otros, decida sobre la base de datos y/o el Tratamiento de los datos;</li>

                    <li>Titular: Persona natural cuyos datos personales sean objeto de Tratamiento;</li>

                    <li>Tratamiento: Cualquier operación o conjunto de operaciones sobre datos personales, tales como la recolección, almacenamiento, uso, circulación o supresión.</li>

                    <li>Datos sensibles: Son aquellos que afectan la intimidad del Titular o cuyo uso indebido puede generar su discriminación, tales como aquellos que revelen el origen racial o étnico, la orientación política, las convicciones religiosas o filosóficas, la pertenencia a sindicatos, organizaciones sociales, de derechos humanos o que promueva intereses de cualquier partido político o que garanticen los derechos y garantías de partidos políticos de oposición así como los datos relativos a la salud, a la vida sexual y los datos biométricos.</li>

                   </ul><br>

                   <p>Y por su parte, la Ley 1266 de 2008 define los siguientes tipos de datos de carácter personal:</p><br>

                   <ul class="list-disc p-5">
                       <li>Dato público. Es el dato calificado como tal según los mandatos de la ley o de la Constitución Política y todos aquellos que no sean semiprivados o privados, de conformidad con la presente ley. Son públicos, entre otros, los datos contenidos en documentos públicos, sentencias judiciales debidamente ejecutoriadas que no estén sometidos a reserva y los relativos al estado civil de las personas;</li>

                       <li>Dato semiprivado. Es semiprivado el dato que no tiene naturaleza íntima, reservada, ni pública y cuyo conocimiento o divulgación puede interesar no solo a su titular sino a cierto sector o grupo de personas o a la sociedad en general, como el dato financiero y crediticio de actividad comercial o de servicios a que se refiere el Título IV de la Ley 1266 de 2008.</li>

                       <li>Dato privado. Es el dato que por su naturaleza íntima o reservada solo es relevante para el titular;</li>
                   </ul><br>

                   <p></p>

                    <h2 class="text-xl font-medium">OBJETIVOS</h2><br>

                    <p>Atender las disposiciones legales dentro del marco jurídico constitucional, que dispone el derecho a la protección de datos personales y como entidad garante de los mismos, la Empresa GESCCOL E.I.C.E., en calidad de administrador de la información, de los ciudadanos a quienes dirige sus bienes y servicios o tienen algún interés en su gestión; para velar por la transparencia en el tratamiento de los datos personales y el deber de orientar a  los ciudadanos en conocer, actualizar y rectificar los datos recogidos sobre ellos en las bases de datos o archivos que maneja la entidad.</p><br>

                    <h2 class="text-xl font-medium">ALCANCE</h2><br>

                    <p>Esta política aplica para toda la información con datos personales de ciudadanos, usuarios, proveedores, clientes, funcionarios y contratistas de la entidad, registrada en las bases de datos físicas o electrónicas, que los haga susceptibles de tratamiento por parte de la Empresa GESCCOL E.I.C.E.</p><br>

                    <h2 class="text-xl font-medium">OBLIGACIONES</h2><br>

                    <ul class="list-decimal p-5">
                        <li>Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de hábeas data;</li>

                        <li>Solicitar y conservar, en las condiciones previstas en la presente ley, copia de la respectiva autorización otorgada por el Titular;</li>

                        <li>Garantizar que la información que se suministre al Encargado del Tratamiento sea veraz, completa, exacta, actualizada, comprobable y comprensible;</li>

                        <li>Informar debidamente al Titular sobre la finalidad de la recolección y los derechos que le asisten por virtud de la autorización otorgada;</li>

                        <li>Conservar la información bajo las condiciones de seguridad necesarias para impedir su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento;</li>

                        <li>Garantizar que la información que se suministre al Encargado del Tratamiento sea veraz, completa, exacta, actualizada, comprobable y comprensible;</li>

                        <li>Actualizar la información, comunicando de forma oportuna al Encargado del Tratamiento, todas las novedades respecto de los datos que previamente le haya suministrado y adoptar las demás medidas necesarias para que la información suministrada a este se mantenga actualizada;</li>

                        <li>Rectificar la información cuando sea incorrecta y comunicar lo pertinente al Encargado del Tratamiento;</li>

                        <li>Suministrar al Encargado del Tratamiento, según el caso, únicamente datos cuyo Tratamiento esté previamente autorizado de conformidad con lo previsto en la presente ley;</li>

                        <li>Exigir al Encargado del Tratamiento en todo momento, el respeto a las condiciones de seguridad y privacidad de la información del Titular;</li>

                        <li>Tramitar las consultas y reclamos formulados en los términos señalados en la presente ley;</li>

                        <li>Adoptar un manual interno de políticas y procedimientos para garantizar el adecuado cumplimiento de la presente ley y en especial, para la atención de consultas y reclamos;</li>

                        <li>Informar al Encargado del Tratamiento cuando determinada información se encuentra en discusión por parte del Titular, una vez se haya presentado la reclamación y no haya finalizado el trámite respectivo;</li>


                        <li>Informar a solicitud del Titular sobre el uso dado a sus datos;</li>

                        <li>Informar a la autoridad de protección de datos cuando se presenten violaciones a los códigos de seguridad y existan riesgos en la administración de la información de los Titulares.</li>

                        <li> Cumplir las instrucciones y requerimientos que imparta la Superintendencia de Industria y Comercio.</li>

                    </ul><br>

                    <p>Así mismo los funcionarios, docentes, contratistas, entre otros encargados del tratamiento de datos en la Empresa GESCCOL E.I.C.E. y de acuerdo al artículo 18 de la Ley 1581 de 2012, deberán cumplir con los siguientes deberes:</p><br>

                    <ul class="list-decimal p-5">
                        <li>Garantizar al Titular, en todo tiempo, el pleno y efectivo ejercicio del derecho de hábeas data;</li>

                        <li>Conservar la información bajo las condiciones de seguridad necesarias para impedir su adulteración, pérdida, consulta, uso o acceso no autorizado o fraudulento;</li>

                        <li> Realizar oportunamente la actualización, rectificación o supresión de los datos en los términos de la presente ley;</li>

                        <li> Actualizar la información reportada por los Responsables del Tratamiento dentro de los cinco (5) días hábiles contados a partir de su recibo;</li>

                        <li>Tramitar las consultas y los reclamos formulados por los Titulares en los términos señalados en la presente ley;</li>

                        <li> Adoptar un manual interno de políticas y procedimientos para garantizar el adecuado cumplimiento de la presente ley y, en especial, para la atención de consultas y reclamos por parte de los Titulares;</li>

                        <li>Registrar en la base de datos la leyenda “reclamo en trámite” en la forma en que se regula en la presente ley;</li>

                        <li> Insertar en la base de datos la leyenda “información en discusión judicial” una vez notificado por parte de la autoridad competente sobre procesos judiciales relacionados con la calidad del dato personal;</li>

                        <li>Abstenerse de circular información que esté siendo controvertida por el Titular y cuyo bloqueo haya sido ordenado por la Superintendencia de Industria y Comercio;</li>

                        <li>Permitir el acceso a la información únicamente a las personas que pueden tener acceso a ella;</li>

                        <li>Informar a la Superintendencia de Industria y Comercio cuando se presenten violaciones a los códigos de seguridad y existan riesgos en la administración de la información de los Titulares;</li>

                        <li>Cumplir las instrucciones y requerimientos que imparta la Superintendencia de Industria y Comercio.</li>
                    </ul>

                    <h2 class="text-xl font-medium">RESPONSABLES DEL TRATAMIENTO DE LOS DATOS</h2><br>

                    <p><strong>Datos del Responsable: </strong>Gesccol E.I.C.E.</p><br>

                    <p>NIT No. 901560504-0</p><br>

                    <p><strong>Domicilio principal:</strong> calle 9 # 5 - 94 locales comerciales 1, 2, 3 y 4</p><br>

                    <p><strong>Página web:</strong> <a href="http://gesccol.gov.co/" class="text-blue-500">www.gesccol.gov.co</a> </p><br>

                    <p><strong>Correo electrónico:</strong> <a href="mailto:info@gesccol.gov.co" class="text-blue-500">info@gesccol.gov.co</a> </p><br>

                    <hr class="w-full h-1 text-gray-100"><br>

                     <h2 class="text-xl font-medium">POLÍTICA DE TRATAMIENTO DE DATOS PERSONALES</h2><br>

                     <p>Con la presente política de tratamiento de datos personales, se establecen directrices generales aplicables en la Empresa GESCCOL E.I.C.E.</p><br>

                     <ul class="list-decimal p-5">
                         <li>Cumplir con la Ley 1581 de 2012, decreto reglamentario 1377 de 2013 y toda la normatividad legal vigente colombiana que establezca disposiciones para la protección de datos personales.</li>

                         <li>Cumplir con la ley de protección de datos personales de acuerdo con lo contemplado en el Código de Ética y Buen Gobierno de la Empresa GESCCOL E.I.C.E.</li>

                         <li>Garantizar la efectividad, los principios y fines previstos en la Constitución y la Ley, donde es necesario que dentro de la Función Pública que toda información o documentación que se obtenga con razón de su cargo sea cuidada y custodiada para evitar una sanción disciplinaria, Ley 734 de 2002.</li>
                     </ul><br>

                     <a href="https://www.funcionpublica.gov.co/eva/gestornormativo/norma_pdf.php?i=49981" target="_blank" class="text-blue-500"><ion-icon name="download"></ion-icon></a>

                     <button onclick="imprimir()" class="text-blue-500"><ion-icon name="print"></ion-icon></button>
            </div>
        </div>

        {{-- layout-aside  --}}
        <aside class="w-full  border border-gray-200 p-5">
           <x-sidebar-nav>
            </x-sidebar-nav>
        </aside>
    </div>
</section>

@endsection