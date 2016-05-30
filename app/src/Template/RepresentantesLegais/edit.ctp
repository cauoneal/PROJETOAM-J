<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $representantesLegai->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $representantesLegai->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Representantes Legais'), ['action' => 'index']) ?></li>
  </ul>
</div>
<div class="representantesLegais form col-md-12 columns content">
    <?= $this->Form->create($representantesLegai) ?>
    <fieldset>
        <legend><?= 'Editar Representantes Legais' ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('profissao');
            echo $this->Form->input('identidade');
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
            echo $this->Form->input('celular1');
            echo $this->Form->input('celular2');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>