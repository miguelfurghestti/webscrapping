<?php

libxml_use_internal_errors(true);

$conteudo = file_get_contents('https://www.giassi.com.br/');

$documento = new DOMDocument();
$documento->loadHTML($conteudo);

$xPath = new DOMXPath($documento);
$domNodeList = $xPath->query('.//span[@class="vtex-product-summary-2-x-productBrand vtex-product-summary-2-x-brandName t-body"]');

/** @var DOMNode $elemento */
foreach ($domNodeList as $elemento) {
    echo $elemento->textContent . PHP_EOL;
    echo '<hr>';
}
