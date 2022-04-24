<?php

namespace App\Models\Resources;

use Illuminate\Support\Collection;

interface IResource
{
    public function collectionToArray(Collection $entities): array;
}