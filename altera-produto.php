<?php require_once("cabecalho.php"); ?>
<?php require_once("banco-produtos.php"); ?>

<?php

$id = $_POST['id'];
$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST['categoria_id'];
if(array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}

if (alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) {
?>
   <p class="text-success"> Produto <?= $nome; ?>, preço: <?php echo $preco; ?> alterado com sucesso!</p>
<?php
} else {
    $erro = mysqli_error($conexao);
?>
    <p class="text-danger"> Produto <?= $nome; ?> não foi alterado! <?= $erro ?></p>
<?php
}
mysqli_close($conexao);
?>

<?php include("rodape.php") ?>