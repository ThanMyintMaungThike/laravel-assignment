<form action="{{route('products.save')}}" method="POST">
    @csrf
    <div>
        <label for="">Name</label>
        <input type="text" name='name' value=''>
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name='description'>
    </div>
    <div>
        <label for="">Status</label>
        <select name="status" id="">
            <option value="1">true</option>
            <option value="0">false</option>
        </select>
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name='price'>
    </div>
    <button value="submit">Submit</button>
</form>
