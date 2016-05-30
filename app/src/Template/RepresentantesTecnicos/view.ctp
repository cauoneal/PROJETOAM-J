<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Representantes Tecnico']), ['action' => 'edit', $representantesTecnico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Representantes Tecnico']), ['action' => 'delete', $representantesTecnico->id], ['confirm' => __('Deseja realmente deletar # {0}?', $representantesTecnico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Representantes Tecnicos']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Representantes Tecnico']), ['action' => 'add']) ?> </li>
  </ul>
</div>
<div class="divider"><br></div>
<div class="representantesTecnicos view col-lg-12 col-md-9">    
    <table class="table table-striped table-hover">
        <tr>
            <th>Cpf</th>
            <td><?= h($representantesTecnico->cpf) ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= h($representantesTecnico->nome) ?></td>
        </tr>
        <tr>
            <th>Profissao</th>
            <td><?= h($representantesTecnico->profissao) ?></td>
        </tr>
        <tr>
            <th>Reg Profissional</th>
            <td><?= h($representantesTecnico->reg_profissional) ?></td>
        </tr>
        <tr>
            <th>Conselho</th>
            <td><?= h($representantesTecnico->conselho) ?></td>
        </tr>
        <tr>
            <th>Logradouro</th>
            <td><?= h($representantesTecnico->logradouro) ?></td>
        </tr>
        <tr>
            <th>Complemento</th>
            <td><?= h($representantesTecnico->complemento) ?></td>
        </tr>
        <tr>
            <th>Bairro</th>
            <td><?= h($representantesTecnico->bairro) ?></td>
        </tr>
        <tr>
            <th>Numero</th>
            <td><?= h($representantesTecnico->numero) ?></td>
        </tr>
        <tr>
            <th>Cep</th>
            <td><?= h($representantesTecnico->cep) ?></td>
        </tr>
        <tr>
            <th>Municipio</th>
            <td><?= $representantesTecnico->has('municipio') ? h($representantesTecnico->municipio->nome) : '' ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><?= $representantesTecnico->has('estado') ? h($representantesTecnico->estado->uf) : '' ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($representantesTecnico->email) ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?= h($representantesTecnico->telefone) ?></td>
        </tr>
        <tr>
            <th>Celular</th>
            <td><?= h($representantesTecnico->celular) ?></td>
        </tr>        
        <tr>
            <th>Data Nascimento</th>
            <td><?= h($representantesTecnico->data_nascimento) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($representantesTecnico->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($representantesTecnico->modified) ?></tr>
        </tr>
    </table>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>