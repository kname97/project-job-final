<div class="row search-bar">
    <div class="col-9">
        <div class="row">
            <div class="form-group col-4">
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" id="category-select">
                    <option value=""></option>
                    @foreach($jobCategory as $cateJob)
                        <option value="{{$cateJob->id}}">{{$cateJob->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true" id="location-select">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="form-group col-4">
                <input type="text" class="form-control" id="name-company-search" name="name-company-search" placeholder=" nhập tên công ty">
            </div>
        </div>
    </div>
    <div class="col-3">
        <button type="button" class="btn btn-primary " id="apply-search-job">ÁP DỤNG</button>
    </div>



</div>