<?php

namespace Database\Factories;

use App\Models\BookCopy;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    public function definition()
    {
        return [
            'book_copy_id' => fn () => BookCopy::factory()->create()->id,
            'user_id' => fn () => User::factory()->create()->id,
            'borrowed_from' => now(),
            'due_date' => now()->addDays(rand(10, 20)),
            'returned_at' => now()->addDays(rand(1, 9)),
        ];
    }
}
