<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشخصات</title>
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/bootstrap-rtl.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/bootstrap.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/fontawesome-all.min.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/iofrm-style.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('asset/css/iofrm-theme12.css')}}>
    <link rel="stylesheet" media="screen" href={{asset('list/css/nicepage.css')}} >
    <link rel="stylesheet" media="screen" href={{asset('list/css/Contact.css')}} >
</head>
<body>
<div class="form-body" class="container-fluid">
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                @if(session()->has("msg"))
                    <div class="alert alert-success">
                        {{session()->get("msg")}}
                    </div>
                @endif
                <div class="form-items">
                    <div class="u-nav-container">
                        @foreach(\App\Models\AdminMenu::$menu as $kay=>$menu)
                            <ul class="u-nav u-unstyled u-nav-1">
                                <li class="u-nav-item colorlink"><a
                                            class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                            href="{{url($menu)}}" style="padding: 10px 20px;">{{$kay}}</a></li>
                            </ul>
                        @endforeach
                        <div>
                            <form action="{{url('logout')}}" method="post">
                                @csrf
                                <input style=" background-color: #152733; width: auto; text-align: inherit; color: white;"
                                       type="submit" value="خروج">
                            </form>
                        </div>
                    </div>
                    @if(isset($editform))
                        <p>لطفا اطلاعات زیرا ویرایش کنید</p>
                        <p>:تصویر فعلی شما</p>
                    @endif
                    @if(!isset($editform))
                        <h3>سلام</h3>
                        <p>لطفا فرم زیرا تکمیل کنید</p>
                    @endif
                    @if($message=='saveok')
                        <div class="alert alert-success">
                            ثبت با موفقیت ایچاد شد
                        </div>
                    @elseif($message=='savenotok')
                        <div class="alert alert-danger">
                            مشکل در ثبت
                        </div>
                    @elseif($message=='editok')
                        <div class="alert alert-success">
                            ویرایش با موفقیت انجام شد
                        </div>
                    @elseif($message=='editnotok')
                        <div class="alert alert-danger">
                            مشکل در ویرایش
                        </div>
                    @endif
                    <form action="@if(isset($editform)){{url('/update/'.$editform->id)}}@else{{url('/create')}}@endif"
                          method="post" enctype="multipart/form-data">
                        @if(isset($editform))
                            @method('put')
                        @endif
                        @csrf
                        @if(isset($editform))
                            <img src="{{asset('/upload/'.$editform['img'])}}" class="img-thumbnail">
                            :عکس قبلی
                        @endif
                        <div class="form-group">
                            <label>نام و نام خانوادگی</label>
                            <input type="text" class="form-control" name="name" value="{{ $editform['name'] ?? '' }}"
                                   placeholder="نام" style="text-align: end; font-weight: bold;">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>استان و شهر</label>
                            <div class="form-row">
                                <div class="col">
                                    <select name="state" style="text-align-last: center;"
                                            class="form-select form-select-lg mb-1" onChange="iranwebsv(this.value);">
                                        <option value="0">لطفا استان را انتخاب نمایید</option>
                                        @foreach($provinces as $province)
                                            <option value="{{$province->id}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    <select name="city" style="text-align-last: center;"
                                            class="form-select form-select-sm" onChange="iranwebsv(this.value);">
                                        <option value="0">لطفا شهر را انتخاب نمایید</option>
                                        @foreach($cities as $citie)
                                            <option value="{{$editform['id'] ?? $citie->id}}">{{$editform['name'] ?? $citie->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @error('city')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        @error('state')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        <div>
                            <label>عکس خود را وارد کنید</label>
                            <div>
                                <input type="file" class="form-control text-align: end;" name="img">
                            </div>
                            @error('img')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>شماره همراه</label>
                            <input type="text" class="form-control" name="mobile"
                                   value="{{ $editform['mobile'] ?? '' }}" placeholder="تلفن همراه"
                                   style="text-align: end; font-weight: bold;">
                            @error('mobile')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <input type="text" class="form-control" name="phone" value="{{ $editform['phone'] ?? '' }}"
                                   placeholder="تلفن ثابت" style="text-align: end; font-weight: bold;">
                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>توضیحات و رزومه</label>
                            <textarea class="form-control" name="resume"
                                      style="text-align: end; font-weight: bold;">{{ $editform['resume'] ?? '' }}</textarea>
                            @error('resume')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-button text-right">
                            <button id="submit" type="submit" class="ibtn">ثبت</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src={{asset('asset/js/jquery.min.js')}}></script>
<script type="text/javascript" src={{asset('asset/js/city.js')}}></script>
<script type="text/javascript" src={{asset('asset/js/popper.min.js')}}></script>
<script type="text/javascript" src={{asset('asset/js/bootstrap.min.js')}}></script>
<script type="text/javascript" src={{asset('asset/js/main.js')}}></script>
</body>
</html>