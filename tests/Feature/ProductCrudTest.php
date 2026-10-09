<?php

use App\Models\User;

it('admin can create and view a product', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/products')
        ->assertOk();

    $this->actingAs($user)
        ->post('/products', [
            'name' => 'Cayman GT4 RS',
            'category' => 'sportcar',
            'description' => 'Test product',
            'price' => 250000000,
        ])
        ->assertRedirect('/products');

    $this->assertDatabaseHas('products', [
        'name' => 'Cayman GT4 RS',
        'category' => 'sportcar',
    ]);
});
