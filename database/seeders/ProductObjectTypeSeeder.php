<?php

namespace Database\Seeders;

use App\Models\ProductObjectType;
use Illuminate\Database\Seeder;

class ProductObjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productobjecttype::create( [
            'id'=>1,
            'object_type_name'=>'Album',
            'created_at'=>'2021-06-24 08:34:43',
            'updated_at'=>'2021-06-26 21:34:07'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>2,
            'object_type_name'=>'Book',
            'created_at'=>'2021-06-26 21:34:30',
            'updated_at'=>'2021-06-26 21:35:02'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>3,
            'object_type_name'=>'Drink',
            'created_at'=>'2021-06-26 21:35:13',
            'updated_at'=>'2021-06-26 21:35:13'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>4,
            'object_type_name'=>'Food',
            'created_at'=>'2021-06-26 21:35:22',
            'updated_at'=>'2021-06-26 21:35:22'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>5,
            'object_type_name'=>'Game',
            'created_at'=>'2021-06-26 21:35:31',
            'updated_at'=>'2021-06-26 21:35:31'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>6,
            'object_type_name'=>'Movie',
            'created_at'=>'2021-06-26 21:35:43',
            'updated_at'=>'2021-06-26 21:35:43'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>7,
            'object_type_name'=>'Product',
            'created_at'=>'2021-06-26 21:35:52',
            'updated_at'=>'2021-06-26 21:35:52'
            ] );
            
            
                        
            ProductObjectType::create( [
            'id'=>8,
            'object_type_name'=>'Song',
            'created_at'=>'2021-06-26 21:36:01',
            'updated_at'=>'2021-06-26 21:36:01'
            ] );
            
            
                        
            Productobjecttype::create( [
            'id'=>9,
            'object_type_name'=>'TV Show',
            'created_at'=>'2021-06-26 21:36:13',
            'updated_at'=>'2021-06-26 21:36:13'
            ] );
            
            
    }
}
