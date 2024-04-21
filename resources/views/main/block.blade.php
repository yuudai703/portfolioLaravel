@extends("layout.app")
@section("content")
<input type="checkbox" id="overlay-input" />
<label for="overlay-input" id="overlay-button"><span></span></label>
<div id="overlay">
    <ul>
        <li><a onclick="selectMenu2('Home')">Home</a></li>
        <li><a onclick="selectMenu2('AboutMe')">About/me</a></li>
        <li><a onclick="selectMenu2('ResumeCV')">Resume/CV</a></li>
        <li><a onclick="selectMenu2('Skills')">Skills</a></li>
        <li><a onclick="selectMenu2('BlogArticles')">Blogs</a></li>
        <li><a onclick="selectMenu2('Contact')">Contact</a></li>
    </ul>
</div>
<div id="headerMenu">
    @include("main.menu")
</div>
<div id="Home" style="margin-bottom: 20%;">
    @include("main.home")
</div>
<div id="AboutMe">
    @include("main.aboutMe")
</div>

<div id="PortfolioWork">
</div>

<div id="ResumeCV">
    @include("main.ResumeCV")
</div>
<div class="skillblock">
    <div id="Skills">
        @include("main.skills")
    </div>
    <div id="myChart" class="myChart"></div>
</div>

<div id="BlogArticles">
    @include("main.blog")
</div>

<div id="Contact">
    @include("main.Contact")
</div>
@endsection