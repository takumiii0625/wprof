<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=The+Nautigal&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <meta property="og:image" content="{{ asset('test/public/images/'.$member->photo0) }}" />
    <title>OBFall株式会社　{{ $menuMember->id == 1 ? '代表取締役 ' : '' }}{{ $menuMember->name }}</title>


</head>


<body>
    <!-- ヘッダー -->
    <header class="header">
        <div class="logo">WebProf</div>
        <!-- ハンバーガーメニューアイコン -->
        <div class="hamburger-menu" onclick="toggleMenu()">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>

        <nav class="navigation">
            <ul>
                <a href="{{ route('member', ['company_id' => $company_id]) }}">一覧ページへ</a>
                @foreach($members as $menuMember)
                <li class="person">
                    <!-- 会社名とIDをルートパラメータとして渡す -->
                    <a href="{{ route('member.show', ['company_id' => $menuMember->company_id, 'id' => $menuMember->id]) }}">
                        {{ $menuMember->name }}
                    </a>
                </li>
                @endforeach
                <!-- その他のリンク -->
            </ul>
        </nav>
    </header>
    <div class="member-container">
        <h1>メンバー詳細</h1>
        <div class="person-container">

            <div class="member-detail">
                <h1>{!! nl2br(e($member->subtitle)) !!}</h1>
                <div class="line"></div>

                <div><img src="{{ asset('test/public/images/'.$member->photo0) }}" alt="顔写真" class="fadeInZooma"></div>
                <p class="slide-in-profile">Profile</p>

                <h2>{{ $member->name }}</h2>
                <div class="questions-answers">
                    {!! nl2br(e($member->profile)) !!}
                </div><br>
            </div>
            <div class="member-detail">
                <div class="mask-bg anim">
                    <span>{!! nl2br(e($member->question1)) !!}</span>
                </div>
                <div class="questions-answers">
                    <div class="qa">

                        <div class="stroke anim">
                            <div class="border top"></div>
                            <div class="border right"></div>
                            <div class="border bottom"></div>
                            <div class="border left"></div>
                            <p>{!! nl2br(e($member->answer1)) !!}</p>
                        </div>
                    </div>
                    @if($member->photo1)
                    <div><img src="{{ asset('test/public/images/'.$member->photo1) }}" alt="画像1" class="fadeInZoom"></div>
                    @endif
                </div><br>
            </div>
            <div class="member-detail">
                <div class="mask-bg anim">
                    <span>{!! nl2br(e($member->question2)) !!}</span>
                </div>
                <div class="questions-answers">
                    <div class="qa">
                        <div class="stroke anim">
                            <div class="border top"></div>
                            <div class="border right"></div>
                            <div class="border bottom"></div>
                            <div class="border left"></div>
                            <p>{!! nl2br(e($member->answer2)) !!}</p>
                        </div>
                    </div>
                    @if($member->photo2)
                    <div><img src="{{ asset('test/public/images/'.$member->photo2) }}" alt="画像2" class="fadeInZoom"></div>
                    @endif
                </div><br>
            </div>
            <div class="member-detail">
                <div class="mask-bg anim">
                    <span>{!! nl2br(e($member->question3)) !!}</span>
                </div>
                <div class="questions-answers">
                    <div class="qa">
                        <div class="stroke anim">
                            <div class="border top"></div>
                            <div class="border right"></div>
                            <div class="border bottom"></div>
                            <div class="border left"></div>
                            <p>{!! nl2br(e($member->answer3)) !!}</p>
                        </div>
                    </div>
                    @if($member->photo3)
                    <div><img src="{{ asset('test/public/images/'.$member->photo3) }}" alt="画像3" class="fadeInZoom"></div>
                    @endif
                </div><br>
            </div>

            <div class="member-detail">
                <div id="message">

                    <div class="questions-answers-a">
                        <span class="fadeInZoom-a " style="font-family: 'Times New Roman', Times, serif;">あなたの大切な志は？</span>

                        <div class="cocorozashi">{!! nl2br(e($member->message)) !!}</div>
                    </div>
                </div>

            </div>
        </div>





    </div>

    <div class="sns-links">
        @if($member->sns_link1)
        <p>SNSリンク1: <a href="{{ $member->sns_link1 }}">{{ $member->sns_link1 }}</a></p>
        @endif
        @if($member->sns_link2)
        <p>SNSリンク2: <a href="{{ $member->sns_link2 }}">{{ $member->sns_link2 }}</a></p>
        @endif
        @if($member->sns_link3)
        <p>SNSリンク3: <a href="{{ $member->sns_link3 }}">{{ $member->sns_link3 }}</a></p>
        @endif
    </div>
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
    <!-- JavaScriptコード -->

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>