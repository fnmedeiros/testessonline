<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($doctors as $doctor): ?>
        <tr>
            <td><?=$doctor->id?></td>
            <td><?=$doctor->name?></td>                                
        </tr>
        <?php endforeach;?>
    </tbody>
</table>