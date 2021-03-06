<?php

namespace Pterodactyl\Http\Requests\Admin\Servers\Databases;

use Pterodactyl\Http\Requests\Admin\AdminFormRequest;

class StoreServerDatabaseRequest extends AdminFormRequest
{
    /**
     * Validation rules for database creation.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'database' => 'required|string|min:1|max:24',
            'remote' => 'required|string|regex:/^[0-9%.]{1,15}$/',
            'database_host_id' => 'required|integer|exists:database_hosts,id',
        ];
    }
}
