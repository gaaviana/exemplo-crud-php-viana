<?php
require_once "conecta.php";

function listarProdutos(PDO $conexao):array {
   // $sql = "SELECT * FROM produtos";
  $sql = "SELECT
            produtos.id,
            produtos.nome AS Produto,
            produtos.preco AS 'Preço',
            produtos.quantidade AS Quantidade,
            fabricantes.nome AS Fabricante
        FROM produtos INNER JOIN fabricantes
        ON produtos.fabricante_id = fabricantes.id
        ORDER BY produto";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC); 
       } catch (Exception $erro) {
        die("Erro ao excluir fabricante: ".$erro->getMessage());
    }
};

