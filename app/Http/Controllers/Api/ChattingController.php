<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Designer;
use App\Models\DesignerChat;
use App\Models\NotificationDeviceToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ChattingController extends Controller
{
    public function chatMessageStore(Request $request)
    {
        $chat = new DesignerChat();
        $chat->customer_id = $request->customer_id;
        $chat->seller_id = $request->designer_id;
        $chat->meeting_id = $request->meeting_id;
        $chat->message = $request->message;
        $chat->is_sender_client = $request->is_sender_client;
        $chat->date_time = Carbon::now();
        $chat->date = Carbon::now();
        $chat->created_at = Carbon::now();
        $chat->save();
//       Notification
        $receiverType = $request->is_sender_client ? 'designer' : 'generalUser';
        $receiverId = $request->is_sender_client ? $request->designer_id : $request->customer_id;
        $token = NotificationDeviceToken::where('user_type', $receiverType)->where('user_id', $receiverId)->pluck('token');
        $name = '';
        if ($request->is_sender_client) {
            $name = User::find($request->customer_id)->name;
        } else {
            $name = Designer::find($request->designer_id)->name;
        }
        $title = $name;
        $body = $request->message;
        $data = [
            "title" => $name,
            "body" => $request->message,
            "type" => "chat",
            "meeting_id" => $request->meeting_id,
            "seller_id" => $request->designer_id,
            "customer_id" => $request->customer_id,
            "receiver_type" => $request->is_sender_client ? 2 : 4,  /* 1=admin,2=designer,3=shopkeeper,4=user	*/
            "receiver_id" => $receiverId,
        ];
        sendNotification($title, $body, $token, $data);
        return $chat;
    }

    public function getChatData(Request $request)
    {
        return DesignerChat::where('meeting_id', $request->meeting_id)->get();

    }

    public function unseenMessageCount(Request $request)
    {
        $user_type = $request->user_type;
        $user_id = $request->user_id;

        if ($user_type == 'designer') {
            $count = DesignerChat::where("is_sender_client", 1)->where('seller_id', $user_id)->where('seen_status', 0)->count();
        }
        if ($user_type == 'generalUser') {
            $count = DesignerChat::where("is_sender_client", 0)->where('customer_id', $user_id)->where('seen_status', 0)->count();
        }


        $data = [
            'total_unseen' => $count,
        ];
        return response()->json($data);
    }

    public function seenMessage(Request $request)
    {
        $user_type = $request->user_type;
        $meeting_id = $request->meeting_id;
        $user_id = $request->user_id;
        if ($user_type == 'designer') {
            DesignerChat::where("is_sender_client", 1)->where('meeting_id', $meeting_id)->where('seen_status', 0)->update(['seen_status' => 1]);
        }
        if ($user_type == 'generalUser') {
            DesignerChat::where("is_sender_client", 0)->where('meeting_id', $meeting_id)->where('seen_status', 0)->update(['seen_status' => 1]);
        }
        if ($user_type == 'designer') {
            $count = DesignerChat::where("is_sender_client", 1)->where('seller_id', $user_id)->where('seen_status', 0)->count();
        }
        if ($user_type == 'generalUser') {
            $count = DesignerChat::where("is_sender_client", 0)->where('customer_id', $user_id)->where('seen_status', 0)->count();
        }
        $data = [
            'total_unseen' => $count,
        ];
        return response()->json($data);
    }
}
