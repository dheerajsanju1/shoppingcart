{{-- @if(session()->has('user_session')) --}}


<div class="head-div">
    <div class="main">
        <div class="head">
            <span>My shopping project</span>
            <p>THE BIGGEST CHOICE OF THE WEB</p>
        </div>
        <div class="btn">
            {{-- <a href=""><input type="button" name="" value="Log out"></a> --}}
            <a style="color: aliceblue" href="{{url('logout-user')}}">logout</a>
        </div>
    </div>
</div>
<div class="home-page">
     <div class="pagnation">
        <div class="list">
            <ul>
                <a href="{{url('home-page')}}"><li>HOME</li></a>
                <li>NEW PROJECT</li>
                <li>SPECIAL</li>
                <li>ALL PRODUCTS</li>
                <li>REVIEWS</li>
                <a href="{{url('contact-head')}}"><li>CONTACT</li></a>
                <li>FAQS</li>
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
{{-- @else 
<script>window.location="{{url('/signup')}}"</script>
@endif --}}