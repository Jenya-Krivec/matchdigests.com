<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                UserSeeder::class,
                BookmakerSeeder::class,
                PaymentSeeder::class,
                CurrencySeeder::class,
                SportSeeder::class,
                RestrictionSeeder::class,
                SupportSeeder::class,
                RaitingSeeder::class,
                Bookmaker1XBETPaymentSeeder::class,
                Bookmaker1XBETCurrencySeeder::class,
                Bookmaker1XBETSportSeeder::class,
                Bookmaker1XBETSupportSeeder::class,
                Bookmaker1XBETReviewSeeder::class,
                Bookmaker1XBETPromoCodesSeeder::class,
                Bookmaker1XBETMobileAppSeeder::class,
                BookmakerMelBetPaymentSeeder::class,
                BookmakerMelBetSportSeeder::class,
                BookmakerMelBetSupportSeeder::class,
                BookmakerMelBetReviewSeeder::class,
                BookmakerMelBetPromoCodesSeeder::class,
                BookmakerMelBetMobileAppSeeder::class,
                BookmakerBetwinnerPaymentSeeder::class,
                BookmakerBetwinnerCurrencySeeder::class,
                BookmakerBetwinnerSportSeeder::class,
                BookmakerBetwinnerRestrictionSeeder::class,
                BookmakerBetwinnerSupportSeeder::class,
                Bookmaker1winCurrencySeeder::class,
                Bookmaker1winPaymentSeeder::class,
                Bookmaker1winSportSeeder::class,
                Bookmaker1winSupportSeeder::class,
                BookmakerMOSTBETCurrencySeeder::class,
                BookmakerMOSTBETPaymentSeeder::class,
                BookmakerMOSTBETSportSeeder::class,
                BookmakerMOSTBETSupportSeeder::class,
                BookmakerPARIPESACurrencySeeder::class,
                BookmakerPARIPESAPaymentSeeder::class,
                BookmakerPARIPESASportSeeder::class,
                BookmakerPARIPESASupportSeeder::class,
                Bookmaker888starzCurrencySeeder::class,
                Bookmaker888starzPaymentSeeder::class,
                Bookmaker888starzSportSeeder::class,
                Bookmaker888starzSupportSeeder::class,
                Bookmaker888starzRestrictionSeeder::class,
                BookmakerMEGAPARICurrencySeeder::class,
                BookmakerMEGAPARIPaymentSeeder::class,
                BookmakerMEGAPARIRestrictionSeeder::class,
                BookmakerMEGAPARISportSeeder::class,
                BookmakerMEGAPARISupportSeeder::class,
                Bookmaker4rabetCurrencySeeder::class,
                Bookmaker4rabetPaymentSeeder::class,
                Bookmaker4rabetSportSeeder::class,
                Bookmaker4rabetSupportSeeder::class,
                Bookmaker22BETCurrencySeeder::class,
                Bookmaker22BETPaymentSeeder::class,
                Bookmaker22BETRestrictionSeeder::class,
                Bookmaker22BETSportSeeder::class,
                Bookmaker22BETSupportSeeder::class,
                BookmakerLinebetCurrencySeeder::class,
                BookmakerLinebetPaymentSeeder::class,
                BookmakerLinebetSportSeeder::class,
                BookmakerLinebetSupportSeeder::class,
                Bookmaker20BETCurrencySeeder::class,
                Bookmaker20BETPaymentSeeder::class,
                Bookmaker20BETSportSeeder::class,
                Bookmaker20BETSupportSeeder::class,
                BookmakerBETANDYOUCurrencySeeder::class,
                BookmakerBETANDYOUPaymentSeeder::class,
                BookmakerBETANDYOUSportSeeder::class,
                BookmakerBETANDYOUSupportSeeder::class,
                BookmakerivibetCurrencySeeder::class,
                BookmakerivibetPaymentSeeder::class,
                BookmakerivibetSportSeeder::class,
                BookmakerivibetSupportSeeder::class,
                Bookmaker1xBitCurrencySeeder::class,
                Bookmaker1xBitPaymentSeeder::class,
                Bookmaker1xBitSportSeeder::class,
                Bookmaker1xBitRestrictionSeeder::class,
                Bookmaker1xBitSupportSeeder::class,
            ]
        );
    }
}
