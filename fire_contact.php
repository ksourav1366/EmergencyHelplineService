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

    <title>Emergency || Fire Contact</title>

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
                    <h2>Fire</h2>
                    <h4 style="color:#fff"><?php echo $fname;echo "&nbsp;"; echo $lname; ?> -<a href="logout.php">Logout</a></h4>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>/</li>
                        <li>Fire Contact</li>
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
                        <img src="images/blog/fire contact.jpg" alt="Image">
                        <div class="post-heading">
                            <center><h4>Jharkhand Fire Station</h4></center>
    <!--<span>Posted by <a href="#" class="tran3s p-color">admin</a>  at 04 Feb, 2017</span>-->
</div> <!-- /.post-heading -->
        <!--
        =====================================================
            Fire Contacts
        =====================================================
        -->
                    <table class="table table-hover table-dark .table-sm" style="font-family: verdana">
                            <caption><center><strong><u> Fire Service</u></strong></center></caption>
                            <thead>
                                <tr>
                                    <th class="col-sm-6" scope="col">Fire Station</th>
                                    <th class="col-sm-6" scope="col">Contacts</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                        <td>D.G.(Fire Service)</td>
                                        <td>0651-2490615</td>
                                </tr>
                                <tr>
                                        <td>D.I.G(Fire Service)</td>
                                        <td>9771432108</td>
                                </tr>
                                <tr>
                                        <td>S.F.O(H.Q)</td>
                                        <td>9123461101</td>
                                </tr>
                                <tr>
                                        <td>F.S.Doranda</td>
                                        <td>9304953404</td>
                                </tr>
                                <tr>
                                        <td>F.S. Piska More</td>
                                        <td>9304953405</td>
                                </tr>
                                <tr>
                                        <td>F.S. Audrey House</td>
                                        <td>9304953406</td>
                                </tr>
                                <tr>
                                        <td>C.T.I Dhurwa</td>
                                        <td>9304953408</td>
                                </tr>
                                <tr>
                                        <td>F.S. Dhurwa</td>
                                        <td>9304953407</td>
                                </tr>
                                <tr>
                                        <td>F.S. Bundu</td>
                                        <td>9304953409</td>
                                </tr>
                                <tr>
                                        <td>F.S. Khunti</td>
                                        <td>9304953410</td>
                                </tr>
                                <tr>
                                        <td>F.S. Golmuri</td>
                                        <td>9304953411</td>
                                </tr>
                                <tr>
                                        <td>F.S. Chandil</td>
                                        <td>9304953412</td>
                                </tr>
                                <tr>
                                        <td>F.S. Adtiyapur</td>
                                        <td>9304953415</td>
                                </tr>
                                <tr>
                                        <td>F.S. Seraikela</td>
                                        <td>9304953417</td>
                                </tr>
                                <tr>
                                        <td>F.S. Bahragora</td>
                                        <td>9304953419</td>
                                </tr>
                                <tr>
                                        <td>F.S. Chaibasa</td>
                                        <td>9304953421</td>
                                </tr>
                                <tr>
                                        <td>F.S. Ramgarh</td>
                                        <td>9304953422</td>
                                </tr>
                                <tr>
                                        <td>F.S. Hazaribagh</td>
                                        <td>9304953423</td>
                                </tr>
                                <tr>
                                        <td>F.S. Koderma</td>
                                        <td>9304953425</td>
                                </tr>
                                <tr>
                                        <td>F.S. Barhi</td>
                                        <td>9304953426</td>
                                </tr>
                                <tr>
                                        <td>F.S. Bokaro</td>
                                        <td>9304953427</td>
                                </tr>
                                <tr>
                                        <td>F.S. Chass</td>
                                        <td>9304953428</td>
                                </tr>
                                <tr>
                                        <td>F.S. Dhanbad</td>
                                        <td>9304953429</td>
                                </tr>
                                <tr>
                                        <td>F.S. Jhariya</td>
                                        <td>9304953430</td>
                                </tr>
                                <tr>
                                        <td>F.S. Sindri</td>
                                        <td>9304953431</td>
                                </tr>
                                <tr>
                                        <td>F.S. Gumla</td>
                                        <td>9304953432</td>
                                </tr>
                                <tr>
                                        <td>F.S. Lohardaga</td>
                                        <td>9304953433</td>
                                </tr>
                                <tr>
                                        <td>F.S. Simdega</td>
                                        <td>9304953434</td>
                                </tr>
                                <tr>
                                        <td>F.S. Chatra</td>
                                        <td>9304953435</td>
                                </tr>
                                <tr>
                                        <td>F.S. Latehar</td>
                                        <td>9304953437</td>
                                </tr>
                                <tr>
                                        <td>F.S. Garhwa</td>
                                        <td>9304953438</td>
                                </tr>
                                <tr>
                                        <td>F.S. Daltonganj</td>
                                        <td>9304953439</td>
                                </tr>
                                <tr>
                                        <td>F.S. Hussainabad</td>
                                        <td>9304953441</td>
                                </tr>
                                <tr>
                                        <td>F.S. Deoghar</td>
                                        <td>9304953442</td>
                                </tr>
                                <tr>
                                        <td>F.S. Dumka</td>
                                        <td>9304953443</td>
                                </tr>
                                <tr>
                                        <td>F.S. Godda</td>
                                        <td>9304953445</td>
                                </tr>
                                <tr>
                                        <td>F.S. Sahebganj</td>
                                        <td>9304953446</td>
                                </tr>
                                <tr>
                                        <td>F.S. Pakur</td>
                                        <td>9304953447</td>
                                </tr>
                                <tr>
                                        <td>F.S. Jamtara</td>
                                        <td>9304953448</td>
                                </tr>
                                <tr>
                                        <td>F.S. Mango</td>
                                        <td>9304953449</td>
                                </tr>
                                <tr>
                                        <td>F.S. Giridih</td>
                                        <td>9304953450</td>
                                </tr>
                                <tr>
                                        <td>F.S. Rajdhanwar</td>
                                        <td>6201750880</td>
                                </tr>
                                <tr>
                                        <td>F.S. Tenughat</td>
                                        <td>9304953400</td>
                                </tr>        

                            <tbody>
                            
                            <!--</div> <br /> <br /> -->

                </table>
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
                            <h6>Incase Of Fire</h6>
                            <ul>
                                <li><a href="#" class="tran3s active"><i class="fa fa-hand-o-right" aria-hidden="true"></i>Immediately pull the nearest fire alarm pull station as you exit the building.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> When evacuating the building, be sure to feel doors for heat before opening them to be sure there is no fire danger on the other side.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> If there is smoke in the air, stay low to the ground, especially your head, to reduce inhalation exposure. Keep on hand on the wall to prevent disorientation and crawl to the nearest exit.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Once away and clear from danger, call your report contact and inform them of the fire.</li>
                                <li><a href="#" class="tran3s"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Go to your refuge area and await further instructions from emergency personnel.</li>
                               
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
