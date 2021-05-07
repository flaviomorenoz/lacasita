<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-12 18:33:06 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\controllers\inventario.php 96
ERROR - 2021-04-12 18:33:22 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\controllers\inventario.php 96
ERROR - 2021-04-12 11:46:05 --> Severity: Compile Error --> Cannot redeclare inventario_model::carga_inventario() C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\inventario_model.php 25
ERROR - 2021-04-12 11:46:07 --> Severity: Compile Error --> Cannot redeclare inventario_model::carga_inventario() C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\inventario_model.php 25
ERROR - 2021-04-12 11:50:28 --> Query error: Unknown column 'a.ruc' in 'field list' - Invalid query: select a.idPro, a.descPro, a.stockInicial, b.cantidad, a.stockInicial + b.cantidad as total_Stock,
    		concat(a.ruc,'-',a.razon) cruc 
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-12 13:55:59 --> Severity: error --> Exception: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\views\entradas.php 53
ERROR - 2021-04-12 13:56:10 --> Severity: error --> Exception: syntax error, unexpected '' (T_ENCAPSED_AND_WHITESPACE), expecting '-' or identifier (T_STRING) or variable (T_VARIABLE) or number (T_NUM_STRING) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\views\entradas.php 53
ERROR - 2021-04-12 22:25:12 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 15:25:29 --> Severity: error --> Exception: Call to a member function combo_almacen() on null C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 47
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:29 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:25:30 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 22:26:27 --> Severity: 8192 --> Unparenthesized `a ? b : c ? d : e` is deprecated. Use either `(a ? b : c) ? d : e` or `a ? b : (c ? d : e)` C:\xampp\htdocs\varios\qsystem\lacasita\system\helpers\url_helper.php 162
ERROR - 2021-04-12 15:26:27 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:27:38 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:28:43 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:29:51 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:29:52 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:33:01 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:33:57 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:35:03 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:36:43 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:36:47 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:37:50 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:37:51 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:51:13 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:51:15 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 15:51:39 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:00:50 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:02:15 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:02:16 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:02:17 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:09:57 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:10:24 --> Severity: error --> Exception: syntax error, unexpected '(', expecting variable (T_VARIABLE) C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\models\producto_model.php 11
ERROR - 2021-04-12 16:15:30 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 48
ERROR - 2021-04-12 16:15:34 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 48
ERROR - 2021-04-12 16:18:27 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 48
ERROR - 2021-04-12 16:18:29 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 48
ERROR - 2021-04-12 16:19:40 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 48
ERROR - 2021-04-12 16:21:47 --> Severity: error --> Exception: syntax error, unexpected '?>' C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\producto\views\agregar.php 33
