@extends('admin::index')

@section('form')
    <h1>Password Reset</h1>
    <form action="" method="post" style="width:400px">
        <div class="mail-address" style="margin-bottom:10px; display:flex; justify-content: space-between" >
            <label for="">Old Password</label>
            <input type="text" placeholder="Enter old password" style="height:20px; width:250px"  >
        </div>
        <div class="new password" style="margin-bottom:10px; display:flex; justify-content: space-between" >
            <label for="" >New Password</label>
            <input type="password" placeholder="Enter your new pasword" style="height:20px; width:250px">
        </div>
        <div class="comfirm password" style="margin-bottom:10px; display:flex; justify-content: space-between" >
            <label for="" >Confirm pasword</label>
            <input type="password" placeholder="Confirm pasword" style="height:20px; width:250px">
        </div>

        <input type="submit" value="Login">
    </form>
@endsection
