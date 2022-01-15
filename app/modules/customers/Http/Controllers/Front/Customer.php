<?php

namespace Customers\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class Customer extends Controller {

    public function index()
    {
         return view(moduleName('customers','front','index'));
    }
}
