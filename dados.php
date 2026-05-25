<?php
$tipos = [
    "bolos" => "Bolos",
    "doces" => "Doces",
    "salgados" => "Salgado"
];
$sabor = [
    "bolos" => ["Chocolate", "Cenoura", "Prestígio", "Morango", "Limão", "Leite Ninho"],
    "salgados" => ["Coxinha", "Kibe", "Risoles", "Bolinha de Queijo", "Enroladinho"],
    "doces" => ["Brigadeiro", "Beijinho", "Cajuzinho", "Camafeu"]
];

$quantidade = [
    "doces" => ["50", "100", "200", "300", "400", "500" ],
    "salgados" => ["50", "100", "200", "300", "400", "500" ],
    "bolos" => ["1", "2", "3", "4", "5"]
];

$produtos = [
    "bolos" => [
        [
            "sabor" => "Chocolate",
            "preco" => 45,
            "descricao" => "Bolo com cobertura cremosa de chocolate"
        ],
        [
            "sabor" => "Cenoura",
            "preco" => 40,
            "descricao" => "Bolo de cenoura com cobertura de chocolate"
        ],
        [
            "sabor" => "Prestigio",
            "preco" => 55,
            "descricao" => "Chocolate com coco"
        ],
        [
            "sabor" => "Morango",
            "preco" => 50,
            "descricao" => "Massa branca com recheio de morango"
        ],
        [
            "sabor" => "Limão",
            "preco" => 42,
            "descricao" => "Massa branca com mousse de limão"
        ],
        [
            "sabor" => "Leite Ninho",
            "preco" => 60,
            "descricao" => "Massa branca com creme de leite ninho"
        ]
    ],
    "salgados" => [
        [
            "sabor" => "Coxinha",
            "preco" => 1.20,
            "descricao" => "Coxinha de frango tradicional"
        ],
        [
            "sabor" => "Kibe",
            "preco" => 1.50,
            "descricao" => "Kibe frito recheado"
        ],
        [
            "sabor" => "Risole",
            "preco" => 1.30,
            "descricao" => "Risole de presunto e queijo"
        ],
        [
            "sabor" => "Bolinha de Queijo",
            "preco" => 1.10,
            "descricao" => "Massa leve com queijo"
        ],
        [
            "sabor" => "Enroladinho",
            "preco" => 1.40,
            "descricao" => "Enroladinho de salsicha"
        ]
    ],
    "doces" => [
        "sabor" => "Brigadeiro",
        "preco" => 0.8,
        "descricao" => "Tradicional brigadeiro de chocolate",
    ],
    [
        "sabor" => "Beijinho",
        "preco" => 0.8,
        "descricao" => "Doce de coco com leite condensado",
    ],
    [
        "sabor" => "Cajuzinho",
        "preco" =>0.9,
        "descricao" => "Doce de amendoim",
    ],
    [
        "sabor" => "Camafeu",
        "preco" => 1.5,
        "descricao" => "Nozes com cobertura especial",
    ],
];
?>