<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MailTemplate;

class MailTemplatesController extends Controller
{
    public function index()
    {
        $mail_templates = MailTemplate::orderBy('updated_at', 'desc')->paginate(20);
        return view('admin.mail_templates.index', compact('mail_templates'));
    }

    public function create()
    {
        return view('admin.mail_templates.add');
    }

    public function store(Request $request)
    {
        $maker = new MailTemplate;

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('admin.mail_templates.index');
    }

    public function edit($id)
    {
        $maker = MailTemplate::find($id);

        return view('admin.mail_templates.edit', compact('maker'));
    }

    public function update(Request $request, $id)
    {
        $maker = MailTemplate::find($id);

        $maker->fill($request->all());

        $maker->save();

        return redirect()->route('admin.mail_templates.index');
    }

    public function destroy($id)
    {
        $maker = MailTemplate::find($id);
        $maker->delete();
        session()->flash('flash_message', $maker->name.'を削除しました。');
        return redirect()->route('admin.mail_templates.index');
    }
}
