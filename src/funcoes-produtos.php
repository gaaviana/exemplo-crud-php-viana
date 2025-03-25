<?php
require_once "conecta.php";

function listarProdutos(PDO $conexao):array {
    $sql = "SELECT * FROM produtos";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->execute();

        return $consulta->fetchAll(PDO::FETCH_ASSOC); 
       } catch (Exception $erro) {
        die("Erro ao excluir fabricante: ".$erro->getMessage());
    }
};

function nmfab(PDO $conexao, INT $fabricante_id) {
    $sql = "SELECT nome FROM fabricantes WHERE id = :id";

    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(':id', $fabricante_id, PDO::PARAM_INT);
    $consulta->execute();

    $fabricante = $consulta->fetch(PDO::FETCH_ASSOC);

    return $fabricante;
}