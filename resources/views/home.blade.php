@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5"><img src="/img/FFCProfilePhoto.jpg" alt="Profile Logo" class='rounded-circle' width='150' height='150'></div>
       <div class="col-9 pt-5">
           <div class='d-flex justify-content-between align-items-center'>
               <h1>{{ $user->username }}</h1>
               <a href="#" class='btn btn-primary'>Add new post</a>
           </div>
           <div class='d-flex'>
               <div class='pr-5'><strong>153</strong> posts</div>
               <div class='pr-5'><strong>23k</strong> followers</div>
               <div class='pr-5'><strong>212</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
           <div>{{ $user->profile->description }}</div>
           <div><a href="#" class='font-weight-bold'>{{ $user->profile->url }}</a></div>
       </div>
   </div>
   <div class="row pt-5">
       <div class="col-4"><img src="/img/postphoto.jpg" alt="Photo Post" class='w-100'></div>
       <div class="col-4"><img src="/img/postphoto.jpg" alt="Photo Post" class='w-100'></div>
       <div class="col-4"><img src="/img/postphoto.jpg" alt="Photo Post" class='w-100'></div>
   </div>
</div>
@endsection
