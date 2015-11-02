@extends ('layouts.dashboard')
@section('page_heading','News')
@section('section')
<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">
@foreach ($data as $db)
    <p>{!!$db->title!!}</p>
    <p>{!!$db->descr!!}</p>
    <a href="{!! action('NewsController@edit',$db->id) !!}">Update</a>
    &nbsp;
    <a href="{!! action('NewsController@edit',$db->id) !!}">Delete</a>
&nbsp;

    <hr>
    @endforeach
    <?php echo $data->render(); ?>
</div>
</div>


</div>
@stop