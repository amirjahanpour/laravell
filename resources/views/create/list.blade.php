<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Contact</title>
    <link rel="stylesheet" media="screen" href={{asset('list/css/nicepage.css')}} >
    <link rel="stylesheet" media="screen" href={{asset('list/css/Contact.css')}} >
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/bootstrap.min.css')}}>
    <script class="u-script" type="text/javascript" defer="" src={{asset('list/js/jquery.js')}} ></script>
    <script class="u-script" type="text/javascript" defer="" src={{asset('list/js/nicepage.js')}} ></script>
    <meta name="generator" content="Nicepage 3.15.0, nicepage.com">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
</head>
<body data-home-page="Contact.html" data-home-page-title="Contact" class="u-body"><header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-533b"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs></svg>
                </a>
            </div>
            <div class="u-nav-container">
                @foreach(\App\Models\AdminMenu::$menu as $kay=>$menu)
                    <ul class="u-nav u-unstyled u-nav-1"><li class=" colorlink"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{url($menu)}}" style="padding: 10px 20px;">{{$kay}}</a>
                        </li></ul>
                @endforeach
            </div>
            <div class="u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        @foreach(\App\Models\AdminMenu::$menu as $kay=>$menu)
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="{{url($menu)}}">{{$kay}}</a>
                                </li></ul>
                        @endforeach
                        <div>
                            <form action="{{url('logout')}}" method="post">
                                @csrf
                                <input class="btn btn-primary" type="submit" value="خروج">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div></header>
<section class="u-clearfix u-custom-color-1 u-section-1" id="sec-0f24">
    <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-list u-list-1" >
            @if($message)
                {!! $message !!}
            @endif
            <div class="u-repeater u-repeater-1">
                @foreach($alluser as $users )
                    <div style="display: inline-table;" class="u-border-3 u-border-grey-75 u-container-style u-custom-color-1 u-list-item u-radius-10 u-repeater-item u-shape-round">
                        <div  class="u-container-layout u-similar-container u-container-layout-1">
                            <img src="{{asset('/upload/'.$users->img)}}" alt="" class="u-expanded-width u-image u-image-round u-radius-8 u-image-1" data-image-width="2000" data-image-height="1333">
                            <h4 class="u-text u-text-1" style="text-align: end;"> {{$users->name}}</h4>
                            <div class="u-border-1 u-border-grey-dark-1 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                            <p class="u-text u-text-2" style="text-align: end;">استان {{@$users->provinces->name}}</p>
                            <p class="u-text u-text-2" style="text-align: end;">شهر {{@$users->citys->name}}</p>
                            <p class="u-text u-text-2" style="text-align: end;">تلفن همراه  {{$users->mobile}}</p>
                            <p class="u-text u-text-2" style="text-align: end;">تلفن ثابت {{$users->phone}}</p>
                            <p class="u-text u-text-2" style="text-align: end;">: توضیحات</p>
                            <p class="u-text u-text-2 ex3" style="text-align: end;">{{$users->resume}}</p>
                            <form ACTION="{{url('/delete/'.$users->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-outline-secondary" type="submit" oncancel="checkdelete(Event)"  value="حذف">
                                <a href="{{url('/update/'.$users->id)}}" class="btn btn-outline-secondary">ویرایش</a>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
            <div>
                {{$alluser->links()}}
            </div>
        </div>
    </div>
</section>
<script>
    function checkdelete(Event){
        if(confirm('are you sure?')){
            return true;
        }else{
            Event.preventDefault();
            return false;
        }
    }
</script>
</body>
</html>