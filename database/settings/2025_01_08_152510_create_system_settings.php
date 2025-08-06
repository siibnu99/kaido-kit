<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('SystemSetting.site_name', 'Spatie');
        $this->migrator->add('SystemSetting.site_active', true);
        $this->migrator->add('SystemSetting.registration_enabled', true);
        $this->migrator->add('SystemSetting.login_enabled', true);
        $this->migrator->add('SystemSetting.password_reset_enabled', true);
        $this->migrator->add('SystemSetting.sso_enabled', true);
    }
};
