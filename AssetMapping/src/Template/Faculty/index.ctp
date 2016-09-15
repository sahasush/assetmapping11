<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['action' => 'add']) ?></li>
    </ul>
	
	
	<?= $this->Form->create(); ?>
<b> please enter name to search </b>
<?= $this->Form->input('name') ?>

<?= $this->Form->button('Filter', ['type' => 'submit']) ?>
<?= $this->Html->link('Reset', ['action' => 'index']) ?>

<?= $this->Form->end()?>
</nav>


	
	
<div class="faculty index large-9 medium-8 columns content">
    <h3><?= __('Faculty') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('Faculty_ID') ?></th>
                <th><?= $this->Paginator->sort('Faculty_Fname') ?></th>
                <th><?= $this->Paginator->sort('Faculty_Lname') ?></th>
                <th><?= $this->Paginator->sort('Faculty_MInitial') ?></th>
                <th><?= $this->Paginator->sort('Email') ?></th>
                <th><?= $this->Paginator->sort('CSU') ?></th>
                <th><?= $this->Paginator->sort('Position') ?></th>
                <th><?= $this->Paginator->sort('Dept_Affiliation') ?></th>
                <th><?= $this->Paginator->sort('Address_Line_1') ?></th>
                <th><?= $this->Paginator->sort('Building_Room') ?></th>
                <th><?= $this->Paginator->sort('Address_Line_2') ?></th>
                <th><?= $this->Paginator->sort('Phone_1') ?></th>
                <th><?= $this->Paginator->sort('Phone_1_Ext') ?></th>
                <th><?= $this->Paginator->sort('Phone_2') ?></th>
                <th><?= $this->Paginator->sort('Phone_2_Desc') ?></th>
                <th><?= $this->Paginator->sort('Degree') ?></th>
                <th><?= $this->Paginator->sort('Degree_Discip') ?></th>
                <th><?= $this->Paginator->sort('Validation') ?></th>
                <th><?= $this->Paginator->sort('Validation_Source') ?></th>
                <th><?= $this->Paginator->sort('Valid_Exist') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($faculty as $faculty): ?>
            <tr>
                <td><?= $this->Number->format($faculty->Faculty_ID) ?></td>
                <td><?= h($faculty->Faculty_Fname) ?></td>
                <td><?= h($faculty->Faculty_Lname) ?></td>
                <td><?= h($faculty->Faculty_MInitial) ?></td>
                <td><?= h($faculty->Email) ?></td>
                <td><?= h($faculty->CSU) ?></td>
                <td><?= h($faculty->Position) ?></td>
                <td><?= h($faculty->Dept_Affiliation) ?></td>
                <td><?= h($faculty->Address_Line_1) ?></td>
                <td><?= h($faculty->Building_Room) ?></td>
                <td><?= h($faculty->Address_Line_2) ?></td>
                <td><?= h($faculty->Phone_1) ?></td>
                <td><?= h($faculty->Phone_1_Ext) ?></td>
                <td><?= h($faculty->Phone_2) ?></td>
                <td><?= h($faculty->Phone_2_Desc) ?></td>
                <td><?= h($faculty->Degree) ?></td>
                <td><?= h($faculty->Degree_Discip) ?></td>
                <td><?= h($faculty->Validation) ?></td>
                <td><?= h($faculty->Validation_Source) ?></td>
                <td><?= h($faculty->Valid_Exist) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $faculty->Faculty_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $faculty->Faculty_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $faculty->Faculty_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $faculty->Faculty_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>



