<?php
    /**
     * Muestra un desplegable con una lista de continentes, una vez elegido uno de ellos se muestra una segunda lista con sus correspondientes países,
     * elegido el país mostrará su capital y su bandera.
     * 
     * @author Fco Javier González Sabariego
     * @since 12/10/2019
     */
    
    $continentes=array(
        "Europa"=>array(
            "Albania"=>"Tirana",
            "Alemania"=>"Berlín",
            "Andorra"=>"Andorra la Vieja",
            "Austria"=>"Viena",
            "Bélgica"=>"Bruselas",
            "Bielorrusia"=>"Minsk",
            "Bosnia y Herzegovina"=>"Sarajevo",
            "Bulgaria"=>"Sofía",
            "Chipre"=>"Nicosia",
            "Ciudad del Vaticano"=>"Ciudad del Vaticano",
            "Croacia"=>"Zagreb",
            "Dinamarca"=>"Copenhague",
            "Eslovaquia"=>"Bratislava",
            "Eslovenia"=>"Liubliana",
            "España"=>"Madrid",
            "Estonia"=>"Tallin",
            "Finlandia"=>"Helsinki",
            "Francia"=>"París",
            "Grecia"=>"Atenas",
            "Hungría"=>"Budapest",
            "Irlanda"=>"Dublin",
            "Islandia"=>"Reikiavik",
            "Italia"=>"Roma",
            "Letonia"=>"Riga",
            "Liechtenstein"=>"Vaduz",
            "Lituania"=>"Vilna",
            "Luxemburgo"=>"Luxemburgo",
            "Macedonia"=>"Skopie",
            "Malta"=>"La Valeta",
            "Moldavia"=>"Chisinau",
            "Mónaco"=>"Mónaco",
            "Montenegro"=>"Podgorica",
            "Noruega"=>"Oslo",
            "Países Bajos"=>"Amsterdam",
            "Polonia"=>"Varsovia",
            "Portugal"=>"Lisboa",
            "Reino Unido"=>"Londres",
            "República Checa"=>"Praga",
            "Rumania"=>"Bucarest",
            "Rusia"=>"Moscú",
            "San Marino"=>"San Marino",
            "Serbia"=>"Belgrado",
            "Suecia"=>"Sueco",
            "Suiza"=>"Berna",
            /*"Turquía"=>"Ankara",*/
            "Ucrania"=>"Kiev" 
        ),
        "América"=>array(
            "Antigua y Barbuda"=>"Saint John’s",
            "Argentina"=>"Buenos Aires",
            "Bahamas"=>"Nasáu",
            "Barbados"=>"Bridgetown",
            "Belice"=>"Belmopán",
            "Bolivia"=>"Sucre",
            "Brasil"=>"Brasilia",
            "Canadá"=>"Ottawa",
            "Chile"=>"Santiago de Chile",
            "Colombia"=>"Bogotá",
            "Costa Rica"=>"San José",
            "Cuba"=>"La Habana",
            "Dominica"=>"Roseau",
            "Ecuador"=>"Quito",
            "El Salvador"=>"San Salvador",
            "Estados Unidos"=>"Washington D. C.",
            "Granada"=>"Saint George",
            "Guatemala"=>"Ciudad de Guatemala",
            "Guyana"=>"Georgetown",
            "Haití"=>"Puerto Príncipe",
            "Honduras"=>"Tegucigalpa",
            "Jamaica"=>"Kingston",
            "México"=>"Ciudad de México",
            "Nicaragua"=>"Managua",
            "Panamá"=>"Panamá",
            "Paraguay"=>"Asunción",
            "Perú"=>"Lima",
            "República Dominicana"=>"Santo Domingo",
            "San Cristóbal y Nieves"=>"Basseterre",
            "San Vicente y las Granadinas"=>"Kingstown",
            "Santa Lucía"=>"Castries",
            "Surinam"=>"Paramaribo",
            "Trinidad y Tobago"=>"Puerto España",
            "Uruguay"=>"Montevideo",
            "Venezuela"=>"Caracas"
            ),
        "África"=>array(
            "Angola"=>"Luanda",
            "Argelia"=>"Argel",
            "Benín"=>"Porto Nuevo y Cotonú",
            "Botsuana"=>"Gaborone",
            "Burkina Faso"=>"Uagadugú",
            "Burundi"=>"Gitega",
            "Cabo Verde"=>"Praia",
            "Camerún"=>"Yaundé",
            "Chad"=>"Yamena",
            "Comoras"=>"Moroni",
            "Costa de Marfil"=>"Yamusukro",
            "Egipto"=>"El Cairo",
            "Eritrea"=>"Asmara",
            "Etiopía"=>"Adís Abeba",
            "Gabón"=>"Libreville",
            "Gambia"=>"Banjul",
            "Ghana"=>"Acra",
            "Guinea"=>"Conakri",
            "Guinea-Bisáu"=>"Bisáu",
            "Guinea Ecuatorial"=>"Malabo",
            "Kenia"=>"Nairobi",
            "Lesoto"=>"Maseru",
            "Liberia"=>"Monrovia",
            "Libia"=>"Trípoli",
            "Madagascar"=>"Antananarivo",
            "Malaui"=>"Lilongüe",
            "Malí"=>"Bamako",
            "Marruecos"=>"Rabat",
            "Mauricio"=>"Port Louis",
            "Mauritania"=>"Nuakchot",
            "Mozambique"=>"Maputo",
            "Namibia"=>"Windhoek",
            "Níger"=>"Niamey",
            "Nigeria"=>"Abuya",
            "República Centroafricana"=>"Bangui",
            "República del Congo"=>"Brazaville",
            "República Democrática del Congo"=>"Kinsasa",
            "Ruanda"=>"Kigali",
            "Santo Tomé y Príncipe"=>"Santo Tomé",
            "Senegal"=>"Dakar",
            "Seychelles"=>"Victoria",
            "Sierra Leona"=>"Freetown",
            "Somalia"=>"Mogadiscio",
            "Suazilandia"=>"Babane y Lobamba",
            "Sudáfrica"=>"Bloemfontein, Ciudad del Cabo y Pretoria",
            "Sudán"=>"Jartum",
            "Sudán del Sur"=>"Yuba",
            "Tanzania"=>"Dodoma",
            "Togo"=>"Lomé",
            "Túnez"=>"Túnez",
            "Uganda"=>"Kampala",
            "Yibuti"=>"Yibuti",
            "Zambia"=>"Lusaka",
            "Zimbabue"=>"Harare"
        ),
        "Asia"=>array(
            "Afganistán"=>"Kabul",
            "Arabia Saudita"=>"Riad",
            "Armenia"=>"Ereván",
            "Azerbaiyán"=>"Bakú",
            "Bangladés"=>"Daca",
            "Baréin"=>"Manama",
            "Birmania / Myanmar"=>"Naipyidó",
            "Brunéi"=>"Bandar Seri Begawan",
            "Bután"=>"Timbu",
            "Camboya"=>"Nom Pen",
            "Catar"=>"Doha",
            "China"=>"Pekín",
            "Chipre"=>"Nicosia",
            "Corea del Norte"=>"Pionyang",
            "Corea del Sur"=>"Seúl",
            "Emiratos Árabes Unidos"=>"Abu Dabi",
            "Filipinas"=>"Manila",
            "Georgia"=>"Tiflis",
            "India"=>"Nueva Delhi",
            "Indonesia"=>"Yakarta",
            "Irak"=>"Bagdad",
            "Irán"=>"Teherán",
            "Israel"=>"Jerusalén",
            "Japón"=>"Tokio",
            "Jordania"=>"Amán",
            "Kazajistán"=>"Astaná",
            "Kirguistán"=>"Biskek",
            "Kuwait"=>"Kuwait",
            "Laos"=>"Vientián",
            "Líbano"=>"Beirut",
            "Malasia"=>"Kuala Lumpur",
            "Maldivas"=>"Malé",
            "Mongolia"=>"Ulán Bator",
            "Nepal"=>"Katmandú",
            "Omán"=>"Mascate",
            "Pakistán"=>"Islamabad",
            "Singapur"=>"Singapur",
            "Siria"=>"Damasco",
            "Sri Lanka"=>"Sri Jayawardenapura Kotte",
            "Tayikistán"=>"Dusambé",
            "Tailandia"=>"Bangkok",
            "Timor Oriental"=>"Dili",
            "Turkmenistán"=>"Asjabad",
            "Turquía"=>"Ankara",
            "Uzbekistán"=>"Taskent",
            "Vietnam"=>"Hanói",
            "Yemen"=>"Saná"
        ),
        "Oceanía"=>array(
            "Australia"=>"Camberra",
            "Fiyi"=>"Suva",
            "Islas Marshall"=>"Majuro",
            "Islas Salomón"=>"Honiara",
            "Kiribati"=>"Tarawa",
            "Micronesia"=>"Palikir",
            "Nauru"=>"Yaren",
            "Nueva Zelanda"=>"Wellington",
            "Palaos"=>"Ngerulmud",
            "Papúa Nueva Guinea"=>"Port Moresby",
            "Samoa"=>"Apia",
            "Tonga"=>"Nukualofa",
            "Tuvalu"=>"Funafuti",
            "Vanuatu"=>"Port Vila"
        )
    );
    $contSeleccionado="";
    $paisSeleccionado="";
?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Países por continentes</title>
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Países por continentes</b></p>
            <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>
                <?php
                    if(isset($_POST['enviar'])){
                        if(!empty($_POST['continentes']))
                            if($contSeleccionado!=$_POST['continentes'])
                                $paisSeleccionado=1;
                            $contSeleccionado=$_POST['continentes'];
                        if(!empty($_POST['paises']))
                            $paisSeleccionado=$_POST['paises'];
                    }
                ?>
                
                    <?php
                        /**
                         * Sección encargada de la impresión de las opciones del select del formulario.
                         */
                        echo "<select name='continentes'>";
                        $i=1;
                        foreach ($continentes as $continente => $valor) {
                            echo (array_keys($continentes)[$i-1]==$contSeleccionado) ? "<option value=".$continente." selected>$continente</option>" 
                                : "<option value=".$continente.">$continente</option>";
                            $i++;
                        }
                        echo "</select>";
                        if($contSeleccionado!="") {
                            echo "<select name='paises'>";
                            $k=1;
                            foreach ($continentes[$contSeleccionado] as $pais => $capital) {
                                echo ($k==$paisSeleccionado) ? "<option value=".$k." selected>$pais</option>" 
                                        : "<option value=".$k.">$pais</option>";
                                $k++;
                            }
                        }
                        echo "</select>";
                    ?>
                <input type="submit" name="enviar">
            </form>
            <?php
                /**
                 * Sección que comprueba si la información de entrada es del botón del formulario, 
                 * de ser así imprime los países del continente seleccionado
                 */
                if(isset($_POST['enviar'])) {
                    echo "<table border='1'>";
                    echo "<tr><td colspan='3' style='text-align:center'><b>Continente $contSeleccionado</b></td></tr>";
                    echo "<tr><td style='text-align:center'><b>Bandera</b></td><td style='text-align:center'><b>País</b></td><td style='text-align:center'><b>Capital</b></td></tr>";
                    $j=1;
                    foreach ($continentes[$contSeleccionado] as $pais =>$capital) {
                        if($j==$paisSeleccionado) {
                            echo "<tr><td>"."<image src="."images/banderas/".adaptaNombre($pais)."-bandera-200px.jpg"." alt="."Bandera de $pais"."></td><td  style='text-align:center'>$pais</td><td style='text-align:center'>".$capital."</td></tr>";
                        }
                        $j++;
                    }
                    echo "</table>";
                }
            ?>
        </main>
        <footer>
        <br><small>Redes sociales del autor:</small><br>
			<a href="https://twitter.com/Fco_Javier_Glez" target="_blank"><img src="images/twitter.png" alt="Enlace a cuenta de Twitter del autor" height="50"></a>
            <a href="https://github.com/FcoJavierGlez" target="_blank"><img src="images/github.png" alt="Enlace a cuenta de GitHub del autor" height="50"></a>
			<a href="https://www.linkedin.com/in/francisco-javier-gonz%C3%A1lez-sabariego-51052a175/" target="_blank"><img src="images/linkedin.png" alt="Enlace a cuenta de Linkedin del autor" height="50"></a>
        </footer>
    </body>
</html>




<?php
    /**
     * Esta funciona se encarga de eliminar los acentos o caracteres específicos para adatar el nombre de cada país
     * al nombre que tendrá luego el fichero con su bandera.
     */
    function adaptaNombre($a) {
        $eliminar=array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","/"," ");
        $sustituir=array("a","e","i","o","u","a","e","i","o","u","n","-","-");
        $a=strtolower($a);
        return $a=str_replace($eliminar, $sustituir, $a);
    }
?>