<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employe>
 */
class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_emp' => fake()->unique()->randomDigit(),
            'nom_emp' => fake()->lastName(),
            'prenom_emp' => fake()->firstName(),
            'email_emp' => fake()->email(),
            'sexe_emp' => fake()->randomElement(["F","M"]),
            'tele_emp' => fake()->phoneNumber(),
            'sitFam_emp' => fake()->randomElement(["Marié(e)","Divorcé(e)","Veuf(ve)","Célibataire"]),
            'cin_emp' => fake()->randomElement(["BL123434","GF2657465","RT565476","ZS145367","FG3567465","RL3452654"]),
            'dip_emp' => fake()->randomElement(["Ingénieur","Opérateur","Technicien","Chef de projet"]),
        ];
    }
}
