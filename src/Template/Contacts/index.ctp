<ul class="side-nav">
    <li><?= $this->Html->link('<i class="fa fa-plus" aria-hidden="true"></i>', ['action' => 'add'], ['escape' => false, 'class' => 'btn btn-default btn-xs']) ?></li>
</ul>
<table style="width: 100%; border: 0px;" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th width="50" class="primeiro_item text-center"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
            <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td class="link_table primeiro_item text-center"><?= $this->Number->format($contact->id) ?></td>
                <td class="link_table"><?= h($contact->name) ?></td>
                <td class="link_table"><?= h($contact->email) ?></td>
                <td class="link_table"><?= h($contact->address) ?></td>
                <td class="actions segundo_item">
                    <?= $this->Html->link('<i class="fa fa-pencil" aria-hidden="true"></i>', ['action' => 'edit', $contact->id, '_full' => true], ['escape' => false, 'class' => 'link_botao_table btn btn-default btn-xs']) ?>
                    <?= $this->Html->link('<i class="fa fa-trash-o" aria-hidden="true"></i>', ['action' => 'delete', $contact->id], ['escape' => false, 'class' => 'btn btn-danger btn-xs', 'confirm' => __('Deseja realmente excluir o registro {0}?', $contact->id)]) ?>                    
                </td>                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="text-center">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< Anterior') ?>
        </ul>
        
            <?= $this->Paginator->numbers() ?>
        
        <ul class="pagination">
            <?= $this->Paginator->next('Próximo >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>


