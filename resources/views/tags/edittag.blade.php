@extends ('layouts.dashboard')
@section('page_heading','Update Tag')
@section('section')

<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">

    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/') }}/admin/tag/{!!$tag->id!!}">
        <input type="hidden" name="_method" value="put" />
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label for="InputTitle">Title</label>
            <input type="text" class="form-control" id="InputTitle" name="title" placeholder="Title" value="{!! $tag->title!!}">
        </div>
        <div class="form-group">
            <label for="InputType">Type</label>
            <select class="form-control" id="InputType" name="dep">
                <option value="1">خبری</option>
                <option value="2">ورزشی</option>
                <option value="3">تکنولوژی</option>
            </select>
        </div>
        <div class="form-group">
            <label for="InputDesc">Description</label>
            <textarea class="form-control" id="InputDesc" name="descr" rows="6">{!! $tag->descr!!}</textarea>
            <script type="text/javascript">
                CKEDITOR.replace( 'descr' );
            </script>
        </div>
        <button type="submit" class="btn btn-default">Update</button>
    </form>
    <hr>
    Delete this record
    <br>
    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/') }}/admin/tag/{!!$tag->id!!}">
        <input type="hidden" name="_method" value="delete" />

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Delete</button>
    </form>


        </div>
    </div>


</div>
@stop