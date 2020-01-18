<?php require_once("header.php") ?>


<section class="categoria container">

<?php
  $nomeCategoria = getFilmes($_GET['categoria_id']);
?>
<h1 class="h1categoria text-align-center"> <?php echo $nomeCategoria[0]['nome'];?></h1>

<nav class="row nav-categoria d-flex justify-content-center">


<table>
<thead>
<tr>
<th> Nome </th>
<th> Preço </th>
<th> no </th>
<th> Duracao </th>
</tr>
</thead>
<tbody>
<?php
foreach (getFilmes($_GET['categoria_id']) as $titulo)
{
  // echo "<li class='list-group-item'>" . $titulo['titulo'] . "</li>";
  echo "<tr>";
  echo "<td>$titulo[titulo]</td>";
  echo "<td>$titulo[preco_da_locacao]</td>";
  echo "<td>$titulo[duracao_do_filme]</td>";
  echo "<td>$titulo[ano_de_lancamento]</td>";
  echo "</tr>";
}
?>
</tbody>
</table>

</nav>
</section>






<?php require_once("footer.php") ?>