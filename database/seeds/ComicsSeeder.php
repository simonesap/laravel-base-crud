<?php

use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        // dd($comics);
        foreach ( $comics as $comic ) {

            $new_comics = new Comic();

            $new_comics->fill($comic);

            $new_comics->save();
    }
}

}
