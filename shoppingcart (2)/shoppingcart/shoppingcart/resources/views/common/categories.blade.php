
<ul>
   

    @foreach($data as $row)

        <a href="products{{$row->id}}"><li>{{$row->categories}}</li></a>

    @endforeach
</ul>