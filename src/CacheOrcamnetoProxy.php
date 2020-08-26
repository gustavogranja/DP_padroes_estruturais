<?php

namespace Alura\DesignPattern;

class CacheOrcamnetoProxy
{
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento)
    {
        $this->orcamento = $orcamento;
    }

    public function addItem(Orcavel $item)
    {
        throw new \DomainException('Não é possivel adicionar item a orçamento cahceado');
    }

    public function valor(): float
    {
        if ($this->valorCache === 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}