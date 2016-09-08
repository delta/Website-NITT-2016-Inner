<?php
if(!defined('__PRAGYAN_CMS'))
{ 
	header($_SERVER['SERVER_PROTOCOL'].' 403 Forbidden');
	echo "<h1>403 Forbidden<h1><h4>You are not authorized to access the page.</h4>";
	echo '<hr/>'.$_SERVER['SERVER_SIGNATURE'];
	exit(1);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
    <?php if(isset($WIDGETS[0])) echo $WIDGETS[0]; ?>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/image/logo.png" >
	<link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/main.css" />
    <meta name="description" content="<?php echo $SITEDESCRIPTION ?>" />
    <meta name="keywords" content="<?php echo $SITEKEYWORDS.', '.$PAGEKEYWORDS ?>" /> 
	<?php global $urlRequestRoot;	global $PAGELASTUPDATED;
	if($PAGELASTUPDATED!="")
		echo '<meta http-equiv="Last-Update" content="'.substr($PAGELASTUPDATED,0,10).'" />'."\n";
	?>
    <link rel="index" href="./" title="Home" />
	<link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/adminui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/other.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/styles/nav.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/header.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/gallery.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/menu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/content.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/footer.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/error.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/breadcrumb.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/actionbar.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo  $TEMPLATEBROWSERPATH; ?>/font-awesome/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/common.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/myStyle.css" />
    <link rel="icon" type="image/png" href="<?php echo $TEMPLATEBROWSERPATH; ?>/image/logo.png">
        
        <script language="javascript" type="text/javascript">
        //defined here for use in javascript
        var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
        var urlRequestRoot = "<?php echo $urlRequestRoot?>";
    </script>
   
   <script type=text/javascript src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   <script type=text/javascript>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
    <script language="javascript" type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/scripts/jquery-latest.js" ></script>
    <script type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/scripts/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/script.js"></script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/theme.js"></script>
    <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/stickyfooter.js"></script>
    <script language="javascript" type="text/javascript">
		//defined here for use in javascript
		var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
		var urlRequestRoot = "<?php echo $urlRequestRoot?>";
	</script>
	<script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/hamburgermenu.js"></script>

</head>

<body onload="<?php echo $STARTSCRIPTS; ?>" >

<header class="myheader" >
	<img id="headerimg" src="<?php echo $TEMPLATEBROWSERPATH; ?>/image/nitt-site-header_all.png" style="padding:10px 0px 10px 0px;" />
    <!-- device test, don't remove. javascript needed! -->
    <!-- <span class="visible-xs" style="padding-bottom:5px;background-color:#cc0033;" ></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg" style="padding-bottom:5px;background-color:#cc0033;"></span> -->
    <!-- device test end -->
    <div id="k-head" class="container-fluid"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
            <nav class="k-functional-navig"><!-- functional navig -->
                <ul class="list-inline pull-right">
                    <li><div id="google_translate_element"></div></li>
					<li><a href="/home/academics/departments/">Departments</a></li>
                    <li><a href="/students/facilitiesnservices/tp/">Placements</a></li>
					<li><a id="dash" href="#" title="" class="dash"><i class="fa fa-toggle-off"></i> Dashboard </a></li>
					<script>
						$('#dash').click(function()
						{
							$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');
							$('.dashboard').toggle('fast');
						});
						if($(window).width() < 768)
						{
							$(".myheader").children("#headerimg").attr("src", "<?php echo $TEMPLATEBROWSERPATH; ?>/image/mobile_header.png");
						}
						else
						{
							$(".myheader").children("#headerimg").attr("src", "<?php echo $TEMPLATEBROWSERPATH; ?>/image/nitt-site-header_all.png");
						}
					</script>
                    <li><a href="https://webmail.nitt.edu/">Webmail</a></li>
                    <li><a href="/sitemap">Sitemap</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>

                
                

            </nav><!-- functional navig end -->
            
            <div class="col-lg-12" >
            <div class="container-fluid text-center dashboard"  hidden >
                           <?php echo $ACTIONBARPAGE;?>
                <?php echo $ACTIONBARMODULE;?>
                  <?php if(isset($WIDGETS[1])) echo $WIDGETS[1]; ?>
                           <!-- <div class="col-md-1"><a href="#" style="color:black;"> View</a></div>
                            <div class="col-md-8"></div>
                            <div class="col-md-1"><a href="#" style="color:black;" > Login </a></div>
                            <div class="col-md-1"><a href="#" style="color:black;"> Register </a></div>
                            <div class="col-md-1"> <a href="#" style="color:black;"> Search</a></div>
                            -->
                        </div>
                        <script type="text/javascript">
                    $('.dashboard').hide();
                    function toggleDash(){

                    
                    }
                    </script>
                <div id="k-site-logo" class="pull-left"><!-- site logo -->
    <!--            
                    <h1 class="k-logo">
                        <a href="index.html" title="Home Page">
                            <img src="image/logo.png" style="width:130px;height:130px;visibility:hidden;">    
                        </a>
                    </h1>
        -->            
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"><i class="fa fa-bars" style="color: #000000"></i></span></a><!-- alternative menu button -->
            
                </div><!-- site logo end -->

                <nav id="k-menu affix" class="k-main-navig" style="padding-bottom:5px;"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="/" title="">Homepage</a>
                        </li>
                        <li>
                            <a href="/home/about/" title=""><i class="fa fa-caret-down"></i> About</a>
                            <ul class="sub-menu">
                                <li><a href="#"> Mission & Vision </a></li>
                                <li><a href="http://recal.nitt.edu/"> Alumni </a></li>
                            </ul>
                        </li>
						<li>
                            <a href="/home/students/" title=""><i class="fa fa-caret-down"></i> Student Links</a>
							<ul class="sub-menu">
                                <li><a href="/home/academics/formats/">Forms &amp;Downloads </a></li>
                                <li><a href="/home/academics/scholarships/">Scholarships </a></li>
                                <li><a href="/prm/showresult.htm">Semester Results</a></li>
                                <li><a href="/home/academics/Time%20Table">Time Table</a></li>
								<li><a href="/home/students/clubsnassocs/">Clubs</a></li>
                                <li><a href="/home/students/clubsnassocs/sports">Sports</a></li>
                                <li><a href="/home/intranet/">Portals</a></li>
                                <li><a href="/home/students/facilitiesnservices/ComputerSupportGroup/contact%20address/">Contact</a></li>
                            </ul>
                        </li>
                        <li>
                           <a  href="/home/admissions/" title=""><i class="fa fa-caret-down"></i> Admissions</a>
						   <ul class="sub-menu">
                                <li><a href="/home/admissions/btech/">B.Tech. </a></li>
                                <li><a href="/home/admissions/mtech/">M.Tech. </a></li>   
                                <li><a href="/home/admissions/phd/">Ph.D.</a></li>
                                <li><a href="/home/admissions/mca/">MCA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a id="d" href="#" title="" class="department"><i class="fa fa-toggle-off"></i> Department</a>
                            <script>$('#d').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');});</script>
                            <ul class="visible-xs sub-menu">
                                <li><a href="/home/academics/departments/cse/">Computer Science & Engineering</a></li>
                                <li><a href="/home/academics/departments/eee">Electrical & Electronics Engineering</a></li>
                                <li><a href="/home/academics/departments/ece">Electronics & Communication Engineering</a></li>
                                <li><a href="/home/academics/departments/ice">Instrumentation & Control Engineering</a></li>
                                <li><a href="/home/academics/departments/mech">Mechanical Engineering</a></li>
                                <li><a href="/home/academics/departments/civil">Civil Engineering</a></li>
                                <li><a href="/home/academics/departments/chem">Chemical Engineering</a></li>
                                <li><a href="/home/academics/departments/prod">Production Engineering</a></li>
                                <li><a href="/home/academics/departments/meta">Metallurgical & Material's Engineering</a></li>
                                <li>
                                    <a href="#">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="/home/academics/departments/maths">Mathematics</a></li>
                                        <li>
                                            <a href="/home/academics/departments/chemistry">Chemistry</a>
                                            
                                        </li>
                                        <li><a href="/home/academics/departments/physics">Physics</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Initiatives</a>
                            <ul class="sub-menu">
                                <li><a href="/home/other/cedi/">CEDI </a></li>
                                <li><a href="#">Startup Weekend</a></li>
                                <li><a href="#">Internet Of Things</a></li>
                                <li><a href="#">Innovation Center</a></li>
                                <li><a href="#">Green Campus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/home/icsr/iii" title=""><i class="fa fa-caret-down"></i> Industry</a>
							<ul class="sub-menu">
                                <li><a href="/home/students/facilitiesnservices/tp/">Placements at NITT </a></li>
                                <li><a href="/home/academics/scholarships/">Scholarships </a></li>
                                <li><a href="/home/rc">Consultancy &amp; Research</a></li>
                                <li><a href="/home/academics/mou">MoU &lsquo;s signed</a></li>
								<li><a href="/other/tenders">Tender Invitations</a></li>
                                <li><a href="#">Vendor Registrations</a></li>
                            </ul>
                        </li>
                    </ul>
        
                </nav><!-- main navig end -->
                </div>
            </div>
            
        </div><!-- row end -->
			<section class="visible-lg">
                <div class="container dep" style="display:none;">
                    <div class="col-md-2">
                        <a href="/home/academics/departments/architecture">Architecture</a><br>
                        <a href="/home/academics/departments/cecase">CECASE</a><br>
                        <a href="/home/academics/departments/chem">Chemical Engineering</a><br>
                        <a href="/home/academics/departments/chemistry">Chemistry</a><br>
					</div>  
					<div class="col-md-3">
						<a href="/home/academics/departments/civil">Civil Engineering</a><br>
                        <a href="/home/academics/departments/ca">Computer Applications</a><br>
                        <a href="/home/academics/departments/cse">Computer Science & Engineering</a><br>
                        <a href="/home/academics/departments/dee">DEE</a><br>
					</div>
					<div class="col-md-4">
						<a href="/home/academics/departments/eee">Electrical & Electronics Engineering</a><br>
                        <a href="/home/academics/departments/ece">Electronics & Communications Engineering</a><br>
                        <a href="/home/academics/departments/humanities">Humanities</a><br>
                        <a href="/home/academics/departments/ice">Instrumentation & Control Engineering</a><br>
                        <a href="/home/academics/departments/management">Management Studies</a><br>
					</div>
					<div class="col-md-3">
                        <a href="/home/academics/departments/maths">Mathematics</a><br>
                        <a href="#/home/academics/departments/mech">Mechanical Engineering</a><br>
                        <a href="/home/academics/departments/meta">Metalurgical & Materials Engineering</a><br>
                        <a href="/home/academics/departments/prod">Production Engineering</a><br>
                        <a href="/home/academics/departments/physics">Physics</a><br>
					</div>
				</div><!-- container + head wrapper end -->
            </section>
</header>

<a class="visible-xs toggler" style="text-align:right">☰</a>
<div class="MenuSlider">
	<div class="sidebarslider" style="border:2px solid #f6f6f6;left:0;background-color:white">
		<div id="cms-leftcontentslider">
			<div class="menucontainerslider">
					<?php echo $MENUBAR; ?>
					<?php if(isset($WIDGETS[4])) echo $WIDGETS[4]; ?>								
			</div>
		</div>
	</div>
</div>

<div class="container-fluid whitespace">
    <div class="row" style="background-color: #f9f9f9;padding-top: 10px;border-top:1px solid #f1f1f1; ">
    <div class="col-md-2 col-lg-2 col-sm-3 hidden-xs sidebar">
		
			<div id="cms-leftcontent">
				<div class="menucontainer">
					<?php echo $MENUBAR; ?>
					<?php if(isset($WIDGETS[4])) echo $WIDGETS[4]; ?>
				</div>
				
			</div>
            </div>
        
            <div class="col-md-9 col-lg-9 col-sm-8 col-xs-11 contentSide">
			<div id="cms-content">
            <!-- <span id="currpage" style="font-weight:50; -->
            <!-- font-size:small;"></span> -->
            <h2 id="currpage" style="margin-top: 0;font-size:1.5em;font-weight: normal;">
                
            </h2>
            <hr style="background-color: #BDBBBB;height: 1px;margin-bottom:20px;">
				<?php echo $INFOSTRING; ?>
				<?php echo $WARNINGSTRING;?>
				<?php echo $ERRORSTRING; ?>
				<?php if(isset($WIDGETS[2])) echo $WIDGETS[2]; ?>
				<?php echo $CONTENT; ?>
				<?php if(isset($WIDGETS[3])) echo $WIDGETS[3]; ?>
			</div>
            <script type="text/javascript">
             $('#currpage').html($('li.currentpage>a').html());
            </script>
			<div class="bottomcontentbar"></div>
		</div>
		<div class="clearer"></div>
		<div class="space-medium"></div>
        </div>
        </div>
</div>
    <footer class="footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row duck">
                <div class="footer-col col-md-3 col-sm-6 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Academics</h3>
                        <ul style="list-style:none;">
                            <li><a href="/home/academics" class="footerlinks"><i class="fa fa-caret-right"></i> Academics Programmes</a></li>
                            <li><a href="/home/academics/departments" class="footerlinks"><i class="fa fa-caret-right"></i> Departments</a></li>
                            <li><a href="/home/academics/faculty" class="footerlinks"><i class="fa fa-caret-right"></i> Faculty</a></li>
                            <li><a href="/home/academics/rules" class="footerlinks"><i class="fa fa-caret-right"></i> Rules &amp; Regulations</a></li>
                            <li><a href="/home/academics/scholarships/" class="footerlinks"><i class="fa fa-caret-right"></i> Scholarships</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                 <div class="footer-col col-md-3 col-sm-6 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Admissions</h3>
                        <ul style="list-style:none;">
                            <li><a href="/home/admissions/btech/" class="footerlinks"><i class="fa fa-caret-right"></i> B.Tech/B.Arch</a></li>
                            <li><a href="/home/admissions/mtech/" class="footerlinks"><i class="fa fa-caret-right"></i> M.Tech/M.Sc</a></li>
                            <li><a href="/home/admissions/mca/" class="footerlinks"><i class="fa fa-caret-right"></i> MCA/MBA</a></li>
                            <li><a href="/home/admissions/ms" class="footerlinks"><i class="fa fa-caret-right"></i> MS(research)</a></li>
                            <li><a href="/home/admissions/phd" class="footerlinks"><i class="fa fa-caret-right"></i> Ph.D</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                <div class="footer-col col-md-3 col-sm-6 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Students Life</h3>
                        <ul style="list-style:none;">
                            <li><a href="/home/students/events" class="footerlinks"><i class="fa fa-caret-right"></i> Events</a></li>
                            <li><a href="/home/students/clubsnassocs" class="footerlinks"><i class="fa fa-caret-right"></i> Clubs &amp;Associations</a></li>
                            <li><a href="/home/students/facilitiesnservices/hostelsnmess/messes/" class="footerlinks"><i class="fa fa-caret-right"></i> Hostel &amp;Messes</a></li>
                            <li><a href="/students/office" class="footerlinks"><i class="fa fa-caret-right"></i> Office Of Dean(students)</a></li>        
                        </ul>
                   </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

                <div class="footer-col col-md-3 col-sm-6 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Other Links</h3>
                        <ul style="list-style:none;">
                            <li><a href="/other/tenders" class="footerlinks"><i class="fa fa-caret-right"></i> Tenders &amp;Notices</a></li>
                            <li><a href="/home/other/jobs/" class="footerlinks"><i class="fa fa-caret-right"></i> Job Opportunities</a></li>
                            <li><a href="/righttoinfoact" class="footerlinks"><i class="fa fa-caret-right"></i> RTI</a></li>
                            <li><a href="/students/clubsnassocs/alumni/recal/" class="footerlinks"><i class="fa fa-caret-right"></i> Recal-Alumini</a></li>
                            <li><a href="/sitemap" class="footerlinks"><i class="fa fa-caret-right"></i> SiteMap</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
						<small class="copyright col-md-12 col-sm-12 col-xs-12 text-center">Copyright @ 2015 National Institute of Technology </small></br> 
						<small class="acknowledgement col-md-12 col-sm-12 col-xs-12 text-center">Made with &#10084; by <a href="/home/webteam"> Web-Team, NIT Trichy</a></small>
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->
    

    <!-- jQuery -->
	<!--<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery-2.1.1.min.js"></script>-->    

    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery-migrate-1.2.1.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/bootstrap.min.js"></script>
    
        <!-- Drop-down -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/dropdown-menu.js"></script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/fix_nav.js"></script>
    
    
    <!-- Fancybox -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery.fancybox.pack.js"></script>
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery.fancybox-media.js"></script><!-- Fancybox media -->
    
    <!-- Responsive videos -->
    
    
    <!-- Audio player -->
    
    <script type="text/javascript">
    $(".dropdown").click(function(){
        $(this).children('.child').toggle("slow");
  });</script>
    <!-- Pie charts -->
    <!--<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery.easy-pie-chart.js"></script>
    -->
    <!-- Google Maps -->
    <script type="text/javascript">
        $('.dep').hide();
            $('.department').click(function(){
                $('.dep').toggle("slow");
            });
        
    </script>
	
	<!--For background image in sliding menu-->
	<script type="text/javascript">
		$('.sidebarslider').children().children().children().children().eq(0).css('background-image','url(<?php echo $TEMPLATEBROWSERPATH; ?>/image/NIT-Trichy.jpg)');
		$('.sidebar').children().children().children().children().eq(0).css('background-image','url(<?php echo $TEMPLATEBROWSERPATH; ?>/image/NIT-Trichy.jpg)');
	</script>
    
    <!-- Theme -->
    
	</div>
</div>
</body>
</html>
