<?php 
 header('Content-type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link type="text/css" rel="stylesheet" href="/Rustypages/css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="/Rustypages/css/bootstrap-theme.css"/>
<link type="text/css" rel="stylesheet" href="/Rustypages/css/social-buttons-3.css"/>

<script src="/Rustypages/js/jquery.min.js"></script>
<script src="/Rustypages/js/bootstrap.js"></script>
<style>
#back{width:100%; height: 380px;margin-left:100px; margin-top:200px;}
#tags{margin-left:1200px;}
#loginsignup{margin-left:10px;margin-top:-30px;}

#accordion{  position:relative;width:230px;margin-top:-500px;}
#bookpanel{
	font-family: "Times New Roman;",Times,serif;
	position:relative;height:630px;width:920px;margin-top:50px;
	margin-left:250px;-webkit-border-radius :0px;
	-moz-border-radius : 0px;
	border-radius : 0px;
	-o-border-radius : 0px;background-color:white;transition:height 2s;}
#footer{position:relative;background-attachment:fixed;margin-top:500px;
	background-color:black;height:50px;-webkit-border-radius : 5px;
	-moz-border-radius : 5px;
	border-radius : 5px;
	-o-border-radius : 5px;
}
#textbox{margin-top:-270px;margin-left:300px;}
#owner{background-visibility:hidden;}
#details{background-color:#B0B0B0; }
</style>

</head>

<body style="background-color:white"> 

<div class="container">

    <!-- Static navbar -->
    <div class="navbar navbar-default" role="navigation" style=" background-color:black" cellpadding="100">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project BookWorm</a>
        </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><input type="text" placeholder="Quick Search" style="margin-left:300px;margin-top:10px;width:500px;height:40px;"><button class="btn btn-danger" style="height:40px;"><span class="glyphicon glyphicon-search"></span></button> </input></li></li>
                    </ul>        
		<?php include '/phpajax/checklogin.php';
		//$toggle = 1 means logged in, 0 means logged out
                if(!$toggle) : //logged out?>
        <link rel='stylesheet' href='/Rustypages/css/validationEngine.jquery.css' type='text/css'/>
        <link href='/Rustypages/css/progression.css' rel='stylesheet' type='text/css'>
            <script type='text/javascript' src='/Rustypages/js/progression.js'></script>
            <script src='/Rustypages/js/jquery.validationEngine-en.js' type='text/javascript' charset='utf-8'></script>
            <script src='/Rustypages/js/jquery.validationEngine.js' type='text/javascript' charset='utf-8'></script>

		<script>
$(document).ready(function(){
		// binds form submission and fields to the validation engine
		$('#registration_form').validationEngine({
                    promptPosition : 'centerRight',
                    ajaxFormValidation: true,
                    ajaxFormValidationMethod: 'post',
                    onAjaxFormComplete: function (status,form,json,options){
                        if (status == true){
                            if(json[1][1]==true && json[2][1]==true){
                                form.attr('action','/Rustypages/phpajax/register.php');
                                form.submit();
                            }
                            else if(json[1][1]==false){		//rollno is not available
                                $('#roll_no').validationEngine('showPrompt',json[1][2]);
                                if(json[2][1]==false){		//email is not available
                                    $('#email_register').validationEngine('showPrompt',json[2][2]);}
                            }
                            else{
                                $('#email_register').validationEngine('showPrompt',json[2][2]);}
                        }
                    }
                    });        
                    $('#login_form').validationEngine({
                        promptPosition : 'centerRight',
                        ajaxFormValidation: true,
                        ajaxFormValidationMethod: 'post',
                        onAjaxFormComplete: function (status,form,json,options){
                            if (status == true) {
                                if(json[1]==true){
                                    form.attr('action','/Rustypages/phpajax/process_login.php');
                                    form.validationEngine('detach');
                                    form.submit();}
                                else{$('#email_login').validationEngine('showPrompt',json[2]);}
                            }
                        }
                    });
                });
        </script>	
            <a href='#myModal'  class='btn btn-warning' data-toggle='modal'>Login</a>
            <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                <div class='modal-dialog'>
                    <div class='modal-content'>
                        <div class='modal-header'>
                            <h4 class='modal-title' id='myModalLabel'>Login details</h4>
                        </div>
                        <div class='modal-body'>
                            <!-- LOGIN FORM-->
                            <form action='/Rustypages/phpajax/ajaxValidateUserLogin.php' name='login_form' id='login_form' method='post'>
                                <table class='table'>
                                    <tr>
                                        <td><label>EmailID</label></td>
                                        <td><input data-progression class='validate[required,custom[email]]' type='email' style='width:200px' id='email_login' name='email_login' data-helper=' Enter your email address' class='span3'/></td>
                                    </tr>
                                    <tr>
                                        <td><label>Password</label></td>
                                        <td><input class='validate[required,custom[password]]' type='password' name='password_login' id='password_login' placeholder='Keep it secure!' class='span3'/></td>				
                                    </tr>
                                    </table>
                                    <button type='submit' value='login' onclick= 'return true' class='btn btn-success'>Login</button>
                                    <button type='reset' class='btn'>Clear</button>
                                </form>	
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <a href='#myModal1'  class='btn btn-success' data-toggle='modal'>Signup</a>
                <div class='modal fade' id='myModal1' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h4 class='modal-title' id='myModalLabel'>Registration</h4>
                            </div>
                            <div class='modal-body'>
                                
                                <!--REGISTER FORM-->
                                <form action='/Rustypages/phpajax/ajaxValidateUser.php' method='post' name='registration_form' id='registration_form'>
                                    <fieldset>
                                        <label for='username'>Username*</label>
                                        <input class='validate[required,ajax[ajaxUserNameCall]' type='text' name='username' id='username' placeholder='Choose a username' class='span3' class='cname'/>		
                                        <br><label for='name'>Name*</label>
                                            <input type='text' class='validate[required]' name='name' id='name' placeholder='Your name' class='span3'/>
                                            <br><label for='roll_no'>Roll number*</label>
                                                <input type='text' class='validate[required,custom[rollNo]]' name='roll_no' id='roll_no' placeholder='Roll number' class='span3'/>
                                                <br><label for='hostel'>Hostel*</label>
                                                    <select id='hostel' name='hostel'>
                                                        <option value='alak'>Alakananda</option>
                                                        <option value='jam'>Jamuna</option>
                                                        <option value='ganga'>Ganga</option>
                                                        <option value='brahms'>Brahmaputra</option>
                                                        <option value='sarayu'>Sarayu</option>
                                                        <option value='sharav'>Sharavati</option>
                                                        <option value='tambi'>Tamiraparani</option>
                                                        <option value='sindhu'>Sindhu</option>
                                                        <option value='krishna'>Krishna</option>
                                                        <option value='cauvery'>Cauvery</option>
                                                        <option value='narmad'>Narmada</option>
                                                        <option value='tapti'>Tapti</option>
                                                        <option value='saras'>Saraswati</option>
                                                        <option value='godav'>Godavari</option>
                                                        <option value='pampa'>Pampa</option>
                                                        <option value='mahanadi'>Mahanadi</option>
                                                        <option value='mandak'>Mandakini</option>
                                                    </select>
                                                    
                                                    <br><label for='email'>Email-ID*</label>
                                                        <input class='validate[required,custom[email]]' type='email' id='email_register'  name='email_register' style='width:200px' placeholder=' Enter your email address'/><br>
                                                            <br><label for='password'>Password*</label>
                                                                <input class='validate[required,custom[password]]' type='password' id='password' name='password' placeholder='Password' class='span3' data-prompt-position='centerRight'/><br>
                                                                    <br><label for='confirmpwd'>Confirm Password*</label>
                                                                        <input class='validate[equals[password]]' type='password' id='confirmpwd' name='confirmpwd' placeholder='Retype Password' class='span3'/><br>
                                                                            </fieldset>
                                    <br><button type='submit' value='Register'  class='btn btn-success'>Submit</button>
                                        <button type='reset' class='btn'>Clear</button>
                                </form>
                            </div>
                            <div id='warning'></div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
		<?php else : //logged in ?>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://cf.badassdigest.com/_uploads/images/32183/calvin-and-hobbes-header__stamp.jpg"></a>  
                            <ul class="dropdown-menu">	
                                <li><a href="/Rustypages/phpajax/logout.php">Sign Out</a></li>
                                <li><a href="#"><label>Welcome <?php echo $_SESSION['uname'];?>!</label></a></li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
		<?php endif; ?>
        </div>
</div>


<?php //php code to get book panel data
include 'phpajax/url_rewrite.php';


if(isset($_GET['id'])){
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);
    if($id==''){header('Location: /Rustypages/phpajax/404notfound.php');}
    $stmt = $mysqli->prepare("SELECT b_id, b_title, b_author, b_description, b_publisher, b_course, b_course_title
        FROM book_data
        WHERE b_id = ?
        LIMIT 1");
    $stmt->bind_param('i', $id);  
    $stmt->execute();    // Execute the prepared query.
    $stmt->store_result();
// get variables from result.
    $stmt->bind_result($b_id, $b_name, $b_author, $b_description, $b_publisher, $b_course, $b_course_title);
    $stmt->fetch();
//if (!isset($b_name)){header('Location: /error.html');}
    }
    else{header('Location: /Rustypages/phpajax/404notfound.php');}
    
    
    ?>
    
    <div class="container" id="bookpanel">
        <ul class="thumbnails" id="ulthumbs">
            <li>
                <a class="thumbnail" style="width:270px;height:320px;margin-left:-15px;margin-top:100px;" ><img style="height:290px;width:270px;"src="/Rustypages/images/flumech.jpg" id="image" alt="book1"class="img" style="border: thick;"></a>
            </li>
        </ul>
        <div id="textbox" style="margin-top: -340px">
            <table class="table table-bordered">
                <tr><td><label><b><font size="4"color="green">NAME</font></b></label></td><td><font size="4"><?php echo GenerateLink($b_id,$b_name,$mysqli);?></td></tr>
                <tr><td><label><b><font size="4"color="green">AUTHOR(S)</font></b></label></td><td><font size="4"><?php echo $b_author;?></td></tr>
                <tr><td><label><b><font size="4"color="green">PUBLISHER</font></b></label></td><td><font size="4"><?php echo $b_publisher;?></td></tr>
                <tr><td><label><b><font size="4"color="green">DESCRIPTION</font></b></label></td><td><font size="4"><?php echo ($b_description);?></td></tr>
                <tr><td><label><b><font size="4"color="green">COURSE </font></b></label></td><td><font size="4"><?php echo $b_course.' '.$b_course_title;?></td></tr>
                <tr><td><label><b><font size="4"color="green">DEPARTMENT</font></b></label></td><td><font size="4">Mechanical Engineering</td></tr>
            </table>
            <br><br>
                    </div>
        <div><b>
                <div class="alert alert-danger">
                    <div>This book is unavailable</div>
                </div>
                <!--button type="button" style="height:30px;width:100px;-webkit-border-radius:0px;-moz-border-radius: 0px;border-radius: 0px;" disabled="disabled"class="btn btn-success">Available</button>   <button type="button"  class="btn btn-default" style="height:30px;width:100px;-webkit-border-radius:0px;-moz-border-radius: 0px;border-radius: 0px;">Unavailable</button-->
                <table class="table table-bordered">
                    <tr><th>Owner's Name</th><th>Roll Number</th><th>Hostel</th><th>Room Number</th><th>Phone Number</th><th>Email ID</th><th></th></tr>
                    <tr><td><a href="profile.html">Arvind Narayanan</a></td><td>ME11B124</td><td>Narmada</td><td>2005</td><td>+91-123456789</td><td>abc@example.com</td><td><a href="#" class="btn btn-primary">Request book<i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i></a></td></tr>
                    <tr><td>Aniruddha Tamhane</td><td>CH11B066</td><td>Narmada</td><td>2010</td><td>+91-123456789</td><td>abc2@example.com</td><td><a href="#" class="btn btn-primary">Request book<i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i></a></td></tr>
                </table></b>
        </div>
       <!--<b><a href="#">Go to Owner's profile<i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i><i class="glyphicon glyphicon-chevron-right"></i></a></b>-->
    </div>
    
    
						<div class="panel-group" id="accordion" style="width:200px;margin-left: 0px;">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title" style="height:10px">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Academic</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">

										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-plane"></span>AE</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-tint"></span>BT/BS</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-wrench"></span>ME</span><br><br></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-flag"></span>NA/OE/OS</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-hdd"></span>CS</span><br><br></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-home"></span>CE</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-leaf"></span>Env</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-fire"></span>CH</span><br><br></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-off"></span>EE</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-briefcase"></span>MS</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-book"></span>HS</span><br><br></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-info-sign"></span>EP</span></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-cog"></span>MM</span> </a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-signal"></span>MA</span><br><br></a>
										<a href=""><span class="badge" style="background-color:#287AA9"><span class="glyphicon glyphicon-picture"></span>ED</span></a>


									</div>	
								</div>
							</div>

							<div class="panel panel-default" style="width:200px">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Non Academic</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Fiction</span>
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Biography</span><br><br>
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Lit</span>
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Magazine</span><br><br>
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Art</span>
										<span class="badge" style="background-color:#234723"><span class="glyphicon glyphicon-folder-open"></span> Fashion</span>
									</div>
								</div>
							</div>

						</div>

						<footer>
							<div id="footer" class="footer-wrapper" >
								<img></img>

							</div>
						</footer>




						</body>
						</html>

