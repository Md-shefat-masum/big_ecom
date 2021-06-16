<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreSettingSecuritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_setting_securities', function (Blueprint $table) {
            $table->id();
            $table->string('creator',100)->nullable();
            $table->string('slug',100)->nullable();
            $table->integer('status')->default(1);
            $table->string('configure_complexity',200)->nullable();
            $table->string('inactive_shopper_logout',200)->nullable();
            $table->string('shopper_activity',200)->nullable();
            $table->string('control_panel_inactivity',200)->nullable();
            $table->string('enable_recaptcha_on_storefront',200)->nullable();
            $table->string('recaptcha_site_key',200)->nullable();
            $table->string('recaptcha_secret_key',200)->nullable();
            $table->string('failed_login_lockout',200)->nullable();
            $table->string('cookie_consent_tracking',200)->nullable();
            $table->string('privacy_policy_url',200)->nullable();
            $table->string('analytics_for_my_business',200)->nullable();
            $table->string('hsts_settings',200)->nullable();
            $table->string('content_security_policy',200)->nullable();
            $table->string('x_frame_options_header',200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_setting_securities');
    }
}
