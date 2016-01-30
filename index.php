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
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<head>
    <title><?php $cmstitle=$TITLE;echo $cmstitle; ?></title>
    <?php if(isset($WIDGETS[0])) echo $WIDGETS[0]; ?>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?php echo $TEMPLATEBROWSERPATH; ?>/images/logo_16.png" >
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
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- font-awesome -->
    
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/bootstrap.min.css" rel="stylesheet" type="text/css"><!-- Bootstrap -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/dropdown-menu.css" rel="stylesheet" type="text/css"><!-- dropdown-menu -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/common.css" rel="stylesheet" type="text/css"><!-- Fancybox -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/style.css" rel="stylesheet" type="text/css"><!-- theme styles -->
    <link href="<?php echo $TEMPLATEBROWSERPATH; ?>/styles/custom.css" rel="stylesheet" type="text/css"><!--custom -->
    <link rel="stylesheet" type="text/css" href="<?php echo $TEMPLATEBROWSERPATH; ?>/css/myStyle.css" />
    <link rel="icon" type="image/png" href="<?php echo $TEMPLATEBROWSERPATH; ?>/image/logo.png">
        
        <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/js/fix_nav.js"></script>
        <script language="javascript" type="text/javascript">
        //defined here for use in javascript
        var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
        var urlRequestRoot = "<?php echo $urlRequestRoot?>";
    </script>
   
    <script language="javascript" type="text/javascript" src="<?php echo  $TEMPLATEBROWSERPATH; ?>/scripts/jquery-latest.js" ></script>
    <script type="text/javascript" src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/script.js"></script>

    <script language="javascript" type="text/javascript">
		//defined here for use in javascript
		var templateBrowserPath = "<?php echo $TEMPLATEBROWSERPATH ?>";
		var urlRequestRoot = "<?php echo $urlRequestRoot?>";
	</script>

</head>

<body onload="<?php echo $STARTSCRIPTS; ?>" >

<header class="myheader" >
        <img src="<?php echo $TEMPLATEBROWSERPATH; ?>/image/header.png" style="padding:10px 0px 10px 0px;" />
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs" style="padding-bottom:5px;background-color:#cc0033;" ></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg" style="padding-bottom:5px;background-color:#cc0033;"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container-fluid"><!-- container + head wrapper -->
    
        <div class="row"><!-- row -->
            <nav class="k-functional-navig"><!-- functional navig -->
                <ul class="list-inline pull-right">
                    <li><a href="#">Departments</a></li>
                    <li><a href="#">Placements</a></li>
                   <li><a id="dash" href="#" title="" class="dash"><i class="fa fa-toggle-off"></i> Dashboard </a></li>
             <script>$('#dash').click(function(){
    $(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');
        $('.dashboard').toggle('fast');

    
});</script>
                    <li><a href="#">Webmail</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Translate</a></li>
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
                            <a href="#" title="">Homepage</a>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> About</a>
                            <ul class="sub-menu">
                                <li><a href="#"> Mission & Vision </a></li>
                                <li><a href="#"> Alumni </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Student Links</a>
                            <ul class="sub-menu">
                                <li><a href="#">Forms & Downloads </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Semester Results</a></li>
                                <li><a href="#">Time Table</a></li>
                                <li><a href="#">Clubs</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Portals</a></li>
                                <li><a href="#">Important Contacts</a></li>
                            </ul>
                        </li>
                        <li>
                           <a href="#" title=""><i class="fa fa-caret-down"></i> Admissions</a>
                           <ul class="sub-menu">
                                <li><a href="#">B.Tech. </a></li>
                                <li><a href="#">M.Tech. </a></li>
                                <li><a href="#">Ph.D.</a></li>
                                <li><a href="#">MCA</a></li>
                            </ul>
                        </li>
                        <li>
                            <a id="d" href="#" title="" class="department"><i class="fa fa-toggle-off"></i> Department</a>
                            <script>$('#d').click(function(){$(this).find('i').toggleClass('fa-toggle-off fa-toggle-on');});</script>
                            <ul class="sub-menu visible-xs">
                                <li><a href="#">Computer Science & Engineering</a></li>
                                <li><a href="#">Electrical & Electronics Engineering</a></li>
                                <li><a href="#">Electronics & Communication Engineering</a></li>
                                <li><a href="#">Instrumentation & Control Engineering</a></li>
                                <li><a href="#">Mechanical Engineering</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                                <li><a href="#">Chemical Engineering</a></li>
                                <li><a href="#">Production Engineering</a></li>
                                <li><a href="#">Metalurgical & Material's Engineering</a></li>
                                <li>
                                    <a href="#">Others</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Mathematics</a></li>
                                        <li>
                                            <a href="#">Chemistry</a>
                                            
                                        </li>
                                        <li><a href="#">Physics</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Initiatives</a>
                            <ul class="sub-menu">
                                <li><a href="#">CEDI </a></li>
                                <li><a href="#">Startup Weekend</a></li>
                                <li><a href="#">Internet Of Things</a></li>
                                <li><a href="#">Innovation Center</a></li>
                                <li><a href="#">Green Campus</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" title=""><i class="fa fa-caret-down"></i> Industry</a>
                            <ul class="sub-menu">
                                <li><a href="#">Placements at NITT </a></li>
                                <li><a href="#">Scholarships </a></li>
                                <li><a href="#">Consultancy & Research</a></li>
                                <li><a href="#">MoU's signed</a></li>
                                <li><a href="#">Tender Invitations</a></li>
                                <li><a href="#">Vendor Registrations</a></li>
                            </ul>
                        </li>
                    </ul>
        
                </nav><!-- main navig end -->
                <div class="visible-lg" style="background-color:#cc0033;padding-bottom:35px;"></div>
				</div>
            </div>
            
        </div><!-- row end -->
    <section class="visible-lg">
                <div class="container dep" style="display:none;">
                    <div class="col-md-2">
                        <a href="#">Architecture</a><br>
                        <a href="#">CECASE</a><br>
                        <a href="#">Chemical Engineering</a><br>
                        <a href="#">Chemistry</a><br>
                </div>  
                <div class="col-md-3">
                    <a href="#">Civil Engineering</a><br>
                        <a href="#">Computer Applications</a><br>
                        <a href="#">Computer Science & Engineering</a><br>
                        <a href="#">DEE</a><br>
                </div>
                <div class="col-md-4">
                    <a href="#">Electrical & Electronics Engineering</a><br>
                        <a href="#">Electronics & Communications Engineering</a><br>
                        <a href="#">Humanities</a><br>
                        <a href="#">Instrumentation & Control Engineering</a><br>
                        <a href="#">Management Studies</a><br>
                </div>
                <div class="col-md-3">
                    
                        <a href="#">Mathematics</a><br>
                        <a href="#">Mechanical Engineering</a><br>
                        <a href="#">Metalurgical & Materials Engineering</a><br>
                        <a href="#">Production Engineering</a><br>
                        <a href="#">Physics</a><br>
                        
                </div>
            </section>
    </div><!-- container + head wrapper end -->
    </header>
    
<div class="container-fluid">
<button type="button" class="btn btn-default visible-xs" onclick="toggleSidebar()"> Sidebar </button>
    <div class="row">
    <div class="col-md-3 col-lg-2 col-sm-3 col-xs-5 sidebar  ">
		<div class="contentcontainer">
			<div id="cms-leftcontent">
				<div class="menucontainer">
					<?php echo $MENUBAR; ?>
					<?php if(isset($WIDGETS[4])) echo $WIDGETS[4]; ?>
				</div>
				
			</div>
            </div>
            </div>
            <div class="col-md-10 col-xs-10 contentSide">
			<div id="cms-content">
      
				<?php echo $INFOSTRING; ?>
				<?php echo $WARNINGSTRING;?>
				<?php echo $ERRORSTRING; ?>
				<?php if(isset($WIDGETS[2])) echo $WIDGETS[2]; ?>
				<?php echo $CONTENT; ?>
				<?php if(isset($WIDGETS[3])) echo $WIDGETS[3]; ?>
			</div>
			<div class="bottomcontentbar"></div>
		</div>
		<div class="clearer"></div>
		<div class="space-medium"></div>
        </div>
        </div>
</div>
<script type="text/javascript">
    var i=0;
    function toggleSidebar(){
        if(i%2==0){
            $('.contentSide').removeClass('col-xs-10');
            $('.contentSide').addClass('col-xs-7');
            $('.sidebar').delay(100).fadeIn("slow");

            i++;
        }
        else{
            $('.sidebar').delay(0).hide();
            $('.contentSide').removeClass('col-xs-7');
            $('.contentSide').addClass('col-xs-10');
            i=0;
        }
    }
</script>
    <footer class="footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row duck">
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Academics</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Academics Programmes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Departments</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Faculty</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Rules & Regulations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Scholarships</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                 <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Admissions</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> B.Tech/B.Arc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> M.Tech/M.Sc</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MCA/MBA</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> MS(research)</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Ph.D</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
               
                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Students Life</h3>
                        <ul >
                            <li><a href="#"><i class="fa fa-caret-right"></i> Events</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Clubs & Associations</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Hostel & Messes</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Office Of Dean(students)</a></li>
                            
                        </ul>
                   </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

                <div class="footer-col col-md-3 col-sm-4 about marginfooter">
                    <div class="footer-col-inner paddedfooter">
                        <h3>Other Links</h3>
                        <ul>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Tenders & Notices</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Job Opportunities</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> RTI</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> Recal-Alumini</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i> SiteMap</a></li>
                            
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->

    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                 <small class="copyright col-md-12o col-sm-12 col-xs-12 text-center">Copyright @ 2015 National Institute of Technology | Made with &#10084; by Delta Force</small>
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->
    

    <!-- jQuery -->
	<script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery-2.1.1.min.js"></script>    

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
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/jquery.easy-pie-chart.js"></script>
    
    <!-- Google Maps -->
    <script type="text/javascript">
        $('.dep').hide();
            $('.department').click(function(){
                $('.dep').toggle("slow");
            });
        
    </script>
    
    <!-- Theme -->
    <script src="<?php echo $TEMPLATEBROWSERPATH; ?>/scripts/theme.js"></script>
    
	</div>
</div>
</body>
</html>
