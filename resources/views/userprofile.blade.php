@extends('layout')

@section('name','View User Profile')
@section('stylesheets')
    <style>
        a{
            color: #007bff;
        }
        a:hover{
            color: #0069d9;
        }
    </style>
@endsection
@section('content')
<!-- Profile -->
<div class="container mt-5 p-3 pt-5">
    <div class="row">
        <div class="col-md-3 menu">
            <div class="sidemenu text-center pt-2">
                <img src="{{asset('/dist/img/user.jpg')}}" alt="user" width="150px" class="img-fluid rounded-circle my-3 border border-warning shadow">
                <ul class="list-group">
                    <li class="list-group-item btn-outline-secondary">Question : <strong>12</strong></li>
                    <li class="list-group-item btn-outline-secondary">Answer : <strong>9</strong></li>
                  </ul>
            </div>
        </div>
        <div class="col-md-7 content p-2">
            <p class="mt-5 h3 font-weight-bold text-warning"><a href="" class="text-decoration-none">John Doe (@john_doe123)</a></p>
            <h5 class="my-3">Description :</h5>
            <p class="bg-light p-3 rounded"><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perspiciatis labore magni temporibus soluta. Atque itaque tempora repellendus rem quasi ipsam nesciunt perspiciatis. Velit dolores iusto magni voluptas repellat nulla. Nisi autem quos quis natus sed earum, consequuntur eos sit cupiditate saepe provident quibusdam facilis soluta iusto quasi optio commodi quaerat aperiam praesentium, unde dolorum? Et molestiae maxime quaerat consequuntur.</em></p>
        </div>
    </div>
</div>
<!-- endprofile -->

<!-- Question -->
<div class="question">
    <div class="py-2 text-dark sticky-top rounded bg-warning" >
        <div class="container text-center">
            <h4>Question List</h4>
        </div>
    </div>
    <div class="container">
        <div class="quest-group px-2">
            <div class="quest-item bg-light my-5 p-4 shadow rounded">
                <div class="quest-content">
                    <div class="row">
                        <div class="head-quest">
                            <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="75px">
                        </div>
                        <div class="head-quest-content">
                            <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                            <small class="text-muted">Sunday, 19 July 2020</small>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias. Harum, omnis. Dolores ad unde culpa harum tenetur?</p>
                </div>
                <div class="answer">
                    <h5>Answer :</h5>
                    <div class="answer-group pl-4">
                        <div class="answer-content p-3">
                            <div class="row">
                                <div class="head-answer">
                                    <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="65px">
                                </div>
                                <div class="head-answer-content">
                                    <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                    <small class="text-muted">Sunday, 19 July 2020</small>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias.</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <a href="" class="btn btn-warning">View More</a>
            </div>
            <div class="quest-item bg-light my-5 p-4 shadow rounded">
                <div class="quest-content">
                    <div class="row">
                        <div class="head-quest">
                            <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="75px">
                        </div>
                        <div class="head-quest-content">
                            <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                            <small class="text-muted">Sunday, 19 July 2020</small>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias. Harum, omnis. Dolores ad unde culpa harum tenetur?</p>
                </div>
                <div class="answer">
                    <h5>Answer :</h5>
                    <div class="answer-group pl-4">
                        <div class="answer-content p-3">
                            <div class="row">
                                <div class="head-answer">
                                    <img src="{{asset('/dist/img/user.jpg')}}" alt="user" class="rounded-circle mx-2 border border-warning" width="65px">
                                </div>
                                <div class="head-answer-content">
                                    <h6 class="mt-3"><a href="" class="text-decoration-none"><strong>John Doe (@john_doe123)</strong></a></h6>
                                    <small class="text-muted">Sunday, 19 July 2020</small>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem reprehenderit, cumque adipisci dolor ipsam, sint velit laboriosam officia neque blanditiis molestias.</p>
                        </div>
                        <hr>
                    </div>
                </div>
                <a href="" class="btn btn-warning">View More</a>
            </div>
        </div>
    </div>
</div>
<!-- endquestion -->
@endsection
