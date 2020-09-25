<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);
        $data['avatar'] = upload($data['avatar']);
        Member::create($data);
        return back()->withMessage('Created');
    }

    public function update(Request $request, Member $member)
    {
        $data = $request->all();
        unset($data['_token'], $data['_method']);
        if (isset($data['avatar']) && $data['avatar']) {
            $data['avatar'] = upload($data['avatar'], $member->avatar);
        }
        $member->update($data);
        return back()->withMessage('Updated');
    }


    public function destroy(Member $member)
    {
        deleteFile($member->avatar);
        $member->delete();
        return back()->withMessage('Deleted');
    }
}
