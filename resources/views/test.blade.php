<form target="myIframe" action="{{route('getpdf')}}" method="post">
    @csrf
    <input type="number" name="limit" required/>
    <input type="submit">
</form>

<iFrame src="" name="myIframe"  width="1200" height="1000"></iFrame>

