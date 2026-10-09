<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

it('user can add a product to the cart', function () {
    $user = User::factory()->create();
    $product = Product::firstOrCreate([
        'name' => '911 GT3 RS',
    ], [
        'category' => 'sportcar',
        'description' => 'Sports coupe',
        'image' => 'GT3 RS.PNG',
        'price' => 2450000,
    ]);

    $response = $this->actingAs($user)
        ->post('/cart', [
            'product_id' => $product->id,
        ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('carts', [
        'user_id' => $user->id,
        'product_id' => $product->id,
        'qty' => 1,
    ]);

    expect(Cart::where('user_id', $user->id)->count())->toBe(1);
});
