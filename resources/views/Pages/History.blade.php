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

<section>
    <div class="herosection text-center">
        <br>
<h3 style="font-weight: bold; " class="p-2 my-1">ඉතිහාසය හා වර්තමානය</h3>
    </div>
    <hr style="height:2px;background-color:#0071bc" class="p-1">
</section>

<section>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class=" cards">
            <img  src="img/history/img_1.jpg" alt="picture 1" height="200px" width="220px" class="shadow">
            </div>

        </div>
        <div class="col-md-8 ">
                            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">සමිතිය ආරම්භ කල දිනය :</th>
                    <th scope="col">1932 ජනවාරි 17</th>

                    </tr>
                    <tr>
                    <th scope="col">ලියාපදිංචි දිනය :</th>
                    <th scope="col">1933 මාර්තු 15</th>

                    </tr>
                    <tr>
                    <th scope="col">ලියාපදිංචි අංකය  :</th>
                    <th scope="col">සී 38 (C 38)</th>

                    </tr>
                    <tr>
                    <th scope="col">ලියාපදිංචි පණත  :</th>
                    <th scope="col">1921 අංක 38 දරණ එක්සත් සහකාර සමූපකාර පණත </th>

                    </tr>
                    <tr>
                    <th scope="col">ලියාපදිංචි නාමය  :</th>
                    <th scope="col">සීමාරහිත ගොඩිගමුව සකසුරුවම් හා ණය ගණුදෙනු පිලිබඳ සමූපකාර සමිතිය.</th>

                    </tr>
                </thead>
                            </table>



        </div>

    </div>
    <hr>
    <h4 class="text-center" style="font-family: 'Noto Sans Sinhala', sans-serif;">ආරම්භක නිළධාරි මණ්ඩලය.</h4>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class=" cards">
            <img  src="img/history/img_2.jpg" alt="picture 2" height="200px" width="220px" class="shadow">
            </div>

        </div>
        <div class="col-md-8">
                            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ගරු සභාපති :</th>
                    <th scope="col">ඩී.ඒ.යහම්පත් ජයසිරිවර්ධන මහතා.(ගම්මුලාදෑනි).</th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු උප සභාපති :</th>
                    <th scope="col">එස්.ඩී.ලිවිනිස් මහතා. </th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු භාණ්ඩාගාරික   :</th>
                    <th scope="col">සී.ඩි.පීටර් මහතා.</th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු ලේකම්  :</th>
                    <th scope="col">වයි.ඒ.ඩී.පීරිස් මහතා. </th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු කාරකසභිකවරු   :</th>
                    <th scope="col">කේ.ඩබ්.ඩී.ලියන්සිංඤෝ මහතා.</th>

                    </tr>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">එස්.එල්.ඩි.ලුවිස් මහතා.</th>

                    </tr>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">ඩේවිඩ් සමරතුංග මහතා.</th>

                    </tr>
                </thead>
                            </table>



        </div>

    </div>

    <hr>
    <h4 class="text-center" style="font-family: 'Noto Sans Sinhala', sans-serif;">බැංකු සේවා ආරම්භ කිරීම.</h4>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class=" cards">
            <img  src="img/history/img_3.jpg" alt="picture 3" height="200px" width="220px" class="shadow">
            </div>

        </div>
        <div class="col-md-8">
                            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">සමිති නාමය  :<br>.</th>
                    <th scope="col">1990-02-28 දින සී/ස ගොඩිගමුව සක්ස්සුරුවම් හා ණය ගණුදෙනු පිලිබඳ<br> සමූපකාර සමිතිය ලෙස සංශෝධනයවිය.</th>

                    </tr>
                    <tr>
                    <th scope="col">ප්‍රදර්ශන නාමය  :</th>
                    <th scope="col">සී/ස ගොඩිගමුව සණස. </th>

                    </tr>
                    <tr>
                    <th scope="col">පණත    :</th>
                    <th scope="col">1972 අංක 05 දරණ සමූපකාර පණත.</th>
                    </tr>
                    <tr>
                    <th scope="col"></th>
                    <th scope="col">1998 අංක 03 දරණ බස්නාහිර පළාත් සමූපකාර ප්‍රඥප්තිය.</th>
                    </tr>

                </thead>
                            </table>



        </div>

    </div>
    <hr>
    <h4 class="text-center" style="font-family: 'Noto Sans Sinhala', sans-serif;">1990 වර්ෂයේ ආරම්භක අධ්‍යක්ෂක මණ්ඩලය.</h4>
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class=" cards">
            <img  src="img/history/img_4.jpg" alt="picture 4" height="200px" width="220px" class="shadow">
            </div>

        </div>
        <div class="col-md-8">
                            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ගරු සභාපති  :</th>
                    <th scope="col">සී.ඩී.සේනාරත්න මහතා.</th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු උප සභාපති  :</th>
                    <th scope="col">එන්.එම්.කරුණාතිලක මහතා. </th>

                    </tr>
                    <tr>
                    <th scope="col">ගරු භාණ්ඩාගාරික     :</th>
                    <th scope="col">ඩී.කේ.පෙරේරා මහත්මිය.</th>
                    </tr>
                    <tr>
                    <th scope="col">ගරු (වැ:බ:)ලේකම් :</th>
                    <th scope="col">පී.ප්‍රේමරත්න පෙරේරා මහතා. </th>
                    </tr>
                    <tr>
                    <th scope="col">ගරු අධ්‍යක්ෂිකා :</th>
                    <th scope="col">ඥාණවතී අමරසිංහ මහත්මිය. </th>
                    </tr>

                </thead>
                            </table>



        </div>

    </div>

    </div>

    </section>
    <hr>
    <section>
        <div class="container-fluid px-3">
        <p>
            සී/ස ගොඩිගමුව සණස සමිතියේ ආරම්භය <strong>1932</strong> දක්වා දිවෙන යටත් විජිත යුගයේ දී ග්‍රාමීය ප්‍රජාවවිසින් ඒ කාලයේ අවශ්‍යතාවය මත ඇති කර
            ගන්නා ලද පුරෝගාමී සමිතියකි.
        </p>
        <br>
        <p>මේ වන විට වසර අනූවක් පමණ කාලයක් ග්‍රාමීය ජනතාවගේ ණය අවශ්‍යතා හා සුභ සාධන කටයුතු නොපිරිහෙලා ඉටුකර ඇති අතර <strong>1990</strong> දී
        බැංකු ක්‍රියාවලිය ආරම්භ කරන ලද අතර එය සමිතියේ දිශාංතිය සීඝ්‍ර වර්ධනයකට හැරවීමට ඉවහල් විය. එහි පුරෝගාමියා වූයේ <strong>2020</strong> වසරේදී
        අප අතරින් වියෝ වූ හිටපු <strong>ගරු සභාපති සී.ඩී.සේනාරත්න මැතිතුමාය</strong>.
        </p>

        <br>
        <p>වර්තමානය වන විට සමිති සාමාජිකයන් හට ප්‍රදේශයේ ජනතාවට හා විශේෂයෙන් දරුවන්ට නොයෙක් අයුරින් වැඩ සටහන් ක්‍රියාත්මක කරමින් ඔවුනගේ
            කටයුතු සඳහා දායක වන අතර සමූපකාර ප්‍රතිපත්ති අනුව යමින් ඉදිරියටත් මෙම ක්‍රියාමාර්ග පුළුල්ව සමාජයේ හා ප්‍රගමනයට දායක වෙමින් සිදුකරන ක්‍රියාවක්
            බවට පත්වී ඇති සමූපාකාර ව්‍යාපාරය එති උනන්තිය වෙනුවෙන් එහි කොටස්කරුවන් වන <br>සී/ස ගොඩිගමුව සණස සමිතිය ඇප කැප වී කටයුතු කරන
            ව්‍යාපාරයක් බවට පත්කිරීම අපගේ ඉදිරි දැක්ම වේ.
        </p>
        </div>

    </section>


@extends('Components.footer')
