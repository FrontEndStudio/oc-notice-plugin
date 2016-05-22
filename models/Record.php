<?php namespace Fes\Notice\Models;

use Model;

/**
 * Model
 */
class Record extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'fes_notice_records';

    public $belongsTo = [
        'category' => 'Fes\Notice\Models\Category'
    ];

    public $attachOne = [
        'image' => ['System\Models\File']
    ];

    public $attachMany = [
        'file' =>  ['System\Models\File', 'order' => 'sort_order']
    ];


    //
    // scopes
    //

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', true);
    }
}
