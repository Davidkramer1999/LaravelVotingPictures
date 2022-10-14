<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<div style="color: black;">
    <p> To do list</p>

{{--    @foreach($listItems as $listItem)--}}
{{--        <div>Item:{{ $listItem -> name }}</div>--}}
{{--    @endforeach--}}
</div>

<div>


    <form action="{{ route('saveItem') }}" method="post" enctype="multipart/form-data">
        <!-- Add CSRF Token -->
        @csrf
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


</html>
