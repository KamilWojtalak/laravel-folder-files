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

    public function folder(int $folderId)
    {
        return $this->state(function (array $attributes) use ($folderId) {
            return [
                'folder_id' => $folderId,
            ];
        });
    }
}
