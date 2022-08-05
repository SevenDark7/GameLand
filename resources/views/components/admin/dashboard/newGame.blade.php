<form action="/games" method="post" enctype="multipart/form-data">
    @csrf
    <legend class="text-info">Insert New Game</legend>
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
                    <option value="" hidden>Select The Game Platform</option>
                    <option value="PlayStation">Play Station</option>
                    <option value="XBox">X-Box</option>
                    <option value="PC">Personal Computer</option>
                    <option value="Others">Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="city_id" class="text-light">Game City</label></td>
            <td>
                <select class="form-control selectpicker border" name="city_id" data-live-search="true">
                    <option dir="ltr" class="text-left" hidden value="">Select The Game City</option>
                    @foreach($cities as $city)
                        <option class="text-right" dir="rtl" value="{{ $city->id }}" data-tokens="{{ $city->name }}">{{ $city->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
{{--        <tr>--}}
{{--            <td><label for="genre" class="text-light">Game Genre</label></td>--}}
{{--            <td><input type="text" name="genre" class="form-control" placeholder="Enter The Game Genre"></td>--}}
{{--        </tr>--}}
        <tr>
            <td><label for="address" class="text-light">Game Address</label></td>
            <td><input type="text" name="address" class="form-control" autocomplete="off"
                       placeholder="Enter Your Address"></td>
        </tr>
        <tr>
            <td><label for="image" class="text-light">Game Image</label></td>
            <td><input type="file" name="image" class="form-control"></td>
        </tr>
        <tr>
            <td><label for="price" class="text-light">Game Price</label></td>
            <td><input type="number" name="price" class="form-control" placeholder="Enter The Game Price"></td>
        </tr>
        <tr>
            <td><label for="description" class="text-light">Game Description</label></td>
            <td><textarea name="description" class="form-control" rows="3"></textarea></td>
        </tr>
        </tbody>
    </table>
    <div class="d-flex justify-content-around">
        <input type="hidden" name="status" value="1">
        <button type="submit" class="btn btn-sm w-25 btn-outline-success">Register</button>
        <button type="reset" class="btn btn-sm w-25 btn-outline-danger">Cancel</button>
    </div>
</form>
