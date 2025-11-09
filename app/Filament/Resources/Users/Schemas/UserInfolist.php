<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UserInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                
                // ImageColumn::make('pic')
                //     ->label("تصویر پروفایل")
                //     ->defultImageUrl("/images/image.png")
                //     ->stacked()
                //     ->width(100)
                //     ->circular(),






                // TextEntry::make('pic')
                //     ->label('تصویر پروفایل')
                //     ->placeholder('-')
                //     ->columnSpanFull(),
                TextEntry::make('addmin')
                    ->label('مدیز سایت'),
                TextEntry::make('staff')
                    ->label('همکار سایت'),
                TextEntry::make('instructor')
                    ->label('فروشنده سایت'),
                TextEntry::make('name')
                    ->label('نام و نام خانوادگی'),
                TextEntry::make('username')
                    ->label('نام کاربر')
                    ->placeholder('-'),
                TextEntry::make('email')
                    ->label('آدرس ایمیل'),
                TextEntry::make('mobile')
                    ->label('شماره موبایل'),
                TextEntry::make('email_verified_at')
                    ->label('تایید ایمیل')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('status')
                    ->label('وضعیت کاربر'),
                TextEntry::make('verify')
                    ->label('وضعیت کاربر'),
                TextEntry::make('wallet')
                    ->label('مبلغ کیف پول'),
                TextEntry::make('two_factor_secret')
                    ->label('تایید دو مرحله ای')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('two_factor_recovery_codes')
                    ->label('کد باز یابی تایید دو مرحله ای')
                    ->placeholder('-')
                    ->columnSpanFull(),
                TextEntry::make('two_factor_confirmed_at')
                    ->label('کد اصالت سنجی  تایید دو مرحله ای')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->label('تاریخ عضویت')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->label('تاریخ بروزرسانی پروفایل')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
