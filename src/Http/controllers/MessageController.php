<?php

namespace DevPackage\Message\Http\controllers;

use App\Http\Controllers\Controller;
use DevPackage\Message\Models\Message;
use Illuminate\Http\Request;

/**
 *
 * @author weirui
 * @date 2021-10-14
 */
class MessageController extends Controller
{
    public function index()
    {
        return view("message::message");
    }

    public function save(Request $request)
    {
        $req = $request->all();
        // 加载扩展包的配置文件
        $config = config('message.config');
        $data = [
            'name' => $req['name'],
            'message' => $req['message'],
            'config' => $config
        ];
        Message::create($data);

        return redirect(route('message'));
    }
}
