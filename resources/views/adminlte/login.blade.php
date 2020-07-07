<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | LOGIN</title>
    <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.min.css') }}">
    <style>
        body{padding-top:20px;}
    </style>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="panel panel-default mt-5">
                    <div class="panel-heading">
                        <h3 class="panel-title">HỆ THỐNG</h3>
                    </div>
                    <div class="panel-body">
                        @error('errorLogin')
                            <x-error-span>{{ $errors->first('errorLogin') }}</x-error-span>
                        @enderror
                        <form accept-charset="UTF-8" role="form" action="{{ route('admin.login') }}" method="POST">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nhập địa chỉ email" name="email" type="text" value="{{ old('email') }}">
                                    @error('email')
                                        <x-error-span>{{ $errors->first('email') }}</x-error-span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nhập mật khẩu" name="password" type="password">
                                    @error('password')
                                        <x-error-span>{{ $errors->first('password') }}</x-error-span>
                                    @enderror
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Nhớ mật khẩu
                                    </label>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng nhập">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
