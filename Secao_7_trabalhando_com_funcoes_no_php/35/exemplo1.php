<?php
/*
Neste exemplo iremos falar sobre funções recursivas, uma função recursiva ocorre quando
precisamos executar a função dentro da função como mostra o exemplo abaixo
*/
$hierarquia = [
    ['nome_cargo'=>'CEO',
     'subordinados'=>[
      //Inicio : Diretor Comercial
        ['nome_cargo'=>'Diretor comercial',
         'subordinados'=>[
      // Inicio : gerente de vendas
      ['nome_cargo'=>'gerente de vendas']
      // Fim gerente de vendas
        ]
    ],
      //Termino : Diretor Comercial
      //Inicio diretor financeiro
       ['nome_cargo'=>'Diretor Financeiro',
        'subordinados'=>[
        //Inicio gerente de pagamento
        ['nome_cargo'=>'Gerente de pagamento de contas',
        'subordinados'=>[
        //inicio supervisor de pagamentos
          ['nome_cargo'=>'Gerente de pagamentos']
        // fim supervisor de pagamentos
      ],
            // Fim gerente de pagamengos
            // Inicio gerente de compras
            [
              'nome_cargo'=>'Gerente de compras',
              'subordinados'=>[
                // Inicio supervisor de suprimentos
                [
                  'nome_cargo'=>'Supervisor de Suprimentos'
              ]
                // Termino supervisor de suprimentos
              ]
            ]
            // Fim gerente de compras
          ]
        ]
      ]
      // Fim Diretor financeiro
        ]
]
  // Fim CEO
];

function exibe($cargos){

  $html = '<ul>';

  foreach($cargos as $cargo){
    $html .= '<li>';
    $html .= $cargo['nome_cargo'];
    if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 ){
      $html .= exibe($cargo['subordinados']);
    }
    $html .= '</li>';
  }

  $html .= '</ul>';

  return $html;
}

echo exibe($hierarquia);

?>
