<?php

namespace App\Controller;

use Cake\I18n\Time;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;


class TestController extends AppController
{
    public $modelClass = "SaleOrders";
    public function try()
    {
        $now = Time::now();
        $now->i18nFormat('dd-mm-yyyy');
        $Contracts = TableRegistry::getTableLocator()->get('contracts');
        $bills = TableRegistry::getTableLocator()->get('bills')->find('all');
        


        foreach ($Contracts->find('all') as $contract) :
            $billing_date = $contract['billing_date'];
            $this->set(compact('contract'));
            if ($billing_date->isToday()) { //verifica en cada contrato la fecha de pago y genera la nota de venta

                $this->set(compact('contract'));
                $order = $this->SaleOrders->newEntity();
                $order->contract_id = $contract['id'];
                $order->amount = 0;
                $order->due_date = $now; //cambiar por la fecha + n dias
            
            }

            

                //enviar mensaje de recordatorio de pago
            
        /*if ($discount_date->isToday()) {
                $contract->discount = 0;
                $contract->discount_end = 'Null';
                $Contracts->save($contract);
            }
            if ($end_date->isToday()) {
                $contract->status = 0;
                $Contracts->save($contract);
            }
            if ($begin_date->isToday()) {
                $contract->status = 1;
                $Contracts->save($contract);
            } */

        endforeach;
    }
}
