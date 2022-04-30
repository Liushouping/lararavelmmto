<?php

namespace App\Admin\Repositories;

use App\Models\Onemail as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Onemail extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
