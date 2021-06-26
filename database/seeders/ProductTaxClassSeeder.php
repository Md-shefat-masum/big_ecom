<?php

namespace Database\Seeders;

use App\Models\ProductTaxClass;
use Illuminate\Database\Seeder;

class ProductTaxClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductTaxClass::create([
            'id' => 1,
            'tax_class_name' => 'Default Tax Class',
            'created_at' => '2021-06-26 21:27:04',
            'updated_at' => '2021-06-26 21:27:04'
        ]);

        Producttaxclass::create([
            'id' => 2,
            'tax_class_name' => 'Non-Taxable Products',
            'created_at' => '2021-06-26 21:27:15',
            'updated_at' => '2021-06-26 21:27:15'
        ]);

        Producttaxclass::create([
            'id' => 3,
            'tax_class_name' => 'Shipping',
            'created_at' => '2021-06-26 21:27:30',
            'updated_at' => '2021-06-26 21:27:30'
        ]);

        Producttaxclass::create([
            'id' => 4,
            'tax_class_name' => 'Gift Wrapping',
            'created_at' => '2021-06-26 21:27:42',
            'updated_at' => '2021-06-26 21:27:42'
        ]);
    }
}
