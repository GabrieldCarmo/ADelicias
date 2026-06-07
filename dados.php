<?php
$tipos = [
    "bolos" => "Bolos",
    "doces" => "Doces",
    "salgados" => "Salgado"
];
$sabor = [
    "bolos" => ["Chocolate", "Cenoura", "Prestigio", "Morango", "Limão", "Leite Ninho"],
    "salgados" => ["Coxinha", "Kibe", "Risole", "Bolinha de Queijo", "Enroladinho"],
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
            "descricao" => "Bolo com cobertura cremosa de chocolate",
            "imagem" => "bolo_chocolate.png"
        ],
        [
            "sabor" => "Cenoura",
            "preco" => 40,
            "descricao" => "Bolo de cenoura com cobertura de chocolate",
            "imagem" => "bolo_cenoura.png"
        ],
        [
            "sabor" => "Prestigio",
            "preco" => 55,
            "descricao" => "Chocolate com coco",
            "imagem" => "bolo_p.png"
        ],
        [
            "sabor" => "Morango",
            "preco" => 50,
            "descricao" => "Massa branca com recheio de morango",
            "imagem" => "bolo_morango.png"
        ],
        [
            "sabor" => "Limão",
            "preco" => 42,
            "descricao" => "Massa branca com mousse de limão",
            "imagem" => "bolo_limao.png"
        ],
        [
            "sabor" => "Leite Ninho",
            "preco" => 60,
            "descricao" => "Massa branca com creme de leite ninho",
            "imagem" => "bolo_leite.png"
        ]
    ],
    "salgados" => [
        [
            "sabor" => "Coxinha",
            "preco" => 1.20,
            "descricao" => "Coxinha de frango tradicional",
            "imagem" => "coxinha.png"
        ],
        [
            "sabor" => "Kibe",
            "preco" => 1.50,
            "descricao" => "Kibe frito recheado",
            "imagem" => "kibe.png"
        ],
        [
            "sabor" => "Risole",
            "preco" => 1.30,
            "descricao" => "Risole de presunto e queijo",
            "imagem" => "risole.png"
        ],
        [
            "sabor" => "Bolinha de Queijo",
            "preco" => 1.10,
            "descricao" => "Massa leve com queijo",
            "imagem" => "bolinha_queijo.png"
        ],
        [
            "sabor" => "Enroladinho",
            "preco" => 1.40,
            "descricao" => "Enroladinho de salsicha",
            "imagem" => "enroladinhos.png"
        ]
    ],
    "doces" => [
        [
            "sabor" => "Brigadeiro",
            "preco" => 0.8,
            "descricao" => "Tradicional brigadeiro de chocolate",
            "imagem" => ""
        ],
        [
            "sabor" => "Beijinho",
            "preco" => 0.8,
            "descricao" => "Doce de coco com leite condensado",
            "imagem" => ""
        ],
        [
            "sabor" => "Cajuzinho",
            "preco" => 0.9,
            "descricao" => "Doce de amendoim",
            "imagem" => ""
        ],
        [
            "sabor" => "Camafeu",
            "preco" => 1.5,
            "descricao" => "Nozes com cobertura especial",
            "imagem" => ""
        ]
    ]
];
?>