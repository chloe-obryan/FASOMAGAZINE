@extends('tamplate')

@section('contenu')



       
    <div class="hero-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-lg-8">
                        <!-- Breaking News Widget -->
                        <div class="breaking-news-area d-flex align-items-center">
                            <div class="news-title">
                                <p>Burkina News</p>
                            </div>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <li><a href="#">Le monde dans votre poche .</a></li>
                                    <li><a href="#">Tout connaitre sur le BURKINZA FASO.</a></li>
                                    <li><a href="#">Nam eu metus sitsit amet, consec!</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Breaking News Widget -->
                        <div class="breaking-news-area d-flex align-items-center mt-15">
                            <div class="news-title title2">
                                <p>International</p>
                            </div>
                            <div id="internationalTicker" class="ticker">
                                <ul>
                                    <li><a href="#">toutes les actualités pour votre suivi du monde.</a></li>
                                    <li><a href="#">soyer connecter pour etre informer de tout .</a></li>
                                    <li><a href="#">Magazin++ le meilleur site de **'information</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img src="../vendors/img/bg-img/16.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Finance</a>
                                    <a href="#" class="post-title">
                                        <h6>Financial news: A new company is born today at the stock market</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">Christinne Williams</a></p>
                                        <p class="post-excerp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu metus sit amet odio sodales placerat. Sed varius leo ac leo fermentum, eu cursus nunc maximus. Integer convallis nisi nibh, et ornare neque ullamcorper ac. Nam id congue lectus, a venenatis massa. Maecenas justo libero, vulputate vel nunc id, blandit feugiat sem. </p>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="post-like"><img src="../vendors/img/core-img/like.png" alt=""> <span>392</span></a>
                                            <a href="#" class="post-comment"><img src="../vendors/img/core-img/chat.png" alt=""> <span>10</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                        <div class="col-12 col-lg-5">
                            @forelse ($posts as $post)
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post-2">
                            <div class="post-thumb">
                                <a href="#"><img src="{{asset('storage').'/'.$post->photo}}"style="width:190px;height:90px;"  alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory">  {{ $post->title }}</a>
                                <div class="post-meta">
                                    <a href="#" class="post-title">
                                        <h6>{{ str_limit($post->body, 10) }}</h6>
                                    </a>
                                    <p class="post-author">By <a href="#">{{ $post->user->name }}</a></p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="post-like"><img src="../vendors/img/core-img/like.png" alt=""> <span>392</span></a>
                                        <a href="#" class="post-comment"><img src="../vendors/img/core-img/chat.png" alt=""> <span>{{ $post->comments_count }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="panel panel-default">
                            <div class="panel-heading">Not Found!!</div>
    
                            <div class="panel-body">
                                <p>Sorry! No post found.</p>
                            </div>
                            @endforelse
                        </div>
                     
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-blog-post small-featured-post d-flex">
                                <div class="post-thumb">
                                    <a href="#"><img src="../vendors/img/bg-img/20.jpg" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">Politique</a>
                                    <div class="post-meta">
                                        <a href="#" class="post-title">
                                            <h6>Sed a elit euismod augue semper congue sit amet ac sapien.</h6>
                                        </a>
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                        @forelse ($posts as $post)
                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="{{asset('storage').'/'.$post->photo}}" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory">{{ $post->category->name }}</a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6>{{ $post->title }}</h6>
                                </a>
                                <p class="post-date"><span> {{ $post->created_at->toDayDateTimeString() }}</span></p>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
                    @endforelse 
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->
@endsection
