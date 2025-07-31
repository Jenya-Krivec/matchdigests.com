@extends('app')

@section('title', trans('promocode.title', ['bookmaker' => $bookmaker['name']]))

@section('description',  trans('promocode.description', ['bookmaker' => $bookmaker['name']]))

@section('keywords', trans('promocode.keywords', ['bookmaker' => $bookmaker['name']]))

@section('content')
    <main class="pt-16 bg-gray-100">
        <!-- Banner -->
        <div class="w-full flex py-10 flex-col sm:flex-row border-violet-500 border-2 bg-white">
            <div class="w-full sm:w-2/3 flex justify-center items-center flex-col sm:flex-row">
                <div class="w-28 h-28 rounded-full flex justify-center items-center border-2 border-white flex-shrink-0" style="background-color: {{ $bookmaker['logo_color'] }}">
                    <img src="{{asset('img/logo/'.$bookmaker['logo'].'?v='.filemtime('img/logo/'.$bookmaker['logo']))}}" alt="{{$bookmaker['name']}} logo" class="p-2" width="100" height="100">
                </div>
                <div class="text-gray-500 mx-4">
                    <h1 class="text-sm sm:text-4xl font-bold my-2">{{trans('promocode.Promotions and Bonuses', ['bookmaker' => $bookmaker['name']])}}</h1>
                    <div class="rate flex justify-between items-center lg:w-40" data-rate-id="{{$bookmaker['id']}}">
                        <input name="rate" value="1" type="checkbox" aria-label="One star" disabled="disabled">
                        <input name="rate" value="2" type="checkbox" aria-label="Two stars" disabled="disabled">
                        <input name="rate" value="3" type="checkbox" aria-label="Three stars" disabled="disabled">
                        <input name="rate" value="4" type="checkbox" aria-label="Four stars" disabled="disabled">
                        <input name="rate" value="5" type="checkbox" aria-label="Five stars" disabled="disabled">
                        <div class="text-lg" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/3 flex-col justify-center items-center flex px-2">
                <h2 class="font-bold text-xs sm:text-lg my-1 text-center">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</h2>
                <div class="text-sm lg:text-lg my-1 text-center">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
                @if($bookmaker['warning_'.app()->getLocale()])
                    <div class="text-xs my-1 text-gray-500 text-center">{{$bookmaker['name']}}: {{$bookmaker['warning_'.app()->getLocale()]}}</div>
                @endif
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-gray-500 flex justify-center items-center cursor-pointer transition-all duration-500 my-2 px-16 py-2">@lang('promocode.Registration')</span>
            </div>
        </div>
        <!--Navigation -->
        <div class="w-full flex justify-center items-center text-blue-700 pt-4 text-sm sm:text-base text-center bg-gray-100">
            <a href="{{route('review', $bookmaker['key'])}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-gray-100 hover:text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">{{trans('promocode.Review', ['bookmaker' => ''])}}</a>
            <div class="text-xs sm:text-lg border-2 border-violet-500 rounded-md bg-gray-100 text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">
                <p>{{trans('promocode.Promotions and Bonuses', ['bookmaker' => ''])}}</p>
            </div>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-gray-100 hover:text-gray-500 flex justify-center items-center transition-all duration-500 sm:mx-2 m-1 p-2 sm:px-4">@lang('promocode.Mobile App')</a>
        </div>
        <!--Review-->
        <div class="w-full bg-gray-100 px-0 my-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white">
                @foreach($page as $component)
                    @include('inc/component_'.$component['component'], ['key' => $component['key'], 'values' => json_decode($component['value_'.app()->getLocale()], true)])
                @endforeach
            </div>
        </div>
        <div class="w-full bg-gray-100 px-0 mt-4 lg:px-28">
            <div class="px-2 sm:px-10 py-4 bg-white">
                <span data-url="{{$bookmaker['url']}}" class="bg-violet-500 text-xs sm:text-lg border-2 border-violet-500 text-white rounded-md hover:bg-white hover:text-gray-500 flex justify-center items-center cursor-pointer transition-all w-44 duration-500 my-2 mx-auto px-16 py-2">@lang('promocode.Registration')</span>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/promo/rate.js').'?v='.filemtime('js/promo/rate.js') }}"></script>
@endsection
