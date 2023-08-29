<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Programación para Internet</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
  <link rel="stylesheet" href="css/styles/tomorrow-night.css">
  <script src="js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">PHP</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        PHP es un lenguaje script de propósito general especialmente diseñado para el desarrollo Web. Es rápido, flexible y pragmático; PHP hace desde un blog hasta los sitios de
        Internet más populares del mundo.
      </p>
      <p class="text-justify">
        PHP es el acrónimo de "PHP Hypertext Preprocessor". PHP es utilizado mundialmente utilizado, es de código abierto y una alternativa eficiente a competidores como ASP de Microsoft.
      </p>
      <p class="text-justify">
        PHP es un lenguaje de script "del lado del servidor", es decir, los scripts escritos se ejecutan en el servidor y éste devuelve el resultado de dicha ejecución. Por esta razón es que
        los clientes que ingresen a un sitio Web que contenga scripts en PHP no necesitan un software especial en su computadora.
      </p>
      <p class="text-justify">
        El sitio Web <a href="http://php.net/">php.net</a> contiene la última versión del software, además de toda la <a href="http://php.net/docs.php">documentación del lenguaje</a> en
        varios idiomas.
      </p>
      <p class="text-justify">
        Para utilizar PHP hay varias opciones:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Servidor LAMP / WAMP
          </p>
        </li>
        <li>
          <p class="text-justify">
            Servidor Portátil <a href="http://zwamp.sourceforge.net/">Z-WAMP</a>: Es un conjunto de servidores para Windows que no necesitan instalación, solamente se ejecutan cuando se necesiten.
          </p>
        </li>
        <li>
          <p class="text-justify">
            <a href="http://www.microsoft.com/web/webmatrix/">Microsoft WebMatrix</a>: Herramienta de desarrollo Web en la nube.
          </p>
        </li>
        <li>
          <p class="text-justify"><a href="https://codenvy.com/">
            CodEnvy</a>: Es un conjunto de ambientes de desarrollo SaaS (Software as a Service) en línea que permite escribir y ejecutar los
            scripts en la nube. Es multiplataforma y solo se necesita un navegador.
          </p>
        </li>
      </ul>
    </article>

    <article class="tema">
      <h2>Sintaxis de PHP</h2>

      <h3>Sintaxis Básica</h3>
      <p class="text-justify">
        El código PHP puede escribirse en cualquier parte de un documento HTML con las etiquetas correspondientes. El código PHP inicia con <code>&lt;?php</code> y
        termina con <code>?&gt;</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 1</b>. Hola mundo en PHP
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Mi primer PHP&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Mi primer PHP.&lt;/h1&gt;
      &lt;p&gt;Ésto es HTML.&lt;/p&gt;
      &lt;?php
      echo "&lt;p&gt;Hello World!.&lt;/p&gt;";
      echo "&lt;p&gt;Ésto es HTML desde PHP.&lt;/p&gt;";
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Comentarios en PHP</h3>
      <p class="text-justify">
        Todas las líneas en PHP deben terminar con <code>;</code> excepto la última, ya que la etiqueta de finalización de <code>?&gt;</code> implica un punto y coma. A pesar de ésto,
        se recomienda finalizar todas las líneas con <code>;</code>.
      </p>
      <p class="text-justify">
        Los comentarios en PHP se pueden hacer por línea con <code>//</code> o bien con <code>#</code>, todos los caracteres posteriores a cualquiera de estos símbolos serán ignorados
        por el intérprete. Todas las líneas que se encuentren entre <code>/*</code> y <code>*/</code> también se ignorarán por el intérprete.
      </p>
      <p class="text-justify">
        <b>Ejemplo 2</b>. Comentarios en PHP
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        // Comentario de una sola línea
        # Éste también comenta una sola línea
        /*  Éste comenta
            múltiples
            líneas         */
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Sensibilidad a Mayúsculas</h3>
      <p class="text-justify">
        En PHP las funciones definidas por el usuario, clases y palabras clave no son sensibles a mayúsculas. Sin embargo, las variables si son sensibles a mayúsculas.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. Las funciones, clases y palabras clave no son sensibles a mayúsculas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        ECHO "Hola Mundo!&lt;br&gt;";
        echo "Hola Mundo!&lt;br&gt;";
        EcHo "Hola Mundo!&lt;br&gt;";
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 4</b>. Las variables son sensibles a mayúsculas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $color="red";
        echo "My car is " . $color . "&lt;br&gt;";
        echo "My house is " . $COLOR ."&lt;br&gt;";
        echo "My boat is " . $coLOR ."&lt;br&gt;";
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Variables</h2>
      <h3>Declaración</h3>
      <p class="text-justify">
        Las variables son contenedores abstractos de datos que se convierten cuando es necesario y no necesitan ser declaradas. Una variable es creada en el momento que se le asigna
        un valor por primera vez.
      </p>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Declaración de variables
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $txt="Hola mundo!";
        $x=5;
        $y=10.5;
        $z = $x + $y;
        echo $txt;
        echo "&lt;br&gt;";
        echo $x;
        echo "&lt;br&gt;";
        echo $y;
        echo "&lt;br&gt;";
        echo $z;
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        En PHP las variables pueden ser "declaradas" en cualquier lugar del script, sin embargo se recomienda hacerlo al inicio, con la finalidad de tener un código más ordenado.
      </p>
      <h3>Ámbito de las Variables</h3>
      <p class="text-justify">
        El ámbito de una variable es la parte del script donde puede ser utilizada o referenciada. PHP tiene tres tipos de ámbitos.
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Local
          </p>
        </li>
        <li>
          <p class="text-justify">
            Global
          </p>
        </li>
        <li>
          <p class="text-justify">
            Estático
          </p>
        </li>
      </ul>

      <h3>Ámbito Local y Global</h3>
      <p class="text-justify">
        Una variable declarada fuera de una función tiene ámbito global y sólo puede ser accesada fuera de la función. Una variable declarada dentro de una función tiene ámbito local y
        sólo puede ser accesada por esa función.
      </p>
      <p class="text-justify">
        <b>Ejemplo 6</b>. Ámbito de las variables
      </p>
      <pre><code>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ámbito de las variables&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;?php
      $x=5; // ámbito global
      function myTest() {
        $y=10; // ámbito local
        echo "&lt;p&gt;Variables de prueba dentro de una función:&lt;p&gt;";
        echo "Variable x es: $x";
        echo "&lt;br&gt;";
        echo "Variable y es: $y";
      }
      myTest();
      echo "&lt;p&gt;Variables de prueba fuera de una función:&lt;p&gt;";
      echo "Variable x es: $x";
      echo "&lt;br&gt;";
      echo "Variable y es: $y";
    ?&gt;
  &lt;/body&gt;
&lt;/html&gt;
      </code></pre>

      <h3>La palabra clave global</h3>
      <p class="text-justify">
        La palabra clave <code>global</code> se utiliza para acceder a variables globales desde el interior de una función. Para hacer esto se antepone la palabra global al nombre de la variable.
      </p>
      <p class="text-justify">
        <b>Ejemplo 7</b>. Variables Globales
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $x=5;
        $y=10;
        function myTest() {
          global $x,$y;
          $y=$x+$y;
        }
        myTest();  // función
        echo $y;   // Nuevo valor de y
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Variables Estáticas</h3>
      <p class="text-justify">
        Típicamente cuando una función termina su ejecución todas las variables contenidas en ella son borradas, sin embargo algunas veces es necesario mantenerlas. Para ésto se
        antepone la palabra clave <code>static</code> al nombre de la variable la primera vez que se utilice.
      </p>
      <p class="text-justify">
        <b>Ejemplo 8</b>. Variable estática
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        function myTest() {
          static $x=0;
          echo $x;
          $x++;
        }
        myTest();
        echo "&lt;br&gt;";
        myTest();
        echo "&lt;br&gt;";
        myTest();
        echo "&lt;br&gt;";
        myTest();
        echo "&lt;br&gt;";
        myTest();
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Cada vez que la variable es llamada, contendrá la información de la última vez que fue utilizada. A pesar de esto, la variable seguirá siendo local.
      </p>
    </article>

    <article class="tema">
      <h2>Sentencia Echo y Print</h2>
      <p class="text-justify">
        En PHP existen dos formas de imprimir contenido: echo y print, sin embargo existen algunas diferencias entre ellas:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            <code>echo</code>: Puede imprimir una o más cadenas
          </p>
        </li>
        <li>
          <p class="text-justify">
            <code>print</code>: Sólo puede imprimir una cadena y siempre devuelve "1".
          </p>
        </li>
      </ul>
      <p class="text-justify">
        Ambas sentencias pueden utilizarse o no con paréntesis.
      </p>
      <p class="text-justify">
        <b>Ejemplo 9</b>. Sentencia echo
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        echo "&lt;h2&gt;PHP is fun!&lt;/h2&gt;";
        echo "Hello world!&lt;br&gt;";
        echo "I'm about to learn PHP!&lt;br&gt;";
        echo "This", " string", " was", " made", " with multiple parameters.&lt;br&gt;";
        echo "&lt;h2&gt;PHP&lt;/h2&gt;";
        $txt1="Learn PHP";
        $txt2="W3Schools.com";
        $cars=array("Volvo","BMW","Toyota");
        echo $txt1;
        echo "&lt;br&gt;";
        echo "Study PHP at $txt2";
        echo "&lt;br&gt;";
        echo "My car is a {$cars[0]}";
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 10</b>. Sentencia print
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        print "&lt;h2&gt;PHP is fun!&lt;/h2&gt;";
        print "Hello world!&lt;br&gt;";
        print "I'm about to learn PHP!";
        print "&lt;h2&gt;PHP&lt;/h2&gt;";
        $txt1="Learn PHP";
        $txt2="W3Schools.com";
        $cars=array("Volvo","BMW","Toyota");
        print $txt1;
        print "&lt;br&gt;";
        print "Study PHP at $txt2";
        print "&lt;br&gt;";
        print "My car is a {$cars[0]}";
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>
    <article class="tema">
      <h2>Tipos de Datos</h2>
      <p class="text-justify">
        Aunque las variables son contenedores abstractos si pueden tener un tipo de dato. Los tipos de datos que hay en PHP son <code>String</code>, <code>Integer</code>,
        <code>Floating</code>, <code>Boolean</code>, <code>Array</code>, <code>Object</code> y <code>Null</code>.
      </p>
      <h3>Cadenas</h3>
      <p class="text-justify">
        Una cadena es una serie de caracteres. Una cadena puede ser cualquier texto dentro de comillas sencillas o dobles.
      </p>
      <pre><code>
        &lt;?php
          $x = "Hello world!";
          echo $x;
          echo "&lt;br&gt;";
          $x = 'Hello world!';
          echo $x;
        ?&gt;
      </code></pre>
      <h3>Enteros</h3>
      <p class="text-justify">
        Un entero es un número sin decimales. La función de PHP <code>var_dump()</code> devuelve el tipo de dato y el valor de la variable recibida.
      </p>
      <pre><code>
  &lt;?php
    $x = 5985;
    var_dump($x);
    echo "&lt;br&gt;";
    $x = -345; // negative number
    var_dump($x);
    echo "&lt;br&gt;";
    $x = 0x8C; // hexadecimal number
    var_dump($x);
    echo "&lt;br&gt;";
    $x = 047; // octal number
    var_dump($x);
  ?&gt;
      </code></pre>
      <h3>Flotantes</h3>
      <p class="text-justify">
        Un número flotante es un número con punto decimal o bien un número en forma exponencial (notación científica).
      </p>
      <pre><code>
  &lt;?php
    $x = 10.365;
    var_dump($x);
    echo "&lt;br&gt;";
    $x = 2.4e3;
    var_dump($x);
    echo "&lt;br&gt;";
    $x = 8E-5;
    var_dump($x);
  ?&gt;
      </code></pre>

      <h3>Booleanos</h3>
      <p class="text-justify">
        Los booleanos sólo pueden ser <code>TRUE</code> o <code>FALSE</code>. Son típicamente utilizados en pruebas condicionales.
      </p>
      <pre><code>
  $x=true;
  $y=false;
      </code></pre>

      <h3>Arreglos</h3>
      <p class="text-justify">
        Un arreglo almacena múltiples valores en una sola variable.
      </p>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Arreglos en PHP
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $cars=array("Volvo","BMW","Toyota");
        var_dump($cars);
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Objetos</h3>
      <p class="text-justify">
        Un objeto es un tipo de dato que almacena datos e información y la forma en como serán procesados. Los objetos deben ser explícitamente declarados con la palabra clave <code>class</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 12</b>. Creación de un Objeto y métodos
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        class Car {
            var $color;
            function Car($color="green") {
                $this-&gt;color = $color;
            }
            function what_color() {
                return $this-&gt;color;
            }
        }
        function print_vars($obj) {
           foreach (get_object_vars($obj) as $prop =&gt; $val) {
             echo "\t$prop = $val\n";
           }
        }
        // instantiate one object
        $herbie = new Car("white");
        // show herbie properties
        echo "\herbie: Properties\n";
        print_vars($herbie);
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>NULL</h3>
      <p class="text-justify">
        El tipo de dato <code>Null</code> representa que una variable no tiene un valor. El único valor posible de una variable nula es <code>NULL</code>. El valor <code>NULL</code> identifica
        si una variable está vacía o no. Es útil para diferenciar si algún campo en una base de datos está vacío o si tiene una cadena vacía.
      </p>
      <pre><code>
  &lt;?php
    $x="Hello world!";
    $x=null;
    var_dump($x);
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Operadores</h2>

      <h3>Operadores aritméticos en PHP</h3>
      <p class="text-justify">
        En PHP se tienen los operadores aritméticos que existen en la mayoría de los lenguajes de programación de alto nivel.
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Operador</th>
            <th>Nombre</th>
            <th>Ejemplo</th>
            <th>Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>+</td>
            <td>Suma</td>
            <td>$x + $y</td>
            <td>Suma de $x y $y</td>
          </tr>
          <tr>
            <td>-</td>
            <td>Resta</td>
            <td>$x - $y</td>
            <td>Resta de $x - $y</td>
          </tr>
          <tr>
            <td>*</td>
            <td>Multiplicación</td>
            <td>$x * $y</td>
            <td>Producto de $x * $y</td>
          </tr>
          <tr>
            <td>/</td>
            <td>División</td>
            <td>$x / $y</td>
            <td>Cociente de $x / $y</td>
          </tr>
          <tr>
            <td>%</td>
            <td>Módulo</td>
            <td>$x % $y</td>
            <td>Residuo de la división $x % $y</td>
          </tr>
        </tbody>
      </table>
      <pre><code>
  &lt;?php
    $x=10;
    $y=6;
    echo ($x + $y);    // outputs 16
    echo ($x - $y);    // outputs 4
    echo ($x * $y);    // outputs 60
    echo ($x / $y);    // outputs 1.6666666666667
    echo ($x % $y);    // outputs 4
  ?&gt;
      </code></pre>

      <h3>Operadores de Asignación</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Asignación</th>
            <th>Equivalencia</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>x = y</td>
            <td>x = y</td>
            <td>Asignación al operador de la izquierda del valor del operador de la derecha</td>
          </tr>
          <tr>
            <td>x += y</td>
            <td>x = x + y</td>
            <td>Suma</td>
          </tr>
          <tr>
            <td>x -= y</td>
            <td>x = x - y</td>
            <td>Resta</td>
          </tr>
          <tr>
            <td>x *= y</td>
            <td>x = x * y</td>
            <td>Multiplicación</td>
          </tr>
          <tr>
            <td>x /= y</td>
            <td>x = x / y</td>
            <td>División</td>
          </tr>
          <tr>
            <td>x %= y</td>
            <td>x = x % y</td>
            <td>Módulo</td>
          </tr>
        </tbody>
      </table>
      <pre><code>
  &lt;?php
    $x=10;
    echo $x; // outputs 10
    $y=20;
    $y += 100;
    echo $y; // outputs 120
    $z=50;
    $z -= 25;
    echo $z; // outputs 25
    $i=5;
    $i *= 6;
    echo $i; // outputs 30
    $j=10;
    $j /= 5;
    echo $j; // outputs 2
    $k=15;
    $k %= 4;
    echo $k; // outputs 3
  ?&gt;
      </code></pre>

      <h3>Operadores de cadenas</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Operador</th>
            <th>Nombre</th>
            <th>Ejemplo</th>
            <th>Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>.</td>
            <td>Concatenación</td>
            <td>$txt1 = "Hello" <br>$txt2 = $txt1 . " world!"</td>
            <td>$txt2 contiene "Hello world!"</td>
          </tr>
          <tr>
            <td>.=</td>
            <td>Concatenación y asignación</td>
            <td>$txt1 = "Hello" <br>$txt1 .= " world!"</td>
            <td>$txt1 contiene "Hello world!"</td>
          </tr>
        </tbody>
      </table>
      <pre><code>
  &lt;?php
    $a = "Hello";
    $b = $a . " world!";
    echo $b;   // outputs Hello world!
    $x="Hello";
    $x .= " world!";
    echo $x;  // outputs Hello world!
  ?&gt;
      </code></pre>

      <h3>Operadores de Incremento / Decremento</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Operador</th>
            <th>Nombre</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>++$x</td>
            <td>Pre-incremento</td>
            <td>Incrementa $x en uno, luego devuelve $x</td>
          </tr>
          <tr>
            <td>$x++</td>
            <td>Post-incremento</td>
            <td>Devuelve $x, luego incrementa $x en uno</td>
          </tr>
          <tr>
            <td>--$x</td>
            <td>Pre-decremento</td>
            <td>Decrementa $x en uno, luego devuelve $x</td>
          </tr>
          <tr>
            <td>$x--</td>
            <td>Post-decremento</td>
            <td>Devuelve $x, luego decrementa $x en uno</td>
          </tr>
        </tbody>
      </table>
      <pre><code>
  &lt;?php
    $x=10;
    echo ++$x;    // outputs 11
    $y=10;
    echo $y++;    // outputs 10
    $z=5;
    echo --$z;    // outputs 4
    $i=5;
    echo $i--;    // outputs 5
  ?&gt;
      </code></pre>
      <h3>Operadores de comparación</h3>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Operador</th>
            <th>Nombre</th>
            <th>Ejemplo</th>
            <th>Resultado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>==</td>
            <td>Igual</td>
            <td>$x == $y</td>
            <td>Verdadero si $x es igual a $y</td>
          </tr>
          <tr>
            <td>===</td>
            <td>Idéntico</td>
            <td>$x === $y</td>
            <td>Verdadero si $x es igual a $y y si son del mismo tipo</td>
          </tr>
          <tr>
            <td>!=</td>
            <td>Diferente</td>
            <td>$x != $y</td>
            <td>Verdadero si $x es diferente a $y</td>
          </tr>
          <tr>
            <td>&lt;&gt;</td>
            <td>Diferente</td>
            <td>$x &lt;&gt; $y</td>
            <td>Verdadero si $x es diferente a $y</td>
          </tr>
          <tr>
            <td>!==</td>
            <td>No idéntico</td>
            <td>$x !== $y</td>
            <td>Verdadero si $x no es igual a $y o bien si no son del mismo tipo</td>
          </tr>
          <tr>
            <td>&gt;</td>
            <td>Mayor que</td>
            <td>$x &gt; $y</td>
            <td>Verdadero si $x es mayor que $y</td>
          </tr>
          <tr>
            <td>&lt;</td>
            <td>Menor que</td>
            <td>$x &lt; $y</td>
            <td>Verdadero si $x es menor que $y</td>
          </tr>
          <tr>
            <td>&gt;=</td>
            <td>Mayor o igual que </td>
            <td>$x &gt;= $y</td>
            <td>Verdadero si $x es mayor o igual que $y</td>
          </tr>
          <tr>
            <td>&lt;=</td>
            <td>Menor o igual que</td>
            <td>$x &lt;= $y</td>
            <td>Verdadero si $x es menor o igual que $y</td>
          </tr>
        </tbody>
      </table>
    </article>

    <article class="tema">
      <h2>Sentencias Condicionales</h2>
      <p class="text-justify">
        Las sentencias condicionales se utilizan para realizar diferentes acciones dependiendo de diferentes condiciones.
      </p>
      <h3>If</h3>
      <p class="text-justify">
        La sentencia <code>if</code> se utiliza para ejecutar cierto código solamente si una condición específica es verdadera.
      </p>
      <p class="text-justify">
        <b>Sintaxis</b>:
      </p>
      <pre><code>
  if (condition) {
    code to be executed if condition is true;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 13</b>. Sentencia if
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $t=date("H");
        if ($t&lt;"20") {
           echo "Have a good day!";
        }
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>if - else</h3>
      <p class="text-justify">
        La sentencia <code>if</code> - <code>else</code> se utiliza para ejecutar cierto código si alguna condición es verdadera o algún otro código si la condición es falsa.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  if (condition) {
    code to be executed if condition is true;
  }
  else {
    code to be executed if condition is false;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 14.</b> Sentencia <code>if</code> - <code>else</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $t=date("H");
        if ($t&lt;"20") {
          echo "Have a good day!";
        }
        else {
          echo "Have a good night!";
        }
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <h3>if - elseif - else</h3>
      <p class="text-justify">
        La sentencia <code>if</code> - <code>elseif</code> - <code>else</code> se utiliza para seleccionar uno de varios bloques de código a ser ejecutado.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  if (condition) {
    code to be executed if condition is true;
  }
  elseif (condition) {
    code to be executed if condition is true;
  }
  else {
    code to be executed if condition is false;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 15</b>. Sentencia if - elseif - else
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $t=date("H");
        if ($t&lt;"10") {
          echo "Have a good morning!";
        }
        elseif ($t&lt;"20") {
          echo "Have a good day!";
        }
        else {
          echo "Have a good night!";
        }
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Ciclo While</h2>
      <p class="text-justify">
        Algunas veces cuando se escribe un programa, se necesita que cierto bloque de código se ejecute una y otra vez. En lugar de añadir varias líneas de código muy similar se puede
        utilizar un ciclo para realizar este tipo de tarea.
      </p>
      <p class="text-justify">
        El ciclo <code>while</code> repite la ejecución de cierto bloque de código siempre y cuando la condición especificada sea verdadera.
      </p>
      <p class="text-justify">
        <b>Sintaxis</b>:
      </p>
      <pre><code>
  while (condition is true) {
    code to be executed;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 16</b>. Ciclo while
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        $x=1;
        while($x&lt;=5) {
          echo "The number is: $x &lt;br&gt;";
          $x++;
        }
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Ciclo For</h2>
      <p class="text-justify">
        El ciclo <code>for</code> es utilizado cuando se sabe exactamente cuantas veces se debe repetir la ejecución de cierto código.
      </p>
      <p class="text-justify">
        <b>Sintaxis</b>:
      </p>
      <pre><code>
  for (init counter; test counter; increment counter) {
    code to be executed;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 17</b>. Ciclo For
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        for ($x=0; $x&lt;=10; $x++) {
          echo "The number is: $x &lt;br&gt;";
        }
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Funciones</h2>
      <p class="text-justify">
        El verdadero poder de PHP está en las funciones, ya que posee más de 1000 funciones listas para utilizarse. Sin embargo, es posible crear nuestras propias funciones.
      </p>
      <p class="text-justify">
        Una función es un fragmento de código que puede ser utilizado en varias ocasiones en el programa.
      </p>
      <p class="text-justify">
        <b>Sintaxis:</b>
      </p>
      <pre><code>
  function functionName() {
    code to be executed;
  }
      </code></pre>
      <p class="text-justify">
        El nombre de una función puede comenzar con cualquier letra o un guión bajo pero no con un número. Se recomienda nombrar una función por lo que hace.
      </p>
      <p class="text-justify">
        <b>Ejemplo 18</b>. Una función recibe y devuelve parámetros.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;?php
        function sum($x,$y) {
          $z=$x+$y;
          return $z;
        }
        echo "5 + 10 = " . sum(5,10) . "&lt;br&gt;";
        echo "7 + 13 = " . sum(7,13) . "&lt;br&gt;";
        echo "2 + 4 = " . sum(2,4);
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Manejo de Formularios</h2>
      <p class="text-justify">
        Las variables superglobales <code>$_GET</code> y <code>$_POST</code> se utilizan para recolectar datos de un formulario.
      </p>
      <p class="text-justify">
        <b>Ejemplo 19</b>. Formulario sencillo en HTML mediante <code>$_POST</code>
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE HTML&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Formulario en PHP&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;form action="welcome.php" method="post"&gt;
        Nombre: &lt;input type="text" name="name"&gt;&lt;br&gt;
        E-mail: &lt;input type="email" name="email"&gt;&lt;br&gt;
        &lt;input type="submit"&gt;
      &lt;/form&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        PHP
      </p>
      <pre><code>
  &lt;html&gt;
    &lt;body&gt;
      Bienvenido &lt;?php echo $_POST["name"]; ?&gt;&lt;br&gt;
      Su correo es: &lt;?php echo $_POST["email"]; ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Cuando el usuario llena el formulario y presiona el botón de <code>Submit</code>, los datos del formulario son procesados a un archivo PHP llamado <code>welcome.php</code>.
        Los datos son enviados por el método <code>HTTP POST</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 20</b>. Formulario sencillo en HTML mediante $_GET
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
&lt;!DOCTYPE HTML&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Formulario en PHP&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;form action="welcome.php" method="get"&gt;
      Nombre: &lt;input type="text" name="name"&gt;&lt;br&gt;
      E-mail: &lt;input type="email" name="email"&gt;&lt;br&gt;
      &lt;input type="submit"&gt;
    &lt;/form&gt;
  &lt;/body&gt;
&lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        PHP
      </p>
      <pre><code>
  &lt;html&gt;
    &lt;body&gt;
      Bienvenido &lt;?php echo $_GET["name"]; ?&gt;&lt;br&gt;
      Su correo es: &lt;?php echo $_GET["email"]; ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        El código en los ejemplos anteriores es muy simple, sin embargo falta lo más importante. Es necesario validar los datos del formulario para proteger el script de código malicioso.
      </p>
      <h3>GET vs. POST</h3>
      <p class="text-justify">
        Tanto <code>GET</code> como <code>POST</code> crean un arreglo que contiene pares de llaves y valor, donde las llaves son los nombres de los controles del formulario y los valores
        son los datos que ingresa el usuario en ellos.
      </p>
      <p class="text-justify">
        <code>$_GET</code> es un arreglo que variables que son pasadas al script mediante parámetros en el URL.
      </p>
      <p class="text-justify">
        <code>$_POST</code> es un arreglo de variables que son pasadas al script mediante el método HTTP POST.
      </p>
      <h3>Cuando utilizar GET</h3>
      <p class="text-justify">
        La información enviada por un formulario mediante el método <code>GET</code> es visible para todos, ya que todas las variables son desplegadas en la URL). Adicionalmente
        <code>GET</code> tiene una limitante en la cantidad de parámetros que se pueden enviar, que es de 2000 caracteres.
      </p>
      <p class="text-justify">
        Dado que las variables son desplegadas en la URL, es posible marcar como favorita una página específica dentro de un sistema Web.
      </p>
      <p class="text-justify">
        Éste método puede ser utilizado para enviar datos que no son críticos, nunca debe utilizarse para enviar contraseñas o algún tipo de información crítica.
      </p>
      <h3>Cuando utilizar POST</h3>
      <p class="text-justify">
        La información enviada por un formulario mediante el método POST es invisible para todos, todas las variables y su contenido son integrados dentro del cuerpo de la solicitud
        HTTP. Por otro lado, no tiene limitante en la cantidad de datos que se pueden enviar.
      </p>
      <p class="text-justify">
        Dado que las las variables no son mostradas en la URL, no es posible guardar como favorita una página dentro de un sistema Web.
      </p>
      <p class="text-justify">
        La mayoría de los desarrolladores prefieren utilizar el método POST para enviar datos.
      </p>
    </article>

    <article class="tema">
      <h2>Validación de Formularios con PHP</h2>
      <p class="text-justify">
        En esta sección haremos la validación de formularios que contengan campos de texto, botones radio y un botón de Enviar.
      </p>
      <p class="text-justify">
        Las reglas de validación del formulario son las siguientes:
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Campo</th>
            <th>Reglas de Validación</th>
            <th>Contenido</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Nombre</td>
            <td>Requerido</td>
            <td>Sólo contiene letras y caracteres</td>
          </tr>
          <tr>
            <td>Correo electrónico</td>
            <td>Requerido</td>
            <td>Debe contener una dirección válida.</td>
          </tr>
          <tr>
            <td>Sitio Web</td>
            <td>Opcional</td>
            <td>Si se especifica alguno, debe contener una dirección válida.</td>
          </tr>
          <tr>
            <td>Comentarios</td>
            <td>Opcional</td>
            <td>Campo multi-línea.</td>
          </tr>
          <tr>
            <td>Género</td>
            <td>Requerido</td>
            <td>Debe seleccionarse alguno.</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">
        <b>Ejemplo 21</b>. Validación del formulario: evitando código malicioso
      </p>
      <p class="text-justify">
        HTML + PHP
      </p>
      <pre><code>
  &lt;!DOCTYPE HTML&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Validación de Formulario en PHP&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]);
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?&gt;
      &lt;h2&gt;Ejemplo de validación de Formularios con PHP&lt;/h2&gt;
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
        Nombre: &lt;input type="text" name="name"&gt;
        &lt;br&gt;&lt;br&gt;
        E-mail: &lt;input type="text" name="email"&gt;
        &lt;br&gt;&lt;br&gt;
        Sitio Web: &lt;input type="text" name="website"&gt;
        &lt;br&gt;&lt;br&gt;
        Comentarios: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
        &lt;br&gt;&lt;br&gt;
        Género:
        &lt;input type="radio" name="gender" value="female"&gt;Femenino
        &lt;input type="radio" name="gender" value="male"&gt;Masculino
        &lt;br&gt;&lt;br&gt;
        &lt;input type="submit" name="submit" value="Submit"&gt;
      &lt;/form&gt;
      &lt;?php
        echo "&lt;h2&gt;Usted Ingresó:&lt;/h2&gt;";
        echo $name;
        echo "&lt;br&gt;";
        echo $email;
        echo "&lt;br&gt;";
        echo $website;
        echo "&lt;br&gt;";
        echo $comment;
        echo "&lt;br&gt;";
        echo $gender;
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <h3>$_SERVER[“PHP_SELF”]</h3>
      <p class="text-justify">
        La variable superglobal <code>$_SERVER[“PHP_SELF”]</code> devuelve el nombre del archivo del script que se encuentra ejecutándose. De esta forma <code>$_SERVER[“PHP_SELF”]</code>
        envía los datos del formulario a la página misma, en lugar de dirigirse a una página diferente. De ésta forma el usuario recibirá un mensaje de error en la misma página donde se
        encuentra el formulario.
      </p>
      <h3>htmlspecialchars()</h3>
      <p class="text-justify">
        La función <code>htmlspecialchars()</code> convierte caracteres especiales a entidades HTML. Ésto significa que reemplaza caracteres como <code>&lt;</code> y <code>&gt;</code> por
        <code>&amp;lt;</code> y <code>&amp;gt</code> respectivamente. Esto previene que posibles atacantes puedan hacer "exploiting" en el código utilizando inyección de código HTML o JavaScript
        en los formularios.
      </p>

      <h3>Proteger el código los formularios con PHP</h3>
      <p class="text-justify">
        La variable <code>$_SERVER["PHP_SELF"]</code> puede ser utilizada por hackers si no se protege el código. Si <code>PHP_SELF</code> es utilizada en la página un usuario puede ingresar
        una diagonal <code>/</code> y luego algún código <a href="https://es.wikipedia.org/wiki/Cross-site_scripting">Cross Site Scripting</a> que ejecutar.
      </p>
      <p class="text-justify">
        La primer cosa que haremos es pasar las variables a través de la función <code>htmlspecialchars()</code>. Ésta función evitará que el usuario inyecte código JavaScript, por ejemplo:
      </p>
      <pre><code>
  &lt;script&gt;location.href('http://www.hacked.com')&lt;/script&gt;
      </code></pre>
      <p class="text-justify">
        Cuando el contenido del formulario se pasa a través de la función, se sustituyen caracteres especiales evitando así su ejecución:
      </p>
      <pre><code>
  &amp;lt;script&amp;gt;location.href('http://www.hacked.com')&amp;lt;/script&amp;gt;
      </code></pre>
      <p class="text-justify">
        De esta forma el código se desplegará sin ser ejecutado.
      </p>
      <p class="text-justify">
        La función <code>test_input</code> hará la protección pertinente de los datos introducidos a través de los formularios:
      </p>
      <ol>
        <li>
          <p class="text-justify">Quitar los espacios no necesarios con la función <code>trim</code>.</p>
        </li>
        <li>
          <p class="text-justify">Quitar las diagonales <code></code> con la función <code>stripslashes</code>.</p>
        </li>
      </ol>
      <p class="text-justify">
        El primer <code>if</code> dentro del código verifica si <code>$_SERVER["REQUEST_METHOD"]</code> es igual a <code>POST</code>, lo cuál sólo será cierto una vez que el usuario
        haya presionado el botón <code>Submit</code>, cuando recién se ha cargado la página éste <code>if</code> será falso dado que el boton no ha sido presionado.
      </p>
    </article>

    <article class="tema">
      <h2>Validación de Formularios: Campos necesarios</h2>
      <p class="text-justify">
        Si se tiene un formulario en el que varios campos fueran necesarios para poder continuar. Antes del ejemplo anterior se especificó que en el formulario los campos Nombre, Correo
        Electrónico y Género son necesarios.
      </p>
      <p class="text-justify">
        De ésta forma se tienen que agregar algunas variables que guardarán un posible error en caso de que algún campo requerido  se encuentre vacío. También se agrega una validación
        en todas las variables <code>$_POST</code> para saber si se encuentran vacías. En caso de que la variable está vacía se almacena un mensaje de error en la variable correspondiente
        y si no lo están se envía su contenido a través de la función <code>test_input()</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 22</b>. Validación del formulario: evitando código malicioso + campos requeridos.
      </p>
      <pre><code>
  &lt;!DOCTYPE HTML&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Validación en PHP&lt;/title&gt;
      &lt;style&gt;
        .error {color: #FF0000;}
      &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;?php
        // Variables que contendrán un posible mensaje de error
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        // Variables que guardan el contenido de los campos del formulario
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Nombre necesario";
          } else {
            $name = test_input($_POST["name"]);
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email necesario";
          } else {
            $email = test_input($_POST["email"]);
          }
            if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
          }
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
          if (empty($_POST["gender"])) {
            $genderErr = "Genero necesario";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?&gt;
      &lt;h2&gt;Ejemplo de Validación de Formularios con PHP&lt;/h2&gt;
      &lt;p&gt;&lt;span class="error"&gt;* campo requerido.&lt;/span&gt;&lt;/p&gt;
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
        Name: &lt;input type="text" name="name"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        E-mail: &lt;input type="text" name="email"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Website: &lt;input type="text" name="website"&gt;
        &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Comment: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
        &lt;br&gt;&lt;br&gt;
        Gender:
        &lt;input type="radio" name="gender" value="female"&gt;Female
        &lt;input type="radio" name="gender" value="male"&gt;Male
        &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;input type="submit" name="submit" value="Submit"&gt;
      &lt;/form&gt;
      &lt;?php
        echo "&lt;h2&gt;Usted Ingresó:&lt;/h2&gt;";
        echo $name;
        echo "&lt;br&gt;";
        echo $email;
        echo "&lt;br&gt;";
        echo $website;
        echo "&lt;br&gt;";
        echo $comment;
        echo "&lt;br&gt;";
        echo $gender;
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Validación del formulario: Validando contenido</h2>
      <p class="text-justify">
        El siguiente paso en la validación consiste en validar lo que ingresó el usuario, quitar espacios innecesarios en los campos, validar si la dirección de correo y la dirección
        web tienen el formato correcto.
      </p>
      <p class="text-justify">
        <b>Ejemplo 23</b>. Validación de formularios: evitando código malicioso + campos requeridos + validación contenido.
      </p>
      <pre><code>
  &lt;!DOCTYPE HTML&gt;
  &lt;html&gt;
    &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Validación en PHP&lt;/title&gt;
    &lt;style&gt;
      .error {color: #FF0000;}
    &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;?php
        // Variables que contendrán un posible mensaje de error
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        // Variables que guardan el contenido de los campos del formulario
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Nombre necesario";
          } else {
            $name = test_input($_POST["name"]);
            // verificar si el nombre contiene solo letras y espacios
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Solo se permiten letras y espacios en blanco";
            }
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email necesario";
          } else {
            $email = test_input($_POST["email"]);
            // verificar si la direccion de correo es valida
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
            }
          }
          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // verifica si la URL es válida (la expresion regular también permite guiones en la URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&amp;@#\/%?=~_|!:,.;]*[-a-z0-9+&amp;@#\/%=~_|]/i",$website)) {
              $websiteErr = "URL con capacidades diferentes";
            }
          }
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
          if (empty($_POST["gender"])) {
            $genderErr = "Genero necesario";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?&gt;
      &lt;h2&gt;Ejemplo de Validación de Formularios con PHP&lt;/h2&gt;
      &lt;p&gt;&lt;span class="error"&gt;* campo requerido.&lt;/span&gt;&lt;/p&gt;
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
        Nombre: &lt;input type="text" name="name"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        E-mail: &lt;input type="text" name="email"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Website: &lt;input type="text" name="website"&gt;
        &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Comentario: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
        &lt;br&gt;&lt;br&gt;
        Género:
        &lt;input type="radio" name="gender" value="femenino"&gt;Femenino
        &lt;input type="radio" name="gender" value="masculino"&gt;Masculino
        &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;input type="submit" name="submit" value="Submit"&gt;
      &lt;/form&gt;
      &lt;?php
        echo "&lt;h2&gt;Usted Ingresó:&lt;/h2&gt;";
        echo $name;
        echo "&lt;br&gt;";
        echo $email;
        echo "&lt;br&gt;";
        echo $website;
        echo "&lt;br&gt;";
        echo $comment;
        echo "&lt;br&gt;";
        echo $gender;
      ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Validación de formulario: Mantener contenido de los campos</h2>
      <p class="text-justify">
        Sería deseable mantener el contenido de los campos del formulario si es el usuario ingresó no ingresó alguna información en el formato correcto. Para esto es necesario agregar código
        PHP dentro del atributo value en los campos deseados.
      </p>
      <pre><code>
  value="?&lt;?php echo $name;?&gt;"
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 24</b>. Validación de formularios: evitando código malicioso + campos requeridos + validación contenido.
      </p>
      <pre><code>
  &lt;!DOCTYPE HTML&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Validación en PHP&lt;/title&gt;
      &lt;style&gt;
        .error {color: #FF0000;}
      &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;?php
        // Variables que contendrán un posible mensaje de error
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        // Variables que guardan el contenido de los campos del formulario
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Nombre necesario";
          } else {
            $name = test_input($_POST["name"]);
            // verificar si el nombre contiene solo letras y espacios en blanco
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
              $nameErr = "Solo se permiten letras y espacios en blanco";
            }
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email necesario";
          } else {
            $email = test_input($_POST["email"]);
            // verificar si la direccion de correo es valida
            if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
              $emailErr = "Formato de dirección inválido";
            }
          }
          if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
            // verifica si la URL es válida (la expresion regular también permite guiones en la URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
              $websiteErr = "URL con capacidades diferentes";
            }
          }
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
          if (empty($_POST["gender"])) {
            $genderErr = "Genero necesario";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?&gt;
      &lt;h2&gt;Ejemplo de Validación de Formularios con PHP&lt;/h2&gt;
      &lt;p&gt;&lt;span class="error"&gt;* campo requerido.&lt;/span&gt;&lt;/p&gt;
      &lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?&gt;"&gt;
        Nombre: &lt;input type="text" name="name" value="&lt;?php echo $name;?&gt;"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $nameErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        E-mail: &lt;input type="text" name="email" value="&lt;?php echo $email;?&gt;"&gt;
        &lt;span class="error"&gt;* &lt;?php echo $emailErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Website: &lt;input type="text" name="website" value="&lt;?php echo $website;?&gt;"&gt;
        &lt;span class="error"&gt;&lt;?php echo $websiteErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        Comentario: &lt;textarea name="comment" rows="5" cols="40"&gt;&lt;/textarea&gt;
        &lt;br&gt;&lt;br&gt;
        Genero:
        &lt;input type="radio" name="gender"
        &lt;?php if (isset($gender) &amp;&amp; $gender=="femenino") echo "checked";?&gt;
        value="femenino"&gt;Femenino
        &lt;input type="radio" name="gender"
        &lt;?php if (isset($gender) &amp;&amp; $gender=="masculino") echo "checked";?&gt;
        value="masculino"&gt;Masculino
        &lt;span class="error"&gt;* &lt;?php echo $genderErr;?&gt;&lt;/span&gt;
        &lt;br&gt;&lt;br&gt;
        &lt;input type="submit" name="submit" value="Submit"&gt;
      &lt;/form&gt;
      &lt;?php
        echo "&lt;h2&gt;Usted Ingresó:&lt;/h2&gt;";
        echo $name;
        echo "&lt;br&gt;";
        echo $email;
        echo "&lt;br&gt;";
        echo $website;
        echo "&lt;br&gt;";
        echo $comment;
        echo "&lt;br&gt;";
        echo $gender;
    ?&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
