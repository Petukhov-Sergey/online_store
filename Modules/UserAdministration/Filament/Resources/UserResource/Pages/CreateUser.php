<?php

namespace Modules\UserAdministration\Filament\Resources\UserResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Modules\UserAdministration\Filament\Resources\UserResource;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
}
