
@if($errors->any())
<div class="row my-4">
    <diV class="col-md-6 mx-auto">
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                    {{$error}}
            </div>
        @endforeach
    </diV>
</div>
@endif