<?php
namespace Boleto;

interface BoletoInterface
{

    public function setCedente(Cedente $cedente);

    public function getCedente();

    public function setSacado(Sacado $sacado);

    public function getSacado();
}

