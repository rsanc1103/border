<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DbTesting extends Model
{
     /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'dbTesting';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['name'];

    // /**
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function project()
    // {
    //     return $this->belongsTo('App\Project', 'project_project_id', 'project_id');
    // }

}
