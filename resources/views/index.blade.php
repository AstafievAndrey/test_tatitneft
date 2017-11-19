@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Номер банкомата</th>
                        <th>Адрес</th>
                        <th>Общий простой</th>
                        <th>Простой без выходных</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($filials as $filial)
                    <tr><td colspan="4" align="center">{{ $filial->name }}</td></tr>
                        @foreach ($filial->bankomats as $bankomat)
                            @foreach ($bankomat->prostois as $prostoi)
                                <tr>
                                    <td>{{ $bankomat->number }}</td>
                                    <td>{{ $bankomat->address }}</td>
                                    <td>{{ round((strtotime($prostoi->end)-strtotime($prostoi->begin))/(60*60)) }} ч.</td>
                                    <td>{{ weekend(strtotime($prostoi->begin),strtotime($prostoi->end)) }} ч.</td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@php
    function weekend($b,$e){
        $days = [
            ['time'=>strtotime('11.02.2012')],
            ['time'=>strtotime('13.02.2012')],
        ];
        $second = $e - $b;
        foreach($days as $day){
            if( ($day['time']<$e) && ($day['time']>$b) ){
                $second = $second - (24*60*60);
            }
            if($day['time'] == strtotime(date('d.m.Y',$e)) ){
                $second = $second + ((24*60*60) - ($e - $day['time']) );
            }
            if($day['time'] == strtotime(date('d.m.Y',$b)) ){
                $second = $second + ((24*60*60) - ($b - $day['time']) );
            }
        }
        return round($second/(60*60));
    }
@endphp