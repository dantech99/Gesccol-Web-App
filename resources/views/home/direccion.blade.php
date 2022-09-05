@extends('layouts.template')

@section('title', 'Quienes Somos - Direccion y Administracion | Gesccol')
    
@section('content')

<header>
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">¿Quienes Somos?</h1>
    </x-header-bar>
</header>

<section class="container m-auto h-auto my-10 p-5">
    <div class="grid md:grid-cols-4 grid-cols-1 gap-6">
        {{-- layout-seccion principal --}}
        <div class="container w-full col-span-3">
            <div class="flex bg-blue-700 h-10">
                <h1 class="m-auto ml-5 text-white text-xl font-medium">Direccion y Administracion</h1>
            </div>
            <div class="container h-auto mt-5">
                <p>La estructura de dirección y administración de la <strong>EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E)</strong>, estará conformada por una Junta Directiva y un representante legal que fungirá como Gerente, conforme con lo establecido en el artículo 88 de la ley 489 de 1998 y las disposiciones legales vigentes.</p><br><br>

                <h2 class="text-2xl font-bold">Junta Directiva</h2>
                <p>La <strong>EMPRESA GESTION CATASTRAL DE COLOMBIA (GESCCOL E.I.C.E)</strong>, tendrá una junta directiva constituida por un número impar de miembros y estará presidida por el alcalde del municipio de Sahagún o su delegado, e integrada de la siguiente forma</p><br>

                <ul class="lista p-5">
                    <li>Alcalde Municipal y/o su delegado, quién lo presidirá</li>
                    <li>El Secretario de Hacienda.</li>
                    <li>El Secretario de Planeación</li>
                    <li>Un (1) representante del sector productico y/o económico del Municipio, designado por el Alcalde</li>
                </ul><br>

                <h2 class="font-medium text-xl">Paragrafo Primero</h2>
                <p>El Alcalde Municipal a través de Acto Administrativo motivado, designara el representante del sector productico y/o económico del Municipio, que hará parte de la Junta Directiva. La persona designada podrá hacer parte de la Junta Directiva por un periodo de Un (01) año, el cual podrá ser reelegido.</p><br><br>

                <h2 class="text-2xl font-bold">Funciones de La Junta Directiva</h2>
                <ul class="lista p-5">
                    <li>1.  Determinar a iniciativa del gerente, la planta de cargos con las respectivas funciones y escala salarial, dentro de los límites legales que le sean aplicables</li>
                    <li>2.  Crear, suprimir o fusionar, a iniciativa del gerente, los cargos que considere necesarios para el correcto funcionamiento, de conformidad con las normas vigentes.</li>
                    <li>3.  Adoptar los estatutos internos de entidad y cualquier reforma que a ellos se introduzca.</li>
                    <li>4.  Formular las políticas generales de la empresa y, los planes, programas y proyectos que se deba desarrollar.</li>
                    <li>5.  Aprobar el proyecto de presupuesto de la empresa y los planes de negocio para los periodos que señale. Al hacerlo, se entienden autorizadas todas las operaciones incluidas en ellos y que se consideren necesarias para su cabal ejecución, tales como asignación de recursos, formas de financiación, fuentes de crédito, constitución de garantías, entre otras.</li>
                    <li>6.  Autorizar la participación en sociedades, consorcio, uniones temporales o cualquier otra forma de asociación permitida por la ley para el cumplimiento de su objeto.</li>
                    <li>7.  Autorizar al gerente para delegar en servidores del nivel directivo y asesor, algunas atribuciones que le sean propias y especialmente determinadas.</li>
                    <li>8.  Expedir, adoptar y modificar estatutos.</li>
                    <li>9.  Examinar, aprobar o improbar los estados financieros de fin de ejercicio y, las cuentas que deba rendir el gerente.</li>
                    <li>10. Autorizar al gerente para celebrar contratos de los regulados en las leyes 80 de 1.993, 489 de 1.998, Código Civil y de Comercio, a comprometer de vigencias futuras excepcionales con cargo a los ingresos que obtenga la empresa.</li>
                    <li>11. Autorizar la constitución de garantías, reales o personales, para respaldar sus obligaciones y de las empresas en las que se tenga alguna inversión de capital, pero limitadas hasta el porcentaje de participación de su capital.</li>
                    <li>12. Revisar y aprobar el manual de funciones de los empleados y el manual de contratación de la empresa.</li>
                    <li>13. Las demás que dispongan los estatutos y la ley.</li>
                </ul>
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