<?php
/**
 * Created by PhpStorm.
 * User: jeremy
 * Date: 27/01/2017
 * Time: 08:38
 */

namespace MMI;


class Invoice
{
    public function getTotal($invoiceList){

        $total = array();
        $total_tva = 0;

        foreach ($invoiceList as $k => $invoice){
            $tva = $invoice['mtht'] * ($invoice['tva'] / 100);
            if (empty($total)){
                $total['total'] = $invoice['mtht'];
                $total_tva = $tva;
            } else {
                $total['total'] += $invoice['mtht'];
                $total_tva += $tva;
            }
            $total['total_tva'] = $total['total'] + $total_tva;
            $total['list'][$k] = $invoice['description'];
        }
        return $total;
    }
}