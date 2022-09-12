@extends('layouts.app')

@section('title')
Обновления записи
@endsection

@section('content')
<h1>Обновления записи</h1>

<form action="{{route('contact-update-submit', $data->id)}}" method="post">
  @csrf 

  <div class="form-group">
    <label for="name">Введите имя</label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
  </div>
  <div class="form-group">
    <label for="email">Введите email</label>
    <input type="text" name="email" value="{{$data->email}}"placeholder="Введите email" id="email" class="form-control">
  </div>
  <div class="form-group">
    <label for="subject">Тема сообщения</label>
    <input type="text" name="subject" value="{{$data->subject}}" placeholder="Тема сообщения" id="subject" class="form-control">
  </div>
  <div class="form-group">
    <label for="message">Сообщения</label>
    <textarea name="message" id="message" class="form-control" placeholder="{{$data->message}}"></textarea>
    <button type="submit" class="btn btn-success"> Обновить</button>  
  </div>
</form>

@endsection