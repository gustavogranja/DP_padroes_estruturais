<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;
use Alura\DesignPattern\Relatorio\OrcamnetoExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamnetoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoZipExportado('orcamento.arry');

echo $orcamentoExportadoXml->salvar($orcamentoExportado);