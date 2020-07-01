<?php

use App\Models\Question;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factory(Question::class, 50)->create();
    }
}
