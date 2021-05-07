<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-25 10:05:38 --> Severity: 8192 --> Array and string offset access syntax with curly braces is deprecated C:\xampp\htdocs\varios\qsystem\lacasita\application\libraries\google-api-php-client\service\Google_Utils.php 58
ERROR - 2021-04-25 10:25:55 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.unidad, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:25:55 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:25:58 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.unidad, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:25:58 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:26:41 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.unidad, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:26:41 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:26:43 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.unidad, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:26:43 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:27:24 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:27:24 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:27:25 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:27:25 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:28:01 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:28:01 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
ERROR - 2021-04-25 10:28:03 --> Query error: Unknown column 'a.cantidad' in 'field list' - Invalid query: select a.idPro, a.descPro, a.cantidad as total_Stock
			from cr_inv_productos a
			left join (
					select idPro, sum(if(accionMov = 'E',cantidadMov,(-1)*cantidadMov)) cantidad 
					from cr_inv_movimientos
					where idAlm = 1
					group by idPro
			) b on a.idPro = b.idPro
ERROR - 2021-04-25 10:28:03 --> Severity: error --> Exception: Call to a member function result_array() on bool C:\xampp\htdocs\varios\qsystem\lacasita\application\modules\inventario\models\Inventario_model.php 24
