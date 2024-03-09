<?php

namespace Database\Factories;

use App\Models\Permission;
use App\Models\Role;
use App\Models\Routes;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoutesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'permission_id'=> function () {
                return Permission::factory()->create()->id;
            },
            'role_id'=> function () {
                return Role::factory()->create()->id;
            },
        ];
    }
}
