<html>
  <style>
    div{
      float:left;
      height:270px;
      width:47%;
      padding:10px;
    }
  </style>
  <body>
    <center><h1 style="color:green;">Live Updates on Coronavirus (COVID-19) World-wide</h1></center>
    <?php
     error_reporting(E_ERROR | E_PARSE);
     $main_url = "https://www.worldometers.info/coronavirus/";
     $main_url2 = "http://tcovid19.herokuapp.com";
     $str1 = file_get_contents($main_url2);
     $doc = new DOMDocument();
     @$doc->loadHTML($str1);
     $str2 = file_get_contents($main_url);
     $doc2 = new DOMDocument();
     @$doc2->loadHTML($str2);
     $spans = $doc2->getElementsByTagName('span');
     $ps = $doc->getElementsByTagName('p');
     $ss = $doc->getElementsByTagName('span');
     echo "<title> Coronastats </title>";
     echo("<center>");
      //echo("<div/>");
      echo ("<div>");
      echo("<h1><a href='https://www.worldometers.info/coronavirus/'>Global Stats </a></h1><br />");
      echo("<h2 style='color:red;'>Reported Cases: ".$spans[4]->nodeValue."</h2>");
      echo("<h2 style='color:red;'>Total Deaths: ".$spans[5]->nodeValue."</h2>");
      echo("<h2 style='color:green;'>Recovered: ".$spans[6]->nodeValue."</h2><br />");
      echo ("</div>");
      //echo("<hr/>");
      echo ("<div>");
      echo("<h1><a href='https://www.covid19india.org'>Indian stats</a></h1><br />");
      echo("<h2 style='color:red;'>Reported Cases: ".$ps[0]->nodeValue."</h2>");
      echo("<h2 style='color:red;'>Total Deaths: ".$ss[4]->nodeValue."</h2>");
      echo("<h2 style='color:green;'>Recovered: ".$ss[3]->nodeValue."</h2><br />");
      echo ("</div>");
      echo("</center>");
      echo("<center>");
      echo("<br/>");
      echo('<iframe style="align:center;" width="600" height="400" src="https://www.youtube.com/embed/1APwq1df6Mw?autoplay=1"/>');
      echo("</center>");
      echo("<div>Made by K Pranav Bharadwaj sources:'https://www.worldometers.info/coronavirus/';'https://www.covid19india.org/'</div>");
?> 

  </body>
</html>
