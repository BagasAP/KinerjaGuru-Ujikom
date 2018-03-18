      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ url('assets/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        @role('admin')
        
        <li class="header">IDENTITAS</li> 
        <!-- Optionally, you can add icons to the links -->
        <li class="{{Request::is('gurupengajar') ? 'active':''}}"><a href="{{ url('identitas/gurupengajar') }}"><i class="fa fa-users"></i> <span>Guru Pengajar</span></a></li>
        <li class="{{Request::is('guruinti') ? 'active':''}}"><a href="{{ url('identitas/guruinti')}}"><i class="fa fa-users"></i> <span>Guru Inti</span></a></li>
        <li class="{{Request::is('sekolah') ? 'active':''}}"><a href="{{ url('identitas/sekolah')}}"><i class="fa fa-home"></i> <span>Sekolah</span></a></li>
        @endrole
        @role(['admin','member'])
        <li class="header">PENILAIAN</li>
          <li><a href="{{ url('penilaian/penilaianguru')}}"><i class="fa fa-tasks"></i>Penilaian Guru</a>
          <li class="treeview">
              <a href="#"><i class="fa fa-file-text"></i><span>Data Nilai Guru</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('penilaian/perangkatpembelajaran')}}">Perangkat Pembelajaran</a></li>
                <li><a href="{{ url('penilaian/kedisiplinan')}}">Kedisiplinan</a></li>
                <li><a href="{{ url('penilaian/pelayananprima')}}">Pelayanan Prima</a></li>
                <li><a href="{{ url('penilaian/ketuntasannilai')}}">Ketuntasan Nilai</a></li>
              </ul>
            </li>
        </li>

            <li class="header">LAPORAN</li>                     
            <li><a href="{{ url('laporan/rapotakhir') }}"><i class="fa fa-file"></i> <span>Rapot Akhir</span></a></li>
            <li><a href="{{ url('laporan/rekapnilai') }}"><i class="fa fa-file"></i> <span>Rekap Nilai</span></a></li>

            @endrole
            @role('admin')
            <li class="header">SISTEM</li>                     
          <li class="treeview">
              <a href="#"><i class="fa fa-gears"></i><span>Sistem</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('sistem/user')}}">User</a></li>
                <li><a href="{{ url('sistem/role')}}">Role</a></li>
              </ul>
            </li>
            
            @endrole
        

      </ul>