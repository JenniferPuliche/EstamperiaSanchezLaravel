<?php
use App\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class productitos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = factory(App\Product::class)->make();
        $product->save();

        factory(App\Product::class)->create();
        factory(App\Product::class)->times(20)->create();
    }
}
