@extends('master')
@section('title', 'Admin Control Panel')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12 mt-5">

                <div class="list-group">
                    <div class="list-group-item">
                        <div class="row-content">
                            <h5><i class="far fa-grin-tongue mb-3"></i> Manage User</h5>
                            <a href="/admin/users" class="btn btn-warning">All Users</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h5><i class="fa fa-users mb-3"></i> Manage Roles</h5>
                            <a href="/admin/roles" class="btn btn-info">All Roles</a>
                            <a href="/admin/roles/create" class="btn btn-success">Create A Role</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h5><i class="fas fa-file-signature mb-3"></i> Manage Posts</h5>
                            <a href="/admin/posts" class="btn btn-info">All Posts</a>
                            <a href="/admin/posts/create" class="btn btn-success">Create A Post</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                    <div class="list-group-item">
                        <div class="row-content">
                            <h5><i class="fas fa-cogs"></i> Manage Categories</h5>
                            <a href="/admin/categories" class="btn btn-info">All Categories</a>
                            <a href="/admin/categories/create" class="btn btn-success">New Category</a>
                        </div>
                    </div>
                    <div class="list-group-separator"></div>
                </div>

            </div>

        </div>
    </div>

@endsection