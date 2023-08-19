<?php
    // Vai ter acesso ao banco de dados
    class produtoRepositorio{

        private PDO $pdo;

        // Recebe variável de conexão com BD
        public function __construct(PDO $pdo){
            $this->pdo = $pdo;
        }

        public function chamarLancamentos(): array{
            // -----===QUERY===-----
            // Query para o primeiro carrossel de itens
            $sql7Novos = "SELECT * FROM produtos ORDER BY idProdutos DESC LIMIT 7;";
            $statement = $this->pdo->query($sql7Novos);
            // PDO::FETCH_ASSOC -> Retorna um array associativo (toda a linha, como um array de arrays)
            $itens = $statement->fetchAll(PDO::FETCH_ASSOC);

            // -----===Transformando cada índice da query em um OBJETO da Classe Produtos===-----
            // array_map() -> Ensinar o que fazer para cada um dos elementos do array mencionado
            $dadosItens = array_map(function ($item){
                return new Produto($item['idProdutos'], $item['nome'], $item['preco'], $item['promocao'], $item['marca'], $item['cor'], $item['condicao'], $item['origem'], $item['localizacao'], $item['quantidade'], $item['imagem']);
            }, $itens);
            // Agora é um array de objetos, não um array de array

            return $dadosItens;
        }

        public function chamarPromocoes(): array{
            // -----===QUERY===-----
            // Query para o primeiro carrossel de itens
            $sql7Promocoes = "SELECT * FROM produtos WHERE promocao > 0 ORDER BY promocao DESC LIMIT 7;";
            $statement = $this->pdo->query($sql7Promocoes);
            // PDO::FETCH_ASSOC -> Retorna um array associativo (toda a linha, como um array de arrays)
            $itens = $statement->fetchAll(PDO::FETCH_ASSOC);

            // -----===Transformando cada índice da query em um OBJETO da Classe Produtos===-----
            // array_map() -> Ensinar o que fazer para cada um dos elementos do array mencionado
            $dadosItens = array_map(function ($item){
                return new Produto($item['idProdutos'], $item['nome'], $item['preco'], $item['promocao'], $item['marca'], $item['cor'], $item['condicao'], $item['origem'], $item['localizacao'], $item['quantidade'], $item['imagem']);
            }, $itens);
            // Agora é um array de objetos, não um array de array

            return $dadosItens;
        }

        public function chamarDestaques(): array{
            $sql7Destaques = "SELECT * FROM produtos JOIN pedidos ON produtos.idProdutos = pedidos.idProduto ORDER BY pedidos.quantidade DESC LIMIT 7;";
            
            $statement = $this->pdo->query($sql7Destaques);

            $itens = $statement->fetchAll(PDO::FETCH_ASSOC);

            $dadosItens = array_map(function ($item){
                return new Produto($item['idProdutos'], $item['nome'], $item['preco'], $item['promocao'], $item['marca'], $item['cor'], $item['condicao'], $item['origem'], $item['localizacao'], $item['quantidade'], $item['imagem']);
            }, $itens);

            return $dadosItens;
        }
    }
?>