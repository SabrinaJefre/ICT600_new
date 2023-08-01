<?php
    date_default_timezone_set('Asia/Kuala_Lumpur');
    include 'dbh.inc.php';
    include 'comments.inc.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Disaster Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style type="text/css">
        <!--
        .style2 {font-family: Arial, Helvetica, sans-serif}
        .style8 {
	        font-family: Arial, Helvetica, sans-serif;
	        font-size: 36px;
        }
        .style9 {font-size: 36px}
        .style10 {
	        font-style: italic;
	        font-size: 3px;
        }
        .style12 {
	        font-family: Arial, Helvetica, sans-serif;
	        font-size: 16px;
        }
        .style21 {
	        font-size: 12px;
	        font-weight: bold;
        }
        .style43 {
	        font-family: Arial, Helvetica, sans-serif;
	        font-size: 14px;
	        font-style: italic;
        }
        .style50 {font-size: 10px}
        .style53 {
	        font-family: Arial, "Arial Black", Athenian, GrCourier, GrHelvetica, GrTimes;
	        font-size: 14px;
	        color: #FFFFFF;
	        font-weight: bold;
        }
      .style54 {
        font-size: 9px;
        font-weight: bold;
      }
      .style70 {color: #fefdfd}
      .style75 {font-size: 12px; font-weight: bold; color: #f9f9f8; }
      .style79 {font-size: 12px}
      .style83 {font-family: Arial, "Arial Black", Athenian, GrCourier, GrHelvetica, GrTimes; font-size: 12px; color: #FFFFFF; font-weight: bold; }
      .style84 {
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
      }
      .style85 {
        font-size: 10px;
        font-family: Arial, "Arial Black", Athenian, GrCourier, GrHelvetica, GrTimes;
        color: #FFFFFF;
        font-weight: bold;
      }
      .style88 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 10px; font-weight: bold; }
      .style91 {color: #bcb88a}
      .style95 {
        font-family: Arial, "Arial Black", Athenian, GrCourier, GrHelvetica, GrTimes;
        font-weight: bold;
        font-size: 16px;
        color: #FFFFFF;
      }
      .style96 {font-family: Arial, "Arial Black", Athenian, GrCourier, GrHelvetica, GrTimes; font-size: 12px; color: #FFFF00; font-weight: bold; }
      body,td,th {
        color: #FFFFFF;
        font-size: 18px;
      }
      body {
        background-color: #fff;
      }
      a {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        color: #FFFF00;
      }
      a:visited {
        color: #00FFFF;
      }
      .style100 {color: #FFFFFF}
      .style101 {
        font-size: 18px;
        color: #FFFFFF;
      }
      .style107 {font-size: 24px}
      .style108 {font-size: 16px; font-weight: bold; }
      .style150 {font-size: 16px}
      .style153 {color: #FFFF66}
      .style157 {color: #333300}
      .style158 {
        color: #000066;
        font-family: Arial, Helvetica, sans-serif;
      }
      .style161 {
        color: #333300;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
      }
      .style162 {color: #000066}
      .style164 {color: #000066; font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
      .style165 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
      }
      a:link {
        color: #FFFF00;
        font-family: Arial, Helvetica, sans-serif;
      }
      .style168 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
      .style169 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
      .style170 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
      .style171 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
      .style172 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 10px; }
      .style173 {
        color: #FFFFFF;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        font-weight: bold;
      }
      #AutoNumber1 tr .style2 #AutoNumber6 tr td form #AutoNumber7 tr td #AutoNumber4 tr td blockquote .style79 {
        font-family: Arial Black, Gadget, sans-serif;
      }
      #AutoNumber1 tr .style2 #AutoNumber6 tr td form #AutoNumber7 tr td #AutoNumber4 tr td div div div blockquote .style164 {
        color: #F3E60D;
      }
      #AutoNumber1 tr .style2 #AutoNumber6 tr td form #AutoNumber7 tr td #AutoNumber4 tr td blockquote div p strong a {
        font-family: Arial Black, Gadget, sans-serif;
      }
      #AutoNumber1 tr .style2 #AutoNumber6 tr td form #AutoNumber7 tr td #AutoNumber4 tr td blockquote div .style173 {
        font-family: Arial, Helvetica, sans-serif;
      }
      #AutoNumber1 tr .style2 #AutoNumber6 tr td form #AutoNumber7 tr td #AutoNumber4 tr td blockquote div .style173 {
        font-family: Arial, Helvetica, sans-serif;
      }
      -->
      </style>
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  </head>
    <body>
    <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" bordercolor="#111111" width="109%" id="AutoNumber1" height="2234">
    <tr>
        <td width="100%" height="203" valign="top" background="canvas4.gif" bgcolor="#000000" style="border-style: none; border-width: medium">
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" bordercolor="##000000" width="100%" id="AutoNumber5" height="72">
            <tr>
                <td width="16%" style="border-style: none; border-width: medium" height="70" bgcolor="#bcb88a">
                <p align="center" style="margin-left: 7"><img src="http://www.drgeorgepc.com/DisasterPageLogoSm.jpg" width="177" height="125"></td>
                <td width="24%" height="70" align="left" bgcolor="#bcb88a" style="border-style: none; border-width: medium"><div align="center">
                    <blockquote>
                <p class="style70"><span class="style107"><font face="Arial Black">DISASTER PAGES</font></span><span class="style21"><font size="5"><br>
                    </font></span><em>of</em><span class="style21"><font size="5"><br>
                    </font><span class="style43">Dr. GEORGE PARARAS-CARAYANNIS</span></span></p>
                </blockquote>
                </div></td>
                <td width="60%" height="70" align="left" bgcolor="#bcb88a" class="style2" style="border-style: none; border-width: 0"><p align="center" class="style10" style="margin-top: 0"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><span class="style10" style="margin-top: 0"><span class="style10" style="margin-top: 0"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><span class="style10" style="margin-top: 0"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><span class="style10" style="margin-top: 0"><span class="style10" style="margin-top: 0"><b><b><font size="6" color="#FFFFFF"><b><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><b><b><font size="6" color="#FFFFFF"><img src="http://www.drgeorgepc.com/tsu1999TurkeyDam1sm.jpg" alt="" width="238" height="152"></font></b></b></font></b></b></font></b></b></font></b></b></font></b></b></font></b></b></font></b></b></font></b><span class="style10" style="margin-top: 0"><img src="http://www.drgeorgepc.com/tsu1883KrakatoaEruptionSm.jpg" alt="" width="111" height="158"></span></b></b></font></b></b></span></span></font></b></b></font></b></b></span></font></b></b></font></b></b></span></span></font></b></b></font></b></b><span class="style10" style="margin-top: 0"><img src="http://www.drgeorgepc.com/tornadoSm.jpg" alt="" width="132" height="158"></span></p>                  </td>
            </tr>
        </table>
            <table width="99%" height="18" border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber2" style="border-collapse: collapse; border-width: 0">
            <tr>
                <td width="27%" bgcolor="#000000" bordercolor="#000000" style="border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center"><table width="99%" height="18" border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber3" style="border-collapse: collapse; border-width: 0">
            <tr>
                <td width="18%" height="17" align="center" bordercolor="#000000" bgcolor="#000000" style="border-left-style: none; border-left-width: medium; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium"><span class="style88">DISASTER  PAGES</span></td>
                <td width="19%" bgcolor="#000000" bordercolor="#000000" style="border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center"><span class="style88">EARTHQUAKES</span></td>
                <td width="21%" bgcolor="#000000" bordercolor="#000000" style="border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center"><span class="style88">TSUNAMIS</span></td>
                <td width="15%" bgcolor="#000000" bordercolor="#000000" style="border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center"><span class="style88">VOLCANOES</span></td>
                <td width="27%" bgcolor="#000000" bordercolor="#000000" style="border-right-style: none; border-right-width: medium; border-top-style: none; border-top-width: medium; border-bottom-style: none; border-bottom-width: medium" align="center"><span class="style88">DISASTER ARCHAEOLOGY </span></td>
            </tr>
            </table></td>
            </tr>
        </table></td>
        </tr>
    <tr>
        <td width="100%" height="14" background="canvas4.gif" class="style2" style="border-style: none; border-width: medium">&nbsp;</td>
    </tr>
    <tr>
        <td width="100%" height="1500" valign="top" class="style2" style="border-style: none; border-width: medium"><blockquote></blockquote>
        <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border-width: 0" bordercolor="#111111" width="100%" id="AutoNumber6">
        <tr>
          <td width="14%" height="1310" valign="top" bgcolor="#bcb88a" class="style108" style="border-style: none; border-width: small; font-family: Arial, Helvetica, sans-serif;">
            <div align="center">
              <center>
                <p align="center" class="style21">&nbsp;</p>
                <p align="center" class="style21"><a href="index4.php" target="_blank"><font color="#FFFFFF"><strong>DISASTER PAGES OF DR. GEORGE P.C. </strong></font></a></p>
                <p align="center" class="style21"><a href="index4.php"><img src="http://www.drgeorgepc.com/DisasterPageLogoSm.jpg" alt="" width="163" height="104"></a></p>
                <p align="center" class="style95"><a href="http://www.drgeorgepc.com/NavigationGuide.html" target="_blank"><font color="#000000">NAVIGATION GUIDE</font></a></p>
                <p align="center" class="style95"><font color="#FFFFFF">Link Portals</font></p>
                <table width="63%" height="161" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber17" style="border-collapse: collapse">
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamiEducGenInfo.html" target="_blank"><font color="#000000">Tsunami Educational</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#660000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamiPredEvalRiskAssess.html" target="_blank"><font color="#000000">Tsunami Prediction &amp; Assessment</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="35" bordercolor="#CA0000"><p class="style21" style="margin-left: 4; margin-top: 2; margin-bottom: 2"> <a href="http://www.drgeorgepc.com/Tsunamis1980ToPresent.html" target="_blank"><strong><font color="#000000">Tsunamis1980 To Present</font></strong></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamisHistByCountry.html" target="_blank"><font color="#000000">Historical Tsunamis</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamisMajorPacIndOceans.html" target="_blank"><font color="#000000">Pacific &amp; Indian Ocean Tsunamis</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamisVolcanic.html" target="_blank"><font color="#000000">Volcanic Tsunamis</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamisPaleo.html" target="_blank"><font color="#000000">Paleotsunamis</font></a></td>
                  </tr>
                </table>
                <table width="61%" height="1" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber17" style="border-collapse: collapse">
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/TsunamisHistDataBase.html" target="_blank"><font color="#000000">Historical Tsunami Data Base - <span class="style79">Catalogs</span></font></a><a href="LelaCarayannisBouboulinaOrg.html"><span class="style79"></span></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="TsunamiBibliographies.html" target="_blank"><font color="#000000">Tsunami Bibliographies</font></a></p></td>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><span class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="http://www.drgeorgepc.com/SpecBulletinEarthqTsun.html" target="_blank"><font color="#000000">Recent Disasters</font></a></span></td>
                  </tr>
                </table>
                <p align="center" class="style83">WEATHER-RELATED DISASTERS</p>
                <table width="63%" height="1" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber19" style="border-collapse: collapse">
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Hurricane1949Galveston.html" target="_blank"><font color="#000000">Texas Hurricanes - 1949 at Freeport and Galvesto</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Cyclone2008Burma.html" target="_blank"><font color="#000000">Myanmar Cyclone &quot;Nargis&quot;</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21 style79 style70" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="HurricanHistStmSurgePred.html" target="_blank"><font color="#000000">FAQ - HURRICANES</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="HurricanHistStmSurgePred.html" target="_blank"><font color="#000000">Historical Hurricanes - Storm Surge Prediction</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21 style100" style="margin-left: 4; margin-top: 2; margin-bottom: 2">
                        <p align="center" class="style21 style100" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Tornado.html" target="_blank"><font color="#000000">TORNADOES</font></a>
                      <p class="style21 style100" style="margin-left: 4; margin-top: 2; margin-bottom: 2"></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Tornadoes.html" target="_blank"><font color="#000000">Tornadoes - Overview - Modeling and Forecasting</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p style="margin-left: 4; margin-top: 2; margin-bottom: 2"></td>
                  </tr>
                </table>
                <p align="center" class="style84 style100">CLIMATE CHANGE</p>
                <p align="center" class="style84 style100">GLOBAL WARMING</p>
                <p align="center" class="style84 style100">SEA LEVEL CHANGE</p>
                <table width="68%" height="1" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber20" style="border-collapse: collapse">
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="ClimateChange.html" target="_blank"><font color="#000000">Climate Change</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="ClimateChange.html" target="_blank"><font color="#000000">Natural &amp; Man-Made Disasters</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21 style79 style70" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="ClimateChange.html" target="_blank"><font color="#000000">Assessment of Risks</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="ClimateChange.html" target="_blank"><font color="#000000">Prepardness &amp; Mitigation</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21 style70" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="OceanGovern.html" target="_blank"><font color="#000000">Ocean Governance &amp; Sustainability</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="center" class="style21" style="margin-left: 4; margin-top: 2; margin-bottom: 2"></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="center" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><span class="style96"><a href="DisasterArchaeology.html" target="_blank"><font color="#000000">DISASTER ARCAEOLOGY</font></a></span></td>
                  </tr>
                </table>
                <p align="center"><img src="http://www.drgeorgepc.com/DisasterArchaelogyLogoSmall.jpg" alt="" width="170" height="31"></p>
                <p align="center" class="style84"><span class="style53"><a href="http://www.drgeorgepc.com/MiscellaneousWritings.html" target="_blank"><font color="#000000">MISCELLANEOUS</font></a></span></p>
                <p align="center" class="style84"><a href="http://www.drgeorgepc.com/MiscellaneousWritings.html"><font color="#000000">WRITINGS</font></a></p>
                <p align="center" class="style84"><a href="http://www.drgeorgepc.com/MiscellaneousWritings.html"><img src="http://www.drgeorgepc.com/DragonHeadingSmall.jpg" width="173" height="110"></a></p>
                <p align="center" class="style84"><a href="http://www.drgeorgepc.com/LelaCarayannisBouboulinaOrg.html">----------</a></p>
                <p align="center"><a href="http://www.drgeorgepc.com/LelaCarayannisBouboulinaOrg.html"><span class="style21"><font color="#FFFFFF"><strong><span class="style53">TSUNAMI SOCIETY</span></strong></font></span></a></p>
                <p align="center"><a href="http://www.tsunamisociety.org"><img src="http://www.drgeorgepc.com/TsunamiSocietyLogoSm.jpg" width="148" height="109"></a></p>
                <p align="center"><a title="download tsunami early warning apk" href="http://www.apkmonk.com/app/kz.ism.tsunami/"><img src="https://cdn.apkmonk.com/logos/kz.ism.tsunami_150x150.png" alt="download tsunami early warning apk" width="125" height="118"></a>&nbsp;</p>
                <p align="center"><a href="http://www.tsunamisociety.org" target="_blank"><span class="style21"><font color="#FFFFFF"><strong>SCIENCE OF<br>
                  TSUNAMI HAZARDS<br>
                  International Journal of  Tsunami Society</strong></font></span></a></p>
                <p align="center" class="style75"><a href="http://www.tsunamisociety.org/OnlineJournals.html" target="_blank"><font color="#000000">Recent and Current Issues (2005 - 2009)</font></a></p>
                <p align="center" class="style75"><a href="http://www.tsunamisociety.org/TitlesAuthors.html" target="_blank"><font color="#000000">All Past Issues</font><br>
                  <font color="#000000">from 1982 - archived by volume, title and names of authors</font></a></p>
                <p align="center" class="style75"><a href="LelaCarayannisBouboulinaOrg.html">----------</a></p>
                <p align="center" class="style53">MISCELLANEOUS</p>
                <p align="center" class="style85">Dr. George Pararas-Carayannis</p>
                <p align="center" class="style85"><img src="http://www.drgeorgepc.com/GPC06.jpg" alt="" width="144" height="166"></p>
                <table width="68%" height="170" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber21" style="border-collapse: collapse">
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="BioSummary.html" target="_blank"><font color="#000000">Bio Summary</font></a> </td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Publications.html" target="_blank"><font color="#000000">Publications</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style21 style79 style70" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="RecentPublicationsGPC.html" target="_blank"><font color="#000000">Recent Publications</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p align="left" class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="Book.html" target="_blank"><font color="#000000">Recent Books</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="1" bordercolor="#CA0000"><p class="style75" style="margin-left: 4; margin-top: 2; margin-bottom: 2"><a href="ConsultingSerivces" target="_blank"><font color="#000000">Consulting Services</font></a></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="16" bordercolor="#CA0000"><div align="center"></div></td>
                  </tr>
                  <tr>
                    <td width="100%" valign="top" bgcolor="#bcb88a" height="44" bordercolor="#CA0000"><div align="center" class="style101">BOOK</div></td>
                  </tr>
                </table>
                <p align="center" class="style85"><img src="DISASTERPAGEBookCover.gif" alt="" width="165" height="259" class="style21"></p>
                <p align="center" class="style85"><strong><font color="#000066" size="2" face="Verdana, Arial, Helvetica, sans-serif"><A HREF="http://www.drgeorgepc.com/BookTitle5.gif"><IMG SRC="http://www.drgeorgepc.com/BookTitle5.gif" alt="" WIDTH="163"
                                        HEIGHT="27" BORDER="0" ALIGN="BOTTOM" NATURALSIZEFLAG="0"></A></font></strong></p>
                <p align="center" class="style85"><font face="Verdana, Arial, Helvetica, sans-serif">Now available
                  from Amazon, Barnes and Noble and other major bookstores. </font></p>
                <p align="center" class="style75"><a href="http://www.drgeorgepc.com/BookTitle5.gif"><img src="http://www.drgeorgepc.com/emailcl.gif" alt="drgeorgepc@yahoo.com" width="92" height="49"></a></p>
                <p align="center" class="style75"><a href="mailto:drgeorgepc@yahoo.com">EMAIIL</a></p>
                <p align="center" class="style84">WEBSITE AWARDS</p>
                <p align="center"><a href="LelaCarayannisBouboulinaOrg.html"><img src="http://www.drgeorgepc.com/NSTA.gif" width="100" height="61"></a></p>
                <p align="center" class="style84">National Science Teachers Association</p>
                <p align="center" class="style84"><a href="LelaCarayannisBouboulinaOrg.html"><img src="http://www.drgeorgepc.com/timepic2.gif" width="89" height="100"></a></p>
                <p align="center" class="style84">Los Angeles Times Award</p>
              </center>
            </div>            </td>
          <td width="86%" height="100%" rowspan="2" align="left" valign="top" background="canvas4.gif" bgcolor="#bcb88a" style="border-style: none; border-width: medium"><table width="268" height="1310" align="right" cellspacing="5" class="table3" style="margin-bottom: 2">
              <tr>
                <td width="254" height="81" class="table4"><div align="center">
                    <p><strong><font color="#FF0000"><font color="#FF0000"><font color="#000000"><font color="#FF0000"><font color="#FF0000"><font color="#FF0000"><font color="#FF0000"><font color="#000000"><font color="#FF0000"><font color="#FF0000"><fontsize="-2">
                      <script language="JavaScript1.2" src="http://www.altavista.com/static/scripts/translate_engl.js"></script>
                    </font></font></font></font></font></font></font></font></font></font></font></strong></p>
                  </div>                </td>
              </tr>
              <tr>
                <td height="401"><script type="text/javascript"><!--
                google_ad_client = "pub-2459282603571929";
                google_ad_width = 160;
                google_ad_height = 600;
                google_ad_format = "160x600_as";
                google_ad_type = "text";
                google_ad_channel ="";
                google_color_border = "F4F4F4";
                google_color_bg = "F4F4F4";
                google_color_link = "0000FF";
                google_color_text = "000000";
                google_color_url = "000000";
                //--></script>
                                    <script type="text/javascript"
                  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
              </script>                </td>
              </tr>
              <tr>
                <td height="806"><div align="left">
                    <p>&nbsp; </p>
                    <p align="left">&nbsp;</p>
                    <p align="center">&nbsp;</p>
                  </div>                </td>
              </tr>
        </table>
            <form method="get" action="http://www.google.com/custom" target="_top">
                <table width="67%" height="1816" border="1" align="left" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber7" style="border-collapse: collapse">
                  <tr>
                    <td width="90%" height="1310" align="left" valign="top" bordercolor="#CA0000" bgcolor="#bcb88a"><br>
                      <font face="Geneva, Arial, Helvetica, sans-serif"><p align="center"><a href="http://www.drgeorgepc.com/NavigationGuide.html" target="_blank" class="style150" "><font color="#000000">Website Navigation Guide</font></a></font></p>
                      <table width="100%" height="1312" border="1" cellpadding="0" cellspacing="0" bordercolor="#111111" id="AutoNumber4" style="border-collapse: collapse">
                        <tr align="left">
                          <td width="99%" height="1310" valign="top" bordercolor="#CA0000" bgcolor="#bcb88a"><div align="left" style="margin-bottom: 2">
                            <div align="left">
                              <div align="justify">
                                <blockquote>
                                  <p><font color="#000000"><font color="#000000"><font color="#000000" size="4" face="Arial"><img src="http://www.drgeorgepc.com/GPC06.jpg" width="168" height="218" hspace="10" align="left"></font></font></font></p>
                                  <p><font color="#000000"><font color="#000000"><font color="#000000" size="4" face="Arial"><font size="3">
                                    <!-- google_ad_section_start -->
                                    </font></font></font></font><strong><span class="style108"><em><font color="#000000">Welcome to my website. My
                                      name is George Pararas-Carayannis. The Disaster
                                      Pages provide a wealth
                                      of educational
                                      and scientific information
                                      regarding recent
                                      and historical, global
                                      and regional destructive
                                      tsunamis, devastating
                                      earthquakes,
                                      deadly volcanic eruptions
                                      (like Krakatoa),
                                      killer hurricanes
                                      and hurricane surges
                                      and man-made disasters.
                                      To complete these
                                      comprehensive
                                      
                                      Disaster Pages,  the additional
                                      major categories
                                      of Climate Change,
                                      Ocean Governance,
                                      Ocean Sustainability,
                                      and Disaster Archaeology have been added.
                                      To facilitate
                                      review 
                                      and searches of
                                      certain topics,
                                      included on
                                      the left
                                      top corner of each
                                      page, is a <a href="http://www.drgeorgepc.com/NavigationGuide.html" target="_blank" class="style158"><font color="rgb(154,185,115)">Navigation Guide</font></a> that
                                      links to a General
                                      Site Map with  specific
                                      portals to numerous
                                      other
                                      of my pages. Furthermore, new material is 
                                      continuously
                                      added
                                      as well as formatting improvements to the
                                      older pages to make
                                      them more user-friendly. I
                                      have tried to separate
                                      the informational
                                      and educational sections
                                      of this website from
                                      the more technical,
                                      scientific reports.  This website has been
                                      prepared for public
                                      information, as a
                                      community service,
                                      and in support of
                                      other Internet sites
                                      dealing with the
                                      same subjects.                                            <!-- google_ad_section_end -->
                                  </font></em></span></strong></p>
                                  <p class="style108"><strong><em><font color="#000000>I
                                    have no institutional sponsor and I am solely responsible for the accuracy
                                    of the contents of this website. For
                                    your information, for
                                    about 35 years, I was involved with Tsunami Research at the Hawaii
                                    Institute
                                    of Geophysics of
                                    the University of Hawaii
                                    and with scientific organizations of the U. S. Government and also  served
                                    as Director of the World Data Center A-Tsunami,
                                    as Director of the International Tsunami Information Center (ITIC) (under
                                    the auspices of the Intergovernmental Oceanographic Commission
                                    (IOC) of UNESCO
                                    and as Tsunami Advisor for
                                  the State of Hawaii's Civil Defense. </em></strong></p>
                                  <p class="style108"><strong><em> <font color="#000000">As Oceanographer of the U.S. Army, Corps of Engineers, New York District, I conducted multidisciplinary  environmental studies of the effects of ocean dumping in the New York Bight, using deep diving submersibles and surface vessels. As Oceanographer of the U.S. Army Corps of Engineers Coastal Engineering Research Center (CERC) in Washington D.C., I assisted as consultant the Nuclear Regulatory Commission on nuclear plant sitting, on evaluation of hurricanes and hurricane surge effects on nuclear power plants, on reviews of Environmental impact statements, on the development and application of mathematical models and on other varied assignments. As member of the American Nuclear Society, I co-authored the Society&rsquo;s National  Environmental Standards for Nuclear Power Plants, safety, and sitting, and participated at hearings of the President's Council on Environmental Quality.
                                    
                                    
                                    As Chief Scientist and Consultant to UNDP (United Nations Development Program) on South America, Southwest Pacific and Southeast Asia Missions, I helped develop regional plans for disaster mitigation, the establishment of Regional Tsunami Warning Systems and prepared master plans for the development and implementation
                                  of warning systems, as well as proposals for U.N. funding.  As consultant to UNESCO and as member of a Special Committee, I helped develop and prepare a program of implementation for the Secretary General of the United Nations on the International Decade for Natural Disaster Mitigation (IDNDR). As Consultant to the Intergovernmental Oceanographic Commission / Marine Sciences Section of UNESCO and UNDRO (United Nations Disaster Relief Organization), in Geneva, I assisted in establishing special training programs in developing countries in South America and  other countries bordering the Pacific and Indian Oceans. </em></strong></p>
                                  <p class="style108"><strong><em>Additionally,
                                    I served as consultant to other United Nations scientific organizations,
                                    several international governmental and non-governmental organizations and
                                    to private industry (see<a href="BioSummary.html" target="_blank" class="style157"><font color="rgb(154,185,115)"> brief
                                      bio-summary</font></a> &amp; <a href="Publications.html" target="_blank"><font color="rgb(154,185,115)">writings
                                        and publications</font></a>.). I was co-founder and
                                    officer of two scientific organizations: The Tsunami Society and the International
                                    Hazards
                                    Society. I am presently
                                    President of the </font><a href="http://www.tsunamisociety.org" target="_blank"><font color="rgb(154,185,115)">Tsunami
                                      Society International </font></a><font color="#000000"> and serve as Editor of its International Journal </font><a href="http://www.tsunamisociety.org" target="_blank"><font color="rgb(154,185,115)">&quot;SCIENCE
                                  OF TSUNAMI HAZARDS&quot;</font></a>.</em></strong></p>
                                  <p align="center" class="style108"><strong><font color="#0000FF" face="Geneva, Arial, Helvetica, sans-serif"><a href="NavigationGuide.html" target="_parent" class="style150"><font color="rgb(154,185,115)">Website Navigation Guide</font></a></font></strong></p>
                                  <p align="center" class="style164"> <font color="#000000">7th International Tsunami Symposium of Tsunami Society International <br>
                                    12 -15 SEPTEMBER 2016 ( ISPRA 2016, near Milan, ITALY), with optional field trip to the facilities of the European<br>
                                  Emergency Response Co-ordination Centre (ERCC) in Brussels, Belgium</font><a href="7TSI-ISPRA2016Announcement2.pdf" target="_blank"></font></a></p>
                                  <p align="center" class="style164"><a href="http://www.drgeorgepc.com/7TSI_ISPRA2016Announce2.pdf" target="_blank"><font color="rgb(154,185,115)">7th International Tsunami Symposium</font></a></p>
                                  <p align="center" class="style164">&nbsp;</p>
                                </blockquote>
                              </div>
                            </div>
                            </div>
                            <blockquote>
                              <p><span class="style165"><span class="style162"><strong><a href="http://www.drgeorgepc.com/MiscellaneousWritings.html" target="_blank"><img src="http://www.drgeorgepc.com/DragonHeading.gif" width="176" height="126" hspace="6" vspace="6" border="0" align="left"></a></strong></span></span>
                              </p>
                            </blockquote>
                            <div align="left" class="style100">
                              <blockquote>
                                <p><strong><font color="#000000">In
                                  addition to these Disaster Pages I maintain a mirror Earthquake Page and
                                  another web page with
                                  some of my <a href="http://www.drgeorgepc.com/MiscellaneousWritings.html" target="_blank" class="style157"><font color="rgb(154,185,115)">MISCELLANEOUS,
                                    NON-TECHNICAL WRITINGS</font></a> (published or unpublished articles, essays,
                                  short stories and poems - some of the latter featured also in the International
                                  Poetry Hall of Fame, The National Library of Poetry, in the &quot;Greek
                                  Letters&quot;,
                                and in Miscellaneous Anthologies).</font></strong></p>
                              </blockquote>
                            </div>
                            <blockquote>
                              <p align="left" class="style169"><strong><font color="#000000">My book, entitled &quot;THE
                                BIG ONE - The Next Great California Earthquake&quot; is  available
                                from Amazon, Barnes and Noble and other major bookstores. For a signed
                                First Edition, or a full color electronic version in CD-ROM, contact directly <a href="mailto:drcarolynpc@info-now.org" target="_blank"><font color="rgb(154,185,115)">Aston
                                  Forbes Publishing</font></a>. All about the book and to preview chapter contents <a href="Book.html" target="_blank"><font color="rgb(154,185,115)">CLICK
                              HERE</font></a>.</strong> <strong>Please also check the Navigation Guide for my ebooks.</font></strong> </p>
                              <p align="left" class="style169">&nbsp;</p>
                            </blockquote>
                            <p align="center" class="style169">
                            
                            <script type="text/javascript"
                            src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script></p>
                            <BLOCKQUOTE>
                              <blockquote>&nbsp;</blockquote>
                              <p align="center" class="style169">&nbsp;<strong><font color="#000000">For
                                  Consulting Services, Speaking Engangements, Disaster Risk
                                  Asseessments, Short
                                Courses or Disaster Training Workshops, please contact me by email.<a href="mailto:drgeorgepc@yahoo.com"><img src="http://www.drgeorgepc.com/emailcl.gif" alt="" width="92" height="49" border="0"></font></a></strong></p>
                                <p align="center" class="style169"> <a href="TsunamiLinks.html" target="_parent"><font color="rgb(154,185,115)">Tsunami </font></a>... <a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Earthquakes</font></a> .. <a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Seismotectonics</font></a> .. <a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Hurricanes</font></a> ... <a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Volcanic
                                  Eruptions</font></a>..<a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Tornadoes</font></a>..<a href="NavigationGuide.html" target="_parent"><font color="rgb(154,185,115)">Natural
                                    Disasters</font></a>. <a href="DisasterArchaeology.html" target="_blank"><font color="rgb(154,185,115)">Disaster
                                      Archaeology</font></a>. <a href="ClimateChange.html" target="_blank"><font color="rgb(154,185,115)">Climate
                                        Change</font></a> . <a href="OceanGovernance.html" target="_blank"><font color="rgb(154,185,115)"> Ocean
                                Governance</font></a> </p>
                                <p align="center" class="style169"><strong><a href="Announcements.html" target="_blank"><font color="rgb(154,185,115)">Announcements</font></a> .. <a href="CompletedEvents.html" target="_blank"><font color="rgb(154,185,115)">Completed</font></a><a href="CompletedEvents.html"><font color="rgb(154,185,115)"> Events</font></a><font color="#000000">..  Special
                                  Bulletins: </font><a href="SpecBulletinEarthqTsun.html" target="_blank"><font color="rgb(154,185,115)">Recent
                                    Disasters</font></a> .. <a href="BooksAndBookReviews.html" target="_blank"><font color="rgb(154,185,115)">Books &amp; Book
                                      Reviews</font></a> .. <a href="NavigationGuide.html#TsunamiSociety" target="_parent"><font color="rgb(154,185,115)">sTsunami
                                Society</font></a> </strong></p>
                                <p align="center" class="style169"><strong><font color="#000000">Dr.
                                  George Pararas-Carayannis:. </font><a href="BioSummary.html" target="_blank"><font color="rgb(154,185,115)">Bio
                                    Summary</font></a> <a href="Publications.html" target="_blank"><font color="rgb(154,185,115)"> .. Publications</font></a> .. <a href="RecentPublicationsGPC.html" target="_blank"><font color="rgb(154,185,115)">Recent
                                      Publications</font></a> ..<a href="Book.html" target="_blank"><font color="rgb(154,185,115)">Recent
                                        Books</font></a> .. <a href="MiscellaneousWritings.html" target="_blank"><font color="rgb(154,185,115)">Miscellaneous
                                Writings</font></a> ..</strong></p>
                                <p align="center" class="style169"><font color="#0000FF" face="Geneva, Arial, Helvetica, sans-serif"><a href="NavigationGuide.html" target="_parent" class="style150"><font color="rgb(154,185,115)">Website Navigation Guide</font></a></font>                              </p>
                                <p align="center" class="style171"><font color="#000000">&copy; Copyright
                                1960-2022 George Pararas-Carayannis / all rights reserved </font></p>
                                <p align="center" class="style172"> <font color="#000000">Information
                                  on this site
                                  is for viewing and personal information
                                  only. Any unauthorized use or reproduction of
                                  material from this site without written permission is prohibited. Material
                                  included at the website links above is for informative and educational
                                  purposes and for disaster preparedness only. Any predictions of  earthquakes,
                                  destructive tsunamis, or any other natural disasters presented in these
                                  pages are based primarily on statistical determinations of the historical
                                  recurrence frequencies of such events. Such historical/statistical approaches
                                  are used only for long-term predictions. There is no intent by the author
                                  to predict or forecast any
                                type of natural disaster or to frighten peopl      </font></p>
                                <p align="center" class="style172">&nbsp;</p>
                                <div align="center">
                                  
                                  
                                  <p></p>
                                  <p class="style173"><font color="#000000">Attend&nbsp;</font><a href="https://www.excelhighschool.com/excel-middle-school-online" class="style173"><font color="rgb(154,185,115)">Middle School Online</font></a><font color="#000000">&nbsp;at Excel</font></p>
                                  <p class="style173"><strong><a href="https://www.bestcustomwriting.com" target="_self" class="style173"><font color="rgb(154,185,115)">Best Paper Writing Service</font></a> <font color="#000000">for College
                                    Students on a Budget</font></strong>                                </p>
                                  <p><strong><font color="#000000">Geography  </font><a href="https://mypaperwriter.com" target="_blank" class="style173"><font color="rgb(154,185,115)">paper writers</font></a><font color="#000000">  for hire online.</font></strong></p>
                                  <p><strong><br><font color="#000000">
                                  Get </font><a href="https://www.mydissertations.com" target="_blank" class="style173"><font color=
                                    "rgb(154,185,115)">help with thesis</font></a><font color="#000000">  from PhD students</font></strong>.</p>
                                  <p>&nbsp;</p>
                                </div>
                                <p align="center" class="style172">&nbsp;</p>
                                <p align="center" class="style172">&nbsp;</p>
                            </BLOCKQUOTE>                    </td>
                        </tr>
                      </table>              
                    </td>
                    
                  </tr>
                  
                </table>
            </form>
            <?php
                        echo
                        "<form method='post' action='".setComment($conn)."'>
                        <input type='hidden' name='uid' value='Anonymous'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s' )."'>
                        <textarea name='message'></textarea></br>
                        <button type='submit' name='commentSubmit' >Comment</button>
                        </form></br>";

                        getComment($conn);

                        ?>
</td>
                   
        </tr>
        <tr class="style108">
          <td height="44" valign="bottom" bgcolor="#bcb88a" class="style9" style="border-style: none; border-width: medium">.</td>
        </tr>
    </table>    
    </td>
  </tr>
  <tr>
    <td width="100%" height="68" class="style8" style="border-style: none; border-width: medium"> </td>
  </tr>
</table>
<script type="text/javascript">(function (d, w) {var x = d.getElementsByTagName('SCRIPT')[0];var f = function () {var s = d.createElement('SCRIPT');s.type = 'text/javascript';s.async = true;s.src = "//np.lexity.com/embed/YW/a26a830039344fbb3f3554e25e17225b?id=58fbe9626bd6";x.parentNode.insertBefore(s, x);};w.attachEvent ? w.attachEvent('onload',f) :w.addEventListener('load',f,false);}(document, window));</script>

    </body>
</html>