<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>$this->faker->sentence(),
            'vacancy'=>$this->faker->numberBetween(1,150),
            'location'=>$this->faker->city(),
            'job_nature'=>'Full Time',
            'salary'=>'$100-$140',
            'company'=>$this->faker->paragraph(7),
            'description'=>$this->faker->paragraph(7),
            'responsibility'=>$this->faker->paragraph(7),
            'qualifications'=>$this->faker->paragraph(7),
            'date_line'=>'02 jan ,2023'
        ];
    }
}
