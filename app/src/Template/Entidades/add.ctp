<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="list-group">        
        <li class="list-group-item"><?= $this->Html->link(__('List {0}', 'Entidades'), ['action' => 'index']) ?></li>        
    </ul>
</nav>
<div class="entidades form col-md-10 columns content">
    <?= $this->Form->create($entidade) ?>
    <fieldset>
        <legend><?= 'Adicionar Entidade' ?></legend>
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
            echo $this->Form->input('telefone');
            echo $this->Form->input('codigo');
            echo $this->Form->input('agencia');
            echo $this->Form->input('conta');
            echo $this->Form->input('estado_id', ['options' => $estados]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<div align='center'><a href="javascript:window.history.go(-1)">Voltar</a></div>