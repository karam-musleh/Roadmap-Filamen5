<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;



class EditProfile extends  \Filament\Auth\Pages\EditProfile
{
    // protected string $view = '';
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Profile Information')
                    ->schema([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                TextInput::make('phone')
                ->required()
                    ->label('Phone Number')
                    ->tel()
                    ->minLength(10)
                    ->maxLength(10)
                    ->mask('(999) 999-9999')
                    ->prefixIcon('heroicon-o-phone')
                    ->columnSpanFull(),

                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
                $this->getCurrentPasswordFormComponent(),
            ]),
            ]);
    }
}
