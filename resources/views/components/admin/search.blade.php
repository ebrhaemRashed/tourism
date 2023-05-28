<div>
    <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
        <form action="{{ $route??'' }}" method="get">
            <div class="input-group">
                <input class="form-control" name="name" value="{{ Request()->query('name')??'' }}" placeholder="{{ TranslationHelper::translate('Search for...') }}" type="search">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="input-group-btn"><i class="fa fa-search"></i></span>
                    </button>
                </span>
            </div>
        </form>
    </ul>
</div>
