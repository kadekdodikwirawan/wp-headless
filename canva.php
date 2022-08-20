<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .offcanvas-bottom {
            border-radius: 25px;
            height: 99vh !important;
        }

        .offcanvas-end {
            border-left: 0px;
        }

        #offcanvasExample {
            max-width: 30%;
            background-color: transparent;
        }

        .fab-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            user-select: none;
            position: fixed;
            bottom: 30px;
            right: 30px;
        }

        .fab-container:focus {
            height: 100%;
        }

        .fab-container .sub-button:nth-child(2) {
            transform: translateY(-80px);
        }

        .fab-container .sub-button:nth-child(3) {
            transform: translateY(-140px);
        }

        .fab-container .sub-button:nth-child(4) {
            transform: translateY(-200px);
        }

        .fab-container .sub-button:nth-child(5) {
            transform: translateY(-260px);
        }

        .fab-container .sub-button:nth-child(6) {
            transform: translateY(-320px);
        }

        .fab-container .fab {
            position: relative;
            height: 50px;
            width: 50px;
            background-color: #4ba2ff;
            border-radius: 50%;
            z-index: 2;
        }

        .fab-container .fab::before {
            content: " ";
            position: absolute;
            bottom: 0;
            right: 0;
            background-color: inherit;
            border-radius: 0 0 10px 0;
            z-index: -1;
        }

        .fab-container .fab .fab-content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
            border-radius: 50%;
        }

        .fab-container .fab .fab-content .material-icons {
            color: white;
            font-size: 48px;
        }

        .fab-container .sub-button {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            right: 0px;
            height: 50px;
            width: 50px;
            background-color: #4ba2ff;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .fab-container .sub-button:hover {
            cursor: pointer;
        }

        .fab-container .sub-button .material-icons {
            color: white;
            padding-top: 6px;
        }

        .wraper {
            position: relative;
            width: 100%;
            height: 100vh;
            box-shadow: 0 2px 8px 0 rgba(63, 69, 81, 0.16);
            overflow: hidden;
            border-radius: 8px;
        }

        iframe {
            position: absolute;
            width: 100%;
            height: 110vh;
            top: 0;
            left: 0;
            border: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>

<body>
    <div id="mycanva" class="wraper">
        <iframe loading="lazy" src="https://www.canva.com/design/DAFCLXgtSUM/o5Fh8KxBjeCM5dUTHZUHDg/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
        </iframe>
        <div class="fab-container">
            <a href="#" class="fab shadow" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <div class="fab-content">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                </div>
            </a>
        </div>
        <!-- menu  -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-body">
                <div class="fab-container">
                    <div class="sub-button shadow">
                        <a href="#" onclick="openFullscreen()">
                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="sub-button shadow">
                        <a href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="sub-button shadow">
                        <a href="#">
                            <i class="fa fa-volume-up" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- buku tamu  -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Buku tamu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                ...
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        var elem = document.getElementById("mycanva");

        function openFullscreen() {
            if (!document.fullscreenElement && !document.mozFullScreenElement &&
                !document.webkitFullscreenElement && !document.msFullscreenElement) {
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.msRequestFullscreen) {
                    elem.msRequestFullscreen();
                } else if (elem.mozRequestFullScreen) {
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) {
                    elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
                }
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                }
            }
        }
    </script>
</body>

</html>