<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - English
*
* Author: Ben Edmunds
*         ben.edmunds@gmail.com
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
$lang['account_creation_successful'] = 'Cuenta creada correctamente';
$lang['account_creation_unsuccessful'] = 'No se puede crear una cuenta';
$lang['account_creation_duplicate_email'] = 'Correo electrónico ya usado o no válido';
$lang['account_creation_duplicate_identity'] = 'Identidad ya utilizada o inválida';
$lang['account_creation_missing_default_group'] = 'El grupo predeterminado no está configurado';
$lang['account_creation_invalid_default_group'] = 'Conjunto de nombre de grupo predeterminado no válido';

// Contraseña
$lang['password_change_successful'] = 'La contraseña se cambió correctamente';
$lang['password_change_unsuccessful'] = 'No se puede cambiar la contraseña';
$lang['forgotten_password_successful'] = 'Restablecer contraseña de correo electrónico enviado';
$lang['forgotten_password_unsuccessful'] = 'No se puede enviar por correo electrónico el enlace Restablecer contraseña';

// Activación
$lang['enable_successful'] = 'Cuenta activada';
$lang['enable_unsuccessful'] = 'No se puede activar la cuenta';
$lang['deactivate_successful'] = 'Cuenta desactivada';
$lang['deactivate_unsuccessful'] = 'No se puede desactivar la cuenta';
$lang['activación_email_successful'] = 'Correo electrónico de activación enviado. Por favor revise su bandeja de entrada o spam';
$lang['activación_email_unsuccessful'] = 'No se puede enviar el correo electrónico de activación';
$lang['deactivate_current_user_unsuccessful'] = 'No puedes desactivar tu auto.';

// Iniciar sesión / Cerrar sesión
$lang['login_successful'] = 'Ha iniciado sesión correctamente';
$lang['login_unsuccessful'] = 'Correo o contraseña incorrecto';
$lang['login_unsuccessful_not_active'] = 'La cuenta está inactiva';
$lang['login_timeout'] = 'Temporalmente bloqueado. Inténtalo de nuevo más tarde. ';
$lang['logout_successful'] = 'Salió exitosamente';

// Cambios de cuenta
$lang['update_successful'] = 'Información de cuenta actualizada correctamente';
$lang['update_unsuccessful'] = 'No se puede actualizar la información de la cuenta';
$lang['delete_successful'] = 'Usuario eliminado';
$lang['delete_unsuccessful'] = 'No se puede eliminar el usuario';

// grupos
$lang['group_creation_successful'] = 'Grupo creado con éxito';
$lang['group_already_exists'] = 'Nombre del grupo ya tomado';
$lang['group_update_successful'] = 'Detalles del grupo actualizados';
$lang['group_delete_successful'] = 'Grupo eliminado';
$lang['group_delete_unsuccessful'] = 'No se puede eliminar el grupo';
$lang['group_delete_notallowed'] = 'No se puede eliminar el grupo de administradores';
$lang['group_name_required'] = 'El nombre del grupo es un campo obligatorio';
$lang['group_name_admin_not_alter'] = 'El nombre del grupo de administradores no se puede cambiar';

// Correo electrónico de activación
$lang['email_activation_subject'] = 'Activación de cuenta';
$lang['email_activate_heading'] = 'Activar cuenta para %s';
$lang['email_activate_subheading'] = 'Haga clic en este enlace para %s.';
$lang['email_activate_link'] = 'Activa tu cuenta';

// Olvidé mi contraseña de correo electrónico
$lang['email_forgotten_password_subject'] = 'Verificación de contraseña olvidada';
$lang['email_forgot_password_heading'] = 'Restablecer contraseña para %s';
$lang['email_forgot_password_subheading'] = 'Haga clic en este enlace para %s.';
$lang['email_forgot_password_link'] = 'Restablecer su contraseña';

// Nueva contraseña de correo electrónico
$lang['email_new_password_subject'] = 'Nueva contraseña';
$lang['email_new_password_heading'] = 'Nueva contraseña para %s';
$lang['email_new_password_subheading'] = 'Su contraseña se ha restablecido a: %s';
