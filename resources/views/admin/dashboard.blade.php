@extends('admin.index')

@section('content')

<div class="recent-grid">
    <div class="projects">

        <div class="card">

            <div class="card-header">
                <h3>Recent projects</h3>
                <button>see all <span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <td>Project Titles</td>
                                <td>Department</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status pink"></span> passed</td>
                            </tr>

                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status purple"></span> review</td>
                            </tr>

                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status orange"></span> pending</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

    <div class="customers">

        <div class="card">
            <div class="card-header">
                <h3>Customers</h3>
                <button>see all<span class="las la-arrow-right"></span></button>
            </div>

            <div class="card-body">

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>


                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection