<div class="row">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
<li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Entidade']), ['action' => 'edit', $entidade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Entidade']), ['action' => 'delete', $entidade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entidade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Entidades']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Entidade']), ['action' => 'add']) ?> </li>        
  </ul>
</div>
<div class="entidades view col-lg-12 col-md-9">
    <h3><?= h($entidade->descricao) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($entidade->id) ?></td>
        </tr>
        <tr>
            <th>Cnpj</th>
            <td><?= h($entidade->cnpj) ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= h($entidade->nome) ?></td>
        </tr>
        <tr>
            <th>Ativeconomica</th>
            <td><?= h($entidade->ativeconomica) ?></td>
        </tr>
        <tr>
            <th>Logradouro</th>
            <td><?= h($entidade->logradouro) ?></td>
        </tr>
        <tr>
            <th>Complemento</th>
            <td><?= h($entidade->complemento) ?></td>
        </tr>
        <tr>
            <th>Bairro</th>
            <td><?= h($entidade->bairro) ?></td>
        </tr>
        <tr>
            <th>Numero</th>
            <td><?= h($entidade->numero) ?></td>
        </tr>
        <tr>
            <th>Instfinanceira</th>
            <td><?= h($entidade->instfinanceira) ?></td>
        </tr>
        <tr>
            <th>Cep</th>
            <td><?= h($entidade->cep) ?></td>
        </tr>
        <tr>
            <th>Municipio</th>
            <td><?= $entidade->has('municipio') ? h($entidade->municipio->nome) : '' ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?= h($entidade->telefone) ?></td>
        </tr>
        <tr>
            <th>Codigo</th>
            <td><?= h($entidade->codigo) ?></td>
        </tr>
        <tr>
            <th>Agencia</th>
            <td><?= h($entidade->agencia) ?></td>
        </tr>
        <tr>
            <th>Conta</th>
            <td><?= h($entidade->conta) ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><?= $entidade->has('estado') ? h($entidade->estado->uf) : '' ?></td>
        </tr>        
        <tr>
            <th>Data Abertura</th>
            <td><?= h($entidade->data_abertura) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($entidade->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($entidade->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Vinculações']) ?></h4>
        <?php if (!empty($entidade->vinculacoes)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Entidade Id</th>
                <th>Nivel</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($entidade->controle_acessos as $controleAcessos): ?>
            <tr>
                <td><?= h($controleAcessos->id) ?></td>
                <td><?= h($controleAcessos->usuario_id) ?></td>
                <td><?= h($controleAcessos->entidade_id) ?></td>
                <td><?= h($controleAcessos->nivel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ControleAcessos', 'action' => 'view', $controleAcessos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'ControleAcessos', 'action' => 'edit', $controleAcessos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ControleAcessos', 'action' => 'delete', $controleAcessos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controleAcessos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>