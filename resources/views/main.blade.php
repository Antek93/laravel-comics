@extends('home')
@section('content')
    
        <div class="container-b">
            <!-- MAIN CONTAINER-->
            <div class="wallpaper"></div>
            <!--BACKGROUND MAIN - HEROES THEME -->
            <div class="carousello-container">
                <!-- CAROUSEL CONTAINER -->

                <div class="carousello">
                    <!--ACTUAL CAROUSEL-->
                    <div v-for="info in datiJason" class="comicon-box">
                        <!--V-FOR cycling ON datiJason array-->
                        <img :src="info.thumb" alt="">
                        <div> {{ info . series }}</div>
                    </div>
                </div>

                <div class="loadMoreplus">
                    <!--LOAD MORE BUTTON-->
                    <button>
                        Load More
                    </button>
                </div>
            </div>

            <div class="current-tv-series">
                <!--CURRENT SERIES BADGE-->
                Current series
            </div>
        </div>
@endsection
