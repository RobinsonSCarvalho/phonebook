<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\View\Helper;

/**
 * Description of FuncoesTraits
 *
 * @author lucas
 */
trait FuncoesTraits {

    public function mergeValuesTags($tag, $add = [], $dados = []) {
        $retorno = [];
        if (is_string($add[$tag])) {
            $add[$tag] = explode(' ', $add[$tag]);
        }
        $retorno = $add[$tag];
        if (!empty($dados[$tag])) {
            $search = $dados[$tag];
            if (is_string($search)) {
                $search = explode(' ', $search);
            }
            foreach ($search as $key => $value) {
                if (!array_search($value, $retorno)) {
                    $retorno[] = $value;
                }
            }
        }
        return implode(' ', $retorno);
    }

    public function atributos($dados = []) {
        $retorno = [];
        foreach ($dados as $key => $value) {
            $retorno[] = $key . '="' . $value . '"';
        }
        return implode(' ', $retorno);
    }

}
