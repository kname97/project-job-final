<form method="get" action="{{route('getviewSearch')}}" style="width: 100%">

    <div class="row search-bar">
        <div class="col-9">
            <div class="row">
                <div class="form-group col-6">
                    <select class="form-control select2 select2-hidden-accessible" name="cate" style="width: 100%;" tabindex="-1"
                            aria-hidden="true" id="category-select">
                        <option value=""></option>
                        @foreach($jobCategory as $cateJob)
                            <option value="{{$cateJob->name}}">{{$cateJob->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-6">
                    <select class="form-control select2 select2-hidden-accessible" name="area" style="width: 100%;" tabindex="-1"
                            aria-hidden="true" id="location-select">
                        <option value=""></option>
                        @foreach($locations as $location)
                            <option value="{{$location->city}}">{{$location->city}}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
        <div class="col-3">
            <button type="submit" class="btn btn-primary " id="apply-search-job">ÁP DỤNG</button>
        </div>
    </div>
</form>




