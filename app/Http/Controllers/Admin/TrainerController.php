<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    public function index()
    {
        $pageTitle  = 'Trainers';
        $trainers   = Trainer::all();
        return view('admin.trainer.index', compact('pageTitle','trainers'));
    }

    public function create()
    {
        $pageTitle = 'Add Trainer';
        return view('admin.trainer.create', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image'         => ['required', 'image', 'mimes:jpg,jpeg,png'],
            'name'          => ['required', 'max:50'],
            'title'         => ['required', 'max:50'],
            'experience'    => ['required', 'numeric'],
        ]);

        if ($request->hasFile('image')) {
            $image = fileUploader($request->image, getFilePath('trainerProfile'));
        }

        Trainer::create([
            'name'          => $request->name,
            'title'         => $request->title,
            'image'         => $image??NULL,
            'experience'    => $request->experience,
        ]);

        $notify[] = ['success','Trainer Added Successfully'];
        return to_route('admin.trainers.index')->withNotify($notify);
    }

    public function show()
    {
        return 'test';
    }
}
