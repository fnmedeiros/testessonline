<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>crm</th>
            <th>ação</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($doctors as $doctor){?>
        <tr>
            <td><?=$doctor->person->name?></td>
            <td><?=$doctor->crm?></td>                                
            <td><a href="<?php echo "doctors/specialties/".$doctor->id ;?>">Specialidades</a></td>                                
        </tr>
        <?php };?>
    </tbody>
</table>
<a href="doctors/create">Novo</a>