<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP MyHtmlHelper
 * @author lucas
 */

namespace App\View\Helper;

use Cake\View\Helper\NumberHelper;
use App\View\Helper\MyHtmlHelper;

class MyNumberHelper extends NumberHelper {

    public function __construct(\Cake\View\View $View, array $config = array()) {
        parent::__construct($View, $config);
        $this->bHtml = new MyHtmlHelper($View, $config);
    }

    /* public $helpers = [
      'bHtml' => [
      'className' => 'MyHtml'
      ]
      ]; */

    public function status($fieldName, array $options = [], $labelExtra = null) {
        $d = [
            0 => [
                'text' => 'Inativo',
                'class' => 'danger',
            ],
            1 => [
                'text' => 'Ativo',
                'class' => 'success',
            ],
            9 => [
                'text' => 'Excluido',
                'class' => 'danger',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function periodo($id = null) {
        $d = [
            1 => 'Semana',
            2 => 'Quinzenal',
            3 => 'Mensal',
            4 => 'Bimestral',
            5 => 'Trimetral',
            6 => 'Semestral',
            7 => 'Anual',
        ];
        return !empty($d[$id]) ? $d[$id] : '';
    }

    public function simNao($fieldName, array $options = [], $labelExtra = null) {
        if (trim($fieldName) === '') {
            $fieldName = 0;
        }
        $d = [
            0 => [
                'text' => 'Não',
                'class' => 'danger',
            ],
            1 => [
                'text' => 'Sim',
                'class' => 'success',
            ]
        ];
        return $this->bHtml->label($labelExtra . $d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function tipo($fieldName, array $options = []) {
        $fieldName = (int) $fieldName;
        $d = [
            1 => [
                'text' => 'Administrador',
                'class' => 'primary',
            ],
            2 => [
                'text' => 'Radio',
                'class' => 'info',
            ]
        ];
        return $this->bHtml->label($d[$fieldName]['text'], $d[$fieldName]['class']);
    }
    
    public function tipo_banner($fieldName, array $options = []) {
        $fieldName = (int) $fieldName;
        $d = [
            0 => [
                'text' => 'Grande Splash',
                'class' => 'primary',
            ],
            1 => [
                'text' => 'Pequeno',
                'class' => 'info',
            ]
        ];
        return $this->bHtml->label($d[$fieldName]['text'], $d[$fieldName]['class']);
    }

    public function currency($number, $currency = null, array $options = []) {
        return parent::currency($number, 'R$ ', $options);
    }

}
