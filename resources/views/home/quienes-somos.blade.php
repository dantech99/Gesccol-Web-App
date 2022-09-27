@extends('layouts.template')

@section('title', 'Quienes Somos | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">¿Quienes Somos?</h1>
    </x-header-bar>
</header>

    <div class="container md:p-5 my-6 m-auto grid grid-cols-1 md:grid-cols-4">
        {{-- layout-seccion principal --}}
        <div class="container w-full col-span-3 p-4">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Quienes Somos</h1>
            </div>
            <div class="container flex justify-center py-2">
                <img src="{{asset('images/logo-gesccol.png')}}" alt="" class="w-80">
            </div>
            <div class="container h-auto mt-5">
                <p ><strong>LA EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E)</strong>, es una Empresa Industrial y Comercial del Estado, del orden Municipal de Sahagún – Córdoba, con personería jurídica, capital independiente y autonomía administrativa, organizada conforme a las normas legales vigentes; la cual estará adscrita a la Secretaría de Planeación Municipal para el proceso de seguimiento, control y vigilancia en lo sucesivo.<br>
                El domicilio y cede principal de la <strong>EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E)</strong>, estará ubicado en los locales comerciales 1, 2, 3 y 4 Ubicados en la calle 9 # 5 – 94 Barrio San Pedro de la Terminal de Transporte Terrestre del municipio de Sahagún, Departamento Córdoba.<br>
                La <strong>EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E)</strong>, tendrá una duración indefinida en atención a que el servicio público de gestión catastral debe ser prestado de manera permanente e ininterrumpida</p><br>

    
                 <div x-data="{ openedIndex: 1 }" class="flex flex-col p-4">

                    <div @click="openedIndex == 1 ? openedIndex = -1 : openedIndex = 1" class="mb-5 flex items-center bg-[#BED3F9] border-t border-b border-secondary p-4">
                    <h2 class="text-2xl font-bold">Objetivos y Funciones</h2>
                    <span :class="openedIndex == 1 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
                    </div>
                    <p>La EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E), tendrá y desarrollará el siguiente objeto social: </p><br>


                    <div x-show.transition.in.duration.800ms="openedIndex == 1" class="border p-4 mb-5  ">
                    <ul class="lista p-5">
                    <li>La prestación de servicios especializados de gestión catastral a nivel nacional, que incluyen entre otras las actividades de formación, actualización, conservación y difusión catastral, así como los procedimientos de enfoque catastral multipropósito adoptados para el efecto, en concordancia con lo establecido en la ley 1955 de 2.019 y sus decretos reglamentarios</li><br>

                    <li>Diseño e implementación de sistemas de información geográfica capaz de integrar, almacenar, editar, analizar, compartir y mostrar información geográficamente referenciada</li><br>

                    <li>la compra y venta de equipos de cómputo o informáticos</li><br>

                    <li>asesoría informática y tecnológica para el manejo eficiente de la información, incluyendo la capacitación, administración, proveyendo el recurso humano necesario para la gestión catastral en cualquier entidad pública del territorio nacional; </li><br>

                    <li>consultoría referida a los estudios para la ejecución de proyectos de inversión, estudios de diagnóstico, pre factibilidad o factibilidad para programas o proyectos específicos, así como las asesorías técnicas de coordinación, control y supervisión, interventoría, asesoría, gerencia de proyectos, dirección, programación y la ejecución de diseños, planos, anteproyectos y proyectos</li><br>

                    <li> estudios, diseño, ejecución, interventoría y supervisión de los diferentes procesos de gestión catastral, legalización y saneamiento predial, nomenclatura, estratificación y cualquier otro proceso correspondiente con el desarrollo urbano y rural</li><br>

                    <li>apoyo a la gestión administrativa de recaudo a las entidades del régimen público o privado, mediante la modernización e instrumentación del cobro y demás actividades relacionadas</li><br>

                    <li>la prestación de los servicios propios de las profesiones liberales</li><br>

                    <li>celebrar alianzas estratégicas, asociaciones a riesgo compartido, convenios y contratos y/o cooperación empresarial tecnológica</li><br>

                    <li>promover y formar para como accionista de cualquier sociedad pública, privada o de economía mixta, para adelantar actividades relacionadas con el objeto social o cualquier actividad lícita</li><br>

                    <li>comprar, vender o enajenar cualquier tipo de inmueble; 12) la adquisición a título oneroso de bienes muebles con destino de uso, el arrendamiento de los mismos; y/o el arrendamiento de toda clase de bienes para subarrendarlos, y el subarrendamiento de los mismos. </li><br>

                    <li>los demás actos y contratos regulados por la ley mercantil</li><br>

                    <li>la adquisición de bienes a título oneroso con destino a enajenarlos en igual forma, y la enajenación de los mismos</li><br>

                    <li>desarrollar cualquier actividad lícita tal y como lo establece el numeral 5 del artículo 5º de la Ley 1258 de 2.008</li><br>

                    <li>Elaborar y administrar el inventario nacional de bienes inmuebles mediante los procesos de formación, actualización de la formación y conservación catastral.</li><br>

                    <li>Producir, analizar y divulgar información catastral mediante el establecimiento de un sistema de información del territorio, que apoye la administración y el mercado eficiente de la tierra, coadyuve a la protección jurídica de la propiedad, facilite la planificación territorial de las entidades territoriales y contribuya al desarrollo sostenible del país</li><br>

                    <li>Conformar y mantener actualizado un sistema único nacional de información que integre las bases de datos de catastro y de registro con el fin de lograr la correcta identificación física, jurídica y económica de los predios. </li><br>

                    <li>Entregar a las entidades competentes la información básica para la liquidación y recaudo del impuesto predial unificado y demás gravámenes que tengan como base el avaluó catastral, de conformidad con las disposiciones legales vigentes. 20. Elaborar y mantener debidamente actualizado el sistema de información catastral. </li><br>

                    <li>Además podrá prestar cualquier otro servicio público a cargo del Municipio de Sahagún.</li><br>
                </ul>

                    </div>
                </div>

                
 
            </div>

        </div>

        {{-- layout-aside  --}}
        <aside class="w-full  border border-gray-200 p-5">
            <x-sidebar-nav>
            </x-sidebar-nav>
        </aside>
    </div>

@endsection