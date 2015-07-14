<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.14.2010
*
* Description:  English language file for Ion Auth messages and errors
*
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Аккаунт успешно создан';
$lang['account_creation_unsuccessful'] 	 	 = 'Не удалось создать аккаунт';
$lang['account_creation_duplicate_email'] 	 = 'Email уже существует или недействителен';
$lang['account_creation_duplicate_username'] = 'Имя пользователя уже существует или недействительно';

// Password
$lang['password_change_successful'] 	 	 = 'Пароль успешно изменен';
$lang['password_change_unsuccessful'] 	  	 = 'Невозможно изменить пароль';
$lang['forgot_password_successful'] 	 	 = 'Сброс пароля отправки сообшения';
$lang['forgot_password_unsuccessful'] 	 	 = 'Невозможен сброс пароля';

// Activation
$lang['activate_successful'] 		  	     = 'Счет активирован';
$lang['activate_unsuccessful'] 		 	     = 'Невозможно активировать аккаунт';
$lang['deactivate_successful'] 		  	     = 'Аккаунт деактивирован';
$lang['deactivate_unsuccessful'] 	  	     = 'Невозможно деактивировать аккаунт';
$lang['activation_email_successful'] 	  	 = 'Активация отправки сообщения';
$lang['activation_email_unsuccessful']   	 = 'Неактивация отправки сообщения';

// Login / Logout
$lang['login_successful'] 		  	         = 'Успешный вход';
$lang['login_unsuccessful'] 		  	     = 'Неправильный логин';
$lang['login_unsuccessful_not_active'] 		 = 'Счет неактивен';
$lang['login_timeout']                       = 'Временно заблокирован. Повторите попытку позже.';
$lang['logout_successful'] 		 	         = 'Выход успешно завершен';

// Account Changes
$lang['update_successful'] 		 	         = 'Информация об учетной записи успешно обновлена';
$lang['update_unsuccessful'] 		 	     = 'Не удается обновить информацию об учетной записи';
$lang['delete_successful']               = 'Удалить пользователя';
$lang['delete_unsuccessful']           = 'Невозможно удалить пользователя';

// Groups
$lang['group_creation_successful']  = 'Группа успешно создана';
$lang['group_already_exists']       = 'Название группы уже принято';
$lang['group_update_successful']    = 'Информация о группе обновлена';
$lang['group_delete_successful']    = 'Удалить группу';
$lang['group_delete_unsuccessful'] 	= 'Не удалось удалить группу';
$lang['group_name_required'] 		= 'Название группы является обязательным полем';

// Email Subjects
$lang['email_forgotten_password_subject']    = 'Забыли пароль';
$lang['email_new_password_subject']          = 'Новый пароль';
$lang['email_activation_subject']            = 'Аккаунт активирован';