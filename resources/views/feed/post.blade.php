<div style="outline: 1px solid black; width: 400px">
    <div style=" display: flex">
        <div style=" width: 60px; height: 60px; background-color: red">picture</div>
        <div style="flex: 1; flex-direction:column">
            <div style="">
                <div>name</div>
                <div>date/time</div>
            </div>
            <div>post text</div>
            <div style="width 300px; height: 200px; background-color: blue">picture</div>
        </div>
        
    </div>
    <div style="width: 100%; background-color: green">interactions</div>
    {{-- <form action="{{route('testing.show')}}">
        <button type="submit">show</button>
    </form> --}}
    <p>{{$dbTesting->name}}</p>
</div>