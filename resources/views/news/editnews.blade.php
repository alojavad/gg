@extends ('layouts.dashboard')
@section('page_heading','Update News')
@section('section')

<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12">
    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/') }}/news/{!!$news->id!!}">
        <input type="hidden" name="_method" value="put" />

    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-group">
        <label for="InputTitle">Title</label>
        <textarea class="form-control" id="InputTitle" name="title" placeholder="Title" rows="1">{!!$news->title!!}</textarea>
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
        <label for="InputType">Publish</label>
        <select class="form-control" id="InputType" name="publi">
            <option value="1">عدم انتشار</option>
            <option value="2">اخرین اخبار</option>
            <option value="3">مهمترین اخبار</option>
            <option value="4">خبر ویژه 1</option>
            <option value="5">خبر ویژه 2</option>
            <option value="6">تیتر یک</option>
            <option value="7">یادداشت</option>
            <option value="8">گزارش</option>
            <option value="9">گفتگو</option>
            <option value="10">نوع 1</option>
            <option value="11">نوع 2</option>
            <option value="12">نوع 3</option>
        </select>
    </div>
    <div class="form-group">
        <label for="InputTitle">Refrence</label>
        <input type="text" class="form-control" id="InputRefre" name="refre" placeholder="Refre" value="{!!$news->refre!!}">
    </div>
    <div class="form-group">
        <label for="InputTitle">Image</label>
        <input type="text" class="form-control" id="InputImage" name="image" placeholder="Image" value="{!!$news->image!!}">
    </div>
    <div class="form-group">
        <label for="InputDesc">Abstract</label>
        <textarea class="form-control" id="InputAbst" name="abst" rows="10">{!!$news->abst!!}</textarea>
        <script type="text/javascript">
        CKEDITOR.replace( 'InputAbst' );
        </script>
    </div>

    <div class="form-group">
        <label for="InputDesc">Description</label>
        <textarea class="form-control " id="InputDesc" name="desc" rows="10">{!!$news->descr!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace( 'InputDesc' );
        </script>
    </div>

        <input type="text" class="form-control" style="border-radius: 25px;box-shadow: 5px 5px 5px #888888;"
               name="search" draggable="true" dir="rtl" onkeyup="showResultTag(this.value)" onmouseover="goBackTag()">
        <div id="livesearch"></div>

    <button type="submit" class="btn btn-default">Update</button>
</form>
    <hr>
    Delete this record
    <br>
    <form class="form-horizontal" role="form" method="post" action="{{ URL::to('/') }}/news/{!!$news->id!!}">
        <input type="hidden" name="_method" value="delete" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-default">Delete</button>
        </form>
        </div>
    </div>


</div>
@stop
