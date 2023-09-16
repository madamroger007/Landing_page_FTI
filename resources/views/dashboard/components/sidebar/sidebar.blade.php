<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="{{ set_active(['setting/page']) }}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>


                <li class="submenu">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i>
                        <span>Postingan</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="fees-collections.html">Teknologi</a></li>
                        <li><a href="expenses.html">Kegiatan</a></li>
                        <li><a href="salary.html">Bisnis</a></li>
                        <li><a href="add-fees-collection.html">Pekerjaan</a></li>
                        <li><a href="add-expenses.html">Pendidikan</a></li>
                        <li><a href="add-salary.html">Berita</a></li>
                    </ul>
                </li>
                <li>
                    <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>About</span></a>
                </li>

                <li>
                    <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Team</span></a>
                </li>
                <li>
                    <a href="library.html"><i class="fas fa-book"></i> <span>Gallery</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
