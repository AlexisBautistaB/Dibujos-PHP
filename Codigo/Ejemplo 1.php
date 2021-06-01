<?php
// ------------------------------------ Empieza sección de declaración de variables ----------------------------------------
    // Posición inicial de la imagen
    $x1 =       0;
    $y1 =       0;
    // Dimensiones de la imagen
    $x2 =       100;
    $y2 =       100;
    //Tamaño de borde
    $b = $x2/15;
    // Crear imagen a partir de la dimensión dada
    $imagen =   imagecreatetruecolor ( $x2, $y2 );
    // Colores a utilizar para crear mi logotipo
    $cFondo =   imagecolorallocate($imagen, 255 , 255 , 255 );
    $cFirma =   imagecolorallocate($imagen, 0   , 0   , 0   );

// ------------------------------------ Termina sección de declaración de variables ----------------------------------------
//--------------------------------------------------------------------------------------------------------------------------
// -------------------------------------- Empieza sección de trazos para mi firma ------------------------------------------
    imagefilledrectangle($imagen , $x1       , $y1        , $x2       , $y2                   , $cFondo                   );
    // Letra A
    imagesetthickness  ( $imagen , $b);
    imageline          ( $imagen , $x2/2     , $y2*1/12   , $x2*4/16  , $y2*12/15             , $cFirma                   );
    imageline          ( $imagen , $x2/2     , $y2*1/12   , $x2*17/22  , $y2*16/17             , $cFirma                   );
    imageline          ( $imagen , $x2/4     , $y2*22/50  , $x2*15/23  , $y2*6/19             , $cFirma                   );
    imageline          ( $imagen , $x2/7     , $y2*29/50  , $x2*17/21  , $y2*7/19              , $cFirma                   );
    //Datos Personales
    $b = $x2/60;
    $font = dirname(__FILE__) . '/fuente/fuente.TTF';
    imagettftext       ( $imagen  , $b*2.5 , 0 , $x2*1/50  , $y2*19/21 , $cFirma , $font , "Alexis Bautista Baeza" );
    imagettftext       ( $imagen  , $b*2   , 0 , $x2*1/50  , $y2*47/50 , $cFirma , $font , "1931117642" );
    imagettftext       ( $imagen  , $b*2   , 0 , $x2*1/50  , $y2*49/50 , $cFirma , $font , "Tecnologias Web -- Redes y telecomunicaciones -- UPP" );
   
// -------------------------------------- Termina sección de trazos para mi firma ------------------------------------------
//--------------------------------------------------------------------------------------------------------------------------
// -------------------------------------- Empieza sección de impresión de imagen -------------------------------------------
    // Indica el formato de la imagen
    header ( 'Content-Type:image/png' );
    // Crea e imprime imagen en formato PNG y guarda en un archivo externos(Opcional por mi jaja)
    imagepng ( $imagen );
    // Destructor de imagen
    imagedestroy ( $imagen );
    ?>
// -------------------------------------- Termina sección de impresión de imagen -------------------------------------------
