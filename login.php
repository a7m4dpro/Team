
<?
include"config.php";
include"headerlog.php";
	
	$username = strip_tags($_POST['username']);
	$password = ($_POST['password']);
	
	if(isset($_POST['logsub'])){
	
		if(empty($username) or empty($password)){
		
		echo"الرجاء إملأ جميع الخانات";
		
		}else{
			
			$DBsql = mysql_query("SELECT * FROM account WHERE Name = '".$username."' OR EmailAddress = '".$username."' AND Password = '".$password."'");
			
			if(mysql_num_rows($DBsql) > 0){
				
				$FetchU = mysql_fetch_assoc($DBsql);
				
				$uid = $FetchU['AccountId'];
				$uname = $FetchU['Name'];
				$umail = $FetchU['EmailAddress'];
				$upass = $FetchU['Password'];
				
				if($uname != $u AND $umail = $u ){
					
					echo"إسم المستخدم أو البريد الإلكتروني ليس مسجل لدينا .";
					
				}elseif($upass != $password ){
					
					echo"كلمة المرور غير صحيحة , هل نسيت كلمة المرور؟";
					
				}else{
					
					setcookie("uid",$uid,time()+60*60*24);
					setcookie("login",'1',time()+60*60*24);
					echo"تم تسجيل الدخول بنجاح";
					header('Location: index.php');
					
				}
			
			}else{
				
				echo"اسم المستخدم أو كلمة المرور غير صحيحة";
				
			}
		}
	
	}

if(login == 1){
	
	header('Location: index.php');
	
}else{
?>



<html>

	<head>

	</head>
<ol class="breadcrumb" dir="rtl">
	<li><a href="#">الرئيسية</a></li>
	<li class="active">تسجيل الدخول</li>
</ol>

	
		<script type="text/javascript">
		(function(){
		var millis = 1150, // milliseconds between title changes
		titles = [ // Configure titles below, original title will be automatically added to the end
		"Infinite Productions | Login"
		], count = 0;
		titles.push(document.title);
		setInterval(function(){
		document.title = titles[count % titles.length];
		++count;
		}, millis);
		})();
		</script>
	<body>

		
		
<div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
			<center>
                <i class="glyphicon glyphicon-user"></i>&nbsp;                أخرى
                            </h3>
							</center>
        </div>
		<div>TestEdit</div>
                            <div class="list-group">
                                                    <div menuitemname="Already Registered Heading" class="list-group-item" id="Primary_Sidebar-Already_Registered-Already_Registered_Heading">
                                                        <a data-toggle="collapse" data-target="#how" class="" dir="rtl">كيف بإمكاني استعادة كلمة مروري اثناء نسياني لها ؟</a>
                                                    </div>
													<div id="how" class="collapse padd" dir="rtl">
													بإمكانك استعادة كلمة المرور عبر صفحة <a href="resetpassword.php" class="resetpasswordhow"> نسيت كلمة المرور </a>
													</div>
													
                            </div>
                    </div>
		
		
		<form action="login.php" class="forma" method="POST" style="	border-top:2px solid #18ab9b;border-right:2px solid #18ab9b;border-left:2px solid #18ab9b;border-bottom:2px solid #18ab9b;">
		
			<h2> تسجيل الدخول <i class="glyphicon glyphicon-user"></i></h2>
			
			<div class="input-group usernamel">
			  <input dir="rtl" type="text" name="username" class="form-control" aria-describedby="basic-addon2">
			  <span class="input-group-addon USERn" id="basic-addon2">إسم المستخدم</span>
			</div>
			
			
			<div class="input-group password1">
			  <input dir="rtl" type="password" name="password" class="form-control" aria-describedby="basic-addon2">
			  <span class="input-group-addon PASSw" id="basic-addon3">كلمة المرور</span>
			</div>
			
			
			<button type="submit" name="logsub" class="btn btn-default btnl">تسجيل الدخول</button>
			
		
		</form>
	
	
	
	</body>


</html>



<?
}
include"footer.php";
?>