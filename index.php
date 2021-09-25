<?php include("menu.php");

?>
<!DOCTYPE html>
<html lang="en">
	<style>
		.carousel {
			width: 1280px;
			height: 200px;			
		}
		.painel{
			border: 2px solid black;
			border-color:#ECB11F;
			border-radius:8px;
			height:205px;
			width:180px;
			margin:10px;
			color:#ECB11F;
			font-size:16px;
			font-weight:bold;				
		}
		.painel:hover{
			box-shadow: 2px 2px 2px 0;
		}
		.img-painel{
			height:169px;
			width:170px;
			margin-top:5px;
			border-radius:5px;
		}
				
		a{text-decoration:none !important;}
		
		#table-descricao{
			margin-left:100px;
			margin-top:10px; 
		}
		#table-descricao td{
			padding:5px;			
		}
		.div-background{
			border:1px ;
			border-color: #009D98;
			background-image: linear-gradient(#007E7A,#009d98);
			height:600px;
			border-radius:30px;
			margin:5px;
			color:white;
			font-size:18px;
		}
		.div-video{
			border:3px solid black;
			border-color: #ECB11F;
			height:300px;
			border-radius:30px;
			width:400px;
			float:right;
			padding-right:30px:
			padding-top:15px;
			margin-top:15px;			
			margin-right:100px;
		}
		
		.div-login{
			border:3px solid black;
			border-color: #ECB11F;
			height:200px;
			border-radius:30px;
			width:400px;
			float:right;
			padding-right:30px:
			padding-top:10px;
			margin:5px;
			margin-top:20px;
			margin-right:100px;
		}
		
		.img-play{
			border-radius:30px;
			float:right;
			margin-top:55px;
			margin-right:20px;
		}
		.img-play:hover{
			box-shadow: 2px 2px 2px 0;
		}
		
		.lb-campo{
			text-align: right;
			clear: both;
			float:left;
			margin-top:10px;
			margin-left:75px;
		}
		.campo{
			width:150px;
			float:right;
			text-align:left;
			margin-top:10px;
			margin-right:75px;
		}
		
		.btnvale{
			margin-top:20px;
			width:200px; 
			align:center;
		}
			
		
		.btn-warning{			
			margin-left:300px;
			width:400px;
			height:50px;
			font-size:20px;
		}
		
		
		
		
	</style>
	<body>
		
		<!--CONTEÚDO-->
		<div align="center">
			<div id="conteudo" class="conteudo">
				<!--TABELA-->
				<div align="center">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<img src="/projInteg/imagens/banner/01.jpg">
							</div>
							<div class="item">
								<img src="/projInteg/imagens/banner/02.jpg">
							</div>

							<div class="item">
								<img src="/projInteg/imagens/banner/03.jpg">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">
						  <span class="glyphicon glyphicon-chevron-left"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">
						  <span class="glyphicon glyphicon-chevron-right"></span>
						  <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				
				<center><h3>As perspectivas são muitas. Navegue e conheça!</h3></center>
				
				
				<br><br><br>

				<!--SOBRE-->
				<div class="div-background" >
					<h2 style="color:#ECB11F; padding-top:20px"></h2>	
					<table border="0" align="left" width="700px" id="table-descricao" cellspacing="10">						
						<tr>
							<td>
								<p style="text-align: justify; text-justify: inter-word;">
								<br><br>
								A cidade é a segunda maior do estado e oferece infraestrutura de grandes municípios. Há muita coisa que se pode fazer durante diversas épocas do ano, os primeiros meses do ano são mais quentes. O verão registra em média temperaturas de 30 °, já o inverno registra máximas de até 24°. Por isso, não se preocupe em relação ao tempo, sempre terá opções para se divertir.
								<br><br>
								A cidade reserva muitos locais para visitação. O que mais atrai o turista é a possibilidade de explorar diferentes atividades no mesmo lugar. Por exemplo, conhecer pontos históricos, culturais, rurais, urbanos, entre outros. Entretanto, por ser uma grande metrópole, prepare-se para se deparar com problemas que já estamos acostumados, como o trânsito.
								<br><br>
								Entre seus diversos pontos turísticos, destacam-se o Jardim Botânico de Londrina, o Parque Estadual Mata dos Godoy, o Parque Municipal Arthur Thomas, o Parque Ecológico Dr. Daisaku Ikeda, o Salto do Apucaraninha, o Lago Igapó, o Planetário de Londrina, o Museu Histórico de Londrina, a Igreja Matriz de Londrina, o Autódromo Internacional Ayrton Senna, entre outras atrações.
								</p>
							</td>
						</tr>						
					</table>
				</div>
				<br><br>
				
			</div>			
		</div>	
	</body>
</html>