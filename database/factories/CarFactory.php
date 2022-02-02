<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'car_name' => $this->faker->firstName,
            'automaker' => $this->faker->firstName,
            'number_of_available_cars' => $available_cars = $this->faker->numberBetween(0, 5),
            'in_stock' => $available_cars == 0 ? false : true,
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Car $car) {
            $automakers = ['Toyota', 'BMW', 'Mazda'];
            $cars = [['RAV4','Corolla','Yaris','Corolla','Camry'],['X5','X6','3 series','1 series'],['Mazda 3','CX-5','MX-5']];

            $selectedAutomakerIndex = array_rand($automakers);

            $selectedCarIndex = array_rand($cars[$selectedAutomakerIndex]);

            $car->car_name = $cars[$selectedAutomakerIndex][$selectedCarIndex];
            $car-> automaker = $automakers[$selectedAutomakerIndex];

        });
    }
}
