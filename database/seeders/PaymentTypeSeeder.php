<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run(): void
    {
        PaymentType::create([
            'name' => [
                'uz' => 'Naxt',
                'ru' => 'Наличный',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Terminal',
                'ru' => 'ru Terminal',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Click',
                'ru' => 'Click',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Payme',
                'ru' => 'Payme',
            ],
        ]);
        PaymentType::create([
            'name' => [
                'uz' => 'Uzum',
                'ru' => 'Uzum',
            ],
        ]);
    }
}
