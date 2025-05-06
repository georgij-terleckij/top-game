@php
$sortData = ($sort)??4
@endphp

@php
$_monthsList = [
"01" => "Января",
"02" => "Февраля",
"03" => "Марта",
"04" => "Апреля",
"05" => "Мая",
"06" => "Июня",
"07" => "Июля",
"08" => "августа",
"09" => "Сентября",
"10" => "Октября",
"11" => "Ноября",
"12" => "Декабря"
]
@endphp


<div class="row m-0 pb-4">
    <div class="col-12 p-0 d-flex justify-content-between align-items-center">
        <h2 class="review_header pb-0">Последние Новости:</h2>
        <a class="all_news" href="">Все новости</a>
    </div>
</div>


<div class="row px-0">
    @forelse(\App\Models\News::where('published', 1)->take($sortData)->orderBy('id', 'ASC')->get() as $news)
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 p-0">
        <div class=" main-wrapper news-item-block bookmark-box">
            <a href="{{ route('news_show', [$news->id]) }}" class="bookmark" style=""></a>
            <a href="{{ route('news_show', [$news->id]) }}" class="ncategory">{{ $news->title }}</a>
            <p class="car_title cut-p">{{ mb_strimwidth($news->text, 0, 150, "...") }}</p>
        </div>
    </div>
    @empty
    @endforelse
</div>


