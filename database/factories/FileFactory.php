<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name,
            'folder_id' => null
        ];
    }

    public function folder(int $id): array
    {
        return [
            'folder_id' => $id
        ];
    }
}
