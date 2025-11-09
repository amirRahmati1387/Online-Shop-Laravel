<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('pic')
                    ->label("پروفایل")
                    ->default(null)
                    ->columnSpanFull(),
                // select::make("addmin")
                //     ->default("0")    
                //     ->label("مدیر سایت")
                //     ->options([
                //         '0' =>'مدیر نیست',
                //         '1' =>'مدیر سایت بشه'
                //     ]),
                TextInput::make('addmin')
                    ->label("مدیر سایت")
                    ->required()
                    ->default('0'),
                TextInput::make('staff')
                    ->label("همکار پشتیبانی")
                    ->required()
                    ->default('0'),
                TextInput::make('instructor')
                    ->label("فروشنده")
                    ->required()
                    ->default('0'),
                TextInput::make('name')
                    ->label("نام")
                    ->required(),
                TextInput::make('username')
                    ->label("نام کاربری")
                    ->default(null),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('mobile')
                    ->label("موبایل")
                    ->required(),
                DateTimePicker::make('email_verified_at')
                    ->label("تایید ایمیل"),
                TextInput::make('status')
                    ->label("وضعیت کاربر")
                    ->required()
                    ->default('1'),
                TextInput::make('verify')
                    ->label("وضعیت تایید کاربر")
                    ->required()
                    ->default('1'),
                TextInput::make('wallet')
                    ->label("مبلغ کیف پول")
                    ->required()
                    ->default('0'),
                TextInput::make('password')
                    ->label("رمز عبور")
                    ->password()
                    ->required(),
                Textarea::make('two_factor_secret')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('two_factor_recovery_codes')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('two_factor_confirmed_at'),
            ]);
    }
}
