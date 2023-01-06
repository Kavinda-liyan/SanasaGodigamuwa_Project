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
<h3 style="font-weight: bold; " class="p-2 my-1">ගිණුම් </h3>
    </div>
    <hr style="height:2px;background-color:#0071bc" class="p-1">
    <div class="container">
        <div class="accounts">
            <div class="acctype">
                <h3 class="m-3 p-3">ඉතුරුම් ගිණුම්.</h3>
            </div>
            <div class="accountlist mx-5 px-5">
                <p>සාමාජික මෙන්ම සාමාජික නොවන පිරිස ගේ ඉතුරුම් වෙනුවෙන් තරඟකාරී මූල්‍ය ආයතන
            සමග සසඳමින් ඉහළ පොලියක් මෙන්ම උපරිම මූල්‍යම සුරක්ෂිතතාව සැලසීම අපගේ ප්‍රධාන අරමුණකි .</p>
                <div class="container px-5 mx-5 py-0">
                <p>සාමාජික ඉතුරුම්.</p>
                <p>සාමාජික නොවන ඉතුරුම්.</p>
                <p>සණස සුපිරි ඉතුරුම්.</p>
                <p>ආරෝග්‍යා ඉතුරුම්.</p>
                <p>විදේශ චාරිකා ඉතුරුම්.</p>

                </div>
                <hr>
                <p>
                    ළමා ඉතුරුම් ගිණුම්

                </p>
                <div class="container px-5 mx-5 py-0">
                <p>
                    ස්වේච්ඡා ළමා ඉතුරුම්.

                </p>
                </div>

            </div>
        </div>

        <div class="accounts">
            <div class="acctype">
                <h3 class="m-3 p-3">ස්ථාවර තැන්පත්.</h3>
            </div>
            <div class="accountlist mx-5 px-5">
                <div class="container px-5 mx-5 py-0">
                <p>වාර්ෂික ස්ථාවර තැන්පත්.</p>
                <p>ත්‍රෛයිමාසික ස්ථාවර තැන්පත්. </p>
                <p>වැඩිහිටි සත්කාර ස්ථාවර තැන්පත්.</p>

                </div>


            </div>
        </div>

        <div class="accounts">
            <div class="acctype">
                <h3 class="m-3 p-3">ණය වර්ග.</h3>
            </div>
            <div class="accountlist mx-5 px-5">
                <div class="container px-5 mx-5 py-0">
                <p>ව්‍යාපාර පුද්ගල ණය.</p>
                <p>ව්‍යාපාර දේපල ණය. </p>
                <p>නිවාස පුද්ගල ණය.</p>
                <p>නිවාස දේපල ණය.</p>
                <p>අතමාරු ණය. </p>
                <p>අධ්‍යාපන ණය.</p>
                <p>ක්ෂණික ණය.</p>
                <p>අවුරුදු ණය. </p>
                <p>ස්වයං රැකියා ණය.</p>
                <br>
                <p><span><i class="fa fa-stop px-1" aria-hidden="true"></i></span>පුද්ගල ණය සඳහා පුද්ගල ඇප මත රු.500,000/= ක් දක්වා ලබාගත හැක.</p>
                <p><span><i class="fa fa-stop px-1" aria-hidden="true"></i></span>දේපල ණය සඳහා දේපල ඇප මත රු.7,500,000/= ක් දක්වා ලබාගත හැක.</p>
                <p><span><i class="fa fa-stop px-1" aria-hidden="true"></i></span>අතමාරු ණය පුද්ගල ඇප මත රු.150,000/= ක් දක්වා ලබාගත හැක.</p>
                <p><span><i class="fa fa-stop px-1" aria-hidden="true"></i></span>ස්වයං රැකියා ණය පුද්ගල ඇප මත රු.250,000/= ක් දක්වා ලබාගත හැක.</p>


                </div>


            </div>
        </div>

        <div class="accounts">
            <div class="acctype">
                <h3 class="m-3 p-3">උකස් ණය.</h3>
            </div>
            <div class="accountlist mx-5 px-5">
               <p>වසරක ගිවිසුම් කාලයකට රන් භාණ්ඩ සඳහා රුපියල් 60,000/= ක අත්තිකාරම් මුදලක්ද,
                මාස හයක කාල සීමාවක් සඳහා රුපියල් 75,000/= ක අත්තිකාරම් මුදලක්ද ලබා දෙනු ලැබේ.
                මාසිකව ණයක් ලෙස මුදල් අඩු කළ හැක, වෙනත් මූල්‍ය ආයතන වලට වඩා සහනදායී පොලී අනුපාත ඇත .
               </p>


            </div>
        </div>
        <div class="accounts">
            <div class="acctype">
                <h3 class="m-3 p-3">ස්ථාවර තැන්පත් අත්තිකාරම් ණය.</h3>
            </div>
            <div class="accountlist mx-5 px-5">
               <p>ස්ථාවර තැන්පතුව ඇපයට තබා මාසිකව පොළිය ලබාගන්නා අය සඳහා තැන්පතු වටිනාකමින් 85% ක්ද
                වාර්ෂිකව පොලිය ලබාගන්නා අය සඳහා 90% ක් මුදලක්ද ණයක් ලෙස ලබාගත හැක .
               </p>


            </div>
        </div>


    </div>
</section>



@extends('Components.footer')
