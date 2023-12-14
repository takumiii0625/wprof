<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/member.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">

    <title>OBFall メンバー一覧</title>
</head>

<body>
    <header class="header">
        <div class="logo">WebProf</div>
    </header>
    <div class="member-container">
        <!-- ここに画像を追加 -->
        <div class="image-container">
            <img src="{{ asset('top.jpg') }}" alt="社員紹介">
            <div class="overlay">

                <h1>OBFall株式会社</h1>
            </div>
        </div>


        <div class="person-container">
            @foreach($members as $member)
            <div class="person">
                <a href="{{ route('member.show', ['company_id' => $company_id, 'id' => $member->id]) }}" style="color: inherit; text-decoration: none;">

                    <p>{{$member->name}}<br>
                        <!-- {{$member->company_id}}</p>-->
                        <div><img src="{{asset('test/public/images/'.$member->photo0)}}" alt=""></div>
                        <p>{{$member->profile}}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- フッター -->
    <footer class="footer">
        <div class="footer-links">
            <p><a href="{{ route('privacy.policy') }}" class="fancy-link">個人情報方針</a></p>
            <p><a href="https://obfall.com/" class="fancy-link">企業サイト</a></p>
            <p><a href="https://obfall-recruit.com/" class="fancy-link">採用サイト</a></p>
        </div>
        <p class="en">&copy; OBFall株式会社</p>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>