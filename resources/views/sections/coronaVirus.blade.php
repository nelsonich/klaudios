@extends('layouts.app')
@section('title', 'Klaudios | CoronaVirus')
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/jquery.dataTables.min.css') }}">
@endpush
@section('content')
    <style>
        caption {
            caption-side: top;
            color: #f8fafc;
            background-color: #0277bd;
            border: 2px solid;
            border-radius: 5px;
            text-align: center;
            font-family: cursive;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <table id="cases_by_country" class="display table-bordered">
                <caption>{{ trans('coronavirus.statistic_taken_at', [], \Session::get('locale')) }} - </caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ trans('coronavirus.country_name', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.cases', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.deaths', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.region', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.total_recovered', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.new_deaths', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.new_cases', [], \Session::get('locale')) }}</th>
                        <th scope="col">{{ trans('coronavirus.serious_critical', [], \Session::get('locale')) }}</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('plugins/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/coronaVirus.js') }}"></script>
@endpush
