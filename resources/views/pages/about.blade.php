@extends('layouts.main')

@section('container')
    <!-- Page Content-->
    <div class="container px-4 my-5">
        <div class="text-center mb-5 container-md">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Experience Section-->
                <section>
                    <div class="d-flex flex-wrap justify-content-between mb-4">
                        <h2 class="text-primary fw-bolder mb-2 flex-grow-1" >Experience</h2>
                        <!-- Download resume button-->
                        <!-- Note: Set the link href target to a PDF file within your project-->

                        <a class="btn btn-primary px-3 py-3" style="font-size: 0.8rem" href="#!">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Download Resume
                        </a>

                    </div>

                    @foreach ($experience as $exp)
                        <!-- Experience Card 1-->
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-4">
                                <div class="row align-items-center gx-5" style="font-size: 0.9rem">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <div class="text-primary fw-bolder mb-2">{{ $exp['time'] }}</div>
                                            <div class="small fw-bolder">{{ $exp['job'] }}</div>
                                            <div class="small text-muted">{{ $exp['company'] }}</div>
                                            <div class="small text-muted">{{ $exp['address'] }}</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>{{ $exp["body"] }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                <!-- Education Section-->
                <section>
                    <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                    @foreach ($education as $edu )


                    <!-- Education Card -->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <div class="row align-items-center gx-5" style="font-size: 0.9rem">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-secondary fw-bolder mb-2">{{ $edu['time'] }}</div>
                                        <div class="mb-2">
                                            <div class="small fw-bolder">{{ $edu["school"] }}</div>
                                            <div class="small text-muted">{{ $edu["address"] }}</div>
                                        </div>
                                        <div class="fst-italic">
                                            <div class="small text-muted">{{ $edu["major"] }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div>{{ $edu["body"] }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </section>
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <section>
                    <!-- Skillset Card-->
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-4">
                            <!-- Professional skills list-->
                            <div class="mb-5">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2 ">
                                        <i class="bi bi-tools my-2 mx-2" style="font-size: 1.2rem"></i></div>
                                    <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Professional
                                            Skills</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">


                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Web Development
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Network Security
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">User Interface
                                            Design</div>
                                    </div>
                                </div>
                            </div>
                            <!-- Languages list-->
                            <div class="mb-0">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-2 ">
                                        <i class="bi bi-code-slash my-2 mx-2"></i></div>
                                    <h3 class="fw-bolder mb-0" style="font-size: 1.2rem"><span class="text-gradient d-inline">Languages</span></h3>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3 mb-4">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-md-3">
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div>
                                    </div>
                                    <div class="col mb-4 mb-md-0">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">PHP</div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
