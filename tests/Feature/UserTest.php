<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    public function test_can_create_user(): void
    {
        $user = User::factory()->create();
        $this->assertDatabaseHas("users", [
            "id" => $user->id,
    ]);
    }

    public function test_cannot_create_user_with_duplicated_email(): void
    {
        $this->expectException(\Illuminate\Database\UniqueConstraintViolationException::class);
        $user = User::factory()->create(["email"=> "test@example.com"]);
        $user = User::factory()->create(["email"=> "test@example.com"]);
    }
}