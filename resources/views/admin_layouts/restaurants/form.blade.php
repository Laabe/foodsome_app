<div class="card mb-3">
    <div class="card-header">
        <h3 class="card-title">Restaurant Info</h3>
    </div>
    <div class="card-body">
        <div class="mb-3 ">
            <label for="name" class="form-label">Restaurant Name</label>
            <div>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name') ?? $restaurant->name }}" placeholder="Enter Restaurant Name">
            </div>

            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="row mb-3 g-3">
            <div class="col-sm-6">
                <label for="city" class="form-label">City</label>
                <input type="text" id="city" name="city" class="form-control"
                    value="{{ old('city') ?? $restaurant->city }}" placeholder="Enter Restaurant City">

                @error('city')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="col-sm-6">
                <label for="adress" class="form-label">Adress</label>
                <input type="text" id="adress" name="adress" class="form-control"
                    value="{{ old('adress') ?? $restaurant->address }}" placeholder="Enter Restaurant Address">

                @error('adress')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

        </div>
        <div class="mb-3">
            <div class="form-label">Services</div>
            <div>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" {{ $restaurant->delivery == 'delivery' ? 'checked' : '' }}>
                    <span class="form-check-label">Delivery</span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" {{ $restaurant->delivery == 'takeout' ? 'checked' : '' }}>
                    <span class="form-check-label">Takeout</span>
                </label>
                <label class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" {{ $restaurant->delivery == 'both' ? 'checked' : '' }}>
                    <span class="form-check-label">Both</span>
                </label>
            </div>
        </div>
        <div class="mb-3 ">
            <label for="description" class="form-label">Descripiton</label>
            <div>
                <textarea name="description" id="description" cols="30" rows="5" placeholder="Write here..."
                    class="form-control">{{ old('description') ?? $restaurant->description }}</textarea>
            </div>

            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="row mb-3 g-3">
            <div class="col-sm-4">
                <label for="phone" class="form-label">Phone (Optional)</label>
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone"
                    value="{{ old('phone') ?? $restaurant->phone }}">
            </div>

            <div class="col-sm-4">
                <label for="email" class="form-label">E-mail (Optional)</label>
                <input type="email"name="email" id="email" class="form-control" placeholder="E-mail"
                    value="{{ old('email') ?? $restaurant->email }}">
            </div>
            <div class="col-sm-4">
                <label for="website" class="form-label">Website (Optional)</label>
                <input type="text" name="website" id="website" class="form-control" placeholder="Website"
                    value="{{ old('website') ?? $restaurant->website }}">
            </div>
        </div>
        <div class="mb-3">
            <div class="form-label">Restaurant Image</div>
            <input type="file" name="image" id="image" class="form-control">

            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
