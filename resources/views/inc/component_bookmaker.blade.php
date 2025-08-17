<div class="flex justify-between flex-col relative rounded-md p-2 mb-2 shiny-box @if($bookmaker['isLight']) text-black @else text-white @endif"
     style="background: linear-gradient(87deg, {{$bookmaker['logo_color']}} 0%, color-mix(in oklab, {{$bookmaker['logo_color']}}, white 20%) 100%)">
    @if($authorized)
    <a href="{{route('admin.editBookmaker', $bookmaker['key'])}}" title="edit" class="absolute z-20 bottom-0 right-0 text-xs bg-gray-300 rounded-br-md rounded-tl-md w-5 h-5 flex justify-center items-center">&#x270F;</a>
    @endif
    <div class="flex justify-between mb-4">
        <div class="flex justify-center items-center">
            <div class="flex justify-center items-center mr-2">
                <p class="text-base font-bold">{{$iteration}}</p>
            </div>
            <div class="flex justify-center items-center">
                <a href="{{$bookmaker['url']}}" target="_blank" class="flex rounded-sm">
                    <img src="{{ asset('img/logo/'.$bookmaker['logo']).'?v='.filemtime('img/logo/'.$bookmaker['logo']) }}" class="h-10" alt="{{$bookmaker['name']}} logo" width="100" height="100">
                </a>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <a href="{{route('review', $bookmaker['key'])}}" class="flex h-10 px-4 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 @if($bookmaker['isLight']) border-black @else border-white @endif mx-2 hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Review')</a>
            <a href="{{route('promocode', $bookmaker['key'])}}" class="sm:flex hidden h-10 px-4 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 @if($bookmaker['isLight']) border-black @else border-white @endif mx-2 hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Promo Code Review')</a>
            <a href="{{route('mobileapp', $bookmaker['key'])}}" class="sm:flex hidden h-10 px-4 text-xs md:text-sm text-center rounded-md justify-center items-center cursor-pointer shadow-gray-400 border-2 @if($bookmaker['isLight']) border-black @else border-white @endif mx-2 hover:bg-white hover:text-black transition-all duration-500">@lang('index.Read Mobile App Review')</a>
        </div>
        <div class="flex justify-center items-center">
            <span data-url="{{$bookmaker['url']}}" class="h-10 w-20 md:w-36 bg-white text-xs md:text-sm text-black rounded-md hover:bg-yellow-400 flex justify-center items-center cursor-pointer transition-all duration-500 shadow-gray-400">@lang('index.Claim') &#8594;</span>
        </div>

    </div>
    <div class="flex justify-between z-10">
        <div class="sm:flex hidden flex-col justify-around flex-shrink-0 self-stretch w-52 rounded-md p-2 mx-1 md:mx-auto" style="background-color: {{$bookmaker['logo_color']}}">
            <div class="flex justify-between items-center">
                <p class="text-xs xl:text-base">@lang('index.Rate it')!</p>
                <div class="flex items-center mx-3">
                    <div class="text-2xl sm:text-4xl text-center" data-rate-value-id="{{$bookmaker['id']}}">{{$bookmaker['rating']}}</div>
                    <p class="pt-3">/5</p>
                </div>
                <p class="rate-count text-xs xl:text-base" data-rate-count-id="{{$bookmaker['id']}}">{{$bookmaker['rating_count']}}</p>
            </div>
            <div class="rate flex mx-auto justify-between w-40" data-rate-id="{{$bookmaker['id']}}">
                <input name="rate" value="1" type="checkbox" aria-label="One star">
                <input name="rate" value="2" type="checkbox" aria-label="Two stars">
                <input name="rate" value="3" type="checkbox" aria-label="Three stars">
                <input name="rate" value="4" type="checkbox" aria-label="Four stars">
                <input name="rate" value="5" type="checkbox" aria-label="Five stars">
            </div>
        </div>
        <div class="flex flex-col justify-around w-full self-stretch min-h-28 rounded-md p-2 mx-1 md:mx-8 font-sans" style="background-color: {{$bookmaker['logo_color']}}">
            <div class="text-xs sm:text-base mb-2">{{$bookmaker['bonus_label_1_'.app()->getLocale()]}}</div>
            <div class="text-xs sm:text-base">{{$bookmaker['bonus_label_2_'.app()->getLocale()]}}</div>
        </div>
        <div class="flex flex-col justify-around flex-shrink-0 self-stretch sm:w-36 rounded-md p-2 mx-1 md:mx-auto" style="background-color: {{$bookmaker['logo_color']}}">
            <div class="text-xs sm:text-sm text-center">@lang('index.Promo code'):</div>
            <div class="flex border-2 @if($bookmaker['isLight']) border-black @else border-white @endif rounded w-min pr-2 mx-auto">
                <p class="p-1 font-bold text-sm sm:text-md">{{$bookmaker['promo_code']}}</p>
                <span data-url="{{$bookmaker['url']}}" class="@if($bookmaker['isLight']) cope-promo-code-black @else cope-promo-code-white @endif" aria-label="Get promo code"></span>
            </div>
        </div>
    </div>
</div>
