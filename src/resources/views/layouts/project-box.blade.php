<div class="pd-2" style="padding-left: 0">
    <div class="block-info">
        <div class="icon"><i class="fas fa-clock"></i></div>
        <span class="name" title="В рейтинге c">{{ date( 'd / m / Y', strtotime($data->created_at)) }}</span>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fa fa-eye" aria-hidden="true"></i></div>
        <span class="name" title="Просмотров">{{ $data->viewed }}</span>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fas fa-chart-bar"></i></div>
        <span class="name" title="Голосов">{{ $data->votes }}</span>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fas fa-external-link-alt"></i></div>
        <span class="name" title="Переходов">{{ $data->link_out }}</span>
    </div>
    <div class="block-info">
        <div class="icon"><i class="ubermenu-icon fa fa-home"></i></div>
        <a href="{{ route('redirect-link', [$data->id]) }}" class="name" title="На сайт проекта {{ $data->title }}"
           target="_blank">На сайт проекта</a>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fas fa-comment-dots"></i></i></div>
        <a href="/project_id/50/reviews/" class="name"
           title="Отзывы проекта CraftDoge PVP #1">Отзывы</a>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fas fa-chart-area"></i></div>
        <a href="/project_id/50/statistics/" class="name"
           title="Статистика проекта CraftDoge PVP #1">Статистика</a>
    </div>
    <div class="block-info">
        <div class="icon"><i class="fa fa-user-secret" aria-hidden="true"></i></div>
        <a href="/50" class="name" title="Администратор проекта CraftDoge PVP #1">Lifeliss</a>
    </div>
</div>
