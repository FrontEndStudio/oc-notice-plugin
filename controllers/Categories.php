<?php namespace Fes\Notice\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Fes\Notice\Models\Category;
use Flash;
use Lang;

class Categories extends Controller
{
    public $implement = [
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\ReorderController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['fes.notice.categories'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Fes.Notice', 'main-menu-item', 'side-menu-categories');
    }

    public function index_onDelete()
    {

        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $categoryId) {
                if ((!$category = Category::find($categoryId))) {
                    continue;
                }
            }

            $category->delete();
        }

        Flash::success(Lang::get('fes.notice::lang.action.category.deleted-success'));

        return $this->listRefresh();
    }
}
