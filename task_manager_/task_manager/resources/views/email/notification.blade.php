Dear {{$data->task_owner}},<br><br>

The Task "{{$data->task_description}}"  {{ $data->status == 0 ? ' has been added for you' : 'has been marked as completed.' }}<br>

@if($data->status == 0) 
Kindly complete it by {{$data->task_eta}}.<br><br>
@endif

Thank You
