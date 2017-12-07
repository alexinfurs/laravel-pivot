<?php

namespace Fico7489\Laravel\Pivot\Tests\Models;

class Role extends BaseModel
{
    protected $table = 'sellers';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withPivot(['value']);
    }
}
