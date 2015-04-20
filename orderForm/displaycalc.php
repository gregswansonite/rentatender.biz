<html><head>

<style type="text/css">

.body {
	font-family: "Times New Roman", Times, serif;
	font-size: 16px;
}
.bold {
	font-weight: bold;
}
.bold {
	font-weight: bold;
}
.bold {
	font-weight: bold;
}
.bold {
	font-weight: bold;
}
.bold {
	font-weight: bold;
}

</style><link href="print.css" rel="stylesheet" type="text/css" media="print" /></head>

<table width="800" border="0" align="center" class="body">
  <tr>
    <td width="421" height="105"><img src="logo.png" width="41" height="43" align="bottom" /> &nbsp;&nbsp;GottaGoLive.com</td>
    <td colspan="2" class="Title">Web Design &amp; Development Quote</td>
  </tr>
  <tr>
    <td height="55" colspan="3" valign="top">Gottagolive.com<br />
      Make people. Make money.<br /><hr /></td>
  </tr>
  <tr>
    <td>3913 Sumac<br />
      Temple, TX 76502<br />
    (254) 534-2954<br />customerservice@gottagolive.com</td>
    <td width="136" align="right" valign="top">Work Order Number: <br />
      Date: <br />
    Customer ID: </td>
    <td width="229" valign="top"> 0001<br  />
      8/20/2014<br />
    0001</td>
  </tr>
  <tr>
    <td colspan="3"><?php
$havepagesalready = $_POST['havepagesalready'];
$needpagesfromscratch = $_POST['needpagesfromscratch'];
$content= $_POST['Content'];
$general= $_POST['General'];
$sitelayout= $_POST['Site_Layout_Design'];
$othergraphics1= $_POST['Other_Graphic_Features1'];
$othergraphics2= $_POST['Other_Graphic_Features2'];
$othergraphics3= $_POST['Other_Graphic_Features3'];
$othergraphics4= $_POST['Other_Graphic_Features4'];
$flash1 = $_POST['Flash1'];
$flash2 = $_POST['Flash2'];
$flash3 = $_POST['Flash3'];
$publicfeatures1 = $_POST['Public_Features1'];
$publicfeatures2 = $_POST['Public_Features2'];
$publicfeatures3 = $_POST['Public_Features3'];
$publicfeatures4 = $_POST['Public_Features4'];
$publicfeatures5 = $_POST['Public_Features5'];
$publicfeatures6 = $_POST['Public_Features6'];
$publicfeatures7 = $_POST['Public_Features7'];
$adminfeatures1 = $_POST['Admin_Features1'];
$adminfeatures2 = $_POST['Admin_Features2'];
$adminfeatures3 = $_POST['Admin_Features3'];
$ecommerce = $_POST['Ecommerce'];
$seo1 = $_POST['SEO1'];
$seo2 = $_POST['SEO2'];

$totalhours= 0;
echo "<hr>SERVICES:<br><br>Customer Requests<hr>";
if ($general == "1"){
echo "I have an existing web site. (0 Hours)";
echo "<br>";
};
if ($general == "3"){
echo "I need a basic, off the shelf, template based type site set up. (5 Hours)";
$totalhours= $totalhours + 5;
echo "<br>";
};
if ($general == "4"){
echo "I need a completely custom site. (15 Hours)";
$totalhours= $totalhours + 15;
echo "<br>";
};
if ($sitelayout == "5"){
echo "I do not need any unique graphics designed for this project. (0 Hours)";
echo "<br>";
};
if ($sitelayout == "6"){
echo "I have some graphics but they need to be integrated. (3 Hours)";
$totalhours= $totalhours + 3;
echo "<br>";
};
if ($sitelayout == "7"){
echo "I have no graphics and need a basic site layout. (10 Hours)";
$totalhours= $totalhours + 10;
echo "<br>";
};
if ($sitelayout == "9"){
echo "I would like a custom design created for my site. (16 Hours)";
$totalhours= $totalhours + 16;
echo "<br>";
};
if ($othergraphics1 == "10"){
echo "I need some custom graphics made. (6 Hours)";
$totalhours= $totalhours + 6;
echo "<br>";
};
if ($othergraphics2 == "11"){
echo "I need custom graphic mouse-over buttons. (4 Hours)";
$totalhours= $totalhours + 4;
echo "<br>";
};
if ($othergraphics3 == "12"){
echo "I need a few stock photographs integrated. (4 Hours)";
$totalhours= $totalhours + 4;
echo "<br>";
};
if ($othergraphics4 == "40"){
echo "Photo Gallery (6 Hours)";
$totalhours= $totalhours + 6;
echo "<br>";
};
if ($flash1 == "14"){
echo "I need a flash menu. (6 Hours)";
$totalhours= $totalhours + 6;
echo "<br>";
};
if ($flash2 == "15"){
echo "I need a short custom Flash animation. (3 Hours)";
$totalhours= $totalhours + 3;
echo "<br>";
};
if ($flash3 == "17"){
echo "I need a Flash banner. (4 Hours)";
$totalhours= $totalhours + 4;
echo "<br>";
};
if ($content == "19"){
echo "I will supply ";
echo $havepagesalready;
$temp1 = $havepagesalready * 2;
echo "  pages of content in MS Word or other electronic media. (2 Hours per Page) ($temp1 Hours)";
$totalhours= $totalhours + (2 * $havepagesalready);
echo "<br>";
};
if ($content == "20"){
echo "I will need ";
echo $needpagesfromscratch;
$temp = $needpagesfromscratch * 4;
echo " pages of copywriting done for my content. (4 Hours per Page) ($temp Hours)";
$totalhours= $totalhours + (4 * $needpagesfromscratch);
echo "<br>";
};
if ($publicfeatures1 == "21"){
echo "Member Registration (6 Hours)";
$totalhours= $totalhours + 6;
echo "<br>";
};
if ($publicfeatures2 == "22"){
echo "Discussion Forums (5 Hours)";
$totalhours= $totalhours + 5;
echo "<br>";
};
if ($publicfeatures3 == "26"){
echo "Contact Form (3 Hours)";
$totalhours= $totalhours + 3;
echo "<br>";
};
if ($publicfeatures4 == "27"){
echo "Links Page (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};
if ($publicfeatures5 == "28"){
echo "Site Search (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};
if ($publicfeatures6 == "30"){
echo "File Uploads (8 Hours)";
$totalhours= $totalhours + 8;
echo "<br>";
};
if ($publicfeatures7 == "31"){
echo "Google Adsense Integration (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};
if ($ecommerce == "33"){
echo "Shopping cart (16 Hours)";
$totalhours= $totalhours + 16;
echo "<br>";
};
if ($adminfeatures1 == "37"){
echo "Custom Site Blog (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};
if ($adminfeatures2 == "39"){
echo "Off the shelf Content Manager (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};
if ($adminfeatures3 == "41"){
echo "Member Administration (5 Hours)";
$totalhours= $totalhours + 5;
echo "<br>";
};
if ($seo1 == "44"){
echo "MetaTag Keyword Optimization (4 Hours)";
$totalhours= $totalhours + 4;
echo "<br>";
};
if ($seo2 == "45"){
echo "Search Engine Submission (2 Hours)";
$totalhours= $totalhours + 2;
echo "<br>";
};

$basepay="8";

echo "<br>";
echo $totalhours;
echo " Total Hours";
echo "<br>";
$totalcharge=$basepay * $totalhours;
echo "<br>";
echo "Your estimated total payment amount";
echo " is $";
$halfcharge = $totalcharge/2;
echo $totalcharge;
echo ".<br>";
echo "This is calculated using a base rate of $$basepay per hour.";
echo "<br><br>";
echo "Initial due payment amount is $$halfcharge.";
echo "<br>";
echo "This payment amount is half of the estimated total payment.<br>";
echo "The other half of the payment will be re-calculated, and due upon project completion.<br>Your site will be launched as soon as the final payment is received.";
?></td>
  </tr>
  <tr>
    <td colspan="3"><hr />MAINTENANCE FEES:<br /><br />
      Maintenance includes any small modifications or updates to <span class="bold">existing</span> content.<br /><br />The monthly maintenance fee is $30.<br /><br />All maintenance fees are due on the fifth of each month.<br />Monthly maintenance includes <span class="bold">5 hours</span> of work time or <span class="bold">10 update requests</span>.<br />
    Each additional hour will cost $10 per hour and will be added to your next maintenance payment.<br />Each update request will subtract 30 minutes from your monthly maintenance time.<hr />
   <div class="page-break"></div>
    REVISIONS & ADD-ONS:<br />
      <br />
      PROJECT REVISION LIMIT:<br />
      Please be clear on all initial design requests. It is your responsibility to make sure that we know exactly what you want before development begins. <span class="bold">Each design element can be revised a total of 3 times</span>.
    <p>EXCESSIVE REVISONS:<br /> 
    Each additional revision will add to the total project development time and increase the total estimated cost. Excess design requests will be accumulated and added to the total payment amount.    <br />
<br />FUTURE WORK &amp; ADD-ONS:<br />
Add-ons are changes or upgrades that occur <span class="bold">after</span> site launch.<br />
The following items are considered add-ons: </p>
    <ul>
      <li>new logo design</li>
      <li> new layout design</li>
      <li>new page</li>
      <li>new functions or features</li>
      <li>structure changes</li>
    </ul>
    <p> Pricing details for individual site elements are posted on our website.</p>    </p></td>
  </tr>
</table>
 </html>