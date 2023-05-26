<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $nc = Notification::count();
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $notifications = Notification::where('title', 'LIKE', "%$keyword%")
                ->orWhere('body', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('status', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $notifications = Notification::latest()->paginate($perPage);
        }

        return view('admin.notifications.index', compact('notifications', 'nc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.notifications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        

        $fcmKey="AAAAsxcFELM:APA91bGL3FoyduIetFkoOc0L7wVjzr3ewByi-i5Iikw2KvLFYbOzz1CgKa_E2V2pzsy4zkzOhP1Ov_WpPdsqOIx7qeYiAgmq3az2xjYcFWVgt9TdA68lzDDny9i8bN1hkSfGAiqM-CbL";

        $to = "all";
        $body = [
            "to" => $to,
            'notification'  => [
                'title' => $request->title,
                'body' => $request->body,
                'mutable_content' => true,
                // 'sound' => $sound,
                'click_action' => 'FLUTTER_NOTIFICATION_CLICK'
            ],
            'data'  => [
                'type' => '',
                'route' =>'',
                'args' => [],
            ],
        ];
        // call to send function

        $result=$this->send($body, $fcmKey);

        if($result['event']==true){
            $requestData['status']=1;
        }
        else{
            $requestData['status']=0;
        }

        Notification::create($requestData);



        return redirect('admin/notifications')->with('flash_message', 'Notification added!');
        //print_r($result);
    }


    public function send(array $body, string $key): array {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: key='.$key
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        $final = curl_exec($ch);
        $response = json_decode($final);
        curl_close($ch);
        if (!empty($response->message_id)) {
            
            $result = [
                "event" => true,
                "id"    => $response->message_id
            ];
            
        } else {
            $result = [
                "event"   => false,
                "response" => $final,
                "message" => [
                    'error'  => "No Responce",
                ],
            ];
        }
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $notification = Notification::findOrFail($id);

        return view('admin.notifications.show', compact('notification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $notification = Notification::findOrFail($id);

        return view('admin.notifications.edit', compact('notification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $notification = Notification::findOrFail($id);
        $notification->update($requestData);

        return redirect('admin/notifications')->with('flash_message', 'Notification updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Notification::destroy($id);

        return redirect('admin/notifications')->with('flash_message', 'Notification deleted!');
    }
}
