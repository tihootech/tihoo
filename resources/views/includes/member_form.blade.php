<div class="row mb-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="new-name"> name </label>
            <input type="text" name="name" id="new-name" class="form-control" required value="{{$member->name ?? null }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="new-post"> post </label>
            <input type="text" name="post" id="new-post" class="form-control" required value="{{$member->post ?? null }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="new-avatar"> avatar </label>
            <input type="file" name="avatar" id="new-avatar" class="form-control" @unless($member) required @endunless>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="new-quote"> quote </label>
            <textarea name="quote" id="new-quote" rows="3" class="form-control">{{$member->quote ?? null }}</textarea>
        </div>
    </div>
</div>
