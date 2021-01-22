<?php

namespace Maxstore\Testform\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maxstore\Testform\Models\TestForm;

class TestFormController extends Controller {

    public function index() {
        return view('testform::form');
    }

    public function sendMail(Request $request) {
        TestForm::create($request->all());

        return redirect(route('test-form'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }

}
