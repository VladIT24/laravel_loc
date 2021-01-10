<div class="container">
    <h2>Team</h2>
    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing.</h6>
    <div class="team_section clearfix">
        @foreach($peoples as $k => $person)
            <div class="team_area">
                <div class="team_box wow fadeInDown delay-0{{ ($k+1) * 3 }}s">
                    <div class="team_box_shadow"><a href="javascript:void(0)"></a></div>
                    <img src="/assets/img/{{ $person->images }}" alt="">
                    <ul>
                        <li><a href="javascript:void(0)" class="fa fa-twitter"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-facebook"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-pinterest"></a></li>
                        <li><a href="javascript:void(0)" class="fa fa-google-plus"></a></li>
                    </ul>
                </div>
                <h3 class="wow fadeInDown delay-0{{ ($k+1) * 3 }}s">{{ $person->name }}</h3>
                <span class="wow fadeInDown delay-0{{ ($k+1) * 3 }}s">{{ $person->position }}</span>
                <p class="wow fadeInDown delay-0{{ ($k+1) * 3 }}s">{{ $person->text }}</p>
            </div>
        @endforeach

    </div>
</div>
