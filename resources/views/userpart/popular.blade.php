<div class="single_leftbar wow fadeInDown">
    <h2><span>Popular Post</span></h2>
    <div class="singleleft_inner">
        <ul class="catg3_snav ppost_nav wow fadeInDown">
            @foreach ($populars as $item)
            <li>
                <div class="media"> <a href="{{$item->id}}" class="media-left"> <img alt="" src="{{url($item->image)}}" > </a>
                <div class="media-body"> <a href="{{route('detail', $item->id)}}" class="catg_title"> {{$item->title}}</a></div>
                </div>
            </li>
            @endforeach
          </ul>
    </div>
  </div>
