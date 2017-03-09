<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< Anterior') ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next('Próximo >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
