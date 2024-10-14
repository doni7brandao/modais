<!-- modal ver relatório de diária -->
<div class="modal fade" id="ver-registro<?php echo $mostrar->id_diaria;?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
          <h3 class="modal-title text-center">Detalhamento da Despesa</h3>
      </div>
      <div class="modal-body text-justify">
        <h5>Nº do Empenho: <b><?php echo $mostrar->nr_empenho; ?></b></h5>
            <h5>Data do Empenho:
              <b>
              <?php
                $emissao = $mostrar->data_emissao;
                $dataEmissao = date_create($emissao);
                echo date_format($dataEmissao, 'd/m/Y');
              ?>
              </b>
            </h5>
            <h5>Valor Empenhado: <b><?php echo $mostrar->valor_empenhado; ?></b></h5>
            <h5>Valor Liquidado: <b><?php echo $mostrar->valor_liquidado; ?></b></h5>
            <h5>Valor Pago: <b><?php echo $mostrar->valor_pago; ?></b></h5>
            <h5>Fonte de Recursos: <b><?php echo $mostrar->fonte_recursos; ?></b></h5>
            <h5>Data da Liquidação: 
              <b>
              <?php
                  $dataLiquidacao = $mostrar->data_liquidacao;
                  $dtliquidacao = date_create($dataLiquidacao);
                  echo date_format($dtliquidacao, 'd/m/Y');
              ?>
              </b>
            </h5>
            <h5>Data do Pagamento: 
                  <b>
                  <?php
                    $dataPagamento = $mostrar->data_pagamento;
                    $dtpagamento = date_create($dataPagamento);
                    echo date_format($dtpagamento, 'd/m/Y');
                  ?>
                  </b>
            </h5>
            <h5>Nome do Credor: <b><?php echo $mostrar->nome_credor; ?></b></h5>
            <h5>CPF do Credor: <b><?php $var = $mostrar->cpf_credor; echo substr_replace($var, '***.***', 4, -3); ?></b></h5>
            <h5>CPF do Ordenador da Despesa: <b><?php $var = $mostrar->cpf_ordenador; echo substr_replace($var, '***.***', 4, -3); ?></b></h5>
                                            
            <hr class="m-b-10 m-t-10">
                                            
            <h3 class="text-center"><u>H I S T Ó R I C O</u></h3>
            <div class="text-justify"><h4><?php echo $mostrar->historico_diaria; ?></h4></div>
          </div>
        <div class="modal-footer">
          <div class="text-center"> 
              <button href="" type="button" class="btn btn-danger" data-dismiss="modal" title="Fechar"><i class="fa fa-remove"></i><span> Fechar</span></button>
          </div>
        </div>
    </div>
  </div>
</div><!--/modal ver registro-->

<!-- chamar o modal -->
 <a href="#ver-registro<?php echo $mostrar->id_diaria;?>" data-toggle="modal" class="btn btn-primary" title="Clique para Visualizar">Visualizar</a>
