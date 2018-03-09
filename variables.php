<?php
use voku\helper\AntiXSS;
$antiXss = new AntiXSS();

if (isset($_POST['TituloBoletin']) && isset($_POST['TituloFecha'])) {
    $TituloBoletin = htmlentities($_POST['TituloBoletin']);
    $TituloFecha = htmlentities($_POST['TituloFecha']);
    $TituloAbstrack = htmlentities($_POST['TituloAbstrack']);
    //Bloque A 1
    $BloAImg1 = htmlentities($_POST['BloAImg1']);
    $BloABan1 = htmlentities($_POST['BloABan1']);
    $BloATit1 = htmlentities($_POST['BloATit1']);
    $BloACon1 = htmlentities($_POST['BloACon1']);
    //   $BloALink1 = xss($_POST['BloALink1'], ENT_QUOTES); //
    $BloALink1 = $antiXss->xss_clean($_POST['BloALink1']);

    //Bloque A 2
    $BloAImg2 = htmlentities($_POST['BloAImg2']);
    $BloABan2 = htmlentities($_POST['BloABan2']);
    $BloATit2 = htmlentities($_POST['BloATit2']);
    $BloACon2 = htmlentities($_POST['BloACon2']);
    $BloALink2 = $antiXss->xss_clean($_POST['BloALink2']);

    //Bloque B 1
    $BloBTitulo = htmlentities($_POST['BloBTitulo']);
    $BloBImg1 = htmlentities($_POST['BloBImg1']);
    $BloBTit1 = htmlentities($_POST['BloBTit1']);
    $BloBCon1 = htmlentities($_POST['BloBCon1']);
    $BloBLink1 = $antiXss->xss_clean($_POST['BloBLink1']);

    //Bloque B 2
    $BloBImg2 = htmlentities($_POST['BloBImg2']);
    $BloBTit2 =htmlentities($_POST['BloBTit2']);
    $BloBCon2 = htmlentities($_POST['BloBCon2']);
    $BloBLink2 = $antiXss->xss_clean($_POST['BloBLink2']);

    // Bloque C 1
    $BloCImg1 = htmlentities($_POST['BloCImg1']);
    $BloCLink1 = $antiXss->xss_clean($_POST['BloCLink1']);

    //Bloque D 1
    $BloDTitulo = htmlentities($_POST['BloDTitulo']);
    $BloDBan1 = htmlentities($_POST['BloDBan1']);
    $BloDTit1 = htmlentities($_POST['BloDTit1']);
    $BloDCon1 = htmlentities($_POST['BloDCon1']);
    $BloDLink1 = $antiXss->xss_clean($_POST['BloDLink1']);

    //Bloque D 2
    $BloDBan2 = htmlentities($_POST['BloDBan2']);
    $BloDTit2 = htmlentities($_POST['BloDTit2']);
    $BloDCon2 = htmlentities($_POST['BloDCon2']);
    $BloDLink2 = $antiXss->xss_clean($_POST['BloDLink2']);

    //Bloque D 3
    $BloDBan3 = htmlentities($_POST['BloDBan3']);
    $BloDTit3 = htmlentities($_POST['BloDTit3']);
    $BloDCon3 = htmlentities($_POST['BloDCon3']);
    $BloDLink3 = $antiXss->xss_clean($_POST['BloDLink3']);

    //Bloque D 4
    $BloDBan4 = htmlentities($_POST['BloDBan4']);
    $BloDTit4 = htmlentities($_POST['BloDTit4']);
    $BloDCon4 = htmlentities($_POST['BloDCon4']);
    $BloDLink4 = $antiXss->xss_clean($_POST['BloDLink4']);

    //Bloque D 5
    $BloDTitulo2 = htmlentities($_POST['BloDTitulo2']);
    $BloDBan5 = htmlentities($_POST['BloDBan5']);
    $BloDTit5 = htmlentities($_POST['BloDTit5']);
    $BloDCon5 = htmlentities($_POST['BloDCon5']);
    $BloDLink5 = $antiXss->xss_clean($_POST['BloDLink5']);

    //Bloque D 6
    $BloDBan6 = htmlentities($_POST['BloDBan6']);
    $BloDTit6 =htmlentities($_POST['BloDTit6']);
    $BloDCon6 = htmlentities($_POST['BloDCon6']);
    $BloDLink6 = $antiXss->xss_clean($_POST['BloDLink6']);

} else {
    $TituloBoletin = 'Boletín Nacional';
    $TituloFecha = '16 de Septiembre del 2017';
    $TituloAbstrack = 'Bienvenido a tu boletín Nacional de noticias con lo más relevante de la semana.';
    //Bloque A 1
    $BloAImg1 = 'http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7Bf8142c1e-7940-481f-a769-7ebd8984e8ea%7D_Image_600x300.png';
    $BloABan1 = 'Hola';
    $BloATit1 = 'Título de nota';
    $BloACon1 = 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloALink1 = 'https://www.google.com.mx/';
    //Bloque A 2
    $BloAImg2 = 'http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7Bf8142c1e-7940-481f-a769-7ebd8984e8ea%7D_Image_600x300.png';
    $BloABan2 = 'Hola';
    $BloATit2 = 'Título de nota';
    $BloACon2 = 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloALink2 = 'https://www.google.com.mx/';
    //Bloque B 1
    $BloBTitulo = 'Interest 1';
    $BloBImg1 = 'http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7B017f1dcd-e690-4404-b9f3-45ffae6c3233%7D_Image_170x170.png';
    $BloBTit1 = 'Título de nota';
    $BloBCon1 = 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. ';
    $BloBLink1 = 'https://www.google.com.mx/';
    //Bloque B 2
    $BloBImg2 = 'http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7B017f1dcd-e690-4404-b9f3-45ffae6c3233%7D_Image_170x170.png';
    $BloBTit2 = 'Título de nota';
    $BloBCon2 = 'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet lorem ipsum dolor sit amet. ';
    $BloBLink2 = 'https://www.google.com.mx/';
    // Bloque C 1
    $BloCImg1 = 'http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7Bf8142c1e-7940-481f-a769-7ebd8984e8ea%7D_Image_600x300.png';
    $BloCLink1 = 'https://www.google.com.mx/';
    //Bloque D 1
    $BloDTitulo= 'Avisos';
    $BloDBan1 = 'Aviso General';
    $BloDTit1 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon1 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink1 = 'https://www.google.com.mx/';
    //Bloque D 2
    $BloDBan2 = 'Aviso General';
    $BloDTit2 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon2 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink2 = 'https://www.google.com.mx/';
    //Bloque D 3
    $BloDBan3 = 'Aviso General';
    $BloDTit3 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon3 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink3 = 'https://www.google.com.mx/';
    //Bloque D 4
    $BloDBan4 = 'Aviso General';
    $BloDTit4 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon4 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink4 = 'https://www.google.com.mx/';
    //Bloque D 5
    $BloDTitulo2= 'Selección del Editor';
    $BloDBan5 = 'Aviso General';
    $BloDTit5 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon5 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink5 = 'https://www.google.com.mx/';
    //Bloque D 6
    $BloDBan6 = 'Aviso General';
    $BloDTit6 = 'Lorem Ipsum dolor sit amet lorem ipsum dolor sit amet.';
    $BloDCon6 = 'Maecenas sed ante pellentesque, posuere leo id, eleifend dolor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.';
    $BloDLink6 = 'https://www.google.com.mx/';
}
/*
function xss($string){
    $data = '';
    $data = AntiXSS::setEncoding($string, "UTF-8");
    $data = AntiXSS::setFilter($data, "whitelist", "string");
    return $data;
}
*/
?>