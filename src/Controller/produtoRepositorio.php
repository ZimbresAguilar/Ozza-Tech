<?php
    // Vai ter acesso ao banco de dados
    class produtoRepositorio{

        private PDO $pdo;

        // Recebe variável de conexão com BD
        public function __construct(PDO $pdo) {
            $this->pdo = $pdo;
        }

        public function chamarProdutos(): array{
            // -----===QUERY===-----
            // Query para o primeiro carrossel de itens
            $sqlLancamentos = "SELECT * FROM produtos WHERE idProdutos <= 7";
            $statement = $this->pdo->query($sqlLancamentos);
            // PDO::FETCH_ASSOC -> Retorna um array associativo (toda a linha, como um array de arrays)
            $itens = $statement->fetchAll(PDO::FETCH_ASSOC);

            // -----===Transformando cada índice da query em um OBJETO da Classe Produtos===-----
            // array_map() -> Ensinar o que fazer para cada um dos elementos do array mencionado
            $dadosItens = array_map(function ($item){
                return new Produto($item['idProdutos'], $item['nome'], $item['preco'], $item['marca'], $item['cor'], $item['condicao'], $item['origem'], $item['localizacao'], $item['quantidade'], $item['imagem']);
            }, $itens);
            // Agora é um array de objetos, não um array de array

            return $dadosItens;
        }
    }
?>