


<div id="overlay-content" class="hide-link">
                <h6><i class="fa fa-bar-chart"></i> E-Direct <span style="float:right;">23/07/2024</span></h6>
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-user-alt"></i> My business</a></li>
                    <li><a href="#"><i class="fa fa-play"></i> Add business</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Messages</a></li>
                    <li><hr></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Log Out
                        </a>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>