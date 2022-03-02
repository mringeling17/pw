<?php

namespace App\Command;
use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;
use Cake\Console\ConsoleOptionParser;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;

/**
 * CronJob command.
 */
class CronJobCommand extends Command
{
    /**
     * Hook method for defining this command's option parser.
     *
     * @see https://book.cakephp.org/3.0/en/console-and-shells/commands.html#defining-arguments-and-options
     *
     * @param \Cake\Console\ConsoleOptionParser $parser The parser to be defined
     * @return \Cake\Console\ConsoleOptionParser The built parser.
     */
    public function buildOptionParser(ConsoleOptionParser $parser)
    {
        $parser = parent::buildOptionParser($parser);

        return $parser;
    }

    /**
     * Implement this method with your command's logic.
     *
     * @param \Cake\Console\Arguments $args The command arguments.
     * @param \Cake\Console\ConsoleIo $io The console io
     * @return null|int The exit code or null for success
     */

    public $modelClass = "SaleOrders";


    public function execute(Arguments $args, ConsoleIo $io)
    {
        
        $now = Time::now();
        $now->i18nFormat('dd-mm-yyyy');
        $Contracts = TableRegistry::getTableLocator()->get('contracts');
        $bills = TableRegistry::getTableLocator()->get('bills')->find('all');
        


        foreach ($Contracts->find('all') as $contract) :
            $billing_date = $contract['billing_date'];
            if ($billing_date->isToday()) { //verifica en cada contrato la fecha de pago y genera la nota de venta

                $order = $this->SaleOrders->newEntity();
                $order->contract_id = $contract['id'];
                $order->amount = 0;
                $order->due_date = $now; //cambiar por la fecha + n dias
                $this->SaleOrders->save($order);


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
