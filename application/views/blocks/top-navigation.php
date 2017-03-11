<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button> <a class="navbar-brand site-header" href="#"><?php
                    echo ucfirst($this->uri->segment(1));
                    if ($this->uri->segment(2)) {
                        echo " > " . ucfirst($this->uri->segment(2));
                    }
                    ?></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">murtaza.dev@gmail.com</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="#">Log out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="row clearfix">