<html>
<head>
<title>@yield('title')</title>
</head>
<body>
@section('header')
<div class="header">
<h1>Header Part</h1>
</div>
@show
<div class="content">

@yield('content');
</div>

@section('footer')
<div class="footer">
<h1>Footer Part</h1>
</div>
@show
</body>
<style>
.header {
padding:20px;
background-color:antiquewhite;
text-align:center;

}
.footer{
    padding:20px;
background-color:antiquewhite;
text-align:center;
position:absolute;
bottom:0;
width:100%;
}
.content{
height:300px;
padding:20px;
text-align:center;
background-color:red;
}
</style>
</html>