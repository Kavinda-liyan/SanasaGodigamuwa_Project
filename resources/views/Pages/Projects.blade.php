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
<!-- Projects -->
<section>
    <div class="container">
        <div class="container-fluid my-5 p-3 title">
            <h4>
                අලුත් අවුරුදු උත්සවය 

            </h4>



        </div>
    <div class="container-fluid my-5 p-3">
        <p>
        සමූපකාරිකයන් වන අප කුඩා දරුවන්ගේ සිට වැඩිමල්ලා දක්වා එක පවුලක් මෙන් කටයුතු කරන බව නොරහසකි .
        සමූපකාර ප්‍රතිපත්ති මත කටයුතු කරමින් අපගේ සිංහල සහ හින්දු අලුත් අවුරුද්ද වෙනුවෙනුත් අවුරුදු උත්සවයක් සමිතියේ 
        ළමා , තරුණ සහ වැඩිහිටි යන සියල්ලන්ටම සහභාගී විය හැකි පරිදි වාර්ෂිකව සංවිධානය කිරීමද විශේෂත්වයකි.

        </p>
        

    </div>
    <div class="container">
        <div class="slideshow">
    <div id="carousel1" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/aurudu/01.jpg" class="d-block mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/02.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/03.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/04.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/05.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/06.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/07.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/aurudu/08.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>
    </div>
    </div>
    <!-- next project -->
       
  
    <div class="container">
        <div class="container-fluid my-5 p-3 title">
            <h4>
                ගිලන්පස පූජාව 

            </h4>



        </div>
    <div class="container-fluid my-5 p-3">
        <p>
        වෙසක් සහ පොසොන් පොහෝ දින වෙනුවෙන් බල ප්‍රදේශයේඇති විහාරස්ථාන දෙකක 
        සිල් සමාදන් වන උවැස උවැසියන් හට ගිලන් පස පිරිනැමීම වාර්ෂිකව අප කාන්තා කමිටුව විසින් සිදු කරයි.

        </p>
        

    </div>
    <div class="container">
    <div class="slideshow">
    <div id="carousel2" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/gilanpasa/01.jpg" class="d-block mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/02.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/03.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/04.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/05.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/06.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/07.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/gilanpasa/08.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>


    </div>
    </div>
    <!-- next project -->

    <div class="container">
        <div class="container-fluid my-5 p-3 title">
            <h4>
                වී බෙදාදීම 

            </h4>



        </div>
    <div class="container-fluid my-5 p-3">
        <p>
        කොවිඩ් අර්බුදය සමග පැමිණි රටේ ආර්ථික අර්බුදයට සාපේක්ෂව රටෙහි උද්ධමනය නිසා දිගින් දිගටම 
        පීඩා විදින සාමාජිකයන්ට යම් අයුරකින් සහනයක් සැලසීමට අප හට හැකිවිය. සහනදායී මිලකට වී මලු 
        බෙදාදීම, කෘෂිකර්ම දෙපාර්තමේන්තුවෙන් ලද එළවළු බීජ, දියර පොහොර මෙන්ම වටිනා එළවළු සහ 
        පළතුරු පැළ සාමාජිකයන් අතර බෙදා දීමට අප හට හැකිවිය.

        </p>
        

    </div>
    <div class="container">
    <div class="slideshow">
    <div id="carousel3" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/ve/01.jpg" class="d-block mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/02.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/03.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/04.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/05.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/06.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/07.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/ve/08.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>


    </div>
    </div>
    <!-- next project -->
    <div class="container">
        <div class="container-fluid my-5 p-3 title">
            <h4>
                පැදුරු සාජ්ජය 

            </h4>



        </div>
    <div class="container-fluid my-5 p-3">
        <p>
        තරඟකාරී ජීවන රටාවෙන් පීඩාවට පත්ව සිටින අප සාමාජිකයන්ගේ මනස සංගීත සැදෑවකින් සුවපත් කිරීමට අප හට හැකිවිය.
        අප සමිතියේම සාමාජික සාමාජිකාවන්ගෙ හඬින් වර්ණවත් වූ පැදුරු සාජ්ජයක් ඉදිරිපත් කිරීම සැමගේ සිත් අමන්දානන්දයට පත්වූ බවටනම් නොඅනුමානය .

        </p>
        

    </div>
    <div class="container">
    <div class="slideshow">
    <div id="carousel4" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/paduru/01.jpg" class="d-block mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/02.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/03.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/04.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/05.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/06.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/07.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/paduru/08.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel4" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel4" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>


    </div>
    </div>
    <!-- next project -->
    <div class="container">
        <div class="container-fluid my-5 p-3 title">
            <h4>
                වෛද්‍ය සායනය 

            </h4>



        </div>
    <div class="container-fluid my-5 p-3">
        <p>
        

        </p>
        

    </div>
    <div class="container">
    <div class="slideshow">
    <div id="carousel5" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
      <img src="img/medical/01.jpg" class="d-block mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/02.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/03.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/04.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/05.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/06.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/07.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
    <div class="carousel-item " data-bs-interval="2000">
      <img src="img/medical/08.jpg" class="d-block  mx-auto d-block w-80" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel5" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel5" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        
    </div>


    </div>
    </div>


</section>



@extends('Components.footer')
