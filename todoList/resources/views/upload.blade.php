<!DOCTYPE html>
UPLOAD PICTURE
<li><a href="{{ url('/home') }}">Home</a></li>
<div>
    <form action="{{ route('saveItem') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="form-group">
            <input type="file" name="file" required>
        </div>
        <button type="submit">Submit</button>
    </form>

</div>
