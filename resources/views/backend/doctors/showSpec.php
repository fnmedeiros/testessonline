<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($specialties as $specialty){?>
        <tr>
        <?php dd($specialty);?>
            <td><?=$specialty->specialty_id?></td>
            <td><?=$specialty->specialty_id?></td>                                
        </tr>
        <?php };?>
    </tbody>
</table>