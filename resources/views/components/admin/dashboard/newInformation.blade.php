<form action="/admin/news" method="post" enctype="multipart/form-data">
    @csrf
    <legend class="text-info">Insert New Information</legend>
    <table class="table table-dark table-sm">
        <tbody>
        <tr>
            <td><label for="name" class="text-light">Game Name</label></td>
            <td><input type="text" name="name" class="form-control" autocomplete="off"
                       placeholder="Enter The Name Of The Game"></td>
        </tr>
        <tr>
            <td><label for="platform" class="text-light">Game Platform</label></td>
            <td>
                <select name="platform" class="form-control">
                    <option value="" hidden>Enter The Game Platform</option>
                    <option value="PlayStation">Play Station</option>
                    <option value="XBox">X-Box</option>
                    <option value="PC">Personal Computer</option>
                    <option value="Others">Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="release" class="text-light">Game Release</label></td>
            <td><input type="text" name="release" class="form-control" autocomplete="off"
                       placeholder="Enter The Game Release"></td>
        </tr>
        <tr>
            <td><label for="publisher" class="text-light">Game Publisher</label></td>
            <td><input type="text" name="publisher" class="form-control" autocomplete="off"
                       placeholder="Enter The Game Publisher"></td>
        </tr>
        <tr>
            <td><label for="genre" class="text-light">Game Genre</label></td>
            <td><input type="text" name="genre" class="form-control" autocomplete="off"
                       placeholder="Enter The Game Genre"></td>
        </tr>
        <tr>
            <td><label for="image" class="text-light">Game Image</label></td>
            <td><input type="file" name="image" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="description" class="text-light">Game Description</label></td>
            <td><textarea name="description" class="form-control" rows="3"></textarea></td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-around">
        <button type="submit" class="btn btn-sm w-25 btn-outline-success">Register</button>
        <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
    </div>
</form>
