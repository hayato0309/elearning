@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="">
                <h2>Edit a word</h2>
            </div>
            <div class="card p-3">
                <div class="container">
                    <h3>Category : {{ $category->category_name }}</h3>
                    <form action="{{ route('update.word', ['id'=> $category->id, 'word_id' => $word->id]) }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="">English Word</label>
                            <input name="word" type="text" class="form-control" id="" placeholder="English Word" required value="{{ $word->word }}">
                        </div>
                        <div class="form-group">
                            <label for="">Answer</label>
                            <input name="answer" type="text" class="form-control" placeholder="Meaning" required value="{{ $word->answer }}">
                        </div>
                        <div class="form-group">
                            <label for="">Choice01</label>
                            <input name="choice01" type="text" class="form-control" placeholder="Choice01" required value="{{ $word->choice01 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Choice02</label>
                            <input name="choice02" type="text" class="form-control" placeholder="Choice02" required value="{{ $word->choice02 }}">
                        </div>
                        <div class="form-group">
                            <label for="">Choice03</label>
                            <input name="choice03" type="text" class="form-control" placeholder="Choice03" required value="{{ $word->choice03 }}">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="mr-1"><button type="submit" class="btn btn-primary">Submit</button></div>
                                <a href="{{ route('words', ['id' => $category->id, 'word_id' => $word->id]) }}" class="btn btn-secondary" role="button">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection