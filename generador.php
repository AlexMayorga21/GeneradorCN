
<html>
    <head>
        <meta charset="UTF-8">
        <title>SoWhat? Factors</title>
        <link rel="shortcut icon" href="http://sowhatfactors.mx/favicon.ico" type="image/vnd.microsoft.icon" />
    </head>
    <body>
        <?php
        include_once './variables.php';

        $Estilos = '<html>
    <head>
        <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Use the latest (edge) version of IE rendering engine -->
        <title>Conecta</title>
        <link rel="shortcut icon" href="http://tec.mx/themes/base/favicon.ico" type="image/vnd.microsoft.icon" />
       
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <!-- CSS Reset -->
        <style type="text/css">
            
            html,  body {
                margin: 0 !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
            }
            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }
            /* What it does: Forces Outlook.com to display emails full width. */
            .ExternalClass {
                width: 100%;
            }
            /* What is does: Centers email on Android 4.4 */
            div[style*="margin: 16px 0"] {
                margin: 0 !important;
            }
            /* What it does: Stops Outlook from adding extra spacing to tables. */
            table,  td {
                mso-table-lspace: 0pt !important;
                mso-table-rspace: 0pt !important;
            }
            /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
            table {
                border-spacing: 0 !important;
                border-collapse: collapse !important;
                table-layout: fixed !important;
                margin: 0 auto !important;
            }
            table table table {
                table-layout: auto;
            }
            /* What it does: Uses a better rendering method when resizing images in IE. */
            img {
                -ms-interpolation-mode: bicubic;
            }
            /* What it does: Overrides styles added when Yahoo auto-senses a link. */
            .yshortcuts a {
                border-bottom: none !important;
            }
            /* What it does: Another work-around for iOS meddling in triggered links. */
            a[x-apple-data-detectors] {
                color: inherit !important;
            }
        </style>

        <!-- Progressive Enhancements -->
        <style type="text/css">

            /* What it does: Hover styles for buttons */
            .button-td,
            .button-a {
                transition: all 100ms ease-in;
            }
            .button-td:hover,
            .button-a:hover {
                background: #555555 !important;
                border-color: #555555 !important;
            }

            /* Media Queries */
            @media screen and (max-width: 600px) {

                .email-container {
                    width: 100% !important;
                }

                /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
                .fluid,
                .fluid-centered {
                    max-width: 100% !important;
                    height: auto !important;
                    margin-left: auto !important;
                    margin-right: auto !important;
                }
                /* And center justify these ones. */
                .fluid-centered {
                    margin-left: auto !important;
                    margin-right: auto !important;
                }

                /* What it does: Forces table cells into full-width rows. */
                .stack-column,
                .stack-column-center {
                    display: block !important;
                    width: 100% !important;
                    max-width: 100% !important;
                    direction: ltr !important;
                }
                /* And center justify these ones. */
                .stack-column-center {
                    text-align: center !important;
                }

                /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
                .center-on-narrow {
                    text-align: center !important;
                    display: block !important;
                    margin-left: auto !important;
                    margin-right: auto !important;
                    float: none !important;
                }
                table.center-on-narrow {
                    display: inline-block !important;
                }
                .aviso{
                    margin-left: none !important;
                    margin-right: -10px !important;
                }

                .aviso2{
                    margin-left: -10px !important;
                    margin-right: -10px !important;
                }
                #tedaviso{
                    padding-left: 10px !important;
                }
                .ageneral{
                    width: 100% !important;
                }
                .alinear{
                    padding-left: 0px !important;
                }
            }
            .tag::after {
                content: "";
                height: 100%;
                background-color: inherit;
                width: 1rem;
                position: absolute;
                top: 0;
                right: -0.4rem;
                transform: skewX(-14.04deg);
            }
            #outlook .aviso { 
                padding-bottom: 10px; padding-top: 10px; padding-left: 20px; margin-left: -10px; margin-right: 0px;
            }

        </style>
    </head>
    <body width="100%" style="margin: 0; " yahoo="yahoo">
        <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse; font: 1rem Raleway, ' . "'" . 'Segoe UI' . "'" . ', Sans-Serif;">
            <tr>
                <td><center style="width: 100%;">

                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> 1(Optional) This text will appear in the inbox preview, but not the email body. </div>
                <!-- Visually Hidden Preheader Text : END --> 

                <!-- Email Body : BEGIN -->
                <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#fafafa" width="600" class="email-container">
                    ';
        $Tr1 = '<!-- Background Image with Text : BEGIN -->
                    <tr>
                        <td background="" bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">

                            <div>
                                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <!-- Two Even Columns : BEGIN -->
                                    <tr>
                                        <td align="center" valign="top" style="padding: 10px;">
                                            <table cellspacing="0" cellpadding="0" border="0" width="100%">
                                                <tr>
                                                    <td class="stack-column-center"><table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td style="padding: 10px; text-align: center"><a href="http://tec.mx/noticias" target="_blank"><img src="http://images.dm.itesm.mx/EloquaImages/clients/TECNOLOGICODEMONTERREY/%7B746472f6-cfb1-4c16-aade-35d5607539cd%7D_conecta.png" width="169" height="49" alt="alt_text" border="0" class="fluid"></a></td>
                                                            </tr>

                                                        </table></td>
                                                    <td class="stack-column-center">
                                                        <table cellspacing="0" cellpadding="0" border="0">

                                                            <tr>
                                                                <td style="font: Raleway, ' . "'" . 'Segoe UI' . "'" . ', Sans-Serif; font-size: 16px; mso-height-rule: exactly; line-height: 13px; color: #fafafa; text-align: right;" class="center-on-narrow">
                                                                    ' . $TituloBoletin . '<br>
                                                                    <b style="font: italic 1rem Georgia, Serif;"> ' . $TituloFecha . '</b>
                                                                </td>
                                                            </tr>
                                                        </table>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!-- Two Even Columns : END --> 
                                </table>
                            </div>
                        </td>
                    </tr>
                    <!-- Background Image with Text : END --> ';
        $Tr2 = '  <!-- 1 Column Text : BEGIN -->
                    <tr>
                        <td style="padding: 40px;padding-top: 0px;padding-bottom: 0px; text-align: left; font-family: sans-serif; mso-height-rule: exactly;">
                            <br>
                            <h2 style="font-size: 24px; font-weight: bold; text-align: left; color: #212121; font-family: Raleway ,' . "'" . 'Segoe UI' . "'" . ', sans-serif;">Hola <span class=eloquaemail>Nombre1</span></h2>
                            <p style="text-align: left; color: #212121;">
                                ' . $TituloAbstrack . '
                            </p>
                            <h1 style="text-align: left; color: #212121;">LO DESTACADO</h1>
                        </td>
                    </tr>
                    <tr>
                        <td height="15"></td>
                    </tr>
                    <!-- 1 Column Text : BEGIN --> 
                    <!-- Hero Image, Flush : BEGIN -->
                    <tr>
                        <td class="full-width-image">
                            <a href="' . $BloALink1 . '" target="_blank" style="text-decoration: none;"><img src="' . $BloAImg1 . '" width="600" alt="' . $BloATit1 . '" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;"></a>
                        </td>
                    </tr>
                    <tr>
                        <td height="0" class="tag" style="margin-top: 0px; padding-top: 10px;padding-bottom: 10px; background-color: #212121; color: #fafafa; max-width: 45%; border-bottom: 1px solid #fafafa; position: relative; font-size: 16px; font-weight: bold; text-transform: uppercase; padding: 1rem; padding-left: 40px; display: block;" width="45%">
                            <a href="' . $BloALink1 . '" target="_blank" style="text-decoration: none; color: #fafafa;">' . $BloABan1 . '</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 40px;">
                            <a href="' . $BloALink1 . '" target="_blank" style="text-decoration: none; color: #212121;"><h2>' . $BloATit1 . '</h2>
                            <p style="font-size: 13px;">
                                ' . $BloACon1 . '
                            </p></a>
                            <br>
                        </td>
                    </tr>
                    <!-- Hero Image, Flush : END --> 
                    <!-- Hero Image, Flush : BEGIN -->
                    <tr>
                        <td class="full-width-image">
                            <a href="' . $BloALink2 . '" target="_blank" style="text-decoration: none;"><img src="' . $BloAImg2 . '" width="600" alt="' . $BloATit2 . '" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;"></a>
                        </td>
                    </tr>
                    <tr>
                        <td height="0" class="tag" style="margin-top: 0px; padding-top: 10px;padding-bottom: 10px; background-color: #212121; color: #fafafa; max-width: 45%; border-bottom: 1px solid #fafafa; position: relative; font-size: 16px; font-weight: bold; text-transform: uppercase; padding: 1rem; padding-left: 40px; display: block;" width="45%">
                            <a href="' . $BloALink2 . '" target="_blank" style="text-decoration: none; color: #fafafa;">' . $BloABan2 . '</a>
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 40px;">
                            <a href="' . $BloALink2 . '" target="_blank" style="text-decoration: none; color: #212121;"><h2>' . $BloATit2 . '</h2>
                            <p style="font-size: 13px;">
                                ' . $BloACon2 . '
                            </p></a>
                            <br>
                        </td>
                    </tr>
                    <!-- Hero Image, Flush : END --> 
                    <!-- Background Image with Text : BEGIN -->';
        $Tr3 = '<tr>
                        <td background="" bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important; padding: 10px; color: #fafafa;">
                            <h1 style="text-align: left; text-transform: uppercase; font-size: 2rem; padding-top: 2rem; padding-bottom: 2rem; padding-left: 10px;">Más de interés</h1>
                            <h2 style="text-align: left; padding-left: 10px;">' . $BloBTitulo . '</h2>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">

                                <tr>
                                    <td width="33.33%" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td dir="ltr" valign="top" style="padding: 0 10px;"><a href="' . $BloBLink1 . '" target="_blank" style="text-decoration: none;"><img src="' . $BloBImg1 . '" width="170" alt="' . $BloBTit1 . '" border="0" class="center-on-narrow"></a></td>
                                            </tr>
                                        </table></td>
                                    <td width="66.66%" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow">
                                                    <a href="' . $BloBLink1 . '" target="_blank" style="text-decoration: none; color: #fafafa;"><strong style="color:#fafafa; font-size: 1.5rem;">
                                                        ' . $BloBTit1 . '
                                                    </strong> <br>
                                                    <p style="color: #fafafa;font-size: 12px; ">
                                                        ' . $BloBCon1 . ' <br>
                                                    </p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                                <tr>
                                    <td height="15"></td>
                                </tr>
                                <tr>
                                    <td width="33.33%" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td dir="ltr" valign="top" style="padding: 0 10px;"><a href="' . $BloBLink2 . '" target="_blank" style="text-decoration: none;"><img src="' . $BloBImg2 . '" width="170" alt="' . $BloBTit2 . '" border="0" class="center-on-narrow"></a></td>
                                            </tr>
                                        </table></td>
                                    <td width="66.66%" class="stack-column-center"><table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td dir="ltr" valign="top" style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 10px; text-align: left;" class="center-on-narrow">
                                                    <a href="' . $BloBLink1 . '" target="_blank" style="text-decoration: none; color: #fafafa;"><strong style="color:#fafafa; font-size: 1.5rem;">
                                                        ' . $BloBTit2 . '
                                                    </strong> <br>
                                                    <p style="color: #fafafa;font-size: 12px; ">
                                                        ' . $BloBCon2 . '<br>
                                                    </p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                                <tr>
                                    <td height="7"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Background Image with Text : END --> 
                    <!-- 1 Column Text : BEGIN -->
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td style="padding: 20px;padding-top: 0px;padding-bottom: 0px; font-family: sans-serif; mso-height-rule: exactly; text-align: left; color: #212121; text-transform: uppercase; font-size: 30px; font-weight: bolder;">
                            Comunicados
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <!-- 1 Column Text : BEGIN --> 
                    <!-- Hero Image, Flush : BEGIN -->
                    <tr>
                        <td class="full-width-image">
                            <a href="' . $BloCLink1 . '" target="_blank" style="text-decoration: none;"><img src="' . $BloCImg1 . '" width="600" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;"></a>
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr> 
                        <td style="padding: 0px 20px; font-size: 30px; font-weight: bolder;">
                            ' . $BloDTitulo . '
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <!-- Hero Image, Flush : END --> ';
        $bloqueD1 = '
                    <!-- Two Even Columns : BEGIN -->
                    <tr>
                        <td align="center" valign="top" style="padding: 10px;"><table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td class="stack-column-center" ><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                            <tr>
                                                <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px;" width="243" class="ageneral">
                                                    ' . $BloDBan1 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink1 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit1 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon1 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                    <td class="stack-column-center alinear" id="avisoG" style="padding-left: 5px;"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                         <tr>
                                                <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px; " width="243" class="ageneral">
                                                    ' . $BloDBan2 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink2 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit2 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon2 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                    <!-- Two Even Columns : END --> ';
        $bloqueD2 = '<!-- Two Even Columns : BEGIN -->
                    <tr>
                        <td align="center" valign="top" style="padding: 10px;"><table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td class="stack-column-center" ><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                           <tr>
                                                <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px;" width="243" class="ageneral">
                                                    ' . $BloDBan3 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink3 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit3 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon3 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                    <td class="stack-column-center alinear" id="avisoG" style="padding-left: 5px;"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                           <tr>
                                                <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px; " width="243" class="ageneral">
                                                    ' . $BloDBan4 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink4 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit4 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon4 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                    <!-- Two Even Columns : END -->';
        $bloqueD3 = '   <!-- Hero Image, Flush : BEGIN -->
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <tr>
                        <td style="padding: 0px 20px; font-size: 1.5rempx; text-align: left;">
                            <h2>Selección del Editor</h2>
                        </td>
                    </tr>
                    <tr>
                        <td height="10"></td>
                    </tr>
                    <!-- Hero Image, Flush : END --> 
                    <!-- Two Even Columns : BEGIN -->
                    <tr>
                        <td align="center" valign="top" style="padding: 10px;"><table cellspacing="0" cellpadding="0" border="0" width="100%">
                                <tr>
                                    <td class="stack-column-center"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                            <tr>
                                                <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px;" width="243" class="ageneral">
                                                    ' . $BloDBan5 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink5 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit5 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon5 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                    <td class="stack-column-center alinear" style="padding-left: 5px;"><table cellspacing="0" cellpadding="0" border="0" style="width: 100%">
                                           <tr>
                                               <td height="0" style=" background-color: #212121; margin-top: 0px; padding-top: 10px;padding-bottom: 10px; font-family: sans-serif; text-align: left; color: #fafafa; font-size: 19px; max-width: 100%; border-bottom: 1px solid #fafafa; position: relative; padding-left: 40px;" width="243" class="ageneral">
                                                    ' . $BloDBan6 . '
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="15"></td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555; padding: 0 10px 10px; text-align: left; padding-left: 20px;" class="center-on-narrow" id="tedaviso"> 
                                                    <a href="' . $BloDLink6 . '" target="_blank" style="text-decoration: none; color: #212121;"><h3 style="color: #222222; font-size: 1rem;">' . $BloDTit6 . '</h3>
                                                    <p style="color: #222222; font-size: 12px;">' . $BloDCon6 . '</p></a>
                                                </td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table></td>
                    </tr>
                    <!-- Two Even Columns : END -->';
        $Tr4 = '    </table>
                <!-- Email Body : END --> 
            </center></td>
    </tr>
</table>
        
</body>
</html>';


        if ($BloDBan3 == "" && $BloDBan4 == "" && $BloDTitulo2 == "") {//eliminar bloque 2 y 3
           // echo 'Eliminando bloque 2 y 3';
            $Imprecion = $Estilos . $Tr1 . $Tr2 . $Tr3 . $bloqueD1 . $Tr4;
        } else if ($BloDBan3 == "" && $BloDBan4 == "") {//eliminar bloque 2
           // echo 'Eliminando bloque 2';
            $Imprecion = $Estilos . $Tr1 . $Tr2 . $Tr3 . $bloqueD1 . $bloqueD3 . $Tr4;
        } else if ($BloDTitulo2 == "") {//eliminar bloque 3
           // echo 'Eliminando bloque 3';
            $Imprecion = $Estilos . $Tr1 . $Tr2 . $Tr3 . $bloqueD1 . $bloqueD2 . $Tr4;
        } else {//Todo
            $Imprecion = $Estilos . $Tr1 . $Tr2 . $Tr3 . $bloqueD1 . $bloqueD2 . $bloqueD3 . $Tr4;
        }
        ?>
 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <style>
            .btn:hover{
                color: #333333 !important;
            }
            label{
                color: #ffffff;
                font-size: 16px;
            }
            h1{
                font-size: 30px;
            }

            .titulo1{
                color: #333333;
                font-family: 'Montserrat', sans-serif;
            }
            span{
                color: #f0582e;
            }
            h4{
                color: #ffffff;
                font-weight: bold;
            }
            h4:hover{
                color: #333333;
            }
            span:hover{
                font-size: 20px;
            }
            .btn{
                font-size: 30px;
                height: auto;
                background: #f0582e;
                color: #ffffff;
            }
        </style>
        <div class="container" style="max-width: 1300px; ">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style="text-align: center;" class="titulo1">Así se verá tu Newsletter</h1>
                </div>
                <div class="col-md-7">
                    <?php
                    echo $Imprecion;
                    ?>
                </div>
                <div class="col-md-5" align="center">
                    <br/> <br/> <br/> <br/><br/> <br/> <br/> <br/>
                    <h1>Da clic en el siguiente boton para copiar tu código</h1>
                    <button id="copyBlock" class="btn form-control" >Haz clic aquí</button>
                    <br/> <br/> <br/> <br/>
                    <div class="form-group">
                        <textarea id="textarea" rows="8" cols="30" style="" class="form-control"><?php echo $Imprecion; ?></textarea>
                    </div>

                    <span id="copyAnswer" style=""></span>
                    <br/> <br/> <br/> <br/><br/>
                </div>
            </div>
        </div>

        <div style="background: #ff6633; width: 100%; font-family: 'Montserrat', sans-serif; padding: 20px;">
            <div class="container" style="max-width: 1200px; background: #ff6633;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-4">
                            <a href="https://www.sowhatfactors.com/" style="text-decoration: none; text-align: left;" target="_blank">
                                <h4>Desarrollo propiedad de So What Factors SA de CV.</h4>
                                <h4>Todos los derechos reservados. 2017</h4>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="mailto:contacto@sowhatfactors.com" style="text-decoration: none; text-align: center;" target="_blank">
                                <h4><span class="glyphicon glyphicon-send" style="color: white;"></span> contacto@sowhatfactors.com</h4>
                            </a>
                        </div>
                        <div class="col-lg-4">
                            <a href="https://www.sowhatfactors.com/popup-pe5f0" style="text-decoration: none; text-align: right;" target="_blank">
                                <h4>Aviso de Privacidad</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>

            // Establecemos las variables
            var textarea = document.getElementById("textarea");


            var answer = document.getElementById("copyAnswer");
            var copy = document.getElementById("copyBlock");
            copy.addEventListener('click', function (e) {
                // Sleccionando el texto
                textarea.select();
                try {
                    // Copiando el texto seleccionado
                    var successful = document.execCommand('copy');

                    if (successful)
                        answer.innerHTML = '!Listo! Pégalo en el template de Eloqua.';
                    else
                        answer.innerHTML = 'Incapaz de copiar!';
                } catch (err) {
                    answer.innerHTML = 'Browser no soportado!';
                }
            });


        </script>

    </body>
</html>
