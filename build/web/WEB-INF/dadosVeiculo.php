<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Novo Formulario</title>
	<link rel="stylesheet" href="css/novoform.css">
	<link rel="stylesheet" href="css/cadastro.css"/>
	<link rel="stylesheet" href="css/style-default.css">
	<script language="javascript">
		function perguntar(){
			if(document.getElementById("div-proprietario").style.display == "block"){
				document.getElementById("div-proprietario").style.display = "none";
			}else{
				document.getElementById("div-proprietario").style.display = "block";
			}
		}
		function verificar(){
			if(document.getElementById("div-seguradora").style.display == "none"){
				document.getElementById("div-seguradora").style.display = "block";
			}else{
				document.getElementById("div-seguradora").style.display = "none";
			}
		}
		function seguro(){
			if(document.getElementById('seguro').checked == true){
				document.getElementById("campo-seguradora").style.display = "block";
			}else{
				document.getElementById("campo-seguradora").style.display = "none";
			}
		}
	</script>
</head>
<body>
		<header id="cabecalho-sobre">
			<div id="menu-sobre">
				<a href="index.php"><img src="images/logo.png" title="Página inicial" alt="Página inicial Lugcar"></a>
				<nav id="menu">
					<ul id="op-menu">
						<li><a href="#">História</a></li>
						<li><a href="#">Administradores</a></li>
						<li><a href="#">Localização</a></li>
						<li><a href="#">Contatate-nos</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<div class="timeline"><img src="images/timeline2.png" alt=""></div>
	<form action="">

		<fieldset>
			<legend>Informações do veículo</legend>
			<div class="col-3">
				<div class="linha"><input type="checkbox" checked="checked" onclick="verificar();" name="perguntaSeguro" id="perguntaSeguro"><label class="chk" for="perguntaSeguro">O carro possui apolice seguro válida</label></div>
			</div>
			<div class="col-3" id="div-seguradora">
				<div class="linha">
					<label for="seguradora">Seguradora</label><input type="text" name="seguradora" id="seguradora" placeholder="Nome da Seguradora">
				</div>
			</div>

			<div class="col-3">
				<div class="linha"><input type="checkbox" onclick="perguntar();" name="perguntaProprietario" id="perguntaProprietario"/><label class="chk" for="perguntaProprietario">Não sou o proprietario</label></div>
			</div>
			<div class="col-3" id="div-proprietario">
				<div class="linha">
					<label for="nomeProprietario">Nome do Proprietário</label><input type="text" id="nomeProprietario" name="nomeProprietario" placeholder="Nome do Proprietário">
				</div>
				<div class="linha">
					<label for="cpfProprietario">CPF do Proprietário</label><input type="text" id="cpfProprietario" name="cpfProprietario" placeholder="CPF do Proprietário">
				</div>	
			</div>
			<div class="col-3">
				<div class="linha">
					<label for="marca">Marca</label><input type="text" name="marca" id="marca" placeholder="Marca do Veículo">
				</div>
				<div class="linha">
					<label for="modelo">Modelo</label><input type="text" name="modelo" id="modelo" placeholder="Modelo do Veículo">
				</div>
				<div class="linha">
					<label for="ano">Ano</label><input type="text" name="ano" id="ano" placeholder="Ano do Veículo">
				</div>
			</div>
			<div class="col-3">
				<div class="linha">
					<label for="combustivel">Combustível</label><input type="text" name="combustivel" id="combustivel" placeholder="Combustível do Veículo">
				</div>
				<div class="linha">
					<label for="quilometragem">Quilometragem</label><input type="text" name="quilometragem" id="quilometragem" placeholder="Quilometragem do Veículo">
				</div>
				<div class="linha">
					<label for="placa">Placa</label><input type="text" name="placa" id="placa" placeholder="Placa do Veículo">
				</div>
			</div>
			<div class="col-3">
				<div class="linha">
					<label for="chassi">Chassi</label><input type="text" name="chassi" id="chassi" placeholder="Chassi do Veículo">
				</div>
			</div>
		</fieldset>
		<fieldset>
			<legend>Caracteristicas do carro</legend>
			<div class="col-3">
				<div class="linha"><p class="chk maior">Escolha o tipo do seu carro</p></div>
			</div>
			<div class="col-3">
				<div class="carros">
					<input type="radio" name="tipo-carro" id="perua"/><label for="perua" class="tipo-carro"><span class="nome-tipo">Perua/SW</span><img src="images/perua.png" alt=""></label>
					<input type="radio" name="tipo-carro" id="hachback"/><label for="hachback" class="tipo-carro"><span class="nome-tipo">Hachback</span><img src="images/hach.png" alt=""></label>
					<input type="radio" name="tipo-carro" id="sedan"/><label for="sedan" class="tipo-carro"><span class="nome-tipo">Sedan</span><img src="images/sedan.png" alt=""></label>
					<input type="radio" name="tipo-carro" id="sav"/><label for="sav" class="tipo-carro"><span class="nome-tipo">SUV</span><img src="images/sav.png" alt=""></label>
					<input type="radio" name="tipo-carro" id="pickup"/><label for="pickup" class="tipo-carro"><span class="nome-tipo">Pickup</span><img src="images/pickup.png" alt=""></label>
					<input type="radio" name="tipo-carro" id="conversivel"/><label for="conversivel" class="tipo-carro"><span class="nome-tipo">Conversível</span><img src="images/conversivel.png" alt=""></label>
				</div>
			</div>
			<div class="col-3">
				<div class="linha"><p class="chk maior">Adicionais</p></div>
			</div>
			<div class="col-3">
				<div class="linha">
					<input type="checkbox" name="adicionais" id="direcao"> <label class="chk" for="direcao">Direção Hidráulica</label><br/>
					<input type="checkbox" name="adicionais" id="ar"> <label class="chk" for="ar">Ar Condicionado</label><br/>
					<input type="checkbox" name="adicionais" id="automatico"> <label class="chk" for="automatico">Câmbio Automático</label><br/>
					<input type="checkbox" name="adicionais" id="abs"> <label class="chk" for="abs">Direção Hidráulica</label><br/>
					<input type="checkbox" name="adicionais" id="airbag"> <label class="chk" for="airbag">Airbag</label><br/>
					<input type="checkbox" name="adicionais" id="blindado"> <label class="chk" for="blindado">Blindado</label><br/>
					<input type="checkbox" name="adicionais" id="animais"> <label class="chk" for="animais">Permitido Animais</label><br/>
				</div>
			</div>
			<div class="col-3">
				<div class="linha">
					<label for="descricao">Descrição/observação</label>	
					<textarea name="descricao" id="descricao" placeholder="Escreva um pouco sobre o seu carro, ou alguma observação." cols="50" rows="5"></textarea>
				</div>
			</div>
			<div class="col-3">
				<div class="linha"><p class="chk maior">Opcional</p></div>
				<br><br>
				<div class="linha">Você também pode definir um limite de quilometragem</div>
			</div>
			<div class="col-3">
				<div class="linha">
					<label for="quilometragem">Quilometragem</label>
					<input type="text" name="limite" id="limite" placeholder="Limite de quilometragem">
				</div>
			</div>
		</fieldset>
		<div class="campos">
			<input type="submit" class="cadastrar" value="Cadastrar" onClick="return validar()"> 
			<input type="button" class="atualizar" value="Atualizar"> 
		</div>
		<div class="mensagem" id="mensagem">Você deve preencher todos os campos necessário!</div>
	</form>
	<footer id="rodape">
		<figure id="img-reversa">
			<img src="images/logo-reversa.png" alt="">
		</figure>
		<div id="copyright">&copy;Copyright 2016 - Todos os Direitos Reservados LugCar</div>
	</footer>
</body>
</html>