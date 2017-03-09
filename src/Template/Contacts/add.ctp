<div class="form">
    <?= $this->Form->create($contact) ?>
    <div class="col-xs-6 col-md-6">
        <?php
        echo $this->Form->input('name', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('email', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('address', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        ?>
    </div>
    <div class="col-xs-6 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading" style="color: #758697; padding: 5px;">
                Phone(s)
                <button id="button_contacts" type="button" style="float: right;" class="btn btn-default botao_add_phone"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
            <ul class="list-group" id="phones_contacts">

            </ul>
        </div>
    </div>


    <div class="col-xs-12">
        <?= $this->Form->button(__('Submit')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>