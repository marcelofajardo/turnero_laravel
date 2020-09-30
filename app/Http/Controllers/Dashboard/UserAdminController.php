<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Library\Returns\ActionReturn;
use App\Library\Errors;
use App\Library\Messages;
use App\User;

class UserAdminController extends Controller
{
    public function index() {
        $lstUsers = User::where('is_active', true)->where('user_type_id', 1)->get();
        return View('dashboard.contents.users.admin.Index', ['lstUsers' => $lstUsers]);
    }

    public function create() {
        return View('dashboard.contents.users.admin.Create');
    }

    public function store(Request $request) {
        /* $request->validate([
            'txtName'           => 'required|string|max:255',
            'txtPhone'          => 'nullable|string|max:50',
            'txtAddress'        => 'required|string',
            'txtChannel'        => 'required|string|unique:offices,channel|max:80',
            'txtOfficeKey'      => 'required|string|unique:offices,office_key|max:20',
            'cmbMunicipality'   => 'required|integer|exists:municipalities,id'
        ],[
            'txtChannel.unique'     => 'El canal ingresado ya pertenece a otra sucursal.',
            'txtOfficeKey.unique'   => 'Este código de sucursal no está disponible.'
        ]);

        $objReturn = new ActionReturn('dashboard/offices/create', 'dashboard/offices');

        $objOffice                  = new Office();
        $objOffice->name            = $request->txtName;
        $objOffice->address         = $request->txtAddress;
        $objOffice->phone           = $request->txtPhone;
        $objOffice->channel         = $request->txtChannel;
        $objOffice->office_key      = $request->txtOfficeKey;
        $objOffice->municipality_id = $request->cmbMunicipality;
        $objOffice->is_active       = true;

        try {
            if($objOffice->save()) {
                $objReturn->setResult(true, Messages::OFFICE_CREATE_TITLE, Messages::OFFICE_CREATE_MESSAGE);
            } else {
                $objReturn->setResult(false, Errors::OFFICE_CREATE_01_TITLE, Errors::OFFICE_CREATE_01_MESSAGE);
            }
        } catch(Exception $exception) {
            $objReturn->setResult(false, Errors::getErrors($exception->getCode())['title'], Errors::getErrors($exception->getCode())['message']);
        }

        return $objReturn->getRedirectPath(); */
    }
}
