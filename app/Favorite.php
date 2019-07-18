<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public function fruit(){
        $favorite = collect([
            ['name' => 'Novy', 'fruits' => ['Apple', 'Orange', 'Pears', 'Kiwi']],
            ['name' => 'Bayu', 'fruits' => ['Coconut', 'Star Fruit']],
            ['name' => 'Reza', 'fruits' => ['Watermelon']],
            ['name' => 'Putri', 'fruits' => ['Banana', 'Apple', 'Orange']],
        ]);

        return $favorite;
    }
}