@extends('layouts.application')

@section('title', '編集')

@section('content')
  <form action="/articles/{{$article->id}}" method="post">
    {{ csrf_field() }}
    <div>
      <label for="title">タイトル</title>
      <input type="text" name="title" placement="記事のタイトルを入れる" value="{{$article->title}}">
    </div>
    <div>
      <label for="body">内容</label>
      <textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる"> {{$article->body}}</textarea>
    </div>
    <div>
      <!-- 　　いれないとエラー -->
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新">
    </div>
  </form>
@endsection
