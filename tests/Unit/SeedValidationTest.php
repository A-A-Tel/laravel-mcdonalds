<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class SeedValidationTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_passhash(): void
    {
        $admin_user = User::find(1);

        self::assertNotNull($admin_user);
        self::assertTrue(Hash::check('12345', $admin_user->password));
    }
}
