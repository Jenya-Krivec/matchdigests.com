@extends('app')

@section('title', trans('index.title').' '.date('Y'))

@section('description', trans('index.description'))

@section('keywords', trans('index.keywords'))

@section('content')
    <main class="font-serif">
        <div class="xl:px-20 sm:py-5 px-3 py-2 m-auto pt-24 sm:pt-24">
            <div class="relative">
                <h1 class="text-lg sm:text-2xl pl-8 font-bold border-b-2 border-yellow-400">@lang('index.Bookmakers')</h1>
            </div>
            <div class="text-justify my-4">
                <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph1')</p>
            </div>
        </div>
        <hr class="border-t-2 border-violet-500 md:!border-gray-200">
        <div class="xl:px-20 m-auto bg-gray-100">
            <div class="p-2 bg-white">
                @foreach($bookmakers as $bookmaker)
                    @include('inc.component_bookmaker', ['bookmaker' => $bookmaker, 'iteration' => $loop->iteration, 'authorized' => false])
                @endforeach
            </div>
            <div class="bg-white xl:px-20">
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl pl-8 font-bold border-b-2 border-yellow-400">@lang('index.paragraph2')</h2>
                </div>
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph3')</p>
                </div>
                <div class="list-decimal pl-5 py-1">
                    <ol class="list-decimal pl-5 my-4">
                        <li class="text-base text-gray-700">@lang('index.paragraph4')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph5')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph6')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph7')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph8')</li>
                    </ol>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl pl-8 font-bold border-b-2 border-yellow-400">@lang('index.paragraph9')</h2>
                </div>
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph10')</p>
                </div>
                <div class="list-decimal pl-5 py-1">
                    <ol class="list-decimal pl-5 my-4">
                        <li class="text-base text-gray-700">@lang('index.paragraph11')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph12')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph13')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph14')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph15')</li>
                        <li class="text-base text-gray-700">@lang('index.paragraph16')</li>
                    </ol>
                </div>
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph17')</p>
                </div>
                <div class="relative">
                    <h2 class="text-lg sm:text-2xl pl-8 font-bold border-b-2 border-yellow-400">@lang('index.paragraph18')</h2>
                </div>
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph19')</p>
                </div>
                <div class="text-justify my-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10 mb-4">@lang('index.paragraph20')</p>
                </div>
                <div class="text-justify mt-4 pb-4 px-3">
                    <p class="text-base text-gray-700 text-justify indent-10">@lang('index.paragraph21')</p>
                </div>
            </div>
        </div>
    </main>
    <script defer type="text/javascript" src="{{ asset('js/index/rate.js').'?v='.filemtime('js/index/rate.js') }}"></script>
@endsection
