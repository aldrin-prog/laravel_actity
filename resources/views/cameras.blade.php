<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCTV</title>
    <style>
        .image-container{
            width:max-content;
            margin:auto;
        }
        .btn-container{
            display:flex;
            margin:auto;
            width:max-content;
        }
            .btn{
                display:flex;
                justify-content:center;
                align-items:center;
                width:100px;
                height:40px;
                border-radius:15px;
                margin:2px;
                text-decoration:none;
                color:white;
                font-weight:600;
                background-color:#009E0F;
            }
    </style>
</head>
<body>
    <p style="font-size:28px;text-align:center;">Room {{$id}}</p>
    <div class='image-container' style="width:700px">
    @if ($id==1)
        <img style="width:100%" src="{{ asset('assets/images/images1.jpg') }}" alt="image">
    @elseif($id==2)
        <img style="width:100%" src="{{ asset('assets/images/images2.jpg') }}" alt="image">
    @endif
       
    </div>
    <div class='btn-container'>
        @for($i = 1; $i < 3; $i++)
        <a class='btn' href='/cam/{{$i}}'>
            <span>Cam {{$i}}</span>
        </a>
        @endfor
    </div>
</body>
</html>