<div class="single_leftbar">
    <h2><span>Recent Post</span></h2>
    <div class="singleleft_inner">
      <ul class="recentpost_nav wow fadeInDown">
        @foreach ($recent  as $item)
        <li><a href="{{route('detail',$item->id)}}"><img src="{{url($item->image)}}" alt=""></a> <a class="recent_title" href="{{route('detail',$item->id)}}"> {{$item->title}}</a></li>
        @endforeach
      </ul>
    </div>
  </div>
