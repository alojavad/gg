@extends ('layouts.dashboard')
@section('page_heading','Tags')
@section('section')
<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">


<div class="col-md-1">

</div>
<div class="col-md-5">
<br>
    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/admin') }}/tag">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="InputTitle">Title</label>
            <input type="text" class="form-control" id="InputTitle" name="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="InputType">Type</label>
            <select class="form-control" id="InputType" name="dep">
                <option value="1">خبری</option>
                <option value="2">ورزشی</option>
                <option value="3">تکنولوژی</option>
                <option value="4">اجتماعی</option>
            </select>
        </div>
        <div class="form-group">
            <label for="InputDesc">Description</label>
            <textarea class="form-control" id="InputDesc" name="descr"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <script>
        CKEDITOR.replace('desc');
    </script>
    <br>
    <br>
    <br>

</div>
<div class="col-md-6">

    @if ($tag!="")

    @foreach ($tag as $db)
    <br><br>
    <p>
        {{$db->title}}
    </p>

    <p>
        {{$db->descr}}
        <a href="{!! action('TagController@edit',$db->id) !!}">Update</a>
        &nbsp;
        <a href="{!! action('TagController@edit',$db->id) !!}">Delete</a>
    </p>
    <br>
    @endforeach
    @endif
</div>
        </div>
    </div>
@if($tag !='')
    <?php echo $tag->render(); ?>
    @endif
</div>
@stop
