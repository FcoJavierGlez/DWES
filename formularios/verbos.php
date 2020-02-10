<?php
    /**
     * nivel de dificultad 1-3 (marca los inputs que hay que meter)
     * número de verbos (min 1- max total de verbos)
     * botón enviar
     * botón check (cuando todo está correcto)
     * 
     * dos campos ocultos donde se almacenará el nivel de dificultad y los verbos que ha pedido el usuario
     * array que almacene los verbos
     * array que almacene los indices (crear método para que no se repita el número)
     * 
     */

    $verbos = array( //Longitud 136 verbos
        array("elevarse","arise","arose","arisen"),
        array("despertar","awake","awoke","awoken"),
        array("soportar","bear","bore","born"),
        array("golpear","beat","beat","beaten"),
        array("convertirse","become","became","become"),
        array("empezar","begin","began","begun"),
        array("doblar","bend","bent","bent"),
        array("apostar","bet","bet","bet"),
        array("atar","bind","bound","bound"),
        array("morder","bite","bit","bitten"),
        array("soplar","blow","blew","blown"),
        array("quebrar","break","broke","broken"),
        array("traer","bring","brought","brought"),
        array("construir","build","built","built"),
        array("quemar","burn","burnt","burnt"),
        array("romper","burst","burst","burst"),
        array("comprar","buy","bought","bought"),
        array("coger","catch","caught","caught"),
        array("escoger","choose","chose","chosen"),
        array("aferrarse","cling","clung","clung"),
        array("venir","come","came","come"),
        array("costar","cost","cost","cost"),
        array("arrastrarse","creep","crept","crept"),
        array("cortar","cut","cut","cut"),
        array("tratar","deal","dealt","dealt"),
        array("cavar","dig","dug","dug"),
        array("hacer","do","did","done"),
        array("tirar","draw","drew","drawn"),
        array("beber","drink","drank","drunk"),
        array("conducir","drive","drove","driven"),
        array("caer","fall","fell","fallen"),
        array("alimentar","feed","fed","fed"),
        array("sentir","feel","felt","felt"),
        array("pelear","fight","fought","fought"),
        array("encontrar","find","found","found"),
        array("averiguar","findout","foundout","foundout"),
        array("escapar","flee","fled","fled"),
        array("volar","fly","flew","flown"),
        array("prohibir","forbid","forbade","forbidden"),
        array("prevenir","foresee","foresaw","foreseen"),
        array("olvidar","forget","forgot","forgotten"),
        array("perdonar","forgive","forgave","forgiven"),
        array("congelar","freeze","froze","frozen"),
        array("lograr","get","got","gotten"),
        array("dar","give","gave","given"),
        array("funcionar","go","went","gone"),
        array("moler","grind","ground","ground"),
        array("crecer","grow","grew","grown"),
        array("colgar","hang","hung","hung"),
        array("tener","have","had","had"),
        array("oír","hear","heard","heard"),
        array("ocultar","hide","hid","hidden"),
        array("pegar","hit","hit","hit"),
        array("sostener","hold","held","held"),
        array("herir","hurt","hurt","hurt"),
        array("mantener","keep","kept","kept"),
        array("conocer","know","knew","known"),
        array("poner","lay","laid","laid"),
        array("guiar","lead","led","led"),
        array("inclinar","lean","leant","leant"),
        array("aprender","learn","learnt","learnt"),
        array("partir","leave","left","left"),
        array("prestar","lend","lent","lent"),
        array("permitir","let","let","let"),
        array("tenderse","lie","lay","lain"),
        array("alumbrar","light","lit","lit"),
        array("perder","lose","lost","lost"),
        array("hacer","make","made","made"),
        array("significar","mean","meant","meant"),
        array("conocer","meet","met","met"),
        array("derretir","melt","melted","molten"),
        array("equivocarse","mistake","mistook","mistaken"),
        array("malentender","misunderstand","misunderstood","misunderstood"),
        array("vencer","overcome","overcame","overcome"),
        array("pagar","pay","paid","paid"),
        array("poner","put","put","put"),
        array("leer","read","read","read"),
        array("reconstruir","rebuild","rebuilt","rebuilt"),
        array("librarse","rid","rid","rid"),
        array("rodar","ride","rode","ridden"),
        array("llamar","ring","rang","rung"),
        array("ascender","rise","rose","risen"),
        array("correr","run","ran","run"),
        array("serrar","saw","sawed","sawn"),
        array("decir","say","said","said"),
        array("ver","see","saw","seen"),
        array("buscar","seek","sought","sought"),
        array("vender","sell","sold","sold"),
        array("enviar","send","sent","sent"),
        array("instalar","set","set","set"),
        array("sacudir","shake","shook","shaken"),
        array("derramar","shed","shed","shed"),
        array("brillar","shine","shone","shone"),
        array("disparar","shoot","shot","shot"),
        array("mostrar","show","showed","shown"),
        array("encoger","shrink","shrank","shrunk"),
        array("cerrar","shut","shut","shut"),
        array("cantar","sing","sang","sung"),
        array("hundir","sink","sank","sunk"),
        array("sentarse","sit","sat","sat"),
        array("dormir","sleep","slept","slept"),
        array("deslizar","slide","slid","slidden"),
        array("oler","smell","smelt","smelt"),
        array("hablar","speak","spoke","spoken"),
        array("acelerar","speed","sped","sped"),
        array("gastar","spend","spent","spent"),
        array("derramar","spill","spilt","spilt"),
        array("hacer girar","spin","spun","spun"),
        array("partir","split","split","split"),
        array("deteriorar","spoil","spoilt","spoilt"),
        array("extender","spread","spread","spread"),
        array("saltar","spring","sprang","sprung"),
        array("pararse","stand","stood","stood"),
        array("robar","steal","stole","stolen"),
        array("pegar","stick","stuck","stuck"),
        array("apestar","stink","stank","stunk"),
        array("golpear","strike","struck","struck"),
        array("hinchar","swell","swelled","swollen"),
        array("nadar","swim","swam","swum"),
        array("balancearse","swing","swung","swung"),
        array("tomar","take","took","taken"),
        array("enseñar","teach","taught","taught"),
        array("romper","tear","tore","torn"),
        array("decir","tell","told","told"),
        array("pensar","think","thought","thought"),
        array("lanzar","throw","threw","thrown"),
        array("empujar","thrust","thrust","thrust"),
        array("sufrir","undergo","underwent","undergone"),
        array("comprender","understand","understood","understood"),
        array("emprender","undertake","undertook","undertaken"),
        array("desarmar","undo","undid","undone"),
        array("despertar","wake","woke","woken"),
        array("vestir","wear","wore","worn"),
        array("ganar","win","won","won"),
        array("enroscar","wind","wound","wound"),
        array("retirar","withdraw","withdrew","withdrawn"),
        array("resistir","withstand","withstood","withstood")
    ); //Longitud 136 verbos


    if(!(isset($_POST['enviar']) || isset($_POST['respuestas']) || isset($_POST['check']))) {
        $arrayIndice=array();
        $arrayColumnas=array();
        $numVerbos=10;
        $numDificultad=2;
    }
    
?>
<!DOCTYPE html>
<html lang="es-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Francisco Javier González Sabariego">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verbos irregulares</title>
        <link rel="stylesheet" type="text/css" href="./css/verbos.css">
    </head>
    <body>
        <header></header>
        <nav></nav>
        <main>
            <h1 style="text-align: center"><u>Desarrollo en Entorno Servidor 2019/20</u></h1>
            <h2>Autor: Fco Javier González Sabariego</h2>
            <p><b>Verbos irregulares</b></p>
            <?php 
                if(!(isset($_POST['enviar']) || isset($_POST['respuestas']) || isset($_POST['check']))) {
                    echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
                    echo "Número de verbos:";
                    echo "<input type='text' name='totalverbos' value=''><br/>";
                    echo "Nivel de dificultad:";
                    echo "<select name='dificultad'>";
                    echo "<option value='1'>1</option>";
                    echo "<option value='2'>2</option>";
                    echo "<option value='3'>3</option>";
                    echo "</select>";
                    echo "<input type='submit' name='enviar'>";
                    echo "</form>";
                } else if(isset($_POST['enviar']) || isset($_POST['respuestas']) || isset($_POST['check'])) {
                    if(isset($_POST['enviar'])) {
                        if(validaFormulario()) {
                            $numVerbos=$_POST['totalverbos'];
                            $numDificultad=$_POST['dificultad'];
                            $arrayIndice=array();
                            $arrayColumnas=array();

                            //Genera arrays
                            $arrayIndice=generaIndiceAleatorio($numVerbos, $arrayIndice);
                            $arrayColumnas=generaCeldasAleatorias($numDificultad, $arrayIndice, $arrayColumnas);

                            reImprimePrimerForm();

                            //Muestra verbos:
                            echo "<form method='post'>";
                            echo "<table>";
                            $input=1;
                            for ($i=0; $i<sizeof($arrayIndice); $i++) {
                                echo "<tr>";
                                for ($j=0; $j<4; $j++) {
                                    if(annadeInput($i, $j, $arrayColumnas)) {
                                        echo "<td><input type='text' name=".$input." value=''></td>";
                                        $input++;
                                    }
                                    else
                                        echo "<td>".$verbos[$arrayIndice[$i]][$j]."</td>";
                                }
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "<input type='hidden' name='totalverbos' value=".$_POST['totalverbos'].">";
                            echo "<input type='hidden' name='dificultad' value=".$_POST['dificultad'].">";
                            echo "<input type='hidden' name='indice' value=".implode(",",$arrayIndice).">";
                            echo "<input type='hidden' name='columnas' value=".convierteCeldasString($arrayColumnas).">";
                            echo "<input type='submit' name='respuestas' value='Entregar'>";
                            echo "<input type='submit' name='check' value='Comprobar'>";
                            echo "</form>";
                        } else {
                            echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
                            echo "Número de verbos:";
                            echo "<input type='text' name='totalverbos' value='' class='error'>(*)Debe introducir un número entre 1-136</input><br/>";
                            echo "Nivel de dificultad:";
                            echo "<select name='dificultad'>";
                            echo "<option value='1'>1</option>";
                            echo "<option value='2'>2</option>";
                            echo "<option value='3'>3</option>";
                            echo "</select>";
                            echo "<input type='submit' name='enviar'>";
                            echo "</form>";
                        }
                    } else if (isset($_POST['check'])) {
                        $numVerbos=$_POST['totalverbos'];
                        $dificultad=$_POST['dificultad'];
                        $arrayIndice=cargaIndice($_POST['indice']);
                        $arrayColumnas=cargaColumnas($_POST['columnas']);
                        $input=1;

                        reImprimePrimerForm();

                        echo "<form method='post'>";
                        echo "<table>";
                            for ($i=0; $i<sizeof($arrayIndice); $i++) {
                                echo "<tr>";
                                for ($j=0; $j<4; $j++) {
                                    if(annadeInput($i, $j, $arrayColumnas)) {   //Validamos el resultado
                                        if($_POST["$input"]==$verbos[$arrayIndice[$i]][$j])
                                            echo "<td><input type='text' name=".$input." value=".$_POST["$input"]." class='correcto'></td>";
                                        else
                                            if(!$_POST["$input"])
                                                echo "<td><input type='text' name=".$input." placeholder='EMPTY(*)' value='' class='incorrecto'></td>";
                                            else
                                                echo "<td><input type='text' name=".$input." value=".$_POST["$input"]." class='incorrecto'></td>";
                                        $input++;
                                    }
                                    else
                                        echo "<td>".$verbos[$arrayIndice[$i]][$j]."</td>";
                                }
                                echo "</tr>";
                            }
                        echo "</table>";
                        echo "<input type='hidden' name='totalverbos' value=".$_POST['totalverbos'].">";
                        echo "<input type='hidden' name='dificultad' value=".$_POST['dificultad'].">";
                        echo "<input type='hidden' name='indice' value=".implode(",",$arrayIndice).">";
                        echo "<input type='hidden' name='columnas' value=".convierteCeldasString($arrayColumnas).">";
                        echo "<input type='submit' name='respuestas' value='Entregar'>";
                        echo "<input type='submit' name='check' value='Comprobar'>";
                        echo "</form>";
                    }

                }
                echo "<br/><a href="."../verCodigo.php?src=".str_replace("&bsol;","",__FILE__)."><button>Ver código</button></a>";
            ?>
            <!-- <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>>

                <input type="submit" name="enviar">
            </form> -->
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
     * Comprueba que el numero aletorio ($numAleatorio) que se le pasa como parámetro no está ya registrado en el
     * array de índices ($arrayIndice).
     */
    function comprobarIndiceDisponible($numAleatorio, $arrayIndice) {
        for ($i=0; $i<sizeof($arrayIndice); $i++) { 
            if($numAleatorio==$arrayIndice[$i])
                return false;
        }
        return true;
    }
    /**
     * Genera una cantidad n ($n) de índices aleatorios sin que ninguno de los mismos se repita.
     */
    function generaIndiceAleatorio($n,$arrayIndice) {
        for ($i=0; $i<$n ; $i++) {
            do {
                $indAleatorio=rand(0,135);
            } while(!comprobarIndiceDisponible($indAleatorio, $arrayIndice));
            array_push($arrayIndice,$indAleatorio);
        }
        return $arrayIndice;
    }

    /**
     * Comprueba que el numero aletorio ($numAleatorio) que se le pasa como parámetro no está ya registrado en la
     * fila n ($n) del array de columnas ($arrayColumnas).
     */
    function comprobarCeldaDisponible($n, $numAleatorio, $arrayColumnas) {
        for ($i=0; $i<sizeof($arrayColumnas[$n]); $i++) { 
            if($numAleatorio==$arrayColumnas[$n][$i])
                return false;
        }
        return true;
    }

    /**
     * Genera una cantidad n ($dificultad) de columnas aleatorias, para cada verbo, sin que ninguna de los mismos se repita.
     */
    function generaCeldasAleatorias($dificultad, $arrayIndice, $arrayColumnas) {
        for ($i=0; $i<sizeof($arrayIndice); $i++) {
            array_push($arrayColumnas, array());
            for ($j=0; $j<$dificultad; $j++) { 
                do {
                    $celdaAleatoria=rand(0,3);
                } while(!comprobarCeldaDisponible($i, $celdaAleatoria, $arrayColumnas));
                array_push($arrayColumnas[$i],$celdaAleatoria);
            }
        }
        return $arrayColumnas;
    }

    /**
     * Comprueba, al mostrar los verbos, si el valor de la columna en la posición n ($comprobarPosc)
     * coincide con un valor almacenado en el array de columnas ($arrayColumnas) en la fila m ($indice)
     * si encuentra una ocurrencia devuelve verdadero, en caso contrario falso.
     */
    function annadeInput($indice, $comprobarPosc, $arrayColumnas) {
        for ($i=0; $i<sizeof($arrayColumnas[0]); $i++) {
            if($comprobarPosc==$arrayColumnas[$indice][$i])
                return true;
        }
        return false;
    }

    /**
     * Comprueba que el valor de la totalidad de verbos a mostrar, elegido por el usuario, comprenda el rango [1-136]
     */
    function validaFormulario() {
        if($_POST['totalverbos']<1 || $_POST['totalverbos']>136)
            return false;
        return true;
    }

    function convierteCeldasString($arrayColumnas) {
        $salida="";
        for ($i=0; $i<sizeof($arrayColumnas); $i++) {
            for ($j=0; $j<sizeof($arrayColumnas[$i]); $j++) {
                if($j==sizeof($arrayColumnas[$i])-1 && $i==sizeof($arrayColumnas)-1)
                    $salida.=$arrayColumnas[$i][$j];
                else if ($j!=sizeof($arrayColumnas[$i])-1)
                    $salida.=$arrayColumnas[$i][$j].",";
                else
                    $salida.=$arrayColumnas[$i][$j]."|";
            }
        }
        return $salida;
    }

    function cargaIndice($importaIndice){
        $arrayIndice=array();
        $cadena="";
        for ($i=0; $i<strlen($importaIndice); $i++) { 
            if(substr($importaIndice,$i,1)!="," && $i==strlen($importaIndice)-1) {
                $cadena.=(string)substr($importaIndice,$i,1);
                array_push($arrayIndice,(int)$cadena);
                $cadena="";
            } else if (substr($importaIndice,$i,1)!=",")
                $cadena.=(string)substr($importaIndice,$i,1);
            else {
                array_push($arrayIndice,(int)$cadena);
                $cadena="";
            }
        }
        return $arrayIndice;
    }

    function cargaColumnas($importaColumnas){
        $arrayColumnas=array();
        $cadena="";
        array_push($arrayColumnas,array());
        $i=0;
        for ($j=0; $j<strlen($importaColumnas); $j++) { 
            if(substr($importaColumnas,$j,1)==",") {
                array_push($arrayColumnas[$i],(int)$cadena);
                $cadena="";
            }
            else if (substr($importaColumnas,$j,1)=="|"){
                array_push($arrayColumnas[$i],(int)$cadena);
                $cadena="";
                array_push($arrayColumnas,array());
                $i++;
            } else if ($j==strlen($importaColumnas)-1) {
                $cadena.=substr($importaColumnas,$j,1);
                array_push($arrayColumnas[$i],(int)$cadena);
            }
            else 
                $cadena.=substr($importaColumnas,$j,1);
        }
        return $arrayColumnas;
    }

    /**
     * Hace una búsqueda dentro del arrayColumnas y devuelve la posición en la que se ubica la columna actual del verbo a comprobar,
     * pasándole como parámetros el índice (el verbo al que pertenece), la columna (que se desea comprobar) y el arrayColumnas.
     */
    function columnaVerbo($indice,$columna,$arrayColumnas) {
        for ($i=0; $i<sizeof($arrayColumnas[$indice]); $i++) { 
            if($columna==$arrayColumnas[$indice][$i])
                return $i;
        }
        return 0;
    }

    function reImprimePrimerForm() {
        echo "<form action=".htmlspecialchars($_SERVER['PHP_SELF'])." method='post'>";
        echo "Número de verbos:";
        echo "<input type='text' name='totalverbos' value=".$_POST['totalverbos']."><br/>";
        echo "Nivel de dificultad:";
        echo "<select name='dificultad'>";
        for ($i=1; $i<4; $i++) { 
            if($i==$_POST['dificultad'])
                echo "<option value=".$i." selected>$i</option>";
            else
                echo "<option value=".$i.">$i</option>";
        }
        echo "</select>";
        echo "<input type='submit' name='enviar'>";
        echo "</form>";
    }

?>