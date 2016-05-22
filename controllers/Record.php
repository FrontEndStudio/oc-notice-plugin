<?php namespace Fes\Notice\Controllers;

use Flash;
use Lang;
use Backend\Classes\Controller;
use BackendMenu;
use Fes\Notice\Models\Record as Records;

class Record extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public $requiredPermissions = ['fes.notices.record'];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Fes.Notice', 'main-menu-item', 'side-menu-records');
    }

    public function index_onDelete()
    {

        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $postId) {
                if (!$post = Records::find($postId)) {
                    continue;
                }
                $post->delete();
            }

            Flash::success(Lang::get('fes.notice::lang.action.record.deleted-success'));
        }
        return $this->listRefresh();

    }

    public function create()
    {
        BackendMenu::setContextSideMenu('side-menu-records-create');
        return $this->asExtension('FormController')->create();
    }
}
