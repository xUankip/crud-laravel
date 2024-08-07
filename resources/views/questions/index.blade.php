<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<header>
    <div class="header">
        <div class="logo">
            <div class="img"><a href=""><img src="{{ asset('images/huy.jpg') }}" alt="Description of Image"></a></div>
            <div class="logos"><a href=""><b>Quizzai</b></a></div>
        </div>

        <div class="nav">
            <ul class="navs">
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Home</a></li>
            </ul>
        </div>
        <div class="iconhead">
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-solid fa-house"></i></a>


        </div>
    </div>
</header>
<h1>Câu hỏi</h1>
@if(!empty($questions))
    @foreach($questions as $question)
        <div class="question">
            <h2>{{ $question['content'] }}</h2>
            <p>Thời gian: {{ $question['countdown_time'] }} giây</p>
            <p>Điểm: {{ $question['score'] }}</p>
            <div class="answers">
                @foreach($question['answers'] as $answer)
                    <p>
                        <input type="radio" name="question{{ $question['id'] }}" value="{{ $answer['id'] }}">
                        {{ $answer['answer'] }}
                    </p>
                @endforeach
            </div>
        </div>
    @endforeach
@else
    <p>Không có câu hỏi nào.</p>
@endif

<div class="pagination">
    @if($currentPage > 1)
        <a href="{{ url('/questions?page=' . ($currentPage - 1)) }}">Trước</a>
    @endif

    @if($currentPage * $perPage < $totalQuestions)
        <a href="{{ url('/questions?page=' . ($currentPage + 1)) }}">Tiếp theo</a>
    @endif
</div>

<footer class="footer">
    <div class="footerA"><p>CONTENT gioi thieu.</p></div>
    <div class="footerB">
        <div class="lofo">
            <div class="logo1"></div>
            <div class="logo2"><a href="">Quizzai</a></div>
        </div>
        <div class="f0">
            <div class="f1">
                <a href="/hehe/Nav/AboutUs/New1.html">About Us</a> <br>
                <a href="/hehe/foot/Sitemap/New1.html">Sitemap</a> <br>
                <a href="/hehe/Nav/Contact/New1.html">Contact Us</a>
            </div>
            <div class="f1">
                <a href="/hehe/foot/Copyright/New1.html">Copyright</a> <br>
                <a href="/hehe/Nav/images/New1.html">images</a> <br>
                <a href="/hehe/foot/Privacy Policy/New1.html">Privacy Policy</a>
            </div>
        </div>

        <div class="footIcon">
            <a href=""><i class="fa-brands fa-youtube"></i></a>
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-solid fa-house"></i></a>
        </div>

    </div>

</footer>
</body>
</html>
