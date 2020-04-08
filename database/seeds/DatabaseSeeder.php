<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(StaticInformationTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(RequestQuotesTableSeeder::class);
        $this->call(LikeNewsTableSeeder::class);
        $this->call(NewsCommentsTableSeeder::class);
        $this->call(UserRolesTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(CookiesPoliciesTableSeeder::class);
        $this->call(PrivacyPoliciesTableSeeder::class);
        $this->call(TermsAndConditionsTableSeeder::class);
        $this->call(NewIdeasTableSeeder::class);
        $this->call(GameCategoriesTableSeeder::class);
        $this->call(GameAnswersTableSeeder::class);
        $this->call(GamesTableSeeder::class);
        $this->call(RightAnswersTableSeeder::class);
        $this->call(GameComplexitiesTableSeeder::class);
        $this->call(UserRightAnswersTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(NewsCommentLikesTableSeeder::class);
        $this->call(PayersTableSeeder::class);
        $this->call(UserGameStarsTableSeeder::class);
        $this->call(UserPaymentBalancesTableSeeder::class);
        $this->call(UserStatusesTableSeeder::class);
        $this->call(UserWrongAnswersTableSeeder::class);
    }
}
