<!doctype html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/memberRegister.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
    <title>メンバー登録ページ</title>
</head>

<body>
    <div class="memberRegister-container">


        @if(session('message'))
        <div class="flash">
            {{session('message')}}
        </div>
        @endif
        @if($errors->any())
        <ul class="error">
            @foreach($errors->all() as $error)
            <li>{{$error}}aa</li>
            @endforeach
        </ul>
        @endif


        <h1>メンバー登録ページ</h1>
        <form action="{{route('memberStore')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="title-wrap">氏名 : <input type="text" name="name" placeholder="氏名" value="{{ old('name') }}"></div>
            <div class="title-wrap">会社ID : <input type="text" name="company_id" placeholder="会社ID" value="{{ old('company_id') }}"></div>
            <div class="detail-wrap">サブタイトル : <textarea name="subtitle" cols="30" rows="10" placeholder="サブタイトル">{{ old('subtitle') }}</textarea></div>
            <div class="img-wrap">顔写真 : <input type="file" name="photo0" accept="image/jpg,image/png"></div>
            <div class="detail-wrap">プロフィール : <textarea name="profile" cols="30" rows="10" placeholder="プロフィール">{{ old('profile') }}</textarea></div>
            <div class="title-wrap">質問１ : <textarea name="question1" cols="30" rows="10" placeholder="質問１">{{ old('question1') }}</textarea></div>
            <div class="detail-wrap">答え１ : <textarea name="answer1" cols="30" rows="10" placeholder="答え１">{{ old('answer1') }}</textarea></div>
            <div class="img-wrap">画像１ : <input type="file" name="photo1" accept="image/jpg,image/png"></div>
            <div class="title-wrap">質問２ : <textarea name="question2" cols="30" rows="10" placeholder="質問２">{{ old('question2') }}</textarea></div>
            <div class="detail-wrap">答え２ : <textarea name="answer2" cols="30" rows="10" placeholder="答え２">{{ old('answer2') }}</textarea></div>
            <div class="img-wrap">画像２ : <input type="file" name="photo2" accept="image/jpg,image/png"></div>
            <div class="title-wrap">質問３ : <textarea name="question3" cols="30" rows="10" placeholder="質問３">{{ old('question3') }}</textarea></div>
            <div class="detail-wrap">答え３ : <textarea name="answer3" cols="30" rows="10" placeholder="答え３">{{ old('answer3') }}</textarea></div>
            <div class="img-wrap">画像３ : <input type="file" name="photo3" accept="image/jpg,image/png"></div>
            <div class="title-wrap">SNSリンク1 : <input type="text" name="sns_link1" placeholder="SNSリンク1" value="{{ old('sns_link1') }}"></div>
            <div class="title-wrap">SNSリンク2 : <input type="text" name="sns_link2" placeholder="SNSリンク2" value="{{ old('sns_link2') }}"></div>
            <div class="title-wrap">SNSリンク3 : <input type="text" name="sns_link3" placeholder="SNSリンク3" value="{{ old('sns_link3') }}"></div>
            <div class="title-wrap">メッセージ : <textarea name="message" cols="30" rows="10" placeholder="メッセージ">{{ old('message') }}</textarea></div>

            <div class="submit-wrap"><input type="submit" value="登録する"></div>
        </form>

    </div>
</body>

</html>