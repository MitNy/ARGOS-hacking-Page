<?php
    include './db_info.php';
    if(isset($_POST["submit"]))
    {
        
        $userID = $_POST["userID"];
        $password = $_POST["password"];
        $userName = $_POST["userName"];
        $userPhone = $_POST["userPhone"];
        $userBirth = $_POST["userBirth"];
        $userStuNum = $_POST["userStuNum"];
        $userEmail = $_POST["userEmail"];
        
    
        $sql = "INSERT INTO hacking (id,password,name,phone,birth,stuNum,email) VALUES ('$userID','$password','$userName','$userPhone','$userBirth','$userStuNum','$userEmail')";

         if(mysqli_query($conn,$sql)){
             echo "<script>alert('회원가입에 성공했습니다.');history.go(-1);</script>";
             header("location:./login");
         }
        else{
            echo "<script>alert('회원가입에 실패했습니다.');history.go(-1);</script>";
        }

    }
    mysqli_close($conn);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>HACKED BY ARGOS</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <!-- 기존 -->
        <link rel="stylesheet" href="./css/button.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">

        <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- 추가 -->
        <link
            href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css">
        <style>
            @import url('https://fonts.googleapis.com/css?family=Nunito');
            @import url('https://fonts.googleapis.com/css?family=Poiret+One');

            body,
            html {
                height: 100%;
                background-repeat: no-repeat;
                /*background-image: linear-gradient(rgb(12, 97, 33),rgb(104, 145, 162));*/
                background: black;
                position: relative;
            }
            #login-box {
                position: absolute;
                top: 30px;
                left: 50%;
                transform: translateX(-50%);
                width: 400px;
                margin: 0 auto;
                border: 1px solid black;
                background: rgba(48, 46, 45, 1);
                min-height: 600px;
                padding: 20px;
                z-index: 9999;
            }
            #login-box .logo .logo-caption {
                font-family: 'Poiret One', cursive;
                color: white;
                text-align: center;
                margin-bottom: 0;
            }
            #login-box .logo .tweak {
                color: #ff5252;
            }
            #login-box .controls {
                padding-top: 30px;
            }
            #login-box .controls input {
                border-radius: 0;
                background: rgb(98, 96, 96);
                border: 0;
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box .controls input:focus {
                box-shadow: none;
            }
            #login-box .controls input:first-child {
                border-top-left-radius: 2px;
                border-top-right-radius: 2px;
            }
            #login-box .controls input:last-child {
                border-bottom-left-radius: 2px;
                border-bottom-right-radius: 2px;
            }
            #login-box button.btn-custom {
                border-radius: 2px;
                margin-top: 8px;
                background: #ff5252;
                border-color: rgba(48, 46, 45, 1);
                color: white;
                font-family: 'Nunito', sans-serif;
            }
            #login-box button.btn-custom:hover {
                -webkit-transition: all 500ms ease;
                -moz-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                -o-transition: all 500ms ease;
                transition: all 500ms ease;
                background: rgba(48, 46, 45, 1);
                border-color: #ff5252;
            }
            #particles-js {
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: 50% 50%;
                position: fixed;
                top: 0;
                z-index: 1;
            }
        </style>

    </head>
    <body>
        <div class="container">
            <div id="login-box">
                <div class="logo">
                    <img
                        src="./img/argos10.png"
                        class="img img-responsive img-img-thumbnail center-block"/>
                    <h1 class="logo-caption">ARGOS</h1>
                </div>
                <!-- /.logo -->

                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="controls">
                        <input
                            type="text"
                            name="userID"
                            id="userID"
                            placeholder="아이디"
                            class="form-control"/>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="비밀번호"
                            class="form-control"/>
                        <input
                            type="text"
                            name="userName"
                            id="userName"
                            placeholder="이름"
                            class="form-control"/>
                        <input
                            type="text"
                            name="userPhone"
                            id="userPhone"
                            placeholder="휴대폰 번호"
                            class="form-control"/>
                        <input
                            type="text"
                            name="userBirth"
                            id="userBirth"
                            placeholder="생일"
                            class="form-control"/>
                        <input
                            type="text"
                            name="userStuNum"
                            id="userStuNum"
                            placeholder="학번"
                            class="form-control"/>
                        <input
                            type="email"
                            name="userEmail"
                            id="userEmail"
                            placeholder="이메일"
                            class="form-control"/>
                        <input
                            type="submit"
                            name="submit"
                            value="Join"
                            class="form-control"
                            style="color:white;"/>
                    </div>
                    <!-- /.controls -->
                </form>
                <br>
<br><br>
                <br>
                <span class="glyphicon glyphicon-log-in" style="color:white;"></span>
                <a href="./login" style="color:white; text-decoration:none">
                    로그인 화면으로</a>
            </div>
            <!-- /#login-box -->
        </div>
        <!-- /.container -->
        <div id="particles-js"></div>

        <script>
            $.getScript(
"https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js",
function () {
                    particlesJS('particles-js', {
                        "config_demo"  : {
                            "background_color"   : "#b61924",
                            "background_image"   : "",
                            "background_position": "50% 50%",
                            "background_repeat"  : "no-repeat",
                            "background_size"    : "cover",
                            "hide_card"          : false
                        },
                        "interactivity": {
                            "detect_on": "canvas",
                            "events"   : {
                                "onclick": {
                                    "enable": true,
                                    "mode"  : "push"
                                },
                                "onhover": {
                                    "enable": true,
                                    "mode"  : "repulse"
                                },
                                "resize" : true
                            },
                            "modes"    : {
                                "bubble" : {
                                    "distance": 400,
                                    "duration": 2,
                                    "opacity" : 8,
                                    "size"    : 40,
                                    "speed"   : 3
                                },
                                "grab"   : {
                                    "distance"   : 400,
                                    "line_linked": {
                                        "opacity": 1
                                    }
                                },
                                "push"   : {
                                    "particles_nb": 4
                                },
                                "remove" : {
                                    "particles_nb": 2
                                },
                                "repulse": {
                                    "distance": 200
                                }
                            }
                        },
                        "particles"    : {
                            "color"      : {
                                "value": "#ffffff"
                            },
                            "line_linked": {
                                "color"   : "#ffffff",
                                "distance": 150,
                                "enable"  : true,
                                "opacity" : 0.4,
                                "width"   : 1
                            },
                            "move"       : {
                                "attract"  : {
                                    "enable" : false,
                                    "rotateX": 600,
                                    "rotateY": 1200
                                },
                                "direction": "none",
                                "enable"   : true,
                                "out_mode" : "out",
                                "random"   : false,
                                "speed"    : 6,
                                "straight" : false
                            },
                            "number"     : {
                                "density": {
                                    "enable"    : true,
                                    "value_area": 800
                                },
                                "value"  : 80
                            },
                            "opacity"    : {
                                "anim"  : {
                                    "enable"     : false,
                                    "opacity_min": 0.1,
                                    "speed"      : 1,
                                    "sync"       : false
                                },
                                "random": false,
                                "value" : 0.5
                            },
                            "shape"      : {
                                "image"  : {
                                    "height": 100,
                                    "width" : 100
                                },
                                "polygon": {
                                    "nb_sides": 5
                                },
                                "stroke" : {
                                    "color": "#000000",
                                    "width": 0
                                },
                                "type"   : "circle"
                            },
                            "size"       : {
                                "anim"  : {
                                    "enable"  : false,
                                    "size_min": 0.1,
                                    "speed"   : 40,
                                    "sync"    : false
                                },
                                "random": true,
                                "value" : 5
                            }
                        },
                        "retina_detect": true
                    });

                });
        </script>
    </body>

</html>
