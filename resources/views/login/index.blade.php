<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Login | E-Electricity</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="background-color: #3259C7">
    
    
    <div class="container">
        <div class="row justify-content-center my-auto">
            <div class="col-lg-10 col-md-9 col-xl-10 my-5">
                <div class="card bg-gray-200 shadow my-5" style="border-radius: 40px; width: 582px; height: 506px; position: relative; left: 170px; top: 130px;">
                    <div class="card-body">
                        <!-- <div class="card bg-green w-50 mx-auto"> -->
                            <h1 class="text-center text-dark h5 my-auto py-2"><img src="img/logo.png" alt="" style="width: 100px"></h1>
                            <h1 class="text-center" style="font-size: 24px; position: relative; bottom: 20px;">E-Electricity</h1>
                        <!-- </div> -->
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="username" class="text-dark" style="position: relative; left: 70px;">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username..." 
                                    aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 70px;">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-dark" style="position: relative; left: 70px;">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password..." aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 70px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mt-4 text-center">
                                    <button type="submit" class="btn text-white form-control" style="background-color: #3259C7; width: 285px; height: 40px; border-radius: 10px;">Login</button>
                                </div>
                                <div class="form-group text-center mt-4">
                                    <a href="/register" class="font-weight-bold text-dark">Belum Punya Akun ?</a>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>