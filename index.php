<?php include "dados.php"; $totalPokemon=count($pokemons); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Pokémon Pseudo-Lendários</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<h1>Pokémon Pseudo-Lendários</h1>
<p>Conheça os Pokémon mais fortes de cada geração</p>
</header>
<div class="container">
<h2>Lista de Pokémon</h2>
<hr>
<div class="lista">
<?php foreach($pokemons as $id=>$pokemon){ ?>
<div class="card">
<a href="pokemon.php?id=<?php echo $id; ?>">
<h2><?php echo $pokemon["nome"]; ?></h2>
<img src="<?php echo $pokemon["imagem"]; ?>" alt="<?php echo $pokemon["nome"]; ?>">
</a>
<div>
<?php foreach($pokemon["tipos"] as $tipo){ ?>
<span class="tipo <?php echo classeTipo($tipo); ?>"><?php echo $tipo; ?></span>
<?php } ?>
</div>
</div>
<?php } ?>
</div>
</div>
</body>
</html>
