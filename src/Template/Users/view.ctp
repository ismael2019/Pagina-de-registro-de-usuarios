
<div class="users view large-9 medium-8 columns content">
    <center><h1>Bienvenido <?= h($user->name) ?> Esta es la informacion de tu perfil </h1></center>
     <table class="table table-bordered">
        <tr class="danger">
            <th>Name</th>
            <th>Apellido</th>
            <th>Ci</th>
            <th>Id</th>
            <th>Created</th>
            <th>Modified</th>
            
        </tr>
        <tr class="success">
            <td><?= h($user->name) ?></td>
            <td><?= h($user->apellido) ?></td>
            <td><?= h($user->ci) ?></td>
            <td><?= $this->Number->format($user->id) ?></td>
            <td><?= h($user->created) ?></td>
            <td><?= h($user->modified) ?></td>
        </tr>
        
    </table>
</div>
