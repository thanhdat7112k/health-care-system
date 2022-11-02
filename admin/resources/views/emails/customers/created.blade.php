@extends('emails.layouts.master')

@section('content')
    <div>
        <h3>件名：{ システム名 -{{ config('app.name') }}}
            新規担当者の追加が完了しました
            <br>
        </h3>
        <br>
        施設利用の担当者様の追加登録が完了いたしましたのでご連絡申し上げます。
        <br>
        <br>
        ＜登録内容＞
    </div>
    <div>
        担当者名：{{ $customer->name }}
    </div>
    <div>
        担当者ID：{{ $customer->email }}
    </div>
    <div>
        担当者Tel：{{ $customer->phone }}
    </div>
    <div>
        担当者パスワード: {{ $password }}
    </div>
@endsection
