@extends('layouts.app-lk')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                <h1>Мои проекты</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <a class="btn btn-sm btn-outline-secondary" href="{{ route('lk.myProject.create') }}">Добавить</a>
                </div>
            </div>
            <div class="table-responsive my-4">
                <table class="table table-striped table-sm">
                    <tbody>
                    @forelse($projects as $project)
                        <tr>
                            <td>
                                <div class="row">
                                    <div class="col-12">
                                        <span>№ {{ $project->id }} - {{ $project->title }}</span>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex">
                                            <div>
                                                <a href="{{ route('project-view',  $project->id) }}"
                                                   style="display: block;" title="">
                                                    <img alt=""
                                                         src="{{ asset("/images/games_ico/$project->game_id.png") }}"
                                                         width="54px"
                                                         height="54px" style=" ">
                                                </a>
                                            </div>
                                            <div style="width: calc(100% - 55px)">
                                                <a href="{{ route('project-view',  $project->id) }}"
                                                   target="_blank"
                                                   title="{{ $project->title }}">
                                                    <img
                                                        width="100%"
                                                        src="{{ asset('images/no-baner.jpg') }}"
                                                        style="border: 1px solid black; margin-left: 10px;">
                                                </a>
                                                <p>{{ $project->text }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td width="250" style="vertical-align:middle;">
                                <div class="px-5">
                                    <ul class="tools">
                                        <li>
                                            <a class="tools" href="{{ route('lk.myProject.edit', $project->id) }}">
                                                <i class="material-icons">construction</i>
                                                <span>Редактировать</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tools" href="#">
                                                <i class="material-icons">trending_up</i>
                                                <span>Статистика</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tools" href="#">
                                                <i class="material-icons">article</i>
                                                <span>Новости</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="tools" href="#">
                                                <i class="material-icons">work</i>
                                                <span>Вакансии</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">No Project</td>
                        </tr>
                    @endforelse
                    </tbody>
                    {{--                    <tfooter>--}}
                    {{--                        <tr>--}}
                    {{--                            <td colspan="3">--}}
                    {{--                                {{ $projects->links() }}--}}
                    {{--                            </td>--}}
                    {{--                        </tr>--}}
                    {{--                    </tfooter>--}}
                </table>
            </div>
        </div>
    </div>
@endsection
