<div class="col-{{isset($colSize) && $colSize != 'default' ? $colSize : 'md'}}-{{isset($colLength) && $colLength ? $colLength : '12'}} {{$colClass ?? ''}}">{{$slot}}</div>
