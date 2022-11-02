@extends('emails.layouts.master')

@section('content')
    <div>
        <h3>件名：{ システム名 -{{ config('app.name') }}}
            新規利用者の登録が完了しました
            <br>
        </h3>
        <br>
        施設利用者様の新規登録が完了いたしましたのでご連絡申し上げます。
        <br>
        <br>
        ＜登録内容＞
    </div>
    <div>
        メールアドレス：{{ $customer->email }}
    </div>
    <div>
        電話番号：{{ $customer->phone }}
    </div>
@endsection
