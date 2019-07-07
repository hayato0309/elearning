<?php

namespace App\Http\Controllers;

use App\Word;
use App\Category;
use App\Choice;
use Illuminate\Http\Request;


class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $words = Word::where('category_id', $id)->get();
        $category = Category::find($id);
        return view('/words/words', compact('words', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        $category = Category::find($id);
        return view ('/words/addWord', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $word = new Word();
        $word->word = $request->input('word');
        $word->answer = $request->input('answer');
        $word->choice01 = $request->input('choice01');
        $word->choice02 = $request->input('choice02');
        $word->choice03 = $request->input('choice03');
        $word->category_id = $id;
        $word->user_id = auth()->user()->id;
        $word->save();
        
        return redirect()->route('words', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function show(Word $word)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $word_id)
    {
        $category = Category::find($id);
        $word = Word::find($word_id);
        return view('/words/editWord', compact('category', 'word'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $word_id)
    {
        $word = Word::find($word_id);
        $word->word = $request->input('word');
        $word->answer = $request->input('answer');
        $word->choice01 = $request->input('choice01');
        $word->choice02 = $request->input('choice02');
        $word->choice03 = $request->input('choice03');
        $word->category_id = $id;
        $word->user_id = auth()->user()->id;
        $word->save();
        
        return redirect()->route('words', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Word  $word
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $word_id)
    {
        $word = Word::find($word_id);
        $word->delete();

        return redirect()->route('words', compact('id'));
    }
}
