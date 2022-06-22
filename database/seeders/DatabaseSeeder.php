<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AddressSeeder::class,
            ArticleSeeder::class,
            AttributeSeeder::class,
            AttributeGroupSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            CitySeeder::class,
            ContractSeeder::class,
            CountrySeeder::class,
            CouponSeeder::class,
            CurrencySeeder::class,
            CustomerSeeder::class,
            CustomerGroupSeeder::class,
            DistrictSeeder::class,
            ExpenseSeeder::class,
            ExpenseCategorySeeder::class,
            InvoiceSeeder::class,
            LanguageSeeder::class,
            MenuSeeder::class,
            MenuItemSeeder::class,
            NewsSeeder::class,
            NoteSeeder::class,
            NoteCategorySeeder::class,
            NotificationSeeder::class,
            OptionSeeder::class,
            OrderSeeder::class,
            OrderStatusSeeder::class,
            PageSeeder::class,
            PaymentMethodSeeder::class,
            PermissionSeeder::class,
            PredefinedReplySeeder::class,
            ProductSeeder::class,
            ProjectSeeder::class,
            ReviewSeeder::class,
            RoleSeeder::class,
            ServiceSeeder::class,
            SettingSeeder::class,
            ShippingMethodSeeder::class,
            SmsSeeder::class,
            StateSeeder::class,
            StoreSeeder::class,
            SubscriberSeeder::class,
            SubscriptionSeeder::class,
            TaskSeeder::class,
            TaxSeeder::class,
            TicketSeeder::class,
            TransactionSeeder::class,
            UserSeeder::class
        ]);
    }
}
