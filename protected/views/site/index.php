<?php
$list = Subdiv::model()->findAll();
?>
<h1><?php Yii::t('app', 'Zona Administrativa'); ?></h1>
<!-- Table start -->
<div style="float: left;">
    <table id="main_table" cellspacing="0">
        <tr id="table_header">
            <th>Subdiviziunea</th>
            <th>Zilnic</th>
            <th>Lunar</th>
            <th>Total</th>
        </tr>
        <?php foreach ($list as $item): ?>
            <tr>
                <td><?php echo CHtml::encode($item->name) ?></td>

                <td class="centering"><?php
        $today_day = date('Y-m-d');
        $conditions = 'subdiv=' . $item->id . ' AND date_add="' . $today_day . '"';
        $counts_day = TDb::model()->count(array(
            'condition' => $conditions,
                ));
        //echo $counts_day
        echo CHtml::link(CHtml::encode($counts_day), array('tDb/list', 'subdiv' => $item->id, 'date_add' => $today_day))
            ?></td>

                <td class="centering"><?php
                $month = date('m');
                $conditions = 'subdiv=' . $item->id . ' AND MONTH(date_reg)=' . $month;
                $counts_month = TDb::model()->count(array(
                    'condition' => $conditions,
                        ));
                //echo $counts_month
                echo CHtml::link(CHtml::encode($counts_month), array('tDb/list', 'subdiv' => $item->id, 'month' => $month))
            ?></td>

                <td class="centering"><?php
                $conditions = 'subdiv=' . $item->id;
                $counts = TDb::model()->count(array(
                    'condition' => $conditions,
                        ));
                //echo $counts
                echo CHtml::link(CHtml::encode($counts), array('tDb/list', 'subdiv' => $item->id))
            ?></td>


            </tr>

        <?php endforeach; ?>
        <tr>
            <td colspan="3"><h2>Total</h2></td>
            <td class="centering"><h2><?php $countAll = TDb::model()->count();
        echo $countAll ?></h2></td>
        </tr>
    </table>
</div>

<div>
    <table style="width: 435px; float: right; border: 1px solid #999999;">
        <tr>
            <td>
                <div style="text-align: center; margin: 10px;">
                    <?php echo CHtml::link('<img src="images/folder_user.png" />', array('users/admin')); ?>
                    <h2>Utilizatorii sistemului</h2>
                </div>
            </td>
            <td>
                <div style="text-align: center; margin: 10px;">
                    <?php echo CHtml::link('<img src="images/responsabili.png" />', array('responsabil/admin')); ?>
                    <h2>Responsabili</h2>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div style="text-align: center; margin: 10px;">
                    <?php echo CHtml::link('<img src="images/globe.png" />', array('subdiv/admin')); ?>
                    <h2>Subdiviziunile</h2>
                </div>
            </td>
            <td>
                <div style="text-align: center; margin: 10px;">
                    <?php echo CHtml::link('<img src="images/lists.png" />', array('tipraspuns/admin')); ?>
                    <h2>Tipurile raspunsurilor</h2>
                </div>
            </td>
        </tr>
    </table>
</div>
<script type="text/javascript" src="js/jquery-1.7.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#main_table tr:odd").addClass("odd");
        $("#main_table tr:even").addClass("even");
    });
</script>