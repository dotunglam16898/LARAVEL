<!DOCTYPE html>
<html lang="en">
<head>
  <title>SHOW</title>
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
        Chi tiết công việc
      </div>
      <div class="panel-body">
        <h4>Tên công việc: {{ $task->name }}</h4>

        <h4>Nội dung</h4>{{ $task->content }}
        <h4>Thời hạn</h4>{{ $task->deadline }}
      </div>
    </div>
  </div>
</div>
</body>
</html>