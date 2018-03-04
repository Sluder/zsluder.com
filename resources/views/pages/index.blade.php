@extends('layouts.base')

@section('content')
    <div class="index">
        {{-- Header --}}
        <div class="container-fluid">
            <div class="row" id="header">
                <h1 class="header-text">Hi there, I'm <span class="accent">Zachary Sluder</span></h1>
                <p class="helper-text">Specializing in Application Development & Reverse Engineering</p>
            </div>
            <div class="row block">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-3 block-text">
                            <a href="http://www.github.com/Sluder" target="_blank">
                                <i class="fa fa-github primary"></i>
                                GitHub.com/Sluder
                            </a>
                        </div>
                        <div class="col-md-3 block-text">
                            <a href="https://www.linkedin.com/in/sluder/" target="_blank">
                                <i class="fa fa-linkedin primary"></i>
                                LinkedIn
                            </a>
                        </div>
                        <div class="col-md-3 block-text">
                            <a href="mailto:{{ env('MAIL_USERNAME') }}">
                                <i class="fa fa-envelope-open primary"></i>
                                Zachary.Sluder@gmail.com
                            </a>
                        </div>
                        <div class="col-md-3 block-text">
                            <a href="https://www.facebook.com/SluderZachary" target="_blank">
                                <i class="fa fa-facebook primary"></i>
                                Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Skills rows --}}
        <div class="container-fluid skills">
            <div class="row">
                <div class="col-md-4">
                    <p class="icon-holder">
                        <i class="fa fa-terminal"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent

    <script type="text/javascript" src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            particlesJS("header", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#FF5722"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        },
                        "image": {
                            "width": 100,
                            "height": 100
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 2,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#ffffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 2,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "grab"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 150,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        };
    </script>
@endsection