<main class="content">
    <?php

    renderTitle(
        'Relatorio Mensal',
        'Acompanhe seu saldo de horas',
        'icofont-ui-calendar'
    );
    ?>

    <div>
        <form class="mb-4" action="#" method="post">
            <select name="period" class="form-control" placeholder="Selecione o periodo...">
                <?php  foreach($periods as $key => $month){
                        echo "<option value='{$key}'>{$month}</option>";
                    }
                ?>
            </select>
        </form>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Dia</th>
                <th>Entrada 1</th>
                <th>Saida 1</th>
                <th>Entrada 2</th>
                <th>Saida 2</th>
                <th>Saldo</th>
                
            </thead>
            <tbody>
                <?php foreach ($report as $registry): ?>
                    <tr>
                        <td>
                            <?= formatDateWhereLocale($registry->work_date , '%d de %B de %Y'); ?>
                        </td>
                        <td>
                            <?= $registry->time1 ?>
                        </td>
                        <td>
                            <?= $registry->time2 ?>
                        </td>
                        <td>
                            <?= $registry->time3 ?>
                        </td>
                        <td>
                            <?= $registry->time4 ?>
                        </td>
                        <td>
                            <?= $registry->getBalance() ?>
                        </td>
                    </tr>
                <?php endforeach ?>
                <tr class="bg-primary text-white">
                    <td>
                        Horas Trabalhadas:
                    </td>
                    <td colspan="3">
                        <?= $sumOfWorkedtime ?>
                    </td>
                    <td>
                        Saldo Mensal:
                    </td>
                    <td>
                        <?= $balance ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


</main>