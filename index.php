					<!DOCTYPE html>
<html lang="en">
<head>
  	<title>EARCANHEAR</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#173E9E">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#173E9E">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" type="text/css" href="./resource/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./resource/slick/slick-theme.css"/>
	<link href="./css/coman.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./resource/dist/jquery.fancybox.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./js/wow.min.js"></script>
	<script src="./js/coman.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="./resource/slick/slick.min.js"></script>
	<script src="./resource/dist/jquery.fancybox.min.js"></script>
	<style>
	.slick-next,.slick-prev
	{
		display: none !important;
	}
	</style>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$('.single-item').slick({	
			autoplay:true,
			infinite: true,
			speed: 300
			
			});
		
		$('.responsive').slick({
			autoplay:true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					infinite: true
				}
				},
				{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				}
				// You can unslick at a given breakpoint now by adding:
				// settings: "unslick"
				// instead of a settings object
			]	
		});



		$('.responsive1').slick({
		dots: false,
		infinite: false,
		speed: 300,
		slidesToShow: 4,
		slidesToScroll: 4,
		responsive: [
			{
			breakpoint: 1024,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
				dots: true
			}
			},
			{
			breakpoint: 600,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			}
			},
			{
			breakpoint: 480,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
			}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
		]
});

	});
	</script>
</head>
<body>
	<!-- preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="rect1"></div>
			<div class="rect2"></div>
			<div class="rect3"></div>
			<div class="rect4"></div>
			<div class="rect5"></div>
		</div> 
	</div>
	<!-- header -->

	<div id="header">
		<table style="width:100%" id="socialmediaicons">
			<tr>
				<td>
					<span ><i class="fas fa-envelope"></i></span>
				<span><strong>db@earcanhear.in</strong></span>
				</td>
				<td >
					<span class="socialmediaicon">
					<a href="https://www.facebook.com/earcanhear.hearingaid"><i class="fab fa-facebook-square"></i></a>
					</span>
					<span class="socialmediaicon">
						<a href="https://www.instagram.com/?target_user_id=11424653726&ndid=58c895aa54809G24bc2f83f0a19eG58c89a43b4adbG34b&utm_source=instagram&utm_medium=email&utm_campaign=digest_email&token=Tw4xNvHh&uee=ZGJAZWFyY2FuaGVhci5pbg&verify=1&__bp=1"><i class="fab fa-instagram"></i></a>
					</span>
					<span class="socialmediaicon">	
				<a href="https://twitter.com/earcanhear2"<i class="fab fa-twitter-square"></i></a>
					</span>
				</td>
			</tr>
		</table>
		<table id="heatbl" >
			<tr>
				<td id="logotd"><img src="image/logo.png"></td>
				<td id="menutd">
					<div id="contactnodiv" style="text-align: center;">
						<div class="contatcinnerdiv wow fadeInRight"  style="display:flex;" >
							<table id="phno" style="width:100%;" >
							<tr>
							<td>
							<h5 style="color:white;"><img src="./image/phoneicon.png" height="18px" /><strong style="padding-left: 5px;">+91 9904099994</strong></h5>
							</td>
							<td>
							<h5 style="color:white;"><img src="./image/phoneicon.png" height="18px" /><strong style="padding-left: 5px;">+91 9904089994</strong></h5>
							
							</td>
							
							</tr>
							<tr>
							<td>
							<h5 style="color:white;"><img src="./image/phoneicon.png" height="18px" /><strong style="padding-left: 5px;">+91 9904079994</strong></h5>
							
							</td>
							<td>
							<h5 style="color:white;"><img src="./image/phoneicon.png" height="18px" /><strong style="padding-left: 5px;">+91 9904979994 </strong></h5>
							
							</td>
							
							</tr>
							
							</table>												
						</div>
					</div>
					<div style="clear:both;"></div>
				</td>
			</tr>
		</table>
	</div>

	<!-- menu -->
	<div id="menudiv">
		<div id="menuitem">
			<ul id="menuitemul"> 
				<a href="./index.php"><li class="menuitemli">Home</li></a>		
				<a href="./page/aboutus.html"><li class="menuitemli">About</li></a>
				<a href="./page/service.html"><li class="menuitemli">Service</li></a>
				<a href="./page/supportandaftrecare.html"><li class="menuitemli">Support & Aftrecare</li></a>
				<a href="./page/contactus.php"><li class="menuitemli">Contact</li></a>
				<a href="./page/activity.html"><li class="menuitemli">Activity</li></a>
			</ul>
			<div id="rcontactno" style="float:left;margin-left: 15px;">
				<h4><img src="./image/phoneicon.png" style="height:40px;width:50px;padding-right:10px; "/><strong style="color:white;">+91 09904099994</strong></h4>
			</div>
			<div id="micon" style="margin-left:100%;">
				<img src="image/micon.png">
			</div>
			<div style="clear: both;"></div>
		</div>
		<div id="rmenudiv">
			<ul id="rmenuitemul" style="margin:0px;padding:0px;"> 
				<a href="./index.php"><li class="rmenuitemli">Home</li></a>
				<a href="./page/aboutus.html"><li class="rmenuitemli">About</li></a>
				<a href="./page/service.html"><li class="rmenuitemli">Service</li></a>
				<a href="./page/supportandaftrecare.html"><li class="rmenuitemli">Support & Aftrecare</li></a>
				<a href="./page/contactus.php"><li class="rmenuitemli">Contact</li></a>
				<a href="./page/activity.html"><li class="rmenuitemli">Activity</li></a>
			</ul>
		</div>
	</div>

	<!-- maincontainer -->

	<div id="maincontainer" style="background: white;">
			<!-- slider -->
		<div class="single-item" style="clear:both;">
			<div style="width:100%;"><img src="image/bg1.jpg" alt="" style="width:100%;" ></div>
			<div style="width:100%;"><img src="image/bg2.jpg" alt="" style="width:100%;"></div>
		</div>


		<div id="boxdiv" style="background:white;" >
			<a data-fancybox data-src="#hearingcare" href="javascript:;">
				<div class="box col-lg-4 col-md-4 col-sm-12 col-xs-12" id="box1">
					<div class="wow fadeInUp innerbox">
						<div id="imgbox" style="background:#FDFDFD;width:50%;border-radius: 50%;float:left;">
							<img src="image/ear1.png" height="150px"/>
						</div>
						<div id="innercontentbox" style="width:50%;float:left;">
							<h1 style="font-size: 20px"><strong>Hearing Care</strong><h1>
						</div>
						<div id="temp" style="clear:both;"></div>
					</div>
				</div>
			</a>

			<a data-fancybox data-src="#hearingtest" href="javascript:;">
				<div class=" box col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class=" wow fadeInUp innerbox">
						<div id="imgbox" style="background:#FDFDFD;width:50%;border-radius: 50%;float:left;">
							<img src="image/ear2.png" height="150px"/>
						</div>
						<div id="innercontentbox" style="width:50%;float:left;">
							<h1 style="font-size: 20px"><strong>Hearing Teasting</strong><h1>
						</div>
						<div id="temp" style="clear:both;"></div>
					</div>	
				</div>
			</a>
			<a data-fancybox data-src="#hearingsolution" href="javascript:;">
				<div class="box col-lg-4 col-md-4 col-sm-12 col-xs-12" id="box3">
					<div class="wow fadeInUp innerbox">
						<div id="imgbox" style="background:#FDFDFD;width:50%;border-radius: 50%;float:left;padding:10px;">
							<img src="image/ear3.png" height="130px"/>
						</div>
						<div id="innercontentbox" style="width:50%;float:left;">
							<h1 style="font-size: 20px"><strong>Hearing Solution</strong><h1>
						</div>
						<div id="temp" style="clear:both;"></div>
					</div>				
				</div>
			</a>
		</div>



		<!-- box division fininish -->

		<div id="misssionandvissiondiv" style="overflow:hidden;background: white;width:100%;">
			<div class="wow fadeIn mvdiv col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="titlemvdiv">
					<h1 style="color:#173E9E;"><strong><center>Welcome</center></strong></h1>
					<hr width="50%"/>

				</div>
				<div class="contentmvdiv" style="text-align: center;">
					<p style="font-family: 'Raleway', sans-serif;">Hearing loss is a common problem. More than 60% of people over the age of 60 suffer from some grade of hearing loss. In India, the statistics suggest 1/12th of the whole population. While not many realize they have a problem, using a hearing instrument at an early stage can help resolve many issues. EARCANHEAR has always looked towards providing excellent client care in hearing loss diagnosis and treatment.</p>
					<p  style="font-family: 'Raleway', sans-serif;">EARCANHEAR is the one of the largest hearing care service provider in Gujarat. Spread across the Gujarat and having 5 branches, we bring you the best facilities in hearing loss diagnosis and rehab services. Founded in 2017, EARCANHEAR has great experience in treating hearing disorders. </p>
				</div>
			</div>
			<div class="wow bounceInLeft mvdiv col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div id="vison" style="padding:10px;">
					<div class="titlemvdiv">
						<h1 style="color:#173E9E;"><strong>Our Vision</strong></h1>
						<hr width="50%"/>
					</div>
					<div class="contentmvdiv">
						<p>To spread the awareness and to become an organisation which provides Hearing loss diagnosis and it's treatment at the right time and right age with right solution.</p>
					</div>
				</div>
			</div>
			<div class="wow bounceInRight mvdiv col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div id="mision" style="padding:10px;">
					<div class="titlemvdiv">
						<h1 style="color:#173E9E;"><strong>Our Mission</strong></h1>
						<hr width="50%"/>
					</div>
					<div class="contentmvdiv">
						<p>To become the preferred solution by providing the best Treatement in Hearing loss.To spread the joy of Hearing for All.	</p>											
					</div>
				</div>
			</div>
		</div>	

		<div id="testimonial" class="responsive"  >
			<div>
				<table style="width:100%;" >
					<tr>
						<td style="width:20%"></td>
						<td style="width:60%" >
							<img src="./image/AK1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<H3 style="color:white;clear: both;"> ASWINBHAIN KOTHARI</H3>
							<p style="color:white">RETIRED BANKER, NAVRANGPURA,AHMEDABAD,INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">	</td>
						<td style="width:60%" align="center">
							<p style="color:white;">Thank you so much ear can hear. Ear Can Hear has changed my life with better hearing experience.</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table style="width:100%;">
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" >
							<img src="./image/KM1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<H3 style="color:white;clear: both;"> KOKILABEN MISTRY</H3>
							<p style="color:white;">	RETIRED TEACHER, KHAMBHAT,GUJARAT, INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<p style="color:white;">TI am very much satisfied with the servies of ear can hear - hearing aid center. E.C.H has changed my life with a good hearing experience</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table style="width:100%;">
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" >
							<img src="./image/BB1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<H3 style="color:white;clear: both;"> BANSHILAL BHAVSAR</H3>
							<p style="color:white;">RETIRED ACCOUNTENT, GOTA, AHMEDABAD,INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<p style="color:white;">Thank you ear can hear after use hearing aid i am enjoying my life . again thanking you for bringing this wonderful feeling ofhearing for my life.</p>
						</td>
						<td style="width:20%">		
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table style="width:100%;" >
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" >
							<img src="./image/PH1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<H3 style="color:white;clear: both;">PRAVINBHAI HALANI</H3>
							<p style="color:white;">RETIRED SR.FINANCIAL OFFICER, NARANPURA,AHMEDABAD,INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<p style="color:white;">Ear Can Hear has help me to listen better with both the ear. thank you E.C.H for bringing this positive change to my social life.</p>	
						</td>
						<td style="width:20%">
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table style="width:100%;" >
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" >
							<img src="./image/JK1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
						<H3 style="color:white;clear: both;">JUGAL KISHOR RAWAL</H3>
						<p style="color:white;">RETIRED , VASTRAPUR AHMEDABAD,INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<p style="color:white;">EARCANHEAR has help me to listen better with both the ear.Thank you Ear Can Hear for bringing this positive change to my social life.</p>	
						</td>
						<td style="width:20%">
						</td>
					</tr>
				</table>
			</div>
			<div>
				<table style="width:100%;" >
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" >
							<img src="./image/MP1.jpg" style="height:150px;width:150px;border-radius: 50%;" id="testslideimg"/>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<H3 style="color:white;clear: both;">MADHUBEN PARIKH</H3>
							<p style="color:white;">HOUSE WIFE, ODHAV, AHMEDABAD,INDIA</p>
						</td>
						<td style="width:20%">
						</td>
					</tr>
					<tr>
						<td style="width:20%">
						</td>
						<td style="width:60%" align="center">
							<p style="color:white;">Thanks a lot Ear can Hear- Hearing Aid Centre for solving my problem of Tinnitus and help me listen Better. God Bless You.</p>	
						</td>
						<td style="width:20%">
						</td>
					</tr>
				</table>
			</div>
		</div>







		<div id="contactus" style="border-left:1px solid;border-right:1px solid;border-color:#173E9E;height:400px;">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3672.141405281632!2d72.55615741441933!3d23.018579684955075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b335f17edc1%3A0x2dfe1f9ea1008dfe!2sEARCANHEAR!5e0!3m2!1sen!2sin!4v1544529689485" style="width:100%;height:100%;"  frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>

		<div id="companylogocontainer" style="width:100%;border-left:1px solid; border-right:1px solid;padding: 20px;border-color:#173E9E;padding:30px;">
			<div class="responsive1">
				<div style="padding:10px;"><img src="./image/lslide1.jpg" height="100" width="200"/></div>
				<div style="padding:10px;"><img src="./image/lslide2.jpg" height="100" width="200"/></div>
				<div style="padding:10px;"><img src="./image/lslide3.jpg" height="100" width="200"/></div>
				<div style="padding:10px;" ><img src="./image/lslide4.jpg" height="100" width="200"/></div>
				<div style="padding:10px;"><img src="./image/lslide5.jpg" height="100" width="200"/></div>					
				<div style="padding:10px;"><img src="./image/lslide6.jpg" height="100" width="200"/></div>					
				<div style="padding:10px;"><img src="./image/lslide7.jpg" height="100" width="200"/></div>
				<div style="padding:10px;"><img src="./image/lslide8.jpg" height="100" width="200"/></div>
				<div style="padding:10px;"><img src="./image/lslide9.jpg" height="100" width="200"/></div>
			</div>
		</div>

			
		<div id="footer" style="padding:20px;background:#2e2e2e;">
			<h5 style="color:white;">© 2018 EARCANHEAR. Designed by <strong> Akshay Soni</strong></h5>
		</div>

	</div>


	<!-- main container complete -->

	<!-- fancybox container -->
	<div id="fancyboxdiv" style="display:none;">
		<div id="hearingcare" style="margin:0px auto;padding-left:30px;padding-right:30px;" >
			<h2 style="color:#173E9E;text-align:center;"><strong>Hearing Care</strong></h2>
			<hr width="50%" style="color:red;background:red;height:1px;"/>
			<p style="text-indent:50px;text-align:justify;">There isn’t only one single cause of the hearing defect and neither is there just one type of hearing loss. The causes and effects of hearing loss are many and may affect people of all ages. However, the most common form of hearing loss is due to ageing.</p>​
			<p style="text-indent:50px;text-align:justify;">As people grow older, hearing loss creeps in gradually over the years and it is quite some time before you might come to realize that you aren’t being able to communicate effectively. However, there are also many cases where hearing loss is present since birth and as a child grows, the increase defects. In all cases, you aren’t alone or just among the few. More than 60 percent of India’s population suffers from some kind of hearing problem and the occurrence is more after the age of 60. The good news is that this defect can be well served for and technology has led us into products that can transform your life. Some simple steps ensure that you don’t miss out on the best rewards of this world the sounds of your life.</p>
			<p style="text-indent:50px;text-align:justify;">	The first step, obviously, would be to understand the causes and effects of hearing loss. It is then you help categorize yourself and go through the initial stress. For those looking to get back their “ears”, understanding how the processes work is a significant step to understand the next steps of rehabilitation and getting back.</p>
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR helps you to discover the amazing world of sound in a way that is impaired by natural processes, but supported by the miracles of human innovation and technology. DIY techniques have always made the world a more acceptable place to live in and this way, knowing your defects will let you get accustomed to the necessities and requirements of technical help.</p>
			<h3 style="color:#173E9E;"><strong>10 Simple Treatments to recover from Your Hearing Losse</strong></h3>
			<ol type="1">
				<li>Research: Try to understand how hearing works and how digital hearing aids can help you in several ways.</li>
				<li>Reassure: EARCANHEAR has been recruiting the best experts and experienced professionals in all their clinics. This gives patients an effective way to connect with the latest efforts in hearing loss treatment technology.</li>
				<li>Recognize: If you have hearing loss symptoms, it is better to understand why it is so and how you can get treated.</li>
				<li>Book us for a test / Ask a question</li>
				<li>Attending a test: Consultation in EARCANHEAR clinic, comes with detailed reports on your history, ear examination, questionnaire on lifestyle and reference by an expert audiologist. We will make sure you understand all aspects of your problems and get back home as a more enlightened and confident individual.</li>
				<li>Discussing options: Depending on the type and degree of problems as well as based on your lifestyle requirements, our experts will suggest a range of options.</li>
				<li>Hearing aids can make the difference: check out demo classrooms on how a hearing aid can bring back the sounds back to life. You certainly would be satisfied with our products.</li>
				<li>Ordering your product: While a suitable device would be chosen depending upon your problem and your budget, you can fill out a form for the order.</li>
				<li>Visit for fitting: your new device should be ready within a couple of days and you can come back as per the appointment.</li>
				<li>Coming back to life: Experiencing the sounds that have mattered all your life is the best thing you recover after you have had a hearing problem. Our Lifetime program will be by your side all through.</li>

			</ol>
		</div>
		<div id="hearingtest" style="margin:0px auto;padding-left:30px;padding-right:30px;" >
			<h2 style="color:#173E9E;text-align:center;"><strong>Hearing Screening Test to Measure Your Hearing Loss</strong></h2>
			<hr width="50%" style="color:red;background:red;height:1px;"/>
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR tests are easy and clean. Our expert audiologists will be able to give you a quick examination and help you realize everyday situations with respect to hearing issues. Once the problem is identified, it gets easier for both the doctor and the patient to understand the extent of the problem and the treatment procedures that need to be taken up. A hearing test will neither be painful nor too uncomfortable and the results are offered immediately. We have the latest technology in place to have a quick scan of your problem and generate reports that would help in identifying the right device for treatment.</p>​
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR allows an extensive range of equipment from several manufacturers and suppliers. All of these products feature the latest development in hearing treatment technology and aim to make your life as normal as it should be. EARCANHEARproducts are discreet and come in sizes that wouldn’t strike the eye. Further, all of these products are designed to suit a range of budget, so that everyone can get treated in EARCANHEAR clinics.</p>	
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR uses the latest technology to diagnose hearing loss and defects. You would be glad to know that all the tests are done for free at EARCANHEARclinics. Our highly qualified audiologists are adept in using the best instruments and diagnostic procedures that suit individual needs of patients.</p>
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR uses the latest technology to diagnose hearing loss and defects. You would be glad to know that all the tests are done for free at EARCANHEARclinics. Our highly qualified audiologists are adept in using the best instruments and diagnostic procedures that suit individual needs of patients.</p>
			<p style="text-indent:50px;text-align:justify;">EARCANHEAR aims to be one of the leading hearing care facilitators in India. </p>
		</div>
		<div id="hearingsolution" style="margin:0px auto;padding-left:30px;padding-right:30px;" >
				<h2 style="color:#173E9E;text-align:center;"><strong>Quality and Branded Digital Hearing Aids</strong></h2>
				<hr width="50%" style="color:red;background:red;height:1px;"/>
				<p style="text-indent:50px;text-align:justify;">EARCANHEAR is the leading hearing aid specialist across the globe and has a strong presence in Gujarat. Working in this field with great experience and with great experts, EARCANHEAR offers the largest choice of hearing aid from major manufacturers around the world. Unlike most hearing aid specialists, EARCANHEAR claims to be a completely independent solution provider that gives customized service to customers and present a range of product options. Further, our highly qualified audiologists are the best in this field, who help you understand the degree of the problem and recommended the best treatment procedures. We have made a name in the industry as one of the most customer-centric services.</p>​
				<p style="text-indent:50px;text-align:justify;">We offer all types of hearing aids, including both invisible hearing aids and behind the ear devices. We don’t believe in sticking to a single manufacturer and support competition in a way that it allows maximum benefits to our customers. With a range of products, you can expect hearing aid equipment for all budgets with multiple facilities. Every product that EARCANHEAR advocates comes with a manufacturer’s warranty to ensure peace of mind and a good investment.</p>	
				
		</div>
		</div>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5c17667582491369ba9e666a/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
</body>
</html>
