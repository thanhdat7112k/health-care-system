@extends('emails.layouts.master')

@section('content')
    <div>
        <h3>件名：【予約実施確認】施設利用の実施確認</h3>
    </div>
    <div>
        {{ $schedule->facility->name }} 様
    </div>
    <div>
        {{ $schedule->schedule_datetime }} の利用予約が実施されました。
    </div>
    <div>
        以下の内容で実施をいたしましたので、
        今一度ご確認くださいませ。
    </div>
    <div>
        ■ご予約内容
    </div>
    <div>
        【予約日時】{{ formatDatetime($schedule->schedule_datetime) }}
        <br>
        【金額】　{{ number_format($schedule->price) }}円
    </div>
    <div>
        【施術者名/電話番号】
        <br>
        ・{{ $schedule->user->name }} / {{ $schedule->user->phone }}
    </div>
    <div>
        【メニュー/金額】
        <ul>
            @foreach($schedule->scheduleMenus as $menu)
                <li>
                    {{ $menu->name }} / {{ number_format($menu->price) }}¥
                </li>
            @endforeach
        </ul>
    </div>
    <div>
        【備考】
        <br>
        {{ $schedule->note }}
    </div>
@endsection
