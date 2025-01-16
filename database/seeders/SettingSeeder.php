<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;


class SettingSeeder extends Seeder
{
    public function run()
    {
        $settings = [
            ['key' => 'site_name', 'value' => 'Webbix Ray IT Solutions'],
            ['key' => 'site_tagline', 'value' => 'Innovative IT Solutions for Your Business'],
            ['key' => 'site_email', 'value' => 'support@webbixray.com'],
            ['key' => 'site_phone', 'value' => '+1234567890'],
            ['key' => 'site_address','value' => '123 IT Park, Tech City, Country'],
            ['key' => 'default_timezone','value' => 'Asia/Yangon'],
            ['key' => 'enable_2fa','value' => '0'],// 0 = Disabled, 1 = Enabled
            ['key' => 'maintenance_mode', 'value' => '0'],
            ['key' => 'maintenance_message','value' => 'The site is currently under maintenance. Please check back later.'],
            ['key' => 'referral_reward_percentage', 'value' => '10'],
            ['key' => 'default_currency', 'value' => 'MMK'],
            ['key' => 'paypal_enabled', 'value' => '1'],
            ['key' => 'user_registration_enabled','value' => '1'],// 0 = Disabled, 1 = Enabled
            ['key' => 'default_user_role','value' => 'customer'],
            ['key' => 'user_profile_editable','value' => '1'], // 0 = Disabled, 1 = Enabled

            ['key' => 'max_login_attempts', 'value' => '5'],
            ['key' => 'login_timeout', 'value' => '1'],
            ['key' => 'lockout_duration','value' => '15' ],// in minutes
            ['key' => 'password_min_length','value' => '8' ],
            ['key' => 'password_complexity','value' => '1' ],// 0 = Disabled, 1 = Enable

            ['key' => 'min_withdrawal_amount','value' => '50000' ],// Minimum withdrawal amount in currency units
            ['key' => 'withdrawal_processing_fee','value' => '2.5'], // Percentage

            ['key' => 'notify_admin_on_user_registration', 'value' => '1'],
            ['key' => 'notify_admin_on_abnormal_activity', 'value' => '1'],
            // Add more settings as needed

            ['key' => 'mail_driver','value' => 'smtp'],
            ['key' => 'mail_host','value' => 'smtp.mailtrap.io'],
            ['key' => 'mail_port','value' => '2525'],
            ['key' => 'mail_encryption','value' => 'tls'],
            ['key' => 'mail_username','value' => 'your_mailtrap_username'],
            ['key' => 'mail_password','value' => 'your_mailtrap_password'],
            ['key' => 'mail_from_address','value' => 'noreply@webbixray.com'],
            ['key' => 'mail_from_name','value' => 'Webbix Ray IT Solutions'],



        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], ['value' => $setting['value']]);
        }
    }
}
