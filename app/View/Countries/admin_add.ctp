<h2>Add Country</h2>
<p>This section allows you to add new Country. Fields marked with <span class="req">*</span> are mandatory.</p>
<?php echo $this->Form->create('Country'); ?>
<table cellspacing="0" cellpadding="0" class="table1">
    <tr>
        <td style="width:150px;">Country Name:<span class="req">*</span></td>
        <td><?php echo $this->Form->input('name', array('label'=>'','class' => 'curve1 text1','maxLength'=>'100','style' => 'width:250px')); ?></td>
    </tr>
    <tr>
        <td>
            <?php
             $options = array(
                'label' => 'Add Country',
                'class' => 'curve2 button1',
            );
            echo $this->Form->end($options); ?></td>
			 <td style="vertical-align:middle; "><?php echo $this->Html->link('Cancel', array('action' => 'index'), array('class' => 'curve2 button1'));?></td>
         <td></td>
        <td></td>
    </tr>
</table>
