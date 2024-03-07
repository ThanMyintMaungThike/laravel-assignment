<form action="{{route('products.update', $product->id)}}" method="POST">
    @csrf
    {{-- @dd($product); --}}
    <div>
        <label for="">Name</label>
        <input type="text" name='name' value={{$product->name}}>
    </div>
    <div>
        <label for="">Description</label>
        <input type="text" name='description' value={{$product->description}}>
    </div>
    <div>
        <label for="">Status</label>
        <select name="status" id="">
            <option value="1" @if($product->status == 1 )selected @endif>true</option>
            <option value="0" @if($product->status == 0 )selected @endif>false</option>
        </select>
    </div>
    <div>
        <label for="">Price</label>
        <input type="text" name='price' value={{$product->price}}>
    </div>
    <button value="submit">Submit</button>
</form>
