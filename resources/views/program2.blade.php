<link rel="stylesheet" href="/css/app.css">
@extends('layouts.app')
@section('content')
<body>
<div class="mymovies">
        <h1>My Favorite Movies</h1>
        <button>Click Here!</button>
    </div>

    <div class="form-box">
        <div class="form">
            <form class="form-floating">
                <input type="text" class="form-control" id="floatingInputValue" placeholder="name@example.com">
                <label for="floatingInputValue">Movie url</label>
              </form>
              <br>  
              <div class="form-floating">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                  <option selected>-- select a rating --</option>
                  <option value="1">One Star</option>
                  <option value="2">Two Stars</option>
                  <option value="3">Three Stars</option>
                  <option value="3">Four Stars</option>
                  <option value="3">Five Stars</option>
                </select>
                <label for="floatingSelect">Movies Ratings</label>
              </div>
              <br>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Comments</label>
              </div>
              <br>
              <div class="button">
                <button class="save">Save</button>
                <button class="close">Close</button>
              </div>    
              
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top"
                        src="https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The Avengers</h5>
                        <p class="card-text">Fight Club best film no cap shesh.</p>
                        <p>⭐⭐⭐</p>
                        <p class="comments">Greatest movie of all time</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top"
                        src="https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The Avengers</h5>
                        <p class="card-text">The Avengers best film no cap shesh.</p>
                        <p>⭐⭐⭐</p>
                        <p class="comments">Greatest movie of all time</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top"
                        src="https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The Avengers</h5>
                        <p class="card-text">The Avengers best film no cap shesh.</p>
                        <p>⭐⭐⭐</p>
                        <p class="comments">Greatest movie of all time</p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card">
                    <img class="card-img-top"
                        src="https://upload.wikimedia.org/wikipedia/en/8/8a/The_Avengers_%282012_film%29_poster.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">The Avengers</h5>
                        <p class="card-text">The Avengers best film no cap shesh.</p>
                        <p>⭐⭐⭐</p>
                        <p class="comments">Greatest movie of all time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
@endsection