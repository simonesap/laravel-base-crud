<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = config('comics');

        $comic = Comic::all();

        return view('pages.comics.index', compact('comic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {

        // Validazione
        $request->validate([
            'title - description - thumb - price - series - sale_date - type' => 'required'
        ]);

        // Ascolto
        $data = $request->all();

        $new_data = new Comic();

        $new_data->fill($data);

        $new_data->save();


        return redirect()->route( 'comics.show', $new_data );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // Validazione
        $request->validate([
            'title - description - thumb - price - series - sale_date - type' => 'required'
        ]);

        // Ascolto
        $data = $request->all();

        $comic->fill($data);

        $comic->save();


        return redirect()->route( 'comics.show', $comic );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $com)
    {
        $com->delete();
        return redirect()->route('comics.index', $com)->with("message", "hai eliminato con successo: $com->title");
    }
}
