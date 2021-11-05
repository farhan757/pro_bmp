<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-color: #B0BEC5;
            background-repeat: no-repeat
        }

        .card0 {
            box-shadow: 0px 4px 8px 0px #757575;
            border-radius: 10px;
        }

        .card2 {
            margin: 0px 40px;
            border-radius: 10px;
        }

        .logo {
            width: 60px;
            height: 35px;
            margin-top: 20px;
            margin-left: 35px;
            border-radius: 10px;
        }

        .image {
            width: 550px;
            height: 350px;
            border-radius: 10px;
        }

        .border-line {
            border-right: 1px solid #EEEEEE
            
        }

        .line {
            height: 1px;
            width: 45%;
            background-color: #E0E0E0;
            margin-top: 10px
        }

        .or {
            width: 10%;
            font-weight: bold
        }

        .text-sm {
            font-size: 14px !important
        }

        ::placeholder {
            color: #BDBDBD;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #BDBDBD;
            font-weight: 300
        }

        input,
        textarea {
            padding: 10px 12px 10px 12px;
            border: 1px solid lightgrey;
            border-radius: 2px;
            margin-bottom: 5px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
            border-radius: 10px;
        }

        a {
            color: inherit;
            cursor: pointer
        }

        .btn-blue {
            background-color: #1A237E;
            width: 150px;
            color: #fff;
            border-radius: 5px
        }

        .btn-blue:hover {
            background-color: aqua;
            cursor: pointer
        }

        .bg-blue {
            color: #fff;
            background-color: #1A237E;
            border-radius: 10px;
        }

        .mb-3 {
            border-radius: 10px;
        }
        @media screen and (max-width: 991px) {
            .logo {
                margin-left: 0px
            }

            .image {
                width: 400px;
                height: 220px
            }

            .border-line {
                border-right: none
            }

            .card2 {
                border-top: 1px solid #EEEEEE !important;
                margin: 0px 15px;
                border-radius: 10px;
            }
        }    
    </style>    
    <title>e-Submition</title>
</head>
<body>
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">                    
                    <div class="row px-3 justify-content-center mt-5 mb-5 border-line"> <img src="logo_bmp2.jpeg" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h3 class="mb-0 mr-4 mt-2">e - Pengkinian</h3>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> 
                        <div class="line"></div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Nomor Polis</h6>
                            </label> <input class="mb-3" type="text" name="nopol" placeholder="Enter a valid Nomor Polis" required> </div>
                            @error('nopol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror                            
                        <div class="row px-3"> <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label> <input type="password" class="mb-3" name="password" placeholder="Enter password" required> </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        <div class="row px-3 mb-4">
                            <!--<div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input" {{ old('remember') ? 'checked' : '' }}> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div>-->
                        </div>
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>                    
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>    
</body>
</html>