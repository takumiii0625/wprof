<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>管理画面</title>
</head>

<body>
    @auth
    <div class="toolbar">
        <a href="{{route('member', ['company_id' => $company_id]) }}">メンバー一覧画面へ</a>
    </div>
    @endauth
    <div class="admin-container">
        <h1>メンバー一覧</h1>
        @foreach($members as $member)
        <div class="item">
            <img src="{{asset('storage/images/'.$member->photo0)}}" alt="">
            <div>
                <h2>商品名 : {{$member->name}}</h2>
                <p>商品の説明 : {{$member->profile}}</p>
                <a href="{{ route('member.edit', ['company_id' => $member->company_id, 'id' => $member->id]) }}" class="edit">編集</a>
                <form class="delete" method="post" action="{{route('delete',['id' => $member->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>