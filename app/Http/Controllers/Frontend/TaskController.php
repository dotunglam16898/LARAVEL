<?php

namespace App\Http\Controllers\Frontend;
use App\Task;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo "task controller";
        // dd('ham index');
        // return view('frontend.tasks.index');
        // echo "day la index";
        // return view('listwork');
        $tasks = Task::where('status',1)->orderBy('id','desc')->get();  



        return view('hwlession5')->with([
            'tasks'=> $tasks

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // echo "Day la create";
        dd('day la create');

        // return view('tasks.create');
        return view('listwork');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd('Đây là hàm store'.  $request);
        



        // $input= $request->only('name','deadline');
        // dd($input);
        $name = $request->get('name');
        
        $deadline = $request->get('deadline');
        $content = $request->get('content');

        $task = new Task();
        $task->name = $name;
        $task->status = 1;
        
        $task->deadline = $deadline;
        $task->content = $content;
        $task->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        dd('day la ham show');
        // return view('frontend.tasks.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "Day la edit".$id;
      
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
        dd('đây là update'.$request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // dd('Đã xóa công việc ' . $id);
        $task = Task::find($id);
        $task->delete();
        return redirect()->back();
    }

    public function complete($id){

      
        dd('hoan thanh' . $id);

    }

    public function reComplete($id){
        dd('sua lai' . $id ) ;

    } 
}
