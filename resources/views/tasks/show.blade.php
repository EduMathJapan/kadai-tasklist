@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1> id = {{ $task->id }} のタスク詳細ページ</h1>

<table class = 'table table-bordered'>
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>タスク内容</th>
        <td>{{$task->content}}</td>
    </tr>
</table>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method'=> 'delete'] !!}
    {!! From::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection