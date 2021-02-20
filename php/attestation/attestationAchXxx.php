<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang=""><title>COVID-19 - Déclaration de déplacement</title><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/><meta name="generator" content="pdftohtml 0.36"/><meta name="author" content="Ministère de l'intérieur"/><meta name="keywords" content="covid19 covid-19 attestation déclaration déplacement officielle gouvernement"/><meta name="date" content="2020-11-28T08:00:49+00:00"/><meta name="subject" content="Attestation de déplacement dérogatoire"/>
    <head>
        <?php
        $nom = "Xxxx";   // ****** ATTENTION ****** surtout ne pas modifier les 13 premières lignes ni leur ordre !   
        $prenom = "AchaguiDev";
        $date_naissance = "12/05/1995";
        $lieu_naissance = "RABAT";
        $adresse = "Rue 55 N° 31 Hay Al Farah";
        $lieu = "RABAT";
        $code_postal = "10200";
        $motif = "handicap";

        setlocale(LC_TIME, 'french');
        $date = strftime('%A %d %B %Y');
        $date = strftime('%d/%m/%Y');
        $date1 = strftime('%d/%m/%Y');
        $heure = strftime('%H');
        $minutes = strftime('%M');

        if($minutes < 10) 
        {
            "0".$minutes; 
        }

        $toto = substr($minutes,0,1)."0";
        $minutes = $toto;
        //echo "<h1>".$toto."</h1>";

        if($minutes<15){
            $heure_dep = $heure - 1;
            $minute_dep = 15- $minutes; 
            $minute_dep = 60 - $minute_dep;
        }else{
                $heure_dep = $heure;
                $minute_dep = $minutes -15;
            }
        if($minutes<23) {
            $heure_fait = $heure-1;
            $minute_fait = 23-$minutes;
            $minute_fait = 60 - $minute_fait;
            }else{
                $heure_fait = $heure;
            $minute_fait = $minutes - 23;
            }
            
        if($minute_fait < 10) 
        {
            $minute_fait = "0".$minute_fait; 
        }

        if($minute_dep < 10) 
        {
            $minute_dep = "0".$minute_dep;
        }

        if (($heure_dep <0) and ($minute_dep>44))
        {
            $heure_dep = 23;
            $jour = date('d');
            $jour = $jour-1;
            $date = strftime('%d/%m/%Y');
            $date = substr_replace($date,$jour,0,2);
        }

        if (($heure_fait <0) and ($minute_fait>36))
        {
            $heure_fait = 23;
            $jour = date('d');
            $jour = $jour-1;
            $date1 = strftime('%d/%m/%Y');
            $date1 = substr_replace($date1,$jour,0,2);
            }
        ?>
        <title>Attestation de déplacement dérogatoire</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../../img/logo.png" type="image/ico" >
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style type="text/css">
        p {margin: 0; padding: 0;}	.ft00{font-size:25px;font-family:TimesNewRomanPSMT;color:#000000;}
        .ft01{font-size:25px;font-family:TimesNewRomanPSMT;color:#ff0000;}
        .ft02{font-size:13px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft03{font-size:15px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft04{font-size:10px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft05{font-size:18px;font-family:TimesNewRomanPSMT;color:#000000;}
        .ft06{font-size:18px;font-family:ArialMT;color:#000000;}
        .ft07{font-size:15px;font-family:ABCDEE+MicrosoftSansSerif;color:#ff0000;}
        .ft08{font-size:8px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft09{font-size:12px;font-family:ArialMT;color:#000000;}
        .ft010{font-size:12px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft011{font-size:16px;font-family:Helvetica;color:#000000;}
        .ft012{font-size:18px;font-family:Helvetica;color:#000000;}
        .ft013{font-size:9px;font-family:Helvetica;color:#ffffff;}
        .ft014{font-size:13px;line-height:15px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
        .ft015{font-size:15px;line-height:18px;font-family:ABCDEE+MicrosoftSansSerif;color:#000000;}
    </style>
    </head>
    <body  vlink="blue" link="blue">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div id="Covid" style="position:relative;width:892px;height:2500px;">
                    <p style="position:absolute;top:86px;left:169px;white-space:nowrap" class="ft00">ATTESTATION&#160;DE&#160;DÉPLACEMENT&#160;DÉROGATOIRE&#160;</p>
                    <p style="position:absolute;top:127px;left:216px;white-space:nowrap" class="ft00">DURANT LES&#160;HORAIRES DU&#160;COUVRE-FEU</p>
                    <p style="position:absolute;top:127px;left:719px;white-space:nowrap" class="ft01">&#160;</p>
                    <p style="position:absolute;top:162px;left:109px;white-space:nowrap" class="ft014">En&#160;application&#160;de&#160;l’article&#160;4&#160;du&#160;décret n°&#160;2020-1310&#160;du&#160;29&#160;octobre&#160;2020&#160;prescrivant les&#160;mesures&#160;générales&#160;<br/>nécessaires&#160;pour&#160;faire&#160;face&#160;à&#160;l’épidémie&#160;de&#160;COVID-19&#160;dans&#160;le&#160;cadre&#160;de&#160;l’état d’urgence&#160;sanitaire&#160;</p>
                    <p style="position:absolute;top:193px;left:109px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:222px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:252px;left:106px;white-space:nowrap" class="ft03">Mme/M.&#160;:&#160;</p>
                    <p style="position:absolute;top:281px;left:106px;white-space:nowrap" class="ft03">Né(e)&#160;le&#160;:&#160;</p>
                    <p style="position:absolute;top:281px;left:446px;white-space:nowrap" class="ft03">à&#160;:&#160;</p>
                    <p style="position:absolute;top:311px;left:106px;white-space:nowrap" class="ft03">Demeurant&#160;:&#160;</p>
                    <p style="position:absolute;top:340px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:370px;left:106px;white-space:nowrap" class="ft03">certifie&#160;que&#160;mon&#160;déplacement&#160;est&#160;lié&#160;au&#160;motif&#160;suivant&#160;(cocher&#160;la&#160;case)&#160;autorisé&#160;en&#160;application&#160;des&#160;</p>
                    <p style="position:absolute;top:388px;left:106px;white-space:nowrap" class="ft03">mesures&#160;générales&#160;nécessaires&#160;pour&#160;faire&#160;face&#160;à&#160;l’épidémie&#160;de&#160;COVID-19&#160;dans&#160;le&#160;cadre&#160;de&#160;l’état&#160;</p>
                    <p style="position:absolute;top:406px;left:106px;white-space:nowrap" class="ft03">d’urgence&#160;sanitaire</p>
                    <p style="position:absolute;top:405px;left:239px;white-space:nowrap" class="ft04">1&#160;</p>
                    <p style="position:absolute;top:406px;left:247px;white-space:nowrap" class="ft03">:&#160;</p>
                    <p style="position:absolute;top:439px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:437px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;entre&#160;le&#160;domicile&#160;et&#160;le&#160;lieu&#160;d’exercice&#160;de&#160;l’activité&#160;professionnelle&#160;ou&#160;le&#160;lieu&#160;</p>
                    <p style="position:absolute;top:456px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:456px;left:148px;white-space:nowrap" class="ft03">d’enseignement&#160;et&#160;de&#160;formation,&#160;déplacements&#160;professionnels&#160;ne&#160;pouvant&#160;être&#160;différés</p>
                    <p style="position:absolute;top:457px;left:750px;white-space:nowrap" class="ft06">&#160;</p>
                    <p style="position:absolute;top:490px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:487px;left:148px;white-space:nowrap" class="ft015">Déplacements&#160;&#160;pour&#160;&#160;des&#160;&#160;consultations,&#160;&#160;examens,&#160;&#160;actes&#160;&#160;de&#160;&#160;prévention&#160;&#160;(dont&#160;&#160;vaccination)&#160;<br/>et&#160;soins&#160;ne&#160;pouvant&#160;être&#160;assurés&#160;à&#160;distance&#160;et&#160;ne&#160;pouvant&#160;être&#160;différés&#160;ou&#160;pour&#160;l’achat&#160;de&#160;</p>
                    <p style="position:absolute;top:524px;left:148px;white-space:nowrap" class="ft03">produits&#160;de&#160;santé</p>
                    <p style="position:absolute;top:526px;left:269px;white-space:nowrap" class="ft06">&#160;</p>
                    <p style="position:absolute;top:558px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;</p>
                    <p style="position:absolute;top:555px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;&#160;pour&#160;&#160;motif&#160;&#160;familial&#160;&#160;impérieux,&#160;&#160;pour&#160;&#160;l’assistance&#160;&#160;aux&#160;&#160;personnes&#160;&#160;vulnérables&#160;</p>
                    <p style="position:absolute;top:574px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:574px;left:148px;white-space:nowrap" class="ft03">ou&#160;précaires&#160;ou&#160;pour&#160;la&#160;garde&#160;d’enfants&#160;</p>
                    <p style="position:absolute;top:608px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:606px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;des&#160;personnes&#160;en&#160;situation&#160;de&#160;handicap&#160;et&#160;de&#160;leur&#160;accompagnant</p>
                    <p style="position:absolute;top:607px;left:708px;white-space:nowrap" class="ft06">&#160;</p>
                    <p style="position:absolute;top:640px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:638px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;pour&#160;répondre&#160;à&#160;une convocation&#160;judiciaire&#160;ou&#160;administrative&#160;</p>
                    <p style="position:absolute;top:673px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:670px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;&#160;pour&#160;&#160;participer&#160;&#160;à&#160;&#160;des&#160;&#160;missions&#160;&#160;d’intérêt&#160;&#160;général&#160;&#160;sur&#160;&#160;demande&#160;&#160;de&#160;&#160;l’autorité&#160;</p>
                    <p style="position:absolute;top:689px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:689px;left:148px;white-space:nowrap" class="ft03">administrative&#160;</p>
                    <p style="position:absolute;top:723px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:721px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;liés&#160;à&#160;des&#160;transits&#160;ferroviaires,&#160;aériens&#160;ou&#160;en&#160;bus&#160;pour&#160;des&#160;déplacements&#160;de&#160;</p>
                    <p style="position:absolute;top:739px;left:148px;white-space:nowrap" class="ft03">longues&#160;distances&#160;</p>
                    <p style="position:absolute;top:773px;left:106px;white-space:nowrap" class="ft05">[&#160;]&#160;&#160;</p>
                    <p style="position:absolute;top:771px;left:148px;white-space:nowrap" class="ft03">Déplacements&#160;brefs,&#160;dans&#160;un&#160;rayon maximal&#160;d’un&#160;kilomètre&#160;autour&#160;du&#160;domicile&#160;pour&#160;les&#160;</p>
                    <p style="position:absolute;top:790px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:790px;left:148px;white-space:nowrap" class="ft03">besoins&#160;des&#160;animaux&#160;de&#160;compagnie&#160;</p>
                    <p style="position:absolute;top:807px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:837px;left:106px;white-space:nowrap" class="ft03">Fait&#160;à&#160;:&#160;</p>
                    <p style="position:absolute;top:866px;left:106px;white-space:nowrap" class="ft03">Le&#160;:&#160;</p>
                    <p style="position:absolute;top:866px;left:261px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:866px;left:446px;white-space:nowrap" class="ft03">à&#160;:&#160;</p>
                    <p style="position:absolute;top:896px;left:106px;white-space:nowrap" class="ft03">(Date&#160;et&#160;heure&#160;de&#160;début&#160;de&#160;sortie&#160;à&#160;mentionner&#160;obligatoirement)&#160;</p>
                    <p style="position:absolute;top:914px;left:106px;white-space:nowrap" class="ft015">&#160;<br/>&#160;</p>
                    <p style="position:absolute;top:961px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:991px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:1020px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:1050px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:1079px;left:106px;white-space:nowrap" class="ft03">&#160;</p>
                    <p style="position:absolute;top:1109px;left:133px;white-space:nowrap" class="ft08">1</p>
                    <p style="position:absolute;top:1112px;left:137px;white-space:nowrap" class="ft09">&#160;</p>
                    <p style="position:absolute;top:1109px;left:160px;white-space:nowrap" class="ft010">Les&#160;&#160;personnes&#160;&#160;souhaitant&#160;&#160;bénéficier&#160;&#160;de&#160;&#160;l’une&#160;&#160;de&#160;&#160;ces&#160;&#160;exceptions&#160;&#160;doivent&#160;&#160;se&#160;&#160;munir&#160;&#160;s’il&#160;&#160;y&#160;&#160;a&#160;&#160;lieu,&#160;&#160;lors&#160;&#160;de&#160;&#160;leurs&#160;</p>
                    <p style="position:absolute;top:1123px;left:160px;white-space:nowrap" class="ft010">déplacements&#160;hors&#160;de&#160;leur&#160;domicile,&#160;d’un&#160;document&#160;leur&#160;permettant&#160;de&#160;justifier&#160;que&#160;le&#160;déplacement&#160;considéré&#160;</p>
                    <p style="position:absolute;top:1138px;left:160px;white-space:nowrap" class="ft010">entre&#160;dans&#160;le&#160;champ&#160;de&#160;l’une&#160;de&#160;ces&#160;exceptions.&#160;</p>
                    <p style="position:absolute;top:911px;left:660px;white-space:nowrap" class="ft013">QR-code contenant les informations&#160;</p>
                    <p style="position:absolute;top:926px;left:660px;white-space:nowrap" class="ft013">de votre attestation numérique</p>

                    <p style="position:absolute;top:252px;left:179px;white-space:nowrap" class="ft011"><?php echo $prenom." ".$nom; ?></p>
                    <p style="position:absolute;top:280px;left:179px;white-space:nowrap" class="ft011"><?php echo $date_naissance; ?></p>
                    <p style="position:absolute;top:280px;left:468px;white-space:nowrap" class="ft011"><?php echo $lieu_naissance; ?></p>
                    <p style="position:absolute;top:312px;left:200px;white-space:nowrap" class="ft011"><?php echo $adresse." ".$code_postal." ".$lieu; ?></p>
                    <p style="position:absolute;top:836px;left:158px;white-space:nowrap" class="ft011"><?php echo $lieu; ?></p>
                    <p style="position:absolute;top:865px;left:137px;white-space:nowrap" class="ft011"><?php echo $date; ?></p>
                    <p style="position:absolute;top:865px;left:468px;white-space:nowrap" class="ft011"><?php echo $heure_dep.":".$minute_dep; ?></p>
                    <?php
                    if ($motif == "travail")
                    {
                    ?>
                    <p style="position:absolute;top:440px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "sante")
                    {
                    ?>
                    <p style="position:absolute;top:491px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "famille")
                    {
                    ?>
                    <p style="position:absolute;top:558px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "handicap")
                    {
                    ?>
                    <p style="position:absolute;top:609px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "convocation")
                    {
                    ?>
                    <p style="position:absolute;top:640px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "missions")
                    {
                    ?>
                    <p style="position:absolute;top:674px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "transits")
                    {
                    ?>
                    <p style="position:absolute;top:724px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    if ($motif == "animaux")
                    {
                    ?>
                    <p style="position:absolute;top:774px;left:110px;white-space:nowrap" class="ft012">x</p>
                    <?php
                    }
                    ?>
                    <?php
                        //définissez le repertoire temp sur un emplacement accessible en écriture, un emplacement pour les fichiers PNG générés
                        $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
                        
                        //préfixe d'emplacement PNG
                        $PNG_WEB_DIR = 'temp/';

                        // suppression des anciens png
                        $rep=opendir($PNG_WEB_DIR);
                        while($file = readdir($rep)){
                            if($file != '..' && $file !='.' && $file !='' && $file!='.htaccess'){
                                unlink($PNG_WEB_DIR.$file);
                            }
                        }
                        closedir($rep);

                        // La librairie QR
                        include "../qrcode/qrlib.php";    
                        
                        //bien sûr, nous avons besoin de droits pour créer temp dir
                        if (!file_exists($PNG_TEMP_DIR))
                            mkdir($PNG_TEMP_DIR);
                        
                        $filename = $PNG_TEMP_DIR.'test.png';
                        $errorCorrectionLevel = "L";
                        $matrixPointSize = 8;
                        $br = "\r\n";
                        $data = "Cree le: ".$date1." a ".$heure_fait."h".$minute_fait.";".$br."Nom: ".$nom.";".$br."Prenom: ".$prenom.";".$br."Naissance: ".$date_naissance." a ".$lieu_naissance.";".$br."Adresse: ".$adresse." ".$code_postal." ".$lieu.";".$br."Sortie: ".$date." a ".$heure_dep.":".$minute_dep.";".$br."Motifs: ".$motif.";" ;
                        // Données utilisateur
                        $filename = $PNG_TEMP_DIR."test".md5($data."|".$errorCorrectionLevel."|".$matrixPointSize).".png";
                        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
                            
                    ?>
                    <p style="position:absolute;top:900px;left:654px;white-space:nowrap" class="ft013">
                    <?php echo '<img width="160" height="160" src="'.$PNG_WEB_DIR.basename($filename).'" />'; ?></p>

                    <br><br>
                    <p style="position:absolute;top:1250px;left:0px;white-space:nowrap" class="ft013">
                    <img width="892" height="13" src="../../img/barre.png" alt=""/>
                    </p>
                    <br>

                    <p style="position:absolute;top:1400px;left:100px;white-space:nowrap" class="ft013">
                    <?php
                        echo '<img width="450" height="450" src="'.$PNG_WEB_DIR.basename($filename).'" />';
                    ?>
                    </p>
                    </div>
            </div>
            <div class="col-lg-2">
                <div class="mt-5">
                    <input type="button" value="Imprimer" class="btn btn-info">
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
<script>
    $(document).ready( () => {
        $(".btn").click( () => {
            window.print();
        } )
    } )
</script>
