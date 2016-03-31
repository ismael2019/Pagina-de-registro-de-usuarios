
    <?= $this->Form->create($user) ?>
    <fieldset>
        <center><h1>Agrege Un Nuevo Usuario</h1></center>
        <?php
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('apellido',['class'=>'form-control']);
            echo $this->Form->input('ci',['class'=>'form-control']);
        ?>
    </fieldset>
    <br>
    <center><?= $this->Form->button(__('Submit')) ?></center>
    <?= $this->Form->end() ?>
</div>
