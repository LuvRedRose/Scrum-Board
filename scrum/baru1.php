<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Scrum Board</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/index.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="baru1.php">Scrum Board</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="baru.php">Input<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="board.php">Table</a>
          </li>
      </div>
    </nav>

    <div class="container-fluid">
            <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="image/me.jpg " alt="Card image cap" style="height:500px" >
                <div class="card-body">
                  <h5 class="card-title">Alief Bagaskara Alamsyah</h5>
                  <p class="card-text">
                 NIM      : 012201805038 <br>
                 TTL      : 13 April 2000 <br>
                 Address  : Cikarang Barat <br>
                 Hobby : ------ 
                </p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="image/meisya.jpg" alt="Card image cap" style="height:500px">
                <div class="card-body">
                  <h5 class="card-title">Meisya Resti Garsari</h5>
                  <p class="card-text">
                  NIM  : 012201805033 <br/>
                  TTL   : 13 Mei 1998 <br/>
                  Address : Cikarang Baru <br/>
                  Hobby : Makan biar cepet gede
                </p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="image/ferdi.jpg" alt="Card image cap" style="height:500px">
                <div class="card-body">
                  <h5 class="card-title">Ferdinand Budiarto</h5>
                  <p class="card-text">
                  NIM : 012201805036<br>
                  TTL : 30 Agustus 1999<br>
                  Address :Cikarang <br>
                  Hobby : Futsal, Main Cewe    
                </p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="image/erna.jpg" alt="Card image cap" style="height:500px">
                <div class="card-body">
                  <h5 class="card-title">Ernawati Romauli</h5>
                  <p class="card-text">
                    NIM : 01201805022 <br/>
                    TTL : 10 November 1999 <br/>
                    Address : Perumahan BCM <br/>
                    Hobby : Ga Punya
                  </p>
                </div>
              </div>
            </div><br/>
            <p id="demo">Last Modified : </p>
            </div>
<br/> 
<script>	


        document.getElementById("demo").innerHTML = document.lastModified;
	
	</script>
  </body>
</html>
