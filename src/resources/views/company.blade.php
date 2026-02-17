<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>회사 홈페이지에용</h2>
    <a href="/profile">プロフィール</a>
    <a href="{{ route('profile') }}">프로파일 루트</a>

    <a href="{{ route('admin.dashboard') }}">어드민 대쉬</a>
    <a href="{{ route('admin.users') }}">어드민 유저</a>
</body>
</html>
