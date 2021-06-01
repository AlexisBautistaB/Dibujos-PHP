<?php
// ------------------------------------ Empieza sección de declaración de variables ----------------------------------------
    // Posición inicial de la imagen
    $x1 =       0;
    $y1 =       0;
    // Dimensiones de la imagen
    $x2 =       600;
    $y2 =       600;
    //Tamaño de borde
    $b = $x2/95;
    // Crear imagen a partir de la dimensión dada
    $imagen =   imagecreatetruecolor ( $x2, $y2 );
    // Colores principales a utilizar para crear el logotipo
    $cFondo =   imagecolorallocate($imagen, 8   , 205 , 231 );
    $cFirma =   imagecolorallocate($imagen, 0   , 0   , 0   );
    $cGalleta = imagecolorallocate($imagen, 87  , 35  , 6   );
    $cDulceR =  imagecolorallocate($imagen, 226 , 19  , 19  );
    $cDulceN =  imagecolorallocate($imagen, 255 , 94  , 0   );
    // Colores de las chispasen la galleta a utilizar
    $ccve =     imagecolorallocate($imagen, 57  , 148 , 4   );
    $ccrs =     imagecolorallocate($imagen, 228 , 78  , 190 );
    $ccrj =     imagecolorallocate($imagen, 226 , 19  , 19  );
    $ccaz =     imagecolorallocate($imagen, 78  , 180 , 228 );
    $ccam =     imagecolorallocate($imagen, 240 , 243 , 41  );
    $ccbl =     imagecolorallocate($imagen, 255 , 255 , 255 );

// ------------------------------------ Termina sección de declaración de variables ----------------------------------------
//--------------------------------------------------------------------------------------------------------------------------
// -------------------------------------- Empieza sección de trazos para el icono ------------------------------------------

    // Rectangulo de fondo color azul celeste
    imagefilledrectangle($imagen , $x1       , $y1        , $x2       , $y2                   , $cFondo                   );
    imageline          ( $imagen , $x1       , $y1        , $x2       , $y2                   , $ccbl                     );
    imageline          ( $imagen , $x2       , $y1        , $x1       , $y2                   , $ccbl                     );
    imageline          ( $imagen , $x2/2     , $y1        , $x2/2     , $y2                   , $ccbl                     );
    imageline          ( $imagen , $x1       , $y2/2      , $x2       , $y2/2                   , $ccbl                     );
    // Dulce naranja
    imagefilledellipse ( $imagen , $x2*5/9   , $y2*2/11   , $x2*4/11  , $y2*4/11              , $cDulceN                  );  
    imagefilledellipse ( $imagen , $x2*5/11  , $y2*3/11   , $x2*4/11  , $y2*4/11              , $cDulceN                  ); 
    imagefilledellipse ( $imagen , $x2*5/13  , $y2*5/15   , $x2*4/11  , $y2*4/11              , $cDulceN                  );  
    imagefilledarc     ( $imagen , $x2*9/15  , $y2*7/19   , $x2*12/16 , $y2*12/16 , 180 , 260 , $cDulceN , IMG_ARC_PIE    );
    // Preredondear Dulce rojo
    imagefilledarc     ( $imagen , $x2*9/16  , $y2*6/15   , $x2*1.05  , $y2*1.05  , 70 , 170  , $cDulceR , IMG_ARC_PIE    );
    // Galleta
    imagefilledellipse ( $imagen , $x2*9/13  , $y2*7/14   , $x2*9/16  , $y2*9/16              , $cGalleta                 );
    // Dulce rojo
    imagefilledellipse ( $imagen , $x2*6/9   , $y2*8/11   , $x2*4/11  , $y2*4/11              ,  $cDulceR                 );
    imagefilledellipse ( $imagen , $x2*4/9   , $y2*7/11   , $x2*4/11  , $y2*4/11              ,  $cDulceR                 );
    imagefilledellipse ( $imagen , $x2*2/9   , $y2/2      , $x2*4/11  , $y2*4/11              ,  $cDulceR                 );
    // Predondear dulce rojo
    imagefilledarc     ( $imagen , $x2*11/14 , $y2*1/47   , $x2*1.2   , $y2*1.2   , 87 , 149  , $cGalleta , IMG_ARC_EDGED );
    imagefilledrectangle($imagen , $x2/2     , $y1        , $x2       , $y2/3                 , $cFondo                   );
    // Dulce naranja
    imagefilledellipse ( $imagen , $x2*5/9   , $y2*2/11   , $x2*4/11  , $y2*4/11              ,  $cDulceN                 );  
    imagefilledellipse ( $imagen , $x2*5/11  , $y2*11/35  , $x2*4/11  , $y2*4/11              ,  $cDulceN                 ); 
    imagefilledarc     ( $imagen , $x2*9/15  , $y2*7/19   , $x2*12/16 , $y2*12/16 , 200 , 240 , $cDulceN , IMG_ARC_PIE    );
    // Galleta en contacto con dulce rojo
    imagefilledarc     ( $imagen , $x2*9/13  , $y2*7/14   , $x2*9/16  , $y2*9/16  , 182 , 360 , $cGalleta , IMG_ARC_EDGED );
    // Chispas de la galleta
    imagefilledellipse ( $imagen , $x2*7/14  , $y2*4/11   , $x2*1/18  , $y2*1/18              ,  $ccve                    );
    imagefilledellipse ( $imagen , $x2*8/15  , $y2*5/11   , $x2*1/20  , $y2*1/18              ,  $ccrs                    );
    imagefilledellipse ( $imagen , $x2*7/15  , $y2*1/02   , $x2*1/18  , $y2*1/18              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*17/30 , $y2*5/17   , $x2*1/18  , $y2*1/18              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*5/8   , $y2*4/11   , $x2*1/18  , $y2*1/18              ,  $ccaz                    );
    imagefilledellipse ( $imagen , $x2*3/5   , $y2*11/25  , $x2*1/18  , $y2*1/18              ,  $ccam                    );
    imagefilledellipse ( $imagen , $x2*5/8   , $y2*5/21   , $x2*1/18  , $y2*1/18              ,  $ccve                    );
    imagefilledellipse ( $imagen , $x2*11/16 , $y2*9/35   , $x2*1/18  , $y2*1/18              ,  $ccaz                    );
    imagefilledellipse ( $imagen , $x2*21/32 , $y2*11/35  , $x2*1/20  , $y2*1/20              ,  $ccam                    );
    imagefilledellipse ( $imagen , $x2*24/33 , $y2*6/19   , $x2*1/20  , $y2*1/20              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*21/30 , $y2*7/17   , $x2*1/18  , $y2*1/18              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*26/33 , $y2*8/27   , $x2*1/18  , $y2*1/18              ,  $ccve                    );
    imagefilledellipse ( $imagen , $x2*28/33 , $y2*8/29   , $x2*1/18  , $y2*1/20              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*25/33 , $y2*11/29  , $x2*1/18  , $y2*1/20              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*27/33 , $y2*13/33  , $x2*1/18  , $y2*1/18              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*32/35 , $y2*11/29  , $x2*1/20  , $y2*1/18              ,  $ccrs                    );
    imagefilledellipse ( $imagen , $x2*29/37 , $y2*19/43  , $x2*1/18  , $y2*1/15              ,  $ccrs                    );
    imagefilledellipse ( $imagen , $x2*33/37 , $y2*19/43  , $x2*1/18  , $y2*1/18              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*32/39 , $y2*22/43  , $x2*1/16  , $y2*1/16              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*31/37 , $y2*25/43  , $x2*1/18  , $y2*1/18              ,  $ccam                    );
    imagefilledellipse ( $imagen , $x2*36/41 , $y2*23/43  , $x2*1/18  , $y2*1/18              ,  $ccaz                    );
    imagefilledellipse ( $imagen , $x2*35/37 , $y2*23/43  , $x2*1/18  , $y2*1/18              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*26/37 , $y2*22/43  , $x2*1/18  , $y2*1/18              ,  $ccaz                    );
    imagefilledellipse ( $imagen , $x2*24/39 , $y2*25/43  , $x2*1/18  , $y2*1/18              ,  $ccrj                    );
    imagefilledellipse ( $imagen , $x2*28/37 , $y2*26/43  , $x2*1/18  , $y2*1/18              ,  $ccbl                    );
    imagefilledellipse ( $imagen , $x2*35/41 , $y2*28/43  , $x2*1/18  , $y2*1/18              ,  $ccaz                    );
    //Brillo a imagenes
    imagesetthickness($imagen, $b*0.9);
    imagefilledarc     ( $imagen , $x2*11/16  , $y2*8/19   , $x2*12/16 , $y2*12/16 , 200 , 250 , $ccbl , IMG_ARC_NOFILL    );
    //imagefilledarc     ( $imagen , $x2*9/15   , $y2*5/19   , $x2*13/16 , $y2*13/16 , 130 , 160 , $ccbl , IMG_ARC_NOFILL    );
    imagefilledarc     ( $imagen , $x2*10/15  , $y2*7/23   , $x2*18/16 , $y2*18/16 , 100 , 150 , $ccbl , IMG_ARC_NOFILL    );

// -------------------------------------- Termina sección de trazos para el icono ------------------------------------------
// -------------------------------------- Empieza sección de trazos para mi firma ------------------------------------------

    // Letra A
    imagesetthickness  ( $imagen , $b);
    imageline          ( $imagen , $x2/9     , $y2*9/12   , $x2*1/16  , $y2*13/15             , $cFirma                   );
    imageline          ( $imagen , $x2/9     , $y2*9/12   , $x2*3/22  , $y2*15/17             , $cFirma                   );
    imageline          ( $imagen , $x2/18    , $y2*41/50  , $x2*3/23  , $y2*15/19             , $cFirma                   );
    imageline          ( $imagen , $x2/22    , $y2*42/50  , $x2*3/21  , $y2*4/5               , $cFirma                   );
    //Datos Personales
    $font = dirname(__FILE__) . '/fuente.TTF';
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
// -------------------------------------- Termina sección de impresión de imagen -------------------------------------------
?>
