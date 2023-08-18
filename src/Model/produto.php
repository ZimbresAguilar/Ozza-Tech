<?php

    // Criando classe e declarando atributos
    // Classe
    class Produto{
        // ATRIBUTOS
        private int $idProdutos;
        private string $nome;
        private float $preco;
        private string $marca;
        private string $cor;
        private string $condicao;
        private bool $origem;
        private string $localizacao;
        private int $quantidade;

        // CONSTRUTOR
        public function __construct(int $idProdutos, string $nome, float $preco, string $marca, string $cor, string $condicao, bool $origem, string $localizacao, int $quantidade) {
            $this->idProdutos = $idProdutos;
            $this->nome = $nome;
            $this->preco = $preco;
            $this->marca = $marca;
            $this->cor = $cor;
            $this->condicao = $condicao;
            $this->origem = $origem;
            $this->localizacao = $localizacao;
            $this->quantidade = $quantidade;
        }

        //GETTERS
        public function getIdProdutos(): int {
            return $this->idProdutos;
        }
        public function getNome(): string {
            return $this->nome;
        }
        public function getPreco(): float {
            return $this->preco;
        }
        public function getMarca(): string {
            return $this->marca;
        }
        public function getCor(): string {
            return $this->cor;
        }
        public function getCondicao(): string {
            return $this->condicao;
        }
        public function getOrigem(): bool {
            return $this->origem;
        }
        public function getLocalizacao(): string {
            return $this->localizacao;
        }
        public function getQuantidade(): int {
            return $this->quantidade;
        }
    }
?>