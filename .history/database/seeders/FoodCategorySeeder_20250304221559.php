<?php

namespace Database\Seeders;


use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_categories')->insert([
            [
                'id' => Str::uuid()->toString(),
                'name' => 'Ca',
                'ryderid' => '122775d8-340e-4a70-9332-83677dd231e2',
                'pickup_address' => '123 Pickup Street',
                'pickup_phone' => '1234567890',
                'pickup_state' => 'Lagos',
                'receiver_name' => 'John Doe',
                'receiver_email' => 'johndoe@example.com',
                'receiver_address' => '456 Receiver Avenue',
                'receiver_phone' => '0987654321',
                'receiver_state' => 'Abuja',
                'package_type' => 'Documents',
                'package_weight' => '2kg',
                'package_qty' => '1',
                'comment' => 'Handle with care.',
                'charges' => '5000',
                'departureTime' => now()->addHours(2)->toDateTimeString(),
                'arrivalTime' => now()->addHours(5)->toDateTimeString(),
                'status' => 'In Transit',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => '51de59ac-b7d7-425e-ab09-40b092089a96',
                'ryderid' => '579adaf1-2332-4141-b881-42cf4c4934a4',
                'pickup_address' => '789 Another Street',
                'pickup_phone' => '1122334455',
                'pickup_state' => 'Kano',
                'receiver_name' => 'Jane Smith',
                'receiver_email' => 'janesmith@example.com',
                'receiver_address' => '321 Drop Lane',
                'receiver_phone' => '5566778899',
                'receiver_state' => 'Port Harcourt',
                'package_type' => 'Electronics',
                'package_weight' => '5kg',
                'package_qty' => '3',
                'comment' => 'Fragile.',
                'charges' => '12000',
                'departureTime' => now()->addDay()->toDateTimeString(),
                'arrivalTime' => null,
                'status' => 'Pending',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'b39e2eae-9dbc-4740-b8fe-fae33d942d22',
                'ryderid' => 'ab32f860-9e04-43b5-989e-dbe74da16dc6',
                'pickup_address' => '89 Transit Way',
                'pickup_phone' => '5566778899',
                'pickup_state' => 'Anambra',
                'receiver_name' => 'Bruce Wayne',
                'receiver_email' => 'brucewayne@example.com',
                'receiver_address' => '456 Gotham Lane',
                'receiver_phone' => '9900112233',
                'receiver_state' => 'Abuja',
                'package_type' => 'Machinery',
                'package_weight' => '20kg',
                'package_qty' => '1',
                'comment' => 'Requires assembly.',
                'charges' => '20000',
                'departureTime' => now()->addDay()->toDateTimeString(),
                'arrivalTime' => now()->addDays(2)->toDateTimeString(),
                'status' => 'Pending',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'b6e0c47a-754f-47d5-a647-67be8a319d28',
                'ryderid' => 'ab32f860-9e04-43b5-989e-dbe74da16dc6',
                'pickup_address' => '12 Fast Track',
                'pickup_phone' => '6655443322',
                'pickup_state' => 'Cross River',
                'receiver_name' => 'Clark Kent',
                'receiver_email' => 'clarkkent@example.com',
                'receiver_address' => '78 Krypton Avenue',
                'receiver_phone' => '1122334455',
                'receiver_state' => 'Oyo',
                'package_type' => 'Furniture',
                'package_weight' => '50kg',
                'package_qty' => '2',
                'comment' => 'Large items.',
                'charges' => '25000',
                'departureTime' => now()->addHours(6)->toDateTimeString(),
                'arrivalTime' => now()->addHours(12)->toDateTimeString(),
                'status' => 'Dispatched',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'b39e2eae-9dbc-4740-b8fe-fae33d942d22',
                'ryderid' => 'fd3f8ca6-e941-45d1-946b-9aa1f66a25b4',
                'pickup_address' => '34 Expressway Blvd',
                'pickup_phone' => '9988776655',
                'pickup_state' => 'Akwa Ibom',
                'receiver_name' => 'Diana Prince',
                'receiver_email' => 'dianaprince@example.com',
                'receiver_address' => '56 Themyscira Lane',
                'receiver_phone' => '6677889900',
                'receiver_state' => 'Ekiti',
                'package_type' => 'Artifacts',
                'package_weight' => '15kg',
                'package_qty' => '5',
                'comment' => 'Historical importance.',
                'charges' => '18000',
                'departureTime' => now()->addHours(8)->toDateTimeString(),
                'arrivalTime' => now()->addHours(15)->toDateTimeString(),
                'status' => 'In Transit',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'd886ff06-f4b2-4404-aec4-caa1ff4d484a',
                'ryderid' => null,
                'pickup_address' => '78 Cargo Street',
                'pickup_phone' => '1122113344',
                'pickup_state' => 'Ondo',
                'receiver_name' => 'Barry Allen',
                'receiver_email' => 'barryallen@example.com',
                'receiver_address' => '12 Speedster Way',
                'receiver_phone' => '2233445566',
                'receiver_state' => 'Osun',
                'package_type' => 'Industrial Parts',
                'package_weight' => '100kg',
                'package_qty' => '10',
                'comment' => 'Heavy machinery.',
                'charges' => '40000',
                'departureTime' => now()->addDay()->toDateTimeString(),
                'arrivalTime' => now()->addDays(2)->toDateTimeString(),
                'status' => 'Pending',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'd886ff06-f4b2-4404-aec4-caa1ff4d484a',
                'ryderid' => 'fd3f8ca6-e941-45d1-946b-9aa1f66a25b4',
                'pickup_address' => '89 Distribution Circle',
                'pickup_phone' => '5566778899',
                'pickup_state' => 'Abia',
                'receiver_name' => 'Hal Jordan',
                'receiver_email' => 'haljordan@example.com',
                'receiver_address' => '78 Lantern Street',
                'receiver_phone' => '9988776655',
                'receiver_state' => 'Delta',
                'package_type' => 'Gadgets',
                'package_weight' => '8kg',
                'package_qty' => '12',
                'comment' => 'Small electronics.',
                'charges' => '10000',
                'departureTime' => now()->addHours(5)->toDateTimeString(),
                'arrivalTime' => now()->addHours(10)->toDateTimeString(),
                'status' => 'Dispatched',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid()->toString(),
                'userid' => 'b6e0c47a-754f-47d5-a647-67be8a319d28',
                'ryderid' => 'ab32f860-9e04-43b5-989e-dbe74da16dc6',
                'pickup_address' => '12 Fastline Street',
                'pickup_phone' => '2233445566',
                'pickup_state' => 'Bayelsa',
                'receiver_name' => 'Arthur Curry',
                'receiver_email' => 'arthurcurry@example.com',
                'receiver_address' => '99 Atlantis Avenue',
                'receiver_phone' => '3344556677',
                'receiver_state' => 'Rivers',
                'package_type' => 'Marine Equipment',
                'package_weight' => '70kg',
                'package_qty' => '7',
                'comment' => 'Waterproof items.',
                'charges' => '50000',
                'departureTime' => now()->addHours(7)->toDateTimeString(),
                'arrivalTime' => now()->addHours(14)->toDateTimeString(),
                'status' => 'In Transit',
                'photo' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
