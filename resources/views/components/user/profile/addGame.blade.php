<div class="row text-right" id="addGameBox">
    <div class="col-12 mb-4">
        <h5 class="text-custom">افزودن آگهی جدید</h5>
    </div>
    <div class="col-12">
        <form action="/games" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">نام بازی</label>
                    <input type="text" class="form-control" name="name" placeholder="نام بازی را وارد نمایید">
                </div>
                <div class="form-group col-md-6">
                    <label for="platform">پلتفرم</label>
                    <select name="platform" class="form-control">
                        <option hidden selected value="">یک مورد را انتخاب نمایید</option>
                        <option value="PlayStation">پلی استیشن</option>
                        <option value="XBox">ایکس باکس</option>
                        <option value="PC">کامپیوتر</option>
                        <option value="Others">دیگر</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="image">عکس بازی</label>
                    <input type="file" class="form-control" name="image">
                </div>
                <div class="form-group col-md-6">
                    <label for="price">قیمت(ریال)</label>
                    <input type="number" class="form-control" name="price">
                </div>
                <div class="form-group col-md-6">
                    <label for="city_id">شهرستان</label>
                    <select class="form-control selectpicker border" name="city_id" data-live-search="true">
                        <option hidden value="">شهر فروش بازی را انتخاب کنید</option>
                        @foreach($cities as $city)
                            <option class="text-right" dir="rtl" value="{{ $city->id }}" data-tokens="{{ $city->name }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="address">آدرس</label>
                    <input type="text" class="form-control" name="address" placeholder="آدرس تحویل را وارد نمایید">
                </div>
            </div>
            <div class="form-group">
                <label for="description">توضیحات</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-custom">ثبت آگهی</button>
        </form>
    </div>
</div>
