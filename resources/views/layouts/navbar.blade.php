<div class="container-fluid" id="tyson">
    <div class="text-center" id="tyson_text">
        <h2>@yield('title')</h2>
    </div>
</div>
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="300">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><img class="hidden" src="images/tysonlogowhite.png"></a>
        </div>
        <ul class="nav navbar-nav">
            <li id="content"><a href="/">Content</a></li>
            <li id="exercise_1"><a href="/exercise_1">Exercise 1</a></li>
            <li><a href="#">Page 2</a></li>
            <li><a href="#">Page 3</a></li>
        </ul>
    </div>
    <input type="hidden" id="is_active" value="@yield('active')">
</nav>