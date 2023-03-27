<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>landing page</title>
    <link href="{{ asset('/css/landing-page.css') }}" rel="stylesheet">
</head>
<body>
    <div id="wrap">
        <header>صفحه فرود</header>
        <main>
            <div id="email-section">
                <h1 id="title">یک برنامه ۷ روزه برای غلبه بر <br />اهمال‌ کاری و به دست آوردن انگیزه</h1>
                <img class="email-img" src="{{asset(env('IMAGES_UPLOADED').'email-image.jpg')}}" />
                <form class="email-form">
                    <h4 class="label-form">نام و ایمیلتان را وارد کنید و سپس کتاب اقدام فوری اثر تیبو موریس را دانلود نمایید</h4>
                    <input type="text" class="input" name="name" placeholder="نام"/>
                    <input type="email" class="input" name="email" placeholder="ایمیل"/>
                    <input type="submit" class="btn-form" value="دریافت کتاب">
                </form>
                <div class="clearfix"></div>
            </div>
        </main>
        <footer>nateghi &#169; 2023 - all right reserved</footer>
    </div>
</body>
</html>
