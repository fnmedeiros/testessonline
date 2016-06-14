<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($specialties as $specialty): ?>
        <tr>
            <td><?=$specialty->id?></td>
            <td><?=$specialty->name?></td>                                
        </tr>
        <?php endforeach;?>
    </tbody>
</table>