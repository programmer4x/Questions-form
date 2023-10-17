<?php

namespace App\Repositories\FormQuestion;

use App\Models\FormQuestion;
use Illuminate\Http\Request;

class FormQuestionRepository implements FormQuestionRepositoryInterface
{

    public function getAllForm()
    {
       return FormQuestion::with('Questions')->get();
    }

    public function createForm($request)
    {
        return FormQuestion::create([
            'name'    => $request->name,
            'user_id' => $request->user_id,
            'status'  => $request->status,
            'uniLink' => $request->uniLink,
        ]);
    }

    public function updateForm($id, $request)
    {
        FormQuestion::find($formQuestion->id)->update([
            'name'   => $request->name,
            'status' => $request->status,
        ]);

        return FormQuestion::find($formQuestion->id);
    }

    public function deleteForm($id)
    {
        return FormQuestion::destroy($id);
    }

    public function getFormById($id)
    {
        return FormQuestion::find($id);
    }
}
