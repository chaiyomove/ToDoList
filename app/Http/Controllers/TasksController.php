<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Request;
use App\Tasks;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();

        if ($tasks->last()){
            return response()->json([   
                                    'status_code' => '200',
                                    'msg' => 'OK',
                                    'data' => $tasks
                                ]);
        } else {
            return response()->json([   
                                    'status_code' => '404',
                                    'msg' => 'Not Found',
                                    'data' => $tasks
                                ]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        $task = Tasks::create($input);
        
        if ($task != NULL){
            return response()->json([   
                                    'status_code' => '200',
                                    'msg' => 'OK',
                                    'data' => $task
                                ]);
        } else {
            return response()->json([   
                                    'status_code' => '500',
                                    'msg' => 'Internal Server Error',
                                    'data' => $task
                                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Tasks::find($id);

        if ($task != NULL) {
            return response()->json([   
                                    'status_code' => '200',
                                    'msg' => 'OK',
                                    'data' => $task
                                ]);
        } else {
            return response()->json([   
                                    'status_code' => '404',
                                    'msg' => 'Not Found',
                                    'data' => $task
                                ]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = Request::all();
        $task = Tasks::find($id);

        if ($task == NULL){
            return response()->json([   
                                    'status_code' => '404',
                                    'msg' => 'Not Found',
                                    'data' => $task
                                ]);
        }

        if ($input['subject'] == NULL){
            array_forget($input, 'subject');
        } else {
            $task->subject = $input['subject'];    
        } 

        if ($input['content'] == NULL){
            array_forget($input, 'content');
        } else {
            $task->content = $input['content'];   
        } 

        if ($input['status'] != "0" && $input['status'] != "1"){
            array_forget($input, 'status');
        } else {
            $task->status = $input['status'] ;    
        } 

        $success = $task->save();

        if ($success){
            return response()->json([   
                                    'status_code' => '200',
                                    'msg' => 'OK',
                                    'data' => $task
                                ]);
        } else {
            return response()->json([   
                                    'status_code' => '500',
                                    'msg' => 'Internal Server Error'
                                ]);
        }

    }

    /**
     * Show the form for editing status field.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editStatus($id)
    {
        //
    }
    
    /**
     * Update status field in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request, $id)
    {
        $input = Request::all();
        $task = Tasks::find($id);

        if ($task == NULL){
            return response()->json([   
                                    'status_code' => '404',
                                    'msg' => 'Not Found',
                                    'data' => $task
                                ]);
        }

        if ($input['status'] != "0" && $input['status'] != "1"){
            array_forget($input, 'status');
        } else {
            $task->status = $input['status'] ;    
        } 

        $success = $task->save();

        if ($success){
            return response()->json([   
                                    'status_code' => '200',
                                    'msg' => 'OK',
                                    'data' => $task
                                ]);
        } else {
            return response()->json([   
                                    'status_code' => '500',
                                    'msg' => 'Internal Server Error'
                                ]);
        } 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Tasks::find($id);

        if ($task != NULL) {
            $task->delete();

            if (Tasks::find($id) == NULL){
                return response()->json([   
                                        'status_code' => '200',
                                        'msg' => 'OK'
                                    ]);
            } else {
                return response()->json([   
                                        'status_code' => '500',
                                        'msg' => 'Internal Server Error'
                                        
                                    ]);
            }
        } else {
            return response()->json([   
                                    'status_code' => '404',
                                    'msg' => 'Not Found'
                                ]);
        }
       

    }
}
