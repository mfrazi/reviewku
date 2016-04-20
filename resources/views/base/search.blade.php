<div class="container" style="margin-top: 2%; margin-bottom: 1%;">
    <div class="row">
        <div class="col-xs-8 col-sm-2 col-lg-2 col-xs-offset-2 col-sm-offset-0" style="margin-bottom: 0.5%;">
            <img src="{{ URL::asset('img/logocoba.png') }}" class="img-responsive"></img>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div id="imaginary_container">
                <div class="input-group stylish-input-group">
                    <input name="search" type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <a href="{{ route('search') }}" type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </a>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <select class="form-control">
                <option>Kategori</option>
                <option>Action</option>
                <option>Drama</option>
                <option>Thriller</option>
            </select>
        </div>
        <div class="col-sm-2">
            <select class="form-control">
                <option>Rating</option>
                <option>17 tahun keatas</option>
                <option>Dewasa</option>
                <option>Anak2</option>
            </select>
        </div>
    </div>
</div>