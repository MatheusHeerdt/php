<?php

$hierarquia = array (
array(
    'nome_cargo' => 'CEO',
    'subordinados'=> array(
        //inicio: Diretor Diretor comercial
        array(
            'nome_cargo'=> 'Diretor Comercial',
            'subordinados'=> array(
                //inicio: gerente de vendas
                array(
                    'nome_cargo' => 'Gerente de Vendas'
                )
                //termino: genrente de vendas
            )
        ),
        //termino: Diretor Diretor comercial
       //inicio: diretor financeiro
        array(
            'nome_cargo'=> 'Diretor Financeiro',
            'subordinados'=>array(
                //inicio gerente de contas a pagar
                array(
                    'nome_cargo'=>'Gerente de Contas a Pagar', 
                    'subordinados'=> array(
                        //inicio: supervisor de Pagamentos
                        array (
                            'nome_cargo'=>'Supervisor de Pagamentos'
                        )
                        //termino: supervisor de Pagamentos
                    )
                        ),
                //termino: gerente de contas a pagar
                //inicio:Gerente de Compras
                array(
                    'nome_cargo'=>'Gerente de Compras',
                    'subordinados'=>array(
                        //inicio: supervisor de suprimentos
                        array(
                            'nome_cargo' => 'Supervisor de Suprimentos'
                        )
                         //termino: supervisor de suprimentos
                    )

                )
                //termino: gerente de compras
                )
        )
        //termino diretor financeiro
     )
)

);
function exibe($cargos){

$html = '<ul>';
  foreach ($cargos as $cargo) {
      $html .="<li>";

      $html .=$cargo['nome_cargo'];
    if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
        $html .= exibe($cargo['subordinados']);
    }
      $html .="</li>";

  }
$html .= '</ul>';

return $html;
}

echo exibe($hierarquia);
