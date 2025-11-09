<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // ImageColumn::make('pic')
                //     ->label("تصویر پروفایل")
                //     ->defultImageUrl("/images/image.png")
                //     ->stacked()
                //     ->width(100)
                //     ->circular(),
                TextColumn::make('addmin')
                    ->label("مدیر")
                    ->searchable(),   
                TextColumn::make('staff')
                    ->label("همکار")
                    ->searchable(),
                TextColumn::make('instructor')
                    ->label("فروشنده")
                    ->searchable(),
                TextColumn::make('name')
                    ->label("نام")
                    ->searchable(),
                TextColumn::make('username')
                    ->label("نام کاربر")
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('mobile')
                    ->label("موبایل")
                    ->searchable(),
                TextColumn::make('email_verified_at')
                    ->label("تایید ایمیل")
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('status')
                    ->label("وضعیت")
                    ->searchable(),
                TextColumn::make('verify')
                    ->label("تایید")
                    ->searchable(),
                TextColumn::make('wallet')
                    ->label("کیف پول")
                    ->searchable(),
                TextColumn::make('two_factor_confirmed_at')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
