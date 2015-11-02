@extends ('layouts.dashboard')
@section('page_heading','Comment')
@section('section')
<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">
    @foreach ($data as $db)
    <p>{!!$db->descr!!}</p>
            @if($db->name !='javad hajiyan')
    <a href="{!! action('AdminController@getPublishComment',$db->id) !!}">Publish</a>
    &nbsp;
            @else
    <a href="{!! action('AdminController@getNotPublishComment',$db->id) !!}">Not Publish</a>
            @endif
    <hr>
    @endforeach
    <?php echo $data->render(); ?>
        </div>
    </div>


</div>
@stop