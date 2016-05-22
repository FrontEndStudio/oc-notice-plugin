<?php namespace Fes\Notice\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Lang;
use Exception;
use SystemException;

class NoticeList extends ComponentBase
{

    public $records;
    public $noRecordsMessage;
    public $extraData;

    public function componentDetails()
    {
        return [
            'name'        => 'fes.notice::lang.components.list_title',
            'description' => 'fes.notice::lang.components.list_description'
        ];
    }

    //
    // Properties
    //

    public function defineProperties()
    {
        return [
            'sortColumn' => [
                'title'       => 'fes.notice::lang.components.list_sort_column',
                'description' => 'fes.notice::lang.components.list_sort_column_description',
                'type'        => 'autocomplete',
                'group'       => 'fes.notice::lang.components.list_sorting',
                'showExternalParam' => false
            ],
            'sortDirection' => [
                'title'       => 'fes.notice::lang.components.list_sort_direction',
                'type'        => 'dropdown',
                'showExternalParam' => false,
                'group'       => 'fes.notice::lang.components.list_sorting',
                'options'     => [
                    'asc'     => 'fes.notice::lang.components.list_order_direction_asc',
                    'desc'    => 'fes.notice::lang.components.list_order_direction_desc'
                ]
            ]
        ];
    }

    public function getSortColumnOptions()
    {
        $columnNames = ['title', 'content', 'sort_order'];
        $result = [];

        foreach ($columnNames as $columnName) {
            $result[$columnName] = $columnName;
        }

        return $result;

    }

    //
    // Rendering and processing
    //

    public function onRun()
    {

        $this->prepareVars();
        $this->records = $this->page['records'] = $this->listRecords();
    }

    public function onRender()
    {
        $this->extraData = $this->page['extraData'] = $this->property('extraData');
    }

    protected function prepareVars()
    {

        $this->noRecordsMessage = $this->page['noRecordsMessage'] = Lang::get($this->property('noRecordsMessage'));
    }

    protected function listRecords()
    {
        $modelClassName = 'Fes\Notice\Models\Record';
        $model = new $modelClassName();
        $model = $this->sort($model);
        return $model->where('published', '1')->get();
    }

    protected function sort($model)
    {

        $sortColumn = trim($this->property('sortColumn'));

        if (!strlen($sortColumn)) {
            return;
        }

        $sortDirection = trim($this->property('sortDirection'));

        if ($sortDirection !== 'desc') {
            $sortDirection = 'asc';
        }

        return $model->orderBy($sortColumn, $sortDirection);
    }
}
