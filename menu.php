<?php 	
	header('Content-Type:text/html;charset=utf-8');
	include($_SERVER['DOCUMENT_ROOT']."/projInteg/funcoes.php");
	noerrors();
	
	session_start();
	$_SESSION['menu'] = $_SERVER['DOCUMENT_ROOT']."/projInteg/menu.php";
	$_SESSION['caller'] = "/projInteg/";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Conheça Londrina!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="/images/icon.ico" /> 
	
	<!--bootstrap-->
	<link rel="stylesheet" type="text/css" href="/lib/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="/lib/jquery/jquery-2.2.4.min.js"></script>    
	<script type="text/javascript" src="/lib/bootstrap/js/bootstrap.min.js"></script> 

	
	<!--FONT AWESOME-->
	<link href="/lib/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/lib/bootstrap/font-awesome/css/font-awesome.css" rel="stylesheet">
	
	<style>
		/*cores
		verde escuro:#007E7A
		verde claro:#009D98
		dourado:#ECB11F
		verde linha: rgba(0,107,104,1)
		cinza claro: #F8F9FA
		cinza border: #cccccc
		*/
			
		
		/*dropdown cores*/
		.navbar .nav li.dropdown.open > .dropdown-toggle, 
		.navbar .nav li.dropdown.active > .dropdown-toggle, 			
		.dropdown-menu li a, .dropdown-submenu li a{color:white !important;}					
		.dropdown-submenu > a:focus, 
		.dropdown-submenu > a:hover, 
		.dropdown-submenu:focus>a, r, 
		.dropdown-submenu:hover>a,
		.dropdown-menu > li a:hover,
		.dropdown-menu > li a:focus { 			
			background-image: none !important; 
			filter: none !important; 
			text-decoration: none !important; 
			border: none !important; 
			color:white !important;
		}
		
		/*botão responsivo do navbar*/
		.navbar .navbar-toggle{background-color: #007E7A !important;}
		.navbar-toggle > .icon-bar{	background-color: white !important;	}		
		.navbar-toggle:hover{background-color: #009D98 !important;	}
		.navbar-toggle  {border: 1px solid white !important; background-color: #007E7A !important;}					
		
		/*Configurações dos dropdowns para submenu*/
		.dropdown-submenu{ position: relative !important; }
		.dropdown-submenu>.dropdown-menu{
		  top:0 !important;
		  left:100% !important;
		  margin-top:-6px !important;
		  margin-left:-1px !important;
		  -webkit-border-radius:0 6px 6px 6px !important;
		  -moz-border-radius:0 6px 6px 6px !important;
		  border-radius:0 6px 6px 6px !important;
		}
		.dropdown-submenu>a:after{
		  display:block !important;
		  content:" " !important;
		  float:right !important;
		  width:0 !important;
		  height:0 !important;
		  border-color:transparent !important;
		  border-style:solid !important;
		  border-width:5px 0 5px 5px !important;
		  border-left-color:#cccccc !important;
		  margin-top:5px;margin-right:-10px !important;
		}
		.dropdown-submenu:hover>a:after{
		  border-left-color:#555 !important;
		}
		.dropdown-submenu.pull-left{ float: none !important; }
		.dropdown-submenu.pull-left>.dropdown-menu{
		  left: -100% !important;
		  margin-left: 10px !important;
		  -webkit-border-radius: 6px 0 6px 6px !important;
		  -moz-border-radius: 6px 0 6px 6px !important;
		  border-radius: 6px 0 6px 6px !important;
		}
		
		/*cor do menu principal - verde escuro*/
		.navbar{padding-top:20px; height:50px !important;}
		.navbar ul li a{color: #747678 !important; font-size:16px;}	
		.navbar ul li a:hover{color: #ECB11F !important; font-size:16px; background-color:white}	
		.navbar{background-color: white;}	
				
		/*dropdown cores*/
		.navbar .nav li.dropdown.open > .dropdown-toggle, 
		.navbar .nav li.dropdown.active > .dropdown-toggle, 
			
		.dropdown-menu li a, .dropdown-submenu li a{color:#747678 !important;}					
		.dropdown-submenu > a:focus, 
		.dropdown-submenu > a:hover, 
		.dropdown-submenu:focus>a, r, 
		.dropdown-submenu:hover>a,
		.dropdown-menu > li a:hover,
		.dropdown-menu > li a:focus { 			
			background-image: none !important; 
			filter: none !important; 
			text-decoration: none !important; 
		}	
		
		/*cor das setas*/
		.dropdown-submenu:hover > a:after{border-left-color: #ECB11F !important}		
		
		/*cor do divisor*/
		.divider{background-color:#gray !important;	}
		
		/*remove linha superior na classe table*/
		.table{	margin:0px; }
		.table tr:first-child td{border-top: none;}
		
		body{
			margin:0px; 
			padding:0px;
			background-color: #E6E6E7
		}
		
		.table-cabecalho{
			width:1280px;
			background-color:white;			
		}
		
		#logo{
			padding-left:15px;
			border:none !important;
			box-shadow:none !important;
		}			
		
		.fa-home{
			font-size:18px;					
		}
		.titulo{
			font-size:25px ;
			color:gray;
			text-align:center;
			font-weight:bold;
		}	
		.conteudo{
			width:1280px;
			background-color:white;
			min-height:875px;
		}			
		
		/*Modais*/
		.modal-header{
			height:30px !important;
			padding:0px !important;
			margin:0px !important;
			padding-left:13px !important;
			background-color: #007E7A;			
			border-top-left-radius:5px !important;
			border-top-right-radius:5px !important;
		}	
		.modal-header h5{
			color:white;
			font-size: 16px !important;
			font-weight:bold !important;
			padding-top:5px;			
		}
		.modal-header .close{
			padding:0px !important;
			margin:0px !important;
			position:relative;
			top:-26px;
			padding-right:10px !important;
			font-size: 25px !important;
		}		
		#modalmsgalert{
			z-index:9999 !important;
		}
		

	</style>
	<script language="javascript">		
		
		$(document).ready(function(){
			$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
				event.preventDefault(); 
				event.stopPropagation(); 
				$(this).parent().siblings().removeClass('open');
				$(this).parent().toggleClass('open');
			});
			
			//inicializa tooltips
			//$('[data-toggle="tooltip"]').tooltip(); 
			$('[data-toggle="tooltip"]').tooltip({delay: {show: 500, hide: 100}}); 
			
			//adiciona form-control a todos os inputs
			$('input, select').addClass('form-control');
			
			//add shadow a tab selecionada
			var selector = '.nav li a';
			$(selector).on('click', function(){
				$(selector).removeClass('selected');
				$(this).addClass('selected');
			});
			
		});
		
		function msgalert(msg){	
			document.getElementById("msgalert").innerHTML = msg;
			$("#modalmsgalert").modal("show");
		}		
		
		//substitui caracteres de retorno de carro (break line) por <br> e elimina ' e "
		function settextOUT(dado){		
			//dado = dado.replace("\r\n", "<br>");
			dado = dado.replace(/\r/g, "<br>");
			dado = dado.replace(/\n/g, "<br>");
			dado = dado.replace(/\'/g, "");
			dado = dado.replace(/\"/g, "");
			dado = dado.replace(/\#/g, " ");
			dado = dado.replace(/\\/g, " ");
			dado = dado.replace(/\//g, " ");
			dado = dado.replace(/\&/g, " e ");
			dado = dado.replace(/^\s+|\s+$/gm,'');
			return dado;	
		}
		
		function checavazio(dado){			
			if (dado.length > 0) {
				return dado;
			}else{ 
				return "NULL";
			}
		}
		
		//substitui <br> por caracter de retorno de carro (break line)
		function settextIN(dado){
			do {
				dado = dado.replace("<br>", "\r");	
			}while (dado.indexOf("<br>") > -1);			
			return dado;
		}		
	</script>

</head>
<body>

<!--CABEÇALHO/MENU-->
		<table border="0" class="table-cabecalho" align="center">		
			<tr>
				<!-- <td width="150px">
					<img id="logo" src="/projInteg/imagens/mqr_menu.jpg"/>
				</td> -->
				
				<td width="450px">
					<center>
						<h3 class="titulo">	Venha conhecer Londrina!</h3>
					</center>
				</td>
			</tr>
		</table>


</body>
</html>