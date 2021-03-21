@extends('layouts.app')

@section('title')
    Sky Lubricantes
@endsection

@section('content')


    <section class="log">
        <div class="container2">
            <div class="row">
                <div class="col-md-10 col-xs-12 pix-inner-col col-sm-10 column ui-droppable">
                    <div class="pix-content">

                            <div class="container-fluid">


                                    <a  href="#"><img src="images/logo.png" class="logo" alt="logo" ></a>



                            </div>

                    </div>
                </div>
                <div class="col-md-2 col-xs-12 pix-inner-col col-sm-2">

                </div>
            </div>
        </div>
    </section>

    <div class="pix_section pix-padding-v-200 pix-portada">
        <img class="absol nocel" src="images/barra2.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 pix-padding-right-50 pix-margin-bottom-20 text-center">
                    <div class="iframe-container">
                        <div id="player"></div>
                    </div>


                    <h3 class="pix-white secondary-font text-left">
                            <span class="pix_edit_text big-text-50 "><strong>Pon tu negocio <br>
                            en movimiento</strong> </span><br>
                            <span class="red big-text-50"><strong> con Sky Lubricantes<br>
                    </strong></span>
                        </h3>

                </div>

                <div class="col-md-4 col-xs-12">
                    <img class="servimg" src="images/puntos.png" alt="">
                    <div class="pix-content formulario pix-padding-h-20 text-center " data-aos="fade-up" data-aos-delay="500">
                        <h3 class="pix-black secondary-font" style="margin: 5px 0px;">
                            <span class=""><strong>Registra tus datos</strong></span>
                        </h3>
                        <p class="big-text pix-black">
                            <span class="">Para recibir una llamada</span>
                        </p>
                        <div class="errors"></div>
                        <form id="form" method="post"  class="pix-form-style pixfort-form pix-form-light-white-bg">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre y Apellido">

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="Teléfono">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="rif" class="form-control" id="rif" placeholder="Razón Social">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <select  name="estado" class="form-control" id="estado">
                                    <option vlaue="">Estado</option>
                                    <option vlaue="Amazonas">Amazonas</option>
                                    <option vlaue="Anzoátegui">Anzoátegui</option>
                                    <option vlaue="Apure">Apure</option>
                                    <option vlaue="Aragua">Aragua</option>
                                    <option vlaue="Barinas">Barinas</option>
                                    <option vlaue="Bolívar">Bolívar</option>
                                    <option vlaue="Carabobo">Carabobo</option>
                                    <option vlaue="Cojedes">Cojedes</option>
                                    <option vlaue="Delta Amacuro">Delta Amacuro</option>
                                    <option vlaue="Distrito Federal">Distrito Federal</option>
                                    <option vlaue="Falcón">Falcón</option>
                                    <option vlaue="Guárico">Guárico</option>
                                    <option vlaue="Lara">Lara</option>
                                    <option vlaue="Mérida">Mérida</option>
                                    <option vlaue="Miranda">Miranda</option>
                                    <option vlaue="Monagas">Monagas</option>
                                    <option vlaue="Nueva Esparta">Nueva Esparta</option>
                                    <option vlaue="Portuguesa">Portuguesa</option>
                                    <option vlaue="Sucre">Sucre</option>
                                    <option vlaue="Táchira">Táchira</option>
                                    <option vlaue="Trujillo">Trujillo</option>
                                    <option vlaue="Vargas">Vargas</option>
                                    <option vlaue="Yaracuy">Yaracuy</option>
                                    <option vlaue="Zulia">Zulia</option>


                                </select>
                            </div>

                            <div class="flex">


                                <div class="form-group condicional" data-condition="(estado == 'Amazonas')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>

                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Maroa">Maroa</option>
                                    <option vlaue="Puerto Ayacucho">Puerto Ayacucho</option>
                                    <option vlaue="Puerto Páez">Puerto Páez</option>
                                    <option vlaue="San Carlos de Río Negro">San Carlos de Río Negro</option>
                                    <option vlaue="San Fernando de Atabapo">San Fernando de Atabapo</option>
                                    <option vlaue="San Fernando de Guainia">San Fernando de Guainia</option>
                                    <option vlaue="San Juan de Manapiare">San Juan de Manapiare</option>
                                    <option vlaue="San Simón de Cocuy">San Simón de Cocuy</option>
                                    <option vlaue="Santa Rosa de Amanadona">Santa Rosa de Amanadona</option>

                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Anzoátegui')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Anaco">Anaco</option>
                                    <option vlaue="Aragua de Barcelona">Aragua de Barcelona</option>
                                    <option vlaue="Atapirire">Atapirire</option>
                                    <option vlaue="Barbacoa">Barbacoa</option>
                                    <option vlaue="Barcelona">Barcelona</option>
                                    <option vlaue="Bergantín">Bergantín</option>
                                    <option vlaue="Boca de Uchire">Boca de Uchire</option>
                                    <option vlaue="Cachipo">Cachipo</option>
                                    <option vlaue="Caigua">Caigua</option>
                                    <option vlaue="Cantaura">Cantaura</option>
                                    <option vlaue="Clarines">Clarines</option>
                                    <option vlaue="El Carito">El Carito</option>
                                    <option vlaue="El Hatillo">El Hatillo</option>
                                    <option vlaue="El Morro de Barcelona">El Morro de Barcelona</option>
                                    <option vlaue="El Pao">El Pao</option>
                                    <option vlaue="El Pilar">El Pilar</option>
                                    <option vlaue="El Tigre">El Tigre</option>
                                    <option vlaue="Guanape">Guanape</option>
                                    <option vlaue="Guanta">Guanta</option>
                                    <option vlaue="Guaribe de Cajigal">Guaribe de Cajigal</option>
                                    <option vlaue="La Margarita">La Margarita</option>
                                    <option vlaue="Lecherías">Lecherías</option>
                                    <option vlaue="Los Altos de Santa Fe">Los Altos de Santa Fe</option>
                                    <option vlaue="Los Pilones">Los Pilones</option>
                                    <option vlaue="Mapire">Mapire</option>
                                    <option vlaue="Modulo de Boyacá">Modulo de Boyacá</option>
                                    <option vlaue="Modulo de Chuparin">Modulo de Chuparin</option>
                                    <option vlaue="Mundo Nuevo">Mundo Nuevo</option>
                                    <option vlaue="Naricual">Naricual</option>
                                    <option vlaue="Onoto">Onoto</option>
                                    <option vlaue="Pariaguán">Pariaguán</option>
                                    <option vlaue="Pertigalete">Pertigalete</option>
                                    <option vlaue="Píritu">Píritu</option>
                                    <option vlaue="Pozuelos">Pozuelos</option>
                                    <option vlaue="Puerto la Cruz">Puerto la Cruz</option>
                                    <option vlaue="Puerto Píritu">Puerto Píritu</option>
                                    <option vlaue="Sabana de Uchire">Sabana de Uchire</option>
                                    <option vlaue="San Diego de Cabrutica">San Diego de Cabrutica</option>
                                    <option vlaue="San Joaquín">San Joaquín</option>
                                    <option vlaue="San José de Guanipa">San José de Guanipa</option>
                                    <option vlaue="San Mateo">San Mateo</option>
                                    <option vlaue="San Miguel">San Miguel</option>
                                    <option vlaue="San Pablo">San Pablo</option>
                                    <option vlaue="San Tomé">San Tomé</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Santa Clara">Santa Clara</option>
                                    <option vlaue="Santa Cruz del Orinoco">Santa Cruz del Orinoco</option>
                                    <option vlaue="Santa Inés">Santa Inés</option>
                                    <option vlaue="Santa Rosa">Santa Rosa</option>
                                    <option vlaue="Uríca">Uríca</option>
                                    <option vlaue="Uverito">Uverito</option>
                                    <option vlaue="Valle Guanape">Valle Guanape</option>
                                    <option vlaue="Zuata">Zuata</option>

                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Apure')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Achaguas">Achaguas</option>
                                    <option vlaue="Apurito">Apurito</option>
                                    <option vlaue="Arichuna">Arichuna</option>
                                    <option vlaue="Biruaca">Biruaca</option>
                                    <option vlaue="Bruzual">Bruzual</option>
                                    <option vlaue="Camaguán">Camaguán</option>
                                    <option vlaue="Camatagua">Camatagua</option>
                                    <option vlaue="Cazorla">Cazorla</option>
                                    <option vlaue="Cunaviche Amacuro">Cunaviche</option>
                                    <option vlaue="El Samán de Apure">El Samán de Apure</option>
                                    <option vlaue="El Yagual">El Yagual</option>
                                    <option vlaue="Elorza">Elorza</option>
                                    <option vlaue="Guáchara">Guáchara</option>
                                    <option vlaue="Guasimal">Guasimal</option>
                                    <option vlaue="Guayabal">Guayabal</option>
                                    <option vlaue="La Trinidad de Orichuna">La Trinidad de Orichuna</option>
                                    <option vlaue="Mantecal">Mantecal</option>
                                    <option vlaue="Municipio Quintero">Municipio Quintero</option>
                                    <option vlaue="Puerto Nova">Puerto Nova</option>
                                    <option vlaue="San Fernando">San Fernando</option>
                                    <option vlaue="San Juan de Payara">San Juan de Payara</option>
                                    <option vlaue="San Rafael de Atamaica">San Rafael de Atamaica</option>
                                    <option vlaue="San Vicente">San Vicente</option>

                                </select>
                                <input type="hidden" name="zona" value="Andes">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Aragua')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="1º de Mayo">1º de Mayo</option>
                                    <option vlaue="10 de Diciembre">10 de Diciembre</option>
                                    <option vlaue="12 de Febrero">12 de Febrero</option>
                                    <option vlaue="12 de Octubre">12 de Octubre</option>
                                    <option vlaue="13 de Enero I, II, III">13 de Enero I, II, III</option>
                                    <option vlaue="13 de Junio">13 de Junio</option>
                                    <option vlaue="18 de Mayo">18 de Mayo</option>
                                    <option vlaue="23 de Enero">23 de Enero</option>
                                    <option vlaue="5 de Julio">5 de Julio</option>
                                    <option vlaue="Alayón">Alayón</option>
                                    <option vlaue="Alberto Solano">Alberto Solano</option>
                                    <option vlaue="Alí Primera">Alí Primera</option>
                                    <option vlaue="Andrés Bello">Andrés Bello</option>
                                    <option vlaue="Andrés Eloy">Andrés Eloy</option>
                                    <option vlaue="Andrés Eloy Blanco">Andrés Eloy Blanco</option>
                                    <option vlaue="Angélica de Lusinchi">Angélica de Lusinchi</option>
                                    <option vlaue="Apolo">Apolo</option>
                                    <option vlaue="Aquiles Nazoa">Aquiles Nazoa</option>
                                    <option vlaue="Aragüita">Aragüita</option>
                                    <option vlaue="Arias Blanco">Arias Blanco</option>
                                    <option vlaue="Arsenal">Arsenal</option>
                                    <option vlaue="Barbacoa">Barbacoa</option>
                                    <option vlaue="Barbacoas">Barbacoas</option>
                                    <option vlaue="Barrancón">Barrancón</option>
                                    <option vlaue="Base Aragua">Base Aragua</option>
                                    <option vlaue="Bella Vista">Bella Vista</option>
                                    <option vlaue="Bello Monte">Bello Monte</option>
                                    <option vlaue="Bello Monte I y II">Bello Monte I y II</option>
                                    <option vlaue="Bermúdez">Bermúdez</option>
                                    <option vlaue="Bolívar">Bolívar</option>
                                    <option vlaue="Bosque Lindo">Bosque Lindo</option>
                                    <option vlaue="Brisas del Lago">Brisas del Lago</option>
                                    <option vlaue="Buenos Aires">Buenos Aires</option>
                                    <option vlaue="Caballero">Caballero</option>
                                    <option vlaue="Cadillal">Cadillal</option>
                                    <option vlaue="Cagua">Cagua</option>
                                    <option vlaue="Calicanto">Calicanto</option>
                                    <option vlaue="Camatagua">Camatagua</option>
                                    <option vlaue="Camburito">Camburito</option>
                                    <option vlaue="Camejo">Camejo</option>
                                    <option vlaue="Campo Alegre">Campo Alegre</option>
                                    <option vlaue="Campo Claro">Campo Claro</option>
                                    <option vlaue="Campo Elías">Campo Elías</option>
                                    <option vlaue="Caña de Azúcar">Caña de Azúcar</option>
                                    <option vlaue="Cañaote">Cañaote</option>
                                    <option vlaue="Cantarrana">Cantarrana</option>
                                    <option vlaue="Cantor Nieve Río">Cantor Nieve Río</option>
                                    <option vlaue="Carlos Andrés Pérez">Carlos Andrés Pérez</option>
                                    <option vlaue="Carlos Maza">Carlos Maza</option>
                                    <option vlaue="Carmen de Cura">Carmen de Cura</option>
                                    <option vlaue="Carrizalito">Carrizalito</option>
                                    <option vlaue="Casanova Godoy">Casanova Godoy</option>
                                    <option vlaue="Casco de la Ciudad">Casco de la Ciudad</option>
                                    <option vlaue="Cata">Cata</option>
                                    <option vlaue="Cementerio">Cementerio</option>
                                    <option vlaue="Choroní">Choroní</option>
                                    <option vlaue="Ciudad Jardín">Ciudad Jardín</option>
                                    <option vlaue="Ciudad Universitaria">Ciudad Universitaria</option>
                                    <option vlaue="Codazzi">Codazzi</option>
                                    <option vlaue="Cooperativa los Olivos Nuevos">Cooperativa los Olivos Nuevos</option>
                                    <option vlaue="Cooperativa los Olivos Viejos">Cooperativa los Olivos Viejos</option>
                                    <option vlaue="Corianza">Corianza</option>
                                    <option vlaue="Corocito">Corocito</option>
                                    <option vlaue="Coromoto">Coromoto</option>
                                    <option vlaue="Curiepe">Curiepe</option>
                                    <option vlaue="Cuyagua">Cuyagua</option>
                                    <option vlaue="Doctor Pedro García">Doctor Pedro García</option>
                                    <option vlaue="El Béisbol">El Béisbol</option>
                                    <option vlaue="El Bosque">El Bosque</option>
                                    <option vlaue="El Carmen">El Carmen</option>
                                    <option vlaue="El Cementerio">El Cementerio</option>
                                    <option vlaue="El Centro">El Centro</option>
                                    <option vlaue="El Consejo">El Consejo</option>
                                    <option vlaue="El Esfuerzo">El Esfuerzo</option>
                                    <option vlaue="El Estadium">El Estadium</option>
                                    <option vlaue="El Hipódromo">El Hipódromo</option>
                                    <option vlaue="El Indio">El Indio</option>
                                    <option vlaue="El Lago">El Lago</option>
                                    <option vlaue="El Lechosal">El Lechosal</option>
                                    <option vlaue="El Mácaro">El Mácaro</option>
                                    <option vlaue="El Maomo">El Maomo</option>
                                    <option vlaue="El Milagro">El Milagro</option>
                                    <option vlaue="El Nido">El Nido</option>
                                    <option vlaue="El Ortiseño">El Ortiseño</option>
                                    <option vlaue="El Pinal">El Pinal</option>
                                    <option vlaue="El Progreso">El Progreso</option>
                                    <option vlaue="El Recreo">El Recreo</option>
                                    <option vlaue="El Recurso">El Recurso</option>
                                    <option vlaue="El Remanso">El Remanso</option>
                                    <option vlaue="El Tierral">El Tierral</option>
                                    <option vlaue="El Topo">El Topo</option>
                                    <option vlaue="El Toquito">El Toquito</option>
                                    <option vlaue="El Toro">El Toro</option>
                                    <option vlaue="El Trébol">El Trébol</option>
                                    <option vlaue="El Triunfo">El Triunfo</option>
                                    <option vlaue="El Valle de Santa Rita">El Valle de Santa Rita</option>
                                    <option vlaue="El Viñedo">El Viñedo</option>
                                    <option vlaue="Ezequiel Zamora">Ezequiel Zamora</option>
                                    <option vlaue="Francisco de Miranda">Francisco de Miranda</option>
                                    <option vlaue="Funda Villa I y II">Funda Villa I y II</option>
                                    <option vlaue="Fundación Mendoza">Fundación Mendoza</option>
                                    <option vlaue="Girardot">Girardot</option>
                                    <option vlaue="Guanarito">Guanarito</option>
                                    <option vlaue="Guaracarima">Guaracarima</option>
                                    <option vlaue="Guaruto">Guaruto</option>
                                    <option vlaue="Guayabita">Guayabita</option>
                                    <option vlaue="Guayamura">Guayamura</option>
                                    <option vlaue="Güere">Güere</option>
                                    <option vlaue="Güerito">Güerito</option>
                                    <option vlaue="Guillen">Guillen</option>
                                    <option vlaue="Güiripa">Güiripa</option>
                                    <option vlaue="Independencia">Independencia</option>
                                    <option vlaue="Jabillar">Jabillar</option>
                                    <option vlaue="Jaime II">Jaime II</option>
                                    <option vlaue="José Antonio Páez">José Antonio Páez</option>
                                    <option vlaue="José Casanova Godoy">José Casanova Godoy</option>
                                    <option vlaue="José Félix Rivas">José Félix Rivas</option>
                                    <option vlaue="José Gregorio Hernández">José Gregorio Hernández</option>
                                    <option vlaue="Juan Moreno">Juan Moreno</option>
                                    <option vlaue="Juana Medina">Juana Medina</option>
                                    <option vlaue="Julio Bracho">Julio Bracho</option>
                                    <option vlaue="La Arboleda">La Arboleda</option>
                                    <option vlaue="La Atascoza">La Atascoza</option>
                                    <option vlaue="La Avanzada">La Avanzada</option>
                                    <option vlaue="La Barraca">La Barraca</option>
                                    <option vlaue="La Candelaria">La Candelaria</option>
                                    <option vlaue="La Capillita">La Capillita</option>
                                    <option vlaue="La Carpiera">La Carpiera</option>
                                    <option vlaue="La Chapa">La Chapa</option>
                                    <option vlaue="La Chatarrera">La Chatarrera</option>
                                    <option vlaue="La Concepción">La Concepción</option>
                                    <option vlaue="La Coromoto">La Coromoto</option>
                                    <option vlaue="La Crispera">La Crispera</option>
                                    <option vlaue="La Cruz">La Cruz</option>
                                    <option vlaue="La Cuarta">La Cuarta</option>
                                    <option vlaue="La Curia">La Curia</option>
                                    <option vlaue="La Democracia">La Democracia</option>
                                    <option vlaue="La Encrucijada">La Encrucijada</option>
                                    <option vlaue="La Esmeralda">La Esmeralda</option>
                                    <option vlaue="La Esmeraldita">La Esmeraldita</option>
                                    <option vlaue="La Floresta">La Floresta</option>
                                    <option vlaue="La Frontera">La Frontera</option>
                                    <option vlaue="La Fuente">La Fuente</option>
                                    <option vlaue="La Fundación">La Fundación</option>
                                    <option vlaue="La Gallera">La Gallera</option>
                                    <option vlaue="La Hacienda">La Hacienda</option>
                                    <option vlaue="La Haciendita">La Haciendita</option>
                                    <option vlaue="La Hamaca">La Hamaca</option>
                                    <option vlaue="La Herrereña">La Herrereña</option>
                                    <option vlaue="La Iguana">La Iguana</option>
                                    <option vlaue="La Independencia">La Independencia</option>
                                    <option vlaue="La Isabelita">La Isabelita</option>
                                    <option vlaue="La Julia">La Julia</option>
                                    <option vlaue="La Majada">La Majada</option>
                                    <option vlaue="La Maracaya">La Maracaya</option>
                                    <option vlaue="La Mora">La Mora</option>
                                    <option vlaue="La Morita I y III">La Morita I y III</option>
                                    <option vlaue="La Olla">La Olla</option>
                                    <option vlaue="La Ovallera">La Ovallera</option>
                                    <option vlaue="La Participación">La Participación</option>
                                    <option vlaue="La Paz">La Paz</option>
                                    <option vlaue="La Pedrera">La Pedrera</option>
                                    <option vlaue="La Pica">La Pica</option>
                                    <option vlaue="La Primavera">La Primavera</option>
                                    <option vlaue="La Providencia">La Providencia</option>
                                    <option vlaue="La Punta">La Punta</option>
                                    <option vlaue="La Represa">La Represa</option>
                                    <option vlaue="La Rinconada">La Rinconada</option>
                                    <option vlaue="La Romana Nueva">La Romana Nueva</option>
                                    <option vlaue="La Romana Vieja">La Romana Vieja</option>
                                    <option vlaue="La Rosa">La Rosa</option>
                                    <option vlaue="La Segundera">La Segundera</option>
                                    <option vlaue="La Soledad">La Soledad</option>
                                    <option vlaue="Las Acacias">Las Acacias</option>
                                    <option vlaue="Las Animas I y II">Las Animas I y II</option>
                                    <option vlaue="Las Brisas">Las Brisas</option>
                                    <option vlaue="Las Carmenes">Las Carmenes</option>
                                    <option vlaue="Las Casitas">Las Casitas</option>
                                    <option vlaue="Las Cruces">Las Cruces</option>
                                    <option vlaue="Las Delicias">Las Delicias</option>
                                    <option vlaue="Las Flores">Las Flores</option>
                                    <option vlaue="Las Luisas">Las Luisas</option>
                                    <option vlaue="Las Mayas">Las Mayas</option>
                                    <option vlaue="Las Mercedes">Las Mercedes</option>
                                    <option vlaue="Las Peñitas">Las Peñitas</option>
                                    <option vlaue="Las Tunas">Las Tunas</option>
                                    <option vlaue="Las Vegas">Las Vegas</option>
                                    <option vlaue="Las Vegas I y II">Las Vegas I y II</option>
                                    <option vlaue="Libertad">Libertad</option>
                                    <option vlaue="Libertador">Libertador</option>
                                    <option vlaue="Los Cachos">Los Cachos</option>
                                    <option vlaue="Los Caobos">Los Caobos</option>
                                    <option vlaue="Los Cerritos">Los Cerritos</option>
                                    <option vlaue="Los Chaguaramos">Los Chaguaramos</option>
                                    <option vlaue="Los Cocos">Los Cocos</option>
                                    <option vlaue="Los Colorados">Los Colorados</option>
                                    <option vlaue="Los Galpones">Los Galpones</option>
                                    <option vlaue="Los Hornos">Los Hornos</option>
                                    <option vlaue="Los Jabillos">Los Jabillos</option>
                                    <option vlaue="Los Manguitos">Los Manguitos</option>
                                    <option vlaue="Los Naranjos">Los Naranjos</option>
                                    <option vlaue="Los Nísperos">Los Nísperos</option>
                                    <option vlaue="Los Overos">Los Overos</option>
                                    <option vlaue="Los Pinos">Los Pinos</option>
                                    <option vlaue="Los Próceres">Los Próceres</option>
                                    <option vlaue="Los Rauceos">Los Rauceos</option>
                                    <option vlaue="Los Rosales">Los Rosales</option>
                                    <option vlaue="Los Samanes">Los Samanes</option>
                                    <option vlaue="Los Tanques">Los Tanques</option>
                                    <option vlaue="Los Tubos">Los Tubos</option>
                                    <option vlaue="Lourdes">Lourdes</option>
                                    <option vlaue="Magdaleno">Magdaleno</option>
                                    <option vlaue="Malariología Antonio Aranguren">Malariología Antonio Aranguren</option>
                                    <option vlaue="Maracay II">Maracay II</option>
                                    <option vlaue="Marcelo Guzmán">Marcelo Guzmán</option>
                                    <option vlaue="María Cristina">María Cristina</option>
                                    <option vlaue="Mario Briceño Iragorry">Mario Briceño Iragorry</option>
                                    <option vlaue="Mariscal Sucre">Mariscal Sucre</option>
                                    <option vlaue="Mata Redonda">Mata Redonda</option>
                                    <option vlaue="Mata Seca">Mata Seca</option>
                                    <option vlaue="Medina Angarita">Medina Angarita</option>
                                    <option vlaue="Mendoza">Mendoza</option>
                                    <option vlaue="Miranda">Miranda</option>
                                    <option vlaue="Monserrat">Monserrat</option>
                                    <option vlaue="Mora 2">Mora 2</option>
                                    <option vlaue="Morean Soto">Morean Soto</option>
                                    <option vlaue="Morian Soto">Morian Soto</option>
                                    <option vlaue="Morita II">Morita II</option>
                                    <option vlaue="Negro Primero">Negro Primero</option>
                                    <option vlaue="Niño de Jesús">Niño de Jesús</option>
                                    <option vlaue="Oasis">Oasis</option>
                                    <option vlaue="Ocumare de la Costa">Ocumare de la Costa</option>
                                    <option vlaue="Ocumarito">Ocumarito</option>
                                    <option vlaue="Orope">Orope</option>
                                    <option vlaue="Palma Real">Palma Real</option>
                                    <option vlaue="Palo Negro">Palo Negro</option>
                                    <option vlaue="Paraparal I, II, III">Paraparal I, II, III</option>
                                    <option vlaue="Payita">Payita</option>
                                    <option vlaue="Peñuela Ruiz">Peñuela Ruiz</option>
                                    <option vlaue="Piñonal">Piñonal</option>
                                    <option vlaue="Piñonal Sur">Piñonal Sur</option>
                                    <option vlaue="Polvorín">Polvorín</option>
                                    <option vlaue="Portachuelo">Portachuelo</option>
                                    <option vlaue="Primitivo de Jesús">Primitivo de Jesús</option>
                                    <option vlaue="Pueblo Nuevo">Pueblo Nuevo</option>
                                    <option vlaue="Puerto Colombia">Puerto Colombia</option>
                                    <option vlaue="Quebrada de Pipe">Quebrada de Pipe</option>
                                    <option vlaue="Rafael Caldera">Rafael Caldera</option>
                                    <option vlaue="Rafael Urdaneta">Rafael Urdaneta</option>
                                    <option vlaue="Residencias Coromoto">Residencias Coromoto</option>
                                    <option vlaue="Río Blanco I y II">Río Blanco I y II</option>
                                    <option vlaue="Rodríguez Palencia">Rodríguez Palencia</option>
                                    <option vlaue="Rómulo Gallegos">Rómulo Gallegos</option>
                                    <option vlaue="Rosario de Paya">Rosario de Paya</option>
                                    <option vlaue="Ruiz">Ruiz</option>
                                    <option vlaue="Sabaneta">Sabaneta</option>
                                    <option vlaue="Samán de Güere">Samán de Güere</option>
                                    <option vlaue="San Carlos">San Carlos</option>
                                    <option vlaue="San Casimiro">San Casimiro</option>
                                    <option vlaue="San Francisco">San Francisco</option>
                                    <option vlaue="San Francisco de Asís">San Francisco de Asís</option>
                                    <option vlaue="San Francisco de Cara">San Francisco de Cara</option>
                                    <option vlaue="San Ignacio">San Ignacio</option>
                                    <option vlaue="San Isidro">San Isidro</option>
                                    <option vlaue="San Jacinto">San Jacinto</option>
                                    <option vlaue="San Joaquín de Turmero">San Joaquín de Turmero</option>
                                    <option vlaue="San José">San José</option>
                                    <option vlaue="San Luis">San Luis</option>
                                    <option vlaue="San Mateo">San Mateo</option>
                                    <option vlaue="San Miguel">San Miguel</option>
                                    <option vlaue="San Pablo">San Pablo</option>
                                    <option vlaue="San Pedro Alejandrino">San Pedro Alejandrino</option>
                                    <option vlaue="San Sebastián">San Sebastián</option>
                                    <option vlaue="San Vicente">San Vicente</option>
                                    <option vlaue="San Vicente I y II">San Vicente I y II</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Santa Cruz">Santa Cruz</option>
                                    <option vlaue="Santa Eduvígis">Santa Eduvígis</option>
                                    <option vlaue="Santa Elena">Santa Elena</option>
                                    <option vlaue="Santa Rita">Santa Rita</option>
                                    <option vlaue="Santa Rosa">Santa Rosa</option>
                                    <option vlaue="Santa Rosalía">Santa Rosalía</option>
                                    <option vlaue="Santo Domingo">Santo Domingo</option>
                                    <option vlaue="Sector E">Sector E</option>
                                    <option vlaue="Sector el Mijaú">Sector el Mijaú</option>
                                    <option vlaue="Sector Jovalito">Sector Jovalito</option>
                                    <option vlaue="Sector la Ceiba">Sector la Ceiba</option>
                                    <option vlaue="Sector la Vaquera">Sector la Vaquera</option>
                                    <option vlaue="Sector Punta del Monte">Sector Punta del Monte</option>
                                    <option vlaue="Sector San José">Sector San José</option>
                                    <option vlaue="Sergio Medina">Sergio Medina</option>
                                    <option vlaue="Simón Bolívar">Simón Bolívar</option>
                                    <option vlaue="Simón Rodríguez">Simón Rodríguez</option>
                                    <option vlaue="Soco">Soco</option>
                                    <option vlaue="Sorocaima I y II">Sorocaima I y II</option>
                                    <option vlaue="Sucre">Sucre</option>
                                    <option vlaue="Surupei">Surupei</option>
                                    <option vlaue="Taguay">Taguay</option>
                                    <option vlaue="Tamarindo">Tamarindo</option>
                                    <option vlaue="Tapatapa">Tapatapa</option>
                                    <option vlaue="Tejerías">Tejerías</option>
                                    <option vlaue="Tierra Amarilla">Tierra Amarilla</option>
                                    <option vlaue="Tinapuey I y II">Tinapuey I y II</option>
                                    <option vlaue="Tiuna">Tiuna</option>
                                    <option vlaue="Toronjal">Toronjal</option>
                                    <option vlaue="Trapiche del Medio">Trapiche del Medio</option>
                                    <option vlaue="Tucutunemo">Tucutunemo</option>
                                    <option vlaue="Turagua">Turagua</option>
                                    <option vlaue="Turmero">Turmero</option>
                                    <option vlaue="Unión">Unión</option>
                                    <option vlaue="Urbanización Andrés Bello">Urbanización Andrés Bello</option>
                                    <option vlaue="Urbanización Base Aragua">Urbanización Base Aragua</option>
                                    <option vlaue="Urbanización Bermúdez">Urbanización Bermúdez</option>
                                    <option vlaue="Urbanización Calicanto">Urbanización Calicanto</option>
                                    <option vlaue="Urbanización Caña de Azucar">Urbanización Caña de Azucar</option>
                                    <option vlaue="Urbanización el Castaño">Urbanización el Castaño</option>
                                    <option vlaue="Urbanización el Limón">Urbanización el Limón</option>
                                    <option vlaue="Urbanización el Toro">Urbanización el Toro</option>
                                    <option vlaue="Urbanización Fundación Mendoza">Urbanización Fundación Mendoza</option>
                                    <option vlaue="Urbanización Guey">Urbanización Guey</option>
                                    <option vlaue="Urbanización José Felix Rivas">Urbanización José Felix Rivas</option>
                                    <option vlaue="Urbanización la Arboleda">Urbanización la Arboleda</option>
                                    <option vlaue="Urbanización la Candelaria">Urbanización la Candelaria</option>
                                    <option vlaue="Urbanización la Floresta">Urbanización la Floresta</option>
                                    <option vlaue="Urbanización la Rinconada">Urbanización la Rinconada</option>
                                    <option vlaue="Urbanización la Romana">Urbanización la Romana</option>
                                    <option vlaue="Urbanización la Soledad">Urbanización la Soledad</option>
                                    <option vlaue="Urbanización las Acacias">Urbanización las Acacias</option>
                                    <option vlaue="Urbanización los Caobos">Urbanización los Caobos</option>
                                    <option vlaue="Urbanización los Naranjos">Urbanización los Naranjos</option>
                                    <option vlaue="Urbanización Maracay">Urbanización Maracay</option>
                                    <option vlaue="Urbanización Piñonal">Urbanización Piñonal</option>
                                    <option vlaue="Urbanización Piñonal Sur">Urbanización Piñonal Sur</option>
                                    <option vlaue="Urbanización San Isidro">Urbanización San Isidro</option>
                                    <option vlaue="Urbanización San Jacinto">Urbanización San Jacinto</option>
                                    <option vlaue="Urbanización Santa Fé">Urbanización Santa Fé</option>
                                    <option vlaue="Urbanización Sergio Medina">Urbanización Sergio Medina</option>
                                    <option vlaue="Urbanización Tiuna">Urbanización Tiuna</option>
                                    <option vlaue="Valle de Morín">Valle de Morín</option>
                                    <option vlaue="Valle Fresco">Valle Fresco</option>
                                    <option vlaue="Valle Lindo I, II">Valle Lindo I, II</option>
                                    <option vlaue="Valle Morín">Valle Morín</option>
                                    <option vlaue="Valle Verde">Valle Verde</option>
                                    <option vlaue="Vía Colonia Tovar">Vía Colonia Tovar</option>
                                    <option vlaue="Victoria">Victoria</option>
                                    <option vlaue="Villa de Cura">Villa de Cura</option>
                                    <option vlaue="Villa Zuica">Villa Zuica</option>
                                    <option vlaue="Yarabí">Yarabí</option>
                                    <option vlaue="Zamora">Zamora</option>
                                    <option vlaue="Zuata">Zuata</option>
                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Barinas')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Altamira">Altamira</option>
                                    <option vlaue="Arismendi">Arismendi</option>
                                    <option vlaue="Barinas">Barinas</option>
                                    <option vlaue="Barinitas">Barinitas</option>
                                    <option vlaue="Barrancas">Barrancas</option>
                                    <option vlaue="Bruzual">Bruzual</option>
                                    <option vlaue="Calderas">Calderas</option>
                                    <option vlaue="Capitanejo">Capitanejo</option>
                                    <option vlaue="Chameta">Chameta</option>
                                    <option vlaue="Ciudad Bolivia">Ciudad Bolivia</option>
                                    <option vlaue="Ciudad de Nutrias">Ciudad de Nutrias</option>
                                    <option vlaue="Dolores">Dolores</option>
                                    <option vlaue="El Cantón">El Cantón</option>
                                    <option vlaue="El Real">El Real</option>
                                    <option vlaue="El Regalo">El Regalo</option>
                                    <option vlaue="Guadarrama">Guadarrama</option>
                                    <option vlaue="La Cochinilla">La Cochinilla</option>
                                    <option vlaue="La Luz">La Luz</option>
                                    <option vlaue="Libertad">Libertad</option>
                                    <option vlaue="Maporal">Maporal</option>
                                    <option vlaue="Mijagual">Mijagual</option>
                                    <option vlaue="Obispos">Obispos</option>
                                    <option vlaue="Pedraza la Vieja">Pedraza la Vieja</option>
                                    <option vlaue="Puerto Nutrias">Puerto Nutrias</option>
                                    <option vlaue="Quebrada Seca">Quebrada Seca</option>
                                    <option vlaue="Quintero">Quintero</option>
                                    <option vlaue="Sabaneta">Sabaneta</option>
                                    <option vlaue="Sacopó">Sacopó</option>
                                    <option vlaue="San Rafael de Canaguá">San Rafael de Canaguá</option>
                                    <option vlaue="San Silvestre">San Silvestre</option>
                                    <option vlaue="San Vicente">San Vicente</option>
                                    <option vlaue="Santa Bárbara">Santa Bárbara</option>
                                    <option vlaue="Santa Catalina">Santa Catalina</option>
                                    <option vlaue="Santa Inés">Santa Inés</option>
                                    <option vlaue="Santa Lucía">Santa Lucía</option>
                                    <option vlaue="Santa Rosa">Santa Rosa</option>
                                    <option vlaue="Torunos">Torunos</option>
                                    <option vlaue="Veguitas">Veguitas</option>


                                </select>
                                <input type="hidden" name="zona" value="Andes">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Bolívar')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >


                                    <option vlaue="Aripao">Aripao</option>
                                    <option vlaue="Cabruta">Cabruta</option>
                                    <option vlaue="Caicara del Orinoco">Caicara del Orinoco</option>
                                    <option vlaue="Ciudad Bolívar">Ciudad Bolívar</option>
                                    <option vlaue="Ciudad Guayana">Ciudad Guayana</option>
                                    <option vlaue="Ciudad Piar">Ciudad Piar</option>
                                    <option vlaue="Cuchiberos">Cuchiberos</option>
                                    <option vlaue="El Callao">El Callao</option>
                                    <option vlaue="El Dorado">El Dorado</option>
                                    <option vlaue="El Manteco">El Manteco</option>
                                    <option vlaue="El Miamo">El Miamo</option>
                                    <option vlaue="El Palmar">El Palmar</option>
                                    <option vlaue="El Pao">El Pao</option>
                                    <option vlaue="Guasipati">Guasipati</option>
                                    <option vlaue="Icabarú">Icabarú</option>
                                    <option vlaue="Jabillal">Jabillal</option>
                                    <option vlaue="Kanavayén">Kanavayén</option>
                                    <option vlaue="La Canoa">La Canoa</option>
                                    <option vlaue="La Paragua">La Paragua</option>
                                    <option vlaue="La Urbina">La Urbina</option>
                                    <option vlaue="Las Bonitas">Las Bonitas</option>
                                    <option vlaue="Las Majadas">Las Majadas</option>
                                    <option vlaue="Las Trincheras">Las Trincheras</option>
                                    <option vlaue="Los Castillos de Guayana">Los Castillos de Guayana</option>
                                    <option vlaue="Los Morichales">Los Morichales</option>
                                    <option vlaue="Maripa">Maripa</option>
                                    <option vlaue="Matanzas">Matanzas</option>
                                    <option vlaue="Moitaco">Moitaco</option>
                                    <option vlaue="Puerto Ordáz">Puerto Ordáz</option>
                                    <option vlaue="Puruey">Puruey</option>
                                    <option vlaue="San Félix">San Félix</option>
                                    <option vlaue="San Francisco de la Paragua">San Francisco de la Paragua</option>
                                    <option vlaue="San Pedro de las Bocas">San Pedro de las Bocas</option>
                                    <option vlaue="Santa Cruz de Orinoco">Santa Cruz de Orinoco</option>
                                    <option vlaue="Santa Elena de Uairén">Santa Elena de Uairén</option>
                                    <option vlaue="Santa Rosalía">Santa Rosalía</option>
                                    <option vlaue="Santa Teresa de Canavayen">Santa Teresa de Canavayen</option>
                                    <option vlaue="Soledad">Soledad</option>
                                    <option vlaue="Tumeremo">Tumeremo</option>
                                    <option vlaue="Upata">Upata</option>
                                    <option vlaue="Vista Hermosa">Vista Hermosa</option>


                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Carabobo')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >


                                    <option vlaue="1º de Mayo">1º de Mayo</option>
                                    <option vlaue="13 de Septiembre">13 de Septiembre</option>
                                    <option vlaue="19 de Abril">19 de Abril</option>
                                    <option vlaue="24 Horas">24 Horas</option>
                                    <option vlaue="3 de Mayo">3 de Mayo</option>
                                    <option vlaue="Actoto Campesino Mirandita">Actoto Campesino Mirandita</option>
                                    <option vlaue="Agua Blanca">Agua Blanca</option>
                                    <option vlaue="Alegría">Alegría</option>
                                    <option vlaue="Alexander Burgos">Alexander Burgos</option>
                                    <option vlaue="Altos de Guaparo">Altos de Guaparo</option>
                                    <option vlaue="Ambrosio Plaza">Ambrosio Plaza</option>
                                    <option vlaue="América">América</option>
                                    <option vlaue="Andrés Bello">Andrés Bello</option>
                                    <option vlaue="Antonio José de Sucre Norte, Sur">Antonio José de Sucre Norte, Sur</option>
                                    <option vlaue="Aquiles Nazoa">Aquiles Nazoa</option>
                                    <option vlaue="Armando Celli">Armando Celli</option>
                                    <option vlaue="Atlas">Atlas</option>
                                    <option vlaue="Bárbula">Bárbula</option>
                                    <option vlaue="Barrera">Barrera</option>
                                    <option vlaue="Base Naval">Base Naval</option>
                                    <option vlaue="Bejuma">Bejuma</option>
                                    <option vlaue="Bella Vista I, II, III Etapa">Bella Vista I, II, III Etapa</option>
                                    <option vlaue="Bello Monte 1, 2, 3">Bello Monte 1, 2, 3</option>
                                    <option vlaue="Big Low Center">Big Low Center</option>
                                    <option vlaue="Boca de Aroa">Boca de Aroa</option>
                                    <option vlaue="Boca de Tocuyo">Boca de Tocuyo</option>
                                    <option vlaue="Bocaina 1 y 2">Bocaina 1 y 2</option>
                                    <option vlaue="Borburata">Borburata</option>
                                    <option vlaue="Bosque Serino">Bosque Serino</option>
                                    <option vlaue="Brisas del Sur">Brisas del Sur</option>
                                    <option vlaue="Brisas del Terminal">Brisas del Terminal</option>
                                    <option vlaue="Cabriales">Cabriales</option>
                                    <option vlaue="Camoruco">Camoruco</option>
                                    <option vlaue="Campo Alegre">Campo Alegre</option>
                                    <option vlaue="Campo Solo">Campo Solo</option>
                                    <option vlaue="Canaima">Canaima</option>
                                    <option vlaue="Cañaveral">Cañaveral</option>
                                    <option vlaue="Canoabo">Canoabo</option>
                                    <option vlaue="Carabobo">Carabobo</option>
                                    <option vlaue="Carmen Norte, Sur">Carmen Norte, Sur</option>
                                    <option vlaue="Central Tacarigua">Central Tacarigua</option>
                                    <option vlaue="Centro de Valencia">Centro de Valencia</option>
                                    <option vlaue="Cesar Giro">Cesar Giro</option>
                                    <option vlaue="Chaguaramal">Chaguaramal</option>
                                    <option vlaue="Chirgua">Chirgua</option>
                                    <option vlaue="Ciudad Jardín Mañongo">Ciudad Jardín Mañongo</option>
                                    <option vlaue="Colinas de Guataparo">Colinas de Guataparo</option>
                                    <option vlaue="Concordia">Concordia</option>
                                    <option vlaue="Coromoto">Coromoto</option>
                                    <option vlaue="Daimer">Daimer</option>
                                    <option vlaue="Democracia 1 y 2">Democracia 1 y 2</option>
                                    <option vlaue="Don Bosco">Don Bosco</option>
                                    <option vlaue="El Bosque">El Bosque</option>
                                    <option vlaue="El Calvario">El Calvario</option>
                                    <option vlaue="El Cambur">El Cambur</option>
                                    <option vlaue="El Candelero">El Candelero</option>
                                    <option vlaue="El Combate">El Combate</option>
                                    <option vlaue="El Consejo">El Consejo</option>
                                    <option vlaue="El Morro 1 y 2">El Morro 1 y 2</option>
                                    <option vlaue="El Pajal">El Pajal</option>
                                    <option vlaue="El Palito">El Palito</option>
                                    <option vlaue="El Palotal">El Palotal</option>
                                    <option vlaue="El Parral">El Parral</option>
                                    <option vlaue="El Prado">El Prado</option>
                                    <option vlaue="El Prebo I, II, III">El Prebo I, II, III</option>
                                    <option vlaue="El Prebol">El Prebol</option>
                                    <option vlaue="El Recreo">El Recreo</option>
                                    <option vlaue="El Rincón">El Rincón</option>
                                    <option vlaue="El Roble">El Roble</option>
                                    <option vlaue="El Romancero">El Romancero</option>
                                    <option vlaue="El Socorro">El Socorro</option>
                                    <option vlaue="El Trigalito">El Trigalito</option>
                                    <option vlaue="El triunfo">El triunfo</option>
                                    <option vlaue="El Trompillo">El Trompillo</option>
                                    <option vlaue="El Viñedo">El Viñedo</option>
                                    <option vlaue="Escalona">Escalona</option>
                                    <option vlaue="Escorcha">Escorcha</option>
                                    <option vlaue="Eutimio Rivas">Eutimio Rivas</option>
                                    <option vlaue="Ezequiel Zamora">Ezequiel Zamora</option>
                                    <option vlaue="Federación">Federación</option>
                                    <option vlaue="Finca Los Taladros">Finca Los Taladros</option>
                                    <option vlaue="Flor Amarilla">Flor Amarilla</option>
                                    <option vlaue="Flor Amarillo">Flor Amarillo</option>
                                    <option vlaue="Flores">Flores</option>
                                    <option vlaue="Florida Norte y Sur">Florida Norte y Sur</option>
                                    <option vlaue="Francisco de Miranda">Francisco de Miranda</option>
                                    <option vlaue="Freddy Franco">Freddy Franco</option>
                                    <option vlaue="Goaigoaza">Goaigoaza</option>
                                    <option vlaue="Guacara">Guacara</option>
                                    <option vlaue="Guataparo Country Club">Guataparo Country Club</option>
                                    <option vlaue="Güigüe">Güigüe</option>
                                    <option vlaue="Haras los Aguacates">Haras los Aguacates</option>
                                    <option vlaue="Impacto 1 y 2">Impacto 1 y 2</option>
                                    <option vlaue="Industrial Carabobo">Industrial Carabobo</option>
                                    <option vlaue="Industrial Castillito">Industrial Castillito</option>
                                    <option vlaue="Industrial la Guacamaya">Industrial la Guacamaya</option>
                                    <option vlaue="Industrial la Quizanda">Industrial la Quizanda</option>
                                    <option vlaue="Industrial Municipal Norte">Industrial Municipal Norte</option>
                                    <option vlaue="Isabelita">Isabelita</option>
                                    <option vlaue="José Gregorio Hernández">José Gregorio Hernández</option>
                                    <option vlaue="José Regino Peña">José Regino Peña</option>
                                    <option vlaue="Kerdel">Kerdel</option>
                                    <option vlaue="La Arboleada">La Arboleada</option>
                                    <option vlaue="La Blanquera">La Blanquera</option>
                                    <option vlaue="La California">La California</option>
                                    <option vlaue="La Castellana">La Castellana</option>
                                    <option vlaue="La Castrera">La Castrera</option>
                                    <option vlaue="La Entrada">La Entrada</option>
                                    <option vlaue="La Esmeralda">La Esmeralda</option>
                                    <option vlaue="La Florida">La Florida</option>
                                    <option vlaue="La Guacamaya 1ª, 2ª y 3ª Etapa">La Guacamaya 1ª, 2ª y 3ª Etapa</option>
                                    <option vlaue="La Isabelica">La Isabelica</option>
                                    <option vlaue="La Línea">La Línea</option>
                                    <option vlaue="La Maestranza">La Maestranza</option>
                                    <option vlaue="La Manguita">La Manguita</option>
                                    <option vlaue="La Milagrosa">La Milagrosa</option>
                                    <option vlaue="La Planta">La Planta</option>
                                    <option vlaue="La Raya">La Raya</option>
                                    <option vlaue="La Romana">La Romana</option>
                                    <option vlaue="La Romanita">La Romanita</option>
                                    <option vlaue="La Sorpresa">La Sorpresa</option>
                                    <option vlaue="La Trigaleña">La Trigaleña</option>
                                    <option vlaue="La Unidad">La Unidad</option>
                                    <option vlaue="La Viña">La Viña</option>
                                    <option vlaue="Las Acacias">Las Acacias</option>
                                    <option vlaue="Las Agüitas">Las Agüitas</option>
                                    <option vlaue="Las Clavellinas">Las Clavellinas</option>
                                    <option vlaue="Las Lomas">Las Lomas</option>
                                    <option vlaue="Las Quintas">Las Quintas</option>
                                    <option vlaue="Las Trincheras">Las Trincheras</option>
                                    <option vlaue="Libertador">Libertador</option>
                                    <option vlaue="Llano Verde">Llano Verde</option>
                                    <option vlaue="Lomas de Funval">Lomas de Funval</option>
                                    <option vlaue="Lomas del Este">Lomas del Este</option>
                                    <option vlaue="Los Alpes">Los Alpes</option>
                                    <option vlaue="Los Arales">Los Arales</option>
                                    <option vlaue="Los Bucares 1, 2">Los Bucares 1, 2</option>
                                    <option vlaue="Los Caimitos">Los Caimitos</option>
                                    <option vlaue="Los Caobos">Los Caobos</option>
                                    <option vlaue="Los Cerritos">Los Cerritos</option>
                                    <option vlaue="Los Colorados">Los Colorados</option>
                                    <option vlaue="Los Criollitos">Los Criollitos</option>
                                    <option vlaue="Los Guayos">Los Guayos</option>
                                    <option vlaue="Los Harales">Los Harales</option>
                                    <option vlaue="Los Jardines">Los Jardines</option>
                                    <option vlaue="Los Magallanes">Los Magallanes</option>
                                    <option vlaue="Los Mangos">Los Mangos</option>
                                    <option vlaue="Los Manguitos">Los Manguitos</option>
                                    <option vlaue="Los Naranjos">Los Naranjos</option>
                                    <option vlaue="Los Nísperos">Los Nísperos</option>
                                    <option vlaue="Los Parques">Los Parques</option>
                                    <option vlaue="Los Pozones">Los Pozones</option>
                                    <option vlaue="Los Sauces">Los Sauces</option>
                                    <option vlaue="Los Taladros">Los Taladros</option>
                                    <option vlaue="Los Viveros">Los Viveros</option>
                                    <option vlaue="Luis Herrera Campins">Luis Herrera Campins</option>
                                    <option vlaue="Mañonguito">Mañonguito</option>
                                    <option vlaue="Máximo Romero">Máximo Romero</option>
                                    <option vlaue="Mendoza 1, 2, 3, 4, 5, 6 y 7">Mendoza 1, 2, 3, 4, 5, 6 y 7</option>
                                    <option vlaue="Michelena Norte y Sur">Michelena Norte y Sur</option>
                                    <option vlaue="Miguel Aché">Miguel Aché</option>
                                    <option vlaue="Miranda">Miranda</option>
                                    <option vlaue="Montalbán">Montalbán</option>
                                    <option vlaue="Monte Serino">Monte Serino</option>
                                    <option vlaue="Monumental">Monumental</option>
                                    <option vlaue="Morón">Morón</option>
                                    <option vlaue="Naguanagua">Naguanagua</option>
                                    <option vlaue="Padre Alonzo">Padre Alonzo</option>
                                    <option vlaue="Palma Real">Palma Real</option>
                                    <option vlaue="Paraparal">Paraparal</option>
                                    <option vlaue="Parque el Trigal">Parque el Trigal</option>
                                    <option vlaue="Parque Valencia">Parque Valencia</option>
                                    <option vlaue="Paso Real">Paso Real</option>
                                    <option vlaue="Patanemo">Patanemo</option>
                                    <option vlaue="Piedras Negras">Piedras Negras</option>
                                    <option vlaue="Piedras Pintadas">Piedras Pintadas</option>
                                    <option vlaue="Pueblo de Belén">Pueblo de Belén</option>
                                    <option vlaue="Pueblo de Maraira">Pueblo de Maraira</option>
                                    <option vlaue="Pueblo de San Diego">Pueblo de San Diego</option>
                                    <option vlaue="Puerto Cabello">Puerto Cabello</option>
                                    <option vlaue="Punto Nutria">Punto Nutria</option>
                                    <option vlaue="Rancho Grande">Rancho Grande</option>
                                    <option vlaue="Renny Ottolina">Renny Ottolina</option>
                                    <option vlaue="Ricardo Urriera">Ricardo Urriera</option>
                                    <option vlaue="Rinconcito Mañongo">Rinconcito Mañongo</option>
                                    <option vlaue="Ritec">Ritec</option>
                                    <option vlaue="Rosarito">Rosarito</option>
                                    <option vlaue="Ruiz Pineda 1, 2 y 3">Ruiz Pineda 1, 2 y 3</option>
                                    <option vlaue="Sabana Larga">Sabana Larga</option>
                                    <option vlaue="San Agustín">San Agustín</option>
                                    <option vlaue="San Blas 1, 2">San Blas 1, 2</option>
                                    <option vlaue="San Blas Viejo">San Blas Viejo</option>
                                    <option vlaue="San Diego">San Diego</option>
                                    <option vlaue="San Joaquín">San Joaquín</option>
                                    <option vlaue="San José de Tarbes">San José de Tarbes</option>
                                    <option vlaue="San Rafael">San Rafael</option>
                                    <option vlaue="San Sebastián">San Sebastián</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Santa Cecilia">Santa Cecilia</option>
                                    <option vlaue="Santa Eduvigis">Santa Eduvigis</option>
                                    <option vlaue="Santa Teresa">Santa Teresa</option>
                                    <option vlaue="Sesquicentenario">Sesquicentenario</option>
                                    <option vlaue="Simón Bolívar">Simón Bolívar</option>
                                    <option vlaue="Taborda">Taborda</option>
                                    <option vlaue="Terraza de los Nísperos">Terraza de los Nísperos</option>
                                    <option vlaue="Tocuyito">Tocuyito</option>
                                    <option vlaue="Tocuyo de la Costa">Tocuyo de la Costa</option>
                                    <option vlaue="Trigal Norte, Sur, Centro">Trigal Norte, Sur, Centro</option>
                                    <option vlaue="Tucacas">Tucacas</option>
                                    <option vlaue="Unión">Unión</option>
                                    <option vlaue="Urabanización Piedras Pintada">Urabanización Piedras Pintada</option>
                                    <option vlaue="Urama">Urama</option>
                                    <option vlaue="Urbanización Alegria">Urbanización Alegria</option>
                                    <option vlaue="Urbanización Altos de Guaparo">Urbanización Altos de Guaparo</option>
                                    <option vlaue="Urbanización Camoruco">Urbanización Camoruco</option>
                                    <option vlaue="Urbanización Campo Alegre">Urbanización Campo Alegre</option>
                                    <option vlaue="Urbanización Campo Solo">Urbanización Campo Solo</option>
                                    <option vlaue="Urbanización Carabobo">Urbanización Carabobo</option>
                                    <option vlaue="Urbanización chaguaramal">Urbanización chaguaramal</option>
                                    <option vlaue="Urbanización Ciudad Alianza">Urbanización Ciudad Alianza</option>
                                    <option vlaue="Urbanización Ciudad Jardin Mañongo">Urbanización Ciudad Jardin Mañongo</option>
                                    <option vlaue="Urbanización Colinas de Guataparo">Urbanización Colinas de Guataparo</option>
                                    <option vlaue="Urbanización Colon">Urbanización Colon</option>
                                    <option vlaue="Urbanización Don Bosco">Urbanización Don Bosco</option>
                                    <option vlaue="Urbanización el Bosque">Urbanización el Bosque</option>
                                    <option vlaue="Urbanización el Morro">Urbanización el Morro</option>
                                    <option vlaue="Urbanización el Morro 1 y 2">Urbanización el Morro 1 y 2</option>
                                    <option vlaue="Urbanización el Palotal">Urbanización el Palotal</option>
                                    <option vlaue="Urbanización el Parral">Urbanización el Parral</option>
                                    <option vlaue="Urbanización el Prado">Urbanización el Prado</option>
                                    <option vlaue="Urbanización el Prebo I II III">Urbanización el Prebo I II III</option>
                                    <option vlaue="Urbanización el Prebol">Urbanización el Prebol</option>
                                    <option vlaue="Urbanización el Recreo">Urbanización el Recreo</option>
                                    <option vlaue="Urbanización el Trigalito">Urbanización el Trigalito</option>
                                    <option vlaue="Urbanización el Viñedo">Urbanización el Viñedo</option>
                                    <option vlaue="Urbanización Flor Amarillo">Urbanización Flor Amarillo</option>
                                    <option vlaue="Urbanización Fundación Mendoza">Urbanización Fundación Mendoza</option>
                                    <option vlaue="Urbanización Guatsaparo Country Club">Urbanización Guatsaparo Country Club</option>
                                    <option vlaue="Urbanización Guayabal">Urbanización Guayabal</option>
                                    <option vlaue="Urbanización Kerdel">Urbanización Kerdel</option>
                                    <option vlaue="Urbanización la Arboleda">Urbanización la Arboleda</option>
                                    <option vlaue="Urbanización la Castellana">Urbanización la Castellana</option>
                                    <option vlaue="Urbanización la Esmeralda">Urbanización la Esmeralda</option>
                                    <option vlaue="Urbanización la Guacamaya 1 2 3 Etapa">Urbanización la Guacamaya 1 2 3 Etapa</option>
                                    <option vlaue="Urbanización la Isabelica">Urbanización la Isabelica</option>
                                    <option vlaue="Urbanización la Trigaleña">Urbanización la Trigaleña</option>
                                    <option vlaue="Urbanización la Viña">Urbanización la Viña</option>
                                    <option vlaue="Urbanización las Acacias">Urbanización las Acacias</option>
                                    <option vlaue="Urbanización las Clavellinas">Urbanización las Clavellinas</option>
                                    <option vlaue="Urbanización las Quintas">Urbanización las Quintas</option>
                                    <option vlaue="Urbanización Lomas del Este">Urbanización Lomas del Este</option>
                                    <option vlaue="Urbanización los Arales">Urbanización los Arales</option>
                                    <option vlaue="Urbanización los Bucares 1 y 2">Urbanización los Bucares 1 y 2</option>
                                    <option vlaue="Urbanización los Jardines">Urbanización los Jardines</option>
                                    <option vlaue="Urbanización los Magallanes">Urbanización los Magallanes</option>
                                    <option vlaue="Urbanización los Naranjos">Urbanización los Naranjos</option>
                                    <option vlaue="Urbanización los Nisperos">Urbanización los Nisperos</option>
                                    <option vlaue="Urbanización los Sauces">Urbanización los Sauces</option>
                                    <option vlaue="Urbanización Mendoza 1.2.3.4.5.6.y.7">Urbanización Mendoza 1.2.3.4.5.6.y.7</option>
                                    <option vlaue="Urbanización Michelena Norte y Sur">Urbanización Michelena Norte y Sur</option>
                                    <option vlaue="Urbanización Monte Serino">Urbanización Monte Serino</option>
                                    <option vlaue="Urbanización Nueva Esparta">Urbanización Nueva Esparta</option>
                                    <option vlaue="Urbanización Paraparal">Urbanización Paraparal</option>
                                    <option vlaue="Urbanización Parque el Trigal">Urbanización Parque el Trigal</option>
                                    <option vlaue="Urbanización Parque Valencia">Urbanización Parque Valencia</option>
                                    <option vlaue="Urbanización Paso Real">Urbanización Paso Real</option>
                                    <option vlaue="Urbanizacion Ritec">Urbanizacion Ritec</option>
                                    <option vlaue="Urbanización Terraza de los Nisperos">Urbanización Terraza de los Nisperos</option>
                                    <option vlaue="Urbanización Trigal Norte Sur Centro">Urbanización Trigal Norte Sur Centro</option>
                                    <option vlaue="Urbanización Valle de Camoruco">Urbanización Valle de Camoruco</option>
                                    <option vlaue="Urbsanización Castillito">Urbsanización Castillito</option>
                                    <option vlaue="Urdaneta">Urdaneta</option>
                                    <option vlaue="Valle de Aguirre">Valle de Aguirre</option>
                                    <option vlaue="Valle de Camoruco">Valle de Camoruco</option>
                                    <option vlaue="Venezuela">Venezuela</option>
                                    <option vlaue="Victoria">Victoria</option>
                                    <option vlaue="Vigirima">Vigirima</option>
                                    <option vlaue="Villa Jardín">Villa Jardín</option>
                                    <option vlaue="Vivienda Popular de los Guayos">Vivienda Popular de los Guayos</option>
                                    <option vlaue="Vivienda Rural los Arales">Vivienda Rural los Arales</option>
                                    <option vlaue="Yagua">Yagua</option>
                                    <option vlaue="Yuma 1 y 2">Yuma 1 y 2</option>
                                    <option vlaue="Zona Industrial la Isabelica">Zona Industrial la Isabelica</option>



                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Cojedes')" >
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >


                                    <option vlaue="Agua Linda">Agua Linda</option>
                                    <option vlaue="Apartaderos">Apartaderos</option>
                                    <option vlaue="Arismendi">Arismendi</option>
                                    <option vlaue="Cojedes">Cojedes</option>
                                    <option vlaue="Cojeditos">Cojeditos</option>
                                    <option vlaue="El Amparo">El Amparo</option>
                                    <option vlaue="El Baúl">El Baúl</option>
                                    <option vlaue="El Pao">El Pao</option>
                                    <option vlaue="El Torito">El Torito</option>
                                    <option vlaue="Guadarrama">Guadarrama</option>
                                    <option vlaue="La Aguadita">La Aguadita</option>
                                    <option vlaue="La Sierra">La Sierra</option>
                                    <option vlaue="Las Vegas">Las Vegas</option>
                                    <option vlaue="Libertad de Cojedes">Libertad de Cojedes</option>
                                    <option vlaue="Macapo">Macapo</option>
                                    <option vlaue="Manrique">Manrique</option>
                                    <option vlaue="San Carlos">San Carlos</option>
                                    <option vlaue="Tinaco">Tinaco</option>
                                    <option vlaue="Tinaquillo">Tinaquillo</option>
                                    <option vlaue="Vallecito">Vallecito</option>



                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>


                            <div class="form-group condicional" data-condition="(estado == 'Delta Amacuro')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Coporito">Coporito</option>
                                    <option vlaue="Curiapo">Curiapo</option>
                                    <option vlaue="La Orquesta">La Orquesta</option>
                                    <option vlaue="Macareíto">Macareíto</option>
                                    <option vlaue="Pedernales">Pedernales</option>
                                    <option vlaue="Piacoa">Piacoa</option>
                                    <option vlaue="Sacupana">Sacupana</option>
                                    <option vlaue="San José de Mazareito">San José de Mazareito</option>
                                    <option vlaue="Santa Catalina">Santa Catalina</option>
                                    <option vlaue="Tabasca">Tabasca</option>
                                    <option vlaue="Tucupita">Tucupita</option>
                                    <option vlaue="Uracoa">Uracoa</option>


                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                                <div class="form-group condicional" data-condition="(estado == 'Falcón')">
                                    <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Acurigua">Acurigua</option>
                                    <option vlaue="Adaure">Adaure</option>
                                    <option vlaue="Agua Clara">Agua Clara</option>
                                    <option vlaue="Agua Larga">Agua Larga</option>
                                    <option vlaue="Agua Linda">Agua Linda</option>
                                    <option vlaue="Agua Salada">Agua Salada</option>
                                    <option vlaue="Agüide">Agüide</option>
                                    <option vlaue="Amuay">Amuay</option>
                                    <option vlaue="Aracua">Aracua</option>
                                    <option vlaue="Baraived">Baraived</option>
                                    <option vlaue="Bariro">Bariro</option>
                                    <option vlaue="Boca de Mangle">Boca de Mangle</option>
                                    <option vlaue="Boca de Tocuyo">Boca de Tocuyo</option>
                                    <option vlaue="Borojó">Borojó</option>
                                    <option vlaue="Cabure">Cabure</option>
                                    <option vlaue="Caja de Agua">Caja de Agua</option>
                                    <option vlaue="Capadare">Capadare</option>
                                    <option vlaue="Capatárida">Capatárida</option>
                                    <option vlaue="Casigua">Casigua</option>
                                    <option vlaue="Chichiriviche">Chichiriviche</option>
                                    <option vlaue="Churuguara">Churuguara</option>
                                    <option vlaue="Coro">Coro</option>
                                    <option vlaue="Corralito">Corralito</option>
                                    <option vlaue="Curamichate">Curamichate</option>
                                    <option vlaue="Curarí">Curarí</option>
                                    <option vlaue="Curimagua">Curimagua</option>
                                    <option vlaue="Dabajuro">Dabajuro</option>
                                    <option vlaue="El Charal">El Charal</option>
                                    <option vlaue="El Duvisí">El Duvisí</option>
                                    <option vlaue="El Menen">El Menen</option>
                                    <option vlaue="El Vínculo">El Vínculo</option>
                                    <option vlaue="Guaibacoa">Guaibacoa</option>
                                    <option vlaue="Jácura">Jácura</option>
                                    <option vlaue="Jadacaquiva">Jadacaquiva</option>
                                    <option vlaue="La Chapa">La Chapa</option>
                                    <option vlaue="La Cruz de Taratara">La Cruz de Taratara</option>
                                    <option vlaue="La Negrita">La Negrita</option>
                                    <option vlaue="La Pastora">La Pastora</option>
                                    <option vlaue="La Tabla">La Tabla</option>
                                    <option vlaue="La Taza">La Taza</option>
                                    <option vlaue="La Vela de Coro">La Vela de Coro</option>
                                    <option vlaue="Lizardo">Lizardo</option>
                                    <option vlaue="Mancillar de la Costa">Mancillar de la Costa</option>
                                    <option vlaue="Mapararí">Mapararí</option>
                                    <option vlaue="Mataruca">Mataruca</option>
                                    <option vlaue="Mene Mauroa">Mene Mauroa</option>
                                    <option vlaue="Mirimire">Mirimire</option>
                                    <option vlaue="Mitare">Mitare</option>
                                    <option vlaue="Pecaya">Pecaya</option>
                                    <option vlaue="Pedregal">Pedregal</option>
                                    <option vlaue="Piedra Grande">Piedra Grande</option>
                                    <option vlaue="Píritu">Píritu</option>
                                    <option vlaue="Pueblo Cumarebo">Pueblo Cumarebo</option>
                                    <option vlaue="Pueblo Nuevo de la Sierra">Pueblo Nuevo de la Sierra</option>
                                    <option vlaue="Pueblo Nuevo de Paraguaná">Pueblo Nuevo de Paraguaná</option>
                                    <option vlaue="Puerto Cumarebo">Puerto Cumarebo</option>
                                    <option vlaue="Punta Cardón">Punta Cardón</option>
                                    <option vlaue="Punto Fijo">Punto Fijo</option>
                                    <option vlaue="Pureche">Pureche</option>
                                    <option vlaue="San José de Bruzual">San José de Bruzual</option>
                                    <option vlaue="San José de Seque">San José de Seque</option>
                                    <option vlaue="San Juan de los Cayos">San Juan de los Cayos</option>
                                    <option vlaue="San Lorenzo">San Lorenzo</option>
                                    <option vlaue="San Luis">San Luis</option>
                                    <option vlaue="San Miguel de Macoruca">San Miguel de Macoruca</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Santa Cruz de Bucaral">Santa Cruz de Bucaral</option>
                                    <option vlaue="Tocópero">Tocópero</option>
                                    <option vlaue="Tocumo de la Rosita">Tocumo de la Rosita</option>
                                    <option vlaue="Tupure">Tupure</option>
                                    <option vlaue="Urumaco">Urumaco</option>
                                    <option vlaue="Zazárida">Zazárida</option>



                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>


                            <div class="form-group condicional" data-condition="(estado == 'Guárico')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Altagracia de Orituco">Altagracia de Orituco</option>
                                    <option vlaue="Calabozo">Calabozo</option>
                                    <option vlaue="Cambural de Cataure">Cambural de Cataure</option>
                                    <option vlaue="Cazorla">Cazorla</option>
                                    <option vlaue="Chaguaramas">Chaguaramas</option>
                                    <option vlaue="Corozopando">Corozopando</option>
                                    <option vlaue="Dos Caminos">Dos Caminos</option>
                                    <option vlaue="El Calvario">El Calvario</option>
                                    <option vlaue="El Caro de la Negra">El Caro de la Negra</option>
                                    <option vlaue="El Chaparro">El Chaparro</option>
                                    <option vlaue="El Corozo">El Corozo</option>
                                    <option vlaue="El Palito">El Palito</option>
                                    <option vlaue="El Punzón">El Punzón</option>
                                    <option vlaue="El Rastro">El Rastro</option>
                                    <option vlaue="El Socorro">El Socorro</option>
                                    <option vlaue="El Sombrero">El Sombrero</option>
                                    <option vlaue="Espino">Espino</option>
                                    <option vlaue="Francisco de Tiznado">Francisco de Tiznado</option>
                                    <option vlaue="Guardatinaja">Guardatinaja</option>
                                    <option vlaue="Guaripa">Guaripa</option>
                                    <option vlaue="Ipare de Orituco">Ipare de Orituco</option>
                                    <option vlaue="La Arboleda">La Arboleda</option>
                                    <option vlaue="La Esperanza">La Esperanza</option>
                                    <option vlaue="La Unión">La Unión</option>
                                    <option vlaue="Las Mercedes del Llano">Las Mercedes del Llano</option>
                                    <option vlaue="Las Minas">Las Minas</option>
                                    <option vlaue="Lezama">Lezama</option>
                                    <option vlaue="Libertad de Orituco">Libertad de Orituco</option>
                                    <option vlaue="Los Pozotes">Los Pozotes</option>
                                    <option vlaue="Mamonal">Mamonal</option>
                                    <option vlaue="Ortíz">Ortíz</option>
                                    <option vlaue="Parapara de Ortíz">Parapara de Ortíz</option>
                                    <option vlaue="Paso Real de Macaira">Paso Real de Macaira</option>
                                    <option vlaue="Pirital">Pirital</option>
                                    <option vlaue="Roblecito">Roblecito</option>
                                    <option vlaue="Sabana Grande de Orituco">Sabana Grande de Orituco</option>
                                    <option vlaue="San Francisco de Macaira">San Francisco de Macaira</option>
                                    <option vlaue="San José de Anare">San José de Anare</option>
                                    <option vlaue="San José de Guaribe">San José de Guaribe</option>
                                    <option vlaue="San José de Tiznados">San José de Tiznados</option>
                                    <option vlaue="San José de Unare">San José de Unare</option>
                                    <option vlaue="San Juan de los Morros">San Juan de los Morros</option>
                                    <option vlaue="San Rafael de Laya">San Rafael de Laya</option>
                                    <option vlaue="San Rafael de Orituco">San Rafael de Orituco</option>
                                    <option vlaue="Santa María de Ipire">Santa María de Ipire</option>
                                    <option vlaue="Santa Rita de Manapire">Santa Rita de Manapire</option>
                                    <option vlaue="Tucupido">Tucupido</option>
                                    <option vlaue="Valle la Pascua">Valle la Pascua</option>
                                    <option vlaue="Zaraza">Zaraza</option>

                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>
                            <div class="form-group condicional" data-condition="(estado == 'Lara')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Agua Salada">Agua Salada</option>
                                    <option vlaue="Aguada Grande">Aguada Grande</option>
                                    <option vlaue="Aregue">Aregue</option>
                                    <option vlaue="Arenales">Arenales</option>
                                    <option vlaue="Atarigua">Atarigua</option>
                                    <option vlaue="Baragua">Baragua</option>
                                    <option vlaue="Barbacoa">Barbacoa</option>
                                    <option vlaue="Barquisimeto">Barquisimeto</option>
                                    <option vlaue="Basarida">Basarida</option>
                                    <option vlaue="Bobare">Bobare</option>
                                    <option vlaue="Bocare">Bocare</option>
                                    <option vlaue="Buena Vista">Buena Vista</option>
                                    <option vlaue="Burere">Burere</option>
                                    <option vlaue="Cabudare">Cabudare</option>
                                    <option vlaue="Cariragua">Cariragua</option>
                                    <option vlaue="Carora">Carora</option>
                                    <option vlaue="Casa de Agua">Casa de Agua</option>
                                    <option vlaue="Cubiro">Cubiro</option>
                                    <option vlaue="Duaca">Duaca</option>
                                    <option vlaue="El Empedrado">El Empedrado</option>
                                    <option vlaue="El Porvenir">El Porvenir</option>
                                    <option vlaue="Guadalupe">Guadalupe</option>
                                    <option vlaue="Guárico">Guárico</option>
                                    <option vlaue="Humocaro Alto">Humocaro Alto</option>
                                    <option vlaue="Humocaro Bajo">Humocaro Bajo</option>
                                    <option vlaue="La Miel">La Miel</option>
                                    <option vlaue="La Pastora">La Pastora</option>
                                    <option vlaue="La Vega">La Vega</option>
                                    <option vlaue="Las Casitas">Las Casitas</option>
                                    <option vlaue="Las Guabinas">Las Guabinas</option>
                                    <option vlaue="Los Rastrojos">Los Rastrojos</option>
                                    <option vlaue="Los Yabos">Los Yabos</option>
                                    <option vlaue="Matatere">Matatere</option>
                                    <option vlaue="Moran">Moran</option>
                                    <option vlaue="Moroturo">Moroturo</option>
                                    <option vlaue="Moyetones">Moyetones</option>
                                    <option vlaue="Palmarito">Palmarito</option>
                                    <option vlaue="Pie de Cuesta">Pie de Cuesta</option>
                                    <option vlaue="Puricaure">Puricaure</option>
                                    <option vlaue="Quebrada Arriba">Quebrada Arriba</option>
                                    <option vlaue="Quíbor">Quíbor</option>
                                    <option vlaue="Río Claro">Río Claro</option>
                                    <option vlaue="Río Tocuyo">Río Tocuyo</option>
                                    <option vlaue="San Francisco">San Francisco</option>
                                    <option vlaue="San Miguel">San Miguel</option>
                                    <option vlaue="San Pablo de Lara">San Pablo de Lara</option>
                                    <option vlaue="San Pedro">San Pedro</option>
                                    <option vlaue="Sanare">Sanare</option>
                                    <option vlaue="Sarare">Sarare</option>
                                    <option vlaue="Siquisique">Siquisique</option>
                                    <option vlaue="Urucure">Urucure</option>
                                    <option vlaue="Villa Nueva">Villa Nueva</option>

                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>


                            <div class="form-group condicional" data-condition="(estado == 'Mérida')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Acarigua">Acarigua</option>
                                    <option vlaue="Acequias">Acequias</option>
                                    <option vlaue="Apartaderos">Apartaderos</option>
                                    <option vlaue="Arapuey">Arapuey</option>
                                    <option vlaue="Bailadores">Bailadores</option>
                                    <option vlaue="Batatal">Batatal</option>
                                    <option vlaue="Canaguá">Canaguá</option>
                                    <option vlaue="Caño Zancudo">Caño Zancudo</option>
                                    <option vlaue="Capazón">Capazón</option>
                                    <option vlaue="Chachopo">Chachopo</option>
                                    <option vlaue="Chiguará">Chiguará</option>
                                    <option vlaue="Chocantá">Chocantá</option>
                                    <option vlaue="Ejido">Ejido</option>
                                    <option vlaue="El Guayabo">El Guayabo</option>
                                    <option vlaue="El Morro">El Morro</option>
                                    <option vlaue="El Peñón">El Peñón</option>
                                    <option vlaue="El Vigía">El Vigía</option>
                                    <option vlaue="Encontrados">Encontrados</option>
                                    <option vlaue="Estanques">Estanques</option>
                                    <option vlaue="Guaraque">Guaraque</option>
                                    <option vlaue="Guayabones">Guayabones</option>
                                    <option vlaue="Humboldt">Humboldt</option>
                                    <option vlaue="Jají">Jají</option>
                                    <option vlaue="La Azulita">La Azulita</option>
                                    <option vlaue="La Blanca">La Blanca</option>
                                    <option vlaue="La González">La González</option>
                                    <option vlaue="La Hechicera">La Hechicera</option>
                                    <option vlaue="La Mesa">La Mesa</option>
                                    <option vlaue="La Mesa de Ejido">La Mesa de Ejido</option>
                                    <option vlaue="La Palmita">La Palmita</option>
                                    <option vlaue="La Parroquia">La Parroquia</option>
                                    <option vlaue="La Pedregosa">La Pedregosa</option>
                                    <option vlaue="La Playa">La Playa</option>
                                    <option vlaue="La Playita">La Playita</option>
                                    <option vlaue="La Punta">La Punta</option>
                                    <option vlaue="La Trampa">La Trampa</option>
                                    <option vlaue="La Unión">La Unión</option>
                                    <option vlaue="La Vega">La Vega</option>
                                    <option vlaue="Lagunilla">Lagunilla</option>
                                    <option vlaue="Las Piedras">Las Piedras</option>
                                    <option vlaue="Las Virtudes">Las Virtudes</option>
                                    <option vlaue="Libertad">Libertad</option>
                                    <option vlaue="Los González">Los González</option>
                                    <option vlaue="Los Sauzales">Los Sauzales</option>
                                    <option vlaue="Medio Cuarto">Medio Cuarto</option>
                                    <option vlaue="Mérida">Mérida</option>
                                    <option vlaue="Mesa Bolívar">Mesa Bolívar</option>
                                    <option vlaue="Mesa Quintero">Mesa Quintero</option>
                                    <option vlaue="Moralito">Moralito</option>
                                    <option vlaue="Mucuchachí">Mucuchachí</option>
                                    <option vlaue="Mucuchíes">Mucuchíes</option>
                                    <option vlaue="Mucujepe">Mucujepe</option>
                                    <option vlaue="Mucurubá">Mucurubá</option>
                                    <option vlaue="Mucutuy">Mucutuy</option>
                                    <option vlaue="Piñango">Piñango</option>
                                    <option vlaue="Pueblo Llano">Pueblo Llano</option>
                                    <option vlaue="Pueblo Nuevo">Pueblo Nuevo</option>
                                    <option vlaue="San Cristobal de Torondoy">San Cristobal de Torondoy</option>
                                    <option vlaue="San Jacinto">San Jacinto</option>
                                    <option vlaue="San José">San José</option>
                                    <option vlaue="San Juan de Lagunilla">San Juan de Lagunilla</option>
                                    <option vlaue="San Rafael de Mucuchíes">San Rafael de Mucuchíes</option>
                                    <option vlaue="Santa Apolonia de Merida">Santa Apolonia de Merida</option>
                                    <option vlaue="Santa Cruz de Mora">Santa Cruz de Mora</option>
                                    <option vlaue="Santa Elena de Arenales">Santa Elena de Arenales</option>
                                    <option vlaue="Santa María de Caparo">Santa María de Caparo</option>
                                    <option vlaue="Santo Domingo">Santo Domingo</option>
                                    <option vlaue="Tabay">Tabay</option>
                                    <option vlaue="Timotes">Timotes</option>
                                    <option vlaue="Tovar">Tovar</option>
                                    <option vlaue="Tucani">Tucani</option>
                                    <option vlaue="Tucantocani">Tucantocani</option>
                                    <option vlaue="Zea">Zea</option>



                                </select>
                                <input type="hidden" name="zona" value="Andes">
                            </div>


                            <div class="form-group condicional" data-condition="(estado == 'Miranda')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Aeropuerto la Carlota">Aeropuerto la Carlota</option>
                                    <option vlaue="Araira">Araira</option>
                                    <option vlaue="Barrio el Carmen Minas de Baruta">Barrio el Carmen Minas de Baruta</option>
                                    <option vlaue="Barrio el Carmen Petare">Barrio el Carmen Petare</option>
                                    <option vlaue="Barrio el Manguito Petare">Barrio el Manguito Petare</option>
                                    <option vlaue="Barrio el Rodeo">Barrio el Rodeo</option>
                                    <option vlaue="Barrio la Cruz Chacao">Barrio la Cruz Chacao</option>
                                    <option vlaue="Barrio la Cruz Petare">Barrio la Cruz Petare</option>
                                    <option vlaue="Barrio Niño Jesús">Barrio Niño Jesús</option>
                                    <option vlaue="Barrio San Blas">Barrio San Blas</option>
                                    <option vlaue="Barrio San Miguel Petare">Barrio San Miguel Petare</option>
                                    <option vlaue="Barrio Unión">Barrio Unión</option>
                                    <option vlaue="Capaya">Capaya</option>
                                    <option vlaue="Carenero">Carenero</option>
                                    <option vlaue="Carrizal">Carrizal</option>
                                    <option vlaue="Caucagüa">Caucagüa</option>
                                    <option vlaue="Centro Comercial Plaza las Americas">Centro Comercial Plaza las Americas</option>
                                    <option vlaue="Charallave">Charallave</option>
                                    <option vlaue="Chirimena">Chirimena</option>
                                    <option vlaue="Chuspa">Chuspa</option>
                                    <option vlaue="Chuspita">Chuspita</option>
                                    <option vlaue="Cúa">Cúa</option>
                                    <option vlaue="Cúpira">Cúpira</option>
                                    <option vlaue="Curiepe">Curiepe</option>
                                    <option vlaue="El Café">El Café</option>
                                    <option vlaue="El Guapo">El Guapo</option>
                                    <option vlaue="El Hatillo">El Hatillo</option>
                                    <option vlaue="El Marqués">El Marqués</option>
                                    <option vlaue="Guarenas">Guarenas</option>
                                    <option vlaue="Guatire">Guatire</option>
                                    <option vlaue="Higuerote">Higuerote</option>
                                    <option vlaue="La Tahona">La Tahona</option>
                                    <option vlaue="Las González">Las González</option>
                                    <option vlaue="Lomas de la Lagunita">Lomas de la Lagunita</option>
                                    <option vlaue="Los Chorros">Los Chorros</option>
                                    <option vlaue="Los Samanes">Los Samanes</option>
                                    <option vlaue="Los Teques">Los Teques</option>
                                    <option vlaue="Machurucuto">Machurucuto</option>
                                    <option vlaue="Mamporal">Mamporal</option>
                                    <option vlaue="Ocumare del Tuy">Ocumare del Tuy</option>
                                    <option vlaue="Paparo">Paparo</option>
                                    <option vlaue="Paracotos">Paracotos</option>
                                    <option vlaue="Petare">Petare</option>
                                    <option vlaue="Plaza las Américas">Plaza las Américas</option>
                                    <option vlaue="Prados del Este">Prados del Este</option>
                                    <option vlaue="Pueblo Nuevo Mamporal">Pueblo Nuevo Mamporal</option>
                                    <option vlaue="Río Chico">Río Chico</option>
                                    <option vlaue="San Antonio de los Altos">San Antonio de los Altos</option>
                                    <option vlaue="San Blas">San Blas</option>
                                    <option vlaue="San Diego de los Altos">San Diego de los Altos</option>
                                    <option vlaue="San Fernando del Guapo">San Fernando del Guapo</option>
                                    <option vlaue="San Francisco de Yare">San Francisco de Yare</option>
                                    <option vlaue="San José de Barlovento">San José de Barlovento</option>
                                    <option vlaue="San José de los Altos">San José de los Altos</option>
                                    <option vlaue="San José de Río Chico">San José de Río Chico</option>
                                    <option vlaue="San Pedro de los Altos">San Pedro de los Altos</option>
                                    <option vlaue="Santa Lucía">Santa Lucía</option>
                                    <option vlaue="Santa Paula">Santa Paula</option>
                                    <option vlaue="Santa Rosa de Lima">Santa Rosa de Lima</option>
                                    <option vlaue="Santa Teresa del Tuy">Santa Teresa del Tuy</option>
                                    <option vlaue="Sebucán">Sebucán</option>
                                    <option vlaue="Sector la Estancia">Sector la Estancia</option>
                                    <option vlaue="Sector los Naranjos">Sector los Naranjos</option>
                                    <option vlaue="Simón Bolívar">Simón Bolívar</option>
                                    <option vlaue="Tacarigua de la Laguna">Tacarigua de la Laguna</option>
                                    <option vlaue="Tacarigua Mamporal">Tacarigua Mamporal</option>
                                    <option vlaue="Tácata">Tácata</option>
                                    <option vlaue="Terrazas de Club Hípico">Terrazas de Club Hípico</option>
                                    <option vlaue="U.S.B.">U.S.B.</option>
                                    <option vlaue="Urbanización Altamira">Urbanización Altamira</option>
                                    <option vlaue="Urbanización Alto Hatillo">Urbanización Alto Hatillo</option>
                                    <option vlaue="Urbanización Alto Prado">Urbanización Alto Prado</option>
                                    <option vlaue="Urbanización Avila">Urbanización Avila</option>
                                    <option vlaue="Urbanización Bello Campo">Urbanización Bello Campo</option>
                                    <option vlaue="Urbanización Boleita">Urbanización Boleita</option>
                                    <option vlaue="Urbanización Boleita Alta">Urbanización Boleita Alta</option>
                                    <option vlaue="Urbanización California Norte">Urbanización California Norte</option>
                                    <option vlaue="Urbanización California Sur">Urbanización California Sur</option>
                                    <option vlaue="Urbanización Campo Alegre">Urbanización Campo Alegre</option>
                                    <option vlaue="Urbanización Canteras de Miranda">Urbanización Canteras de Miranda</option>
                                    <option vlaue="Urbanización Caracas Country Club">Urbanización Caracas Country Club</option>
                                    <option vlaue="Urbanización Caurimare">Urbanización Caurimare</option>
                                    <option vlaue="Urbanización Chacao">Urbanización Chacao</option>
                                    <option vlaue="Urbanización Chuao">Urbanización Chuao</option>
                                    <option vlaue="Urbanización Colinas de Baruta">Urbanización Colinas de Baruta</option>
                                    <option vlaue="Urbanización Colinas de Bello Monte">Urbanización Colinas de Bello Monte</option>
                                    <option vlaue="Urbanización Colinas de la California">Urbanización Colinas de la California</option>
                                    <option vlaue="Urbanización Colinas de la Mariposa">Urbanización Colinas de la Mariposa</option>
                                    <option vlaue="Urbanización Colinas de la Trinidad">Urbanización Colinas de la Trinidad</option>
                                    <option vlaue="Urbanización Colinas de los Ruices">Urbanización Colinas de los Ruices</option>
                                    <option vlaue="Urbanización Colinas de Turumo">Urbanización Colinas de Turumo</option>
                                    <option vlaue="Urbanización Colinas de Valle Arriba">Urbanización Colinas de Valle Arriba</option>
                                    <option vlaue="Urbanización Colinas del Tamanaco">Urbanización Colinas del Tamanaco</option>
                                    <option vlaue="Urbanización Cumbres de Curumo">Urbanización Cumbres de Curumo</option>
                                    <option vlaue="Urbanización Cútira">Urbanización Cútira</option>
                                    <option vlaue="Urbanización Don Bosco">Urbanización Don Bosco</option>
                                    <option vlaue="Urbanización el Cafetal">Urbanización el Cafetal</option>
                                    <option vlaue="Urbanización el Dorado">Urbanización el Dorado</option>
                                    <option vlaue="Urbanización el Llanito">Urbanización el Llanito</option>
                                    <option vlaue="Urbanización el Marqués">Urbanización el Marqués</option>
                                    <option vlaue="Urbanización el Pedregal">Urbanización el Pedregal</option>
                                    <option vlaue="Urbanización el Peñón">Urbanización el Peñón</option>
                                    <option vlaue="Urbanización el Placer">Urbanización el Placer</option>
                                    <option vlaue="Urbanización el Placer de María">Urbanización el Placer de María</option>
                                    <option vlaue="Urbanización el Prado">Urbanización el Prado</option>
                                    <option vlaue="Urbanización el Retiro">Urbanización el Retiro</option>
                                    <option vlaue="Urbanización el Rosal">Urbanización el Rosal</option>
                                    <option vlaue="Urbanización la Boyera">Urbanización la Boyera</option>
                                    <option vlaue="Urbanización la Carlota">Urbanización la Carlota</option>
                                    <option vlaue="Urbanización la Castellana">Urbanización la Castellana</option>
                                    <option vlaue="Urbanización la Ciudadela">Urbanización la Ciudadela</option>
                                    <option vlaue="Urbanización la Cumbre">Urbanización la Cumbre</option>
                                    <option vlaue="Urbanización la Esmeralda">Urbanización la Esmeralda</option>
                                    <option vlaue="Urbanización la Esperanza">Urbanización la Esperanza</option>
                                    <option vlaue="Urbanización la Estancia">Urbanización la Estancia</option>
                                    <option vlaue="Urbanización la Floresta">Urbanización la Floresta</option>
                                    <option vlaue="Urbanización la Lagunita Country Club">Urbanización la Lagunita Country Club</option>
                                    <option vlaue="Urbanización la Mariposa">Urbanización la Mariposa</option>
                                    <option vlaue="Urbanización la Trinidad">Urbanización la Trinidad</option>
                                    <option vlaue="Urbanización la Urbina">Urbanización la Urbina</option>
                                    <option vlaue="Urbanización las Bonitas">Urbanización las Bonitas</option>
                                    <option vlaue="Urbanización las Mercedes">Urbanización las Mercedes</option>
                                    <option vlaue="Urbanización las Minas">Urbanización las Minas</option>
                                    <option vlaue="Urbanización las Vegas de Petare">Urbanización las Vegas de Petare</option>
                                    <option vlaue="Urbanización Lomas de las Mercedes">Urbanización Lomas de las Mercedes</option>
                                    <option vlaue="Urbanización Lomas del Club Hípico">Urbanización Lomas del Club Hípico</option>
                                    <option vlaue="Urbanización los Chorros">Urbanización los Chorros</option>
                                    <option vlaue="Urbanización los Cortijos de Lourdes">Urbanización los Cortijos de Lourdes</option>
                                    <option vlaue="Urbanización los Dos Caminos">Urbanización los Dos Caminos</option>
                                    <option vlaue="Urbanización los Naranjos">Urbanización los Naranjos</option>
                                    <option vlaue="Urbanización los Ruices">Urbanización los Ruices</option>
                                    <option vlaue="Urbanización Macaracuay">Urbanización Macaracuay</option>
                                    <option vlaue="Urbanización Mampote">Urbanización Mampote</option>
                                    <option vlaue="Urbanización Mirador del Este">Urbanización Mirador del Este</option>
                                    <option vlaue="Urbanización Miranda">Urbanización Miranda</option>
                                    <option vlaue="Urbanización Palo Verde">Urbanización Palo Verde</option>
                                    <option vlaue="Urbanización Parque Sebucán">Urbanización Parque Sebucán</option>
                                    <option vlaue="Urbanización Paseo las Mercedes">Urbanización Paseo las Mercedes</option>
                                    <option vlaue="Urbanización Paulo VI">Urbanización Paulo VI</option>
                                    <option vlaue="Urbanización Prados del Este">Urbanización Prados del Este</option>
                                    <option vlaue="Urbanización Santa Fe Norte y Sur">Urbanización Santa Fe Norte y Sur</option>
                                    <option vlaue="Urbanización Santa Ines">Urbanización Santa Ines</option>
                                    <option vlaue="Urbanización Santa Paula">Urbanización Santa Paula</option>
                                    <option vlaue="Urbanización Santa Sofia">Urbanización Santa Sofia</option>
                                    <option vlaue="Urbanización Sartenejas">Urbanización Sartenejas</option>
                                    <option vlaue="Urbanización Sebucan">Urbanización Sebucan</option>
                                    <option vlaue="Urbanización Sector los Naranjos">Urbanización Sector los Naranjos</option>
                                    <option vlaue="Urbanización Sorocaima">Urbanización Sorocaima</option>
                                    <option vlaue="Urbanización Terraza del Club Hipico">Urbanización Terraza del Club Hipico</option>
                                    <option vlaue="Urbanización Terrazas del Avila">Urbanización Terrazas del Avila</option>
                                    <option vlaue="Urbanización Turiamo">Urbanización Turiamo</option>
                                    <option vlaue="Urbanización Turumo">Urbanización Turumo</option>
                                    <option vlaue="Urbanización Valle Arriba">Urbanización Valle Arriba</option>



                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Monagas')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Aguasay">Aguasay</option>
                                    <option vlaue="Alto Guri">Alto Guri</option>
                                    <option vlaue="Altos de los Godos">Altos de los Godos</option>
                                    <option vlaue="Andrés Eloy Blanco">Andrés Eloy Blanco</option>
                                    <option vlaue="Aragua de Maturín">Aragua de Maturín</option>
                                    <option vlaue="Areo">Areo</option>
                                    <option vlaue="Azagua">Azagua</option>
                                    <option vlaue="Bajo Guarapiche">Bajo Guarapiche</option>
                                    <option vlaue="Barrancas">Barrancas</option>
                                    <option vlaue="Brisas de Aribi">Brisas de Aribi</option>
                                    <option vlaue="Cachipo">Cachipo</option>
                                    <option vlaue="Caicara de Maturín">Caicara de Maturín</option>
                                    <option vlaue="Campo Alegre">Campo Alegre</option>
                                    <option vlaue="Caño Colorado">Caño Colorado</option>
                                    <option vlaue="Carabobo">Carabobo</option>
                                    <option vlaue="Caripe">Caripe</option>
                                    <option vlaue="Caripito">Caripito</option>
                                    <option vlaue="Chaguaramal">Chaguaramal</option>
                                    <option vlaue="El Corozo">El Corozo</option>
                                    <option vlaue="El Cortijo">El Cortijo</option>
                                    <option vlaue="El Furrial">El Furrial</option>
                                    <option vlaue="El Junín">El Junín</option>
                                    <option vlaue="El Merey">El Merey</option>
                                    <option vlaue="El Paraíso">El Paraíso</option>
                                    <option vlaue="El Pelón">El Pelón</option>
                                    <option vlaue="El Respiro">El Respiro</option>
                                    <option vlaue="El Tejero">El Tejero</option>
                                    <option vlaue="El Zamuro">El Zamuro</option>
                                    <option vlaue="El Zorro">El Zorro</option>
                                    <option vlaue="Guanaguana">Guanaguana</option>
                                    <option vlaue="Guarapiche">Guarapiche</option>
                                    <option vlaue="Guarito">Guarito</option>
                                    <option vlaue="Jusepín">Jusepín</option>
                                    <option vlaue="La Candelaria">La Candelaria</option>
                                    <option vlaue="La Cruz de la Paloma">La Cruz de la Paloma</option>
                                    <option vlaue="La Guanota">La Guanota</option>
                                    <option vlaue="La Morrocoya">La Morrocoya</option>
                                    <option vlaue="La Pica">La Pica</option>
                                    <option vlaue="La Plantación">La Plantación</option>
                                    <option vlaue="La Poderosa">La Poderosa</option>
                                    <option vlaue="La Toscana">La Toscana</option>
                                    <option vlaue="Las Alhuacas">Las Alhuacas</option>
                                    <option vlaue="Las Brisas">Las Brisas</option>
                                    <option vlaue="Las Cocuizas">Las Cocuizas</option>
                                    <option vlaue="Las Palmeras">Las Palmeras</option>
                                    <option vlaue="Las Piñas">Las Piñas</option>
                                    <option vlaue="Libertador">Libertador</option>
                                    <option vlaue="Los Guaritos">Los Guaritos</option>
                                    <option vlaue="Los Pinos">Los Pinos</option>
                                    <option vlaue="Manreza">Manreza</option>
                                    <option vlaue="Maturín">Maturín</option>
                                    <option vlaue="Miraflores">Miraflores</option>
                                    <option vlaue="Morichal Largo">Morichal Largo</option>
                                    <option vlaue="Puerto Amador">Puerto Amador</option>
                                    <option vlaue="Punta Gorda">Punta Gorda</option>
                                    <option vlaue="Quiriquire">Quiriquire</option>
                                    <option vlaue="San Antonio de Maturín">San Antonio de Maturín</option>
                                    <option vlaue="San Antonio de Tabasca">San Antonio de Tabasca</option>
                                    <option vlaue="San Felix de Monagas">San Felix de Monagas</option>
                                    <option vlaue="San Francisco de Maturín">San Francisco de Maturín</option>
                                    <option vlaue="San Luis">San Luis</option>
                                    <option vlaue="San Miguel">San Miguel</option>
                                    <option vlaue="San Vicente">San Vicente</option>
                                    <option vlaue="Santa Bárbara">Santa Bárbara</option>
                                    <option vlaue="Santa Elena">Santa Elena</option>
                                    <option vlaue="Sarabria">Sarabria</option>
                                    <option vlaue="Temblador">Temblador</option>
                                    <option vlaue="Teresén">Teresén</option>
                                    <option vlaue="Tirado">Tirado</option>
                                    <option vlaue="Viento Colao">Viento Colao</option>
                                    <option vlaue="Viento Fresco">Viento Fresco</option>
                                    <option vlaue="Vuelta Larga">Vuelta Larga</option>
                                    <option vlaue="Zona Industrial">Zona Industrial</option>


                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Nueva Esparta')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >
                                    <option vlaue="Agua de Vaca">Agua de VacaCiudad</option>
                                    <option vlaue="Altagracia">Altagracia</option>
                                    <option vlaue="Antolin del Campo">Antolin del Campo</option>
                                    <option vlaue="Boca del Pozo">Boca del Pozo</option>
                                    <option vlaue="Boca del Río">Boca del Río</option>
                                    <option vlaue="Bolívar">Bolívar</option>
                                    <option vlaue="Boquerón">Boquerón</option>
                                    <option vlaue="Chacachacare">Chacachacare</option>
                                    <option vlaue="El Amparo">El Amparo</option>
                                    <option vlaue="El Bicha">El Bicha</option>
                                    <option vlaue="El Espinal">El Espinal</option>
                                    <option vlaue="El Guamache (Isla de Coche)">El Guamache (Isla de Coche)</option>
                                    <option vlaue="El Guamache (Punta de Piedras)">El Guamache (Punta de Piedras)</option>
                                    <option vlaue="El Maco">El Maco</option>
                                    <option vlaue="El Pilar">El Pilar</option>
                                    <option vlaue="El Valle de Pedro González">El Valle de Pedro González</option>
                                    <option vlaue="El Valle del Espíritu Santo">El Valle del Espíritu Santo</option>
                                    <option vlaue="Güinima">Güinima</option>
                                    <option vlaue="Juan Griego">Juan Griego</option>
                                    <option vlaue="La Asunción">La Asunción</option>
                                    <option vlaue="La Guardia">La Guardia</option>
                                    <option vlaue="La Isleta">La Isleta</option>
                                    <option vlaue="La Plaza de Paraguachí">La Plaza de Paraguachí</option>
                                    <option vlaue="La Vecindad">La Vecindad</option>
                                    <option vlaue="Las Cabreras">Las Cabreras</option>
                                    <option vlaue="Las Hernández">Las Hernández</option>
                                    <option vlaue="Las Maritas">Las Maritas</option>
                                    <option vlaue="Las Piedras">Las Piedras</option>
                                    <option vlaue="Los Bagres">Los Bagres</option>
                                    <option vlaue="Los Cerritos">Los Cerritos</option>
                                    <option vlaue="Los Giles">Los Giles</option>
                                    <option vlaue="Los Gómez">Los Gómez</option>
                                    <option vlaue="Los Marvales">Los Marvales</option>
                                    <option vlaue="Los Millanes">Los Millanes</option>
                                    <option vlaue="Macanao">Macanao</option>
                                    <option vlaue="Manzanillo">Manzanillo</option>
                                    <option vlaue="Mariño">Mariño</option>
                                    <option vlaue="Orinoco">Orinoco</option>
                                    <option vlaue="Pampatar">Pampatar</option>
                                    <option vlaue="Pedregales">Pedregales</option>
                                    <option vlaue="Pedro González">Pedro González</option>
                                    <option vlaue="Porlamar">Porlamar</option>
                                    <option vlaue="Puerto Fermín">Puerto Fermín</option>
                                    <option vlaue="Punta de Piedras">Punta de Piedras</option>
                                    <option vlaue="Robledal">Robledal</option>
                                    <option vlaue="San Antonio">San Antonio</option>
                                    <option vlaue="San Juan Bautista">San Juan Bautista</option>
                                    <option vlaue="San Pedro de Coche">San Pedro de Coche</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Tacarigua">Tacarigua</option>
                                    <option vlaue="Urbanización Luisa Cáceres de Arismendi">Urbanización Luisa Cáceres de Arismendi</option>
                                    <option vlaue="Urbanización Playa el Angel">Urbanización Playa el Angel</option>
                                    <option vlaue="Urbanización Valle Verde">Urbanización Valle Verde</option>
                                    <option vlaue="Villa Rosa">Villa Rosa</option>



                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Portuguesa')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Acarigua">Acarigua</option>
                                    <option vlaue="Agua Blanca">Agua Blanca</option>
                                    <option vlaue="Aparición">Aparición</option>
                                    <option vlaue="Araure">Araure</option>
                                    <option vlaue="Biscucuy">Biscucuy</option>
                                    <option vlaue="Boconoíto">Boconoíto</option>
                                    <option vlaue="Chabasquén">Chabasquén</option>
                                    <option vlaue="Colonia Tunén">Colonia Tunén</option>
                                    <option vlaue="Córdoba">Córdoba</option>
                                    <option vlaue="El Poblado">El Poblado</option>
                                    <option vlaue="Guanare">Guanare</option>
                                    <option vlaue="Guanarito">Guanarito</option>
                                    <option vlaue="La Concepción">La Concepción</option>
                                    <option vlaue="La Estación">La Estación</option>
                                    <option vlaue="La Misión">La Misión</option>
                                    <option vlaue="La Trinidad">La Trinidad</option>
                                    <option vlaue="Los Colorados">Los Colorados</option>
                                    <option vlaue="Los Morrones">Los Morrones</option>
                                    <option vlaue="Mesa de Caruaca">Mesa de Caruaca</option>
                                    <option vlaue="Ospino">Ospino</option>
                                    <option vlaue="Papelón">Papelón</option>
                                    <option vlaue="Paraíso de Chabasquén">Paraíso de Chabasquén</option>
                                    <option vlaue="Payara">Payara</option>
                                    <option vlaue="Pimpinela">Pimpinela</option>
                                    <option vlaue="Píritu">Píritu</option>
                                    <option vlaue="San Rafael de Onoto">San Rafael de Onoto</option>
                                    <option vlaue="Santa Rosalía de Turen">Santa Rosalía de Turen</option>
                                    <option vlaue="Turen">Turen</option>
                                    <option vlaue="Unellez">Unellez</option>
                                    <option vlaue="Villa Bruzual">Villa Bruzual</option>




                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Sucre')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Acarigua">Acarigua</option>
                                    <option vlaue="Agua Fría">Agua Fría</option>
                                    <option vlaue="Altos de Sucre">Altos de Sucre</option>
                                    <option vlaue="Araya">Araya</option>
                                    <option vlaue="Arenas">Arenas</option>
                                    <option vlaue="Bohordal">Bohordal</option>
                                    <option vlaue="Caigüire">Caigüire</option>
                                    <option vlaue="Campearito">Campearito</option>
                                    <option vlaue="Campo Claro">Campo Claro</option>
                                    <option vlaue="Cariaco">Cariaco</option>
                                    <option vlaue="Carúpano">Carúpano</option>
                                    <option vlaue="Casanay">Casanay</option>
                                    <option vlaue="Catuaro">Catuaro</option>
                                    <option vlaue="Chacopata">Chacopata</option>
                                    <option vlaue="Cristóbal Colón">Cristóbal Colón</option>
                                    <option vlaue="Cumaná">Cumaná</option>
                                    <option vlaue="Cumanacoa">Cumanacoa</option>
                                    <option vlaue="El Morro">El Morro</option>
                                    <option vlaue="El Paujil">El Paujil</option>
                                    <option vlaue="El Peñón">El Peñón</option>
                                    <option vlaue="El Pilar">El Pilar</option>
                                    <option vlaue="El Rincón">El Rincón</option>
                                    <option vlaue="Guaca">Guaca</option>
                                    <option vlaue="Guanoco">Guanoco</option>
                                    <option vlaue="Guarapiche">Guarapiche</option>
                                    <option vlaue="Guarauna">Guarauna</option>
                                    <option vlaue="Guaraúnos">Guaraúnos</option>
                                    <option vlaue="Guariquén">Guariquén</option>
                                    <option vlaue="Guayana">Guayana</option>
                                    <option vlaue="Güiria">Güiria</option>
                                    <option vlaue="Irapa">Irapa</option>
                                    <option vlaue="Las Piedras de Cocollar">Las Piedras de Cocollar</option>
                                    <option vlaue="Las Vegas">Las Vegas</option>
                                    <option vlaue="Los Altos de Santa fe">Los Altos de Santa fe</option>
                                    <option vlaue="Los Arroyos">Los Arroyos</option>
                                    <option vlaue="Macarapana">Macarapana</option>
                                    <option vlaue="Macuro">Macuro</option>
                                    <option vlaue="Maraval">Maraval</option>
                                    <option vlaue="Marigüitar">Marigüitar</option>
                                    <option vlaue="Muelle de Cariaco">Muelle de Cariaco</option>
                                    <option vlaue="Nueva Colombia">Nueva Colombia</option>
                                    <option vlaue="Playa Grande">Playa Grande</option>
                                    <option vlaue="Puerto Santo">Puerto Santo</option>
                                    <option vlaue="Punta Brava (Tunapuycito)">Punta Brava (Tunapuycito)</option>
                                    <option vlaue="Quebrada Seca">Quebrada Seca</option>
                                    <option vlaue="Río Caribe">Río Caribe</option>
                                    <option vlaue="Río Casanay">Río Casanay</option>
                                    <option vlaue="Río Grande">Río Grande</option>
                                    <option vlaue="Río Salado">Río Salado</option>
                                    <option vlaue="Río Seco">Río Seco</option>
                                    <option vlaue="San Antonio del Golfo">San Antonio del Golfo</option>
                                    <option vlaue="San José de Aerocuar">San José de Aerocuar</option>
                                    <option vlaue="San Juan de las Galdonas">San Juan de las Galdonas</option>
                                    <option vlaue="San Juan de Unare">San Juan de Unare</option>
                                    <option vlaue="San Lorenzo">San Lorenzo</option>
                                    <option vlaue="San Vicente">San Vicente</option>
                                    <option vlaue="Santa Cruz">Santa Cruz</option>
                                    <option vlaue="Santa Fe">Santa Fe</option>
                                    <option vlaue="Santa María de Cariaco">Santa María de Cariaco</option>
                                    <option vlaue="Saucedo">Saucedo</option>
                                    <option vlaue="Soro">Soro</option>
                                    <option vlaue="Tunapuicito">Tunapuicito</option>
                                    <option vlaue="Tunapuy">Tunapuy</option>
                                    <option vlaue="Valle de San Bonifacio">Valle de San Bonifacio</option>
                                    <option vlaue="Yaguaraparo">Yaguaraparo</option>
                                    <option vlaue="Yoco">Yoco</option>



                                </select>
                                <input type="hidden" name="zona" value="Oriente">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Táchira')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Abejales">Abejales</option>
                                    <option vlaue="Aguas Calientes">Aguas Calientes</option>
                                    <option vlaue="Boca de Grita">Boca de Grita</option>
                                    <option vlaue="Borotá">Borotá</option>
                                    <option vlaue="Caño Macho">Caño Macho</option>
                                    <option vlaue="Colón">Colón</option>
                                    <option vlaue="Coloncito">Coloncito</option>
                                    <option vlaue="Cordero">Cordero</option>
                                    <option vlaue="Delicias">Delicias</option>
                                    <option vlaue="El Amparo">El Amparo</option>
                                    <option vlaue="El Cantón">El Cantón</option>
                                    <option vlaue="El Carmen">El Carmen</option>
                                    <option vlaue="El Cobre">El Cobre</option>
                                    <option vlaue="El Corozo">El Corozo</option>
                                    <option vlaue="El Hato de la Virgen">El Hato de la Virgen</option>
                                    <option vlaue="El Jordán">El Jordán</option>
                                    <option vlaue="El Nula">El Nula</option>
                                    <option vlaue="El Piñal">El Piñal</option>
                                    <option vlaue="El Pino">El Pino</option>
                                    <option vlaue="El Potosí">El Potosí</option>
                                    <option vlaue="El Teteo">El Teteo</option>
                                    <option vlaue="Guasdualito">Guasdualito</option>
                                    <option vlaue="Helechales">Helechales</option>
                                    <option vlaue="Hernandez">Hernandez</option>
                                    <option vlaue="Independencia">Independencia</option>
                                    <option vlaue="La Concordia">La Concordia</option>
                                    <option vlaue="La Florida">La Florida</option>
                                    <option vlaue="La Fría">La Fría</option>
                                    <option vlaue="La Fundación">La Fundación</option>
                                    <option vlaue="La Grita">La Grita</option>
                                    <option vlaue="La Pedrera">La Pedrera</option>
                                    <option vlaue="La Revancha">La Revancha</option>
                                    <option vlaue="La Rinconada">La Rinconada</option>
                                    <option vlaue="La Tendida">La Tendida</option>
                                    <option vlaue="La Victoria">La Victoria</option>
                                    <option vlaue="Las Dantas">Las Dantas</option>
                                    <option vlaue="Libertad del Táchira">Libertad del Táchira</option>
                                    <option vlaue="Llano Largo">Llano Largo</option>
                                    <option vlaue="Lobatera">Lobatera</option>
                                    <option vlaue="Los Caneyes">Los Caneyes</option>
                                    <option vlaue="Los Kioscos">Los Kioscos</option>
                                    <option vlaue="Los Naranjos">Los Naranjos</option>
                                    <option vlaue="Michelena">Michelena</option>
                                    <option vlaue="Morotuto">Morotuto</option>
                                    <option vlaue="Nueva Arcadia">Nueva Arcadia</option>
                                    <option vlaue="Orope">Orope</option>
                                    <option vlaue="Palmarito">Palmarito</option>
                                    <option vlaue="Palmira">Palmira</option>
                                    <option vlaue="Patiecito">Patiecito</option>
                                    <option vlaue="Peribeca">Peribeca</option>
                                    <option vlaue="Pregonero">Pregonero</option>
                                    <option vlaue="Pueblo Encima">Pueblo Encima</option>
                                    <option vlaue="Pueblo Hondo">Pueblo Hondo</option>
                                    <option vlaue="Pueblo las Hernández">Pueblo las Hernández</option>
                                    <option vlaue="Pueblo Nuevo">Pueblo Nuevo</option>
                                    <option vlaue="Quebrada Seca">Quebrada Seca</option>
                                    <option vlaue="Queniquea">Queniquea</option>
                                    <option vlaue="Ramos">Ramos</option>
                                    <option vlaue="Río Chiquito">Río Chiquito</option>
                                    <option vlaue="Rubio">Rubio</option>
                                    <option vlaue="Sabana Grande">Sabana Grande</option>
                                    <option vlaue="San Antonio del Táchira">San Antonio del Táchira</option>
                                    <option vlaue="San Cristóbal">San Cristóbal</option>
                                    <option vlaue="San Félix">San Félix</option>
                                    <option vlaue="San Félix de Urraca">San Félix de Urraca</option>
                                    <option vlaue="San Joaquín de Navay">San Joaquín de Navay</option>
                                    <option vlaue="San José de Bolívar">San José de Bolívar</option>
                                    <option vlaue="San Josecito">San Josecito</option>
                                    <option vlaue="San Juan Bautista">San Juan Bautista</option>
                                    <option vlaue="San Juan de Colón">San Juan de Colón</option>
                                    <option vlaue="San Pedro de Lirio">San Pedro de Lirio</option>
                                    <option vlaue="San Rafael del Piñal">San Rafael del Piñal</option>
                                    <option vlaue="San Simón">San Simón</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Seboruco">Seboruco</option>
                                    <option vlaue="Táriba">Táriba</option>
                                    <option vlaue="Umuquena">Umuquena</option>
                                    <option vlaue="Ureña">Ureña</option>
                                    <option vlaue="Villa Páez">Villa Páez</option>



                                </select>
                                <input type="hidden" name="zona" value="Andes">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Trujillo')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Agua Santa">Agua Santa</option>
                                    <option vlaue="Agua Viva">Agua Viva</option>
                                    <option vlaue="Altos de Estanque">Altos de Estanque</option>
                                    <option vlaue="Betijoque">Betijoque</option>
                                    <option vlaue="Boconó">Boconó</option>
                                    <option vlaue="Bolivia">Bolivia</option>
                                    <option vlaue="Buena Vista">Buena Vista</option>
                                    <option vlaue="Burbusay">Burbusay</option>
                                    <option vlaue="Caja Seca">Caja Seca</option>
                                    <option vlaue="Campo Alegre">Campo Alegre</option>
                                    <option vlaue="Campo Elías">Campo Elías</option>
                                    <option vlaue="Carache">Carache</option>
                                    <option vlaue="Carvajal">Carvajal</option>
                                    <option vlaue="Chejendé">Chejendé</option>
                                    <option vlaue="Cuicas">Cuicas</option>
                                    <option vlaue="Dividive">Dividive</option>
                                    <option vlaue="El Alto Escuque">El Alto Escuque</option>
                                    <option vlaue="El Batatal">El Batatal</option>
                                    <option vlaue="El Cenizo">El Cenizo</option>
                                    <option vlaue="El Socorro">El Socorro</option>
                                    <option vlaue="Escuque">Escuque</option>
                                    <option vlaue="Isnotú">Isnotú</option>
                                    <option vlaue="Jajó">Jajó</option>
                                    <option vlaue="La Ceiba">La Ceiba</option>
                                    <option vlaue="La Cejita">La Cejita</option>
                                    <option vlaue="La Concepción de Carache">La Concepción de Carache</option>
                                    <option vlaue="La Concepción de Pampanito">La Concepción de Pampanito</option>
                                    <option vlaue="La Cuchilla">La Cuchilla</option>
                                    <option vlaue="La Mesa de Esnujaque">La Mesa de Esnujaque</option>
                                    <option vlaue="La Mulata">La Mulata</option>
                                    <option vlaue="La Plazuela">La Plazuela</option>
                                    <option vlaue="La Plazuelita">La Plazuelita</option>
                                    <option vlaue="La Puerta">La Puerta</option>
                                    <option vlaue="La Quebrada">La Quebrada</option>
                                    <option vlaue="La Unión">La Unión</option>
                                    <option vlaue="Las Mesitas">Las Mesitas</option>
                                    <option vlaue="Mendoza Fría">Mendoza Fría</option>
                                    <option vlaue="Mitón">Mitón</option>
                                    <option vlaue="Monay">Monay</option>
                                    <option vlaue="Monte Carmelo">Monte Carmelo</option>
                                    <option vlaue="Motatán">Motatán</option>
                                    <option vlaue="Niquitao">Niquitao</option>
                                    <option vlaue="Nueva Bolivia">Nueva Bolivia</option>
                                    <option vlaue="Palmarito">Palmarito</option>
                                    <option vlaue="Pampán">Pampán</option>
                                    <option vlaue="Pampanito">Pampanito</option>
                                    <option vlaue="Punto Palmarito">Punto Palmarito</option>
                                    <option vlaue="Sabana de Mendoza">Sabana de Mendoza</option>
                                    <option vlaue="Sabana Grande">Sabana Grande</option>
                                    <option vlaue="Sabana Libre">Sabana Libre</option>
                                    <option vlaue="San Cristóbal de Torondoy">San Cristóbal de Torondoy</option>
                                    <option vlaue="San José de Palmira">San José de Palmira</option>
                                    <option vlaue="San Juan de Betijoque">San Juan de Betijoque</option>
                                    <option vlaue="San Lázaro">San Lázaro</option>
                                    <option vlaue="San Miguel">San Miguel</option>
                                    <option vlaue="San Miguel de Bocono">San Miguel de Bocono</option>
                                    <option vlaue="San Rafael de Boconó">San Rafael de Boconó</option>
                                    <option vlaue="San Rafael de Carvajal">San Rafael de Carvajal</option>
                                    <option vlaue="Santa Ana">Santa Ana</option>
                                    <option vlaue="Santa Apolonia de Mérida">Santa Apolonia de Mérida</option>
                                    <option vlaue="Santa Apolonia de Trujillo">Santa Apolonia de Trujillo</option>
                                    <option vlaue="Santa Isabel">Santa Isabel</option>
                                    <option vlaue="Santa Rosa">Santa Rosa</option>
                                    <option vlaue="Santiago">Santiago</option>
                                    <option vlaue="Torococo">Torococo</option>
                                    <option vlaue="Torondoy">Torondoy</option>
                                    <option vlaue="Tostós">Tostós</option>
                                    <option vlaue="Trujillo">Trujillo</option>
                                    <option vlaue="Valera">Valera</option>




                                </select>
                                <input type="hidden" name="zona" value="Andes">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Vargas')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Anare">Anare</option>
                                    <option vlaue="Camurí Grande">Camurí Grande</option>
                                    <option vlaue="Caraballeda">Caraballeda</option>
                                    <option vlaue="Carayaca">Carayaca</option>
                                    <option vlaue="Catia la Mar">Catia la Mar</option>
                                    <option vlaue="La Guaira">La Guaira</option>
                                    <option vlaue="La Sabana">La Sabana</option>
                                    <option vlaue="Las Salinas">Las Salinas</option>
                                    <option vlaue="Los Caracas">Los Caracas</option>
                                    <option vlaue="Macuto">Macuto</option>
                                    <option vlaue="Maiquetía">Maiquetía</option>
                                    <option vlaue="Marapa">Marapa</option>
                                    <option vlaue="Naiguatá">Naiguatá</option>
                                    <option vlaue="Oricao">Oricao</option>
                                    <option vlaue="Puerto Carayaca">Puerto Carayaca</option>



                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>

                            <div class="form-group condicional" data-condition="(estado == 'Yaracuy')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Agua Negra">Agua Negra</option>
                                    <option vlaue="Albarico">Albarico</option>
                                    <option vlaue="Aroa">Aroa</option>
                                    <option vlaue="Boraure">Boraure</option>
                                    <option vlaue="Campo Elías">Campo Elías</option>
                                    <option vlaue="Chivacoa">Chivacoa</option>
                                    <option vlaue="Corocote">Corocote</option>
                                    <option vlaue="El Caserío de Carabobo">El Caserío de Carabobo</option>
                                    <option vlaue="El Cedrito">El Cedrito</option>
                                    <option vlaue="El Guayabo">El Guayabo</option>
                                    <option vlaue="Farriar">Farriar</option>
                                    <option vlaue="Guama">Guama</option>
                                    <option vlaue="Hato Viejo">Hato Viejo</option>
                                    <option vlaue="Independencia">Independencia</option>
                                    <option vlaue="La Hoya">La Hoya</option>
                                    <option vlaue="Las Rositas">Las Rositas</option>
                                    <option vlaue="Marín">Marín</option>
                                    <option vlaue="Nirgua">Nirgua</option>
                                    <option vlaue="Sabana de Parra">Sabana de Parra</option>
                                    <option vlaue="Salom">Salom</option>
                                    <option vlaue="San Felipe">San Felipe</option>
                                    <option vlaue="San Pablo">San Pablo</option>
                                    <option vlaue="Taría">Taría</option>
                                    <option vlaue="Temerla">Temerla</option>
                                    <option vlaue="Urachiche">Urachiche</option>
                                    <option vlaue="Yaritagua">Yaritagua</option>
                                    <option vlaue="Yumare">Yumare</option>




                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>

                                <div class="form-group condicional" data-condition="(estado == 'Zulia')">
                                    <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Aeropuerto la Chinita">Aeropuerto la Chinita</option>
                                    <option vlaue="Alturitas">Alturitas</option>
                                    <option vlaue="Arapuey">Arapuey</option>
                                    <option vlaue="Avenida los Haticos">Avenida los Haticos</option>
                                    <option vlaue="Bachaquero">Bachaquero</option>
                                    <option vlaue="Barranca">Barranca</option>
                                    <option vlaue="Barranquitas">Barranquitas</option>
                                    <option vlaue="Barrio 1º de Agosto">Barrio 1º de Agosto</option>
                                    <option vlaue="Barrio 1º de Mayo">Barrio 1º de Mayo</option>
                                    <option vlaue="Barrio 14 de Noviembre">Barrio 14 de Noviembre</option>
                                    <option vlaue="Barrio 18 de Diciembre">Barrio 18 de Diciembre</option>
                                    <option vlaue="Barrio 19 de Abril">Barrio 19 de Abril</option>
                                    <option vlaue="Barrio 21 de Octubre">Barrio 21 de Octubre</option>
                                    <option vlaue="Barrio 23 de Enero">Barrio 23 de Enero</option>
                                    <option vlaue="Barrio 24 de Julio">Barrio 24 de Julio</option>
                                    <option vlaue="Barrio 24 de Noviembre">Barrio 24 de Noviembre</option>
                                    <option vlaue="Barrio 24 de Octubre">Barrio 24 de Octubre</option>
                                    <option vlaue="Barrio 28 de Diciembre">Barrio 28 de Diciembre</option>
                                    <option vlaue="Barrio 5 de Julio">Barrio 5 de Julio</option>
                                    <option vlaue="Barrio Alberto Carnevali">Barrio Alberto Carnevali</option>
                                    <option vlaue="Barrio Altamira">Barrio Altamira</option>
                                    <option vlaue="Barrio Ana María Campos">Barrio Ana María Campos</option>
                                    <option vlaue="Barrio Andrades Labarca">Barrio Andrades Labarca</option>
                                    <option vlaue="Barrio Ayacucho">Barrio Ayacucho</option>
                                    <option vlaue="Barrio Betulio González">Barrio Betulio González</option>
                                    <option vlaue="Barrio Blanco">Barrio Blanco</option>
                                    <option vlaue="Barrio Bolivia">Barrio Bolivia</option>
                                    <option vlaue="Barrio Brisas del Sur">Barrio Brisas del Sur</option>
                                    <option vlaue="Barrio Buena Vista">Barrio Buena Vista</option>
                                    <option vlaue="Barrio Cabeza de Toro">Barrio Cabeza de Toro</option>
                                    <option vlaue="Barrio Calendario">Barrio Calendario</option>
                                    <option vlaue="Barrio Cañada Honda">Barrio Cañada Honda</option>
                                    <option vlaue="Barrio Canchancha">Barrio Canchancha</option>
                                    <option vlaue="Barrio Capitán Chico">Barrio Capitán Chico</option>
                                    <option vlaue="Barrio Carabobo">Barrio Carabobo</option>
                                    <option vlaue="Barrio Carmelo Urdaneta">Barrio Carmelo Urdaneta</option>
                                    <option vlaue="Barrio Cerro de Marín">Barrio Cerro de Marín</option>
                                    <option vlaue="Barrio Corazón de Jesús">Barrio Corazón de Jesús</option>
                                    <option vlaue="Barrio Corea">Barrio Corea</option>
                                    <option vlaue="Barrio Coromoto">Barrio Coromoto</option>
                                    <option vlaue="Barrio Cruz de Mayo">Barrio Cruz de Mayo</option>
                                    <option vlaue="Barrio Cuatricentenario">Barrio Cuatricentenario</option>
                                    <option vlaue="Barrio de Estanques">Barrio de Estanques</option>
                                    <option vlaue="Barrio Don Bosco">Barrio Don Bosco</option>
                                    <option vlaue="Barrio el Amparo">Barrio el Amparo</option>
                                    <option vlaue="Barrio el Bajo Grande">Barrio el Bajo Grande</option>
                                    <option vlaue="Barrio el Callao 1ª 2ª y 3ª Etapa">Barrio el Callao 1ª 2ª y 3ª Etapa</option>
                                    <option vlaue="Barrio el Calvario">Barrio el Calvario</option>
                                    <option vlaue="Barrio el Cardonal">Barrio el Cardonal</option>
                                    <option vlaue="Barrio el Corito">Barrio el Corito</option>
                                    <option vlaue="Barrio el Cují">Barrio el Cují</option>
                                    <option vlaue="Barrio el Guaicaipuro">Barrio el Guaicaipuro</option>
                                    <option vlaue="Barrio el Indio">Barrio el Indio</option>
                                    <option vlaue="Barrio el Jazmín">Barrio el Jazmín</option>
                                    <option vlaue="Barrio el Manzanillo">Barrio el Manzanillo</option>
                                    <option vlaue="Barrio el Oso">Barrio el Oso</option>
                                    <option vlaue="Barrio el Pajal">Barrio el Pajal</option>
                                    <option vlaue="Barrio el Pedregal">Barrio el Pedregal</option>
                                    <option vlaue="Barrio el Perú">Barrio el Perú</option>
                                    <option vlaue="Barrio el Potente">Barrio el Potente</option>
                                    <option vlaue="Barrio el Progreso">Barrio el Progreso</option>
                                    <option vlaue="Barrio el Puente">Barrio el Puente</option>
                                    <option vlaue="Barrio el Silencio">Barrio el Silencio</option>
                                    <option vlaue="Barrio el Socorro">Barrio el Socorro</option>
                                    <option vlaue="Barrio el Valle">Barrio el Valle</option>
                                    <option vlaue="Barrio el Vivero">Barrio el Vivero</option>
                                    <option vlaue="Barrio Francisco de Miranda">Barrio Francisco de Miranda</option>
                                    <option vlaue="Barrio Fundación Mendoza">Barrio Fundación Mendoza</option>
                                    <option vlaue="Barrio Gallo Verde">Barrio Gallo Verde</option>
                                    <option vlaue="Barrio Jagüey Cují">Barrio Jagüey Cují</option>
                                    <option vlaue="Barrio José Antonio Páez">Barrio José Antonio Páez</option>
                                    <option vlaue="Barrio José Gregorio Hernández">Barrio José Gregorio Hernández</option>
                                    <option vlaue="Barrio José Hernández">Barrio José Hernández</option>
                                    <option vlaue="Barrio la Bandera">Barrio la Bandera</option>
                                    <option vlaue="Barrio la Chinita">Barrio la Chinita</option>
                                    <option vlaue="Barrio la Ensenada">Barrio la Ensenada</option>
                                    <option vlaue="Barrio la Limpia">Barrio la Limpia</option>
                                    <option vlaue="Barrio la Lucha">Barrio la Lucha</option>
                                    <option vlaue="Barrio la Manzana de Oro">Barrio la Manzana de Oro</option>
                                    <option vlaue="Barrio la Polar">Barrio la Polar</option>
                                    <option vlaue="Barrio la Pomona">Barrio la Pomona</option>
                                    <option vlaue="Barrio la Rinconada">Barrio la Rinconada</option>
                                    <option vlaue="Barrio la Salina">Barrio la Salina</option>
                                    <option vlaue="Barrio la Unidad">Barrio la Unidad</option>
                                    <option vlaue="Barrio la Victoria">Barrio la Victoria</option>
                                    <option vlaue="Barrio las Cabrias">Barrio las Cabrias</option>
                                    <option vlaue="Barrio las Marías">Barrio las Marías</option>
                                    <option vlaue="Barrio las Tarabas">Barrio las Tarabas</option>
                                    <option vlaue="Barrio las Tres Marías">Barrio las Tres Marías</option>
                                    <option vlaue="Barrio Leonardo Ruiz Pineda">Barrio Leonardo Ruiz Pineda</option>
                                    <option vlaue="Barrio Libertad">Barrio Libertad</option>
                                    <option vlaue="Barrio Libertador">Barrio Libertador</option>
                                    <option vlaue="Barrio los Andes">Barrio los Andes</option>
                                    <option vlaue="Barrio los Claveles">Barrio los Claveles</option>
                                    <option vlaue="Barrio los Cortijos">Barrio los Cortijos</option>
                                    <option vlaue="Barrio los Cujicitos">Barrio los Cujicitos</option>
                                    <option vlaue="Barrio los Estanques">Barrio los Estanques</option>
                                    <option vlaue="Barrio los Manglares">Barrio los Manglares</option>
                                    <option vlaue="Barrio los Olivos">Barrio los Olivos</option>
                                    <option vlaue="Barrio los Pinos">Barrio los Pinos</option>
                                    <option vlaue="Barrio los Planazos">Barrio los Planazos</option>
                                    <option vlaue="Barrio los Robles">Barrio los Robles</option>
                                    <option vlaue="Barrio los Sufridos">Barrio los Sufridos</option>
                                    <option vlaue="Barrio Marite">Barrio Marite</option>
                                    <option vlaue="Barrio Misión">Barrio Misión</option>
                                    <option vlaue="Barrio Monte Claro">Barrio Monte Claro</option>
                                    <option vlaue="Barrio Nueva Independencia">Barrio Nueva Independencia</option>
                                    <option vlaue="Barrio Nueva Vía">Barrio Nueva Vía</option>
                                    <option vlaue="Barrio Nuevo">Barrio Nuevo</option>
                                    <option vlaue="Barrio Nuevo Mundo">Barrio Nuevo Mundo</option>
                                    <option vlaue="Barrio Obrero">Barrio Obrero</option>
                                    <option vlaue="Barrio Panamericano">Barrio Panamericano</option>
                                    <option vlaue="Barrio Paraíso">Barrio Paraíso</option>
                                    <option vlaue="Barrio Pueblo Aparte">Barrio Pueblo Aparte</option>
                                    <option vlaue="Barrio Pueblo Nuevo">Barrio Pueblo Nuevo</option>
                                    <option vlaue="Barrio Puerto Cabello">Barrio Puerto Cabello</option>
                                    <option vlaue="Barrio Puerto Rico">Barrio Puerto Rico</option>
                                    <option vlaue="Barrio Puntica de Piedra">Barrio Puntica de Piedra</option>
                                    <option vlaue="Barrio Ranchería">Barrio Ranchería</option>
                                    <option vlaue="Barrio Raúl Leoni">Barrio Raúl Leoni</option>
                                    <option vlaue="Barrio Ricardo Aguirre">Barrio Ricardo Aguirre</option>
                                    <option vlaue="Barrio Robinson Ferreira">Barrio Robinson Ferreira</option>
                                    <option vlaue="Barrio Rómulo Betancourt">Barrio Rómulo Betancourt</option>
                                    <option vlaue="Barrio Sabaneta">Barrio Sabaneta</option>
                                    <option vlaue="Barrio San Agustín">Barrio San Agustín</option>
                                    <option vlaue="Barrio San Francisco">Barrio San Francisco</option>
                                    <option vlaue="Barrio San Javier">Barrio San Javier</option>
                                    <option vlaue="Barrio San José">Barrio San José</option>
                                    <option vlaue="Barrio San Luis">Barrio San Luis</option>
                                    <option vlaue="Barrio San Miguel">Barrio San Miguel</option>
                                    <option vlaue="Barrio San Pedro">Barrio San Pedro</option>
                                    <option vlaue="Barrio San Rafael">Barrio San Rafael</option>
                                    <option vlaue="Barrio Santa Rosa de Agua">Barrio Santa Rosa de Agua</option>
                                    <option vlaue="Barrio Santa Rosa de Tierra">Barrio Santa Rosa de Tierra</option>
                                    <option vlaue="Barrio Santo Domingo">Barrio Santo Domingo</option>
                                    <option vlaue="Barrio Sierra Maestra">Barrio Sierra Maestra</option>
                                    <option vlaue="Barrio Simón Bolívar">Barrio Simón Bolívar</option>
                                    <option vlaue="Barrio Sur América">Barrio Sur América</option>
                                    <option vlaue="Barrio Tamanaco">Barrio Tamanaco</option>
                                    <option vlaue="Barrio Teotiste de Gallegos">Barrio Teotiste de Gallegos</option>
                                    <option vlaue="Barrio Terepaima">Barrio Terepaima</option>
                                    <option vlaue="Barrio Tierra Negra">Barrio Tierra Negra</option>
                                    <option vlaue="Barrio Udón Pérez">Barrio Udón Pérez</option>
                                    <option vlaue="Barrio Unión">Barrio Unión</option>
                                    <option vlaue="Barrio Valle Frío">Barrio Valle Frío</option>
                                    <option vlaue="Barrio Venezuela">Barrio Venezuela</option>
                                    <option vlaue="Barrio Zulia">Barrio Zulia</option>
                                    <option vlaue="Bobures">Bobures</option>
                                    <option vlaue="Boscán">Boscán</option>
                                    <option vlaue="Cabimas">Cabimas</option>
                                    <option vlaue="Caja Seca">Caja Seca</option>
                                    <option vlaue="Calle Larga">Calle Larga</option>
                                    <option vlaue="Campo Mara">Campo Mara</option>
                                    <option vlaue="Campos Petroleros">Campos Petroleros</option>
                                    <option vlaue="Carrasquero">Carrasquero</option>
                                    <option vlaue="Carretal">Carretal</option>
                                    <option vlaue="Cerro de los Cachos">Cerro de los Cachos</option>
                                    <option vlaue="Ceuta">Ceuta</option>
                                    <option vlaue="Chiquinquirá">Chiquinquirá</option>
                                    <option vlaue="Ciudad Ojeda">Ciudad Ojeda</option>
                                    <option vlaue="Cojoro">Cojoro</option>
                                    <option vlaue="Cojúa">Cojúa</option>
                                    <option vlaue="Concepción">Concepción</option>
                                    <option vlaue="Conjunto Residencial Gallo Verde">Conjunto Residencial Gallo Verde</option>
                                    <option vlaue="El Batey">El Batey</option>
                                    <option vlaue="El Carmelo">El Carmelo</option>
                                    <option vlaue="El Cinco">El Cinco</option>
                                    <option vlaue="El Consejo de Siruma">El Consejo de Siruma</option>
                                    <option vlaue="El Guanábano">El Guanábano</option>
                                    <option vlaue="El Laberinto">El Laberinto</option>
                                    <option vlaue="El LLano">El LLano</option>
                                    <option vlaue="El Mene">El Mene</option>
                                    <option vlaue="El Moralito">El Moralito</option>
                                    <option vlaue="El Portón">El Portón</option>
                                    <option vlaue="El Siete">El Siete</option>
                                    <option vlaue="El Tablazo">El Tablazo</option>
                                    <option vlaue="El Venado">El Venado</option>
                                    <option vlaue="Guarero">Guarero</option>
                                    <option vlaue="I.N.O.S.">I.N.O.S.</option>
                                    <option vlaue="Isla de San Carlos">Isla de San Carlos</option>
                                    <option vlaue="Isla de Toas">Isla de Toas</option>
                                    <option vlaue="La Cañada">La Cañada</option>
                                    <option vlaue="La Paz">La Paz</option>
                                    <option vlaue="La Rosita">La Rosita</option>
                                    <option vlaue="Laberinto">Laberinto</option>
                                    <option vlaue="Lagunillas">Lagunillas</option>
                                    <option vlaue="Las Cruces">Las Cruces</option>
                                    <option vlaue="Las Delicias">Las Delicias</option>
                                    <option vlaue="Las Morochas">Las Morochas</option>
                                    <option vlaue="Las Piedras">Las Piedras</option>
                                    <option vlaue="Los Haticos">Los Haticos</option>
                                    <option vlaue="Los Puertos de Altagracia">Los Puertos de Altagracia</option>
                                    <option vlaue="Los Teques">Los Teques</option>
                                    <option vlaue="M.A.C.">M.A.C.</option>
                                    <option vlaue="Machango">Machango</option>
                                    <option vlaue="Machiques">Machiques</option>
                                    <option vlaue="Macoa">Macoa</option>
                                    <option vlaue="Mene Grande">Mene Grande</option>
                                    <option vlaue="Monte Claro">Monte Claro</option>
                                    <option vlaue="Palmarejo">Palmarejo</option>
                                    <option vlaue="Paraguaipoa">Paraguaipoa</option>
                                    <option vlaue="Parcelamiento los Altos">Parcelamiento los Altos</option>
                                    <option vlaue="Parcelamiento Ricaurte">Parcelamiento Ricaurte</option>
                                    <option vlaue="Pica Pica">Pica Pica</option>
                                    <option vlaue="Plaza de Toro">Plaza de Toro</option>
                                    <option vlaue="Pueblo de San Francisco">Pueblo de San Francisco</option>
                                    <option vlaue="Pueblo Nuevo">Pueblo Nuevo</option>
                                    <option vlaue="Puerto Escondido">Puerto Escondido</option>
                                    <option vlaue="Punta Gorda">Punta Gorda</option>
                                    <option vlaue="Quisiro">Quisiro</option>
                                    <option vlaue="Residencia San Luis">Residencia San Luis</option>
                                    <option vlaue="San Ignacio">San Ignacio</option>
                                    <option vlaue="San José">San José</option>
                                    <option vlaue="San Jose de Perija">San Jose de Perija</option>
                                    <option vlaue="San Lorenzo">San Lorenzo</option>
                                    <option vlaue="San Rafael de Machiques">San Rafael de Machiques</option>
                                    <option vlaue="San Rafael de Mara">San Rafael de Mara</option>
                                    <option vlaue="San Timoteo">San Timoteo</option>
                                    <option vlaue="Santa Cruz de Mara">Santa Cruz de Mara</option>
                                    <option vlaue="Santa Lucía">Santa Lucía</option>
                                    <option vlaue="Santa Rita">Santa Rita</option>
                                    <option vlaue="Sinamaica">Sinamaica</option>
                                    <option vlaue="Tía Juana">Tía Juana</option>
                                    <option vlaue="Universidad del Zulia">Universidad del Zulia</option>
                                    <option vlaue="Urbanización 3ª Etapa">Urbanización 3ª Etapa</option>
                                    <option vlaue="Urbanización Adán Sthormes">Urbanización Adán Sthormes</option>
                                    <option vlaue="Urbanización Alberto Carnavalli">Urbanización Alberto Carnavalli</option>
                                    <option vlaue="Urbanización Alhambra">Urbanización Alhambra</option>
                                    <option vlaue="Urbanización Altos de la Vega">Urbanización Altos de la Vega</option>
                                    <option vlaue="Urbanización Altos del Pilar">Urbanización Altos del Pilar</option>
                                    <option vlaue="Urbanización Amalias">Urbanización Amalias</option>
                                    <option vlaue="Urbanización Bella Vista">Urbanización Bella Vista</option>
                                    <option vlaue="Urbanización Bello Monte">Urbanización Bello Monte</option>
                                    <option vlaue="Urbanización Bloques de San Francisco">Urbanización Bloques de San Francisco</option>
                                    <option vlaue="Urbanización Buena Vista">Urbanización Buena Vista</option>
                                    <option vlaue="Urbanización Canta Claro">Urbanización Canta Claro</option>
                                    <option vlaue="Urbanización Chevron">Urbanización Chevron</option>
                                    <option vlaue="Urbanización Club Hípico">Urbanización Club Hípico</option>
                                    <option vlaue="Urbanización Corazón de Jesús">Urbanización Corazón de Jesús</option>
                                    <option vlaue="Urbanización Coromoto 1ª y 2ª Etapa">Urbanización Coromoto 1ª y 2ª Etapa</option>
                                    <option vlaue="Urbanización Creoles">Urbanización Creoles</option>
                                    <option vlaue="Urbanización Cuatricentenario 1ª y 2ª Etapa">Urbanización Cuatricentenario 1ª y 2ª Etapa</option>
                                    <option vlaue="Urbanización Cumbres de Maracaibo">Urbanización Cumbres de Maracaibo</option>
                                    <option vlaue="Urbanización el Callao">Urbanización el Callao</option>
                                    <option vlaue="Urbanización el Estanque">Urbanización el Estanque</option>
                                    <option vlaue="Urbanización el Guayabal">Urbanización el Guayabal</option>
                                    <option vlaue="Urbanización el Parque">Urbanización el Parque</option>
                                    <option vlaue="Urbanización el Pilar">Urbanización el Pilar</option>
                                    <option vlaue="Urbanización el Pilarcito">Urbanización el Pilarcito</option>
                                    <option vlaue="Urbanización el Portal">Urbanización el Portal</option>
                                    <option vlaue="Urbanización el Prado">Urbanización el Prado</option>
                                    <option vlaue="Urbanización el Rosal Sur">Urbanización el Rosal Sur</option>
                                    <option vlaue="Urbanización el Trébol">Urbanización el Trébol</option>
                                    <option vlaue="Urbanización el Varillal">Urbanización el Varillal</option>
                                    <option vlaue="Urbanización Enerbal">Urbanización Enerbal</option>
                                    <option vlaue="Urbanización FAC">Urbanización FAC</option>
                                    <option vlaue="Urbanización Fundación Mendoza">Urbanización Fundación Mendoza</option>
                                    <option vlaue="Urbanización Irama">Urbanización Irama</option>
                                    <option vlaue="Urbanización Islas Doradas">Urbanización Islas Doradas</option>
                                    <option vlaue="Urbanización Juana de Avila">Urbanización Juana de Avila</option>
                                    <option vlaue="Urbanización la California">Urbanización la California</option>
                                    <option vlaue="Urbanización la Curva">Urbanización la Curva</option>
                                    <option vlaue="Urbanización la Estrella">Urbanización la Estrella</option>
                                    <option vlaue="Urbanización la Floresta">Urbanización la Floresta</option>
                                    <option vlaue="Urbanización la Lago">Urbanización la Lago</option>
                                    <option vlaue="Urbanización la Pastora">Urbanización la Pastora</option>
                                    <option vlaue="Urbanización la Paz 1ª y 2ª Etapa">Urbanización la Paz 1ª y 2ª Etapa</option>
                                    <option vlaue="Urbanización la Rosaleda">Urbanización la Rosaleda</option>
                                    <option vlaue="Urbanización la Trinidad">Urbanización la Trinidad</option>
                                    <option vlaue="Urbanización la Victoria 1ª y 2ª Etapa">Urbanización la Victoria 1ª y 2ª Etapa</option>
                                    <option vlaue="Urbanización Lagomar">Urbanización Lagomar</option>
                                    <option vlaue="Urbanización Lajas Blancas">Urbanización Lajas Blancas</option>
                                    <option vlaue="Urbanización las Aceitunas">Urbanización las Aceitunas</option>
                                    <option vlaue="Urbanización las Carmelias">Urbanización las Carmelias</option>
                                    <option vlaue="Urbanización las Lomas">Urbanización las Lomas</option>
                                    <option vlaue="Urbanización las Mercedes">Urbanización las Mercedes</option>
                                    <option vlaue="Urbanización Lomas de Sabaneta">Urbanización Lomas de Sabaneta</option>
                                    <option vlaue="Urbanización los Altos">Urbanización los Altos</option>
                                    <option vlaue="Urbanización los Olivos">Urbanización los Olivos</option>
                                    <option vlaue="Urbanización Maracaibo">Urbanización Maracaibo</option>
                                    <option vlaue="Urbanización Miramar">Urbanización Miramar</option>
                                    <option vlaue="Urbanización Monte Bello">Urbanización Monte Bello</option>
                                    <option vlaue="Urbanización Monte Claro">Urbanización Monte Claro</option>
                                    <option vlaue="Urbanización Naranjal">Urbanización Naranjal</option>
                                    <option vlaue="Urbanización Obrero">Urbanización Obrero</option>
                                    <option vlaue="Urbanización Perijá">Urbanización Perijá</option>
                                    <option vlaue="Urbanización Portuaria">Urbanización Portuaria</option>
                                    <option vlaue="Urbanización Raúl Leoni">Urbanización Raúl Leoni</option>
                                    <option vlaue="Urbanización Ricaurte">Urbanización Ricaurte</option>
                                    <option vlaue="Urbanización Ritchamond">Urbanización Ritchamond</option>
                                    <option vlaue="Urbanización Rómulo Gallego">Urbanización Rómulo Gallego</option>
                                    <option vlaue="Urbanización Rotaria 1ª 2ª 3ª 4ª y 5ª Etapa">Urbanización Rotaria 1ª 2ª 3ª 4ª y 5ª Etapa</option>
                                    <option vlaue="Urbanización Sabatorio">Urbanización Sabatorio</option>
                                    <option vlaue="Urbanización San Felipe 1ª y 2ª Etapa">Urbanización San Felipe 1ª y 2ª Etapa</option>
                                    <option vlaue="Urbanización San Francisco de Miranda 3ª Etapa">Urbanización San Francisco de Miranda 3ª Etapa</option>
                                    <option vlaue="Urbanización San Jacinto">Urbanización San Jacinto</option>
                                    <option vlaue="Urbanización San Miguel">Urbanización San Miguel</option>
                                    <option vlaue="Urbanización San Rafael">Urbanización San Rafael</option>
                                    <option vlaue="Urbanización Santa Ana">Urbanización Santa Ana</option>
                                    <option vlaue="Urbanización Santa Eduvigis">Urbanización Santa Eduvigis</option>
                                    <option vlaue="Urbanización Santa María">Urbanización Santa María</option>
                                    <option vlaue="Urbanización Sucre">Urbanización Sucre</option>
                                    <option vlaue="Urbanización Urdaneta">Urbanización Urdaneta</option>
                                    <option vlaue="Urbanización Villa Nueva">Urbanización Villa Nueva</option>
                                    <option vlaue="Urbanización Virginia">Urbanización Virginia</option>
                                    <option vlaue="Urbanización Vista del Lago">Urbanización Vista del Lago</option>
                                    <option vlaue="Urbanización Zapara">Urbanización Zapara</option>
                                    <option vlaue="Villa del Rosario">Villa del Rosario</option>
                                    <option vlaue="Zona Central de la Ciudad">Zona Central de la Ciudad</option>
                                    <option vlaue="Zona Industrial">Zona Industrial</option>




                                </select>
                                <input type="hidden" name="zona" value="Centro-occidente">
                            </div>
                            <div class="form-group condicional" data-condition="(estado == 'Distrito Federal')">
                                <p class="big-text pix-black">
                                    <span class="">Selecciona la ubicación</span>
                                </p>
                                <select  name="ciudad" class="form-control" >

                                    <option vlaue="Caracas Sur">Caracas Sur</option>
                                    <option vlaue="Caracas Este">Caracas Este</option>
                                    <option vlaue="Caracas Oeste">Caracas Oeste</option>




                                </select>
                                <input type="hidden" name="zona" value="Centro">
                            </div>

                            </div>
                            <button id="#botonEnviar" type="submit" class="btn  btn-xl pix-white  "><span class="pix_edit_text"><strong>Registrate</strong></span></button>
                        </form>

                        <div class="text-center" id="respuestaCorreo"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pix_section-serv pix-padding">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content" data-aos="fade-up">
                        <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
                            <span class="pix_edit_text pix-black"><strong>Ponemos tu negocio en movimiento<br>
                            con todas estas ventajas</strong></span>
                        </h2>
                        <hr class="text-center" style="border:2px solid;color:#ed1c24;width:20%;">

                    </div>
                </div>

                <div class="col-md-2 col-xs-12"></div>
                <div class="col-md-8 col-xs-12">
                    <div class="col-md-4 col-xs-12 col-sm-6">
                        <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv " data-aos="zoom-in-up">
                            <div class="pix-margin-bottom-20">
                                <img class="servimg" src="images/serv1.jpg" alt="">
                            </div>
                                <!--<h5 class="pix-black-gray-dark secondary-font">
                                <span class="pix_edit_text">Variedad de<br><strong>productos</strong></span>
                                </h5>-->
                                <p class="pix-black-gray-light  pix-padding-h-10">
                                    <span class="pix_edit_text pix-black mid-text ">Lubricantes de motores a gasolina, motores de motos, motores diesel, equipos y motores industriales, motores marinos y productos de mantenimiento. </span>
                                </p>

                        </div>
                    </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv " data-aos="zoom-in-up">
                        <div class="pix-margin-bottom-20">
                            <img class="servimg" src="images/serv2.jpg" alt="">
                        </div>
                        <!--<h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text">Paradas y<br><strong>Eventos</strong></span>
                        </h5>-->
                        <p class="pix-black-gray-light  pix-padding-h-10">
                            <span class="pix_edit_text pix-black mid-text ">Organizamos eventos, paradas y otras acciones promocionales para apoyar y potenciar tu productividad.</span>
                        </p>

                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6">
                    <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv " data-aos="zoom-in-up" >
                        <div class="pix-margin-bottom-20">
                            <img class="servimg" src="images/serv3.jpg" alt="">
                        </div>
                        <!--<h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text">Apoyo<br><strong>publicitario</strong></span>
                        </h5>-->
                        <p class="pix-black-gray-light  pix-padding-h-10">
                            <span class="pix_edit_text pix-black mid-text ">Identificamos tu negocio con fachadas, afiches, banderines y avisos exteriores.<br><br>
                            Además si tienes un centro de lubricación, te brindamos uniformes para el personal técnico</span>
                        </p>

                    </div>
                </div>
                <!-- no desk -->
                <div class="col-md-4 col-xs-12 col-sm-6 no desk">
                        <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv" data-aos="zoom-in-up">
                            <div class="pix-margin-bottom-20">
                                <img class="servimg" src="images/serv4.jpg" alt="">
                            </div>
                                <!--<h5 class="pix-black-gray-dark secondary-font">
                                <span class="pix_edit_text">Variedad de<br><strong>productos</strong></span>
                                </h5>-->
                                <p class="pix-black-gray-light  pix-padding-h-10">
                                    <span class="pix_edit_text pix-black mid-text ">Nos regimos por estándares de calidad tanto en los productos como en los procesos, cumpliendo así con los requisitos de las normas Covenin, normas técnicas Fondonorma, norma ISO 9001-2015, entre otras; adquiriendo las certificaciones nacionales e internacionales correspondientes</span>
                                </p>

                        </div>
                    </div>
                <div class="col-md-4 col-xs-12 col-sm-6 no desk">
                    <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv" data-aos="zoom-in-up">
                        <div class="pix-margin-bottom-20">
                            <img class="servimg" src="images/serv5.jpg" alt="">
                        </div>
                        <!--<h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text">Paradas y<br><strong>Eventos</strong></span>
                        </h5>-->
                        <p class="pix-black-gray-light  pix-padding-h-10">
                            <span class="pix_edit_text pix-black mid-text ">Productos de alta demanda en aumento año tras año sin importar la circunstancia</span>
                        </p>

                    </div>
                </div>
                <div class="col-md-4 col-xs-12 col-sm-6 no desk">
                    <div class="pix-content pix-padding-v-20  pix-padding-h-10 pix-serv " data-aos="zoom-in-up">
                        <div class="pix-margin-bottom-20">
                            <img class="servimg" src="images/serv6.jpg" alt="">
                        </div>
                        <!--<h5 class="pix-black-gray-dark secondary-font">
                            <span class="pix_edit_text">Apoyo<br><strong>publicitario</strong></span>
                        </h5>-->
                        <p class="pix-black-gray-light  pix-padding-h-10">
                            <span class="pix_edit_text pix-black mid-text ">Distrubuidores exclusivos con rango de acción en todo el territorio nacional y atención personalizada de ventas enfocada en tu satisfacción.</span>
                        </p>

                    </div>
                </div>
                </div>
                <div class="col-md-2 col-xs-12"></div>

            </div>
        </div>
    </div>

    <div class="pix_section-foot pix-padding-v-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="pix-content pix-padding-bottom-30">
                        <h2 class="pix-black-gray-dark text-center pix-no-margin-top secondary-font">
                            <span class="pix_edit_text pix-white pix-bold">¿QUIERES SABER MÁS?</span>
                        </h2>

                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-xs-12" data-aos="zoom-in-right">
                    <h5 class="pix-black-gray-dark pix-white"><span class="pix_edit_text big-text-30">SÍGUENOS EN</span></h5>
                    <hr class="text-left" style="border: 2px solid;color: #ed1c24;width: 50%;position: inherit;margin:0px;">
                    <div class="pix-padding-v-10">


                        <p class="pix-black-gray-light pix-white big-text-20">
                            @skylubricantes.ve
                        </p>

                        <div class="pix-content  text-left">
                        <a href="https://www.instagram.com/skylubricantes.ve/?hl=es-la" class="small-social" target="_blank">
                            <img class="insta" src="images/insta.jpg" alt="">
                        </a>

                        <a href="https://www.facebook.com/Sky-Lubricantes-106438161319010" class="small-social" target="_blank">
                            <img class="face" src="images/face.jpg" alt="">
                        </a>
                        <img class="barra1" src="images/barra.jpg" alt="">
                    </div>
                    </div>

                </div>
                <div class="col-md-2 col-xs-12"></div>
                <div class="col-md-6 col-xs-12" data-aos="zoom-in-up">
                    <h5 class="pix-black-gray-dark"><span class="pix_edit_text pix-white big-text-30">VISITA NUESTRA GALERÍA<br>DE PRODUCTOS</span></h5>
                    <hr class="text-left" style="border:2px solid;color:#ed1c24;width:100%;margin:0px;">
                    <div class="pix-padding-v-10">

                    </div>

                    <div class="pix-padding-bottom-20">
                        <a href="https://skylubricantes.com/" ><span class="pix_edit_text pix-white big-text-20"><strong>skylubricantes.com</strong></span></a>
                    </div>
                    <img class="puntos" src="images/puntos.jpg" alt="">
                </div>


            </div>
        </div>
    </div>

@endsection
