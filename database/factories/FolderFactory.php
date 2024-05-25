<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Folder>
 */
class FolderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'parent_id' => null
        ];
    }

    public function parent(int $id): array
    {
        return [
            'parent_id' => $id
        ];
    }
}
