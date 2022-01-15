<?php

namespace Customers\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class Customer extends Controller {

    public function index()
    {
       // return view('customers::admin.index');
        return view(moduleName('customers','admin','index'));
    }
}
