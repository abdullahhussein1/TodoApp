<?php

namespace App\Http\Controllers;

use App\Models\UserSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserSettingController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'theme' => 'string',
            'sort_by' => 'string',
            'user_id' => 'required|exists:user_accounts,id',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $data = $validator->validated();
        $newUserSetting = UserSetting::create($data);

        return response()->json($newUserSetting, 201);
    }
}
