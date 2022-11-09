
<div class="head-div">
    <div class="main">
        <div class="head">
            <span>My shopping project</span>
            <p>THE BIGGEST CHOICE OF THE WEB</p>
        </div>
        <div class="btn">@if (!empty(session('username')))
            <a style="color: aliceblue;text-decoration:none" href="{{url('logout-user')}}">{{session('username')}}   logout</a>
            @else
            <a style="color: aliceblue" href="signup"> login</a>
            
        @endif
        </div>
    </div>
</div>
<div class="home-page">
     <div class="pagnation">
        <div class="list">
            <ul>
                <a href="{{url('home-page')}}"><li>HOME</li></a>
                <a href="newproducts"><li>NEW PRODUCTS</li></a>
                <a href="special"><li>SPECIAL</li></a>
                <a href="{{url('all-product')}}"><li>ALL PRODUCTS</li></a>
                <a href="{{url('contact-head')}}"><li>CONTACT</li></a>
               
            </ul>
        </div>
        <div class="search">
            <div class="search-1">
                <div class="input">
                    <input type="text" name="">
                </div>
                <div class="btnn">
                    <input type="button" name="" value="Search">
                </div>
            </div>
        </div>
    </div>
</div>