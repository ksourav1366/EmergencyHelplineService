<?php
//Intialize Session
session_start();

if (isset($_SESSION['login'])) {

    $fname =$_SESSION['fname'];
    $lname =$_SESSION['lname'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emergency || Police Contact</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="vendor/html5shiv.js"></script>
        <script src="vendor/respond.js"></script>
    <![endif]-->

</head>

<body>
    <div class="main-page-wrapper">



        <!--Theme Header( Navbar)-->

			<?php require_once 'nav.php'; ?>
        <!--
        =====================================================
            Theme Inner page Banner
        =====================================================
        -->
        <section class="inner-page-banner">
            <div class="opacity">
                <div class="container">
                    <h2>POLICE</h2>
                    <h4 style="color:#fff"><?php echo $fname;echo "&nbsp;"; echo $lname; ?> -<a href="logout.php">Logout</a></h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Police Contacts</li>
                    </ul>
                </div> <!-- /.container -->
            </div> <!-- /.opacity -->
        </section> <!-- /.inner-page-banner -->
        <!--
        =====================================================
            Blog Page Details
        =====================================================
        -->
        <article class="blog-details-page">
            <div class="container">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 p-fix">
                    <div class="blog-details-post-wrapper">
                        <img src="images/blog/Police contacts.jpg" alt="Image">
                        <div class="post-heading">
                            <h4>Police Contacts</h4>
                            <!--<span>Posted by <a href="#" class="tran3s p-color">admin</a>  at 04 Feb, 2017</span>-->
                        </div> <!-- /.post-heading -->
        <!--
        =====================================================
            Police Headquaters
        =====================================================
        -->
              <table style="font-family: verdana">          
                        <p style="font-family: verdana"><center><strong><u>Police Headquaters</u></strong></center></p>
                        
                        <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                              <div class="col-sm-8"><strong>Contact</strong></div>
                           </div></p>
                        <p style="font-family: verdana"><div class="row"  style="font-family: verdana">
                              <div class="col-sm-4">DGP</div>
                              <div class="col-sm-8">0651-2400737 , 2361316</div>
                              <div class="col-sm-4">D.G (HQ)</div>
                              <div class="col-sm-8">0651-2446048</div>
                              <div class="col-sm-4">Additional DG Training</div>
                              <div class="col-sm-8">7781001777</div>
                              <div class="col-sm-4">Additional DG Mod.</div>
                              <div class="col-sm-8">0651-2400721 , 2440032</div>
                              <div class="col-sm-4">IG Training</div>
                              <div class="col-sm-8">0651-2400744</div>
                              <div class="col-sm-4">IG (Prov.)</div>
                              <div class="col-sm-8">0651-2400722</div>
                              <div class="col-sm-4">IG (Ops)</div>
                              <div class="col-sm-8">0651-2440781</div>
                              <div class="col-sm-4">IG (HR)</div>
                              <div class="col-sm-8">0651-2400729</div>
                              <div class="col-sm-4">IG (H.Q)</div>
                              <div class="col-sm-8">0651-2446442 , 2340148</div>
                              <div class="col-sm-4">DIG (Budget)</div>
                              <div class="col-sm-8">0651-2400090 , 2490060</div>
                             </div> <br /> <br />
                            
                       <p><center><strong><u>SCRB</u></strong></center></p>

                       <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                          </div></p>
                       <p style="font-family: verdana"><div  style="font-family: verdana" class="row">
                              <div class="col-sm-4">IG, SCRB</div>
                              <div class="col-sm-8">0651-2444077</div>
                              <div class="col-sm-4">SP , SCRB</div>
                              <div class="col-sm-8">0651-2491350 , 2443009</div>
                             </div> <br /><br />

                       <p><center><strong><u>Wireless</u></strong></center></p>

                       <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                          </div></p>
                       <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Additional D.G. Wireless</div>
                             <div class="col-sm-8">0651-2218400</div>
                             <div class="col-sm-4">DIG</div>
                             <div class="col-sm-8">0651-2201919</div>
                             <div class="col-sm-4">SP Wireless</div>
                             <div class="col-sm-8">9934337040</div>
                             <div class="col-sm-4">Additional SP</div>
                             <div class="col-sm-8">0651-2202344</div>
                             <div class="col-sm-4">DY.SP</div>
                             <div class="col-sm-8">8210788391</div>
                             </div> <br /><br />

                            <p><center><strong><u>Kolhan Range</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                              <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DIG , Chaibasa</div>
                            <div class="col-sm-8">06582-257999</div>
                            <div class="col-sm-4">SP , Chaibasa</div>
                            <div class="col-sm-8">06582-256305</div>
                            <div class="col-sm-4">SSP,Jamshedpur</div>
                            <div class="col-sm-8">0657-2431006</div>
                            <div class="col-sm-4">SP City, Jamshedpur</div>
                            <div class="col-sm-8">0657-2437666</div>
                            <div class="col-sm-4">SP Rural,Jamshedpur</div>
                            <div class="col-sm-8">0657-234004</div>
                            <div class="col-sm-4">SP,Saraikela</div>
                            <div class="col-sm-8">06597-234004</div>
                           </div> <br /> <br />

                            <p><center><strong><u>JAP</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">D.G.(JAP)</div>
                            <div class="col-sm-8">0651-2490145</div>
                            <div class="col-sm-4">ADG, JAP</div>
                            <div class="col-sm-8">9771408884</div>
                            <div class="col-sm-4">IG,JAP</div>
                            <div class="col-sm-8">0651-2491551</div>
                            <div class="col-sm-4">DIG, JAP</div>
                            <div class="col-sm-8">0651-2490011</div>
                            <div class="col-sm-4">CO,JAP-01</div>
                            <div class="col-sm-8">0651-2481382</div>
                            <div class="col-sm-4">CO,JAP-02</div>
                            <div class="col-sm-8">06540-2265844</div>
                            <div class="col-sm-4">CO,JAP-03</div>
                            <div class="col-sm-8">06540-262385</div>
                            <div class="col-sm-4">CO,JAP-04</div>
                            <div class="col-sm-8">06542-256649</div>
                            <div class="col-sm-4">CO,JAP-05</div>
                            <div class="col-sm-8">06432-2290999</div>
                            <div class="col-sm-4">CO,JAP-06</div>
                            <div class="col-sm-8">0657-2211013</div>
                            <div class="col-sm-4">CO,JAP-07</div>
                            <div class="col-sm-8">06546-264444</div>
                            <div class="col-sm-4">CO,JAP-08</div>
                            <div class="col-sm-8">06562-282006</div>
                            <div class="col-sm-4">CO,JAP-09</div>
                            <div class="col-sm-8">06436-222432</div>
                            <div class="col-sm-4">CO,JAP-10</div>
                            <div class="col-sm-8">0651-2270005</div>
                           </div> <br /> <br />

                            <p><center><strong><u>Hazaribag Range</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DIG,Hazaribag</div>
                            <div class="col-sm-8">06546-224804</div>
                            <div class="col-sm-4">SP,Hazaribag</div>
                            <div class="col-sm-8">06546-224815</div>
                            <div class="col-sm-4">SP,Chatra</div>
                            <div class="col-sm-8">06541-223037</div>
                            <div class="col-sm-4">SP,Koderma</div>
                            <div class="col-sm-8">06534-252227</div>
                            <div class="col-sm-4">SP, Giridih</div>
                            <div class="col-sm-8">06532-222056</div>
                            <div class="col-sm-4">SP Ramgarh</div>
                            <div class="col-sm-8">06553-261520</div>
                           </div> <br /> <br />

                            <p><center><strong><u>CID</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Additional D.G.(CID)</div>
                            <div class="col-sm-8">0651-2490546</div>
                            <div class="col-sm-4">IG,ORG. Crime</div>
                            <div class="col-sm-8">9934577777</div>
                            <div class="col-sm-4">IG</div>
                            <div class="col-sm-8">0651-2490046</div>
                            <div class="col-sm-4">DIG,CID</div>
                            <div class="col-sm-8">9771432105</div>
                            <div class="col-sm-4">SP</div>
                            <div class="col-sm-8">9771432108</div>
                            <div class="col-sm-4">ASP</div>
                            <div class="col-sm-8">0651-2490050</div>
                            <div class="col-sm-4">DY.SP</div>
                            <div class="col-sm-8">9771432106</div>
                            <div class="col-sm-4">Dy. SP</div>
                            <div class="col-sm-8">9771432113</div>
                            <div class="col-sm-4">Dy.SP</div>
                            <div class="col-sm-8">9771432152</div>
                            <div class="col-sm-4">Dy.SP</div> 
                            <div class="col-sm-8">9771432112</div>
                            </div> <br /><br />

                            <p><center><strong><u>Jharkhand Jaguar</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">IG,STF</div>
                            <div class="col-sm-8">0651-2444610</div>
                            <div class="col-sm-4">DIG,Additional Charge</div>
                            <div class="col-sm-8">0651-2444691</div>
                            <div class="col-sm-4">SP,STF</div>
                            <div class="col-sm-8">0651-2444612</div>
                            <div class="col-sm-4">DY.SP(Adm.)</div>
                            <div class="col-sm-8">9470590808</div>
                            <div class="col-sm-4">Dy.SP</div>
                            <div class="col-sm-8">9570001619</div>
                            </div> <br /> <br />

                            <p><center><strong><u>Anti-Terrorist Squad</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">SP,A.T.S</div>
                            <div class="col-sm-8">0651-</div>
                            </div> <br /><br />

                             <p><center><strong><u>Railways</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                              <div class="col-sm-8"><strong>Contact</strong></div>
                             </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Additional DG, Railway</div>
                            <div class="col-sm-8">0651-2490548</div>
                            <div class="col-sm-4">IG, Railway</div>
                            <div class="col-sm-8">0651-2491182</div>
                            <div class="col-sm-4">DIG,Railway</div>
                            <div class="col-sm-8">0651-2462217</div>
                            <div class="col-sm-4">SRP,Ranchi</div>
                            <div class="col-sm-8">8294010500</div>
                            <div class="col-sm-4">SRP,Jamshedpur</div>
                            <div class="col-sm-8">0657-2293311</div>
                            <div class="col-sm-4">SRP, Dhanbad</div>
                            <div class="col-sm-8">0326-2312559</div>
                            </div> <br /><br />

                            <p><center><strong><u>Home Guard</u></strong></center></p>

                            <p style="font-family: verdana"><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DG(H.G & F.S)</div>
                            <div class="col-sm-8">0651-2490615</div>
                            <div class="col-sm-4">DIG(H.G & F.S)</div>
                            <div class="col-sm-8">0651-2490101</div>
                            <div class="col-sm-4">SP,H.G</div>
                            <div class="col-sm-8">0651-2490608</div>
                            </div> <br /><br />

                             <p><center><strong><u>Palamu Range</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                           <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DIG</div>
                            <div class="col-sm-8">06562-224300</div>
                            <div class="col-sm-4">SP, Palamu</div>
                            <div class="col-sm-8">06562-231111</div>
                            <div class="col-sm-4">SP, Latehar</div>
                            <div class="col-sm-8">06565-247475</div>
                            <div class="col-sm-4">SP Garhwa</div>
                            <div class="col-sm-8">06561-223356</div>
                           </div> <br /> <br />

                             <p><center><strong><u>Jharkhand Police Housing Corporation</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                              <div class="col-sm-8"><strong>Contact</strong></div>
                             </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                             <div class="col-sm-4">DG cum Chairman JHPCL</div>
                             <div class="col-sm-8">0651-2224499</div>
                             <div class="col-sm-4">ADG cum MD</div>
                             <div class="col-sm-8">0651-2214712</div>
                             <div class="col-sm-4">Cheif Engineer</div>
                             <div class="col-sm-8">0651-2214712</div>
                             <div class="col-sm-4">Accountant</div>
                             <div class="col-sm-8">0651-2214712</div>
                             </div> <br /><br />

                             <p><center><strong><u>Bokaro Range</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                             </div></p>
                             <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                             <div class="col-sm-4">DIG, Bokaro</div>
                             <div class="col-sm-8">06542-232244</div>
                             <div class="col-sm-4">SSP, Dhanbad</div>
                             <div class="col-sm-8">0326-2220802</div>
                             <div class="col-sm-4">SP City,Dhanbad</div>
                             <div class="col-sm-8">0326-2312626</div>
                             <div class="col-sm-4">SP Rural,Dhanbad</div>
                             <div class="col-sm-8">9431724222</div> 
                             <div class="col-sm-4">SP, Bokaro</div>
                             <div class="col-sm-8">06542-242299</div> 
                             </div> <br /><br />

                            <p><center><strong><u>Special Branch</u></strong></center></p>

                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Additional D.G. SB</div>
                            <div class="col-sm-8">0651-2400989</div>
                            <div class="col-sm-4">DIG,SB</div>
                            <div class="col-sm-8">0651-2401938</div>
                            <div class="col-sm-4">DIG,SIB</div>
                            <div class="col-sm-8">0651-2400330</div>
                            <div class="col-sm-4">SP (N)</div>
                            <div class="col-sm-8">0651-2400986</div>
                            <div class="col-sm-4">SP</div>
                            <div class="col-sm-8">0651-2400993</div>
                            <div class="col-sm-4">SP(N)</div>
                            <div class="col-sm-8">9771400451</div>
                            <div class="col-sm-4">SP</div>
                            <div class="col-sm-8">0651-2400993</div>
                            <div class="col-sm-4">SP(CM Security)</div>
                            <div class="col-sm-8">9934348936</div>
                            <div class="col-sm-4">Dy.SP (Tech)</div>
                            <div class="col-sm-8">0651-2400992</div>
                            <div class="col-sm-4">Dy.SP(Tech)</div> 
                            <div class="col-sm-8">0651-2400994</div>
                            <div class="col-sm-4">Dy.SP Control</div>
                            <div class="col-sm-8">9771400805</div>
                            <div class="col-sm-4">Dy.S.P.Raj Bhawan</div>
                            <div class="col-sm-8">8877700400</div>
                            <div class="col-sm-4">Dy S.P. CM Security</div>
                            <div class="col-sm-8">9771400526</div>
                            <div class="col-sm-4">Dy.SP</div>
                            <div class="col-sm-8">7766906566</div>
                            <div class="col-sm-4">Sgt.Major</div>
                            <div class="col-sm-8">9771408885</div>
                            </div> <br /><br />

                            <p><center><strong><u>Home Department</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Chief Secretary</div>
                            <div class="col-sm-8">0651-2400240</div>
                            <div class="col-sm-4">Home Secretary</div>
                            <div class="col-sm-8">0651-2400220</div>
                            <div class="col-sm-4">Spl.Secretary</div>
                            <div class="col-sm-8">0651-2400700</div>
                            <div class="col-sm-4">Principal Secretary To C.M</div>
                            <div class="col-sm-8">0651-2400249</div>
                            <div class="col-sm-4">Finance Secretary</div>
                            <div class="col-sm-8">0651-2400224</div>
                            <div class="col-sm-4">IG,Prision</div>
                            <div class="col-sm-8">0651-2400790</div>
                           </div> <br /> <br />

                            <p><center><strong><u>Anti Corruption Bureau(A.C.B)</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                           <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DG cum Chief Of A.C.B </div>
                            <div class="col-sm-8">0651-2281530</div>
                            <div class="col-sm-4">DIG,ACB</div>
                            <div class="col-sm-8">0651-2281530</div>
                            <div class="col-sm-4">DIG,ACB</div>
                            <div class="col-sm-8">0651-2281334</div>
                            <div class="col-sm-4">SP,A.C.B</div>
                            <div class="col-sm-8">0651-2281112</div>
                            <div class="col-sm-4">SP,A.C.B</div>
                            <div class="col-sm-8">9471736874</div>
                            <div class="col-sm-4">Additional SP</div>
                            <div class="col-sm-8">0651-2281337</div>
                           </div> <br /> <br />

                            <p><center><strong><u>Dumka Range</u></strong></center></p>

                            <p><div class="row">
                            <div class="col-sm-4"><strong>Rank</strong></div>
                            <div class="col-sm-8"><strong>Contact</strong></div>
                            </div></p>
                            <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">DIG,Dumka </div>
                            <div class="col-sm-8">06434-222207</div>
                            <div class="col-sm-4">SP,Dumka</div>
                            <div class="col-sm-8">06434-222216</div>
                            <div class="col-sm-4">SP,Jamtara</div>
                            <div class="col-sm-8">06433-222020</div>
                            <div class="col-sm-4">SP,Deoghar</div>
                            <div class="col-sm-8">06432-232777</div>
                            <div class="col-sm-4">SP,Pakur</div>
                            <div class="col-sm-8">06435-222091</div>
                            <div class="col-sm-4">SP,Sahebganj</div>
                            <div class="col-sm-8">06436-222160</div>
                            <div class="col-sm-4">SP,Godda</div>
                            <div class="col-sm-8">06422-222008</div>
                           </div> <br /> <br />

                             <p><center><strong><u>Training</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                           </div></p>
                            <p><div class="row" style="font-family: verdana">
                            <div class="col-sm-4">Additional D.G. (Trg & Mod)</div>
                            <div class="col-sm-8">7781001777</div>
                            <div class="col-sm-4">IG,Training</div>
                            <div class="col-sm-8">0651-2400744</div>
                            <div class="col-sm-4">Director,JPA</div>
                            <div class="col-sm-8">06546-270084</div></br>
                            <div class="col-sm-4">DIG,PTC</div>
                            <div class="col-sm-8">9431706131</div>
                            <div class="col-sm-4">SP,JAPTC</div>
                            <div class="col-sm-8">06546-238042</div>
                            <div class="col-sm-4">Principal,TTS</div>
                            <div class="col-sm-8">0657-2270604</div>
                             </div> <br /><br />

                            <p><center><strong><u>Chhotanagpur Range</u></strong></center></p>

                             <p><div class="row">
                             <div class="col-sm-4"><strong>Rank</strong></div>
                             <div class="col-sm-8"><strong>Contact</strong></div>
                             </div></p>
                           <p style="font-family: verdana"><div class="row" style="font-family: verdana">
                             <div class="col-sm-4">DIG Ranchi</div>
                             <div class="col-sm-8">0651-2481889</div>
                             <div class="col-sm-4">SSP Ranchi</div>
                             <div class="col-sm-8">0651-2200237</div>
                             <div class="col-sm-4">SSP Ranchi,Rural</div>
                             <div class="col-sm-8">0651-2200898</div>
                             <div class="col-sm-4">SP,Traffic Ranchi</div>
                             <div class="col-sm-8">0651-2206266</div>
                             <div class="col-sm-4">SP,Lohardaga</div>
                             <div class="col-sm-8">06526-224070</div>
                             <div class="col-sm-4">SP,Gumla</div>
                             <div class="col-sm-8">06524-223091</div>
                             <div class="col-sm-4">SP,Simdega</div>
                             <div class="col-sm-8">06525-225703</div>
                             <div class="col-sm-4">SP Khunti</div>
                             <div class="col-sm-8">06528-221674</div>
                           </div></p> </table>
                    </div> <!-- /.blog-details-post-wrapper -->
                </div> <!-- /.col- -->
            </table>


                <!-- ========================== Aside Bar ======================== -->
                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-fix">
                    <aside>
                        <form action="#" class="sidebar-search-box">
                            <input type="text" placeholder="Search...">
                            <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                        <div class="sidebar-news-list">
                            <h6>Problems Faced By Police</h6>
                            <ul>
                                <li><a href="#" class="tran3s active"><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Police being a part of executive is not free from political interference. Politicization of police force and its use to take undue advantage by those in power.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Internal management systems are not transparent, free and reasonable; they are sometimes arbitrary in nature.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Policing efficiencies have decreased in terms of their core functions.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Public complaints are not addressed properly, there is huge gap between rate at which crimes are committed and FIRs are lodged.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Police accountability is major issue, especially with respect to fake encounters, custodial deaths.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Quality of investigating standards is deteriorating, lack of equipment, weaponry used is obsolete.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Lack of coordination between the internal departments leading to delays in investigation.</a></li>
                                 <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Training standards are very low and do not take into consideration the use of modern technology.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Workload again is one of the major reasons for the inefficiency of Police.</a></li>
                            </ul>
                        </div> <!-- /.sidebar-news-list -->

                        <div class="sidebar-calendar">
                            <h6>Calendar</h6>
                            <div class="monthly" id="blog-calendar"></div>
                        </div> <!-- /.sidebar-calendar -->
                    </aside>
                </div> <!-- /.col- -->
            </div> <!-- /.container -->
        </article>




        <!--Footer linking	-->

			<?php require_once 'footer.php'; ?>


        <!-- =============================================
            Loading Transition
        ============================================== -->
        <div id="loader-wrapper">
            <div id="preloader_1">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>



        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s p-color-bg">
            <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
        </button>




        <!-- Js File_________________________________ -->
        <!-- j Query -->
        <script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Vendor js _________ -->
        <!-- owl.carousel -->
        <script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
        <!-- mixitUp -->
        <script type="text/javascript" src="vendor/jquery.mixitup.min.js"></script>
        <!-- Progress Bar js -->
        <script type="text/javascript" src="vendor/skills-master/jquery.skills.js"></script>
        <!-- Validation -->
        <script type="text/javascript" src="vendor/contact-form/validate.js"></script>
        <script type="text/javascript" src="vendor/contact-form/jquery.form.js"></script>
        <!-- Calendar js -->
        <script type="text/javascript" src="vendor/monthly-master/js/monthly.js"></script>


        <!-- Theme js -->
        <script type="text/javascript" src="js/theme.js"></script>
        <script type="text/javascript" src="js/map-script.js"></script>

    </div> <!-- /.main-page-wrapper -->
</body>
</html>

<?php
} else {
    header("location:login.php");
}
