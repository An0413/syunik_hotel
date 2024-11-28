<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Questions\StoreRequest;
use App\Http\Requests\Admin\Questions\UpdateRequest;
use App\Models\About;
use App\Models\Questions;
use http\Env\Request;
use Illuminate\Support\Facades\File;


class QuestionsController extends Controller
{
    public function show()
    {
        $questions = Questions::orderBy('seq','ASC')->get();
        return view('admin.questions.show', compact('questions'));
    }

    public function create()
    {
        return view('admin.questions.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Questions::create($data);
        return redirect()->route('questions_show');
    }

    public function edit($id)
    {
        $questions = Questions::where('id', $id)->first();
        return view('admin.questions.edit', compact('questions'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $data = $request->validated();
        $up_data = $data;

        Questions::where('id', $id)->update($up_data);

        return redirect()->route('questions_show');
    }

    public function destroy($id)
    {
        $questions = Questions::find($id);

        Questions::where('id', $id)->delete();

        return redirect()->route('questions_show');

    }

}
