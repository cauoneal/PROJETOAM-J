<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="list-group">        
        <li class="list-group-item"><?= $this->Html->link(__('List {0}', 'Representantes Tecnicos'), ['action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('List {0}', 'Municipios'), ['controller' => 'Municipios', 'action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('New {0}', 'Municipio'), ['controller' => 'Municipios', 'action' => 'add']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('List {0}', 'Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li class="list-group-item"><?= $this->Html->link(__('New {0}', 'Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="representantesTecnicos form col-md-10 columns content">
    <?= $this->Form->create($representantesTecnico) ?>
    <fieldset>
        <legend><?= 'Adicionar Representante Técnico' ?></legend>
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
