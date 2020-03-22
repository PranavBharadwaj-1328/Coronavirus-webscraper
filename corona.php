<html>
  <body>
    <center><h1 style="color:green;">Live Updates on Coronavirus (COVID-19) World-wide</h1></center>
    <?php
      $main_url = "https://www.worldometers.info/coronavirus/";
      $str = file_get_contents($main_url);
      if(strlen($str)>0)
      {
        $str = trim(preg_replace('/\s+/', ' ', $str));
        preg_match("/\<title\>(.*)\<\/title\>/i",$str,$title);
      }
      $stat = "";
      foreach ($title as $t)
      {
        $stat = $stat.$t;
      }
      $infected =  trim($stat," - Worldometer");
      echo "<title> Coronastats </title>";
      $a =  explode(" ",$infected);
      echo ("<center>");
      echo("<br><br><br><br><h2 style='color:red;'>Reported Cases: ".$a[3]."</h2><br/>");
      echo("<h2 style='color:red;'>Total Deaths: ".$a[6]."</h2><br />");
      echo('<iframe style="align:center;" width="600" height="400" src="https://www.youtube.com/embed/1APwq1df6Mw"/>');
      echo("</center>");
    ?>
  </body>
</html>
