<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'company_id',
        'subtitle',
        'photo0',
        'profile',
        'question1',
        'answer1',
        'photo1',
        'question2',
        'answer2',
        'photo2',
        'question3',
        'answer3',
        'photo3',
        'sns_link1',
        'sns_link2',
        'sns_link3',
        'message',
    ];

    public function store($request)
    {
        $inputs = $request->validate([
            'name' => 'required',
            'company_id' => 'required',
            'subtitle' => 'required',
            'profile' => 'required',
            'question1' => 'required',
            'answer1' => 'required',
            'question2' => 'required',
            'answer2' => 'required',
            'question3' => 'required',
            'answer3' => 'required',
            'photo0' => 'image|nullable',
            'photo1' => 'image|nullable',
            'photo2' => 'image|nullable',
            'photo3' => 'image|nullable',
            'sns_link1' => 'nullable|url',
            'sns_link2' => 'nullable|url',
            'sns_link3' => 'nullable|url',
            'message' => 'required'
        ]);

        $this->name = $inputs['name'];
        $this->company_id = $inputs['company_id'];
        $this->subtitle = $inputs['subtitle'];
        $this->profile = $inputs['profile'];
        $this->question1 = $inputs['question1'];
        $this->answer1 = $inputs['answer1'];
        $this->question2 = $inputs['question2'];
        $this->answer2 = $inputs['answer2'];
        $this->question3 = $inputs['question3'];
        $this->answer3 = $inputs['answer3'];
        $this->message = $inputs['message'];

        // 画像ファイルの処理
        foreach (['photo0', 'photo1', 'photo2', 'photo3'] as $photoField) {
            if ($request->hasFile($photoField)) {
                $file = $request->file($photoField);
                $extension = $file->getClientOriginalExtension();
                $filename = Str::random(10) . '.' . $extension; // ランダムなファイル名を生成
                $file->storeAs('public/images', $filename); // storage/app/public/images に保存
                $this->$photoField = $filename;
            }
        }

        $this->sns_link1 = $inputs['sns_link1'] ?? null;
        $this->sns_link2 = $inputs['sns_link2'] ?? null;
        $this->sns_link3 = $inputs['sns_link3'] ?? null;

        $this->save();
    }
    //ここから追加
    public function memberDisplay()
    {
        $members = Member::all();

        return $members;
    }
    //ここまで追加


}
