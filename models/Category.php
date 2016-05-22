<?php namespace Fes\Notice\Models;

use Str;
use Model;
use URL;
use October\Rain\Router\Helper as RouterHelper;
use Cms\Classes\Page as CmsPage;
use Cms\Classes\Theme;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;

    public $table = 'fes_notice_categories';

    /*
     * Validation
     */
//         'code' => 'unique:fes_notice_categories',

    public $rules = [
        'name' => 'required',
        'slug' => 'required|between:3,64|unique:fes_notice_categories'
    ];

    protected $guarded = [];

    public $hasMany = [
        'records' => ['Fes\Notice\Models\Record',
            'scope' => 'isPublished'
        ]
    ];

    public function beforeValidate()
    {
        // Generate a URL slug for this model
        if (!$this->exists && !$this->slug) {
            $this->slug = Str::slug($this->name);
        }
    }

    public function getRecordCountAttribute()
    {
        return $this->records()->count();
    }
}
