<div id="sidebar" class="users p-chat-user showChat">
    <div class="had-container">
        <div class="p-fixed users-main">
            <div class="user-box">
                <div class="chat-search-box">
                    <a class="back_friendlist">
                        <i class="feather icon-x"></i>
                    </a>
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-friend-list">
                    <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="chat-header">Josephin Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Lary Doe</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                            <div class="live-status bg-success"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alice</div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                        </div>
                    </div>
                    <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                        <a class="media-left" href="#!">
                            <img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                            <div class="live-status bg-default"></div>
                        </a>
                        <div class="media-body">
                            <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="showChat_inner">
    <div class="media chat-inner-header">
        <a class="back_chatBox">
            <i class="feather icon-x"></i> Josephin Doe
        </a>
    </div>
    <div class="main-friend-chat">
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
                <img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
            </a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <div class="media-body chat-menu-reply">
                <div class="">
                    <p class="chat-cont">Ohh! very nice</p>
                </div>
                <p class="chat-time">8:22 a.m.</p>
            </div>
        </div>
        <div class="media chat-messages">
            <a class="media-left photo-table" href="#!">
<img class="media-object img-radius img-radius m-t-5" src="<?=  base_url('files/assets/images/avatar-2.jpg') ?>" alt="Generic placeholder image">
</a>
            <div class="media-body chat-menu-content">
                <div class="">
                    <p class="chat-cont">can you come with me?</p>
                </div>
                <p class="chat-time">8:20 a.m.</p>
            </div>
        </div>
    </div>
    <div class="chat-reply-box">
        <div class="right-icon-control">
            <div class="input-group input-group-button">
                <input type="text" class="form-control" placeholder="Write hear . . ">
                <div class="input-group-append">
                    <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pcoded-main-container">
    <div class="pcoded-wrapper">

        <nav class="pcoded-navbar">
            <div class="nav-list">
                <div class="pcoded-inner-navbar main-menu">

                    <!-- <div class="pcoded-navigation-label">Navigation</div>
<i class="feather icon-home"></i></span>
 -->
                    <ul class="pcoded-item pcoded-left-item">
                    
                        <li class="">
                            <a href="<?= base_url('/admin') ?> " class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-home"></i>
</span>
                                <span class="pcoded-mtext">DashBoard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/review') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Reviews</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/quickname') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Quick Names</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/quickname') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Contact queries</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/adjective') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Add Adjective</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/usernameString') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Add User Name String</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/sysnoyms') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Add Synonyms</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/charactername') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Character Names </span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/pennames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Pen Names</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/bandnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Band Names</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/babynames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Baby Names</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?= base_url('admin/femalenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Female Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/malenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Male Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/nicknames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Nick  Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/catnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Cat Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/usernames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">User Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/heronames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Hero Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/villiannames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Villian Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/couplenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Couple Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/streetnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Street Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/citynames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">City Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/rappernames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Rapper Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/firstnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">First Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/middlenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Middle Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/lastnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Last Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/twinnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Twins Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/piratenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Pirate Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/fantacyname') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Fantacy Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/blognames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Blog Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/foodnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Food Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/housenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">House Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/businessnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Business Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/teamnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Team Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/gamingnames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Gaming Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/titlenames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Title Names</span>
                            </a>
                        </li><li class="">
                            <a href="<?= base_url('admin/countrynames') ?>" class="waves-effect waves-dark">
                                <span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
                                <span class="pcoded-mtext">Country Names</span>
                            </a>
                        </li>
                        
                    </ul>
                    
                </div>
            </div>
        </nav>