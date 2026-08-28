#set par(justify: true)
#block[
#block[
= JavaScript
<javascript>
]
]
#block[
== Introducción
<introducción>
JavaScript es el lenguaje de programación de HTML y la Web. JavaScript
es fácil de aprender y es el lenguaje de programación más popular en el
mundo.

JavaScript es un lenguaje de programación que se utiliza principalmente
para crear páginas web dinámicas. Una página web dinámica es aquella que
incorpora efectos como texto que aparece y desaparece, animaciones,
acciones que se activan al pulsar botones y ventanas con mensajes de
aviso al usuario.

Técnicamente, JavaScript es un lenguaje de programación interpretado,
por lo que no es necesario compilar los programas para ejecutarlos. En
otras palabras, los programas escritos con JavaScript se pueden probar
directamente en cualquier navegador sin necesidad de procesos
intermedios.

La integración de JavaScript y HTML/XHTML es muy flexible, ya que
existen al menos tres formas para incluir código JavaScript en las
páginas web.

== Incluir JavaScript en el mismo documento
<incluir-javascript-en-el-mismo-documento>
El código JavaScript se encierra entre etiquetas `<script>` y se incluye
en cualquier parte del documento. Aunque es correcto incluir cualquier
bloque de código en cualquier zona de la página, se recomienda definir
el código JavaScript dentro de la cabecera del documento (dentro de la
etiqueta `<head>`).

#strong[Ejemplo 1]. JavaScript dentro del documento HTML: `<head>`

```html
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf8">
      <title>Mi primer proyecto</title>
      <script type="text/javascript">
        alert("Un mensaje de prueba");
      </script>
    </head>
    <body>
      <h1>Encabezado</h1>
      <p>Un párrafo de texto.</p>
    </body>
  </html>
      
```

#strong[Ejemplo 2]. JavaScript dentro del documento HTML: `<body>`

```html
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
  </head>
  <body>
    <p>Con JavaScript podemos mopdificar directamente HTML</p>
    <script>
      document.write("<h1>This is a heading</h1>");
      document.write("<p>This is a paragraph</p>");
    </script>
  </body>
  </html>
      
```

== Definir JavaScript en un archivo externo
<definir-javascript-en-un-archivo-externo>
Las instrucciones JavaScript se pueden incluir en un archivo externo de
tipo JavaScript que los documentos XHTML enlazan mediante la etiqueta
`<script>`. Se pueden crear todos los archivos JavaScript que sean
necesarios y cada documento XHTML puede enlazar tantos archivos
JavaScript como necesite.

#strong[Ejemplo 3]. JavaScript en un archivo externo: `codigo.js`.

=== Archivo HTML: `ejemplo2.html`
<archivo-html-ejemplo2.html>
```html
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="js/codigo.js"></script>
  </head>
  <body>
    <h1>JS en un archivo externo</h1>
  </body>
  </html>
      
```

=== Archivo JavaScript: `codigo.js`
<archivo-javascript-codigo.js>
```js
  alert("Un mensaje de prueba");
      
```

=== Incluir JavaScript en encabezado
<incluir-javascript-en-encabezado>
Este último método es el menos utilizado, ya que consiste en incluir
trozos de JavaScript dentro del head de la página:

```html
  <p onclick="alert('Un mensaje de prueba')">Un párrafo de texto.</p>
      
```

Existe la etiqueta \<noscript\> que nos permite mostrar un mensaje
cuando Javascript está desactivado.

```html
  <noscript>Esta página requiere JavaScript y está desactivado</noscript>
  
```

#strong[Ejemplo 4]. Función JavaScript en `<head>`

```html
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Fecha del Sistema</title>
      <script>
        function miFuncion() {
          document.getElementById("demo").innerHTML = Date();
        }
      </script>
    </head>
    <body>
      <h1>Mi primer JavaScript</h1>
      <p>Presione el botón para obtener la fecha del sistema.</p>
      <p id="demo"></p>
      <button type="button" onclick="miFuncion()">Presione</button>
    </body>
  </html>
      
```

#strong[Ejemplo 5]. Función JavaScript en `<body>`

```html
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Fecha del Sistema</title>
    </head>
    <body>
      <h1>Mi primer JavaScript</h1>
      <p>Presione el botón para obtener la fecha del sistema.</p>
      <p id="demo"></p>
      <button type="button" onclick="miFuncion()">Presione</button>
      <script>
        function miFuncion() {
          document.getElementById("demo").innerHTML = Date();
        }
      </script>
    </body>
  </html>
      
```

#strong[Ejemplo 6]. Función en archivo JavaScript externo.

Archivo HTML:

```html
  <!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Fecha del Sistema</title>
    <script src="script.js"></script>
    </head>
    <body>
      <h1>Mi primer JavaScript</h1>
      <p>Presione el botón para obtener la fecha del sistema.</p>
      <p id="demo"></p>
      <button type="button" onclick="miFuncion()">Presione</button>
    </body>
  </html>
      
```

Archivo JavaScript:

```js
  function myFunction() {
    alert("Archivo JS externo!");
    document.getElementById("demo").innerHTML = Date();
  }
      
```

JavaScript puede reaccionar a eventos que ocurran en el navegador.

#strong[Ejemplo 7]. Cambiar el contenido del documento.

Archivo HTML:
```html
  <!DOCTYPE html>
  <html>
    <body>
      <h1>Cambiar contenido HTML</h1>
      <p id="demo">JavaScript puede cambiar el contenido HTML.</p>
      <script type="text/javascript" src="js/codigo.js"></script>
      <button type="button" onclick="myFunction()">Presioname!</button>
    </body>
</html>
      
```

Archivo JS:

```js
  function myFunction() {
    x=document.getElementById("demo");  // Buscar elemento
    x.innerHTML="Nuevo Contenido";    // Cambiar contenido
  }
      
```

#strong[Ejemplo 8]. Cambiar imágenes en HTML

Archivo HTML:

```html
  <!DOCTYPE html>
  <html>
    <head>
      <html lang="es">
      <meta charset="UTF-8">
      <title>Document</title>
      <script type="text/javascript" src="js/codigo.js"></script>
    </head>
  <body>
      <img id="miImagen" onclick="cambiarImagen()" src="src/pic_bulboff.gif" width="100" height="180">
      <p>Presione para encender o apagar.</p>
  </body>
  </html>
      
```

Archivo JavaScript:

```js
  function cambiarImagen() {
    element=document.getElementById('miImagen')
    if (element.src.match("bulbon")) {
      element.src="src/pic_bulboff.gif";
    }
    else {
      element.src="src/pic_bulbon.gif";
    }
  }
      
```

== Comentarios en JavaScript
<comentarios-en-javascript>
Los comentarios en JavaScript pueden hacerse por línea o por un bloque
de código.

- Todos los caracteres que se encuentren después de `//` hasta el final
  de la línea serán ignorados.

- Todo el código que se esté entre `/*` y `*/` será ignorado, aunque la
  apertura y la clausura se encuentren en líneas diferentes.

#strong[Ejemplo 9]. Comentario por línea

```js
  // Escribir a un header:
  document.getElementById("miH1").innerHTML="Bienvenido";

  // Escribir en un párrafo:
  document.getElementById("miP").innerHTML="Éste es mi primer párrafo.";
      
```

#strong[Ejemplo 10]. Comentario en bloque

```js
  /*
      El código siguiente escribirá un texto al encabezado y a un párrafo,
      y será el inicio de la página
  */

  document.getElementById("miH1").innerHTML="Bienvenido";
  document.getElementById("miP").innerHTML="Éste es mi primer párrafo.";
      
```

== Variables
<variables>
Las variables en JS son contenedores de información por lo que no se
declaran ni tienen tipo de dato. Para indicar que se utilizará una
variable se debe utilizar la palabra clave `var`.

#strong[Ejemplo 11]. Variables en JS

```js
  var iva = 16                              // Variable tipo entero
  var total = 234.65                        // Variable tipo flotante
  var letra = ‘c’                           // Variable tipo caracter
  var mensaje = "Bienvenido al sitio Web"   // Variable tipo cadena
  var pregunta = true                       // Variable tipo booleano
  var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];
  var diaSeleccionado = dias[0];            // Lunes
  var otroDia = dias[5];                    // Sábado
      
```

== Operadores Matemáticos
<operadores-matemáticos>
JavaScript tiene las operaciones matemáticas básicas que se encuentran
en cualquier lenguaje de programación.

```js
  var numero1 =10;
  var numero2 = 5;

  resultado = numero1 + numero2;       // suma
  resultado = numero1 - numero2;       // resta
  resultado = numero1 * numero2;       // multiplicación
  resultado = numero1 / numero2;       // división
  resultado = numero1 % numero2;       // residuo
      
```

== Funciones
<funciones>
Para utilizar funciones en JavaScript se debe declarar la función con la
palabra clave `function`. En su declaración se debe especificar si la
función recibe argumentos y en el contenido de la función se debe
especificar si la función devuelve un resultado con la palabra clave
`return`.

#strong[Ejemplo 12]. Calculo de impuesto. Utilización de variables y
funciones con JavaScript

Archivo HTML:

```html
  <!doctype html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Calcula Precio</title>
      <script type="text/javascript" src="script/precio.js"></script>
    </head>
    <body>
      <h1>Calcular los precios</h1>
      <p>Calculamos el precio total de $210 y 13%</p>
      <button type="button" onclick="calculaPrecioTotal(210,13)">
        Calcular
      </button>
      <p id="resultado"></p>
    </body>
  </html>
      
```

Archivo JS

```js
  function calculaPrecioTotal(precio, porcentajeImpuestos) {
    var gastosEnvio = 10;
    var precioConImpuestos = (1 + porcentajeImpuestos/100) * precio;
    var precioTotal = precioConImpuestos + gastosEnvio;
    document.getElementById("resultado").innerHTML = precioTotal;
  }
      
```

== Estructuras de control de flujo
<estructuras-de-control-de-flujo>
=== If
<if>
Sintaxis:

```js
  if(condición) {
    ...
  }
      
```

Ejemplo:

```js
  var w = 3;
  if(w >= 2) {
    alert("3 es mayor a 2");
  }
      
```

=== If - Else
<if---else>
Sintaxis:

```js
  if(condición) {
    ...
  }
  else {
    ...
  }
      
```

Ejemplo:

```js
  var edad = 18;
  if(edad >= 18) {
    alert("Eres mayor de edad");
  }
  else {
    alert("¡Aún no puedes comprar cerveza!");
  }
      
```

=== Switch
<switch>
Sintaxis:

```js
  switch(n) {
  case 1:
    Bloque 1
    break;
  case 2:
    Bloque 2
    break;
  default:
    Código a ser ejecutado si n es diferente a 1 y 2
  }
      
```

Ejemplo:

```js
  var d=new Date();
  theDay=d.getDay();

  switch (theDay) {
  case 5:
    document.write("Viernes");
    break;
  case 6:
    document.write("Sabado");
    break;
  case 0:
    document.write("Domingo");
    break;
  default:
    document.write("Trabajar");
  }
      
```

=== For
<for>
Sintaxis:

```js
  for(condición inicial; condición final; incremento) {
    Instrucciones
    ...
  }
      
```

Ejemplo:

```js
  var i=0;
  for (i=0;i<=15;i++) {
    document.write("El numero es  " + i);
    document.write("<br>");
  }
      
```

=== While
<while>
Sintaxis:

```js
  while(condición de paro) {
    Instrucciones
    ...
  }
      
```

Ejemplo:

```js
  i=1;
  while (i<=8) {
    document.write("i es " + i);
    document.write("<br>");
    i++;
  }
      
```

== Objetos
<objetos>
Casi todo en JS puede ser un objeto: cadenas, funciones, arreglos,
fechas, etc. En JS los objetos son datos, con propiedades y métodos.

#strong[Ejemplo]: Crear un objeto del usuario.

```html
  <!DOCTYPE html>
  <html>
    <body>
      <script>
        var person=new Object();

        person.firstname="John";
        person.lastname="Doe";
        person.age=50;
        person.eyecolor="blue";

        document.write(person.firstname + " is " + person.age + " years old.");
      </script>
    </body>
  </html>
      
```

Para acceder a una propiedad del objeto se debe hacer referencia al
nombre del objeto y al nombre del método dentro del mismo.

```js
  nombreObjeto.nombrePropiedad
      
```

Tal y como en Java, los tipos de datos son instancias de objetos que
heredan métodos útiles. Por ejemplo:

```js
  var message="Hello world!";
  var x=message.toUpperCase();
  var y=message.length;
      
```

== Formularios de HTML y JavaScript
<formularios-de-html-y-javascript>
#strong[Ejemplo 13.] Cálculo del factorial de un número ingresado a
través de un formulario.

```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Factorial Cíclico</title>
      <script>
          function borrar() {
              document.getElementById("resultado").innerHTML = ""
              console.log("Borrado")
          }

          function factorial() {
              valor = document.getElementById("numero").value
              var x = parseInt(valor)
              console.log("Llamamos a la función cíclica")
              factorialC(x)
              console.log(x)
          }

          function factorialC(x) {
              var f = 1
              for(i=1; i<=x; i++) {
                  f*=i
                  console.log(f)
              }
              salida = x + "! = " + f
              document.getElementById("resultado").innerHTML = salida
          }
      </script>
  </head>
  <body>
      <h1>Factorial Cíclico</h1>
      <p>Ingrese un número entero positivo.</p>
      <form action="">
          <input type="number" min="0" id="numero">
      </form>
      <button onclick="factorial()">Calcular</button>
      <button onclick="borrar()">Borrar</button>
      <p id="resultado"></p>
  </body>
  </html>      
```

#strong[Ejemplo 14.] Cálculo de la serie de ULAM, ingresando un número
desde un formulario.

```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ULAM</title>
      <script>
          function ulam() {
              var y = ""
              // Borrar el contenido del párrafo
              document.getElementById("serie").innerHTML = y

              x = document.getElementById("numero").value
              console.log(x)
              var valor = parseInt(x)
          
              while(valor != 1) {
                  if(valor % 2 == 0)
                      valor /= 2
                  else
                      valor = 3*valor + 1
                  console.log(valor)

                  y = y + "<br>" + valor
                  document.getElementById("serie").innerHTML = y
              }            
          }

          function borrar() {
              // Borrar el contenido del párrafo
              document.getElementById("serie").innerHTML = ""
          }
      </script>
  </head>
  <body>
      <h1>Serie de ULAM</h1>
      <p>Ingrese un número entero positivo.</p>
      <form action="">
          <input type="number" min="1" id="numero">
      </form>
      <button onclick="ulam()">Calcular</button>
      <button onclick="borrar()">Borrar</button>
      <h3>Resultado de la serie</h3>
      <p id="serie">asd</p>
  </body>
  </html>      
```

#strong[Ejemplo 15.] Serie de Fibonacci. Obtener la #emph[n]-ésima cifra
de la serie obteniendo el número #emph[n] desde un formulario.

```html
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Fibonacci Cíclico</title>
  </head>
  <body>
      <h1>Serie de Fibonacci (versión cíclica)</h1>
      <p>Ingrese un número positivo, será la cantidad de cifras de la serie.</p>
      <form action="">
          <input type="number" min="0" id="numero">
      </form>
      <button onclick="fib()">Calcular</button>
      <p id="salida"></p>
      <script>
          function fib() {
              valor = document.getElementById("numero").value
              x = parseInt(valor)
              console.log(x)

              f0=0
              f1=1

              salida = ""

              for(i=0; i<=x; i++) {
                  f=f0+f1
                  f0 = f1
                  f1 = f
                  console.log(f)
                  salida = salida + "<br>" + f
              }
              document.getElementById("salida").innerHTML = salida
          }
      </script>
  </body>
  </html>      
```

#strong[Ejemplo 16]. Uso de formularios y JavaScript

HTML:

```html
  <!doctype html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Document</title>
      <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
      <h1>Ingrese sus datos:</h1>
      <form>
      First name: <input type="text" name="firstname" id="nombre"><br>
      Last name: <input type="text" name="lastname" id="apellido"><br>
      Password: <input type="password" name="pwd" id="passwd"><br>
      <input type="radio" name="sex" id="macho">Male<br>
      <input type="radio" name="sex" id="hembra">Female<br>
      </form><br>
      <button type="button" onclick="hola()">Enviar</button>
      <p id="resultado"></p>
    </body>
  </html>
      
```

JavaScript:

```js
  function hola() {
    x = document.getElementById("nombre").value;
    x = x + ", " + document.getElementById("apellido").value;

    if (document.getElementById("macho").checked) {
      x = x + ", macho";
    } else if (document.getElementById("hembra").checked) {
      x = x + ", hembra";
    };

    x = x + ", tu contraseña es: " + document.getElementById("passwd").value;
    document.getElementById("resultado").innerHTML = x;
  }
      
```

#strong[Ejemplo 17]. Formularios y tablas dinámicas.

HTML:

```html
  <!doctype html>
  <html lang="es">
    <head>
      <meta charset="UTF-8">
      <title>Mi sistema</title>
      <link rel="stylesheet" type="text/css" href="css/tablasFormulario.css">
      <script type="text/javascript" src="script/tablas.js"></script>
    </head>
    <body>
      <h1>Registro de Videojuegos</h1>
      <form>
        Nombre: <input type="text" id="nombre"><br>
        Publisher: <input type="text" id="pub"><br>
        <h2>Consola:</h2>
        <input type="checkbox" id="360">XBOX 360<br>
        <input type="checkbox" id="ps3">PS3<br>
        <input type="checkbox" id="wii">Wii<br><br>
        <input type="radio" name="estado" id="nuevo">Nuevo<br>
        <input type="radio" name="estado" id="usado">Usado<br>
        <h2>Fecha adquisición:</h2>
        <input type="date" id="fecha">
        <h2>Portada</h2>
          <input type="file" id="portada">
      </form>
      <button type="button" onclick="registrar()">Registrar</button>
      <table id="consolas"></table>
    </body>
  </html>
      
```

CSS:

```css
  body {
    background: #d4a9a9;
    margin: 50px auto 50px auto;
    width: 700px;
  }
  h1 {
    color: gray;
    border: 1px solid white;
    font-family: Helvetica;
    padding: 10px;
    margin-bottom: 50px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.8);
    box-shadow: 5px 5px 7px rgba(0,0,0,0.8);
  }
  #consolas {
    font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
    width: 100%;
    border-collapse: collapse;
    text-align: center;
  }
  #consolas td, #consolas th {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
  }
  #consolas th {
    font-size: 1.1em;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
  }
  #consolas tr.renglon1 td {
    color: #000000;
    background-color: #EAF2D3;
  }
  #consolas tr.renglon2 td {
    color: #000000;
    background-color: white;
  }
      
```

JS:

```js
  var registro = "<tr><th>Nombre del Juego</th><th>Publisher</th><th>Consola</th>
    <th>Estado</th><th>Fecha adquisición</th><th>Portada</th></tr>";
  var estilo=0;

  function registrar() {
    /* Validación de que todos los campos del formulario han sido llenados */
    if (document.getElementById("nombre").value == false) {
      alert("Nombre vacío. Debes llenar todos los campos");
    } else if (document.getElementById("pub").value == false) {
      alert("Publisher vacío. Debes llenar todos los campos");
    } else {
      /* Si todos los campos han sido llenados se prosigue con el registro */
      /* Incio de un nuevo renglón en la tabla */
      /* Asignación de estilo independiente a los renglones */
      if (estilo%2 == 0) {
        registro = registro + "<tr class=\"renglon1\">";
      } else {
        registro = registro + "<tr class=\"renglon2\">";
      }
      /* Nombre del juego */
      x = document.getElementById("nombre").value;
      registro = registro + "<td>" + x + "</td>";

      /* Publisher del juego */
      x = document.getElementById("pub").value;
      registro = registro + "<td>" + x + "</td>";

      /* Finalización del renglón de la tabla */
      registro = registro + "</tr>";
      document.getElementById("consolas").innerHTML = registro;

      /* Limpiar los campos */
      document.getElementById("nombre").value = "";
      document.getElementById("pub").value = "";
      document.getElementById("360").checked = false;
      document.getElementById("ps3").checked = false;
      document.getElementById("wii").checked = false;
      document.getElementById("nuevo").checked = false;
      document.getElementById("usado").checked = false;
      document.getElementById("fecha").value = false;
      document.getElementById("portada").value = null;

      /* Se alterna el estilo de los renglones */
      estilo = estilo + 1;
    }
  }
      
```

#strong[Ejercicio 18.] Extracción de valores de input `radio`.

HTML

```html
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <script type="text/javascript" src="extraer.js"></script>
  </head>
  <body>
    <h1>Formulario tipo Radio</h1>
    <p>Extracción de valor del imput tipo radio</p>
    <h2>Elija su genero:</h2>
    <form action="">
      <label for="mas">Masculino:</label>
      <input type="radio" name="genero" value="Masculino" id="mas"> <br>
      <label for="fem">Femenino:</label> 
      <input type="radio" name="genero" value="Femenino" id="fem"> <br>
      <label for="lgbti">LGBTI:</label>
      <input type="radio" name="genero" value="LGBTI" id="lgbti"> <br>
      <label for="none">Ninguno:</label>
      <input type="radio" name="genero" value="Ninguno" id="none"> <br>
      <label for="otro">Otro: </label>
      <input type="radio" name="genero" value="Otro" id="otro"> <br>
    </form>
    <button onclick="extraccion()">Seleccionar</button>
    <p id="resultado"></p>
  </body>
  </html>
```

JS

La primer forma de extraer el valor del selector elegido. El método
clásico y manual de extracción.

```js
    function extraccion() {

    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Primer método: clásico
    for(i=0; i<g.length; i++) {
      if(g[i].checked) {
        genero = g[i].value;
        console.log(genero);
        cad = "<p>Su genero es " + genero + "</p>";
      }
    }
        
    if(genero!=null)
        y.innerHTML = cad;
    else
        y.innerHTML = "<p>Seleccione una opción</p>"; 
    }
      
```

#strong[Ejercicio 19.] La segunda forma de extraer el valor del selector
elegido. Una mejora al método clásico.

```js
  function extraccion() {

  var g = document.getElementsByName("genero");
  var y = document.getElementById("resultado");
  var cad = "";
  var genero;

  // Segundo método: mejora del clásico
  x = document.querySelector('input[name=genero]:checked');
  if(x != null) {
      genero = x.value;
      console.log(genero) 
      cad = "<p>" + genero + "</p>";
  }
      
  if(genero!=null)
      y.innerHTML = cad;
  else
      y.innerHTML = "<p>Seleccione una opción</p>"; 
  }
      
```

#strong[Ejercicio 20.] La tercer forma de extraer el valor del selector
elegido. Una forma más práctica.

```js
  function extraccion() {

  var g = document.getElementsByName("genero");
  var y = document.getElementById("resultado");
  var cad = "";
  var genero;

  // Tercer método
  z = document.querySelector('input[name=genero]:checked');
  if(z!=null) {
    genero = z.value;
    console.log(genero);
    cad = "<p>Su genero es " + genero + "</p>";
  }

  if(genero!=null)
      y.innerHTML = cad;
  else
      y.innerHTML = "<p>Seleccione una opción</p>"; 

  }              
```

#strong[Ejemplo 21.] Extracción de valores input `checkbox`.

HTML

```html
  <!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkbox</title>
    <script type="text/javascript" src="extraerCheckbox.js"></script>
  </head>
  <body>
    <h1>Medio transporte</h1>
    <p>Seleccione su medio de transporte predilecto.</p>
    <form action="">
      <input type="checkbox" name="transporte" value="Automovil" id="auto">
      <label for="auto">Automóvil</label> 
      <br>
      <input type="checkbox" name="transporte" value="Motocicleta" id="moto">
      <label for="moto">Motocicleta</label>
      <br>
      <input type="checkbox" name="transporte" value="Bicicleta" id="bici">
      <label for="bici">Bicicleta</label>
      <br>
      <input type="checkbox" name="transporte" value="Transporte Público" id="trans">
      <label for="trans">Transporte Público</label>
      <br>
      <input type="checkbox" name="transporte" value="Otro" id="otro">
      <label for="otro">Otro</label>
    </form>
    <button onclick="proceso()">Enviar</button>
    <p id="resultado"></p>
  </body>
  </html>      
```

La primer forma de extraer el valor del selector elegido. El método
clásico y manual de extracción.

```js
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Primer método: clásico
    for(i=0; i<x.length; i++) {
      if(x[i].checked) {
        transporte = x[i].value;
        console.log(transporte);
        cad = cad + "<p>" + transporte + "</p>";
      }
    }

    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "<p>Seleccione una opción</p>";
  } 
```

#strong[Ejercicio 22.] La segunda forma de extraer el valor del selector
elegido. Una mejora al método clásico.

```js
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Segundo método: mejora del clásico
    for(i of x) {
      if(i.checked) {
        transporte = i.value;
        console.log(transporte);
        cad = cad + "<p>" + transporte + "</p>";
      }
    }
    
    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "<p>Seleccione una opción</p>";
  }        
```

#strong[Ejercicio 23.] La tercer forma de extraer el valor del selector
elegido. Una forma más práctica.

```js
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Tercer método
    z = document.querySelectorAll('input[name=transporte]:checked');
    for(var v of z) {
      transporte = v.value;
      console.log(transporte);
      cad = cad + "<p>" + transporte + "</p>";
    }
    
    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "<p>Seleccione una opción</p>";
  }        
```

== Manejo de Errores: Throw - Try - Catch
<manejo-de-errores-throw---try---catch>
Cuando se ejecuta código JavaScript pueden ocurrir diferentes tipos de
errores:

- errores de dedo del programador,

- palabras clave mal escritas o no existentes en el navegador,

- ingreso de datos incorrectos, por el usuario o alguna entidad de
  software

- errores imprevistos

Cuando ocurre un error, normalmente JavaScript se detiene y genera un
mensaje de error. El término técnico de esta situación es: JavaScript
arroja un error.

El parámetro `try` permite definir un bloque de código y verificar
errores mientras se ejecuta.

El parámetro `catch` permite definir la acción que se llevará a cabo si
ocurre un error en el bloque de código definido en `try`.

En JavaScript los parámetros `try` y `catch` se escriben en pares.

Sintaxis:

```js
  try {
    // Líneas de código a verificar
  }
  catch(err) {
    // Manejo de errores en las líneas anteriores
  }
```

#strong[Ejemplo 24]. Try - Catch

HTML:

```html
  <!DOCTYPE html>
  <html>
    <head>
      <script type="text/javascript" src="script/error.js"></script>
    </head>
    <body>
      <input type="button" value="View message" onclick="message()" />
    </body>
  </html>
```

JS:

```js
  var txt="";
  function message() {
    try {
      alret("Welcome guest!");
    }
    catch(err) {
      txt="La página tiene un error\n\n";
      txt+="Descripción del Error: " + err.message + "\n\n";
      alert(txt);
    }
  }
```

El parámetro `throw` permite crear definir errores al programador, la
forma correcta es crear o #strong[lanzar una excepción].

Si se utiliza en conjunto con `try-catch` se puede controlar el flujo
del programa y generar mensajes de error personalizados.

Sintaxis:

```js
  throw excepción 
```

La excepción puede ser una cadena, numero, booleano u objeto.

#strong[Ejemplo 25]. Verificar el valor ingresado por el usuario.

HTML:

```html
  <!DOCTYPE html>
  <html>
    <head>
            <meta charset="utf-8">
            <script type="text/javascript" src="js/error.js"></script>
    </head>
    <body>
            <h1>JavaScript</h1>
            <p>Introduzca un número entre 5 y 10:</p>
            <input id="numero" type="text">
            <button type="button" onclick="funcion()">Ingresar</button>
            <p id="mensaje"></p>
    </body>
  </html>
```

JS:

```js
  function funcion() {
    var y=document.getElementById("mensaje");
    y.innerHTML = "";
    try {
      var x=document.getElementById("numero").value;
      if(x=="")    throw "Campo vacío";
      if(isNaN(x)) throw "No es un número";
      if(x>10)     throw "Número mayor";
      if(x<5)      throw "Número menor";
    }
    catch(err) {
      y.innerHTML="Error Capa 8: " + err + ".";
    }
    if (x>=5 && x<=10) {
      y.innerHTML="¡Bravo!, no era tan difícil, ¿o si?";
    }
  }      
```

JavaScript puede ser utilizado para validar formularios HTML antes de
ser enviados al servidor. Lo típico que se verifica con JS antes de ser
enviado puede ser:

- Campos vacíos

- Direcciones válidas de correo

- Fechas válidas

- Texto en campos numéricos o viceversa.

#strong[Ejemplo 26]. Validar campos de texto.

HTML:

```html
  <!DOCTYPE html>
  <html>
    <head>
      <title>Validación formularios</title>
      <meta charset="utf-8">
      <script type="text/javascript" src="js/validarFormulario.js"></script>
    </head>
    <body>
      <form name="miFormulario" action="index.html" onsubmit="return validarFormulario()"
        method="post">
        Nombre: <input type="text" name="nombre">
        <input type="submit" value="Submit">
      </form>
    </body>
  </html> 
```

JS:

```js
  function validarFormulario() {
    var x = document.forms["miFormulario"]["nombre"].value;
    if (x == null || x == "") {
      alert("Debe llenar el campo nombre");
      return false;
    } else {
      alert("Todo bien")
      return true;
    };
  }      
```

#strong[Ejemplo 27]. Validación de dirección de correo electrónico

HTML:

```html
  <!DOCTYPE html>
  <html>
    <head>
      <title>Sistema de Registro</title>
      <meta charset="utf-8">
      <script type="text/javascript" src="js/validarMail.js"></script>
    </head>
    <body>
      <form name="miFormulario" action="index.html" onsubmit="return validarMail();" method="post">
        Email: <input type="text" name="email">
        <input type="submit" value="Ingresar correo">
      </form>
    </body>
  </html>
```

JS:

```js
  function validarMail() {
    var x=document.forms["miFormulario"]["email"].value;
    var posArroba=x.indexOf("@");
    var posPunto=x.lastIndexOf(".");

    if (posArroba < 1 || posPunto < posArroba+2 || posPunto+2 >= x.length) {
      alert("Dirección con capacidades diferentes");
      return false;
    }
    else {
      alert("Todo bien");
      return true;
    }
  } 
```
]