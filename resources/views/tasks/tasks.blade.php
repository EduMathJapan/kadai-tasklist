@if (count($tasks) > 0)
    <ul class="list-unstyled">
        @foreach ($tasks as $task)
            <li class="media mb-3">
                    </div>
                    <div>
                        {{-- タスク内容 --}}
                        <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
                    </div>
                    <div>
                        @if (Auth::id() == $task->user_id)
                            {{-- 投稿削除ボタンのフォーム --}}
                            {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    
@endif

 
    
    @if (count($tasks)>0)
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>id</th>
                <th>ステータス</th></th>
                <th>タスク</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{!! link_to_route('tasks.show', $task ->id, ['task'=> $task->id]) !!}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    @endif
    
 
    
 {{ $tasks->links() }}
    
{!! link_to_route('tasks.create', '新規タスクの登録',[],['class' =>'btn btn-primary']) !!}

<div class ='collapse navbar-collapse' id='nav-bar'>
    <ul class = 'navbar-nav mr-auto'></ul>
    <ul class= 'navbar-nav'>
        {{-- タスク作成 へのリンク --}}
        <li class = 'nav-item'>{!! link_to_route('tasks.create','新規タスクの登録',[],['class'=>'nav-link']) !!}</li>

    </ul>
</div>