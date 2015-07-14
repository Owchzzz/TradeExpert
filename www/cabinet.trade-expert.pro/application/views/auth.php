
<center><form action="auth.html" method="post" accept-charset="UTF-8">
				 Логин: <br><input id="user_username" style="margin-bottom: 15px;" type="text" name="login" size="30" /><br>
				 Пароль: <br><input id="user_password" style="margin-bottom: 15px;" type="password" name="password" size="30" /><br>
    <input class="btn btn-primary" style="width: 150px; clear: left; height: 32px; font-size: 13px;" type="submit" name="commit" value="Войти" />
</form>
<?php 
$error=$this->session->userdata('error');
if ($error=="1"){
echo "Ошибка авторизации!";
$this->session->sess_destroy();
}
?>

