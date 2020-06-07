<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDIT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">

   <div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
      <div class="panel-heading">
        Cập nhật công việc
      </div>
      <div class="panel-body">
        <!-- New Task Form -->
        <form
        action="{{ route('task.update', $task->id)  }}"
        method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <!-- Task Name -->
        <div class="form-group">
          <label for="task-name" class="col-sm-3 control-label">Tên công việc</label>

          <div class="col-sm-6">
            <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name }}">
          </div>
        </div>
        <div class="form-group">
          <label for="task-name" class="col-sm-3 control-label">Mô tả</label>

          <div class="col-sm-6">
            <textarea name="content" class="form-control">{{ $task->content }}</textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="task-name" class="col-sm-3 control-label">Thời hạn hoàn thành</label>

          <div class="col-sm-6">
            <input type="text" name="deadline" id="task-deadline" class="form-control" value="{{ $task->deadline }}">
          </div>
        </div>

        <div class="form-group">
          <label for="task-name" class="col-sm-3 control-label">Trạng thái</label>

          <div class="col-sm-6">
           <select name="priority" class="form-control">
             <option value="0" @if($task->priority == 0) selected="selected" @endif> 
              Bình thường 
            </option>

            <option value="1" @if($task->priority == 1 ) selected="selected" @endif>
             Quan trọng
           </option>
           <option value="2" @if($task->priority == 2 ) selected="selected" @endif>Khẩn cấp</option>
           
         </select>
       </div>
     </div>

     <!-- Add Task Button -->
     <div class="form-group">
      <div class="col-sm-offset-3 col-sm-6">
        <button type="submit" class="btn btn-default">
          <i class="fa fa-btn fa-plus"></i>Cập nhật công việc
        </button>
      </div>
    </div>
  </form>
</div>
</div>
</div>
</div>
</body>
</html>