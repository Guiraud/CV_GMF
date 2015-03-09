<?php

// Test fonction mail();
   // *** A configurer
   $to    = "mehdi.guiraud@gmail.com";
   $from  = "me@mehdiguiraud.info";
   // *** Laisser tel quel
   $JOUR  = date("Y-m-d");
   $HEURE = date("H:i");
   $SITE = $_SERVER['HTTP_REFERER']. " IP: ".$_SERVER['REMOTE_ADDR']." Avec ". $_SERVER['HTTP_USER_AGENT'].
   $Subject = "[EGO-ANALYTICS] - arrivé le $JOUR $HEURE à ".$GLOBALS["_SERVER"]["GEOIP_COUNTRY_CODE"]. ",".$GLOBALS["_SERVER"]["GEOIP_CITY"]. " par ". $_SERVER['REMOTE_ADDR'];
   $mail_Data = "";
   $mail_Data .= "<html> \n"; 
   $mail_Data .= "<head> \n";
   $mail_Data .= "<title> Subject </title> \n";
   $mail_Data .= "</head> \n";
   $mail_Data .= "<body> \n";
   $mail_Data .= "Mail HTML simple  : <b>Source de la visite : </b> <a href=\"http://www.fobec.com/apps/localiser-ip/".$_SERVER['REMOTE_ADDR']."\" > Geo : ".$_SERVER['REMOTE_ADDR']."</a><br> \n";
   $mail_Data .= "Plus d\'info   :  <a href=\"http://www.tcpiputils.com/browse/ip-address/".$_SERVER['REMOTE_ADDR']."\" > TCP-utils : ".$_SERVER['REMOTE_ADDR']."</a><br> \n";
   $mail_Data .= "<br> \n";
   $mail_Data .= "Sujet <font color=red> $Subject </font>  <br> \n";
   $mail_Data .= "request URI: ". $_SERVER['REQUEST_URI']."<br> \n";
   $mail_Data .= "Site : ". $SITE."<br> \n";
   $mail_Data .= "Global : \n";
   $mail_Data .= "</body> \n";
   $mail_Data .= "</HTML> \n";
   $headers  = "MIME-Version: 1.0 \n";
   $headers .= "Content-type: text/html; charset=iso-8859-1 \n";
   $headers .= "From: $from  \n";
   $headers .= "Disposition-Notification-To: $from  \n";
   // Message de Priorité haute
   // -------------------------
  $headers .= "X-Priority: 1  \n";
  $headers .= "X-MSMail-Priority: High \n";
  $CR_Mail = TRUE; 
  $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);

 

   if ($CR_Mail === FALSE)
      {
      //echo " ### CR_Mail=$CR_Mail - Erreur envoi mail <br> \n";
      }
   else
      {
      //echo " *** CR_Mail=$CR_Mail - Mail envoyé<br> \n";
      }

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="@mguiraud">
	<link rel="shorturl" href="http://j.mp/CvMehdiGuiraud" />

    <title>Cv de Mehdi Guiraud</title>
    <meta property="og:title" content="Mehdi Guiraud journaliste multimédia" /> 
         <meta property="og:image" content="http://www.mehdiguiraud.info/img/avatar.png" /> 
         <meta property="og:description" content="Mehdi GUIRAUD, 39 ans. A l'issue d'une quinzaine d'année dans l'informatique, j'ai décidé de devenir journaliste. 
            Je photographie, interviewe, filme et raconte des histoires depuis plus de 4 ans. #societe #transparence #DigitalHumanities" /> 
         <meta property="og:url" content="http://www.mehdiguiraud.info">
    <meta name="author" content="Mehdi GUIRAUD">
    <meta name="description" content="journaliste plurimédia et datajournaliste, photographie, vidéo.">
    <link rel="publisher" href="https://plus.google.com/+MehdiGUIRAUD" />
    
    <link rel="stylesheet" href="lib/curtain.css">
    <link rel="stylesheet" href="base.css?v=1.1">
</head>
<body>

<ol class="curtains">
    <!--<li id="section-1" class="cover" data-parallax-background="-.05">-->
    <li id="section-1" class="cover">
        <header data-fade="550" data-slow-scroll="3">
            <h1>Mehdi GUIRAUD</h1>
            <h2>Journaliste plurimédia & datajournaliste</h2>
            <div id="SocialTwitter" class="SocialTwitter"><a href="https://twitter.com/mguiraud" class="twitter-follow-button" data-show-count="true" data-lang="fr" data-size="large">Suivre @mguiraud</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
        </header>
    </li>
    <li id="section-2">
    <section class="texte">
        <article>

            <h4>Qui suis-je ?</h4>
            <hr>
            <p>Mehdi GUIRAUD, 39 ans.</p>
            <p>Journaliste et datajournaliste spécialisé dans la politique, la société et les humanités numériques, Mehdi a été d'abord informaticien pendant plus de quinze ans chez un équipementier automobile puis dans un laboratoire de recherche. Depuis, il écrit pour la Gazette des communes, la Gazette sociale, Hexagones.fr et Stratégies. Il travaille sur tous les supports (presse, web et vidéo) et assiste également les journalistes dans les travaux nécessitant une forte compétence informatique.</p>
            <h4>Participation :</h4>
             <ul style="text-align: left;margin-left:-120px;width:500px">
              <li><a href="http://www.enqueteouverte.info">Enquête Ouverte</a> : Enquêtes avec financement participatif</li>
              <li><a href="http://coopetic-medias.fr/">Coopétic-médias</a> : Agence (ayant vocation à devenir une agence de presse) et coopérative d'activité </li>
              </ul>
            <h4>Formateur :</h4>
            <ul style="text-align: left;margin-left:-120px;width:500px">
              <li>
              Choisir et déterminer une stratégie Open data</li>
              <li>Maitriser ses données privées sur Internet</li>
              <li>Installer, utiiser et mettre à jour la <a href="http://fr.slideshare.net/Fred2baro/la-whistlebox">WhistleBOX</a></li>
              <li>Formation sur mesure autour de la litteratie numérique, le scrapping, la sécurité pour les journalistes</li>
              </ul>
            <h4>Productions écrites :</h4>
            <p><strong>Application Interactive :</strong> dans le cadre du module infographie de ma formation de journaliste multimédia à l’EMI-CFD, j'ai participé à la réalisation d’une application interactive sur le festival de Cannes : <a href="http://blugture.net/Cannes2013"/>http://blugture.net/Cannes2013 </a>
                <br><strong>Infographie interactive (Gazette des communes) :</strong>
                <p><ul style="text-align: left;margin-left:-120px;width:500px">
<li ><a href="http://www.lagazettedescommunes.com/164128/moralisation-de-la-vie-publique-un-eternel-recommencement/" title="Le 24 avril, le gouvernement présentera son projet de loi de moralisation de la vie publique. Il vise à répondre au séisme politique provoqué par l’affaire Cahuzac. Mais il sera le énième texte à tenter de moraliser durablement la vie publique. La Gazette a reconstitué l’histoire (moderne) des textes de lois qui ont encadré les financements de la vie politique et la lutte contre les conflits d’intérêts.">[frise interactive]Moralisation de la vie politique, un éternel recommencement</a>- La Gazette des communes</li>
<li><a href="http://www.lagazettedescommunes.com/169373/cinema-les-collectivites-soutiennent-un-tiers-des-productions-francaises-tournees-en-france/" title="La production cinématographique pour l’année 2012 se solde par 184 longs métrages français, soit 6706 journées de tournage dont 31 % tournés hors de France. C’est ce qui ressort du bilan annuel établi par Film France, structure qui fédère les 40 commissions du film locales (bureaux d’accueil des tournages).">[Audio interactif]Cinéma: les collectivités soutiennent un tiers des productions françaises</a>- La Gazette des communes</li>
<li><a href="http://www.lagazettedescommunes.com/165532/cartographie-investissements-etrangers-createurs-demplois-des-regions-en-pointe/" title="Dans son rapport annuel 2012 publié le 7 mars 2013, l'Agence française de l'investissement international (AFII) souligne un investissement étranger stable sur le territoire malgré une croissance mondiale atténuée par la crise. Une cartographie régionale révèle quelles régions sont les plus attractives pour les entreprises étrangères. Ce qui ne correspond pas forcément à la carte de France des emplois créés ou maintenus du fait des investissements étrangers sur la même période.">[Cartes] Les régions les plus attractives pour les entreprises étrangères</a>- La Gazette des communes</li></ul></p><p>

<strong>Infographie statique :</strong><ul style="text-align: left;margin-left:-120px;width:500px"><li><Li><a href="http://www.lagazettedescommunes.com/167289/infographie-lutte-contre-lhomophobie-les-villes-passent-a-laction/" title="La journée nationale de lutte contre l’homophobie doit servir de prise de conscience : en 2012, les agressions homophobes ont encore augmenté de 27% . Les collectivités, à leur échelle, peuvent réagir. Comment ? Voici 12 pistes d’action illustrées par des exemples de bonnes pratiques de villes déjà engagées."> Lutte contre l’homophobie</a>- La Gazette des communes</li></ul></p><p>
<strong>Articles :</strong>
<ul style="text-align: left;margin-left:-120px;width:500px">
<li><a href="http://www.lexpress.fr/culture/les-ados-aiment-naruto-parce-qu-ils-se-retrouvent-en-lui_730561.html" title="Naruto a dix ans. L'occasion d'interroger Yann Leroux, psychanalyste, spécialiste des mondes numériques et des jeux vidéos sur l'influence de ce phénomène sur ceux qui ont fait son succès: les adolescents.">Yann Leroux :« "Les ados aiment Naruto parce qu'ils se retrouvent en lui »</a> - L'express</li>
<li><a href="http://www.lagazettedescommunes.com/168172/oaklandopenbudget-ou-quand-les-citoyens-se-saisissent-de-lopen-data/" title="Voici un exemple où la mise à disposition des données publiques permet à une communauté de se saisir du vivre ensemble. Au départ, des citoyens d'Oakland (Etat-Unis, Californie), demandeurs et engagés, sollicitent leur municipalité pour accéder aux données budgétaires.Sans méfiance ni défiance à l'égard des dépenses de la mairie, ils sont convaincus que pour comprendre la gestion de leur ville, il faut pouvoir explorer son fonctionnement.">OaklandOpenBudget ou quand les citoyens se saisissent de l’Open Data</a>- La Gazette des communes</li>
<li><a href="http://www.lagazettedescommunes.com/170526/moralisation-de-la-vie-publique-une-transparence-encore-inachevee/" title="La commission des lois de l’Assemblée nationale a terminé, le 6 juin, l’examen du projet de loi de transparence de la vie publique. Les députés ont largement affaibli la portée du texte pourtant initié par le président de la République à la suite du scandale provoqué par l’affaire Cahuzac." >Moralisation de la vie publique : une transparence inachevée</a> - La Gazette des communes</li>
<li><a href="http://www.strategies.fr/etudes-tendances/dossiers/248711/246229W/facebook-mobile-first.html" title="Interview de Laurent Solly. En 2012, Facebook s'est entièrement réorganisé pour suivre des utilisateurs devenus mobinautes. Retour avec l'ancien responsable de la publicité chez TF1,désormais directeur général de Facebook France, sur les enjeux d'une transmission digitale." >Réseaux Sociaux : Mobile first</a> - Supplément Stratégies</li></ul></p><p>
<strong>Journalisme de données</strong>
<ul style="text-align: left;margin-left:-120px;width:500px">
<li><a href="http://www.hexagones.fr/#!/article/2014/12/13/les-peches-de-la-reserve-parlementaire" title="Chaque année, sénateurs et députés distribuent près de 150 millions d’euros de subventions, prélevés sur les crédits des ministères. Un système qui s’apparente au clientélisme et qui favorise le cumul des mandats, comme le montre notre classement. " >Les péchés de la réserve parlementaire</a> - Hexagones.fr</li>
<li><a href="http://www.hexagones.fr/#!/article/2014/12/13/les-meandres-de-la-reserve-parlementaire" title="La publication par le ministère de l’Économie et des Finances de la répartition des crédits au titre de la réserve parlementaire montre un écart significatif avec les chiffres de l’Assemblée nationale. L’explication officielle évoque les différences entre autorisation d’engagement donnée par les élus et crédits effectivement payés par l’Administration. Mais des doutes peuvent subsister." >Les méandres de la générosité parlementaire</a> - Hexagones.fr</li></ul></p>

<h4>Comment me contacter ?</h4>
            <hr>
            <p>par <a href="mailto:mehdi.guiraud@gmail.com">mail</a> ou <i>me faire un signe</i> sur mon
            <a href="http://twitter.com/mguiraud">twitter</a>. Je met parfois à jour <a href="http://blogdunpigiste.blogspot.fr/">un blog</a>.</p>
            <p></p>
            <p class="align-center">
               <a href="https://dl.dropboxusercontent.com/u/6734644/Guiraud_Mehdi_CV_Journalistemultim%C3%A9dia2013.pdf" class="button">Télécharger au format PDF</a>
            </p>
        </article>
        <div  id="SocialLinkedin" class="SocialLinkedin"><a href="http://fr.linkedin.com/in/mehdiguiraud">
      
          <img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_viewmy_120x33.png" width="120" height="33" border="0" alt="Le profil de Mehdi Guiraud sur LinkedIn">
        
    </a></div>
        </section>
    </li>
    <li id="section-3">
        <section class="photos">
        <div style="position:relative;top:-720px;right:-1080px;" id="SocialYoutube" class="SocialYoutube"><iframe src="http://www.youtube.com/subscribe_widget?p=MehdiGuiraud" 
       style="overflow: hidden; height: 105px; width: 300px; border: 0;" 
       scrolling="no" frameBorder="0">
    </iframe><br><a href="http://www.flickr.com/photos/fred2baro/" title="See my photos on Flickr!"><img src="https://s.yimg.com/pw/images/goodies/white-see-my-photos.png" width="147" height="26" alt=""></a></div>
            <div class="fixed">
                <h4>Audiovisuel</h4>
                <p>Vous trouverez ici quelques exemples de mes productions :</p>
                <p>Vidéos, Photos, Infographies et article de presse.</p>
            </div>
            <div class="photos-inner">
                <ul class="step-list">
                    <li class="step">
						<H3>Quelques photos d'événements, de concerts, de spectacles, d'expositions</h3>
			
                    </li>
                    <li class="step">
                        <H3>Quelques vidéos et Diaporamas</H3>
                        <iframe width="560" height="315" src="//www.youtube.com/embed/videoseries?list=PLger4nzCsBTfw0J7GHF-h27UWonNwnKtV" frameborder="0" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>
        </section>
    </li>
    <li id="section-4">
        <section class="download">

        <div class="fixed">
            <h4 >Intéressé ?</h4>

            <p>
            <ul>
            <Li style="pading:0.5em;text-indent:2em">
            <a href="https://dl.dropboxusercontent.com/u/6734644/CV_long_Guiraud_Mehdi_ChefDeProjetWeb.pdf">mon cv (long), </a>car avant d'&ecirc;tre journaliste j'ai &eacute;t&eacute; ing&eacute;nieur syst&egrave;mes et r&eacute;seaux, formateur m&eacute;dias sociaux, Pr&eacute;sident de parti politique, moniteur de voile ( catamaran), com&eacute;dien, blogueur, etc... 
            </Li><br>
            <li style="pading:0.5em;text-indent:2em"> 
	    <a href="https://dl.dropboxusercontent.com/u/6734644/Guiraud_Mehdi_CV_Journalistemultim%C3%A9dia2013.pdf">Mon cv de journaliste multimédia,</a> parce que c'est ma passion.
	    </li>
	    <li style="pading:0.5em;text-indent:2em"> 
	    <a href="https://twitter.com/mguiraud" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="large">Suivre @mguiraud</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	    </li>
	     <li style="pading:0.5em;text-indent:2em"> 
	    Mon compte LinkedIn : <a href="http://fr.linkedin.com/in/mehdiguiraud/">Mehdi Guiraud</a>
	    </li>
	    <li style="pading:0.5em;text-indent:2em"> 
	    Mon email : <a mailto="mehdi.guiraud@gmail.com">Mehdi.Guiraud {@} Gmail.com </a>
        <br> <b>Fingerprint : </b><br>
        5F3E 5043 1041 FAF7 04D6 9E7D 90D1 7986 812E A402
	    </li>
	    </ul></p>
	    </div>
        </section>
    </li>
</ol>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>


<script src="lib/curtain.js"></script>
<script>
    $(function(){
       $('.curtains').curtain({
           scrollSpeed: 300,
           controls: '.menu',
           curtainLinks: '.curtain-links',
           nextSlide: function(){
            console.log("ok");
           }
       });
    });
</script>
</body>
</html>
