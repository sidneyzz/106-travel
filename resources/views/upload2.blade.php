@extends('layouts.test')
<script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">上傳審dd核資料</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal" action="{{ route('experience') }}" enctype="multipart/form-data" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" class="form-control" id="upload_id" name="upload_id" value = {{$user_id}} > 

                                
                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="image_title">照片標題</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="image_title" name="image_title" >
                                        </div>
                                    </div> 

                                    <div  class="form-group" >
                                        <label class="control-label col-sm-4" for="fontsize">帶團照片</label>
                                        <div class="col-sm-8">
                                            <input  type="file" id="image"  name="image">
                                        </div>
                                    </div> 

                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="image_concent">內容</label>
                                        <div class="col-sm-10">
                                        <textarea name="image_concent" id="image_concent" cols="60" rows="6"></textarea>
                                        </div>
                                    </div> 
                             
                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="video_title">影片標題</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="video_title" name="video_title" >
                                        </div>
                                    </div> 

                                    <div  class="form-group" >
                                        <label class="control-label col-sm-4" for="video">帶團影片</label>
                                        <div class="col-sm-8">
                                            <input  type="file" id="video"  name="video">
                                        </div>
                                    </div> 

                                    <div  class="form-group" >
                                        <label class="control-label col-sm-2" for="video_concent">影片內容</label>
                                        <div class="col-sm-10">
                                        <textarea name="video_concent" id="video_concent" cols="60" rows="6"></textarea>
                                        </div>
                                    </div> 
                                    <button type="submit" class="btn btn-default ml-3">上傳</button>
                            </form>
                            
                           
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function () {
      

    });


</script>