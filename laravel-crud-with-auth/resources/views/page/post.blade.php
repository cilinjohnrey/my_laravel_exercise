@extends('page.main')
@section('content')
    <div class="container">
        <div class="card shadow">
            <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">0</p>
                </div>
                <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#createPostBtn"
                    class="btn btn-primary">Create</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Post Title</h5>
                        <br>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam, adipisci.
                            Corporis soluta possimus quidem aliquid aperiam necessitatibus cupiditate autem dolorem?
                            Quos autem necessitatibus tenetur voluptas ipsum accusantium officia! A, sequi.</p>
                        <br>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        <button type="button" class="btn btn-info"><i class="fas fa-pen-to-square"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal top fade" id="createPostBtn" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        data-mdb-backdrop="static" data-mdb-keyboard="false">
        <div class="modal-dialog   modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Create Post</h4>
                    <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="" action="">
                        @csrf
                        <div class="form-outline">
                            <input type="text" class="form-control" id="title" name="title" required />
                            <label for="title" class="form-label">Post Title</label>
                        </div>
                        <br>
                        <div class="form-outline">
                            <textarea name="post_text" id="post_text" class="form-control" required></textarea>
                            <label for="text" class="form-label">Description</label>
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
