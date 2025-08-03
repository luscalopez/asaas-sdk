<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace LuscaLopez\Asaas\Exceptions;

/**
 * Description of CobrancaException
 *
 * @author Rafael
 * @author Lucas G. Bueno
 */
class CobrancaException
{
    public static function invalidCobranca()
    {
        return array("error" => "Dados inválidos! Os dados obrigatórios são: customer (cliente), billingType (forma de pagamento), dueDate (vencimento), e um dos seguintes cenários: se não for parcelado (installmentCount vazio ou igual a 1), é obrigatório o campo value (valor); se for parcelado (installmentCount maior que 1), não pode haver value e deve existir totalValue ou installmentValue (pelo menos um dos dois).");
    }
}
