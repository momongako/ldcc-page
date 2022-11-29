<div id="search_form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/search" class="form-login" id="search-form" method="get">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search</h4>
                </div>
                <div class="modal-body">
                    <label for="">Key world</label>
                    <input type="text" id="search-keyword" name="search-keyword" placeholder="Key world">
                </div>
                @csrf
                <div class="modal-footer">
                    <button type="button" class="btn-linear" data-dismiss="modal">Cancel</button>
                    <button type="submit" id="submit-search" class="btn-hot" >Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
