

 @foreach ($list as $value)

{{ $value['name'] }} <br>
@if($value['status'] ===0 )
Chưa làm <br>
@elseif($value['status'] ==1 )
Đã hoàn thành <br>
@else
không thực hiện <br>
@endif

@endforeach 