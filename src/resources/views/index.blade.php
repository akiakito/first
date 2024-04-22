@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
<div class="success message">
    <div class="success_message_2">
        Todoを作成しました
    </div>
</div>
<div class="whole">
    <form class="form">
        <div class="text">
            <input class="text__box" type="text"name="text__box">
        </div>
        <div class="button">
        <button class="button__create"type="button">作成</button>
        </div>
    </form>
    <div class="Todo__list">
        <table class="Todo__table">
        <tr class="Todo__tr">
        <th class="Todo">Todo</th>
        </tr>
        <tr class="test__tr">
        <td class="test__td">
        <form class="test__form">
        <div class="test_div">
        <input class="test__input"type="text"name="text"value="test">
        </div>
        </form>
        </td>
        <td class="test__update">
        <form class="test__update__form">
        <div class="test__update__div">
        <button class="test__update__button"type="submit">更新</button>
        </div>
        </form>
        </td>
        <td class="test__delete">
        <form class="test__delete__form">
        <div class="test__delete__div">
        <button class="test__delete__button"type="submit">削除</button>
        </div>
        </form>
        </td>
        </tr>
        <tr class="test__tr">
        <td class="test__td">
        <form class="test__form">
        <div class="test_div">
        <input class="test__input"type="text"name="text"value="test2">
        </div>
        </form>
        </td>
        <td class="test__update">
        <form class="test__update__form">
        <div class="test__update__div">
        <button class="test__update__button"type="submit">更新</button>
        </div>
        </form>
        </td>
        <td class="test__delete">
        <form class="test__delete__form">
        <div class="test__delete__div">
        <button class="test__delete__button"type="submit">削除</button>
        </div>
        </form>
        </td>
        </tr>
        </table>
    </div>
</div>
@endsection