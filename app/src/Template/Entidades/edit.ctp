<div class="row">
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ações <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><?= $this->Html->link(__('List {0}', 'Entidades'), ['action' => 'index']) ?></li>
  </ul>
</div>
<div class="entidades form col-lg-12 col-md-9">
    <?= $this->Form->create($entidade) ?>
    <fieldset>
        <legend><?= 'Editar Entidade' ?></legend>
        <?php
            echo $this->Form->input('cnpj');
            echo $this->Form->input('nome');
            echo $this->Form->input('ativeconomica');
            echo $this->Form->input('logradouro');
            echo $this->Form->input('complemento');
            echo $this->Form->input('bairro');
            echo $this->Form->input('numero');
            echo $this->Form->input('instfinanceira');
            echo $this->Form->input('data_abertura');
            echo $this->Form->input('cep');
            echo $this->Form->input('municipio_id', ['options' => $municipios]);
            echo $this->Form->input('estado_id', ['options' => $estados]);
            echo $this->Form->input('telefone');
            echo $this->Form->input('codigo');
            echo $this->Form->input('agencia');
            echo $this->Form->input('conta');            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>