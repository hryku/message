@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>

    {!! link_to_route('messages.create', '新規メッセージを投稿する', null, ['class' => 'btn btn-success']) !!}

    @if (count($messages) > 0)
       <table class="table table-striped">
          <thead>
              <tr>
                <th>id</th>
                <th>タイトル</th>
                <th>メッセージ</th>
              </tr>
          </thead>

          <tbody>
            @foreach ($messages as $message)
              <tr>
                <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td><td>{{ $message->title }}</td>
                <td>{{ $message->content }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
    @endif
    {!! $messages->render() !!}  <!-- paginate 追加-->

@endsection
