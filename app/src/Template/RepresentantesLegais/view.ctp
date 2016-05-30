<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Representantes Legai']), ['action' => 'edit', $representantesLegai->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Representantes Legai']), ['action' => 'delete', $representantesLegai->id], ['confirm' => __('Are you sure you want to delete # {0}?', $representantesLegai->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Representantes Legais']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Representantes Legai']), ['action' => 'add']) ?> </li>
  </ul>
</div>
<div class="divider"><br></div>
<div class="representantesLegais view col-lg-12 col-md-9">    
    <table class="table table-striped table-hover">
        <tr>
            <th>Cpf</th>
            <td><?= h($representantesLegai->cpf) ?></td>
        </tr>
        <tr>
            <th>Nome</th>
            <td><?= h($representantesLegai->nome) ?></td>
        </tr>
        <tr>
            <th>Profissao</th>
            <td><?= h($representantesLegai->profissao) ?></td>
        </tr>
        <tr>
            <th>Identidade</th>
            <td><?= h($representantesLegai->identidade) ?></td>
        </tr>
        <tr>
            <th>Logradouro</th>
            <td><?= h($representantesLegai->logradouro) ?></td>
        </tr>
        <tr>
            <th>Complemento</th>
            <td><?= h($representantesLegai->complemento) ?></td>
        </tr>
        <tr>
            <th>Bairro</th>
            <td><?= h($representantesLegai->bairro) ?></td>
        </tr>
        <tr>
            <th>Numero</th>
            <td><?= h($representantesLegai->numero) ?></td>
        </tr>
        <tr>
            <th>Cep</th>
            <td><?= h($representantesLegai->cep) ?></td>
        </tr>
        <tr>
            <th>Municipio</th>
            <td><?= $representantesLegai->has('municipio') ? h($representantesLegai->municipio->nome) : '' ?></td>
        </tr>
        <tr>
            <th>Estado</th>
            <td><?= $representantesLegai->has('estado') ? h($representantesLegai->estado->uf) : '' ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($representantesLegai->email) ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?= h($representantesLegai->telefone) ?></td>
        </tr>
        <tr>
            <th>Celular1</th>
            <td><?= h($representantesLegai->celular1) ?></td>
        </tr>
        <tr>
            <th>Celular2</th>
            <td><?= h($representantesLegai->celular2) ?></td>
        </tr>        
        <tr>
            <th>Data Nascimento</th>
            <td><?= h($representantesLegai->data_nascimento) ?></tr>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($representantesLegai->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($representantesLegai->modified) ?></tr>
        </tr>
    </table>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>