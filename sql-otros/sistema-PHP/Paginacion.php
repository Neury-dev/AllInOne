<style>
    /*
    Paginación
*/
/*div.nPaginacionClass {
    position: relative;
    background-color: var(--n-color-dos);
    display: flex;
    justify-content: space-around;
    align-items: center;
    float: left;
    left: -1.75em;
    overflow: hidden;
}
  .nPaginacionClass {
        position: relative;

        overflow: hidden;
    }
    .nPaginacionClass ul { 
        list-style-type: none; 
    }
    .nPaginacionClass li { 
        display: inline-block;
    }*/
/*.nPaginacionClass a { 
    display: block; 
    float: left;
    padding: 5px; 
    border: 1px solid var(--n-color);
    border-radius: 0.30em;
    color: var(--n-color);
    text-align: center;
    text-decoration: none; 
    margin: 0 2px; 
    
}
.nPaginacionClass a:hover { color: var(--n-color); background-color: var(--n-color-tres); }
.nPaginacionClass a.nNavegacion { 
    border: 1px solid transparent; 
    overflow: hidden; 
    background-repeat: no-repeat; 
}
.nPaginacionClass a.nDescapacitado { 
    filter: alpha(opacity=50); 
    -khtml-opacity: 0.5; 
    -moz-opacity: 0.5; 
    opacity: 0.5;
    cursor: not-allowed;
}*/
/*.nPaginacionClass a.nDescapacitado:hover { background-color: inherit; color: inherit; }
*html .nPaginacionClass a.nNavegacion { border-color: #000001; filter: chroma(color = #000001); }
.nPaginacionClass a.nCorriente, .nPaginacionClass a.nCorriente:hover { 
    color: var(--n-color-dos);
    background-color: var(--n-color);
    border-color: var(--n-color);
}
.nPaginacionClass span { 
    color: #666; 
    margin-right: 2px; 
    display: block; 
    float: left; 
    padding: 8px 4px;
}
.nPaginacionClass a.nSiguiente { 
    padding-right: 5px !important;
}
.nPaginacionClass a.nAnterior { 
    padding-left: 5px !important;
}*/
</style>
    <?php
    class Paginacion {
        private $nPropiedades = array( // Establecer valores predeterminados e inicializar algunas variables privadas.
            'nMostrarSiempreLaNavegacion'   => true, // si los enlaces "página anterior" y "página siguiente" están siempre visibles
            'nEvitarContenidoDuplicado'     => true, //deberíamos evitar contenido duplicado
            'nMetodo'                       => 'get', // método por defecto para la propagación de la página
            'nSiguiente'                    => 'Siguiente', // cadena para "página siguiente"
            'nRelleno'                      => true, // por defecto, prefijo el número de página con ceros 
            'nPagina'                       => 1, // la página de inicio predeterminada
            'nConjuntoDePaginas'            => false, // una marca que indica si pagina actual se configuró manualmente o se determinó a partir de la URL
            'nPosicionDeNavegacion'         => 'outside',
            'nPreservarCadenaDeConsulta'    => 0, // un indicador que indica si las cadenas de consulta en nUrlBase deben mantenerse o no        
            'nAnterior'                     => 'Anterior', // cadena para "pagina anterior"
            'nArchivos'                     =>  '', // Por defecto, asumimos que no hay registros. // esperamos que este número se establezca después de que la clase sea instanciada
            'nArchivosPorPagina'            =>  '', // Archivos por pagina 
            'nMarchaAtras'                  =>  false, // Si los enlaces se muestran en orden inverso
            'nPaginasSeleccionables'        =>  11, // numero de paginas seleccionables
            'nPaginaTotal'                  =>  0, // será computado más adelante
            'nBarraDiagonal'                =>  true, // Se agregan barras diagonales a las URL generadas // (cuando "nMetodo" es "url")
            'nNombreDeLaVariable'           =>  'page', // este es el nombre de la variable que se usará en la URL para propagar el número de nPagina
        );
        
        function __construct() {// Constructor de la clase., Inicializa la clase y las propiedades por defecto., @ devuelve vacío
            $this->nUrlBase(); // establecer la URL base predeterminada
        }

        public function nMostrarSiempreLaNavegacion($nMostrar = true) {
            $this->nPropiedades['nMostrarSiempreLaNavegacion'] = $nMostrar;// establecer propiedad
        }
    // $pagination->nEvitarContenidoDuplicado(false);
        function nEvitarContenidoDuplicado($nEvitarContenidoDuplicado = true) {
            $this->nPropiedades['nEvitarContenidoDuplicado'] = $nEvitarContenidoDuplicado; //establecer propiedad
        }

        public function nUrlBase($nUrlBase = '', $nPreservarCadenaDeConsulta = true) {
            $nUrlBase = ($nUrlBase == '' ? '' : $nUrlBase); // establecer la URL base
//            $nUrlBase = ($nUrlBase == '' ? 'http://localhost/AllInOne/sistema_PHP.php' : $nUrlBase); // establecer la URL base
//            $nUrlBase = ($nUrlBase == '' ? $_SERVER['REQUEST_URI'] : $nUrlBase); // establecer la URL base
            $nUrlAnalizado = parse_url($nUrlBase); // analizar la URL
            $this->nPropiedades['nUrlBase'] = $nUrlAnalizado['path']; // caché la parte de "ruta de acceso" de la URL (es decir, todo * antes * de "?")
            $this->nPropiedades['nUrlBaseQuery'] = isset($nUrlAnalizado['nQuery']) ? $nUrlAnalizado['nQuery'] : ''; // caché la parte de "consulta" de la URL (es decir, todo * después de * la "?")
            parse_str($this->nPropiedades['nUrlBaseQuery'], $this->nPropiedades['nUrlBaseQuery']); // almacenar cadena de consulta como una matriz asociativa
            $this->nPropiedades['nPreservarCadenaDeConsulta'] = $nPreservarCadenaDeConsulta; // ¿Deben preservarse las cadenas de consulta (distintas de las establecidas en $ nUrlBase)?
        }
    //Devuelve el número actual de nPagina.<code>echo $pagination->nGetPagina();</code>     
        public function nGetPagina() {
            if (!$this->nPropiedades['nConjuntoDePaginas']) { // a menos que nPagina no se haya establecido específicamente a través de "nEstablecerPagina" nMetodo
                if (
                    $this->nPropiedades['nMetodo'] == 'url' && // La propagación de pagina es amigable con SEO
                    preg_match('/\b' . preg_quote($this->nPropiedades['nNombreDeLaVariable']) . '([0-9]+)\b/i', $_SERVER['REQUEST_URI'], $nPartidos) > 0 // la pagina actual se establece en la URL
                )
                    $this->nEstablecerPagina((int)$nPartidos[1]); // establece la Pagina actual a lo que sea indicado en la URL
                elseif (isset($_GET[$this->nPropiedades['nNombreDeLaVariable']])) // si la propagación de Pagina se realiza a través de GET y la Pagina actual se establece en $ _GET
                    $this->nEstablecerPagina((int)$_GET[$this->nPropiedades['nNombreDeLaVariable']]); // configura la Pagina actual a lo que se haya configurado como
            }

            if ($this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nArchivos'] == '') trigger_error('Al mostrar nArchivos en orden nMarchaAtras, debe especificar el número total de nArchivos (llamando a "nArchivos" nMetodo) * antes * del primer uso de "nGetPagina" nMetodo!', E_USER_ERROR);

            if ($this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nArchivosPorPagina'] == '') trigger_error('Al mostrar nArchivos en orden nMarchaAtras, debe especificar el número de nArchivos por nPagina (llamando a "nArchivosPorPagina" nMetodo) * antes * del primer uso de "nGetPagina" nMetodo!', E_USER_ERROR);
            
            $this->nPropiedades['nPaginaTotal'] = $this->nGetPaginas(); // obtener el numero total de nPaginas

            if ($this->nPropiedades['nPaginaTotal'] > 0) { // si hay npaginas
                if ($this->nPropiedades['nPagina'] > $this->nPropiedades['nPaginaTotal']) $this->nPropiedades['nPagina'] = $this->nPropiedades['nPaginaTotal'];  // Si la nPagina actual es superior al número total de nPaginas. /// Haz que la nPagina actual sea la última nPagina
                elseif ($this->nPropiedades['nPagina'] < 1) $this->nPropiedades['nPagina'] = 1; // Si la nPagina actual es menor que 1. // Hacer la nPagina actual 1
            }

            if (!$this->nPropiedades['nConjuntoDePaginas'] && $this->nPropiedades['nMarchaAtras']) $this->nEstablecerPagina($this->nPropiedades['nPaginaTotal']); // Si estamos empezando y tenemos que mostrar los enlaces en orden nMarchaAtras // configurar el primero al último en lugar de primero

            return $this->nPropiedades['nPagina']; // devuelve la actual nPagina
        }
    // obtener el numero total de nPaginas <code>echo $pagination->nGetPaginas();</code>
        public function nGetPaginas() {
            return @ceil($this->nPropiedades['nArchivos'] / $this->nPropiedades['nArchivosPorPagina']);// devuelva el número total de nPaginas en función del número total de nArchivos y el número de nArchivos que se mostrarán por nPagina
        }
     // cambiar las etiquetas por defecto<code>$pagination->nEtiquetas('nAnterior', 'nSiguiente');</code>
        public function nEtiquetas($nAnterior = 'nAnterior nPagina', $nSiguiente = 'nSiguiente nPagina') {
            $this->nPropiedades['nAnterior'] = $nAnterior; // establecer las etiquetas
            $this->nPropiedades['nSiguiente'] = $nSiguiente;
        }
    // configurar el nMetodo a la manera amigable SEO<code>$pagination->nMetodo('url');</code>
        public function nMetodo($nMetodo = 'get'){
            $this->nPropiedades['nMetodo'] = (strtolower($nMetodo) == 'url' ? 'url' : 'get'); // Establece la propagación de nPagina en nMetodo.
        }

        function nPosicionDeNavegacion($nPosicion) {
            $this->nPropiedades['nPosicionDeNavegacion'] = (in_array(strtolower($nPosicion), array('left', 'right')) ? strtolower($nPosicion) : 'outside'); // Establecer el posicionamiento de enlaces Siguiente / Anterior Pagina.
        }
    // deshabilitar números rellenos con ceros<code>$pagination->nRelleno(false);</code>
        public function nRelleno($nHabilitado = true) {
            $this->nPropiedades['nRelleno'] = $nHabilitado; // conjunto de relleno
        }
    // Dile al script que hay 100 nArchivos en total.<code>$pagination->nArchivos(100);</code>
        public function nArchivos($nArchivos) {
            $this->nPropiedades['nArchivos'] = (integer)$nArchivos; // el numero de nArchivos // Asegúrate de que lo guardemos como un entero
        }
    //  decirle a la clase que hay 20 nArchivos mostrados en una nPagina<code>$pagination->nArchivosPorPagina(20);</code>
        public function nArchivosPorPagina($nArchivosPorPagina) {
            $this->nPropiedades['nArchivosPorPagina'] = (int)$nArchivosPorPagina; // la cantidad de nArchivos mostrados en una nPagina // Asegúrate de que lo guardemos como un entero
        }
    //  generar salida pero no hacer eco // pero devuélvelo en su lugar<code>$nSalida = $pagination->nHacer(true);</code>
        public function nHacer($nSalidaDeRetorno = false) {
            $this->nGetPagina(); // obtener algunas propiedades de la clase
            
            if ($this->nPropiedades['nPaginaTotal'] <= 1) return ''; // Si hay una sola nPagina o ninguna nPaginas, no muestres nada
            
            $nSalida = '<div class="nPaginacionClass"><ul>'; // empezar a construir salida
            
            if ($this->nPropiedades['nMarchaAtras']) { // Si estamos mostrando nArchivos en orden nMarchaAtras
                if ($this->nPropiedades['nPosicionDeNavegacion'] == 'left') // si los enlaces "Siguiente Pagina" y "Anterior nPagina" se muestran a la izquierda de los enlaces a las Paginas individuales
                    $nSalida .= $this->nMostrarSiguiente() . $this->nMostrarAnterior() . $this->nMostrarPaginas(); // Primer show Siguiente / Anterior y luego Paginar enlaces.
                elseif ($this->nPropiedades['nPosicionDeNavegacion'] == 'right') // Si los enlaces "Siguiente Pagina" y "Anterior nPagina" se muestran a la derecha de los enlaces a Paginas individuales
                    $nSalida .= $this->nMostrarPaginas() . $this->nMostrarSiguiente() . $this->nMostrarAnterior();
                else $nSalida .= $this->nMostrarSiguiente() . $this->nMostrarPaginas() . $this->nMostrarAnterior(); // Si se muestran los enlaces "Siguiente Pagina" y "Anterior nPagina" en el exterior de los enlaces a Paginas individuales  
            } else { // Si estamos mostrando nArchivos en orden natural.
                if ($this->nPropiedades['nPosicionDeNavegacion'] == 'left') // si los enlaces "Siguiente Pagina" y "Anterior nPagina" se muestran a la izquierda de los enlaces a las Paginas individuales
                    $nSalida .= $this->nMostrarAnterior() . $this->nMostrarSiguiente() . $this->nMostrarPaginas(); // Primero muestra Siguiente / Anterior y luego Pagina enlaces
                elseif ($this->nPropiedades['nPosicionDeNavegacion'] == 'right') // si los enlaces "Siguiente Pagina" y "Anterior nPagina" se muestran a la derecha de los enlaces a las Paginas individuales
                    $nSalida .= $this->nMostrarPaginas() . $this->nMostrarAnterior() . $this->nMostrarSiguiente();// si se mostrarán los enlaces "Siguiente Pagina" y "Anterior nPagina" en el exterior de los enlaces a Paginas individuales
                else $nSalida .= $this->nMostrarAnterior() . $this->nMostrarPaginas() . $this->nMostrarSiguiente();
            }
        // termina de generar la salida
            $nSalida .= '</ul></div>';
        // si $ return_output es TRUE// devolver el contenido generado
            if ($nSalidaDeRetorno) return $nSalida;
        // Si el script llega tan lejos, imprime el contenido generado en la pantalla.
            echo $nSalida;
        }
    // muestre los enlaces de paginación en orden nMarchaAtras en lugar de en orden natural<code>$pagination->nMarchaAtras(true);</code>
        public function nMarchaAtras($nMarchaAtras = true){
            $this->nPropiedades['nMarchaAtras'] = $nMarchaAtras; // Establecer cómo deben generarse los enlaces de paginación.
        }
    // mostrar enlaces a 15 nPaginas<code>$pagination->nPaginasSeleccionables(15);</code>
        public function nPaginasSeleccionables($nPaginasSeleccionables) {
            $this->nPropiedades['nPaginasSeleccionables'] = (int)$nPaginasSeleccionables; // el numero de nPaginas seleccionables// Asegúrate de que lo guardemos como un entero
        }
    // establece la quinta nPagina como la nPagina actual<code>$pagination->nEstablecerPagina(5);</code>
        public function nEstablecerPagina($nPagina) {
            $this->nPropiedades['nPagina'] = (int)$nPagina; // Establece la nPagina actual. // Asegúrate de guardarlo como un entero

            if ($this->nPropiedades['nPagina'] < 1) $this->nPropiedades['nPagina'] = 1; // si el número es menor que uno // hazlo '1'

            $this->nPropiedades['nConjuntoDePaginas'] = true; // establece una bandera para que el "nGetPagina" nMetodo no cambie este valor
        }
    // deshabilita las barras al final de las URL generadas<code>$pagination->nBarraDiagonal(false);</code>
        public function nBarraDiagonal($nHabilitado) {
            $this->nPropiedades['nBarraDiagonal'] = $nHabilitado; // establecer el estado de barras al final
        }
    //  establece el nombre de la variable a "foo"ahora, en la URL, la nPagina actual se pasará como "foo = [número de nPagina]" (si nMetodo es "get") o// como "/ foo [nPagina number]" (si nMetodo es "url")<code>$pagination->nNombreDeLaVariable('foo');</code>
        public function nNombreDeLaVariable($nNombreDeLaVariable){
            $this->nPropiedades['nNombreDeLaVariable'] = strtolower($nNombreDeLaVariable); // establece el nombre de la variable
        }
    //Genera el enlace para la nPagina dado como argumento.
        private function nEstructuraUrl($nPagina) {
            if ($this->nPropiedades['nMetodo'] == 'url') {// si nMetodo de propagación de nPagina ha terminado URL de miembro amigable de SEO // vea si la corriente nPagina es ya establecido en el URL
                if (preg_match('/\b' . $this->nPropiedades['nNombreDeLaVariable'] . '([0-9]+)\b/i', $this->nPropiedades['nUrlBase'], $nPartidos) > 0) {
                    $nURL = str_replace('//', '/', preg_replace( // cuerda de estructura
                        '/\b' . $this->nPropiedades['nNombreDeLaVariable'] . '([0-9]+)\b/i', // reemplace el valor corrientemente existente
                        ($nPagina == 1 ? '' : $this->nPropiedades['nNombreDeLaVariable'] . $nPagina), $this->nPropiedades['nUrlBase'])); // si en el primero NPagina, lo quite a fin de evitar el contenido duplicado
                } else $nURL = rtrim($this->nPropiedades['nUrlBase'], '/') . '/' . ($this->nPropiedades['nNombreDeLaVariable'] . $nPagina); // si la corriente NPagina no está en el URL, lo ponga, a menos que está en el primero NPagina// caso en que no lo ponemos a fin de evitar el contenido duplicado
                // maneje arrastrando tire tajos y reveses según las preferencias
                $nURL = rtrim($nURL, '/') . ($this->nPropiedades['nBarraDiagonal'] ? '/' : '');
                // si valores en la cuerda de pregunta  -  aparte de esos conjunto por nUrlBase () - no es para preservarse // preserve sólo esos conjunto inicialmente
                if (!$this->nPropiedades['nPreservarCadenaDeConsulta']) $nQuery = implode('&', $this->nPropiedades['nUrlBaseQuery']); // de otra manera, consiga la cuerda actual de pregunta
                else $nQuery = $_SERVER['QUERY_STRING'];
                // retorne la cuerda fabricada también añadiendo la pregunta encuerda, si las hay
                return $nURL . ($nQuery != '' ? '?' . $nQuery : ''); // si la propagación de nPagina va a ser hecha por GET
            } else { // si valores en la cuerda de pregunta  -  aparte de esos conjunto por nUrlBase () - no es para preservarse // preserve sólo esos conjunto inicialmente
                if (!$this->nPropiedades['nPreservarCadenaDeConsulta']) $nQuery = $this->nPropiedades['nUrlBaseQuery']; // de otra manera, consiga la cuerda actual de pregunta, si existe, y transforma lo a un conjunto
                else parse_str($_SERVER['QUERY_STRING'], $nQuery);
                // si nosotros está evitando duplique el contenido y de lo contrario el primero/último NPagina ( en dependencia de si los enlaces de paginación son mostrados en natural o NMarchaAtrasd ordene )
                if (!$this->nPropiedades['nEvitarContenidoDuplicado'] || ($nPagina != ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1))) // añadir / actualizar el número de nPaginaañadir / actualizar el número de nPagina
                    $nQuery[$this->nPropiedades['nNombreDeLaVariable']] = $nPagina; // si nosotros está evitando duplique contenido, no use la variable "nPagina" en el primero/último nPagina
                elseif ($this->nPropiedades['nEvitarContenidoDuplicado'] && $nPagina == ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1))
                    unset($nQuery[$this->nPropiedades['nNombreDeLaVariable']]);
                // asegure se el HTML retornado es W3C dócil
                return htmlspecialchars(html_entity_decode($this->nPropiedades['nUrlBase']) . (!empty($nQuery) ? '?' . urldecode(http_build_query($nQuery)) : ''));
            }
        }
    //Genera el enlace "nSiguiente nPagina", dependiendo de si los enlaces de paginación se muestran en orden natural o nMarchaAtras.
        private function nMostrarSiguiente() {
            $nSalida = '';
        // si "nMostrarSiempreLaNavegacion" es TRUE o // si el número total de nPaginas disponibles es mayor que el número de nPaginas que se mostrarán a la vez // Significa que podemos mostrar el enlace "Siguiente Pagina".
            if ($this->nPropiedades['nMostrarSiempreLaNavegacion'] || $this->nPropiedades['nPaginaTotal'] > $this->nPropiedades['nPaginasSeleccionables'])
//                $nSalida = '<li><a '
//                    . 'href="' . // El href es diferente si estamos en la última nPagina.
//                    ($this->nPropiedades['nPagina'] == $this->nPropiedades['nPaginaTotal'] ? 'javascript:void(0)' : 'http://localhost/AllInOne/sistema_PHP.php' . $this->nEstructuraUrl($this->nPropiedades['nPagina'] + 1)) . // Si estamos en la última nPagina, el enlace está deshabilitado.// También diferentes clases si los enlaces están en orden nMarchaAtras
//                    '" class="nNavegacion ' . ($this->nPropiedades['nMarchaAtras'] ? 'nAnterior' : 'nSiguiente') . 
//                    ($this->nPropiedades['nPagina'] == $this->nPropiedades['nPaginaTotal'] ? ' nDescapacitado' : '') . '"' . 
//                    ' rel="nSiguiente"'
//                    . ' onclick="return false;"' . '>' . $this->nPropiedades['nSiguiente'] . '</a></li>';
                $nSalida = '<li>'
                    . '<button '
                    . 'type="submit"'
                    . 'id="siguient"'
                    . 'value"' . ($this->nPropiedades['nPagina'] == $this->nPropiedades['nPaginaTotal'] ? 'javascript:void(0)' : $this->nEstructuraUrl($this->nPropiedades['nPagina'] + 1)) .'">'
                    . 'Siguientee'
                    . '</button>'
                    . '</li>'
                ;
         
            return $nSalida;
        }
    //Genera los enlaces de paginación (menos "nSiguiente" y "nAnterior"), dependiendo de si se muestran los enlaces de paginación En orden natural o nMarchaAtrasd.
        private function nMostrarPaginas() {
            $nSalida = '';
        // si el número total de nPaginas es menor que el número de nPaginas seleccionables
            if ($this->nPropiedades['nPaginaTotal'] <= $this->nPropiedades['nPaginasSeleccionables']) {
                for ( // iterar de forma ascendente o descendente dependiendo de si estamos mostrando enlaces en orden nMarchaAtras o no)
                    $nI = ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1);
                    ($this->nPropiedades['nMarchaAtras'] ? $nI >= 1 : $nI <= $this->nPropiedades['nPaginaTotal']);
                    ($this->nPropiedades['nMarchaAtras'] ? $nI-- : $nI++)
                )  
                    $nSalida .= '<li><a href="' . $this->nEstructuraUrl($nI) . '" ' . // Haciendo el enlace para cada pagina.
                    ($this->nPropiedades['nPagina'] == $nI ? 'class="nCorriente"' : '') . '>' . // Asegúrate de resaltar la nPagina actualmente seleccionada
                    ($this->nPropiedades['nRelleno'] ? str_pad($nI, strlen($this->nPropiedades['nPaginaTotal']), '0', STR_PAD_LEFT) : $nI) . '</a></li>'; // aplicar nRelleno si es necesario
            } else { // si el número total de nPaginas es mayor que el número de nPaginas seleccionables
                $nSalida .= '<li><a href="' . $this->nEstructuraUrl($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1) . '" ' . // Comience con un enlace a la primera o la última nPagina, dependiendo de si estamos mostrando los enlaces en orden nMarchaAtras o no
                ($this->nPropiedades['nPagina'] == ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1) ? 'class="nCorriente"' : '') . '>' . // resaltar si la nPagina está actualmente seleccionada
                ($this->nPropiedades['nRelleno'] ? // si se requiere nRelleno
                str_pad(($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1), strlen($this->nPropiedades['nPaginaTotal']), '0', STR_PAD_LEFT) : // aplicar nRelleno    
                ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] : 1)) . '</a></li>'; // mostrar el numero de nPagina
                $nAdyacente = floor(($this->nPropiedades['nPaginasSeleccionables'] - 3) / 2); // Calcule el número de nPaginas adyacentes para mostrar a la izquierda y derecha de la nPagina seleccionada actualmente, de modo que // Que la nPagina actualmente seleccionada esté siempre centrada.
            // este número debe ser al menos 1
                if ($nAdyacente == 0) $nAdyacente = 1;
                    $nDesplazarseDesde = ($this->nPropiedades['nMarchaAtras'] ? // Encuentra el número de nPagina después de que tengamos que mostrar el primer "..." // (Dependiendo de si estamos mostrando enlaces en orden nMarchaAtras o no)
                    $this->nPropiedades['nPaginaTotal'] - ($this->nPropiedades['nPaginasSeleccionables'] - $nAdyacente) + 1 :
                    $this->nPropiedades['nPaginasSeleccionables'] - $nAdyacente);
                    $nPaginaDeInicio = ($this->nPropiedades['nMarchaAtras'] ? $this->nPropiedades['nPaginaTotal'] - 1 : 2); // obtén el número de nPagina desde donde deberíamos empezar a renderizar // Si se muestran enlaces en orden natural, entonces es "2" porque ya hemos renderizado la primera nPagina // Si estamos mostrando enlaces en orden nMarchaAtras, entonces es nPaginaTotal - 1 porque ya hemos renderizado la última nPagina
                // si la nPagina seleccionada actualmente está más allá del punto desde donde necesitamos desplazarnos, // Necesitamos ajustar el valor de $ starting_nPagina.
                if (
                    ($this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nPagina'] <= $nDesplazarseDesde) ||
                    (!$this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nPagina'] >= $nDesplazarseDesde)
                ) {
                    $nPaginaDeInicio = $this->nPropiedades['nPagina'] + ($this->nPropiedades['nMarchaAtras'] ? $nAdyacente : -$nAdyacente); // de forma predeterminada, la partida_nagagina debe ser la nPagina actual más / menos $ adyacentes // Dependiendo de si estamos mostrando enlaces en orden nMarchaAtras o no
                    // pero si eso significaría mostrar menos nNavegacion enlaces que lo especificado en $ this-> nPropiedades ['nPaginasSeleccionables']
                    if (
                        ($this->nPropiedades['nMarchaAtras'] && $nPaginaDeInicio < ($this->nPropiedades['nPaginasSeleccionables'] - 1)) ||
                        (!$this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nPaginaTotal'] - $nPaginaDeInicio < ($this->nPropiedades['nPaginasSeleccionables'] - 2))
                    )
                        if ($this->nPropiedades['nMarchaAtras']) $nPaginaDeInicio = $this->nPropiedades['nPaginasSeleccionables'] - 1; // Ajustar el valor de $ starting_nPagina de nuevo.
                        else $nPaginaDeInicio -= ($this->nPropiedades['nPaginasSeleccionables'] - 2) - ($this->nPropiedades['nPaginaTotal'] - $nPaginaDeInicio);
                    // ponga el "..." después del enlace a la primera / última nPagina // Dependiendo de si estamos mostrando enlaces en orden nMarchaAtras o no
                    $nSalida .= '<li><span>&hellip;</span></li>';
                }
            // Obtener el número de página donde deberíamos dejar de renderizar. // por defecto, este valor es la suma de la nPagina más / menos inicial (dependiendo de si estamos mostrando enlaces) // en orden nMarchaAtras o no) cualquiera que sea el número de $ this-> nPropiedades ['nPaginasSeleccionables'] menos 3 (primera nPagina, // última nPagina y actual nPagina)
                $nPaginaFinal = $nPaginaDeInicio + (($this->nPropiedades['nMarchaAtras'] ? -1 : 1) * ($this->nPropiedades['nPaginasSeleccionables'] - 3));
            // Si estamos mostrando enlaces en orden natural y terminando nPagina sería mayor que el número total de nPaginas menos 1 // (menos uno porque no tomamos en cuenta la última nPagina que generamos automáticamente)// Ajusta el final de nPagina.
                if ($this->nPropiedades['nMarchaAtras'] && $nPaginaFinal < 2) $nPaginaFinal = 2;
                elseif (!$this->nPropiedades['nMarchaAtras'] && $nPaginaFinal > $this->nPropiedades['nPaginaTotal'] - 1) $nPaginaFinal = $this->nPropiedades['nPaginaTotal'] - 1; // o, si estamos mostrando enlaces en el orden nMarchaAtras, y terminar nPagina sería menor que 2// (2 porque no tomamos en cuenta la primera nPagina que enviamos automáticamente)// Ajusta el final de nPagina.
                //hacer enlaces de paginación
                for ($nI = $nPaginaDeInicio; $this->nPropiedades['nMarchaAtras'] ? $nI >= $nPaginaFinal : $nI <= $nPaginaFinal; $this->nPropiedades['nMarchaAtras'] ? $nI-- : $nI++)
                    $nSalida .= '<li><a href="' . $this->nEstructuraUrl($nI) . '" ' . // resaltar la nPagina actualmente seleccionada
                    ($this->nPropiedades['nPagina'] == $nI ? 'class="nCorriente"' : '') . '>' .  
                    ($this->nPropiedades['nRelleno'] ? str_pad($nI, strlen($this->nPropiedades['nPaginaTotal']), '0', STR_PAD_LEFT) : $nI) . '</a></li>'; //aplicar nRelleno si es necesario
            // si tenemos que colocar otro "..." al final, antes del enlace a la última / primera nPagina (dependiendo de si // Estamos mostrando enlaces en orden nMarchaAtras o no)
                if (
                    ($this->nPropiedades['nMarchaAtras'] && $nPaginaFinal > 2) ||
                    (!$this->nPropiedades['nMarchaAtras'] && $this->nPropiedades['nPaginaTotal'] - $nPaginaFinal > 1)
                ) 
                    $nSalida .= '<li><span>&hellip;</span></li>'; // ponga un enlace a la última / primera nPagina (dependiendo de si estamos mostrando los enlaces en orden nMarchaAtras o no)
                    $nSalida .= '<li><a href="' . $this->nEstructuraUrl($this->nPropiedades['nMarchaAtras'] ? 1 : $this->nPropiedades['nPaginaTotal']) . '" ' . // resaltar si es la nPagina actualmente seleccionada
                    ($this->nPropiedades['nPagina'] == $nI ? 'class="nCorriente"' : '') . '>' . // También, aplique nRelleno si es necesario.
                    ($this->nPropiedades['nRelleno'] ? str_pad(($this->nPropiedades['nMarchaAtras'] ? 1 : $this->nPropiedades['nPaginaTotal']), strlen($this->nPropiedades['nPaginaTotal']), '0', STR_PAD_LEFT) : ($this->nPropiedades['nMarchaAtras'] ? 1 : $this->nPropiedades['nPaginaTotal'])) .
                    '</a></li>';
            }

            return $nSalida;
        }
    //Genera el enlace "nAnterior nPagina", dependiendo de si los enlaces de paginación se muestran en orden natural o nMarchaAtrasd.
        private function nMostrarAnterior() {
            $nSalida = '';
        // si "nMostrarSiempreLaNavegacion" es TRUE o // si el número total de nPaginas disponibles es mayor que el número de nPaginas seleccionables // significa que podemos mostrar el enlace "nAnterior nPagina"
            if ($this->nPropiedades['nMostrarSiempreLaNavegacion'] || $this->nPropiedades['nPaginaTotal'] > $this->nPropiedades['nPaginasSeleccionables'])
                $nSalida = '<li><a href="' . // el href es diferente si estamos en la primera nPagina
                    ($this->nPropiedades['nPagina'] == 1 ? 'javascript:void(0)' : $this->nEstructuraUrl($this->nPropiedades['nPagina'] - 1)) . // Si estamos en la primera nPagina, el enlace está deshabilitado. // También diferentes clases si los enlaces están en orden nMarchaAtras
                    '" class="nNavegacion ' . ($this->nPropiedades['nMarchaAtras'] ? 'nSiguiente' : 'nAnterior') . ($this->nPropiedades['nPagina'] == 1 ? ' nDescapacitado' : '') . '"' .
                    ' rel="prev"' . '>' . $this->nPropiedades['nAnterior'] . '</a></li>';

            return $nSalida;
        }
    }
?>
