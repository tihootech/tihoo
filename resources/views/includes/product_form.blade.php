<div class="row mb-3">
    <div class="col-md-12">
        <div class="form-group">
            <label for="new-title"> title </label>
            <input type="text" name="title" id="new-title" class="form-control" required value="{{$product->title ?? null }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="new-image"> image </label>
            <input type="file" name="image" id="new-image" class="form-control" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="new-link"> link </label>
            <input type="text" name="link" id="new-link" class="form-control" required value="{{$product->link ?? null }}" dir="ltr">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="new-info"> info </label>
            <textarea name="info" id="new-info" rows="5" class="form-control">{{$product->info ?? null }}</textarea>
        </div>
    </div>
</div>
