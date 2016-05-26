<?

include"config.php";

?>



<!-- بداية اكواد HTML -->

<html meta charset="UTF-8">


	<head>
		<link rel="stylesheet" href="Font-Awesome/css/font-awesome.min.css" >
		<link rel="stylesheet" href="Font-Awesome/css/font-awesome.css" >
        <link rel='stylesheet' href='css/bootstrap.css' />
        <link rel='stylesheet' href='css/animate.css' />
		<link rel="shortcut icon" href="images/logo.png">
        <link rel='stylesheet' href='css/login.css' />
        <link rel='stylesheet' href='css/style.css' />
		<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700'>
		<title>انفينت برودكشن | تسجيل الدخول</title>
	</head>
	
	
	
	
	<body>
	
	
	

		
		
		
		
		
		
		
		
		
		
		
		
		<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			
			<div class="navbar-header navbar-left">
				<!-- زر المنيو -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<!-- نهاية زر المنيو -->
				<a class="navbar-brand" href="#"><span class="infcolor">Infinite<span> <span class="infcolor2">Productions</span></a>
			</div>
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			
			
							
							
							<ul class="nav navbar-nav navbar-left">
								<? if(login != 1){ ?><li><a href='register.php'>التسجيل</a></li><? } ?>
							</ul>
							
							
							<ul class="nav navbar-nav navbar-left">
								<li><a href="#">الدعم الفني</a></li>
							</ul>
							
			  				<ul class="nav navbar-nav navbar-left">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">خدماتنا</a>
												<ul class="dropdown-menu" dir="rtl">
													<li><a href="#"><center>الألعاب</center></a></li>
												</ul>
										</li>
									
							</ul>
							
			  				<ul class="nav navbar-nav navbar-left">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span> انفينت برودكشن</a>
												<ul class="dropdown-menu" dir="rtl">
													<li><a href="#"><center>من نحن</center></a></li>
													<li><a href="#"><center>إنضم لنا</center></a></li>
													<li><a href="#"><center>إتصل بنا</center></a></li>
												</ul>
										</li>
									
							</ul>
							
							
							
							<!-- الحساب-->
			  				<ul class="nav navbar-nav navbar-left marhaba">
									<!-- الحساب-->
									<? if(login == 1){ ?>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" dir="rtl">مرحباً بك يا : <? echo" ".username." "; ?> </a>
												<ul class="dropdown-menu" dir="rtl">
													<li><a href="#"><center>إعدادات الحساب</center></a></li>
													<li><a href="#" class="sh7nm"><center>شحن الرصيد</center></a></li>
												</ul>
										</li>
									<? } ?>
									
							</ul>
							<!-- نهاية الحساب -->
							
							
							
			</div>
		</div>
		
		</nav>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
		<!-- استدعاء المكتبات -->
	    <script src="javascript/jquery-2.2.4.min.js"></script>
	    <script src="javascript/jquery-1.11.1.min.js"></script>
        <script src="javascript/bootstrap.min.js"></script>
        <script src="javascript/plugins.js"></script>
		<!-- نهاية استدعاء المكتبات -->
		
	</body>


</html>


<!-- بداية اكواد PHP -->

<?












?>