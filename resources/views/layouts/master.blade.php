<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/blog">blog</a>
        </nav>
    </header>
   <br>

   @yield('content') 

   <br>
   <footer>
       <p>
        &copy; larave & sekolah koding 2021
       </p>
   </footer>
</body>
</html>