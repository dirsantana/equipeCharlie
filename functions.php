<?php

include_once('database.php');

function getCategorias()
{
  global $connection;
  $categorias = $connection->query('SELECT * FROM categoria');
  $categorias = $categorias->fetchAll(PDO::FETCH_ASSOC);

  return $categorias;
}



function getFilmes()
{
  global $connection;
  if (isset($_GET['categoria_id'])) {
    $query = $connection->prepare("SELECT c.nome, f.titulo, f.preco_da_locacao, f.duracao_do_filme, f.ano_de_lancamento, f.classificacao
    from filme as f
    INNER JOIN filme_categoria as fc
    ON f.filme_id = fc.filme_id
    INNER JOIN categoria as c
    ON fc.categoria_id = c.categoria_id
    and c.categoria_id = :id");
    $filmes = $query->execute([
      ":id" => $_GET['categoria_id']
    ]);
    $filmes = $query->fetchAll(PDO::FETCH_ASSOC);
    return $filmes;
  } else {
    header('Location: index.php'); //se o id for invalido, redireciona para pagina inicial
  }
}

function getMelhoresPrecos()
{
    global $connection;
    $melhoresPrecos = $connection->query('SELECT titulo, preco_da_locacao from filme order by preco_da_locacao limit 4');
    $melhoresPrecos = $melhoresPrecos->fetchAll(PDO::FETCH_ASSOC);
  
    return $melhoresPrecos;

}

?>