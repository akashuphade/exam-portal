<?php

use App\Models\Category;
use App\Models\Question;
use App\Models\QuestionChoices;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // Create 10 records of customers
        factory(Category::class, 10)->create()->each(function ($category) {

            // Seed the relation with Many questions
            $question = factory(Question::class, 3)->make();
            $category->questions()->saveMany($question);

            //Seed the relation with choices
             $question->each(function($question) {
                $choices = factory(QuestionChoices::class, 4)->make();
                $question->choices()->saveMany($choices);
             });

        });
    }
}
