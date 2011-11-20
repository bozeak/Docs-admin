<?php
$list = Subdiv::model()->findAll();
?>
<h1>Zona Administrativa</h1>

<table>
    <tr>
        <th>Subdiviziunea</th>
        <th>total</th>
        <th>2011-11-15</th>
    </tr>
    <?php foreach ($list as $item): ?>
        <tr>
            <td><?php echo CHtml::encode($item->name) ?></td>
            <td><?php
    $conditions = 'subdiv=' . $item->id;
    $counts = TDb::model()->count(array(
        'condition' => $conditions,
            ));
    //echo $counts
    echo CHtml::link(CHtml::encode($counts), array('tDb/list', 'subdiv' => $item->id))
        ?></td>
            <td><?php
            $conditions = 'subdiv=' . $item->id . ' AND date_reg="2011-11-15"';
            $counts_month = TDb::model()->count(array(
                'condition' => $conditions,
                    ));
            //echo $counts_month
            echo CHtml::link(CHtml::encode($counts_month), array('tDb/list', 'subdiv' => $item->id, 'date_reg' => "2011-11-15"))
        ?></td>
        </tr>

    <?php endforeach; ?>
        <tr>
            <td colspan="2"><h2>Total</h2></td>
            <td><h2><?php $countAll=TDb::model()->count(); echo $countAll ?></h2></td>
        </tr>
</table>

<div style="float: left; text-align: center; margin: 10px;">
    <?php echo CHtml::link('<img src="images/folder_user.png" />', array('users/admin')); ?>
    <h2>Utilizatorii sistemului</h2>
</div>
<div style="text-align: center; margin: 10px;">
    <?php echo CHtml::link('<img src="images/responsabili.png" />', array('responsabil/admin')); ?>
    <h2>Responsabili</h2>
</div>
