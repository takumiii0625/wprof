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

    <form action="{{ route('member.update', ['company_id' => $member->company_id, 'id' => $member->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- 名前フィールド -->
        <div>
            <label for="name">名前:</label>
            <input type="text" name="name" id="name" value="{{ $member->name }}">
        </div>

        <!-- 会社IDフィールド -->
        <div>
            <label for="company_id">会社ID:</label>
            <input type="text" name="company_id" id="company_id" value="{{ $member->company_id }}">
        </div>

        <!-- サブタイトルフィールド -->
        <div>
            <label for="subtitle">サブタイトル:</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ $member->subtitle }}">
        </div>

        <!-- プロフィールフィールド -->
        <div>
            <label for="profile">プロフィール:</label>
            <textarea name="profile" id="profile">{{ $member->profile }}</textarea>
        </div>

        <!-- 質問と回答フィールド（1〜3） -->
        @for ($i = 1; $i <= 3; $i++) <div>
            <label for="question{{ $i }}">質問{{ $i }}:</label>
            <textarea name="question{{ $i }}" id="question{{ $i }}">{{ $member['question'.$i] }}</textarea>
            </div>
            <div>
                <label for="answer{{ $i }}">回答{{ $i }}:</label>
                <textarea name="answer{{ $i }}" id="answer{{ $i }}">{{ $member['answer'.$i] }}</textarea>
            </div>
            @endfor

            <!-- 画像フィールド（0〜3） -->
            @for ($i = 0; $i <= 3; $i++) <div>
                <label for="photo{{ $i }}">写真{{ $i }}:</label>
                @if ($member->{'photo'.$i})
                <img src="{{ asset('storage/images/' . $member->{'photo'.$i}) }}" alt="写真{{ $i }}" style="max-width: 200px;">
                @endif
                <input type="file" name="photo{{ $i }}" id="photo{{ $i }}">
                </div>
                @endfor

                <!-- SNSリンクフィールド（1〜3） -->
                @for ($i = 1; $i <= 3; $i++) <div>
                    <label for="sns_link{{ $i }}">SNSリンク{{ $i }}:</label>
                    <input type="url" name="sns_link{{ $i }}" id="sns_link{{ $i }}" value="{{ $member['sns_link'.$i] }}">
                    </div>
                    @endfor

                    <!-- メッセージフィールド -->
                    <div>
                        <label for="message">メッセージ:</label>
                        <textarea name="message" id="message">{{ $member->message }}</textarea>
                    </div>

                    <button type="submit">更新</button>
    </form>
</body>

</html>