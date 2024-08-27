<?php

namespace App\Http\Controllers;

use App\Models\FormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubmitContactFormController extends Controller {
    public function __invoke(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $url = url()->previous() . '#contact';

            // Redirect back with errors and include the fragment identifier
            return redirect($url)
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        FormSubmission::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ]);

        return redirect(url()->route('home') . '#contact')->with('success', 'Success! You will hear back from us soon.');
    }

}
