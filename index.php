<?php 
 header('Content-type: text/html; charset=utf-8'); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css"/>

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>




        <style>


            #back{width:100%; height: 380px;margin-left:100px; margin-top:200px;}
            #tags{margin-left:1200px;}
            #loginsignup{margin-left:10px;margin-top:-30px;}
            #footer{
                background-color:red;height:50px;-webkit-border-radius : 5px;
                -moz-border-radius : 5px;
                border-radius : 5px;
                -o-border-radius : 5px;
            }
            #foot1{
                width:100px;text-align:center;margin-left:100px;margin-top:10px;}
            #foot1:hover{
                width:100px;text-align:center;margin-left:100px;margin-top:10px;color:yellow;}
            #foot2{
                margin-top:-45px;margin-left:220px;width:100px;}
            #foot2:hover{
                margin-top:-45px;margin-left:220px;width:100px;color:yellow;}
            </style>
        </head>

        <body style="background-color:#202020"> 

        <div class="container">

            <!-- Static navbar -->
            <div class="navbar navbar-default" role="navigation" style=" background-color:#9AA0EB" cellpadding="100">
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
                    <ul class="nav navbar-nav navbar-right">
                        <a href="#myModal"  class="btn btn-primary" data-toggle="modal">Browse</a>

                        <?php
                        include 'phpajax/checklogin.php';
//$toggle = 1 means logged in, 0 means logged out
                        if (!$toggle) : //logged out
                            ?>
                        <link rel='stylesheet' href='css/validationEngine.jquery.css' type='text/css'/>
                        <link href='css/progression.css' rel='stylesheet' type='text/css'>
                            <script type='text/javascript' src='js/progression.js'></script>
                            <script src='js/jquery.validationEngine-en.js' type='text/javascript' charset='utf-8'></script>
                            <script src='js/jquery.validationEngine.js' type='text/javascript' charset='utf-8'></script>
                            
                            <script>
                                $(document).ready(function() {
                                    // binds form submission and fields to the validation engine
                                    $('#registration_form').validationEngine({
                                        promptPosition: 'centerRight',
                                        ajaxFormValidation: true,
                                        ajaxFormValidationMethod: 'post',
                                        onAjaxFormComplete: function(status, form, json, options) {
                                            if (status == true) {
                                                if (json[1][1] == true && json[2][1] == true) {
                                                    form.attr('action', 'phpajax/register.php');
                                                    form.submit();
                                                }
                                                else if (json[1][1] == false) {		//rollno is not available
                                                    $('#roll_no').validationEngine('showPrompt', json[1][2]);
                                                    if (json[2][1] == false) {		//email is not available
                                                        $('#email_register').validationEngine('showPrompt', json[2][2]);
                                                    }
                                                }
                                                else {
                                                    $('#email_register').validationEngine('showPrompt', json[2][2]);
                                                }
                                            }
                                        }
                                    });
                                    $('#login_form').validationEngine({
                                        promptPosition: 'centerRight',
                                        ajaxFormValidation: true,
                                        ajaxFormValidationMethod: 'post',
                                        onAjaxFormComplete: function(status, form, json, options) {
                                            if (status == true) {
                                                if (json[1] == true) {
                                                    form.attr('action', 'phpajax/process_login.php');
                                                    form.validationEngine('detach');
                                                    form.submit();
                                                }
                                                else {
                                                    $('#email_login').validationEngine('showPrompt', json[2]);
                                                }
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
                                            <form action='phpajax/ajaxValidateUserLogin.php' name='login_form' id='login_form' method='post'>
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
                                            <form action='phpajax/ajaxValidateUser.php' method='post' name='registration_form' id='registration_form'>
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
                                                                                                <label>Welcome <?php echo $_SESSION['uname']; ?>!</label>
<?php endif; ?>

                                                                                            </div>
                                                                                            </div>
                                                                                            <div class="modal fade" id="creditmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                                                <div class="modal-dialog">
                                                                                                    <div class="modal-content">
                                                                                                        <div class="modal-header">
                                                                                                            <h4 class="modal-title" id="myModalLabel">The Team!</h4>
                                                                                                        </div>
                                                                                                        <div class="modal-body">
                                                                                                            <h3>Abhishek Sharma</h3>
                                                                                                            <h3>Aniruddha Tamhane</h3>
                                                                                                            <h3>Pratik Kothari</h3>
                                                                                                            <h3>Arvind N</h3>
                                                                                                        </div>
                                                                                                    </div><!-- /.modal-content -->
                                                                                                </div><!-- /.modal-dialog -->
                                                                                            </div><!-- /.modal -->



                                                                                            <div id="back" >

                                                                                                <input style="width:900px;height:30px;align:center;" type="search" placeholder="Bookname" name="string" class="search-query input-medium">

                                                                                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
                                                                                            </div>
                                                                                            <div id="footer" class="container">
                                                                                                <div style="margin-top:10px">
                                                                                                    <a href="#creditmodal" class="btn btn-info" data-toggle="modal"><span class="glyphicon glyphicon-credit-card"></span> Credits</a>
                                                                                                </div>
                                                                                                <div style="margin-left:1000px;margin-top:-37px">
                                                                                                </div>
                                                                                            </div>



                                                                                            </body>
                                                                                            </html>

