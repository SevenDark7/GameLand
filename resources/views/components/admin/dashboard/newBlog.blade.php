<form action="/blogs" method="post" enctype="multipart/form-data">
    @csrf
    <legend class="text-info">Insert New Blog</legend>
    <table class="table table-dark table-sm">
        <tbody>
        <tr>
            <td><label for="title" class="text-light">Blog Title</label></td>
            <td><input type="text" name="title" class="form-control" autocomplete="off"
                       placeholder="Enter The Title Of The Blog"></td>
        </tr>
        <tr>
            <td><label for="image" class="text-light">Blog Image</label></td>
            <td><input type="file" name="image" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="description" class="text-light">Blog Description</label></td>
            <td><textarea name="description" class="form-control" rows="3"></textarea></td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-around">
        <button type="submit" class="btn btn-sm w-25 btn-outline-success">Register</button>
        <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
    </div>
</form>
