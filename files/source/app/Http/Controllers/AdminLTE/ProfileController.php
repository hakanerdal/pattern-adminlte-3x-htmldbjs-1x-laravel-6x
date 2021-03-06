<?php

namespace App\Http\Controllers\AdminLTE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminLTE;
use App\AdminLTEUser;

class ProfileController extends Controller
{

    public $controllerName = 'profile';

    public function index(Request $request)
    {

        $viewName = ('adminlte.'
                . $this->controllerName
                . '_detail');

        if (view()->exists('adminlte.custom.'
                . $this->controllerName
                . '_detail'))
        {
            $viewName = 'adminlte.custom.'
                    . $this->controllerName
                    . '_detail';
        } // if (view()->exists('adminlte.custom.'

        $adminLTE = new AdminLTE();

        $viewData['controllerName'] = $this->controllerName;
        $viewData['user'] = $adminLTE->getUserData();

        return view($viewName, $viewData);

    }

    public function showDetailPage(Request $request)
    {
        return $this->index($request);
    }

    public function showEditPage(Request $request)
    {

        $viewName = ('adminlte.'
                . $this->controllerName
                . '_edit');

        if (view()->exists('adminlte.custom.'
                . $this->controllerName
                . '_edit'))
        {
            $viewName = 'adminlte.custom.'
                    . $this->controllerName
                    . '_edit';
        } // if (view()->exists('adminlte.custom.'

        $adminLTE = new AdminLTE();

        $viewData['controllerName'] = $this->controllerName;
        $viewData['user'] = $adminLTE->getUserData();

        return view($viewName, $viewData);

    }

}
