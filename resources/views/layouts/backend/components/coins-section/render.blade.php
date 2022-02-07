<section class="MYID-coin section-padding panel-myid">
    <div class="container">
        <div class="row">
            @foreach($value as $item)
            <div class="col-md-6 col-lg-4 common-col">
                <div class="coin-card text-center @if($item->value[0]->option == '2') in-progress @endif">
                    @if($item->value[0]->option == '2')
                    <div class="coin-note">FINAL MYID PRE-SALE</div>
                    @endif
                    <img src="/storage/uploads/{{ $item->value[0]->image }}" alt="">
                    <h2>{{ $item->value[0]->title }}</h2>
                    {!! $item->value[0]->description !!}
                    <div class="section-button text-center">
                        @if($item->value[0]->option == '1')
                        <a href="/how-to-buy"
                            class="common-btn hvr-buzz-out shadow-border">{{ $item->value[0]->button }}</a>
                        @endif

                        @if($item->value[0]->option == '2')
                        <a href="#wallet-section" class="common-btn shadow-border" style="cursor: not-allowed; background-color: #aaa;box-shadow: none; display: block;">PRE-SALE ENDED</a>
                        @endif

                        @if($item->value[0]->option == '3')
                        <a href="javascript:void(0)" class="common-btn hvr-buzz-out shadow-border">Coming Soon</a>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>