<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Auth Lang - English
*
* Author: Ben Edmunds
* 		  ben.edmunds@gmail.com
*         @benedmunds
*
* Author: Daniel Davis
*         @ourmaninjapan
*
* Location: http://github.com/benedmunds/ion_auth/
*
* Created:  03.09.2013
*
* Description:  English language file for Ion Auth example views
*
*/

// Errors
$lang['error_csrf'] = 'Эта форма не прошла нашу проверку безопасности.';

// Login
$lang['login_heading']         = 'Логин';
$lang['login_subheading']      = 'Пожалуйста, войдите с вашей электронной почты/имя пользователя и пароль.';
$lang['login_identity_label']  = 'Email/Имя пользователя:';
$lang['login_password_label']  = 'Пароль:';
$lang['login_remember_label']  = 'Запомнить:';
$lang['login_submit_btn']      = 'Логин';
$lang['login_forgot_password'] = 'Забыли пароль?';

// Index
$lang['index_heading']           = 'Пользователи';
$lang['index_subheading']        = 'Ниже приведен список пользователей.';
$lang['index_fname_th']          = 'Имя';
$lang['index_lname_th']          = 'Фамилия';
$lang['index_email_th']          = 'Email';
$lang['index_groups_th']         = 'Группы';
$lang['index_status_th']         = 'Статус';
$lang['index_action_th']         = 'Действие';
$lang['index_active_link']       = 'Активный';
$lang['index_inactive_link']     = 'Неактивный';
$lang['index_create_user_link']  = 'Создать нового пользователя';
$lang['index_create_group_link'] = 'Создать новую группу';

// Deactivate User
$lang['deactivate_heading']                  = 'Отключить пользователя';
$lang['deactivate_subheading']               = 'Вы уверены, что хотите отключить пользователя \'%s\'';
$lang['deactivate_confirm_y_label']          = 'Да:';
$lang['deactivate_confirm_n_label']          = 'Нет:';
$lang['deactivate_submit_btn']               = 'Отправить';
$lang['deactivate_validation_confirm_label'] = 'Подтвердить';
$lang['deactivate_validation_user_id_label'] = 'ID пользователя';

// Create User
$lang['create_user_heading']                           = 'Создать пользователя';
$lang['create_user_subheading']                        = 'Пожалуста, введите ниже информацию о пользователе.';
$lang['create_user_fname_label']                       = 'Имя:';
$lang['create_user_lname_label']                       = 'Фамилия:';
$lang['create_user_company_label']                     = 'Название компании:';
$lang['create_user_email_label']                       = 'Email:';
$lang['create_user_phone_label']                       = 'Телефон:';
$lang['create_user_password_label']                    = 'Пароль:';
$lang['create_user_password_confirm_label']            = 'Подтвердить пароль:';
$lang['create_user_submit_btn']                        = 'Создать пользователя';
$lang['create_user_validation_fname_label']            = 'Имя';
$lang['create_user_validation_lname_label']            = 'Фамилия';
$lang['create_user_validation_email_label']            = 'Email адрес';
$lang['create_user_validation_phone1_label']           = 'Первый номер телефона';
$lang['create_user_validation_phone2_label']           = 'Второй номер телефона';
$lang['create_user_validation_phone3_label']           = 'Третий номер телефона';
$lang['create_user_validation_company_label']          = 'Название компании';
$lang['create_user_validation_password_label']         = 'Пароль';
$lang['create_user_validation_password_confirm_label'] = 'Подтвердить пароль';

// Edit User
$lang['edit_user_heading']                           = 'Редактирование пользователя';
$lang['edit_user_subheading']                        = 'Пожалуста, введите ниже информацию о пользователе.';
$lang['edit_user_fname_label']                       = 'Имя:';
$lang['edit_user_lname_label']                       = 'Фамилия:';
$lang['edit_user_company_label']                     = 'Название компании:';
$lang['edit_user_email_label']                       = 'Email:';
$lang['edit_user_phone_label']                       = 'Телефон:';
$lang['edit_user_password_label']                    = 'Пароль: (если пароль изменен)';
$lang['edit_user_password_confirm_label']            = 'Подтвердить пароль: (если пароль изменен)';
$lang['edit_user_groups_heading']                    = 'Участник группы';
$lang['edit_user_submit_btn']                        = 'Сохранить пользователя';
$lang['edit_user_validation_fname_label']            = 'Имя';
$lang['edit_user_validation_lname_label']            = 'Фамилия';
$lang['edit_user_validation_email_label']            = 'Email адрес';
$lang['edit_user_validation_phone1_label']           = 'Первый номер телефона';
$lang['edit_user_validation_phone2_label']           = 'Второй номер телефона';
$lang['edit_user_validation_phone3_label']           = 'Третий номер телефона';
$lang['edit_user_validation_company_label']          = 'Название компании';
$lang['edit_user_validation_groups_label']           = 'Группы';
$lang['edit_user_validation_password_label']         = 'Пароль';
$lang['edit_user_validation_password_confirm_label'] = 'Подтвердить пароль';

// Create Group
$lang['create_group_title']                  = 'Создать группу';
$lang['create_group_heading']                = 'Создать группу';
$lang['create_group_subheading']             = 'Пожалуста, введите ниже информацию о группе.';
$lang['create_group_name_label']             = 'Название группы:';
$lang['create_group_desc_label']             = 'Описание:';
$lang['create_group_submit_btn']             = 'Создать группу';
$lang['create_group_validation_name_label']  = 'Название группы';
$lang['create_group_validation_desc_label']  = 'Описание';

// Edit Group
$lang['edit_group_title']                  = 'Редактировать группу';
$lang['edit_group_saved']                  = 'Сохранить группу';
$lang['edit_group_heading']                = 'Редактировать группу';
$lang['edit_group_subheading']             = 'Пожалуста, введите ниже информацию о группе.';
$lang['edit_group_name_label']             = 'Название группы:';
$lang['edit_group_desc_label']             = 'Описание:';
$lang['edit_group_submit_btn']             = 'Сохранить группу';
$lang['edit_group_validation_name_label']  = 'Название группы';
$lang['edit_group_validation_desc_label']  = 'Описание';

// Change Password
$lang['change_password_heading']                               = 'Изменить пароль';
$lang['change_password_old_password_label']                    = 'Старый пароль:';
$lang['change_password_new_password_label']                    = 'Новый пароль (не менее %s символов):';
$lang['change_password_new_password_confirm_label']            = 'Подтвердить новый пароль:';
$lang['change_password_submit_btn']                            = 'Изменить';
$lang['change_password_validation_old_password_label']         = 'Старый пароль';
$lang['change_password_validation_new_password_label']         = 'Новый пароль';
$lang['change_password_validation_new_password_confirm_label'] = 'Подтвердить новый пароль';

// Forgot Password
$lang['forgot_password_heading']                 = 'Забыли пароль';
$lang['forgot_password_subheading']              = 'Пожалуйста, введите Ваш %s, чтобы мы могли отправить Вам письмо для восстановления пароля.';
$lang['forgot_password_email_label']             = '%s:';
$lang['forgot_password_submit_btn']              = 'Отправить';
$lang['forgot_password_validation_email_label']  = 'Email адрес';
$lang['forgot_password_username_identity_label'] = 'Имя пользователя';
$lang['forgot_password_email_identity_label']    = 'Email';


// Reset Password
$lang['reset_password_heading']                               = 'Изменить пароль';
$lang['reset_password_new_password_label']                    = 'Новый пароль (не менееt %s символов):';
$lang['reset_password_new_password_confirm_label']            = 'Подтвердить новый пароль:';
$lang['reset_password_submit_btn']                            = 'Изменить';
$lang['reset_password_validation_new_password_label']         = 'Новый пароль';
$lang['reset_password_validation_new_password_confirm_label'] = 'Подтвердить новый пароль';

// Activation Email
$lang['email_activate_heading']    = 'Активировать аккаунт для %s';
$lang['email_activate_subheading'] = 'Пожалуйста, пройдите по ссылке %s.';
$lang['email_activate_link']       = 'Активировать аккаунт';

// Forgot Password Email
$lang['email_forgot_password_heading']    = 'Сбросить пароль %s';
$lang['email_forgot_password_subheading'] = 'Пожалуйста, пройдите по ссылке %s.';
$lang['email_forgot_password_link']       = 'Сбросить пароль';

// New Password Email
$lang['email_new_password_heading']    = 'Новый пароль для %s';
$lang['email_new_password_subheading'] = 'Ваш пароль был сброшен в: %s';

