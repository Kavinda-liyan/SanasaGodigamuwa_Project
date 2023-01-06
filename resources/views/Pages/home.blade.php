@extends("Layout.frontend")

<nav class="navbar navbar-light navbar-expand-md py-2 shadow-sm ">
    <div class="container"><img src="img/Navbar logo.png" width="51" height="51"><a class="navbar-brand d-flex align-items-center" href="#"><span style="font-family: 'Noto Sans Sinhala', sans-serif;font-weight: bold;">&nbsp;<span style="color:#0071bc; font-weight: bolder; font-size: 30px;">සණස</span> ගොඩිගමුව ශාඛාව</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-2">
            <ul class="navbar-nav ms-auto font-weight-bold">
                <li class="nav-item"><a class="nav-link " href="/">මුල් පිටුව</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('history') }}">ඉතිහාසය</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Account') }}">ගිණුම්</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('Projects') }}">ප්‍රජා සේවාවන්&nbsp;</a></li>
            <!-- </ul><a class="btn btn-primary ms-md-2" role="button" href="#" style="background: linear-gradient(#0072bc, #013b60), var(--bs-blue);border-color: var(--bs-border-color-translucent);font-size: 20px;border-radius: 12px;border-top-left-radius: 57;">පිවිසීම</a> -->
        </div>
    </div>
</nav>


<div class="container d-flex flex-column align-items-center py-4 py-xl-5">
    <div class="row mb-5">
        <div class="col-md-8 col-xl-6 text-center mx-auto" style="width: 100%;">
            <h2 style="font-weight: bold">සාදරයෙන් පිලිගනිමු</h2>
            <p class="w-lg-50"></p>
        </div>
    </div>
    <section>
    <div class="row gy-4 w-100 py-5" style="max-width: 800px;margin: -70px -12px 0px;">
    <div class="container">

<!-- Full-width images with number text -->
<div class="mySlides">
  <div class="numbertext">1 / 3</div>
    <img src="img/sanasa.jpg" style="width:100%; color:#000;">
</div>

<div class="mySlides">
  <div class="numbertext">2 / 3</div>
    <img src="img/bank.png" style="width:100%;color:#000;">
</div>

<div class="mySlides">
  <div class="numbertext">3 / 3</div>
    <img src="img/directors.png" style="width:100%;color:#000;">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

<!-- Image text -->
<div class="caption-container">
  <p id="caption"></p>
</div>

<!-- Thumbnail images -->
<div class="row ">
  <div class="column">
    <img class="demo cursor" src="img/sanasa.jpg" style="width:100%" onclick="currentSlide(1)" alt="සණස ">
  </div>
  <div class="column">
    <img class="demo cursor" src="img/bank.png" style="width:100%" onclick="currentSlide(2)" alt="සණස ගොඩිගමුව ශාඛාව">
  </div>
  <div class="column">
    <img class="demo cursor" src="img/directors.png" style="width:100%" onclick="currentSlide(3)" alt="වත්මන් අධ්‍යක්ෂක මණ්ඩලය">
  </div>
</div>
</div>
    </div>
    </section>
    <div class="card"></div>
</div>
<div class="card" style="transform: translateY(0px);filter: blur(0px);background: var(--bs-card-cap-bg);border-top-style: none;">
    <div class="card-body" style="transform: translateY(5px);padding: 37px;font-family: 'Noto Sans Sinhala', sans-serif;filter: blur(0px);">

       <div class="row">
        <div class="col-md-6">


        <h4 class="card-title" style="font-family: 'Noto Sans Sinhala', sans-serif;font-weight: bold;line-height: 20.8px;padding: 4px;transform: translateY(-20px);">බැංකුව විවෘතව පවතින වේලාවන්</h4>
            <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr></tr>
                </thead>
                <tbody>
                    <tr>
                        <td>සඳුදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>අගහරුවාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>බදාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>&nbsp; පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>බ්‍රහස්පතින්දා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>සිකුරාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>සෙනසුරාදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                    <tr>
                        <td>ඉරිදා&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>පෙ.ව. 8.30 සිට 4.15 දක්වා</strong><br><br></td>
                    </tr>
                </tbody>
            </table>
        </div> </div>
        <div class="col-md-6">
        <div class="container">
    <div class="row " >
        <div class="col-md-12 col-sm-12 my-2 containerforhead" style="transform: translateY(29px);">
            <h1 style="font-family: 'Noto Sans Sinhala', sans-serif;font-size: 20px;font-weight: bold;">දර්ශනය</h1>
            <p style="font-family: 'Noto Sans Sinhala', sans-serif;">"සමූපාකාර ප්‍රතිපත්ති හා සාරධර්ම මත පදනම් වූ නව සමාජයක්"</p>
        </div>
        <div class="col-md-12 col-sm-12 my-2 containerforhead" style="transform: translateY(29px);">
            <h1 style="font-family: 'Noto Sans Sinhala', sans-serif;font-size: 20px;font-weight: bold;">මෙහෙවර</h1>
            <p style="font-family: 'Noto Sans Sinhala', sans-serif;">"සණස දර්ශනයෙන් අපේක්ෂිත නව සමාජයක් ස්ථාපනය කිරීම සඳහා මූල්‍යමය වශයෙන් මෙන්ම පරිසර හිතකාමී ලෙස ප්‍රජාව ශක්තිමත් කිරීම හා සංවර්ධනය කිරීම"</p>
        </div>
    </div>
</div>



        </div>
    </div>
</div>

<section class="position-relative py-4 py-xl-5" style="transform: translateY(29px);">
    <div class="container position-relative">
        <div class="row">
            <div class="col"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.477750961881!2d79.92346751477236!3d6.833178495061596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2500d55f809ad%3A0x205a25734d388239!2sSanasa%20Bank%20Godigamuwa!5e0!3m2!1sen!2slk!4v1673040018373!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe></div>
            <div class="col-md-6 col-xl-4">
                <div>
                    <form class="p-3 p-xl-4" method="post" style="font-family: 'Noto Sans Sinhala', sans-serif;">
                        <div class="mb-3"><label class="form-label" for="name"><span><b>ලිපිනය</b></span>&nbsp; &nbsp;: අංක 68, පිළියන්දල පාර,&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; ගොඩිගමුව,මහරගම&nbsp;</label></div>
                        <div class="mb-3"><label class="form-label" for="email"><span><b>දුරකථන</b></span>&nbsp; : 0112 850 853</label></div>
                        <div class="mb-3"><label class="form-label" for="message"><span><b>ෆැක්ස්</b></span>&nbsp; &nbsp; : 0112 850 853</label><label class="form-label" for="message"><span><b>ඊමේල්</b></span>&nbsp; &nbsp; : godigamuwasanasa@yahoo</label><label class="form-label" for="message"><span><b>FB</b></span>&nbsp; &nbsp; &nbsp; &nbsp; : godigamuwa</label></div>
                        <div class="mb-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@extends('Components.footer')
