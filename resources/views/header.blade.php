<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>footer</title>
</head>
<body>
    @section('title','header')
    <style>
        .header {
            background-color: yellow;
            font-size: 8vh;
        }
        </style>
        
        <div class="header">
            <center>
           <p>Giant Book Supplier</p>   
             
            </center>
          
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            
            <div class="container-fluid">
                <a class="navbar-brand" href="/">Home</a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <div class="category-dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                              Categories
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/Category/{{1}}">Historical</a>
                              <a class="dropdown-item" href="/Category/{{2}}">Fantasy</a>
                              <a class="dropdown-item" href="/Category/{{3}}">Family Saga</a>
                
                          </div>
    
    
                        </div>
                        <div class="category-dropdown">
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-toggle="dropdown">
                              Publishers
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="/publisher/{{1}}">Falcon Publisher</a>
                              <a class="dropdown-item" href="/publisher/{{2}}">Gramedia</a>
                              <a class="dropdown-item" href="/publisher/{{3}}">Media Bintang Indonesia</a>
                
                          </div>
    
    
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</body>
</html>