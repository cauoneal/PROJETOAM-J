<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $representantesTecnico->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $representantesTecnico->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Representantes Tecnicos'), ['action' => 'index']) ?></li>
  </ul>
</div>

<div class="representantesTecnicos form col-md-12 columns content">
    <?= $this->Form->create($representantesTecnico) ?>
    <fieldset>
        <legend><?= 'Editar Representante Técnico' ?></legend>
        <?php
            echo $this->Form->input('cpf');
            echo $this->Form->input('nome');
            echo $this->Form->input('profissao');
            echo $this->Form->input('reg_profissional');
            echo $this->Form->input('conselho');
            echo $this->Form->input('data_nascimento');
            echo $this->Form->input('logradouro');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('numero');
            echo $this->Form->input('cep');
            echo $this->Form->input('municipio_id', ['options' => $municipios]);
            echo $this->Form->input('estado_id', ['options' => $estados]);
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('celular');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>
