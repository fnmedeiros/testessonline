<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>crm</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($doctors as $doctor){?>
        <tr>
            <td><?=$doctor->person->name?></td>
            <td><?=$doctor->crm?></td>                                
        </tr>
        <?php };?>
    </tbody>
</table>