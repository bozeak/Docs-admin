<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

echo "Admin zone";

$list = Subdiv::model()->findAll();
?>
<ul>
    <?php
    foreach ($list as $item):
        $conditions = 'subdiv=' . $item->id;
        $counts = TDb::model()->count(array(
            'condition' => $conditions,
                ));
        ?>
        <li><?php echo CHtml::link(CHtml::encode($item->name), array('tDb/list', 'subdiv' => $item->id)) ?><span><?php echo ' (' . $counts . ')' ?></span></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php
    foreach ($list as $item):
        $conditions = 'subdiv=' . $item->id . ' AND date_reg="2011-11-15"';
        $counts_month = TDb::model()->count(array(
            'condition' => $conditions,
                ));
        ?>

        <li><?php echo CHtml::link(CHtml::encode($item->name), array('tDb/list', 'subdiv' => $item->id, 'date_reg' => "2011-11-15")) ?><span><?php echo ' (' . $counts_month . ')' ?></span></li>

    <?php endforeach; ?>
</ul>

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