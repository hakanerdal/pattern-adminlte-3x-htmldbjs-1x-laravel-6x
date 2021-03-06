<?php

namespace App\Http\Controllers\AdminLTE\HTMLDB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminLTE;
use App\AdminLTEUser;
use App\HTMLDB;

class PagePermissionController extends Controller
{
    public $columns = [
        'id',
        'input_id',
        'edit_permission',
        'widget_permission'
    ];

    public $protectedColumns = [];
    public $row = [];

    public function get(Request $request)
    {

        $parameters = $request->route()->parameters();

        $pageName = isset($parameters['pageName'])
                ? htmlspecialchars($parameters['pageName'])
                : '';

        $list = array();

        $adminLTE = new AdminLTE();

        $userData = $adminLTE->getUserData();

        $edit_permission = $adminLTE->checkUserEditPermission(
                $pageName,
                $userData);
        
        $list[0]['id'] = 1;
        $list[0]['input_id'] = 'page_edit_permission';
        $list[0]['edit_permission'] = $edit_permission ? 1 : 0;
        $list[0]['widget_permission'] = $userData['widget_permission'];

        $objectHTMLDB = new HTMLDB();
		$objectHTMLDB->list = $list;
        $objectHTMLDB->columns = $this->columns;
        $objectHTMLDB->printHTMLDBList();

        return;

    }

}
