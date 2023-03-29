<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceBanks;

class ServiceBanksSber extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'bank_code' => 'sber',
            'loan_content' => '
            <p class="font-bold mb-4 font-md">Беззалоговый кредит<br>
            для Индивидуальных предпринимателей до 5 млн тенге<br>
            сроком от 12 до 36 мес.</p>
            <ul>
            <li>Онлайн подача заявки 24/7</li>
            <li>Мгновенное принятие решения</li>
            <li>Отсутствие комиссий</li>
            <li>Минимальный пакет документов</li>
            <li>Выдача денег в течении 1 рабочего дня</li>
            </ul>
            <hr>
            <p class="font-bold mb-4 font-md">Для кого создан ваш продукт/услуга? </p>
            
            <p>Индивидуальные предприниматели, в сфере услуг, розничной торговли (маленькие магазинчики у дома, салоны красоты, цветочный магазины, общепит и тд.), возраст от 25-60, пол: жен., муж., интересы: бизнес, быстрые деньги, кредит, развитие бизнеса, пополнение оборотных средств, закуп товаров, оборудования, онлайн кредитование.</p>
            
           <p> При помощи данного продукта Клиенты приобретают возможность закрыть свои потребности/«боли». У предпринимателя есть необходимость в получении «быстрых» денег, подав онлайн заявку и получив решение банка без траты времени на посещение отделения банка.</p>'
        ];
        ServiceBanks::query()->where('bank_code', $data['bank_code'])
            ->update(
                [
                    'loan_content' => $data['loan_content']
                ]
            );
        //
    }
}
