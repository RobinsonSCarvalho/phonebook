<div class="form">
    <?= $this->Form->create($contact) ?>
    <div class="col-xs-12 col-md-6">
        <?php
        echo $this->Form->input('name', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('email', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);
        echo $this->Form->input('address', ['required' => true, 'autofocus' => true, 'div' => ['class' => 'col-xs-12 col-md-12']]);


        $_social = $_outros = [];
        foreach ($contact->phones as $key => $value) {
            $_outros[$value->id]['phone'] = $value->phone;
        }
        ?>
    </div>
    <div class="col-xs-12 col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading" style="color: #758697; padding: 5px;">
                Phones
                <button id="button_contacts" type="button" style="float: right;" class="btn btn-default botao_adicionar_social"><i class="fa fa-plus" aria-hidden="true"></i></button>
            </div>
            <ul class="list-group" id="sociais_contacts">
                <?= $this->Form->phone_li($_outros) ?>
            </ul>
        </div>
    </div>
    <div class="col-xs-12">
        <?= $this->Form->button(__('Submit')) ?>
    </div>
    <?= $this->Form->end() ?>
</div>