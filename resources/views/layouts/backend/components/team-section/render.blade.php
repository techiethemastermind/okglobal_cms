<?php $component_id = substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 8); ?>
<section class="team-section">
    <div class="container">
        <div class="senior-team" id="team">
            <div class="senior-header text-center">
                <h1>{{ $value[0]->title }}</h1>
            </div>
            <div class="row">
                @foreach($value[0]->value as $team)
                <div class="col-lg-6">
                    <div class="senior-item">
                        <div class="senior-info">
                            <div class="senior-img">
                                <img src="/storage/uploads/{{ $team->image }}" alt="">
                            </div>
                            <div class="senior-name">
                                <h1>{{ $team->name }}</h1>
                                <p>{{ $team->bio }}</p>
                            </div>
                        </div>
                        <div class="senior-text">
                            <p>{!! $team->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>