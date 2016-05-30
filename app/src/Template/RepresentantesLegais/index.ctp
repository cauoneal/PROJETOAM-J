<div class="row">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Representante Legal']), ['action' => 'add']) ?></li>
  </ul>
</div>
<div class="representantesLegais index col-md-12 columns content">
    <h3>Representantes Legais</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>                
                <th><?= $this->Paginator->sort('cpf') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('profissao') ?></th>                
                <th><?= $this->Paginator->sort('municipio_id') ?></th>
                <th><?= $this->Paginator->sort('estado_id') ?></th>
                <th><?= $this->Paginator->sort('Criado em') ?></th>
                <th><?= $this->Paginator->sort('MOdificado em') ?></th>                
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($representantesLegais as $representantesLegai): ?>
            <tr>                
                <td><?= h($representantesLegai->cpf) ?></td>
                <td><?= h($representantesLegai->nome) ?></td>
                <td><?= h($representantesLegai->profissao) ?></td>
                <td><?= $representantesLegai->has('municipio') ? h($representantesLegai->municipio->nome) : '' ?></td>
                <td><?= $representantesLegai->has('estado') ? h($representantesLegai->estado->uf) : '' ?></td>
                <td><?= h($representantesLegai->created) ?></td>
                <td><?= h($representantesLegai->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $representantesLegai->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $representantesLegai->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $representantesLegai->id], ['confirm' => __('Dejesa mesmo deletar o registro do  {0}?', $representantesLegai->nome), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">        
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('anterior'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('seguinte') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} de {{pages}}, exibindo {{current}} registros de
         {{count}} total, começando no registro {{start}}, terminando no {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>