@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Word List</h2>
        <h5 class="d-flex align-items-center ml-3">Category : {{ $category->category_name }}</h5>
        <div class="col text-right">
            <a href="{{ route('add.word', ['id' => $category->id]) }}">Add a new word</a>
        </div>
    </div>
    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Word</th>
                <th scope="col">Answer</th>
                <th scope="col">Choice01</th>
                <th scope="col">Choice02</th>
                <th scope="col">Choice03</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @php
                $number = 1;
            @endphp
            @foreach($words as $word)
            <tr>
                <th scope="row">{{ $number }}</th>
                <td>{{ $word->word }}</td>
                <td>{{ $word->answer }}</td>
                <td>{{ $word->choice01 }}</td>
                <td>{{ $word->choice02 }}</td>
                <td>{{ $word->choice03 }}</td>
                <td class="row">
                    <a href="{{ route('edit.word', ['id' => $category->id, 'word_id' => $word->id]) }}" class="btn btn-primary mr-1">Edit</a>
                    <a href="{{ route('destroy.word', ['id' => $category->id, 'word_id' => $word->id]) }}" class="btn btn-secondary">Delete</a>
                </td>
            </tr>
            @php
                $number++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection