
<?= $this->Util->search($this->Form) ?> 

<?php 
   if($search = $this->request->query('q')){
       echo 'Filtrando por: '.$search.' - '.$this->Html->link(__('Ver todos'), ['action' => 'index']);
   }
?>  
    <center><h3>Lista de Usuarios Registrados</h3><center>
    <table class="table table-bordered">
         <thead>
            <tr class="danger">
                <th>id</th>
                <th>name</th>
                <th>apellido</th>
                <th>ci</th>
                <th>created</th>
                <th>modified</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr class="success">
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->apellido) ?></td>
                <td><?= h($user->ci) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
