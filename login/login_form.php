<?php require_once($_SERVER['DOCUMENT_ROOT']."/github/Eckl/_config/bootstrap.php"); 
		include_once(_JS_URL_."login/login_form.php"); 
?>
<div>
    <div id="login_form" title="Login">
		<div id="validateTips_login" class="validateTips">&nbsp;</div>
             <label for="login_form_user"><?php echo LANGUAGE_MEMBERS_TEXT_USER;?></label>
             <input type="text" name="login_form_user" id="login_form_user"  class="text ui-widget-content ui-corner-all" />
             <label for="login_form_password"><?php echo LANGUAGE_MEMBERS_TEXT_PASSWORD;?></label>
             <input type="password" name="login_form_password" id="login_form_password" class="text ui-widget-content ui-corner-all" />
             <label for="login_form_remember_session"><input name="login_form_remember_session" type="checkbox" id="login_form_remember_session" value="1" />
                No cerrar sesi&oacute;n</label>
    </div>
</div>

