<?php

use Illuminate\Database\Seeder;
use App\Models\User as User;
use App\Models\Bid as Bid;
use App\Models\Comment as Comment;

class CommentTableSeeder extends Seeder {

	public function run()
	{
		$catalina = User::whereEmail('catalinaperez@catalina.com')->firstOrFail();
		$mariano = User::whereEmail('marianopetrucci@mariano.com')->firstOrFail();
		$sergio = User::whereEmail('sergioramirez@sergioramirez.com')->firstOrFail();
		$carlos = User::whereEmail('carlosmaidana@carlos.com')->firstOrFail();
		$mabel = User::whereEmail('mabelrimano@mabel.com')->firstOrFail();

		Bid::search('guantes')->firstOrFail()->comments()->saveMany([
				new Comment([
					'body'       => '¿Cuantas veces fue usado',
					'user_id' => $catalina->id,
					'response' => 'varias veces'
					]),
				new Comment([
					'body'       => 'hola, esta roto?',
					'user_id' => $mariano->id,
					'response' => 'no'
					]),
				new Comment([
					'body'       => 'buenas, tenes el par?',
					'user_id' => $sergio->id,
					'response' => 'no'
					])
				]);
		Bid::search('llama')->firstOrFail()->comments()->saveMany([
				new Comment([
					'body'       => 'buenas, tiene nombre?',
					'user_id' => $carlos->id,
					'response' => 'si, se llama llama'
					]),
				new Comment([
					'body'       => 'hola, sabes cuantos años tiene?',
					'user_id' => $sergio->id,
					'response' => 'no, mas de dos seguro.'
					])
				]);
		Bid::search('kriptonita')->firstOrFail()->comments()->saveMany([
				new Comment([
					'body'       => 'hola!, es de verdad?',
					'user_id' => $mariano->id,
					'response' => 'si'
					]),
				new Comment([
					'body'       => 'disculpame, alcanza para matar a superman?',
					'user_id' => $sergio->id
					])
				]);
		Bid::search('aceite')->firstOrFail()->comments()->saveMany([
				new Comment([
					'body'       => 'Hola, es aceite viejo?',
					'user_id' => $carlos->id,
					'response' => 'no'
					]),
				new Comment([
					'body'       => 'buenas, como lo entregas sin los frascos?',
					'user_id' => $catalina->id
					])
				]);
		Bid::search('espejo')->firstOrFail()->comments()->saveMany([
				new Comment([
					'body'       => 'Hola, podrias subir una foto del espejo?',
					'user_id' => $sergio->id,
					'response' => 'no'
					]),
				new Comment([
					'body'       => 'hola, esta roto?',
					'user_id' => $catalina->id,
					'response' => 'no, esta sanito'
					]),
				new Comment([
					'body'       => 'buenas, es nuevo?',
					'user_id' => $mabel->id
					])
				]);


	}

}
