<!-- Slider 
<section id="slider">
        <div class="container">
            <div class="row">

                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        @foreach( $all_published_slider as $v_slider )
                            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                        
                    <div class="carousel-inner" role="listbox">
                        @foreach( $all_published_slider as $v_slider )
                        <div class="item {{ $loop->first ? 'active' : '' }}" >
                            <img src="{{ $v_slider->slider_image }}" style="width: 100%; height: 450px;" />
                        </div>
                        @endforeach
                    </div>
                    
                    <a href="#carousel-example-generic" class="left carousel-control hidden-xs" data-slide="prev" role="button">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a href="#carousel-example-generic" class="right control-carousel hidden-xs" data-slide="next" role="button">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
</section>
-->