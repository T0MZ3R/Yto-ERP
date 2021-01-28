<?php

namespace Database\Factories;

use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => rand(105,205) . ' ' . rand(50,82) . ' '  . rand(15,19) . ' '  . rand(91,98)  . ' H',
            'id_marque' => rand(1,9),
            'nb' => rand(1,10),
            'price' => rand(85,140),
        ];
    }
}
