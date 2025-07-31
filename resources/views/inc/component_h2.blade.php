<div class="relative">
    <div class="absolute -top-1 left-4 w-10 h-10 rounded-full bg-violet-500 text-white font-bold flex items-center justify-center">{{substr($values[0], 0, 1)}}</div>
    <h2 class="text-lg sm:text-2xl pl-16 font-bold">{{str_replace(':promocode', $bookmaker['promo_code'], $values[0])}}</h2>
</div>
