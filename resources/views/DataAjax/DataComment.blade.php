
@foreach($comment as $row)
<div class="panel panel-default">
  <div class="panel-heading">By <b>{{ $row['comment_sender_name'] }}</b> on {{ $row['date'] }}<i></i></div>
  <div class="panel-body">{{ $row['comment'] }}</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="{{ $row['id'] }}">Reply</button></div>
 </div>
 @foreach($reply as $value)
  @if($value['parent_comment_id'] == $row['id'])
 <div class="panel panel-default" style="margin-left:48px">
    <div class="panel-heading">By <b>{{ $value['comment_sender_name'] }}</b> on <i>{{ $value['date'] }}</i></div>
    <div class="panel-body">{{ $value['comment'] }}</div>
  </div>
  @endif
  @endforeach
@endforeach
