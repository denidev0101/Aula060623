<?php require "dados.php"; 

$filtro = function($p)
{
    return $p['tipo'] == 'fogo';
};

$pokemonFiltro = array_filter($pokemons, $filtro);

foreach($pokemons as $pokemon => $dados){
    echo "<h2>{$dados['nome']}</h2>";
    echo "<h3>{$dados['tipo']}</h3>";

}

?>

