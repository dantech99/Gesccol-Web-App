@extends('layouts.template')

@section('title', 'Glosario | Gesccol')
    
@section('content')

{{-- glosario de terminos  --}}
<header class="container-xl">
    <x-header-bar>
        <h1 class=" text-5xl font-bold text-[#2299AA] m-auto text-center">Glosario De Terminos</h1>
    </x-header-bar>
</header>

{{-- descripcion glosario de terminos  --}}
<section class="container m-auto my-6">
    <div class="header py-6 p-5">
        <h1 class="text-2xl">Glosario de Terminos</h1>
        <p>consultar los conceptos de los terminos mas usados en gestion catastral, mantente informado y educado ante cualquier duda</p>
    </div>
    <div class="content">
        <div x-data="{ openedIndex: 1 }" class="flex flex-col p-4">

            
            {{--------------------------A--------------------------------}}
            <div @click="openedIndex == 1 ? openedIndex = -1 : openedIndex = 1" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
              <p class="text-xl font-bold text-primary">A</p>
              <span :class="openedIndex == 1 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>

            <div x-show.transition.in.duration.800ms="openedIndex == 1" class="border p-4 mb-5  bg-yellow-200">
             <strong>ACTUALIZACION DE VALORES:</strong>
             <p>El procedimiento destinado a modificar l os valores 
                unitarios, cuando los existentes hubieren concluido de 
                acuerdo a la Ley de este Reglamento.</p><br>

             <strong>ASENTAMIENTO HUMANO:</strong>
             <p>Toda porción de terreno habitado, urbanizado o no.</p><br>

             <strong>AVALÚO CATASTRAL:</strong>
             <p>Documento expedido por la autoridad catastral que 
                consigna el valor catastral o catastral provisional de un 
                predio, conforme a lo dispuesto por la Ley de Catastro del 
                Estado de Puebla:</p><br>

            <strong>AVALÚO COMERCIAL:</strong>
            <p>Documento que contiene el dictamen técnico que estima el
                valor de un inmueble a una fecha determinada, conforme a
                las reglas del mercado inmobiliario y a lo dispuesto en la Ley</p><br>

            </div>

            {{------------------------BCDE----------------------- --}}

            <div @click="openedIndex == 2 ? openedIndex = -1 : openedIndex = 2" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">B-C-D-E</p>
              <span :class="openedIndex == 2 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 2" class="border p-4 mb-5 bg-yellow-200">
             <strong>BIEN INMUEBLE:</strong>
             <p>Es la porción de suelo cuya característica es ser inmovible 
                y ubicado dentro de un espacio físico delimitado por una 
                poligonal y en su caso por las construcciones situadas 
                dentro de la misma; así como todas aquellas cosas 
                unidas permanentemente al suelo.</p><br>

            <strong>CARTOGRAFÍA CATASTRAL:</strong>
            <p>Conjunto de planos o mapas en los que se localizan geográficamente regiones, manzanas y predios.</p><br>

            <strong>CATASTRO:</strong>
            <p>Inventario de la propiedad raíz, estructurado por el conjunto de registros, padrones y documentos inherentes a la identificación, descripción, cartografía y valuación de los bienes inmuebles.
            </p><br>


            <strong>CÉDULA CATASTRAL:</strong>
            <p>Documento con el que se comprueba la información con 
            que está registrado un predio en el catastro</p><br>

            <strong>CLAVE CATASTRAL:</strong>
            <p>Conjunto de caracteres numéricos, que asigna la autoridad catastral de manera única a un predio para su identificación en el catastro, la cual se integrará de acuerdo con la normatividad que para tal efecto emita y publique el Instituto Registral y Catastral del Estado de Puebla</p><br>

            <strong>COEFICIENTE DE DEMÉRITO:</strong>
            <p>Factor o porcentaje que disminuye los valores unitarios de los predios</p><br>

            <strong>COEFICIENTE DE INCREMENTO:</strong>
            <p>Factor o porcentaje que aumenta los valores unitarios de los predios.</p><br>

            <strong>CONDOMINIO:</strong>
            <p>Grupo de departamentos, casas, locales o naves de un inmueble construido en forma vertical, horizontal o mixta, para uso habitacional, comercial o de servicios, industrial o mixto, susceptibles de ser aprovechados de maneraindependiente y que pertenecen a distintos propietarios, quienes gozan de de un derecho singular o exclusivo de propiedad respecto de su unidad de propiedad exclusiva, así como un derecho de copropiedad sobre los elementos y partes comunes.</p><br>

            <strong>CONSTRUCCIÓN:</strong>
            <p>La obra de cualquier tipo, destino o uso y que consta de cimientos o sin ellos, muros, paredes, y techos, inclusive los equipos o instalaciones adheridas permanentemente y que forman parte integrante de ella</p><br>

            <strong>CONSTRUCCIÓN PERMANENTE:</strong>
            <p>La que está adherida a un predio de manera fija, en condiciones tales que no puede separarse del suelo sin deterioro de la propia construcción.</p><br>

            <strong>CONSTRUCCIÓN PROVISIONAL:</strong>
            <p>Edificación que, por sus características, sólo será registrada en la cartografía catastral.</p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <strong></strong>
            <p></p><br>

            <p></p><br>
            


            </div>

              {{-------------------FGH---------------------------- --}}

            <div @click="openedIndex == 3 ? openedIndex = -1 : openedIndex = 3" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">F-G-H</p>
              <span :class="openedIndex == 3 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 3" class="border p-4 mb-5 bg-yellow-200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
            </div>

              {{---------------------IJKL-------------------------- --}}
              <div @click="openedIndex == 4 ? openedIndex = -1 : openedIndex = 4" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">I-J-K-L</p>
              <span :class="openedIndex == 4 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 4" class="border p-4 mb-5 bg-yellow-200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
            </div>

            {{-- -------------------MNOP------------------------------}}
            <div @click="openedIndex == 5 ? openedIndex = -1 : openedIndex = 5" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">M-N-O-P</p>
              <span :class="openedIndex == 5 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 5" class="border p-4 mb-5 bg-yellow-200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
            </div>

            {{-- -------------------QRSTUV------------------------------}}
            <div @click="openedIndex == 6 ? openedIndex = -1 : openedIndex = 6" class="mb-5 flex items-center bg-white border-t border-b border-secondary p-4">
                <p class="text-xl font-bold text-primary">Q-R-S-T-U-V</p>
              <span :class="openedIndex == 6 ? 'fa-chevron-down' : 'fa-chevron-up'" class="fas ml-3"></span>
            </div>
              <div x-show.transition.in.duration.800ms="openedIndex == 6" class="border p-4 mb-5 bg-yellow-200">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam varius vel magna lacinia mollis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque ligula neque, imperdiet nec est laoreet, pulvinar commodo odio. Vivamus eget eleifend libero. Fusce dolor nibh, porta eu gravida ut, maximus non erat.
            </div>
          </div>
    </div>
</section>

@endsection

