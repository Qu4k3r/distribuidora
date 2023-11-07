<?php

namespace App\Packages\Produto\Domain\Model;

enum TipoProduto: String
{
    case BIBLIA = 'biblia';
    case BIBLIA_ZIPER = 'biblia_ziper';
    case HINARIO_CANTO = 'hinario_canto';
    case HINARIO_MUSICA = 'hinario_musica';
    case ITEM_COMPLEMENTAR= 'item_complementar';
    case MANUAL = 'manual';
    case METODO_ORGAO = 'metodo_orgao';
    case RELATORIO = 'relatorio';
    case VEU = 'veu';
}
