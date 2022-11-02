@extends('emails.layouts.master')

@section('content')
    <p>件名：【請求額確定】{{ formatDatetime($schedule->serve_done_datetime) }}_{{ $schedule->facility->name }} 利用の請求額が確定しました </p>
    <p>下記利用予約の請求額が確定しました</p>
    <p>詳細は以下をご確認ください。</p>
    <p>■ご予約内容 
        <br>【予約日時】{{ formatDatetime($schedule->schedule_datetime) }}  
        <br>【施設名】{{ $schedule->facility->name }} 
        <br>【金額】{{ number_format($schedule->price) }}円 
    </p>
@endsection
