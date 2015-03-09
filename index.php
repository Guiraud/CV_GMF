<?php 
   // Test fonction mail();
   // *** A configurer
   $to    = "mehdi.guiraud@gmail.com";
   // adresse MAIL OVH liée à l’hébergement.
   $from  = "me@mehdiguiraud.info";
   // *** Laisser tel quel
   $JOUR  = date("Y-m-d");
   $HEURE = date("H:i");
   $SITE = $_SERVER['HTTP_REFERER']. " IP: ".$_SERVER['REMOTE_ADDR']." Avec ". $_SERVER['HTTP_USER_AGENT'].
   $Subject = "[EGO-ANALYTICS] - arrivé le $JOUR $HEURE par ".$_SERVER['REMOTE_ADDR'];
   $mail_Data = "";
   $mail_Data .= "<html> \n";
   $mail_Data .= "<head> \n";
   $mail_Data .= "<title> Subject </title> \n";
   $mail_Data .= "</head> \n";
   $mail_Data .= "<body> \n";
   $mail_Data .= "Mail HTML simple  : <b>Source de la visite : </b> <a href=\"http://www.fobec.com/apps/localiser-ip/".$_SERVER['REMOTE_ADDR']."\" >".$_SERVER['REMOTE_ADDR']."</a><br> \n";
   $mail_Data .= "<br> \n";
   $mail_Data .= "Sujet <font color=red> $Subject </font>  <br> \n";
   $mail_Data .= "referer : ". $_SERVER['HTTP_REFERER']."<br> \n";
   $mail_Data .= "request URI: ". $_SERVER['REQUEST_URI']."<br> \n";
   $mail_Data .= "Site : ". $SITE."<br> \n";
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



//echo $_SERVER['HTTP_USER_AGENT'];
$ua = $_SERVER["HTTP_USER_AGENT"];
//echo $ua."\n";
        $ua="ua ".$ua;
        $b = array();
        
         
         if(strpos($ua, "Chrome/36")==true){ $navi="Chrome 36";}
         if(strpos($ua, "Chrome/35")==true){ $navi="Chrome 35";}
         if(strpos($ua, "Chrome/34")==true){ $navi="Chrome 34";}
         if(strpos($ua, "Chrome/33")==true){ $navi="Chrome 33";}
         if(strpos($ua, "Chrome/32")==true){ $navi="Chrome 32";}
         if(strpos($ua, "Chrome/31")==true){ $navi="Chrome 31";}
         if(strpos($ua, "Chrome/30")==true){ $navi="Chrome 30";}
         if(strpos($ua, "Chrome/29")==true){ $navi="Chrome 29";}
         if(strpos($ua, "Chrome/28")==true){ $navi="Chrome 28";}
         if(strpos($ua, "Chrome/27")==true){ $navi="Chrome 27";}


        /**
        * Internet Explorer
        */
 
        if(strpos($ua, "MSIE 4.")==true){ $navi="Internet Explorer 4";}
        if(strpos($ua, "MSIE 5.")==true){ $navi="Internet Explorer 5";}
        if(strpos($ua, "MSIE 5.5")==true){ $navi="Internet Explorer 5.";}
        if(strpos($ua, "MSIE 6.")==true){ $navi="Internet Explorer 6";}
        if(strpos($ua, "MSIE 7.")==true){ $navi="Internet Explorer 7";}
        if(strpos($ua, "MSIE 8.")==true){ $navi="Internet Explorer 8";}
        if(strpos($ua, "MSIE 9.")==true){ $navi="Internet Explorer 9";}
        /**
        * Firefox OK sur WIN
        */
        
        if(strpos($ua, "Firefox/1")==true){ $navi="Firefox 1";}
        if(strpos($ua, "Firefox/1.5")==true){ $navi="Firefox 1.5";}
        if(strpos($ua, "Firefox/12.0")==true){ $navi="Firefox 12";}
        if(strpos($ua, "Firefox/13.0")==true){ $navi="Firefox 13";} 
        if(strpos($ua, "Firefox/14.0")==true){ $navi="Firefox 14";}
        if(strpos($ua, "Firefox/15.0")==true){ $navi="Firefox 15";}
        if(strpos($ua, "Firefox/16.0")==true){ $navi="Firefox 16";}
        if(strpos($ua, "Firefox/17.0")==true){ $navi="Firefox 17";}
        if(strpos($ua, "Firefox/18.0")==true){ $navi="Firefox 18";}
        if(strpos($ua, "Firefox/19.0")==true){ $navi="Firefox 19";}
        if(strpos($ua, "Firefox/20.0")==true){ $navi="Firefox 20";}
        if(strpos($ua, "Firefox/21.0")==true){ $navi="Firefox 21";}
        if(strpos($ua, "Firefox/22.0")==true){ $navi="Firefox 22";}
        if(strpos($ua, "Firefox/23.0")==true){ $navi="Firefox 23";}
        if(strpos($ua, "Firefox/24.0")==true){ $navi="Firefox 24";}
        if(strpos($ua, "Firefox/25.0")==true){ $navi="Firefox 25";}
        if(strpos($ua, "Firefox/26.0")==true){ $navi="Firefox 26";}
        if(strpos($ua, "Firefox/27.0")==true){ $navi="Firefox 27";}
        if(strpos($ua, "Firefox/28.0")==true){ $navi="Firefox 28";}
        if(strpos($ua, "Firefox/29.0")==true){ $navi="Firefox 29";}
        if(strpos($ua, "Firefox/30.0")==true){ $navi="Firefox 30";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 31";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 32";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 33";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 34";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 35";}
        if(strpos($ua, "Firefox/31.0")==true){ $navi="Firefox 36";}
        //konkeror
        if(strpos($ua, "Konqueror/2")==true){ $navi="Konqueror 2";}
        if(strpos($ua, "Konqueror/3")==true){ $navi="Konqueror 3";}
        if(strpos($ua, "Konqueror/3.5")==true){ $navi="Konqueror 3.5";}
        if(strpos($ua, "Konqueror/4.0")==true){ $navi="Konqueror 4.0";}
 
        //opera OK SUR WIN
 
        if(strpos($ua, "Opera/6")==true){ $navi="Opera 6";}
        if(strpos($ua, "Opera/7")==true){ $navi="Opera 7";}
        if(strpos($ua, "Opera/8")==true){ $navi="Opera 8";}
        if(strpos($ua, "Opera/8.5")==true){ $navi="Opera 8.5";}
        if(strpos($ua, "Opera/9")==true){ $navi="Opera 9";}
        if(strpos($ua, "Opera/9.5")==true){ $navi="Opera 9.5";}
 
        //safari OK sur WIN
 
        if(strpos($ua, "Safari")==true)
        {
                if(strpos($ua, "Version/3.0")==true){ $navi="Safari 3.0";}
                if(strpos($ua, "Version/3.0")==true){ $navi="Safari 3.0";}
                if(strpos($ua, "Version/3.0")==true){ $navi="Safari 3.0";}
                if(strpos($ua, "Version/3.0")==true){ $navi="Safari 3.0";}
                if(strpos($ua, "Version/6.0.5")==true){ $navi="Safari 6.0.5";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 7.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 8.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 9.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 10.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 11.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 12.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 13.0";}
                if(strpos($ua, "Version/7.0")==true){ $navi="Safari 14.0";}
        }
 
        //Windows OK SUR XP
 
        if(strpos($ua, "Windows 98")==true)    { $sys="Windows 98";}
        if(strpos($ua, "Windows NT 4.0")==true){ $sys="Windows NT";}
        if(strpos($ua, "Windows NT 5.0")==true){ $sys="Windows 2000";}
        if(strpos($ua, "Windows NT 5.1")==true){ $sys="Windows XP";}
        if(strpos($ua, "Windows NT 5.2")==true){ $sys="Windows 2003";}
        if(strpos($ua, "Windows NT 6.0")==true){ $sys="Windows Vista";}
 
        //linux
        if(strpos($ua, "Linux")==true){ $sys="Linux";}
        if(strpos($ua, "Ubuntu")==true){ $sys="Linux Ubuntu";}
        if(strpos($ua, "Kubuntu")==true){ $sys="Linux Kubuntu";}
        if(strpos($ua, "Fedora")==true){ $sys="Linux Fedora";}
        if(strpos($ua, "SUSE")==true){ $sys="Linux SuSE";}
        if(strpos($ua, "Gentoo")==true){ $sys="Linux Gentoo";}
        if(strpos($ua, "Mandriva")==true){ $sys="Linux Mandriva";}
        if(strpos($ua, "Debian")==true){ $sys="Linux Debian";}
        if(strpos($ua, "Red Hat")==true){ $sys="Linux Red Hat";}
 
        //bsd
        if(strpos($ua, "OpenBSD")==true){ $sys="Open BSD";}
        if(strpos($ua, "FreeBSD")==true){ $sys="Free BSD";}
        if(strpos($ua, "Intel Mac OS X")==true){ $sys="Intel Mac OS X";}
 
        // systemes spéciaux
        if(strpos($ua, "PlayStation Portable")==true){ $sys="Sony PSP";}
        if(strpos($ua, "PLAYSTATION 3")==true){ $sys="Sony PlayStation 3";}
        if(strpos($ua, "Nintendo Wii")==true){ $sys="Nintendo Wii";}
 
        //—————————-architecture—————————
        if(strpos($ua, "i386")==true){ $bits="32";}
        if(strpos($ua, "i486")==true){ $bits="32";}
        if(strpos($ua, "i586")==true){ $bits="32";}
        if(strpos($ua, "i686")==true){ $bits="32";}
        if(strpos($ua, "x86_64")==true){ $bits="64";}
 
        //echo "<br>Syst&#232me:".$sys;
        //echo "<br>\n";
        //echo "<br>Navigateur:".$navi;
            //
            if (($navi=="Chrome 27")||
            	($navi=="Chrome 26")||
            	($navi=="Chrome 25")||
            	($navi=="Chrome 24")||
                ($navi=="Firefox 23")||
                ($navi=="Firefox 22")||
                ($navi=="Safari 7.0")||
                ($navi=="Internet Explorer 6")||
                ($navi=="Internet Explorer 7")
                ){       
                        header("Location: http://www.mehdiguiraud.info/index-old.html");
                }
                else
                {
                        //echo $ua."<br>";
                        if (stripos($ua,"Firefox/"))
                        $tabFF = str_split($ua,stripos($ua,"Firefox/"));
                        else
                        $tabCr = str_split($ua,stripos($ua,"Chrome/"));
                        if (($tabCr !== false)&&($tabFF !== false)) {                           
                                if (isset( $tabCr))
                                $ss_tab = str_split($tabCr[1],stripos($tabCr[1],"/"));
                                else
                                $ss_tab = str_split($tabFF[1],stripos($tabFF[1],"/"));

                                     if ($ss_tab !== false) {
                                        //echo "La chaîne '/' a été trouvée dans la chaîne '$ss_tab'";
                                        //echo "<pre>";
                                        //print_r($ss_tab);
                                        $val = intval(substr($ss_tab[1], - strlen($ss_tab[1]) + 1 ));
                                        //echo "</pre> val : " . $val."<br>";
                                        //echo gettype($val)."<br>";
                                        $reponse = $val >= 24 ? "supérieur à 23":"inférieur à 24" ;
                                        //echo "valeur : ". $reponse;
                                        if ($val >= 24) 
                                            //echo "HTML5";
                                            header("Location:  http://www.mehdiguiraud.info/index_HTML5.php");
                                        } 
                                }
                                else
                                {
                                        //Probablement un autre navigateur à compléter plus tard.
                                        //echo "La chaîne 'Firefox/' n'a pas été trouvée dans la chaîne '$tab'<br>";
                                        header("Location:  http://www.mehdiguiraud.info/index_HTML5.php");
                                }
                       
                        //header("Location:  http://www.mehdiguiraud.info/index_HTML5.html");
                }
                
 ?>
