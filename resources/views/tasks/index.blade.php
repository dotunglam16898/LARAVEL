
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Todo - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 1px;
        }
        .task-table tbody tr td:nth-child(2){
            width: 120px;
        }
        .task-table tbody tr td:nth-child(3){
            width: 100px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Danh sách công việc
                </a>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thêm công việc mới
                </div>

                <div class="panel-body">


                    <!-- New Task Form -->
                    <form action="{{ route('task.store')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        {{--  @method('GET') --}} {{-- // FAKE METHOD --}}

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Nội dung</label>

                            <div class="col-sm-6">
                                <input type="text" name="content" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Deadline</label>

                            <div class="col-sm-6">
                                <input type="date" name="deadline" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Độ ưu tiên</label>

                            {{-- <div class="col-sm-6">
                                <input type="text" name="priority" id="task-name" class="form-control" value="{{ old('task') }}">
                            </div> --}}
                            <div class="col-sm-6">
                                <select name="priority" class="form-control">
                                 <option value="0"> 
                                  Bình thường
                              </option>

                              <option value="1" >
                                 Quan trọng
                             </option>
                             <option value="2" >Khẩn cấp</option>

                         </select>
                     </div>
                 </div>

                 <!-- Add Task Button -->
                 <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Thêm công việc
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
            {{-- <button type="submit" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>Xoá
            </button> --}}

            <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Danh sách công việc hiện tại
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Tên công việc</th>
                            
                            <th>{{-- Tên công việc --}}</th>

                            <th>{{-- Tên công việc --}}</th>

                            <th>{{-- Tên công việc --}}</th>


                            <th>Trạng thái</th>

                            <th>Độ ưu tiên</th>

                            

                        </thead>


                        <tbody>


                            @foreach($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>
                                        @if($task->status == 1 )

                                        {{ $task['name'] }}

                                        @elseif($task->status == 2)

                                        <strike>{{ $task['name'] }} </strike>
                                        @endif



                                    </div>
                                </td>
                                <!-- Task Complete Button -->
                                <td>
                                    @if($task->status == 1)
                                    <a href="{{ route('task.complete',  $task['id']) }}" type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-check"></i>Hoàn thành
                                    </a>
                                    @elseif($task->status == 2)
                                    <a href="{{ route('task.reComplete', $task['id']) }}" type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-refresh"></i>Làm lại
                                    </a>
                                    @endif
                                </td>

                                {{-- <td>
                                    <a href="{{ route('task.show', $task['id']) }}" type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-check"></i>Detail
                                    </a>
                                </td> --}}
                                <td>
                                    <a href="{{ route('task.edit',$task['id']) }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-check"></i>Edit
                                    </a>
                                </td>
                                <!-- Task Delete Button -->
                                <td>
                                 <a href="{{route('task.destroy', $task['id'] ) }}" class="btn btn-danger">Xóa</a>
                             </td>
                             <td>
                                 @if($task->status == 1 )
                                 Đang làm
                                 @elseif($task->status ==2)
                                 Đã làm
                                 @endif
                             </td>

                             <td>
                                 @if($task->priority == 0)
                                 Bình thường
                                 @elseif($task->priority == 1)
                                 Quan trọng
                                 @else($task->priority == 2)
                                 Khẩn cấp
                                 @endif
                             </td>
                         </tr>
                         @endforeach

                         {{-- <tr>
                            <td class="table-text"><div>Làm bài tập Laravel </div></td>
                            
                            <td>
                                <a href="{{ route('task.complete',1) }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Hoàn thành
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('task.show',1) }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Detail
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('task.edit',1) }}" type="submit" class="btn btn-success">
                                    <i class="fa fa-btn fa-check"></i>Edit
                                </a>
                            </td>
                            
                            <td>
                             <a href="{{route('task.destroy',10)}}" class="btn btn-danger">Xóa</a>
                         </td>
                     </tr> --}}
                     {{-- <tr>
                        <td class="table-text"><div>Làm bài tập PHP  </div></td>
                        
                        <td>
                            <a href="{{ route('task.complete',2) }}" type="submit" class="btn btn-success" name="complete">
                                <i class="fa fa-btn fa-check"></i>Hoàn thành
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.show',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Detail
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.show',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Edit
                            </a>
                        </td>
                        
                        <td>
                            <a href="{{route('task.destroy',12)}}" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="table-text"><div><strike>Làm project Laravel </strike></div></td>
                        
                        <td>
                            <a href="{{ route('task.reComplete',5) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-refresh"></i>Làm lại
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.show',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Detail
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('task.show',1) }}" type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-check"></i>Edit
                            </a>
                        </td>
                        
                        <td>
                         <a href="{{route('task.destroy',15)}}" class="btn btn-danger">Xóa</a>
                     </td>
                 </tr> --}}
             </tbody>
         </table>
     </div>
 </div>
</div>
</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>