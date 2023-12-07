<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{

    public function index($company_id)
    {
        // 会社IDに基づいてメンバーをフィルタリング
        $members = Member::where('company_id', $company_id)->get();

        return view('member', compact('members', 'company_id'));
    }
    //ここまで追加


    //ここから追加
    public function memberRegister()
    {
        return view('memberRegister');
    }
    //ここまで追加
    //ここから追加
    public function memberStore(Member $member, Request $request)
    {
        $member->store($request);
        return back()->with('message', 'メンバーの登録が完了しました');
    }
    //ここまで追加

    //ここから追加
    public function admin(Member $member, $company_id)
    {
        $members = $member->where('company_id', $company_id)->get();
        return view('admin', compact('members', 'company_id'));
    }
    //ここまで追加

    public function show($company_id, $id)
    {
        // 特定のメンバーを取得
        $member = Member::where('company_id', $company_id)->where('id', $id)->firstOrFail();
        // 他のメンバーの情報も必要な場合
        $members = Member::where('company_id', $company_id)->get();

        return view('member_detail', compact('member', 'members', 'company_id'));
    }

    //ここから追加
    public function memberDelete($id)
    {
        Member::destroy($id);
        return back();
    }



    public function edit($company_id, $id)
    {
        $member = Member::where('company_id', $company_id)->where('id', $id)->firstOrFail();
        return view('member.edit', compact('member'));
    }
    public function update(Request $request, $company_id, $id)
    {
        $member = Member::where('company_id', $company_id)->where('id', $id)->firstOrFail();

        // 画像フィールドの処理 (photo0からphoto3まで)
        foreach (['photo0', 'photo1', 'photo2', 'photo3'] as $photoField) {
            if ($request->hasFile($photoField)) {
                $file = $request->file($photoField);
                $filename = $file->getClientOriginalName();
                $file->move(public_path('storage/images'), $filename);
                $member->{$photoField} = $filename;
            }
        }

        // 他のフィールドの更新
        $member->fill($request->except(['photo0', 'photo1', 'photo2', 'photo3']));
        $member->save();

        return redirect()->route('admin', ['company_id' => $company_id]);
    }
}
