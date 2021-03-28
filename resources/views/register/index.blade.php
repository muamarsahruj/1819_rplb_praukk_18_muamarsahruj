<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon.png">
    <title>Register | E-Electricity</title>
</head>
<body style="background-color: #3259C7">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <div class="container">
        <div class="row justify-content-center my-auto">
            <div class="col-lg-10 col-md-9 col-xl-10 my-5">
                <div class="card bg-gray-200 shadow my-5" style="border-radius: 40px; width: 681px; height: 659px; position: relative; left: 170px; top: 50px;">
                    <div class="card-body">
                        <!-- <div class="card bg-green w-50 mx-auto"> -->
                            <h1 class="text-center text-dark h5 my-auto py-2"><img src="img/logo.png" alt="" style="width: 100px"></h1>
                            <h1 class="text-center" style="font-size: 24px; position: relative; bottom: 20px;">E-Electricity</h1>
                        <!-- </div> -->
                        <div class="card-body">
                            <form action="">
                                <div class="form-group">
                                    <label for="nama" class="text-dark" style="position: relative; left: 130px;">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama..." aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 130px;">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="text-dark" style="position: relative; left: 130px;">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Masukkan Email..." aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 130px;">
                                </div>
                                <div class="form-group">
                                    <label for="username" class="text-dark" style="position: relative; left: 130px;">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username..." aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 130px;">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="text-dark" style="position: relative; left: 130px;">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password..." aria-describedby="helpId" style="width: 350px; height: 45px; background-color: #E8E8E8; border-radius: 10px; position: relative; left: 130px;">
                                </div>
                                <div class="form-group mt-4 text-center">
                                    <button type="submit" class="btn text-white form-control" style="background-color: #3259C7; width: 285px; height: 40px; border-radius: 10px;">Sign up</button>
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