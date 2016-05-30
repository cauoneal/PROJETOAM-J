<div class="row">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('Nova {0}', ['Entidade']), ['action' => 'add']) ?></li>        
  </ul>
</div>
<div class="entidades index col-md-12 columns content">
    <h3>Entidades</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>                
                <th><?= $this->Paginator->sort('cnpj') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('bairro') ?></th>
                <th><?= $this->Paginator->sort('municipio_id') ?></th>
                <th><?= $this->Paginator->sort('estado_id') ?></th>
                <th><?= $this->Paginator->sort('Criado em') ?></th>
                <th><?= $this->Paginator->sort('Modificado em') ?></th>                
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entidades as $entidade): ?>
            <tr>                
                <td><?= h($entidade->cnpj) ?></td>
                <td><?= h($entidade->nome) ?></td>
                <td><?= h($entidade->bairro) ?></td>
                <td><?= $entidade->has('municipio') ? h($entidade->municipio->nome) : '' ?></td>
                <td><?= $entidade->has('estado') ? h($entidade->estado->uf) : '' ?></td>
                <td><?= h($entidade->created) ?></td>
                <td><?= h($entidade->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $entidade->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $entidade->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $entidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entidade->id), 'class'=>'btn btn-danger btn-xs']) ?>
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