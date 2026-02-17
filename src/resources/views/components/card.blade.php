<!-- resources/views/components/card.blade.php -->

@props(['title', 'footer' => null])

<div style="border: 1px solid #ddd; border-radius: 8px; padding: 24px; background: white; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <!-- ヘッダー部分 -->
    <h3 style="font-size: 1.5em; font-weight: bold; margin-bottom: 16px;">{{ $title }}</h3>

    <!-- メインコンテンツ -->
    <div>
        {{ $slot }}
    </div>

    <!-- フッター部分（オプション） -->
    @if ($footer)
        <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #ddd;">
            {{ $footer }}
        </div>
    @endif
</div>
