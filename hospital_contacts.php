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

    <title>Emergency || Hospital Contact</title>

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
                    <h2>Hospital</h2>
                    <h4 style="color:#fff"><?php echo $fname;echo "&nbsp;"; echo $lname; ?> -<a href="logout.php">Logout</a></h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Hospital & Blood Bank Contacts</li>
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
                        <img src="images/blog/Hospital contacts.jpg" alt="Image">
                        <div class="post-heading">
                            <h4>Hospital & Blood Bank Contacts</h4>
                            <!--<span>Posted by <a href="#" class="tran3s p-color">admin</a>  at 04 Feb, 2017</span>-->
                        </div> <!-- /.post-heading -->
        <!--
        =====================================================
            Hospital Contacts
        =====================================================
        -->
              <table style="font-family: verdana">
                            <p class="text-center"><strong><u>Ranchi Hospital</u></strong></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Name</strong></div>
                                    <div class="col-sm-8"><strong>Contact No</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Jharkhand National Hospital</div>
                                    <div class="col-sm-8">9006172558</div>
                                    <div class="col-sm-4">St. Barnabas Hospital</div>
                                    <div class="col-sm-8">0651-6522817</div>
                                    <div class="col-sm-4">K.C.Roy Memorial Hospital</div>
                                    <div class="col-sm-8">9234655073</div>
                                    <div class="col-sm-4">Raj Hospital</div>
                                    <div class="col-sm-8">977148888</div>
                                    <div class="col-sm-4">Santevita Hospital</div>
                                    <div class="col-sm-8">7360033390</div>
                                    <div class="col-sm-4">RPOC Hospital</div>
                                    <div class="col-sm-8">0651-2561822</div>
                                    <div class="col-sm-4">City Hospital</div>
                                    <div class="col-sm-8">0651-2511596</div>
                                    <div class="col-sm-4">Health Point</div>
                                    <div class="col-sm-8">88777300333</div>
                                    <div class="col-sm-4">Nagar Nigam Devkamal Hospital</div>
                                    <div class="col-sm-8">7549332200</div>
                                    <div class="col-sm-4">Guru Nanak Hospital</div>
                                    <div class="col-sm-8">0651-2460506</div>
                                    <div class="col-sm-4">Vivekanand Hospital</div>
                                    <div class="col-sm-8">9234224228</div>
                                    <div class="col-sm-4">Siddhart Hospital </div>
                                    <div class="col-sm-8">9006752009</div>
                                    <div class="col-sm-4">Gulmohar Hosptal</div>
                                    <div class="col-sm-8">9570096838</div>
                                    <div class="col-sm-4">Capital Hospital</div>
                                    <div class="col-sm-8">9835161846</div>
                                    <div class="col-sm-4">Medica Hospital</div>
                                    <div class="col-sm-8">0651-6606000</div>
                                    <div class="col-sm-4">Majid Alam Hospital</div>
                                    <div class="col-sm-8">7070991111</div>
                                    <div class="col-sm-4">Jinwani Hospital</div>
                                    <div class="col-sm-8">8521484407</div>
                                    <div class="col-sm-4">Ram Pyari Hospital</div>
                                    <div class="col-sm-8">0651-2561822</div>
                                    <div class="col-sm-4">Insall Ortho Hospital</div>
                                    <div class="col-sm-8">8521000444</div>
                                    <div class="col-sm-4">Life Care Diagnostic Centre</div>
                                    <div class="col-sm-8">9835141441</div>
                                    <div class="col-sm-4">Hill View Hospital Centre</div>
                                    <div class="col-sm-8">9152548945</div>
                                    <div class="col-sm-4">Orchid Medical Centre</div>
                                    <div class="col-sm-8">9152844384</div>
                                    <div class="col-sm-4">Ranchi Urology Centre</div>
                                    <div class="col-sm-8">9152721301</div>
                                    <div class="col-sm-4">The 7 Palms Hospital</div>
                                    <div class="col-sm-8">9152687906</div>
                                    <div class="col-sm-4">MRP Speciality Hospital</div>
                                    <div class="col-sm-8">9152449705</div>
                                    <div class="col-sm-4">Baba Hospital & Ivf Centre</div>
                                    <div class="col-sm-8">9152645839</div>
                                    <div class="col-sm-4">Lal Nursing Home</div>
                                    <div class="col-sm-8">9152893852</div>
                                    <div class="col-sm-4">RJSP Cancer Hospital</div>
                                    <div class="col-sm-8">9152769259</div>
                                    <div class="col-sm-4">Rani Hospital</div>
                                    <div class="col-sm-8">91527879920</div>
                                    <div class="col-sm-4">Devkamal Hospital</div>
                                    <div class="col-sm-8">9152788981</div>
                                    <div class="col-sm-4">S.M Memorial Hospital</div>
                                    <div class="col-sm-8">9152649793</div>
                                    <div class="col-sm-4">Shree Jaganath Hospital</div>
                                    <div class="col-sm-8">0651-2360045</div>
                                    <div class="col-sm-4">Dr.Lals Hospital Centre</div>
                                    <div class="col-sm-8">7061117676</div>
                                    <div class="col-sm-4">Ortho Center Life Care Hospital</div>
                                    <div class="col-sm-8">9152523415</div>
                                    <div class="col-sm-4">City Trust Hospital</div>
                                    <div class="col-sm-8">9152699912</div>
                                    <div class="col-sm-4">Sai Aastha Hospital</div>
                                    <div class="col-sm-8">9152857266</div>
                                    <div class="col-sm-4">Suyog Hospital</div>
                                    <div class="col-sm-8">9152685539</div>
                                    <div class="col-sm-4">Health Point Hospital</div>
                                    <div class="col-sm-8">9152919696</div>
                                    <div class="col-sm-4">Ashirvad Hospital</div>
                                    <div class="col-sm-8">9152954701</div>
                                    <div class="col-sm-4">Health Care Hospital</div>
                                    <div class="col-sm-8">9152619530</div>
                                    <div class="col-sm-4">Maa Clinic </div>
                                    <div class="col-sm-8">9470997766</div>
                                    <div class="col-sm-4">Vinayka Hospital</div>
                                    <div class="col-sm-8">0651-2261097</div>
                                    <div class="col-sm-4">Prabhawati Hospital</div>
                                    <div class="col-sm-8">9431151272</div>
                                    <div class="col-sm-4">Military Hospital</div>
                                    <div class="col-sm-8">8291806858</div>
                                    <div class="col-sm-4">Vellore Children Hospital</div>
                                    <div class="col-sm-8">9431306454</div>
                                    <div class="col-sm-4">Surya Clinic</div>
                                    <div class="col-sm-8">8084973232</div>
                                    <div class="col-sm-4">ISPAT Hospital</div>
                                    <div class="col-sm-8">0651-2410229</div>
                                    <div class="col-sm-4">R.P.S. Hospital</div>
                                    <div class="col-sm-8">9525140001</div>
                                    <div class="col-sm-4">Nagarmal Modi Seva Sadan</div>
                                    <div class="col-sm-8">0651-2209570</div>
                                    <div class="col-sm-4">Life View Hospital</div>
                                    <div class="col-sm-8">0651-6530653</div>
                                    <div class="col-sm-4">Saaol Heart Centre</div>
                                    <div class="col-sm-8">9334506125</div>
                                    <div class="col-sm-4">Pragati Hospital </div>
                                    <div class="col-sm-8">18001211922</div>
                                    <div class="col-sm-4">Shri Ganesh Eye Hosptal</div>
                                    <div class="col-sm-8">8340595331</div>
                                    <div class="col-sm-4">Matri Jeevan Nursing Hospital</div>
                                    <div class="col-sm-8">0651-2544457</div>
                                    <div class="col-sm-4">Life Care Trust Hospital</div>
                                    <div class="col-sm-8">9304262514</div>
                                    <div class="col-sm-4">Om Sai Chirayu Hospital</div>
                                    <div class="col-sm-8">9006307052</div>
                                    <div class="col-sm-4">Divl Railway Hospital</div>
                                    <div class="col-sm-8">0651-2600267</div>
                                    <div class="col-sm-4">Asha Kiran Hospital</div>
                                    <div class="col-sm-8">0651-2542038</div>
                                    <div class="col-sm-4">Netram</div>
                                    <div class="col-sm-8">898688355</div>
                                    <div class="col-sm-4">Baba Hospital</div>
                                    <div class="col-sm-8">9386432888</div>

                                    <div class="col-sm-4">Orchid Medical Hospital</div>
                                    <div class="col-sm-8">0651-7100100</div>
                                    <div class="col-sm-4">Medanta Hospital</div>
                                    <div class="col-sm-8">0651-7123100</div>
                                    <div class="col-sm-4">Agrawal Nursing Hospital</div>
                                    <div class="col-sm-8">0651-2546060</div>
                                    <div class="col-sm-4">Medanta Hospital</div>
                                    <div class="col-sm-8">0651-7123100</div>
                                    <div class="col-sm-4">Amrit Hospital</div>
                                    <div class="col-sm-8">0620-5177833</div>
                                    <div class="col-sm-4">Rainbow Child Hospital</div>
                                    <div class="col-sm-8">7250725044</div>
                                    <div class="col-sm-4">New Born & Child Specialist </div>
                                    <div class="col-sm-8">9931175744</div>
                                    <div class="col-sm-4">New Kalkata Royal</div>
                                    <div class="col-sm-8">0651-2350839</div>
                                    <div class="col-sm-4">MDLM Hospital</div>
                                    <div class="col-sm-8">9431769303</div>
                                    <div class="col-sm-4">Dwarika Hospital</div>
                                    <div class="col-sm-8">9308738010</div>
                                    <div class="col-sm-4">Kanke General Hospital</div>
                                    <div class="col-sm-8">0651-2450844</div>
                                    <div class="col-sm-4">Harmu Hospital </div>
                                    <div class="col-sm-8">0651-6453068</div>
                                    <div class="col-sm-4">Madhuri Dental Hosptal</div>
                                    <div class="col-sm-8">9110908500</div>
                                    <div class="col-sm-4">S.K.Roy Memorial Hospital</div>
                                    <div class="col-sm-8">9199103979</div>
                                    <div class="col-sm-4">Rinchi Trust Hospital</div>
                                    <div class="col-sm-8">0651-6456780</div>
                                    <div class="col-sm-4">Bethel Mission Hospital</div>
                                    <div class="col-sm-8">8092395001</div>
                                    <div class="col-sm-4">Sagar Hospital</div>
                                    <div class="col-sm-8">9835599382</div>
                                    <div class="col-sm-4">Eye Hospital</div>
                                    <div class="col-sm-8">0651-2240311</div>
                                    <div class="col-sm-4">Samadhan</div>
                                    <div class="col-sm-8">0651-6888825</div>
                                    <div class="col-sm-4">Mannat Hospital</div>
                                    <div class="col-sm-8">9835329098</div>


                                </div> <br /> <br />

                            <p class="text-center"><strong><u>Bokaro</u></strong></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Bokaro General Hospital</div>
                                    <div class="col-sm-8">0654-2232750</div>
                                    <div class="col-sm-4">K.M. Memorial Hospital</div>
                                    <div class="col-sm-8">0654-2236188</div>
                                    <div class="col-sm-4">Shanti Heath Care Hospital</div>
                                    <div class="col-sm-8">9431127282</div>
                                    <div class="col-sm-4">Neelam Hospital</div>
                                    <div class="col-sm-8">9835358404</div>
                                    <div class="col-sm-4">Muskan Hospital</div>
                                    <div class="col-sm-8">8877080718</div>
                                    <div class="col-sm-4">Ashadeep Hospital</div>
                                    <div class="col-sm-8">754918958</div>
                                    <div class="col-sm-4">Bharat Hospital</div>
                                    <div class="col-sm-8">9128991253</div>
                                    <div class="col-sm-4">Maa Sharda Hospital</div>
                                    <div class="col-sm-8">9386766236</div>
                                    <div class="col-sm-4">Jain Hospital</div>
                                    <div class="col-sm-8">7677667770</div>
                                    <div class="col-sm-4">Navjeewan Hospital</div>
                                    <div class="col-sm-8">9835358404</div>

                                </div> <br /><br />

                            <p><center><strong><u>Jamshedpur</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Tata Main Hospital</div>
                                    <div class="col-sm-8">0657-6641012</div>
                                    <div class="col-sm-4">Apex Hospital</div>
                                    <div class="col-sm-8">0657-2432888</div>
                                    <div class="col-sm-4">Jamshedpur Eye Hospital</div>
                                    <div class="col-sm-8">0657-6622073</div>
                                    <div class="col-sm-4">Meditrina Hospital</div>
                                    <div class="col-sm-8">04713063000</div>
                                    <div class="col-sm-4">Tata Motors Hospital</div>
                                    <div class="col-sm-8">0657-6695601</div>
                                    <div class="col-sm-4">Mercy Hospital</div>
                                    <div class="col-sm-8">0657-2210018</div>
                                    <div class="col-sm-4">Arogyam Hospital</div>
                                    <div class="col-sm-8">9204667799</div>
                                    <div class="col-sm-4">Daya Hospital</div>
                                    <div class="col-sm-8">8969250464</div>
                                    <div class="col-sm-4">Mayank Mrinal Hospital</div>
                                    <div class="col-sm-8">9431186362</div>
                                    <div class="col-sm-4">Tinplate Hospital</div>
                                    <div class="col-sm-8">0657-2342266</div>
                                </div> <br /><br />

                            <p><center><strong><u>Hazaribagh</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Kshitij Hospital</div>
                                    <div class="col-sm-8">7320924701</div>
                                    <div class="col-sm-4">Raj Hospital</div>
                                    <div class="col-sm-8">9973665366</div>
                                    <div class="col-sm-4">Mission Hospital</div>
                                    <div class="col-sm-8">0654-6222272</div>
                                    <div class="col-sm-4">Aaash Hospital</div>
                                    <div class="col-sm-8">8521378159</div>
                                    <div class="col-sm-4">Jyanani Pritam Hospital</div>
                                    <div class="col-sm-8">9431348585</div>
                                    <div class="col-sm-4">Anand Hospital</div>
                                    <div class="col-sm-8">7762952269</div>
                                    <div class="col-sm-4">A.K. Sunshine Hospital</div>
                                    <div class="col-sm-8">9474786427</div>
                                    <div class="col-sm-4">DVC Hospital</div>
                                    <div class="col-sm-8">0654-6270183</div>
                                    <div class="col-sm-4">J.P Memorial Hospital</div>
                                    <div class="col-sm-8">9431793810</div>
                                    <div class="col-sm-4">Jaipuriar Hospital</div>
                                    <div class="col-sm-8">8986767600</div>
                                </div> <br /> <br />

                            <p><center><strong><u>Dhanbad</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Asarfi Hospital</div>
                                    <div class="col-sm-8">9234302735</div>
                                    <div class="col-sm-4">Central Hospital</div>
                                    <div class="col-sm-8">0626-2203061</div>
                                    <div class="col-sm-4">JIMS Hospital</div>
                                    <div class="col-sm-8">0326-224940</div>
                                    <div class="col-sm-4">ASG Eye Hospital</div>
                                    <div class="col-sm-8">0326-2300039</div>
                                    <div class="col-sm-4">Patliputra Nursing Hospital</div>
                                    <div class="col-sm-8">0326-2302848</div>
                                    <div class="col-sm-4">R.C. Hazra Memorial Hospital</div>
                                    <div class="col-sm-8">0326-2302637</div>
                                    <div class="col-sm-4">Sunrise Hospital</div>
                                    <div class="col-sm-8">9135005051</div>
                                    <div class="col-sm-4">Park Clinic</div>
                                    <div class="col-sm-8">9835062033</div>
                                    <div class="col-sm-4">BCCL Hospital</div>
                                    <div class="col-sm-8">7822017039</div>
                                    <div class="col-sm-4">Navjyoti Netralaya</div>
                                    <div class="col-sm-8">9263716056</div>
                                </div> <br /> <br />

                            <p><center><strong><u>Deoghar</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Maa Lalita Hospital</div>
                                    <div class="col-sm-8">7360059977</div>
                                    <div class="col-sm-4">Shivay Hospital</div>
                                    <div class="col-sm-8">7091570523</div>
                                    <div class="col-sm-4">Sudhir Hospital</div>
                                    <div class="col-sm-8">9431047249</div>
                                    <div class="col-sm-4">Tridev Hospital</div>
                                    <div class="col-sm-8">9661530138</div>
                                    <div class="col-sm-4">Tridev Hospital</div>
                                    <div class="col-sm-8">9661530138</div>
                                    <div class="col-sm-4">City Care Hospital</div>
                                    <div class="col-sm-8">9015151812</div>
                                    <div class="col-sm-4">Vinayak Hospital</div>
                                    <div class="col-sm-8">9523679654</div>
                                    <div class="col-sm-4">Shree Hospital</div>
                                    <div class="col-sm-8">9430999932</div>
                                    <div class="col-sm-4">Sai Ram Hospital</div>
                                    <div class="col-sm-8">9204004729</div>
                                    <div class="col-sm-4">Medha Health Care</div>
                                    <div class="col-sm-8">9234455449</div>
                                </div> <br /> <br />

                            <p><center><strong><u>Daltonganj</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Seva Sadan</div>
                                    <div class="col-sm-8">0656-2222299</div>
                                    <div class="col-sm-4">City Hospital</div>
                                    <div class="col-sm-8">9939621770</div>
                                    <div class="col-sm-4">Bhagwati Hospital</div>
                                    <div class="col-sm-8">8084410009</div>
                                    <div class="col-sm-4">Life Line Hospital</div>
                                    <div class="col-sm-8">7870256756</div>
                                    <div class="col-sm-4">Shri Narayan Hospital</div>
                                    <div class="col-sm-8">8809653288</div>
                                    <div class="col-sm-4">P.K.  Hospital</div>
                                    <div class="col-sm-8">9534232651</div>
                                    <div class="col-sm-4">Elite Hospital</div>
                                    <div class="col-sm-8">871689548</div>
                                    <div class="col-sm-4">Shishu Hospital</div>
                                    <div class="col-sm-8">9431136432</div>
                                    <div class="col-sm-4">Vanja Arogya Kendra</div>
                                    <div class="col-sm-8">9334483344</div>
                                    <div class="col-sm-4">Arshad Homoeo Hall</div>
                                    <div class="col-sm-8">9801545658</div>
                                </div> <br /><br />

                            <p><center><strong><u>Ramgarh</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Jharkhand Hospital</div>
                                    <div class="col-sm-8">9470513783</div>
                                    <div class="col-sm-4">Narayni Seva Sedan</div>
                                    <div class="col-sm-8">9931532156</div>
                                    <div class="col-sm-4">Brindavan Hospital</div>
                                    <div class="col-sm-8">9031079796</div>
                                    <div class="col-sm-4">KGT Hospital</div>
                                    <div class="col-sm-8">9204385244</div>
                                    <div class="col-sm-4">Sai Nath Hospital</div>
                                    <div class="col-sm-8">9431792256</div>
                                    <div class="col-sm-4">Aarogya Mangalam Hospital</div>
                                    <div class="col-sm-8">7688447777</div>
                                    <div class="col-sm-4">Sai Sevayatan Hospital</div>
                                    <div class="col-sm-8">9334357316</div>
                                    <div class="col-sm-4">Onkar Eye Hospital</div>
                                    <div class="col-sm-8">8003169453</div>
                                    <div class="col-sm-4">Sanjivani Hospital</div>
                                    <div class="col-sm-8">0655-3223031</div>
                                    <div class="col-sm-4">Thyrocare Centre</div>
                                    <div class="col-sm-8">9334571818</div>
                                </div> <br /> <br />

                                
                        </table>
                        <br />
                        <center>
                            <h4>Blood Bank Contacts</h4>
                        </center>

                        <table>
                            <p><center><strong><u>Ranchi</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact No</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Jharkhand Blood Bank</div>
                                    <div class="col-sm-8">9973161687</div>
                                    <div class="col-sm-4">Nagarmal Modi Seva Sadan</div>
                                    <div class="col-sm-8">0651-2207406</div>
                                    <div class="col-sm-4">Indian Red Cross Society</div>
                                    <div class="col-sm-8">9431352561</div>
                                    <div class="col-sm-4">S.D.A Mission Hospital</div>
                                    <div class="col-sm-8">0651-2545649</div>
                                    <div class="col-sm-4">Archi Jharkhand Blood Bank</div>
                                    <div class="col-sm-8">0651-2541862</div>
                                    <div class="col-sm-4">Birsa Blood Bank</div>
                                    <div class="col-sm-8">0651-2542437</div>
                                    <div class="col-sm-4">Birsa Blood Bank</div>
                                    <div class="col-sm-8">9431767302</div>
                                    <div class="col-sm-4">Blood Bank RIMS</div>
                                    <div class="col-sm-8">0651-2542928</div>
                                    <div class="col-sm-4">CCL Bood Bank</div>
                                    <div class="col-sm-8">0651-2230355</div>
                                    <div class="col-sm-4">Satya Bharti Sangh</div>
                                    <div class="col-sm-8">0651-2251125</div>
                                    <div class="col-sm-4">Devkamal Blood Bank</div>
                                    <div class="col-sm-8">7549000111</div>
                                    <div class="col-sm-4">RIMS Department And Blood Bank </div>
                                    <div class="col-sm-8">0651-2540565</div>
                                    <div class="col-sm-4">Blood Bank HEC Hospital</div>
                                    <div class="col-sm-8">9835539866</div>
                                    


                                </div> <br /> <br />

                            <p><center><strong><u>Bokaro</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">KM Memorial Hospital Bank</div>
                                    <div class="col-sm-8">9234303421</div>
                                    <div class="col-sm-4">Indian Red Cross Society Blood Bank</div>
                                    <div class="col-sm-8">0654-2224555</div>
                                 

                                </div> <br /><br />

                            <p><center><strong><u>Jamshedpur</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">MGM Medical College & Hospital</div>
                                    <div class="col-sm-8">0657-2432138</div>
                                    <div class="col-sm-4">Jamshedpur Blood Bank</div>
                                    <div class="col-sm-8">0657-2431957</div>
                                    <div class="col-sm-4">MGMMCH</div>
                                    <div class="col-sm-8">0657-2230092</div>
                                 
                                </div> <br /><br />

                            <p><center><strong><u>Hazaribagh</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Sadar Hospital Campus</div>
                                    <div class="col-sm-8">0654-6265289</div>
                               
                                </div> <br /> <br />

                            <p><center><strong><u>Dhanbad</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">S N C Memorial Nursing Home</div>
                                    <div class="col-sm-8">0326-2303621</div>
                                    <div class="col-sm-4">Tata Central Hospital</div>
                                    <div class="col-sm-8">0326 6612273</div>
                                    <div class="col-sm-4">Dhanbad Blood Bank</div>
                                    <div class="col-sm-8">----------</div>
                                    <div class="col-sm-4">PMCH</div>
                                    <div class="col-sm-8">0326 2230301</div>
                                </div> <br /> <br />

                            <p><center><strong><u>Daltonganj</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Sadar Hospital Blood Bank</div>
                                    <div class="col-sm-8">0656-2222677</div>
                                    
                                </div> <br /><br />

                            <p><center><strong><u>Ramgarh</u></strong></center></p>

                            <p>
                                <div class="row">
                                    <div class="col-sm-4"><strong>Hospital</strong></div>
                                    <div class="col-sm-8"><strong>Contact</strong></div>
                                </div>
                            </p>
                            <p>
                                <div class="row" style="font-family: verdana">
                                    <div class="col-sm-4">Corporation Bank</div>
                                    <div class="col-sm-8">0655-3231817</div>
                                    <div class="col-sm-4">State Bank Of India</div>
                                    <div class="col-sm-8">1800112211</div>
                               
                                </div> <br /> <br /></table>
                    </div> <!-- /.blog-details-post-wrapper -->
                </div> <!-- /.col- -->


                <!-- ========================== Aside Bar ======================== -->
                <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-fix">
                    <aside>
                        <form action="#" class="sidebar-search-box">
                            <input type="text" placeholder="Search...">
                            <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>

                        <div class="sidebar-news-list">
                            <h6>Police Contacts</h6>
                            <ul>
                                <li><a href="#" class="tran3s active"><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Right to Equality</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Right to Freedom</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Right against Exploitation</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Right to Freedom of Religion</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Cultural and Educational Rights</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Right to Constitutional Remedies</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i>  Right To Privacy</a></li>
                               
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
