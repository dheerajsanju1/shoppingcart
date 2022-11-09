
<ul>
   

    @foreach($data as $row)

        <a href="newproducts{{$row->id}}"><li>{{$row->categories}}</li></a>

    @endforeach
</ul>