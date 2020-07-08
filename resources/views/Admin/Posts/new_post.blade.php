@extends('Admin.partials.backend_head')
@section('title' , 'Add New Post')
@section('main_content')
<div class="container-fluid">
   <div class="row">
      <div class="col-8 box-margin height-card">
         <div class="card">
            <div class="card-body">
               <h4 class="card-title">Add New Post</h4>
               <form class="cmxform" id="commentForm" method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                  @csrf
                  <fieldset>
                     <div class="form-group">
                        <label for="cname">Post Title</label>
                        <input id="cname" class="form-control" value="{{old('post_title')}}" name="post_title" type="text" >
                     </div>
                     <p class="text-danger">{{$errors->first('post_title')}}</p>
                     <div class="form-group">
                        <label for="cemail">Post Type</label>
                        <select class="form-control" id="post_type" name="post_type">
                           <option value="1" @if (old('post_type') == "1") {{ 'selected' }} @endif>Post</option>
                           <option value="2" @if (old('post_type') == "2") {{ 'selected' }} @endif>Video</option>
                        </select>
                     </div>
                     <p class="text-danger">{{$errors->first('post_type')}}</p>
                     <div class="form-group">
                        <label for="cemail">Post Section</label>
                        <select class="form-control" name="post_section">
                           <option value="1" @if (old('post_section') == "1") {{ 'selected' }} @endif>Section 1</option>
                           <option value="2" @if (old('post_section') == "2") {{ 'selected' }} @endif>Section 2</option>
                        </select>
                     </div>
                     <p class="text-danger">{{$errors->first('post_section')}}</p>
                     <div id="post_image" class="form-group" >
                        <label for="image">Image</label>
                        <input id="image" class="form-control" type="file" name="post_image">
                        <p class="text-danger">{{$errors->first('post_image')}}</p>
                     </div>
                     
                     <div id="post_video"  class="form-group" >
                        <label for="video">Video</label>
                        <input id="video" value="{{old('post_video')}}" class="form-control" type="url" name="post_video">
                        <p class="text-danger">{{$errors->first('post_video')}}</p>
                     </div>
                     
                     <div class="form-group">
                        <label for="ccomment">Post Content</label>
                        <textarea id="ccomment" class="form-control" name="post_content" >{{old('post_content')}}</textarea>
                     </div>
                     <p class="text-danger">{{$errors->first('post_content')}}</p>
                     <div class="form-group">
                        <label for="cemail">Post Status</label>
                        <select class="form-control" name="post_status">
                           <option value="1" @if (old('post_type') == "1") {{ 'selected' }} @endif>Publish</option>
                           <option value="0" @if (old('post_type') == "0") {{ 'selected' }} @endif>Unpublish</option>
                        </select>
                     </div>
                     <input class="btn btn-primary" type="submit" value="Submit">
                  </fieldset>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {
         if ($('#post_type').val() == 2) 
          {
              $('#post_video').show();
          }else{
             $('#post_video').hide();
          }
        $(document).on("change", "#post_type", function () {
            var PostType = $(this).val();
            if (PostType == 2) {
                $("#post_video").show();
            }else{
              $("#post_video").hide();
            }
        })
    })
</script>   
@endsection