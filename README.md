# Funciones PHP para hacer dibujos en 2D

<p align="center">
<img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/Mi%20icono.png">
  <br><b>ALEXIS BAUTISTA BAEZA</b></p>
Cabe mencionar que en este repositorio no se ocupan todas las funciones para poder hacer dibujos en 2D.<br>
Para comenzar en los ejemplos que se encuentran en la carpeta Codigo existe una sección de declaración de variables a fin de tener un código más dinamico y en caso de modificar el valor de una variable, el demás codigo se adapte (Diseño responsivo).
<p align="center"><br>
<b>Ejemplo 1: </b><a href="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/Codigo/Ejemplo%201.php"> Lineas y letras</a>
<br><img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/Lineas%20y%20letras.png"><br>
  <b>Ejemplo 2: </b><a href="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/Codigo/CandyCrush.php"> Logotipo de Candy Crush</a>
<br><img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/ic_CandyCrush.png"><br>
Quizá no sea igual al logotipo original pero es similar</p>

Las funciones que se encuentran dentro de este repositorio se obtuvieron y pueden consultarse en el manual de PHP dando <a href="https://www.php.net/manual/es/">click aquí</a>.<br>
Este repositorio hace uso de algunas funciones del lenguaje PHP que nos servirán para poder crear una imagen en formato PNG como:<br><br>


<h3>imagecreatetruecolor ( int $ancho , int $alto ) : resource</h3>
Está función devuelve un identificador de imagen, la cual nos servirá para darle las dimensiones (x, y) y especificar el tamaño en pixeles de la futura imagen a crear.<br><br>
Ejemplo:<br>
<b> imagecreatetruecolor ( 100 , 150 );</b><br>
<i>Donde esta función nos servirá para crear una imagen más tarde de dimensiones de 100 pixeles de ancho(x) y 150 pixeles de largo(y).</i><br><br>


<h3>imagecolorallocate ( resource $imagen , int $R , int $G , int $B ) : int</h3>
Está función devuelve un número entero que es un identificador de color, el cual será creado a partir del identificador de imagen que se creó con imagecreatetruecolor y el color RGB.<br>
Se pueden crear las variables necesarias para cada color a utilizarse en la imagen futura.<br><br>
Ejemplo:<br>
$imagen = imagecreate(100, 150);<br>
<b> $colorBlanco = imagecolorallocate($imagen, 255, 255, 255);</b><br>
<i>Donde esta función nos servirá para crear un número identificador de un color para posteriormente utilizar.</i><br><br>


<h3>imageline ( resource $imagen , int $x1 , int $y1 , int $x2 , int $y2 , int $color ) : bool</h3>
Está función nos dibuja una linea a partir de cordenadas de una variable de imagecreatetruecolor(imagen), cordenadas x,y iniciales(x1, y1), cordenadas x,y finales(x2, y2) & un identificador de color previamente creado de la función imagecolorallocate.<br><br>
Ejemplo:<br>
$imagen = imagecreate(100, 150);<br>
$colorBlanco = imagecolorallocate($imagen, 255, 255, 255);<br>
$x1 = 10;<br>
$y1 = 10;<br>
$x2 = 90;<br>
$y2 = 140;<br>
<b> imageline($imagen, $x1, $y1, $x2, $y2, $colorBlanco);</b><br>
header ( 'Content-Type:image/png' );// Indica el formato de la imagen <br>
imagepng ( $imagen );// Crea e imprime imagen en formato PNG <br>
imagedestroy ( $imagen );// Destructor de imagen <br>
<i>Donde esta función dibuja una linea de color blanco de la posición 10,10 a 90,140.</i><br>
<p align="center">Resultado:<br>
<img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/linea.png">
</p><br><br>


<h3>imagerectangle ( resource $imagen , int $x1 , int $y1 , int $x2 , int $y2 , int $color ) : bool</h3>
Está función nos dibuja un rectangulo a partir de cordenadas de una variable de imagecreatetruecolor(imagen), cordenadas x,y iniciales(x1, y1), cordenadas x,y finales(x2, y2) & un identificador de color previamente creado de la función imagecolorallocate.<br><br>
Ejemplo:<br>
$imagen = imagecreate(100, 150);<br>
$colorBlanco = imagecolorallocate($imagen, 255, 255, 255);<br>
$x1 = 10;<br>
$y1 = 10;<br>
$x2 = 90;<br>
$y2 = 140;<br>
<b> imagerectangle($imagen, $x1, $y1, $x2, $y2, $colorBlanco);</b><br>
header ( 'Content-Type:image/png' );// Indica el formato de la imagen <br>
imagepng ( $imagen );// Crea e imprime imagen en formato PNG <br>
imagedestroy ( $imagen );// Destructor de imagen <br>
<i>Donde esta función dibuja un rectangulo de color blanco de la posición 10,10 a 90,140.</i><br>
<p align="center">Resultado:<br>
<img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/Rectangulo.png">
</p><br><br>

<h3>imageellipse ( resource $imagen , int $cx , int $cy , int $width , int $height , int $color ) : bool</h3>
Está función nos dibuja una elipse a partir de cordenadas de una variable de imagecreatetruecolor(imagen), ancho(cx), alto(cy), cordenadas x,y iniciales(x1, y1) & un identificador de color previamente creado de la función imagecolorallocate.<br><br>
Ejemplo:<br>
$imagen = imagecreate(100, 150);<br>
$colorBlanco = imagecolorallocate($imagen, 255, 255, 255);<br>
$x1 = 50;<br>
$y1 = 75;<br>
$cx = 90;<br>
$cy = 140;<br>
<b> imageellipse($imagen, $cx, $cy, $x2, $y2, $colorBlanco);</b><br>
header ( 'Content-Type:image/png' );// Indica el formato de la imagen <br>
imagepng ( $imagen );// Crea e imprime imagen en formato PNG <br>
imagedestroy ( $imagen );// Destructor de imagen <br>
<i>Donde esta función dibuja una elipse de color blanco de la posición central 50, 75 que en este ejercicio es el centro, además que la elipse tiene 90px de ancho y 140px de alto.</i><br>
<p align="center">Resultado:<br>
<img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/elipse.png">
</p><br><br>

<h3>imagepolygon ( resource $image , array $points , int $num_points , int $color ) : bool
</h3>
Está función nos dibuja una elipse a partir de cordenadas de una variable de imagecreatetruecolor(imagen), ancho(cx), alto(cy), cordenadas x,y iniciales(x1, y1) & un identificador de color previamente creado de la función imagecolorallocate.<br><br>
Ejemplo:<br>
$imagen = imagecreate(100, 150);<br>
$colorBlanco = imagecolorallocate($imagen, 255, 255, 255);<br>
$puntos = array(<br>
    10,50,<br>
    50,10,<br>
    90,50,<br>
    90,90,<br>
    50,130,<br>
    10,90<br>
);<br>
<b> imagepolygon($imagen, $puntos, 6, $colorBlanco);</b><br>
header ( 'Content-Type:image/png' );// Indica el formato de la imagen <br>
imagepng ( $imagen );// Crea e imprime imagen en formato PNG <br>
imagedestroy ( $imagen );// Destructor de imagen <br>
<i>Donde esta función dibuja una elipse de color blanco de la posición central 50, 75 que en este ejercicio es el centro, además que la elipse tiene 90px de ancho y 140px de alto.</i><br>
<p align="center">Resultado:<br>
<img src="https://github.com/AlexisBautistaB/Dibujos-PHP/blob/main/imagenes/Hexagono.png">
</p><br><br>
