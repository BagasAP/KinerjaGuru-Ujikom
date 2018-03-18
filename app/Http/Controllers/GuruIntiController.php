<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruInti;
use App\Kelas;
use App\Mapel;
use App\GuruPengajar;
use App\User;
use App\Role;
use Alert;
class GuruIntiController extends Controller
{
    //
    public function index(Request $request)
    {

            $guru = GuruInti::where('nama_guru', 'like', '%'.$request->keyword.'%')
                                    ->orderBy('nama_guru')
                                    ->paginate(6);

            if ($request->ajax()) {

                return view('pages.guruinti.load_data', ['guru' => $guru])->render();  
            }

            return view('pages.guruinti.index')
                    ->with('guru', $guru);

    }

     public function create()
    {
        $kelas = Kelas::all();
        $mapel = Mapel::all();
        $gurupengajar = GuruPengajar::all();
        return view('pages.guruinti.create', compact('kelas','mapel','gurupengajar'));
    }

    public function store(Request $request)
    {
       foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }

            foreach ($request->id_mapel as $index => $value) {
                $datas[$index]= $value;
            }
      $user= new User();
            $user->name = $request->nama_guru;
            $user->email = $request->email;
            $user->password =bcrypt($request->password);
            $user->is_verified = 1;
            $user->save();
            $user->attachRole($request->role_id);
              
      $guru = new GuruInti();
      $guru->id_user = $user->id;
      $guru->nip = $request->nip;
      $guru->nama_guru = $request->nama_guru;
      $guru->jenis_kelamin = $request->jenis_kelamin;
      $guru->status = $request->status;
      $guru->tempat_lahir = $request->tempat_lahir;
      $guru->tgl_lahir = $request->tgl_lahir;
      $guru->foto = $request->old_pic;
      $guru->pangkat = $request->pangkat;
      $guru->tgl_mulai_kerja = $request->tgl_mulai_kerja;
      $guru->alamat = $request->alamat;
      $guru->agama = $request->agama;
      $guru->telepon = $request->telepon;
      $guru->pendidikan_terakhir = $request->pendidikan_terakhir;
      $guru->jabatan_fungisional = $request->jabatan_fungisional;
      $guru->nuptk = $request->nuptk;
      $guru->kelas = $data;
      $guru->mapel = $datas;
      $guru->jumlah_kd = $request->jumlah_kd;
      $guru->gurupengajar_id = $request->gurupengajar_id;
      $guru->save();

      return redirect()->route('guruinti.index')->with([Alert::success('Berhasil Menyimpan Data Guru', 'Data Tersimpan !')]);
    }

    public function edit($id)
    {
      $guru = GuruInti::find($id);
      $kelas = GuruPengajar::findOrFail($id)->kelas;
      $mapel = GuruPengajar::findOrFail($id)->mapel;
      return view('pages.guruinti.edit', compact('guru','mapel','kelas'));
    }

    public function update(Request $request, $id)
    {

      foreach ($request->id_kelas as $index => $value) {
                $data[$index]= $value;
            }

            foreach ($request->id_mapel as $index => $value) {
                $datas[$index]= $value;
            }
              
      $guru = GuruInti::find($id);
      $guru->nip = $request->nip;
      $guru->nama_guru = $request->nama_guru;
      $guru->jenis_kelamin = $request->jenis_kelamin;
      $guru->status = $request->status;
      $guru->tempat_lahir = $request->tempat_lahir;
      $guru->tgl_lahir = $request->tgl_lahir;
      $guru->foto = $request->old_pic;
      $guru->pangkat = $request->pangkat;
      $guru->tgl_mulai_kerja = $request->tgl_mulai_kerja;
      $guru->alamat = $request->alamat;
      $guru->agama = $request->agama;
      $guru->telepon = $request->telepon;
      $guru->pendidikan_terakhir = $request->pendidikan_terakhir;
      $guru->jabatan_fungisional = $request->jabatan_fungisional;
      $guru->nuptk = $request->nuptk;
      $guru->kelas= $data;
      $guru->mapel = $datas;
      $guru->jumlah_kd = $request->jumlah_kd;
      $guru->gurupengajar_id = $request->gurupengajar_id;
      $guru->save();

      return redirect()->route('guruinti.index')->with([Alert::success('Berhasil Menyimpan Data Guru', 'Data Tersimpan !')]);
    }

    public function show($id)
    {
    $guru = GuruInti::find($id);
    $kelas = GuruInti::findOrFail($id)->kelas;
    $mapel = GuruInti::findOrFail($id)->mapel;
    // $selected = $post->Tag->pluck('id')->toArray();
    // dd($guru);
    return view('pages.guruinti.show', compact('guru','kelas','mapel')); 
    }

    public function destroy($id)
    {
      $guru = GuruInti::find($id);

      if (file_exists(public_path('uploads/images'.$guru->foto)) && !empty($guru->foto))
       {
        unlink(public_path('uploads/images'.$guru->foto));
       }

        $guru->delete();

        return redirect()->route('guruinti.index')->with([Alert::success('Berhasil Menghapus Data Guru', 'Data Terhapus !')]);
    }
}
