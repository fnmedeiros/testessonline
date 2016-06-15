<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Dia da Semana</th>
            <th>Início</th>
            <th>Término</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($schedules as $schedule): ?>
        <tr>
            <td><?=$schedule->id?></td>
            <td><?=$schedule->day_week?></td>                                
            <td><?=$schedule->begin?></td>                                
            <td><?=$schedule->final?></td>                                
        </tr>
        <?php endforeach;?>
    </tbody>
</table>