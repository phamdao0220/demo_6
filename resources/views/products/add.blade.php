@extends('layouts.admin')

@section('title')
    <title>Trang chủ </title>
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Trang thêm sản phẩm </h1>
                    </div>

                    <form method="post">
                        <div>
                            <label></label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                        </div>
                        <div>
                            <label>Password</label>
                            <input type="text" name="detail" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="text" name="detail" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="number" name="price" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="img" name="detail" class="form-control" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

