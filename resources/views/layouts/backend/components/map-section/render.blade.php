@push('after-styles')
    <style>
        #my_dataviz image {
            cursor: pointer;
        }
        .map-tooltip {
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 1px 1px 5px 0px black;
            margin-top: -55px;
        }
        .map-tooltip:before {
            content: ' ';
            position: absolute;
            bottom: -9px;
            left: 15px;
            width: 0;
            height: 0;
            border-left: 4px solid transparent;
            border-right: 8px solid transparent;
            border-top: 8px solid #333;
        }
        /* svg#my_dataviz {
            overflow: overlay;
        } */
        .map-left .header {
            padding-bottom: 15px;
        }
        .map-left .header .map-title {
            text-transform: uppercase;
            text-align: center;
            line-height: 1.5;
        }
        .map-left .content {
            height: calc(100% - 80px);
        }
        .map-left .content img {
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
        }
        .map-right > div {
            background-color: #070707;
        }
        .map-right .header .map-title {
            text-transform: uppercase;
            text-align: center;
            padding: 25px 0 15px 0;
            color: #f5f5f5;
        }

        .interactive-map .display-img,
        .interactive-map .list-banner,
        .interactive-map .list-banner .owl-stage-outer,
        .interactive-map .list-banner .owl-stage,
        .interactive-map .list-banner .owl-item,
        .interactive-map .list-banner li, 
        .interactive-map .list-banner li .banner-base {
            height: 100%;
            border-radius: 5px;
        }

        .interactive-map .list-banner.owl-carousel .owl-dots {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            position: absolute;
            bottom: 5%;
            width: 100%;
        }
        .interactive-map .list-banner.owl-carousel .owl-dots .owl-dot.active {
            background: #e60517;
        }
        .interactive-map .list-banner.owl-carousel .owl-dots .owl-dot {
            height: 15px;
            width: 15px;
            background: #fff;
            border-radius: 50%;
            margin: 0 5px;
        }
    </style>
@endpush

<section class="{{ $value[0]->class }}">
    <div class="container" >

        <!-- Load d3.js -->
        <script src="//d3js.org/d3.v4.js"></script>
        <script src="//d3js.org/d3-scale-chromatic.v1.min.js"></script>
        <script src="//d3js.org/d3-geo-projection.v2.min.js"></script>

        <div class="row">
            <div class="col-md-4 map-left">
                <div class="header">
                    <h4 class="map-title"><span>First</span> International Service Center</h4>
                    <h4 class="map-title" id="country_name">Singapore</h4>
                </div>
                <div class="content" id="country_images">
                    <div class="img-sgp display-img">
                        <ul class="list-banner owl-carousel">
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/singapore-1.jpg');">
                            </li>
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/singapore-2.jpg');">
                            </li>
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/singapore-3.jpg');">
                            </li>
                        </ul>
                    </div>
                    <div class="img-usa display-img d-none">
                        <ul class="list-banner owl-carousel">
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/coming-soon-usa.jpg');">
                            </li>
                        </ul>
                    </div>
                    <div class="img-kor display-img d-none">
                        <ul class="list-banner owl-carousel">
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/coming-soon-kor.jpg');">
                            </li>
                        </ul>
                    </div>
                    <div class="img-jpy display-img d-none">
                        <ul class="list-banner owl-carousel">
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/coming-soon-jpy.jpg');">
                            </li>
                        </ul>
                    </div>
                    <div class="img-deu display-img d-none">
                        <ul class="list-banner owl-carousel">
                            <li class="item">
                                <div class="banner-base rel bg-common"
                                    style="background-image: url('/assets/img/map/coming-soon-deu.jpg');">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8 map-right">
                <div class="h-100" style="border-radius: 5px;">
                    <div class="header">
                        <h4 class="map-title">LOCATION OF INTERNATIONAL SERVICE CENTERS <br> OPENING 4TH QUARTER 2021.</h4>
                    </div>
                    <div class="content position-relative" id="itr_wrap">
                        <svg id="my_dataviz" width="100%"></svg>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@push('after-scripts')

<script>

    var countries = [
        {
            "name": "Singapore", 
            "images": ["singapore-1.jpg", "singapore-2.jpg", "singapore-3.jpg"], 
            "lat": 1.35, 
            "lon": 103.82,
            "code": "sgp"
        },
        {
            "name": "United States", 
            "images": ["coming-soon"], 
            "lat": 37.09, 
            "lon": -95.71,
            "code": "usa"
        },
        {
            "name":"Korea", 
            "image": ["coming-soon.jpg"], 
            "lat":35.90, 
            "lon":127.76,
            "code": "kor"
        },
        {
            "name": "Japan", 
            "image": ["coming-soon.jpg"], 
            "lat": 36.20, 
            "lon": 138.25,
            "code": "jpy"
        },
        {
            "name": "Germany", 
            "image": ["coming-soon.jpg"], 
            "lat": 51.16, 
            "lon": 10.45,
            "code": "deu"
        }
    ];

    var tooltip = d3.select("#itr_wrap")
        .append("div")
        .attr("id", "mytooltip")
        .attr("class", "map-tooltip")
        .style("position", "absolute")
        .style("z-index", "10")
        .style("visibility", "hidden")

    var width = $("#my_dataviz").width();
    var height = parseInt(( width * 2 ) / 3);
    $("#my_dataviz").attr('height', height);

    var scale = parseInt(( width / 600 ) * 100);

    var map_left_header_height = $('.interactive-map .map-left .header').height() + 15;
    console.log(map_left_header_height);
    // var map_left_cont_header = height - map_left_header_height;
    $('#country_images').css('height', 'calc(100% - ' + map_left_header_height + 'px)');

    if($(document).width() < 500) {
        $('#country_images').css('height', height + 'px');
        $('#country_images').addClass('mb-4');
    }

    // The svg
    var svg = d3.select("#my_dataviz"),
        width = width,
        height = +svg.attr("height");

    svg.append("rect")
        .attr("width", "100%")
        .attr("height", "100%")
        .attr("fill", "#070707");

    // Map and projection
    var path = d3.geoPath();
    var projection = d3.geoMercator()
        .scale(scale)
        .center([0, 45])
        .translate([width / 2, height / 2]);

    // Data and color scale
    var data = d3.map();
    var colorScale = d3.scaleThreshold()
        .domain([100000, 1000000, 10000000, 30000000, 100000000, 500000000])
        .range(d3.schemeDark2[7]);

    // Load external data and boot
    d3.queue()
        .defer(d3.json, "https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/world.geojson")
        .defer(d3.csv,
            "https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/world_population.csv",
            function (d) {
                data.set(d.code, +d.pop);
            })
        .await(ready);

    function ready(error, topo) {

        // Draw the map
        svg.append("g")
            .selectAll("path")
            .data(topo.features)
            .enter()
            .append("path")
            // draw each country
            .attr("d", d3.geoPath()
                .projection(projection)
            )
            // set the color of each country
            .attr("fill", '#f5f5f5');

        countries.forEach((country, idx) => {
            svg.append('image')
                .attr('xlink:href', '/assets/img/illustrations/pin-1.svg')
                .attr('width', 40)
                .attr('height', 40)
                .attr('image', country.image)
                .attr('name', country.name)
                .attr('code', country.code)
                .attr('x', function() {
                    return projection([country.lon, country.lat])[0] - 20;
                })
                .attr("y", function() {
                    return projection([country.lon, country.lat])[1] - 40;
                })
                .on('mouseover', function(d) {
                    var x = parseInt(d3.select(this).attr('x'));
                    var y = parseInt(d3.select(this).attr('y'));
                    var name = d3.select(this).attr('name');

                    d3.select("#mytooltip")
                        .style("visibility", "visible")
                        .style("left", x + "px")
                        .style("top", y + "px")
                        .text(name)

                    d3.select(this)
                        .transition()
                        // .attr('width', 50)
                        // .attr('height', 50)
                        .attr("transform", "translate(0, -5)")
                })
                .on('mouseout',function() {
                    d3.select("#mytooltip")
                        .style("visibility", "hidden")

                    d3.select(this)
                        .transition()
                        // .attr('width', 40)
                        // .attr('height', 40)
                        .attr("transform", "translate(0, 0)")
                })
                .on("click", function() {
                    $('#country_name').text(d3.select(this).attr('name'));
                    $('#country_images').find('.display-img').addClass('d-none');
                    $('#country_images').find('.img-' + d3.select(this).attr('code')).removeClass('d-none');
                    // $('#img_service_center').attr('src', '/img/' + d3.select(this).attr('image'));
                    if(d3.select(this).attr('code') != 'sgp') {
                        $('.interactive-map .map-left .map-title > span').addClass('d-none');
                    } else {
                        $('.interactive-map .map-left .map-title > span').removeClass('d-none');
                    }
                })
        })
    }
</script>

@endpush
