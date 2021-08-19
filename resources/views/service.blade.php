<!DOCTYPE html>
<html>
<head>
    <title>Service page</title>
</head>
<body>
<h1>This is service view page. control by FrontendController service method</h1>

 <h2>
     <ul style="list-style: none;">
         @php
            $i = 1;
         @endphp

         @foreach ($services as $item)
             <li><b style="color:green;">{{ $i++ }}.</b> {{ $item }}</li>
         @endforeach
         
     </ul>
 </h2>
</body>
</html>