<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
use App\Models\Sale as Sale;
use App\Models\Bid as Bid;
use Carbon\Carbon as Carbon;

class SaleTableSeeder extends Seeder {

	public function run()
	{

		$bid_1 = Bid::whereTitle('Aceite y Vinagre')->firstOrFail();
		Sale::create([
			'offer_id'=> $bid_1->offers->first()->id,
			'bid_id' => $bid_1->id,
			'payed' => true,
			'created_at' => Carbon::now()->subDays(2),
			]);

		$bid_2 = Bid::whereTitle('Vino')->firstOrFail();
		Sale::create([
			'offer_id'=> $bid_2->offers->first()->id,
			'bid_id' => $bid_2->id,
			'payed' => true,
			'created_at' => Carbon::now()->subDays(3),
			]);

		$bid_3 = Bid::whereTitle('Cajon')->firstOrFail();
		Sale::create([
			'offer_id'=> $bid_3->offers()->first()->id,
			'bid_id'=> $bid_3->id,
			'payed' => true,
			'created_at' => Carbon::now()->subDays(4),
			]);

		$bid_4 = Bid::whereTitle('Caja')->firstOrFail();
		Sale::create([
			'offer_id'=> $bid_4->offers()->first()->id,
			'bid_id'=> $bid_4->id,
			'payed' => true,
			'created_at' => Carbon::now()->subDays(5),
		]);

		$bid_5 = Bid::whereTitle('Celular')->firstOrFail();
		Sale::create([
			'offer_id'=> $bid_5->offers()->first()->id,
			'bid_id'=> $bid_5->id,
			'payed' => true,
			'created_at' => Carbon::now()->subDays(6),
		]);
	}
}
