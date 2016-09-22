<div class="container wrapper">
    <div class="row">
        <form class="col-md-6" id="createOfferForm" onsubmit='return false'>
            <input type="hidden" name="user_id">
            <div class="form-group">
                <label for="exampleTextarea">Details</label>
                <textarea class="form-control" id="exampleTextarea" name="details" placeholder="Enter your offer" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleSelect1">Category:</label>
                <div class="input-group">
                <select class="custom-select" name="category_id">
                  <option selected>Choose category</option>
                  <optgroup label="For home">
                      <option value="2">Curatenie & Menaj</option>
                      <option value="3">Mentenanta</option>
                  <optgroup label="Services">
                      <option value="7">Transport</option>
                      <option value="1">Meditatii</option>
                      <option value="6">Traduceri</option>
                      <option value="4">Administratie</option>
                      <option value="5">Curierat</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label for="input-price">Price:</label>
                <input type="number" class="form-control" id="input-price" name="price" placeholder="Your price tag">
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input">Sunt de acord cu termenii si conditiile...</label>
            </div>
            <button type="submit" class="btn btn-primary" id="add_offer">Submit</button>
        </form>
    </div>
</div>