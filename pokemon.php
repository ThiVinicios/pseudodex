<?php
include "dados.php";
$id=$_GET["id"];
if(isset($pokemons[$id])){$pokemon=$pokemons[$id];}else{$pokemon=$pokemons[1];}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title><?php echo $pokemon["nome"]; ?></title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header><h1>Pokémon Pseudo-Lendários</h1></header>
<div class="container">
<div class="detalhes">
<img src="<?php echo $pokemon["imagem"]; ?>" alt="<?php echo $pokemon["nome"]; ?>">
<h2><?php echo $pokemon["nome"]; ?></h2>
<p><strong>Número:</strong> <?php echo $pokemon["numero"]; ?></p>
<p><strong>Tipo:</strong>
<?php foreach($pokemon["tipos"] as $tipo){ ?>
<span class="tipo <?php echo classeTipo($tipo); ?>"><?php echo $tipo; ?></span>
<?php } ?>
</p>
<p><strong>Altura:</strong> <?php echo $pokemon["altura"]; ?></p>
<p><strong>Peso:</strong> <?php echo $pokemon["peso"]; ?></p>
<h2>Descrição da Pokédex</h2>
<p><?php echo $pokemon["descricao"]; ?></p>
<div class="evolucoes">
<h2>Evoluções</h2>
<?php foreach($pokemon["evolucoes"] as $evolucao){ ?>
<span><?php echo $evolucao; ?></span>
<?php } ?>
</div>
<a class="voltar" href="index.php">Voltar para a lista</a>
</div>
</div>
</body>
</html>