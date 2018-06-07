@extends('layouts.app')

@section('content')

    <h1>id = {{ $tasklist->id }} のタスクの詳細ページ</h1>
    
    <p>タイトル: {{ $tasklist->status }}</p>
    <p>タスクリスト{{ $tasklist->content }}</p>
    
    {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id]) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
@endsection