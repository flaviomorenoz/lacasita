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

// Errores
$lang['error_csrf'] = 'Esta publicación de formulario no pasó nuestras verificaciones de seguridad.';

// Iniciar sesión
$lang['login_heading'] = 'Iniciar sesión';
$lang['login_subheading'] = 'Inicie sesión con su correo electrónico / nombre de usuario y contraseña a continuación.';
$lang['login_identity_label'] = 'Correo electrónico / Nombre de usuario:';
$lang['login_password_label'] = 'Contraseña:';
$lang['login_remember_label'] = 'Recordarme:';
$lang['login_submit_btn'] = 'Iniciar sesión';
$lang['login_forgot_password'] = '¿Olvidó su contraseña?';

// Índice
$lang['index_heading'] = 'Usuarios';
$lang['index_subheading'] = 'Debajo hay una lista de los usuarios';
$lang['index_fname_th'] = 'Nombre';
$lang['index_lname_th'] = 'Apellido';
$lang['index_email_th'] = 'Correo electrónico';
$lang['index_groups_th'] = 'Grupos';
$lang['index_status_th'] = 'Estado';
$lang['index_action_th'] = 'Acción';
$lang['index_active_link'] = 'Activo';
$lang['index_inactive_link'] = 'Inactivo';
$lang['index_create_user_link'] = 'Crear un nuevo usuario';
$lang['index_create_group_link'] = 'Crear un nuevo grupo';

// Desactivar usuario
$lang['deactivate_heading'] = 'Desactivar usuario';
$lang['deactivate_subheading'] = '¿Está seguro de que desea desactivar el usuario %s';
$lang['deactivate_confirm_y_label'] = 'Sí:';
$lang['deactivate_confirm_n_label'] = 'No:';
$lang['deactivate_submit_btn'] = 'Enviar';
$lang['deactivate_validation_confirm_label'] = 'confirmación';
$lang['deactivate_validation_user_id_label'] = 'ID de usuario';

// Crear usuario
$lang['create_user_heading'] = 'Crear usuario';
$lang['create_user_subheading'] = 'Por favor ingrese la información del usuario a continuación.';
$lang['create_user_fname_label'] = 'Nombre:';
$lang['create_user_lname_label'] = 'Apellido:';
$lang['create_user_company_label'] = 'Nombre de la empresa:';
$lang['create_user_identity_label'] = 'Identidad:';
$lang['create_user_email_label'] = 'Correo electrónico:';
$lang['create_user_phone_label'] = 'Teléfono:';
$lang['create_user_password_label'] = 'Contraseña:';
$lang['create_user_password_confirm_label'] = 'Confirmar contraseña:';
$lang['create_user_submit_btn'] = 'Crear usuario';
$lang['create_user_validation_fname_label'] = 'Nombre';
$lang['create_user_validation_lname_label'] = 'Apellido';
$lang['create_user_validation_identity_label'] = 'Identidad';
$lang['create_user_validation_email_label'] = 'Dirección de correo electrónico';
$lang['create_user_validation_phone_label'] = 'Teléfono';
$lang['create_user_validation_company_label'] = 'Nombre de la empresa';
$lang['create_user_validation_password_label'] = 'Contraseña';
$lang['create_user_validation_password_confirm_label'] = 'Confirmación de contraseña';

// Editar usuario
$lang['edit_user_heading'] = 'Editar usuario';
$lang['edit_user_subheading'] = 'Por favor ingrese la información del usuario a continuación.';
$lang['edit_user_fname_label'] = 'Nombre:';
$lang['edit_user_lname_label'] = 'Apellido:';
$lang['edit_user_company_label'] = 'Nombre de la empresa:';
$lang['edit_user_email_label'] = 'Correo electrónico:';
$lang['edit_user_phone_label'] = 'Teléfono:';
$lang['edit_user_password_label'] = 'Contraseña: (si cambia la contraseña)';
$lang['edit_user_password_confirm_label'] = 'Confirmar contraseña: (si cambia la contraseña)';
$lang['edit_user_groups_heading'] = 'Miembro de grupos';
$lang['edit_user_submit_btn'] = 'Guardar usuario';
$lang['edit_user_validation_fname_label'] = 'Nombre';
$lang['edit_user_validation_lname_label'] = 'Apellido';
$lang['edit_user_validation_email_label'] = 'Dirección de correo electrónico';
$lang['edit_user_validation_phone_label'] = 'Teléfono';
$lang['edit_user_validation_company_label'] = 'Nombre de la empresa';
$lang['edit_user_validation_groups_label'] = 'Grupos';
$lang['edit_user_validation_password_label'] = 'Contraseña';
$lang['edit_user_validation_password_confirm_label'] = 'Confirmación de contraseña';

// Crea un grupo
$lang['create_group_title'] = 'Crear grupo';
$lang['create_group_heading'] = 'Crear grupo';
$lang['create_group_subheading'] = 'Ingrese la información del grupo a continuación.';
$lang['create_group_name_label'] = 'Nombre del grupo:';
$lang['create_group_desc_label'] = 'Descripción:';
$lang['create_group_submit_btn'] = 'Crear grupo';
$lang['create_group_validation_name_label'] = 'Nombre del grupo';
$lang['create_group_validation_desc_label'] = 'Descripción';

// Editar grupo
$lang['edit_group_title'] = 'Editar grupo';
$lang['edit_group_saved'] = 'Grupo guardado';
$lang['edit_group_heading'] = 'Editar grupo';
$lang['edit_group_subheading'] = 'Ingrese la información del grupo a continuación.';
$lang['edit_group_name_label'] = 'Nombre del grupo:';
$lang['edit_group_desc_label'] = 'Descripción:';
$lang['edit_group_submit_btn'] = 'Guardar grupo';
$lang['edit_group_validation_name_label'] = 'Nombre del grupo';
$lang['edit_group_validation_desc_label'] = 'Descripción';

// Cambia la contraseña
$lang['change_password_heading'] = 'Cambiar contraseña';
$lang['change_password_old_password_label'] = 'Contraseña anterior:';
$lang['change_password_new_password_label'] = 'Nueva contraseña (al menos %s caracteres de longitud):';
$lang['change_password_new_password_confirm_label'] = 'Confirmar nueva contraseña:';
$lang['change_password_submit_btn'] = 'Cambiar';
$lang['change_password_validation_old_password_label'] = 'Contraseña anterior';
$lang['change_password_validation_new_password_label'] = 'Nueva contraseña';
$lang['change_password_validation_new_password_confirm_label'] = 'Confirmar nueva contraseña';

// Se te olvidó tu contraseña
$lang['forgotten_password_heading'] = 'Olvidé mi contraseña';
$lang['forgotten_password_subheading'] = 'Ingrese su %s para que podamos enviarle un correo electrónico para restablecer su contraseña.';
$lang['forget_password_email_label'] = '%s :';
$lang['forgotten_password_submit_btn'] = 'Enviar';
$lang['forgotten_password_validation_email_label'] = 'Dirección de correo electrónico';
$lang['forgotten_password_identity_label'] = 'Identidad';
$lang['forgotten_password_email_identity_label'] = 'Correo electrónico';
$lang['forgotten_password_email_not_found'] = 'No hay registro de esa dirección de correo electrónico.';
$lang['forgotten_password_identity_not_found'] = 'No hay registro de ese nombre de usuario.';

// Restablecer la contraseña
$lang['reset_password_heading'] = 'Cambiar contraseña';
$lang['reset_password_new_password_label'] = 'Nueva contraseña (al menos %s caracteres de longitud):';
$lang['reset_password_new_password_confirm_label'] = 'Confirmar nueva contraseña:';
$lang['reset_password_submit_btn'] = 'Cambiar';
$lang['reset_password_validation_new_password_label'] = 'Nueva contraseña';
$lang['reset_password_validation_new_password_confirm_label'] = 'Confirmar nueva contraseña';
